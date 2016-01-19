<?php
App::uses('ArtigoMeta', 'Model');

/**
 * ArtigoMetum Test Case
 */
class ArtigoMetaTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoMetum = ClassRegistry::init('ArtigoMeta');
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
