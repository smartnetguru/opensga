<?php
App::uses('AppModel', 'Model');
/**
 * SadeParametro Model
 *
 * @property SadeIndicador $SadeIndicador
 * @property SadeAutoAvaliacao $SadeAutoAvaliacao
 * @property SadeAvaliacaoAluno $SadeAvaliacaoAluno
 * @property SadeAvaliacaoQualitativa $SadeAvaliacaoQualitativa
 */
class SadeParametro extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SadeIndicador' => array(
			'className' => 'SadeIndicador',
			'foreignKey' => 'sade_indicador_id',
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
			'foreignKey' => 'sade_parametro_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SadeAvaliacaoAluno' => array(
			'className' => 'SadeAvaliacaoAluno',
			'foreignKey' => 'sade_parametro_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SadeAvaliacaoQualitativa' => array(
			'className' => 'SadeAvaliacaoQualitativa',
			'foreignKey' => 'sade_parametro_id',
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
