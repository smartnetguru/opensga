<?php
App::uses('AppController', 'Controller');
/**
 * EpocaAvaliacaos Controller
 *
 * @property EpocaAvaliacao $EpocaAvaliacao
 * @property PaginatorComponent $Paginator
 */
class EpocaAvaliacaosController extends AppController {

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
		$this->EpocaAvaliacao->recursive = 0;
		$this->set('epocaAvaliacaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EpocaAvaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid epoca avaliacao'));
		}
		$options = array('conditions' => array('EpocaAvaliacao.' . $this->EpocaAvaliacao->primaryKey => $id));
		$this->set('epocaAvaliacao', $this->EpocaAvaliacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EpocaAvaliacao->create();
			if ($this->EpocaAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The epoca avaliacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The epoca avaliacao could not be saved. Please, try again.'));
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
		if (!$this->EpocaAvaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid epoca avaliacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EpocaAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The epoca avaliacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The epoca avaliacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EpocaAvaliacao.' . $this->EpocaAvaliacao->primaryKey => $id));
			$this->request->data = $this->EpocaAvaliacao->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EpocaAvaliacao->id = $id;
		if (!$this->EpocaAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid epoca avaliacao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EpocaAvaliacao->delete()) {
			$this->Session->setFlash(__('The epoca avaliacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The epoca avaliacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
