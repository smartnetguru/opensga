<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.aluno',
		'app.areatrabalho',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.cidade',
		'app.provincia',
		'app.paise',
		'app.matricula',
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
		'app.financeiro_pagamento',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.escolas_tipopagamento',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
		'app.pais',
		'app.documento_identificacao',
		'app.estadoentidade',
		'app.estado_civil',
		'app.docente_categoria',
		'app.grupodisciplina',
		'app.estadoturma',
		'app.turmatipoavaliacao',
		'app.tipocurso',
		'app.cargo',
		'app.tipofuncionario',
		'app.unidade_organica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}

/**
 * testGetUserByFuncionario method
 *
 * @return void
 */
	public function testGetUserByFuncionario() {
	}

/**
 * testGetAlunoIDByUser method
 *
 * @return void
 */
	public function testGetAlunoIDByUser() {
	}

/**
 * testGetFuncionarioIDByUser method
 *
 * @return void
 */
	public function testGetFuncionarioIDByUser() {
	}

/**
 * testDeleteUser method
 *
 * @return void
 */
	public function testDeleteUser() {
	}

/**
 * testGeraUsername method
 *
 * @return void
 */
	public function testGeraUsername() {
	}

/**
 * testAlteraPassword method
 *
 * @return void
 */
	public function testAlteraPassword() {
	}

}
