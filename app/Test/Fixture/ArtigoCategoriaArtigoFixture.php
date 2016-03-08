<?php

	/**
	 * ArtigoCategoriaArtigo Fixture
	 */
	class ArtigoCategoriaArtigoFixture extends CakeTestFixture
	{

		/**
		 * Fields
		 *
		 * @var array
		 */
		public $fields = [
			'id'                  => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'unsigned' => false,
				'key'      => 'primary',
			],
			'artigo_id'           => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'unsigned' => false,
				'key'      => 'index',
			],
			'artigo_categoria_id' => ['type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false],
			'created'             => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'            => ['type' => 'datetime', 'null' => true, 'default' => null],
			'created_by'          => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'modified_by'         => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'estado_objecto_id'   => ['type'     => 'integer',
									  'null'     => false,
									  'default'  => null,
									  'length'   => 3,
									  'unsigned' => true,
			],
			'indexes'             => [
				'PRIMARY'                 => ['column' => 'id', 'unique' => 1],
				'unique_artigo_categoria' => ['column' => ['artigo_id', 'artigo_categoria_id'], 'unique' => 1],
			],
			'tableParameters'     => ['charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'],
		];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'                  => 1,
				'artigo_id'           => 1,
				'artigo_categoria_id' => 1,
				'created'             => '2016-01-14 21:05:46',
				'modified'            => '2016-01-14 21:05:46',
				'created_by'          => 1,
				'modified_by'         => 1,
				'estado_objecto_id'   => 1,
			],
		];

	}
