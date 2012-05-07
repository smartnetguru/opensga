<?php
App::uses('SadeIndicador', 'Model');

/**
 * SadeIndicador Test Case
 *
 */
class SadeIndicadorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sade_indicador', 'app.sade_parametro');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SadeIndicador = ClassRegistry::init('SadeIndicador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SadeIndicador);

		parent::tearDown();
	}

}
