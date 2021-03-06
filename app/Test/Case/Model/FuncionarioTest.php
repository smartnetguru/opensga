<?php
App::uses('Funcionario', 'Model');

/**
 * Funcionario Test Case
 */
class FuncionarioTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.funcionario',
        'app.entidade',
        'app.user',
        'app.group',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Funcionario = ClassRegistry::init('Funcionario');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Funcionario);

        parent::tearDown();
    }

    /**
     * testCadastraFuncionario method
     *
     * @return void
     */
    public function testCadastraFuncionario()
    {
        $data = array(
            'Funcionario' => array(
                'codigo' => '54456',
                'genero_id' => '1',
                'unidade_organica_id' => '1',
                'data_admissao' => '2016-02-23',
                'grau_academico_id' => '',
                'superior_hierarquico' => ''
            ),
            'Entidade' => array(
                'apelido' => 'Leonardo',
                'nomes' => 'Elisio',
                'data_nascimento' => '2016-02-17',
                'estado_civil' => '1',
                'nome_pai' => 'Chch',
                'nome_mae' => 'Hsaha',
                'naturalidade' => 'lkjhdlkas',
                'pais_nascimento' => '152',
                'provincia_nascimento' => '1',
                'cidade_nascimento' => '1'
            ),
            'EntidadeIdentificacao' => array(
                'documento_identificacao_id' => '1',
                'numero' => '564456465',
                'local_emissao' => 'Maputo',
                'data_emissao' => '2016-02-10'
            ),
            'EntidadeContacto' => array(
                (int)2 => '4564654',
                (int)1 => 'elisiokdsadhhaj@erlkjl.com'
            )
        );


        $resultado = $this->Funcionario->cadastraFuncionario($data);
        $this->assertSame(true, $resultado);

    }

    /**
     * testCriaUsername method
     *
     * @return void
     */
    public function testCriaUsername()
    {
        $this->markTestIncomplete('testCriaUsername not implemented.');
    }

    /**
     * testGeraCodigo method
     *
     * @return void
     */
    public function testGeraCodigo()
    {
        $this->markTestIncomplete('testGeraCodigo not implemented.');
    }

    /**
     * testGetAllFuncionariosForResponsavelCurso method
     *
     * @return void
     */
    public function testGetAllFuncionariosForResponsavelCurso()
    {
        $this->markTestIncomplete('testGetAllFuncionariosForResponsavelCurso not implemented.');
    }

    /**
     * testGetByUserId method
     *
     * @return void
     */
    public function testGetByUserId()
    {
        $this->markTestIncomplete('testGetByUserId not implemented.');
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
     * testIsFromUnidadeOrganica method
     *
     * @return void
     */
    public function testIsFromUnidadeOrganica()
    {
        $this->markTestIncomplete('testIsFromUnidadeOrganica not implemented.');
    }

    /**
     * testListaFuncionarios method
     *
     * @return void
     */
    public function testListaFuncionarios()
    {
        $this->markTestIncomplete('testListaFuncionarios not implemented.');
    }

}
