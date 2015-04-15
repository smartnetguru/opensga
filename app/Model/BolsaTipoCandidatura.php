<?php
App::uses('AppModel', 'Model');
/**
 * BolsaTipoCandidatura Model
 *
 * @property BolsaPedido $BolsaPedido
 */
class BolsaTipoCandidatura extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BolsaPedido' => array(
			'className' => 'BolsaPedido',
			'foreignKey' => 'bolsa_tipo_candidatura_id',
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
