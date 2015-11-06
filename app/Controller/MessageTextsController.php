<?php
App::uses('AppController', 'Controller');
/**
 * MessageTexts Controller
 *
 * @property MessageText $MessageText
 * @property PaginatorComponent $Paginator
 */
class MessageTextsController extends AppController {

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
		$this->MessageText->recursive = 0;
		$this->set('messageTexts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MessageText->exists($id)) {
			throw new NotFoundException(__('Invalid message text'));
		}
		$options = array('conditions' => array('MessageText.' . $this->MessageText->primaryKey => $id));
		$this->set('messageText', $this->MessageText->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MessageText->create();
			if ($this->MessageText->save($this->request->data)) {
				$this->Flash->success(__('The message text has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The message text could not be saved. Please, try again.'));
			}
		}
		$messages = $this->MessageText->Message->find('list');
		$this->set(compact('messages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MessageText->exists($id)) {
			throw new NotFoundException(__('Invalid message text'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MessageText->save($this->request->data)) {
				$this->Flash->success(__('The message text has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The message text could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MessageText.' . $this->MessageText->primaryKey => $id));
			$this->request->data = $this->MessageText->find('first', $options);
		}
		$messages = $this->MessageText->Message->find('list');
		$this->set(compact('messages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MessageText->id = $id;
		if (!$this->MessageText->exists()) {
			throw new NotFoundException(__('Invalid message text'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MessageText->delete()) {
			$this->Flash->success(__('The message text has been deleted.'));
		} else {
			$this->Flash->error(__('The message text could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
