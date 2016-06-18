<?php
App::uses('AppModel', 'Model');

/**
 * TipoInscricao Model
 *
 * @property Inscricao $Inscricao
 */
class TipoInscricao extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'Inscricao' => [
            'className' => 'Inscricao',
            'foreignKey' => 'tipo_inscricao_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
    ];

}
