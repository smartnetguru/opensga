<?php
App::uses('AppController', 'Controller');

/**
 * FinanceiroEstadoDepositos Controller
 *
 * @property FinanceiroEstadoDeposito $FinanceiroEstadoDeposito
 */
class FinanceiroEstadoDepositosController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->FinanceiroEstadoDeposito->recursive = 0;
        $this->set('financeiroEstadoDepositos', $this->paginate());
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
        $this->FinanceiroEstadoDeposito->id = $id;
        if (!$this->FinanceiroEstadoDeposito->exists()) {
            throw new NotFoundException(__('Invalid financeiro estado deposito'));
        }
        $this->set('financeiroEstadoDeposito', $this->FinanceiroEstadoDeposito->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->FinanceiroEstadoDeposito->create();
            if ($this->FinanceiroEstadoDeposito->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro estado deposito has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The financeiro estado deposito could not be saved. Please, try again.'));
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
        $this->FinanceiroEstadoDeposito->id = $id;
        if (!$this->FinanceiroEstadoDeposito->exists()) {
            throw new NotFoundException(__('Invalid financeiro estado deposito'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->FinanceiroEstadoDeposito->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro estado deposito has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The financeiro estado deposito could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->FinanceiroEstadoDeposito->read(null, $id);
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
        $this->FinanceiroEstadoDeposito->id = $id;
        if (!$this->FinanceiroEstadoDeposito->exists()) {
            throw new NotFoundException(__('Invalid financeiro estado deposito'));
        }
        if ($this->FinanceiroEstadoDeposito->delete()) {
            $this->Session->setFlash(__('Financeiro estado deposito deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Financeiro estado deposito was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
