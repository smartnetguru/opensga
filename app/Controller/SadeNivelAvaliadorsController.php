<?php
	App::uses('AppController', 'Controller');

	/**
	 * SadeNivelAvaliadors Controller
	 *
	 * @property SadeNivelAvaliador $SadeNivelAvaliador
	 */
	class SadeNivelAvaliadorsController extends AppController
	{


		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->SadeNivelAvaliador->recursive = 0;
			$this->set('sadeNivelAvaliadors', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->SadeNivelAvaliador->id = $id;
			if (!$this->SadeNivelAvaliador->exists()) {
				throw new NotFoundException(__('Invalid sade nivel avaliador'));
			}
			$this->set('sadeNivelAvaliador', $this->SadeNivelAvaliador->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->SadeNivelAvaliador->create();
				if ($this->SadeNivelAvaliador->save($this->request->data)) {
					$this->Session->setFlash(__('The sade nivel avaliador has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The sade nivel avaliador could not be saved. Please, try again.'));
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
			$this->SadeNivelAvaliador->id = $id;
			if (!$this->SadeNivelAvaliador->exists()) {
				throw new NotFoundException(__('Invalid sade nivel avaliador'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->SadeNivelAvaliador->save($this->request->data)) {
					$this->Session->setFlash(__('The sade nivel avaliador has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The sade nivel avaliador could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->SadeNivelAvaliador->read(null, $id);
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
			$this->SadeNivelAvaliador->id = $id;
			if (!$this->SadeNivelAvaliador->exists()) {
				throw new NotFoundException(__('Invalid sade nivel avaliador'));
			}
			if ($this->SadeNivelAvaliador->delete()) {
				$this->Session->setFlash(__('Sade nivel avaliador deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Sade nivel avaliador was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
