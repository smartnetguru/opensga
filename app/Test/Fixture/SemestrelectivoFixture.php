<?php
/**
 * SemestrelectivoFixture
 *
 */
class SemestrelectivoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ano_lectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_inicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_fim' => array('type' => 'date', 'null' => true, 'default' => null),
		'semestre_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'codigo' => '2011-1',
			'ano_lectivo_id' => '1',
			'semestre' => '1',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '1'
		),
		array(
			'id' => '2',
			'codigo' => '2011-1',
			'ano_lectivo_id' => '1',
			'semestre' => '2',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '2'
		),
		array(
			'id' => '3',
			'codigo' => '2009-1',
			'ano_lectivo_id' => '2',
			'semestre' => '1',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '1'
		),
		array(
			'id' => '4',
			'codigo' => '2009-1',
			'ano_lectivo_id' => '2',
			'semestre' => '2',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '2'
		),
		array(
			'id' => '5',
			'codigo' => '2010-1',
			'ano_lectivo_id' => '3',
			'semestre' => '1',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '1'
		),
		array(
			'id' => '6',
			'codigo' => '2010-1',
			'ano_lectivo_id' => '3',
			'semestre' => '2',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '2'
		),
		array(
			'id' => '7',
			'codigo' => '1992-1',
			'ano_lectivo_id' => '4',
			'semestre' => '1',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '1'
		),
		array(
			'id' => '8',
			'codigo' => '1992-1',
			'ano_lectivo_id' => '4',
			'semestre' => '2',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '2'
		),
		array(
			'id' => '9',
			'codigo' => '2012-1',
			'ano_lectivo_id' => '5',
			'semestre' => '1',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '1'
		),
		array(
			'id' => '10',
			'codigo' => '2012-1',
			'ano_lectivo_id' => '5',
			'semestre' => '2',
			'data_inicio' => null,
			'data_fim' => null,
			'semestre_id' => '2'
		),
	);

}
