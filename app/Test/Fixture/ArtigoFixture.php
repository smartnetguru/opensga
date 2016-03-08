<?php

	/**
	 * Artigo Fixture
	 */
	class ArtigoFixture extends CakeTestFixture
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
			'user_id'                 => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
			],
			'entidade_id'             => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'length'   => 10,
				'unsigned' => true,
			],
			'data_publicacao'         => ['type' => 'datetime', 'null' => false, 'default' => null],
			'conteudo'                => [
				'type'    => 'text',
				'null'    => false,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'titulo'                  => [
				'type'    => 'text',
				'null'    => false,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'resumo'                  => [
				'type'    => 'text',
				'null'    => true,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'estado_objecto_id'       => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'length'   => 3,
				'unsigned' => true,
			],
			'artigo_estado_artigo_id' => ['type'     => 'integer',
										  'null'     => false,
										  'default'  => null,
										  'length'   => 3,
										  'unsigned' => true,
			],
			'slug'                    => ['type'    => 'string',
										  'null'    => false,
										  'default' => null,
										  'key'     => 'unique',
										  'collate' => 'latin1_swedish_ci',
										  'charset' => 'latin1',
			],
			'created'                 => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'                => ['type' => 'datetime', 'null' => true, 'default' => null],
			'created_by'              => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'modified_by'             => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'indexes'                 => [
				'PRIMARY'     => ['column' => 'id', 'unique' => 1],
				'slug_UNIQUE' => ['column' => 'slug', 'unique' => 1],
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
				'user_id'                 => 1,
				'entidade_id'             => 1,
				'data_publicacao'         => '2016-01-14 21:02:53',
				'conteudo'                => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
				'titulo'                  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
				'resumo'                  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
				'estado_objecto_id'       => 1,
				'artigo_estado_artigo_id' => 1,
				'slug'                    => 'Lorem ipsum dolor sit amet',
				'created'                 => '2016-01-14 21:02:53',
				'modified'                => '2016-01-14 21:02:53',
				'created_by'              => 1,
				'modified_by'             => 1,
			],
		];

	}
