<?php
App::uses('AppModel', 'Model');

/**
 * UnidadeOrganicaRole Model
 *
 * @property UnidadeOrganica $UnidadeOrganica
 * @property Role $Role
 * @property EstadoObjecto $EstadoObjecto
 */
class UnidadeOrganicaRole extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'UnidadeOrganica' => [
            'className' => 'UnidadeOrganica',
            'foreignKey' => 'unidade_organica_id',
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
