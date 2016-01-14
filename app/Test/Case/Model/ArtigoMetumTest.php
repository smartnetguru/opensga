<?php
App::uses('ArtigoMetum', 'Model');

/**
 * ArtigoMetum Test Case
 */
class ArtigoMetumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoMetum = ClassRegistry::init('ArtigoMetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoMetum);

		parent::tearDown();
	}

}
