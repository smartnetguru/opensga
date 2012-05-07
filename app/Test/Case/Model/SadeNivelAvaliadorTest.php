<?php
App::uses('SadeNivelAvaliador', 'Model');

/**
 * SadeNivelAvaliador Test Case
 *
 */
class SadeNivelAvaliadorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sade_nivel_avaliador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SadeNivelAvaliador = ClassRegistry::init('SadeNivelAvaliador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SadeNivelAvaliador);

		parent::tearDown();
	}

}
