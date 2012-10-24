<?php
App::uses('AppModel', 'Model');
/**
 * EntidadeContacto Model
 *
 * @property Entidade $Entidade
 * @property TipoContacto $TipoContacto
 * @property EstadoObjecto $EstadoObjecto
 */
class EntidadeContacto extends AppModel {


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
		'TipoContacto' => array(
			'className' => 'TipoContacto',
			'foreignKey' => 'tipo_contacto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoObjecto' => array(
			'className' => 'EstadoObjecto',
			'foreignKey' => 'estado_objecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
