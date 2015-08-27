<?php
App::uses('FuncionarioCategorium', 'Model');

/**
 * FuncionarioCategorium Test Case
 */
class FuncionarioCategoriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FuncionarioCategorium = ClassRegistry::init('FuncionarioCategorium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FuncionarioCategorium);

		parent::tearDown();
	}

}
