<?php
App::uses('SadeAvaliacaoQualitativa', 'Model');

/**
 * SadeAvaliacaoQualitativa Test Case
 *
 */
class SadeAvaliacaoQualitativaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sade_avaliacao_qualitativa', 'app.sade_avaliador', 'app.entidade', 'app.user', 'app.group', 'app.funcionario', 'app.grauacademico', 'app.curso', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.docente', 'app.seccao', 'app.departamento', 'app.faculdade', 'app.docente_categoria', 'app.estadoturma', 'app.inscricao', 'app.aluno', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.areatrabalho', 'app.genero', 'app.matricula', 'app.estadomatricula', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.cargo', 'app.tipofuncionario', 'app.estadoentidade', 'app.nivel_avaliador', 'app.sade_parametro', 'app.sade_indicador', 'app.sade_auto_avaliacao', 'app.sade_avaliacao', 'app.sade_avaliacao_aluno');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SadeAvaliacaoQualitativa = ClassRegistry::init('SadeAvaliacaoQualitativa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SadeAvaliacaoQualitativa);

		parent::tearDown();
	}

}
