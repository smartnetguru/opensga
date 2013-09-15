<?php
App::uses('AppModel', 'Model');
/**
 * CandidatoGraduacao Model
 *
 * @property Aluno $Aluno
 * @property CerimoniaGraduacao $CerimoniaGraduacao
 * @property EstadoObjecto $EstadoObjecto
 * @property EstadoCandidatura $EstadoCandidatura
 * @property Genero $Genero
 * @property EstadoCivil $EstadoCivil
 * @property RegimeEstudo $RegimeEstudo
 * @property RegaliaSocial $RegaliaSocial
 */
class CandidatoGraduacao extends AppModel {


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
		'CerimoniaGraduacao' => array(
			'className' => 'CerimoniaGraduacao',
			'foreignKey' => 'cerimonia_graduacao_id',
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
		'EstadoCandidatura' => array(
			'className' => 'EstadoCandidatura',
			'foreignKey' => 'estado_candidatura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
		'RegimeEstudo' => array(
			'className' => 'RegimeEstudo',
			'foreignKey' => 'regime_estudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RegaliaSocial' => array(
			'className' => 'RegaliaSocial',
			'foreignKey' => 'regalia_social_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
