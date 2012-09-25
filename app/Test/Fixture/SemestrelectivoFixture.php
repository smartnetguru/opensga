<?php
/**
 * SemestrelectivoFixture
 *
 */
class SemestrelectivoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_inicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_fim' => array('type' => 'date', 'null' => true, 'default' => null),
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
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 1,
			'semestre' => 1,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 2,
			'semestre' => 2,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 3,
			'semestre' => 3,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 4,
			'semestre' => 4,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 5,
			'semestre' => 5,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 6,
			'semestre' => 6,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 7,
			'semestre' => 7,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 8,
			'semestre' => 8,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 9,
			'semestre' => 9,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 10,
			'semestre' => 10,
			'data_inicio' => '2012-09-25',
			'data_fim' => '2012-09-25'
		),
	);

}
