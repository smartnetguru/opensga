<?php
App::uses('TopicoAula', 'Model');

/**
 * TopicoAula Test Case
 */
class TopicoAulaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.topico_aula',
		'app.aula'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TopicoAula = ClassRegistry::init('TopicoAula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TopicoAula);

		parent::tearDown();
	}

}
