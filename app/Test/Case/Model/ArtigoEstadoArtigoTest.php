<?php
App::uses('ArtigoEstadoArtigo', 'Model');

/**
 * ArtigoEstadoArtigo Test Case
 */
class ArtigoEstadoArtigoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo_estado_artigo',
		'app.artigo',
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.bolsa_pedido',
		'app.aluno',
		'app.aluno_via_admissao',
		'app.entidade',
		'app.genero',
		'app.pais',
		'app.funcionario',
		'app.grau_academico',
		'app.alumni_candidato_alumni',
		'app.estado_civil',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.docente',
		'app.docente_categoria',
		'app.docente_unidade_organica',
		'app.docente_disciplina',
		'app.disciplina',
		'app.turma',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.matricula',
		'app.curso',
		'app.tipo_curso',
		'app.curso_responsavel',
		'app.cursos_turno',
		'app.turno',
		'app.plano_estudo',
		'app.disciplina_plano_estudo',
		'app.precedencia',
		'app.tipo_precedencia',
		'app.curso_regime',
		'app.regime',
		'app.bolsa_temporaria',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_motivo_indeferimento',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_valor_bolsa',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.cidade',
		'app.provincia',
		'app.bairro',
		'app.rua',
		'app.paise',
		'app.aluno_nivel_medio',
		'app.documento_identificacao',
		'app.tipo_ingresso',
		'app.estado_matricula',
		'app.curso_escola',
		'app.escola',
		'app.historico_curso',
		'app.motivo_termino_curso',
		'app.mudanca_curso',
		'app.forma_mudanca_curso',
		'app.tipo_matricula',
		'app.financeiro_pagamento',
		'app.financeiro_conta',
		'app.financeiro_deposito',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
		'app.semestre_lectivo',
		'app.semestre',
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
		'app.alumni_alumni',
		'app.tipo_funcionario',
		'app.funcionario_categoria',
		'app.funcionario_unidade_organica',
		'app.estado_entidade',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.area_trabalho',
		'app.estado_aluno',
		'app.grau_parentesco',
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.regime_estudo',
		'app.regalia_social',
		'app.funcao_profissional_role',
		'app.funcao_profissional',
		'app.role',
		'app.group_role',
		'app.groups_user',
		'app.message',
		'app.message_text',
		'app.message_user',
		'app.message_folder',
		'app.estado_message',
		'app.unidade_organica_role',
		'app.user_role',
		'app.user_login_history',
		'app.artigo_area_academica',
		'app.artigo_area_pesquisa',
		'app.area_pesquisa',
		'app.artigo_meta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoEstadoArtigo = ClassRegistry::init('ArtigoEstadoArtigo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoEstadoArtigo);

		parent::tearDown();
	}

}