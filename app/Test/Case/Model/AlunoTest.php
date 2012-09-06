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
		'app.aluno',
		'app.user',
		'app.group',
		'app.funcionario',
		'app.grauacademico',
		'app.curso',
		'app.escola',
		'app.turma',
		'app.anolectivo',
		'app.regimelectivo',
		'app.semestrelectivo',
		'app.planoestudo',
		'app.planoestudoano',
		'app.disciplina',
		'app.faculdade',
		'app.sim_nao_resposta',
		'app.seccao',
		'app.departamento',
		'app.docente',
		'app.entidade',
		'app.genero',
		'app.pais',
		'app.provincia',
		'app.paise',
		'app.cidade',
		'app.documento_identificacao',
		'app.estadoentidade',
		'app.estado_civil',
		'app.docente_categoria',
		'app.grupodisciplina',
		'app.turno',
		'app.estadoturma',
		'app.inscricao',
		'app.estadoinscricao',
		'app.epocaavaliacao',
		'app.matricula',
		'app.estadomatricula',
		'app.avaliacao',
		'app.tipoavaliacao',
		'app.turmatipoavaliacao',
		'app.tipocurso',
		'app.cargo',
		'app.tipofuncionario',
		'app.unidade_organica',
		'app.areatrabalho',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.pagamento',
		'app.conta',
		'app.tipopagamento',
		'app.estadopagamento'
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
 * testGetEstudantesByCurso method
 *
 * @return void
 */
	public function testGetEstudantesByCurso() {
	}

/**
 * testGetTotalAlunos method
 *
 * @return void
 */
	public function testGetTotalAlunos() {
	}

}
