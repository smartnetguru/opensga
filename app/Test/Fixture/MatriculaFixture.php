<?php
/**
 * MatriculaFixture
 *
 */
class MatriculaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data' => array('type' => 'date', 'null' => true, 'default' => null),
		'estadomatricula_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'turno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nivel' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipo_matricula_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'regimelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 1,
			'curso_id' => 1,
			'planoestudo_id' => 1,
			'data' => '2012-09-25',
			'estadomatricula_id' => 1,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 1,
			'anolectivo_id' => 1,
			'turno_id' => 1,
			'nivel' => 1,
			'created_by' => 1,
			'modified_by' => 1,
			'tipo_matricula_id' => 1,
			'regimelectivo_id' => 1
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 2,
			'curso_id' => 2,
			'planoestudo_id' => 2,
			'data' => '2012-09-25',
			'estadomatricula_id' => 2,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 2,
			'anolectivo_id' => 2,
			'turno_id' => 2,
			'nivel' => 2,
			'created_by' => 2,
			'modified_by' => 2,
			'tipo_matricula_id' => 2,
			'regimelectivo_id' => 2
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 3,
			'curso_id' => 3,
			'planoestudo_id' => 3,
			'data' => '2012-09-25',
			'estadomatricula_id' => 3,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 3,
			'anolectivo_id' => 3,
			'turno_id' => 3,
			'nivel' => 3,
			'created_by' => 3,
			'modified_by' => 3,
			'tipo_matricula_id' => 3,
			'regimelectivo_id' => 3
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 4,
			'curso_id' => 4,
			'planoestudo_id' => 4,
			'data' => '2012-09-25',
			'estadomatricula_id' => 4,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 4,
			'anolectivo_id' => 4,
			'turno_id' => 4,
			'nivel' => 4,
			'created_by' => 4,
			'modified_by' => 4,
			'tipo_matricula_id' => 4,
			'regimelectivo_id' => 4
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 5,
			'curso_id' => 5,
			'planoestudo_id' => 5,
			'data' => '2012-09-25',
			'estadomatricula_id' => 5,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 5,
			'anolectivo_id' => 5,
			'turno_id' => 5,
			'nivel' => 5,
			'created_by' => 5,
			'modified_by' => 5,
			'tipo_matricula_id' => 5,
			'regimelectivo_id' => 5
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 6,
			'curso_id' => 6,
			'planoestudo_id' => 6,
			'data' => '2012-09-25',
			'estadomatricula_id' => 6,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 6,
			'anolectivo_id' => 6,
			'turno_id' => 6,
			'nivel' => 6,
			'created_by' => 6,
			'modified_by' => 6,
			'tipo_matricula_id' => 6,
			'regimelectivo_id' => 6
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 7,
			'curso_id' => 7,
			'planoestudo_id' => 7,
			'data' => '2012-09-25',
			'estadomatricula_id' => 7,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 7,
			'anolectivo_id' => 7,
			'turno_id' => 7,
			'nivel' => 7,
			'created_by' => 7,
			'modified_by' => 7,
			'tipo_matricula_id' => 7,
			'regimelectivo_id' => 7
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 8,
			'curso_id' => 8,
			'planoestudo_id' => 8,
			'data' => '2012-09-25',
			'estadomatricula_id' => 8,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 8,
			'anolectivo_id' => 8,
			'turno_id' => 8,
			'nivel' => 8,
			'created_by' => 8,
			'modified_by' => 8,
			'tipo_matricula_id' => 8,
			'regimelectivo_id' => 8
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 9,
			'curso_id' => 9,
			'planoestudo_id' => 9,
			'data' => '2012-09-25',
			'estadomatricula_id' => 9,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 9,
			'anolectivo_id' => 9,
			'turno_id' => 9,
			'nivel' => 9,
			'created_by' => 9,
			'modified_by' => 9,
			'tipo_matricula_id' => 9,
			'regimelectivo_id' => 9
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 10,
			'curso_id' => 10,
			'planoestudo_id' => 10,
			'data' => '2012-09-25',
			'estadomatricula_id' => 10,
			'modified' => '2012-09-25 16:39:50',
			'created' => '2012-09-25 16:39:50',
			'user_id' => 10,
			'anolectivo_id' => 10,
			'turno_id' => 10,
			'nivel' => 10,
			'created_by' => 10,
			'modified_by' => 10,
			'tipo_matricula_id' => 10,
			'regimelectivo_id' => 10
		),
	);

}
