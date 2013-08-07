<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**
 * Controller de alunos
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 *
 * @property Aluno $Aluno
 * @property Matricula $Matricula
 *
 */
class AlunosController extends AppController {

    public $name = 'Alunos';

    function index() {

        $conditions = array();
        if ($this->request->is('post')) {
            if ($this->request->data['Aluno']['codigo'] != '') {
                $conditions['Aluno.codigo'] = $this->request->data['Aluno']['codigo'];
            } else {
                $conditions['Entidade.nomes LIKE'] = '%' . $this->request->data['Aluno']['nomes'] . '%';
                $conditions['Entidade.apelido LIKE'] = '%' . $this->request->data['Aluno']['apelido'] . '%';
            }
        }



        $this->Aluno->contain('Entidade', 'Curso');
        $alunos = $this->Aluno->find('all', array('conditions' => $conditions, 'limit' => 100));
        
        if(count($alunos)==1){
            $this->redirect(array('action'=>'perfil_estudante',$alunos[0]['Aluno']['id']));
        }

        $this->set('alunos', $alunos);
    }
    
    
    

    function index_ajax() {

        $conditions = array();
        $conditions['limit'] = Sanitize::escape($_GET['iDisplayLength']);
        $conditions['offset'] = Sanitize::escape($_GET['iDisplayStart']);
        $aColumns = array('Entidade.name', 'Aluno.codigo');

        /*
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */

        if ($_GET['sSearch'] != "") {
            $conditions['conditions']['OR'] = array();
            for ($i = 0; $i < count($aColumns); $i++) {
                $conditions['conditions']['OR'][$aColumns[$i] . " LIKE"] = "%" . $_GET['sSearch'] . "%";
            }
        }
        $this->Aluno->contain(array('Entidade', 'Curso'));
        $alunos = $this->Aluno->find('all', $conditions);
        $alunos_count = $this->Aluno->find('count');
        $alunos_count_filter = $this->Aluno->find('count', $conditions);
        $iTotal = $alunos_count;
        $iFilteredTotal = $alunos_count_filter;

        $cursos = $this->Aluno->Curso->find('list');

        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );


        $this->set('output', $output);
        $this->set('alunos', $alunos);
    }

    /**
     * @Todo Optimizar esta pagina
     * @Todo Colocar os links para as opcoes do estudante
     * @param type $id
     */
    function perfil_estudante($id = null) {
        $this->Aluno->id = $id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException('Este aluno não existe no Sistema');
        }


        

        $this->Aluno->contain(array(
            'Matricula' => array(
                'Planoestudo', 'Turno'
            ),
            'Curso', 'Entidade' => array(
                'ProvinciaNascimento', 'CidadeNascimento', 'PaisNascimento', 'Genero', 'DocumentoIdentificacao'
            ),
            'AlunoNivelMedio' => array(
                'EscolaNivelMedio' => array('Provincia', 'Distrito')
            )
        ));
        $aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $id)));
        
        $this->Aluno->Inscricao->contain(array(
            'Turma' => array(
                'fields' => array(
                    'id', 'disciplina_id', 'anocurricular', 'semestrecurricular'),
                'Disciplina' => array(
                    'fields' => array('id', 'name')
                )
            ),
            'Matricula' => array(
                'fields' => array('id', 'anolectivo_id'),
                'Anolectivo' => array(
                    'fields' => array('id', 'ano')
                )
            )
                )
        );
        $inscricoes_activas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id, 'Inscricao.estadoinscricao_id' => 1)));

        $this->Aluno->Inscricao->contain(array(
            'Turma' => array(
                'fields' => array(
                    'id', 'disciplina_id', 'anocurricular', 'semestrecurricular'),
                'Disciplina' => array(
                    'fields' => array('id', 'name')
                )
            ),
            'Matricula' => array(
                'fields' => array('id', 'anolectivo_id'),
                'Anolectivo' => array(
                    'fields' => array('id', 'ano')
                )
            )
                )
        );
        $todas_inscricoes = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id),
            'order' => array(
                'Turma.anocurricular',
                'Turma.semestrecurricular'
        )));

        $this->Aluno->Inscricao->contain(array(
            'Turma' => array(
                'fields' => array(
                    'id', 'disciplina_id', 'anocurricular', 'semestrecurricular'),
                'Disciplina' => array(
                    'fields' => array('id', 'name')
                )
            ),
            'Matricula' => array(
                'fields' => array('id', 'anolectivo_id'),
                'Anolectivo' => array(
                    'fields' => array('id', 'ano')
                )
            )
                )
        );
        $cadeiras_aprovadas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id)));



        if ($this->Aluno->isMatriculado($id, Configure::read('OpenSGA.ano_lectivo_id'))) {
            $this->set('is_matriculado', 1);
        } else {
            $this->set('is_matriculado', 0);
        }

        $is_bolseiro = $this->Aluno->isBolseiro($id) ? 1 : 0;
        $is_regular = $this->Aluno->isRegular($id);
                
                if(count($is_regular)==1 && $is_regular[0]['regular']==true){
                    if($is_regular[0]['estado']==1){
                        $classe_estado="alert note";
                    } else{
                        $classe_estado="alert success";
                    }
                    
                    
                } else{
                    $classe_estado="alert error";
                }
        //Requisicoes
        $requisicoes = $this->Aluno->RequisicoesPedido->find('all', array('conditions' => array('aluno_id' => $id)));


        $this->Aluno->FinanceiroPagamento->contain(array(
            'FinanceiroTipoPagamento'
        ));
        $pagamentos = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento.aluno_id' => $id)));
        //debug($pagamentos);
        $this->set('aluno', $aluno);
        $users = $this->Aluno->User->find('list');
        $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
        $cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $proveniencianomes = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $documentos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $cursos = $this->Aluno->Curso->find('list');
        $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');

        $is_bolseiro = $this->Aluno->isBolseiro($id, $this->Session->read('SGAConfig.anolectivo_id'));

        $this->set(compact('cursos', 'planoestudos', 'users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos', 'generos', 'cidadenascimentos', 'proveniencianomes', 'provenienciacidades', 'inscricoes_activas', 'todas_inscricoes', 'cadeiras_aprovadas', 'pagamentos', 'is_bolseiro','is_regular','classe_estado'));
    }

    public function estudante_perfil($id = null) {
        $this->Aluno->id = $id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException('Este aluno não existe no Sistema');
        }



        $this->Aluno->getNivelAcademicoElevado($id);

        $this->Aluno->contain(array(
            'Matricula' => array(
                'Planoestudo', 'Turno'
            ),
            'Curso', 'Entidade' => array(
                'ProvinciaNascimento', 'CidadeNascimento', 'PaisNascimento', 'Genero', 'DocumentoIdentificacao'
            ),
            'AlunoNivelMedio' => array(
                'EscolaNivelMedio' => array('Provincia', 'Distrito')
            )
        ));
        $aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $id)));
        //debug($aluno);
        if ($aluno['Aluno']['user_id'] != $this->Session->read('Auth.User.id')) {
            $this->Session->setFlash(__('Tentativa de fraude'), 'default', array('class' => 'alert error'));
            $this->redirect(array('controller' => 'users', 'action' => 'logout'));
        }
        $this->Aluno->Inscricao->contain(array(
            'Turma' => array(
                'fields' => array(
                    'id', 'disciplina_id', 'anocurricular', 'semestrecurricular'),
                'Disciplina' => array(
                    'fields' => array('id', 'name')
                )
            ),
            'Matricula' => array(
                'fields' => array('id', 'anolectivo_id'),
                'Anolectivo' => array(
                    'fields' => array('id', 'ano')
                )
            )
                )
        );
        $inscricoes_activas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id, 'Inscricao.estadoinscricao_id' => 1)));

        $this->Aluno->Inscricao->contain(array(
            'Turma' => array(
                'fields' => array(
                    'id', 'disciplina_id', 'anocurricular', 'semestrecurricular'),
                'Disciplina' => array(
                    'fields' => array('id', 'name')
                )
            ),
            'Matricula' => array(
                'fields' => array('id', 'anolectivo_id'),
                'Anolectivo' => array(
                    'fields' => array('id', 'ano')
                )
            )
                )
        );
        $todas_inscricoes = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id)));

        $this->Aluno->Inscricao->contain(array(
            'Turma' => array(
                'fields' => array(
                    'id', 'disciplina_id', 'anocurricular', 'semestrecurricular'),
                'Disciplina' => array(
                    'fields' => array('id', 'name')
                )
            ),
            'Matricula' => array(
                'fields' => array('id', 'anolectivo_id'),
                'Anolectivo' => array(
                    'fields' => array('id', 'ano')
                )
            )
                )
        );
        $cadeiras_aprovadas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id)));



        if ($this->Aluno->isMatriculado($id, $this->Session->read('SGAConfig.anolectivo_id'))) {
            $this->set('is_matriculado', 1);
        } else {
            $this->set('is_matriculado', 0);
        }

        $is_bolseiro = $this->Aluno->isBolseiro($id) ? 1 : 0;

        //Requisicoes
        $requisicoes = $this->Aluno->RequisicoesPedido->find('all', array('conditions' => array('aluno_id' => $id)));

        $this->Aluno->FinanceiroPagamento->contain(array(
            'FinanceiroTipoPagamento'
        ));
        $pagamentos = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento.aluno_id' => $id)));
        //debug($pagamentos);
        $this->set('aluno', $aluno);
        $users = $this->Aluno->User->find('list');
        $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
        $cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $proveniencianomes = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $documentos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $cursos = $this->Aluno->Curso->find('list');
        $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');

        $is_bolseiro = $this->Aluno->isBolseiro($id, $this->Session->read('SGAConfig.anolectivo_id'));

        $this->set(compact('cursos', 'planoestudos', 'users', 'paises', 'cidades', 'provincias', 'documentos', 'areatrabalhos', 'generos', 'cidadenascimentos', 'proveniencianomes', 'provenienciacidades', 'inscricoes_activas', 'todas_inscricoes', 'cadeiras_aprovadas', 'pagamentos', 'is_bolseiro'));
    }

    public function seleccionar_aluno($r_controller, $r_action) {
        
    }

    /**
     * Cadastro do aluno
     *
     * Registra os dados do aluno, faz a matricula inicial
     * @Todo Resolver o problema da foto do aluno
     * @todo garantir que a escola numca seja null
     * @todo testar bem a funcao que gera codigo
     * @todo criar manual de utilizador
     * @todo Nas listagens apenas devem aparecer codificadores e opcoes activas
     */
    function adicionar_estudante() {
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
            if ($this->Aluno->cadastraAluno($this->request->data)) {
                $this->Session->setFlash("Aluno Registrado com Sucesso", 'default', array('class' => 'alert_success'));
                $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->Aluno->id));
            } else {
                $this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default', array('class' => 'alert_error'));
            }
        }


        $cursos = $this->Aluno->Curso->find('list');

        $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');
        $users = $this->Aluno->Entidade->User->find('list');

        $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
        $escola_nivel_medios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
        $cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
        $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
        $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');
        $estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $this->set(compact('nacionalidades', 'cursos', 'planoestudos', 'users', 'paises', 'cidades', 'provincias', 'documento_identificacaos', 'areatrabalhos', 'generos', 'cidadenascimentos', 'proveniencianomes', 'provenienciacidades', 'turnos', 'escola_nivel_medios', 'estado_civil'));
    }

    /**
     * Edita os dados de perfil do estudante
     * @todo Funciona sim, mas falta usar transacoes :)
     */
    function editar_estudante($id = null) {
        $this->Aluno->id = $id;

        if (!$this->Aluno->exists()) {
            $this->Session->setFlash('Este Aluno não existe', 'default', array('class' => 'alert_error'));

            $this->redirect(array('action' => 'index'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            //Grava os dados do usuario
            $this->Aluno->User->id = $this->Aluno->field('user_id');
            $user_data = array(
                'User' => array(
                    'name' => $this->request->data['Entidade']['name']
                )
            );
            $entidade_id = $this->Aluno->field('entidade_id');
            if ($this->Aluno->User->save($user_data)) {

                //Grava os dados da Entidade
                $this->Aluno->Entidade->id = $entidade_id;
                if ($this->Aluno->Entidade->save($this->request->data)) {
                    //Grava os dados do Aluno
                    if ($this->Aluno->save($this->request->data)) {
                        $this->Session->setFlash(__('Os dados do Estudante foram actualizados com Sucesso'), 'default', array('class' => 'alert_success'));
                        $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $id));
                    } else {
                        $this->Session->setFlash(__('Problemas ao Editar dados da do Estudante'), 'default', array('alert_error'));
                    }
                } else {
                    $this->Session->setFlash(__('Problemas ao Editar dados da Entidade'), 'default', array('alert_error'));
                }
            } else {
                $this->Session->setFlash(__('Problemas ao Editar dados do Usuário'), 'default', array('alert_error'));
            }
        }

        if (empty($this->data)) {
            $this->data = $this->Aluno->read(null, $id);
        }
        $aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $id)));
        $this->set('aluno', $aluno);
        $users = $this->Aluno->Entidade->User->find('list');
        $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
        $escola_nivel_medios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');

        $cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
        $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
        $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $this->set(compact('cursos', 'planoestudos', 'users', 'paises', 'cidades', 'provincias', 'documento_identificacaos', 'areatrabalhos', 'generos', 'cidadenascimentos', 'proveniencianomes', 'provenienciacidades', 'turnos', 'escola_nivel_medios'));
    }

    function beforeRender() {
        parent::beforeRender();
        $this->set('current_section', 'estudantes');
    }

    public function beforeFilter() {
        parent::beforeFilter();
        if ($this->request->params['action'] == 'matricular_candidato') {
            //$this->Security->validatePost = false; 
        }
    }

    public function capturar_foto($aluno_id) {
        $this->Aluno->id = $aluno_id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException(__('Aluno Invalido'));
        }
        $entidade = $this->Aluno->findById($aluno_id);
        $this->Session->write('SGATemp.entidade_id_4_foto', $entidade['Entidade']['id']);
        $this->redirect(array('controller' => 'users', 'action' => 'captura_foto'));
    }

    public function matricular($aluno_id) {
        $this->Aluno->id = $aluno_id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException(__('Aluno Invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data['Sessao']['anolectivo_id'] = $this->Session->read('SGAConfig.anolectivo_id');
            $this->request->data['Sessao']['user_id'] = $this->Session->read('Auth.User.id');
            if ($this->Aluno->setNovaMatricula($this->request->data)) {
                $this->Session->setFlash('Aluno Matriculado com sucesso', 'default', array('alert success'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Problemas ao matricular aluno. Verifique se o aluno ainda nao esta matriculado', 'default', array('alert_error'));
                $this->redirect(array('action' => 'index'));
            }
        }


        $cursos = $this->Aluno->Matricula->Curso->find('list');
        $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');
        $anolectivos = $this->Aluno->Matricula->Anolectivo->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');

        $this->set(compact('cursos', 'planoestudos', 'anolectivos', 'turnos'));
    }

    /**
     * Renova a matricula do aluno
     * 
     * @todo  renovar a bolsa automaticamente tambem
     * @param type $aluno_id
     * @throws NotFoundException
     */
    public function renovar_matricula($aluno_id) {
        $this->Aluno->id = $aluno_id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException(__('Aluno Invalido'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {

            foreach ($this->request->data['Anolectivo'] as $k => $v) {
                if ($v != 0) {
                    $this->request->data['Matricula']['anolectivo_id'] = $v;
                    $this->Aluno->Matricula->create();
                    if ($this->Aluno->Matricula->save($this->request->data)) {
                        $this->Session->setFlash(__('A Matricula do Aluno foi renovada com Sucesso'), 'default', array('class' => 'alert success'));
                    } else {
                        $this->Session->setFlash(__('Problemas na renovacao de matricula'), 'default', array('class' => 'alert error'));
                    }
                }
            }
            //$this->redirect(array('action' => 'perfil_estudante', $this->request->data['Matricula']['aluno_id']));
        }


        $aluno = $this->Aluno->findById($aluno_id);
        $renovacoes_falta = $this->Aluno->Matricula->getStatusRenovacao($aluno_id);
        $this->Aluno->Matricula->contain('Anolectivo', 'Estadomatricula', 'Curso', 'TipoMatricula');
        $matriculas = $this->Aluno->Matricula->find('all', array('conditions' => array('aluno_id' => $aluno_id), 'order' => 'Anolectivo.ano'));

        $this->set(compact('aluno', 'renovacoes_falta', 'matriculas'));
    }

    public function mostrar_foto($codigo) {
        $this->viewClass = 'Media';
         App::uses('Folder', 'Utility');
        App::uses('File', 'Utility');
        $this->Aluno->contain();
        $aluno = $this->Aluno->findByCodigo($codigo);
        if(!empty($aluno)){
            App::uses('File', 'Utility');
        $path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS.$aluno['Aluno']['ano_ingresso'].DS;
        
        $file_path = $path . $codigo . '.jpg';
        $folder_novo = new Folder($path);
        
        $file = new File($file_path);
        
        if (!$file->exists()) {
            $codigo = 'default_profile_picture';
            $path = WWW_ROOT . DS . 'img' . DS;
        }


        $params = array(
            'id' => $codigo . '.jpg',
            'name' => 'fotografia',
            'extension' => 'jpg',
            'mimeType' => array(
                'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ),
            'path' => $path
        );
        $this->set($params);
        } else{
            throw new NotFoundException('Estudante não encontrado. Mostrar foto');
        }
        
    } 

    public function pagar_factura($aluno_id, $pagamento_id) {
        $this->Aluno->id = $aluno_id;
        $this->Aluno->Pagamento->id = $pagamento_id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException('Este Aluno não existe');
        }
        if (!$this->Aluno->exists()) {
            throw new NotFoundException('Este pagamento não existe');
        }
        App::uses('CakeTime', 'Utility');
        $CakeTime = new CakeTime();
        $this->set('aluno', $this->Aluno->read(null, $aluno_id));
        $this->Aluno->Pagamento->contain(array('Aluno' => array('Entidade'), 'Tipopagamento', 'Anolectivo'));
        $pagamento = $this->Aluno->Pagamento->read(null, $pagamento_id);
        $data_limite = $CakeTime->toUnix($pagamento['Pagamento']['data_limite']);
        $data_hoje = $CakeTime->toUnix(date('Y-m-d'));
        $dias_atraso = $data_hoje - $data_limite;

        $dias_atraso_k = $dias_atraso / 60 / 60 / 24 / 7;

        $multa = $pagamento['Pagamento']['valor'] + ($pagamento['Pagamento']['valor'] * 0.1 * $dias_atraso_k);
        $multa_2 = $pagamento['Pagamento']['valor'] * 0.1 * $dias_atraso_k;

        $this->set(compact('dias_atraso_k', 'multa', 'multa_2'));
        $this->set('pagamento', $pagamento);
    }

    public function matricula_simples($aluno_id) {
        $this->Aluno->Id = $aluno_id;
        if (!$this->Aluno->exists()) {
            
        }
        $aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $aluno_id)));
        if ($this->request->is('post') || $this->request->is('put')) {

            //Grava os dados da Entidade
            $this->Aluno->Entidade->id = $aluno['Entidade']['id'];
            $this->Aluno->Entidade->save($this->request->data);

            //Grava os dados dos Alunos
            $this->Aluno->id = $aluno['Aluno']['id'];
            $this->Aluno->save($this->request->data);
        }


        $cursos = $this->Aluno->Curso->find('list');

        $turnos = $this->Aluno->Matricula->Turno->find('list');

        $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');

        $generos = $this->Aluno->Entidade->Genero->find('list');

        $this->set(compact('aluno', 'cursos', 'turnos', 'documento_identificacaos', 'generos'));
    }

    public function ficha_cadastro($aluno_id) {
        $this->pdfConfig['orientation'] = 'landscape';

        $this->Aluno->id = $aluno_id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException('Esta aluno não existe no Sistema');
        }

        $this->Aluno->contain(array(
            'Matricula' => array(
                'Planoestudo', 'Turno'
            ),
            'Curso',
            'Entidade' => array(
                'ProvinciaNascimento', 'CidadeNascimento', 'PaisNascimento', 'Genero', 'DocumentoIdentificacao', 'EstadoCivil'
            ),
            'AlunoNivelMedio' => array(
                'EscolaNivelMedio'
            )
        ));
        $aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $aluno_id)));

        if ($aluno['Entidade']['apelido'] == null) {
            $aluno['Entidade']['apelido'] = $this->Aluno->Entidade->getApelidoFromName($aluno['Entidade']['name']);
        }
        if ($aluno['Entidade']['nomes'] == null) {
            $aluno['Entidade']['nomes'] = $this->Aluno->Entidade->getNomesFromName($aluno['Entidade']['name']);
        }
        if ($aluno['Aluno']['ano_ingresso'] == null) {
            $aluno['Aluno']['ano_ingresso'] = date('Y', strtotime($aluno['Aluno']['dataingresso']));
        }

        $this->Aluno->Inscricao->contain(array(
            'Turma' => array(
                'fields' => array(
                    'id', 'disciplina_id', 'anocurricular', 'semestrecurricular', 'anolectivo_id'),
                'Disciplina' => array(
                    'fields' => array('id', 'name')
                ),
                'Anolectivo'
            ),
            'Matricula' => array(
                'fields' => array('id', 'anolectivo_id'),
                'Anolectivo' => array(
                    'fields' => array('id', 'ano')
                )
            ),
            'Avaliacao' => array()
                )
        );
        $inscricaos = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id), 'order' => array('Turma.anocurricular,Turma.semestrecurricular')));

        $this->set('has_foto_entidade', $this->Aluno->hasFoto($aluno['Aluno']['codigo']));
        Configure::write('debug', 0);

        $this->set(compact('aluno', 'inscricaos'));
    }

    public function busca_candidato() {

        if ($this->request->is('post')) {
            $this->loadModel('Candidatura');
            $candidato = $this->Candidatura->findByNumeroEstudante($this->request->data['Candidatura']['numero_estudante']);
            if (!empty($candidato)) {
                $this->redirect(array('action' => 'matricular_candidato', $candidato['Candidatura']['id']));
            } else {
                $this->Session->setFlash(__('Candidato Invalido'));
            }
        }
    }

    public function matricular_candidato($candidato_id) {
        $this->loadModel('Candidatura');
        $candidato = $this->Candidatura->findById($candidato_id);
        $aluno_existe = $this->Aluno->findByCodigo($candidato['Candidatura']['numero_estudante']);
        if (!empty($aluno_existe)) {
            $this->Session->setFlash(__('Este candidato já está matriculado'));
            $this->redirect(array('action' => 'perfil_estudante', $aluno_existe['Aluno']['id']));
        }

        if ($this->request->is('post')) {
            $this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
            if ($this->Aluno->cadastraAluno($this->request->data)) {
                $this->Session->setFlash("Aluno Registrado com Sucesso", 'default', array('class' => 'alert_success'));
                $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->Aluno->id));
            } else {
                $this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default', array('class' => 'alert_error'));
            }
        }

        $cursos = $this->Aluno->Curso->find('list');

        $planoestudos = $this->Aluno->Matricula->Planoestudo->find('list');
        $users = $this->Aluno->Entidade->User->find('list');

        $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
        $escolaNivelMedios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
        $cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
        $provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
        $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
        $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
        $areatrabalhos = $this->Aluno->Areatrabalho->find('list');
        $generos = $this->Aluno->Entidade->Genero->find('list');
        $turnos = $this->Aluno->Matricula->Turno->find('list');
        $estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
        $cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
        $this->set(compact('candidato', 'nacionalidades', 'cursos', 'planoestudos', 'users', 'paises', 'cidades', 'provincias', 'documento_identificacaos', 'areatrabalhos', 'generos', 'cidadenascimentos', 'proveniencianomes', 'provenienciacidades', 'turnos', 'escolaNivelMedios', 'estado_civil'));
    }

    public function print_boletim_matricula($aluno_id) {


        $this->Aluno->contain(array(
            'Entidade' => array(
                'Genero', 'PaisNascimento', 'EstadoCivil', 'EntidadeIdentificacao' => array(
                    'DocumentoIdentificacao'
                )
            ),
            'Curso' => array(
                'UnidadeOrganica'
            ),
            'AlunoNivelMedio' => array(
                'EscolaNivelMedio' => array(
                    'Provincia'
                )
            )
        ));
        $aluno = $this->Aluno->findById($aluno_id);

        $faculdade = $this->Aluno->Curso->UnidadeOrganica->findById($aluno['Curso']['unidade_organica_id']);
        if ($faculdade['UnidadeOrganica']['tipo_unidade_organica_id'] != 1) {
            $faculdade = $this->Aluno->Curso->UnidadeOrganica->findById($faculdade['UnidadeOrganica']['parent_id']);
        }

        $contactos = $this->Aluno->processaContacto($aluno_id);


        $this->set(compact('aluno', 'faculdade', 'contactos'));
    }

    public function print_comprovativo_matricula($aluno_id) {
        $this->Aluno->recursive = 0;
        $aluno = $this->Aluno->findById($aluno_id);
        $this->set(compact('aluno', 'faculdade'));
    }

    public function print_comprovativo_renovacao_matricula($matricula_id) {
        $this->Aluno->Matricula->contain(array(
            'Aluno' => array(
                'Entidade', 'User'
            ),
            'Anolectivo', 'Curso', 'User' => array(
                'Entidade'
            )
        ));
        $aluno = $this->Aluno->Matricula->findById($matricula_id);

        $this->set(compact('aluno'));
    }
    
    public function print_comprovativo_mudanca_curso($mudanca_curso_id){
        
        $this->Aluno->MudancaCurso->contain(array(
            'Aluno'=>array(
                'Entidade'
            ),
            'CursoNovo'=>array(
                'UnidadeOrganica'
            ),
            'CursoAntigo','Funcionario'=>array('Entidade')
        ));
        $mudanca = $this->Aluno->MudancaCurso->findById($mudanca_curso_id);
        if($mudanca['CursoNovo']['UnidadeOrganica']['tipo_unidade_organica_id']>1){
            $this->Aluno->Curso->UnidadeOrganica->contain();
            $unidadeMae = $this->Aluno->Curso->UnidadeOrganica->findById($mudanca['CursoNovo']['UnidadeOrganica']['parent_id']);
            $mudanca['CursoNovo']['UnidadeOrganica'] = $unidadeMae['UnidadeOrganica'];
            
        }
        
        $funcionario_id = $mudanca['MudancaCurso']['funcionario_id'];
        if($funcionario_id==NULL){
            $funcionario = array('Entidade'=>array('name'=>'Elísio Leonardo'));
        } else{
            $funcionario = $this->Aluno->MudancaCurso->Funcionario->findById($funcionario_id);
        }
        
        $this->set(compact('mudanca','funcionario'));
    }

    public function anular_matricula($aluno_id) {
        
    }

    public function pesquisa_aluno_action($action_seguinte) {

        if ($this->request->is('post')) {
            $aluno = $this->Aluno->findByCodigo($this->request->data['Aluno']['codigo']);
            if (!empty($aluno)) {
                $this->redirect(array('action' => $action_seguinte, $aluno['Aluno']['id']));
            } else {
                $this->Session->setFlash(__('Estudante não encontrado'), 'default', array('class' => 'alert error'));
            }
        }
        $this->set(compact('action_seguinte'));
    }

    public function mudanca_curso($aluno_id) {

        $this->Aluno->id = $aluno_id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException('Este aluno não existe no Sistema');
        }

        if ($this->request->is('post')) {
            if($this->Aluno->mudaCurso($this->request->data)){
                $this->Session->setFlash(__('Mudança de Curso efectuada com sucesso'),'default',array('class'=>'alert success'));
                $this->set('mudanca_sucesso',1);
                $this->set('mudanca_curso_id',$this->Aluno->MudancaCurso->id);
            }
            
            
        }
        $this->Aluno->contain(array(
            'Entidade' => array(
                'Genero'
            ),
            'Curso' => array(
                'UnidadeOrganica'
            )
        ));
        $aluno = $this->Aluno->findById($aluno_id);
        $cursos = $this->Aluno->Curso->find('list');
        $is_regular = $this->Aluno->isRegular($aluno_id);
        $funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.Id'));

        if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
            if ($is_regular[0]['estado'] == 1) {
                $classe_estado = "alert note no-margin";
            } else {
                $classe_estado = "alert success";
            }
        } else {
            $classe_estado = "alert error";
        }

        $this->set(compact('aluno', 'is_regular', 'classe_estado', 'cursos','funcionario'));
    }
    
    public function alterar_nome($aluno_id){
        
        if($this->request->is('post')){
            $nomes = trim($this->request->data['Aluno']['nomes']);
            $apelido = trim($this->request->data['Aluno']['apelido']);
            if($nomes != '' && $apelido != ''){
                $this->Aluno->contain();
                $aluno = $this->Aluno->findById($this->request->data['Aluno']['aluno_id']);
                
                $entidade = $this->Aluno->Entidade->findById($aluno['Aluno']['entidade_id']);
                
                $this->Aluno->Entidade->id = $entidade['Entidade']['id'];
                $this->Aluno->Entidade->set('nomes',$nomes);
                $this->Aluno->Entidade->set('apelido',$apelido);
                $this->Aluno->Entidade->set('name',$nomes." ".$apelido);
                $this->Aluno->Entidade->save();
                $this->Session->setFlash(__('Nome Alterado com Sucesso'),'default',array('class'=>'alert success'));
                $this->redirect(array('action'=>'perfil_estudante',$this->request->data['Aluno']['aluno_id']));
            }
        }
         $this->Aluno->contain(array(
            'Entidade' => array(
                'Genero'
            ),
            'Curso' => array(
                'UnidadeOrganica'
            )
        ));
        $aluno = $this->Aluno->findById($aluno_id);
        
        $is_regular = $this->Aluno->isRegular($aluno_id);
        

        if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
            if ($is_regular[0]['estado'] == 1) {
                $classe_estado = "alert note no-margin";
            } else {
                $classe_estado = "alert success";
            }
        } else {
            $classe_estado = "alert error";
        }

        $this->set(compact('aluno', 'is_regular', 'classe_estado'));
    }
    
    
    public function alterar_status($aluno_id){
        
        if($this->request->is('post')){
            
            if($this->Aluno->alteraStatus($this->request->data['Aluno'])){
                $this->Session->setFlash(__('Status do Aluno Alterado Com Sucesso'),'default',array('class'=>'alert success'));
                $this->redirect(array('action'=>'perfil_estudante',$this->request->data['Aluno']['aluno_id']));
            } else {
                $this->Session->setFlash(__('Problemas ao alterar Status do Estudante'),'default',array('class'=>'alert error'));
            }
        }
        
        $this->Aluno->contain(array(
            'Entidade' => array(
                'Genero'
            ),
            'Curso' => array(
                'UnidadeOrganica'
            )
        ));
        $aluno = $this->Aluno->findById($aluno_id);
        
        $is_regular = $this->Aluno->isRegular($aluno_id);
        $funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.Id'));

        if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
            if ($is_regular[0]['estado'] == 1) {
                $classe_estado = "alert note no-margin";
            } else {
                $classe_estado = "alert success";
            }
        } else {
            $classe_estado = "alert error";
        }

        $estadoAlunos = $this->Aluno->EstadoAluno->find('list');
        $motivoEstadoAlunos = $this->Aluno->AlunoEstado->MotivoEstadoAluno->find('list');
        $this->set(compact('aluno', 'is_regular', 'classe_estado', 'cursos','funcionario','estadoAlunos','motivoEstadoAlunos'));
    }
    
    public function concluir_nivel($aluno_id){
        
        if($this->request->is('post')){
           if($this->Aluno->concluirNivel($this->request->data)){
               $this->Session->setFlash(__('Conclusão Registrada com Sucesso'),'default',array('class'=>'alert success'));
               $this->redirect(array('action'=>'perfil_estudante',$this->request->data['Aluno']['aluno_id']));
           } else {
               $this->Session->setFlash(__('Problemas ao registrar a Conclusão de Nivel'),'default',array('class'=>'alert error'));
           }
            
        }
        
        $this->Aluno->contain(array(
            'Entidade' => array(
                'Genero'
            ),
            'Curso' => array(
                'UnidadeOrganica'
            )
        ));
        $aluno = $this->Aluno->findById($aluno_id);
        $funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.Id'));
        $is_regular = $this->Aluno->isRegular($aluno_id);
        

        if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
            if ($is_regular[0]['estado'] == 1) {
                $classe_estado = "alert note no-margin";
            } else {
                $classe_estado = "alert success";
            }
        } else {
            $classe_estado = "alert error";
        }

        $this->set(compact('aluno', 'is_regular', 'classe_estado'));
        $this->set(compact('aluno', 'is_regular', 'classe_estado', 'cursos','funcionario'));
    }
    
    
        function faculdade_index() {

        $conditions = array();
        if ($this->request->is('post')) {
            if ($this->request->data['Aluno']['codigo'] != '') {
                $conditions['Aluno.codigo'] = $this->request->data['Aluno']['codigo'];
            } else {
                $conditions['Entidade.nomes LIKE'] = '%' . $this->request->data['Aluno']['nomes'] . '%';
                $conditions['Entidade.apelido LIKE'] = '%' . $this->request->data['Aluno']['apelido'] . '%';
            }
        }

        $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
        $conditions['Curso.unidade_organica_id']=$unidade_organica_id;

        $this->Aluno->contain('Entidade', 'Curso');
        $alunos = $this->Aluno->find('all', array('conditions' => $conditions, 'limit' => 1000));
        
        if(count($alunos)==1){
            $this->redirect(array('action'=>'perfil_estudante',$alunos[0]['Aluno']['id']));
        }

        $this->set('alunos', $alunos);
    }
    
    public function alterar_nome_candidato($codigo){
        $this->loadModel('Candidatura');
        if($this->request->is('post')){
            $this->Candidatura->id = $this->request->data['Candidatura']['candidatura_id'];
            $this->Candidatura->save($this->request->data);
            $this->Session->setFlash('Nome de Candidato Alterado','default',array('class'=>'alert success'));
            $this->redirect('/');
        }
        
        $candidato = $this->Candidatura->findById($codigo);
        $this->set(compact('candidato'));
        
    }
    
    public function busca_candidatos_action($action_seguinte){
        if ($this->request->is('post')) {
            $this->loadModel('Candidatura');
            $candidato = $this->Candidatura->findByNumeroEstudante($this->request->data['Candidatura']['numero_estudante']);
            if (!empty($candidato)) {
                $this->redirect(array('action' => $action_seguinte, $candidato['Candidatura']['id']));
            } else {
                $this->Session->setFlash(__('Candidato Invalido'));
            }
        }
    }

    

}
