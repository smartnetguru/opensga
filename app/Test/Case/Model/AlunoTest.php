<?php
App::uses('Aluno', 'Model');

/**
 * Aluno Test Case
 *
 */
class AlunoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aluno'
		
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aluno = ClassRegistry::init('Aluno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aluno);

		parent::tearDown();
	}

/**
 * testGetPlanoEstudoCorrente method
 *
 * @return void
 */
	public function testGetPlanoEstudoCorrente() {
        $aluno_id = 1;
        $result = $this->Aluno->getPlanoEstudoCorrente($aluno_id);
        
        $this->assertEqual(count($result), 1);
        $this->assertIsA($result,'int');
	}

/**
 * testGetAllInscricoesActivas method
 *
 * @return void
 */
	public function testGetAllInscricoesActivas() {
	}

/**
 * testGetAllInscricoesActivasAndAprovadasForInscricao method
 *
 * @return void
 */
	public function testGetAllInscricoesActivasAndAprovadasForInscricao() {
	}

/**
 * testGetAllTurmasByEstado method
 *
 * @return void
 */
	public function testGetAllTurmasByEstado() {
	}

/**
 * testGetAllTurmasByAluno method
 *
 * @return void
 */
	public function testGetAllTurmasByAluno() {
	}

/**
 * testGeraCodigo method
 *
 * @return void
 */
	public function testGeraCodigo() {
        
	}
    

/**
 * testGetContaByAlunoId method
 *
 * @return void
 */
	public function testGetContaByAlunoId() {
	}

/**
 * testGetContaIdByAlunoId method
 *
 * @return void
 */
	public function testGetContaIdByAlunoId() {
	}

/**
 * testGetAllTurmasForInscricao method
 *
 * @return void
 */
	public function testGetAllTurmasForInscricao() {
	}

/**
 * testGetAllTurmasNormaisForInscricao method
 *
 * @return void
 */
	public function testGetAllTurmasNormaisForInscricao() {
	}

/**
 * testGetMatriculaCorrente method
 *
 * @return void
 */
	public function testGetMatriculaCorrente() {
	}

/**
 * testGetNivelAcademicoElevado method
 *
 * @return void
 */
	public function testGetNivelAcademicoElevado() {
	}

/**
 * testGetNivelAcademicoReal method
 *
 * @return void
 */
	public function testGetNivelAcademicoReal() {
	}

/**
 * testCadastraAluno method
 *
 * @return void
 */
	public function testCadastraAluno() {
	}

/**
 * testIsBolseiro method
 *
 * @return void
 */
	public function testIsBolseiro() {
	}

/**
 * testIsMatriculado method
 *
 * @return void
 */
	public function testIsMatriculado() {
	}

/**
 * testSetNovaMatricula method
 *
 * @return void
 */
	public function testSetNovaMatricula() {
	}

/**
 * testGetPerfilAluno method
 *
 * @return void
 */
	public function testGetPerfilAluno() {
	}

/**
 * testGetEstudantesByFaculdade method
 *
 * @return void
 */
	public function testGetEstudantesByFaculdade() {
	}

/**
 * testGetTotalEstudantesPorCurso method
 *
 * @return void
 */
	public function testGetTotalEstudantesPorCurso() {
	}

/**
 * testGetTotalAlunosActivosPorCurso method
 *
 * @return void
 */
	public function testGetTotalAlunosActivosPorCurso() {
	}

/**
 * testGetTotalAlunosActivos method
 *
 * @return void
 */
	public function testGetTotalAlunosActivos() {
	}

/**
 * testHasFoto method
 *
 * @return void
 */
	public function testHasFoto() {
	}

/**
 * testIsRegular method
 *
 * @return void
 */
	public function testIsRegular() {
	}

/**
 * testProcessaContacto method
 *
 * @return void
 */
	public function testProcessaContacto() {
	}

/**
 * testAlteraStatus method
 *
 * @return void
 */
	public function testAlteraStatus() {
	}

/**
 * testMatriculaNovoIngresso method
 *
 * @return void
 */
	public function testMatriculaNovoIngresso() {
	}

/**
 * testMudaCurso method
 *
 * @return void
 */
	public function testMudaCurso() {
	}

/**
 * testConcluirNivel method
 *
 * @return void
 */
	public function testConcluirNivel() {
	}

}
