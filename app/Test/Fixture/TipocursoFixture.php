<?php
/**
 * TipocursoFixture
 *
 */
class TipocursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Médio'
		),
		array(
			'id' => '2',
			'name' => 'Superior'
		),
		array(
			'id' => '3',
			'name' => 'Pós-Graduação'
		),
		array(
			'id' => '4',
			'name' => 'Técnico'
		),
	);

}
