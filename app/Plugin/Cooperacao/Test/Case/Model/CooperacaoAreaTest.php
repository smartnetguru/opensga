<?php
App::uses('CooperacaoArea', 'Cooperacao.Model');

/**
 * CooperacaoArea Test Case
 *
 */
class CooperacaoAreaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cooperacao.cooperacao_area',
		'plugin.cooperacao.cooperacao_acordo_area'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CooperacaoArea = ClassRegistry::init('Cooperacao.CooperacaoArea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CooperacaoArea);

		parent::tearDown();
	}

}
