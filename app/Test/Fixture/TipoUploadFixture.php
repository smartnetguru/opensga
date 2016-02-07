<?php

	/**
	 * TipoUploadFixture
	 *
	 */
	class TipoUploadFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['model' => 'TipoUpload'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Ficheiro de Pagamento de Servicos - BIM',
			],
			[
				'id'   => '2',
				'name' => 'Pauta',
			],
			[
				'id'   => '3',
				'name' => 'Candidatos',
			],
		];

	}
