<?php
App::uses('AppController', 'Controller');
/**
 * AreaAcademicas Controller
 *
 * @property AreaAcademica $AreaAcademica
 */
class AreaAcademicasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AreaAcademica->recursive = 0;
		$this->set('areaAcademicas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AreaAcademica->id = $id;
		if (!$this->AreaAcademica->exists()) {
			throw new NotFoundException(__('Invalid area academica'));
		}
		$this->set('areaAcademica', $this->AreaAcademica->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AreaAcademica->create();
			if ($this->AreaAcademica->save($this->request->data)) {
				$this->Session->setFlash(__('The area academica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area academica could not be saved. Please, try again.'));
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
		$this->AreaAcademica->id = $id;
		if (!$this->AreaAcademica->exists()) {
			throw new NotFoundException(__('Invalid area academica'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AreaAcademica->save($this->request->data)) {
				$this->Session->setFlash(__('The area academica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area academica could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AreaAcademica->read(null, $id);
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
		$this->AreaAcademica->id = $id;
		if (!$this->AreaAcademica->exists()) {
			throw new NotFoundException(__('Invalid area academica'));
		}
		if ($this->AreaAcademica->delete()) {
			$this->Session->setFlash(__('Area academica deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Area academica was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
