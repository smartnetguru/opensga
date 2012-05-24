<?php
App::uses('BolsaBolsasController', 'Controller');

/**
 * TestBolsaBolsasController *
 */
class TestBolsaBolsasController extends BolsaBolsasController {
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
 * BolsaBolsasController Test Case
 *
 */
class BolsaBolsasControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.bolsa_bolsa', 'app.aluno', 'app.user', 'app.group', 'app.funcionario', 'app.grauacademico', 'app.curso', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.docente', 'app.entidade', 'app.genero', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.estadoentidade', 'app.seccao', 'app.departamento', 'app.faculdade', 'app.docente_categoria', 'app.estadoturma', 'app.inscricao', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.matricula', 'app.estadomatricula', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.cargo', 'app.tipofuncionario', 'app.areatrabalho', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.bolsa_candidatura', 'app.bolsa_resultado', 'app.banco', 'app.bolsa_fonte_bolsa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BolsaBolsas = new TestBolsaBolsasController();
		$this->BolsaBolsas->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BolsaBolsas);

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
