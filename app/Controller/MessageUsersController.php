<?php
App::uses('AppController', 'Controller');
/**
 * MessageUsers Controller
 *
 * @property MessageUser $MessageUser
 * @property PaginatorComponent $Paginator
 */
class MessageUsersController extends AppController {

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
		$this->MessageUser->recursive = 0;
		$this->set('messageUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MessageUser->exists($id)) {
			throw new NotFoundException(__('Invalid message user'));
		}
		$options = array('conditions' => array('MessageUser.' . $this->MessageUser->primaryKey => $id));
		$this->set('messageUser', $this->MessageUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MessageUser->create();
			if ($this->MessageUser->save($this->request->data)) {
				$this->Flash->success(__('The message user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The message user could not be saved. Please, try again.'));
			}
		}
		$messages = $this->MessageUser->Message->find('list');
		$users = $this->MessageUser->User->find('list');
		$messageFolders = $this->MessageUser->MessageFolder->find('list');
		$estadoMessages = $this->MessageUser->EstadoMessage->find('list');
		$this->set(compact('messages', 'users', 'messageFolders', 'estadoMessages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MessageUser->exists($id)) {
			throw new NotFoundException(__('Invalid message user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MessageUser->save($this->request->data)) {
				$this->Flash->success(__('The message user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The message user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MessageUser.' . $this->MessageUser->primaryKey => $id));
			$this->request->data = $this->MessageUser->find('first', $options);
		}
		$messages = $this->MessageUser->Message->find('list');
		$users = $this->MessageUser->User->find('list');
		$messageFolders = $this->MessageUser->MessageFolder->find('list');
		$estadoMessages = $this->MessageUser->EstadoMessage->find('list');
		$this->set(compact('messages', 'users', 'messageFolders', 'estadoMessages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MessageUser->id = $id;
		if (!$this->MessageUser->exists()) {
			throw new NotFoundException(__('Invalid message user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MessageUser->delete()) {
			$this->Flash->success(__('The message user has been deleted.'));
		} else {
			$this->Flash->error(__('The message user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
