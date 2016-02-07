<?php
	App::uses('AppController', 'Controller');

	/**
	 * TipoInstituicaos Controller
	 *
	 * @property TipoInstituicao $TipoInstituicao
	 */
	class TipoInstituicaosController extends AppController
	{


		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->TipoInstituicao->recursive = 0;
			$this->set('tipoInstituicaos', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->TipoInstituicao->id = $id;
			if (!$this->TipoInstituicao->exists()) {
				throw new NotFoundException(__('Invalid tipo instituicao'));
			}
			$this->set('tipoInstituicao', $this->TipoInstituicao->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->TipoInstituicao->create();
				if ($this->TipoInstituicao->save($this->request->data)) {
					$this->Session->setFlash(__('The tipo instituicao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The tipo instituicao could not be saved. Please, try again.'));
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
			$this->TipoInstituicao->id = $id;
			if (!$this->TipoInstituicao->exists()) {
				throw new NotFoundException(__('Invalid tipo instituicao'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->TipoInstituicao->save($this->request->data)) {
					$this->Session->setFlash(__('The tipo instituicao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The tipo instituicao could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->TipoInstituicao->read(null, $id);
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
			$this->TipoInstituicao->id = $id;
			if (!$this->TipoInstituicao->exists()) {
				throw new NotFoundException(__('Invalid tipo instituicao'));
			}
			if ($this->TipoInstituicao->delete()) {
				$this->Session->setFlash(__('Tipo instituicao deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Tipo instituicao was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
