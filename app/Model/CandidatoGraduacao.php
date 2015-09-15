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

        public function cadastraCandidatoGraduacao($data)
        {


            if (!isset($data['CandidatoGraduacao']['cerimonia_graduacao_id'])) {
                $data['CandidatoGraduacao']['cerimonia_graduacao_id'] = $this->CerimoniaGraduacao->getProximaCerimoniaId();
            }
            if (!isset($data['CandidatoGraduacao']['referencia_pagamento'])) {
                $data['CandidatoGraduacao']['referencia_pagamento'] = $this->Aluno->FinanceiroPagamento->geraReferenciaPagamentoGraduacao($data['CandidatoGraduacao']['aluno_id']);
            }
            $data['CandidatoGraduacao']['data_candidatura'] = date('Y-m-d H:i:s');
            $this->create();
            if ($this->save($data)) {
                return true;
            } else {
                return [false, $this->validationErrors];
            }

        }

    }
