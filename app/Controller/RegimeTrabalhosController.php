<?php
	App::uses('AppController', 'Controller');

	/**
	 * RegimeTrabalhos Controller
	 *
	 * @property RegimeTrabalho $RegimeTrabalho
	 */
	class RegimeTrabalhosController extends AppController
	{


		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->RegimeTrabalho->recursive = 0;
			$this->set('regimeTrabalhos', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->RegimeTrabalho->id = $id;
			if (!$this->RegimeTrabalho->exists()) {
				throw new NotFoundException(__('Invalid regime trabalho'));
			}
			$this->set('regimeTrabalho', $this->RegimeTrabalho->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->RegimeTrabalho->create();
				if ($this->RegimeTrabalho->save($this->request->data)) {
					$this->Session->setFlash(__('The regime trabalho has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The regime trabalho could not be saved. Please, try again.'));
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
			$this->RegimeTrabalho->id = $id;
			if (!$this->RegimeTrabalho->exists()) {
				throw new NotFoundException(__('Invalid regime trabalho'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->RegimeTrabalho->save($this->request->data)) {
					$this->Session->setFlash(__('The regime trabalho has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The regime trabalho could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->RegimeTrabalho->read(null, $id);
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
			$this->RegimeTrabalho->id = $id;
			if (!$this->RegimeTrabalho->exists()) {
				throw new NotFoundException(__('Invalid regime trabalho'));
			}
			if ($this->RegimeTrabalho->delete()) {
				$this->Session->setFlash(__('Regime trabalho deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Regime trabalho was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
