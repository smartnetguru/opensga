<?php

    /**
     * OpenSGA - Sistema de Gest�o Acad�mica
     *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
     *
     *
     * @copyright       Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.10.0.0
     *
     * @property Entidade $Entidade
     * @property Curso $Curso
     */
    class CursosController extends AppController {

        function adicionar_curso() {

            if (!empty($this->data)) {

                $this->Curso->create();
                if ($this->Curso->save($this->data)) {
                    $this->Session->setFlash(__('Curso Cadastrado com Sucesso'), 'default', array('class' => 'alert success'));

                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Erro ao Cadastrar Curso. Por favor tente de novo'), 'default', array('class' => 'alert error'));
                }
            }
            $grauacademicos   = $this->Curso->GrauAcademico->find('list');
            $tipocursos       = $this->Curso->TipoCurso->find('list');
            $unidadeOrganicas = $this->Curso->UnidadeOrganica->find('list');
            $this->set(compact('grauacademicos', 'tipocursos', 'escolas', 'unidadeOrganicas'));
        }

        public function manutencao_cursos_sem_encarregado() {
            $cursos = $this->Curso->getAllCursosSemEncarregado();
            $this->set(compact('cursos'));
            $this->render('index_no_pagination');
        }

        public function manutencao_cursos_sem_plano_estudos(){
            $cursos = $this->Curso->getCursosSemPlanoEstudos();
            $this->set(compact('cursos'));
            $this->render('index_no_pagination');
        }

        public function manutencao_cursos_sem_turno(){
            $cursos = $this->Curso->getAllCursosSemTurno();
            $this->set(compact('cursos'));
        }

        public function definir_encarregado($cursoId) {

            if ($this->request->is('post')) {
                if ($this->Curso->setResponsavelCurso($this->request->data)) {
                    $this->Session->setFlash('Encarregado Definido com Sucesso');
                    $this->redirect(array('action' => 'ver_curso', $cursoId));
                } else {
                    $this->Session->setFlash('Problemas ao Definir Encarregado. Tente Novamente');
                    $this->set('formErrors', $this->Curso->CursoResponsavel->validationErrors);
                }
            }
            $curso        = $this->Curso->findById($cursoId);
            $encarregados = $this->Curso->CursoResponsavel->User->Entidade->Funcionario
                ->getAllFuncionariosForResponsavelCurso();
            $this->set(compact('encarregados', 'curso'));
        }

        function editar_curso($id = null) {
            $this->Curso->id = $id;
            if (!$this->Curso->exists()) {
                throw new NotFoundException('Curso Inválido');
            }
            if (!$id && empty($this->data)) {
                $this->Session->setFlash('Invalido %s', 'flasherror');
                $this->redirect(array('action' => 'index'));
            }
            if (!empty($this->data)) {

                if ($this->Curso->save($this->data)) {
                    $this->Session->setFlash('Dados modificados com sucesso.', 'flashok');

                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
                }
            }
            $this->set('cursos', $this->Curso->read(null, $id));
            if (empty($this->data)) {
                $this->data = $this->Curso->read(null, $id);
            }
            $grauacademicos = $this->Curso->GrauAcademico->find('list');
            $tipocursos     = $this->Curso->TipoCurso->find('list');
            $this->set(compact('GrauAcademicos', 'tipocursos', 'escolas'));
        }

        function faculdade_adicionar_curso() {

            if ($this->request->is('post')) {
                $this->request->data['Curso']['unidade_organica_id'] = $this->Session->read('Auth.User.unidade_organica_id');
                if ($this->Curso->cadastraCurso($this->request->data)) {
                    $this->Session->setFlash(__('Dados Gravados com Sucesso'), 'default', array('class' => 'alert success'));

                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Erro ao Gravar Dados. Por favor tente de novo'), 'default', array('class' => 'alert error'));
                }
            }
            $grauAcademicos   = $this->Curso->GrauAcademico->find('list');
            $tipoCursos       = $this->Curso->TipoCurso->find('list');
            $unidadeOrganicas = $this->Curso->UnidadeOrganica->find('list');
            $turnos           = $this->Curso->CursosTurno->Turno->find('list');
            $this->set(compact('grauAcademicos', 'tipoCursos', 'escolas', 'unidadeOrganicas', 'turnos'));
        }

        function faculdade_editar_curso($id = null) {
            $this->Curso->id = $id;
            if (!$this->Curso->exists()) {
                throw new NotFoundException('Curso Inválido');
            }
            if (!$id && empty($this->data)) {
                $this->Session->setFlash('Invalido %s', 'flasherror');
                $this->redirect(array('action' => 'index'));
            }
            if (!empty($this->data)) {

                if ($this->Curso->save($this->data)) {
                    $this->Session->setFlash('Dados modificados com sucesso.', 'flashok');

                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
                }
            }
            $this->set('cursos', $this->Curso->read(null, $id));
            if (empty($this->data)) {
                $this->data = $this->Curso->read(null, $id);
            }
            $grauacademicos = $this->Curso->GrauAcademico->find('list');
            $tipocursos     = $this->Curso->TipoCurso->find('list');
            $this->set(compact('GrauAcademicos', 'tipocursos', 'escolas'));
        }

        function faculdade_index() {
            $this->paginate = array(
                'conditions' => array(
                    'Curso.unidade_organica_id' => $this->Curso->UnidadeOrganica->getWithChilds($this->Session->read('Auth.User.unidade_organica_id'))
                ),
                'contain'    => array(
                    'GrauAcademico', 'TipoCurso'
                )
            );

            $this->set('cursos', $this->paginate());
        }

        function faculdade_ver_curso($id = null) {

            if (!$id) {
                $this->Session->setFlash('Curso Invalido', 'flasherror');
                $this->redirect(array('action' => 'index'));
            }
            $this->set('cursos', $this->Curso->read(null, $id));
            if (empty($this->data)) {

                $this->data = $this->Curso->read(null, $id);
            }

            $grauacademicos = $this->Curso->GrauAcademico->find('list');
            $tipocursos     = $this->Curso->TipoCurso->find('list');
            $escolas        = $this->Curso->Escola->find('list');
            $this->set(compact('grauacademicos', 'tipocursos', 'escolas'));
        }

        public function getByFaculdade() {

            foreach ($this->request->data as $k => $v) {

                $faculdadeId = reset($v);
            }
            $departamentos = $this->Curso->UnidadeOrganica->children($faculdadeId);
            debug($departamentos);
           // $provincias = $this->Provincia->find('list', array('conditions' => array('paise_id' => $pais_id)));
           // $this->set(compact('provincias'));
            $this->layout = 'ajax';
        }

        function index() {

            $conditions = [];
            if ($this->request->is('post')) {
                $conditions = $this->__filterIndexConditions($this->request->data);
            }
            $this->paginate = array(
                'conditions' => $conditions,
                'contain'    => array(
                    'UnidadeOrganica'
                )
            );

            $unidadeOrganicas = $this->Curso->UnidadeOrganica->find('list', array('conditions' => array('tipo_unidade_organica_id' => 1)));
            $this->set('cursos', $this->paginate('Curso'));
            $this->set(compact('unidadeOrganicas'));
        }

        public function __filterIndexConditions($data) {
            $conditions = array();
            if ($this->request->data['Curso']['codigo'] != '') {
                $conditions['Curso.codigo LIKE'] = '%' . $this->request->data['Curso']['codigo'] . '%';
            }
            if ($this->request->data['Curso']['name'] != '') {
                $conditions['Curso.name LIKE'] = '%' . $this->request->data['Curso']['name'] . '%';
            }
            if ($this->request->data['Curso']['unidade_organica_id'] != '') {
                $conditions['Curso.unidade_organica_id'] = $this->request->data['Curso']['unidade_organica_id'];
            }

            return $conditions;
        }

        public function manutencao() {

            $cursosSemEncarregado = $this->Curso->find('count',array('conditions'=>['Curso.user_responsavel_curso is null']));

            $this->set(compact('cursosSemEncarregado'));
        }

        public function print_declaracao_nivel($alunoId) {
            $this->Curso->Aluno->contain(array(
                'Curso', 'Entidade'
            ));
            $aluno = $this->Curso->Aluno->findById($alunoId);
            $this->set(compact('aluno'));
        }

        function ver_curso($cursoId = null) {

            if (!$cursoId) {
                $this->Session->setFlash('Curso Invalido', 'flasherror');
                $this->redirect(array('action' => 'index'));
            }

            $this->Curso->contain(['TipoCurso', 'GrauAcademico', 'CursoResponsavel' => [
                'Entidade' => ['Funcionario']
            ]]);
            $curso = $this->Curso->getCursoForView($cursoId);

            $this->set(compact('curso'));
        }

        public function definir_estado_curso($cursoId = null){
            $curso = $this->Curso->findById($cursoId);
            if (empty($curso)) {
                $this->Flash->error('Curso Invalido');
                $this->redirect(array('action' => 'index'));
            }

            if($this->request->is('post')){
                $this->Curso->id = $this->request->data['Curso']['curso_id'];
                $this->Curso->set('estado_objecto_id',$this->request->data['Curso']['estado_objecto_id']);
                $this->Curso->save();
                $this->Flash->success('Estado do Curso Alterado com Sucesso');
                $this->redirect(['controller'=>'cursos','action'=>'ver_curso',$this->request->data['Curso']['curso_id']]);

            }

            $estadoObjectoId = $curso['Curso']['estado_objecto_id'];
            $this->loadModel('EstadoObjecto');
            $estadoObjectos = $this->EstadoObjecto->find('list',['conditions'=>['id NOT'=>$estadoObjectoId]]);
            $this->set(compact('curso','estadoObjectos'));

        }

    }

?>