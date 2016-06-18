<?php
App::uses('AppController', 'Controller');

/**
 * FinanceiroBancos Controller
 *
 * @property FinanceiroBanco $FinanceiroBanco
 */
class FinanceiroBancosController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->FinanceiroBanco->recursive = 0;
        $this->set('financeiroBancos', $this->paginate());
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
        $this->FinanceiroBanco->id = $id;
        if (!$this->FinanceiroBanco->exists()) {
            throw new NotFoundException(__('Invalid financeiro banco'));
        }
        $this->set('financeiroBanco', $this->FinanceiroBanco->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->FinanceiroBanco->create();
            if ($this->FinanceiroBanco->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro banco has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The financeiro banco could not be saved. Please, try again.'));
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
    public function edit($id = null)
    {
        $this->FinanceiroBanco->id = $id;
        if (!$this->FinanceiroBanco->exists()) {
            throw new NotFoundException(__('Invalid financeiro banco'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->FinanceiroBanco->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro banco has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The financeiro banco could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->FinanceiroBanco->read(null, $id);
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
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->FinanceiroBanco->id = $id;
        if (!$this->FinanceiroBanco->exists()) {
            throw new NotFoundException(__('Invalid financeiro banco'));
        }
        if ($this->FinanceiroBanco->delete()) {
            $this->Session->setFlash(__('Financeiro banco deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Financeiro banco was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
