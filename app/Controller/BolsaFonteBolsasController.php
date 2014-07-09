<?php
App::uses('AppController', 'Controller');
/**
 * BolsaFonteBolsas Controller
 *
 * @property BolsaFonteBolsa $BolsaFonteBolsa
 */
class BolsaFonteBolsasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaFonteBolsa->recursive = 0;
		$this->set('bolsaFonteBolsas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BolsaFonteBolsa->id = $id;
		if (!$this->BolsaFonteBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa fonte bolsa'));
		}
		$this->set('bolsaFonteBolsa', $this->BolsaFonteBolsa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BolsaFonteBolsa->create();
			if ($this->BolsaFonteBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa fonte bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa fonte bolsa could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->BolsaFonteBolsa->id = $id;
		if (!$this->BolsaFonteBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa fonte bolsa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BolsaFonteBolsa->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa fonte bolsa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa fonte bolsa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BolsaFonteBolsa->read(null, $id);
		}
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
		$this->BolsaFonteBolsa->id = $id;
		if (!$this->BolsaFonteBolsa->exists()) {
			throw new NotFoundException(__('Invalid bolsa fonte bolsa'));
		}
		if ($this->BolsaFonteBolsa->delete()) {
			$this->Session->setFlash(__('Bolsa fonte bolsa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bolsa fonte bolsa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
