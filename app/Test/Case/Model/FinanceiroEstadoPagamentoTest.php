<?php
App::uses('FinanceiroEstadoPagamento', 'Model');

/**
 * FinanceiroEstadoPagamento Test Case
 *
 */
class FinanceiroEstadoPagamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financeiro_estado_pagamento',
		'app.financeiro_pagamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroEstadoPagamento = ClassRegistry::init('FinanceiroEstadoPagamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroEstadoPagamento);

		parent::tearDown();
	}

}
