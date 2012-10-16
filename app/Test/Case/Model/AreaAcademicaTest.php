<?php
App::uses('AreaAcademica', 'Model');

/**
 * AreaAcademica Test Case
 *
 */
class AreaAcademicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.area_academica',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_unidade',
		'app.docente',
		'app.entidade',
		'app.user',
		'app.group',
		'app.funcionario',
		'app.grau_academico',
		'app.cargo',
		'app.departamento',
		'app.sim_nao_resposta',
		'app.faculdade',
		'app.seccao',
		'app.tipofuncionario',
		'app.aluno',
		'app.curso',
		'app.escola',
		'app.turma',
		'app.anolectivo',
		'app.regimelectivo',
		'app.semestrelectivo',
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
		'app.tipocurso',
		'app.areatrabalho',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.cidade',
		'app.provincia',
		'app.paise',
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
		'app.genero',
		'app.pais',
		'app.documento_identificacao',
		'app.estadoentidade',
		'app.estado_civil',
		'app.docente_categoria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AreaAcademica = ClassRegistry::init('AreaAcademica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AreaAcademica);

		parent::tearDown();
	}

}
