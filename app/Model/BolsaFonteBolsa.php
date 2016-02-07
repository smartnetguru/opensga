<?php
	App::uses('AppModel', 'Model');

	/**
	 * BolsaFonteBolsa Model
	 *
	 * @property BolsaBolsa $BolsaBolsa
	 */
	class BolsaFonteBolsa extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'BolsaBolsa' => [
				'className'    => 'BolsaBolsa',
				'foreignKey'   => 'bolsa_fonte_bolsa_id',
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
