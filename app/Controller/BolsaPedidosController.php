<?php
App::uses('AppController', 'Controller');
/**
 * BolsaPedidos Controller
 *
 * @property BolsaPedido $BolsaPedido
 * @property PaginatorComponent $Paginator
 */
class BolsaPedidosController extends AppController {

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
		$this->BolsaPedido->recursive = 0;
		$this->set('bolsaPedidos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BolsaPedido->exists($id)) {
			throw new NotFoundException(__('Invalid bolsa pedido'));
		}
		$options = array('conditions' => array('BolsaPedido.' . $this->BolsaPedido->primaryKey => $id));
		$this->set('bolsaPedido', $this->BolsaPedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaPedido->create();
			if ($this->BolsaPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa pedido could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->BolsaPedido->Aluno->find('list');
		$anoLectivos = $this->BolsaPedido->AnoLectivo->find('list');
		$bolsaBolsas = $this->BolsaPedido->BolsaBolsa->find('list');
		$estadoObjectos = $this->BolsaPedido->EstadoObjecto->find('list');
		$bolsaTipoBolsas = $this->BolsaPedido->BolsaTipoBolsa->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BolsaPedido->exists($id)) {
			throw new NotFoundException(__('Invalid bolsa pedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BolsaPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa pedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BolsaPedido.' . $this->BolsaPedido->primaryKey => $id));
			$this->request->data = $this->BolsaPedido->find('first', $options);
		}
		$alunos = $this->BolsaPedido->Aluno->find('list');
		$anoLectivos = $this->BolsaPedido->AnoLectivo->find('list');
		$bolsaBolsas = $this->BolsaPedido->BolsaBolsa->find('list');
		$estadoObjectos = $this->BolsaPedido->EstadoObjecto->find('list');
		$bolsaTipoBolsas = $this->BolsaPedido->BolsaTipoBolsa->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BolsaPedido->id = $id;
		if (!$this->BolsaPedido->exists()) {
			throw new NotFoundException(__('Invalid bolsa pedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BolsaPedido->delete()) {
			$this->Session->setFlash(__('The bolsa pedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bolsa pedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
