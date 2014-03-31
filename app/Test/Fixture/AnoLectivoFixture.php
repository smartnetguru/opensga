<?php
/**
 * AnoLectivoFixture
 *
 */
class AnoLectivoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ano' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'num_semestre' => array('type' => 'integer', 'null' => true, 'default' => null),
		'datainicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'datafim' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'regimelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'codigo' => null,
			'ano' => '2011',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:49:07',
			'modified' => '2013-06-10 14:49:07',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '2',
			'codigo' => null,
			'ano' => '2009',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:49:07',
			'modified' => '2013-06-10 14:49:07',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '3',
			'codigo' => null,
			'ano' => '2010',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:54:08',
			'modified' => '2013-06-10 14:54:08',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '4',
			'codigo' => null,
			'ano' => '1992',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:55:29',
			'modified' => '2013-06-10 14:55:29',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '5',
			'codigo' => null,
			'ano' => '2012',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:55:29',
			'modified' => '2013-06-10 14:55:29',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '6',
			'codigo' => null,
			'ano' => '1998',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:55:30',
			'modified' => '2013-06-10 14:55:30',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '7',
			'codigo' => null,
			'ano' => '2013',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:57:10',
			'modified' => '2013-06-10 14:57:10',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '8',
			'codigo' => null,
			'ano' => '1999',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:57:20',
			'modified' => '2013-06-10 14:57:20',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '9',
			'codigo' => null,
			'ano' => '2003',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:57:32',
			'modified' => '2013-06-10 14:57:32',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '10',
			'codigo' => null,
			'ano' => '1994',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:57:34',
			'modified' => '2013-06-10 14:57:34',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '11',
			'codigo' => null,
			'ano' => '2002',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:57:39',
			'modified' => '2013-06-10 14:57:39',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '12',
			'codigo' => null,
			'ano' => '1996',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:57:50',
			'modified' => '2013-06-10 14:57:50',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '13',
			'codigo' => null,
			'ano' => '2008',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:02',
			'modified' => '2013-06-10 14:58:02',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '14',
			'codigo' => null,
			'ano' => '2004',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:02',
			'modified' => '2013-06-10 14:58:02',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '15',
			'codigo' => null,
			'ano' => '2005',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:02',
			'modified' => '2013-06-10 14:58:02',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '16',
			'codigo' => null,
			'ano' => '2006',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:02',
			'modified' => '2013-06-10 14:58:02',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '17',
			'codigo' => null,
			'ano' => '2007',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:02',
			'modified' => '2013-06-10 14:58:02',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '18',
			'codigo' => null,
			'ano' => '2001',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:03',
			'modified' => '2013-06-10 14:58:03',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '19',
			'codigo' => null,
			'ano' => '1997',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:04',
			'modified' => '2013-06-10 14:58:04',
			'regimelectivo_id' => '0'
		),
		array(
			'id' => '20',
			'codigo' => null,
			'ano' => '1995',
			'num_semestre' => '2',
			'datainicio' => null,
			'datafim' => null,
			'created' => '2013-06-10 14:58:04',
			'modified' => '2013-06-10 14:58:04',
			'regimelectivo_id' => '0'
		),
	);

}
