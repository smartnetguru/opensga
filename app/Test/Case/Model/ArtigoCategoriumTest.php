<?php
App::uses('ArtigoCategorium', 'Model');

/**
 * ArtigoCategorium Test Case
 */
class ArtigoCategoriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoCategorium = ClassRegistry::init('ArtigoCategorium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoCategorium);

		parent::tearDown();
	}

}
