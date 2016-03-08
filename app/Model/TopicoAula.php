<?php
	App::uses('AppModel', 'Model');

	/**
	 * TopicoAula Model
	 *
	 * @property Aula $Aula
	 */
	class TopicoAula extends AppModel
	{


		// The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'Aula' => [
				'className'  => 'Aula',
				'foreignKey' => 'aula_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
