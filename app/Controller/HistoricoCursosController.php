<?php
App::uses('AppController', 'Controller');
/**
 * HistoricoCursos Controller
 *
 * @property HistoricoCurso $HistoricoCurso
 * @property PaginatorComponent $Paginator
 */
class HistoricoCursosController extends AppController {

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
		$this->HistoricoCurso->recursive = 0;
		$this->set('historicoCursos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistoricoCurso->exists($id)) {
			throw new NotFoundException(__('Invalid historico curso'));
		}
		$options = array('conditions' => array('HistoricoCurso.' . $this->HistoricoCurso->primaryKey => $id));
		$this->set('historicoCurso', $this->HistoricoCurso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistoricoCurso->create();
			if ($this->HistoricoCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The historico curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historico curso could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->HistoricoCurso->Aluno->find('list');
		$cursos = $this->HistoricoCurso->Curso->find('list');
		$planoEstudos = $this->HistoricoCurso->PlanoEstudo->find('list');
		$this->set(compact('alunos', 'cursos', 'planoEstudos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HistoricoCurso->exists($id)) {
			throw new NotFoundException(__('Invalid historico curso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoricoCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The historico curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historico curso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoricoCurso.' . $this->HistoricoCurso->primaryKey => $id));
			$this->request->data = $this->HistoricoCurso->find('first', $options);
		}
		$alunos = $this->HistoricoCurso->Aluno->find('list');
		$cursos = $this->HistoricoCurso->Curso->find('list');
		$planoEstudos = $this->HistoricoCurso->PlanoEstudo->find('list');
		$this->set(compact('alunos', 'cursos', 'planoEstudos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HistoricoCurso->id = $id;
		if (!$this->HistoricoCurso->exists()) {
			throw new NotFoundException(__('Invalid historico curso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HistoricoCurso->delete()) {
			$this->Session->setFlash(__('The historico curso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The historico curso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
