<?php
App::uses('AppModel', 'Model');
/**
 * CursoTipoPamento Model
 *
 * @property Curso $Curso
 * @property Tipopagamento $Tipopagamento
 */
class CursoTipoPamento extends AppModel {

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
		'FinanceiroTipoPagamento' => array(
			'className' => 'Tipopagamento',
			'foreignKey' => 'tipopagamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
