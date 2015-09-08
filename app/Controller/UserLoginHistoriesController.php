<?php
App::uses('AppController', 'Controller');
/**
 * UserLoginHistories Controller
 *
 * @property UserLoginHistorie $UserLoginHistorie
 * @property PaginatorComponent $Paginator
 */
class UserLoginHistoriesController extends AppController {

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
		$this->UserLoginHistorie->recursive = 0;
		$this->set('userLoginHistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserLoginHistorie->exists($id)) {
			throw new NotFoundException(__('Invalid user login historie'));
		}
		$options = array('conditions' => array('UserLoginHistorie.' . $this->UserLoginHistorie->primaryKey => $id));
		$this->set('userLoginHistorie', $this->UserLoginHistorie->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserLoginHistorie->create();
			if ($this->UserLoginHistorie->save($this->request->data)) {
				$this->Flash->success(__('The user login historie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user login historie could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserLoginHistorie->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserLoginHistorie->exists($id)) {
			throw new NotFoundException(__('Invalid user login historie'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserLoginHistorie->save($this->request->data)) {
				$this->Flash->success(__('The user login historie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user login historie could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserLoginHistorie.' . $this->UserLoginHistorie->primaryKey => $id));
			$this->request->data = $this->UserLoginHistorie->find('first', $options);
		}
		$users = $this->UserLoginHistorie->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserLoginHistorie->id = $id;
		if (!$this->UserLoginHistorie->exists()) {
			throw new NotFoundException(__('Invalid user login historie'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserLoginHistorie->delete()) {
			$this->Flash->success(__('The user login historie has been deleted.'));
		} else {
			$this->Flash->error(__('The user login historie could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
