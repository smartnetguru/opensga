<?php
/**
 * ArosAcoFixture
 *
 */
class ArosAcoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'aro_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'aco_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1),
			'idx_aros_acos_aro_id_aco_id' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1),
			'aco_id' => array('column' => 'aco_id', 'unique' => 0)
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
			'aro_id' => 1,
			'aco_id' => 1,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 2,
			'aro_id' => 2,
			'aco_id' => 2,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 3,
			'aro_id' => 3,
			'aco_id' => 3,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 4,
			'aro_id' => 4,
			'aco_id' => 4,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 5,
			'aro_id' => 5,
			'aco_id' => 5,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 6,
			'aro_id' => 6,
			'aco_id' => 6,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 7,
			'aro_id' => 7,
			'aco_id' => 7,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 8,
			'aro_id' => 8,
			'aco_id' => 8,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 9,
			'aro_id' => 9,
			'aco_id' => 9,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
		array(
			'id' => 10,
			'aro_id' => 10,
			'aco_id' => 10,
			'_create' => '',
			'_read' => '',
			'_update' => '',
			'_delete' => ''
		),
	);

}
