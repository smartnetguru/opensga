<?php

	/**
	 * EstadoAlunoFixture
	 *
	 */
	class EstadoAlunoFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */
		public $import = ['table' => 'estado_alunos'];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'   => '1',
				'name' => 'Activo',
			],
			[
				'id'   => '2',
				'name' => 'Interrompeu',
			],
			[
				'id'   => '3',
				'name' => 'Concluiu nivel',
			],
			[
				'id'   => '4',
				'name' => 'Falecido',
			],
			[
				'id'   => '5',
				'name' => 'Inter. Sem direito a reingresso VIP',
			],
			[
				'id'   => '6',
				'name' => 'Sem direito a frequencia, expulso de outra IE',
			],
			[
				'id'   => '7',
				'name' => 'Eliminado - duplicacao',
			],
			[
				'id'   => '8',
				'name' => 'Matricula pendente, deve resolver um problema',
			],
			[
				'id'   => '9',
				'name' => 'Matricula Suspensa',
			],
			[
				'id'   => '10',
				'name' => 'Mudou de curso a maneira antiga - novo numero',
			],
		];

	}
