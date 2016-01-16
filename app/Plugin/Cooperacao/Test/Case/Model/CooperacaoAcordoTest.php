<?php
App::uses('CooperacaoAcordo', 'Cooperacao.Model');

/**
 * CooperacaoAcordo Test Case
 *
 */
class CooperacaoAcordoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cooperacao.cooperacao_acordo',
		'plugin.cooperacao.instituicao',
		'plugin.cooperacao.cooperacao_tipo_acordo',
		'plugin.cooperacao.cooperacao_acordo_area',
		'plugin.cooperacao.cooperacao_acordo_observacao',
		'plugin.cooperacao.cooperacao_acordo_unidade_organica',
		'plugin.cooperacao.cooperacao_objectivo_acordo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CooperacaoAcordo = ClassRegistry::init('Cooperacao.CooperacaoAcordo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CooperacaoAcordo);

		parent::tearDown();
	}

}
