<?php

	/**
	 * NivelFixture
	 *
	 */
	class NivelFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['table' => 'nivels'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'    => '1',
				'name'  => 'Bacharelato',
				'nivel' => null,
			],
			[
				'id'    => '2',
				'name'  => 'Licenciatura',
				'nivel' => null,
			],
			[
				'id'    => '3',
				'name'  => 'Mestrado',
				'nivel' => null,
			],
			[
				'id'    => '4',
				'name'  => 'Doutoramento',
				'nivel' => null,
			],
		];

	}
