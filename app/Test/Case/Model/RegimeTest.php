<?php
App::uses('Regime', 'Model');

/**
 * Regime Test Case
 */
class RegimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.regime'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Regime = ClassRegistry::init('Regime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Regime);

		parent::tearDown();
	}

}
