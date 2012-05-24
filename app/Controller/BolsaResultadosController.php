<?php
App::uses('AppController', 'Controller');
/**
 * BolsaResultados Controller
 *
 * @property BolsaResultado $BolsaResultado
 */
class BolsaResultadosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaResultado->recursive = 0;
		$this->set('bolsaResultados', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaResultado->id = $id;
		if (!$this->BolsaResultado->exists()) {
			throw new NotFoundException(__('Invalid bolsa resultado'));
		}
		$this->set('bolsaResultado', $this->BolsaResultado->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaResultado->create();
			if ($this->BolsaResultado->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa resultado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa resultado could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->BolsaResultado->Aluno->find('list');
		$anoLectivos = $this->BolsaResultado->AnoLectivo->find('list');
		$bolsaTipoBolsas = $this->BolsaResultado->BolsaTipoBolsa->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaTipoBolsas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BolsaResultado->id = $id;
		if (!$this->BolsaResultado->exists()) {
			throw new NotFoundException(__('Invalid bolsa resultado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaResultado->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa resultado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa resultado could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaResultado->read(null, $id);
		}
		$alunos = $this->BolsaResultado->Aluno->find('list');
		$anoLectivos = $this->BolsaResultado->AnoLectivo->find('list');
		$bolsaTipoBolsas = $this->BolsaResultado->BolsaTipoBolsa->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaTipoBolsas'));
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
		$this->BolsaResultado->id = $id;
		if (!$this->BolsaResultado->exists()) {
			throw new NotFoundException(__('Invalid bolsa resultado'));
		}
		if ($this->BolsaResultado->delete()) {
			$this->Session->setFlash(__('Bolsa resultado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa resultado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
