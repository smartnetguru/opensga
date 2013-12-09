<?php
App::uses('AppController', 'Controller');
/**
 * BolsaValorBolsas Controller
 *
 * @property BolsaValorBolsa $BolsaValorBolsa
 */
class BolsaValorBolsasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaValorBolsa->recursive = 0;
		$this->set('bolsaValorBolsas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaValorBolsa->id = $id;
		if (!$this->BolsaValorBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa valor bolsa'));
		}
		$this->set('bolsaValorBolsa', $this->BolsaValorBolsa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaValorBolsa->create();
			if ($this->BolsaValorBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa valor bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa valor bolsa could not be saved. Please, try again.'));
			}
		}
		$anolectivos = $this->BolsaValorBolsa->Anolectivo->find('list');
		$bolsaTipoBolsas = $this->BolsaValorBolsa->BolsaTipoBolsa->find('list');
		$this->set(compact('anolectivos', 'bolsaTipoBolsas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BolsaValorBolsa->id = $id;
		if (!$this->BolsaValorBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa valor bolsa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaValorBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa valor bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa valor bolsa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaValorBolsa->read(null, $id);
		}
		$anolectivos = $this->BolsaValorBolsa->Anolectivo->find('list');
		$bolsaTipoBolsas = $this->BolsaValorBolsa->BolsaTipoBolsa->find('list');
		$this->set(compact('anolectivos', 'bolsaTipoBolsas'));
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
		$this->BolsaValorBolsa->id = $id;
		if (!$this->BolsaValorBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa valor bolsa'));
		}
		if ($this->BolsaValorBolsa->delete()) {
			$this->Session->setFlash(__('Bolsa valor bolsa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa valor bolsa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
