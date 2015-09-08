<?php
App::uses('AppController', 'Controller');
/**
 * Regimes Controller
 *
 * @property Regime $Regime
 * @property PaginatorComponent $Paginator
 */
class RegimesController extends AppController {

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
		$this->Regime->recursive = 0;
		$this->set('regimes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Regime->exists($id)) {
			throw new NotFoundException(__('Invalid regime'));
		}
		$options = array('conditions' => array('Regime.' . $this->Regime->primaryKey => $id));
		$this->set('regime', $this->Regime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Regime->create();
			if ($this->Regime->save($this->request->data)) {
				$this->Flash->success(__('The regime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The regime could not be saved. Please, try again.'));
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
		if (!$this->Regime->exists($id)) {
			throw new NotFoundException(__('Invalid regime'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Regime->save($this->request->data)) {
				$this->Flash->success(__('The regime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The regime could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Regime.' . $this->Regime->primaryKey => $id));
			$this->request->data = $this->Regime->find('first', $options);
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
		$this->Regime->id = $id;
		if (!$this->Regime->exists()) {
			throw new NotFoundException(__('Invalid regime'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Regime->delete()) {
			$this->Flash->success(__('The regime has been deleted.'));
		} else {
			$this->Flash->error(__('The regime could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
