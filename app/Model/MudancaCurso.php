<?php
	App::uses('AppModel', 'Model');

	/**
	 * MudancaCurso Model
	 *
	 * @property Aluno $Aluno
	 * @property Funcionario $Funcionario
	 * @property FormaMudancaCurso $FormaMudancaCurso
	 */
	class MudancaCurso extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'Aluno'             => [
				'className'  => 'Aluno',
				'foreignKey' => 'aluno_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'FormaMudancaCurso' => [
				'className'  => 'FormaMudancaCurso',
				'foreignKey' => 'forma_mudanca_curso_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'CursoAntigo'       => [
				'className'  => 'Curso',
				'foreignKey' => 'curso_antigo',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'CursoNovo'         => [
				'className'  => 'Curso',
				'foreignKey' => 'curso_novo',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
