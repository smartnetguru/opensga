<?php
App::uses('AppController', 'Controller');
/**
 * BolsaMotivoIndeferimentos Controller
 *
 * @property BolsaMotivoIndeferimento $BolsaMotivoIndeferimento
 */
class BolsaMotivoIndeferimentosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaMotivoIndeferimento->recursive = 0;
		$this->set('bolsaMotivoIndeferimentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaMotivoIndeferimento->id = $id;
		if (!$this->BolsaMotivoIndeferimento->exists()) {
			throw new NotFoundException(__('Invalid bolsa motivo indeferimento'));
		}
		$this->set('bolsaMotivoIndeferimento', $this->BolsaMotivoIndeferimento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaMotivoIndeferimento->create();
			if ($this->BolsaMotivoIndeferimento->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa motivo indeferimento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa motivo indeferimento could not be saved. Please, try again.'));
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
		$this->BolsaMotivoIndeferimento->id = $id;
		if (!$this->BolsaMotivoIndeferimento->exists()) {
			throw new NotFoundException(__('Invalid bolsa motivo indeferimento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaMotivoIndeferimento->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa motivo indeferimento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa motivo indeferimento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaMotivoIndeferimento->read(null, $id);
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
		$this->BolsaMotivoIndeferimento->id = $id;
		if (!$this->BolsaMotivoIndeferimento->exists()) {
			throw new NotFoundException(__('Invalid bolsa motivo indeferimento'));
		}
		if ($this->BolsaMotivoIndeferimento->delete()) {
			$this->Session->setFlash(__('Bolsa motivo indeferimento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa motivo indeferimento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
