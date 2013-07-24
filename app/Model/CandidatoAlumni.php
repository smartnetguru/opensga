<?php
App::uses('AppModel', 'Model');
/**
 * CandidatoAlumni Model
 *
 * @property Genero $Genero
 * @property EstadoCivil $EstadoCivil
 * @property UnidadeOrganica $UnidadeOrganica
 * @property Curso $Curso
 * @property GrauAcademico $GrauAcademico
 * @property Alumni $Alumni
 */
class CandidatoAlumni extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoCivil' => array(
			'className' => 'EstadoCivil',
			'foreignKey' => 'estado_civil_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'unidade_organica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GrauAcademico' => array(
			'className' => 'GrauAcademico',
			'foreignKey' => 'grau_academico_id',
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
		'Alumni' => array(
			'className' => 'Alumni',
			'foreignKey' => 'candidato_alumni_id',
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
