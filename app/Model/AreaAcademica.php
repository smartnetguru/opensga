<?php

    App::uses('AppModel', 'Model');

    /**
     * AreaAcademica Model
     *
     * @property UnidadeOrganica $UnidadeOrganica
     */
    class AreaAcademica extends AppModel
    {
        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = [
            'UnidadeOrganica' => [
                'className'    => 'UnidadeOrganica',
                'foreignKey'   => 'area_academica_id',
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
            'name' => [
                ['rule' => 'notempty', 'message' => 'Campo Obrigatório'],
                ['rule' => 'isUnique', 'message' => 'Já existe uma Área Académica com este nome'],
            ],
        ];

    }
