<?php
App::uses('AppController', 'Controller');
/**
 * FuncaoProfissionals Controller
 *
 * @property FuncaoProfissional $FuncaoProfissional
 */
class FuncaoProfissionalsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FuncaoProfissional->recursive = 0;
		$this->set('funcaoProfissionals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FuncaoProfissional->exists($id)) {
			throw new NotFoundException(__('Invalid funcao profissional'));
		}
		$options = array('conditions' => array('FuncaoProfissional.' . $this->FuncaoProfissional->primaryKey => $id));
		$this->set('funcaoProfissional', $this->FuncaoProfissional->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FuncaoProfissional->create();
			if ($this->FuncaoProfissional->save($this->request->data)) {
				$this->Session->setFlash(__('The funcao profissional has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao profissional could not be saved. Please, try again.'));
			}
		}
		$funcionarios = $this->FuncaoProfissional->Funcionario->find('list');
		$this->set(compact('funcionarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FuncaoProfissional->exists($id)) {
			throw new NotFoundException(__('Invalid funcao profissional'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuncaoProfissional->save($this->request->data)) {
				$this->Session->setFlash(__('The funcao profissional has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao profissional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FuncaoProfissional.' . $this->FuncaoProfissional->primaryKey => $id));
			$this->request->data = $this->FuncaoProfissional->find('first', $options);
		}
		$funcionarios = $this->FuncaoProfissional->Funcionario->find('list');
		$this->set(compact('funcionarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FuncaoProfissional->id = $id;
		if (!$this->FuncaoProfissional->exists()) {
			throw new NotFoundException(__('Invalid funcao profissional'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FuncaoProfissional->delete()) {
			$this->Session->setFlash(__('Funcao profissional deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Funcao profissional was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
