<?php
App::uses('AppController', 'Controller');
/**
 * BolsaTipoCandidaturas Controller
 *
 * @property BolsaTipoCandidatura $BolsaTipoCandidatura
 */
class BolsaTipoCandidaturasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaTipoCandidatura->recursive = 0;
		$this->set('bolsaTipoCandidaturas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaTipoCandidatura->id = $id;
		if (!$this->BolsaTipoCandidatura->exists()) {
			throw new NotFoundException(__('Invalid bolsa tipo candidatura'));
		}
		$this->set('bolsaTipoCandidatura', $this->BolsaTipoCandidatura->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaTipoCandidatura->create();
			if ($this->BolsaTipoCandidatura->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa tipo candidatura has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa tipo candidatura could not be saved. Please, try again.'));
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
		$this->BolsaTipoCandidatura->id = $id;
		if (!$this->BolsaTipoCandidatura->exists()) {
			throw new NotFoundException(__('Invalid bolsa tipo candidatura'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaTipoCandidatura->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa tipo candidatura has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa tipo candidatura could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaTipoCandidatura->read(null, $id);
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
		$this->BolsaTipoCandidatura->id = $id;
		if (!$this->BolsaTipoCandidatura->exists()) {
			throw new NotFoundException(__('Invalid bolsa tipo candidatura'));
		}
		if ($this->BolsaTipoCandidatura->delete()) {
			$this->Session->setFlash(__('Bolsa tipo candidatura deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa tipo candidatura was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
