<?php
App::uses('AppModel', 'Model');
/**
 * BolsaCriadorConta Model
 *
 * @property BolsaBolsa $BolsaBolsa
 */
class BolsaCriadorConta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BolsaBolsa' => array(
			'className' => 'BolsaBolsa',
			'foreignKey' => 'bolsa_criador_conta_id',
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
