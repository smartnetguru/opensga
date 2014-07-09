<?php
App::uses('AppController', 'Controller');
/**
 * EstadoCivils Controller
 *
 * @property EstadoCivil $EstadoCivil
 */
class EstadoCivilsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EstadoCivil->recursive = 0;
		$this->set('estadoCivils', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EstadoCivil->id = $id;
		if (!$this->EstadoCivil->exists()) {
			throw new NotFoundException(__('Invalid estado civil'));
		}
		$this->set('estadoCivil', $this->EstadoCivil->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstadoCivil->create();
			if ($this->EstadoCivil->save($this->request->data)) {
				$this->Session->setFlash(__('The estado civil has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado civil could not be saved. Please, try again.'));
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
		$this->EstadoCivil->id = $id;
		if (!$this->EstadoCivil->exists()) {
			throw new NotFoundException(__('Invalid estado civil'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstadoCivil->save($this->request->data)) {
				$this->Session->setFlash(__('The estado civil has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado civil could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EstadoCivil->read(null, $id);
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
		$this->EstadoCivil->id = $id;
		if (!$this->EstadoCivil->exists()) {
			throw new NotFoundException(__('Invalid estado civil'));
		}
		if ($this->EstadoCivil->delete()) {
			$this->Session->setFlash(__('Estado civil deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estado civil was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
