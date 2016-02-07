<?php

    App::uses('AppModel', 'Model');

    /**
     * Instituicao Model
     *
     * @property CooperacaoAcordo $CooperacaoAcordo
     */
    class Instituicao extends AppModel
    {

        public $belongsTo = [
            'Cidade'     => [
                'className'  => 'Cidade',
                'foreignKey' => 'cidade_origem',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Provincia'  => [
                'className'  => 'Provincia',
                'foreignKey' => 'provincia_origem',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Pais'       => [
                'className'  => 'Pais',
                'foreignKey' => 'pais_origem',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Continente' => [
                'className'  => 'Continente',
                'foreignKey' => 'continente_origem',
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
            'CooperacaoAcordo' => [
                'className'    => 'CooperacaoAcordo',
                'foreignKey'   => 'instituicao_id',
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


        public $validade = [
        
        ];

        public function getInstituicaoById($id)
        {
            $instituicao = $this->findById($id);
            if ($instituicao) {
                return $instituicao['Instituicao'];
            } else {
                return false;
            }
        }

    }
