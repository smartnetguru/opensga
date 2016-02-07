<?php
	App::uses('AppModel', 'Model');

	/**
	 * SadeAvaliacao Model
	 *
	 * @property AnoLectivo $AnoLectivo
	 * @property SadeAutoAvaliacao $SadeAutoAvaliacao
	 */
	class SadeAvaliacao extends AppModel
	{

		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'AnoLectivo' => [
				'className'  => 'AnoLectivo',
				'foreignKey' => 'ano_lectivo_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'SadeAutoAvaliacao' => [
				'className'    => 'SadeAutoAvaliacao',
				'foreignKey'   => 'sade_avaliacao_id',
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
