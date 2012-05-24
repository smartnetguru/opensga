<?php
App::uses('AppModel', 'Model');
/**
 * BolsaCandidatura Model
 *
 * @property Aluno $Aluno
 * @property AnoLectivo $AnoLectivo
 * @property BolsaBolsa $BolsaBolsa
 * @property BolsaResultado $BolsaResultado
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 * @property BolsaBolsa $BolsaBolsa
 */
class BolsaCandidatura extends AppModel {

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
		'BolsaBolsa' => array(
			'className' => 'BolsaBolsa',
			'foreignKey' => 'bolsa_bolsa_id',
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
			'foreignKey' => 'bolsa_candidatura_id',
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
