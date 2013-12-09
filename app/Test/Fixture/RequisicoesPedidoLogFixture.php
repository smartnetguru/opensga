<?php
/**
 * RequisicoesPedidoLogFixture
 *
 */
class RequisicoesPedidoLogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'requisicoes_pedido_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'estado_anterior' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'estado_actual' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_mudanca' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'requisico_pedidos_logs_pedido_id_idx' => array('column' => 'requisicoes_pedido_id', 'unique' => 0),
			'requisicoes_pedidos_logs_estado_anterior_idx' => array('column' => 'estado_anterior', 'unique' => 0),
			'requisicoes_pedidos_logs_estado_actual_idx' => array('column' => 'estado_actual', 'unique' => 0),
			'requisicoes_pedidos_logs_funcionario_id_idx' => array('column' => 'funcionario_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
