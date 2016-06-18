<?php
App::uses('AppModel', 'Model');

/**
 * DocenteUnidadeOrganica Model
 *
 * @property Docente $Docente
 * @property UnidadeOrganica $UnidadeOrganica
 * @property EstadoObjecto $EstadoObjecto
 */
class DocenteUnidadeOrganica extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Docente' => [
            'className' => 'Docente',
            'foreignKey' => 'docente_id',
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
