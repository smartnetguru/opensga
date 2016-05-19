<?php

    /**
     * Classe Model para o Docente
     *
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.estudantes.view
     * @version       OpenSGA v 0.5.0
     * @since         OpenSGA v 0.1.0.0
     *
     * @property Entidade $Entidade
     * @property Seccao $Seccao
     * @property DocenteCategoria $DocenteCategoria
     * @property DocenteUnidadeOrganica $DocenteUnidadeOrganica
     */
    class Docente extends AppModel
    {

        var $name = 'Docente';
        //The Associations below have been created with all possible keys, those that are not needed can be removed

        var $belongsTo = [
            'Entidade'         => [
                'className'  => 'Entidade',
                'foreignKey' => 'entidade_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'DocenteCategoria' => [
                'className'  => 'DocenteCategoria',
                'foreignKey' => 'docente_categoria_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'UnidadeOrganica'  => [
                'className'  => 'UnidadeOrganica',
                'foreignKey' => 'unidade_organica_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];

        public $hasMany = [
            'DocenteUnidadeOrganica' => [
                'className'    => 'DocenteUnidadeOrganica',
                'foreignKey'   => 'docente_id',
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
            'DocenteDisciplina'      => [
                'className'    => 'DocenteDisciplina',
                'foreignKey'   => 'docente_id',
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
            'unidade_organica_id'  => [
                'unidadeOrganicaNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O Campo Unidade Organica é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],
            'entidade_id'          => [
                'entidadeIdNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'Os dados pessoais do Docente são de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],
            'docente_categoria_id' => [
                'categoriaDocenteNotEmpty' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'A categoria do Docente é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],

        ];


        /**
         * Cadastra novo docente no Sistema
         * @param array $data
         * @return bool
         * @throws Exception
         *
         * @todo Se a entidade existe, ver como fazer merge
         */
        public function cadastraDocente(array $data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();

            if (!isset($data['Docente']['codigo']) || $data['Docente']['codigo'] == '') {
                $data['Docente']['codigo'] = $this->Entidade->User->geraEmailUem($data['Entidade']['apelido'],
                    $data['Entidade']['nomes']);
            }

            $data['Entidade']['email'] = $data['EntidadeContacto'][1];
            $data['Entidade']['telemovel'] = $data['EntidadeContacto'][2];
            $data['Entidade']['documento_identificacao_id'] = $data['EntidadeIdentificacao']['documento_identificacao_id'];
            $data['Entidade']['documento_identificacao_numero'] = $data['EntidadeIdentificacao']['numero'];
            $entidadeExiste = $this->Entidade->verificaEntidadeExiste($data['Entidade']);
            if($entidadeExiste){
                throw new BadRequestException('Esta Entidade ja esta cadastrada');
            }
            //Grava os dados do Usuario
            $this->Entidade->User->create();
            $data['User']['username'] = $data['Docente']['codigo'];
            $data['User']['password'] = Security::hash('siga12345UEM', 'blowfish');
            $data['User']['codigocartao'] = $data['Docente']['codigo'];
            $data['User']['name'] = $data['Entidade']['name'];
            $data['User']['group_id'] = 4;
            if ($this->Entidade->User->save($data)) {

                //Grava os dados da Entidade
                $data['Docente']['user_id'] = $this->Entidade->User->getLastInsertID();
                $data['Entidade']['user_id'] = $this->Entidade->User->getLastInsertID();

                $this->Entidade->create();

                $this->Entidade->validator()
                    ->add('nuit', 'required', [
                        'rule'     => 'notBlank',
                        'required' => 'create',
                    ])
                    ->add('nuit', 'size', [
                        'rule'    => 'isUnique',
                        'message' => 'Password should be at least 8 chars long',
                    ]);


                if ($this->Entidade->save($data)) {

                    //Grava os dados do Docente
                    $data['Docente']['entidade_id'] = $this->Entidade->getLastInsertID();
                    $this->create();
                    if ($this->save($data)) {

                        //Grava os dados de docente_unidade
                        $arrayDocenteUnidade = [
                            'DocenteUnidadeOrganica' => [
                                'docente_id'          => $this->id,
                                'unidade_organica_id' => $data['Docente']['unidade_organica_id'],
                                'data_inicio'         => date('Y-m-d'),
                                'estado_objecto_id'   => 1,

                            ],
                        ];

                        $this->DocenteUnidadeOrganica->create();
                        $this->DocenteUnidadeOrganica->save($arrayDocenteUnidade);

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
                                        'estado_objecto_id' => 1,
                                    ],
                                ]
                            );
                        }

                        return $dataSource->commit();
                    } else {
                        debug($this->validationErrors);
                        $dataSource->rollback();

                        return false;
                    }
                } else {
                    debug($this->Entidade->validationErrors);
                    $dataSource->rollback();

                    return false;
                }
            } else {

                $dataSource->rollback();

                return false;
            }


        }

        public function getByUserID($userId)
        {
            $this->contain(['Entidade']);
            $docente = $this->find('first', ['conditions' => ['Entidade.user_id' => $userId]]);

            return $docente;
        }

        /**
         * Esta funcao faz o mesmo que find list, mas busca o name a partir da tabela entidades
         * @todo ver way de passar conditions como argumento
         */
        public function listaDocentes()
        {

            $funcionarios = $this->find('all', ['fields' => ['id', 'Entidade.name']]);

            $f = [];
            foreach ($funcionarios as $funcionario) {

                $f[$funcionario[$this->alias]['id']] = $funcionario['Entidade']['name'];
            }

            return $f;
        }

    }
