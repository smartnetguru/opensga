<?php
	App::uses('AppController', 'Controller');

	/**
	 * FinanceiroContas Controller
	 *
	 * @property FinanceiroConta $FinanceiroConta
	 */
	class FinanceiroContasController extends AppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->FinanceiroConta->recursive = 0;
			$this->set('financeiroContas', $this->paginate());
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
			$this->FinanceiroConta->id = $id;
			if (!$this->FinanceiroConta->exists()) {
				throw new NotFoundException(__('Invalid financeiro conta'));
			}
			$this->set('financeiroConta', $this->FinanceiroConta->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->FinanceiroConta->create();
				if ($this->FinanceiroConta->save($this->request->data)) {
					$this->Session->setFlash(__('The financeiro conta has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The financeiro conta could not be saved. Please, try again.'));
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
			$this->FinanceiroConta->id = $id;
			if (!$this->FinanceiroConta->exists()) {
				throw new NotFoundException(__('Invalid financeiro conta'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->FinanceiroConta->save($this->request->data)) {
					$this->Session->setFlash(__('The financeiro conta has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The financeiro conta could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->FinanceiroConta->read(null, $id);
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
			$this->FinanceiroConta->id = $id;
			if (!$this->FinanceiroConta->exists()) {
				throw new NotFoundException(__('Invalid financeiro conta'));
			}
			if ($this->FinanceiroConta->delete()) {
				$this->Session->setFlash(__('Financeiro conta deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Financeiro conta was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
