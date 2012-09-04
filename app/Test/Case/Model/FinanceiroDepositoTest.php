<?php
App::uses('FinanceiroDeposito', 'Model');

/**
 * FinanceiroDeposito Test Case
 *
 */
class FinanceiroDepositoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financeiro_deposito',
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
		'app.financeiro_pagamento',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FinanceiroDeposito = ClassRegistry::init('FinanceiroDeposito');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FinanceiroDeposito);

		parent::tearDown();
	}

}
