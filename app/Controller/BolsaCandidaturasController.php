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
 * @throws NotFoundException
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
		$estadoObjectos = $this->BolsaCandidatura->EstadoObjecto->find('list');
		$bolsaTipoBolsas = $this->BolsaCandidatura->BolsaTipoBolsa->find('list');
		$entidades = $this->BolsaCandidatura->Entidade->find('list');
		$bolsaTipoCandidaturas = $this->BolsaCandidatura->BolsaTipoCandidatura->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas', 'entidades', 'bolsaTipoCandidaturas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
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
		$estadoObjectos = $this->BolsaCandidatura->EstadoObjecto->find('list');
		$bolsaTipoBolsas = $this->BolsaCandidatura->BolsaTipoBolsa->find('list');
		$entidades = $this->BolsaCandidatura->Entidade->find('list');
		$bolsaTipoCandidaturas = $this->BolsaCandidatura->BolsaTipoCandidatura->find('list');
		$this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas', 'entidades', 'bolsaTipoCandidaturas'));
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
