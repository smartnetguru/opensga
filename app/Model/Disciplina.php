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
        ),
        'DisciplinaPlanoEstudo' => array(
            'className' => 'DisciplinaPlanoEstudo',
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
        'DisciplinaUnidadeOrganica' => array(
            'className' => 'DisciplinaUnidadeOrganica',
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
        'DisciplinaDocente' => array(
            'className' => 'DisciplinaDocente',
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
            'message' => 'Este codigo ja foi usado por outra disciplina.',
            'allowEmpty' => false,
        ),
        'name' => array(
            'rule' => 'isUnique',
            'message' => 'Ja existe uma disciplina com este nome.',
            'required' => 'create',
            'allowEmpty' => false,
        )
    );
    
    public function cadastraDisciplina($data){
        $datasource = $this->getDataSource();
        $datasource->begin();
        
        $this->create();
        if($this->save($data)){
            $arrayDisciplinaUnidade = array(
                'disciplina_id'=>$this->id,
                'unidade_organica_id'=>$data['Disciplina']['unidade_organica_id'],
                'estado_objecto_id'=>1
            );
            $this->DisciplinaUnidadeOrganica->create();
            if ($this->DisciplinaUnidadeOrganica->save($arrayDisciplinaUnidade)) {
                return $datasource->commit();
            }
            $datasource->rollback();
            return false;
        }
        $datasource->rollback();;
        return false;
    }

}

?>