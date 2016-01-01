<?php

class Disciplina extends AppModel {

    var $name = 'Disciplina';
    //public $displayField='name';
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    var $belongsTo = array(
        
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
        )
    );
    var $validate = array(
        'name' => array(
            'rule' => 'isUnique',
            'message' => 'Ja existe uma disciplina com este nome.',
            'required' => 'create',
            'allowEmpty' => false,
        ),
        'codigo' => array(
            'rule' => 'isUnique',
            'message' => 'Ja existe uma disciplina com este Codigo.',
            'required' => 'create',
            'allowEmpty' => true,
        )
    );

    /**
     * Cadastra uma disciplina para uma unidade Organica.
     *
     * Primeiro preenche na tabela Disciplinas Genericas
     * @param $data
     * @return bool
     * @throws Exception
     *
     *
     */
    public function cadastraDisciplina($data){


        $datasource = $this->getDataSource();
        $datasource->begin();

        $this->create();
        if($this->save($data)){
            $disciplinaId = $this->id;
        } else{
            $disciplina = $this->findByName($data['Disciplina']['name']);
            if(!empty($disciplina)){
                $disciplinaId = $disciplina['Disciplina']['id'];
            } else{
                $datasource->rollback();
                return false;
            }
        }

        $arrayDisciplinaUnidade = array(
            'disciplina_id'=>$disciplinaId,
            'unidade_organica_id'=>$data['Disciplina']['unidade_organica_id'],
            'estado_objecto_id'=>1
        );
        $disciplinaUnidadeExiste = $this->DisciplinaUnidadeOrganica->find('first', [
            'conditions' => [
                'disciplina_id'=>$disciplinaId,
                'unidade_organica_id'=>$data['Disciplina']['unidade_organica_id'],
            ]
        ]);
        if(!empty($disciplinaUnidadeExiste)){
            $datasource->commit();
            return false;
        }

        $this->DisciplinaUnidadeOrganica->create();
        if ($this->DisciplinaUnidadeOrganica->save($arrayDisciplinaUnidade)) {
            return $datasource->commit();
        }
        $datasource->rollback();
        return false;

    }

}

?>