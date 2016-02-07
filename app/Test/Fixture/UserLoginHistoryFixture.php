<?php

	/**
	 * UserLoginHistorie Fixture
	 */
	class UserLoginHistoryFixture extends CakeTestFixture
	{

		/**
		 * Fields
		 *
		 * @var array
		 */
		public $fields = [
			'id'              => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
				'key'      => 'primary',
			],
			'user_id'         => [
				'type'     => 'integer',
				'null'     => true,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
			],
			'login_date'      => ['type' => 'datetime', 'null' => true, 'default' => null],
			'ip'              => [
				'type'    => 'string',
				'null'    => true,
				'default' => null,
				'length'  => 45,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'group_id'        => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'indexes'         => [
				'PRIMARY' => ['column' => 'id', 'unique' => 1],
			],
			'tableParameters' => ['charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'],
		];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'         => '1',
				'user_id'    => '42646',
				'login_date' => '2015-09-08 13:56:06',
				'ip'         => '127.0.0.1',
				'group_id'   => null,
			],
			[
				'id'         => '2',
				'user_id'    => '42646',
				'login_date' => '2015-09-08 19:32:38',
				'ip'         => '127.0.0.1',
				'group_id'   => null,
			],
			[
				'id'         => '3',
				'user_id'    => '42646',
				'login_date' => '2015-09-09 09:27:10',
				'ip'         => '127.0.0.1',
				'group_id'   => '2',
			],
			[
				'id'         => '4',
				'user_id'    => '42646',
				'login_date' => '2015-09-09 18:20:17',
				'ip'         => '127.0.0.1',
				'group_id'   => '2',
			],
			[
				'id'         => '5',
				'user_id'    => '42646',
				'login_date' => '2015-09-10 07:35:53',
				'ip'         => '127.0.0.1',
				'group_id'   => '2',
			],
			[
				'id'         => '6',
				'user_id'    => '42646',
				'login_date' => '2015-09-12 15:12:32',
				'ip'         => '127.0.0.1',
				'group_id'   => '2',
			],
			[
				'id'         => '7',
				'user_id'    => '10358',
				'login_date' => '2015-09-14 06:19:18',
				'ip'         => '127.0.0.1',
				'group_id'   => '3',
			],
			[
				'id'         => '8',
				'user_id'    => '42646',
				'login_date' => '2015-09-14 06:40:45',
				'ip'         => '127.0.0.1',
				'group_id'   => '2',
			],
			[
				'id'         => '9',
				'user_id'    => '10358',
				'login_date' => '2015-09-14 11:08:41',
				'ip'         => '127.0.0.1',
				'group_id'   => '3',
			],
			[
				'id'         => '10',
				'user_id'    => '42910',
				'login_date' => '2015-09-15 02:58:14',
				'ip'         => '127.0.0.1',
				'group_id'   => '2',
			],
		];

	}
