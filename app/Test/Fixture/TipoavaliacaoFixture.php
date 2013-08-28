<?php
/**
 * TipoavaliacaoFixture
 *
 */
class TipoavaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'epocaavaliacao_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'name' => 'Teste Escrito',
			'codigo' => '',
			'epocaavaliacao_id' => '1',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '2',
			'name' => 'Teste Oral',
			'codigo' => '',
			'epocaavaliacao_id' => '1',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '3',
			'name' => 'Relatório',
			'codigo' => '',
			'epocaavaliacao_id' => '1',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '4',
			'name' => 'Exame Normal',
			'codigo' => '',
			'epocaavaliacao_id' => '2',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '5',
			'name' => 'Exame de Recorrência',
			'codigo' => '',
			'epocaavaliacao_id' => '3',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '6',
			'name' => 'Teste escrito presencial',
			'codigo' => '',
			'epocaavaliacao_id' => '0',
			'created' => '2013-08-18 20:02:07',
			'modified' => '2013-08-18 20:02:07'
		),
		array(
			'id' => '7',
			'name' => 'TPC',
			'codigo' => '',
			'epocaavaliacao_id' => '0',
			'created' => '2013-08-18 20:02:07',
			'modified' => '2013-08-18 20:02:07'
		),
		array(
			'id' => '8',
			'name' => 'Trabalho de Investigação',
			'codigo' => '',
			'epocaavaliacao_id' => '0',
			'created' => '2013-08-18 20:02:07',
			'modified' => '2013-08-18 20:02:07'
		),
		array(
			'id' => '9',
			'name' => 'Defesa de Trabalho',
			'codigo' => '',
			'epocaavaliacao_id' => '0',
			'created' => '2013-08-18 20:02:07',
			'modified' => '2013-08-18 20:02:07'
		),
	);

}
