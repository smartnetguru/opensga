<?php
/**
 * CursosEscolaFixture
 *
 */
class CursosEscolaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_adicao' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Curso' => array('column' => 'curso_id', 'unique' => 0),
			'Escola' => array('column' => 'escola_id', 'unique' => 0)
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
			'escola_id' => 1,
			'curso_id' => 1,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 2,
			'escola_id' => 2,
			'curso_id' => 2,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 3,
			'escola_id' => 3,
			'curso_id' => 3,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 4,
			'escola_id' => 4,
			'curso_id' => 4,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 5,
			'escola_id' => 5,
			'curso_id' => 5,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 6,
			'escola_id' => 6,
			'curso_id' => 6,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 7,
			'escola_id' => 7,
			'curso_id' => 7,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 8,
			'escola_id' => 8,
			'curso_id' => 8,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 9,
			'escola_id' => 9,
			'curso_id' => 9,
			'data_adicao' => '2012-09-25'
		),
		array(
			'id' => 10,
			'escola_id' => 10,
			'curso_id' => 10,
			'data_adicao' => '2012-09-25'
		),
	);

}
