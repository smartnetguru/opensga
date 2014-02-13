<?php

App::uses('Curso', 'Model');

/**
 * Curso Test Case
 *
 */
class CursoTest extends CakeTestCase {

	/**
	 * Fixtures
	 *
	 * @var array
	 */
	public $fixtures = array(
		'app.curso',
		'app.unidade_organica'
	);

	/**
	 * setUp method
	 *
	 * @return void
	 */
	public function setUp() {
		parent::setUp();
		$this->Curso = ClassRegistry::init('Curso');
	}

	/**
	 * tearDown method
	 *
	 * @return void
	 */
	public function tearDown() {
		unset($this->Curso);

		parent::tearDown();
	}

	/**
	 * testCadastraCurso method
	 *
	 * @return void
	 */
	public function testCadastraCurso() {

	}

	/**
	 * testGeraCodigo method
	 *
	 * @return void
	 */
	public function testGeraCodigo() {

	}

	/**
	 * testGetPlanoEstudoRecente method
	 *
	 * @return void
	 */
	public function testGetPlanoEstudoRecente() {

	}

	/**
	 * testGetPlanoEstudoIdRecente method
	 *
	 * @return void
	 */
	public function testGetPlanoEstudoIdRecente() {

	}

	/**
	 * testGetTurnoIdByCursoId method
	 *
	 * @return void
	 */
	public function testGetTurnoIdByCursoId() {

	}

	/**
	 * testGetAllIdsByUnidadeOrganica method
	 *
	 * @return void
	 */
	public function testGetAllIdsByUnidadeOrganica() {

	}

	public function testGetFaculdadeByCursoId() {
		$cursoId = 1;
		$faculdade = $this->Curso->getFaculdadeByCursoId($cursoId);
		$this->assertNotEmpty($faculdade);
		if ($faculdade) {
			$this->assertArrayHasKey('UnidadeOrganica', $faculdade);
			$faculdade2 = $faculdade['UnidadeOrganica'];
			$this->assertArrayHasKey('tipo_unidade_organica_id', $faculdade2);
			$this->assertEqual($faculdade2['tipo_unidade_organica_id'], 1);
		}
	}

}
