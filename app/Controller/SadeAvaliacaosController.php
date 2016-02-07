<?php
	App::uses('AppController', 'Controller');

	/**
	 * SadeAvaliacaos Controller
	 *
	 * @property SadeAvaliacao $SadeAvaliacao
	 */
	class SadeAvaliacaosController extends AppController
	{


		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->SadeAvaliacao->recursive = 0;
			$this->set('sadeAvaliacaos', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->SadeAvaliacao->id = $id;
			if (!$this->SadeAvaliacao->exists()) {
				throw new NotFoundException(__('Invalid sade avaliacao'));
			}
			$this->set('sadeAvaliacao', $this->SadeAvaliacao->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->SadeAvaliacao->create();
				if ($this->SadeAvaliacao->save($this->request->data)) {
					$this->Session->setFlash(__('The sade avaliacao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The sade avaliacao could not be saved. Please, try again.'));
				}
			}
			$anolectivos = $this->SadeAvaliacao->AnoLectivo->find('list');
			$this->set(compact('anolectivos'));
		}

		/**
		 * edit method
		 *
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			$this->SadeAvaliacao->id = $id;
			if (!$this->SadeAvaliacao->exists()) {
				throw new NotFoundException(__('Invalid sade avaliacao'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->SadeAvaliacao->save($this->request->data)) {
					$this->Session->setFlash(__('The sade avaliacao has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The sade avaliacao could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->SadeAvaliacao->read(null, $id);
			}
			$anolectivos = $this->SadeAvaliacao->AnoLectivo->find('list');
			$this->set(compact('anolectivos'));
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
			$this->SadeAvaliacao->id = $id;
			if (!$this->SadeAvaliacao->exists()) {
				throw new NotFoundException(__('Invalid sade avaliacao'));
			}
			if ($this->SadeAvaliacao->delete()) {
				$this->Session->setFlash(__('Sade avaliacao deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Sade avaliacao was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
