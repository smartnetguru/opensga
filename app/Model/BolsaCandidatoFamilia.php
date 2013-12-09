<?php
App::uses('AppModel', 'Model');
/**
 * BolsaCandidatoFamilia Model
 *
 * @property BolsaCandidatura $BolsaCandidatura
 */
class BolsaCandidatoFamilia extends AppModel {


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
		)
	);
}
