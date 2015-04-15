<?php
App::uses('AppModel', 'Model');
/**
 * TipoNivelMedio Model
 *
 * @property AlunoNivelMedio $AlunoNivelMedio
 */
class TipoNivelMedio extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AlunoNivelMedio' => array(
			'className' => 'AlunoNivelMedio',
			'foreignKey' => 'tipo_nivel_medio_id',
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
