<?php
/**
 * RequisicoesEstadoPedidoFixture
 *
 */
class RequisicoesEstadoPedidoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'requisicoes_estado_pedidos');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Pendente'
		),
		array(
			'id' => '2',
			'name' => 'Processamento'
		),
		array(
			'id' => '3',
			'name' => 'Despacho'
		),
		array(
			'id' => '4',
			'name' => 'Pronto'
		),
		array(
			'id' => '5',
			'name' => 'Entregue'
		),
		array(
			'id' => '6',
			'name' => 'Enviado á Faculdade'
		),
	);

}
