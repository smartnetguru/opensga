<?php
App::uses('AppController', 'Controller');
/**
 * BolsaCandidatoFamilias Controller
 *
 * @property BolsaCandidatoFamilia $BolsaCandidatoFamilia
 */
class BolsaCandidatoFamiliasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaCandidatoFamilia->recursive = 0;
		$this->set('bolsaCandidatoFamilias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaCandidatoFamilia->id = $id;
		if (!$this->BolsaCandidatoFamilia->exists()) {
			throw new NotFoundException(__('Invalid bolsa candidato familia'));
		}
		$this->set('bolsaCandidatoFamilia', $this->BolsaCandidatoFamilia->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaCandidatoFamilia->create();
			if ($this->BolsaCandidatoFamilia->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa candidato familia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa candidato familia could not be saved. Please, try again.'));
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
		$this->BolsaCandidatoFamilia->id = $id;
		if (!$this->BolsaCandidatoFamilia->exists()) {
			throw new NotFoundException(__('Invalid bolsa candidato familia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaCandidatoFamilia->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa candidato familia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa candidato familia could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaCandidatoFamilia->read(null, $id);
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
		$this->BolsaCandidatoFamilia->id = $id;
		if (!$this->BolsaCandidatoFamilia->exists()) {
			throw new NotFoundException(__('Invalid bolsa candidato familia'));
		}
		if ($this->BolsaCandidatoFamilia->delete()) {
			$this->Session->setFlash(__('Bolsa candidato familia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa candidato familia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
