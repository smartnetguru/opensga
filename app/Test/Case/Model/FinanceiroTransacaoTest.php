<?php
App::uses('FinanceiroTransacao', 'Model');

/**
 * FinanceiroTransacao Test Case
 */
class FinanceiroTransacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.entidade',
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.bolsa_pedido',
		'app.aluno',
		'app.aluno_via_admissao',
		'app.curso',
		'app.grau_academico',
		'app.alumni_candidato_alumni',
		'app.genero',
		'app.estado_civil',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.funcionario',
		'app.tipo_funcionario',
		'app.funcionario_categoria',
		'app.docente',
		'app.docente_categoria',
		'app.docente_unidade_organica',
		'app.docente_disciplina',
		'app.disciplina',
		'app.turma',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.matricula',
		'app.plano_estudo',
		'app.disciplina_plano_estudo',
		'app.precedencia',
		'app.tipo_precedencia',
		'app.estado_matricula',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.cidade',
		'app.provincia',
		'app.pais',
		'app.bairro',
		'app.rua',
		'app.paise',
		'app.aluno_nivel_medio',
		'app.documento_identificacao',
		'app.tipo_ingresso',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_motivo_indeferimento',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_valor_bolsa',
		'app.turno',
		'app.bolsa_temporaria',
		'app.tipo_matricula',
		'app.financeiro_pagamento',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
		'app.semestre_lectivo',
		'app.semestre',
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
		'app.funcionario_unidade_organica',
		'app.alumni_alumni',
		'app.tipo_curso',
		'app.curso_responsavel',
		'app.curso_regime',
		'app.regime',
		'app.curso_escola',
		'app.escola',
		'app.historico_curso',
		'app.motivo_termino_curso',
		'app.mudanca_curso',
		'app.forma_mudanca_curso',
		'app.area_trabalho',
		'app.estado_aluno',
		'app.grau_parentesco',
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.regime_estudo',
		'app.regalia_social',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.entidade_identificacao',
		'app.funcao_profissional_role',
		'app.funcao_profissional',
		'app.role',
		'app.group_role',
		'app.groups_user',
		'app.message',
		'app.unidade_organica_role',
		'app.user_role',
		'app.user_login_history',
		'app.estado_entidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroTransacao = ClassRegistry::init('FinanceiroTransacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroTransacao);

		parent::tearDown();
	}

/**
 * testGeraCheckDigito method
 *
 * @return void
 */
	public function testGeraCheckDigito() {
		$this->markTestIncomplete('testGeraCheckDigito not implemented.');
	}

/**
 * testCriaNovoPagamentoPendente method
 *
 * @return void
 */
	public function testCriaNovoPagamentoPendente() {
		$this->markTestIncomplete('testCriaNovoPagamentoPendente not implemented.');
	}

/**
 * testGetSaldoActual method
 *
 * @return void
 */
	public function testGetSaldoActual() {
		$this->markTestIncomplete('testGetSaldoActual not implemented.');
	}

/**
 * testPagarFactura method
 *
 * @return void
 */
	public function testPagarFactura() {
		$this->markTestIncomplete('testPagarFactura not implemented.');
	}

/**
 * testProcessarDeposito method
 *
 * @return void
 */
	public function testProcessarDeposito() {
		$this->markTestIncomplete('testProcessarDeposito not implemented.');
	}

/**
 * testProcessarPagamento method
 *
 * @return void
 */
	public function testProcessarPagamento() {
		$this->markTestIncomplete('testProcessarPagamento not implemented.');
	}

/**
 * testValidaPagamento method
 *
 * @return void
 */
	public function testValidaPagamento() {
		$this->markTestIncomplete('testValidaPagamento not implemented.');
	}

}
