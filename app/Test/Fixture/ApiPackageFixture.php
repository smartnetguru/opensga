<?php
/**
 * ApiPackageFixture
 *
 */
class ApiPackageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'parent_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'path' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'parent_id' => array('column' => 'parent_id', 'unique' => 0),
			'path' => array('column' => 'path', 'unique' => 0)
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
			'id' => '5061dc4c-a2f0-400a-8948-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 1,
			'rght' => 1,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-081c-42e2-a471-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 2,
			'rght' => 2,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-5ce0-460a-b99f-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 3,
			'rght' => 3,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-b0dc-4915-a98d-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 4,
			'rght' => 4,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-04d8-4cc6-8e38-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 5,
			'rght' => 5,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-5870-40d0-943c-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 6,
			'rght' => 6,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-ab40-41cf-9dd5-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 7,
			'rght' => 7,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-06a8-40a1-a95d-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 8,
			'rght' => 8,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-59dc-444d-b6d1-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 9,
			'rght' => 9,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
		array(
			'id' => '5061dc4c-af68-4ea7-a0da-21cc00000000',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'lft' => 10,
			'rght' => 10,
			'created' => '2012-09-25 16:31:08',
			'modified' => '2012-09-25 16:31:08'
		),
	);

}
