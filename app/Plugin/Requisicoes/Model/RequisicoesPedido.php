<?php
    App::uses('RequisicoesAppModel', 'Requisicoes.Model');

    /**
     * RequisicoesPedido Model
     *
     * @property Aluno $Aluno
     * @property Entidade $Entidade
     * @property Curso $Curso
     * @property RequisicoesTipoPedido $RequisicoesTipoPedido
     * @property RequisicoesEstadoPedido $RequisicoesEstadoPedido
     * @property Funcionario $Funcionario
     * @property RequisicoesPedidoLog $RequisicoesPedidoLog
     */
    class RequisicoesPedido extends RequisicoesAppModel
    {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'aluno_id';


        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'Aluno'                   => [
                'className'  => 'Aluno',
                'foreignKey' => 'aluno_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Entidade'                => [
                'className'  => 'Entidade',
                'foreignKey' => 'entidade_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Curso'                   => [
                'className'  => 'Curso',
                'foreignKey' => 'curso_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'RequisicoesTipoPedido'   => [
                'className'  => 'Requisicoes.RequisicoesTipoPedido',
                'foreignKey' => 'requisicoes_tipo_pedido_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'RequisicoesEstadoPedido' => [
                'className'  => 'Requisicoes.RequisicoesEstadoPedido',
                'foreignKey' => 'requisicoes_estado_pedido_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Funcionario'             => [
                'className'  => 'Funcionario',
                'foreignKey' => 'funcionario_id',
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
            'RequisicoesPedidoLog' => [
                'className'    => 'Requisicoes.RequisicoesPedidoLog',
                'foreignKey'   => 'requisicoes_pedido_id',
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


        public function getAllRequisicoesPedidoByEstudante($aluno_id)
        {
            $this->contain([
                'RequisicoesEstadoPedido',
                'RequisicoesTipoPedido',
                'Funcionario' => [
                    'Entidade',
                ],
            ]);
            $requisicoes = $this->find('all', ['conditions' => ['aluno_id' => $aluno_id]]);

            return $requisicoes;
        }

        public function gravaRequisicao($data)
        {
            $datasource = $this->getDataSource();
            $datasource->begin();

            $this->Aluno->contain('Entidade');
            $aluno = $this->Aluno->findById($data['RequisicoesPedido']['aluno_id']);
            $data['entidade_id'] = $aluno['Aluno']['entidade_id'];
            $data['RequisicoesPedido']['nome_requerente'] = $aluno['Entidade']['name'];
            $data['RequisicoesPedido']['curso_id'] = $aluno['Aluno']['curso_id'];

            if ($data['RequisicoesPedido']['novo_tipo_requisicao'] != null) {
                $tipo_requisicao_existe = $this->RequisicoesPedido->RequisicoesTipoPedido->findByName($data['RequisicoesPedido']['novo_tipo_requisicao']);
                if (empty($tipo_requisicao_existe)) {
                    $array_tipo_requisicao = [
                        'RequisicoesTipoPedido' => [
                            "name" => $data['RequisicoesPedido']['novo_tipo_requisicao'],
                        ],
                    ];
                    $this->RequisicoesTipoPedido->create();
                    if(!$this->RequisicoesTipoPedido->save($array_tipo_requisicao)){
                        throw new DataNotSavedExeption($this->RequisicoesTipoPedido->validationErrors);
                    }
                    $data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $this->RequisicoesPedido->RequisicoesTipoPedido->id;
                } else {

                    $data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $tipo_requisicao_existe['RequisicoesTipoPedido']['id'];

                }
            }
            $this->create();
            if(!$this->save($data)){
                throw new DataNotSavedException($this->validationErrors);
            }
            if(empty($data['RequisicoesPedido']['numero_pedido'])){
                $this->set('numero_pedido', $this->id);
                $this->save();
            }

            $datasource->commit();
            return true;
        }


    }

