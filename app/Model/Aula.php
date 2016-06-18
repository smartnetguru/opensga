<?php
App::uses('AppModel', 'Model');

/**
 * Aula Model
 *
 * @property Turma $Turma
 * @property Docente $Docente
 * @property SalaAula $SalaAula
 */
class Aula extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'turma_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'docente_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'tema_aula' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Turma' => array(
            'className' => 'Turma',
            'foreignKey' => 'turma_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Docente' => array(
            'className' => 'Docente',
            'foreignKey' => 'docente_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SalaAula' => array(
            'className' => 'SalaAula',
            'foreignKey' => 'sala_aula_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * @param $data
     * @return bool
     * @throws Exception
     * Cria uma nova Aula para uma determinada Turma
     *
     * @todo Evitar criar duas aulas para mesma turma na mesma hora
     */
    public function criaAula($data)
    {
        $datasource = $this->getDataSource();
        $datasource->begin();
        $this->create();
        if (!$this->save($data)) {
            $datasource->rollback();
            throw new DataNotSavedException($this->validationErrors);
        }

        $datasource->commit();
        return true;

    }
}
