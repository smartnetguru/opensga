<?php

App::uses('CooperacaoAppController', 'Cooperacao.Controller');

/**
 * CooperacaoAcordoObservacaos Controller
 *
 * @property CooperacaoAcordoObservacao $CooperacaoAcordoObservacao
 * @property PaginatorComponent $Paginator
 */
class CooperacaoAcordoObservacaosController extends CooperacaoAppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = ['Paginator'];

//    public function beforeFilter() {
////        parent::beforeFilter();
//
//
//        $this->Security->unlockedActions = array('add');
//    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->CooperacaoAcordoObservacao->recursive = 0;
        $this->set('cooperacaoAcordoObservacaos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->CooperacaoAcordoObservacao->exists($id)) {
            throw new NotFoundException(__('Invalid cooperacao acordo observacao'));
        }
        $options = ['conditions' => ['CooperacaoAcordoObservacao.' . $this->CooperacaoAcordoObservacao->primaryKey => $id]];
        $this->set('cooperacaoAcordoObservacao', $this->CooperacaoAcordoObservacao->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {


        if ($this->request->is('post')) {
            $name = $this->request->data['CooperacaoAcordo']['name'];
            $cooperacao_acordo_id = $this->request->data['CooperacaoAcordo']['cooperacao_acordo_id'];
            $value = ['name' => $name, 'cooperacao_acordo_id' => $cooperacao_acordo_id];

            $this->CooperacaoAcordoObservacao->create();
            $this->CooperacaoAcordoObservacao->save($value);
//            if ($this->CooperacaoAcordoObservacao->save($this->request->data)) {
//                $this->Session->setFlash(__('The cooperacao acordo observacao has been saved.'));
//                return $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Session->setFlash(__('The cooperacao acordo observacao could not be saved. Please, try again.'));
//            }
        }

//        $cooperacaoAcordos = $this->CooperacaoAcordoObservacao->CooperacaoAcordo->find('list');
//        $this->set(compact('cooperacaoAcordos'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->CooperacaoAcordoObservacao->exists($id)) {
            throw new NotFoundException(__('Invalid cooperacao acordo observacao'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->CooperacaoAcordoObservacao->save($this->request->data)) {
                $this->Session->setFlash(__('The cooperacao acordo observacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The cooperacao acordo observacao could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['CooperacaoAcordoObservacao.' . $this->CooperacaoAcordoObservacao->primaryKey => $id]];
            $this->request->data = $this->CooperacaoAcordoObservacao->find('first', $options);
        }
        $cooperacaoAcordos = $this->CooperacaoAcordoObservacao->CooperacaoAcordo->find('list');
        $this->set(compact('cooperacaoAcordos'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->CooperacaoAcordoObservacao->id = $id;
        if (!$this->CooperacaoAcordoObservacao->exists()) {
            throw new NotFoundException(__('Invalid cooperacao acordo observacao'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->CooperacaoAcordoObservacao->delete()) {
            $this->Session->setFlash(__('The cooperacao acordo observacao has been deleted.'));
        } else {
            $this->Session->setFlash(__('The cooperacao acordo observacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
