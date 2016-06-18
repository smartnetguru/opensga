<?php
App::uses('AppController', 'Controller');

/**
 * FinanceiroFormaDepositos Controller
 *
 * @property FinanceiroFormaDeposito $FinanceiroFormaDeposito
 */
class FinanceiroFormaDepositosController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->FinanceiroFormaDeposito->recursive = 0;
        $this->set('financeiroFormaDepositos', $this->paginate());
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
        $this->FinanceiroFormaDeposito->id = $id;
        if (!$this->FinanceiroFormaDeposito->exists()) {
            throw new NotFoundException(__('Invalid financeiro forma deposito'));
        }
        $this->set('financeiroFormaDeposito', $this->FinanceiroFormaDeposito->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->FinanceiroFormaDeposito->create();
            if ($this->FinanceiroFormaDeposito->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro forma deposito has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The financeiro forma deposito could not be saved. Please, try again.'));
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
        $this->FinanceiroFormaDeposito->id = $id;
        if (!$this->FinanceiroFormaDeposito->exists()) {
            throw new NotFoundException(__('Invalid financeiro forma deposito'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->FinanceiroFormaDeposito->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro forma deposito has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The financeiro forma deposito could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->FinanceiroFormaDeposito->read(null, $id);
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
        $this->FinanceiroFormaDeposito->id = $id;
        if (!$this->FinanceiroFormaDeposito->exists()) {
            throw new NotFoundException(__('Invalid financeiro forma deposito'));
        }
        if ($this->FinanceiroFormaDeposito->delete()) {
            $this->Session->setFlash(__('Financeiro forma deposito deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Financeiro forma deposito was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
