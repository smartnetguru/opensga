<?php
App::uses('AppModel', 'Model');
/**
 * CursoNews Model
 *
 * @property GrauAcademico $GrauAcademico
 * @property TipoCurso $TipoCurso
 * @property UnidadeOrganica $UnidadeOrganica
 * @property EstadoObjecto $EstadoObjecto
 * @property CursoResponsavel $CursoResponsavel
 */
class CursoNews extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'GrauAcademico' => array(
			'className' => 'GrauAcademico',
			'foreignKey' => 'grau_academico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoCurso' => array(
			'className' => 'TipoCurso',
			'foreignKey' => 'tipo_curso_id',
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
		'EstadoObjecto' => array(
			'className' => 'EstadoObjecto',
			'foreignKey' => 'estado_objecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CursoResponsavel' => array(
			'className' => 'CursoResponsavel',
			'foreignKey' => 'curso_responsavel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
