<?php
App::uses('AppController', 'Controller');
/**
 * CursoTipoPamentos Controller
 *
 * @property CursoTipoPamento $CursoTipoPamento
 */
class CursoTipoPamentosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CursoTipoPamento->recursive = 0;
		$this->set('cursoTipoPamentos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CursoTipoPamento->id = $id;
		if (!$this->CursoTipoPamento->exists()) {
			throw new NotFoundException(__('Invalid curso tipo pamento'));
		}
		$this->set('cursoTipoPamento', $this->CursoTipoPamento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CursoTipoPamento->create();
			if ($this->CursoTipoPamento->save($this->request->data)) {
				$this->Session->setFlash(__('The curso tipo pamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso tipo pamento could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->CursoTipoPamento->Curso->find('list');
		$tipopagamentos = $this->CursoTipoPamento->Tipopagamento->find('list');
		$this->set(compact('cursos', 'tipopagamentos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CursoTipoPamento->id = $id;
		if (!$this->CursoTipoPamento->exists()) {
			throw new NotFoundException(__('Invalid curso tipo pamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursoTipoPamento->save($this->request->data)) {
				$this->Session->setFlash(__('The curso tipo pamento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso tipo pamento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CursoTipoPamento->read(null, $id);
		}
		$cursos = $this->CursoTipoPamento->Curso->find('list');
		$tipopagamentos = $this->CursoTipoPamento->Tipopagamento->find('list');
		$this->set(compact('cursos', 'tipopagamentos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CursoTipoPamento->id = $id;
		if (!$this->CursoTipoPamento->exists()) {
			throw new NotFoundException(__('Invalid curso tipo pamento'));
		}
		if ($this->CursoTipoPamento->delete()) {
			$this->Session->setFlash(__('Curso tipo pamento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Curso tipo pamento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
