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

}
