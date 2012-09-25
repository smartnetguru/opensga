<?php
/**
 * InscricaoFixture
 *
 */
class InscricaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'turma_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estadoinscricao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'notafrequencia' => array('type' => 'float', 'null' => true, 'default' => null),
		'notafinal' => array('type' => 'float', 'null' => true, 'default' => null),
		'epocaavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'matricula_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pagamento_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'aluno_id' => 1,
			'turma_id' => 1,
			'estadoinscricao_id' => 1,
			'notafrequencia' => 1,
			'notafinal' => 1,
			'epocaavaliacao_id' => 1,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 1,
			'created_by' => 1,
			'modified_by' => 1,
			'pagamento_id' => 1
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 2,
			'turma_id' => 2,
			'estadoinscricao_id' => 2,
			'notafrequencia' => 2,
			'notafinal' => 2,
			'epocaavaliacao_id' => 2,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 2,
			'created_by' => 2,
			'modified_by' => 2,
			'pagamento_id' => 2
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 3,
			'turma_id' => 3,
			'estadoinscricao_id' => 3,
			'notafrequencia' => 3,
			'notafinal' => 3,
			'epocaavaliacao_id' => 3,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 3,
			'created_by' => 3,
			'modified_by' => 3,
			'pagamento_id' => 3
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 4,
			'turma_id' => 4,
			'estadoinscricao_id' => 4,
			'notafrequencia' => 4,
			'notafinal' => 4,
			'epocaavaliacao_id' => 4,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 4,
			'created_by' => 4,
			'modified_by' => 4,
			'pagamento_id' => 4
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 5,
			'turma_id' => 5,
			'estadoinscricao_id' => 5,
			'notafrequencia' => 5,
			'notafinal' => 5,
			'epocaavaliacao_id' => 5,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 5,
			'created_by' => 5,
			'modified_by' => 5,
			'pagamento_id' => 5
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 6,
			'turma_id' => 6,
			'estadoinscricao_id' => 6,
			'notafrequencia' => 6,
			'notafinal' => 6,
			'epocaavaliacao_id' => 6,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 6,
			'created_by' => 6,
			'modified_by' => 6,
			'pagamento_id' => 6
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 7,
			'turma_id' => 7,
			'estadoinscricao_id' => 7,
			'notafrequencia' => 7,
			'notafinal' => 7,
			'epocaavaliacao_id' => 7,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 7,
			'created_by' => 7,
			'modified_by' => 7,
			'pagamento_id' => 7
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 8,
			'turma_id' => 8,
			'estadoinscricao_id' => 8,
			'notafrequencia' => 8,
			'notafinal' => 8,
			'epocaavaliacao_id' => 8,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 8,
			'created_by' => 8,
			'modified_by' => 8,
			'pagamento_id' => 8
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 9,
			'turma_id' => 9,
			'estadoinscricao_id' => 9,
			'notafrequencia' => 9,
			'notafinal' => 9,
			'epocaavaliacao_id' => 9,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 9,
			'created_by' => 9,
			'modified_by' => 9,
			'pagamento_id' => 9
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'aluno_id' => 10,
			'turma_id' => 10,
			'estadoinscricao_id' => 10,
			'notafrequencia' => 10,
			'notafinal' => 10,
			'epocaavaliacao_id' => 10,
			'data' => '2012-09-25',
			'created' => '2012-09-25 16:39:10',
			'modified' => '2012-09-25 16:39:10',
			'matricula_id' => 10,
			'created_by' => 10,
			'modified_by' => 10,
			'pagamento_id' => 10
		),
	);

}
