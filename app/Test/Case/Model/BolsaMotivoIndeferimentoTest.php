<?php
App::uses('BolsaMotivoIndeferimento', 'Model');

/**
 * BolsaMotivoIndeferimento Test Case
 *
 */
class BolsaMotivoIndeferimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bolsa_motivo_indeferimento',
		'app.bolsa_resultado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BolsaMotivoIndeferimento = ClassRegistry::init('BolsaMotivoIndeferimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BolsaMotivoIndeferimento);

		parent::tearDown();
	}

}
