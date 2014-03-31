<?php

App::uses('AppModel', 'Model');

/**
 * Rua Model
 *
 * @property Cidade $Cidade
 */
class Rua extends AppModel {
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'avenida_rua',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
