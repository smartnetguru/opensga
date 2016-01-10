<?php
App::uses('OpensgaSessiom', 'Model');

/**
 * OpensgaSessiom Test Case
 */
class OpensgaSessiomTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.opensga_sessiom'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OpensgaSessiom = ClassRegistry::init('OpensgaSessiom');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OpensgaSessiom);

		parent::tearDown();
	}

}
