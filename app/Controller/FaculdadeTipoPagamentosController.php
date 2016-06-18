<?php
App::uses('AppController', 'Controller');

/**
 * FaculdadeTipoPagamentos Controller
 *
 * @property FaculdadeTipoPagamento $FaculdadeTipoPagamento
 */
class FaculdadeTipoPagamentosController extends AppController
{


    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->FaculdadeTipoPagamento->recursive = 0;
        $this->set('faculdadeTipoPagamentos', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->FaculdadeTipoPagamento->id = $id;
        if (!$this->FaculdadeTipoPagamento->exists()) {
            throw new NotFoundException(__('Invalid faculdade tipo pagamento'));
        }
        $this->set('faculdadeTipoPagamento', $this->FaculdadeTipoPagamento->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->FaculdadeTipoPagamento->create();
            if ($this->FaculdadeTipoPagamento->save($this->request->data)) {
                $this->Session->setFlash(__('The faculdade tipo pagamento has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The faculdade tipo pagamento could not be saved. Please, try again.'));
            }
        }
        $faculdades = $this->FaculdadeTipoPagamento->Faculdade->find('list');
        $tipopagamentos = $this->FaculdadeTipoPagamento->Tipopagamento->find('list');
        $this->set(compact('faculdades', 'tipopagamentos'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->FaculdadeTipoPagamento->id = $id;
        if (!$this->FaculdadeTipoPagamento->exists()) {
            throw new NotFoundException(__('Invalid faculdade tipo pagamento'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->FaculdadeTipoPagamento->save($this->request->data)) {
                $this->Session->setFlash(__('The faculdade tipo pagamento has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The faculdade tipo pagamento could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->FaculdadeTipoPagamento->read(null, $id);
        }
        $faculdades = $this->FaculdadeTipoPagamento->Faculdade->find('list');
        $tipopagamentos = $this->FaculdadeTipoPagamento->Tipopagamento->find('list');
        $this->set(compact('faculdades', 'tipopagamentos'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->FaculdadeTipoPagamento->id = $id;
        if (!$this->FaculdadeTipoPagamento->exists()) {
            throw new NotFoundException(__('Invalid faculdade tipo pagamento'));
        }
        if ($this->FaculdadeTipoPagamento->delete()) {
            $this->Session->setFlash(__('Faculdade tipo pagamento deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Faculdade tipo pagamento was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
