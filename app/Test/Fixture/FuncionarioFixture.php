<?php
/**
 * FuncionarioFixture
 *
 */
class FuncionarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'grauacademico_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cargo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'superior_hierarquico' => array('type' => 'integer', 'null' => true, 'default' => null),
		'datainicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'tipofuncionario_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'seccao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 1,
			'cargo_id' => 1,
			'departamento_id' => 1,
			'superior_hierarquico' => 1,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 1,
			'seccao_id' => 1,
			'unidade_organica_id' => 1,
			'faculdade_id' => 1
		),
		array(
			'id' => 2,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 2,
			'cargo_id' => 2,
			'departamento_id' => 2,
			'superior_hierarquico' => 2,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 2,
			'seccao_id' => 2,
			'unidade_organica_id' => 2,
			'faculdade_id' => 2
		),
		array(
			'id' => 3,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 3,
			'cargo_id' => 3,
			'departamento_id' => 3,
			'superior_hierarquico' => 3,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 3,
			'seccao_id' => 3,
			'unidade_organica_id' => 3,
			'faculdade_id' => 3
		),
		array(
			'id' => 4,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 4,
			'cargo_id' => 4,
			'departamento_id' => 4,
			'superior_hierarquico' => 4,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 4,
			'seccao_id' => 4,
			'unidade_organica_id' => 4,
			'faculdade_id' => 4
		),
		array(
			'id' => 5,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 5,
			'cargo_id' => 5,
			'departamento_id' => 5,
			'superior_hierarquico' => 5,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 5,
			'seccao_id' => 5,
			'unidade_organica_id' => 5,
			'faculdade_id' => 5
		),
		array(
			'id' => 6,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 6,
			'cargo_id' => 6,
			'departamento_id' => 6,
			'superior_hierarquico' => 6,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 6,
			'seccao_id' => 6,
			'unidade_organica_id' => 6,
			'faculdade_id' => 6
		),
		array(
			'id' => 7,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 7,
			'cargo_id' => 7,
			'departamento_id' => 7,
			'superior_hierarquico' => 7,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 7,
			'seccao_id' => 7,
			'unidade_organica_id' => 7,
			'faculdade_id' => 7
		),
		array(
			'id' => 8,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 8,
			'cargo_id' => 8,
			'departamento_id' => 8,
			'superior_hierarquico' => 8,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 8,
			'seccao_id' => 8,
			'unidade_organica_id' => 8,
			'faculdade_id' => 8
		),
		array(
			'id' => 9,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 9,
			'cargo_id' => 9,
			'departamento_id' => 9,
			'superior_hierarquico' => 9,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 9,
			'seccao_id' => 9,
			'unidade_organica_id' => 9,
			'faculdade_id' => 9
		),
		array(
			'id' => 10,
			'user_id' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 10,
			'cargo_id' => 10,
			'departamento_id' => 10,
			'superior_hierarquico' => 10,
			'datainicio' => '2012-09-25',
			'tipofuncionario_id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:38:05',
			'modified' => '2012-09-25 16:38:05',
			'entidade_id' => 10,
			'seccao_id' => 10,
			'unidade_organica_id' => 10,
			'faculdade_id' => 10
		),
	);

}
