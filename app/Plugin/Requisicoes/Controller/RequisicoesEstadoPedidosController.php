<?php
App::uses('RequisicoesAppController', 'Requisicoes.Controller');
/**
 * RequisicoesEstadoPedidos Controller
 *
 * @property RequisicoesEstadoPedido $RequisicoesEstadoPedido
 */
class RequisicoesEstadoPedidosController extends RequisicoesAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RequisicoesEstadoPedido->recursive = 0;
		$this->set('requisicoesEstadoPedidos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RequisicoesEstadoPedido->id = $id;
		if (!$this->RequisicoesEstadoPedido->exists()) {
			throw new NotFoundException(__('Invalid requisicoes estado pedido'));
		}
		$this->set('requisicoesEstadoPedido', $this->RequisicoesEstadoPedido->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RequisicoesEstadoPedido->create();
			if ($this->RequisicoesEstadoPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The requisicoes estado pedido has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisicoes estado pedido could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		$this->RequisicoesEstadoPedido->id = $id;
		if (!$this->RequisicoesEstadoPedido->exists()) {
			throw new NotFoundException(__('Invalid requisicoes estado pedido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RequisicoesEstadoPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The requisicoes estado pedido has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisicoes estado pedido could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RequisicoesEstadoPedido->read(null, $id);
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
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->RequisicoesEstadoPedido->id = $id;
		if (!$this->RequisicoesEstadoPedido->exists()) {
			throw new NotFoundException(__('Invalid requisicoes estado pedido'));
		}
		if ($this->RequisicoesEstadoPedido->delete()) {
			$this->Session->setFlash(__('Requisicoes estado pedido deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Requisicoes estado pedido was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
