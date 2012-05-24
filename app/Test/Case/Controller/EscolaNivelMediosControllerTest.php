<?php
App::uses('EscolaNivelMediosController', 'Controller');

/**
 * TestEscolaNivelMediosController *
 */
class TestEscolaNivelMediosController extends EscolaNivelMediosController {
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
 * EscolaNivelMediosController Test Case
 *
 */
class EscolaNivelMediosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.escola_nivel_medio', 'app.cidade', 'app.provincia', 'app.paise', 'app.funcionario', 'app.user', 'app.group', 'app.aluno', 'app.entidade', 'app.genero', 'app.documento', 'app.estadoentidade', 'app.docente', 'app.seccao', 'app.departamento', 'app.faculdade', 'app.docente_categoria', 'app.curso', 'app.grauacademico', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.estadoturma', 'app.inscricao', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.matricula', 'app.estadomatricula', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.areatrabalho', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.cargo', 'app.tipofuncionario', 'app.aluno_nivel_medio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EscolaNivelMedios = new TestEscolaNivelMediosController();
		$this->EscolaNivelMedios->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EscolaNivelMedios);

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
