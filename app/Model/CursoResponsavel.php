<?php
App::uses('AppModel', 'Model');
/**
 * CursoResponsavel Model
 *
 * @property Curso $Curso
 * @property Funcionario $Funcionario
 * @property EstadoObjecto $EstadoObjecto
 */
class CursoResponsavel extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'funcionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoObjecto' => array(
			'className' => 'EstadoObjecto',
			'foreignKey' => 'estado_objecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'User' => array(
            'className' => 'user',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
	);

    var $validate = array
    (
        'curso_id' => array
        (
            'naoRepetirFuncionarioCurso' => array
            (
                'rule' => array('checkUnique', array('curso_id', 'user_id', 'estado_objecto_id')),
                'message' => 'Este Funcionário já é encarregado deste curso.',
            )
        ),
    );
}
