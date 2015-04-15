<?php
App::uses('AppController', 'Controller');
/**
 * CandidatoGraduacaos Controller
 *
 * @property CandidatoGraduacao $CandidatoGraduacao
 * @property PaginatorComponent $Paginator
 */
class CandidatoGraduacaosController extends AppController {

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
		$this->CandidatoGraduacao->recursive = 0;
		$this->set('candidatoGraduacaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CandidatoGraduacao->exists($id)) {
			throw new NotFoundException(__('Invalid candidato graduacao'));
		}
		$options = array('conditions' => array('CandidatoGraduacao.' . $this->CandidatoGraduacao->primaryKey => $id));
		$this->set('candidatoGraduacao', $this->CandidatoGraduacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CandidatoGraduacao->create();
			if ($this->CandidatoGraduacao->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato graduacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato graduacao could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->CandidatoGraduacao->Aluno->find('list');
		$cerimoniaGraduacaos = $this->CandidatoGraduacao->CerimoniaGraduacao->find('list');
		$estadoObjectos = $this->CandidatoGraduacao->EstadoObjecto->find('list');
		$estadoCandidaturas = $this->CandidatoGraduacao->EstadoCandidatura->find('list');
		$generos = $this->CandidatoGraduacao->Genero->find('list');
		$estadoCivils = $this->CandidatoGraduacao->EstadoCivil->find('list');
		$regimeEstudos = $this->CandidatoGraduacao->RegimeEstudo->find('list');
		$regaliaSocials = $this->CandidatoGraduacao->RegaliaSocial->find('list');
		$this->set(compact('alunos', 'cerimoniaGraduacaos', 'estadoObjectos', 'estadoCandidaturas', 'generos', 'estadoCivils', 'regimeEstudos', 'regaliaSocials'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CandidatoGraduacao->exists($id)) {
			throw new NotFoundException(__('Invalid candidato graduacao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CandidatoGraduacao->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato graduacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato graduacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CandidatoGraduacao.' . $this->CandidatoGraduacao->primaryKey => $id));
			$this->request->data = $this->CandidatoGraduacao->find('first', $options);
		}
		$alunos = $this->CandidatoGraduacao->Aluno->find('list');
		$cerimoniaGraduacaos = $this->CandidatoGraduacao->CerimoniaGraduacao->find('list');
		$estadoObjectos = $this->CandidatoGraduacao->EstadoObjecto->find('list');
		$estadoCandidaturas = $this->CandidatoGraduacao->EstadoCandidatura->find('list');
		$generos = $this->CandidatoGraduacao->Genero->find('list');
		$estadoCivils = $this->CandidatoGraduacao->EstadoCivil->find('list');
		$regimeEstudos = $this->CandidatoGraduacao->RegimeEstudo->find('list');
		$regaliaSocials = $this->CandidatoGraduacao->RegaliaSocial->find('list');
		$this->set(compact('alunos', 'cerimoniaGraduacaos', 'estadoObjectos', 'estadoCandidaturas', 'generos', 'estadoCivils', 'regimeEstudos', 'regaliaSocials'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CandidatoGraduacao->id = $id;
		if (!$this->CandidatoGraduacao->exists()) {
			throw new NotFoundException(__('Invalid candidato graduacao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CandidatoGraduacao->delete()) {
			$this->Session->setFlash(__('The candidato graduacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The candidato graduacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
