<?php
App::uses('SadeParametro', 'Model');

/**
 * SadeParametro Test Case
 *
 */
class SadeParametroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sade_parametro', 'app.sade_indicador', 'app.sade_auto_avaliacao', 'app.sade_avaliacao_aluno', 'app.sade_avaliacao_qualitativa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SadeParametro = ClassRegistry::init('SadeParametro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SadeParametro);

		parent::tearDown();
	}

}
