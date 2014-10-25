<?php
App::uses('AppController', 'Controller');
/**
 * RegimeLectivos Controller
 *
 * @property RegimeLectivo $RegimeLectivo
 * @property PaginatorComponent $Paginator
 */
class RegimeLectivosController extends AppController {

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
		$this->RegimeLectivo->recursive = 0;
		$this->set('regimeLectivos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RegimeLectivo->exists($id)) {
			throw new NotFoundException(__('Invalid regime lectivo'));
		}
		$options = array('conditions' => array('RegimeLectivo.' . $this->RegimeLectivo->primaryKey => $id));
		$this->set('regimeLectivo', $this->RegimeLectivo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegimeLectivo->create();
			if ($this->RegimeLectivo->save($this->request->data)) {
				$this->Session->setFlash(__('The regime lectivo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regime lectivo could not be saved. Please, try again.'));
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
		if (!$this->RegimeLectivo->exists($id)) {
			throw new NotFoundException(__('Invalid regime lectivo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RegimeLectivo->save($this->request->data)) {
				$this->Session->setFlash(__('The regime lectivo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regime lectivo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RegimeLectivo.' . $this->RegimeLectivo->primaryKey => $id));
			$this->request->data = $this->RegimeLectivo->find('first', $options);
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
		$this->RegimeLectivo->id = $id;
		if (!$this->RegimeLectivo->exists()) {
			throw new NotFoundException(__('Invalid regime lectivo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RegimeLectivo->delete()) {
			$this->Session->setFlash(__('The regime lectivo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The regime lectivo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
