<?php
/**
 * AcoFixture
 *
 */
class AcoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'idx_acos_lft_rght' => array('column' => array('lft', 'rght'), 'unique' => 0),
			'idx_acos_alias' => array('column' => 'alias', 'unique' => 0),
			'idx_acos_model_foreign_key' => array('column' => array('model', 'foreign_key'), 'unique' => 0)
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
			'parent_id' => 1,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 1,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 1,
			'rght' => 1
		),
		array(
			'id' => 2,
			'parent_id' => 2,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 2,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 2,
			'rght' => 2
		),
		array(
			'id' => 3,
			'parent_id' => 3,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 3,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 3,
			'rght' => 3
		),
		array(
			'id' => 4,
			'parent_id' => 4,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 4,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 4,
			'rght' => 4
		),
		array(
			'id' => 5,
			'parent_id' => 5,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 5,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 5,
			'rght' => 5
		),
		array(
			'id' => 6,
			'parent_id' => 6,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 6,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 6,
			'rght' => 6
		),
		array(
			'id' => 7,
			'parent_id' => 7,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 7,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 7,
			'rght' => 7
		),
		array(
			'id' => 8,
			'parent_id' => 8,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 8,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 8,
			'rght' => 8
		),
		array(
			'id' => 9,
			'parent_id' => 9,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 9,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 9,
			'rght' => 9
		),
		array(
			'id' => 10,
			'parent_id' => 10,
			'model' => 'Lorem ipsum dolor sit amet',
			'foreign_key' => 10,
			'alias' => 'Lorem ipsum dolor sit amet',
			'lft' => 10,
			'rght' => 10
		),
	);

}
