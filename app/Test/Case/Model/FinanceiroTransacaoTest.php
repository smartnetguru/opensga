<?php
App::uses('FinanceiroTransacao', 'Model');

/**
 * FinanceiroTransacao Test Case
 *
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
		'app.docente_categoria',
		'app.grupodisciplina',
		'app.turno',
		'app.estadoturma',
		'app.inscricao',
		'app.aluno',
		'app.areatrabalho',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.cidade',
		'app.provincia',
		'app.paise',
		'app.matricula',
		'app.estadomatricula',
		'app.pagamento',
		'app.conta',
		'app.tipopagamento',
		'app.estadopagamento',
		'app.estadoinscricao',
		'app.epocaavaliacao',
		'app.avaliacao',
		'app.tipoavaliacao',
		'app.turmatipoavaliacao',
		'app.tipocurso',
		'app.cargo',
		'app.tipofuncionario',
		'app.unidade_organica',
		'app.genero',
		'app.pais',
		'app.documento_identificacao',
		'app.estadoentidade',
		'app.estado_civil',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_pagamento',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.escolas_tipopagamento',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento'
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

}
