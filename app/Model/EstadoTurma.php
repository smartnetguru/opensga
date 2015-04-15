<?php
App::uses('AppModel', 'Model');
/**
 * EstadoTurma Model
 *
 * @property Turma $Turma
 */
class EstadoTurma extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'estado_turma_id',
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
