<?php
/**
 * AlumniFixture
 *
 */
class AlumniFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_registo' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'candidato_alumni_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_aprovacao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'user_aprovacao' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'alumnis_entidades_idx' => array('column' => 'entidade_id', 'unique' => 0),
			'alumnis_alunos_idx' => array('column' => 'aluno_id', 'unique' => 0),
			'alumnis_candidato_alumnis_idx' => array('column' => 'candidato_alumni_id', 'unique' => 0),
			'alumnis_users_idx' => array('column' => 'user_id', 'unique' => 0),
			'alumnis_user_aprovacao_idx' => array('column' => 'user_aprovacao', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
