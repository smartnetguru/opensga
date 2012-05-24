<?php
App::uses('AlunoNivelMedio', 'Model');

/**
 * AlunoNivelMedio Test Case
 *
 */
class AlunoNivelMedioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aluno_nivel_medio', 'app.aluno', 'app.user', 'app.group', 'app.funcionario', 'app.grauacademico', 'app.curso', 'app.escola', 'app.turma', 'app.anolectivo', 'app.regimelectivo', 'app.semestrelectivo', 'app.planoestudo', 'app.planoestudoano', 'app.disciplina', 'app.grupodisciplinar', 'app.grupodisciplina', 'app.turno', 'app.docente', 'app.entidade', 'app.genero', 'app.paise', 'app.provincia', 'app.cidade', 'app.documento', 'app.estadoentidade', 'app.seccao', 'app.departamento', 'app.faculdade', 'app.docente_categoria', 'app.estadoturma', 'app.inscricao', 'app.estadoinscricao', 'app.epocaavaliacao', 'app.matricula', 'app.estadomatricula', 'app.avaliacao', 'app.tipoavaliacao', 'app.tipocurso', 'app.cargo', 'app.tipofuncionario', 'app.areatrabalho', 'app.pagamento', 'app.conta', 'app.tipopagamento', 'app.estadopagamento', 'app.escola_nivel_medio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlunoNivelMedio = ClassRegistry::init('AlunoNivelMedio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlunoNivelMedio);

		parent::tearDown();
	}

}
