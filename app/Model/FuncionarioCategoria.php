<?php
App::uses('AppModel', 'Model');

/**
 * FuncionarioCategoria Model
 *
 * @property Funcionario $Funcionario
 */
class FuncionarioCategoria extends AppModel
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
            'foreignKey' => 'funcionario_categoria_id',
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

    public $validate = [
        'name' => [
            'nameNotBlank' => [
                'rule' => 'notBlank',
                'required' => true,
                'message' => 'O nome da Categoria do Funcionario é de preenchimento Obrigatório',
            ],
            'nameUnique' => [
                'rule' => 'isUnique',
                'message' => 'Ja existe uma categoria de Funcionario com este nome',
            ],
        ],
    ];

}
