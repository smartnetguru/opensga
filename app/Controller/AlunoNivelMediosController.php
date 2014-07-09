<?php
App::uses('AppController', 'Controller');
/**
 * AlunoNivelMedios Controller
 *
 * @property AlunoNivelMedio $AlunoNivelMedio
 */
class AlunoNivelMediosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AlunoNivelMedio->recursive = 0;
		$this->set('alunoNivelMedios', $this->paginate());
	}
    
    public function teste(){
        
    }

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AlunoNivelMedio->id = $id;
		if (!$this->AlunoNivelMedio->exists()) {
			throw new NotFoundException(__('Invalid aluno nivel medio'));
		}
		$this->set('alunoNivelMedio', $this->AlunoNivelMedio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlunoNivelMedio->create();
			if ($this->AlunoNivelMedio->save($this->request->data)) {
				$this->Session->setFlash(__('The aluno nivel medio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno nivel medio could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->AlunoNivelMedio->Aluno->find('list');
		$escolaNivelMedios = $this->AlunoNivelMedio->EscolaNivelMedio->find('list');
		$this->set(compact('alunos', 'escolaNivelMedios'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AlunoNivelMedio->id = $id;
		if (!$this->AlunoNivelMedio->exists()) {
			throw new NotFoundException(__('Invalid aluno nivel medio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlunoNivelMedio->save($this->request->data)) {
				$this->Session->setFlash(__('The aluno nivel medio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno nivel medio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AlunoNivelMedio->read(null, $id);
		}
		$alunos = $this->AlunoNivelMedio->Aluno->find('list');
		$escolaNivelMedios = $this->AlunoNivelMedio->EscolaNivelMedio->find('list');
		$this->set(compact('alunos', 'escolaNivelMedios'));
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
		$this->AlunoNivelMedio->id = $id;
		if (!$this->AlunoNivelMedio->exists()) {
			throw new NotFoundException(__('Invalid aluno nivel medio'));
		}
		if ($this->AlunoNivelMedio->delete()) {
			$this->Session->setFlash(__('Aluno nivel medio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aluno nivel medio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
