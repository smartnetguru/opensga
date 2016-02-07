<?php
	App::uses('AppController', 'Controller');

	/**
	 * DocenteFuncaos Controller
	 *
	 * @property DocenteFuncao $DocenteFuncao
	 */
	class DocenteFuncaosController extends AppController
	{


		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->DocenteFuncao->recursive = 0;
			$this->set('docenteFuncaos', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->DocenteFuncao->id = $id;
			if (!$this->DocenteFuncao->exists()) {
				throw new NotFoundException(__('Invalid docente funcao'));
			}
			$this->set('docenteFuncao', $this->DocenteFuncao->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->DocenteFuncao->create();
				if ($this->DocenteFuncao->save($this->request->data)) {
					$this->Session->setFlash(__('The docente funcao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The docente funcao could not be saved. Please, try again.'));
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
			$this->DocenteFuncao->id = $id;
			if (!$this->DocenteFuncao->exists()) {
				throw new NotFoundException(__('Invalid docente funcao'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->DocenteFuncao->save($this->request->data)) {
					$this->Session->setFlash(__('The docente funcao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The docente funcao could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->DocenteFuncao->read(null, $id);
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
			$this->DocenteFuncao->id = $id;
			if (!$this->DocenteFuncao->exists()) {
				throw new NotFoundException(__('Invalid docente funcao'));
			}
			if ($this->DocenteFuncao->delete()) {
				$this->Session->setFlash(__('Docente funcao deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Docente funcao was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
