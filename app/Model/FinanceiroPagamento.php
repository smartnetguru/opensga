<?php
App::uses('AppModel', 'Model');
/**
 * FinanceiroPagamento Model
 *
 * @property Aluno $Aluno
 * @property FinanceiroConta $FinanceiroConta
 * @property FinanceiroTipoPagamento $FinanceiroTipoPagamento
 * @property Anolectivo $Anolectivo
 * @property FinanceiroEstadoPagamento $FinanceiroEstadoPagamento
 */
class FinanceiroPagamento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
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
		'FinanceiroTipoPagamento' => array(
			'className' => 'FinanceiroTipoPagamento',
			'foreignKey' => 'financeiro_tipo_pagamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FinanceiroEstadoPagamento' => array(
			'className' => 'FinanceiroEstadoPagamento',
			'foreignKey' => 'financeiro_estado_pagamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
