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
            'app.group'
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
            $data = [
                'Aluno'                 => [
                    'numero_estudante'       => '',
                    'nome_emergencia'        => '',
                    'telemovel_emergencia'   => '',
                    'parentesco_encarregado' => ''
                ],
                'Entidade'              => [
                    'apelido'              => 'Leonardo',
                    'nomes'                => 'Elisio',
                    'genero_id'            => '1',
                    'data_nascimento'      => '2015-09-01',
                    'estado_civil'         => '1',
                    'nome_pai'             => 'Chigalo Sande',
                    'nome_mae'             => 'Chuma Mafanhe',
                    'naturalidade'         => 'Chimoio',
                    'pais_nascimento'      => '152',
                    'provincia_nascimento' => '8',
                    'cidade_nascimento'    => '97'
                ],
                'Funcionario'           => [
                    'unidade_organica_id'       => '6',
                    'tipo_funcionario_id'       => '',
                    'data_admissao'             => '2015-09-02',
                    'grau_academico_id'         => '',
                    'cargo_id'                  => '',
                    'superior_hierarquico'      => '',
                    'categoria_funcionario_id'  => '',
                    'categoria_profissional_id' => ''
                ],
                'EntidadeContacto'      => [
                    (int)11 => '152',
                    (int)10 => '',
                    (int)9  => '',
                    (int)6  => '',
                    (int)5  => '',
                    (int)7  => '',
                    (int)8  => '',
                    (int)2  => '3464567574',
                    (int)1  => 'elisio.leonardo444@gmail.com'
                ],
                'EntidadeIdentificacao' => [
                    'documento_identificacao_id' => '',
                    'numero'                     => '',
                    'local_emissao'              => '',
                    'data_emissao'               => '',
                    'data_validade'              => ''
                ]
            ];
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
