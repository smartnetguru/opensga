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
		'nome_requerente' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'requisicoes_tipo_pedido_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'requisicoes_estado_pedido_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'estudante_bolseiro' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'requisicoes_pedidos_aluno_id_idx' => array('column' => 'aluno_id', 'unique' => 0),
			'requisicoes_pedidos_entidade_id_idx' => array('column' => 'entidade_id', 'unique' => 0),
			'requisicoes_pedidos_curso_id_idx' => array('column' => 'curso_id', 'unique' => 0),
			'requisicoes_pedidos_tipo_pedido_id_idx' => array('column' => 'requisicoes_tipo_pedido_id', 'unique' => 0),
			'requisicoes_pedidos_estado_pedido_id_idx' => array('column' => 'requisicoes_estado_pedido_id', 'unique' => 0),
			'requisicoes_pedidos_funcionario_id_idx' => array('column' => 'funcionario_id', 'unique' => 0),
			'requisicoes_pedidos_unidade_organicas_idx' => array('column' => 'unidade_organica_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'aluno_id' => '10357',
			'numero_pedido' => '876876',
			'data_pedido' => '2013-06-04 09:42:34',
			'entidade_id' => '10358',
			'nome_requerente' => 'Elísio Leonardo',
			'curso_id' => '49',
			'requisicoes_tipo_pedido_id' => '3',
			'requisicoes_estado_pedido_id' => '1',
			'funcionario_id' => null,
			'estudante_bolseiro' => 0,
			'unidade_organica_id' => null
		),
		array(
			'id' => '3',
			'aluno_id' => '10357',
			'numero_pedido' => '576',
			'data_pedido' => '2013-06-04 09:44:52',
			'entidade_id' => '10358',
			'nome_requerente' => 'Elísio Leonardo',
			'curso_id' => '49',
			'requisicoes_tipo_pedido_id' => '2',
			'requisicoes_estado_pedido_id' => '2',
			'funcionario_id' => null,
			'estudante_bolseiro' => 0,
			'unidade_organica_id' => null
		),
		array(
			'id' => '4',
			'aluno_id' => '10357',
			'numero_pedido' => '3242',
			'data_pedido' => '2013-06-04 09:46:18',
			'entidade_id' => '10358',
			'nome_requerente' => 'Elísio Leonardo',
			'curso_id' => '49',
			'requisicoes_tipo_pedido_id' => '3',
			'requisicoes_estado_pedido_id' => '1',
			'funcionario_id' => null,
			'estudante_bolseiro' => 0,
			'unidade_organica_id' => null
		),
		array(
			'id' => '5',
			'aluno_id' => '27392',
			'numero_pedido' => null,
			'data_pedido' => '2013-06-16 21:01:59',
			'entidade_id' => '27393',
			'nome_requerente' => 'Paulo Jorge Braga Zacarias',
			'curso_id' => '49',
			'requisicoes_tipo_pedido_id' => '5',
			'requisicoes_estado_pedido_id' => '1',
			'funcionario_id' => null,
			'estudante_bolseiro' => 0,
			'unidade_organica_id' => null
		),
		array(
			'id' => '6',
			'aluno_id' => '27392',
			'numero_pedido' => '6',
			'data_pedido' => '2013-06-16 21:14:37',
			'entidade_id' => '27393',
			'nome_requerente' => 'Paulo Jorge Braga Zacarias',
			'curso_id' => '49',
			'requisicoes_tipo_pedido_id' => '5',
			'requisicoes_estado_pedido_id' => '2',
			'funcionario_id' => null,
			'estudante_bolseiro' => 0,
			'unidade_organica_id' => null
		),
	);

}
