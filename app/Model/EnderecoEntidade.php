<?php
App::uses('AppModel', 'Model');
/**
 * EnderecoEntidade Model
 *
 * @property Entidade $Entidade
 * @property Cidade $Cidade
 * @property Provincia $Provincia
 * @property EstadoObjecto $EstadoObjecto
 * @property TipoEnderecoEntidade $TipoEnderecoEntidade
 * @property Tipo $Tipo
 */
class EnderecoEntidade extends AppModel {


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
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_id',
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
		),
		'TipoEnderecoEntidade' => array(
			'className' => 'TipoEnderecoEntidade',
			'foreignKey' => 'tipo_endereco_entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Tipo' => array(
			'className' => 'Tipo',
			'joinTable' => 'tipo_endereco_entidades',
			'foreignKey' => 'endereco_entidade_id',
			'associationForeignKey' => 'tipo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
