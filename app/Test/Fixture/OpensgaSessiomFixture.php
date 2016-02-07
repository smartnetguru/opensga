<?php

	/**
	 * OpensgaSessiom Fixture
	 */
	class OpensgaSessiomFixture extends CakeTestFixture
	{

		/**
		 * Fields
		 *
		 * @var array
		 */
		public $fields = [
			'id'              => [
				'type'    => 'string',
				'null'    => false,
				'default' => null,
				'key'     => 'primary',
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8',
			],
			'data'            => [
				'type'    => 'text',
				'null'    => true,
				'default' => null,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8',
			],
			'expires'         => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'indexes'         => [
				'PRIMARY' => ['column' => 'id', 'unique' => 1],
			],
			'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'],
		];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'      => 'Lorem ipsum dolor sit amet',
				'data'    => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
				'expires' => 1,
			],
		];

	}
