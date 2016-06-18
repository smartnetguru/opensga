<?php
App::uses('AppModel', 'Model');

/**
 * DisciplinaUnidadeOrganica Model
 *
 * @property Disciplina $Disciplina
 * @property UnidadeOrganica $UnidadeOrganica
 * @property EstadoObjecto $EstadoObjecto
 */
class DisciplinaUnidadeOrganica extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = [
        'disciplina_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                'allowEmpty' => false,
                'required' => true,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'unidade_organica_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                'allowEmpty' => false,
                'required' => true,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'estado_objecto_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
    ];

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Disciplina' => [
            'className' => 'Disciplina',
            'foreignKey' => 'disciplina_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'UnidadeOrganica' => [
            'className' => 'UnidadeOrganica',
            'foreignKey' => 'unidade_organica_id',
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
