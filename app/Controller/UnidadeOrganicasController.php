<?php
App::uses('AppController', 'Controller');
/**
 * UnidadeOrganicas Controller
 *
 * @property UnidadeOrganica $UnidadeOrganica
 */
class UnidadeOrganicasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UnidadeOrganica->recursive = 0;
		$this->set('unidadeOrganicas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UnidadeOrganica->id = $id;
		if (!$this->UnidadeOrganica->exists()) {
			throw new NotFoundException(__('Invalid unidade organica'));
		}
		$this->set('unidadeOrganica', $this->UnidadeOrganica->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UnidadeOrganica->create();
			if ($this->UnidadeOrganica->save($this->request->data)) {
				$this->Session->setFlash(__('The unidade organica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade organica could not be saved. Please, try again.'));
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
		$this->UnidadeOrganica->id = $id;
		if (!$this->UnidadeOrganica->exists()) {
			throw new NotFoundException(__('Invalid unidade organica'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UnidadeOrganica->save($this->request->data)) {
				$this->Session->setFlash(__('The unidade organica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade organica could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UnidadeOrganica->read(null, $id);
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
		$this->UnidadeOrganica->id = $id;
		if (!$this->UnidadeOrganica->exists()) {
			throw new NotFoundException(__('Invalid unidade organica'));
		}
		if ($this->UnidadeOrganica->delete()) {
			$this->Session->setFlash(__('Unidade organica deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Unidade organica was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
