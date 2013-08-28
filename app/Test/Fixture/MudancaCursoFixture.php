<?php
/**
 * MudancaCursoFixture
 *
 */
class MudancaCursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'curso_antigo' => array('type' => 'integer', 'null' => true, 'default' => null),
		'curso_novo' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_mudanca' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'taxa' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'forma_mudanca_curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'anexo_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'observacao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'id' => '1',
			'codigo' => '1',
			'aluno_id' => '12592',
			'curso_antigo' => '153',
			'curso_novo' => '156',
			'data_mudanca' => '2009-08-17 12:51:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:53',
			'modified' => '2013-07-07 19:22:53',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '2',
			'codigo' => '2',
			'aluno_id' => '12592',
			'curso_antigo' => '156',
			'curso_novo' => '54',
			'data_mudanca' => '2009-08-17 12:54:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:53',
			'modified' => '2013-07-07 19:22:53',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '3',
			'codigo' => '3',
			'aluno_id' => '13893',
			'curso_antigo' => '76',
			'curso_novo' => '82',
			'data_mudanca' => '2009-08-13 13:19:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:53',
			'modified' => '2013-07-07 19:22:53',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '4',
			'codigo' => '4',
			'aluno_id' => '6417',
			'curso_antigo' => '100',
			'curso_novo' => '99',
			'data_mudanca' => '2009-07-07 11:10:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:54',
			'modified' => '2013-07-07 19:22:54',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '5',
			'codigo' => '5',
			'aluno_id' => '3994',
			'curso_antigo' => '70',
			'curso_novo' => '71',
			'data_mudanca' => '2009-02-16 22:50:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:54',
			'modified' => '2013-07-07 19:22:54',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '6',
			'codigo' => '6',
			'aluno_id' => '3065',
			'curso_antigo' => '110',
			'curso_novo' => '109',
			'data_mudanca' => '2009-07-30 11:54:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:55',
			'modified' => '2013-07-07 19:22:55',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '7',
			'codigo' => '7',
			'aluno_id' => '3277',
			'curso_antigo' => '109',
			'curso_novo' => '110',
			'data_mudanca' => '2009-07-30 11:54:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:56',
			'modified' => '2013-07-07 19:22:56',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '8',
			'codigo' => '8',
			'aluno_id' => '17374',
			'curso_antigo' => '54',
			'curso_novo' => '40',
			'data_mudanca' => '2007-08-01 11:11:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:56',
			'modified' => '2013-07-07 19:22:56',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '9',
			'codigo' => '9',
			'aluno_id' => '12569',
			'curso_antigo' => '40',
			'curso_novo' => '117',
			'data_mudanca' => '2008-03-13 14:34:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:56',
			'modified' => '2013-07-07 19:22:56',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
		array(
			'id' => '10',
			'codigo' => '10',
			'aluno_id' => '13903',
			'curso_antigo' => '76',
			'curso_novo' => '80',
			'data_mudanca' => '2009-02-23 15:13:00',
			'funcionario_id' => null,
			'taxa' => null,
			'forma_mudanca_curso_id' => null,
			'created' => '2013-07-07 19:22:56',
			'modified' => '2013-07-07 19:22:56',
			'created_by' => null,
			'modified_by' => null,
			'anexo_url' => null,
			'observacao' => null
		),
	);

}
