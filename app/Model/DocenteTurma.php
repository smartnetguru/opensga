<?php
App::uses('AppModel', 'Model');

/**
 * DocenteTurma Model
 *
 * @property Docente $Docente
 * @property Turma $Turma
 * @property EstadoDocenteTurma $EstadoDocenteTurma
 * @property TipoDocenteTurma $TipoDocenteTurma
 */
class DocenteTurma extends AppModel
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
        'Turma' => [
            'className' => 'Turma',
            'foreignKey' => 'turma_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoDocenteTurma' => [
            'className' => 'EstadoDocenteTurma',
            'foreignKey' => 'estado_docente_turma_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'TipoDocenteTurma' => [
            'className' => 'TipoDocenteTurma',
            'foreignKey' => 'tipo_docente_turma_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];

    public $validate = [
        'docente_id' => [
            'rule' => ['isUnique', ['docente_id', 'turma_id', 'estado_docente_turma_id'], false],
            'message' => 'Este docente ja pertence a turma seleccionada',
        ],
    ];

}
