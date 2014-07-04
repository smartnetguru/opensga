<?php

App::uses('AppModel', 'Model');

/**
 * HistoricoCurso Model
 *
 * @property Aluno $Aluno
 * @property Curso $Curso
 * @property PlanoEstudo $PlanoEstudo
 */
class HistoricoCurso extends AppModel {
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
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
		'PlanoEstudo' => array(
			'className' => 'PlanoEstudo',
			'foreignKey' => 'plano_estudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MotivoTerminoCurso' => array(
			'className' => 'MotivoTerminoCurso',
			'foreignKey' => 'motivo_termino_curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
