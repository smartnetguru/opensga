<?php
App::uses('CooperacaoAppController', 'Cooperacao.Controller');
/**
 * CooperacaoAcordoAreas Controller
 *
 * @property CooperacaoAcordoArea $CooperacaoAcordoArea
 * @property PaginatorComponent $Paginator
 */
class CooperacaoAcordoAreasController extends CooperacaoAppController {

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
		$this->CooperacaoAcordoArea->recursive = 0;
		$this->set('cooperacaoAcordoAreas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CooperacaoAcordoArea->exists($id)) {
			throw new NotFoundException(__('Invalid cooperacao acordo area'));
		}
		$options = array('conditions' => array('CooperacaoAcordoArea.' . $this->CooperacaoAcordoArea->primaryKey => $id));
		$this->set('cooperacaoAcordoArea', $this->CooperacaoAcordoArea->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CooperacaoAcordoArea->create();
			if ($this->CooperacaoAcordoArea->save($this->request->data)) {
				$this->Session->setFlash(__('The cooperacao acordo area has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cooperacao acordo area could not be saved. Please, try again.'));
			}
		}
		$cooperacaoAcordos = $this->CooperacaoAcordoArea->CooperacaoAcordo->find('list');
		$cooperacaoAreas = $this->CooperacaoAcordoArea->CooperacaoArea->find('list');
		$this->set(compact('cooperacaoAcordos', 'cooperacaoAreas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CooperacaoAcordoArea->exists($id)) {
			throw new NotFoundException(__('Invalid cooperacao acordo area'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CooperacaoAcordoArea->save($this->request->data)) {
				$this->Session->setFlash(__('The cooperacao acordo area has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cooperacao acordo area could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CooperacaoAcordoArea.' . $this->CooperacaoAcordoArea->primaryKey => $id));
			$this->request->data = $this->CooperacaoAcordoArea->find('first', $options);
		}
		$cooperacaoAcordos = $this->CooperacaoAcordoArea->CooperacaoAcordo->find('list');
		$cooperacaoAreas = $this->CooperacaoAcordoArea->CooperacaoArea->find('list');
		$this->set(compact('cooperacaoAcordos', 'cooperacaoAreas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CooperacaoAcordoArea->id = $id;
		if (!$this->CooperacaoAcordoArea->exists()) {
			throw new NotFoundException(__('Invalid cooperacao acordo area'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CooperacaoAcordoArea->delete()) {
			$this->Session->setFlash(__('The cooperacao acordo area has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cooperacao acordo area could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
