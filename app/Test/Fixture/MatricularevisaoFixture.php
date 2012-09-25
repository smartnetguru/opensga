<?php
/**
 * MatricularevisaoFixture
 *
 */
class MatricularevisaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'revisao' => array('type' => 'integer', 'null' => true, 'default' => null),
		'datahora' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'datamatricula' => array('type' => 'date', 'null' => true, 'default' => null),
		'estado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'revisao' => 1,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 1,
			'curso_id' => 1,
			'planoestudo_id' => 1,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 1
		),
		array(
			'id' => 2,
			'revisao' => 2,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 2,
			'curso_id' => 2,
			'planoestudo_id' => 2,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 2
		),
		array(
			'id' => 3,
			'revisao' => 3,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 3,
			'curso_id' => 3,
			'planoestudo_id' => 3,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 3
		),
		array(
			'id' => 4,
			'revisao' => 4,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 4,
			'curso_id' => 4,
			'planoestudo_id' => 4,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 4
		),
		array(
			'id' => 5,
			'revisao' => 5,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 5,
			'curso_id' => 5,
			'planoestudo_id' => 5,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 5
		),
		array(
			'id' => 6,
			'revisao' => 6,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 6,
			'curso_id' => 6,
			'planoestudo_id' => 6,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 6
		),
		array(
			'id' => 7,
			'revisao' => 7,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 7,
			'curso_id' => 7,
			'planoestudo_id' => 7,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 7
		),
		array(
			'id' => 8,
			'revisao' => 8,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 8,
			'curso_id' => 8,
			'planoestudo_id' => 8,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 8
		),
		array(
			'id' => 9,
			'revisao' => 9,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 9,
			'curso_id' => 9,
			'planoestudo_id' => 9,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 9
		),
		array(
			'id' => 10,
			'revisao' => 10,
			'datahora' => '2012-09-25 16:39:42',
			'aluno_id' => 10,
			'curso_id' => 10,
			'planoestudo_id' => 10,
			'datamatricula' => '2012-09-25',
			'estado' => 'Lorem ipsum dolor sit ame',
			'codigo' => 'Lorem ipsum dolor sit a',
			'anolectivo_id' => 10
		),
	);

}
