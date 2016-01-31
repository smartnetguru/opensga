<?php
App::uses('AppController', 'Controller');
/**
 * NecessidadeEspecials Controller
 *
 * @property NecessidadeEspecial $NecessidadeEspecial
 * @property PaginatorComponent $Paginator
 */
class NecessidadeEspecialsController extends AppController {

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
		$this->NecessidadeEspecial->recursive = 0;
		$this->set('necessidadeEspecials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NecessidadeEspecial->exists($id)) {
			throw new NotFoundException(__('Invalid necessidade especial'));
		}
		$options = array('conditions' => array('NecessidadeEspecial.' . $this->NecessidadeEspecial->primaryKey => $id));
		$this->set('necessidadeEspecial', $this->NecessidadeEspecial->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NecessidadeEspecial->create();
			if ($this->NecessidadeEspecial->save($this->request->data)) {
				$this->Flash->success(__('The necessidade especial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The necessidade especial could not be saved. Please, try again.'));
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
		if (!$this->NecessidadeEspecial->exists($id)) {
			throw new NotFoundException(__('Invalid necessidade especial'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NecessidadeEspecial->save($this->request->data)) {
				$this->Flash->success(__('The necessidade especial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The necessidade especial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NecessidadeEspecial.' . $this->NecessidadeEspecial->primaryKey => $id));
			$this->request->data = $this->NecessidadeEspecial->find('first', $options);
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
		$this->NecessidadeEspecial->id = $id;
		if (!$this->NecessidadeEspecial->exists()) {
			throw new NotFoundException(__('Invalid necessidade especial'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NecessidadeEspecial->delete()) {
			$this->Flash->success(__('The necessidade especial has been deleted.'));
		} else {
			$this->Flash->error(__('The necessidade especial could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
