<?php
	App::uses('AppModel', 'Model');

	/**
	 * EstadoDocenteTurma Model
	 *
	 * @property DocenteTurma $DocenteTurma
	 */
	class EstadoDocenteTurma extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'DocenteTurma' => [
				'className'    => 'DocenteTurma',
				'foreignKey'   => 'estado_docente_turma_id',
				'dependent'    => false,
				'conditions'   => '',
				'fields'       => '',
				'order'        => '',
				'limit'        => '',
				'offset'       => '',
				'exclusive'    => '',
				'finderQuery'  => '',
				'counterQuery' => '',
			],
		];

	}
