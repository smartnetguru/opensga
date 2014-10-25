<?php
App::uses('AppController', 'Controller');
/**
 * GrauAcademicos Controller
 *
 * @property GrauAcademico $GrauAcademico
 * @property PaginatorComponent $Paginator
 */
class GrauAcademicosController extends AppController {

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
		$this->GrauAcademico->recursive = 0;
		$this->set('grauAcademicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GrauAcademico->exists($id)) {
			throw new NotFoundException(__('Invalid grau academico'));
		}
		$options = array('conditions' => array('GrauAcademico.' . $this->GrauAcademico->primaryKey => $id));
		$this->set('grauAcademico', $this->GrauAcademico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GrauAcademico->create();
			if ($this->GrauAcademico->save($this->request->data)) {
				$this->Session->setFlash(__('The grau academico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grau academico could not be saved. Please, try again.'));
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
		if (!$this->GrauAcademico->exists($id)) {
			throw new NotFoundException(__('Invalid grau academico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GrauAcademico->save($this->request->data)) {
				$this->Session->setFlash(__('The grau academico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grau academico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GrauAcademico.' . $this->GrauAcademico->primaryKey => $id));
			$this->request->data = $this->GrauAcademico->find('first', $options);
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
		$this->GrauAcademico->id = $id;
		if (!$this->GrauAcademico->exists()) {
			throw new NotFoundException(__('Invalid grau academico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GrauAcademico->delete()) {
			$this->Session->setFlash(__('The grau academico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grau academico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
