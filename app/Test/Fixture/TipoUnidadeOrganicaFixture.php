<?php
/**
 * TipoUnidadeOrganicaFixture
 *
 */
class TipoUnidadeOrganicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'id' => '1',
			'name' => 'Faculdade',
			'created' => '2013-05-31 08:28:13',
			'modified' => '2013-05-31 08:28:13',
			'created_by' => '1',
			'modified_by' => null
		),
		array(
			'id' => '2',
			'name' => 'Departamento',
			'created' => '2013-05-31 08:30:33',
			'modified' => '2013-05-31 08:30:33',
			'created_by' => '1',
			'modified_by' => null
		),
		array(
			'id' => '3',
			'name' => 'Secção',
			'created' => '2013-05-31 08:30:48',
			'modified' => '2013-05-31 08:30:48',
			'created_by' => '1',
			'modified_by' => null
		),
		array(
			'id' => '4',
			'name' => 'Direcção',
			'created' => '2013-08-07 06:40:11',
			'modified' => '2013-08-07 06:40:11',
			'created_by' => '1',
			'modified_by' => null
		),
	);

}
