<?php
App::uses('AppController', 'Controller');
/**
 * Bairros Controller
 *
 * @property Bairro $Bairro
 * @property PaginatorComponent $Paginator
 */
class BairrosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bairro->recursive = 0;
		$this->set('bairros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bairro->exists($id)) {
			throw new NotFoundException(__('Invalid bairro'));
		}
		$options = array('conditions' => array('Bairro.' . $this->Bairro->primaryKey => $id));
		$this->set('bairro', $this->Bairro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bairro->create();
			if ($this->Bairro->save($this->request->data)) {
				$this->Session->setFlash(__('The bairro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bairro could not be saved. Please, try again.'));
			}
		}
		$cidades = $this->Bairro->Cidade->find('list');
		$this->set(compact('cidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bairro->exists($id)) {
			throw new NotFoundException(__('Invalid bairro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bairro->save($this->request->data)) {
				$this->Session->setFlash(__('The bairro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bairro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bairro.' . $this->Bairro->primaryKey => $id));
			$this->request->data = $this->Bairro->find('first', $options);
		}
		$cidades = $this->Bairro->Cidade->find('list');
		$this->set(compact('cidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bairro->id = $id;
		if (!$this->Bairro->exists()) {
			throw new NotFoundException(__('Invalid bairro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bairro->delete()) {
			$this->Session->setFlash(__('The bairro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bairro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
