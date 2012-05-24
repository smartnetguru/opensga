<?php
App::uses('AppController', 'Controller');
/**
 * Bancos Controller
 *
 * @property Banco $Banco
 */
class BancosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Banco->recursive = 0;
		$this->set('bancos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Banco->id = $id;
		if (!$this->Banco->exists()) {
			throw new NotFoundException(__('Invalid banco'));
		}
		$this->set('banco', $this->Banco->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Banco->create();
			if ($this->Banco->save($this->request->data)) {
				$this->Session->setFlash(__('The banco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banco could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Banco->id = $id;
		if (!$this->Banco->exists()) {
			throw new NotFoundException(__('Invalid banco'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Banco->save($this->request->data)) {
				$this->Session->setFlash(__('The banco has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banco could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Banco->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Banco->id = $id;
		if (!$this->Banco->exists()) {
			throw new NotFoundException(__('Invalid banco'));
		}
		if ($this->Banco->delete()) {
			$this->Session->setFlash(__('Banco deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Banco was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
