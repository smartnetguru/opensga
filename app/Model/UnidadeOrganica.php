<?php
App::uses('AppModel', 'Model');
/**
 * UnidadeOrganica Model
 *
 * @property Docente $Docente
 */
class UnidadeOrganica extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'unidade_organica_id',
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
