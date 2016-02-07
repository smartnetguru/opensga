<?php
	App::uses('AppController', 'Controller');

	/**
	 * AlunoViaAdmissaos Controller
	 *
	 * @property AlunoViaAdmissao $AlunoViaAdmissao
	 */
	class AlunoViaAdmissaosController extends AppController
	{


		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->AlunoViaAdmissao->recursive = 0;
			$this->set('alunoViaAdmissaos', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->AlunoViaAdmissao->id = $id;
			if (!$this->AlunoViaAdmissao->exists()) {
				throw new NotFoundException(__('Invalid aluno via admissao'));
			}
			$this->set('alunoViaAdmissao', $this->AlunoViaAdmissao->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->AlunoViaAdmissao->create();
				if ($this->AlunoViaAdmissao->save($this->request->data)) {
					$this->Session->setFlash(__('The aluno via admissao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The aluno via admissao could not be saved. Please, try again.'));
				}
			}
		}

		/**
		 * edit method
		 *
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			$this->AlunoViaAdmissao->id = $id;
			if (!$this->AlunoViaAdmissao->exists()) {
				throw new NotFoundException(__('Invalid aluno via admissao'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->AlunoViaAdmissao->save($this->request->data)) {
					$this->Session->setFlash(__('The aluno via admissao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The aluno via admissao could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->AlunoViaAdmissao->read(null, $id);
			}
		}

		/**
		 * delete method
		 *
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->AlunoViaAdmissao->id = $id;
			if (!$this->AlunoViaAdmissao->exists()) {
				throw new NotFoundException(__('Invalid aluno via admissao'));
			}
			if ($this->AlunoViaAdmissao->delete()) {
				$this->Session->setFlash(__('Aluno via admissao deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Aluno via admissao was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
