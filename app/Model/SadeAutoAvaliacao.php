<?php
App::uses('AppModel', 'Model');
/**
 * SadeAutoAvaliacao Model
 *
 * @property Entidade $Entidade
 * @property SadeParametro $SadeParametro
 * @property AnoLectivo $AnoLectivo
 * @property SemestreLectivo $SemestreLectivo
 * @property SadeAvaliacao $SadeAvaliacao
 */
class SadeAutoAvaliacao extends AppModel {

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
		),
		'SemestreLectivo' => array(
			'className' => 'SemestreLectivo',
			'foreignKey' => 'semestre_lectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SadeAvaliacao' => array(
			'className' => 'SadeAvaliacao',
			'foreignKey' => 'sade_avaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
