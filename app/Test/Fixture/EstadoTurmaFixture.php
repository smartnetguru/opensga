<?php

	/**
	 * EstadoTurmaFixture
	 *
	 */
	class EstadoTurmaFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'EstadoTurma'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Activa',
			],
			[
				'id'   => '2',
				'name' => 'Fechada',
			],
			[
				'id'   => '3',
				'name' => 'Cancelada',
			],
		];

	}
