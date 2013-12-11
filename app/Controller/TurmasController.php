<?php
ini_set('memory_limit', "2048M");
/**
 * Controller de turmas do OpenSGA
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.turmas
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0

 *
 * @todo No futuro criar uma tabela docentes_turmas vai ajudar a manter o historico completo das turmas
 *
 */
class TurmasController extends AppController {

    var $name = 'Turmas';

    /**
     * Lista de turmas activas no Sistema.
     * @todo remover o filtro de docentes
     * @todo adicionar o filtro de unidades organicas
     */
    function index() {

        $this->Turma->recursive = 0;
        $grupo = $this->Session->read('Auth.User.group_id');

        $conditions = array();
        $conditions['Turma.estadoturma_id'] = 1;
        $conditions['Turma.anolectivo_id']  = Configure::read('OpenSGA.ano_lectivo_id');
        
        
        $this->set('turmas', $this->Turma->find('all',array('conditions'=>$conditions,'limit'=>1000)));
    }

    function faculdade_index() {

        $this->Turma->contain(array(
            'Anolectivo','Disciplina', 'Planoestudo', 'Curso' => array('UnidadeOrganica')
        ));

        $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');

        $conditions = array();
        if ($this->request->is('post')) {
            
            if ($this->request->data['Turma']['codigo'] != '') {
                $conditions['Turma.codigo'] = $this->request->data['Turma']['codigo'];
            } elseif ($this->request->data['Turma']['name'] != '') {
                $conditions['Turma.name LIKE'] = '%'. $this->request->data['Turma']['name'].'%';
            } elseif ($this->request->data['Anolectivo']['ano'] != '') {
                $conditions['Anolectivo.ano'] = $this->request->data['Anolectivo']['ano'];
            }
            
        }
        $conditions['Turma.estadoturma_id'] = 1;
        $conditions['Curso.unidade_organica_id']=$unidade_organica_id;
        
        $this->paginate = array(
            'conditions'=>$conditions,
            'contain'=>array(
            'Anolectivo','Disciplina', 'Planoestudo', 'Curso' => array('UnidadeOrganica')
        )
        );
        
        $turmas = $this->paginate('Turma');
        
        $this->set('turmas', $turmas);
    }

    function index_ajax() {
        $this->Turma->recursive = 0;

        $conditions = array();



        $conditions['limit'] = mysql_real_escape_string($_GET['iDisplayLength']);
        $conditions['offset'] = mysql_real_escape_string($_GET['iDisplayStart']);


        $aColumns = array('Turma.name');

        /*
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $conditions['conditions'] = array();
        $conditions['conditions']['Turma.estadoturma_id'] = 1;
        if ($_GET['sSearch'] != "") {

            for ($i = 0; $i < count($aColumns); $i++) {
                $conditions['conditions'][$aColumns[$i] . " LIKE"] = "%" . $_GET['sSearch'] . "%";
            }
        }

        //Se for docente, apenas mostra as suas turmas
        $grupo = $this->Session->read('Auth.User.group_id');
        if ($grupo == 4) {
            $docente_id = $this->Turma->Docente->getByUserID($this->Session->read('Auth.User.id'));
            $conditions['conditions']['Turma.docente_id'] = $docente_id;
        }

        $turmas = $this->Turma->find('all', $conditions);
        $alunos_count = $this->Turma->find('count', $conditions);
        $alunos_count_filter = $this->Turma->find('count', $conditions);
        $iTotal = $alunos_count;
        $iFilteredTotal = $alunos_count_filter;


        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );


        $this->set('output', $output);
        $this->set('turmas', $turmas);
    }

    function ver_turma($id = null) {
        $this->Turma->id = $id;
        if (!$this->Turma->exists()) {
            throw new NotFoundException(__('Turma Inválida'));
        }

        if (empty($this->data)) {
            $this->Turma->contain(array(
                'Turno', 'Planoestudo', 'Anolectivo', 'Estadoturma'
            ));
            $this->data = $this->Turma->read(null, $id);
        }

        $this->loadModel('Planoestudoano');
        $planoestudoanos = $this->Planoestudoano->find('first', array('conditions' => array('planoestudo_id' => $this->data['Planoestudo']['id'], 'disciplina_id' => $this->data['Turma']['disciplina_id'])));

        //$this->loadModel('Inscricao');
        //$this->Turma->bindModel(array('belongsTo'=>array('Matricula')));
        $this->Turma->Inscricao->contain(array(
            'Estadoinscricao',
            'Matricula' => array(
                'Aluno' => array(
                    'Entidade'
                )
            ),
            'Turma' => array(
                'Curso' => array(
                    'fields' => array('name')
                ), 'Disciplina', 'Turno', 'Anolectivo'
            )
        ));
        $inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $id)));
        $anocurricular = $planoestudoanos['Planoestudoano']['ano'];
        $semestrecurricular = $planoestudoanos['Planoestudoano']['semestre'];

        $this->loadModel('Turmatipoavaliacao');
        $turmatipoavaliacaos = $this->Turmatipoavaliacao->find('all', array('conditions' => array('turma_id' => $this->data['Turma']['id'])));
        $estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');
        $anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
        $cursos = $this->Turma->Curso->find('list');
        $planoestudos = $this->Turma->Planoestudo->find('list');
        $turnos = $this->Turma->Turno->find('list');
        $disciplinas = $this->Turma->Disciplina->find('list');
        //$docentes = $this->Turma->Docente->find('list');
        $disciplinas = array();
        $this->set('turma', $this->data);
        $this->set(compact('inscricaos', 'turmatipoavaliacaos', 'anolectivos', 'estados', 'mediaTurma', 'anosemestrecurr', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes', 'anocurricular', 'semestrecurricular'));
    }
    
    function faculdade_view($id = null) {
        $this->Turma->id = $id;
        if (!$this->Turma->exists()) {
            throw new NotFoundException(__('Turma Inválida'));
        }
        
        $this->Turma->contain(array(
           'Curso' 
        ));
        
        $turma = $this->Turma->read();
        $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
        if($turma['Curso']['unidade_organica_id']!=$unidade_organica_id){
            $this->Session->setFlash(__('Permissão Negada'),'default',array('class'=>'alert info'));
            $this->redirect(array('controller'=>'pages','action'=>'home','faculdade'=>true));
        }
        if (empty($this->data)) {
            $this->Turma->contain(array(
                'Turno', 'Planoestudo', 'Anolectivo', 'Estadoturma'
            ));
            $this->data = $this->Turma->read(null, $id);
        }

        $this->loadModel('Planoestudoano');
        $planoestudoanos = $this->Planoestudoano->find('first', array('conditions' => array('planoestudo_id' => $this->data['Planoestudo']['id'], 'disciplina_id' => $this->data['Turma']['disciplina_id'])));

        //$this->loadModel('Inscricao');
        //$this->Turma->bindModel(array('belongsTo'=>array('Matricula')));
        $this->Turma->Inscricao->contain(array(
            'Estadoinscricao',
            'Matricula' => array(
                'Aluno' => array(
                    'Entidade'
                )
            ),
            'Turma' => array(
                'Curso' => array(
                    'fields' => array('name')
                ), 'Disciplina', 'Turno', 'Anolectivo'
            )
        ));
        $inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $id)));
        $anocurricular = $planoestudoanos['Planoestudoano']['ano'];
        $semestrecurricular = $planoestudoanos['Planoestudoano']['semestre'];

        $this->loadModel('Turmatipoavaliacao');
        $turmatipoavaliacaos = $this->Turmatipoavaliacao->find('all', array('conditions' => array('turma_id' => $this->data['Turma']['id'])));
        $estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');
        $anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
        $cursos = $this->Turma->Curso->find('list');
        $planoestudos = $this->Turma->Planoestudo->find('list');
        $turnos = $this->Turma->Turno->find('list');
        $disciplinas = $this->Turma->Disciplina->find('list');
        //$docentes = $this->Turma->Docente->find('list');
        $disciplinas = array();
        $this->set('turma', $this->data);
        $this->set(compact('inscricaos', 'turmatipoavaliacaos', 'anolectivos', 'estados', 'mediaTurma', 'anosemestrecurr', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes', 'anocurricular', 'semestrecurricular'));
    }

    function add() {
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        if (!empty($this->data)) {

            $this->Turma->create();

            $this->data["Turma"]["estado"] = '1';

            if ($this->Turma->save($this->data)) {
                $this->Session->setFlash('** Dados Cadastrados com Sucesso **', 'flashok');
                $this->redirect(array('action' => 'add_disciplinas', $this->Turma->getLastInsertID()));
            } else {
                $this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0010turma'));
            }
        }
        $estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');


        $anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
        $cursos = $this->Turma->Curso->find('list', array('order' => array('name ASC')));

        $planoestudos = $this->Turma->Planoestudo->find('list');

        $turnos = $this->Turma->Turno->find('list');
        $disciplinas = $this->Turma->Disciplina->find('list');
        $funcionarios = $this->Turma->Funcionario->find('list');
        $disciplinas = array();
        $this->set('disciplinas', $disciplinas);
        $this->set(compact('anolectivos', 'estados', 'anosemestrecurr', 't0003cursos', 't0005planoestudos', 'turnos', 't0004disciplinas', 'funcionarios'));
    }

    /**
     * Gera todas as turmas em funcao do plano de estudos.
     * @todo Garantir que isso funciona
     */
    function gerar_turmas() {
        if (!empty($this->request->data)) {
            /**
             * @todo Verificar o ajuste do anolectivo ao regime antes de enviar para o modelo
             */
            $this->Turma->criarTurmas($this->data['Turma']['planoestudo_id']);

            $this->Session->setFlash('As Turmas foram Geradas com Sucesso', 'flashok');
            //$this->redirect(array('action' => 'index'));
        }


        $anolectivos = $this->Turma->Anolectivo->find('list');
        $planoestudos = $this->Turma->Planoestudo->find('list');
        $semestrelectivos = $this->Turma->Semestrelectivo->find('list');
        $regimelectivos = $this->Turma->Anolectivo->Regimelectivo->find('list');
        $turnos = $this->Turma->Turno->find('list');

        $this->set(compact('anolectivos', 'planoestudos', 'semestrelectivos', 'regimelectivos', 'turnos'));
    }

    function add_disciplinas($turma_id = null) {
        App::Import('Model', 'Planoestudo');
        $planoestudos = new Planoestudo;



        App::Import('Model', 'Planoestudoano');
        $planoestudoanos = new Planoestudoano;
        $this->Turma->recursive = 0;


        if (!empty($this->data)) {
            $turma_base = $this->Turma->find('all', array('conditions' => array('Turma.id' => $turma_id), 'recursive' => -1));
            //$turma_base = $this->Turma->find('all',array('conditions'=>array('Turma.id'=>$this->data['Turma']['turma_id']),'recursive'=>-1));
            //var_dump($turma_base);
            //var_dump($this->data);

            if (!isset($this->data['disc_id'])) {
                
            } else {


                foreach ($this->data['disc_id'] as $disc_id) {

                    if (!isset($this->data[$disc_id][$disc_id]['Turma']['t0004disciplina_id'])) {
                        
                    } else {
                        $this->data[$disc_id][$disc_id]['Turma']['t0009anolectivo_id'] = $turma_base[0]['Turma']['t0009anolectivo_id'];
                        $this->data[$disc_id][$disc_id]['Turma']['t0003curso_id'] = $turma_base[0]['Turma']['t0003curso_id'];
                        $this->data[$disc_id][$disc_id]['Turma']['t0005planoestudo_id'] = $turma_base[0]['Turma']['t0005planoestudo_id'];
                        $this->data[$disc_id][$disc_id]['Turma']['turno_id'] = $turma_base[0]['Turma']['turno_id'];
                        $this->data[$disc_id][$disc_id]['Turma']['funcionario_id'] = $this->data[$disc_id][$disc_id]['Turma']['docente'];
                        $this->data[$disc_id][$disc_id]['Turma']['semestrecurricular'] = $turma_base[0]['Turma']['semestrecurricular'];
                        $this->data[$disc_id][$disc_id]['Turma']['anocurricular'] = $turma_base[0]['Turma']['anocurricular'];
                        $this->data[$disc_id][$disc_id]['Turma']['estado'] = '1';
                        $disciplina_name = $this->Turma->Disciplina->find('list', array('conditions' => array('Disciplina.id' => $disc_id)));
                        //$this->data[$disc_id][$disc_id]['Turma']['anocurricular']['name']=$disciplina_name['disc_id'];
                        //var_dump($disciplina_name);

                        $this->data[$disc_id][$disc_id]['Turma']['name'] = $disciplina_name[$disc_id];
                        //var_dump($this->data[$disc_id][$disc_id]['Turma']['name']);
                        //die();
                        $this->Turma->create();
                        if ($this->Turma->save($this->data[$disc_id][$disc_id])) {
                            //$this->Turma->create();
                            //var_dump($this->data[$disc_id][$disc_id]);
                        } else {
                            $this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0010turma'));
                        }
                    }
                }
                //die();
            }

            $this->Turma->delete($turma_id);
            $this->Session->setFlash('** Dados Cadastrados com Sucesso **', 'flashok');
            $this->redirect(array('action' => 'index'));
        }
        $turma = $this->Turma->find('all', array('conditions' => array('Turma.id' => $turma_id), 'recursive' => -1));


        //$plano_estudos = $planoestudos->find('all',array('conditions'=>array('Planoestudo.id'=>$turma[0]['Turma']['t0005planoestudo_id']),'recursive'=>-1));

        $disciplinas = $planoestudoanos->find('all', array('conditions' => array('t0005planoestudo_id' => $turma[0]['Turma']['t0005planoestudo_id'], 'ano' => $turma[0]['Turma']['anocurricular'], 'semestre' => $turma[0]['Turma']['semestrecurricular'])));

        // var_dump($disciplinas);

        $funcionarios = $this->Turma->Funcionario->find('list', array('conditions' => array('tg0011tipofuncionario_id' => 1)));


        $this->set(compact('disciplinas', 'funcionarios'));
        $this->set('turma_id', $turma_id);
    }

    function edit($id = null) {
        $this->Turma->id = $id;
        if (!$this->Turma->exists()) {
            throw new NotFoundException(__('Turma Invalida'));
        }

        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {

            if ($this->Turma->save($this->request->data)) {

                $this->Session->setFlash('** Dados Editados com Sucesso **', 'flashok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
            }
        }


        if (empty($this->data)) {
            $this->data = $this->Turma->read(null, $id);
            //$logmv->logUpdate(8,$this->Session->read('Auth.User.id'),$id,$this->data["Turma"]["name"]);
        }





        $this->loadModel('Planoestudoano');
        $planoestudoanos = $this->Planoestudoano->find('first', array('conditions' => array('planoestudo_id' => $this->data['Planoestudo']['id'], 'disciplina_id' => $this->data['Turma']['disciplina_id'])));


        $anocurricular = $planoestudoanos['Planoestudoano']['ano'];
        $semestrecurricular = $planoestudoanos['Planoestudoano']['semestre'];

        $estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');
        $anolectivos = $this->Turma->Anolectivo->find('list');
        $cursos = $this->Turma->Curso->find('list');
        $planoestudos = $this->Turma->Planoestudo->find('list');
        $turnos = $this->Turma->Turno->find('list');
        $disciplinas = $this->Turma->Disciplina->find('list');
        $docentes = $this->Turma->Docente->find('list');
        $assistentes = $this->Turma->Docente->find('list');
        $disciplinas = array();
        $this->set('disciplinas', $disciplinas);
        $this->set(compact('anolectivos', 'estados', 'semestrecurricular', 'anocurricular', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes', 'assistentes'));
    }

    function delete($id = null) {
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        if (!$id) {
            $this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0010turma'));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Turma->delete($id)) {
            //$logmv->logDelete(8,$this->Session->read('Auth.User.id'),$id,$this->data["Turma"]["name"]);
            $this->Session->setFlash('** Dados Deletados com Sucesso **', 'flashok');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Turma'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * Mostra detalhes da turma de um dado docente.
     * FIXME So deve mostrar turmas as quais o docente em questao foi atribuido. Um docente nao pode ver detalhes das turmas dos outros nem com esperteza :D
     * @param type $id
     * @throws NotFoundException
     */
    public function docente_detalhes_turma($id = null) {
        $this->Turma->id = $id;
        if (!$this->Turma->exists()) {
            throw new NotFoundException(__('Turma Inválida'));
        }

        if (empty($this->data)) {
            $this->Turma->contain(array(
                'Docente' => array(
                    'Entidade'
                ),
                'Assistente' => array(
                    'Entidade'
                ),
                'Turno', 'Planoestudo', 'Anolectivo', 'Estadoturma'
            ));
            $this->data = $this->Turma->read(null, $id);
        }

        $this->loadModel('Planoestudoano');
        $planoestudoanos = $this->Planoestudoano->find('first', array('conditions' => array('planoestudo_id' => $this->data['Planoestudo']['id'], 'disciplina_id' => $this->data['Turma']['disciplina_id'])));

        //$this->loadModel('Inscricao');
        //$this->Turma->bindModel(array('belongsTo'=>array('Matricula')));
        $this->Turma->Inscricao->contain(array(
            'Estadoinscricao',
            'Matricula' => array(
                'Aluno' => array(
                    'Entidade'
                )
            ),
            'Turma' => array(
                'Curso' => array(
                    'UnidadeOrganica'
                ), 'Disciplina', 'Turno', 'Anolectivo'
            )
        ));
        $inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $id)));
        $anocurricular = $planoestudoanos['Planoestudoano']['ano'];
        $semestrecurricular = $planoestudoanos['Planoestudoano']['semestre'];

        $this->loadModel('Turmatipoavaliacao');
        $turmatipoavaliacaos = $this->Turmatipoavaliacao->find('all', array('conditions' => array('turma_id' => $this->data['Turma']['id'])));
        $estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');
        $anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
        $anolectivos = $this->Turma->Anolectivo->find('list');
        $cursos = $this->Turma->Curso->find('list');
        $planoestudos = $this->Turma->Planoestudo->find('list');
        $turnos = $this->Turma->Turno->find('list');
        $disciplinas = $this->Turma->Disciplina->find('list');
        $docentes = $this->Turma->Docente->find('list');
        $disciplinas = array();
        $this->set('turma', $this->data);
        $this->set(compact('inscricaos', 'turmatipoavaliacaos', 'anolectivos', 'estados', 'mediaTurma', 'anosemestrecurr', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes', 'anocurricular', 'semestrecurricular'));
    }

    /**
     * Lista de turmas atribuidas a um dado docente
     */
    public function docente_index() {
        $this->Turma->recursive = 0;
        $grupo = $this->Session->read('Auth.User.group_id');

        $conditions = array();

        $docente_id = $this->Turma->Docente->getByUserID($this->Session->read('Auth.User.id'));
        $conditions['Turma.docente_id'] = $docente_id;

        $this->paginate = array('conditions' => $conditions);
        $this->set('turmas', $this->paginate());
    }

    function beforeRender() {
        parent::beforeRender();
        $this->set('current_section', 'manutencao');
    }

    function update_plano_estudos() {

        $curso = $this->data["Turma"]["t0003curso_id"];
        $planoestudos = $this->Turma->Planoestudo->find('list', array('conditions' => array('t0003curso_id' => $curso)));
        $this->set('planoestudos', $planoestudos);
        $this->layout = 'ajax';
    }

    function update_disciplinas() {
        App::Import('Model', 'Planoestudoano');
        $planoestudoanos = new Planoestudoano;

        $plano_estudo = $this->data["Turma"]["t0005planoestudo_id"];
        $ano_lectivo_id = $this->data["Turma"]["t0009anolectivo_id"];
        $this->Turma->Anolectivo->recursive = 0;
        $ano_lectivo = $this->Turma->Anolectivo->findById($ano_lectivo_id);
        $semestre = $this->data["Turma"]["semestre"];
        $num_semestre = $ano_lectivo['Anolectivo']['num_semestre'];
        $semestres = array();
        for ($i = 1; $i <= $num_semestre; $i++) {
            $semestres[] = $i;
        }
        $disciplinas2 = $planoestudoanos->find('list', array('fields' => 't0004disciplina_id', 'conditions' => array('t0005planoestudo_id' => $plano_estudo, "semestre" => $semestre)));

        //var_dump($disciplinas2);

        $disciplinas = $this->Turma->Disciplina->find('list', array('conditions' => array('id' => $disciplinas2)));
        $funcionarios = $this->Turma->Funcionario->find('list');
        $this->set(compact('funcionarios'));
        $this->set('disciplinas', $disciplinas);
        $this->set('semestres', $semestres);

        $this->layout = 'ajax';
    }

    // relatorio
    function pdf_index() {
        Configure::write('debug', 0); // Otherwise we cannot use this method while developing
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        $turma = $this->Turma->find('all');
        $listas = array();
        //var_dump($turma);
        $id = 1;
        foreach ($turma as $m) {
            $lista = array();
            $lista[] = $id;
            $lista[] = $m["Anolectivo"]["codigo"];
            $lista[] = $m["Turma"]["name"];
            $lista[] = $m["Planoestudo"]["name"];
            $lista[] = $m["Turma"]["anocurricular"];
            $lista[] = $m["Turma"]["semestrecurricular"];
            $lista[] = $m["Turno"]["name"];


            if ($m["Turma"]["estado"] == 1) {
                $estado = 'Activa';
            }
            if ($m["Turma"]["estado"] == 2) {
                $estado = 'Cancelada';
            }
            if ($m["Turma"]["estado"] == 3) {
                $estado = 'Fechada';
            }
            $lista[] = $estado;

            $listas[] = $lista;

            $id++;
        }
        // $this->set('cursos',$this->Curso->find('all'));
        //var_dump($listas);
        $this->set('lista', $listas);

        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }
    
    
    public function print_lista_estudantes($turma_id){
        $this->Turma->Inscricao->contain(array(
            'Estadoinscricao',
            'Matricula' => array(
                'Aluno' => array(
                    'Entidade'=>array(
                        'User'
                    )
                )
            ),
            'Turma' => array(
                'Curso' => array(
                    'UnidadeOrganica'
                ), 'Disciplina', 'Turno', 'Anolectivo'
            )
        ));
        $inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $turma_id)));
        
        $this->set(compact('inscricaos'));
    }
    
    public function print_dhl(){
        
    }

    function fecho_da_turma() {
        App::Import('Model', 'Turma');
        $turma = new Turma;
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        if (!empty($this->data) && $this->data["Turma"]["t0009anolectivo_id"] != "") {
            $turmas = $turma->upDateTurma($this->data["Turma"]["	t0009anolectivo_id"], $this->data["Turma"]["t0003curso_id"]);
            //var_dump($this->data["Turma"]["t0009anolectivo_id"]);
            //$logmv->logUpdate(9,$this->Session->read('Auth.User.id'),$this->data["Turma"]["t0003curso_id"],"Feicho da Turma");
            $this->Session->setFlash('** Dados Editados com Sucesso **', 'flashok');
            $this->redirect(array('action' => 'index'));
        }
        $anolectivos = $this->Turma->Anolectivo->find('list');
        $cursos = $this->Turma->Curso->find('list');
        $this->set(compact('t0009anolectivos', 't0003cursos'));
    }

    public function fechar_todas_turmas($semestre) {
        $this->Turma->fecharTodasTurmas($semestre);

        $this->redirect(array('action' => 'index'));
    }

    /**
     * Adiciona docente e assistente a turma passada pelo id
     * @param int $turma_id
     *
     * @todo no futuro apenas mostrar docentes capacitado a dar a turma em questao, de acordo com o perfil
     */
    public function adicionar_docentes($turma_id) {
        $this->Turma->id = $turma_id;
        if (!$this->Turma->exists()) {
            throw new NotFoundException(__('Turma Invalida'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['Turma']['id'] = $turma_id;
            $this->Turma->save($this->request->data);
            $this->Session->setFlash('Os docentes desta turma foram actualizados com sucesso', 'default', array('class' => 'alert success'));
            $this->redirect(array('controller' => 'turmas', 'action' => 'view', $turma_id));
        }

        $turma = $this->Turma->findById($turma_id);
        $docentes = $this->Turma->Docente->listaDocentes();
        $assistentes = $this->Turma->Assistente->listaDocentes();

        $this->set(compact('turma', 'docentes', 'assistentes'));
    }

    /**
     * Esta funcao fecha uma determinada turma. Mas so fecha se a turma nao tiver avaliacoes abertas
     * @param type $id
     */
    public function fechar_turma($id) {
        $this->Turma->id = $id;
        if (!$this->Turma->exists()) {
            throw new NotFoundException('Turma Não Existente');
        }
        if (!$this->request->is('post') && !$this->request->is('put')) {

            $this->Session->setFlash(__('Não Possui Permissão para aceder esta página'), 'default', array('class' => 'alert error'));
            $this->redirect($this->referer());
        }

        if (!$this->Turma->hasAvaliacoesAbertas($id)) {
            
        } else {
            $this->Session->setFlash(__('Esta Turma Possui Avaliações Abertas por isso não pode ser fechada'), 'default', array('class' => 'alert error'));
        }
    }

}

?>