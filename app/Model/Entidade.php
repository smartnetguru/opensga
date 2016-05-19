<?php

    App::uses('EntidadeListener', 'Event');

    /**
     * OpenSGA - Sistema de Gest�o Acad�mica
     *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
     *
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.controller
     * @since         OpenSGA v 0.10.0.0
     *
     *
     *
     * @property User $User
     * @property Genero $Genero
     * @property Cidade $CidadeMorada
     * @property Docente $Docente
     * @property Aluno $Aluno
     * @property Funcionario $Funcionario
     * @property FinanceiroConta $FinanceiroConta
     * @property FinanceiroDeposito $FinanceiroDeposito
     * @property FinanceiroTransacao $FinanceiroTransacao
     * @property EntidadeIdentificacao $EntidadeIdentificacao
     * @property EntidadeContacto $EntidadeContacto
     *
     *
     */
    class Entidade extends AppModel
    {

        var $name = 'Entidade';

        public $validate = [
            'apelido'         => [
                'apelidoNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Apelido é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],
            'nomes'           => [
                'nomesNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Outros Nomes é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],
            'genero_id'       => [
                'generoIdNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Sexo é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],
            'data_nascimento' => [
                'dataNascimentoNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Data de Nascimento é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
                'dataNascimentoDate'     => [
                    'rule'    => ['date', 'ymd'],
                    'message' => 'Introduza uma data no formato certo',
                    // extra keys like on, required, etc. go here...
                ],

            ],
            'name'            => [
                'nameNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo Nome Completo é de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],
            'email'           => [
                'emailValid' => [
                    'rule'     => 'email',
                    'required' => false,
                    'message'  => 'O Campo Email de Preenchimento Obrigatório',
                    // extra keys like on, required, etc. go here...
                ],
            ],
            'nuit'            => [
                'nuitNotEmpty' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Campo NUIT Completo é de Preenchimento Obrigatório',
                ],
                'nuitIsUnique' => [
                    'rule'    => 'isUnique',
                    'message' => 'Este Nuit ja foi usado por outra Entidade',
                ],
            ],

        ];
        var $belongsTo = [
            'User'                   => [
                'className'  => 'User',
                'foreignKey' => 'user_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Genero'                 => [
                'className'  => 'Genero',
                'foreignKey' => 'genero_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'PaisNascimento'         => [
                'className'  => 'Pais',
                'foreignKey' => 'pais_nascimento',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'CidadeMorada'           => [
                'className'  => 'Cidade',
                'foreignKey' => 'cidade_morada',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Bairro'                 => [
                'className'  => 'Bairro',
                'foreignKey' => 'bairro_morada',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Rua'                    => [
                'className'  => 'Rua',
                'foreignKey' => 'avenida_rua',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'CidadeFerias'           => [
                'className'  => 'Cidade',
                'foreignKey' => 'cidade_ferias',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'CidadeNascimento'       => [
                'className'  => 'Cidade',
                'foreignKey' => 'cidade_nascimento',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'ProvinciaNascimento'    => [
                'className'  => 'Provincia',
                'foreignKey' => 'provincia_nascimento',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'DocumentoIdentificacao' => [
                'className'  => 'DocumentoIdentificacao',
                'foreignKey' => 'documento_identificacao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'EstadoEntidade'         => [
                'className'  => 'EstadoEntidade',
                'foreignKey' => 'EstadoEntidade_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'ProvinciaFerias'        => [
                'className'  => 'Cidade',
                'foreignKey' => 'provincia_ferias',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'EstadoCivil'            => [
                'className'  => 'EstadoCivil',
                'foreignKey' => 'estado_civil',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];
        public $hasOne = [
            'Docente'         => [
                'className'  => 'Docente',
                'foreignKey' => 'entidade_id',
                'dependent'  => true,
            ],
            'Aluno'           => [
                'className'  => 'Aluno',
                'foreignKey' => 'entidade_id',
                'dependent'  => true,
            ],
            'Funcionario'     => [
                'className'  => 'Funcionario',
                'foreignKey' => 'entidade_id',
                'dependent'  => true,
            ],
            'FinanceiroConta' => [
                'className'  => 'FinanceiroConta',
                'foreignKey' => 'entidade_id',
                'dependent'  => true,
            ],
        ];
        public $hasMany = [
            'FinanceiroDeposito'    => [
                'className'    => 'FinanceiroDeposito',
                'foreignKey'   => 'entidade_id',
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
            'FinanceiroTransacao'   => [
                'className'    => 'FinanceiroTransacao',
                'foreignKey'   => 'entidade_id',
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
            'EntidadeIdentificacao' => [
                'className'    => 'EntidadeIdentificacao',
                'foreignKey'   => 'entidade_id',
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
            'EntidadeContacto'      => [
                'className'    => 'EntidadeContacto',
                'foreignKey'   => 'entidade_id',
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
            'EntidadeNecessidade'   => [
                'className'    => 'EntidadeNecessidade',
                'foreignKey'   => 'entidade_id',
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


        public function __construct($id = false, $table = null, $ds = null)
        {
            parent::__construct($id, $table, $ds);
            $this->getEventManager()->attach(new EntidadeListener());
        }

        public function alteraNome($entidadeId, $apelido, $nomes)
        {
            $this->id = $entidadeId;
            if (!$this->exists()) {
                return false;
            }
            $apelido = trim($apelido);
            $nomes = trim($nomes);
            $this->set('apelido', $apelido);
            $this->set('nomes', $nomes);
            $this->set('name', $nomes . " " . $apelido);
            $save = $this->save();

            return $save;
        }

        public function getApelidoFromName($name)
        {
            $nomes = explode(' ', $name);

            return $nomes[count($nomes) - 1];
        }

        public function getNomesFromName($name)
        {
            $nomes = explode(' ', $name);
            unset($nomes[count($nomes) - 1]);

            return implode(' ', $nomes);
        }

        public function getCellNumber($entidade_id)
        {
            $entidade = $this->findById($entidade_id);
            if ($entidade['Entidade']['telemovel']) {
                return $entidade['Entidade']['telemovel'];
            } else {
                $entidade_contacto = $this->EntidadeContacto->find('first', [
                    'conditions' => ['entidade_id' => $entidade_id, 'tipo_contacto_id' => 2, 'estado_objecto_id' => 1],
                    'orderr'     => 'id DESC',
                ]);
                if ($entidade_contacto) {
                    return $entidade_contacto['EntidadeContacto']['valor'];
                } else {
                    return 0;
                }
            }
        }

        /**
         * Retorna todos os dados do documento de identificacao activo para a entidade
         * @todo implementar o metodo
         * @param type $entidade_id
         */
        public function getDocumentoIdentificacao($entidade_id)
        {

        }

        /**
         * Retorna a morada de uma entidade como uma string devidamente formatada
         *
         * @todo implementar
         * @param type $entidade_id
         */
        public function getMorada($entidadeId)
        {
            $morada = [];
            $morada['string'] = '';
            $paisMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId, 11,
                1,
                null, 'id DESC');
            if (!empty($paisMorada)) {
                $morada['pais_morada'] = $paisMorada['EntidadeContacto']['valor'];
                $morada['string'] .= $morada['pais_morada'];
            } else {
                $morada['pais_morada'] = null;
            }

            $provinciaMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId,
                10,
                1);
            if (!empty($provinciaMorada)) {
                $morada['provincia_morada'] = $provinciaMorada['EntidadeContacto']['valor'];
                $morada['string'] .= '-' . $morada['provincia_morada'];
            } else {
                $morada['provincia_morada'] = null;
            }

            $cidadeMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId, 9,
                1);
            if (!empty($cidadeMorada)) {
                $morada['cidade_morada'] = $cidadeMorada['EntidadeContacto']['valor'];
                $morada['string'] .= '-' . $morada['cidade_morada'];

            } else {
                $morada['cidade_morada'] = null;
            }

            $quarteiraoMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId,
                7,
                1);
            if (!empty($quarteiraoMorada)) {
                $morada['quarteirao'] = $quarteiraoMorada['EntidadeContacto']['valor'];
                $morada['string'] .= '-' . $morada['quarteirao'];
            } else {
                $morada['quarteirao'] = null;
            }

            return $morada;
        }

        /**
         * Retorna apenas o numero de documento de identificacao da entidade
         * @todo implementar o metodo
         */
        public function getNumeroDocumentoIdentificacao($entidade_id)
        {
            return '0';
        }

        /**
         * Retorna todas entidades que fazem anos numa determinada data
         * @param null $diaNascimento
         * @param null $mesNascimento
         * @return array
         */
        public function getAllAniversariantes($diaNascimento = null, $mesNascimento = null)
        {
            if ($diaNascimento == null) {
                $diaNascimento = date('d');
            }
            if ($mesNascimento == null) {
                $mesNascimento = date('m');
            }
            $this->contain('User');
            $entidades = $this->find('all', [
                    'conditions' => [
                        'DAY(Entidade.data_nascimento)'   => $diaNascimento,
                        'MONTH(Entidade.data_nascimento)' => $mesNascimento,
                    ],
                    'fields'     => [
                        'Entidade.id',
                        'Entidade.name',
                        'Entidade.data_nascimento',
                        'Entidade.telemovel',
                        'Entidade.email',
                        'Entidade.nomes',
                        'User.username',
                    ],
                ]
            );

            return $entidades;
        }

        public function enviaMensagemAniversario($entidade)
        {
            debug($entidade);
            die();
            $mensagem = 'Caro ' . trim($entidade['Entidade']['nomes']) . ', O SIGA deseja-lhe um feliz aniversario! www.siga.uem.mz';
            $telemovel = $entidade['Entidade']['telemovel'];
            $emailPessoal = $entidade['Entidade']['email'];
            $emailInstitucional = $entidade['User']['username'];
            //debug(strlen($mensagem) . '-----' . $mensagem);
        }

        public function updateDadosEntidade($entidadeId, $data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();
            $this->id = $entidadeId;
            $this->set($data['Entidade']);
            if (isset($data['EntidadeContacto'])) {

                if (!$this->EntidadeContacto->actualizaContactos($data)) {
                    $dataSource->rollback();


                    return false;
                }
                $data['EntidadeIdentificacao']['entidade_id'] = $entidadeId;
                if (!$this->EntidadeIdentificacao->actualizaIdentificacao($data['EntidadeIdentificacao'])) {
                    $dataSource->rollback();

                    return false;
                }
            }
            if ($this->save()) {
                $dataSource->commit();

                return true;
            } else {
                $dataSource->rollback();

                return false;
            }


        }

        public function cadastraEntidade($data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();
            //Primeiro vemos se a Entidade Existe, com base no NUIT, Celular, BI
            $nuit = $data['Entidade']['nuit'];
            $telemovel = $data['EntidadeContacto'][2];
            $tipoDocumento = $data['EntidadeIdentificacao']['documento_identificacao_id'];
            $numeroDocumento = $data['EntidadeIdentificacao']['numero'];

            $entidadeExiste = $this->verificaEntidadeExiste($nuit, $telemovel, $tipoDocumento,
                $numeroDocumento);
            if ($entidadeExiste) {
                return $entidadeExiste['Entidade']['id'];
            }

            $beforeEvent = new CakeEvent('Model.Entidade.beforeCreate', $this, [
                'data' => $data,
            ]);
            $this->getEventManager()->dispatch($beforeEvent);
            $data = $beforeEvent->result;

            if (!$this->save($data)) {
                throw new EntidadeNotCreatedException();
            }
            $afterEvent = new CakeEvent('Model.Entidade.afterCreate', $this, [
                'data' => $data,
            ]);
            $this->getEventManager()->dispatch($afterEvent);
            $data = $afterEvent->result;
            $dataSource->commit();

            return $this->id;
        }

        /**
         * Verifica se uma entidade existe
         *
         * @param $entidade
         * @return array|bool|null
         */
        public function verificaEntidadeExiste($entidade)
        {
            $nuit = $entidade['nuit'];
            $telemovel = $entidade['telemovel'];
            $tipoDocumento = $entidade['documento_identificacao_id'];
            $numeroDocumento = $entidade['documento_identificacao_numero'];
            $nuitExiste = $this->findByNuit($nuit);
            if (!empty($nuitExiste)) {
                return $nuitExiste;
            }
            $telemovelExiste = $this->findByTelemovel($telemovel);
            if (!empty($telemovelExiste)) {
                return $telemovelExiste;
            }
            $documentoExiste = $this->find('first', [
                'conditions' => [
                    'documento_identificacao_id'     => $tipoDocumento,
                    'documento_identificacao_numero' => $numeroDocumento,
                ],
            ]);
            if (!empty($documentoExiste)) {
                return $documentoExiste;
            }

            return false;
        }

    }

?>
