<?php

	/**
	 * RegimeEstudoFixture
	 *
	 */
	class RegimeEstudoFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'RegimeEstudo'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Estudante em tempo Inteiro',
			],
			[
				'id'   => '2',
				'name' => 'Estudante Trabalhador',
			],
		];

	}
