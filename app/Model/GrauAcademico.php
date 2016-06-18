<?php
App::uses('AppModel', 'Model');

/**
 * GrauAcademico Model
 *
 * @property AlumniCandidatoAlumni $AlumniCandidatoAlumni
 * @property Curso $Curso
 * @property Funcionario $Funcionario
 */
class GrauAcademico extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'AlumniCandidatoAlumni' => [
            'className' => 'AlumniCandidatoAlumni',
            'foreignKey' => 'grau_academico_id',
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
        'Curso' => [
            'className' => 'Curso',
            'foreignKey' => 'grau_academico_id',
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
        'Funcionario' => [
            'className' => 'Funcionario',
            'foreignKey' => 'grau_academico_id',
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
