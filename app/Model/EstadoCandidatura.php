<?php
App::uses('AppModel', 'Model');

/**
 * EstadoCandidatura Model
 *
 * @property CandidatoGraduacao $CandidatoGraduacao
 */
class EstadoCandidatura extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'CandidatoGraduacao' => [
            'className' => 'CandidatoGraduacao',
            'foreignKey' => 'estado_candidatura_id',
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

}
