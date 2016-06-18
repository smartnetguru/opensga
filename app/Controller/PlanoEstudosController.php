<?php

/**
 * Controller para plano de estudos
 *
 * @copyright       Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link            http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package         opensga
 * @subpackage      opensga.core.pedagogia
 * @version         OpenSGA v 0.5.0
 * @since           OpenSGA v 0.1.0
 *
 * @property PlanoEstudo $PlanoEstudo
 */
class PlanoEstudosController extends AppController
{

    var $name = 'PlanoEstudos';

    public function actualiza_creditos()
    {

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->PlanoEstudo->DisciplinaPlanoEstudo->id = $this->request->data['pk'];
            $this->PlanoEstudo->DisciplinaPlanoEstudo->set($this->request->data['name'],
                $this->request->data['value']);
            $this->PlanoEstudo->DisciplinaPlanoEstudo->save();

            $this->autoRender = false;
        }
    }

    function adicionar_disciplinas($planoEstudoId)
    {
        $this->PlanoEstudo->contain([
            'Curso',
        ]);
        $planoEstudo = $this->PlanoEstudo->findById($planoEstudoId);
        $planoEstudo['PlanoEstudo']['total_creditos'] = $this->PlanoEstudo->getTotalCreditos($planoEstudoId);
        if (empty($planoEstudo)) {
            throw new NotFoundException(__('Plano de Estudos Nao encontrado'));
        }
        if ($this->request->is('post')) {

            $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'] = $planoEstudoId;
            //Calcula o Semestre Sequencial
            if ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] == 1) {
                $this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] = $this->request->data['DisciplinaPlanoEstudo']['ano_curricular'] * ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] + 1) - 1;
            }
            if ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] == 2) {
                $this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] = $this->request->data['DisciplinaPlanoEstudo']['ano_curricular'] * $this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'];
            }

            $this->PlanoEstudo->DisciplinaPlanoEstudo->create();
            if ($this->PlanoEstudo->DisciplinaPlanoEstudo->save($this->request->data)) {
                if ($this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] > 1) {
                    $this->Session->setFlash('Dado Registado com Sucesso.Seleccione as Precedencias desta disciplina, Ou clique em voltar se nao tiver precedencias',
                        'default', ['class' => 'alert success']);
                    $this->redirect([
                        'action' => 'adicionar_precedencias',
                        $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'],
                        $this->request->data['DisciplinaPlanoEstudo']['disciplina_id'],
                    ]);
                } else {
                    $this->Session->setFlash('Dado Registado com Sucesso.Adicione Mais disciplinas.', 'default',
                        ['class' => 'alert success']);
                    $this->redirect([
                        'action' => 'adicionar_disciplinas',
                        $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'],
                    ]);
                }
            } else {
                $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'default',
                    ['class' => 'alert error']);
            }
        }

        $this->request->data = $planoEstudo;

        $disciplinasAdicionadas = $this->PlanoEstudo->getAllDisciplinas($planoEstudoId);
        $disciplinasExcluir = Hash::extract($disciplinasAdicionadas, '{n}.Disciplina.id');

        $disciplinas = $this->PlanoEstudo->DisciplinaPlanoEstudo->Disciplina->find('list',
            ['conditions' => ['NOT' => ['id' => $disciplinasExcluir]], 'order' => ['name ASC']]);
        $anos = [];
        for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['duracao']; $i++) {
            $anos[$i] = $i;
        }
        $semestres = [];
        for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['semestres_ano']; $i++) {
            $semestres[$i] = $i;
        }

        $this->set('planoId', $planoEstudoId);
        $this->set(compact('disciplinasAdicionadas', 'anos', 'semestres', 'disciplinas'));
    }

    /**
     * Cria um novo Plano de Estudos para uma Unidade Organica
     * Depois direcciona para pagina de adicionar disciplinas
     */
    public function adicionar_plano_estudo()
    {
        if ($this->request->is('post')) {
            $this->request->data['PlanoEstudo']['ano_criacao'] = $this->request->data['PlanoEstudo']['ano_criacao']['year'];
            $curso = $this->PlanoEstudo->Curso->findById($this->request->data['PlanoEstudo']['curso_id']);
            $this->request->data['PlanoEstudo']['name'] = $curso['Curso']['name'] . " - " . $this->request->data['PlanoEstudo']['ano_criacao'];

            $this->PlanoEstudo->create();
            if ($this->PlanoEstudo->save($this->request->data)) {
                $this->Session->setFlash('Adicione as  disciplinas deste plano de estudos. ', 'default',
                    ['class' => 'alert alert-success']);
                $this->redirect(['action' => 'adicionar_disciplinas', $this->PlanoEstudo->id]);
            } else {
                $planoEstudoExiste = $this->PlanoEstudo->find('first', [
                    'conditions' => [
                        'curso_id' => $this->request->data['PlanoEstudo']['curso_id'],
                        'ano_criacao' => $this->request->data['PlanoEstudo']['ano_criacao'],
                    ],
                ]);

                if (!empty($planoEstudoExiste)) {
                    $this->redirect(['action' => 'adicionar_disciplinas', $planoEstudoExiste['PlanoEstudo']['id']]);
                }
                $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'default',
                    ['class' => 'alert alert-success']);
            }
        }
        $cursos = $this->PlanoEstudo->Curso->find('list', [
            // 'conditions' => ['Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id')],
            'order' => 'Curso.name ASC',
        ]);
        $this->set(compact('cursos'));
    }

    /**
     * Adiciona disciplinas precedentes.
     *
     * @todo Precedencias Aconselhadas nao estao a funcionar :(
     * @throws  NotFoundException,MethodNotAllowedException
     */
    public function adicionar_precedencias($planoEstudoId = null, $disciplinaId = null)
    {
        $disciplinaPlanoEstudo = $this->PlanoEstudo->DisciplinaPlanoEstudo->findByPlanoEstudoIdAndDisciplinaId($planoEstudoId,
            $disciplinaId);
        if (empty($disciplinaPlanoEstudo)) {
            throw new NotFoundException(__('Esta disciplina nao pertence a este plano de Estudos'));
        }
        $this->PlanoEstudo->contain([
            'Curso',
        ]);
        $planoEstudo = $this->PlanoEstudo->find('first', [
            'conditions' => [
                //'Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id'),
                'PlanoEstudo.id' => $planoEstudoId,
            ],
        ]);
        if (empty($planoEstudo)) {
            throw new MethodNotAllowedException(__('Nao possui permissao para aceder a pagina anterior'));
        }

        if ($this->request->is('post')) {

            $this->request->data['DisciplinaPlanoEstudo']['id'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['id'];
            if ($this->PlanoEstudo->cadastraPrecedencias($this->request->data)) {
                $this->Session->setFlash(__('Dado Registado com Sucesso.Adicione Mais disciplinas.'), 'default',
                    ['class' => 'alert success']);
                $this->redirect([
                    'action' => 'adicionar_disciplinas',
                    $this->data['PlanoEstudo']['plano_estudo_id'],
                ]);
            } else {
                $this->Session->setFlash(__('Problemas ao Gravar Dados. Tente Novamente'), 'default',
                    ['class' => 'alert error']);
            }
        }

        $precedencias = $this->PlanoEstudo->getAllDisciplinasForPrecedencia($planoEstudoId, $disciplinaId);
        $this->set(compact('precedencias', 'planoEstudoId', 'disciplinaId'));
    }

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Security->requirePost('faculdade_desactivar_plano_estudos', 'faculdade_remover_plano_estudos');
    }

    public function editar_disciplina($disciplinaPlanoId)
    {

    }

    function editar_plano_estudo($id = null)
    {
        $this->PlanoEstudo->id = $id;
        if (!$this->PlanoEstudo->exists()) {
            throw new NotFoundException(__('Plano de Estudos Invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->PlanoEstudo->save($this->request->data)) {
                $this->Session->setFlash('Dados Registados com Sucesso', 'flasherror');
                $this->redirect(['action' => 'adicionar_disciplinas', $id]);
            } else {
                $this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
            }
        }
        if (empty($this->request->data)) {
            $this->data = $this->PlanoEstudo->read(null, $id);
        }
        $cursos = $this->PlanoEstudo->Curso->find('list');
        $this->set(compact('cursos'));
    }

    function faculdade_adicionar_disciplinas($planoEstudoId)
    {
        $this->PlanoEstudo->contain([
            'Curso',
        ]);
        $planoEstudo = $this->PlanoEstudo->findById($planoEstudoId);
        $planoEstudo['PlanoEstudo']['total_creditos'] = $this->PlanoEstudo->getTotalCreditos($planoEstudoId);
        if (empty($planoEstudo)) {
            throw new NotFoundException(__('Plano de Estudos Nao encontrado'));
        }
        if ($planoEstudo['Curso']['unidade_organica_id'] != $this->Session->read('Auth.User.unidade_organica_id')) {

            throw new MethodNotAllowedException(__('Nao tem permissao para aceder a pagina anterior'));
        }
        if ($this->request->is('post')) {

            $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'] = $planoEstudoId;
            //Calcula o Semestre Sequencial
            if ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] == 1) {
                $this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] = $this->request->data['DisciplinaPlanoEstudo']['ano_curricular'] * ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] + 1) - 1;
            }
            if ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] == 2) {
                $this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] = $this->request->data['DisciplinaPlanoEstudo']['ano_curricular'] * $this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'];
            }

            $this->PlanoEstudo->DisciplinaPlanoEstudo->create();
            if ($this->PlanoEstudo->DisciplinaPlanoEstudo->save($this->request->data)) {
                if ($this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] > 1) {
                    $this->Session->setFlash('Dado Registado com Sucesso.Seleccione as Precedencias desta disciplina, Ou clique em voltar se nao tiver precedencias',
                        'default', ['class' => 'alert success']);
                    $this->redirect([
                        'action' => 'adicionar_precedencias',
                        $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'],
                        $this->request->data['DisciplinaPlanoEstudo']['disciplina_id'],
                    ]);
                } else {
                    $this->Session->setFlash('Dado Registado com Sucesso.Adicione Mais disciplinas.', 'default',
                        ['class' => 'alert success']);
                    $this->redirect([
                        'action' => 'adicionar_disciplinas',
                        $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'],
                    ]);
                }
            } else {
                $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'default',
                    ['class' => 'alert error']);
            }
        }

        $this->request->data = $planoEstudo;

        $disciplinasAdicionadas = $this->PlanoEstudo->getAllDisciplinas($planoEstudoId);
        $disciplinasExcluir = Hash::extract($disciplinasAdicionadas, '{n}.Disciplina.id');

        $disciplinas = $this->PlanoEstudo->DisciplinaPlanoEstudo->Disciplina->find('list',
            ['conditions' => ['NOT' => ['id' => $disciplinasExcluir]], 'order' => ['name ASC']]);
        $anos = [];
        for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['duracao']; $i++) {
            $anos[$i] = $i;
        }
        $semestres = [];
        for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['semestres_ano']; $i++) {
            $semestres[$i] = $i;
        }

        $this->set('planoId', $planoEstudoId);
        $this->set(compact('disciplinasAdicionadas', 'anos', 'semestres', 'disciplinas'));
    }

    /**
     * Cria um novo Plano de Estudos para uma Unidade Organica
     * Depois direcciona para pagina de adicionar disciplinas
     */
    public function faculdade_adicionar_plano_estudo()
    {
        if ($this->request->is('post')) {
            $this->request->data['PlanoEstudo']['ano_criacao'] = $this->request->data['PlanoEstudo']['ano_criacao']['year'];
            $curso = $this->PlanoEstudo->Curso->findById($this->request->data['PlanoEstudo']['curso_id']);
            $this->request->data['PlanoEstudo']['name'] = $curso['Curso']['name'] . " - " . $this->request->data['PlanoEstudo']['ano_criacao'];

            $this->PlanoEstudo->create();
            if ($this->PlanoEstudo->save($this->request->data)) {
                $this->Session->setFlash('Adicione as  disciplinas deste plano de estudos. ', 'default',
                    ['class' => 'alert alert-success']);
                $this->redirect(['action' => 'adicionar_disciplinas', $this->PlanoEstudo->id]);
            } else {
                $planoEstudoExiste = $this->PlanoEstudo->find('first', [
                    'conditions' => [
                        'curso_id',
                        $this->request->data['PlanoEstudo']['curso_id'],
                        'ano_criacao' => $this->request->data['PlanoEstudo']['ano_criacao'],
                    ],
                ]);
                if (!empty($planoEstudoExiste)) {
                    $this->redirect([
                        'actrion' => 'adicionar_disciplinas',
                        $planoEstudoExiste['PlanoEstudo']['id'],
                    ]);
                }
                $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'default',
                    ['class' => 'alert alert-success']);
            }
        }
        $cursos = $this->PlanoEstudo->Curso->find('list', [
            'conditions' => ['Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id')],
            'order' => 'Curso.name ASC',
        ]);
        $this->set(compact('cursos'));
    }

    /**
     * Adiciona disciplinas precedentes.
     *
     * @todo Precedencias Aconselhadas nao estao a funcionar :(
     * @throws  NotFoundException,MethodNotAllowedException
     */
    public function faculdade_adicionar_precedencias($planoEstudoId = null, $disciplinaId = null)
    {
        $disciplinaPlanoEstudo = $this->PlanoEstudo->DisciplinaPlanoEstudo->findByPlanoEstudoIdAndDisciplinaId($planoEstudoId,
            $disciplinaId);
        if (empty($disciplinaPlanoEstudo)) {
            throw new NotFoundException(__('Esta disciplina nao pertence a este plano de Estudos'));
        }
        $this->PlanoEstudo->contain([
            'Curso',
        ]);
        $planoEstudo = $this->PlanoEstudo->find('first', [
            'conditions' => [
                'Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id'),
                'PlanoEstudo.id' => $planoEstudoId,
            ],
        ]);
        if (empty($planoEstudo)) {
            throw new MethodNotAllowedException(__('Nao possui permissao para aceder a pagina anterior'));
        }

        if ($this->request->is('post')) {

            $this->request->data['DisciplinaPlanoEstudo']['id'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['id'];
            if ($this->PlanoEstudo->cadastraPrecedencias($this->request->data)) {
                $this->Session->setFlash(__('Dado Registado com Sucesso.Adicione Mais disciplinas.'), 'default',
                    ['class' => 'alert success']);
                $this->redirect([
                    'action' => 'adicionar_disciplinas',
                    $this->data['PlanoEstudo']['plano_estudo_id'],
                ]);
            } else {
                $this->Session->setFlash(__('Problemas ao Gravar Dados. Tente Novamente'), 'default',
                    ['class' => 'alert error']);
            }
        }

        $precedencias = $this->PlanoEstudo->getAllDisciplinasForPrecedencia($planoEstudoId, $disciplinaId);
        $this->set(compact('precedencias', 'planoEstudoId', 'disciplinaId'));
    }

    /**
     * Desactiva um plano de Estudos
     *
     * Para desactivar um plano de Estudos, ele não deve ter aluno activo.
     * @param Int $planoEstudoId
     */
    public function faculdade_desactivar_plano_estudo(int $planoEstudoId)
    {
        if ($this->PlanoEstudo->desactivaPlanoEstudo($planoEstudoId) === true) {
            $this->Flash->success('Plano de Estudos Desactivado com sucesso');
            $this->redirect($this->referer('/'));
        } else {
            $this->Flash->error('Este Plano de Estudos não pode ser desactivado porque tem alunos activos');
            $this->redirect($this->referer('/'));
        }
    }

    /**
     * Edita uma disciplina dentro de um plano de Estudos
     *
     * @param $disciplinaPlanoId
     *
     * @throws \Exception
     *
     * @todo verificar a questao do total dos creditos
     */
    public function faculdade_editar_disciplina($disciplinaPlanoId)
    {

        if ($this->request->is('post')) {
            if ($this->PlanoEstudo->DisciplinaPlanoEstudo->save($this->request->data)) {
                $this->Flash->success('Disciplina Editada com sucesso');


            } else {
                $this->Flash->error('Problemas ao editar disciplina');
            }

        }

        $disciplinaPlanoEstudo = $this->PlanoEstudo->DisciplinaPlanoEstudo->findById($disciplinaPlanoId);
        $this->PlanoEstudo->contain([
            'Curso',
        ]);
        $planoEstudo = $this->PlanoEstudo->findById($disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['plano_estudo_id']);
        $planoEstudo['PlanoEstudo']['total_creditos'] = $this->PlanoEstudo->getTotalCreditos($disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['plano_estudo_id']);

        $this->request->data = $planoEstudo;


        //$disciplinasAdicionadas = $this->PlanoEstudo->getAllDisciplinas($disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['plano_estudo_id']);
        //$disciplinasExcluir = Hash::extract($disciplinasAdicionadas, '{n}.Disciplina.id');

        $disciplinas = $this->PlanoEstudo->DisciplinaPlanoEstudo->Disciplina->find('list',
            ['conditions' => [], 'order' => ['name ASC']]);
        $anos = [];
        for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['duracao']; $i++) {
            $anos[$i] = $i;
        }
        $semestres = [];
        for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['semestres_ano']; $i++) {
            $semestres[$i] = $i;
        }


        $this->set('disciplinaPlanoId', $disciplinaPlanoId);
        $this->set('planoId', $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['plano_estudo_id']);
        $this->set(compact('disciplinasAdicionadas', 'anos', 'semestres', 'disciplinas', 'disciplinaPlanoEstudo'));
    }

    /**
     * @param int|null $planoEstudoId
     *
     * @throws \Exception
     * @todo Verificar se o Plano de Estudos pode ser editado, de acordo com as condicoes
     */
    function faculdade_editar_plano_estudo(int $planoEstudoId = null)
    {
        $this->PlanoEstudo->id = $planoEstudoId;
        if (!$this->PlanoEstudo->exists()) {
            throw new NotFoundException(__('Plano de Estudos Invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            if ($this->PlanoEstudo->save($this->request->data)) {
                $this->Flash->success('Dados Registados com Sucesso');
                $this->redirect(['action' => 'adicionar_disciplinas', $planoEstudoId]);
            } else {
                $this->Flash->error('Erro ao editar dados. Por favor tente de novo.');
            }
        }
        if (empty($this->request->data)) {
            $this->data = $this->PlanoEstudo->read(null, $planoEstudoId);
        }
        $cursos = $this->PlanoEstudo->Curso->find('list');
        $this->set(compact('cursos'));
    }


    function faculdade_index()
    {

        $this->paginate = [
            'contain' => [
                'Curso',
                'EstadoObjecto',
            ],
            'conditions' => [
                'Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id'),
                'OR' => [
                    'PlanoEstudo.estado_objecto_id is null',
                    'PlanoEstudo.estado_objecto_id' => 1,
                ],
            ],
            'order' => 'PlanoEstudo.ano_criacao DESC',
        ];
        $this->set('planoEstudos', $this->paginate('PlanoEstudo'));
    }

    public function faculdade_remover_disciplina($disciplinaPlanoId)
    {

        if (!$this->request->is('post')) {
            throw new \Aws\S3\Exception\MethodNotAllowedException('Tentou aceder esta funcao de forma incorrecta');
        }
        $this->PlanoEstudo->DisciplinaPlanoEstudo->id = $disciplinaPlanoId;
        if (!$this->PlanoEstudo->DisciplinaPlanoEstudo->exists()) {
            throw new \Cake\Network\Exception\NotFoundException('Disciplina não Encontrada');
        }
        if ($this->PlanoEstudo->removeDisciplina($disciplinaPlanoId)) {
            $this->Flash->success('Disciplina Removida com Sucesso');
            $this->redirect($this->referer());
        } else {
            $this->Flash->error('Erro ao tentar remover a disciplina. Favor tentar novamente');
        }

    }

    public function faculdade_remover_plano_estudo()
    {

    }

    function faculdade_ver_plano_estudo($id = null)
    {
        App::Import('Model', 'DisciplinaPlanoEstudo');
        App::Import('Model', 'Disciplina');
        //App::Import('Model','Logmv');
        //$logmv =new Logmv;
        $planoestudoanos = new DisciplinaPlanoEstudo;
        $disciplina = new Disciplina;

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(['action' => 'index']);
        }
        $this->set('planoestudo', $this->PlanoEstudo->read(null, $id));
        if (empty($this->data)) {
            $this->data = $this->PlanoEstudo->read(null, $id);
            //var_dump($this->data);
            ////////$logmv->logview(5,$this->Session->read('Auth.User.id'),$this->data["PlanoEstudo"]["id"],$this->data["PlanoEstudo"]["name"]);
        }

        $disciplinas = $this->PlanoEstudo->getAllDisciplinasByPlanoEstudo($id);


        $disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($id, 1, 1);
        $this->set('pdisciplina', $disciplinas_precedencia);
        $this->set('plano_id', $id);
        $cursos = $this->PlanoEstudo->Curso->find('list');
        $this->set(compact('cursos', 'disciplinas', 'anos', 'semestres', 'disciplinas', 'pobrigatorias',
            'popcionais'));
    }


    function index()
    {


        $conditions = [];
        $conditionsCurso = [];

        $unidadeOrganicaId = $this->request->query('unidade_organica_id');
        $cursoId = $this->request->query('curso_id');
        $anoCriacao = $this->request->query('ano_criacao');
        if (!empty($unidadeOrganicaId)) {
            $conditions['Curso.unidade_organica_id'] = $unidadeOrganicaId;
            $conditionsCurso['unidade_organica_id'] = $unidadeOrganicaId;
        }
        if (!empty($cursoId)) {
            $conditions['PlanoEstudo.curso_id'] = $cursoId;

        }
        if (!empty($anoCriacao)) {
            $conditions['PlanoEstudo.ano_criacao'] = $anoCriacao;

        }
        $conditions['OR'] = ['PlanoEstudo.estado_objecto_id is null', 'PlanoEstudo.estado_objecto_id' => 1];


        $this->paginate = [
            'contain' => [
                'Curso',
                'EstadoObjecto',
            ],
            'order' => 'PlanoEstudo.ano_criacao DESC',
            'conditions' => $conditions,
        ];
        $this->set('planoEstudos', $this->paginate('PlanoEstudo'));

        $unidadeOrganicas = $this->PlanoEstudo->Curso->UnidadeOrganica->find('list');
        $cursos = $this->PlanoEstudo->Curso->find('list', ['conditions' => $conditionsCurso]);
        $this->set(compact('cursos', 'unidadeOrganicas'));
    }

    public function manutencao()
    {

    }

    public function manutencao_plano_estudos_incompletos()
    {

    }

    public function remover_disciplina($disciplinaPlanoId)
    {

    }

    function ver_plano_estudo($id = null)
    {
        App::Import('Model', 'DisciplinaPlanoEstudo');
        App::Import('Model', 'Disciplina');
        //App::Import('Model','Logmv');
        //$logmv =new Logmv;
        $planoestudoanos = new DisciplinaPlanoEstudo;
        $disciplina = new Disciplina;

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(['action' => 'index']);
        }
        $this->set('planoestudo', $this->PlanoEstudo->read(null, $id));
        if (empty($this->data)) {
            $this->data = $this->PlanoEstudo->read(null, $id);
            //var_dump($this->data);
            ////////$logmv->logview(5,$this->Session->read('Auth.User.id'),$this->data["PlanoEstudo"]["id"],$this->data["PlanoEstudo"]["name"]);
        }

        $disciplinas = $this->PlanoEstudo->getAllDisciplinasByPlanoEstudo($id);


        $disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($id, 1, 1);
        $this->set('pdisciplina', $disciplinas_precedencia);
        $this->set('plano_id', $id);
        $cursos = $this->PlanoEstudo->Curso->find('list');
        $this->set(compact('cursos', 'disciplinas', 'anos', 'semestres', 'disciplinas', 'pobrigatorias',
            'popcionais'));
    }


}

?>