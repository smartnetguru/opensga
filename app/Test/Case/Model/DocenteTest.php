<?php
App::uses('Docente', 'Model');

/**
 * Docente Test Case
 *
 */
class DocenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docente',
		'app.entidade'
	);
    public $autoFixtures = false;

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Docente = ClassRegistry::init('Docente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Docente);

		parent::tearDown();
	}

/**
 * testGetByUserID method
 *
 * @return void
 */
	public function testGetByUserID() {
		$this->markTestIncomplete('testGetByUserID not implemented.');
	}

/**
 * testCadastraDocente method
 *
 * @return void
 */
	public function testCadastraDocente() {
		$this->markTestIncomplete('testCadastraDocente not implemented.');
	}

/**
 * testListaDocentes method
 *
 * @return void
 */
	public function testListaDocentes() {
		$this->markTestIncomplete('testListaDocentes not implemented.');
	}

}
