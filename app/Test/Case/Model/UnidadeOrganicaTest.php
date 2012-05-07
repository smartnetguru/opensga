<?php
App::uses('UnidadeOrganica', 'Model');

/**
 * UnidadeOrganica Test Case
 *
 */
class UnidadeOrganicaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.unidade_organica', 'app.docente', 'app.entidade', 'app.user', 'app.group', 'app.funcionario', 'app.grauacademico', 'app.curso', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.estadoturma', 'app.inscricao', 'app.aluno', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.areatrabalho', 'app.genero', 'app.matricula', 'app.estadomatricula', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.cargo', 'app.departamento', 'app.tipofuncionario', 'app.estadoentidade', 'app.seccao', 'app.faculdade', 'app.docente_categoria');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UnidadeOrganica = ClassRegistry::init('UnidadeOrganica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UnidadeOrganica);

		parent::tearDown();
	}

}
