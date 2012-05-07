<?php
App::uses('AppModel', 'Model');
/**
 * SadeAvaliador Model
 *
 * @property Entidade $Entidade
 * @property Docente $Docente
 * @property NivelAvaliador $NivelAvaliador
 * @property SadeAvaliacaoQualitativa $SadeAvaliacaoQualitativa
 */
class SadeAvaliador extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'docente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NivelAvaliador' => array(
			'className' => 'NivelAvaliador',
			'foreignKey' => 'nivel_avaliador_id',
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
		'SadeAvaliacaoQualitativa' => array(
			'className' => 'SadeAvaliacaoQualitativa',
			'foreignKey' => 'sade_avaliador_id',
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
