<?php
App::uses('FinanceiroTransacao', 'Model');

/**
 * FinanceiroTransacao Test Case
 *
 */
class FinanceiroTransacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.entidade',
		'app.aluno',
		'app.financeiro_pagamento',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_tipo_pagamento',
		'app.financeiro_estado_pagamento',
		'app.estadoinscricao',
		'app.epocaavaliacao',
		
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroTransacao = ClassRegistry::init('FinanceiroTransacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroTransacao);

		parent::tearDown();
	}

/**
 * testCriaNovoPagamentoPendente method
 *
 * @return void
 */
    public function testCriaNovoPagamentoPendente() {
        $novo_pagamento = array(
            'FinanceiroPagamento'=>array(
                'financeiro_tipo_pagamento_id'=>14,
            ),
            'FinanceiroTransacao'=>array(
                'valor'=>100,
                'aluno_id'=>9
            )
        );
        
        $resultado = $this->FinanceiroTransacao->criaNovoPagamentoPendente($novo_pagamento);
        $this->assertType('string',$resultado);
	}
/**
 * testGetSaldoActual method
 *
 * @return void
 */
	public function testGetSaldoActual() {
	}

/**
 * testPagarFactura method
 *
 * @return void
 */
	public function testPagarFactura() {
	}

/**
 * testProcessarDeposito method
 *
 * @return void
 */
	public function testProcessarDeposito() {
	}

/**
 * testProcessarPagamento method
 *
 * @return void
 */
	public function testProcessarPagamento() {
	}

/**
 * testValidaPagamento method
 *
 * @return void
 */
	public function testValidaPagamento() {
	}

}
