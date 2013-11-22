<?php
App::uses('Instituicao', 'Model');

/**
 * Instituicao Test Case
 *
 */
class InstituicaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.instituicao',
		'app.cooperacao_acordo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Instituicao = ClassRegistry::init('Instituicao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Instituicao);

		parent::tearDown();
	}

}
