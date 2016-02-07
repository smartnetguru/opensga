<?php

	/**
	 * TipoMatriculaFixture
	 *
	 */
	class TipoMatriculaFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'TipoMatricula'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Novo Ingresso',
			],
			[
				'id'   => '2',
				'name' => 'Renovação',
			],
			[
				'id'   => '3',
				'name' => 'Reingresso',
			],
		];

	}
