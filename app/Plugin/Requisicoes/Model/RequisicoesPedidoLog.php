<?php
	App::uses('RequisicoesAppModel', 'Requisicoes.Model');

	/**
	 * RequisicoesPedidoLog Model
	 *
	 * @property RequisicoesPedido $RequisicoesPedido
	 * @property Funcionario $Funcionario
	 * @property RequisicoesEstadoPedido $EstadoPedidoAnterior
	 * @property RequisicoesEstadoPedido $EstadoPedidoActual
	 */
	class RequisicoesPedidoLog extends RequisicoesAppModel
	{

		/**
		 * Display field
		 *
		 * @var string
		 */
		public $displayField = 'requisicoes_pedido_id';


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'RequisicoesPedido'    => [
				'className'  => 'RequisicoesPedido',
				'foreignKey' => 'requisicoes_pedido_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Funcionario'          => [
				'className'  => 'Funcionario',
				'foreignKey' => 'funcionario_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'EstadoPedidoAnterior' => [
				'className'  => 'RequisicoesEstadoPedido',
				'foreignKey' => 'estado_anterior',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'EstadoPedidoActual'   => [
				'className'  => 'RequisicoesEstadoPedido',
				'foreignKey' => 'estado_actual',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
