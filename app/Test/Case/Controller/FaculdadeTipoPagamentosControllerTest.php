<?php
App::uses('FaculdadeTipoPagamentosController', 'Controller');

/**
 * TestFaculdadeTipoPagamentosController *
 */
class TestFaculdadeTipoPagamentosController extends FaculdadeTipoPagamentosController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * FaculdadeTipoPagamentosController Test Case
 *
 */
class FaculdadeTipoPagamentosControllerTestCase extends CakeTestCase {
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
		$this->FaculdadeTipoPagamentos = new TestFaculdadeTipoPagamentosController();
		$this->FaculdadeTipoPagamentos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FaculdadeTipoPagamentos);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
