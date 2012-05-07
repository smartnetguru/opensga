<?php
App::uses('AppController', 'Controller');
/**
 * SadeAutoAvaliacaos Controller
 *
 * @property SadeAutoAvaliacao $SadeAutoAvaliacao
 */
class SadeAutoAvaliacaosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SadeAutoAvaliacao->recursive = 0;
		$this->set('sadeAutoAvaliacaos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SadeAutoAvaliacao->id = $id;
		if (!$this->SadeAutoAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid sade auto avaliacao'));
		}
		$this->set('sadeAutoAvaliacao', $this->SadeAutoAvaliacao->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SadeAutoAvaliacao->create();
			if ($this->SadeAutoAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The sade auto avaliacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade auto avaliacao could not be saved. Please, try again.'));
			}
		}
		$entidades = $this->SadeAutoAvaliacao->Entidade->find('list');
		$sadeParametros = $this->SadeAutoAvaliacao->SadeParametro->find('list');
		$anolectivos = $this->SadeAutoAvaliacao->Anolectivo->find('list');
		$semestrelectivos = $this->SadeAutoAvaliacao->Semestrelectivo->find('list');
		$sadeAvaliacaos = $this->SadeAutoAvaliacao->SadeAvaliacao->find('list');
		$this->set(compact('entidades', 'sadeParametros', 'anolectivos', 'semestrelectivos', 'sadeAvaliacaos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SadeAutoAvaliacao->id = $id;
		if (!$this->SadeAutoAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid sade auto avaliacao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SadeAutoAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The sade auto avaliacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade auto avaliacao could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SadeAutoAvaliacao->read(null, $id);
		}
		$entidades = $this->SadeAutoAvaliacao->Entidade->find('list');
		$sadeParametros = $this->SadeAutoAvaliacao->SadeParametro->find('list');
		$anolectivos = $this->SadeAutoAvaliacao->Anolectivo->find('list');
		$semestrelectivos = $this->SadeAutoAvaliacao->Semestrelectivo->find('list');
		$sadeAvaliacaos = $this->SadeAutoAvaliacao->SadeAvaliacao->find('list');
		$this->set(compact('entidades', 'sadeParametros', 'anolectivos', 'semestrelectivos', 'sadeAvaliacaos'));
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
		$this->SadeAutoAvaliacao->id = $id;
		if (!$this->SadeAutoAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid sade auto avaliacao'));
		}
		if ($this->SadeAutoAvaliacao->delete()) {
			$this->Session->setFlash(__('Sade auto avaliacao deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sade auto avaliacao was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
