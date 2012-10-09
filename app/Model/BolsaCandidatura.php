<?php
App::uses('AppModel', 'Model');
/**
 * BolsaCandidatura Model
 *
 * @property Aluno $Aluno
 * @property AnoLectivo $AnoLectivo
 * @property BolsaBolsa $BolsaBolsa
 * @property EstadoObjecto $EstadoObjecto
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 * @property Entidade $Entidade
 * @property BolsaTipoCandidatura $BolsaTipoCandidatura
 * @property BolsaBolsa $BolsaBolsa
 * @property BolsaCandidatoFamilia $BolsaCandidatoFamilia
 * @property BolsaResultado $BolsaResultado
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
		'EstadoObjecto' => array(
			'className' => 'EstadoObjecto',
			'foreignKey' => 'estado_objecto_id',
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
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BolsaTipoCandidatura' => array(
			'className' => 'BolsaTipoCandidatura',
			'foreignKey' => 'bolsa_tipo_candidatura_id',
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
		),
		'BolsaCandidatoFamilia' => array(
			'className' => 'BolsaCandidatoFamilia',
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
		),
		'BolsaResultado' => array(
			'className' => 'BolsaResultado',
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
