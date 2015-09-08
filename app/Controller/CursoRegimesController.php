<?php
App::uses('AppController', 'Controller');
/**
 * CursoRegimes Controller
 *
 * @property CursoRegime $CursoRegime
 * @property PaginatorComponent $Paginator
 */
class CursoRegimesController extends AppController {

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
		$this->CursoRegime->recursive = 0;
		$this->set('cursoRegimes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CursoRegime->exists($id)) {
			throw new NotFoundException(__('Invalid curso regime'));
		}
		$options = array('conditions' => array('CursoRegime.' . $this->CursoRegime->primaryKey => $id));
		$this->set('cursoRegime', $this->CursoRegime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CursoRegime->create();
			if ($this->CursoRegime->save($this->request->data)) {
				$this->Flash->success(__('The curso regime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curso regime could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->CursoRegime->Curso->find('list');
		$regimes = $this->CursoRegime->Regime->find('list');
		$this->set(compact('cursos', 'regimes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CursoRegime->exists($id)) {
			throw new NotFoundException(__('Invalid curso regime'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CursoRegime->save($this->request->data)) {
				$this->Flash->success(__('The curso regime has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curso regime could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursoRegime.' . $this->CursoRegime->primaryKey => $id));
			$this->request->data = $this->CursoRegime->find('first', $options);
		}
		$cursos = $this->CursoRegime->Curso->find('list');
		$regimes = $this->CursoRegime->Regime->find('list');
		$this->set(compact('cursos', 'regimes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CursoRegime->id = $id;
		if (!$this->CursoRegime->exists()) {
			throw new NotFoundException(__('Invalid curso regime'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CursoRegime->delete()) {
			$this->Flash->success(__('The curso regime has been deleted.'));
		} else {
			$this->Flash->error(__('The curso regime could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
