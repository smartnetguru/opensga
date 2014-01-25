<?php
App::uses('AppModel', 'Model');
/**
 * SadeAvaliacaoQualitativa Model
 *
 * @property SadeAvaliador $SadeAvaliador
 * @property Entidade $Entidade
 * @property SadeParametro $SadeParametro
 * @property AnoLectivo $AnoLectivo
 */
class SadeAvaliacaoQualitativa extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SadeAvaliador' => array(
			'className' => 'SadeAvaliador',
			'foreignKey' => 'sade_avaliador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SadeParametro' => array(
			'className' => 'SadeParametro',
			'foreignKey' => 'sade_parametro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AnoLectivo' => array(
			'className' => 'AnoLectivo',
			'foreignKey' => 'ano_lectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
