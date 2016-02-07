<?php
	App::uses('RequisicoesAppModel', 'Requisicoes.Model');

	/**
	 * RequisicoesPedido Model
	 *
	 * @property Aluno $Aluno
	 * @property Entidade $Entidade
	 * @property Curso $Curso
	 * @property RequisicoesTipoPedido $RequisicoesTipoPedido
	 * @property RequisicoesEstadoPedido $RequisicoesEstadoPedido
	 * @property Funcionario $Funcionario
	 * @property RequisicoesPedidoLog $RequisicoesPedidoLog
	 */
	class RequisicoesPedido extends RequisicoesAppModel
	{

		/**
		 * Display field
		 *
		 * @var string
		 */
		public $displayField = 'aluno_id';


		//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'Aluno'                   => [
				'className'  => 'Aluno',
				'foreignKey' => 'aluno_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Entidade'                => [
				'className'  => 'Entidade',
				'foreignKey' => 'entidade_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Curso'                   => [
				'className'  => 'Curso',
				'foreignKey' => 'curso_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'RequisicoesTipoPedido'   => [
				'className'  => 'Requisicoes.RequisicoesTipoPedido',
				'foreignKey' => 'requisicoes_tipo_pedido_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'RequisicoesEstadoPedido' => [
				'className'  => 'Requisicoes.RequisicoesEstadoPedido',
				'foreignKey' => 'requisicoes_estado_pedido_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Funcionario'             => [
				'className'  => 'Funcionario',
				'foreignKey' => 'funcionario_id',
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
			'RequisicoesPedidoLog' => [
				'className'    => 'Requisicoes.RequisicoesPedidoLog',
				'foreignKey'   => 'requisicoes_pedido_id',
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


		public function getAllRequisicoesPedidoByEstudante($aluno_id)
		{
			$this->contain([
				'RequisicoesEstadoPedido',
				'RequisicoesTipoPedido',
				'Funcionario' => [
					'Entidade',
				],
			]);
			$requisicoes = $this->find('all', ['conditions' => ['aluno_id' => $aluno_id]]);

			return $requisicoes;
		}

	}

