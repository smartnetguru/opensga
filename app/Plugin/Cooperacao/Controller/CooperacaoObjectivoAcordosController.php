<?php
App::uses('CooperacaoAppController', 'Cooperacao.Controller');
/**
 * CooperacaoObjectivoAcordos Controller
 *
 * @property CooperacaoObjectivoAcordo $CooperacaoObjectivoAcordo
 * @property PaginatorComponent $Paginator
 */
class CooperacaoObjectivoAcordosController extends CooperacaoAppController {

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
		$this->CooperacaoObjectivoAcordo->recursive = 0;
		$this->set('cooperacaoObjectivoAcordos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CooperacaoObjectivoAcordo->exists($id)) {
			throw new NotFoundException(__('Invalid cooperacao objectivo acordo'));
		}
		$options = array('conditions' => array('CooperacaoObjectivoAcordo.' . $this->CooperacaoObjectivoAcordo->primaryKey => $id));
		$this->set('cooperacaoObjectivoAcordo', $this->CooperacaoObjectivoAcordo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                    $name = $this->request->data['CooperacaoAcordo']['name'];
                    $cooperacao_acordo_id = $this->request->data['CooperacaoAcordo']['cooperacao_acordo_id'];
                    $value = array('name'=>$name,'cooperacao_acordo_id'=>$cooperacao_acordo_id);
			$this->CooperacaoObjectivoAcordo->create();
                        $this->CooperacaoObjectivoAcordo->save($value);
//			if ($this->CooperacaoObjectivoAcordo->save($this->request->data)) {
//				$this->Session->setFlash(__('The cooperacao objectivo acordo has been saved.'));
//				return $this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('The cooperacao objectivo acordo could not be saved. Please, try again.'));
//			}
		}
//		$cooperacaoAcordos = $this->CooperacaoObjectivoAcordo->CooperacaoAcordo->find('list');
//		$this->set(compact('cooperacaoAcordos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CooperacaoObjectivoAcordo->exists($id)) {
			throw new NotFoundException(__('Invalid cooperacao objectivo acordo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CooperacaoObjectivoAcordo->save($this->request->data)) {
				$this->Session->setFlash(__('The cooperacao objectivo acordo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cooperacao objectivo acordo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CooperacaoObjectivoAcordo.' . $this->CooperacaoObjectivoAcordo->primaryKey => $id));
			$this->request->data = $this->CooperacaoObjectivoAcordo->find('first', $options);
		}
		$cooperacaoAcordos = $this->CooperacaoObjectivoAcordo->CooperacaoAcordo->find('list');
		$this->set(compact('cooperacaoAcordos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CooperacaoObjectivoAcordo->id = $id;
		if (!$this->CooperacaoObjectivoAcordo->exists()) {
			throw new NotFoundException(__('Invalid cooperacao objectivo acordo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CooperacaoObjectivoAcordo->delete()) {
			$this->Session->setFlash(__('The cooperacao objectivo acordo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cooperacao objectivo acordo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
