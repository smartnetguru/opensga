<?php
	App::uses('AppModel', 'Model');

	/**
	 * SemestreLectivo Model
	 *
	 * @property AnoLectivo $AnoLectivo
	 * @property Semestre $Semestre
	 * @property FinanceiroDeposito $FinanceiroDeposito
	 * @property FinanceiroPagamento $FinanceiroPagamento
	 * @property Turma $Turma
	 */
	class SemestreLectivo extends AppModel
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
			'Semestre'   => [
				'className'  => 'Semestre',
				'foreignKey' => 'semestre_id',
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
			'FinanceiroDeposito'  => [
				'className'    => 'FinanceiroDeposito',
				'foreignKey'   => 'semestre_lectivo_id',
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
			'FinanceiroPagamento' => [
				'className'    => 'FinanceiroPagamento',
				'foreignKey'   => 'semestre_lectivo_id',
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
			'Turma'               => [
				'className'    => 'Turma',
				'foreignKey'   => 'semestre_lectivo_id',
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
