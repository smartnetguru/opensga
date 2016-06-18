<?php
App::uses('AppController', 'Controller');

/**
 * PlanoEstudoTipoPagamentos Controller
 *
 * @property PlanoEstudoTipoPagamento $PlanoEstudoTipoPagamento
 */
class PlanoEstudoTipoPagamentosController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->PlanoEstudoTipoPagamento->recursive = 0;
        $this->set('planoEstudoTipoPagamentos', $this->paginate());
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
        $this->PlanoEstudoTipoPagamento->id = $id;
        if (!$this->PlanoEstudoTipoPagamento->exists()) {
            throw new NotFoundException(__('Invalid plano estudo tipo pagamento'));
        }
        $this->set('planoEstudoTipoPagamento', $this->PlanoEstudoTipoPagamento->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->PlanoEstudoTipoPagamento->create();
            if ($this->PlanoEstudoTipoPagamento->save($this->request->data)) {
                $this->Session->setFlash(__('The plano estudo tipo pagamento has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The plano estudo tipo pagamento could not be saved. Please, try again.'));
            }
        }
        $planoestudos = $this->PlanoEstudoTipoPagamento->PlanoEstudo->find('list');
        $tipopagamentos = $this->PlanoEstudoTipoPagamento->Tipopagamento->find('list');
        $this->set(compact('planoestudos', 'tipopagamentos'));
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
        $this->PlanoEstudoTipoPagamento->id = $id;
        if (!$this->PlanoEstudoTipoPagamento->exists()) {
            throw new NotFoundException(__('Invalid plano estudo tipo pagamento'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->PlanoEstudoTipoPagamento->save($this->request->data)) {
                $this->Session->setFlash(__('The plano estudo tipo pagamento has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The plano estudo tipo pagamento could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->PlanoEstudoTipoPagamento->read(null, $id);
        }
        $planoestudos = $this->PlanoEstudoTipoPagamento->PlanoEstudo->find('list');
        $tipopagamentos = $this->PlanoEstudoTipoPagamento->Tipopagamento->find('list');
        $this->set(compact('planoestudos', 'tipopagamentos'));
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
        $this->PlanoEstudoTipoPagamento->id = $id;
        if (!$this->PlanoEstudoTipoPagamento->exists()) {
            throw new NotFoundException(__('Invalid plano estudo tipo pagamento'));
        }
        if ($this->PlanoEstudoTipoPagamento->delete()) {
            $this->Session->setFlash(__('Plano estudo tipo pagamento deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Plano estudo tipo pagamento was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
