<?php
	App::uses('RequisicoesAppController', 'Requisicoes.Controller');

	/**
	 * RequisicoesTipoPedidos Controller
	 *
	 * @property RequisicoesTipoPedido $RequisicoesTipoPedido
	 */
	class RequisicoesTipoPedidosController extends RequisicoesAppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->RequisicoesTipoPedido->recursive = 0;
			$this->set('requisicoesTipoPedidos', $this->paginate());
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
			$this->RequisicoesTipoPedido->id = $id;
			if (!$this->RequisicoesTipoPedido->exists()) {
				throw new NotFoundException(__('Invalid requisicoes tipo pedido'));
			}
			$this->set('requisicoesTipoPedido', $this->RequisicoesTipoPedido->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->RequisicoesTipoPedido->create();
				if ($this->RequisicoesTipoPedido->save($this->request->data)) {
					$this->Session->setFlash(__('The requisicoes tipo pedido has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The requisicoes tipo pedido could not be saved. Please, try again.'));
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
			$this->RequisicoesTipoPedido->id = $id;
			if (!$this->RequisicoesTipoPedido->exists()) {
				throw new NotFoundException(__('Invalid requisicoes tipo pedido'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->RequisicoesTipoPedido->save($this->request->data)) {
					$this->Session->setFlash(__('The requisicoes tipo pedido has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The requisicoes tipo pedido could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->RequisicoesTipoPedido->read(null, $id);
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
			$this->RequisicoesTipoPedido->id = $id;
			if (!$this->RequisicoesTipoPedido->exists()) {
				throw new NotFoundException(__('Invalid requisicoes tipo pedido'));
			}
			if ($this->RequisicoesTipoPedido->delete()) {
				$this->Session->setFlash(__('Requisicoes tipo pedido deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Requisicoes tipo pedido was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
