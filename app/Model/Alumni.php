<?php
App::uses('AppModel', 'Model');
/**
 * Alumni Model
 *
 * @property Entidade $Entidade
 * @property Aluno $Aluno
 * @property CandidatoAlumni $CandidatoAlumni
 * @property User $User
 */
class Alumni extends AppModel {


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
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CandidatoAlumni' => array(
			'className' => 'CandidatoAlumni',
			'foreignKey' => 'candidato_alumni_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
