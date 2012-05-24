<?php
App::uses('AppModel', 'Model');
/**
 * BolsaResultado Model
 *
 * @property Aluno $Aluno
 * @property AnoLectivo $AnoLectivo
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 * @property BolsaBolsa $BolsaBolsa
 * @property BolsaCandidatura $BolsaCandidatura
 */
class BolsaResultado extends AppModel {

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
		'AnoLectivo' => array(
			'className' => 'AnoLectivo',
			'foreignKey' => 'ano_lectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BolsaTipoBolsa' => array(
			'className' => 'BolsaTipoBolsa',
			'foreignKey' => 'bolsa_tipo_bolsa_id',
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
		'BolsaBolsa' => array(
			'className' => 'BolsaBolsa',
			'foreignKey' => 'bolsa_resultado_id',
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
		'BolsaCandidatura' => array(
			'className' => 'BolsaCandidatura',
			'foreignKey' => 'bolsa_resultado_id',
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
