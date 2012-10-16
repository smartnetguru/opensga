<?php
App::uses('AppModel', 'Model');
/**
 * UnidadeOrganica Model
 *
 * @property TipoUnidadeOrganica $TipoUnidadeOrganica
 * @property AreaAcademica $AreaAcademica
 * @property AreaUnidade $AreaUnidade
 * @property UnidadeOrganica $ParentUnidadeOrganica
 * @property Docente $Docente
 * @property Funcionario $Funcionario
 * @property UnidadeOrganica $ChildUnidadeOrganica
 * @property Tipo $Tipo
 */
class UnidadeOrganica extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoUnidadeOrganica' => array(
			'className' => 'TipoUnidadeOrganica',
			'foreignKey' => 'tipo_unidade_organica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AreaAcademica' => array(
			'className' => 'AreaAcademica',
			'foreignKey' => 'area_academica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AreaUnidade' => array(
			'className' => 'AreaUnidade',
			'foreignKey' => 'area_unidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentUnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'unidade_organica_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'unidade_organica_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ChildUnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'parent_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		
	);

}
