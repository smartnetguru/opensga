<?php
App::uses('AppModel', 'Model');

/**
 * ArtigoCategoriaArtigo Model
 *
 * @property Artigo $Artigo
 * @property ArtigoCategoria $ArtigoCategoria
 * @property EstadoObjecto $EstadoObjecto
 */
class ArtigoCategoriaArtigo extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = [
        'artigo_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'artigo_categoria_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
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

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Artigo' => [
            'className' => 'Artigo',
            'foreignKey' => 'artigo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'ArtigoCategoria' => [
            'className' => 'ArtigoCategoria',
            'foreignKey' => 'artigo_categoria_id',
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
