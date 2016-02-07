<?php
	App::uses('AppModel', 'Model');

	/**
	 * AlunoViaAdmissao Model
	 *
	 * @property Aluno $Aluno
	 */
	class AlunoViaAdmissao extends AppModel
	{

		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'Aluno' => [
				'className'    => 'Aluno',
				'foreignKey'   => 'aluno_via_admissao_id',
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
