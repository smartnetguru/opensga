<?php

	/**
	 * CursoRegime Fixture
	 */
	class CursoRegimeFixture extends CakeTestFixture
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
			'curso_id'        => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'regime_id'       => [
				'type'     => 'integer',
				'null'     => true,
				'default'  => null,
				'length'   => 3,
				'unsigned' => true,
			],
			'created'         => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'        => ['type' => 'datetime', 'null' => true, 'default' => null],
			'created_by'      => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
			'modified_by'     => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
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
				'id'          => 1,
				'curso_id'    => 1,
				'regime_id'   => 1,
				'created'     => '2015-09-06 08:58:41',
				'modified'    => '2015-09-06 08:58:41',
				'created_by'  => 1,
				'modified_by' => 1,
			],
		];

	}
