<?php
App::uses('AppModel', 'Model');
/**
 * FinanceiroTransacao Model
 *
 * @property FinanceiroTipoTransacao $FinanceiroTipoTransacao
 * @property Entidade $Entidade
 * @property FinanceiroConta $FinanceiroConta
 * @property FinanceiroDeposito $FinanceiroDeposito
 * @property FinanceiroPagamento $FinanceiroPagamento
 */
class FinanceiroTransacao extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FinanceiroTipoTransacao' => array(
			'className' => 'FinanceiroTipoTransacao',
			'foreignKey' => 'financeiro_tipo_transacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FinanceiroConta' => array(
			'className' => 'FinanceiroConta',
			'foreignKey' => 'financeiro_conta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FinanceiroDeposito' => array(
			'className' => 'FinanceiroDeposito',
			'foreignKey' => 'financeiro_transacao_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'FinanceiroPagamento' => array(
			'className' => 'FinanceiroPagamento',
			'foreignKey' => 'financeiro_transacao_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
    
    public $validate = array(
        
    );
    
    
    public function criaNovoPagamentoPendente($data){
        $datasource = $this->getDataSource();
        $datasource->begin();
        
        $this->FinanceiroPagamento->FinanceiroTipoPagamento->id = $data['FinanceiroPagamento']['financeiro_tipo_pagamento_id'];
        
        $data['FinanceiroPagamento']['valor'] = $this->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
        $data['FinanceiroPagamento']['codigo'] = $this->FinanceiroPagamento->gerarCodigoPagamento($data['FinanceiroTransacao']['aluno_id'],$data['FinanceiroPagamento']['financeiro_tipo_pagamento_id']);
       
        $this->FinanceiroPagamento->create();
        if($this->FinanceiroPagamento->save($data)){
            $datasource->commit();
            return $this->FinanceiroPagamento->id;
        }
        
        $datasource->rollback();
        return false;
    }
    
    public function getSaldoActual($aluno_id){
        $entidade_id = $this->Entidade->Aluno->field('entidade_id',array('id'=>$aluno_id));
        
        $this->contain();
        $depositos = $this->find('all',array('conditions'=>array('entidade_id'=>$entidade_id,'financeiro_tipo_transacao_id'=>1),'fields'=>array('SUM(valor) as valor')));
        
        if($depositos){
            $valor_depositos = $depositos[0][0]['valor'];
        } else{
            $valor_depositos=0;
        }
        
        $this->contain();
        $pagamentos = $this->find('all',array('conditions'=>array('entidade_id'=>$entidade_id,'financeiro_tipo_transacao_id'=>2),'fields'=>array('SUM(valor) as valor')));
        if($pagamentos){
            $valor_pagamentos = $pagamentos[0][0]['valor'];
        } else{
            $valor_pagamentos = 0;
        }
        
        return $valor_depositos - $valor_pagamentos;
    }
    
    public function pagarFactura($pagamento_id,$aluno_id){
        $this->FinanceiroPagamento->id = $pagamento_id;
        
        $valor_pagamento = $this->FinanceiroPagamento->field('valor');
        $saldo_actual  = $this->getSaldoActual($aluno_id);
        
        if($saldo_actual<$valor_pagamento){
            return false;
        }
        $estado_pagamento = $this->FinanceiroPagamento->field('financeiro_estado_pagamento_id');
        if($estado_pagamento != 1){
            return false;
        } 
            
        $entidade_id = $this->FinanceiroPagamento->Aluno->field('entidade_id',array('id'=>$aluno_id));
        $conta_id = $this->FinanceiroPagamento->Aluno->getContaIdByAlunoId($aluno_id);
        
        $transacao = array(
            'financeiro_tipo_transacao_id'=>2,
            'valor'=>$valor_pagamento,
            'entidade_id'=>$entidade_id,
            'financeiro_conta_id'=>$conta_id
        );
        
        $datasource = $this->getDataSource();
        $datasource->begin();
        
        $this->create();
        if($this->save(array('FinanceiroTransacao'=>$transacao))){
            $this->FinanceiroPagamento->set('financeiro_estado_pagamento_id',2);
            $this->FinanceiroPagamento->set('financeiro_transacao_id',$this->id);
            $this->FinanceiroPagamento->set('data_pagamento',date('Y-m-d'));
            if($this->FinanceiroPagamento->save()){
                return $datasource->commit();
                
            }
        }
        
        $datasource->rollback();
        return false;
    }
    
    public function processarDeposito($data){
        $this->Entidade->Aluno->id = $data['FinanceiroTransacao']['aluno_id'];
        
        $this->Entidade->Aluno->recursive = -1;
        $aluno = $this->Entidade->Aluno->read();
        
        $dataSource = $this->getDataSource();
            
        $dataSource->begin();
        //Busca ou cria a nova conta
        $conta = $this->FinanceiroConta->findByEntidadeId($aluno['Aluno']['entidade_id']);
        if($conta == false){
            $conta = $this->FinanceiroConta->criarConta($aluno['Aluno']['entidade_id']);
            
        }
        
        //Grava os dados da transacao
        $data['FinanceiroTransacao']['financeiro_tipo_transacao_id'] = 1;
        $data['FinanceiroTransacao']['entidade_id'] = $aluno['Aluno']['entidade_id'];
        $data['FinanceiroTransacao']['financeiro_conta_id'] = $conta['FinanceiroConta']['id'];
        
        $this->create();
        if($this->save($data)){
            $novo_deposito_1 = array_merge($data['FinanceiroTransacao'],$data['FinanceiroDeposito']);
            $novo_deposito = array('FinanceiroDeposito'=>$novo_deposito_1);

            $novo_deposito['FinanceiroDeposito']['financeiro_transacao_id'] = $this->id;
            $novo_deposito['FinanceiroDeposito']['data_reconciliacao'] = null;
            $novo_deposito['FinanceiroDeposito']['financeiro_estado_deposito_id'] = 1;
            $novo_deposito['FinanceiroDeposito']['semestre_lectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
            //die(debug($novo_deposito));            
            $this->FinanceiroDeposito->create();
            if($this->FinanceiroDeposito->save($novo_deposito)){
                
                //Agora Actualizamos o Saldo da Conta
                $this->FinanceiroConta->id = $conta['FinanceiroConta']['id'];
                $saldo_actual = $this->FinanceiroConta->field('saldo_actual');
                $saldo_novo = $saldo_actual + $data['FinanceiroTransacao']['valor'];
                $this->FinanceiroConta->set('saldo_actual',$saldo_novo);
                if($this->FinanceiroConta->save()){
                    return $dataSource->commit(); 
                } else{
                    $dataSource->rollback();
                }
               
                
            } else{
                $dataSource->rollback();
                return false;
            }
        } else{
            $dataSource->rollback();       
            return FALSE;
        }    
    }
    
    public function processarPagamento($data){
        $dataSource = $this->getDataSource();
        $dataSource->begin();
        
        $data['financeiro_tipo_transacao_id'] = 2;
        
        
        $this->create();
        if($this->save(array('FinanceiroTransacao'=>$data))){
            $this->FinanceiroPagamento->create();
            $data['financeiro_transacao_id'] = $this->id;
            if($this->FinanceiroPagamento->save(array('FinanceiroPagamento'=>$data))){
                $this->FinanceiroConta->id = $data['financeiro_conta_id'];
                $saldo_actual = $this->FinanceiroConta->field('saldo_actual');
                $saldo_novo = $saldo_actual - $data['valor'];
                $this->FinanceiroConta->set('saldo_actual',$saldo_novo);
                
                
                if($this->FinanceiroConta->save()){
                    $dataSource->commit();
                    return $this->FinanceiroPagamento->id;
                } else{
                    $datasource->rollback();
                }
            } else{
                $dataSource->rollback();
            }
        } else{
            $dataSource->rollback();
        }
        
        
    }
    
    public function validaPagamento($data){
        $this->FinanceiroPagamento->FinanceiroTipoPagamento->id = $data['FinanceiroPagamento']['financeiro_tipo_pagamento_id'];
        $valor_real = $this->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
        if($valor_real > $data['FinanceiroPagamento']['valor']){
            return 0;
        } elseif($valor_real == $data['FinanceiroPagamento']['valor']){
            return 1;
        } else{
            return 2;
        }
        
    }

}
