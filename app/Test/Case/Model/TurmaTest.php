<?php
App::uses('Turma', 'Model');

/**
 * Turma Test Case
 *
 */
class TurmaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.turma',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.matricula',
		'app.aluno',
		'app.aluno_via_admissao',
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.bolsa_pedido',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_valor_bolsa',
		'app.bolsa_motivo_indeferimento',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.genero',
		'app.estado_civil',
		'app.regime_estudo',
		'app.regalia_social',
		'app.curso_responsavel',
		'app.curso',
		'app.grau_academico',
		'app.candidato_alumni',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.funcionario',
		'app.tipo_funcionario',
		'app.entidade',
		'app.pais',
		'app.provincia',
		'app.paise',
		'app.cidade',
		'app.bairro',
		'app.rua',
		'app.documento_identificacao',
		'app.estado_entidade',
		'app.docente',
		'app.docente_categoria',
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
		'app.financeiro_estado_pagamento',
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.alumni',
		'app.tipo_curso',
		'app.plano_estudo',
		'app.disciplina_plano_estudo',
		'app.disciplina',
		'app.disciplina_unidade_organica',
		'app.disciplina_docente',
		'app.precedencia',
		'app.tipo_precedencia',
		'app.cursos_turno',
		'app.turno',
		'app.forma_mudanca_curso',
		'app.funcao_profissional_role',
		'app.funcao_profissional',
		'app.role',
		'app.group_role',
		'app.groups_user',
		'app.message',
		'app.unidade_organica_role',
		'app.user_role',
		'app.area_trabalho',
		'app.estado_aluno',
		'app.grau_parentesco',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.aluno_nivel_medio',
		'app.tipo_ingresso',
		'app.estado_matricula',
		'app.bolsa_temporaria',
		'app.avaliacao',
		'app.turma_tipo_avaliacao',
		'app.tipo_avaliacao',
		'app.epoca_avaliacao',
		'app.inscricao',
		'app.estado_inscricao',
		'app.tipo_inscricao',
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.historico_curso',
		'app.motivo_termino_curso',
		'app.mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.tipo_matricula',
		'app.semestre_lectivo',
		'app.semestre',
		'app.estado_turma',
		'app.docente_turma',
		'app.estado_docente_turma',
		'app.tipo_docente_turma'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Turma = ClassRegistry::init('Turma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Turma);

		parent::tearDown();
	}

/**
 * testAdicionaDocente method
 *
 * @return void
 */
	public function testAdicionaDocente() {
		$this->markTestIncomplete('testAdicionaDocente not implemented.');
	}

/**
 * testCriarTurmas method
 *
 * @return void
 */
	public function testCriarTurmas() {
		$this->markTestIncomplete('testCriarTurmas not implemented.');
	}

/**
 * testFecharTodasTurmas method
 *
 * @return void
 */
	public function testFecharTodasTurmas() {
		$this->markTestIncomplete('testFecharTodasTurmas not implemented.');
	}

/**
 * testGeraPautaExcel method
 *
 * @return void
 */
	public function testGeraPautaExcel() {
		$this->markTestIncomplete('testGeraPautaExcel not implemented.');
	}

/**
 * testGetAllAssistentes method
 *
 * @return void
 */
	public function testGetAllAssistentes() {
		$this->markTestIncomplete('testGetAllAssistentes not implemented.');
	}

/**
 * testGetAllByAlunoForInscricao method
 *
 * @return void
 */
	public function testGetAllByAlunoForInscricao() {
		$this->markTestIncomplete('testGetAllByAlunoForInscricao not implemented.');
	}

/**
 * testGetAllByPlanoEstudoAntigo method
 *
 * @return void
 */
	public function testGetAllByPlanoEstudoAntigo() {
		$this->markTestIncomplete('testGetAllByPlanoEstudoAntigo not implemented.');
	}

/**
 * testGetAllDisciplinasForInscricao method
 *
 * @return void
 */
	public function testGetAllDisciplinasForInscricao() {
		$this->markTestIncomplete('testGetAllDisciplinasForInscricao not implemented.');
	}

/**
 * testGetAllTurmasActivasByPlanoEstudo method
 *
 * @return void
 */
	public function testGetAllTurmasActivasByPlanoEstudo() {
		$this->markTestIncomplete('testGetAllTurmasActivasByPlanoEstudo not implemented.');
	}

/**
 * testGetAllTurmasByDocente method
 *
 * @return void
 */
	public function testGetAllTurmasByDocente() {
		$this->markTestIncomplete('testGetAllTurmasByDocente not implemented.');
	}

/**
 * testGetAllTurmasInscritas method
 *
 * @return void
 */
	public function testGetAllTurmasInscritas() {
		$this->markTestIncomplete('testGetAllTurmasInscritas not implemented.');
	}

/**
 * testGetAlunosAprovados method
 *
 * @return void
 */
	public function testGetAlunosAprovados() {
		$this->markTestIncomplete('testGetAlunosAprovados not implemented.');
	}

/**
 * testGetAlunosInscritos method
 *
 * @return void
 */
	public function testGetAlunosInscritos() {
		$this->markTestIncomplete('testGetAlunosInscritos not implemented.');
	}

/**
 * testGetAlunosReprovados method
 *
 * @return void
 */
	public function testGetAlunosReprovados() {
		$this->markTestIncomplete('testGetAlunosReprovados not implemented.');
	}

/**
 * testGetAssistente method
 *
 * @return void
 */
	public function testGetAssistente() {
		$this->markTestIncomplete('testGetAssistente not implemented.');
	}

/**
 * testGetDocente method
 *
 * @return void
 */
	public function testGetDocente() {
		$this->markTestIncomplete('testGetDocente not implemented.');
	}

/**
 * testGetPlanoEstudo method
 *
 * @return void
 */
	public function testGetPlanoEstudo() {
		$this->markTestIncomplete('testGetPlanoEstudo not implemented.');
	}

/**
 * testGetRegente method
 *
 * @return void
 */
	public function testGetRegente() {
		$this->markTestIncomplete('testGetRegente not implemented.');
	}

/**
 * testGetSomaNotaFinal method
 *
 * @return void
 */
	public function testGetSomaNotaFinal() {
		$this->markTestIncomplete('testGetSomaNotaFinal not implemented.');
	}

/**
 * testGetTotalAlunosInscritosByTurma method
 *
 * @return void
 */
	public function testGetTotalAlunosInscritosByTurma() {
		$this->markTestIncomplete('testGetTotalAlunosInscritosByTurma not implemented.');
	}

/**
 * testGetTurmasByFuncionario method
 *
 * @return void
 */
	public function testGetTurmasByFuncionario() {
		$this->markTestIncomplete('testGetTurmasByFuncionario not implemented.');
	}

/**
 * testHasAvaliacoesAbertas method
 *
 * @return void
 */
	public function testHasAvaliacoesAbertas() {
		$this->markTestIncomplete('testHasAvaliacoesAbertas not implemented.');
	}

/**
 * testIsDocente method
 *
 * @return void
 */
	public function testIsDocente() {
		$this->markTestIncomplete('testIsDocente not implemented.');
	}

/**
 * testProcessaPauta method
 *
 * @return void
 */
	public function testProcessaPauta() {
		$this->markTestIncomplete('testProcessaPauta not implemented.');
	}

/**
 * testUpDateTurma method
 *
 * @return void
 */
	public function testUpDateTurma() {
		$this->markTestIncomplete('testUpDateTurma not implemented.');
	}

}
