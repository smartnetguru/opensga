<?php
App::uses('AppController', 'Controller');
/**
 * TipoInscricaos Controller
 *
 * @property TipoInscricao $TipoInscricao
 * @property PaginatorComponent $Paginator
 */
class TipoInscricaosController extends AppController {

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
		$this->TipoInscricao->recursive = 0;
		$this->set('tipoInscricaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoInscricao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo inscricao'));
		}
		$options = array('conditions' => array('TipoInscricao.' . $this->TipoInscricao->primaryKey => $id));
		$this->set('tipoInscricao', $this->TipoInscricao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoInscricao->create();
			if ($this->TipoInscricao->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo inscricao could not be saved. Please, try again.'));
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
		if (!$this->TipoInscricao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo inscricao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoInscricao->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo inscricao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoInscricao.' . $this->TipoInscricao->primaryKey => $id));
			$this->request->data = $this->TipoInscricao->find('first', $options);
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
		$this->TipoInscricao->id = $id;
		if (!$this->TipoInscricao->exists()) {
			throw new NotFoundException(__('Invalid tipo inscricao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoInscricao->delete()) {
			$this->Session->setFlash(__('The tipo inscricao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo inscricao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
