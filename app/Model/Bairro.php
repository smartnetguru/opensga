<?php
	App::uses('AppModel', 'Model');

	/**
	 * Bairro Model
	 *
	 * @property Cidade $Cidade
	 */
	class Bairro extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'Cidade' => [
				'className'  => 'Cidade',
				'foreignKey' => 'cidade_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
