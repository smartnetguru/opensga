<?php
App::uses('EstadoCandidatura', 'Model');

/**
 * EstadoCandidatura Test Case
 *
 */
class EstadoCandidaturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado_candidatura',
		'app.candidato_graduacao',
		'app.aluno',
		'app.user',
		'app.group',
		'app.funcionario',
		'app.grau_academico',
		'app.tipofuncionario',
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
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.estado_objecto',
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
		'app.anolectivo',
		'app.regimelectivo',
		'app.turma',
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
		'app.tipo_matricula',
		'app.avaliacao',
		'app.tipoavaliacao',
		'app.turmatipoavaliacao',
		'app.financeiro_estado_pagamento',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.funcionarios_funcao_profissional',
		'app.funcao_profissional',
		'app.areatrabalho',
		'app.estado_aluno',
		'app.aluno_nivel_medio',
		'app.escola_nivel_medio',
		'app.requisicoes_pedido',
		'app.historico_curso',
		'app.mudanca_curso',
		'app.forma_mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.cerimonia_graduacao',
		'app.regime_estudo',
		'app.regalia_social'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstadoCandidatura = ClassRegistry::init('EstadoCandidatura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstadoCandidatura);

		parent::tearDown();
	}

}
