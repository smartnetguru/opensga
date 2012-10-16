<?php
App::uses('AppController', 'Controller');
/**
 * AreaUnidades Controller
 *
 * @property AreaUnidade $AreaUnidade
 */
class AreaUnidadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AreaUnidade->recursive = 0;
		$this->set('areaUnidades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AreaUnidade->id = $id;
		if (!$this->AreaUnidade->exists()) {
			throw new NotFoundException(__('Invalid area unidade'));
		}
		$this->set('areaUnidade', $this->AreaUnidade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AreaUnidade->create();
			if ($this->AreaUnidade->save($this->request->data)) {
				$this->Session->setFlash(__('The area unidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area unidade could not be saved. Please, try again.'));
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
		$this->AreaUnidade->id = $id;
		if (!$this->AreaUnidade->exists()) {
			throw new NotFoundException(__('Invalid area unidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AreaUnidade->save($this->request->data)) {
				$this->Session->setFlash(__('The area unidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area unidade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AreaUnidade->read(null, $id);
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
		$this->AreaUnidade->id = $id;
		if (!$this->AreaUnidade->exists()) {
			throw new NotFoundException(__('Invalid area unidade'));
		}
		if ($this->AreaUnidade->delete()) {
			$this->Session->setFlash(__('Area unidade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Area unidade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
