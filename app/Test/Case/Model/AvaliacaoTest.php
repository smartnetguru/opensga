<?php
App::uses('Avaliacao', 'Model');

/**
 * Avaliacao Test Case
 *
 */
class AvaliacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
	);
    public $autoFixtures = false;
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Avaliacao = ClassRegistry::init('Avaliacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Avaliacao);

		parent::tearDown();
	}

/**
 * testEditaNotasAvaliacao method
 *
 * @return void
 */
	public function testEditaNotasAvaliacao() {
		$this->markTestIncomplete('testEditaNotasAvaliacao not implemented.');
	}

/**
 * testGetAnoLectivo method
 *
 * @return void
 */
	public function testGetAnoLectivo() {
		$this->markTestIncomplete('testGetAnoLectivo not implemented.');
	}

/**
 * testGetCurso method
 *
 * @return void
 */
	public function testGetCurso() {
		$this->markTestIncomplete('testGetCurso not implemented.');
	}

/**
 * testGetPlano method
 *
 * @return void
 */
	public function testGetPlano() {
		$this->markTestIncomplete('testGetPlano not implemented.');
	}

/**
 * testGetTurma method
 *
 * @return void
 */
	public function testGetTurma() {
		$this->markTestIncomplete('testGetTurma not implemented.');
	}

/**
 * testGetEpocaAvaliacaos method
 *
 * @return void
 */
	public function testGetEpocaAvaliacaos() {
		$this->markTestIncomplete('testGetEpocaAvaliacaos not implemented.');
	}

/**
 * testGetTipoAvaliacaos method
 *
 * @return void
 */
	public function testGetTipoAvaliacaos() {
		$this->markTestIncomplete('testGetTipoAvaliacaos not implemented.');
	}

/**
 * testGetAlunosByTurma method
 *
 * @return void
 */
	public function testGetAlunosByTurma() {
		$this->markTestIncomplete('testGetAlunosByTurma not implemented.');
	}

/**
 * testIfExist method
 *
 * @return void
 */
	public function testIfExist() {
		$this->markTestIncomplete('testIfExist not implemented.');
	}

/**
 * testUpdatePlano method
 *
 * @return void
 */
	public function testUpdatePlano() {
		$this->markTestIncomplete('testUpdatePlano not implemented.');
	}

/**
 * testGetCodigoName method
 *
 * @return void
 */
	public function testGetCodigoName() {
		$this->markTestIncomplete('testGetCodigoName not implemented.');
	}

}
