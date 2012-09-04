<?php
App::uses('AppController', 'Controller');
/**
 * FinanceiroPagamentos Controller
 *
 * @property FinanceiroPagamento $FinanceiroPagamento
 */
class FinanceiroPagamentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FinanceiroPagamento->recursive = 0;
		$this->set('financeiroPagamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FinanceiroPagamento->id = $id;
		if (!$this->FinanceiroPagamento->exists()) {
			throw new NotFoundException(__('Invalid financeiro pagamento'));
		}
		$this->set('financeiroPagamento', $this->FinanceiroPagamento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FinanceiroPagamento->create();
			if ($this->FinanceiroPagamento->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro pagamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro pagamento could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->FinanceiroPagamento->Aluno->find('list');
		$financeiroContas = $this->FinanceiroPagamento->FinanceiroContum->find('list');
		$financeiroTipoPagamentos = $this->FinanceiroPagamento->FinanceiroTipoPagamento->find('list');
		$anolectivos = $this->FinanceiroPagamento->Anolectivo->find('list');
		$financeiroEstadoPagamentos = $this->FinanceiroPagamento->FinanceiroEstadoPagamento->find('list');
		$this->set(compact('alunos', 'financeiroContas', 'financeiroTipoPagamentos', 'anolectivos', 'financeiroEstadoPagamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FinanceiroPagamento->id = $id;
		if (!$this->FinanceiroPagamento->exists()) {
			throw new NotFoundException(__('Invalid financeiro pagamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FinanceiroPagamento->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro pagamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro pagamento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FinanceiroPagamento->read(null, $id);
		}
		$alunos = $this->FinanceiroPagamento->Aluno->find('list');
		$financeiroContas = $this->FinanceiroPagamento->FinanceiroContum->find('list');
		$financeiroTipoPagamentos = $this->FinanceiroPagamento->FinanceiroTipoPagamento->find('list');
		$anolectivos = $this->FinanceiroPagamento->Anolectivo->find('list');
		$financeiroEstadoPagamentos = $this->FinanceiroPagamento->FinanceiroEstadoPagamento->find('list');
		$this->set(compact('alunos', 'financeiroContas', 'financeiroTipoPagamentos', 'anolectivos', 'financeiroEstadoPagamentos'));
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
		$this->FinanceiroPagamento->id = $id;
		if (!$this->FinanceiroPagamento->exists()) {
			throw new NotFoundException(__('Invalid financeiro pagamento'));
		}
		if ($this->FinanceiroPagamento->delete()) {
			$this->Session->setFlash(__('Financeiro pagamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financeiro pagamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
