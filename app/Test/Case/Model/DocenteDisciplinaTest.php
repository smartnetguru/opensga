<?php
App::uses('DocenteDisciplina', 'Model');

/**
 * DocenteDisciplina Test Case
 */
class DocenteDisciplinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(

	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocenteDisciplina = ClassRegistry::init('DocenteDisciplina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocenteDisciplina);

		parent::tearDown();
	}

}
