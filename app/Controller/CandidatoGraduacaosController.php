<?php
    App::uses('AppController', 'Controller');

    /**
     * CandidatoGraduacaos Controller
     *
     * @property CandidatoGraduacao $CandidatoGraduacao
     * @property PaginatorComponent $Paginator
     */
    class CandidatoGraduacaosController extends AppController
    {

        /**
         * Components
         *
         * @var array
         */
        public $components = ['Paginator'];

        /**
         * add method
         *
         * @return void
         */
        public function add()
        {
            if ($this->request->is('post')) {
                $this->CandidatoGraduacao->create();
                if ($this->CandidatoGraduacao->save($this->request->data)) {
                    $this->Session->setFlash(__('The candidato graduacao has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Session->setFlash(__('The candidato graduacao could not be saved. Please, try again.'));
                }
            }
            $alunos = $this->CandidatoGraduacao->Aluno->find('list');
            $cerimoniaGraduacaos = $this->CandidatoGraduacao->CerimoniaGraduacao->find('list');
            $estadoObjectos = $this->CandidatoGraduacao->EstadoObjecto->find('list');
            $estadoCandidaturas = $this->CandidatoGraduacao->EstadoCandidatura->find('list');
            $generos = $this->CandidatoGraduacao->Genero->find('list');
            $estadoCivils = $this->CandidatoGraduacao->EstadoCivil->find('list');
            $regimeEstudos = $this->CandidatoGraduacao->RegimeEstudo->find('list');
            $regaliaSocials = $this->CandidatoGraduacao->RegaliaSocial->find('list');
            $this->set(compact('alunos', 'cerimoniaGraduacaos', 'estadoObjectos', 'estadoCandidaturas', 'generos',
                'estadoCivils', 'regimeEstudos', 'regaliaSocials'));
        }

        public function beforeFilter()
        {
            parent::beforeFilter();
            $this->Auth->allow(['graduacao', 'numeroEstudante', 'cadastro']);


        }

        public function cadastro()
        {

            if ($this->request->is('post')) {
                $this->CandidatoGraduacao->Aluno->contain([
                    'Entidade' => ['User'],
                    'Curso'
                ]);
                $aluno = $this->CandidatoGraduacao->Aluno->find('all', [
                    'conditions' => [
                        'Aluno.ano_ingresso'       => $this->request->data['Aluno']['ano_ingresso'],
                        'Aluno.curso_id'           => $this->request->data['Aluno']['curso_id'],
                        'Entidade.nomes LIKE'      => trim($this->request->data['Entidade']['nomes']),
                        'Entidade.apelido LIKE'    => trim($this->request->data['Entidade']['apelido']),
                        'Entidade.data_nascimento' => $this->request->data['Entidade']['data_nascimento'],
                        'Entidade.genero_id'       => $this->request->data['Entidade']['genero_id']

                    ]
                ]);
                if (count($aluno) == 1) {
                    $last_login = $aluno['Entidade']['User']['ultimo_login'];
                    if ($last_login != null) {
                        $this->Flash->error('A conta do SIGA pertencente a este estudante ja foi activada previamente. Contacte a Direccao de Registo Academico para mais detalhes');
                    }
                } else {
                    $this->Flash->error('Não conseguimos encontrar nenhum estudante que satisfaca os dados introduzidos<br />
Veriifique os dados e tente novamente<br />
 Se não lembra dos seus dados de matricula, contacte o A Direccao do Registo Academico');
                }
            }

            $unidadeOrganicas = $this->CandidatoGraduacao->Curso->UnidadeOrganica->find('list');
            $cursos = $this->CandidatoGraduacao->Curso->find('list');
            $generos = $this->CandidatoGraduacao->Aluno->Entidade->Genero->find('list');
            $this->set(compact('unidadeOrganicas', 'cursos', 'generos'));
            $this->layout = 'guest_users';
        }

        public function confirmar_dados($candidatoGraduacaoId = null)
        {

        }

        public function confirmar_pagamento($candidatoGraduacaoId = null)
        {

        }

        /**
         * delete method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function delete($id = null)
        {
            $this->CandidatoGraduacao->id = $id;
            if (!$this->CandidatoGraduacao->exists()) {
                throw new NotFoundException(__('Invalid candidato graduacao'));
            }
            $this->request->onlyAllow('post', 'delete');
            if ($this->CandidatoGraduacao->delete()) {
                $this->Session->setFlash(__('The candidato graduacao has been deleted.'));
            } else {
                $this->Session->setFlash(__('The candidato graduacao could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }

        /**
         * edit method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function edit($id = null)
        {
            if (!$this->CandidatoGraduacao->exists($id)) {
                throw new NotFoundException(__('Invalid candidato graduacao'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->CandidatoGraduacao->save($this->request->data)) {
                    $this->Session->setFlash(__('The candidato graduacao has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Session->setFlash(__('The candidato graduacao could not be saved. Please, try again.'));
                }
            } else {
                $options = ['conditions' => ['CandidatoGraduacao.' . $this->CandidatoGraduacao->primaryKey => $id]];
                $this->request->data = $this->CandidatoGraduacao->find('first', $options);
            }
            $alunos = $this->CandidatoGraduacao->Aluno->find('list');
            $cerimoniaGraduacaos = $this->CandidatoGraduacao->CerimoniaGraduacao->find('list');
            $estadoObjectos = $this->CandidatoGraduacao->EstadoObjecto->find('list');
            $estadoCandidaturas = $this->CandidatoGraduacao->EstadoCandidatura->find('list');
            $generos = $this->CandidatoGraduacao->Genero->find('list');
            $estadoCivils = $this->CandidatoGraduacao->EstadoCivil->find('list');
            $regimeEstudos = $this->CandidatoGraduacao->RegimeEstudo->find('list');
            $regaliaSocials = $this->CandidatoGraduacao->RegaliaSocial->find('list');
            $this->set(compact('alunos', 'cerimoniaGraduacaos', 'estadoObjectos', 'estadoCandidaturas', 'generos',
                'estadoCivils', 'regimeEstudos', 'regaliaSocials'));
        }

        public function graduacao()
        {

            $this->layout = 'guest_users';
        }

        /**
         * index method
         *
         * @return void
         */
        public function index()
        {
            $this->CandidatoGraduacao->recursive = 0;
            $this->set('candidatoGraduacaos', $this->Paginator->paginate());
        }

        public function numeroEstudante()
        {

            $this->layout = 'guest_users';
        }

        public function rejeitar_candidatura($candidatoGraduacaoId = null)
        {

        }

        /**
         * view method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function ver_detalhes($candidatoGraduacaoId = null)
        {
            if (!$this->CandidatoGraduacao->exists($candidatoGraduacaoId)) {
                throw new NotFoundException(__('Invalid candidato graduacao'));
            }

            $this->CandidatoGraduacao->contain([
                'CerimoniaGraduacao',
                'EstadoCandidatura',
                'EstadoCivil',
                'RegimeEstudo',
                'RegaliaSocial',
                'Funcionario'
            ]);
            $options = ['conditions' => ['CandidatoGraduacao.id' => $candidatoGraduacaoId]];
            $candidatoGraduacao = $this->CandidatoGraduacao->find('first', $options);
            $aluno = $this->CandidatoGraduacao->Aluno->getAlunoForAction($candidatoGraduacao['CandidatoGraduacao']['aluno_id']);
            $this->set(compact('candidatoGraduacao', 'aluno'));
        }
    }
