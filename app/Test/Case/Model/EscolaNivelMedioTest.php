<?php
App::uses('EscolaNivelMedio', 'Model');

/**
 * EscolaNivelMedio Test Case
 *
 */
class EscolaNivelMedioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.escola_nivel_medio', 'app.distrito', 'app.provincia', 'app.paise', 'app.funcionario', 'app.user', 'app.group', 'app.aluno', 'app.entidade', 'app.genero', 'app.cidade', 'app.documento', 'app.estadoentidade', 'app.docente', 'app.seccao', 'app.departamento', 'app.faculdade', 'app.docente_categoria', 'app.curso', 'app.grauacademico', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.estadoturma', 'app.inscricao', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.matricula', 'app.estadomatricula', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.areatrabalho', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.cargo', 'app.tipofuncionario', 'app.pais', 'app.aluno_nivel_medio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EscolaNivelMedio = ClassRegistry::init('EscolaNivelMedio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EscolaNivelMedio);

		parent::tearDown();
	}

}
