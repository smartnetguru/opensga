<?php

	/**
	 * EstadoCivilFixture
	 *
	 */
	class EstadoCivilFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'EstadoCivil'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Solteiro',
			],
			[
				'id'   => '2',
				'name' => 'Casado',
			],
			[
				'id'   => '3',
				'name' => 'União Marital',
			],
			[
				'id'   => '4',
				'name' => 'Divorciado',
			],
			[
				'id'   => '5',
				'name' => 'Separado',
			],
			[
				'id'   => '6',
				'name' => 'Viúvo',
			],
		];

	}
