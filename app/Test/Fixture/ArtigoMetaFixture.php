<?php

	/**
	 * ArtigoMeta Fixture
	 */
	class ArtigoMetaFixture extends CakeTestFixture
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
				'length'   => 10,
				'unsigned' => true,
				'key'      => 'primary',
			],
			'artigo_id'         => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'unsigned' => false,
				'key'      => 'index',
			],
			'meta_key'          => [
				'type'    => 'string',
				'null'    => false,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'meta_value'        => [
				'type'    => 'text',
				'null'    => false,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'estado_objecto_id' => ['type'     => 'integer',
									'null'     => false,
									'default'  => null,
									'length'   => 3,
									'unsigned' => true,
			],
			'created'           => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'          => ['type' => 'datetime', 'null' => true, 'default' => null],
			'created_by'        => ['type'     => 'integer',
									'null'     => true,
									'default'  => null,
									'length'   => 10,
									'unsigned' => true,
			],
			'modified_by'       => ['type'     => 'integer',
									'null'     => true,
									'default'  => null,
									'length'   => 10,
									'unsigned' => true,
			],
			'indexes'           => [
				'PRIMARY'            => ['column' => 'id', 'unique' => 1],
				'unique_artigo_meta' => ['column' => ['artigo_id', 'meta_key'], 'unique' => 1],
			],
			'tableParameters'   => ['charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'],
		];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
		];

	}
