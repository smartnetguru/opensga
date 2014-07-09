<?php
App::uses('Administracao', 'Model');

/**
 * Administracao Test Case
 *
 */
class AdministracaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.administracao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Administracao = ClassRegistry::init('Administracao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Administracao);

		parent::tearDown();
	}

}
