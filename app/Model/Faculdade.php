<?php
class Faculdade extends AppModel {
	var $name = 'Faculdade';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    
    public $belongsTo = array(
        'SimNaoResposta' => array(
			'className' => 'SimNaoResposta',
			'foreignKey' => 'pagamento_exclusivo',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
    );
    var $hasMany = array(
		'Seccao' => array(
			'className' => 'Seccao',
			'foreignKey' => 'faculdade_id',
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
        'message' => 'Este codigo ja foi usado por outra Faculdade.'
    ),
    'name' => array(
        'rule' => 'isUnique',
        'message' => 'Ja existe uma Faculdade com este nome.',
        'required'   => true,
        'allowEmpty' => false,
    )        
);

}
