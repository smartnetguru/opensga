<?php
	App::uses('AppController', 'Controller');

	/**
	 * BolsaTipoBolsas Controller
	 *
	 * @property BolsaTipoBolsa $BolsaTipoBolsa
	 */
	class BolsaTipoBolsasController extends AppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->BolsaTipoBolsa->recursive = 0;
			$this->set('bolsaTipoBolsas', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->BolsaTipoBolsa->id = $id;
			if (!$this->BolsaTipoBolsa->exists()) {
				throw new NotFoundException(__('Invalid bolsa tipo bolsa'));
			}
			$this->set('bolsaTipoBolsa', $this->BolsaTipoBolsa->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->BolsaTipoBolsa->create();
				if ($this->BolsaTipoBolsa->save($this->request->data)) {
					$this->Session->setFlash(__('The bolsa tipo bolsa has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The bolsa tipo bolsa could not be saved. Please, try again.'));
				}
			}
		}

		/**
		 * edit method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			$this->BolsaTipoBolsa->id = $id;
			if (!$this->BolsaTipoBolsa->exists()) {
				throw new NotFoundException(__('Invalid bolsa tipo bolsa'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->BolsaTipoBolsa->save($this->request->data)) {
					$this->Session->setFlash(__('The bolsa tipo bolsa has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The bolsa tipo bolsa could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->BolsaTipoBolsa->read(null, $id);
			}
		}

		/**
		 * delete method
		 *
		 * @throws MethodNotAllowedException
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->BolsaTipoBolsa->id = $id;
			if (!$this->BolsaTipoBolsa->exists()) {
				throw new NotFoundException(__('Invalid bolsa tipo bolsa'));
			}
			if ($this->BolsaTipoBolsa->delete()) {
				$this->Session->setFlash(__('Bolsa tipo bolsa deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Bolsa tipo bolsa was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
