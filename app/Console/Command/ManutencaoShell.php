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
        'Docente',
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
                    'user_id' => $user['User']['id'],
                    'group_id' => 2,
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
                    'user_id' => $user['User']['id'],
                    'group_id' => 4,
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
                    'user_id' => $user['User']['id'],
                    'group_id' => 2,
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
                    'Matricula.aluno_id' => $aluno['Aluno']['id'],
                    'Matricula.estado_matricula_id' => 1,
                ],
                'order' => 'AnoLectivo.ano DESC',
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
                            'aluno_id' => $aluno['Aluno']['id'],
                            'curso_id' => $aluno['Aluno']['curso_id'],
                            'plano_estudo_id' => $aluno['Aluno']['plano_estudo_id'],
                            'data' => $v . '-01-01',
                            'estado_matricula_id' => 1,
                            'user_id' => 1,
                            'ano_lectivo_id' => $k,
                            'tipo_matricula_id' => 2,

                        ],
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
                        'apelido' => $nomes['surname'],
                        'nomes' => 'firstname',
                        'telemovel' => $candidatoGraduacao['CandidatoGraduacao']['telemovel'],
                        'data_defesa' => $candidatoGraduacao['CandidatoGraduacao']['data_defesa'],
                        'media_defesa' => $candidatoGraduacao['CandidatoGraduacao']['media_defesa'],
                    ],
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
                        'nota_final' => 10,
                        'funcionario_id' => 1,
                    ],
                    'Aluno' => [
                        'observacao' => '',
                        'aluno_id' => $aluno['Aluno']['id'],
                        'curso_id' => $aluno['Aluno']['curso_id'],
                        'anexo_url' => [
                            'name' => '',
                            'type' => '',
                            'tmp_name' => '',
                            'error' => 4,
                            'size' => 0,
                        ],
                    ],
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

    public function ajustaAlunosCurso()
    {
        $alunos = $this->Aluno->find('all', ['conditions' => ['curso_id is null']]);
        foreach ($alunos as $aluno) {
            debug($aluno);
        }
    }

    public function ajustaInscricaoEconomia()
    {


        $cursos = $this->Curso->findAllByUnidadeOrganicaId(6);
        $cursoIds = Hash::extract($cursos, '{n}.Curso.id');
        $this->Inscricao->contain(['Turma' => ['PlanoEstudo']]);
        $inscricaos = $this->Inscricao->find('all',
            ['conditions' => ['Turma.ano_lectivo_id' => 32, 'Turma.curso_id' => $cursoIds]]);
        foreach ($inscricaos as $inscricao) {
            $disciplinaId = $inscricao['Turma']['disciplina_id'];
            if ($inscricao['Turma']['PlanoEstudo']['ano_criacao'] != 2012) {
                $this->out('Comecando ajuste da Inscricao');
                $planoEstudo2012 = $this->Curso->PlanoEstudo->findByCursoIdAndAnoCriacao($inscricao['Turma']['curso_id'],
                    2012);
                if (empty($planoEstudo2012)) {
                    debug($inscricao);
                    die(debug('Plano Estudo 2012'));
                }
                $turmaNova = $this->Inscricao->Turma->findByCursoIdAndDisciplinaIdAndPlanoEstudoId($inscricao['Turma']['curso_id'],
                    $disciplinaId, $planoEstudo2012['PlanoEstudo']['id']);
                if (empty($turmaNova)) {
                    $disciplinaPlanoEstudo = $this->Curso->PlanoEstudo->DisciplinaPlanoEstudo->findByPlanoEstudoIdAndDisciplinaId($planoEstudo2012['PlanoEstudo']['id'], $disciplinaId);
                    if (empty($disciplinaPlanoEstudo)) {
                        $disciplinaPlanoActual = $this->Curso->PlanoEstudo->DisciplinaPlanoEstudo->findByPlanoEstudoIdAndDisciplinaId($inscricao['Turma']['plano_estudo_id'], $disciplinaId);
                        if ($inscricao['Turma']['semestre_curricular'] == 1) {
                            $semestre_sequencial = $inscricao['Turma']['ano_curricular'] * ($inscricao['Turma']['semestre_curricular'] + 1) - 1;
                        }
                        if ($inscricao['Turma']['semestre_curricular'] == 2) {
                            $semestre_sequencial = $inscricao['Turma']['ano_curricular'] * $inscricao['Turma']['semestre_curricular'];
                        }
                        $arrayPlanoEstudo = [
                            'DisciplinaPlanoEstudo' => [
                                'plano_estudo_id' => $planoEstudo2012['PlanoEstudo']['id'],
                                'ano_curricular' => $inscricao['Turma']['ano_curricular'],
                                'semestre_curricular' => $inscricao['Turma']['semestre_curricular'],
                                'carga_total' => $disciplinaPlanoActual['DisciplinaPlanoEstudo']['carga_total'],
                                'creditos' => $disciplinaPlanoActual['DisciplinaPlanoEstudo']['creditos'],
                                'disciplina_id' => $disciplinaId,
                                'codigo' => null,
                                'ramo_id' => null,
                                'semestre_sequencial' => $semestre_sequencial,
                                'estado_objecto_id' => 1
                            ]
                        ];
                        $this->Curso->PlanoEstudo->DisciplinaPlanoEstudo->create();
                        if (!$this->Curso->PlanoEstudo->DisciplinaPlanoEstudo->save($arrayPlanoEstudo)) {
                            die(debug($this->Curso->PlanoEstudo->DisciplinaPlanoEstudo->validationErrors));
                        }
                        $disciplinaPlanoEstudo = $this->Curso->PlanoEstudo->DisciplinaPlanoEstudo->findByPlanoEstudoIdAndDisciplinaId($planoEstudo2012['PlanoEstudo']['id'], $disciplinaId);
                    }
                    $disciplina = $this->Disciplina->findById($disciplinaId);
                    $arrayTurma = [
                        'Turma' => [
                            'ano_lectivo_id' => $inscricao['Turma']['ano_lectivo_id'],
                            'plano_estudo_id' => $planoEstudo2012['PlanoEstudo']['id'],
                            'disciplina_id' => $disciplinaId,
                            'curso_id' => $inscricao['Turma']['curso_id'],
                            'estado_turma_id' => 1,
                            'codigo' => rand(10000, 100000),
                            'ano_curricular' => $inscricao['Turma']['ano_curricular'],
                            'semestre_curricular' => $inscricao['Turma']['semestre_curricular'],
                            'name' => $disciplina['Disciplina']['name'] . " - " . 2016 . " - " . $planoEstudo2012['PlanoEstudo']['name'],
                            'semestre_lectivo_id' => $inscricao['Turma']['semestre_lectivo_id'],
                            'unidade_organica_id' => $inscricao['Turma']['unidade_organica_id'],
                            'ramo_id' => $inscricao['Turma']['ramo_id']
                        ]
                    ];
                    $this->Inscricao->Turma->create();
                    if (!$this->Inscricao->Turma->save($arrayTurma)) {
                        die(debug($this->Inscricao->Turma->validationErrors));
                    }
                    $turmaNova = $this->Inscricao->Turma->findByCursoIdAndDisciplinaIdAndPlanoEstudoId($inscricao['Turma']['curso_id'],
                        $disciplinaId, $planoEstudo2012['PlanoEstudo']['id']);
                }

                $inscricaoExiste = $this->Inscricao->findByAlunoIdAndTurmaId($inscricao['Inscricao']['aluno_id'], $turmaNova['Turma']['id']);
                if (empty($inscricaoExiste)) {
                    $this->Inscricao->id = $inscricao['Inscricao']['id'];
                    $this->Inscricao->set('turma_id', $turmaNova['Turma']['id']);
                    try {
                        $this->Inscricao->save();
                    } catch (Exception $e) {

                        debug($this->Inscricao->getLog());
                        debug($this->Inscricao->validationErrors);
                        debug($inscricao);
                        debug($e->getMessage());
                        die();
                    }
                    $this->out('Turma Actualizada');
                }

            }
        }

    }


    public function removeTurmasVazias()
    {
        $turmas = $this->Turma->find('list');
        $total = count($turmas);
        foreach ($turmas as $turmaId => $turmaName) {
            $inscricao = $this->Inscricao->find('count', ['conditions' => ['Inscricao.turma_id' => $turmaId]]);
            if ($inscricao == 0) {
                $this->out('Removendo---' . $turmaName);
                $this->Turma->id = $turmaId;
                $this->Turma->delete($turmaId);
            } else {
                $this->Turma->id = $turmaId;
                $this->Turma->set('total_alunos', $inscricao);
                $this->Turma->save();
            }

            $this->out($total--);

        }
    }

    public function ajustaMudancaCursoInscricao()
    {
        $alunos = $this->Aluno->find('all');
        $total = 0;
        foreach ($alunos as $aluno) {
            $matricula = $this->Matricula->findByAlunoIdAndAnoLectivoId($aluno['Aluno']['id'], 32);
            if (empty($matricula)) {
                continue;
            }
            $cursoIdAluno = $aluno['Aluno']['curso_id'];
            $cursoIdMatricula = $matricula['Matricula']['curso_id'];
            if ($cursoIdAluno != $cursoIdMatricula) {
                $this->out($total++ . '----' . $cursoIdAluno . '-----------' . $cursoIdMatricula);
                $this->Matricula->id = $matricula['Matricula']['id'];
                $this->Matricula->set('curso_id', $cursoIdAluno);
                if (!$this->Matricula->save()) {
                    debug($this->Matricula->validationErrors);
                    die();
                }
            }
        }
    }

    public function ajustaPlanoEconomia()
    {
        $cursos = $this->Curso->find('all', ['conditions' => ['name LIKE' => '%Licenciatura%', 'unidade_organica_id' => 6]]);

        foreach ($cursos as $curso) {
            $this->Aluno->contain('Curso');
            $alunos = $this->Aluno->find('all', ['conditions' => ['curso_id' => $curso['Curso']['id'], 'estado_aluno_id' => [1, 11, 14]]]);
            foreach ($alunos as $aluno) {
                $planoEstudoId = $aluno['Aluno']['plano_estudo_id'];
                $planoEstudo = $this->PlanoEstudo->findById($planoEstudoId);
                if (empty($planoEstudo)) {
                    $planoEstudo = $this->PlanoEstudo->findByCursoId($aluno['Aluno']['curso_id']);
                    if (!empty($planoEstudo)) {
                        debug($planoEstudo);
                        die();
                    }

                } else
                    if ($planoEstudo['PlanoEstudo']['ano_criacao'] < 2012) {
                        $planoEstudo2012 = $this->PlanoEstudo->findByCursoIdAndAnoCriacao($aluno['Aluno']['curso_id'], 2012);
                        if (!empty($planoEstudo2012)) {
                            $this->out('Alterando---' . $aluno['Aluno']['codigo']);
                            $this->Aluno->id = $aluno['Aluno']['id'];
                            $this->Aluno->set('plano_estudo_id', $planoEstudo2012['PlanoEstudo']['id']);
                            $this->Aluno->save();

                            //Actualiza tambem o historico
                            $historico = $this->Aluno->HistoricoCurso->findByAlunoIdAndCursoId($aluno['Aluno']['id'], $aluno['Aluno']['curso_id']);
                            if ($historico) {
                                $this->Aluno->HistoricoCurso->id = $historico['HistoricoCurso']['id'];
                                $this->Aluno->HistoricoCurso->set('plano_estudo_id', $planoEstudo2012['PlanoEstudo']['id']);
                                $this->Aluno->HistoricoCurso->save();
                            }
                        }
                    }
            }

        }
    }



    public function actualizaEstudantesBiologia(){
        //Anterior 54 Novo 131

        $alunos = $this->Aluno->find('all',['conditions'=>['curso_id'=>54,'estado_aluno_id'=>1]]);
        foreach($alunos as $aluno){

            $data =  array(
                'Aluno' => array(
                    'numero_estudante_atribuido' => '',
                    'data_mudanca' => '2016-06-06',
                    'curso_id' => '131',
                    'observacao' => 'Correcção',
                    'aluno_id' => $aluno['Aluno']['id'],
                    'curso_antigo' => $aluno['Aluno']['curso_id'],
                    'anexo_url' => array(
                        'name' => '',
                        'type' => '',
                        'tmp_name' => '',
                        'error' => (int) 4,
                        'size' => (int) 0
                    ),
                    'user_id' => 1
                )
            );
            $this->Aluno->mudaCurso($data);
            $this->out($aluno['Aluno']['codigo']);
        }
    }

    public function ajustaInscricaoGeologia(){
        $alunos = $this->Aluno->find('all',['conditions'=>['curso_id'=>[53,238],'ano_ingresso'=>2016]]);
        foreach($alunos as $aluno){
            $inscricaos = $this->Inscricao->find('all',['conditions'=>['aluno_id'=>$aluno['Aluno']['id']]]);
            foreach($inscricaos as $inscricao){
                $this->Inscricao->id = $inscricao['Inscricao']['id'];
                $this->Inscricao->delete($inscricao['Inscricao']['id']);
            }
        }
    }





}
