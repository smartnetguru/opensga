<?php
	App::uses('AppModel', 'Model');

	/**
	 * NecessidadeEspecial Model
	 *
	 * @property EntidadeNecessidade $EntidadeNecessidade
	 */
	class NecessidadeEspecial extends AppModel
	{

		/**
		 * Validation rules
		 *
		 * @var array
		 */
		public $validate = [
			'name' => [
				'notBlank' => [
					'rule' => ['notBlank'],
					//'message' => 'Your custom message here',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				],
			],
		];

		// The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'EntidadeNecessidade' => [
				'className'    => 'EntidadeNecessidade',
				'foreignKey'   => 'necessidade_especial_id',
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
