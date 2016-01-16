<?php
App::uses('RequisicoesEstadoPedido', 'Requisicoes.Model');

/**
 * RequisicoesEstadoPedido Test Case
 *
 */
class RequisicoesEstadoPedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.requisicoes.requisicoes_estado_pedido',
		'plugin.requisicoes.requisicoes_pedido'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequisicoesEstadoPedido = ClassRegistry::init('Requisicoes.RequisicoesEstadoPedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequisicoesEstadoPedido);

		parent::tearDown();
	}

}
