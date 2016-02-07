<?php
	App::uses('FinanceiroPagamento', 'Model');

	/**
	 * FinanceiroPagamento Test Case
	 */
	class FinanceiroPagamentoTest extends CakeTestCase
	{

		/**
		 * Fixtures
		 *
		 * @var array
		 */
		public $fixtures = [
			'app.financeiro_pagamento',
		];

		/**
		 * setUp method
		 *
		 * @return void
		 */
		public function setUp()
		{
			parent::setUp();
			$this->FinanceiroPagamento = ClassRegistry::init('FinanceiroPagamento');
		}

		/**
		 * tearDown method
		 *
		 * @return void
		 */
		public function tearDown()
		{
			unset($this->FinanceiroPagamento);

			parent::tearDown();
		}

		/**
		 * testGeraPagamentoRenovacaoMatriculas method
		 *
		 * @return void
		 */
		public function testGeraPagamentoRenovacaoMatriculas()
		{
			$this->markTestIncomplete('testGeraPagamentoRenovacaoMatriculas not implemented.');
		}

		/**
		 * testGeraReferenciaPagamentoGraduacao method
		 *
		 * @return void
		 */
		public function testGeraReferenciaPagamentoGraduacao()
		{
			$this->markTestIncomplete('testGeraReferenciaPagamentoGraduacao not implemented.');
		}

		/**
		 * testGerarPagamentos method
		 *
		 * @return void
		 */
		public function testGerarPagamentos()
		{
			$this->markTestIncomplete('testGerarPagamentos not implemented.');
		}

		/**
		 * testEvitaDuplicados method
		 *
		 * @return void
		 */
		public function testEvitaDuplicados()
		{
			$this->markTestIncomplete('testEvitaDuplicados not implemented.');
		}

		/**
		 * testGerarPagamentosByAluno method
		 *
		 * @return void
		 */
		public function testGerarPagamentosByAluno()
		{
			$this->markTestIncomplete('testGerarPagamentosByAluno not implemented.');
		}

		/**
		 * testGerarCodigoPagamento method
		 *
		 * @return void
		 */
		public function testGerarCodigoPagamento()
		{
			$this->markTestIncomplete('testGerarCodigoPagamento not implemented.');
		}

		/**
		 * testGetValorDividaTotal method
		 *
		 * @return void
		 */
		public function testGetValorDividaTotal()
		{
			$this->markTestIncomplete('testGetValorDividaTotal not implemented.');
		}

		/**
		 * testPagar method
		 *
		 * @return void
		 */
		public function testPagar()
		{
			$this->markTestIncomplete('testPagar not implemented.');
		}

		/**
		 * testSetPagamentoRenovacaoMatricula method
		 *
		 * @return void
		 */
		public function testSetPagamentoRenovacaoMatricula()
		{
			$this->markTestIncomplete('testSetPagamentoRenovacaoMatricula not implemented.');
		}

	}
