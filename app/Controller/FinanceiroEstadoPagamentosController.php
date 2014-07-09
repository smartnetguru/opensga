<?php
App::uses('AppController', 'Controller');
/**
 * FinanceiroEstadoPagamentos Controller
 *
 * @property FinanceiroEstadoPagamento $FinanceiroEstadoPagamento
 */
class FinanceiroEstadoPagamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FinanceiroEstadoPagamento->recursive = 0;
		$this->set('financeiroEstadoPagamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FinanceiroEstadoPagamento->id = $id;
		if (!$this->FinanceiroEstadoPagamento->exists()) {
			throw new NotFoundException(__('Invalid financeiro estado pagamento'));
		}
		$this->set('financeiroEstadoPagamento', $this->FinanceiroEstadoPagamento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FinanceiroEstadoPagamento->create();
			if ($this->FinanceiroEstadoPagamento->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro estado pagamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro estado pagamento could not be saved. Please, try again.'));
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
		$this->FinanceiroEstadoPagamento->id = $id;
		if (!$this->FinanceiroEstadoPagamento->exists()) {
			throw new NotFoundException(__('Invalid financeiro estado pagamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FinanceiroEstadoPagamento->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro estado pagamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro estado pagamento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FinanceiroEstadoPagamento->read(null, $id);
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
		$this->FinanceiroEstadoPagamento->id = $id;
		if (!$this->FinanceiroEstadoPagamento->exists()) {
			throw new NotFoundException(__('Invalid financeiro estado pagamento'));
		}
		if ($this->FinanceiroEstadoPagamento->delete()) {
			$this->Session->setFlash(__('Financeiro estado pagamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financeiro estado pagamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
