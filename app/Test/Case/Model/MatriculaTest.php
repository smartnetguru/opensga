<?php
    App::uses('Matricula', 'Model');

    /**
     * Matricula Test Case
     */
    class MatriculaTest extends CakeTestCase
    {

        /**
         * Fixtures
         *
         * @var array
         */
        public $fixtures = [
            'app.matricula',
            'app.aluno',
            'app.ano_lectivo',
        ];

        /**
         * setUp method
         *
         * @return void
         */
        public function setUp()
        {
            parent::setUp();
            $this->Matricula = ClassRegistry::init('Matricula');
        }

        /**
         * tearDown method
         *
         * @return void
         */
        public function tearDown()
        {
            unset($this->Matricula);

            parent::tearDown();
        }

        /**
         * testGetAllAlunosMatriculados method
         *
         * @return void
         */
        public function testGetAllAlunosMatriculados()
        {
            $this->markTestIncomplete('testGetAllAlunosMatriculados not implemented.');
        }

        /**
         * testGetAllMatriculasByAluno method
         *
         * @return void
         */
        public function testGetAllMatriculasByAluno()
        {
            $this->markTestIncomplete('testGetAllMatriculasByAluno not implemented.');
        }

        /**
         * testGetReferenciaRenovacaoMatricula method
         *
         * @return void
         */
        public function testGetReferenciaRenovacaoMatricula()
        {
            $this->markTestIncomplete('testGetReferenciaRenovacaoMatricula not implemented.');
        }

        /**
         * testGetValorRenovacaoMatricula method
         *
         * @return void
         */
        public function testGetValorRenovacaoMatricula()
        {
            $this->markTestIncomplete('testGetValorRenovacaoMatricula not implemented.');
        }

        /**
         * testGetStatusRenovacao method
         *
         * @return void
         */
        public function testGetStatusRenovacao()
        {
            $this->markTestIncomplete('testGetStatusRenovacao not implemented.');
        }

        /**
         * testGetRenovacaoByAlunoAndAnoLectivo method
         *
         * @return void
         */
        public function testGetRenovacaoByAlunoAndAnoLectivo()
        {
            $this->markTestIncomplete('testGetRenovacaoByAlunoAndAnoLectivo not implemented.');
        }

        /**
         * testGetTotalMatriculasNaoRenovadas method
         *
         * @return void
         */
        public function testGetTotalMatriculasNaoRenovadas()
        {
            $this->markTestIncomplete('testGetTotalMatriculasNaoRenovadas not implemented.');
        }

        /**
         * testGetTotalMatriculasActivas method
         *
         * @return void
         */
        public function testGetTotalMatriculasActivas()
        {
            $this->markTestIncomplete('testGetTotalMatriculasActivas not implemented.');
        }

        /**
         * testMatriculaEstudante method
         *
         * @return void
         */
        public function testMatriculaEstudante()
        {
            $this->markTestIncomplete('testMatriculaEstudante not implemented.');
        }

        /**
         * testProcessaFicheiroRenovacao method
         *
         * @return void
         */
        public function testProcessaFicheiroRenovacao()
        {
            $this->markTestIncomplete('testProcessaFicheiroRenovacao not implemented.');
        }

        /**
         * testProcessaFicheiroRenovacaoLocal method
         *
         * @return void
         */
        public function testProcessaFicheiroRenovacaoLocal()
        {
            $this->markTestIncomplete('testProcessaFicheiroRenovacaoLocal not implemented.');
        }

        /**
         * testRenovaMatricula method
         *
         * @return void
         */
        public function testRenovaMatricula()
        {
            $data = [
                'AnoLectivo' => [
                    5  => '5',
                ],
                'Matricula'  => [
                    'aluno_id'            => '2',
                    'curso_id'            => '40',
                    'plano_estudo_id'     => '201',
                    'data'                => '2016-02-22',
                    'estado_matricula_id' => '1',
                    'user_id'             => '42646',
                    'turno_id'            => '',
                    'tipo_matricula_id'   => '2',
                    'regime_lectivo_id'   => '',
                ],
            ];

            $matricula = $this->Matricula->renovaMatricula($data);

            $this->assertTrue($matricula);
        }

        /**
         * testValidaMatricula method
         *
         * @return void
         */
        public function testValidaMatricula()
        {
            $this->markTestIncomplete('testValidaMatricula not implemented.');
        }

    }
