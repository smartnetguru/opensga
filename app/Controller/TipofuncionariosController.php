<?php
App::uses('AppController', 'Controller');
/**
 * TipoFuncionarios Controller
 *
 * @property TipoFuncionario $TipoFuncionario
 * @property PaginatorComponent $Paginator
 */
class TipoFuncionariosController extends AppController {

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
		$this->TipoFuncionario->recursive = 0;
		$this->set('tipoFuncionarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoFuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid tipo funcionario'));
		}
		$options = array('conditions' => array('TipoFuncionario.' . $this->TipoFuncionario->primaryKey => $id));
		$this->set('tipoFuncionario', $this->TipoFuncionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoFuncionario->create();
			if ($this->TipoFuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo funcionario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo funcionario could not be saved. Please, try again.'));
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
		if (!$this->TipoFuncionario->exists($id)) {
			throw new NotFoundException(__('Invalid tipo funcionario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoFuncionario->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo funcionario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo funcionario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoFuncionario.' . $this->TipoFuncionario->primaryKey => $id));
			$this->request->data = $this->TipoFuncionario->find('first', $options);
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
		$this->TipoFuncionario->id = $id;
		if (!$this->TipoFuncionario->exists()) {
			throw new NotFoundException(__('Invalid tipo funcionario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoFuncionario->delete()) {
			$this->Session->setFlash(__('The tipo funcionario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo funcionario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
