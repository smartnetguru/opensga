<?php
App::uses('AppModel', 'Model');
/**
 * ArtigoCategoriaArtigo Model
 *
 * @property Artigo $Artigo
 * @property ArtigoCategoria $ArtigoCategoria
 * @property EstadoObjecto $EstadoObjecto
 */
class ArtigoCategoriaArtigo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'artigo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'artigo_categoria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado_objecto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Artigo' => array(
			'className' => 'Artigo',
			'foreignKey' => 'artigo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ArtigoCategoria' => array(
			'className' => 'ArtigoCategoria',
			'foreignKey' => 'artigo_categoria_id',
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
