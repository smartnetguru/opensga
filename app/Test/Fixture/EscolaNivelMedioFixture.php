<?php
/**
 * EscolaNivelMedioFixture
 *
 */
class EscolaNivelMedioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'distrito_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'pais_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
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
			'distrito_id' => 1,
			'provincia_id' => 1,
			'pais_id' => 1
		),
	);
}
