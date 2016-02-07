<?php

	/**
	 * GrauParentescoFixture
	 *
	 */
	class GrauParentescoFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['table' => 'grau_parentescos'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Pai',
			],
			[
				'id'   => '2',
				'name' => 'Mae',
			],
			[
				'id'   => '3',
				'name' => 'Irmao',
			],
			[
				'id'   => '4',
				'name' => 'Familiar',
			],
			[
				'id'   => '5',
				'name' => 'Amigo',
			],
			[
				'id'   => '6',
				'name' => 'Outro',
			],
		];

	}
