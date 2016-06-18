<?php
App::uses('Disciplina', 'Model');

/**
 * Disciplina Test Case
 */
class DisciplinaTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disciplina',
        'app.disciplina_unidade_organica',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Disciplina = ClassRegistry::init('Disciplina');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Disciplina);

        parent::tearDown();
    }

    /**
     * testCadastraDisciplina method
     *
     * @return void
     */
    public function testCadastraDisciplina()
    {

        $data = [
            'Disciplina' => [
                'codigo' => 'LTC',
                'name' => 'Logica e Teoria de Conjuntos',
                'unidade_organica_id' => 1,
            ],
        ];

        $resultado = $this->Disciplina->cadastraDisciplina($data);
        $this->assertTrue($resultado);
        $resultado2 = $this->Disciplina->cadastraDisciplina($data);
        $this->assertFalse($resultado2);
        $disciplinaUnidadeExiste = $this->Disciplina->DisciplinaUnidadeOrganica->findByDisciplinaIdAndUnidadeOrganicaId(11,
            1);
        $this->assertNotEmpty($disciplinaUnidadeExiste);
        $this->assertArrayHasKey('DisciplinaUnidadeOrganica', $disciplinaUnidadeExiste);


    }

}
