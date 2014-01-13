<?php

/**
 * Controller inscrições
 *
 * Controller para o processamento das inscrições dos alunos
 * Executa todos os detalhes relacionados ás inscrições dos alunos no sistema
 * A maior parte das validações e filtragens de dados ocorrem aqui
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.inscricoes
 * @since         OpenSGA v 0.1.0
 * @version       OpenSGA v 0.5.0
 *
 *
 * @property Inscricao $Inscricao
 */
class InscricaosController extends AppController {

    var $name = 'Inscricaos';

    /**
     * Por enquanto o inscrever nao eh seguro
     * @todo verificar o security no inscrever
     */
    public function beforeFilter() {
        parent::beforeFilter();

        //No security no inscrever
        if ($this->action == 'faculdade_inscrever' || $this->action == 'faculdade_adicionar_cadeiras_inscricao') {
            $this->Security->csrfCheck = false;
            $this->Security->validatePost = false;
        }
    }

    function index() {

        if ($this->request->is('post') || $this->request->is('put')) {

            $this->Pagamento->Aluno->contain(array('Entidade', 'Curso', 'Matricula'));
            $alunos = $this->Pagamento->Aluno->find('all', array('conditions' => array('OR' => array(array('Entidade.name LIKE' => '%' . $this->request->data['Aluno']['name'] . '%'), array('Aluno.codigo LIKE' => $this->request->data['Aluno']['codigo'])))));

            $this->set(compact('alunos'));
            $this->set('mostrar_resultado', true);
        }
    }

    

    function view($id = null) {
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        App::Import('Model', 'Matricula');
        $matriculas = new Matricula;

        App::Import('Model', 'Turma');
        $turma = new Turma;

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }
        //	$this->set('t0013inscricao', $this->Inscricao->read(null, $id));
        if (empty($this->data)) {
            $this->data = $this->Inscricao->read(null, $id);
            //$logmv->logview(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
        }

        //var_dump($this->data);
        $alunos = $this->Inscricao->Aluno->find('list');
        $turmas = $this->Inscricao->Turma->find('list');
        $epocaavaliacaos = $this->Inscricao->Epocaavaliacao->find('list');
        //$notafrequencia = $this->data['Inscricao']['notafrequencia'];


        $estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');

        $curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
        $curso1 = $curso[0]['tc']['name'];

        $docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
        $docente1 = $docente[0]['tf']['name'];

        $assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
        $assistente1 = $assistente[0]['tf']['name'];

        $plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
        $plano1 = $plano[0]['tp']['name'];

        $turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
        $turma1 = $turma[0]['tt']['name'];

        $turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
        $turno1 = $turno[0]['ttu']['name'];

        $anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
        $anoCurricular1 = $anoCurricular[0]['tt']['anocurricular'];

        $semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
        $semestreCurricular1 = $semestreCurricular[0]['tt']['semestrecurricular'];

        $anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
        $anoLectivo1 = $anoLectivo[0]['tal']['codigo'];


        $this->set(compact('Alunos', 'turmas', 'epocaavaliacaos', 'tg0020estadoinscricao', 'funcionarios', 'curso1', 'docente1', 'assistente1', 'plano1', 'turma1', 'turno1', 'anoCurricular1', 'semestreCurricular1', 'anoLectivo1'));
    }

    function add() {
        App::Import('Model', 'Turma');
        $turma = new Turma;
        App::Import('Model', 'Matricula');
        $matriculas = new Matricula;

        // $ano = $this->data['Inscricao']['anocurricular'];
        //var_dump($ano);
        if (!empty($this->data)) {
            $this->data["Inscricao"]['estadoinscricao_id'] = '1';
            $this->Inscricao->create();
            if ($this->Inscricao->save($this->data)) {
                //$logmv->logInsert(11,$this->Session->read('Auth.User.id'),$this->Inscricao->getLastInsertID(),$this->data["Inscricao"]["Aluno_id"]);
                $this->Session->setFlash('** Dados Cadastrados com Sucesso **', 'flashok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'flasherror');
            }
        }

        //$alunos = $matriculas->getAlunosForMatricula1();
        $alunos = $matriculas->getAlunosForMatricula1();
        $turmas = $this->Inscricao->Turma->find('list', array('order' => array('name ASC')));
        $disciplinas = $this->Inscricao->Turma->Disciplina->find('list', array('order' => array('name ASC')));
        $epocaavaliacaos = $this->Inscricao->Epocaavaliacao->find('list');
        $anolectivos = $turma->Anolectivo->find('list');
        // Anolectivos = $turma->find('all',array('id'=>$this->data['Inscricao']['t0010turma_id']));

        $curso = $turma->getCursoAluno($this->data['Inscricao']['turma_id']);
        $curso1 = $curso[0]['tc']['name'];

        $this->set(compact('Alunos', 'turmas', '$disciplinas', 'epocaavaliacaos', 'anolectivos', 'curso1'));
    }

    function add_turmas($inscricao_id = null) {
        // App::Import('Model','Turma');
        //$turma = new Turma;
        if (!empty($this->data)) {


            $insc_base = $this->Inscricao->find('all', array('conditions' => array('Inscricao.id' => $this->data['Inscricao']['inscricao_id']), 'recursive' => -1));

            //var_dump($this->data['Inscricao']);
            $inscricao_id = $this->data['Inscricao']['inscricao_id'];
            unset($this->data['Inscricao']['inscricao_id']);
            foreach ($this->data['Inscricao'] as $insc) {

                if (!isset($insc['Inscricao']) or $insc['Inscricao'] == null) {
                    
                } else {
                    $inscricao = array();
                    $inscricao['Inscricao']['t0010turma_id'] = $insc['Inscricao']['turma'];
                    $inscricao['Inscricao']['Aluno_id'] = $insc_base[0]['Inscricao']['Aluno_id'];
                    $inscricao['Inscricao']['tg0020estadoinscricao_id'] = 1;
                    if ($this->Inscricao->save($inscricao)) {
                        $this->Inscricao->create();
                    } else {
                        $this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0010turma'));
                    }
                }
            }
            //$this->Inscricao->delete($inscricao_id);
            $this->Session->setFlash('** Dados Cadastrado com Sucesso **', 'flashok');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('inscricao_id', $inscricao_id);

        //var_dump(Anolectivos);
        //$turmas = $this->Inscricao->Turma->find('list',array('conditions'=>array('anocurricular'=>$ano)),array('fields'=>array('Turma.id','Turma.name')));
        $turmas = $this->Inscricao->Turma->find('list', array('fields' => array('Turma.id', 'Turma.name')));


        $this->set(compact('Alunos', 't0010turmas', '$disciplinas', 'epocaavaliacaos'));
    }

    /**
     * Adiciona novas cadeiras a um aluno que ja fez inscricao num dado semestre, e recalcula as mensalidades
     *
     * @param type $aluno_id
     * @param type $matricula_id
     *
     * @todo Implementar essa cena :(
     */
    public function faculdade_adicionar_cadeiras_inscricao($aluno_id, $matricula_id) {
        $this->loadModel('Turma');
        $this->loadModel('Aluno');
        $this->loadModel('FinanceiroPagamento');
        $this->loadModel('Matricula');



               
        if ($this->request->is('post') || $this->request->is('put')) {

            $aluno_id = $this->request->data['Inscricao']['aluno_id'];
            $matricula_id = $this->request->data['Inscricao']['matricula_id'];
            $inscricao_nova = array();
            foreach ($this->request->data['Inscricao']['disciplinas'] as $k => $v) {
                if ($v > 0) {
                    $inscricao_nova[] = $v;
                }
            }

            $this->Session->write('OpenSGA.inscricao.cadeiras', $inscricao_nova);
            $this->Session->write('OpenSGA.inscricao.matricula_id', $matricula_id);
            $this->Session->write('OpenSGA.inscricao.aluno_id', $aluno_id);
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
        }


        $turmas = $this->Turma->getAllByAlunoForInscricao($aluno_id, $matricula_id);



        $this->set('aluno_id', $aluno_id);
        $this->set('matricula_id', $matricula_id);
        $this->set(compact('turmas', 'disciplinas'));
    }
    
    
    public function faculdade_print_comprovativo_inscricao($aluno_id,$anolectivo_ano = null){
        
        if($anolectivo_ano == null){
            $anolectivo = $this->Inscricao->Turma->Anolectivo->findByAno(2014);
        } else{
            $anolectivo = $this->Inscricao->Turma->Anolectivo->findByAno(2014);
        }
        
        $this->Inscricao->Aluno->contain(array(
            'Entidade'
        ));
        $aluno = $this->Inscricao->Aluno->findById($aluno_id);
        //Pegamos todas inscricoes activas
        $this->Inscricao->contain(array(
            'Turma'=>array(
                'Disciplina','Curso'=>array('UnidadeOrganica'),'Planoestudo'=>array(
                    'Planoestudoano'
                )
            ),'TipoInscricao'
        ));
        $inscricoes_activas  = $this->Inscricao->find('all',array('conditions'=>array('estadoinscricao_id'=>1,'aluno_id'=>$aluno_id,'Turma.anolectivo_id'=>30)));
        
        $this->set(compact('inscricoes_activas','aluno','anolectivo'));
        
    }

    function edit($id = null) {
        $this->Inscricao->id = $id;
        if (!$this->Inscricao->exists()) {
            throw new NotFoundException('Inscricao Invalida');
        }

        App::Import('Model', 'Turma');
        $turma = new Turma;
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;

        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }

        if (!empty($this->data)) {
            if ($this->Inscricao->save($this->data)) {
                $this->Session->setFlash('Dado Editados com sucesso', 'flashok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Inscricao->read(null, $id);
            //$logmv->logUpdate(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
        }

        //var_dump($this->data);
        $alunos = $this->Inscricao->Aluno->find('list');
        $turmas = $this->Inscricao->Turma->find('list');
        $epocaavaliacaos = $this->Inscricao->Epocaavaliacao->find('list');
        //$notafrequencia = $this->data['Inscricao']['notafrequencia'];

        $estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');

        $curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
        $curso1 = $curso[0]['tc']['name'];

        $docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
        $docente1 = $docente[0]['tf']['name'];

        $assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
        $assistente1 = $assistente[0]['tf']['name'];

        $plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
        $plano1 = $plano[0]['tp']['name'];

        $turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
        $turma1 = $turma[0]['tt']['name'];

        $turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
        $turno1 = $turno[0]['ttu']['name'];

        $anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
        $anoCurricular1 = $anoCurricular[0]['tt']['anocurricular'];

        $semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
        $semestreCurricular1 = $semestreCurricular[0]['tt']['semestrecurricular'];

        $anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
        $anoLectivo1 = $anoLectivo[0]['tal']['codigo'];


        $this->set(compact('Alunos', 't0010turmas', 'epocaavaliacaos', 'tg0020estadoinscricao', 'funcionarios', 'curso1', 'docente1', 'assistente1', 'plano1', 'turma1', 'turno1', 'anoCurricular1', 'semestreCurricular1', 'anoLectivo1'));
    }

    /**
     * Inscreve alunos depois da primeira matricula
     * @param type $aluno_id
     * @param type $matricula_id
     *
     *
     * @todo garantir que so se inscreve quem nao tem dividas no semestre anterior
     * @todo A lista de disciplinas deve ter em consideracao  a tabela de precedencias
     * @todo Deve existir possibilidade de inscricao condicional
     */
    public function faculdade_inscrever($aluno_id, $matricula_id) {
        $this->loadModel('Turma');
        $this->loadModel('Aluno');
        $this->loadModel('FinanceiroPagamento');
        $this->loadModel('Matricula');



        $aluno = $this->Aluno->findById($aluno_id);
        $matricula = $this->Inscricao->Matricula->findById($matricula_id);

        //Primeiro vemos se ainda nao se matriculou no ano lectivo em questao

        $this->Inscricao->contain(array(
            'Turma'
        ));
        $inscricoes_activas = $this->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id, 'Turma.anolectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'), 'Turma.semestrelectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'))));
        if (!empty($inscricoes_activas)) {
            $this->Session->setFlash(__('Este Aluno já fez inscrições neste ano. As cadeiras seguintes serão adicionadas ás inscrições anteriores, e o valor da inscrição será recalculado'), 'default', array('class' => 'alert info'));
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'adicionar_cadeiras_inscricao', $aluno_id, $matricula_id));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            $aluno_id = $this->request->data['Inscricao']['aluno_id'];
            $matricula_id = $this->request->data['Inscricao']['matricula_id'];
            $inscricao_nova = array();
            foreach ($this->request->data['Inscricao']['disciplinas'] as $k => $v) {
                if ($v > 0) {
                    $inscricao_nova[] = $v;
                }
            }

            $this->Session->write('OpenSGA.inscricao.cadeiras', $inscricao_nova);
            $this->Session->write('OpenSGA.inscricao.matricula_id', $matricula_id);
            $this->Session->write('OpenSGA.inscricao.aluno_id', $aluno_id);
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
        }


        $turmas = $this->Turma->getAllByAlunoForInscricao($aluno_id, $matricula_id);



        $this->set('aluno_id', $aluno_id);
        $this->set('matricula_id', $matricula_id);
        $this->set(compact('turmas', 'disciplinas'));
    }

    /**
     * Verifica se esta tudo bem com a inscricao e o pagamento
     */
    public function faculdade_valida_inscricao() {


        $turmas = $this->Inscricao->Turma->find('all', array('conditions' => array('Turma.id' => $this->Session->read('OpenSGA.inscricao.cadeiras')), 'order' => array('Turma.anocurricular DESC', 'Turma.semestrecurricular DESC')));

        
        $this->loadModel('FinanceiroPagamento');

        $pagamento_normal = $this->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(44);
        $pagamento_atraso = $this->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(45);
        $total_normal = 0;
        $total_atraso = 0;
        $cadeiras_atraso = 0;
        $cadeiras_normais = 0;
        $turmas_normais = array();
        $turmas_atraso = array();
        $turmas_tipo = array();
        $ano_maior = $turmas[0]['Turma']['anocurricular'];
        $semestre_maior = $turmas[0]['Turma']['semestrecurricular'];
        foreach ($turmas as $turma) {
            if ($turma['Turma']['anocurricular'] == $ano_maior and $turma['Turma']['semestrecurricular'] == $semestre_maior) {
                $turmas_normais[] = $turma;
                $total_normal = $total_normal + $pagamento_normal['FinanceiroTipoPagamento']['valor'];
                $turmas_tipo[$turma['Turma']['id']] = 1;
            } else {
                $turmas_atraso[] = $turma;
                $total_atraso = $total_atraso + $pagamento_atraso['FinanceiroTipoPagamento']['valor'];
                $turmas_tipo[$turma['Turma']['id']] = 2;
            }
        }

        
        
        $matricula_id = $this->Session->read('OpenSGA.inscricao.matricula_id');
        $aluno_id = $this->Session->read('OpenSGA.inscricao.aluno_id');
        $aluno = $this->Inscricao->Aluno->findById($aluno_id);
        $imprimir = false;

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['turmas'] = $this->Session->read('OpenSGA.inscricao.cadeiras');
            $total_normal = 0;
            $total_atraso = 0;
            foreach ($this->request->data['Turma'] as $turma) {
                $turmas_tipo[$turma['id']] = $turma['tipo'];
                if ($turma['tipo'] == 1) {
                    $total_normal = $total_normal + $pagamento_normal['FinanceiroTipoPagamento']['valor'];
                    $cadeiras_normais+=1;
                } else {
                    $total_atraso = $total_atraso + $pagamento_atraso['FinanceiroTipoPagamento']['valor'];
                    $cadeiras_atraso+=1;
                }
            }

            $this->request->data['total_normal'] = $total_normal;
            $this->request->data['total_atraso'] = $total_atraso;
            $this->request->data['aluno_id'] = $aluno_id;
            $this->request->data['matricula_id'] = $matricula_id;
            $this->request->data['turmas_tipo'] = $turmas_tipo;

            if ($cadeiras_atraso > 3 && $cadeiras_normais >= 1) {
                //Nao pode fazer cadeiras normais com mais de 3 cadeiras em atraso
                $this->Session->setFlash(__('Não pode fazer cadeiras normais com mais de 3 cadeiras em atraso'), 'default', array('class' => 'alert_error'));
            //    $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno_id));
            }
            
            $this->request->data['cadeiras_normais'] = $cadeiras_normais;
            $this->request->data['cadeiras_atraso'] = $cadeiras_atraso;

            $inscricao = $this->Inscricao->inscreveAluno($this->request->data);
            if ($inscricao) {
                $this->Session->setFlash(sprintf(__('O Aluno  Foi inscrito com sucesso', true)), 'default', array('class' => 'alert_success'));

                $imprimir = true;
            } else {
                $this->Session->setFlash(sprintf(__('O Aluno  nao foi inscrito', true)), 'default', array('class' => 'alert_error'));

                //$this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno_id));
            }
        }
        $this->set(compact('turmas', 'turmas_normais', 'turmas_atraso', 'total_normal', 'total_atraso', 'matricula_id', 'aluno_id', 'imprimir', 'aluno'));
    }

    /**
     *
     * @param type $aluno_id
     * 
     * @fixme esta matricula nao eh consistente para casos em que aluno muda de curso,etc
     */
    public function faculdade_ver_inscricoes_aluno($aluno_id){
        
        //Pegamos todas inscricoes activas
        $this->Inscricao->contain(array(
            'Turma'=>array(
                'Disciplina'
            ),'TipoInscricao'
        ));
        $inscricoes_activas  = $this->Inscricao->find('all',array('conditions'=>array('estadoinscricao_id'=>1,'aluno_id'=>$aluno_id,'Turma.anolectivo_id'=>30)));
        
        $aluno = $this->Inscricao->Aluno->findById($aluno_id);
        $matricula=$this->Inscricao->Matricula->findByAlunoIdAndCursoId($aluno_id,$aluno['Aluno']['curso_id']);
        $cadeiras_pendentes = $this->Inscricao->Turma->getAllByAlunoForInscricao($aluno_id, $matricula['Matricula']['id']);
        
        
        $this->set(compact('inscricoes_activas','cadeiras_pendentes','aluno','matricula'));
        
    }
    
    function delete($id = null) {
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        if (!$id) {
            $this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0013inscricao'));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Inscricao->delete($id)) {
            //$logmv->logDelete(11,$this->Session->read('Auth.User.id'),$id,'Delete Inscricao');
            $this->Session->setFlash('** Dados Deletados com Sucesso **', 'flashok');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Inscricao'));
        $this->redirect(array('action' => 'index'));
    }

    

    function ajax_get_plano_estudos() {


        $aluno_id = $this->data['Inscricao']['Aluno_id'];
        $plano_estudo = $this->Inscricao->Aluno->getPlanoEstudoCorrente($aluno_id);
        $turmas = $this->Inscricao->Aluno->getAllTurmasByEstado($plano_estudo, $aluno_id);

        $this->layout = 'ajax';
    }

    function update_curso_aluno() {
        App::Import('Model', 'Matricula');
        App::Import('Model', 'Turma');
        $turma = new Turma;
        $matriculas = new Matricula;

        //$aluno = $this->data["Inscricao"]["Aluno_id"];
        $curso = $matriculas->find('all', array('conditions' => array('Aluno_id' => $this->data['Inscricao']['Aluno_id'])));

        $turmas = $turma->find('list', array('conditions' => array('t0003curso_id' => $curso[0]['Curso']['id'])));


        $curso = $curso[0]['Curso'];
        $this->set('curso', $curso);
        $this->set('turmas_ano', $turmas);
        $this->layout = 'ajax';
    }

    function update_plano_aluno() {
        App::Import('Model', 'Matricula');
        $matriculas = new Matricula;

        $curso = $matriculas->find('all', array('conditions' => array('Aluno_id' => $this->data['Inscricao']['Aluno_id'])));
        $plano = $curso[0]['Planoestudo'];
        $this->set('plano', $plano);
        $this->layout = 'ajax';
    }

    function update_turma_aluno() {

        App::Import('Model', 'Turma');
        $turma = new Turma;
        $turmas = $turma->find('list', array('conditions' => array('t0009anolectivo_id' => $this->data["Inscricao"]["t0009anolectivo_id"]), 'order' => array('name ASC'), 'estado' => 1));
        //var_dump($this->data);
        $this->set('turmas_ano', $turmas);
        $this->layout = 'ajax';
    }

    function update_ano_curricular() {
        App::Import('Model', 'Turma');
        $turma = new Turma;
        $anolectivos = $turma->find('all', array('id' => $this->data['Inscricao']['t0010turma_id']));
        //$ano = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
        $ano = $anolectivos[0]['Turma']['anocurricular'];
        //var_dump($ano);
        $this->set('$t0009anolectivo', $ano);
        $this->layout = 'ajax';
    }

    function update_turma_turno() {
        App::Import('Model', 'Turma');
        $turma = new Turma;

        //var_dump($this->data['Inscricao']);
        //$turno_id = $turma->find('list',array('conditions'=>array('id'=>$this->data['Inscricao']['t0010turma_id'])));;
        $turno_id = $turma->getTurnoTurma($this->data['Inscricao']['t0010turma_id']);

        $turno = $turno_id[0]['ttu']['name'];
        //var_dump($turno);
        $this->set('turno', $turno);
        $this->layout = 'ajax';
    }

    public function pdf_boletim_inscricao($aluno_id) {
        $turmas = $this->Inscricao->Aluno->getAllTurmasNormaisForInscricao($aluno_id);
    }

    function pdf_index() {
        Configure::write('debug', 0); // Otherwise we cannot use this method while developing
        $incricao = $this->Inscricao->find('all');

        App::Import('Model', 'Inscricao');
        $inscricao = new Inscricao;
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        $t0013inscricoes1 = $inscricao->find('all');

        for ($i = 0; $i < count($t0013inscricoes1); $i++) {
            $t0009anolectivo = $inscricao->getAnolectivo($t0013inscricoes1[$i]['Inscricao']['t0010turma_id']);
            $codigo[$i] = $t0009anolectivo[0]['tal']['codigo'];
        }


        $listas = array();
        //var_dump($incricao);
        foreach ($incricao as $m) {
            $lista = array();
            $lista[] = $m['Inscricao']['id'];




            $lista[] = $m['Anolectivo']['codigo'];

            $lista[] = $m['Aluno']['name'];
            $lista[] = $m['Turma']['name'];
            $lista[] = $m["Turma"]["anocurricular"] . ' / ' . $m["Turma"]["semestrecurricular"];

            if ($m['Turma']['turno_id'] == 1) {
                $turno = "Diurno";
            }
            if ($m['Turma']['turno_id'] == 2) {
                $turno = "Pos-Laboral";
            }
            if ($m['Turma']['turno_id'] == null) {
                $turno = "Sem turno";
            }
            $lista[] = $turno;

            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 1) {
                $estado1 = "Inscrito";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 2) {
                $estado1 = "Aprovado";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 3) {
                $estado1 = "Reprovado";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 4) {
                $estado1 = "Cancelada";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 5) {
                $estado1 = "Anulada";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 6) {
                $estado1 = "Excluido";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 7) {
                $estado1 = "Admitido";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == 8) {
                $estado1 = "Dispensado";
            }
            if ($m['Inscricao']['tg0020estadoinscricao_id'] == null) {
                $estado1 = "Sem estado";
            }
            $lista[] = $estado1;
            //  $lista[] =$m["Planoestudo"]["name"];
            //  $lista[] =$m["Turma"]["anosemestrecurr"];
            //  $lista[] =$m["Turno"]["name"];
            $listas[] = $lista;
        }
        // $this->set('cursos',$this->Curso->find('all'));
        //var_dump($listas);
        $this->set('codigo', $codigo);
        $this->set('lista', $listas);
        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }
    
    function beforeRender() {
        $this->set('current_section', 'manutencao');
    }

}

?>