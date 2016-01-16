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
class RequisicoesPedidoLog extends RequisicoesAppModel {

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
	public $belongsTo = array(
		'RequisicoesPedido' => array(
			'className' => 'RequisicoesPedido',
			'foreignKey' => 'requisicoes_pedido_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'funcionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoPedidoAnterior' => array(
			'className' => 'RequisicoesEstadoPedido',
			'foreignKey' => 'estado_anterior',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoPedidoActual' => array(
			'className' => 'RequisicoesEstadoPedido',
			'foreignKey' => 'estado_actual',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
