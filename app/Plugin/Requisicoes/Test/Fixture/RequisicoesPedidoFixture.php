<?php
/**
 * RequisicoesPedidoFixture
 *
 */
class RequisicoesPedidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'numero_pedido' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_pedido' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'nome_requerente' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'requisicoes_tipo_pedido_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'requisicoes_estado_pedido_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'estudante_bolseiro' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'requisicoes_pedidos_aluno_id_idx' => array('column' => 'aluno_id', 'unique' => 0),
			'requisicoes_pedidos_entidade_id_idx' => array('column' => 'entidade_id', 'unique' => 0),
			'requisicoes_pedidos_curso_id_idx' => array('column' => 'curso_id', 'unique' => 0),
			'requisicoes_pedidos_tipo_pedido_id_idx' => array('column' => 'requisicoes_tipo_pedido_id', 'unique' => 0),
			'requisicoes_pedidos_estado_pedido_id_idx' => array('column' => 'requisicoes_estado_pedido_id', 'unique' => 0),
			'requisicoes_pedidos_funcionario_id_idx' => array('column' => 'funcionario_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'aluno_id' => 1,
			'numero_pedido' => 1,
			'data_pedido' => '2013-05-27 00:10:14',
			'entidade_id' => 1,
			'nome_requerente' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 1,
			'requisicoes_tipo_pedido_id' => 1,
			'requisicoes_estado_pedido_id' => 1,
			'funcionario_id' => 1,
			'estudante_bolseiro' => 1
		),
	);

}
