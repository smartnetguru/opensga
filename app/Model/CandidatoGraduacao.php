<?php

    App::uses('AppModel', 'Model');

    /**
     * CandidatoGraduacao Model
     *
     * @property Aluno $Aluno
     * @property CerimoniaGraduacao $CerimoniaGraduacao
     * @property EstadoObjecto $EstadoObjecto
     * @property EstadoCandidatura $EstadoCandidatura
     * @property Genero $Genero
     * @property EstadoCivil $EstadoCivil
     * @property RegimeEstudo $RegimeEstudo
     * @property RegaliaSocial $RegaliaSocial
     */
    class CandidatoGraduacao extends AppModel
    {
        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'Aluno'              => [
                'className'  => 'Aluno',
                'foreignKey' => 'aluno_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'CerimoniaGraduacao' => [
                'className'  => 'CerimoniaGraduacao',
                'foreignKey' => 'cerimonia_graduacao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'EstadoObjecto'      => [
                'className'  => 'EstadoObjecto',
                'foreignKey' => 'estado_objecto_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'EstadoCandidatura'  => [
                'className'  => 'EstadoCandidatura',
                'foreignKey' => 'estado_candidatura_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Genero'             => [
                'className'  => 'Genero',
                'foreignKey' => 'genero_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'EstadoCivil'        => [
                'className'  => 'EstadoCivil',
                'foreignKey' => 'estado_civil_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'RegimeEstudo'       => [
                'className'  => 'RegimeEstudo',
                'foreignKey' => 'regime_estudo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'RegaliaSocial'      => [
                'className'  => 'RegaliaSocial',
                'foreignKey' => 'regalia_social_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Curso'              => [
                'className'  => 'Curso',
                'foreignKey' => 'curso_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Funcionario'        => [
                'className'  => 'Funcionario',
                'foreignKey' => 'funcionario_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ]
        ];
        public $validate = [
            'aluno_id'               => [
                'EvitaDuplicados' => [
                    'rule'    => ['checkUnique', ['aluno_id', 'cerimonia_graduacao_id']],
                    'message' => 'Este estudante já está inscrito para esta cerimónia'
                ]
            ],
            'apelido'                => [
                'apelidoNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Apelido é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ]
            ],
            'nomes'                  => [
                'nomesNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Outros Nomes é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ]
            ],
            'genero_id'              => [
                'generoIdNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Sexo é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ]
            ],
            'data_nascimento'        => [
                'dataNascimentoNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Data de Nascimento é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
                'dataNascimentoDate'     => [
                    'rule'    => ['date', 'ymd'],
                    'message' => 'Introduza uma data no formato certo',
                    // extra keys like on, required, etc. go here...
                ]

            ],
            'cerimonia_graduacao_id' => [
                'cerimoniaGraduacaoNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'É necessário indicar a que cerimonia esta a se inscrever',
                    // extra keys like on, required, etc. go here...
                ]
            ],
            'telemovel'              => [
                'telemovelValid' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Email2 de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ]
            ],
        ];

        /**
         *
         * @fixme GetProximaCerimoniaId foi martelada :(
         *
         * @param $data
         *
         * @return array|bool
         * @throws \Exception
         */
        public function cadastraCandidatoGraduacao($data)
        {


            if (!isset($data['CandidatoGraduacao']['cerimonia_graduacao_id'])) {
                $data['CandidatoGraduacao']['cerimonia_graduacao_id'] = $this->CerimoniaGraduacao->getProximaCerimoniaId();
            }
            if (!isset($data['CandidatoGraduacao']['referencia_pagamento'])) {
                $data['CandidatoGraduacao']['referencia_pagamento'] = $this->Aluno->FinanceiroPagamento->geraReferenciaPagamentoGraduacao($data['CandidatoGraduacao']['aluno_id']);
            }
            $data['CandidatoGraduacao']['data_candidatura'] = date('Y-m-d H:i:s');
            $data['CandidatoGraduacao']['estado_candidatura_id'] = 4;
            $this->create();
            if ($this->save($data)) {
                return true;
            } else {
                return [false, $this->validationErrors];
            }

        }

        public function confirmaDados(array $data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();
            $this->id = $data['CandidatoGraduacao']['candidato_graduacao_id'];
            $candidatoGraduacao = $this->findById($data['CandidatoGraduacao']['candidato_graduacao_id']);
            $alunoId = $candidatoGraduacao['CandidatoGraduacao']['aluno_id'];
            $this->Aluno->id = $alunoId;
            $this->Aluno->Entidade->id = $this->Aluno->field('entidade_id');

            $this->Aluno->Entidade->set('apelido', $data['CandidatoGraduacao']['apelido']);
            $this->Aluno->Entidade->set('nomes', $data['CandidatoGraduacao']['nomes']);
            $this->Aluno->Entidade->set('data_nascimento',
                $candidatoGraduacao['CandidatoGraduacao']['data_nascimento']);
            $this->Aluno->Entidade->set('telemovel', $data['CandidatoGraduacao']['telemovel']);

            if (!$this->Aluno->Entidade->save()) {
                $dataSource->rollback();

                return [false, $this->Aluno->Entidade->validationErrors];
            }


            $funcionario = $this->Aluno->Entidade->Funcionario->getByUserId(CakeSession::read('Auth.User.id'));
            $cursoId = $this->Aluno->field('curso_id');
            $dataConclusaoNivel = [
                'HistoricoCurso' => [
                    'data_conclusao' => $data['CandidatoGraduacao']['data_defesa'],
                    'nota_final'     => $data['CandidatoGraduacao']['media_defesa'],
                    'funcionario_id' => $funcionario['Funcionario']['id']
                ],
                'Aluno'          => [
                    'observacao' => '',
                    'aluno_id'   => $alunoId,
                    'curso_id'   => $cursoId,
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
                $dataSource->rollback();

                return [false, $this->Aluno->validationErrors];
            }
            $estadoCandidatoGraduacao = $candidatoGraduacao['CandidatoGraduacao']['estado_candidatura_id'];
            if ($estadoCandidatoGraduacao == 4) {
                $this->set('estado_candidatura_id', 2);


            } elseif ($estadoCandidatoGraduacao == 3) {
                $this->set('estado_candidatura_id', 1);

            }
            $this->set('funcionario_id', $funcionario['Funcionario']['id']);

            if (!$this->save()) {
                $dataSource->rollback();

                return [false, $this->validationErrors];
            }

            $dataSource->commit();

            return true;


        }

        public function confirmaPagamento(array $data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();
            $candidatoGraduacao = $this->findById($data['CandidatoGraduacao']['candidato_graduacao_id']);

            $this->Aluno->id = $candidatoGraduacao['CandidatoGraduacao']['aluno_id'];
            $entidadeId = $this->Aluno->field('entidade_id');

            if ($this->Aluno->Entidade->FinanceiroTrancasao->FinanceiroPagamento->pagar($entidadeId,
                $data['CandidatoGraduacao']['valor_pago'],
                $data['CandidatoGraduacao']['data_pagamento'], 39,
                $candidatoGraduacao['CandidatoGraduacao']['referencia_pagamento'],
                $candidatoGraduacao['CandidatoGraduacao']['numero_talao'])
            ) {

            }

            debug($candidatoGraduacao);
            debug($data);
        }

    }
