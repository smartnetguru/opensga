<?php

    App::uses('AppModel', 'Model');
    App::uses('SessionComponent', 'Controller/Component');

    /**
     * Classe Model do Aluno
     *
     * @copyright       Copyright (C) 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link            http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.estudantes
     * @version         OpenSGA v 0.5.0
     * @since           OpenSGA v 0.1.0
     *
     * @property User $User
     * @property Matricula $Matricula
     * @property Inscricao $Inscricao
     * @property FinanceiroPagamento $FinanceiroPagamento
     * @property Curso $Curso
     * @property HistoricoCurso $HistoricoCurso
     * @property Entidade $Entidade
     *
     *
     */
    class Aluno extends AppModel
    {

        public $hasOne = [
            'AlunoNivelMedio' => [
                'className' => 'AlunoNivelMedio',
                'dependent' => true
            ]
        ];
        public $belongsTo = [
            'AlunoViaAdmissao' => [
                'className'  => 'AlunoViaAdmissao',
                'foreignKey' => 'aluno_via_admissao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'User'             => [
                'className'  => 'User',
                'foreignKey' => 'user_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Entidade'         => [
                'className'  => 'Entidade',
                'foreignKey' => 'entidade_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Curso'            => [
                'className'  => 'Curso',
                'foreignKey' => 'curso_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'AreaTrabalho'     => [
                'className'  => 'AreaTrabalho',
                'foreignKey' => 'area_trabalho_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'EstadoAluno'      => [
                'className'  => 'EstadoAluno',
                'foreignKey' => 'estado_aluno_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'GrauParentesco'   => [
                'className'  => 'GrauParentesco',
                'foreignKey' => 'parentesco_encarregado',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'PlanoEstudo'      => [
                'className'  => 'PlanoEstudo',
                'foreignKey' => 'plano_estudo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Candidatura'      => [
                'className'  => 'Candidatura',
                'foreignKey' => 'numero_candidato',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
        ];
        public $hasMany = [
            'Avaliacao'           => [
                'className'    => 'Avaliacao',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'Matricula'           => [
                'className'    => 'Matricula',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => 'data',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'Inscricao'           => [
                'className'    => 'Inscricao',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'FinanceiroPagamento' => [
                'className'    => 'FinanceiroPagamento',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'RequisicoesPedido'   => [
                'className'    => 'Requisicoes.RequisicoesPedido',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'HistoricoCurso'      => [
                'className'    => 'HistoricoCurso',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'MudancaCurso'        => [
                'className'    => 'MudancaCurso',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'AlunoEstado'         => [
                'className'    => 'AlunoEstado',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'HistoricoCurso'      => [
                'className'    => 'HistoricoCurso',
                'foreignKey'   => 'aluno_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'CandidatoGraduacao'  => [
                'className'    => 'CandidatoGraduacao',
                'foreignKey'   => 'aluno_id',
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
        public $validate = [
            'curso_id'      => [
                'loginRule-3' => [
                    'rule'    => 'notBlank',
                    'on'      => 'create',
                    'message' => 'O curso é de preenchimento obrigatorio'
                ]
            ],
            'codigo'        => [
                'codigoRule-1' => [
                    'rule'    => 'isUnique',
                    'on'      => 'create',
                    'message' => 'Não podem existir dois estudantes com mesmo código'
                ],
                'codigoRule-2' => [
                    'rule'    => 'notBlank',
                    'on'      => 'create',
                    'message' => 'Todo estudante deve ter um código atribuido'
                ]
            ],
            'data_ingresso' => [
                'dataIngressoDate' => [
                    'rule'    => 'date',
                    'message' => 'A data de Ingresso deve ser uma data valida'
                ]
            ],
            'ano_ingresso'  => [
                'AnoIngressoNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'A data de Ingresso deve ser uma data valida'
                ]
            ],

        ];
        public $virtualFields = [];

        public function actualizaContactos($data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();

            $this->id = $data['Aluno']['aluno_id'];
            $this->set('nome_emergencia', $data['Aluno']['nome_emergencia']);
            $this->set('telemovel_emergencia', $data['Aluno']['telemovel_emergencia']);
            $this->set('parentesco_encarregado', $data['Aluno']['parentesco_encarregado']);
            $this->save();

            if ($this->Entidade->EntidadeContacto->actualizaContactos($data)) {
                return $dataSource->commit();
            }

            return $dataSource->rollback();
        }

        /**
         * @param PHPExcel_Worksheet $worksheet
         * Actualiza os estudantes que teem matricula condicional.
         *
         * Recebe como parametro um ficheiro Excel contendo os dados a actualizar:
         * A-Certificado
         * B-SMO
         * C-Numero de Estudante
         * I - Data
         *
         */
        public function actualizaMatriculaCondicionalFromFile(PHPExcel_Worksheet $worksheet)
        {
            $linha_actual = 2;
            $naoCobertos = 0;
            foreach ($worksheet->getRowIterator() as $row) {

                $numero_estudante = $worksheet->getCell('C' . $linha_actual)->getValue();
                if ($numero_estudante == '') {
                    break;
                }
                $this->contain('AlunoEstado');
                $aluno = $this->findByCodigo($numero_estudante);
                $datasource = $this->getDataSource();
                $datasource->begin();
                $certificado = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $smo = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $motivoEstadoAlunoId = $aluno['AlunoEstado']['0']['motivo_estado_aluno_id'];
                if ($motivoEstadoAlunoId == null) {
                    if ($aluno['Aluno']['estado_aluno_id'] != 1) {
                        debug('problemas');
                        debug($numero_estudante);
                        debug($aluno);
                    }
                } elseif ($certificado != '' && ($motivoEstadoAlunoId == 1 || $motivoEstadoAlunoId == 6)) {
                    $array_estado = [
                        'AlunoEstado' => [
                            'aluno_id'               => $aluno['Aluno']['id'],
                            'estado_anterior'        => $aluno['Aluno']['estado_aluno_id'],
                            'estado_actual'          => 1,
                            'motivo_estado_aluno_id' => 15,
                            'observacao'             => "Entregou Certificado",
                            'data_mudanca'           => date('Y-m-d'),
                            // 'anexo_url'=>$data['anexo_url'],
                            'funcionario_id'         => 1
                        ]
                    ];


                    $this->AlunoEstado->create();
                    $this->AlunoEstado->save($array_estado);

                    $this->id = $aluno['Aluno']['id'];
                    $this->set('estado_aluno_id', 1);
                    $this->set('estado_entidade_id', 1);
                    $this->save();
                } elseif ($certificado != '' && $motivoEstadoAlunoId == 22) {
                    if ($smo != '') {
                        $array_estado = [
                            'AlunoEstado' => [
                                'aluno_id'               => $aluno['Aluno']['id'],
                                'estado_anterior'        => $aluno['Aluno']['estado_aluno_id'],
                                'estado_actual'          => 1,
                                'motivo_estado_aluno_id' => 15,
                                'observacao'             => "Entregou Certificado e Servico Militar",
                                'data_mudanca'           => date('Y-m-d'),
                                // 'anexo_url'=>$data['anexo_url'],
                                'funcionario_id'         => 1
                            ]
                        ];


                        $this->AlunoEstado->create();
                        $this->AlunoEstado->save($array_estado);

                        $this->id = $aluno['Aluno']['id'];
                        $this->set('estado_aluno_id', 1);
                        $this->set('estado_entidade_id', 1);
                        $this->save();
                    }
                } elseif ($certificado == '' && $motivoEstadoAlunoId == 22) {
                    if ($smo != '') {
                        $array_estado = [
                            'AlunoEstado' => [
                                'aluno_id'               => $aluno['Aluno']['id'],
                                'estado_anterior'        => $aluno['Aluno']['estado_aluno_id'],
                                'estado_actual'          => 1,
                                'motivo_estado_aluno_id' => 15,
                                'observacao'             => "Entregou Certificado",
                                'data_mudanca'           => date('Y-m-d'),
                                // 'anexo_url'=>$data['anexo_url'],
                                'funcionariod_id'        => 1
                            ]
                        ];


                        $this->AlunoEstado->create();
                        $this->AlunoEstado->save($array_estado);

                        $this->id = $aluno['Aluno']['id'];
                        $this->set('estado_aluno_id', 1);
                        $this->set('estado_entidade_id', 1);
                        $this->save();
                    }
                } elseif ($smo != '' && $motivoEstadoAlunoId == 21) {
                    $array_estado = [
                        'AlunoEstado' => [
                            'aluno_id'               => $aluno['Aluno']['id'],
                            'estado_anterior'        => $aluno['Aluno']['estado_aluno_id'],
                            'estado_actual'          => 1,
                            'motivo_estado_aluno_id' => 15,
                            'observacao'             => "Entregou Certificado",
                            'data_mudanca'           => date('Y-m-d'),
                            // 'anexo_url'=>$data['anexo_url'],
                            'funcionario_id'         => 1
                        ]
                    ];


                    $this->AlunoEstado->create();
                    $this->AlunoEstado->save($array_estado);

                    $this->id = $aluno['Aluno']['id'];
                    $this->set('estado_aluno_id', 1);
                    $this->set('estado_entidade_id', 1);
                    $this->save();
                } elseif ($smo == '' && $certificado == '') {

                } else {
                    $naoCobertos++;
                }


                $datasource->commit();

                debug($linha_actual . ' --------- ' . $numero_estudante);
                $linha_actual++;
            }

            return true;
        }

        /**
         * Regista os dados do Aluno no Sistema e faz a primeira matricula
         *
         * @param array $data
         *
         * @return type
         */
        public function cadastraAluno(array $data)
        {

            $dataSource = $this->getDataSource();
            $dataSource->begin();

            $data_matricula = [];
            if ($data['Aluno']['numero_estudante'] == '') {
                $data['Aluno']['codigo'] = $this->geraCodigo();
            } else {
                if ($data['Aluno']['codigo'] == '' || $data['Aluno']['codigo'] == null) {
                    $data['Aluno']['codigo'] = $data['Aluno']['numero_estudante'];
                }
            }

            if (!isset($data['Entidade']['name'])) {
                $data['Entidade']['name'] = $data['Entidade']['nomes'] . " " . $data['Entidade']['apelido'];
            }

            //Grava os dados do Usuario
            $this->User->create();
            if (!isset($data['User']['username']) || $data['User']['username'] == '') {
                $data['User']['username'] = $this->User->geraEmailUem($data['Entidade']['apelido'],
                    $data['Entidade']['nomes']);
            }
            if (!isset($data['User']['password']) || $data['User']['password'] == '') {
                $data['User']['password'] = Security::hash($data['Aluno']['codigo'], 'blowfish');
            }

            $data['User']['codigocartao'] = $data['Aluno']['codigo'];
            $data['User']['name'] = $data['Entidade']['name'];
            $data['User']['group_id'] = 3;
            $data['User']['verificar_permissoes'] = 1;
            $data['User']['estado_email'] = 0;
            $data['User']['estado_objecto_id'] = 1;
            $data['User']['timezone'] = 'Africa/Maputo';
            if ($this->User->save($data)) {
                //Grava os dados da Entidade
                //Grava os dados da Entidade
                $data['Entidade']['user_id'] = $this->User->getLastInsertID();
                $data['Entidade']['telemovel'] = $data['EntidadeContacto'][2];
                $data['Entidade']['documento_identificacao_id'] = $data['EntidadeIdentificacao']['documento_identificacao_id'];
                $data['Entidade']['documento_identificacao_numero'] = $data['EntidadeIdentificacao']['numero'];
                if (isset($data['EntidadeContacto'][9])) {
                    $data['Entidade']['cidade_morada'] = $data['EntidadeContacto'][9];
                }
                if (isset($data['EntidadeContacto'][8])) {
                    $data['Entidade']['caixa_postal_morada'] = $data['EntidadeContacto'][8];
                }


                if (empty($data['Entidade']['email'])) {
                    $data['Entidade']['email'] = $data['User']['username'];
                }

                if (!empty($data['EntidadeIdentificacao']['data_emissao'])) {
                    $data['Entidade']['documento_identificacao_data_emissao'] = $data['EntidadeIdentificacao']['data_emissao'];
                }
                if (!empty($data['EntidadeIdentificacao']['local_emissao'])) {
                    $data['Entidade']['documento_identificacao_local_emissao'] = $data['EntidadeIdentificacao']['local_emissao'];
                }

                $data['Entidade']['estado_entidade_id'] = 1;


                if (!isset($data['Entidade']['nacionalidade']) && isset($data['Entidade']['pais_nascimento'])) {
                    $data['Entidade']['nacionalidade'] = $data['Entidade']['pais_nascimento'];
                }
                $this->Entidade->create();
                if ($this->Entidade->save($data)) {

                    //Grava os dados do Aluno
                    $data['Aluno']['user_id'] = $this->User->getLastInsertID();
                    $data['Aluno']['entidade_id'] = $this->Entidade->getLastInsertID();
                    $data['Aluno']['data_ingresso'] = $data['Aluno']['data_matricula'];
                    $data['Aluno']['curso_ingresso_id'] = $data['Aluno']['curso_id'];

                    $planoEstudoId = $this->Curso->getPlanoEstudoIdRecente($data['Aluno']['curso_id']);
                    if (!empty($planoEstudoId)) {
                        $data['Aluno']['plano_estudo_id'] = $planoEstudoId;
                    }
                    if (empty($data['Aluno']['estado_aluno_id'])) {
                        $data['Aluno']['estado_aluno_id'] = 1;
                    }


                    $this->create();
                    if ($this->save($data)) {
                        //O estado do aluno tem que ver com o certificado e com o recenseamento militar
                        $certificado = $data['Aluno']['certificado_nivel_anterior'];
                        $recenseamento = $data['Aluno']['recenseamento_militar'];
                        if ($certificado == 1 && $recenseamento == 1) {
                            $data['Aluno']['estado_aluno_id'] = 1;
                        } elseif ($certificado == 2 && $recenseamento == 1) {
                            $data['Aluno']['estado_aluno_id'] = 11;
                            $array_estado = [
                                'AlunoEstado' => [
                                    'aluno_id'               => $this->id,
                                    'estado_anterior'        => 1,
                                    'estado_actual'          => 11,
                                    'motivo_estado_aluno_id' => 1,
                                    'data_mudanca'           => date('Y-m-d H:i:s')
                                ]
                            ];

                            $this->AlunoEstado->create();
                            $this->AlunoEstado->save($array_estado);
                            $this->set('estado_aluno_id', 11);
                            $this->save();
                        } elseif ($certificado == 1 && $recenseamento == 2) {
                            $data['Aluno']['estado_aluno_id'] = 11;
                            $array_estado = [
                                'AlunoEstado' => [
                                    'aluno_id'               => $this->id,
                                    'estado_anterior'        => 1,
                                    'estado_actual'          => 11,
                                    'motivo_estado_aluno_id' => 21,
                                    'data_mudanca'           => date('Y-m-d H:i:s')
                                ]
                            ];

                            $this->AlunoEstado->create();
                            $this->AlunoEstado->save($array_estado);
                            $this->set('estado_aluno_id', 11);
                            $this->save();
                        } else {
                            $data['Aluno']['estado_aluno_id'] = 11;
                            $array_estado = [
                                'AlunoEstado' => [
                                    'aluno_id'               => $this->id,
                                    'estado_anterior'        => 1,
                                    'estado_actual'          => 11,
                                    'motivo_estado_aluno_id' => 22,
                                    'data_mudanca'           => date('Y-m-d H:i:s')
                                ]
                            ];

                            $this->AlunoEstado->create();
                            $this->AlunoEstado->save($array_estado);
                            $this->set('estado_aluno_id', 11);
                            $this->save();
                        }

                        //Grava os dados de Identificacao

                        $identificacao = ['EntidadeIdentificacao' => $data['EntidadeIdentificacao']];
                        $identificacao['EntidadeIdentificacao']['entidade_id'] = $this->Entidade->getLastInsertID();
                        $identificacao['EntidadeIdentificacao']['estado_objecto_id'] = 1;

                        $this->Entidade->EntidadeIdentificacao->create();
                        $this->Entidade->EntidadeIdentificacao->save($identificacao);


                        //Grava os dados de Morada e Contactos

                        $contactos = $data['EntidadeContacto'];

                        foreach ($contactos as $k => $v) {
                            $this->Entidade->EntidadeContacto->create();
                            $this->Entidade->EntidadeContacto->save(
                                [
                                    'EntidadeContacto' => [
                                        'entidade_id'       => $this->Entidade->getLastInsertID(),
                                        'tipo_contacto_id'  => $k,
                                        'valor'             => $v,
                                        'estado_objecto_id' => 1
                                    ]
                                ]
                            );
                        }


                        if (isset($data['AlunoNivelMedio'])) {
                            $aluno_nivel_medio = [
                                'AlunoNivelMedio' => $data['AlunoNivelMedio']
                            ];
                            //Grava os dados do Nivel Medio
                            if ($data['AlunoNivelMedio']['nova_escola_anterior'] != '') {
                                $array_nova_escola = [
                                    'name'         => $data['AlunoNivelMedio']['nova_escola_anterior'],
                                    'provincia_id' => $data['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id'],
                                    'distrito_id'  => $data['AlunoNivelMedio']['EscolaNivelMedio']['distrito_id']
                                ];
                                if (!empty($data['AlunoNivelMedio']['EscolaNivelMedio']['pais_id'])) {
                                    $array_nova_escola['pais_id'] = $data['AlunoNivelMedio']['EscolaNivelMedio']['pais_id'];
                                } else {
                                    $array_nova_escola['pais_id'] = $this->Entidade->ProvinciaNascimento->getPaisIdByProvinciaId($data['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id']);
                                }


                                $this->AlunoNivelMedio->EscolaNivelMedio->create();
                                $this->AlunoNivelMedio->EscolaNivelMedio->save(['EscolaNivelMedio' => $array_nova_escola]);
                                $aluno_nivel_medio['AlunoNivelMedio']['escola_nivel_medio_id'] = $this->AlunoNivelMedio->EscolaNivelMedio->id;
                            }


                            $aluno_nivel_medio['AlunoNivelMedio']['provincia_id'] = $data['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id'];
                            $aluno_nivel_medio['AlunoNivelMedio']['aluno_id'] = $this->id;

                            $this->AlunoNivelMedio->create();
                            $this->AlunoNivelMedio->save($aluno_nivel_medio);
                        }


                        $anoLectivo = $this->Matricula->AnoLectivo->findByAno($data['Aluno']['ano_ingresso']);
                        if (empty($anoLectivo)) {
                            $arrayAnoLectivo = [
                                'AnoLectivo' => [
                                    'ano' => $data['Aluno']['ano_ingresso']
                                ]
                            ];
                            $anoLectivoId = $this->Matricula->AnoLectivo->criaAnoLectivo($arrayAnoLectivo);
                        } else {
                            $anoLectivoId = $anoLectivo['AnoLectivo']['id'];
                        }
                        /**
                         * @fixme desactivamos temporariamente o o turno e o regime e o nivel
                         */
                        //Pega os dados da matricula e realiza a matricula
                        $data_matricula['aluno_id'] = $this->getInsertID();
                        $data_matricula['curso_id'] = $data['Aluno']['curso_id'];
                        $data_matricula['plano_estudo_id'] = $planoEstudoId;
                        $data_matricula['estado_matricula_id'] = 1;
                        $data_matricula['data'] = $data['Aluno']['data_matricula'];
                        $data_matricula['user_id'] = $data['Matricula']['user_id'];
                        $data_matricula['ano_lectivo_id'] = $anoLectivoId;
                        $data_matricula['tipo_matricula_id'] = 1;


                        $matricula_gravar = ['Matricula' => $data_matricula];
                        $this->Matricula->create();
                        if ($this->Matricula->save($matricula_gravar)) {

                            $historico_array = [
                                'aluno_id'             => $this->id,
                                'curso_id'             => $data['Aluno']['curso_id'],
                                'ano_ingresso'         => $data['Aluno']['ano_ingresso'],
                                'ano_lectivo_ingresso' => Configure::read('OpenSGA.ano_lectivo_id')
                            ];
                            $this->HistoricoCurso->create();
                            $this->HistoricoCurso->save($historico_array);

                            $dataSource->commit();

                            return true;

                        }
                    }
                } else {
                    $dataSource->rollback();

                    return [false, $this->Entidade->validationErrors];

                }
            } else {
                $dataSource->rollback();

                return [false, $this->Entidade->User->validationErrors];

            }


        }

        function geraCodigo()
        {
            $ano = date('Y');
            $this->recursive = -1;
            $id = $this->find('count', [
                'conditions' => ['Aluno.codigo LIKE' => '%' . $ano . '%'],
                'order'      => ['Aluno.created DESC'],
                'fields'     => 'id'
            ]);
            $id_for = str_pad($id + 1, 4, "0", STR_PAD_LEFT);
            $codigo = $ano . $id_for;

            return $codigo;
        }

        public function concluirNivel($data)
        {

            $datasource = $this->getDataSource();
            $datasource->begin();
            if ($data['HistoricoCurso']['nota_final'] == '' || $data['HistoricoCurso']['data_conclusao'] == '') {
                return false;
            }
            $date = DateTime::createFromFormat("Y-m-d", $data['HistoricoCurso']['data_conclusao']);

            $data['HistoricoCurso']['ano_fim'] = $date->format("Y");

            $this->contain();
            $aluno = $this->findById($data['Aluno']['aluno_id']);

            $this->HistoricoCurso->contain();
            $historico_curso = $this->HistoricoCurso->find('first', [
                'conditions' => [
                    'aluno_id' => $data['Aluno']['aluno_id'],
                    'curso_id' => $data['Aluno']['curso_id'],
                    'ano_fim'  => null
                ]
            ]);
            if (empty($historico_curso)) {
                //Nao tem historico, vamos registrar novo


                $this->Matricula->AnoLectivo->contain();
                $ano_lectivo = $this->Matricula->AnoLectivo->findByAno($aluno['Aluno']['ano_ingresso']);
                $historico_array = [
                    'aluno_id'             => $aluno['Aluno']['id'],
                    'curso_id'             => $aluno['Aluno']['curso_id'],
                    'ano_ingresso'         => $aluno['Aluno']['ano_ingresso'],
                    'ano_lectivo_ingresso' => $ano_lectivo['AnoLectivo']['id']
                ];
                $this->HistoricoCurso->create();
                $this->HistoricoCurso->save(['HistoricoCurso' => $historico_array]);
                $this->HistoricoCurso->contain();
                $historico_curso = $this->HistoricoCurso->find('first', [
                    'conditions' => [
                        'aluno_id' => $data['Aluno']['aluno_id'],
                        'curso_id' => $data['Aluno']['curso_id'],
                        'ano_fim'  => null
                    ]
                ]);
            }

            $this->HistoricoCurso->id = $historico_curso['HistoricoCurso']['id'];
            $this->HistoricoCurso->set('ano_fim', $data['HistoricoCurso']['ano_fim']);
            $this->HistoricoCurso->set('nota_final', $data['HistoricoCurso']['nota_final']);
            $this->HistoricoCurso->set('data_conclusao', $data['HistoricoCurso']['data_conclusao']);
            $this->HistoricoCurso->set('funcionario_id', $data['HistoricoCurso']['ano_fim']);
            $this->HistoricoCurso->save();

            $data_estado = [
                'aluno_id'               => $aluno['Aluno']['id'],
                'estado_anterior'        => $aluno['Aluno']['estado_aluno_id'],
                'estado_actual'          => 3,
                'motivo_estado_aluno_id' => 20,
                'observacao'             => $data['Aluno']['observacao'],
                'data_mudanca'           => $data['HistoricoCurso']['data_conclusao'],
                'anexo_url'              => $data['Aluno']['anexo_url'],
                'funcionario_id'         => $data['HistoricoCurso']['funcionario_id']
            ];
            $this->alteraStatus($data_estado);

            return $datasource->commit();
        }

        public function geraReferenciaRenovacao($alunoId = null)
        {
            $this->contain();
            $aluno = $this->findById($alunoId);
            $ano_ingresso = $aluno['Aluno']['ano_ingresso'];
            if ($ano_ingresso >= 2000 && $ano_ingresso <= 2007) {
                $referencia = substr($aluno['Aluno']['codigo'], 2);
            } elseif ($ano_ingresso > 2007) {
                $referencia = "0" . $aluno['Aluno']['codigo'];
            } else {
                $referencia = $aluno['Aluno']['codigo'];
            }

            $datasource = $this->getDatasource();
            $datasource->begin();
            $curso_turno = $this->Curso->CursosTurno->find('first',
                ['conditions' => ['curso_id' => $aluno['Aluno']['curso_id']]]);
            if ($curso_turno['CursosTurno']['turno_id'] == 1) {
                $transacao['financeiro_tipo_transacao_id'] = 2;
                $pagamento['tipo_pagamento_id'] = 37;
                $transacao['valor'] = 80;
                $referencia = $referencia . "02";
            } else {
                $transacao['financeiro_tipo_transacao_id'] = 2;
                $pagamento['tipo_pagamento_id'] = 38;
                $transacao['valor'] = 160;
                $referencia = $referencia . "03";
            }
            $this->id = $alunoId;
            $this->set('referencia_renovacao', $referencia);
            $this->save();
            $datasource->commit();

            return $referencia;

        }

        // function getAllTurmasCompletas

        public function getAllAlunosForAutenticidades($anoIngresso = null)
        {
            if ($anoIngresso == null) {
                $anoIngresso = Configure::read('OpenSGA.ano_lectivo');
            }
            $this->contain([
                'AlunoNivelMedio' => ['EscolaNivelMedio'],
                'Entidade'        => ['Genero', 'ProvinciaNascimento'],
                'Curso'           => ['UnidadeOrganica']
            ]);
            $alunos = $this->find('all', [
                'conditions' => ['Aluno.ano_ingresso' => $anoIngresso],
                'order'      => ['AlunoNivelMedio.escola_nivel_medio_id']
            ]);

            return $alunos;
        }

        /**
         * Retorna as cadeiras em que o aluno esta inscrito actualmente
         *
         * @return array com ID das disciplinas activas do aluno
         */
        public function getAllInscricoesActivas($aluno_id)
        {

            $this->Inscricao->contain('Turma');
            $inscricoes = $this->Inscricao->find('all', [
                'conditions' => ['Inscricao.estadoinscricao_id' => 1, 'Inscricao.aluno_id' => $aluno_id],
                'recursive'  => 0,
                'fields'     => ['Turma.disciplina_id']
            ]);

            $disciplinas = Hash::extract($inscricoes, '{n}.Turma.disciplina_id');

            return $disciplinas;
        }

        /**
         * Retorna todas as cadeiras que o aluno ja aprovou para a inscricao
         *
         * @return type
         */
        public function getAllInscricoesActivasAndAprovadasForInscricao($aluno_id)
        {
            $this->Inscricao->contain('Turma');
            $inscricoes = $this->Inscricao->find('all', [
                'conditions' => ['Inscricao.estadoinscricao_id' => [1, 2], 'Inscricao.aluno_id' => $aluno_id],
                'recursive'  => 0,
                'fields'     => ['Turma.disciplina_id', 'Turma.name']
            ]);


            $disciplinas = Hash::extract($inscricoes, '{n}.Turma.disciplina_id');

            return $disciplinas;
        }



        public function getEstudantesForaTempoEstudos($unidadeOrganicaId=null){
            $conditions = array();
            if($unidadeOrganicaId){
                $conditions['Curso.unidade_organica_id']=$unidadeOrganicaId;
            }

            $cursos = $this->Curso->find('list',['conditions'=>$conditions]);
            foreach($cursos as $curso){
                debug($curso);
            }
        }

        /**
         *Retorna todas as renovacoes pendentes para um aluno
         *
         */
        public function getAllMatriculasPendentes($alunoId, $matriculasFuturas = false)
        {
            $renovacoesFalta = $this->Matricula->getStatusRenovacao($alunoId, $matriculasFuturas);

            return $renovacoesFalta;
        }

        function getAllTurmasByAluno($aluno_id, $estado = 1)
        {
            App::import('Model', 'Turma');
            App::import('Model', 'Inscricao');
            App::import('Model', 'Matricula');

            $turma = new Turma;

            $plano_estudo = $this->query("Select plano_estudo_id from matriculas where aluno_id = {$aluno_id}");
            $turma->recursive = -1;
            $turmas = $turma->getAllTurmasByAluno($plano_estudo[0]['matriculas']['plano_estudo_id']);

            return $turmas;
        }

        /**
         * Funcao generica para retornar todas as turmas de um aluno com base no estado da turma
         *
         * @Todo Testar :-)
         */
        function getAllTurmasByEstado($aluno, $estado = 1)
        {
            App::import('Model', 'Turma');
            App::import('Model', 'Inscricao');
            App::import('Model', 'Matricula');

            $turma = new Turma;
            $inscricao = new Inscricao;
            $Matricula = new Matricula;

            $plano_estudo = $this->query("Select plano_estudo_id from matriculas where aluno_id = {$aluno}");
            $turma->recursive = -1;

            $turmas = $turma->getAllTurmasActivasByPlanoEstudo($plano_estudo[0]['matriculas']['plano_estudo_id']);

            return $turmas;
        }

        /**
         * Devolve todas as turmas que o aluno pode se inscrever, baseado nas cadeiras feitas e precedencias
         *
         * @Todo por enquanto as precedencias e cadeiras feitas nao sao processadas
         *
         *
         * @todo falta isso
         */
        function getAllTurmasForInscricao()
        {

        }

        public function getAllTurmasNormaisForInscricao($aluno_id)
        {


            //Primeiro, pegar a ultima matricula deste aluno, se nao for deste ano, mandar matricular
            if (!$matricula = $this->getMatriculaCorrente($aluno_id)) {
                return false;
            }

            $this->Inscricao->contain([
                'Turma'
            ]);
            $turmas_aprovadas = $this->Inscricao->find('all', ['conditions' => ['Inscricao.aluno_id' => $aluno_id]]);

            //$matricula -
            debug($turmas_aprovadas);
        }

        public function getMatriculaCorrente($aluno_id)
        {
            return $this->Matricula->find('first', [
                'conditions' => [
                    'Matricula.aluno_id'            => $aluno_id,
                    'Matricula.ano_lectivo_id'      => Configure::read('OpenSGA.ano_lectivo_id'),
                    'Matricula.estado_matricula_id' => 1
                ],
                'recursive'  => -1
            ]);
        }

        public function getAlunoForAction($alunoId)
        {
            $this->contain([
                'Entidade' => [
                    'Genero'
                ],
                'Curso'    => [
                    'UnidadeOrganica'
                ],
                'PlanoEstudo'
            ]);
            $aluno = $this->findById($alunoId);
            $faculdade = $this->Curso->getFaculdadeByCursoId($aluno['Aluno']['curso_id']);
            $aluno['Faculdade'] = $faculdade['UnidadeOrganica'];

            $isRegular = $this->isRegular($alunoId);

            if (count($isRegular) == 1 && $isRegular[0]['regular'] == true) {
                if ($isRegular[0]['estado'] == 1) {
                    $classeEstado = "alert alert-info";
                } else {
                    $classeEstado = "alert alert-success";
                }
            } else {
                $classeEstado = "alert alert-danger";
            }
            $aluno['isRegular'] = $isRegular;
            $aluno['classeEstado'] = $classeEstado;

            return $aluno;
        }

        /**
         * Verifica se um determinado aluno é regular. Para tal, basta verificar se todas as matriculas foram renovadas
         * ate ao presente ano, verificar a situacao da conclusao e o status na tabela alunos
         *
         * @param type $id_aluno
         *
         * @return array Um array contendo o status e o motivo
         */
        function isRegular($aluno_id)
        {
            $this->contain('EstadoAluno');
            $aluno = $this->findById($aluno_id);

            $this->AlunoEstado->contain('MotivoEstadoAluno');
            $aluno_estado = $this->AlunoEstado->find('first', [
                'conditions' => [
                    'aluno_id'      => $aluno['Aluno']['id'],
                    'estado_actual' => $aluno['Aluno']['estado_aluno_id']
                ],
                'order'      => 'data_mudanca DESC'
            ]);

            $irregularidades = [];
            if ($aluno['Aluno']['estado_aluno_id'] == 1) {
                $renovacoes = $this->Matricula->getStatusRenovacao($aluno_id);
                if (empty($renovacoes)) {
                    $irregularidades[] = ["estado" => 1, "mensagem" => 'Estudante Regular', "regular" => true];
                } else {
                    $string_retorno = __("Não renovou matricula nos seguintes anos: ");
                    foreach ($renovacoes as $renovacao) {
                        $string_retorno .= $renovacao['AnoLectivo']['ano'] . ", ";
                    }
                    $irregularidades[] = ["estado" => 2, "mensagem" => $string_retorno, "regular" => false];
                }
            } elseif ($aluno['Aluno']['estado_aluno_id'] == 3) {
                $renovacoes = $this->Matricula->getStatusRenovacao($aluno_id);
                if (empty($renovacoes)) {
                    $irregularidades[] = ["estado" => 3, "mensagem" => 'Concluiu o Nivel', "regular" => true];
                } else {
                    $string_retorno = __("Concluiu o nível, mas não renovou matricula nos seguintes anos: ");
                    foreach ($renovacoes as $renovacao) {
                        $string_retorno .= $renovacao['AnoLectivo']['ano'] . ", ";
                    }
                    $irregularidades[] = ["estado" => 4, "mensagem" => $string_retorno, "regular" => false];
                }
            } else {

                if (!isset($aluno_estado['MotivoEstadoAluno'])) {
                    $aluno_estado['MotivoEstadoAluno']['name'] = 'Motivo Não Definido';
                }
                $irregularidades[] = [
                    "estado"   => 5,
                    "mensagem" => $aluno['EstadoAluno']['name'] . " (" . $aluno_estado['MotivoEstadoAluno']['name'] . ")",
                    "regular"  => false
                ];
            }


            return $irregularidades;
        }

        public function getAlunoForPerfil($alunoId)
        {
            $this->contain([
                'PlanoEstudo',
                'Matricula'       => [

                    'Turno',
                    'AnoLectivo',
                    'TipoMatricula',
                    'EstadoMatricula',
                    'Curso',
                    'PlanoEstudo',
                    'order' => 'ano_lectivo_id DESC'
                ],
                'Curso',
                'Entidade'        => [
                    'ProvinciaNascimento',
                    'CidadeNascimento',
                    'PaisNascimento',
                    'Genero',
                    'DocumentoIdentificacao',
                    'User',
                    'Bairro',
                    'Rua',
                    'CidadeMorada'
                ],
                'AlunoNivelMedio' => [
                    'EscolaNivelMedio' => ['Provincia', 'Distrito']
                ],
                'HistoricoCurso'  => ['Curso', 'MotivoTerminoCurso']
            ]);

            $aluno = $this->find('first', ['conditions' => ['Aluno.id' => $alunoId]]);

            $faculdade = $this->Curso->getFaculdadeByCursoId($aluno['Aluno']['curso_id']);
            $aluno['Faculdade'] = $faculdade['UnidadeOrganica'];
            $aluno['Curso']['UnidadeOrganica'] = $faculdade['UnidadeOrganica'];

            return $aluno;
        }

        public function getAlunosSemCertificado($anoLectivo = null)
        {
            $alunos = $this->Aluno->find('all', ['conditions' => ['estado_aluno_id' => 11]]);
            debug($alunos);
        }

        public function getByReferenciaRenovacaoMatricula($referencia)
        {

            $aluno = $this->findByReferenciaRenovacao($referencia);
            if ($aluno) {
                return $aluno;
            } else {
                return false;
            }
        }

        /**
         * Retorna o array de alunos dado o UserId
         *
         * @param $userId
         */
        public function getByUserId($userId)
        {
            $this->contain('Entidade');
            $aluno = $this->find('first', ['conditions' => ['Entidade.user_id' => $userId]]);

            return $aluno;
        }

        /**
         * Retorna o Id da conta do aluno
         *
         * @param type $aluno_id
         */
        public function getContaIdByAlunoId($aluno_id)
        {
            $conta = $this->getContaByAlunoId($aluno_id);

            return $conta['FinanceiroConta']['id'];
        }

        /**
         * Retorna a conta do aluno
         *
         * @param type $aluno_id
         */
        public function getContaByAlunoId($aluno_id)
        {
            $this->id = $aluno_id;
            $entidade_id = $this->field('entidade_id');

            $this->Entidade->FinanceiroConta->recursive = -1;
            $conta = $this->Entidade->FinanceiroConta->findByEntidadeId($entidade_id);

            return $conta;
        }

        /**
         * Retorna o numero de estudantes por faculdade
         */
        public function getEstudantesByFaculdade()
        {
            $alunos_faculdade = $this->find('all', [
                'conditions' => [],
                'group'      => 'faculdade_ingresso_id',
                'fields'     => ['Count(*) as total', 'Faculdade.name']
            ]);

            return $alunos_faculdade;
        }

        /**
         * Retorna todos estudantes finalistas
         *
         */
        public function getEstudantesFinalistas($anoLectivo = null,$cursoId = null){
            $alunos = array();

        }

        /**
         * Retorna o nivel academico mais elevado que o aluno ja frequentou.
         * Esta funcao é importante para se verificar o que sao cadeiras normais e o que sao cadeiras em atraso
         *
         * @FIXME Pode nao dar certos em instituicoes que permitem puxar cadeiras
         * @todo  Implementar e testar
         *
         * @param type $aluno_id
         */
        public function getNivelAcademicoElevado($aluno_id)
        {
            $this->Inscricao->contain('Turma');
            $todas_inscricoes = $this->Inscricao->find('all', ['conditions' => ['aluno_id' => $aluno_id]]);
            // debug($todas_inscricoes);
        }

        /**
         * Retorna o Nivel Academico Real do aluno em questao, tendo em conta os criterios da universidade para a
         * definicao de nivel academico
         *
         * @todo implementar e testar
         *
         * @param type $aluno_id
         */
        public function getNivelAcademicoReal($aluno_id)
        {

        }

        public function getPerfilAluno()
        {

        }

        /**
         * Retorna o plano de estudos activo do aluno
         *
         * @param int $id
         *
         * @return int
         */
        public function getPlanoEstudoCorrente($alunoId)
        {
            $aluno = $this->findById($alunoId);
            if ($aluno) {
                return $aluno['Aluno']['plano_estudo_id'];
            } else {
                return false;
            }

        }

        /**
         * Retorna o Total de Alunos Activos no Sistema.
         *
         * Se a Unidade Organica for passada, entao apenas retorna o total para aquela unidade
         */
        public function getTotalAlunosActivos($unidade_organica_id = null)
        {

            $conditions = [];
            $conditions['estado_aluno_id'] = [1, 11];
            if ($unidade_organica_id) {
                $conditions['Curso.unidade_organica_id'] = $unidade_organica_id;
            }
            $this->contain('Curso');

            return $this->find('count', ['conditions' => $conditions]);
        }

        public function getTotalAlunosActivosPorCurso()
        {
            $this->Matricula->contain(['Curso', 'AnoLectivo']);
            $total_alunos = $this->Matricula->find('all', [
                'conditions' => ['AnoLectivo.ano' => 2013],
                'group'      => 'Curso.name',
                'fields'     => ['Count(Matricula.curso_id) as total', 'Curso.name']
            ]);

            return $total_alunos;
        }

        public function getTotalEstudantesPorCurso()
        {
            $this->contain('Curso');
            $alunos_curso = $this->find('all',
                ['conditions' => [], 'group' => 'Curso.name', 'fields' => ['Count(*) as total', 'Curso.name']]);


            return $alunos_curso;
        }

        /**
         * Verifica se o aluno possui foto no Sistema
         *
         * @param type $codigo
         */
        public function hasFoto($codigo)
        {
            App::uses('File', 'Utility');

            $path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS;
            $file = new File($path . $codigo . '.jpg');
            if (!$file->exists()) {
                return false;
            }

            return true;
        }

        public function isBolseiro($aluno_id, $ano_lectivo_id = null)
        {

            //$this->BolsaBolsa->find('first');
            return true;
        }

        public function isFromUnidadeOrganica($alunoId, $unidadeOrganicaId)
        {
            $unidadeOrganicas = $this->Curso->UnidadeOrganica->getWithChilds($unidadeOrganicaId);

            $this->contain('Curso');
            $aluno = $this->findById($alunoId);
            if (in_array($aluno['Curso']['unidade_organica_id'], $unidadeOrganicas)) {
                return true;
            }

            return false;
        }

        /**
         * Regista os dados do Aluno no Sistema e faz a primeira matricula
         *
         * @param array $data
         *
         * @return type
         */
        public function matriculaNovoIngresso(array $data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();


            $dataMatricula = [];
            if ($data['Aluno']['numero_estudante'] == '') {
                $data['Aluno']['codigo'] = $this->geraCodigo();
            } else {
                if ($data['Aluno']['codigo'] == '' || $data['Aluno']['codigo'] == null) {
                    $data['Aluno']['codigo'] = $data['Aluno']['numero_estudante'];
                }
                $data['Aluno']['numero_estudante_antigo'] = $data['Aluno']['numero_estudante'];
            }

            if (!isset($data['Entidade']['name'])) {
                $data['Entidade']['name'] = $data['Entidade']['nomes'] . " " . $data['Entidade']['apelido'];
            }
            $data['User']['codigocartao'] = $data['Aluno']['codigo'];
            $data['User']['name'] = $data['Entidade']['name'];
            $data['User']['group_id'] = 3;
            $data['User']['verificar_permissoes'] = 1;
            $data['User']['estado_email'] = 0;
            $data['User']['estado_objecto_id'] = 1;
            $data['User']['timezone'] = 'Africa/Maputo';
            $data['User']['password'] = $data['Aluno']['codigo'];
            $dadosUser = ['User' => $data['User'], 'Entidade' => $data['Entidade']];

            if ($this->User->cadastraUser($dadosUser)) {
                //Grava os dados da Entidade
                $data['Entidade']['user_id'] = $this->User->getLastInsertID();
                $data['Entidade']['telemovel'] = $data['EntidadeContacto'][2];
                $data['Entidade']['documento_identificacao_id'] = $data['EntidadeIdentificacao']['documento_identificacao_id'];
                $data['Entidade']['documento_identificacao_numero'] = $data['EntidadeIdentificacao']['numero'];
                //$data['Entidade']['documento_identificacao_data_emissao'] =
                //$data['EntidadeIdentificacao']['data_emissao'];
                $data['Entidade']['estado_entidade_id'] = 1;
                //$data['Entidade']['documento_identificacao_local_emissao'] =
                //$data['EntidadeIdentificacao']['local_emissao'];

                if (!isset($data['Entidade']['nacionalidade'])) {
                    $data['Entidade']['nacionalidade'] = $data['Entidade']['pais_nascimento'];
                }
                if (empty($data['Entidade']['email'])) {
                    $this->User->id = $this->User->getLastInsertID();
                    $data['Entidade']['email'] = $this->User->field('username');
                }

                $this->Entidade->create();


                if ($this->Entidade->save($data)) {

                    //Grava os dados do Aluno
                    $data['Aluno']['user_id'] = $this->User->getLastInsertID();
                    $data['Aluno']['entidade_id'] = $this->Entidade->getLastInsertID();
                    $data['Aluno']['data_ingresso'] = date('Y-m-d');
                    $data['Aluno']['curso_ingresso_id'] = $data['Aluno']['curso_id'];
                    $planoEstudoId = $this->Curso->getPlanoEstudoIdRecente($data['Aluno']['curso_id']);
                    if (!empty($planoEstudoId)) {
                        $data['Aluno']['plano_estudo_id'] = $planoEstudoId;
                    }
                    if (!isset($data['Aluno']['estado_aluno_id'])) {
                        $data['Aluno']['estado_aluno_id'] = 1;
                    }
                    $this->create();

                    if ($this->save($data)) {

                        if ($data['Aluno']['estado_aluno_id'] == 14) {
                            $arrayEstado = [
                                'AlunoEstado' => [
                                    'aluno_id'               => $this->id,
                                    'estado_anterior'        => 1,
                                    'estado_actual'          => 14,
                                    'motivo_estado_aluno_id' => 23,
                                    'data_mudanca'           => date('Y-m-d H:i:s')
                                ]
                            ];

                            $this->AlunoEstado->create();
                            $this->AlunoEstado->save($arrayEstado);
                        } else {
                            //O estado do aluno tem que ver com o certificado e com o recenseamento militar
                            $certificado = $data['Aluno']['certificado_nivel_anterior'];
                            $recenseamento = $data['Aluno']['recenseamento_militar'];
                            if ($certificado == 1 && $recenseamento == 1) {
                                $data['Aluno']['estado_aluno_id'] = 1;
                            } elseif ($certificado == 2 && $recenseamento == 1) {
                                $data['Aluno']['estado_aluno_id'] = 11;
                                $array_estado = [
                                    'AlunoEstado' => [
                                        'aluno_id'               => $this->id,
                                        'estado_anterior'        => 1,
                                        'estado_actual'          => 11,
                                        'motivo_estado_aluno_id' => 1,
                                        'data_mudanca'           => date('Y-m-d H:i:s')
                                    ]
                                ];

                                $this->AlunoEstado->create();
                                $this->AlunoEstado->save($array_estado);
                                $this->set('estado_aluno_id', 11);
                                $this->save();
                            } elseif ($certificado == 1 && $recenseamento == 2) {
                                $data['Aluno']['estado_aluno_id'] = 11;
                                $array_estado = [
                                    'AlunoEstado' => [
                                        'aluno_id'               => $this->id,
                                        'estado_anterior'        => 1,
                                        'estado_actual'          => 11,
                                        'motivo_estado_aluno_id' => 21,
                                        'data_mudanca'           => date('Y-m-d H:i:s')
                                    ]
                                ];

                                $this->AlunoEstado->create();
                                $this->AlunoEstado->save($array_estado);
                                $this->set('estado_aluno_id', 11);
                                $this->save();
                            } else {
                                $data['Aluno']['estado_aluno_id'] = 11;
                                $array_estado = [
                                    'AlunoEstado' => [
                                        'aluno_id'               => $this->id,
                                        'estado_anterior'        => 1,
                                        'estado_actual'          => 11,
                                        'motivo_estado_aluno_id' => 22,
                                        'data_mudanca'           => date('Y-m-d H:i:s')
                                    ]
                                ];

                                $this->AlunoEstado->create();
                                $this->AlunoEstado->save($array_estado);
                                $this->set('estado_aluno_id', 11);
                                $this->save();
                            }

                        }


                        //Grava os dados de Identificacao
                        $identificacao = ['EntidadeIdentificacao' => $data['EntidadeIdentificacao']];
                        $identificacao['EntidadeIdentificacao']['entidade_id'] = $this->Entidade->getLastInsertID();
                        $identificacao['EntidadeIdentificacao']['estado_objecto_id'] = 1;

                        $this->Entidade->EntidadeIdentificacao->create();
                        $this->Entidade->EntidadeIdentificacao->save($identificacao);

                        //Grava os dados de Morada e Contactos

                        $contactos = $data['EntidadeContacto'];

                        foreach ($contactos as $k => $v) {
                            $this->Entidade->EntidadeContacto->create();
                            $this->Entidade->EntidadeContacto->save(
                                [
                                    'EntidadeContacto' => [
                                        'entidade_id'       => $this->Entidade->getLastInsertID(),
                                        'tipo_contacto_id'  => $k,
                                        'valor'             => $v,
                                        'estado_objecto_id' => 1
                                    ]
                                ]
                            );
                        }


                        $aluno_nivel_medio = [
                            'AlunoNivelMedio' => $data['AlunoNivelMedio']
                        ];

                        $aluno_nivel_medio['AlunoNivelMedio']['provincia_id'] = $data['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id'];
                        $aluno_nivel_medio['AlunoNivelMedio']['aluno_id'] = $this->id;

                        $this->AlunoNivelMedio->create();
                        $this->AlunoNivelMedio->save($aluno_nivel_medio);


                        /**
                         * @fixme desactivamos temporariamente o o turno e o regime e o nivel
                         */
                        //Pega os dados da matricula e realiza a matricula
                        $dataMatricula['aluno_id'] = $this->getInsertID();
                        $dataMatricula['curso_id'] = $data['Aluno']['curso_id'];
                        $dataMatricula['plano_estudo_id'] = $planoEstudoId;
                        $dataMatricula['estado_matricula_id'] = 1;
                        $dataMatricula['data'] = date('Y-m-d H:m:s');
                        $dataMatricula['user_id'] = $data['Dados']['user_id'];
                        $dataMatricula['ano_lectivo_id'] = Configure::read('OpenSGA.ano_lectivo_id');
                        $dataMatricula['tipo_matricula_id'] = 1;
                        $matricula_gravar = ['Matricula' => $dataMatricula];
                        $this->Matricula->create();
                        if ($this->Matricula->save($matricula_gravar)) {

                            $historico_array = [
                                'aluno_id'             => $this->id,
                                'curso_id'             => $data['Aluno']['curso_id'],
                                'ano_ingresso'         => $data['Aluno']['ano_ingresso'],
                                'ano_lectivo_ingresso' => Configure::read('OpenSGA.ano_lectivo_id'),
                                'plano_estudo_id'      => $planoEstudoId
                            ];
                            $this->HistoricoCurso->create();
                            if ($this->HistoricoCurso->save($historico_array)) {
                                //Actualiza o estado do candidato

                                $this->Candidatura->id = $data['Dados']['numero_candidato'];

                                $this->Candidatura->set('estado_matricula_id', 1);
                                $this->Candidatura->set('estado_candidatura_id', 3);

                                $this->Candidatura->set('data_matricula', date('Y-m-d H:m:s'));
                                if ($this->Candidatura->save()) {
                                    $dataSource->commit();

                                    return true;
                                }
                            }
                        }
                    } else {
                        debug($this->data);
                        debug($this->invalidFields());
                        die();
                    }
                } else {
                    return false;
                }
            }


            $dataSource->rollback();

            return false;
        }

        public function mudaCurso($data)
        {
            $datasource = $this->getDataSource();
            $datasource->begin();

            $mudancaArray = [
                'MudancaCurso' => [
                    'aluno_id'     => $data['Aluno']['aluno_id'],
                    'curso_antigo' => $data['Aluno']['curso_antigo'],
                    'curso_novo'   => $data['Aluno']['curso_id'],
                    'data_mudanca' => $data['Aluno']['data_mudanca'],
                    'observacao'   => $data['Aluno']['observacao']
                ]
            ];
            if ($data['Aluno']['numero_estudante_atribuido'] != '') {
                $mudancaArray['MudancaCurso']['forma_mudanca_id'] = 1;
                $this->contain();
                $alunoBloquear = $this->findByCodigo($data['Aluno']['numero_estudante_atribuido']);
                $dataEstado = [
                    'aluno_id'               => $alunoBloquear['Aluno']['id'],
                    'estado_anterior'        => $alunoBloquear['Aluno']['estado_aluno_id'],
                    'estado_actual'          => 10,
                    'motivo_estado_aluno_id' => 5,
                    'observacao'             => $data['Aluno']['observacao'],
                    'data_mudanca'           => $data['Aluno']['data_mudanca']
                ];
                $this->alteraStatus($dataEstado);
            } else {
                $mudancaArray['MudancaCurso']['forma_mudanca_id'] = 2;
            }
            try {
                $dataAno = DateTime::createFromFormat("Y-m-d", $data['Aluno']['data_mudanca']);

            } catch (Exception $e) {
                $this->out($e->getMessage());
            }

            //Finaliza o historico
            $historicoActual = $this->HistoricoCurso->find('first', [
                    'conditions' => [
                        'aluno_id' => $data['Aluno']['aluno_id'],
                        'curso_id' => $data['Aluno']['curso_antigo'],
                        'ano_fim'  => null
                    ]
                ]
            );
            if (!empty($historicoActual)) {
                $this->HistoricoCurso->id = $historicoActual['HistoricoCurso']['id'];

                $this->HistoricoCurso->set('ano_fim', $dataAno->format("Y"));
                $this->HistoricoCurso->save();
            }

            $this->Matricula->AnoLectivo->contain();
            $anolectivo = $this->Matricula->AnoLectivo->findByAno($dataAno->format("Y"));
            //Cria Novo Historico
            $planoEstudo = $this->Curso->getPlanoEstudoRecente($data['Aluno']['curso_id']);
            if (empty($planoEstudo)) {
                $planoEstudoId = 0;
            } else {
                $planoEstudoId = $planoEstudo['PlanoEstudo']['id'];
            }
            $arrayNovoHistorico = [
                'HistoricoCurso' => [
                    'aluno_id'             => $data['Aluno']['aluno_id'],
                    'curso_id'             => $data['Aluno']['curso_id'],
                    'ano_ingresso'         => $dataAno->format("Y"),
                    'ano_lectivo_ingresso' => $anolectivo['AnoLectivo']['id'],
                    'plano_estudo_id'      => $planoEstudoId
                ]
            ];
            $this->HistoricoCurso->create();
            $this->HistoricoCurso->save($arrayNovoHistorico);
            $this->id = $data['Aluno']['aluno_id'];
            $this->set('curso_id', $data['Aluno']['curso_id']);
            $this->set('plano_estudo_id', $planoEstudoId);
            $this->save();
            $this->MudancaCurso->create();
            $this->MudancaCurso->save($mudancaArray);

            //Eh necessario actualizar o Plano de Estudos da Ultima Matricula
            $matricula = $this->Matricula->findByAlunoIdAndAnoLectivoId($data['Aluno']['aluno_id'],
                $anolectivo['AnoLectivo']['id'], [], 'Matricula.data DESC');
            if (!empty($matricula)) {
                $this->Matricula->id = $matricula['Matricula']['id'];
                $this->Matricula->set('plano_estudo_id', $planoEstudoId);
                $this->Matricula->save();
            }

            return $datasource->commit();
        }

        public function alteraStatus($data)
        {
            $datasource = $this->getDataSource();
            $datasource->begin();
            $this->contain();
            $aluno = $this->findById($data['aluno_id']);
            $arrayEstado = [
                'AlunoEstado' => [
                    'aluno_id'               => $aluno['Aluno']['id'],
                    'estado_anterior'        => $aluno['Aluno']['estado_aluno_id'],
                    'estado_actual'          => $data['estado_actual'],
                    'motivo_estado_aluno_id' => $data['motivo_estado_aluno_id'],
                    'observacao'             => $data['observacao'],
                    'data_mudanca'           => $data['data_mudanca'],
                ]
            ];

            $this->AlunoEstado->create();
            $this->AlunoEstado->save($arrayEstado);

            $this->id = $data['aluno_id'];
            $this->set('estado_aluno_id', $data['estado_actual']);
            $this->save();

            return $datasource->commit();
        }

        public function processaContacto($aluno_id)
        {
            $entidade_id = $this->field('entidade_id', ['id' => $aluno_id]);

            $telefone = $this->Entidade->EntidadeContacto->field('valor',
                ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 4, 'estado_objecto_id' => 1]);
            $telemovel = $this->Entidade->EntidadeContacto->field('valor',
                ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 2, 'estado_objecto_id' => 1]);
            $distrito_id = $this->Entidade->EntidadeContacto->field('valor',
                ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 9, 'estado_objecto_id' => 1]);
            $distrito = $this->Entidade->CidadeNascimento->field('name', ['id' => $distrito_id]);
            $rua = $this->Entidade->EntidadeContacto->field('valor',
                ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 5, 'estado_objecto_id' => 1]);
            $numero = $this->Entidade->EntidadeContacto->field('valor',
                ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 8, 'estado_objecto_id' => 1]);
            $quarteirao = $this->Entidade->EntidadeContacto->field('valor',
                ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 7, 'estado_objecto_id' => 1]);
            $bairro = $this->Entidade->EntidadeContacto->field('valor',
                ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 6, 'estado_objecto_id' => 1]);
            $telemovel_emergencia = $this->field('telemovel_emergencia', ['id' => $aluno_id]);

            $contactos = [
                'telefone'             => $telefone,
                'telemovel'            => $telemovel,
                'distrito'             => $distrito,
                'rua'                  => $rua,
                'numero'               => $numero,
                'quarteirao'           => $quarteirao,
                'bairro'               => $bairro,
                'telemovel_emergencia' => $telemovel_emergencia
            ];

            return $contactos;
        }

        public function setNovaMatricula($data)
        {
            if (empty($data['Matricula']['ano_lectivo_id'])) {
                $data['Matricula']['ano_lectivo_id'] = $data['Sessao']['ano_lectivo_id'];
            }

            $data['Matricula']['user_id'] = $data['Sessao']['user_id'];
            $data['Matricula']['aluno_id'] = $this->id;
            if ($this->isMatriculado($this->id, $data['Matricula']['user_id'])) {
                return false;
            }
            if ($this->Matricula->save($data)) {
                return true;
            }

            return false;
        }

        /**
         * Verifica se o aluno esta matriculado
         * Estar matriculado significa que possui pelo menos uma matricula na tabela matriculas, e nao exactamente que
         * renovou matricula no ano lectivo corrente
         */
        public function isMatriculado($aluno_id, $ano_lectivo_id)
        {
            $matricula = $this->Matricula->find('first',
                ['conditions' => ['aluno_id' => $aluno_id], 'recursive' => -1]);

            return $matricula;
        }

        public function updateAluno($data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();
            $this->id = $data['Aluno']['aluno_id'];
            if ($this->updateParentesco($data['Aluno']['aluno_id'], $data['Aluno'])) {
                $entidadeId = $this->field('entidade_id');
                $data['Aluno']['entidade_id'] = $entidadeId;
                if ($this->Entidade->updateDadosEntidade($entidadeId, $data)) {
                    $dataSource->commit();

                    return true;
                } else {
                    $dataSource->rollback();

                    return [false, $this->Entidade->validationErrors];
                }
            } else {
                $dataSource->rollback();

                return [false, $this->validationErrors];
            }

        }

        /**
         * Actualiza os dados do encarregado de educacao
         *
         * @param $alunoId
         * @param $data
         */
        public function updateParentesco($alunoId, $data)
        {
            $this->id = $alunoId;
            if (isset($data['nome_emergencia'])) {
                $this->set('nome_emergencia', $data['nome_emergencia']);
            }
            if (isset($data['telemovel_emergencias'])) {
                $this->set('telemovel_emergencias', $data['telemovel_emergencias']);
            }
            if (isset($data['parentesco_encarregado'])) {
                $this->set('parentesco_encarregado', $data['parentesco_encarregado']);
            }
            if ($this->save()) {
                return true;
            } else {
                return false;
            }
        }

    }
