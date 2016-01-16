<?php
App::uses('RequisicoesPedido', 'Requisicoes.Model');

/**
 * RequisicoesPedido Test Case
 *
 */
class RequisicoesPedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.requisicoes.requisicoes_pedido',
		'plugin.requisicoes.aluno',
		'plugin.requisicoes.user',
		'plugin.requisicoes.group',
		'plugin.requisicoes.funcionario',
		'plugin.requisicoes.grau_academico',
		'plugin.requisicoes.cargo',
		'plugin.requisicoes.tipofuncionario',
		'plugin.requisicoes.entidade',
		'plugin.requisicoes.genero',
		'plugin.requisicoes.pais',
		'plugin.requisicoes.provincia',
		'plugin.requisicoes.paise',
		'plugin.requisicoes.cidade',
		'plugin.requisicoes.documento_identificacao',
		'plugin.requisicoes.estadoentidade',
		'plugin.requisicoes.estado_civil',
		'plugin.requisicoes.docente',
		'plugin.requisicoes.docente_categoria',
		'plugin.requisicoes.unidade_organica',
		'plugin.requisicoes.tipo_unidade_organica',
		'plugin.requisicoes.area_academica',
		'plugin.requisicoes.area_unidade',
		'plugin.requisicoes.estado_objecto',
		'plugin.requisicoes.financeiro_conta',
		'plugin.requisicoes.financeiro_deposito',
		'plugin.requisicoes.financeiro_estado_deposito',
		'plugin.requisicoes.financeiro_forma_deposito',
		'plugin.requisicoes.financeiro_banco',
		'plugin.requisicoes.financeiro_pagamento',
		'plugin.requisicoes.financeiro_tipo_pagamento',
		'plugin.requisicoes.month',
		'plugin.requisicoes.feriado',
		'plugin.requisicoes.mensalidade',
		'plugin.requisicoes.anolectivo',
		'plugin.requisicoes.regimelectivo',
		'plugin.requisicoes.turma',
		'plugin.requisicoes.semestrelectivo',
		'plugin.requisicoes.curso',
		'plugin.requisicoes.tipocurso',
		'plugin.requisicoes.planoestudo',
		'plugin.requisicoes.planoestudoano',
		'plugin.requisicoes.disciplina',
		'plugin.requisicoes.grupodisciplina',
		'plugin.requisicoes.turno',
		'plugin.requisicoes.estadoturma',
		'plugin.requisicoes.inscricao',
		'plugin.requisicoes.estadoinscricao',
		'plugin.requisicoes.epocaavaliacao',
		'plugin.requisicoes.matricula',
		'plugin.requisicoes.estadomatricula',
		'plugin.requisicoes.avaliacao',
		'plugin.requisicoes.tipoavaliacao',
		'plugin.requisicoes.turmatipoavaliacao',
		'plugin.requisicoes.financeiro_estado_pagamento',
		'plugin.requisicoes.entidade_identificacao',
		'plugin.requisicoes.entidade_contacto',
		'plugin.requisicoes.tipo_contacto',
		'plugin.requisicoes.areatrabalho',
		'plugin.requisicoes.aluno_nivel_medio',
		'plugin.requisicoes.escola_nivel_medio',
		'plugin.requisicoes.requisicoes_tipo_pedido',
		'plugin.requisicoes.requisicoes_estado_pedido',
		'plugin.requisicoes.requisicoes_pedido_log'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequisicoesPedido = ClassRegistry::init('Requisicoes.RequisicoesPedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequisicoesPedido);

		parent::tearDown();
	}

}
