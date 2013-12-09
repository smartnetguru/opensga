<?php
/**
 * ProvinciaFixture
 *
 */
class ProvinciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'paise_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'codigo' => null,
			'name' => 'Cabo Delgado',
			'paise_id' => '152'
		),
		array(
			'id' => '2',
			'codigo' => null,
			'name' => 'Gaza',
			'paise_id' => '152'
		),
		array(
			'id' => '3',
			'codigo' => null,
			'name' => 'Inhambane',
			'paise_id' => '152'
		),
		array(
			'id' => '4',
			'codigo' => null,
			'name' => 'Manica',
			'paise_id' => '152'
		),
		array(
			'id' => '5',
			'codigo' => null,
			'name' => 'Cidade de Maputo',
			'paise_id' => '152'
		),
		array(
			'id' => '6',
			'codigo' => null,
			'name' => 'Maputo',
			'paise_id' => '152'
		),
		array(
			'id' => '7',
			'codigo' => null,
			'name' => 'Nampula',
			'paise_id' => '152'
		),
		array(
			'id' => '8',
			'codigo' => null,
			'name' => 'Niassa',
			'paise_id' => '152'
		),
		array(
			'id' => '9',
			'codigo' => null,
			'name' => 'Sofala',
			'paise_id' => '152'
		),
		array(
			'id' => '10',
			'codigo' => null,
			'name' => 'Tete',
			'paise_id' => '152'
		),
	);

}
