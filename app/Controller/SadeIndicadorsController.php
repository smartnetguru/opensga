<?php
App::uses('AppController', 'Controller');
/**
 * SadeIndicadors Controller
 *
 * @property SadeIndicador $SadeIndicador
 */
class SadeIndicadorsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SadeIndicador->recursive = 0;
		$this->set('sadeIndicadors', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SadeIndicador->id = $id;
		if (!$this->SadeIndicador->exists()) {
			throw new NotFoundException(__('Invalid sade indicador'));
		}
		$this->set('sadeIndicador', $this->SadeIndicador->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SadeIndicador->create();
			if ($this->SadeIndicador->save($this->request->data)) {
				$this->Session->setFlash(__('The sade indicador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade indicador could not be saved. Please, try again.'));
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
		$this->SadeIndicador->id = $id;
		if (!$this->SadeIndicador->exists()) {
			throw new NotFoundException(__('Invalid sade indicador'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SadeIndicador->save($this->request->data)) {
				$this->Session->setFlash(__('The sade indicador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade indicador could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SadeIndicador->read(null, $id);
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
		$this->SadeIndicador->id = $id;
		if (!$this->SadeIndicador->exists()) {
			throw new NotFoundException(__('Invalid sade indicador'));
		}
		if ($this->SadeIndicador->delete()) {
			$this->Session->setFlash(__('Sade indicador deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sade indicador was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
