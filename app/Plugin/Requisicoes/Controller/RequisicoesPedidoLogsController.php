<?php
App::uses('RequisicoesAppController', 'Requisicoes.Controller');

/**
 * RequisicoesPedidoLogs Controller
 *
 * @property RequisicoesPedidoLog $RequisicoesPedidoLog
 */
class RequisicoesPedidoLogsController extends RequisicoesAppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->RequisicoesPedidoLog->recursive = 0;
        $this->set('requisicoesPedidoLogs', $this->paginate());
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
        $this->RequisicoesPedidoLog->id = $id;
        if (!$this->RequisicoesPedidoLog->exists()) {
            throw new NotFoundException(__('Invalid requisicoes pedido log'));
        }
        $this->set('requisicoesPedidoLog', $this->RequisicoesPedidoLog->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->RequisicoesPedidoLog->create();
            if ($this->RequisicoesPedidoLog->save($this->request->data)) {
                $this->Session->setFlash(__('The requisicoes pedido log has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The requisicoes pedido log could not be saved. Please, try again.'));
            }
        }
        $requisicoesPedidos = $this->RequisicoesPedidoLog->RequisicoesPedido->find('list');
        $funcionarios = $this->RequisicoesPedidoLog->Funcionario->find('list');
        $estadoPedidoAnteriors = $this->RequisicoesPedidoLog->EstadoPedidoAnterior->find('list');
        $estadoPedidoActuals = $this->RequisicoesPedidoLog->EstadoPedidoActual->find('list');
        $this->set(compact('requisicoesPedidos', 'funcionarios', 'estadoPedidoAnteriors', 'estadoPedidoActuals'));
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
        $this->RequisicoesPedidoLog->id = $id;
        if (!$this->RequisicoesPedidoLog->exists()) {
            throw new NotFoundException(__('Invalid requisicoes pedido log'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->RequisicoesPedidoLog->save($this->request->data)) {
                $this->Session->setFlash(__('The requisicoes pedido log has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The requisicoes pedido log could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->RequisicoesPedidoLog->read(null, $id);
        }
        $requisicoesPedidos = $this->RequisicoesPedidoLog->RequisicoesPedido->find('list');
        $funcionarios = $this->RequisicoesPedidoLog->Funcionario->find('list');
        $estadoPedidoAnteriors = $this->RequisicoesPedidoLog->EstadoPedidoAnterior->find('list');
        $estadoPedidoActuals = $this->RequisicoesPedidoLog->EstadoPedidoActual->find('list');
        $this->set(compact('requisicoesPedidos', 'funcionarios', 'estadoPedidoAnteriors', 'estadoPedidoActuals'));
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
        $this->RequisicoesPedidoLog->id = $id;
        if (!$this->RequisicoesPedidoLog->exists()) {
            throw new NotFoundException(__('Invalid requisicoes pedido log'));
        }
        if ($this->RequisicoesPedidoLog->delete()) {
            $this->Session->setFlash(__('Requisicoes pedido log deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Requisicoes pedido log was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
