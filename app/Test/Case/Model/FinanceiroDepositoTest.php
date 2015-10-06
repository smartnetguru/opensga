<?php
App::uses('FinanceiroDeposito', 'Model');

/**
 * FinanceiroDeposito Test Case
 */
class FinanceiroDepositoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financeiro_deposito',
        'app.financeiro_conta',
        'app.financeiro_transacao',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroDeposito = ClassRegistry::init('FinanceiroDeposito');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroDeposito);

		parent::tearDown();
	}

/**
 * testDepositaValor method
 *
 * @return void
 */
	public function testDepositaValor() {

        $entidadeId = 1;
        $numeroComprovativo = 2345;
        $valor = 10000;
        $referenciaDeposito = 2345;
        $dataDeposito = date('Y-m-d H:i:s');
        $resultado = $this->FinanceiroDeposito->depositaValor($entidadeId, $numeroComprovativo, $valor, $referenciaDeposito, $dataDeposito);

        $verificador = $resultado[0];
        $this->assertSame(true,$verificador);
	}

/**
 * testSetNovoDeposito method
 *
 * @return void
 */
	public function testSetNovoDeposito() {
		$this->markTestIncomplete('testSetNovoDeposito not implemented.');
	}

}
