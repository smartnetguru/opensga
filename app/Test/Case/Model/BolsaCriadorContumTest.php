<?php
App::uses('BolsaCriadorContum', 'Model');

/**
 * BolsaCriadorContum Test Case
 *
 */
class BolsaCriadorContumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BolsaCriadorContum = ClassRegistry::init('BolsaCriadorContum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BolsaCriadorContum);

		parent::tearDown();
	}

}
