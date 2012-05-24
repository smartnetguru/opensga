<?php
App::uses('AppController', 'Controller');
/**
 * BolsaCandidaturas Controller
 *
 * @property BolsaCandidatura $BolsaCandidatura
 */
class BolsaCandidaturasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaCandidatura->recursive = 0;
		$this->set('bolsaCandidaturas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaCandidatura->id = $id;
		if (!$this->BolsaCandidatura->exists()) {
			throw new NotFoundException(__('Invalid bolsa candidatura'));
		}
		$this->set('bolsaCandidatura', $this->BolsaCandidatura->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaCandidatura->create();
			if ($this->BolsaCandidatura->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa candidatura has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa candidatura could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->BolsaCandidatura->Aluno->find('list');
		$anoLectivos = $this->BolsaCandidatura->AnoLectivo->find('list');
		$bolsaBolsas = $this->BolsaCandidatura->BolsaBolsa->find('list');
		$bolsaResultados = $this->BolsaCandidatura->BolsaResultado->find('list');
		$bolsaTipoBolsas = $this->BolsaCandidatura->BolsaTipoBolsa->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'bolsaResultados', 'bolsaTipoBolsas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BolsaCandidatura->id = $id;
		if (!$this->BolsaCandidatura->exists()) {
			throw new NotFoundException(__('Invalid bolsa candidatura'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaCandidatura->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa candidatura has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa candidatura could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaCandidatura->read(null, $id);
		}
		$alunos = $this->BolsaCandidatura->Aluno->find('list');
		$anoLectivos = $this->BolsaCandidatura->AnoLectivo->find('list');
		$bolsaBolsas = $this->BolsaCandidatura->BolsaBolsa->find('list');
		$bolsaResultados = $this->BolsaCandidatura->BolsaResultado->find('list');
		$bolsaTipoBolsas = $this->BolsaCandidatura->BolsaTipoBolsa->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'bolsaResultados', 'bolsaTipoBolsas'));
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
		$this->BolsaCandidatura->id = $id;
		if (!$this->BolsaCandidatura->exists()) {
			throw new NotFoundException(__('Invalid bolsa candidatura'));
		}
		if ($this->BolsaCandidatura->delete()) {
			$this->Session->setFlash(__('Bolsa candidatura deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa candidatura was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
