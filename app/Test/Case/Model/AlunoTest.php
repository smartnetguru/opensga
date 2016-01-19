<?php
    App::uses('Aluno', 'Model');

    /**
     * Aluno Test Case
     *
     */
    class AlunoTest extends CakeTestCase
    {

        /**
         * Fixtures
         *
         * @var array
         */
        public $fixtures = [
            'app.aluno',
            'app.entidade',
            'app.historico_curso',
            'app.entidade_contacto',
            'app.entidade_identificacao',
            'app.candidatura',
            'app.aluno_estado',
            'app.user',
            'app.matricula',
            'app.cidade',
            'app.provincia',
            'app.pais',
            'app.ano_lectivo',
            'app.plano_estudo',
            'app.aluno_nivel_medio',
            'app.semestre_lectivo',
            'app.bairro',
            'app.group',
            'app.curso',
            'app.disciplina_plano_estudo',
            'app.escola_nivel_medio',
            'app.rua'
        ];


        /**
         * setUp method
         *
         * @return void
         */
        public function setUp()
        {
            parent::setUp();
            $this->Aluno = ClassRegistry::init('Aluno');


        }

        /**
         * tearDown method
         *
         * @return void
         */
        public function tearDown()
        {
            unset($this->Aluno);

            parent::tearDown();
        }

        /**
         * testGetPlanoEstudoCorrente method
         *
         * @return void
         */
        public function testGetPlanoEstudoCorrente()
        {
            $this->markTestIncomplete('testGetPlanoEstudoCorrente not implemented.');
        }

        /**
         * testGetAllInscricoesActivas method
         *
         * @return void
         */
        public function testGetAllInscricoesActivas()
        {
            $this->markTestIncomplete('testGetAllInscricoesActivas not implemented.');
        }

        /**
         * testActualizaMatriculaCondicionalFromFile method
         *
         * @return void
         */
        public function testActualizaMatriculaCondicionalFromFile()
        {
            $this->markTestIncomplete('testActualizaMatriculaCondicionalFromFile not implemented.');
        }

        /**
         * testGetAllInscricoesActivasAndAprovadasForInscricao method
         *
         * @return void
         */
        public function testGetAllInscricoesActivasAndAprovadasForInscricao()
        {
            $this->markTestIncomplete('testGetAllInscricoesActivasAndAprovadasForInscricao not implemented.');
        }

        /**
         * testGetAllTurmasByEstado method
         *
         * @return void
         */
        public function testGetAllTurmasByEstado()
        {
            $this->markTestIncomplete('testGetAllTurmasByEstado not implemented.');
        }

        /**
         * testGetAllTurmasByAluno method
         *
         * @return void
         */
        public function testGetAllTurmasByAluno()
        {
            $this->markTestIncomplete('testGetAllTurmasByAluno not implemented.');
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
         * testGetContaByAlunoId method
         *
         * @return void
         */
        public function testGetContaByAlunoId()
        {
            $this->markTestIncomplete('testGetContaByAlunoId not implemented.');
        }

        /**
         * testGetContaIdByAlunoId method
         *
         * @return void
         */
        public function testGetContaIdByAlunoId()
        {
            $this->markTestIncomplete('testGetContaIdByAlunoId not implemented.');
        }

        /**
         * testGetAllTurmasForInscricao method
         *
         * @return void
         */
        public function testGetAllTurmasForInscricao()
        {
            $this->markTestIncomplete('testGetAllTurmasForInscricao not implemented.');
        }

        /**
         * testGetAllTurmasNormaisForInscricao method
         *
         * @return void
         */
        public function testGetAllTurmasNormaisForInscricao()
        {
            $this->markTestIncomplete('testGetAllTurmasNormaisForInscricao not implemented.');
        }

        /**
         * testGetMatriculaCorrente method
         *
         * @return void
         */
        public function testGetMatriculaCorrente()
        {
            $this->markTestIncomplete('testGetMatriculaCorrente not implemented.');
        }

        /**
         * testGetAlunoForAction method
         *
         * @return void
         */
        public function testGetAlunoForAction()
        {
            $this->markTestIncomplete('testGetAlunoForAction not implemented.');
        }

        /**
         * testGetAllAlunosForAutenticidades method
         *
         * @return void
         */
        public function testGetAllAlunosForAutenticidades()
        {
            $this->markTestIncomplete('testGetAllAlunosForAutenticidades not implemented.');
        }

        /**
         * testGetAlunoForPerfil method
         *
         * @return void
         */
        public function testGetAlunoForPerfil()
        {
            $this->markTestIncomplete('testGetAlunoForPerfil not implemented.');
        }

        /**
         * testGetNivelAcademicoElevado method
         *
         * @return void
         */
        public function testGetNivelAcademicoElevado()
        {
            $this->markTestIncomplete('testGetNivelAcademicoElevado not implemented.');
        }

        /**
         * testGetNivelAcademicoReal method
         *
         * @return void
         */
        public function testGetNivelAcademicoReal()
        {
            $this->markTestIncomplete('testGetNivelAcademicoReal not implemented.');
        }

        /**
         * testCadastraAluno method
         *
         * @return void
         */
        public function testCadastraAluno()
        {
            $this->loadFixtures('Candidatura', 'User', 'Cidade', 'Aluno', 'Entidade', 'PlanoEstudo',
                'EntidadeIdentificacao', 'EntidadeContacto', 'AlunoNivelMedio', 'HistoricoCurso', 'Matricula',
                'AnoLectivo', 'SemestreLectivo');
            $data = [
                'Aluno'                 => [
                    'numero_estudante'           => '20072041017',
                    'curso_id'                   => '49',
                    'ano_ingresso'               => '2007',
                    'data_matricula'             => '2015-08-12',
                    'certificado_nivel_anterior' => '1',
                    'recenseamento_militar'      => '1',
                    'nome_emergencia'            => 'Elisio Leonardo',
                    'telemovel_emergencia'       => '+258826489374',
                    'parentesco_encarregado'     => '1',
                    'codigo'                     => '20072041017'
                ],
                'Entidade'              => [
                    'apelido'              => 'Leonardo',
                    'nomes'                => 'Elisio',
                    'genero_id'            => '1',
                    'data_nascimento'      => '1989-02-09',
                    'estado_civil'         => '1',
                    'nome_pai'             => 'Chigalo Sande',
                    'nome_mae'             => 'Chuma Mafanhe',
                    'naturalidade'         => 'Chimoio',
                    'pais_nascimento'      => '152',
                    'provincia_nascimento' => '1',
                    'cidade_nascimento'    => '44',
                    'name'                 => 'Elisio Leonardo'
                ],
                'Curso'                 => [
                    'unidade_organica_id' => '3'
                ],
                'AlunoNivelMedio'       => [
                    'EscolaNivelMedio'      => [
                        'provincia_id' => '1',
                        'distrito_id'  => '44'
                    ],
                    'escola_nivel_medio_id' => '',
                    'nova_escola_anterior'  => 'Escola Secundaria Samora Machel',
                    'ano_conclusao'         => '2006',
                    'nota_final'            => '15'
                ],
                'EntidadeContacto'      => [
                    (int)2 => '826489374'
                ],
                'EntidadeIdentificacao' => [
                    'documento_identificacao_id' => '1',
                    'numero'                     => '1101023525320',
                    'local_emissao'              => 'Maputo',
                    'data_emissao'               => '2015-08-11'
                ],
                'Matricula'             => [
                    'user_id' => '42646'
                ]
            ];
            $resultado = $this->Aluno->cadastraAluno($data);
            $this->assertSame(true, $resultado);
            $this->assertTrue($resultado);

            $data2 = [
                'Aluno'                 => [
                    'numero_estudante'           => '200720410173',
                    'curso_id'                   => '49',
                    'ano_ingresso'               => '2007',
                    'data_matricula'             => '2015-08-12',
                    'certificado_nivel_anterior' => '1',
                    'recenseamento_militar'      => '1',
                    'codigo'                     => '200720410173'
                ],
                'Entidade'              => [
                    'apelido'         => 'Leonardo',
                    'nomes'           => 'Elisio',
                    'genero_id'       => '1',
                    'data_nascimento' => '1989-02-09',
                ],
                'Curso'                 => [
                    'unidade_organica_id' => '3'
                ],
                'EntidadeContacto'      => [
                    '2' => '826489374'
                ],
                'EntidadeIdentificacao' => [
                    'documento_identificacao_id' => '1',
                    'numero'                     => '110102352532034',
                ],
                'Matricula'             => [
                    'user_id' => '1'
                ]
            ];
            $resultado2 = $this->Aluno->cadastraAluno($data2);
            $this->assertSame(true, $resultado2);
        }

        /**
         * testIsBolseiro method
         *
         * @return void
         */
        public function testIsBolseiro()
        {
            $this->markTestIncomplete('testIsBolseiro not implemented.');
        }

        /**
         * testIsMatriculado method
         *
         * @return void
         */
        public function testIsMatriculado()
        {
            $this->markTestIncomplete('testIsMatriculado not implemented.');
        }

        /**
         * testSetNovaMatricula method
         *
         * @return void
         */
        public function testSetNovaMatricula()
        {
            $this->markTestIncomplete('testSetNovaMatricula not implemented.');
        }

        /**
         * testGetPerfilAluno method
         *
         * @return void
         */
        public function testGetPerfilAluno()
        {
            $this->markTestIncomplete('testGetPerfilAluno not implemented.');
        }

        /**
         * testGetEstudantesByFaculdade method
         *
         * @return void
         */
        public function testGetEstudantesByFaculdade()
        {
            $this->markTestIncomplete('testGetEstudantesByFaculdade not implemented.');
        }

        /**
         * testGetTotalEstudantesPorCurso method
         *
         * @return void
         */
        public function testGetTotalEstudantesPorCurso()
        {
            $this->markTestIncomplete('testGetTotalEstudantesPorCurso not implemented.');
        }

        /**
         * testActualizaContactos method
         *
         * @return void
         */
        public function testActualizaContactos()
        {
            $this->markTestIncomplete('testActualizaContactos not implemented.');
        }

        /**
         * testGetTotalAlunosActivosPorCurso method
         *
         * @return void
         */
        public function testGetTotalAlunosActivosPorCurso()
        {
            $this->markTestIncomplete('testGetTotalAlunosActivosPorCurso not implemented.');
        }

        /**
         * testGetTotalAlunosActivos method
         *
         * @return void
         */
        public function testGetTotalAlunosActivos()
        {
            $this->markTestIncomplete('testGetTotalAlunosActivos not implemented.');
        }

        /**
         * testHasFoto method
         *
         * @return void
         */
        public function testHasFoto()
        {
            $this->markTestIncomplete('testHasFoto not implemented.');
        }

        /**
         * testIsRegular method
         *
         * @return void
         */
        public function testIsRegular()
        {
            $this->markTestIncomplete('testIsRegular not implemented.');
        }

        /**
         * testProcessaContacto method
         *
         * @return void
         */
        public function testProcessaContacto()
        {
            $this->markTestIncomplete('testProcessaContacto not implemented.');
        }

        /**
         * testAlteraStatus method
         *
         * @return void
         */
        public function testAlteraStatus()
        {
            $this->markTestIncomplete('testAlteraStatus not implemented.');
        }

        /**
         * testMatriculaNovoIngresso method
         *
         * @return void
         */
        public function testMatriculaNovoIngresso()
        {
            $this->loadFixtures('Candidatura', 'User', 'Cidade', 'Aluno', 'Entidade', 'PlanoEstudo',
                'EntidadeIdentificacao', 'EntidadeContacto', 'AlunoNivelMedio', 'HistoricoCurso', 'Matricula');
            $data = [
                'Aluno'                 => [
                    'codigo'                     => '201462262',
                    'certificado_nivel_anterior' => '1',
                    'recenseamento_militar'      => '1',
                    'nome_emergencia'            => 'Elisio Leonardo',
                    'telemovel_emergencia'       => '826489374',
                    'parentesco_encarregado'     => 1,
                    'curso_id'                   => '257',
                    'unidade_organica_id'        => '257',
                    'numero_estudante'           => '201462262',
                    'aluno_via_admissao_id'      => '13',
                    'ano_ingresso'               => '2014'
                ],
                'Entidade'              => [
                    'apelido'              => 'Massamba',
                    'nomes'                => 'Sandra Fazenete Picardo',
                    'genero_id'            => '1',
                    'data_nascimento'      => '2014-09-15',
                    'estado_civil'         => '3',
                    'nome_pai'             => 'Teste',
                    'nome_mae'             => 'Yeste',
                    'naturalidade'         => 'Teste',
                    'pais_nascimento'      => '152',
                    'provincia_nascimento' => '9',
                    'cidade_nascimento'    => '111',
                    'name'                 => 'Sandra Fazenete Picardo Massamba'
                ],
                'Candidatura'           => [
                    'nome_faculdade' => 'Faculdade de Ciencias',
                    'nome_curso'     => 'Mestrado em Recursos HÃ­dricos e Geohidrologia'
                ],
                'AlunoNivelMedio'       => [
                    'EscolaNivelMedio'      => [
                        'pais_id'      => '152',
                        'provincia_id' => '',
                        'distrito_id'  => ''
                    ],
                    'escola_nivel_medio_id' => '4',
                    'nova_escola_anterior'  => '',
                    'ano_conclusao'         => '328798',
                    'nota_final'            => '12'
                ],
                'EntidadeContacto'      => [
                    (int)11 => '152',
                    (int)10 => '',
                    (int)9  => '',
                    (int)6  => '',
                    (int)5  => '',
                    (int)7  => '',
                    (int)8  => '',
                    (int)2  => '',
                    (int)1  => ''
                ],
                'EntidadeIdentificacao' => [
                    'documento_identificacao_id' => '4',
                    'numero'                     => '',
                    'local_emissao'              => '',
                    'data_emissao'               => '',
                    'data_validade'              => ''
                ],
                'Dados'                 => [
                    'user_id'          => '42646',
                    'numero_candidato' => '36726'
                ]
            ];

            $matriculado = $this->Aluno->MatriculaNovoIngresso($data);
            $this->assertTrue($matriculado);
        }

        /**
         * testMudaCurso method
         *
         * @return void
         */
        public function testMudaCurso()
        {
            $this->markTestIncomplete('testMudaCurso not implemented.');
        }

        /**
         * testConcluirNivel method
         *
         * @return void
         */
        public function testConcluirNivel()
        {
            $this->loadFixtures('Aluno', 'HistoricoCurso', 'AlunoEstado');
            $data = [
                'HistoricoCurso' => [
                    'data_conclusao' => '2015-07-14',
                    'nota_final'     => '12',
                    'funcionario_id' => '26'
                ],
                'Aluno'          => [
                    'observacao' => '',
                    'aluno_id'   => '1',
                    'curso_id'   => '40',
                    'anexo_url'  => [
                        'name'     => '',
                        'type'     => '',
                        'tmp_name' => '',
                        'error'    => 4,
                        'size'     => 0,
                    ]
                ]
            ];
            $resultado = $this->Aluno->concluirNivel($data);
            $this->assertTrue($resultado);


        }

        /**
         * testGetAlunosSemCertificado method
         *
         * @return void
         */
        public function testGetAlunosSemCertificado()
        {
            $this->markTestIncomplete('testGetAlunosSemCertificado not implemented.');
        }

        public function testUpdateAluno()
        {
            $data = [
                'Entidade'              => [
                    'genero_id'            => '2',
                    'data_nascimento'      => '1991-09-20',
                    'estado_civil'         => '1',
                    'nome_pai'             => 'António Dos Santos Matoa',
                    'nome_mae'             => 'Carla Marisa Tavares Da Silva Matos',
                    'naturalidade'         => '',
                    'pais_nascimento'      => '152',
                    'provincia_nascimento' => '',
                    'cidade_nascimento'    => ''
                ],
                'EntidadeContacto'      => [
                    (int)11 => '',
                    (int)10 => '',
                    (int)9  => '',
                    (int)6  => '',
                    (int)5  => '',
                    (int)7  => '',
                    (int)8  => '',
                    (int)2  => '826659090',
                    (int)1  => 'elisio.leonardo.teste@elisio.com'
                ],
                'Aluno'                 => [
                    'nome_emergencia'        => '',
                    'telemovel_emergencias'  => '',
                    'parentesco_encarregado' => '',
                    'aluno_id'               => 1
                ],
                'EntidadeIdentificacao' => [
                    'documento_identificacao_id' => '',
                    'numero'                     => '',
                    'local_emissao'              => '',
                    'data_emissao'               => '',
                    'data_validade'              => ''
                ]
            ];

            $resultado = $this->Aluno->updateAluno($data);
            $this->Aluno->contain('Entidade');
            $aluno = $this->Aluno->findById(1);

            $this->assertEquals('elisio.leonardo.teste@elisio.com', $aluno['Entidade']['email']);

            $this->assertSame($resultado, true);
        }

    }
