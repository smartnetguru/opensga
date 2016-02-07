<?php

	/**
	 * RegimeTrabalhoFixture
	 *
	 */
	class RegimeTrabalhoFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'RegimeTrabalho'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Tempo Inteiro',
			],
			[
				'id'   => '2',
				'name' => 'Tempo Parcial',
			],
		];

	}
