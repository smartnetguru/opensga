<?php
/**
 * SeccaoFixture
 *
 */
class SeccaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 1,
			'faculdade_id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 2,
			'faculdade_id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 3,
			'faculdade_id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 4,
			'faculdade_id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 5,
			'faculdade_id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 6,
			'faculdade_id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 7,
			'faculdade_id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 8,
			'faculdade_id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 9,
			'faculdade_id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'departamento_id' => 10,
			'faculdade_id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
	);

}
