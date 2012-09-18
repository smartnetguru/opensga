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

    
    public function novo_deposito($aluno_id){
        $this->FinanceiroTransacao->Entidade->Aluno->id = $aluno_id;
        if(!$this->FinanceiroTransacao->Entidade->Aluno->exists()){
            throw new NotFoundException('Este Aluno não existe');
        }
        if($this->request->is('post') || $this->request->is('put')){
            $deposito = $this->FinanceiroTransacao->processarDeposito($this->request->data);
            //die(debug($deposito));
            if($deposito){
                $this->Session->setFlash('O Deposito Foi efecutado com sucesso');
                $this->redirect(array('controller'=>'alunos','action'=>'perfil_estudante',$aluno_id));
            }
            else{
                $this->Session->setFlash('Problemas com o deposito. Tente novamente');
            }
            
        }
        
        $this->set(compact('aluno_id'));
    }
    
    public function novo_pagamento($aluno_id){
        if($this->request->is('post') || $this->request->is('put')){
            $this->request->data['FinanceiroPagamento']['financeiro_conta_id'] = $this->FinanceiroTransacao->FinanceiroPagamento->Aluno->getContaIdByAlunoId($aluno_id);
            $this->request->data['FinanceiroPagamento']['financeiro_estado_pagamento_id'] = 2;
            $this->request->data['FinanceiroPagamento']['anolectivo_id'] = Configure::read('OpenSGA.ano_lectivo_id');
            $this->request->data['FinanceiroPagamento']['semestrelectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
            $this->request->data['FinanceiroPagamento']['data_emissao'] = date('Y-m-d H:i:s');
            $this->request->data['FinanceiroPagamento']['entidade_id'] = $this->FinanceiroTransacao->FinanceiroPagamento->Aluno->field('entidade_id',array('Aluno.id'=>$aluno_id));
            $this->request->data['FinanceiroPagamento']['detalhes'] = $this->request->data['FinanceiroTransacao']['detalhes'];
            $pagamento_valido = $this->FinanceiroTransacao->validaPagamento($this->request->data);
            
            if($pagamento_valido==2){
                $this->Session->setFlash('O valor indicado é maior que o valor do pagamento. Apenas o valor do Pagamento será debitado. O restante ficará disponível na conta do aluno','default',array('class'=>'alert info'));
                
            }
            if($pagamento_valido==0){
                
            } else {
                $saldo_actual = $this->FinanceiroTransacao->getSaldoActual($aluno_id);
                $valor_real = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor',array('id'=>  $this->request->data['FinanceiroPagamento']['financeiro_tipo_pagamento_id']));
                if($saldo_actual>=$valor_real){
                    $this->request->data['FinanceiroPagamento']['valor'] = $valor_real;
                    $pagamento_id = $this->FinanceiroTransacao->processarPagamento($this->request->data['FinanceiroPagamento']);
                } else{
                    $this->Session->setFlash('O Seu Saldo não é Suficiente para efectuar este pagamento', 'default',array('class'=>'alert error'),'saldo_insuficiente');
                }
            }
            
            
        }
        
        $saldo_actual = $this->FinanceiroTransacao->getSaldoActual($aluno_id);
        $total_divida = $this->FinanceiroTransacao->FinanceiroPagamento->find('all',array('conditions'=>array('aluno_id'=>$aluno_id,'financeiro_estado_pagamento_id'=>1),'fields'=>'SUM(FinanceiroPagamento.valor) as valor'));
        
        $pagamentos_pendentes = $this->FinanceiroTransacao->FinanceiroPagamento->find('all',array('conditions'=>array('aluno_id'=>$aluno_id,'financeiro_estado_pagamento_id'=>1)));
        
        $pagamentos_efectuados = $this->FinanceiroTransacao->FinanceiroPagamento->find('all',array('conditions'=>array('aluno_id'=>$aluno_id,'financeiro_estado_pagamento_id'=>2,'semestrelectivo_id'=>Configure::read('OpenSGA.semestre_lectivo_id'))));
        
        
        $financeiro_tipo_pagamentos  = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->find('list',array('conditions'=>array('codigo >'=>21)));
        $tipo_pagamentos = array();
        
        
        $this->set(compact('saldo_actual','pagamentos_pendentes','total_divida','financeiro_tipo_pagamentos','aluno_id','pagamentos_efectuados'));
    }
    
    
    public function pagar_factura($pagamento_id,$aluno_id){
        if($this->request->is('post')){
            $factura = $this->FinanceiroTransacao->pagarFactura($pagamento_id,$aluno_id);
            if($factura){
                $this->Session->setFlash('Factura Paga com Sucesso');
            } else{
                $this->Session->setFlash('Problemas ao Tentar Pagar a Factura');
            }
            $this->redirect(array('controller'=>'financeiro_transacaos','action'=>'novo_pagamento',$aluno_id));
        } else{
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
