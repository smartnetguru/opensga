<?php
    App::uses('AppModel', 'Model');

    /**
     * BolsaTipoBolsa Model
     *
     * @property BolsaPedido $BolsaPedido
     * @property BolsaResultado $BolsaResultado
     * @property BolsaValorBolsa $BolsaValorBolsa
     */
    class BolsaTipoBolsa extends AppModel
    {


        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = [
            'BolsaPedido'     => [
                'className'    => 'BolsaPedido',
                'foreignKey'   => 'bolsa_tipo_bolsa_id',
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
            'BolsaResultado'  => [
                'className'    => 'BolsaResultado',
                'foreignKey'   => 'bolsa_tipo_bolsa_id',
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
            'BolsaValorBolsa' => [
                'className'    => 'BolsaValorBolsa',
                'foreignKey'   => 'bolsa_tipo_bolsa_id',
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
            'BolsaBolsa'      => [
                'className'    => 'BolsaBolsa',
                'foreignKey'   => 'bolsa_tipo_bolsa_id',
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

    }
