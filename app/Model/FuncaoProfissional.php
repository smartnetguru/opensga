<?php
App::uses('AppModel', 'Model');
/**
 * FuncaoProfissional Model
 *
 * @property Funcionario $Funcionario
 * @property Funcionario $Funcionario
 */
class FuncaoProfissional extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'funcao_profissional_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Funcionario' => array(
			'className' => 'Funcionario',
			'joinTable' => 'funcionarios_funcao_profissionals',
			'foreignKey' => 'funcao_profissional_id',
			'associationForeignKey' => 'funcionario_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
        
        
        public function beforeSave($options = array()) {
            parent::beforeSave($options);
            $this->data['FuncaoProfissional']['codigo'] = Inflector::slug($this->data['FuncaoProfissional']['name']);
            return true;
        }

}
