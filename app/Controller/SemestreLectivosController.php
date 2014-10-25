<?php
App::uses('AppController', 'Controller');
/**
 * SemestreLectivos Controller
 *
 * @property SemestreLectivo $SemestreLectivo
 * @property PaginatorComponent $Paginator
 */
class SemestreLectivosController extends AppController {

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
		$this->SemestreLectivo->recursive = 0;
		$this->set('semestreLectivos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SemestreLectivo->exists($id)) {
			throw new NotFoundException(__('Invalid semestre lectivo'));
		}
		$options = array('conditions' => array('SemestreLectivo.' . $this->SemestreLectivo->primaryKey => $id));
		$this->set('semestreLectivo', $this->SemestreLectivo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SemestreLectivo->create();
			if ($this->SemestreLectivo->save($this->request->data)) {
				$this->Session->setFlash(__('The semestre lectivo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The semestre lectivo could not be saved. Please, try again.'));
			}
		}
		$anoLectivos = $this->SemestreLectivo->AnoLectivo->find('list');
		$semestres = $this->SemestreLectivo->Semestre->find('list');
		$this->set(compact('anoLectivos', 'semestres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SemestreLectivo->exists($id)) {
			throw new NotFoundException(__('Invalid semestre lectivo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SemestreLectivo->save($this->request->data)) {
				$this->Session->setFlash(__('The semestre lectivo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The semestre lectivo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SemestreLectivo.' . $this->SemestreLectivo->primaryKey => $id));
			$this->request->data = $this->SemestreLectivo->find('first', $options);
		}
		$anoLectivos = $this->SemestreLectivo->AnoLectivo->find('list');
		$semestres = $this->SemestreLectivo->Semestre->find('list');
		$this->set(compact('anoLectivos', 'semestres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SemestreLectivo->id = $id;
		if (!$this->SemestreLectivo->exists()) {
			throw new NotFoundException(__('Invalid semestre lectivo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SemestreLectivo->delete()) {
			$this->Session->setFlash(__('The semestre lectivo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The semestre lectivo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
