<?php
App::uses('FinanceiroBanco', 'Model');

/**
 * FinanceiroBanco Test Case
 *
 */
class FinanceiroBancoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financeiro_banco',
		'app.financeiro_deposito'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroBanco = ClassRegistry::init('FinanceiroBanco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroBanco);

		parent::tearDown();
	}

}
