<?php
App::uses('AppModel', 'Model');
/**
 * FinanceiroConta Model
 *
 * @property Entidade $Entidade
 * @property FinanceiroDeposito $FinanceiroDeposito
 * @property FinanceiroPagamento $FinanceiroPagamento
 */
class FinanceiroConta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
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
			'foreignKey' => 'financeiro_conta_id',
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
			'foreignKey' => 'financeiro_conta_id',
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
        'entidade_id'=>array(
            'notEmpty'=>array(
                'rule'=>'notEmpty',
                'message'=>'Este campo nao pode ficar vazio'
            ),
            'unique'=>array(
                'rule'=>'isUnique',
                'message'=>'Uma entidade só pode ter uma conta'
            )
        )
    );
    
    public function criarConta($entidade_id){
        $nova_conta = array('FinanceiroConta'=>array('entidade_id'=>$entidade_id,'saldo_actual'=>0));
        $this->create();
        $this->save($nova_conta);
        $conta = $this->findById($this->id);
        return $conta;
    }

    public function getByEntidadeId($entidadeId){
        $conta = $this->findByEntidadeId($entidadeId);
        if(!$conta){
            $conta = $this->criarConta($entidadeId);
        }
        return $conta;
    }

}
