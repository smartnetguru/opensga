<?php
App::uses('AppModel', 'Model');

/**
 * RegimeLectivo Model
 *
 * @property Matricula $Matricula
 */
class RegimeLectivo extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'Matricula' => [
            'className' => 'Matricula',
            'foreignKey' => 'regime_lectivo_id',
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
