<?php

	/**
	 * EstadoMatriculaFixture
	 *
	 */
	class EstadoMatriculaFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'EstadoMatricula'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Normal',
			],
			[
				'id'   => '2',
				'name' => 'Suspensa',
			],
			[
				'id'   => '3',
				'name' => 'Anulada',
			],
			[
				'id'   => '4',
				'name' => 'Concluida',
			],
		];

	}
