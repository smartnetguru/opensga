<?php
App::uses('AppController', 'Controller');
/**
 * ArtigoMetas Controller
 *
 * @property ArtigoMeta $ArtigoMeta
 * @property PaginatorComponent $Paginator
 */
class ArtigoMetasController extends AppController {

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
		$this->ArtigoMeta->recursive = 0;
		$this->set('artigoMetas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArtigoMeta->exists($id)) {
			throw new NotFoundException(__('Invalid artigo meta'));
		}
		$options = array('conditions' => array('ArtigoMeta.' . $this->ArtigoMeta->primaryKey => $id));
		$this->set('artigoMeta', $this->ArtigoMeta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArtigoMeta->create();
			if ($this->ArtigoMeta->save($this->request->data)) {
				$this->Flash->success(__('The artigo meta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The artigo meta could not be saved. Please, try again.'));
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
		if (!$this->ArtigoMeta->exists($id)) {
			throw new NotFoundException(__('Invalid artigo meta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArtigoMeta->save($this->request->data)) {
				$this->Flash->success(__('The artigo meta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The artigo meta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArtigoMeta.' . $this->ArtigoMeta->primaryKey => $id));
			$this->request->data = $this->ArtigoMeta->find('first', $options);
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
		$this->ArtigoMeta->id = $id;
		if (!$this->ArtigoMeta->exists()) {
			throw new NotFoundException(__('Invalid artigo meta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArtigoMeta->delete()) {
			$this->Flash->success(__('The artigo meta has been deleted.'));
		} else {
			$this->Flash->error(__('The artigo meta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
