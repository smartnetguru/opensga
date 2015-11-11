<?php
App::uses('AppController', 'Controller');
/**
 * NotificationUsers Controller
 *
 * @property NotificationUser $NotificationUser
 * @property PaginatorComponent $Paginator
 */
class NotificationUsersController extends AppController {

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
		$this->NotificationUser->recursive = 0;
		$this->set('notificationUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NotificationUser->exists($id)) {
			throw new NotFoundException(__('Invalid notification user'));
		}
		$options = array('conditions' => array('NotificationUser.' . $this->NotificationUser->primaryKey => $id));
		$this->set('notificationUser', $this->NotificationUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NotificationUser->create();
			if ($this->NotificationUser->save($this->request->data)) {
				$this->Flash->success(__('The notification user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The notification user could not be saved. Please, try again.'));
			}
		}
		$users = $this->NotificationUser->User->find('list');
		$notifications = $this->NotificationUser->Notification->find('list');
		$estadoMessages = $this->NotificationUser->EstadoMessage->find('list');
		$this->set(compact('users', 'notifications', 'estadoMessages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->NotificationUser->exists($id)) {
			throw new NotFoundException(__('Invalid notification user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NotificationUser->save($this->request->data)) {
				$this->Flash->success(__('The notification user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The notification user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NotificationUser.' . $this->NotificationUser->primaryKey => $id));
			$this->request->data = $this->NotificationUser->find('first', $options);
		}
		$users = $this->NotificationUser->User->find('list');
		$notifications = $this->NotificationUser->Notification->find('list');
		$estadoMessages = $this->NotificationUser->EstadoMessage->find('list');
		$this->set(compact('users', 'notifications', 'estadoMessages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->NotificationUser->id = $id;
		if (!$this->NotificationUser->exists()) {
			throw new NotFoundException(__('Invalid notification user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NotificationUser->delete()) {
			$this->Flash->success(__('The notification user has been deleted.'));
		} else {
			$this->Flash->error(__('The notification user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
