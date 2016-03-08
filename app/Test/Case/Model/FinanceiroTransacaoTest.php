<?php
	App::uses('FinanceiroTransacao', 'Model');

	/**
	 * FinanceiroTransacao Test Case
	 */
	class FinanceiroTransacaoTest extends CakeTestCase
	{

		/**
		 * Fixtures
		 *
		 * @var array
		 */
		public $fixtures = [
			'app.financeiro_transacao',
		];

		/**
		 * setUp method
		 *
		 * @return void
		 */
		public function setUp()
		{
			parent::setUp();
			$this->FinanceiroTransacao = ClassRegistry::init('FinanceiroTransacao');
		}

		/**
		 * tearDown method
		 *
		 * @return void
		 */
		public function tearDown()
		{
			unset($this->FinanceiroTransacao);

			parent::tearDown();
		}

		/**
		 * testGeraCheckDigito method
		 *
		 * @return void
		 */
		public function testGeraCheckDigito()
		{
			$this->markTestIncomplete('testGeraCheckDigito not implemented.');
		}

		/**
		 * testCriaNovoPagamentoPendente method
		 *
		 * @return void
		 */
		public function testCriaNovoPagamentoPendente()
		{
			$this->markTestIncomplete('testCriaNovoPagamentoPendente not implemented.');
		}

		/**
		 * testGetSaldoActual method
		 *
		 * @return void
		 */
		public function testGetSaldoActual()
		{
			$this->markTestIncomplete('testGetSaldoActual not implemented.');
		}

		/**
		 * testPagarFactura method
		 *
		 * @return void
		 */
		public function testPagarFactura()
		{
			$this->markTestIncomplete('testPagarFactura not implemented.');
		}

		/**
		 * testProcessarDeposito method
		 *
		 * @return void
		 */
		public function testProcessarDeposito()
		{
			$this->markTestIncomplete('testProcessarDeposito not implemented.');
		}

		/**
		 * testProcessarPagamento method
		 *
		 * @return void
		 */
		public function testProcessarPagamento()
		{
			$this->markTestIncomplete('testProcessarPagamento not implemented.');
		}

		/**
		 * testValidaPagamento method
		 *
		 * @return void
		 */
		public function testValidaPagamento()
		{
			$this->markTestIncomplete('testValidaPagamento not implemented.');
		}

	}
