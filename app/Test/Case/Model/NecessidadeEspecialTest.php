<?php
App::uses('NecessidadeEspecial', 'Model');

/**
 * NecessidadeEspecial Test Case
 */
class NecessidadeEspecialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.necessidade_especial',
		'app.entidade_necessidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NecessidadeEspecial = ClassRegistry::init('NecessidadeEspecial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NecessidadeEspecial);

		parent::tearDown();
	}

}
