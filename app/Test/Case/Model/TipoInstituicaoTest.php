<?php
App::uses('TipoInstituicao', 'Model');

/**
 * TipoInstituicao Test Case
 *
 */
class TipoInstituicaoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipo_instituicao');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoInstituicao = ClassRegistry::init('TipoInstituicao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoInstituicao);

		parent::tearDown();
	}

}
