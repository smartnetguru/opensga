<?php
App::uses('AppModel', 'Model');
/**
 * FinanceiroDeposito Model
 *
 * @property Entidade $Entidade
 * @property FinanceiroConta $FinanceiroConta
 * @property FinanceiroEstadoDeposito $FinanceiroEstadoDeposito
 * @property FinanceiroFormaDeposito $FinanceiroFormaDeposito
 * @property FinanceiroBanco $FinanceiroBanco
 */
class FinanceiroDeposito extends AppModel {


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
		),
		'FinanceiroConta' => array(
			'className' => 'FinanceiroConta',
			'foreignKey' => 'financeiro_conta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FinanceiroEstadoDeposito' => array(
			'className' => 'FinanceiroEstadoDeposito',
			'foreignKey' => 'financeiro_estado_deposito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FinanceiroFormaDeposito' => array(
			'className' => 'FinanceiroFormaDeposito',
			'foreignKey' => 'financeiro_forma_deposito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FinanceiroBanco' => array(
			'className' => 'FinanceiroBanco',
			'foreignKey' => 'financeiro_banco_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
