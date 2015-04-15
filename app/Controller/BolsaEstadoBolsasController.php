<?php
App::uses('AppController', 'Controller');
/**
 * BolsaEstadoBolsas Controller
 *
 * @property BolsaEstadoBolsa $BolsaEstadoBolsa
 */
class BolsaEstadoBolsasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaEstadoBolsa->recursive = 0;
		$this->set('bolsaEstadoBolsas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaEstadoBolsa->id = $id;
		if (!$this->BolsaEstadoBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa estado bolsa'));
		}
		$this->set('bolsaEstadoBolsa', $this->BolsaEstadoBolsa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaEstadoBolsa->create();
			if ($this->BolsaEstadoBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa estado bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa estado bolsa could not be saved. Please, try again.'));
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
		$this->BolsaEstadoBolsa->id = $id;
		if (!$this->BolsaEstadoBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa estado bolsa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaEstadoBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa estado bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa estado bolsa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaEstadoBolsa->read(null, $id);
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
		$this->BolsaEstadoBolsa->id = $id;
		if (!$this->BolsaEstadoBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa estado bolsa'));
		}
		if ($this->BolsaEstadoBolsa->delete()) {
			$this->Session->setFlash(__('Bolsa estado bolsa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa estado bolsa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
