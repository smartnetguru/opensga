<?php
App::uses('AppModel', 'Model');
/**
 * BolsaBolsa Model
 *
 * @property Aluno $Aluno
 * @property BolsaPedido $BolsaPedido
 * @property AnoLectivo $AnoLectivo
 * @property Banco $Banco
 * @property BolsaFonteBolsa $BolsaFonteBolsa
 * @property BolsaCriadorConta $BolsaCriadorConta
 * @property BolsaEstadoBolsa $BolsaEstadoBolsa
 * @property BolsaResultado $BolsaResultado
 * @property BolsaPedido $BolsaPedido
 */
class BolsaBolsa extends AppModel {


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
		'BolsaPedido' => array(
			'className' => 'BolsaPedido',
			'foreignKey' => 'bolsa_candidatura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AnoLectivo' => array(
			'className' => 'AnoLectivo',
			'foreignKey' => 'ano_lectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Banco' => array(
			'className' => 'Banco',
			'foreignKey' => 'banco_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BolsaFonteBolsa' => array(
			'className' => 'BolsaFonteBolsa',
			'foreignKey' => 'bolsa_fonte_bolsa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BolsaResultado' => array(
			'className' => 'BolsaResultado',
			'foreignKey' => 'bolsa_resultado_id',
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
		'BolsaPedido' => array(
			'className' => 'BolsaPedido',
			'foreignKey' => 'bolsa_bolsa_id',
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
