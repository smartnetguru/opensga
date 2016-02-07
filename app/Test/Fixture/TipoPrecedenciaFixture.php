<?php

	/**
	 * TipoPrecedenciaFixture
	 *
	 */
	class TipoPrecedenciaFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['table' => 'tipo_precedencias'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Obrigatoria',
			],
			[
				'id'   => '2',
				'name' => 'Aconselhada',
			],
		];

	}
