<?php
App::uses('AppController', 'Controller');
/**
 * EnderecoEntidades Controller
 *
 * @property EnderecoEntidade $EnderecoEntidade
 */
class EnderecoEntidadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EnderecoEntidade->recursive = 0;
		$this->set('enderecoEntidades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EnderecoEntidade->id = $id;
		if (!$this->EnderecoEntidade->exists()) {
			throw new NotFoundException(__('Invalid endereco entidade'));
		}
		$this->set('enderecoEntidade', $this->EnderecoEntidade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EnderecoEntidade->create();
			if ($this->EnderecoEntidade->save($this->request->data)) {
				$this->Session->setFlash(__('The endereco entidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The endereco entidade could not be saved. Please, try again.'));
			}
		}
		$entidades = $this->EnderecoEntidade->Entidade->find('list');
		$cidades = $this->EnderecoEntidade->Cidade->find('list');
		$provincias = $this->EnderecoEntidade->Provincium->find('list');
		$estadoObjectos = $this->EnderecoEntidade->EstadoObjecto->find('list');
		$tipoEnderecoEntidades = $this->EnderecoEntidade->TipoEnderecoEntidade->find('list');
		$this->set(compact('entidades', 'cidades', 'provincias', 'estadoObjectos', 'tipoEnderecoEntidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EnderecoEntidade->id = $id;
		if (!$this->EnderecoEntidade->exists()) {
			throw new NotFoundException(__('Invalid endereco entidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EnderecoEntidade->save($this->request->data)) {
				$this->Session->setFlash(__('The endereco entidade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The endereco entidade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EnderecoEntidade->read(null, $id);
		}
		$entidades = $this->EnderecoEntidade->Entidade->find('list');
		$cidades = $this->EnderecoEntidade->Cidade->find('list');
		$provincias = $this->EnderecoEntidade->Provincium->find('list');
		$estadoObjectos = $this->EnderecoEntidade->EstadoObjecto->find('list');
		$tipoEnderecoEntidades = $this->EnderecoEntidade->TipoEnderecoEntidade->find('list');
		$this->set(compact('entidades', 'cidades', 'provincias', 'estadoObjectos', 'tipoEnderecoEntidades'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->EnderecoEntidade->id = $id;
		if (!$this->EnderecoEntidade->exists()) {
			throw new NotFoundException(__('Invalid endereco entidade'));
		}
		if ($this->EnderecoEntidade->delete()) {
			$this->Session->setFlash(__('Endereco entidade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Endereco entidade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
