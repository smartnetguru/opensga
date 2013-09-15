<?php
App::uses('AppController', 'Controller');
/**
 * CerimoniaGraduacaos Controller
 *
 * @property CerimoniaGraduacao $CerimoniaGraduacao
 * @property PaginatorComponent $Paginator
 */
class CerimoniaGraduacaosController extends AppController {

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
		$this->CerimoniaGraduacao->recursive = 0;
		$this->set('cerimoniaGraduacaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CerimoniaGraduacao->exists($id)) {
			throw new NotFoundException(__('Invalid cerimonia graduacao'));
		}
		$options = array('conditions' => array('CerimoniaGraduacao.' . $this->CerimoniaGraduacao->primaryKey => $id));
		$this->set('cerimoniaGraduacao', $this->CerimoniaGraduacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CerimoniaGraduacao->create();
			if ($this->CerimoniaGraduacao->save($this->request->data)) {
				$this->Session->setFlash(__('The cerimonia graduacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cerimonia graduacao could not be saved. Please, try again.'));
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
		if (!$this->CerimoniaGraduacao->exists($id)) {
			throw new NotFoundException(__('Invalid cerimonia graduacao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CerimoniaGraduacao->save($this->request->data)) {
				$this->Session->setFlash(__('The cerimonia graduacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cerimonia graduacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CerimoniaGraduacao.' . $this->CerimoniaGraduacao->primaryKey => $id));
			$this->request->data = $this->CerimoniaGraduacao->find('first', $options);
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
		$this->CerimoniaGraduacao->id = $id;
		if (!$this->CerimoniaGraduacao->exists()) {
			throw new NotFoundException(__('Invalid cerimonia graduacao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CerimoniaGraduacao->delete()) {
			$this->Session->setFlash(__('The cerimonia graduacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cerimonia graduacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
