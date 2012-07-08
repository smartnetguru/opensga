<?php
App::uses('AppModel', 'Model');
/**
 * PlanoEstudoTipoPagamento Model
 *
 * @property Planoestudo $Planoestudo
 * @property Tipopagamento $Tipopagamento
 */
class PlanoEstudoTipoPagamento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 'planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipopagamento' => array(
			'className' => 'Tipopagamento',
			'foreignKey' => 'tipopagamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
