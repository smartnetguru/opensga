<?php
App::uses('AppController', 'Controller');
/**
 * DocenteDisciplinas Controller
 *
 * @property DocenteDisciplina $DocenteDisciplina
 * @property PaginatorComponent $Paginator
 */
class DocenteDisciplinasController extends AppController {

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
		$this->DocenteDisciplina->recursive = 0;
		$this->set('docenteDisciplinas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocenteDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid docente disciplina'));
		}
		$options = array('conditions' => array('DocenteDisciplina.' . $this->DocenteDisciplina->primaryKey => $id));
		$this->set('docenteDisciplina', $this->DocenteDisciplina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocenteDisciplina->create();
			if ($this->DocenteDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The docente disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente disciplina could not be saved. Please, try again.'));
			}
		}
		$disciplinas = $this->DocenteDisciplina->Disciplina->find('list');
		$docentes = $this->DocenteDisciplina->Docente->find('list');
		$estadoObjectos = $this->DocenteDisciplina->EstadoObjecto->find('list');
		$this->set(compact('disciplinas', 'docentes', 'estadoObjectos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DocenteDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid docente disciplina'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DocenteDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The docente disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente disciplina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocenteDisciplina.' . $this->DocenteDisciplina->primaryKey => $id));
			$this->request->data = $this->DocenteDisciplina->find('first', $options);
		}
		$disciplinas = $this->DocenteDisciplina->Disciplina->find('list');
		$docentes = $this->DocenteDisciplina->Docente->find('list');
		$estadoObjectos = $this->DocenteDisciplina->EstadoObjecto->find('list');
		$this->set(compact('disciplinas', 'docentes', 'estadoObjectos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DocenteDisciplina->id = $id;
		if (!$this->DocenteDisciplina->exists()) {
			throw new NotFoundException(__('Invalid docente disciplina'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DocenteDisciplina->delete()) {
			$this->Session->setFlash(__('The docente disciplina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The docente disciplina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
