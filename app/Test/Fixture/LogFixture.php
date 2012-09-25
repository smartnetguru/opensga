<?php
/**
 * LogFixture
 *
 */
class LogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'responsible_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'model_alias' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'model_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'log_detail_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'types' => array('column' => 'type', 'unique' => 0)
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
			'responsible_id' => 1,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 1,
			'type' => 1,
			'log_detail_id' => 1,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 2,
			'responsible_id' => 2,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 2,
			'type' => 2,
			'log_detail_id' => 2,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 3,
			'responsible_id' => 3,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 3,
			'type' => 3,
			'log_detail_id' => 3,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 4,
			'responsible_id' => 4,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 4,
			'type' => 4,
			'log_detail_id' => 4,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 5,
			'responsible_id' => 5,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 5,
			'type' => 5,
			'log_detail_id' => 5,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 6,
			'responsible_id' => 6,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 6,
			'type' => 6,
			'log_detail_id' => 6,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 7,
			'responsible_id' => 7,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 7,
			'type' => 7,
			'log_detail_id' => 7,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 8,
			'responsible_id' => 8,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 8,
			'type' => 8,
			'log_detail_id' => 8,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 9,
			'responsible_id' => 9,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 9,
			'type' => 9,
			'log_detail_id' => 9,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
		array(
			'id' => 10,
			'responsible_id' => 10,
			'model_alias' => 'Lorem ipsum dolor sit amet',
			'model_id' => 10,
			'type' => 10,
			'log_detail_id' => 10,
			'created' => '2012-09-25 16:39:34',
			'modified' => '2012-09-25 16:39:34'
		),
	);

}
