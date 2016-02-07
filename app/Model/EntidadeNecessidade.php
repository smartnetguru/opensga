<?php
	App::uses('AppModel', 'Model');

	/**
	 * EntidadeNecessidade Model
	 *
	 * @property Entidade $Entidade
	 * @property NecessidadeEspecial $NecessidadeEspecial
	 * @property EstadoObjecto $EstadoObjecto
	 */
	class EntidadeNecessidade extends AppModel
	{

		/**
		 * Validation rules
		 *
		 * @var array
		 */
		public $validate = [
			'entidade_id'             => [
				'numeric' => [
					'rule' => ['numeric'],
					//'message' => 'Your custom message here',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				],
			],
			'necessidade_especial_id' => [
				'numeric' => [
					'rule' => ['numeric'],
					//'message' => 'Your custom message here',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				],
			],
			'estado_objecto_id'       => [
				'numeric' => [
					'rule' => ['numeric'],
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
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'Entidade'            => [
				'className'  => 'Entidade',
				'foreignKey' => 'entidade_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'NecessidadeEspecial' => [
				'className'  => 'NecessidadeEspecial',
				'foreignKey' => 'necessidade_especial_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'EstadoObjecto'       => [
				'className'  => 'EstadoObjecto',
				'foreignKey' => 'estado_objecto_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
