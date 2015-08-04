<?php
App::uses('Docente', 'Model');

/**
 * Docente Test Case
 *
 */
class DocenteTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.docente',
        'app.entidade',
        'app.user'
    ];
    public $autoFixtures = false;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Docente = ClassRegistry::init('Docente');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Docente);

        parent::tearDown();
    }

    /**
     * testGetByUserID method
     *
     * @return void
     */
    public function testGetByUserID()
    {
        $this->markTestIncomplete('testGetByUserID not implemented.');
    }

    /**
     * testCadastraDocente method
     *
     * @return void
     */
    public function testCadastraDocente()
    {
        $this->loadFixtures('Docente', 'User', 'Entidade');
        $data = [

            'Entidade'              => [
                'apelido'              => 'Leonardo',
                'nomes'                => 'Elisio Leonardo',
                'genero_id'            => '1',
                'data_nascimento'      => '2015-08-04',
                'nome_pai'             => 'Elisio',
                'nome_mae'             => 'Leonardo',
                'naturalidade'         => 'CCCC',
                'pais_nascimento'      => '152',
                'provincia_nascimento' => '6',
                'cidade_nascimento'    => '1',
                'name'                 => 'Elisio Leonardo Leonardo'
            ],
            'Docente'               => [
                'unidade_organica_id' => '1',
                'data_ingresso'       => '2015-08-11'
            ],
            'EntidadeContacto'      => [
                (int)11 => '152',
                (int)10 => '4',
                (int)9  => '47',
                (int)6  => 'dfgdf',
                (int)5  => '',
                (int)7  => '',
                (int)8  => '',
                (int)2  => 'gdfgd',
                (int)1  => '676575'
            ],
            'EntidadeIdentificacao' => [
                'documento_identificacao_id' => '1',
                'numero'                     => '54664645',
                'local_emissao'              => '',
                'data_emissao'               => '',
                'data_validade'              => ''
            ]

        ];
        $resultado = $this->Docente->cadastraDocente($data);
        $this->assertTrue($resultado);

    }

    /**
     * testListaDocentes method
     *
     * @return void
     */
    public function testListaDocentes()
    {
        $this->markTestIncomplete('testListaDocentes not implemented.');
    }

}
