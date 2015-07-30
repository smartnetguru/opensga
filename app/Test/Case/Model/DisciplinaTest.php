<?php
App::uses('Disciplina', 'Model');

/**
 * Disciplina Test Case
 */
class DisciplinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disciplina',
		'app.disciplina_unidade_organica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Disciplina = ClassRegistry::init('Disciplina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Disciplina);

		parent::tearDown();
	}

/**
 * testCadastraDisciplina method
 *
 * @return void
 */
	public function testCadastraDisciplina() {

        $data = array('Disciplina'=>array('name'=>'Logica e Teoria de Conjuntos','unidade_organica_id'=>1));

        $resultado =$this->Disciplina->cadastraDisciplina($data);
        $this->assertTrue($resultado);

	}

}
