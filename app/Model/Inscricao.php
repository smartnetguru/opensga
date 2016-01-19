<?php

    /**
     * OpenSGA - Sistema de Gestão Académica
     *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
     *
     *
     * @copyright       Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.1.0
     * @
     *
     * @property Aluno $Aluno
     * @property FinanceiroTransacao $FinanceiroTransacao
     *
     */
    class Inscricao extends AppModel
    {

        var $name = 'Inscricao';
        //The Associations below have been created with all possible keys, those that are not needed can be removed

        public $estadoInscricoesAbertas = [null, 1, 2, 3];

        public $validate = [
            'tipo_inscricao_id'      => [
                'TipoInscricaoNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'Create',
                    'message'  => 'O Tipo de Inscricao deve ser Definido'
                ]
            ],
            'estado_inscricao_id'    => [
                'EstadoInscricaoNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'Create',
                    'message'  => 'O Estado da Inscricao deve ser Definido'
                ]
            ],
            'turma_id'               => [
                'TurmaNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'Create',
                    'message'  => 'A Turma deve ser Definida'
                ]
            ],
            'turma_frequencia_id'    => [
                'TurmaFrequenciaNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'Create',
                    'message'  => 'A turma de frequencia deve ser Definida'
                ]
            ],
            'aluno_id'               => [
                'alunoIdNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'Create',
                    'message'  => 'O Aluno deve ser Definido'
                ]
            ],
            'nota_frequencia'        => [
                'NotaFrequenciaNotEmpty' => [
                    'rule'       => ['range', -0.1, 20.1],
                    'message'    => 'A nota de frequencia deve estar entre 0 e 20',
                    'allowEmpty' => true
                ]
            ],
            'nota_final'             => [
                'NotaFinalNotEmpty' => [
                    'rule'       => ['range', -0.1, 20.1],
                    'message'    => 'A nota final deve estar entre 0 e 20',
                    'allowEmpty' => true
                ]
            ],
            'turma_inscricao_id'     => [
                'TurmaInscricaoNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'Create',
                    'on'       => 'create',
                    'message'  => 'A turma onde o estudante escreveu deve ser Definida'
                ]
            ],
            'matricula_id'           => [
                'MatriculaIdtEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'Create',
                    'on'       => 'create',
                    'message'  => 'A turma onde o estudante escreveu deve ser Definida'
                ]
            ],
            'epoca_avaliacao_id',
            'data',
            'nota_exame_normal'      => [
                'NotaExameNormalNotEmpty' => [
                    'rule'       => ['range', -0.1, 20.1],
                    'message'    => 'A nota final deve estar entre 0 e 20',
                    'allowEmpty' => true
                ]
            ],
            'nota_exame_recorrencia' => [
                'NotaExameRecorrenciaNotEmpty' => [
                    'rule'       => ['range', -0.1, 20.1],
                    'message'    => 'A nota final deve estar entre 0 e 20',
                    'allowEmpty' => true
                ]
            ],


        ];
        var $belongsTo = [
            'Aluno'           => [
                'className'  => 'Aluno',
                'foreignKey' => 'Aluno_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Turma'           => [
                'className'  => 'Turma',
                'foreignKey' => 'turma_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'EstadoInscricao' => [
                'className'  => 'EstadoInscricao',
                'foreignKey' => 'estado_inscricao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'EpocaAvaliacao'  => [
                'className'  => 'EpocaAvaliacao',
                'foreignKey' => 'EpocaAvaliacao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Matricula'       => [
                'className'  => 'Matricula',
                'foreignKey' => 'matricula_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'TipoInscricao'   => [
                'className'  => 'TipoInscricao',
                'foreignKey' => 'tipo_inscricao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ]
        ];
        var $hasMany = [
            'Avaliacao' => [
                'className'    => 'Avaliacao',
                'foreignKey'   => 'inscricao_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ]
        ];

        public function cadastraNotasHistorico($data)
        {
            $dataSource = $this->getDataSource();
            $alunoId = $data['Inscricao']['aluno_id'];
            unset($data['Inscricao']['aluno_id']);

            foreach ($data['Inscricao'] as $disciplinaPlanoEstudoId => $inscricao) {


                if (isset($inscricao['gravar'])) {
                    if ($inscricao['gravar'] == 0) {
                        continue;
                    }
                }

                if (isset($inscricao['inscricao_id'])) {
                    $dadosInscricao = [
                        'Inscricao' => [
                            'nota_final'   => $inscricao['nota_final'],
                            'aluno_id'     => $alunoId,
                            'inscricao_id' => $inscricao['inscricao_id']
                        ]
                    ];
                    $resultado = $this->actualizaDadosInscricao($dadosInscricao);
                    if ($resultado !== true) {
                        return $resultado;
                    }
                } else {
                    //Criamos uma nova Inscricao
                    $dataSource->begin();
                    debug($inscricao);
                    debug($data);
                    $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->contain(['Disciplina', 'PlanoEstudo']);
                    $disciplinaPlanoEstudo = $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->findById($disciplinaPlanoEstudoId);
                    $anoLectivo = $this->Turma->AnoLectivo->findByAno($inscricao['ano_lectivo']);
                    $semestreLectivo = $this->Turma->SemestreLectivo->findByAnoLectivoIdAndSemestre($anoLectivo['AnoLectivo']['id'],
                        $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular']);
                    if (empty($semestreLectivo)) {
                        $arraySemestreLectivo = [
                            'SemestreLectivo' => [
                                'ano_lectivo_id' => $anoLectivo['AnoLectivo']['id'],
                                'semestre'       => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'],
                                'codigo'         => $anoLectivo['AnoLectivo']['id'] . '/' . $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular']
                            ]
                        ];
                        $this->Turma->SemestreLectivo->create();
                        if (!$this->Turma->SemestreLectivo->save($arraySemestreLectivo)) {
                            $dataSource->rollback();

                            return [false, $this->Turma->SemestreLectivo->validationErrors];

                        }
                        $semestreLectivoId = $this->Turma->SemestreLectivo->id;
                    } else {
                        $semestreLectivoId = $semestreLectivo['SemestreLectivo']['id'];
                    }
                    $turmaExiste = $this->Turma->find('first', [
                        'conditions' => [
                            'disciplina_id'       => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['disciplina_id'],
                            'plano_estudo_id'     => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['plano_estudo_id'],
                            'ano_curricular'      => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'],
                            'semestre_curricular' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'],
                            'ano_lectivo_id'      => $anoLectivo['AnoLectivo']['id']
                        ]
                    ]);
                    if (empty($turmaExiste)) {
                        //Criamos a Turma
                        $arrayNovaTurma = [
                            'Turma' => [
                                'ano_lectivo_id'      => $anoLectivo['AnoLectivo']['id'],
                                'curso_id'            => $disciplinaPlanoEstudo['PlanoEstudo']['curso_id'],
                                'plano_estudo_id'     => $disciplinaPlanoEstudo['PlanoEstudo']['id'],
                                'disciplina_id'       => $disciplinaPlanoEstudo['Disciplina']['id'],
                                'estado_turma_id'     => 1,
                                'ano_curricular'      => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'],
                                'semestre_curricular' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'],
                                'name'                => $disciplinaPlanoEstudo['Disciplina']['name'] . ' - ' . $inscricao['ano_lectivo'] . $disciplinaPlanoEstudo['PlanoEstudo']['name'],
                                'semestre_lectivo_id' => $semestreLectivoId,

                            ]
                        ];
                        $this->Turma->create();
                        if (!$this->Turma->save($arrayNovaTurma)) {
                            $dataSource->rollback();

                            return [false, $this->Turma->validationErrors];
                        }
                        $turmaId = $this->Turma->id;
                    } else {
                        $turmaId = $turmaExiste['Turma']['id'];
                    }
                    $matricula = $this->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($alunoId,
                        $anoLectivo['AnoLectivo']['id']);
                    if (empty($matricula)) {
                        //Matricula naquele ano Lectivo
                        $aluno = $this->Aluno->findById($alunoId);
                        if ($aluno['Aluno']['ano_ingresso'] == $inscricao['ano_lectivo']) {
                            $tipoMatriculaId = 1;
                        } else {
                            $tipoMatriculaId = 2;
                        }
                        $arrayMatricula = [
                            'Matricula' => [
                                'aluno_id'            => $alunoId,
                                'curso_id'            => $disciplinaPlanoEstudo['PlanoEstudo']['curso_id'],
                                'plano_estudo_id'     => $disciplinaPlanoEstudo['PlanoEstudo']['id'],
                                'data'                => $inscricao['ano_lectivo'] . '-01-01',
                                'estado_matricula_id' => 1,
                                'ano_lectivo_id'      => $anoLectivo['AnoLectivo']['id'],
                                'tipo_matricula_id'   => $tipoMatriculaId
                            ]
                        ];
                        $this->Matricula->create();
                        if (!$this->Matricula->save($arrayMatricula)) {
                            $dataSource->rollback();

                            return [false, $this->Matricula->validationErrors];
                        }
                        $matriculaId = $this->Matricula->id;
                    } else {
                        $matriculaId = $matricula['Matricula']['id'];
                    }
                    $arrayNovaInscricao = [
                        'Inscricao' => [
                            'aluno_id'            => $alunoId,
                            'turma_id'            => $turmaId,
                            'estado_inscricao_id' => 1,
                            'data'                => $inscricao['data'],
                            'tipo_inscricao_id'   => 1,
                            'matricula_id'        => $matriculaId,
                            'turma_inscricao_id'  => $turmaId,
                            'turma_frequencia_id' => $turmaId,

                        ]
                    ];
                    $this->create();
                    if (!$this->save($arrayNovaInscricao)) {
                        $dataSource->rollback();

                        return [false, $this->validationErrors];
                    }
                    $dadosInscricao = [
                        'Inscricao' => [
                            'nota_final'   => $inscricao['nota_final'],
                            'aluno_id'     => $alunoId,
                            'inscricao_id' => $this->id
                        ]
                    ];
                    $resultado = $this->actualizaDadosInscricao($dadosInscricao);
                    if ($resultado !== true) {
                        return $resultado;
                    }
                    $dataSource->commit();
                }

            }

            return true;

        }

        public function actualizaDadosInscricao($data)
        {
            $this->id = $data['Inscricao']['inscricao_id'];


            if ($data['Inscricao']['desistiu']) {
                $data['Inscricao']['estado_inscricao_id'] = 8;

            } elseif ($data['Inscricao']['anulou']) {
                $data['Inscricao']['estado_inscricao_id'] = 9;
            } //Se tiver nota final, entao a cadeira terminou
            elseif (!empty($data['Inscricao']['nota_final'])) {
                if ($data['Inscricao']['nota_final'] < 10) {
                    $data['Inscricao']['estado_inscricao_id'] = 10;
                } else {
                    $data['Inscricao']['estado_inscricao_id'] = 13;
                }

            } else {
                //Ainda ta fazer
                if (!empty($data['Inscricao']['nota_frequencia'])) {
                    if ($data['Inscricao']['nota_frequencia'] < 10) {
                        $data['Inscricao']['estado_inscricao_id'] = 7;
                    } elseif ($data['Inscricao']['nota_frequencia'] < 14) {
                        if (!empty($data['Inscricao']['nota_exame_normal'])) {
                            if ($data['Inscricao']['nota_exame_normal'] < 10) {
                                if (!empty($data['Inscricao']['nota_exame_recorrencia'])) {
                                    if ($data['Inscricao']['nota_exame_recorrencia'] < 10) {
                                        $data['Inscricao']['estado_inscricao_id'] = 12;
                                    } else {
                                        $data['Inscricao']['estado_inscricao_id'] = 6;
                                        $data['Inscricao']['nota_final'] = ($data['Inscricao']['nota_frequencia'] + $data['Inscricao']['nota_exame_recorrencia']) / 2;
                                    }
                                } else {
                                    $data['Inscricao']['estado_inscricao_id'] = 3;
                                }
                            } else {
                                $data['Inscricao']['estado_inscricao_id'] = 5;
                                $data['Inscricao']['nota_final'] = ($data['Inscricao']['nota_frequencia'] + $data['Inscricao']['nota_exame_normal']) / 2;
                            }
                        } else {
                            $data['Inscricao']['estado_inscricao_id'] = 2;
                        }
                    } else {
                        $data['Inscricao']['estado_inscricao_id'] = 4;
                        $data['Inscricao']['nota_final'] = $data['Inscricao']['nota_frequencia'];
                    }
                }

            }


            if ($this->save($data)) {
                return true;
            } else {

                return [false, $this->validationErrors];
            }


        }

        /**
         * Calcula os valores de pagamentos relativos a Inscricao, de acordo com as cadeiras e o tipo de inscricao
         * seleccionados
         *
         * @param type $data
         */
        public function calculaValoresInscricao($data)
        {


            $inscricao_normal = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(44);
            $inscricao_atraso = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(45);

            $mensalidade_atraso = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(30);

            debug($inscricao_normal);
            die(debug($data));
        }

        /**
         * Retorna a lista de todos os alunos que podem fazer inscricao
         * Podem fazer inscricao os alunos que tiverem a matricula activa
         *
         * @return array()
         */
        function findAllAlunos()
        {
            App::import('Model', 'Matricula');
            $matriculas = new Matricula;
            //$matriculas->recursive=-1;
            $alunos = $matriculas->find('all', ['conditions' => ['estado_matricula_id' => 1], 'order' => ['name ASC']]);
            $alunos2 = [];
            foreach ($alunos as $aluno) {
                $alunos2[$aluno['Aluno']['id']] = $aluno['Aluno']['name'];
            }

            return $alunos2;
        }

        /**
         * Retorna todas as inscricoes de uma determinada Turma
         *
         * @param $turmaId
         *
         * @return mixed
         */
        public function getAllByTurmaId($turmaId)
        {
            $this->Turma->Inscricao->contain([
                'EstadoInscricao',
                'Matricula' => [
                    'Aluno' => [
                        'Entidade' => [
                            'User'
                        ]
                    ]
                ],
                'Turma'     => [
                    'Curso' => [
                        'fields' => ['name']
                    ],
                    'Disciplina',
                    'Turno',
                    'AnoLectivo'
                ]
            ]);
            $resultado = $this->Turma->Inscricao->find('all', ['conditions' => ['turma_id' => $turmaId]]);
            $sorted = Hash::sort($resultado, '{n}.Matricula.Aluno.Entidade.apelido');

            return $sorted;


        }

        public function getAllCadeirasPendentesByAluno($alunoId)
        {
            $aluno = $this->Aluno->findById($alunoId);

            $this->contain([
                'Turma'

            ]);
            $cadeirasFeitas = $this->find('all',
                [
                    'conditions' => [
                        'Inscricao.estado_inscricao_id' => [4, 5, 6, 13],
                        'Inscricao.aluno_id'            => $alunoId,
                    ],
                    'fields'     => 'Turma.disciplina_id'
                ]);
            $disciplinasExcluir = Hash::extract($cadeirasFeitas, '{n}.Turma.disciplina_id');
            //Pega todas as cadeiras do plano
            $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->contain(['Disciplina']);
            $disciplinaPlanoEstudos = $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->find('all',
                [
                    'conditions' => [
                        'plano_estudo_id'   => $aluno['Aluno']['plano_estudo_id'],
                        'disciplina_id NOT' => $disciplinasExcluir
                    ],
                    'order'      => ['ano_curricular', 'semestre_curricular']
                ]);


            return $disciplinaPlanoEstudos;
        }

        public function getAllDisciplinasForInscricao($alunoId, $anoLectivoId = null)
        {
            if (!$anoLectivoId) {
                $anoLectivo = Configure::read('OpenSGA.ano_lectivo');
                $anoLectivo = $this->Turma->AnoLectivo->findByAno($anoLectivo);
                $anoLectivoId = $anoLectivo['AnoLectivo']['id'];
            }

            $this->Aluno->contain([
                'Matricula' => [
                    'conditions' => [
                        'ano_lectivo_id' => $anoLectivoId
                    ]
                ]
            ]);
            $aluno = $this->Aluno->findById($alunoId);
            $cadeirasInscritas = $this->getAllCadeirasInscritasByAlunoSemestre($alunoId);

            $disciplinasFeitas = $this->getAllInscricoesByAlunoAndEstado($alunoId, [4, 5, 6, 13]);
            $inscricaosExcluir = Hash::merge($cadeirasInscritas, $disciplinasFeitas);

            $disciplinasExcluir = Hash::extract($inscricaosExcluir, '{n}.Turma.disciplina_id');
            $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->contain([
                'Disciplina'
            ]);

            $disciplinaPlanoEstudo = $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->find('all', [
                'conditions' => [
                    'plano_estudo_id'   => $aluno['Matricula'][0]['plano_estudo_id'],
                    'Disciplina.id NOT' => $disciplinasExcluir
                ],
                'order'      => [
                    'ano_curricular',
                    'semestre_curricular'
                ]

            ]);

            return $disciplinaPlanoEstudo;
        }

        public function getAllDisciplinasForInscricaoByCurso($alunoId, $anoLectivoId = null)
        {
            if (!$anoLectivoId) {
                $anoLectivo = Configure::read('OpenSGA.ano_lectivo');
                $anoLectivo = $this->Turma->AnoLectivo->findByAno($anoLectivo);
                $anoLectivoId = $anoLectivo['AnoLectivo']['id'];
            }

            $this->Aluno->contain([
                'Matricula' => [
                    'conditions' => [
                        'ano_lectivo_id' => $anoLectivoId
                    ]
                ]
            ]);
            $aluno = $this->Aluno->findById($alunoId);
            $cadeirasInscritas = $this->getAllCadeirasInscritasByAlunoSemestre($alunoId);

            $disciplinasFeitas = $this->getAllInscricoesByAlunoAndEstado($alunoId, [4, 5, 6, 13]);
            $inscricaosExcluir = Hash::merge($cadeirasInscritas, $disciplinasFeitas);

            $disciplinasExcluir = Hash::extract($inscricaosExcluir, '{n}.Turma.disciplina_id');
            $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->contain([
                'Disciplina','PlanoEstudo'
            ]);


            $disciplinaPlanoEstudo = $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->find('all', [
                'conditions' => [
                    'PlanoEstudo.curso_id'   => $aluno['Aluno']['curso_id'],
                    'Disciplina.id NOT' => $disciplinasExcluir
                ],
                'order'      => [
                    'ano_curricular',
                    'semestre_curricular'
                ]

            ]);


            return $disciplinaPlanoEstudo;
        }

        /**
         * Devolve todas as cadeiras inscritas por um aluno num dado Semestre
         *
         * @param type $aluno_id
         * @param type $semestre_id
         */
        public function getAllCadeirasInscritasByAlunoSemestre($aluno_id, $semestre_id = null)
        {

            //Se o semestre nao for mencionado, usamos o semestre actual
            if ($semestre_id == null) {
                $semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');
            }

            $this->contain([
                'Turma'
            ]);
            $inscricaos = $this->find('all',
                ['conditions' => ['Inscricao.aluno_id' => $aluno_id, 'Turma.semestre_lectivo_id' => $semestre_id]]);

            return $inscricaos;
        }

        public function getAllInscricoesByAlunoAndEstado($alunoId, $estadoInscricao = null)
        {
            $this->Aluno->Inscricao->contain([
                    'Turma'     => [
                        'fields'     => [
                            'id',
                            'disciplina_id',
                            'ano_curricular',
                            'semestre_curricular'
                        ],
                        'Disciplina' => [
                            'fields' => ['id', 'name']
                        ]
                    ],
                    'Matricula' => [
                        'fields'     => ['id', 'ano_lectivo_id'],
                        'AnoLectivo' => [
                            'fields' => ['id', 'ano']
                        ]
                    ]
                ]
            );
            $conditions = ['Inscricao.aluno_id' => $alunoId];
            if ($estadoInscricao != null) {
                $conditions['Inscricao.estado_inscricao_id'] = $estadoInscricao;
            }
            $inscricoes = $this->find('all', ['conditions' => $conditions]);

            return $inscricoes;
        }

        public function getAllDisciplinasForInscricaoByPlanoEstudo($alunoId, $planoEstudoId, $anoLectivoId = null)
        {
            if (!$anoLectivoId) {
                $anoLectivo = Configure::read('OpenSGA.ano_lectivo');
                $anoLectivo = $this->Turma->AnoLectivo->findByAno($anoLectivo);
                $anoLectivoId = $anoLectivo['AnoLectivo']['id'];
            }

            $this->Aluno->contain([
                'Matricula' => [
                    'conditions' => [
                        'ano_lectivo_id' => $anoLectivoId
                    ]
                ]
            ]);
            $cadeirasInscritas = $this->getAllCadeirasInscritasByAlunoSemestre($alunoId);

            $disciplinasFeitas = $this->getAllInscricoesByAlunoAndEstado($alunoId, [4, 5, 6, 13]);
            $inscricaosExcluir = Hash::merge($cadeirasInscritas, $disciplinasFeitas);

            $disciplinasExcluir = Hash::extract($inscricaosExcluir, '{n}.Turma.disciplina_id');
            $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->contain([
                'Disciplina'
            ]);

            $disciplinaPlanoEstudo = $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->find('all', [
                'conditions' => [
                    'plano_estudo_id'   => $planoEstudoId,
                    'Disciplina.id NOT' => $disciplinasExcluir
                ],
                'order'      => [
                    'ano_curricular',
                    'semestre_curricular'
                ]

            ]);

            return $disciplinaPlanoEstudo;
        }

        public function getTotalInscricoesActivas($unidades_organicas = null, $ano_lectivo_id = null)
        {

            $conditions = [];
            $conditions['Inscricao.estado_inscricao_id'] = 1;
            if ($unidades_organicas) {
                $cursos = $this->Turma->Curso->getAllIdsByUnidadeOrganica($unidades_organicas);
                $conditions['Turma.curso_id'] = $cursos;
            }
            if ($ano_lectivo_id) {
                $conditions['Turma.ano_lectivo_id'] = $ano_lectivo_id;
            }

            $this->contain([
                'Turma'
            ]);

            return $this->find('count', ['conditions' => $conditions]);
        }

        //Actualiza a nota e o tipo de frequencia e altera o estado da inscricao

        public function inscreveAluno($data)
        {

            $dataSource = $this->getDataSource();
            //$dataSource->useNestedTransactions = true;
            $dataSource->begin();
            $this->FinanceiroTransacao = ClassRegistry::init('FinanceiroTransacao');
            $this->Aluno->contain([
                'PlanoEstudo'
            ]);
            $aluno = $this->Aluno->findById($data['aluno_id']);
            //Primeiro Realizamos o deposito
            if ($this->FinanceiroTransacao->processarDeposito($data)) {

                $conta = $this->Aluno->getContaByAlunoId($data['FinanceiroTransacao']['aluno_id']);

                foreach ($data['Disciplina'] as $disciplinaId) {
                    //Primeiro gravamos o pagamento ;)
                    if ($data['turmas_tipo'][$disciplinaId['id']] == 1) {
                        $tipo_pagamento_id = 35;
                        $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 35;
                        $valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
                    } else {
                        $tipo_pagamento_id = 36;
                        $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 36;
                        $valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
                    }

                    //Mas antes do Pagamento, a Transacao

                    $pagamentoInscricao = [
                        'aluno_id'                       => $data['FinanceiroTransacao']['aluno_id'],
                        'financeiro_conta_id'            => $conta['FinanceiroConta']['id'],
                        'valor'                          => $valor,
                        'data_pagamento'                 => date('Y-m-d'),
                        'financeiro_tipo_pagamento_id'   => $tipo_pagamento_id,
                        'data_orcamento'                 => date('Y-m-d'),
                        'financeiro_estado_pagamento_id' => 2,
                        'ano_lectivo_id'                 => Configure::read('OpenSGA.ano_lectivo_id'),
                        'data_emissao'                   => date('Y-m-d'),
                        'semestre_lectivo_id'            => Configure::read('OpenSGA.semestre_lectivo_id'),
                        'entidade_id'                    => $conta['FinanceiroConta']['entidade_id'],
                        'referencia_pagamento'           => $data['FinanceiroDeposito']['numero_comprovativo'],
                        'numero_comprovativo'            => $data['FinanceiroDeposito']['numero_comprovativo'],
                    ];

                    $pagamento_id = $this->FinanceiroTransacao->processarPagamento($pagamentoInscricao);
                    if ($pagamentoInscricao) {
                        $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->contain(['Disciplina', 'PlanoEstudo']);
                        $disciplinaPlanoEstudo = $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->findById($disciplinaId['id']);

                        $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
                        $anoLectivo = $this->Turma->AnoLectivo->findByAno($anoLectivoAno);
                        //Vamos verificar se a turma existe, e criar caso contrario
                        $turmaExisteConditions = [
                            'Turma.ano_lectivo_id'      => $anoLectivo['AnoLectivo']['id'],
                            'Turma.curso_id'            => $disciplinaPlanoEstudo['PlanoEstudo']['curso_id'],
                            'Turma.plano_estudo_id'     => $disciplinaPlanoEstudo['PlanoEstudo']['id'],
                            'Turma.disciplina_id'       => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['disciplina_id'],
                            'Turma.estado_turma_id'     => 1,
                            'Turma.ano_curricular'      => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'],
                            'Turma.semestre_curricular' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'],
                            'Turma.semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id')
                        ];
                        $turmaExiste = $this->Turma->find('first', [
                            'conditions' => $turmaExisteConditions
                        ]);


                        if (empty($turmaExiste)) {

                            $turma = [];
                            $turma['ano_lectivo_id'] = $anoLectivo['AnoLectivo']['id'];
                            $turma['ano_curricular'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'];
                            $turma['semestre_curricular'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'];
                            $turma['curso_id'] = $disciplinaPlanoEstudo['PlanoEstudo']['curso_id'];
                            $turma['escola_id'] = 1;
                            $turma['plano_estudo_id'] = $disciplinaPlanoEstudo['PlanoEstudo']['id'];
                            $turma['turno_id'] = null;
                            $turma['disciplina_id'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['disciplina_id'];
                            $turma['estado_turma_id'] = 1;
                            $turma['semestre_lectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
                            $nome = $disciplinaPlanoEstudo['Disciplina']['name'] . " - " . $disciplinaPlanoEstudo['PlanoEstudo']['name'];
                            $turma['name'] = $nome;

                            $turmas = ['Turma' => $turma];
                            $this->Aluno->Curso->Turma->create();
                            $this->Aluno->Curso->Turma->save($turmas);
                            $turmaId = $this->Aluno->Curso->Turma->id;
                        } else {
                            $turmaId = $turmaExiste['Turma']['id'];
                        }
                        $inscricaoExiste = $this->Aluno->Inscricao->find('first', [
                            'conditions' => [
                                'aluno_id'            => $aluno['Aluno']['id'],
                                'turma_id'            => $turmaId,
                                'estado_inscricao_id' => 1
                            ]
                        ]);
                        $inscricaoSave = [
                            'Inscricao' => [
                                'aluno_id'            => $data['aluno_id'],
                                'turma_id'            => $turmaId,
                                'turma_frequencia_id' => $turmaId,
                                'estado_inscricao_id' => 1,
                                'matricula_id'        => $data['matricula_id'],
                                'data'                => date('Y-m-d'),
                                'pagamento_id'        => $pagamento_id,
                                'tipo_inscricao_id'   => 1,
                                'turma_inscricao_id'  => $turmaId,
                            ]
                        ];
                        if (empty($inscricaoExiste)) {
                            if ($this->validaInscricao($inscricaoSave)) {
                                $this->create();
                                if (!$this->save($inscricaoSave)) {
                                    debug($this->validationErrors);
                                    $dataSource->rollback();

                                    return false;
                                }
                            } else {
                                debug('Erro Grave aqui');
                                $dataSource->rollback();

                                return false;
                            }

                        }


                    } else {
                        $dataSource->rollback();

                        return false;
                    }
                }

                //Chamamos o Metodo Gera Pagamentos, Para Gerar os pagamentos deste Aluno
                if ($this->FinanceiroTransacao->FinanceiroPagamento->gerarPagamentosByAluno($data['FinanceiroTransacao']['aluno_id'],
                    $data)
                ) {
                    $dataSource->commit();

                    return true;
                }
                //return $dataSource->commit();
            }


            $dataSource->rollback();
        }

        /**
         * Verifica se um aluno pode se inscrever na cadeira em questao
         */
        function validaInscricao($inscricao_data)
        {
            $this->recursive = -1;
            $turma = $this->find('first', [
                'conditions' => [
                    'turma_id'     => $inscricao_data['Inscricao']['turma_id'],
                    'aluno_id'     => $inscricao_data['Inscricao']['aluno_id'],
                    'matricula_id' => $inscricao_data['Inscricao']['matricula_id']
                ]
            ]);
            if (!$turma) {
                return true;
            }

            return false;
        }

        /**
         * Inscreve o Aluno numa Turma Existente
         * Como parametro recebe um array contendo O Aluno e a Turma
         *
         * @param $data
         *
         * @todo  Implementar bem isso
         * @fixme nao funciona essa funcao
         */
        public function inscreveAlunoNaTurma($data)
        {
            if (!isset($data['Inscricao']['turma_inscricao_id'])) {
                $data['Inscricao']['turma_inscricao_id'] = $data['Inscricao']['turma_id'];
            }
            if (!isset($data['Inscricao']['turma_frequencia_id'])) {
                $data['Inscricao']['turma_frequencia_id'] = $data['Inscricao']['turma_id'];
            }
            if (!isset($data['Inscricao']['matricula_id'])) {
                $this->Turma->id = $data['Inscricao']['turma_id'];
                $anoLectivoId = $this->Turma->field('ano_lectivo_id');
                $matricula = $this->Matricula->findByAlunoIdAndAnoLectivoId($data['Inscricao']['aluno_id'],
                    $anoLectivoId);
                if (empty($matricula)) {
                    return [false];
                } else {
                    $matriculaId = $matricula['Matricula']['id'];
                }
                $data['Inscricao']['matricula_id'] = $matriculaId;

                $data['Inscricao']['turma_frequencia_id'] = $data['Inscricao']['turma_id'];
            }

            $this->create();

            if ($this->save($data)) {
                $data['Inscricao']['inscricao_id'] = $this->id;
                if ($resultado = $this->actualizaDadosInscricao($data)) {
                    return true;
                } else {
                    return resultado;
                }
            } else {
                return [false, $this->validationErrors];
            }
        }

    }

?>