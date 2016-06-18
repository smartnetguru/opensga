<?php
App::uses('AppModel', 'Model');

/**
 * SadeIndicador Model
 *
 * @property SadeParametro $SadeParametro
 */
class SadeIndicador extends AppModel
{

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'SadeParametro' => [
            'className' => 'SadeParametro',
            'foreignKey' => 'sade_indicador_id',
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
