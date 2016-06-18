<?php
App::uses('AppModel', 'Model');

/**
 * CursoNews Model
 *
 * @property GrauAcademico $GrauAcademico
 * @property TipoCurso $TipoCurso
 * @property UnidadeOrganica $UnidadeOrganica
 * @property EstadoObjecto $EstadoObjecto
 * @property CursoResponsavel $CursoResponsavel
 */
class CursoNews extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'GrauAcademico' => [
            'className' => 'GrauAcademico',
            'foreignKey' => 'grau_academico_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'TipoCurso' => [
            'className' => 'TipoCurso',
            'foreignKey' => 'tipo_curso_id',
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
        'CursoResponsavel' => [
            'className' => 'CursoResponsavel',
            'foreignKey' => 'curso_responsavel_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
