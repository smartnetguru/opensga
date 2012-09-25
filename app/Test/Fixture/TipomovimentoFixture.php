<?php
/**
 * TipomovimentoFixture
 *
 */
class TipomovimentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'tipomovimento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'tipomovimento_id', 'unique' => 1)
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
			'tipomovimento_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'tipomovimento_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
