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
		'app.grau_academico',
		'app.tipofuncionario',
		'app.entidade',
		'app.genero',
		'app.pais',
		'app.provincia',
		'app.paise',
		'app.cidade',
		'app.documento_identificacao',
		'app.estadoentidade',
		'app.estado_civil',
		'app.docente',
		'app.docente_categoria',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.estado_objecto',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_pagamento',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.feriado',
		'app.mensalidade',
		'app.anolectivo',
		'app.regimelectivo',
		'app.turma',
		'app.semestrelectivo',
		'app.curso',
		'app.tipocurso',
		'app.planoestudo',
		'app.planoestudoano',
		'app.disciplina',
		'app.grupodisciplina',
		'app.turno',
		'app.estadoturma',
		'app.inscricao',
		'app.estadoinscricao',
		'app.epocaavaliacao',
		'app.matricula',
		'app.estadomatricula',
		'app.tipo_matricula',
		'app.avaliacao',
		'app.tipoavaliacao',
		'app.turmatipoavaliacao',
		'app.financeiro_estado_pagamento',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.funcionarios_funcao_profissional',
		'app.funcao_profissional',
		'app.areatrabalho',
		'app.estado_aluno',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.requisicoes_pedido',
		'app.historico_curso',
		'app.mudanca_curso',
		'app.forma_mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno'
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
 * testGetTotalAlunos method
 *
 * @return void
 */
	public function testGetTotalAlunos() {
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
