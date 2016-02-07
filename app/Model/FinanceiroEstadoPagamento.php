<?php
	App::uses('AppModel', 'Model');

	/**
	 * FinanceiroEstadoPagamento Model
	 *
	 * @property FinanceiroPagamento $FinanceiroPagamento
	 */
	class FinanceiroEstadoPagamento extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'FinanceiroPagamento' => [
				'className'    => 'FinanceiroPagamento',
				'foreignKey'   => 'financeiro_estado_pagamento_id',
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
