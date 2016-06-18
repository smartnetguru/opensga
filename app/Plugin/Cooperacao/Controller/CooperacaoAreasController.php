<?php

App::uses('CooperacaoAppController', 'Cooperacao.Controller');

/**
 * CooperacaoAreas Controller
 *
 * @property CooperacaoArea $CooperacaoArea
 * @property PaginatorComponent $Paginator
 */
class CooperacaoAreasController extends CooperacaoAppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = ['Paginator'];
    var $helpers = ['Form', 'Html', 'Javascript', 'Time'];

    public function beforeFilter()
    {
        $this->Security->unlockedActions = ['nova_area', 'edit'];

    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->CooperacaoArea->recursive = 0;
        $this->set('cooperacaoAreas', $this->Paginator->paginate());
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
        if (!$this->CooperacaoArea->exists($id)) {
            throw new NotFoundException(__('Invalid cooperacao area'));
        }
        $options = ['conditions' => ['CooperacaoArea.' . $this->CooperacaoArea->primaryKey => $id]];
        $this->set('cooperacaoArea', $this->CooperacaoArea->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function nova_area()
    {
        if ($this->request->is('post')) {

            $this->CooperacaoArea->create();
            if ($this->CooperacaoArea->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success">Nova Area de cooperacao adicionada com sucesso!</div>'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('<div class="alert alert-danger">The cooperacao objectivo acordo could not be saved. Please, try again.</div>'));
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
    public function edit()
    {

        $id = $this->request->data['id'];

        if (!$this->CooperacaoArea->exists($id)) {
            throw new NotFoundException(__('Invalid cooperacao area'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->CooperacaoArea->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success">The cooperacao area has been saved.</div>'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('<div class="alert alert-danger">The cooperacao area could not be saved. Please, try again.</div>'));
            }
        } else {
            $options = ['conditions' => ['CooperacaoArea.' . $this->CooperacaoArea->primaryKey => $id]];
            $this->request->data = $this->CooperacaoArea->find('first', $options);
        }
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
        $this->CooperacaoArea->id = $id;
        if (!$this->CooperacaoArea->exists()) {
            throw new NotFoundException(__('Invalid cooperacao area'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->CooperacaoArea->delete()) {
            $this->Session->setFlash(__('The cooperacao area has been deleted.'));
        } else {
            $this->Session->setFlash(__('The cooperacao area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
