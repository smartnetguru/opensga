<?php
App::uses('AppModel', 'Model');
/**
 * FinanceiroEstadoDeposito Model
 *
 * @property FinanceiroDeposito $FinanceiroDeposito
 */
class FinanceiroEstadoDeposito extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FinanceiroDeposito' => array(
			'className' => 'FinanceiroDeposito',
			'foreignKey' => 'financeiro_estado_deposito_id',
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
