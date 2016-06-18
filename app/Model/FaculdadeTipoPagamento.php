<?php
App::uses('AppModel', 'Model');

/**
 * FaculdadeTipoPagamento Model
 *
 * @property Faculdade $Faculdade
 * @property Tipopagamento $Tipopagamento
 */
class FaculdadeTipoPagamento extends AppModel
{

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Faculdade' => [
            'className' => 'Faculdade',
            'foreignKey' => 'faculdade_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Tipopagamento' => [
            'className' => 'Tipopagamento',
            'foreignKey' => 'tipopagamento_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
