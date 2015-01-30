<?php

App::uses('AppController', 'Controller');

/**
 * FinanceiroTransacaos Controller
 *
 * @property FinanceiroTransacao $FinanceiroTransacao
 */
class FinanceiroTransacaosController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->FinanceiroTransacao->recursive = 0;
        $this->set('financeiroTransacaos', $this->paginate());
    }

    public function novo_deposito($aluno_id) {
        $this->FinanceiroTransacao->Entidade->Aluno->id = $aluno_id;
        if (!$this->FinanceiroTransacao->Entidade->Aluno->exists()) {
            throw new NotFoundException('Este Aluno não existe');
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            die(debug($this->request->data));
            $deposito = $this->FinanceiroTransacao->processarDeposito($this->request->data);
            //die(debug($deposito));
            if ($deposito) {
                $this->Session->setFlash('O Deposito Foi efecutado com sucesso');
                $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno_id));
            } else {
                $this->Session->setFlash('Problemas com o deposito. Tente novamente');
            }
        }

        $this->set(compact('aluno_id'));
    }

    /**
     * Esta Função realiza o pagamento de facturas. Se for um pagamento novo, primeiro faz-se o deposito, caso este exista
     * @param type $aluno_id
     */
    public function novo_pagamento($aluno_id) {
        if ($this->request->is('post') || $this->request->is('put')) {

            //Primeiro Efectuamos o deposito do valor na conta do aluno em questao
            if ($this->FinanceiroTransacao->processarDeposito($this->request->data)) {

                //Agora Criamos um novo Pagamento Pendente
                $this->request->data['FinanceiroPagamento']['financeiro_conta_id'] = $this->FinanceiroTransacao->FinanceiroPagamento->Aluno->getContaIdByAlunoId($aluno_id);
                $this->request->data['FinanceiroPagamento']['financeiro_estado_pagamento_id'] = 1;
                $this->request->data['FinanceiroPagamento']['ano_lectivo_id'] = Configure::read('OpenSGA.ano_lectivo_id');
                $this->request->data['FinanceiroPagamento']['semestre_lectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
                $this->request->data['FinanceiroPagamento']['data_emissao'] = date('Y-m-d H:i:s');
                $this->request->data['FinanceiroPagamento']['entidade_id'] = $this->FinanceiroTransacao->FinanceiroPagamento->Aluno->field('entidade_id', array('Aluno.id' => $aluno_id));
                $this->request->data['FinanceiroPagamento']['detalhes'] = $this->request->data['FinanceiroTransacao']['detalhes'];
                $this->request->data['FinanceiroPagamento']['aluno_id'] = $this->request->data['FinanceiroTransacao']['aluno_id'];

                $pagamento_id = $this->FinanceiroTransacao->criaNovoPagamentoPendente($this->request->data);
                if ($pagamento_id) {

                    //Agora, Finalmente, marcamos a factura como paga
                    if ($this->FinanceiroTransacao->pagarFactura($pagamento_id, $aluno_id)) {
                        $this->Session->setFlash(__('O Pagamento foi efectuado com Sucesso'), 'default', array('class' => 'alert success'));
                    }
                } else {
                    $this->Session->setFlash(__('Houve um problema ao registar o Pagamento Seleccionado. Mas o depósito do valor foi efectuado', 'default', array('class' => 'alert error')));
                }
            } else {
                $this->Session->setFlash(__('Os dados do deposito efectuados não estão correctos. Por favor, verifique', 'default', array('class' => 'alert error')));
            }
        }

        $saldo_actual = $this->FinanceiroTransacao->getSaldoActual($aluno_id);
        $total_divida = $this->FinanceiroTransacao->FinanceiroPagamento->find('all', array('conditions' => array('aluno_id' => $aluno_id, 'financeiro_estado_pagamento_id' => 1), 'fields' => 'SUM(FinanceiroPagamento.valor) as valor'));

        $pagamentos_pendentes = $this->FinanceiroTransacao->FinanceiroPagamento->find('all', array('conditions' => array('aluno_id' => $aluno_id, 'financeiro_estado_pagamento_id' => 1)));

        $pagamentos_efectuados = $this->FinanceiroTransacao->FinanceiroPagamento->find('all', array('conditions' => array('aluno_id' => $aluno_id, 'financeiro_estado_pagamento_id' => 2, 'semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'))));


        $financeiro_tipo_pagamentos = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->find('list', array('conditions' => array('codigo >' => 21)));

        $this->FinanceiroTransacao->Entidade->Aluno->contain(array(
            'Entidade'
        ));
        $aluno = $this->FinanceiroTransacao->Entidade->Aluno->findById($aluno_id);


        $this->set(compact('saldo_actual', 'pagamentos_pendentes', 'total_divida', 'financeiro_tipo_pagamentos', 'aluno_id', 'pagamentos_efectuados', 'aluno'));
    }

    public function pagar_factura($pagamento_id, $aluno_id) {
        if ($this->request->is('post')) {
            $factura = $this->FinanceiroTransacao->pagarFactura($pagamento_id, $aluno_id);
            if ($factura) {
                $this->Session->setFlash('Factura Paga com Sucesso');
            } else {
                $this->Session->setFlash('Problemas ao Tentar Pagar a Factura');
            }
            $this->redirect(array('controller' => 'financeiro_transacaos', 'action' => 'novo_pagamento', $aluno_id));
        } else {
            throw new MethodNotAllowedException('Acessou esta página de forma incorrecta');
        }
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->FinanceiroTransacao->id = $id;
        if (!$this->FinanceiroTransacao->exists()) {
            throw new NotFoundException(__('Invalid financeiro transacao'));
        }
        $this->set('financeiroTransacao', $this->FinanceiroTransacao->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->FinanceiroTransacao->create();
            if ($this->FinanceiroTransacao->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro transacao has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The financeiro transacao could not be saved. Please, try again.'));
            }
        }
        $financeiroTipoTransacaos = $this->FinanceiroTransacao->FinanceiroTipoTransacao->find('list');
        $entidades = $this->FinanceiroTransacao->Entidade->find('list');
        $financeiroContas = $this->FinanceiroTransacao->FinanceiroContum->find('list');
        $this->set(compact('financeiroTipoTransacaos', 'entidades', 'financeiroContas'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->FinanceiroTransacao->id = $id;
        if (!$this->FinanceiroTransacao->exists()) {
            throw new NotFoundException(__('Invalid financeiro transacao'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->FinanceiroTransacao->save($this->request->data)) {
                $this->Session->setFlash(__('The financeiro transacao has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The financeiro transacao could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->FinanceiroTransacao->read(null, $id);
        }
        $financeiroTipoTransacaos = $this->FinanceiroTransacao->FinanceiroTipoTransacao->find('list');
        $entidades = $this->FinanceiroTransacao->Entidade->find('list');
        $financeiroContas = $this->FinanceiroTransacao->FinanceiroContum->find('list');
        $this->set(compact('financeiroTipoTransacaos', 'entidades', 'financeiroContas'));
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
        $this->FinanceiroTransacao->id = $id;
        if (!$this->FinanceiroTransacao->exists()) {
            throw new NotFoundException(__('Invalid financeiro transacao'));
        }
        if ($this->FinanceiroTransacao->delete()) {
            $this->Session->setFlash(__('Financeiro transacao deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Financeiro transacao was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
