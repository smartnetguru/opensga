<?php

	/**
	 * NotificationUser Fixture
	 */
	class NotificationUserFixture extends CakeTestFixture
	{

		/**
		 * Fields
		 *
		 * @var array
		 */
		public $fields = [
			'id'                => [
				'type'     => 'biginteger',
				'null'     => false,
				'default'  => null,
				'length'   => 19,
				'unsigned' => true,
				'key'      => 'primary',
			],
			'user_id'           => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
				'key'      => 'index',
			],
			'notification_id'   => [
				'type'     => 'biginteger',
				'null'     => false,
				'default'  => null,
				'length'   => 19,
				'unsigned' => true,
				'key'      => 'index',
			],
			'created'           => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'          => ['type' => 'datetime', 'null' => true, 'default' => null],
			'created_by'        => [
				'type'     => 'integer',
				'null'     => true,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
			],
			'modified_by'       => [
				'type'     => 'integer',
				'null'     => true,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
			],
			'estado_message_id' => ['type'     => 'integer',
									'null'     => true,
									'default'  => null,
									'length'   => 3,
									'unsigned' => true,
			],
			'indexes'           => [
				'PRIMARY'                               => ['column' => 'id', 'unique' => 1],
				'notifications_users_notifications_idx' => ['column' => 'notification_id', 'unique' => 0],
				'notifications_users_users_idx'         => ['column' => 'user_id', 'unique' => 0],
			],
			'tableParameters'   => ['charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'],
		];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'                => '',
				'user_id'           => 1,
				'notification_id'   => '',
				'created'           => '2015-11-10 18:09:33',
				'modified'          => '2015-11-10 18:09:33',
				'created_by'        => 1,
				'modified_by'       => 1,
				'estado_message_id' => 1,
			],
		];

	}
