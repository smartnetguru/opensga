<?php

App::uses('CooperacaoAppModel', 'Cooperacao.Model');

class CooperacaoAcordoInstituicao extends CooperacaoAppModel {

    public $hasOne = array(
        'CooperacaoAcordo' => array(
            'className' => 'CooperacaoAcordo',
            'foreignKey' => 'cooperacao_acordo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Instituicao' => array(
            'className' => 'Instituicao',
            'foreignKey' => 'instituicao_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );



}
