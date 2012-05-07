<?php
App::uses('AppController', 'Controller');
/**
 * SadeAvaliacaoAlunos Controller
 *
 * @property SadeAvaliacaoAluno $SadeAvaliacaoAluno
 */
class SadeAvaliacaoAlunosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SadeAvaliacaoAluno->recursive = 0;
		$this->set('sadeAvaliacaoAlunos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SadeAvaliacaoAluno->id = $id;
		if (!$this->SadeAvaliacaoAluno->exists()) {
			throw new NotFoundException(__('Invalid sade avaliacao aluno'));
		}
		$this->set('sadeAvaliacaoAluno', $this->SadeAvaliacaoAluno->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SadeAvaliacaoAluno->create();
			if ($this->SadeAvaliacaoAluno->save($this->request->data)) {
				$this->Session->setFlash(__('The sade avaliacao aluno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade avaliacao aluno could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->SadeAvaliacaoAluno->Aluno->find('list');
		$entidades = $this->SadeAvaliacaoAluno->Entidade->find('list');
		$sadeParametros = $this->SadeAvaliacaoAluno->SadeParametro->find('list');
		$anolectivos = $this->SadeAvaliacaoAluno->Anolectivo->find('list');
		$this->set(compact('alunos', 'entidades', 'sadeParametros', 'anolectivos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SadeAvaliacaoAluno->id = $id;
		if (!$this->SadeAvaliacaoAluno->exists()) {
			throw new NotFoundException(__('Invalid sade avaliacao aluno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SadeAvaliacaoAluno->save($this->request->data)) {
				$this->Session->setFlash(__('The sade avaliacao aluno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade avaliacao aluno could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SadeAvaliacaoAluno->read(null, $id);
		}
		$alunos = $this->SadeAvaliacaoAluno->Aluno->find('list');
		$entidades = $this->SadeAvaliacaoAluno->Entidade->find('list');
		$sadeParametros = $this->SadeAvaliacaoAluno->SadeParametro->find('list');
		$anolectivos = $this->SadeAvaliacaoAluno->Anolectivo->find('list');
		$this->set(compact('alunos', 'entidades', 'sadeParametros', 'anolectivos'));
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
		$this->SadeAvaliacaoAluno->id = $id;
		if (!$this->SadeAvaliacaoAluno->exists()) {
			throw new NotFoundException(__('Invalid sade avaliacao aluno'));
		}
		if ($this->SadeAvaliacaoAluno->delete()) {
			$this->Session->setFlash(__('Sade avaliacao aluno deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sade avaliacao aluno was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
