<?php
App::uses('FinanceiroContum', 'Model');

/**
 * FinanceiroContum Test Case
 *
 */
class FinanceiroContumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroContum = ClassRegistry::init('FinanceiroContum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroContum);

		parent::tearDown();
	}

}
