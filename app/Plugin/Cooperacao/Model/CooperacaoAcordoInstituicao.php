<?php

    App::uses('CooperacaoAppModel', 'Cooperacao.Model');

    class CooperacaoAcordoInstituicao extends CooperacaoAppModel
    {

        public $hasOne = [
            'CooperacaoAcordo' => [
                'className'  => 'CooperacaoAcordo',
                'foreignKey' => 'cooperacao_acordo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'Instituicao'      => [
                'className'  => 'Instituicao',
                'foreignKey' => 'instituicao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];


    }
