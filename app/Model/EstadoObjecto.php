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
class EstadoObjecto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BolsaPedido' => array(
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
			'counterQuery' => ''
		),
		'CandidatoGraduacao' => array(
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
			'counterQuery' => ''
		),
		'CursoResponsavel' => array(
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
			'counterQuery' => ''
		),
		'Curso' => array(
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
			'counterQuery' => ''
		),
		'DisciplinaDocente' => array(
			'className' => 'DisciplinaDocente',
			'foreignKey' => 'estado_objecto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'DisciplinaPlanoEstudo' => array(
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
			'counterQuery' => ''
		),
		'DisciplinaUnidadeOrganica' => array(
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
			'counterQuery' => ''
		),
		'EntidadeContacto' => array(
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
			'counterQuery' => ''
		),
		'EntidadeIdentificacao' => array(
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
			'counterQuery' => ''
		),
		'FormaMudancaCurso' => array(
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
			'counterQuery' => ''
		),
		'FuncaoProfissionalRole' => array(
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
			'counterQuery' => ''
		),
		'GroupRole' => array(
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
			'counterQuery' => ''
		),
		'Group' => array(
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
			'counterQuery' => ''
		),
		'GroupsUser' => array(
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
			'counterQuery' => ''
		),
		'Message' => array(
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
			'counterQuery' => ''
		),
		'PlanoEstudo' => array(
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
			'counterQuery' => ''
		),
		'Precedencia' => array(
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
			'counterQuery' => ''
		),
		'Role' => array(
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
			'counterQuery' => ''
		),
		'UnidadeOrganicaRole' => array(
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
			'counterQuery' => ''
		),
		'UnidadeOrganica' => array(
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
			'counterQuery' => ''
		),
		'UserRole' => array(
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
			'counterQuery' => ''
		),
		'User' => array(
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
			'counterQuery' => ''
		)
	);

}
