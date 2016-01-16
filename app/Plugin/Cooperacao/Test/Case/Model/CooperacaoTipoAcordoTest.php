<?php
App::uses('CooperacaoTipoAcordo', 'Cooperacao.Model');

/**
 * CooperacaoTipoAcordo Test Case
 *
 */
class CooperacaoTipoAcordoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cooperacao.cooperacao_tipo_acordo',
		'plugin.cooperacao.cooperacao_acordo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CooperacaoTipoAcordo = ClassRegistry::init('Cooperacao.CooperacaoTipoAcordo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CooperacaoTipoAcordo);

		parent::tearDown();
	}

}
