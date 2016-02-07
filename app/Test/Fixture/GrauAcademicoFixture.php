<?php

	/**
	 * GrauAcademicoFixture
	 *
	 */
	class GrauAcademicoFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'GrauAcademico'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Bacharelato',
			],
			[
				'id'   => '2',
				'name' => 'Licenciatura',
			],
			[
				'id'   => '3',
				'name' => 'Mestrado',
			],
			[
				'id'   => '4',
				'name' => 'Doutoramento',
			],
		];

	}
