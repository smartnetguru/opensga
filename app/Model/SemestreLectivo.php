<?php
App::uses('AppModel', 'Model');
/**
 * SemestreLectivo Model
 *
 * @property AnoLectivo $AnoLectivo
 * @property Semestre $Semestre
 * @property FinanceiroDeposito $FinanceiroDeposito
 * @property FinanceiroPagamento $FinanceiroPagamento
 * @property Turma $Turma
 */
class SemestreLectivo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AnoLectivo' => array(
			'className' => 'AnoLectivo',
			'foreignKey' => 'ano_lectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Semestre' => array(
			'className' => 'Semestre',
			'foreignKey' => 'semestre_id',
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
			'foreignKey' => 'semestre_lectivo_id',
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
			'foreignKey' => 'semestre_lectivo_id',
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
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'semestre_lectivo_id',
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
