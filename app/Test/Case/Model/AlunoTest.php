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
		'app.aluno_via_admissao',
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.bolsa_pedido',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.matricula',
		'app.curso',
		'app.grau_academico',
		'app.candidato_alumni',
		'app.genero',
		'app.estado_civil',
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
		'app.turma',
		'app.semestre_lectivo',
		'app.semestre',
		'app.turno',
		'app.estado_turma',
		'app.inscricao',
		'app.estado_inscricao',
		'app.epoca_avaliacao',
		'app.tipo_inscricao',
		'app.avaliacao',
		'app.turma_tipo_avaliacao',
		'app.tipo_avaliacao',
		'app.docente_turma',
		'app.estado_docente_turma',
		'app.tipo_docente_turma',
		'app.disciplina_unidade_organica',
		'app.disciplina_docente',
		'app.precedencia',
		'app.tipo_precedencia',
		'app.cursos_turno',
		'app.estado_matricula',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.aluno_nivel_medio',
		'app.tipo_ingresso',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_motivo_indeferimento',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_valor_bolsa',
		'app.bolsa_temporaria',
		'app.tipo_matricula',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.regime_estudo',
		'app.regalia_social',
		'app.curso_responsavel',
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
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.historico_curso',
		'app.motivo_termino_curso',
		'app.mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno'
	);

    public $autoFixtures = false;

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aluno = ClassRegistry::init('Aluno');
        $this->Aluno->Behaviors->unload('Auditable.Auditable');
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
		$this->markTestIncomplete('testGetPlanoEstudoCorrente not implemented.');
	}

/**
 * testGetAllInscricoesActivas method
 *
 * @return void
 */
	public function testGetAllInscricoesActivas() {
		$this->markTestIncomplete('testGetAllInscricoesActivas not implemented.');
	}

/**
 * testActualizaMatriculaCondicionalFromFile method
 *
 * @return void
 */
	public function testActualizaMatriculaCondicionalFromFile() {
		$this->markTestIncomplete('testActualizaMatriculaCondicionalFromFile not implemented.');
	}

/**
 * testGetAllInscricoesActivasAndAprovadasForInscricao method
 *
 * @return void
 */
	public function testGetAllInscricoesActivasAndAprovadasForInscricao() {
		$this->markTestIncomplete('testGetAllInscricoesActivasAndAprovadasForInscricao not implemented.');
	}

/**
 * testGetAllTurmasByEstado method
 *
 * @return void
 */
	public function testGetAllTurmasByEstado() {
		$this->markTestIncomplete('testGetAllTurmasByEstado not implemented.');
	}

/**
 * testGetAllTurmasByAluno method
 *
 * @return void
 */
	public function testGetAllTurmasByAluno() {
		$this->markTestIncomplete('testGetAllTurmasByAluno not implemented.');
	}

/**
 * testGeraCodigo method
 *
 * @return void
 */
	public function testGeraCodigo() {
		$this->markTestIncomplete('testGeraCodigo not implemented.');
	}

/**
 * testGetContaByAlunoId method
 *
 * @return void
 */
	public function testGetContaByAlunoId() {
		$this->markTestIncomplete('testGetContaByAlunoId not implemented.');
	}

/**
 * testGetContaIdByAlunoId method
 *
 * @return void
 */
	public function testGetContaIdByAlunoId() {
		$this->markTestIncomplete('testGetContaIdByAlunoId not implemented.');
	}

/**
 * testGetAllTurmasForInscricao method
 *
 * @return void
 */
	public function testGetAllTurmasForInscricao() {
		$this->markTestIncomplete('testGetAllTurmasForInscricao not implemented.');
	}

/**
 * testGetAllTurmasNormaisForInscricao method
 *
 * @return void
 */
	public function testGetAllTurmasNormaisForInscricao() {
		$this->markTestIncomplete('testGetAllTurmasNormaisForInscricao not implemented.');
	}

/**
 * testGetMatriculaCorrente method
 *
 * @return void
 */
	public function testGetMatriculaCorrente() {
		$this->markTestIncomplete('testGetMatriculaCorrente not implemented.');
	}

/**
 * testGetAlunoForAction method
 *
 * @return void
 */
	public function testGetAlunoForAction() {
		$this->markTestIncomplete('testGetAlunoForAction not implemented.');
	}

/**
 * testGetAllAlunosForAutenticidades method
 *
 * @return void
 */
	public function testGetAllAlunosForAutenticidades() {
		$this->markTestIncomplete('testGetAllAlunosForAutenticidades not implemented.');
	}

/**
 * testGetAlunoForPerfil method
 *
 * @return void
 */
	public function testGetAlunoForPerfil() {
		$this->markTestIncomplete('testGetAlunoForPerfil not implemented.');
	}

/**
 * testGetNivelAcademicoElevado method
 *
 * @return void
 */
	public function testGetNivelAcademicoElevado() {
		$this->markTestIncomplete('testGetNivelAcademicoElevado not implemented.');
	}

/**
 * testGetNivelAcademicoReal method
 *
 * @return void
 */
	public function testGetNivelAcademicoReal() {
		$this->markTestIncomplete('testGetNivelAcademicoReal not implemented.');
	}

/**
 * testCadastraAluno method
 *
 * @return void
 */
	public function testCadastraAluno() {
		$this->markTestIncomplete('testCadastraAluno not implemented.');
	}

/**
 * testIsBolseiro method
 *
 * @return void
 */
	public function testIsBolseiro() {
		$this->markTestIncomplete('testIsBolseiro not implemented.');
	}

/**
 * testIsMatriculado method
 *
 * @return void
 */
	public function testIsMatriculado() {
		$this->markTestIncomplete('testIsMatriculado not implemented.');
	}

/**
 * testSetNovaMatricula method
 *
 * @return void
 */
	public function testSetNovaMatricula() {
		$this->markTestIncomplete('testSetNovaMatricula not implemented.');
	}

/**
 * testGetPerfilAluno method
 *
 * @return void
 */
	public function testGetPerfilAluno() {
		$this->markTestIncomplete('testGetPerfilAluno not implemented.');
	}

/**
 * testGetEstudantesByFaculdade method
 *
 * @return void
 */
	public function testGetEstudantesByFaculdade() {
		$this->markTestIncomplete('testGetEstudantesByFaculdade not implemented.');
	}

/**
 * testGetTotalEstudantesPorCurso method
 *
 * @return void
 */
	public function testGetTotalEstudantesPorCurso() {
		$this->markTestIncomplete('testGetTotalEstudantesPorCurso not implemented.');
	}

/**
 * testActualizaContactos method
 *
 * @return void
 */
	public function testActualizaContactos() {
		$this->markTestIncomplete('testActualizaContactos not implemented.');
	}

/**
 * testGetTotalAlunosActivosPorCurso method
 *
 * @return void
 */
	public function testGetTotalAlunosActivosPorCurso() {
		$this->markTestIncomplete('testGetTotalAlunosActivosPorCurso not implemented.');
	}

/**
 * testGetTotalAlunosActivos method
 *
 * @return void
 */
	public function testGetTotalAlunosActivos() {
		$this->markTestIncomplete('testGetTotalAlunosActivos not implemented.');
	}

/**
 * testHasFoto method
 *
 * @return void
 */
	public function testHasFoto() {
		$this->markTestIncomplete('testHasFoto not implemented.');
	}

/**
 * testIsRegular method
 *
 * @return void
 */
	public function testIsRegular() {
		$this->markTestIncomplete('testIsRegular not implemented.');
	}

/**
 * testProcessaContacto method
 *
 * @return void
 */
	public function testProcessaContacto() {
		$this->markTestIncomplete('testProcessaContacto not implemented.');
	}

/**
 * testAlteraStatus method
 *
 * @return void
 */
	public function testAlteraStatus() {
		$this->markTestIncomplete('testAlteraStatus not implemented.');
	}

/**
 * testMatriculaNovoIngresso method
 *
 * @return void
 */
    public function testMatriculaNovoIngresso() {
        $this->loadFixtures('Candidatura','User');
        $data = [
            'Aluno'=>[
                'codigo' => '201462262',
                'certificado_nivel_anterior' => '1',
                'recenseamento_militar' => '1',
                'nome_emergencia' => 'Elisio Leonardo',
                'telemovel_emergencia' => '826489374',
                'parentesco_encarregado' => 1,
                'curso_id' => '257',
                'unidade_organica_id' => '257',
                'numero_estudante' => '20146226',
                'aluno_via_admissao_id' => '13',
                'ano_ingresso' => '2014'
            ],
            'Entidade'=>[
                'apelido' => 'Massamba',
                'nomes' => 'Sandra Fazenete Picardo',
                'genero_id' => '1',
                'data_nascimento' => '2014-09-15',
                'estado_civil' => '3',
                'nome_pai' => 'Teste',
                'nome_mae' => 'Yeste',
                'naturalidade' => 'Teste',
                'pais_nascimento' => '152',
                'provincia_nascimento' => '9',
                'cidade_nascimento' => '111',
                'name' => 'Sandra Fazenete Picardo Massamba'
            ],
            'Candidatura'=>[
                'nome_faculdade' => 'Faculdade de Ciencias',
                'nome_curso' => 'Mestrado em Recursos HÃ­dricos e Geohidrologia'
            ],
            'AlunoNivelMedio' => array(
                'EscolaNivelMedio' => array(
                    'pais_id' => '152',
                    'provincia_id' => '',
                    'distrito_id' => ''
                ),
                'escola_nivel_medio_id' => '4',
                'nova_escola_anterior' => '',
                'ano_conclusao' => '328798',
                'nota_final' => '7576'
            ),
            'EntidadeContacto' => array(
                (int) 11 => '152',
                (int) 10 => '',
                (int) 9 => '',
                (int) 6 => '',
                (int) 5 => '',
                (int) 7 => '',
                (int) 8 => '',
                (int) 2 => '',
                (int) 1 => ''
            ),
            'EntidadeIdentificacao' => array(
                'documento_identificacao_id' => '4',
                'numero' => '',
                'local_emissao' => '',
                'data_emissao' => '',
                'data_validade' => ''
            ),
            'Dados' => array(
                'user_id' => '42646',
                'numero_candidato' => '36726'
            )
        ];

        $matriculado = $this->Aluno->MatriculaNovoIngresso($data);
        $this->assertTrue($matriculado);
    }

/**
 * testMudaCurso method
 *
 * @return void
 */
	public function testMudaCurso() {
		$this->markTestIncomplete('testMudaCurso not implemented.');
	}

/**
 * testConcluirNivel method
 *
 * @return void
 */
	public function testConcluirNivel() {
		$this->markTestIncomplete('testConcluirNivel not implemented.');
	}

/**
 * testGetAlunosSemCertificado method
 *
 * @return void
 */
	public function testGetAlunosSemCertificado() {
		$this->markTestIncomplete('testGetAlunosSemCertificado not implemented.');
	}

}
