<?php
App::uses('AppModel', 'Model');
/**
 * CursoRegime Model
 *
 * @property Curso $Curso
 * @property Regime $Regime
 */
class CursoRegime extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Regime' => array(
			'className' => 'Regime',
			'foreignKey' => 'regime_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
