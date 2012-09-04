<?php
App::uses('FinanceiroTipoPagamento', 'Model');

/**
 * FinanceiroTipoPagamento Test Case
 *
 */
class FinanceiroTipoPagamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.escolas_tipopagamento',
		'app.escola',
		'app.turma',
		'app.anolectivo',
		'app.regimelectivo',
		'app.semestrelectivo',
		'app.curso',
		'app.grauacademico',
		'app.funcionario',
		'app.user',
		'app.group',
		'app.aluno',
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
		'app.seccao',
		'app.departamento',
		'app.sim_nao_resposta',
		'app.faculdade',
		'app.docente_categoria',
		'app.areatrabalho',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.matricula',
		'app.planoestudo',
		'app.planoestudoano',
		'app.disciplina',
		'app.grupodisciplina',
		'app.estadomatricula',
		'app.turno',
		'app.inscricao',
		'app.estadoinscricao',
		'app.epocaavaliacao',
		'app.avaliacao',
		'app.tipoavaliacao',
		'app.pagamento',
		'app.conta',
		'app.tipopagamento',
		'app.estadopagamento',
		'app.cargo',
		'app.tipofuncionario',
		'app.unidade_organica',
		'app.tipocurso',
		'app.estadoturma',
		'app.turmatipoavaliacao',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_pagamento',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_estado_pagamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroTipoPagamento = ClassRegistry::init('FinanceiroTipoPagamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroTipoPagamento);

		parent::tearDown();
	}

}
