<?php
App::uses('BolsaValorBolsa', 'Model');

/**
 * BolsaValorBolsa Test Case
 *
 */
class BolsaValorBolsaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bolsa_valor_bolsa',
		'app.anolectivo',
		'app.regimelectivo',
		'app.turma',
		'app.semestrelectivo',
		'app.curso',
		'app.grau_academico',
		'app.escola',
		'app.tipocurso',
		'app.faculdade',
		'app.sim_nao_resposta',
		'app.seccao',
		'app.departamento',
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
		'app.docente_categoria',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_pagamento',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.escolas_tipopagamento',
		'app.tipopagamento',
		'app.pagamento',
		'app.conta',
		'app.estadopagamento',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
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
		'app.cargo',
		'app.tipofuncionario',
		'app.unidade_organica',
		'app.estadoturma',
		'app.turmatipoavaliacao',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_candidatura',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_criador_conta',
		'app.bolsa_estado_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_motivo_indeferimento',
		'app.estado_objecto',
		'app.bolsa_tipo_candidatura'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BolsaValorBolsa = ClassRegistry::init('BolsaValorBolsa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BolsaValorBolsa);

		parent::tearDown();
	}

}
