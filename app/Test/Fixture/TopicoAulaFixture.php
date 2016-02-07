<?php

	/**
	 * TopicoAula Fixture
	 */
	class TopicoAulaFixture extends CakeTestFixture
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
				'unsigned' => false,
				'key'      => 'primary',
			],
			'aula_id'         => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'topico'          => [
				'type'    => 'string',
				'null'    => true,
				'default' => null,
				'length'  => 45,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8',
			],
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
				'id'      => 1,
				'aula_id' => 1,
				'topico'  => 'Lorem ipsum dolor sit amet',
			],
		];

	}
