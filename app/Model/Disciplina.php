<?php



class Disciplina extends AppModel {
	var $name = 'Disciplina';
        //public $displayField='name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'UnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'unidade_organica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

	);

	var $hasMany = array(
		'Grupodisciplina' => array(
			'className' => 'Grupodisciplina',
			'foreignKey' => 'disciplina_id',
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
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'disciplina_id',
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

    var $validate = array(
    'codigo' => array(
        'rule' => 'isUnique',
        'message' => 'Este codigo ja foi usado por outra disciplina.'
    ),
    'name' => array(
        'rule' => 'isUnique',
        'message' => 'Ja existe uma disciplina com este nome.',
        'required'   => true,
        'allowEmpty' => false,
    )
);

    function getAllByCurso($curso_id){

    }

}
?>