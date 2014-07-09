<?php
/**
 * GroupRoleFixture
 *
 */
class GroupRoleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'role_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'group_roles_groups_idx' => array('column' => 'group_id', 'unique' => 0)
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
			'id' => 1,
			'group_id' => 1,
			'role_id' => 1,
			'created' => '2014-02-19 23:19:55',
			'modified' => '2014-02-19 23:19:55',
			'created_by' => 1,
			'modified_by' => 1,
			'estado_objecto_id' => 1
		),
	);

}
