<?php
App::uses('TurmaTipoAvaliacao', 'Model');

/**
 * TurmaTipoAvaliacao Test Case
 *
 */
class TurmaTipoAvaliacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.turma_tipo_avaliacao',
		'app.turma',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.matricula',
		'app.aluno',
		'app.aluno_via_admissao',
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.bolsa_pedido',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_valor_bolsa',
		'app.bolsa_motivo_indeferimento',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.genero',
		'app.estado_civil',
		'app.regime_estudo',
		'app.regalia_social',
		'app.curso_responsavel',
		'app.curso',
		'app.grau_academico',
		'app.candidato_alumni',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.funcionario',
		'app.tipo_funcionario',
		'app.entidade',
		'app.pais',
		'app.provincia',
		'app.paise',
		'app.cidade',
		'app.bairro',
		'app.rua',
		'app.documento_identificacao',
		'app.estado_entidade',
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
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.alumni',
		'app.tipo_curso',
		'app.plano_estudo',
		'app.disciplina_plano_estudo',
		'app.disciplina',
		'app.disciplina_unidade_organica',
		'app.disciplina_docente',
		'app.precedencia',
		'app.tipo_precedencia',
		'app.cursos_turno',
		'app.turno',
		'app.forma_mudanca_curso',
		'app.funcao_profissional_role',
		'app.funcao_profissional',
		'app.role',
		'app.group_role',
		'app.groups_user',
		'app.message',
		'app.unidade_organica_role',
		'app.user_role',
		'app.area_trabalho',
		'app.estado_aluno',
		'app.grau_parentesco',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.aluno_nivel_medio',
		'app.tipo_ingresso',
		'app.estado_matricula',
		'app.bolsa_temporaria',
		'app.avaliacao',
		'app.inscricao',
		'app.estado_inscricao',
		'app.epoca_avaliacao',
		'app.tipo_inscricao',
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.historico_curso',
		'app.motivo_termino_curso',
		'app.mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.tipo_matricula',
		'app.semestre_lectivo',
		'app.semestre',
		'app.estado_turma',
		'app.docente_turma',
		'app.estado_docente_turma',
		'app.tipo_docente_turma',
		'app.tipo_avaliacao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TurmaTipoAvaliacao = ClassRegistry::init('TurmaTipoAvaliacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TurmaTipoAvaliacao);

		parent::tearDown();
	}

}
