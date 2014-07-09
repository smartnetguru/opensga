<?php
App::uses('UserRole', 'Model');

/**
 * UserRole Test Case
 *
 */
class UserRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_role',
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.groups_user',
		'app.entidade',
		'app.genero',
		'app.aluno',
		'app.curso',
		'app.grau_academico',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.funcionario',
		'app.tipo_funcionario',
		'app.docente',
		'app.docente_categoria',
		'app.tipo_curso',
		'app.plano_estudo',
		'app.disciplina_plano_estudo',
		'app.disciplina',
		'app.turma',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.semestre_lectivo',
		'app.turno',
		'app.estado_turma',
		'app.inscricao',
		'app.estado_inscricao',
		'app.epoca_avaliacao',
		'app.matricula',
		'app.estado_matricula',
		'app.tipo_matricula',
		'app.tipo_inscricao',
		'app.avaliacao',
		'app.tipo_avaliacao',
		'app.turma_tipo_avaliacao',
		'app.docente_turma',
		'app.estado_docente_turma',
		'app.tipo_docente_turma',
		'app.disciplina_unidade_organica',
		'app.disciplina_docente',
		'app.precedencia',
		'app.cursos_turno',
		'app.area_trabalho',
		'app.estado_aluno',
		'app.grau_parentesco',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.cidade',
		'app.provincia',
		'app.paise',
		'app.bairro',
		'app.rua',
		'app.aluno_nivel_medio',
		'app.aluno_via_admissao',
		'app.tipo_ingresso',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_pedido',
		'app.bolsa_resultado',
		'app.bolsa_motivo_indeferimento',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_valor_bolsa',
		'app.bolsa_temporaria',
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
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.historico_curso',
		'app.mudanca_curso',
		'app.forma_mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.estado_civil',
		'app.regime_estudo',
		'app.regalia_social',
		'app.pais',
		'app.documento_identificacao',
		'app.estado_entidade',
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserRole = ClassRegistry::init('UserRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserRole);

		parent::tearDown();
	}

}
