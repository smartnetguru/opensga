<?php
App::uses('AppController', 'Controller');
/**
 * BolsaBolsas Controller
 *
 * @property BolsaBolsa $BolsaBolsa
 */
class BolsaBolsasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaBolsa->recursive = 0;
		$this->set('bolsaBolsas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaBolsa->id = $id;
		if (!$this->BolsaBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa bolsa'));
		}
		$this->set('bolsaBolsa', $this->BolsaBolsa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaBolsa->create();
			if ($this->BolsaBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa bolsa could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->BolsaBolsa->Aluno->find('list');
		$bolsaCandidaturas = $this->BolsaBolsa->BolsaPedido->find('list');
		$anolectivos = $this->BolsaBolsa->AnoLectivo->find('list');
		$bancos = $this->BolsaBolsa->Banco->find('list');
		$bolsaFonteBolsas = $this->BolsaBolsa->BolsaFonteBolsa->find('list');
		$bolsaCriadorContas = $this->BolsaBolsa->BolsaCriadorContum->find('list');
		$bolsaEstadoBolsas = $this->BolsaBolsa->BolsaEstadoBolsa->find('list');
		$bolsaResultados = $this->BolsaBolsa->BolsaResultado->find('list');
		$this->set(compact('alunos', 'bolsaCandidaturas', 'anolectivos', 'bancos', 'bolsaFonteBolsas', 'bolsaCriadorContas', 'bolsaEstadoBolsas', 'bolsaResultados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BolsaBolsa->id = $id;
		if (!$this->BolsaBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa bolsa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa bolsa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaBolsa->read(null, $id);
		}
		$alunos = $this->BolsaBolsa->Aluno->find('list');
		$bolsaCandidaturas = $this->BolsaBolsa->BolsaPedido->find('list');
		$anolectivos = $this->BolsaBolsa->AnoLectivo->find('list');
		$bancos = $this->BolsaBolsa->Banco->find('list');
		$bolsaFonteBolsas = $this->BolsaBolsa->BolsaFonteBolsa->find('list');
		$bolsaCriadorContas = $this->BolsaBolsa->BolsaCriadorContum->find('list');
		$bolsaEstadoBolsas = $this->BolsaBolsa->BolsaEstadoBolsa->find('list');
		$bolsaResultados = $this->BolsaBolsa->BolsaResultado->find('list');
		$this->set(compact('alunos', 'bolsaCandidaturas', 'anolectivos', 'bancos', 'bolsaFonteBolsas', 'bolsaCriadorContas', 'bolsaEstadoBolsas', 'bolsaResultados'));
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
		$this->BolsaBolsa->id = $id;
		if (!$this->BolsaBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa bolsa'));
		}
		if ($this->BolsaBolsa->delete()) {
			$this->Session->setFlash(__('Bolsa bolsa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa bolsa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
