<?php
App::uses('AppController', 'Controller');
/**
 * ArtigoCategorias Controller
 *
 * @property ArtigoCategoria $ArtigoCategoria
 * @property PaginatorComponent $Paginator
 */
class ArtigoCategoriasController extends AppController {

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
		$this->ArtigoCategoria->recursive = 0;
		$this->set('artigoCategorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArtigoCategoria->exists($id)) {
			throw new NotFoundException(__('Invalid artigo categoria'));
		}
		$options = array('conditions' => array('ArtigoCategoria.' . $this->ArtigoCategoria->primaryKey => $id));
		$this->set('artigoCategoria', $this->ArtigoCategoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArtigoCategoria->create();
			if ($this->ArtigoCategoria->save($this->request->data)) {
				$this->Flash->success(__('The artigo categoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The artigo categoria could not be saved. Please, try again.'));
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
		if (!$this->ArtigoCategoria->exists($id)) {
			throw new NotFoundException(__('Invalid artigo categoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArtigoCategoria->save($this->request->data)) {
				$this->Flash->success(__('The artigo categoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The artigo categoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArtigoCategoria.' . $this->ArtigoCategoria->primaryKey => $id));
			$this->request->data = $this->ArtigoCategoria->find('first', $options);
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
		$this->ArtigoCategoria->id = $id;
		if (!$this->ArtigoCategoria->exists()) {
			throw new NotFoundException(__('Invalid artigo categoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArtigoCategoria->delete()) {
			$this->Flash->success(__('The artigo categoria has been deleted.'));
		} else {
			$this->Flash->error(__('The artigo categoria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
