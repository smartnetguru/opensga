<?php
App::uses('RegimeTrabalhosController', 'Controller');

/**
 * TestRegimeTrabalhosController *
 */
class TestRegimeTrabalhosController extends RegimeTrabalhosController {
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
 * RegimeTrabalhosController Test Case
 *
 */
class RegimeTrabalhosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.regime_trabalho', 'app.docente', 'app.entidade', 'app.user', 'app.group', 'app.funcionario', 'app.grauacademico', 'app.curso', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.estadoturma', 'app.inscricao', 'app.aluno', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.areatrabalho', 'app.genero', 'app.matricula', 'app.estadomatricula', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.cargo', 'app.departamento', 'app.tipofuncionario', 'app.estadoentidade', 'app.seccao', 'app.faculdade', 'app.docente_categoria');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegimeTrabalhos = new TestRegimeTrabalhosController();
		$this->RegimeTrabalhos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegimeTrabalhos);

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
