<?php

	/**
	 * NotificationFixture
	 *
	 */
	class NotificationFixture extends CakeTestFixture
	{

		/**
		 * Fields
		 *
		 * @var array
		 */
		public $fields = [
			'id'                => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'unsigned' => false,
				'key'      => 'primary',
			],
			'user_id'           => ['type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false],
			'title'             => [
				'type'    => 'string',
				'null'    => false,
				'default' => null,
				'length'  => 100,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'details'           => [
				'type'    => 'string',
				'null'    => false,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'created'           => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'          => ['type' => 'datetime', 'null' => true, 'default' => null],
			'created_by'        => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'modified_by'       => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'estado_message_id' => ['type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false],
			'area_notification' => ['type'    => 'string',
									'null'    => true,
									'default' => null,
									'length'  => 45,
									'collate' => 'latin1_swedish_ci',
									'charset' => 'latin1',
			],
			'indexes'           => [
				'PRIMARY' => ['column' => 'id', 'unique' => 1],
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
				'id'                => 1,
				'user_id'           => 1,
				'title'             => 'Lorem ipsum dolor sit amet',
				'details'           => 'Lorem ipsum dolor sit amet',
				'created'           => '2014-09-30 11:13:33',
				'modified'          => '2014-09-30 11:13:33',
				'created_by'        => 1,
				'modified_by'       => 1,
				'estado_message_id' => 1,
				'area_notification' => 'Lorem ipsum dolor sit amet',
			],
		];

	}
