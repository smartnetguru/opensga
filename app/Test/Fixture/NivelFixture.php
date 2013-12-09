<?php
/**
 * NivelFixture
 *
 */
class NivelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nivel' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name' => 'Bacharelato',
			'nivel' => null
		),
		array(
			'id' => '2',
			'name' => 'Licenciatura',
			'nivel' => null
		),
		array(
			'id' => '3',
			'name' => 'Mestrado',
			'nivel' => null
		),
		array(
			'id' => '4',
			'name' => 'Doutoramento',
			'nivel' => null
		),
	);

}
