<?php
App::uses('CerimoniaGraduacao', 'Model');

/**
 * CerimoniaGraduacao Test Case
 *
 */
class CerimoniaGraduacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cerimonia_graduacao',
		'app.candidato_graduacao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CerimoniaGraduacao = ClassRegistry::init('CerimoniaGraduacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CerimoniaGraduacao);

		parent::tearDown();
	}

}
