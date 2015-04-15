<?php
App::uses('AppModel', 'Model');
/**
 * CerimoniaGraduacao Model
 *
 * @property CandidatoGraduacao $CandidatoGraduacao
 */
class CerimoniaGraduacao extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CandidatoGraduacao' => array(
			'className' => 'CandidatoGraduacao',
			'foreignKey' => 'cerimonia_graduacao_id',
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
