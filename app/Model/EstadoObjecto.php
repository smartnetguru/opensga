<?php
App::uses('AppModel', 'Model');

/**
 * EstadoObjecto Model
 *
 * @property BolsaPedido $BolsaPedido
 * @property CandidatoGraduacao $CandidatoGraduacao
 * @property CursoResponsavel $CursoResponsavel
 * @property Curso $Curso
 * @property DisciplinaDocente $DisciplinaDocente
 * @property DisciplinaPlanoEstudo $DisciplinaPlanoEstudo
 * @property DisciplinaUnidadeOrganica $DisciplinaUnidadeOrganica
 * @property EntidadeContacto $EntidadeContacto
 * @property EntidadeIdentificacao $EntidadeIdentificacao
 * @property FormaMudancaCurso $FormaMudancaCurso
 * @property FuncaoProfissionalRole $FuncaoProfissionalRole
 * @property GroupRole $GroupRole
 * @property Group $Group
 * @property GroupsUser $GroupsUser
 * @property Message $Message
 * @property PlanoEstudo $PlanoEstudo
 * @property Precedencia $Precedencia
 * @property Role $Role
 * @property UnidadeOrganicaRole $UnidadeOrganicaRole
 * @property UnidadeOrganica $UnidadeOrganica
 * @property UserRole $UserRole
 * @property User $User
 */
class EstadoObjecto extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'BolsaPedido' => [
            'className' => 'BolsaPedido',
            'foreignKey' => 'estado_objecto_id',
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
        'CandidatoGraduacao' => [
            'className' => 'CandidatoGraduacao',
            'foreignKey' => 'estado_objecto_id',
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
        'CursoResponsavel' => [
            'className' => 'CursoResponsavel',
            'foreignKey' => 'estado_objecto_id',
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
            'foreignKey' => 'estado_objecto_id',
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
        'DisciplinaPlanoEstudo' => [
            'className' => 'DisciplinaPlanoEstudo',
            'foreignKey' => 'estado_objecto_id',
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
        'DisciplinaUnidadeOrganica' => [
            'className' => 'DisciplinaUnidadeOrganica',
            'foreignKey' => 'estado_objecto_id',
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
        'EntidadeContacto' => [
            'className' => 'EntidadeContacto',
            'foreignKey' => 'estado_objecto_id',
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
        'EntidadeIdentificacao' => [
            'className' => 'EntidadeIdentificacao',
            'foreignKey' => 'estado_objecto_id',
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
        'FormaMudancaCurso' => [
            'className' => 'FormaMudancaCurso',
            'foreignKey' => 'estado_objecto_id',
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
        'FuncaoProfissionalRole' => [
            'className' => 'FuncaoProfissionalRole',
            'foreignKey' => 'estado_objecto_id',
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
        'GroupRole' => [
            'className' => 'GroupRole',
            'foreignKey' => 'estado_objecto_id',
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
        'Group' => [
            'className' => 'Group',
            'foreignKey' => 'estado_objecto_id',
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
        'GroupsUser' => [
            'className' => 'GroupsUser',
            'foreignKey' => 'estado_objecto_id',
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
        'Message' => [
            'className' => 'Message',
            'foreignKey' => 'estado_objecto_id',
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
        'PlanoEstudo' => [
            'className' => 'PlanoEstudo',
            'foreignKey' => 'estado_objecto_id',
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
        'Precedencia' => [
            'className' => 'Precedencia',
            'foreignKey' => 'estado_objecto_id',
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
        'Role' => [
            'className' => 'Role',
            'foreignKey' => 'estado_objecto_id',
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
        'UnidadeOrganicaRole' => [
            'className' => 'UnidadeOrganicaRole',
            'foreignKey' => 'estado_objecto_id',
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
        'UnidadeOrganica' => [
            'className' => 'UnidadeOrganica',
            'foreignKey' => 'estado_objecto_id',
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
        'UserRole' => [
            'className' => 'UserRole',
            'foreignKey' => 'estado_objecto_id',
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
        'User' => [
            'className' => 'User',
            'foreignKey' => 'estado_objecto_id',
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
