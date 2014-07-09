<?php
App::uses('AppModel', 'Model');
/**
 * EstadoUpload Model
 *
 * @property Upload $Upload
 */
class EstadoUpload extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Upload' => array(
			'className' => 'Upload',
			'foreignKey' => 'estado_upload_id',
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
