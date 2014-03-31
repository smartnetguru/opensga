<?php
App::uses('AppModel', 'Model');
/**
 * UserRole Model
 *
 * @property User $User
 * @property Role $Role
 * @property EstadoObjecto $EstadoObjecto
 */
class UserRole extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
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
