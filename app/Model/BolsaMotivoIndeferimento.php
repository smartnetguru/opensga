<?php
App::uses('AppModel', 'Model');

/**
 * BolsaMotivoIndeferimento Model
 *
 * @property BolsaResultado $BolsaResultado
 */
class BolsaMotivoIndeferimento extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'BolsaResultado' => [
            'className' => 'BolsaResultado',
            'foreignKey' => 'bolsa_motivo_indeferimento_id',
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
