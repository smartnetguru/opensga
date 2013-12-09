<?php
/**
 * ConfigFixture
 *
 */
class ConfigFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'autoload' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'activo' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'name' => 'ano_lectivo',
			'value' => '2012',
			'autoload' => 1,
			'descricao' => null,
			'activo' => 0
		),
		array(
			'id' => '2',
			'name' => 'semestre',
			'value' => '1',
			'autoload' => 1,
			'descricao' => null,
			'activo' => 0
		),
		array(
			'id' => '3',
			'name' => 'anolectivo_id',
			'value' => '1',
			'autoload' => 1,
			'descricao' => null,
			'activo' => 0
		),
		array(
			'id' => '4',
			'name' => 'semestrelectivo_id',
			'value' => '1',
			'autoload' => 1,
			'descricao' => null,
			'activo' => 0
		),
	);

}
