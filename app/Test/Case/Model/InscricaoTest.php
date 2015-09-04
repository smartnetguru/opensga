<?php
    App::uses('Inscricao', 'Model');

    /**
     * Inscricao Test Case
     */
    class InscricaoTest extends CakeTestCase
    {

        /**
         * Fixtures
         *
         * @var array
         */
        public $fixtures = [
            'app.inscricao',
            'app.turma',
            'app.matricula',
            'app.aluno',
            'app.ano_lectivo',
            'app.opensga_session'
        ];

        /**
         * setUp method
         *
         * @return void
         */
        public function setUp()
        {
            parent::setUp();
            $this->Inscricao = ClassRegistry::init('Inscricao');
        }

        /**
         * tearDown method
         *
         * @return void
         */
        public function tearDown()
        {
            unset($this->Inscricao);

            parent::tearDown();
        }

        /**
         * testActualizaDadosInscricao method
         *
         * @return void
         */
        public function testActualizaDadosInscricao()
        {
            $this->markTestIncomplete('testActualizaDadosInscricao not implemented.');
        }

        /**
         * testCadastraNotasHistorico method
         *
         * @return void
         */
        public function testCadastraNotasHistorico()
        {
            $this->markTestIncomplete('testCadastraNotasHistorico not implemented.');
        }

        /**
         * testCalculaValoresInscricao method
         *
         * @return void
         */
        public function testCalculaValoresInscricao()
        {
            $this->markTestIncomplete('testCalculaValoresInscricao not implemented.');
        }

        /**
         * testFindAllAlunos method
         *
         * @return void
         */
        public function testFindAllAlunos()
        {
            $this->markTestIncomplete('testFindAllAlunos not implemented.');
        }

        /**
         * testGetAllByTurmaId method
         *
         * @return void
         */
        public function testGetAllByTurmaId()
        {
            $this->markTestIncomplete('testGetAllByTurmaId not implemented.');
        }

        /**
         * testGetAllCadeirasInscritasByAlunoSemestre method
         *
         * @return void
         */
        public function testGetAllCadeirasInscritasByAlunoSemestre()
        {
            $this->markTestIncomplete('testGetAllCadeirasInscritasByAlunoSemestre not implemented.');
        }

        /**
         * testGetAllCadeirasPendentesByAluno method
         *
         * @return void
         */
        public function testGetAllCadeirasPendentesByAluno()
        {
            $this->markTestIncomplete('testGetAllCadeirasPendentesByAluno not implemented.');
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
         * testGetAllInscricoesByAlunoAndEstado method
         *
         * @return void
         */
        public function testGetAllInscricoesByAlunoAndEstado()
        {
            $this->markTestIncomplete('testGetAllInscricoesByAlunoAndEstado not implemented.');
        }

        /**
         * testGetTotalInscricoesActivas method
         *
         * @return void
         */
        public function testGetTotalInscricoesActivas()
        {
            $this->markTestIncomplete('testGetTotalInscricoesActivas not implemented.');
        }

        /**
         * testInscreveAluno method
         *
         * @return void
         */
        public function testInscreveAluno()
        {
            $this->markTestIncomplete('testInscreveAluno not implemented.');
        }

        /**
         * testInscreveAlunoNaTurma method
         *
         * @return void
         */
        public function testInscreveAlunoNaTurma()
        {
            $data = [
                'Inscricao' => [
                    'tipo_inscricao_id'      => '1',
                    'nota_frequencia'        => '12',
                    'nota_exame_normal'      => '14',
                    'nota_exame_recorrencia' => '',
                    'nota_final'             => '13',
                    'turma_id'               => '8',
                    'aluno_id'               => '8'
                ]
            ];
            $mock = $this->getMock('CakeSession');
            $mock->expects($this->any())->method('read')
                ->with('Auth.User.id')
                ->will($this->returnValue(1));
            $resultado = $this->Inscricao->inscreveAlunoNaTurma($data);
            $lastId = $this->Inscricao->id;
            $this->assertSame(11, (int)$lastId);
            $this->assertSame(true, $resultado);
            debug($resultado);

        }

        /**
         * testValidaInscricao method
         *
         * @return void
         */
        public function testValidaInscricao()
        {
            $this->markTestIncomplete('testValidaInscricao not implemented.');
        }

    }
