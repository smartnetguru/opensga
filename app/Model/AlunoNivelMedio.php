<?php
	App::uses('AppModel', 'Model');

	/**
	 * AlunoNivelMedio Model
	 *
	 * @property Aluno $Aluno
	 * @property EscolaNivelMedio $EscolaNivelMedio
	 */
	class AlunoNivelMedio extends AppModel
	{

		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'Aluno'            => [
				'className'  => 'Aluno',
				'foreignKey' => 'aluno_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'EscolaNivelMedio' => [
				'className'  => 'EscolaNivelMedio',
				'foreignKey' => 'escola_nivel_medio_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
