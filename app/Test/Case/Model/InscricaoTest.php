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
            $dataExterna = [
                'Disciplina'          => [
                    (int)0 => [
                        'tipo' => '1',
                        'id'   => '1270'
                    ],
                    (int)1 => [
                        'tipo' => '1',
                        'id'   => '1272'
                    ],
                    (int)2 => [
                        'tipo' => '1',
                        'id'   => '1266'
                    ],
                    (int)3 => [
                        'tipo' => '1',
                        'id'   => '1269'
                    ]
                ],
                'FinanceiroDeposito'  => [
                    'numero_comprovativo' => '5346534',
                    'data_deposito'       => ''
                ],
                'FinanceiroTransacao' => [
                    'valor'    => '435345345',
                    'detalhes' => '',
                    'aluno_id' => '39118'
                ],
                'Inscricao'           => [
                    'plano_estudo_id' => '35'
                ],
                'disciplinas'         => [
                    (int)0 => '1272',
                    (int)1 => '1270',
                    (int)2 => '1266',
                    (int)3 => '1269'
                ],
                'total_normal'        => (float)800,
                'total_atraso'        => (int)0,
                'aluno_id'            => '39118',
                'matricula_id'        => '205383',
                'turmas_tipo'         => [
                    (int)1270 => '1',
                    (int)1272 => '1',
                    (int)1266 => '1',
                    (int)1269 => '1'
                ],
                'cadeiras_normais'    => (int)4,
                'cadeiras_atraso'     => (int)0
            ];

            $dataNormal = [
                'Disciplina'          => [
                    (int)0 => [
                        'tipo' => '1',
                        'id'   => '1259'
                    ],
                    (int)1 => [
                        'tipo' => '1',
                        'id'   => '1059'
                    ],
                    (int)2 => [
                        'tipo' => '1',
                        'id'   => '1234'
                    ],
                    (int)3 => [
                        'tipo' => '1',
                        'id'   => '1114'
                    ]
                ],
                'FinanceiroDeposito'  => [
                    'numero_comprovativo' => '3242423',
                    'data_deposito'       => ''
                ],
                'FinanceiroTransacao' => [
                    'valor'    => '32423423',
                    'detalhes' => '',
                    'aluno_id' => '42872'
                ],
                'Inscricao'           => [
                    'plano_estudo_id' => ''
                ],
                'disciplinas'         => [
                    (int)0 => '1259',
                    (int)1 => '1059',
                    (int)2 => '1234',
                    (int)3 => '1114'
                ],
                'total_normal'        => (float)800,
                'total_atraso'        => (int)0,
                'aluno_id'            => '42872',
                'matricula_id'        => '205384',
                'turmas_tipo'         => [
                    (int)1259 => '1',
                    (int)1059 => '1',
                    (int)1234 => '1',
                    (int)1114 => '1'
                ],
                'cadeiras_normais'    => (int)4,
                'cadeiras_atraso'     => (int)0
            ];

            $inscricaoExterno = $this->Inscricao->inscreveAluno($dataExterna);
            $inscricaoNormal = $this->Inscricao->inscreveAluno($dataNormal);

            $this->assertTrue($inscricaoExterno);
            $this->assertTrue($inscricaoNormal);
        }

        /**
         * testInscreveAlunoNaTurma method
         *
         * @return void
         */
        public function testInscreveAlunoNaTurma()
        {
            $this->markTestIncomplete('testValidaInscricao not implemented.');
            $data = [
                'Inscricao' => [
                    'tipo_inscricao_id'      => '1',
                    'nota_frequencia'        => '12',
                    'nota_exame_normal'      => '14',
                    'nota_exame_recorrencia' => '',
                    'nota_final'             => '13',
                    'turma_id'               => '8',
                    'aluno_id'               => '8',
                    'user_id'                => 1
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
