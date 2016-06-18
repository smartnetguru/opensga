<?php

/**
 * Aula Fixture
 */
class AulaFixture extends CakeTestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
        'turma_id' => array(
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'unsigned' => false,
            'key' => 'index'
        ),
        'docente_id' => array(
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'unsigned' => false,
            'key' => 'index'
        ),
        'tema_aula' => array(
            'type' => 'string',
            'null' => false,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'charset' => 'utf8'
        ),
        'inicio_aula' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'fim_aula' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'sala_aula_id' => array(
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'unsigned' => false,
            'key' => 'index'
        ),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
        'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1),
            'aulas_sala_aulas' => array('column' => 'sala_aula_id', 'unique' => 0),
            'aulas_turmas' => array('column' => 'turma_id', 'unique' => 0),
            'aulas_docentes' => array('column' => 'docente_id', 'unique' => 0)
        ),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id' => 1,
            'turma_id' => 1,
            'docente_id' => 1,
            'tema_aula' => 'Lorem ipsum dolor sit amet',
            'inicio_aula' => '2016-02-23 14:43:45',
            'fim_aula' => '2016-02-23 14:43:45',
            'sala_aula_id' => 1,
            'created' => '2016-02-23 14:43:45',
            'modified' => '2016-02-23 14:43:45',
            'created_by' => 1,
            'modified_by' => 1
        ),
    );

}
