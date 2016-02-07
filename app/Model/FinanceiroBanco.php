<?php
	App::uses('AppModel', 'Model');

	/**
	 * FinanceiroBanco Model
	 *
	 * @property FinanceiroDeposito $FinanceiroDeposito
	 */
	class FinanceiroBanco extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'FinanceiroDeposito' => [
				'className'    => 'FinanceiroDeposito',
				'foreignKey'   => 'financeiro_banco_id',
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
