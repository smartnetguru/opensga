<?php

	/**
	 * EntidadeNecessidade Fixture
	 */
	class EntidadeNecessidadeFixture extends CakeTestFixture
	{

		/**
		 * Fields
		 *
		 * @var array
		 */
		public $fields = [
			'id'                      => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
				'key'      => 'primary',
			],
			'entidade_id'             => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
			],
			'necessidade_especial_id' => ['type'     => 'integer',
										  'null'     => false,
										  'default'  => null,
										  'length'   => 3,
										  'unsigned' => true,
			],
			'created'                 => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'                => ['type' => 'datetime', 'null' => true, 'default' => null],
			'created_by'              => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'modified_by'             => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'estado_objecto_id'       => ['type'     => 'integer',
										  'null'     => false,
										  'default'  => null,
										  'length'   => 3,
										  'unsigned' => true,
			],
			'detalhes'                => ['type'    => 'text',
										  'null'    => true,
										  'default' => null,
										  'collate' => 'latin1_swedish_ci',
										  'charset' => 'latin1',
			],
			'indexes'                 => [
				'PRIMARY' => ['column' => 'id', 'unique' => 1],
			],
			'tableParameters'         => ['charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'],
		];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'                      => 1,
				'entidade_id'             => 1,
				'necessidade_especial_id' => 1,
				'created'                 => '2016-01-27 17:09:25',
				'modified'                => '2016-01-27 17:09:25',
				'created_by'              => 1,
				'modified_by'             => 1,
				'estado_objecto_id'       => 1,
				'detalhes'                => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			],
		];

	}
