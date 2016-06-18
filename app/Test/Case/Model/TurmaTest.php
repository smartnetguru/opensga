<?php
App::uses('Turma', 'Model');

/**
 * Turma Test Case
 *
 */
class TurmaTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.turma',
        'app.ano_lectivo',
        'app.docente_disciplina',
        'app.docente_turma',
        'app.docente',
        'app.turma_tipo_avaliacao',
        'app.plano_estudo',
        'app.disciplina_plano_estudo',
        'app.disciplina'

    ];
    //public $autoFixtures = false;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Turma = ClassRegistry::init('Turma');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Turma);

        parent::tearDown();
    }

    /**
     * testAdicionaDocente method
     *
     * @return void
     */
    public function testAdicionaDocente()
    {
        $data = [
            'DocenteTurma' => [
                'docente_id' => 1,
                'turma_id' => 2,
                'tipo_docente_turma_id' => 1,
                'estado_docente_turma_id' => 1,
            ],
        ];
        $resultado = $this->Turma->adicionaDocente($data);
        $this->assertSame($resultado, true);
    }

    /**
     * testCriarTurmas method
     *
     * @return void
     */
    public function testCriarTurmas()
    {
        $this->markTestIncomplete('testCriarTurmas not implemented.');
    }

    public function testCriarTurma()
    {
        $data = array(
            'Turma' => array(
                'curso_id' => '5',
                'plano_estudo_id' => '1',
                'disciplina_id' => '1',
                'ano_lectivo_id' => '5',
                'semestre_lectivo_id' => '5',
                'turno_id' => '1'
            )
        );

        $resultado = $this->Turma->criaTurma($data);
        $this->assertTrue($resultado);
    }

    public function testCriaAvalicao()
    {
        $data = array(
            'TurmaTipoAvaliacao' => array(
                'tipo_avaliacao_id' => '1',
                'data_marcada' => '2016-02-23',
                'ordem' => '2',
                'peso' => '20',
                'turma_id' => '62260',
                'estado_turma_avaliacao_id' => '1',
                'docente_id' => '76'
            )
        );

        $resultado = $this->Turma->criaAvaliacao($data);
        $this->assertTrue($resultado);
    }

    /**
     * testFecharTodasTurmas method
     *
     * @return void
     */
    public function testFecharTodasTurmas()
    {
        $this->markTestIncomplete('testFecharTodasTurmas not implemented.');
    }

    /**
     * testGeraPautaExcel method
     *
     * @return void
     */
    public function testGeraPautaExcel()
    {
        $this->markTestIncomplete('testGeraPautaExcel not implemented.');
    }

    /**
     * testGetAllAssistentes method
     *
     * @return void
     */
    public function testGetAllAssistentes()
    {
        $this->markTestIncomplete('testGetAllAssistentes not implemented.');
    }

    /**
     * testGetAllByAlunoForInscricao method
     *
     * @return void
     */
    public function testGetAllByAlunoForInscricao()
    {
        $this->markTestIncomplete('testGetAllByAlunoForInscricao not implemented.');
    }

    /**
     * testGetAllByPlanoEstudoAntigo method
     *
     * @return void
     */
    public function testGetAllByPlanoEstudoAntigo()
    {
        $this->markTestIncomplete('testGetAllByPlanoEstudoAntigo not implemented.');
    }

    /**
     * testGetAllDisciplinasForInscricao method
     *
     * @return void
     */
    public function testGetAllDisciplinasForInscricao()
    {
        $this->markTestIncomplete('testGetAllDisciplinasForInscricao not implemented.');
    }

    /**
     * testGetAllTurmasActivasByPlanoEstudo method
     *
     * @return void
     */
    public function testGetAllTurmasActivasByPlanoEstudo()
    {
        $this->markTestIncomplete('testGetAllTurmasActivasByPlanoEstudo not implemented.');
    }

    /**
     * testGetAllTurmasByDocente method
     *
     * @return void
     */
    public function testGetAllTurmasByDocente()
    {
        $this->markTestIncomplete('testGetAllTurmasByDocente not implemented.');
    }

    /**
     * testGetAllTurmasInscritas method
     *
     * @return void
     */
    public function testGetAllTurmasInscritas()
    {
        $this->markTestIncomplete('testGetAllTurmasInscritas not implemented.');
    }

    /**
     * testGetAlunosAprovados method
     *
     * @return void
     */
    public function testGetAlunosAprovados()
    {
        $this->markTestIncomplete('testGetAlunosAprovados not implemented.');
    }

    /**
     * testGetAlunosInscritos method
     *
     * @return void
     */
    public function testGetAlunosInscritos()
    {
        $this->markTestIncomplete('testGetAlunosInscritos not implemented.');
    }

    /**
     * testGetAlunosReprovados method
     *
     * @return void
     */
    public function testGetAlunosReprovados()
    {
        $this->markTestIncomplete('testGetAlunosReprovados not implemented.');
    }

    /**
     * testGetAssistente method
     *
     * @return void
     */
    public function testGetAssistente()
    {
        $this->markTestIncomplete('testGetAssistente not implemented.');
    }

    /**
     * testGetDocente method
     *
     * @return void
     */
    public function testGetDocente()
    {
        $this->markTestIncomplete('testGetDocente not implemented.');
    }

    /**
     * testGetPlanoEstudo method
     *
     * @return void
     */
    public function testGetPlanoEstudo()
    {
        $this->markTestIncomplete('testGetPlanoEstudo not implemented.');
    }

    /**
     * testGetRegente method
     *
     * @return void
     */
    public function testGetRegente()
    {
        $this->markTestIncomplete('testGetRegente not implemented.');
    }

    /**
     * testGetSomaNotaFinal method
     *
     * @return void
     */
    public function testGetSomaNotaFinal()
    {
        $this->markTestIncomplete('testGetSomaNotaFinal not implemented.');
    }

    /**
     * testGetTotalAlunosInscritosByTurma method
     *
     * @return void
     */
    public function testGetTotalAlunosInscritosByTurma()
    {
        $this->markTestIncomplete('testGetTotalAlunosInscritosByTurma not implemented.');
    }

    /**
     * testGetTurmasByFuncionario method
     *
     * @return void
     */
    public function testGetTurmasByFuncionario()
    {
        $this->markTestIncomplete('testGetTurmasByFuncionario not implemented.');
    }

    /**
     * testHasAvaliacoesAbertas method
     *
     * @return void
     */
    public function testHasAvaliacoesAbertas()
    {
        $this->markTestIncomplete('testHasAvaliacoesAbertas not implemented.');
    }

    /**
     * testIsDocente method
     *
     * @return void
     */
    public function testIsDocente()
    {
        $this->markTestIncomplete('testIsDocente not implemented.');
    }

    /**
     * testProcessaPauta method
     *
     * @return void
     */
    public function testProcessaPauta()
    {
        $this->markTestIncomplete('testProcessaPauta not implemented.');
    }

    /**
     * testUpDateTurma method
     *
     * @return void
     */
    public function testUpDateTurma()
    {
        $this->markTestIncomplete('testUpDateTurma not implemented.');
    }

}
