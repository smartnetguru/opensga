<?php
/**
 * PaiseFixture
 *
 */
class PaiseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'iso' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'iso3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nacionalidade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'iso' => 'Lorem ip',
			'iso3' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'L',
			'nacionalidade' => 'Lorem ipsum dolor sit amet'
		),
	);

}
