<?php

	/**
	 * TipoCursoFixture
	 *
	 */
	class TipoCursoFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'TipoCurso'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Médio',
			],
			[
				'id'   => '2',
				'name' => 'Superior',
			],
			[
				'id'   => '3',
				'name' => 'Pós-Graduação',
			],
			[
				'id'   => '4',
				'name' => 'Técnico',
			],
		];

	}
