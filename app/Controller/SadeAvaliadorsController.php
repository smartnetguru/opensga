<?php
App::uses('AppController', 'Controller');
/**
 * SadeAvaliadors Controller
 *
 * @property SadeAvaliador $SadeAvaliador
 */
class SadeAvaliadorsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SadeAvaliador->recursive = 0;
		$this->set('sadeAvaliadors', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SadeAvaliador->id = $id;
		if (!$this->SadeAvaliador->exists()) {
			throw new NotFoundException(__('Invalid sade avaliador'));
		}
		$this->set('sadeAvaliador', $this->SadeAvaliador->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SadeAvaliador->create();
			if ($this->SadeAvaliador->save($this->request->data)) {
				$this->Session->setFlash(__('The sade avaliador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade avaliador could not be saved. Please, try again.'));
			}
		}
		$entidades = $this->SadeAvaliador->Entidade->find('list');
		$docentes = $this->SadeAvaliador->Docente->find('list');
		$nivelAvaliadors = $this->SadeAvaliador->NivelAvaliador->find('list');
		$this->set(compact('entidades', 'docentes', 'nivelAvaliadors'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SadeAvaliador->id = $id;
		if (!$this->SadeAvaliador->exists()) {
			throw new NotFoundException(__('Invalid sade avaliador'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SadeAvaliador->save($this->request->data)) {
				$this->Session->setFlash(__('The sade avaliador has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade avaliador could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SadeAvaliador->read(null, $id);
		}
		$entidades = $this->SadeAvaliador->Entidade->find('list');
		$docentes = $this->SadeAvaliador->Docente->find('list');
		$nivelAvaliadors = $this->SadeAvaliador->NivelAvaliador->find('list');
		$this->set(compact('entidades', 'docentes', 'nivelAvaliadors'));
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
		$this->SadeAvaliador->id = $id;
		if (!$this->SadeAvaliador->exists()) {
			throw new NotFoundException(__('Invalid sade avaliador'));
		}
		if ($this->SadeAvaliador->delete()) {
			$this->Session->setFlash(__('Sade avaliador deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sade avaliador was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
