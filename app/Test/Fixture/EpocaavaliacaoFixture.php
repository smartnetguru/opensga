<?php
/**
 * EpocaavaliacaoFixture
 *
 */
class EpocaavaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
