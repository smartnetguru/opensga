<?php
App::uses('CooperacaoAcordoObservacao', 'Cooperacao.Model');

/**
 * CooperacaoAcordoObservacao Test Case
 *
 */
class CooperacaoAcordoObservacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cooperacao.cooperacao_acordo_observacao',
		'plugin.cooperacao.cooperacao_acordo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CooperacaoAcordoObservacao = ClassRegistry::init('Cooperacao.CooperacaoAcordoObservacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CooperacaoAcordoObservacao);

		parent::tearDown();
	}

}
