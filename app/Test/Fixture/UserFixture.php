<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigocartao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 1,
			'modified_by' => 1
		),
		array(
			'id' => 2,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 2,
			'modified_by' => 2
		),
		array(
			'id' => 3,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 3,
			'modified_by' => 3
		),
		array(
			'id' => 4,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 4,
			'modified_by' => 4
		),
		array(
			'id' => 5,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 5,
			'modified_by' => 5
		),
		array(
			'id' => 6,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 6,
			'modified_by' => 6
		),
		array(
			'id' => 7,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 7,
			'modified_by' => 7
		),
		array(
			'id' => 8,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 8,
			'modified_by' => 8
		),
		array(
			'id' => 9,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 9,
			'modified_by' => 9
		),
		array(
			'id' => 10,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'codigocartao' => 'Lorem ipsum dolor sit amet',
			'group_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'created_by' => 10,
			'modified_by' => 10
		),
	);

}
