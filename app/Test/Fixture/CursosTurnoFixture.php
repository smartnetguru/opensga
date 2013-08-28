<?php
/**
 * CursosTurnoFixture
 *
 */
class CursosTurnoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'turno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'curso_id' => '1',
			'turno_id' => '4',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '2',
			'curso_id' => '2',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '3',
			'curso_id' => '3',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '4',
			'curso_id' => '4',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '5',
			'curso_id' => '5',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '6',
			'curso_id' => '6',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '7',
			'curso_id' => '7',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '8',
			'curso_id' => '8',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '9',
			'curso_id' => '9',
			'turno_id' => '1',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '10',
			'curso_id' => '10',
			'turno_id' => '2',
			'created' => '2013-06-14 15:34:53',
			'modified' => '2013-06-14 15:34:53',
			'created_by' => null,
			'modified_by' => null
		),
	);

}
