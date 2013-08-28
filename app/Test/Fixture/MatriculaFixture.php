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
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'codigo' => '39578',
			'aluno_id' => '20557',
			'curso_id' => '87',
			'planoestudo_id' => null,
			'data' => '2010-12-21',
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '1',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '2',
			'codigo' => '5',
			'aluno_id' => '3835',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '3',
			'codigo' => '6',
			'aluno_id' => '3802',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '4',
			'codigo' => '8',
			'aluno_id' => '5822',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '5',
			'codigo' => '9',
			'aluno_id' => '3795',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '6',
			'codigo' => '10',
			'aluno_id' => '3804',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '7',
			'codigo' => '11',
			'aluno_id' => '3831',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '8',
			'codigo' => '12',
			'aluno_id' => '12757',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '9',
			'codigo' => '13',
			'aluno_id' => '3863',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
		array(
			'id' => '10',
			'codigo' => '14',
			'aluno_id' => '3841',
			'curso_id' => '117',
			'planoestudo_id' => null,
			'data' => null,
			'estadomatricula_id' => '1',
			'modified' => '2013-06-10 14:52:40',
			'created' => '2013-06-10 14:52:40',
			'user_id' => '1',
			'anolectivo_id' => '2',
			'turno_id' => null,
			'nivel' => null,
			'created_by' => null,
			'modified_by' => null,
			'tipo_matricula_id' => '0',
			'regimelectivo_id' => null
		),
	);

}
