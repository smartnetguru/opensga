<?php
App::uses('AppModel', 'Model');
/**
 * SadeAutoAvaliacao Model
 *
 * @property Entidade $Entidade
 * @property SadeParametro $SadeParametro
 * @property Anolectivo $Anolectivo
 * @property Semestrelectivo $Semestrelectivo
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
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Semestrelectivo' => array(
			'className' => 'Semestrelectivo',
			'foreignKey' => 'semestrelectivo_id',
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
