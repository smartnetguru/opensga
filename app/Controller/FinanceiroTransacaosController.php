<?php
App::uses('AppController', 'Controller');
/**
 * FinanceiroTransacaos Controller
 *
 * @property FinanceiroTransacao $FinanceiroTransacao
 */
class FinanceiroTransacaosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FinanceiroTransacao->recursive = 0;
		$this->set('financeiroTransacaos', $this->paginate());
	}

    
    public function novo_deposito($aluno_id){
        
    }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FinanceiroTransacao->id = $id;
		if (!$this->FinanceiroTransacao->exists()) {
			throw new NotFoundException(__('Invalid financeiro transacao'));
		}
		$this->set('financeiroTransacao', $this->FinanceiroTransacao->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FinanceiroTransacao->create();
			if ($this->FinanceiroTransacao->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro transacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro transacao could not be saved. Please, try again.'));
			}
		}
		$financeiroTipoTransacaos = $this->FinanceiroTransacao->FinanceiroTipoTransacao->find('list');
		$entidades = $this->FinanceiroTransacao->Entidade->find('list');
		$financeiroContas = $this->FinanceiroTransacao->FinanceiroContum->find('list');
		$this->set(compact('financeiroTipoTransacaos', 'entidades', 'financeiroContas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FinanceiroTransacao->id = $id;
		if (!$this->FinanceiroTransacao->exists()) {
			throw new NotFoundException(__('Invalid financeiro transacao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FinanceiroTransacao->save($this->request->data)) {
				$this->Session->setFlash(__('The financeiro transacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financeiro transacao could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FinanceiroTransacao->read(null, $id);
		}
		$financeiroTipoTransacaos = $this->FinanceiroTransacao->FinanceiroTipoTransacao->find('list');
		$entidades = $this->FinanceiroTransacao->Entidade->find('list');
		$financeiroContas = $this->FinanceiroTransacao->FinanceiroContum->find('list');
		$this->set(compact('financeiroTipoTransacaos', 'entidades', 'financeiroContas'));
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
		$this->FinanceiroTransacao->id = $id;
		if (!$this->FinanceiroTransacao->exists()) {
			throw new NotFoundException(__('Invalid financeiro transacao'));
		}
		if ($this->FinanceiroTransacao->delete()) {
			$this->Session->setFlash(__('Financeiro transacao deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Financeiro transacao was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
