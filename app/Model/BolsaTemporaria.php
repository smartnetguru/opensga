<?php
	App::uses('AppModel', 'Model');

	/**
	 * BolsaTemporaria Model
	 *
	 * @property BolsaTipoBolsa $BolsaTipoBolsa
	 * @property Candidatura $Candidatura
	 * @property Curso $Curso
	 */
	class BolsaTemporaria extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'BolsaTipoBolsa' => [
				'className'  => 'BolsaTipoBolsa',
				'foreignKey' => 'bolsa_tipo_bolsa_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Candidatura'    => [
				'className'  => 'Candidatura',
				'foreignKey' => 'candidatura_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Curso'          => [
				'className'  => 'Curso',
				'foreignKey' => 'curso_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
