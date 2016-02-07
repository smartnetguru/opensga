<?php

	/**
	 * FuncionarioCategoria Fixture
	 */
	class FuncionarioCategoriaFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['records' => true];

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
			'name'            => [
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

	}
