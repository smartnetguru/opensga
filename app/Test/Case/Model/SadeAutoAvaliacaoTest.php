<?php
App::uses('SadeAutoAvaliacao', 'Model');

/**
 * SadeAutoAvaliacao Test Case
 *
 */
class SadeAutoAvaliacaoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sade_auto_avaliacao', 'app.entidade', 'app.user', 'app.group', 'app.funcionario', 'app.grauacademico', 'app.curso', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.docente', 'app.seccao', 'app.departamento', 'app.faculdade', 'app.docente_categoria', 'app.estadoturma', 'app.inscricao', 'app.aluno', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.areatrabalho', 'app.genero', 'app.matricula', 'app.estadomatricula', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.cargo', 'app.tipofuncionario', 'app.estadoentidade', 'app.sade_parametro', 'app.sade_indicador', 'app.sade_avaliacao_aluno', 'app.sade_avaliacao_qualitativa', 'app.sade_avaliacao');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SadeAutoAvaliacao = ClassRegistry::init('SadeAutoAvaliacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SadeAutoAvaliacao);

		parent::tearDown();
	}

}
