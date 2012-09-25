<?php
/**
 * CidadeFixture
 *
 */
class CidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'paise_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 1,
			'paise_id' => 1
		),
		array(
			'id' => 2,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 2,
			'paise_id' => 2
		),
		array(
			'id' => 3,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 3,
			'paise_id' => 3
		),
		array(
			'id' => 4,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 4,
			'paise_id' => 4
		),
		array(
			'id' => 5,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 5,
			'paise_id' => 5
		),
		array(
			'id' => 6,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 6,
			'paise_id' => 6
		),
		array(
			'id' => 7,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 7,
			'paise_id' => 7
		),
		array(
			'id' => 8,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 8,
			'paise_id' => 8
		),
		array(
			'id' => 9,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 9,
			'paise_id' => 9
		),
		array(
			'id' => 10,
			'codigo' => 'L',
			'name' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 10,
			'paise_id' => 10
		),
	);

}
