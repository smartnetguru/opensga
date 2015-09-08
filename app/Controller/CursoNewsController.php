<?php
App::uses('AppController', 'Controller');
/**
 * CursoNews Controller
 *
 * @property CursoNews $CursoNews
 * @property PaginatorComponent $Paginator
 */
class CursoNewsController extends AppController {

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
		$this->CursoNews->recursive = 0;
		$this->set('cursoNews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CursoNews->exists($id)) {
			throw new NotFoundException(__('Invalid curso news'));
		}
		$options = array('conditions' => array('CursoNews.' . $this->CursoNews->primaryKey => $id));
		$this->set('cursoNews', $this->CursoNews->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CursoNews->create();
			if ($this->CursoNews->save($this->request->data)) {
				$this->Flash->success(__('The curso news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curso news could not be saved. Please, try again.'));
			}
		}
		$grauAcademicos = $this->CursoNews->GrauAcademico->find('list');
		$tipoCursos = $this->CursoNews->TipoCurso->find('list');
		$unidadeOrganicas = $this->CursoNews->UnidadeOrganica->find('list');
		$estadoObjectos = $this->CursoNews->EstadoObjecto->find('list');
		$cursoResponsavels = $this->CursoNews->CursoResponsavel->find('list');
		$this->set(compact('grauAcademicos', 'tipoCursos', 'unidadeOrganicas', 'estadoObjectos', 'cursoResponsavels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CursoNews->exists($id)) {
			throw new NotFoundException(__('Invalid curso news'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CursoNews->save($this->request->data)) {
				$this->Flash->success(__('The curso news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curso news could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursoNews.' . $this->CursoNews->primaryKey => $id));
			$this->request->data = $this->CursoNews->find('first', $options);
		}
		$grauAcademicos = $this->CursoNews->GrauAcademico->find('list');
		$tipoCursos = $this->CursoNews->TipoCurso->find('list');
		$unidadeOrganicas = $this->CursoNews->UnidadeOrganica->find('list');
		$estadoObjectos = $this->CursoNews->EstadoObjecto->find('list');
		$cursoResponsavels = $this->CursoNews->CursoResponsavel->find('list');
		$this->set(compact('grauAcademicos', 'tipoCursos', 'unidadeOrganicas', 'estadoObjectos', 'cursoResponsavels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CursoNews->id = $id;
		if (!$this->CursoNews->exists()) {
			throw new NotFoundException(__('Invalid curso news'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CursoNews->delete()) {
			$this->Flash->success(__('The curso news has been deleted.'));
		} else {
			$this->Flash->error(__('The curso news could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
