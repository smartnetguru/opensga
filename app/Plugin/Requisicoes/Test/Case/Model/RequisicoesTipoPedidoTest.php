<?php
App::uses('RequisicoesTipoPedido', 'Requisicoes.Model');

/**
 * RequisicoesTipoPedido Test Case
 *
 */
class RequisicoesTipoPedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.requisicoes.requisicoes_tipo_pedido',
		'plugin.requisicoes.requisicoes_pedido'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequisicoesTipoPedido = ClassRegistry::init('Requisicoes.RequisicoesTipoPedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequisicoesTipoPedido);

		parent::tearDown();
	}

}
