<?php
App::uses('AppModel', 'Model');
/**
 * BolsaResultado Model
 *
 * @property BolsaCandidatura $BolsaCandidatura
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 * @property BolsaMotivoIndeferimento $BolsaMotivoIndeferimento
 * @property BolsaBolsa $BolsaBolsa
 */
class BolsaResultado extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BolsaCandidatura' => array(
			'className' => 'BolsaCandidatura',
			'foreignKey' => 'bolsa_candidatura_id',
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
		),
		'BolsaMotivoIndeferimento' => array(
			'className' => 'BolsaMotivoIndeferimento',
			'foreignKey' => 'bolsa_motivo_indeferimento_id',
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
		)
	);

}
