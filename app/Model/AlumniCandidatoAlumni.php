<?php
    App::uses('AppModel', 'Model');

    /**
     * AlumniCandidatoAlumni Model
     *
     * @property Genero $Genero
     * @property EstadoCivil $EstadoCivil
     * @property UnidadeOrganica $UnidadeOrganica
     * @property Curso $Curso
     * @property GrauAcademico $GrauAcademico
     * @property AlumniAlumni $AlumniAlumni
     */
    class AlumniCandidatoAlumni extends AppModel
    {


        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'Genero'                => [
                'className'  => 'Genero',
                'foreignKey' => 'genero_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'EstadoCivil'           => [
                'className'  => 'EstadoCivil',
                'foreignKey' => 'estado_civil_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'UnidadeOrganica'       => [
                'className'  => 'UnidadeOrganica',
                'foreignKey' => 'unidade_organica_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Curso'                 => [
                'className'  => 'Curso',
                'foreignKey' => 'curso_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'GrauAcademico'         => [
                'className'  => 'GrauAcademico',
                'foreignKey' => 'grau_academico_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'PaisNascimento'        => [
                'className'  => 'Pais',
                'foreignKey' => 'pais_nascimento',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'ProvinciaNascimento'   => [
                'className'  => 'Provincia',
                'foreignKey' => 'provincia_nascimento',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'CidadeNascimento'      => [
                'className'  => 'Cidade',
                'foreignKey' => 'cidade_nascimento',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'PaisMorada'            => [
                'className'  => 'Pais',
                'foreignKey' => 'pais_morada',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'ProvinciaMorada'       => [
                'className'  => 'Provincia',
                'foreignKey' => 'provincia_morada',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'CidadeMorada'          => [
                'className'  => 'cidade',
                'foreignKey' => 'cidade_morada',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'DoumentoIdentificacao' => [
                'className'  => 'DocumentoIdentificacao',
                'foreignKey' => 'documento_identificacao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = [
            'AlumniAlumni' => [
                'className'    => 'AlumniAlumni',
                'foreignKey'   => 'alumni_candidato_alumni_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => '',
            ],
        ];


        public $validate = [
            'apelido'              => [
                'apelidoRule-1' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O Preenchimento do campo Apelido é obrigatório',
                ],
            ],
            'nomes'                => [
                'nomesRule-1' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O Preenchimento do campo Outros nomes é obrigatório',
                ],
            ],
            'genero_id'            => [
                'generoRule-1' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento do Campo Sexo é obrigatório',
                ],
            ],
            'data_nascimento'      => [
                'dataNascimentoRule-1' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento do Campo de data de Nascimento é obrigatório',
                ],
                'dataNascimentoRule-2' => [
                    'rule'     => 'date',
                    'required' => 'create',
                    'message'  => 'O preenchimento do Campo de data de Nascimento é obrigatório',
                ],
            ],
            'estado_civil_id'      => [
                'estadoCivilIdnotBlank' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento do Estado Civil é obrigatório',
                ],
            ],
            'naturalidade'         => [
                'naturalidadenotBlank' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento da naturalidade é obrigatório',
                ],
            ],
            'pais_nascimento'      => [
                'paisNascimentonotBlank' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento do Pais de Nascimento é obrigatório',
                ],
            ],
            'provincia_nascimento' => [
                'provinciaNascimentonotBlank' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento da Provincia de Nascimento é obrigatório',
                ],
            ],
            'cidade_nascimento'    => [
                'cidadeNascimentonotBlank' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento da Cidade de Nascimento é obrigatório',
                ],
            ],
            'unidade_organica_id'  => [
                'unidadeOrganicanotBlank' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento da Unidade Organica é obrigatório',
                ],
            ],
            'curso_id'             => [
                'cursoIdnotBlank' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O preenchimento do Curso é obrigatório',
                ],
            ],


        ];


        /**
         * Grava Candidato a Alumni na BD, depois de ver todas as especificacoes
         */
        public function saveCandidatoAlumni($data)
        {

            if ($this->save($data)) {
                return true;
            }

        }
    }
