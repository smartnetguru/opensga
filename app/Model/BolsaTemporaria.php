<?php
App::uses('AppModel', 'Model');
/**
 * BolsaTemporaria Model
 *
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 * @property Candidatura $Candidatura
 * @property Curso $Curso
 */
class BolsaTemporaria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BolsaTipoBolsa' => array(
			'className' => 'BolsaTipoBolsa',
			'foreignKey' => 'bolsa_tipo_bolsa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Candidatura' => array(
			'className' => 'Candidatura',
			'foreignKey' => 'candidatura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
