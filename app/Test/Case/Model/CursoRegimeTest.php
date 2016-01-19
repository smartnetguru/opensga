<?php
App::uses('CursoRegime', 'Model');

/**
 * CursoRegime Test Case
 */
class CursoRegimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curso_regime',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CursoRegime = ClassRegistry::init('CursoRegime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CursoRegime);

		parent::tearDown();
	}

}
