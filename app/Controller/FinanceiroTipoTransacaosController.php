<?php
App::uses('AppController', 'Controller');
/**
 * FinanceiroTipoTransacaos Controller
 *
 * @property FinanceiroTipoTransacao $FinanceiroTipoTransacao
 */
class FinanceiroTipoTransacaosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FinanceiroTipoTransacao->recursive = 0;
		$this->set('financeiroTipoTransacaos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FinanceiroTipoTransacao->id = $id;
		if (!$this->FinanceiroTipoTransacao->exists()) {
			throw new NotFoundException(__('Invalid financeiro tipo transacao'));
		}
		$this->set('financeiroTipoTransacao', $this->FinanceiroTipoTransacao->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FinanceiroTipoTransacao->create();
			if ($this->FinanceiroTipoTransacao->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro tipo transacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro tipo transacao could not be saved. Please, try again.'));
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
		$this->FinanceiroTipoTransacao->id = $id;
		if (!$this->FinanceiroTipoTransacao->exists()) {
			throw new NotFoundException(__('Invalid financeiro tipo transacao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FinanceiroTipoTransacao->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro tipo transacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro tipo transacao could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FinanceiroTipoTransacao->read(null, $id);
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
		$this->FinanceiroTipoTransacao->id = $id;
		if (!$this->FinanceiroTipoTransacao->exists()) {
			throw new NotFoundException(__('Invalid financeiro tipo transacao'));
		}
		if ($this->FinanceiroTipoTransacao->delete()) {
			$this->Session->setFlash(__('Financeiro tipo transacao deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financeiro tipo transacao was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
