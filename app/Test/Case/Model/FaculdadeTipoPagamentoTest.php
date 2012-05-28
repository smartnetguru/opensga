<?php
App::uses('FaculdadeTipoPagamento', 'Model');

/**
 * FaculdadeTipoPagamento Test Case
 *
 */
class FaculdadeTipoPagamentoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.faculdade_tipo_pagamento', 'app.faculdade', 'app.seccao', 'app.departamento', 'app.funcionario', 'app.user', 'app.group', 'app.aluno', 'app.entidade', 'app.genero', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.estadoentidade', 'app.docente', 'app.docente_categoria', 'app.curso', 'app.grauacademico', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.estadoturma', 'app.inscricao', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.matricula', 'app.estadomatricula', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.areatrabalho', 'app.aluno_nivel_medio', 'app.escola_nivel_medio', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.cargo', 'app.tipofuncionario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FaculdadeTipoPagamento = ClassRegistry::init('FaculdadeTipoPagamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FaculdadeTipoPagamento);

		parent::tearDown();
	}

}
