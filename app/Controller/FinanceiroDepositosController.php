<?php
App::uses('AppController', 'Controller');
/**
 * FinanceiroDepositos Controller
 *
 * @property FinanceiroDeposito $FinanceiroDeposito
 */
class FinanceiroDepositosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FinanceiroDeposito->recursive = 0;
		$this->set('financeiroDepositos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FinanceiroDeposito->id = $id;
		if (!$this->FinanceiroDeposito->exists()) {
			throw new NotFoundException(__('Invalid financeiro deposito'));
		}
		$this->set('financeiroDeposito', $this->FinanceiroDeposito->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FinanceiroDeposito->create();
			if ($this->FinanceiroDeposito->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro deposito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro deposito could not be saved. Please, try again.'));
			}
		}
		$entidades = $this->FinanceiroDeposito->Entidade->find('list');
		$financeiroContas = $this->FinanceiroDeposito->FinanceiroContum->find('list');
		$financeiroEstadoDepositos = $this->FinanceiroDeposito->FinanceiroEstadoDeposito->find('list');
		$financeiroFormaDepositos = $this->FinanceiroDeposito->FinanceiroFormaDeposito->find('list');
		$financeiroBancos = $this->FinanceiroDeposito->FinanceiroBanco->find('list');
		$this->set(compact('entidades', 'financeiroContas', 'financeiroEstadoDepositos', 'financeiroFormaDepositos', 'financeiroBancos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FinanceiroDeposito->id = $id;
		if (!$this->FinanceiroDeposito->exists()) {
			throw new NotFoundException(__('Invalid financeiro deposito'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FinanceiroDeposito->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro deposito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro deposito could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FinanceiroDeposito->read(null, $id);
		}
		$entidades = $this->FinanceiroDeposito->Entidade->find('list');
		$financeiroContas = $this->FinanceiroDeposito->FinanceiroContum->find('list');
		$financeiroEstadoDepositos = $this->FinanceiroDeposito->FinanceiroEstadoDeposito->find('list');
		$financeiroFormaDepositos = $this->FinanceiroDeposito->FinanceiroFormaDeposito->find('list');
		$financeiroBancos = $this->FinanceiroDeposito->FinanceiroBanco->find('list');
		$this->set(compact('entidades', 'financeiroContas', 'financeiroEstadoDepositos', 'financeiroFormaDepositos', 'financeiroBancos'));
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
		$this->FinanceiroDeposito->id = $id;
		if (!$this->FinanceiroDeposito->exists()) {
			throw new NotFoundException(__('Invalid financeiro deposito'));
		}
		if ($this->FinanceiroDeposito->delete()) {
			$this->Session->setFlash(__('Financeiro deposito deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financeiro deposito was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
