<?php
App::uses('AppModel', 'Model');
/**
 * FuncionariosFuncaoProfissional Model
 *
 * @property Funcionario $Funcionario
 * @property FuncaoProfissional $FuncaoProfissional
 * @property UnidadeOrganica $UnidadeOrganica
 */
class FuncionariosFuncaoProfissional extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'funcionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FuncaoProfissional' => array(
			'className' => 'FuncaoProfissional',
			'foreignKey' => 'funcao_profissional_id',
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
		)
	);
}
