<?php
App::uses('AppModel', 'Model');

/**
 * Alumni Model
 *
 * @property Entidade $Entidade
 * @property Aluno $Aluno
 * @property AlumniCandidatoAlumni $AlumniCandidatoAlumni
 * @property User $User
 */
class AlumniAlumni extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Entidade' => [
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Aluno' => [
            'className' => 'Aluno',
            'foreignKey' => 'aluno_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'AlumniCandidatoAlumni' => [
            'className' => 'AlumniCandidatoAlumni',
            'foreignKey' => 'candidato_alumni_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
