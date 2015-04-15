<?php
App::uses('AppController', 'Controller');
/**
 * BolsaCriadorContas Controller
 *
 * @property BolsaCriadorConta $BolsaCriadorConta
 */
class BolsaCriadorContasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaCriadorConta->recursive = 0;
		$this->set('bolsaCriadorContas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaCriadorConta->id = $id;
		if (!$this->BolsaCriadorConta->exists()) {
			throw new NotFoundException(__('Invalid bolsa criador conta'));
		}
		$this->set('bolsaCriadorConta', $this->BolsaCriadorConta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaCriadorConta->create();
			if ($this->BolsaCriadorConta->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa criador conta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa criador conta could not be saved. Please, try again.'));
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
		$this->BolsaCriadorConta->id = $id;
		if (!$this->BolsaCriadorConta->exists()) {
			throw new NotFoundException(__('Invalid bolsa criador conta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaCriadorConta->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa criador conta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa criador conta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaCriadorConta->read(null, $id);
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
		$this->BolsaCriadorConta->id = $id;
		if (!$this->BolsaCriadorConta->exists()) {
			throw new NotFoundException(__('Invalid bolsa criador conta'));
		}
		if ($this->BolsaCriadorConta->delete()) {
			$this->Session->setFlash(__('Bolsa criador conta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa criador conta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
