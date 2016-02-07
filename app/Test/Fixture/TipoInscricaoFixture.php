<?php

	/**
	 * TipoInscricaoFixture
	 *
	 */
	class TipoInscricaoFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'TipoInscricao'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Frequencia',
			],
			[
				'id'   => '2',
				'name' => 'Avaliacoes',
			],
			[
				'id'   => '3',
				'name' => 'Exame Final',
			],
		];

	}
