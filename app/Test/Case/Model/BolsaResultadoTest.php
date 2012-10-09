<?php
App::uses('BolsaResultado', 'Model');

/**
 * BolsaResultado Test Case
 *
 */
class BolsaResultadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bolsa_resultado',
		'app.bolsa_candidatura',
		'app.aluno',
		'app.user',
		'app.group',
		'app.funcionario',
		'app.grau_academico',
		'app.cargo',
		'app.departamento',
		'app.sim_nao_resposta',
		'app.faculdade',
		'app.seccao',
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
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_pagamento',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.escolas_tipopagamento',
		'app.escola',
		'app.turma',
		'app.anolectivo',
		'app.regimelectivo',
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
		'app.avaliacao',
		'app.tipoavaliacao',
		'app.turmatipoavaliacao',
		'app.tipopagamento',
		'app.pagamento',
		'app.conta',
		'app.estadopagamento',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
		'app.docente_categoria',
		'app.tipofuncionario',
		'app.unidade_organica',
		'app.areatrabalho',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_criador_conta',
		'app.bolsa_estado_bolsa',
		'app.estado_objecto',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_tipo_candidatura',
		'app.bolsa_motivo_indeferimento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BolsaResultado = ClassRegistry::init('BolsaResultado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BolsaResultado);

		parent::tearDown();
	}

}
