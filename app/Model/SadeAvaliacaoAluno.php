<?php
	App::uses('AppModel', 'Model');

	/**
	 * SadeAvaliacaoAluno Model
	 *
	 * @property Aluno $Aluno
	 * @property Entidade $Entidade
	 * @property SadeParametro $SadeParametro
	 * @property AnoLectivo $AnoLectivo
	 */
	class SadeAvaliacaoAluno extends AppModel
	{

		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'Aluno'         => [
				'className'  => 'Aluno',
				'foreignKey' => 'aluno_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Entidade'      => [
				'className'  => 'Entidade',
				'foreignKey' => 'entidade_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'SadeParametro' => [
				'className'  => 'SadeParametro',
				'foreignKey' => 'sade_parametro_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'AnoLectivo'    => [
				'className'  => 'AnoLectivo',
				'foreignKey' => 'ano_lectivo_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
