<?php
App::uses('AppModel', 'Model');

/**
 * TipoFuncionario Model
 *
 * @property Funcionario $Funcionario
 */
class TipoFuncionario extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'Funcionario' => [
            'className' => 'Funcionario',
            'foreignKey' => 'tipo_funcionario_id',
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
