<?php
    App::uses('User', 'Model');

    /**
     * User Test Case
     *
     */
    class UserTest extends CakeTestCase
    {

        /**
         * Fixtures
         *
         * @var array
         */
        public $fixtures = [
            'app.user',
            'app.group',
            'app.estado_objecto'
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
            $this->loadFixtures('User');
            $this->User = ClassRegistry::init('User');
        }

        /**
         * tearDown method
         *
         * @return void
         */
        public function tearDown()
        {
            unset($this->User);

            parent::tearDown();
        }


        /**
         * testGetUserByFuncionario method
         *
         * @return void
         */
        public function testGetUserByFuncionario()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testGetUserByFuncionario not implemented.');
        }

        /**
         * testGetAlunoIDByUser method
         *
         * @return void
         */
        public function testGetAlunoIDByUser()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testGetAlunoIDByUser not implemented.');
        }

        /**
         * testGetFuncionarioIDByUser method
         *
         * @return void
         */
        public function testGetFuncionarioIDByUser()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testGetFuncionarioIDByUser not implemented.');
        }

        /**
         * testDeleteUser method
         *
         * @return void
         */
        public function testDeleteUser()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testDeleteUser not implemented.');
        }

        /**
         * testGeraUsername method
         *
         * @return void
         */
        public function testGeraUsername()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testGeraUsername not implemented.');
        }

        /**
         * testAlteraPassword method
         *
         * @return void
         */
        public function testAlteraPassword()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testAlteraPassword not implemented.');
        }

        /**
         * testResetPassword method
         *
         * @return void
         */
        public function testResetPassword()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testResetPassword not implemented.');
        }

        /**
         * testIsAluno method
         *
         * @return void
         */
        public function testIsAluno()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testIsAluno not implemented.');
        }

        /**
         * testNormalizeStr method
         *
         * @return void
         */
        public function testNormalizeStr()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testNormalizeStr not implemented.');
        }

        /**
         * testGeraEmailUem method
         *
         * @return void
         */
        public function testGeraEmailUem()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testGeraEmailUem not implemented.');
        }

        /**
         * testGetFuncionarioActivoId method
         *
         * @return void
         */
        public function testGetFuncionarioActivoId()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testGetFuncionarioActivoId not implemented.');
        }

        /**
         * testIsFromFaculdade method
         *
         * @return void
         */
        public function testIsFromFaculdade()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testIsFromFaculdade not implemented.');
        }

        /**
         * testGeneratePassword method
         *
         * @return void
         */
        public function testGeneratePassword()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testGeneratePassword not implemented.');
        }

        /**
         * testSplitName method
         *
         * @return void
         */
        public function testSplitName()
        {
            $this->loadFixtures('User');
            $this->markTestIncomplete('testSplitName not implemented.');
        }

        public function testCadastraUser()
        {
            $this->loadFixtures('User');
            $data = [
                'User'     => [
                    'codigocartao'         => '20146226',
                    'name'                 => 'Sandra Fazenete Picardo Massamba',
                    'group_id'             => (int)3,
                    'verificar_permissoes' => (int)1,
                    'estado_email'         => (int)0,
                    'estado_objecto_id'    => (int)1,
                    'timezone'             => 'Africa/Maputo',
                    'password'             => '12345'
                ],
                'Entidade' => [
                    'apelido' => 'Sitoe',
                    'nomes'   => 'Elisio'
                ]
            ];


            $result = $this->User->cadastraUser($data);
            $this->AssertEquals(12, $result);
        }

    }
