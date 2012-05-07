<?php
App::uses('AppModel', 'Model');
/**
 * SadeAvaliacao Model
 *
 * @property Anolectivo $Anolectivo
 * @property SadeAutoAvaliacao $SadeAutoAvaliacao
 */
class SadeAvaliacao extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SadeAutoAvaliacao' => array(
			'className' => 'SadeAutoAvaliacao',
			'foreignKey' => 'sade_avaliacao_id',
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
