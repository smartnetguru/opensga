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
    
    public $validade = array(
        
    );
    
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
        $data['FinanceiroTransacao']['tipo_transacao_id'] = 1;
        $data['FinanceiroTransacao']['entidade_id'] = $aluno['Aluno']['entidade_id'];
        $data['FinanceiroTransacao']['financeiro_conta_id'] = $conta['FinanceiroConta']['id'];
        
        $this->create();
        if($this->save($data)){
            $novo_deposito = array('FinanceiroDeposito'=>$data['FinanceiroTransacao']);
            $novo_deposito['FinanceiroDeposito']['financeiro_transacao_id'] = $this->id;
            $novo_deposito['FinanceiroDeposito']['data_reconciliacao'] = null;
            $novo_deposito['FinanceiroDeposito']['financeiro_estado_deposito_id'] = 1;
            $novo_deposito['FinanceiroDeposito']['semestrelectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
            
        
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
        
        $data['tipo_transacao_id'] = 2;
        
        $this->create();
        if($this->save(array('FinancdeiroTransacao'=>$data))){
            $this->FinanceiroPagamento->create();
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
        
        debug($data);
    }

}
