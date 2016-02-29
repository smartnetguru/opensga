<?php
App::uses('Aula', 'Model');

/**
 * Aula Test Case
 */
class AulaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aula',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aula = ClassRegistry::init('Aula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aula);

		parent::tearDown();
	}

	public function testCriaAula(){
		$data = array(
			'Aula' => array(
				'tema_aula' => 'Introducao a Equações Diferenciais',
				'inicio_aula' => '2016-02-23 14:00:00',
				'fim_aula' => '2016-02-23 16:00:00',
				'conteudo' => '<p>Teste de aula introduzida</p>',
				'turma_id' => '12017',
				'docente_id' => '124',
				'estado_objecto_id' => '1'
			)
		);

		$errorData = array(
			'Aula' => array(
				'tema_aula' => 'Introducao a Equações Diferenciais',
				'inicio_aula' => '2016-02-23 14:00:00',
				'fim_aula' => '2016-02-23 16:00:00',
				'conteudo' => '<p>Teste de aula introduzida</p>',
				'docente_id' => '124',
				'estado_objecto_id' => '1'
			)
		);

		try{
			$this->Aula->criaAula($errorData);
		} catch(Exception $e){
			//debug($e->getMessage());
		}
		$resultado = $this->Aula->criaAula($data);
		$this->assertTrue($resultado);

	}

}
