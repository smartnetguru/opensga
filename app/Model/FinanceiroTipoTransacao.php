<?php
	App::uses('AppModel', 'Model');

	/**
	 * FinanceiroTipoTransacao Model
	 *
	 * @property FinanceiroTransacao $FinanceiroTransacao
	 */
	class FinanceiroTipoTransacao extends AppModel
	{


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'FinanceiroTransacao' => [
				'className'    => 'FinanceiroTransacao',
				'foreignKey'   => 'financeiro_tipo_transacao_id',
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
