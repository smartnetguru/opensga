<?php
/**
 * MessageUser Fixture
 */
class MessageUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 19, 'unsigned' => true, 'key' => 'primary'),
		'message_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 19, 'unsigned' => true, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'message_folder_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true, 'key' => 'index'),
		'estado_message_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true, 'key' => 'index'),
		'is_starred' => array('type' => 'text', 'null' => false, 'default' => null, 'length' => 1),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_message_users_users_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_message_users_folders_idx' => array('column' => 'message_folder_id', 'unique' => 0),
			'fk_message_users_estados_idx' => array('column' => 'estado_message_id', 'unique' => 0),
			'fk_message_users_messages_idx' => array('column' => 'message_id', 'unique' => 0)
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
			'id' => '',
			'message_id' => '',
			'user_id' => 1,
			'message_folder_id' => 1,
			'estado_message_id' => 1,
			'is_starred' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
