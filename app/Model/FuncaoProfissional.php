<?php
App::uses('AppModel', 'Model');

/**
 * FuncaoProfissional Model
 *
 * @property Funcionario $Funcionario
 * @property Funcionario $Funcionario
 */
class FuncaoProfissional extends AppModel
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
            'foreignKey' => 'funcao_profissional_id',
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


    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */


    public function beforeSave($options = [])
    {
        parent::beforeSave($options);
        $this->data['FuncaoProfissional']['codigo'] = Inflector::slug($this->data['FuncaoProfissional']['name']);

        return true;
    }

}
