<?php

    ini_set('memory_limit', "2048M");
    ini_set('xdebug.max_nesting_level', 20000);
    App::uses('AuditableConfig', 'Auditable.Lib');

    /**
     * Class ManutencaoShell
     *
     * @property Aluno $Aluno
     */
    class ManutencaoShell extends AppShell
    {

        public $uses = [
            'Inscricao',
            'Turma',
            'Matricula',
            'Curso',
            'UnidadeOrganica',
            'Candidatura',
            'Aluno',
            'EstadoAluno',
            'PlanoEstudo',
            'Disciplina',
            'DisciplinaPlanoEstudo',
            'HistoricoCurso',
            'AnoLectivo',
            'AlumniCandidatoAlumni',
            'Requisicoes.RequisicoesPedido',
            'Entidade',
            'User',
            'SmsNotification',
            'Docente'
        ];


        //Exportar dados actualizados para tabela alunos e ou entidades

        public function actualiza_turmas_estudantes()
        {

            $this->Turma->contain('Curso');
            $turmas = $this->Turma->find('all', ['conditions' => []]);
            foreach ($turmas as $turma) {
                $inscricaos = $this->Inscricao->find('count',
                    ['conditions' => ['Inscricao.turma_id' => $turma['Turma']['id']]]);
                $this->Turma->id = $turma['Turma']['id'];
                $this->Turma->set('total_alunos', $inscricaos);
                $this->Turma->save();
                $this->out($turma['Turma']['name'] . '--------------------' . $inscricaos);

            }
        }

        public function ajustaUserGroup()
        {
            $users = $this->User->find('all');
            $total = count($users);
            foreach ($users as $user) {
                $this->out($total--);
                //funcionario
                $funcionario = $this->User->Entidade->Funcionario->findByUserId($user['User']['id']);
                if (!empty($funcionario)) {
                    $grupos['GroupsUser'] = [
                        'user_id'  => $user['User']['id'],
                        'group_id' => 2
                    ];
                    $grupoExiste = $this->User->GroupsUser->findByUserIdAndGroupId($user['User']['id'], 2);
                    if (empty($grupoExiste)) {
                        $this->out('Criando Funcionario');
                        $this->User->GroupsUser->create();
                        $this->User->GroupsUser->save($grupos);
                    }

                }
                //docente
                $entidade = $this->User->Entidade->findByUserId($user['User']['id']);
                $docente = $this->User->Entidade->Docente->findByEntidadeId($entidade['Entidade']['id']);
                if (!empty($docente)) {
                    $grupos['GroupsUser'] = [
                        'user_id'  => $user['User']['id'],
                        'group_id' => 4
                    ];
                    $grupoExiste = $this->User->GroupsUser->findByUserIdAndGroupId($user['User']['id'], 4);
                    if (empty($grupoExiste)) {
                        $this->out('Criando Docente');
                        $this->User->GroupsUser->create();
                        $this->User->GroupsUser->save($grupos);
                    }

                }
                //estudante
                $aluno = $this->User->Entidade->Aluno->findByUserId($user['User']['id']);
                if (!empty($aluno)) {
                    $grupos['GroupsUser'] = [
                        'user_id'  => $user['User']['id'],
                        'group_id' => 2
                    ];
                    $grupoExiste = $this->User->GroupsUser->findByUserIdAndGroupId($user['User']['id'], 2);
                    if (empty($grupoExiste)) {
                        $this->out('Criando Aluno');
                        $this->User->GroupsUser->create();
                        $this->User->GroupsUser->save($grupos);
                    }

                }
            }
        }

        public function ajusta_alunos_matriculas()
        {
            $alunos = $this->Aluno->find('all');
            $total = count($alunos);
            foreach ($alunos as $aluno) {
                $this->Aluno->Matricula->contain('AnoLectivo');
                $ultimaMatricula = $this->Aluno->Matricula->find('first', [
                    'conditions' => [
                        'Matricula.aluno_id'            => $aluno['Aluno']['id'],
                        'Matricula.estado_matricula_id' => 1
                    ],
                    'order'      => 'AnoLectivo.ano DESC'
                ]);
                $anoFim = $ultimaMatricula['AnoLectivo']['ano'];
                $anoInicio = $aluno['Aluno']['ano_ingresso'];

                $anoLectivos = $this->Aluno->Matricula->AnoLectivo->find('list',
                    ['conditions' => ['AnoLectivo.ano >' => $anoInicio, 'AnoLectivo.ano <' => $anoFim]]);
                foreach ($anoLectivos as $k => $v) {
                    $matriculaExiste = $this->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($aluno['Aluno']['id'], $k);
                    if (empty($matriculaExiste)) {
                        $arrayMatricula = [
                            'Matricula' => [
                                'aluno_id'            => $aluno['Aluno']['id'],
                                'curso_id'            => $aluno['Aluno']['curso_id'],
                                'plano_estudo_id'     => $aluno['Aluno']['plano_estudo_id'],
                                'data'                => $v . '-01-01',
                                'estado_matricula_id' => 1,
                                'user_id'             => 1,
                                'ano_lectivo_id'      => $k,
                                'tipo_matricula_id'   => 2,

                            ]
                        ];

                        $this->Aluno->Matricula->create();
                        if (!$this->Aluno->Matricula->save($arrayMatricula)) {
                            die(debug($this->Aluno->Matricula->validationErrors));
                        }
                    }
                }
                $total--;
                $this->out($total . '------------------------');
            }
        }


        public function graduacao()
        {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'graduacao.xlsx');

            $worksheet = $xls->getActiveSheet();
            $linha_actual = 2;


            foreach ($worksheet->getRowIterator() as $row) {


                $codigo = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                if ($codigo == '') {
                    break;
                }


                $nome = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $nomes = $this->Aluno->Entidade->User->splitName($nome);


                $aluno = $this->Aluno->findByCodigo($codigo);
                if (empty($aluno)) {
                    continue;
                }
                $candidatoGraduacao = $this->Aluno->CandidatoGraduacao->findByAlunoIdAndCerimoniaGraduacaoId($aluno['Aluno']['id'],
                    5);
                if (!empty($candidatoGraduacao)) {
                    $arrayDados = [
                        'CandidatoGraduacao' => [
                            'candidato_graduacao_id' => $candidatoGraduacao['CandidatoGraduacao']['id'],
                            'apelido'                => $nomes['surname'],
                            'nomes'                  => 'firstname',
                            'telemovel'              => $candidatoGraduacao['CandidatoGraduacao']['telemovel'],
                            'data_defesa'            => $candidatoGraduacao['CandidatoGraduacao']['data_defesa'],
                            'media_defesa'           => $candidatoGraduacao['CandidatoGraduacao']['media_defesa']
                        ]
                    ];

                    if (!$this->Aluno->CandidatoGraduacao->confirmaDados($arrayDados)) {
                        debug($arrayDados);
                        debug('falha');
                        die();
                    } else {
                        $this->out('Aluno Actualizado Graduacao---------------' . $codigo);
                    }
                } else {
                    $dataConclusaoNivel = [
                        'HistoricoCurso' => [
                            'data_conclusao' => date('Y-m-d'),
                            'nota_final'     => 10,
                            'funcionario_id' => 1
                        ],
                        'Aluno'          => [
                            'observacao' => '',
                            'aluno_id'   => $aluno['Aluno']['id'],
                            'curso_id'   => $aluno['Aluno']['curso_id'],
                            'anexo_url'  => [
                                'name'     => '',
                                'type'     => '',
                                'tmp_name' => '',
                                'error'    => 4,
                                'size'     => 0,
                            ]
                        ]
                    ];
                    if (!$this->Aluno->concluirNivel($dataConclusaoNivel)) {
                        debug($dataConclusaoNivel);
                        debug('falha 21');
                        die();
                    }
                }


                $linha_actual++;
            }
        }

        public function removeInscricaoSemTurma()
        {
            $inscricaos = $this->Inscricao->find('all');
            $total = count($inscricaos);
            foreach ($inscricaos as $inscricao) {
                $turma = $this->Turma->findById($inscricao['Inscricao']['turma_id']);
                if (empty($turma)) {
                    $this->out('Removendo');
                    $this->Inscricao->id = $inscricao['Inscricao']['id'];
                    $this->Inscricao->delete($inscricao['Inscricao']['id']);
                }
                $this->out($total--);
            }
        }

        public function ajustaAlunosCurso(){
            $alunos = $this->Aluno->find('all',['conditions'=>['curso_id is null']]);
            foreach($alunos as $aluno){
                debug($aluno);
            }
        }



    }
