<?php
App::uses('CursoNewsController', 'Controller');

/**
 * CursoNewsController Test Case
 */
class CursoNewsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curso_news',
		'app.grau_academico',
		'app.alumni_candidato_alumni',
		'app.genero',
		'app.aluno',
		'app.aluno_via_admissao',
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.bolsa_pedido',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.matricula',
		'app.curso',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.funcionario',
		'app.entidade',
		'app.pais',
		'app.provincia',
		'app.cidade',
		'app.bairro',
		'app.rua',
		'app.documento_identificacao',
		'app.estado_entidade',
		'app.estado_civil',
		'app.docente',
		'app.docente_categoria',
		'app.docente_unidade_organica',
		'app.docente_disciplina',
		'app.disciplina',
		'app.turma',
		'app.semestre_lectivo',
		'app.semestre',
		'app.financeiro_deposito',
		'app.financeiro_conta',
		'app.financeiro_pagamento',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.plano_estudo',
		'app.disciplina_plano_estudo',
		'app.precedencia',
		'app.tipo_precedencia',
		'app.turno',
		'app.estado_turma',
		'app.inscricao',
		'app.estado_inscricao',
		'app.epoca_avaliacao',
		'app.tipo_inscricao',
		'app.avaliacao',
		'app.turma_tipo_avaliacao',
		'app.tipo_avaliacao',
		'app.docente_turma',
		'app.estado_docente_turma',
		'app.tipo_docente_turma',
		'app.disciplina_unidade_organica',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.tipo_funcionario',
		'app.funcionario_categoria',
		'app.tipo_curso',
		'app.curso_responsavel',
		'app.curso_regime',
		'app.regime',
		'app.estado_matricula',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.paise',
		'app.aluno_nivel_medio',
		'app.tipo_ingresso',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_motivo_indeferimento',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_valor_bolsa',
		'app.bolsa_temporaria',
		'app.tipo_matricula',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.regime_estudo',
		'app.regalia_social',
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
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.historico_curso',
		'app.motivo_termino_curso',
		'app.mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.alumni_alumni'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
