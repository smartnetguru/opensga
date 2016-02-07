<?php

	App::uses('AppModel', 'Model');

	/**
	 * Precedencia Model
	 *
	 * @property DisciplinaPlanoEstudo $DisciplinaPlanoEstudo
	 * @property TipoPrecedencia $TipoPrecedencia
	 * @property Disciplina $Disciplina
	 * @property EstadoObjecto $EstadoObjecto
	 */
	class Precedencia extends AppModel
	{
		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'DisciplinaPlanoEstudo'           => [
				'className'  => 'DisciplinaPlanoEstudo',
				'foreignKey' => 'disciplina_plano_estudo_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'DisciplinaPlanoEstudoPrecedente' => [
				'className'  => 'DisciplinaPlanoEstudo',
				'foreignKey' => 'disciplina_plano_estudo_precedente',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'TipoPrecedencia'                 => [
				'className'  => 'TipoPrecedencia',
				'foreignKey' => 'tipo_precedencia_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Disciplina'                      => [
				'className'  => 'Disciplina',
				'foreignKey' => 'disciplina_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'DisciplinaPrecedente'            => [
				'className'  => 'Disciplina',
				'foreignKey' => 'disciplina_precedente',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'EstadoObjecto'                   => [
				'className'  => 'EstadoObjecto',
				'foreignKey' => 'estado_objecto_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];

	}
