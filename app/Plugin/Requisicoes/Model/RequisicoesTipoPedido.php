<?php
	App::uses('RequisicoesAppModel', 'Requisicoes.Model');

	/**
	 * RequisicoesTipoPedido Model
	 *
	 * @property RequisicoesPedido $RequisicoesPedido
	 */
	class RequisicoesTipoPedido extends RequisicoesAppModel
	{

		/**
		 * Display field
		 *
		 * @var string
		 */
		public $displayField = 'name';


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'RequisicoesPedido' => [
				'className'    => 'RequisicoesPedido',
				'foreignKey'   => 'requisicoes_tipo_pedido_id',
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
