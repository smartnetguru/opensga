<?php
/**
 * InstituicaoFixture
 *
 */
class InstituicaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cidade_origem' => array('type' => 'integer', 'null' => true, 'default' => null),
		'provincia_origem' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pais_origem' => array('type' => 'integer', 'null' => true, 'default' => null),
		'continente_origem' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => 1,
			'name' => 1,
			'cidade_origem' => 1,
			'provincia_origem' => 1,
			'pais_origem' => 1,
			'continente_origem' => 1,
			'created' => '2013-11-18 10:17:52',
			'modified' => '2013-11-18 10:17:52',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
