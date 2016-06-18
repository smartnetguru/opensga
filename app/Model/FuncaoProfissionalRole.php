<?php
App::uses('AppModel', 'Model');

/**
 * FuncaoProfissionalRole Model
 *
 * @property FuncaoProfissional $FuncaoProfissional
 * @property Role $Role
 * @property EstadoObjecto $EstadoObjecto
 */
class FuncaoProfissionalRole extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'FuncaoProfissional' => [
            'className' => 'FuncaoProfissional',
            'foreignKey' => 'funcao_profissional_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Role' => [
            'className' => 'Role',
            'foreignKey' => 'role_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoObjecto' => [
            'className' => 'EstadoObjecto',
            'foreignKey' => 'estado_objecto_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
