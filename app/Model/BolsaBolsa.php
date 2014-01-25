<?php
App::uses('AppModel', 'Model');
/**
 * BolsaBolsa Model
 *
 * @property Aluno $Aluno
 * @property BolsaCandidatura $BolsaCandidatura
 * @property AnoLectivo $AnoLectivo
 * @property Banco $Banco
 * @property BolsaFonteBolsa $BolsaFonteBolsa
 * @property BolsaCriadorConta $BolsaCriadorConta
 * @property BolsaEstadoBolsa $BolsaEstadoBolsa
 * @property BolsaResultado $BolsaResultado
 * @property BolsaCandidatura $BolsaCandidatura
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
		'BolsaCandidatura' => array(
			'className' => 'BolsaCandidatura',
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
		'BolsaCriadorConta' => array(
			'className' => 'BolsaCriadorConta',
			'foreignKey' => 'bolsa_criador_conta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BolsaEstadoBolsa' => array(
			'className' => 'BolsaEstadoBolsa',
			'foreignKey' => 'bolsa_estado_bolsa_id',
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
		'BolsaCandidatura' => array(
			'className' => 'BolsaCandidatura',
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
