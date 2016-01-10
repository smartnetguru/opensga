<?php
App::uses('AppController', 'Controller');
/**
 * OpensgaSessions Controller
 *
 * @property OpensgaSessiom $OpensgaSessiom
 * @property PaginatorComponent $Paginator
 */
class OpensgaSessionsController extends AppController {

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
		$this->OpensgaSessiom->recursive = 0;
		$this->set('opensgaSessions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OpensgaSessiom->exists($id)) {
			throw new NotFoundException(__('Invalid opensga sessiom'));
		}
		$options = array('conditions' => array('OpensgaSessiom.' . $this->OpensgaSessiom->primaryKey => $id));
		$this->set('opensgaSessiom', $this->OpensgaSessiom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OpensgaSessiom->create();
			if ($this->OpensgaSessiom->save($this->request->data)) {
				$this->Flash->success(__('The opensga sessiom has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The opensga sessiom could not be saved. Please, try again.'));
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
		if (!$this->OpensgaSessiom->exists($id)) {
			throw new NotFoundException(__('Invalid opensga sessiom'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OpensgaSessiom->save($this->request->data)) {
				$this->Flash->success(__('The opensga sessiom has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The opensga sessiom could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OpensgaSessiom.' . $this->OpensgaSessiom->primaryKey => $id));
			$this->request->data = $this->OpensgaSessiom->find('first', $options);
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
		$this->OpensgaSessiom->id = $id;
		if (!$this->OpensgaSessiom->exists()) {
			throw new NotFoundException(__('Invalid opensga sessiom'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OpensgaSessiom->delete()) {
			$this->Flash->success(__('The opensga sessiom has been deleted.'));
		} else {
			$this->Flash->error(__('The opensga sessiom could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
