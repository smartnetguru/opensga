<?php
App::uses('AppController', 'Controller');
/**
 * EntidadeContactos Controller
 *
 * @property EntidadeContacto $EntidadeContacto
 */
class EntidadeContactosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EntidadeContacto->recursive = 0;
		$this->set('entidadeContactos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EntidadeContacto->id = $id;
		if (!$this->EntidadeContacto->exists()) {
			throw new NotFoundException(__('Invalid entidade contacto'));
		}
		$this->set('entidadeContacto', $this->EntidadeContacto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntidadeContacto->create();
			if ($this->EntidadeContacto->save($this->request->data)) {
				$this->Session->setFlash(__('The entidade contacto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entidade contacto could not be saved. Please, try again.'));
			}
		}
		$entidades = $this->EntidadeContacto->Entidade->find('list');
		$tipoContactos = $this->EntidadeContacto->TipoContacto->find('list');
		$estadoObjectos = $this->EntidadeContacto->EstadoObjecto->find('list');
		$this->set(compact('entidades', 'tipoContactos', 'estadoObjectos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EntidadeContacto->id = $id;
		if (!$this->EntidadeContacto->exists()) {
			throw new NotFoundException(__('Invalid entidade contacto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EntidadeContacto->save($this->request->data)) {
				$this->Session->setFlash(__('The entidade contacto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entidade contacto could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EntidadeContacto->read(null, $id);
		}
		$entidades = $this->EntidadeContacto->Entidade->find('list');
		$tipoContactos = $this->EntidadeContacto->TipoContacto->find('list');
		$estadoObjectos = $this->EntidadeContacto->EstadoObjecto->find('list');
		$this->set(compact('entidades', 'tipoContactos', 'estadoObjectos'));
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
		$this->EntidadeContacto->id = $id;
		if (!$this->EntidadeContacto->exists()) {
			throw new NotFoundException(__('Invalid entidade contacto'));
		}
		if ($this->EntidadeContacto->delete()) {
			$this->Session->setFlash(__('Entidade contacto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Entidade contacto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
