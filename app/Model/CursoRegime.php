<?php
App::uses('AppModel', 'Model');

/**
 * CursoRegime Model
 *
 * @property Curso $Curso
 * @property Regime $Regime
 */
class CursoRegime extends AppModel
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
        'Regime' => [
            'className' => 'Regime',
            'foreignKey' => 'regime_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
