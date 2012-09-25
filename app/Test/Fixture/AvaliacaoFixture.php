<?php
/**
 * AvaliacaoFixture
 *
 */
class AvaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'inscricao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nota' => array('type' => 'float', 'null' => true, 'default' => null),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'funcionario_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'turma_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'turmatipoavaliacao_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			't0015tipoavaliacao_id' => array('column' => array('tipoavaliacao_id', 'inscricao_id'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 1,
			'inscricao_id' => 1,
			'nota' => 1,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 1,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 1,
			'turmatipoavaliacao_id' => 1
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 2,
			'inscricao_id' => 2,
			'nota' => 2,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 2,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 2,
			'turmatipoavaliacao_id' => 2
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 3,
			'inscricao_id' => 3,
			'nota' => 3,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 3,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 3,
			'turmatipoavaliacao_id' => 3
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 4,
			'inscricao_id' => 4,
			'nota' => 4,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 4,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 4,
			'turmatipoavaliacao_id' => 4
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 5,
			'inscricao_id' => 5,
			'nota' => 5,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 5,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 5,
			'turmatipoavaliacao_id' => 5
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 6,
			'inscricao_id' => 6,
			'nota' => 6,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 6,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 6,
			'turmatipoavaliacao_id' => 6
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 7,
			'inscricao_id' => 7,
			'nota' => 7,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 7,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 7,
			'turmatipoavaliacao_id' => 7
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 8,
			'inscricao_id' => 8,
			'nota' => 8,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 8,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 8,
			'turmatipoavaliacao_id' => 8
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 9,
			'inscricao_id' => 9,
			'nota' => 9,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 9,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 9,
			'turmatipoavaliacao_id' => 9
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'tipoavaliacao_id' => 10,
			'inscricao_id' => 10,
			'nota' => 10,
			'data' => '2012-09-25 16:31:39',
			'funcionario_id' => 10,
			'created' => '2012-09-25 16:31:39',
			'modified' => '2012-09-25 16:31:39',
			'turma_id' => 10,
			'turmatipoavaliacao_id' => 10
		),
	);

}
