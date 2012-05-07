<?php
App::uses('SadeAvaliacao', 'Model');

/**
 * SadeAvaliacao Test Case
 *
 */
class SadeAvaliacaoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sade_avaliacao', 'app.anolectivo', 'app.regimelectivo', 'app.turma', 'app.semestrelectivo', 'app.curso', 'app.grauacademico', 'app.funcionario', 'app.user', 'app.group', 'app.aluno', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.areatrabalho', 'app.genero', 'app.escola', 'app.matricula', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.estadomatricula', 'app.turno', 'app.inscricao', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.avaliacao', 'app.tipoavaliacao', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.cargo', 'app.departamento', 'app.tipofuncionario', 'app.tipocurso', 'app.docente', 'app.entidade', 'app.estadoentidade', 'app.seccao', 'app.faculdade', 'app.docente_categoria', 'app.estadoturma', 'app.sade_auto_avaliacao', 'app.sade_parametro', 'app.sade_indicador', 'app.sade_avaliacao_aluno', 'app.sade_avaliacao_qualitativa', 'app.sade_avaliador', 'app.nivel_avaliador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SadeAvaliacao = ClassRegistry::init('SadeAvaliacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SadeAvaliacao);

		parent::tearDown();
	}

}
