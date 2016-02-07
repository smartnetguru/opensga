<?php

	/**
	 * LogDetail Fixture
	 */
	class LogDetailFixture extends CakeTestFixture
	{

		/**
		 * Import
		 *
		 * @var array
		 */


		/**
		 * Fields
		 *
		 * @var array
		 */
		public $fields = [
			'id'              => [
				'type'     => 'integer',
				'null'     => false,
				'default'  => null,
				'unsigned' => false,
				'key'      => 'primary',
			],
			'difference'      => [
				'type'    => 'text',
				'null'    => false,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'statement'       => [
				'type'    => 'text',
				'null'    => true,
				'default' => null,
				'collate' => 'latin1_swedish_ci',
				'charset' => 'latin1',
			],
			'created'         => ['type' => 'datetime', 'null' => true, 'default' => null],
			'modified'        => ['type' => 'datetime', 'null' => true, 'default' => null],
			'indexes'         => [
				'PRIMARY' => ['column' => 'id', 'unique' => 1],
			],
			'tableParameters' => ['charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'],
		];

		/**
		 * Records
		 *
		 * @var array
		 */
		public $records = [
			[
				'id'         => '1',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"42872";s:8:"turma_id";s:5:"13391";s:19:"estado_inscricao_id";i:1;s:12:"matricula_id";s:6:"169182";s:4:"data";s:10:"2015-08-11";s:12:"pagamento_id";s:5:"55572";s:17:"tipo_inscricao_id";i:1;s:10:"created_by";s:5:"42910";s:2:"id";s:5:"88843";}',
				'statement'  => 'INSERT INTO `opensga`.`inscricaos` (`aluno_id`, `turma_id`, `estado_inscricao_id`, `matricula_id`, `data`, `pagamento_id`, `tipo_inscricao_id`, `modified`, `created`, `created_by`) VALUES (42872, 13391, 1, 169182, \'2015-08-11\', 55572, 1, \'2015-08-11 02:05:16\', \'2015-08-11 02:05:16\', 42910)',
				'created'    => '2015-08-11 02:05:16',
				'modified'   => '2015-08-11 02:05:16',
			],
			[
				'id'         => '2',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"42872";s:8:"turma_id";s:5:"13392";s:19:"estado_inscricao_id";i:1;s:12:"matricula_id";s:6:"169182";s:4:"data";s:10:"2015-08-11";s:12:"pagamento_id";s:5:"55573";s:17:"tipo_inscricao_id";i:1;s:10:"created_by";s:5:"42910";s:2:"id";s:5:"88844";}',
				'statement'  => 'INSERT INTO `opensga`.`inscricaos` (`aluno_id`, `turma_id`, `estado_inscricao_id`, `matricula_id`, `data`, `pagamento_id`, `tipo_inscricao_id`, `modified`, `created`, `created_by`) VALUES (42872, 13392, 1, 169182, \'2015-08-11\', 55573, 1, \'2015-08-11 02:05:17\', \'2015-08-11 02:05:17\', 42910)',
				'created'    => '2015-08-11 02:05:17',
				'modified'   => '2015-08-11 02:05:17',
			],
			[
				'id'         => '3',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"53677";s:8:"curso_id";s:2:"55";s:15:"plano_estudo_id";s:1:"8";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2009-07-10";s:7:"user_id";s:1:"1";s:14:"ano_lectivo_id";s:2:"18";s:17:"tipo_matricula_id";i:1;s:2:"id";s:6:"185129";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`) VALUES (53677, 55, 8, 1, \'2009-07-10\', 1, 18, 1, \'2015-08-12 13:22:02\', \'2015-08-12 13:22:02\')',
				'created'    => '2015-08-12 13:22:03',
				'modified'   => '2015-08-12 13:22:03',
			],
			[
				'id'         => '4',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"53678";s:8:"curso_id";s:2:"54";s:15:"plano_estudo_id";s:3:"106";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2009-07-07";s:7:"user_id";s:1:"1";s:14:"ano_lectivo_id";s:2:"14";s:17:"tipo_matricula_id";i:1;s:2:"id";s:6:"185130";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`) VALUES (53678, 54, 106, 1, \'2009-07-07\', 1, 14, 1, \'2015-08-12 13:24:40\', \'2015-08-12 13:24:40\')',
				'created'    => '2015-08-12 13:24:40',
				'modified'   => '2015-08-12 13:24:40',
			],
			[
				'id'         => '5',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"53679";s:8:"curso_id";s:2:"55";s:15:"plano_estudo_id";s:1:"8";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2009-07-10";s:7:"user_id";s:1:"1";s:14:"ano_lectivo_id";s:2:"11";s:17:"tipo_matricula_id";i:1;s:2:"id";s:6:"185131";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`) VALUES (53679, 55, 8, 1, \'2009-07-10\', 1, 11, 1, \'2015-08-12 13:24:42\', \'2015-08-12 13:24:42\')',
				'created'    => '2015-08-12 13:24:42',
				'modified'   => '2015-08-12 13:24:42',
			],
			[
				'id'         => '6',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"53680";s:8:"curso_id";s:2:"56";s:15:"plano_estudo_id";s:2:"22";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2009-06-19";s:7:"user_id";s:1:"1";s:14:"ano_lectivo_id";s:2:"17";s:17:"tipo_matricula_id";i:1;s:2:"id";s:6:"185132";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`) VALUES (53680, 56, 22, 1, \'2009-06-19\', 1, 17, 1, \'2015-08-12 13:35:43\', \'2015-08-12 13:35:43\')',
				'created'    => '2015-08-12 13:35:43',
				'modified'   => '2015-08-12 13:35:43',
			],
			[
				'id'         => '7',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"53681";s:8:"curso_id";s:2:"54";s:15:"plano_estudo_id";s:3:"106";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2008-08-13";s:7:"user_id";s:1:"1";s:14:"ano_lectivo_id";s:2:"13";s:17:"tipo_matricula_id";i:1;s:2:"id";s:6:"185133";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`) VALUES (53681, 54, 106, 1, \'2008-08-13\', 1, 13, 1, \'2015-08-12 13:37:04\', \'2015-08-12 13:37:04\')',
				'created'    => '2015-08-12 13:37:04',
				'modified'   => '2015-08-12 13:37:04',
			],
			[
				'id'         => '8',
				'difference' => 'a:9:{s:8:"aluno_id";s:5:"53682";s:8:"curso_id";s:2:"55";s:15:"plano_estudo_id";s:1:"8";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2009-07-10";s:7:"user_id";s:1:"1";s:14:"ano_lectivo_id";s:1:"8";s:17:"tipo_matricula_id";i:1;s:2:"id";s:6:"185134";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`) VALUES (53682, 55, 8, 1, \'2009-07-10\', 1, 8, 1, \'2015-08-12 13:43:03\', \'2015-08-12 13:43:03\')',
				'created'    => '2015-08-12 13:43:03',
				'modified'   => '2015-08-12 13:43:03',
			],
			[
				'id'         => '9',
				'difference' => 'a:10:{s:8:"aluno_id";s:5:"53683";s:8:"curso_id";s:2:"49";s:15:"plano_estudo_id";s:1:"6";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2015-08-18";s:7:"user_id";s:5:"42646";s:14:"ano_lectivo_id";s:2:"17";s:17:"tipo_matricula_id";i:1;s:10:"created_by";s:5:"42646";s:2:"id";s:6:"185135";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`, `created_by`) VALUES (53683, 49, 6, 1, \'2015-08-18\', 42646, 17, 1, \'2015-08-18 08:21:31\', \'2015-08-18 08:21:31\', 42646)',
				'created'    => '2015-08-18 08:21:31',
				'modified'   => '2015-08-18 08:21:31',
			],
			[
				'id'         => '10',
				'difference' => 'a:10:{s:8:"aluno_id";s:5:"53684";s:8:"curso_id";s:3:"126";s:15:"plano_estudo_id";s:2:"44";s:19:"estado_matricula_id";i:1;s:4:"data";s:10:"2015-08-12";s:7:"user_id";s:5:"42646";s:14:"ano_lectivo_id";s:2:"17";s:17:"tipo_matricula_id";i:1;s:10:"created_by";s:5:"42646";s:2:"id";s:6:"185136";}',
				'statement'  => 'INSERT INTO `opensga`.`matriculas` (`aluno_id`, `curso_id`, `plano_estudo_id`, `estado_matricula_id`, `data`, `user_id`, `ano_lectivo_id`, `tipo_matricula_id`, `modified`, `created`, `created_by`) VALUES (53684, 126, 44, 1, \'2015-08-12\', 42646, 17, 1, \'2015-08-18 08:23:53\', \'2015-08-18 08:23:53\', 42646)',
				'created'    => '2015-08-18 08:23:53',
				'modified'   => '2015-08-18 08:23:53',
			],
		];

	}
