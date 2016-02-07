<?php
	App::uses('AppController', 'Controller');

	/**
	 * FinanceiroTipoPagamentos Controller
	 *
	 * @property FinanceiroTipoPagamento $FinanceiroTipoPagamento
	 */
	class FinanceiroTipoPagamentosController extends AppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->FinanceiroTipoPagamento->recursive = 0;
			$this->set('financeiroTipoPagamentos', $this->paginate());
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
			$this->FinanceiroTipoPagamento->id = $id;
			if (!$this->FinanceiroTipoPagamento->exists()) {
				throw new NotFoundException(__('Invalid financeiro tipo pagamento'));
			}
			$this->set('financeiroTipoPagamento', $this->FinanceiroTipoPagamento->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->FinanceiroTipoPagamento->create();
				if ($this->FinanceiroTipoPagamento->save($this->request->data)) {
					$this->Session->setFlash(__('The financeiro tipo pagamento has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The financeiro tipo pagamento could not be saved. Please, try again.'));
				}
			}
			$months = $this->FinanceiroTipoPagamento->Month->find('list');
			$this->set(compact('months'));
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
			$this->FinanceiroTipoPagamento->id = $id;
			if (!$this->FinanceiroTipoPagamento->exists()) {
				throw new NotFoundException(__('Invalid financeiro tipo pagamento'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->FinanceiroTipoPagamento->save($this->request->data)) {
					$this->Session->setFlash(__('The financeiro tipo pagamento has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The financeiro tipo pagamento could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->FinanceiroTipoPagamento->read(null, $id);
			}
			$months = $this->FinanceiroTipoPagamento->Month->find('list');
			$this->set(compact('months'));
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
			$this->FinanceiroTipoPagamento->id = $id;
			if (!$this->FinanceiroTipoPagamento->exists()) {
				throw new NotFoundException(__('Invalid financeiro tipo pagamento'));
			}
			if ($this->FinanceiroTipoPagamento->delete()) {
				$this->Session->setFlash(__('Financeiro tipo pagamento deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Financeiro tipo pagamento was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
