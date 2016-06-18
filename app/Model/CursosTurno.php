<?php
App::uses('AppModel', 'Model');

/**
 * CursosTurno Model
 *
 * @property Curso $Curso
 * @property Turno $Turno
 */
class CursosTurno extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Curso' => [
            'className' => 'Curso',
            'foreignKey' => 'curso_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Turno' => [
            'className' => 'Turno',
            'foreignKey' => 'turno_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
