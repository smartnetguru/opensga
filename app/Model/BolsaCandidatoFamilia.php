<?php
App::uses('AppModel', 'Model');
/**
 * BolsaCandidatoFamilia Model
 *
 * @property BolsaPedido $BolsaPedido
 */
class BolsaCandidatoFamilia extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BolsaPedido' => array(
			'className' => 'BolsaPedido',
			'foreignKey' => 'bolsa_candidatura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
