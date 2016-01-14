<?php
/**
 * ArtigoAreaAcademica Fixture
 */
class ArtigoAreaAcademicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'artigo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'area_academica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'estado_objecto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'unique_artigo_area_academica' => array('column' => array('artigo_id', 'area_academica_id'), 'unique' => 1)
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
			'artigo_id' => 1,
			'area_academica_id' => 1,
			'created' => '2016-01-14 21:05:15',
			'modified' => '2016-01-14 21:05:15',
			'created_by' => 1,
			'modified_by' => 1,
			'estado_objecto_id' => 1
		),
	);

}
