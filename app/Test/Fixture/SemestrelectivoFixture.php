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
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'anolectivo_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'semestre' => array('type' => 'integer', 'null' => false, 'default' => null),
		'data_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'data_fim' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 1,
			'semestre' => 1,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 2,
			'semestre' => 2,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 3,
			'semestre' => 3,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 4,
			'semestre' => 4,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 5,
			'semestre' => 5,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 6,
			'semestre' => 6,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 7,
			'semestre' => 7,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 8,
			'semestre' => 8,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 9,
			'semestre' => 9,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 10,
			'semestre' => 10,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 11,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 11,
			'semestre' => 11,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 12,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 12,
			'semestre' => 12,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 13,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 13,
			'semestre' => 13,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 14,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 14,
			'semestre' => 14,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 15,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 15,
			'semestre' => 15,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 16,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 16,
			'semestre' => 16,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 17,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 17,
			'semestre' => 17,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 18,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 18,
			'semestre' => 18,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 19,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 19,
			'semestre' => 19,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 20,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 20,
			'semestre' => 20,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 21,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 21,
			'semestre' => 21,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 22,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 22,
			'semestre' => 22,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 23,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 23,
			'semestre' => 23,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 24,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 24,
			'semestre' => 24,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 25,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 25,
			'semestre' => 25,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 26,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 26,
			'semestre' => 26,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 27,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 27,
			'semestre' => 27,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 28,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 28,
			'semestre' => 28,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 29,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 29,
			'semestre' => 29,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 30,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 30,
			'semestre' => 30,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 31,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 31,
			'semestre' => 31,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 32,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 32,
			'semestre' => 32,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 33,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 33,
			'semestre' => 33,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 34,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 34,
			'semestre' => 34,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 35,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 35,
			'semestre' => 35,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 36,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 36,
			'semestre' => 36,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 37,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 37,
			'semestre' => 37,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 38,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 38,
			'semestre' => 38,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 39,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 39,
			'semestre' => 39,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 40,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 40,
			'semestre' => 40,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 41,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 41,
			'semestre' => 41,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 42,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 42,
			'semestre' => 42,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 43,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 43,
			'semestre' => 43,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 44,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 44,
			'semestre' => 44,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 45,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 45,
			'semestre' => 45,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 46,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 46,
			'semestre' => 46,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 47,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 47,
			'semestre' => 47,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 48,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 48,
			'semestre' => 48,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 49,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 49,
			'semestre' => 49,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 50,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 50,
			'semestre' => 50,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 51,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 51,
			'semestre' => 51,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 52,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 52,
			'semestre' => 52,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 53,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 53,
			'semestre' => 53,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 54,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 54,
			'semestre' => 54,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 55,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 55,
			'semestre' => 55,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 56,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 56,
			'semestre' => 56,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 57,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 57,
			'semestre' => 57,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 58,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 58,
			'semestre' => 58,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 59,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 59,
			'semestre' => 59,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 60,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 60,
			'semestre' => 60,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 61,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 61,
			'semestre' => 61,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 62,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 62,
			'semestre' => 62,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 63,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 63,
			'semestre' => 63,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 64,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 64,
			'semestre' => 64,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 65,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 65,
			'semestre' => 65,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 66,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 66,
			'semestre' => 66,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 67,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 67,
			'semestre' => 67,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 68,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 68,
			'semestre' => 68,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 69,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 69,
			'semestre' => 69,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 70,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 70,
			'semestre' => 70,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 71,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 71,
			'semestre' => 71,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 72,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 72,
			'semestre' => 72,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 73,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 73,
			'semestre' => 73,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 74,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 74,
			'semestre' => 74,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 75,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 75,
			'semestre' => 75,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 76,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 76,
			'semestre' => 76,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 77,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 77,
			'semestre' => 77,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 78,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 78,
			'semestre' => 78,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 79,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 79,
			'semestre' => 79,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 80,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 80,
			'semestre' => 80,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 81,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 81,
			'semestre' => 81,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 82,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 82,
			'semestre' => 82,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 83,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 83,
			'semestre' => 83,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 84,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 84,
			'semestre' => 84,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 85,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 85,
			'semestre' => 85,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 86,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 86,
			'semestre' => 86,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 87,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 87,
			'semestre' => 87,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 88,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 88,
			'semestre' => 88,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 89,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 89,
			'semestre' => 89,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 90,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 90,
			'semestre' => 90,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 91,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 91,
			'semestre' => 91,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 92,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 92,
			'semestre' => 92,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 93,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 93,
			'semestre' => 93,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 94,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 94,
			'semestre' => 94,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 95,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 95,
			'semestre' => 95,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 96,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 96,
			'semestre' => 96,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 97,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 97,
			'semestre' => 97,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 98,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 98,
			'semestre' => 98,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 99,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 99,
			'semestre' => 99,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 100,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 100,
			'semestre' => 100,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 101,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 101,
			'semestre' => 101,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 102,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 102,
			'semestre' => 102,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 103,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 103,
			'semestre' => 103,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 104,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 104,
			'semestre' => 104,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 105,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 105,
			'semestre' => 105,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 106,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 106,
			'semestre' => 106,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 107,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 107,
			'semestre' => 107,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 108,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 108,
			'semestre' => 108,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 109,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 109,
			'semestre' => 109,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 110,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 110,
			'semestre' => 110,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 111,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 111,
			'semestre' => 111,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 112,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 112,
			'semestre' => 112,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 113,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 113,
			'semestre' => 113,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 114,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 114,
			'semestre' => 114,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 115,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 115,
			'semestre' => 115,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 116,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 116,
			'semestre' => 116,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 117,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 117,
			'semestre' => 117,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 118,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 118,
			'semestre' => 118,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 119,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 119,
			'semestre' => 119,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 120,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 120,
			'semestre' => 120,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 121,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 121,
			'semestre' => 121,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 122,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 122,
			'semestre' => 122,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 123,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 123,
			'semestre' => 123,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 124,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 124,
			'semestre' => 124,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 125,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 125,
			'semestre' => 125,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 126,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 126,
			'semestre' => 126,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 127,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 127,
			'semestre' => 127,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 128,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 128,
			'semestre' => 128,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 129,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 129,
			'semestre' => 129,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 130,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 130,
			'semestre' => 130,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 131,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 131,
			'semestre' => 131,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 132,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 132,
			'semestre' => 132,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 133,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 133,
			'semestre' => 133,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 134,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 134,
			'semestre' => 134,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 135,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 135,
			'semestre' => 135,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 136,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 136,
			'semestre' => 136,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 137,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 137,
			'semestre' => 137,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 138,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 138,
			'semestre' => 138,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 139,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 139,
			'semestre' => 139,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 140,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 140,
			'semestre' => 140,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 141,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 141,
			'semestre' => 141,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 142,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 142,
			'semestre' => 142,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 143,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 143,
			'semestre' => 143,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 144,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 144,
			'semestre' => 144,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 145,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 145,
			'semestre' => 145,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 146,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 146,
			'semestre' => 146,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 147,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 147,
			'semestre' => 147,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 148,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 148,
			'semestre' => 148,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 149,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 149,
			'semestre' => 149,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 150,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 150,
			'semestre' => 150,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 151,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 151,
			'semestre' => 151,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 152,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 152,
			'semestre' => 152,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 153,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 153,
			'semestre' => 153,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 154,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 154,
			'semestre' => 154,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 155,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 155,
			'semestre' => 155,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 156,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 156,
			'semestre' => 156,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 157,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 157,
			'semestre' => 157,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 158,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 158,
			'semestre' => 158,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 159,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 159,
			'semestre' => 159,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 160,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 160,
			'semestre' => 160,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 161,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 161,
			'semestre' => 161,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 162,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 162,
			'semestre' => 162,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 163,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 163,
			'semestre' => 163,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 164,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 164,
			'semestre' => 164,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 165,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 165,
			'semestre' => 165,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 166,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 166,
			'semestre' => 166,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 167,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 167,
			'semestre' => 167,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 168,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 168,
			'semestre' => 168,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 169,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 169,
			'semestre' => 169,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 170,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 170,
			'semestre' => 170,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 171,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 171,
			'semestre' => 171,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 172,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 172,
			'semestre' => 172,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 173,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 173,
			'semestre' => 173,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 174,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 174,
			'semestre' => 174,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 175,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 175,
			'semestre' => 175,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 176,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 176,
			'semestre' => 176,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 177,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 177,
			'semestre' => 177,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 178,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 178,
			'semestre' => 178,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 179,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 179,
			'semestre' => 179,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 180,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 180,
			'semestre' => 180,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 181,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 181,
			'semestre' => 181,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 182,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 182,
			'semestre' => 182,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 183,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 183,
			'semestre' => 183,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 184,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 184,
			'semestre' => 184,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 185,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 185,
			'semestre' => 185,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 186,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 186,
			'semestre' => 186,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 187,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 187,
			'semestre' => 187,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 188,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 188,
			'semestre' => 188,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 189,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 189,
			'semestre' => 189,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 190,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 190,
			'semestre' => 190,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 191,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 191,
			'semestre' => 191,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 192,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 192,
			'semestre' => 192,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 193,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 193,
			'semestre' => 193,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 194,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 194,
			'semestre' => 194,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 195,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 195,
			'semestre' => 195,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 196,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 196,
			'semestre' => 196,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 197,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 197,
			'semestre' => 197,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 198,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 198,
			'semestre' => 198,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 199,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 199,
			'semestre' => 199,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 200,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 200,
			'semestre' => 200,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 201,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 201,
			'semestre' => 201,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 202,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 202,
			'semestre' => 202,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 203,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 203,
			'semestre' => 203,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 204,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 204,
			'semestre' => 204,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 205,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 205,
			'semestre' => 205,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 206,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 206,
			'semestre' => 206,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 207,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 207,
			'semestre' => 207,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 208,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 208,
			'semestre' => 208,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 209,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 209,
			'semestre' => 209,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 210,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 210,
			'semestre' => 210,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 211,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 211,
			'semestre' => 211,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 212,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 212,
			'semestre' => 212,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 213,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 213,
			'semestre' => 213,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 214,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 214,
			'semestre' => 214,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 215,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 215,
			'semestre' => 215,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 216,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 216,
			'semestre' => 216,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 217,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 217,
			'semestre' => 217,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 218,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 218,
			'semestre' => 218,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 219,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 219,
			'semestre' => 219,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 220,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 220,
			'semestre' => 220,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 221,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 221,
			'semestre' => 221,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 222,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 222,
			'semestre' => 222,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 223,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 223,
			'semestre' => 223,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 224,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 224,
			'semestre' => 224,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 225,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 225,
			'semestre' => 225,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 226,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 226,
			'semestre' => 226,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 227,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 227,
			'semestre' => 227,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 228,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 228,
			'semestre' => 228,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 229,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 229,
			'semestre' => 229,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 230,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 230,
			'semestre' => 230,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 231,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 231,
			'semestre' => 231,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 232,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 232,
			'semestre' => 232,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 233,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 233,
			'semestre' => 233,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 234,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 234,
			'semestre' => 234,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 235,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 235,
			'semestre' => 235,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 236,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 236,
			'semestre' => 236,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 237,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 237,
			'semestre' => 237,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 238,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 238,
			'semestre' => 238,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 239,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 239,
			'semestre' => 239,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 240,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 240,
			'semestre' => 240,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 241,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 241,
			'semestre' => 241,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 242,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 242,
			'semestre' => 242,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 243,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 243,
			'semestre' => 243,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 244,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 244,
			'semestre' => 244,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 245,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 245,
			'semestre' => 245,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 246,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 246,
			'semestre' => 246,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 247,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 247,
			'semestre' => 247,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 248,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 248,
			'semestre' => 248,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 249,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 249,
			'semestre' => 249,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 250,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 250,
			'semestre' => 250,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 251,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 251,
			'semestre' => 251,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 252,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 252,
			'semestre' => 252,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 253,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 253,
			'semestre' => 253,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 254,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 254,
			'semestre' => 254,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 255,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 255,
			'semestre' => 255,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 256,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 256,
			'semestre' => 256,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 257,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 257,
			'semestre' => 257,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 258,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 258,
			'semestre' => 258,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 259,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 259,
			'semestre' => 259,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 260,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 260,
			'semestre' => 260,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 261,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 261,
			'semestre' => 261,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 262,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 262,
			'semestre' => 262,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 263,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 263,
			'semestre' => 263,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 264,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 264,
			'semestre' => 264,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 265,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 265,
			'semestre' => 265,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 266,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 266,
			'semestre' => 266,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 267,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 267,
			'semestre' => 267,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 268,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 268,
			'semestre' => 268,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 269,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 269,
			'semestre' => 269,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 270,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 270,
			'semestre' => 270,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 271,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 271,
			'semestre' => 271,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 272,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 272,
			'semestre' => 272,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 273,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 273,
			'semestre' => 273,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 274,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 274,
			'semestre' => 274,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 275,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 275,
			'semestre' => 275,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 276,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 276,
			'semestre' => 276,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 277,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 277,
			'semestre' => 277,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 278,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 278,
			'semestre' => 278,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 279,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 279,
			'semestre' => 279,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 280,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 280,
			'semestre' => 280,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 281,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 281,
			'semestre' => 281,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 282,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 282,
			'semestre' => 282,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 283,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 283,
			'semestre' => 283,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 284,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 284,
			'semestre' => 284,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 285,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 285,
			'semestre' => 285,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 286,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 286,
			'semestre' => 286,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 287,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 287,
			'semestre' => 287,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 288,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 288,
			'semestre' => 288,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 289,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 289,
			'semestre' => 289,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 290,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 290,
			'semestre' => 290,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 291,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 291,
			'semestre' => 291,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 292,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 292,
			'semestre' => 292,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 293,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 293,
			'semestre' => 293,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 294,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 294,
			'semestre' => 294,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 295,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 295,
			'semestre' => 295,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 296,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 296,
			'semestre' => 296,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 297,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 297,
			'semestre' => 297,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 298,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 298,
			'semestre' => 298,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 299,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 299,
			'semestre' => 299,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 300,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 300,
			'semestre' => 300,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 301,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 301,
			'semestre' => 301,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 302,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 302,
			'semestre' => 302,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 303,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 303,
			'semestre' => 303,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 304,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 304,
			'semestre' => 304,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 305,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 305,
			'semestre' => 305,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 306,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 306,
			'semestre' => 306,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 307,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 307,
			'semestre' => 307,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 308,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 308,
			'semestre' => 308,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 309,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 309,
			'semestre' => 309,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 310,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 310,
			'semestre' => 310,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 311,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 311,
			'semestre' => 311,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 312,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 312,
			'semestre' => 312,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 313,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 313,
			'semestre' => 313,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 314,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 314,
			'semestre' => 314,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 315,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 315,
			'semestre' => 315,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 316,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 316,
			'semestre' => 316,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 317,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 317,
			'semestre' => 317,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 318,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 318,
			'semestre' => 318,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 319,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 319,
			'semestre' => 319,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 320,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 320,
			'semestre' => 320,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 321,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 321,
			'semestre' => 321,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 322,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 322,
			'semestre' => 322,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 323,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 323,
			'semestre' => 323,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 324,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 324,
			'semestre' => 324,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 325,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 325,
			'semestre' => 325,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 326,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 326,
			'semestre' => 326,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 327,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 327,
			'semestre' => 327,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 328,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 328,
			'semestre' => 328,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 329,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 329,
			'semestre' => 329,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 330,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 330,
			'semestre' => 330,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 331,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 331,
			'semestre' => 331,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 332,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 332,
			'semestre' => 332,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 333,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 333,
			'semestre' => 333,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 334,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 334,
			'semestre' => 334,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 335,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 335,
			'semestre' => 335,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 336,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 336,
			'semestre' => 336,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 337,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 337,
			'semestre' => 337,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 338,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 338,
			'semestre' => 338,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 339,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 339,
			'semestre' => 339,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 340,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 340,
			'semestre' => 340,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 341,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 341,
			'semestre' => 341,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 342,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 342,
			'semestre' => 342,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 343,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 343,
			'semestre' => 343,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 344,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 344,
			'semestre' => 344,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 345,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 345,
			'semestre' => 345,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 346,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 346,
			'semestre' => 346,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 347,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 347,
			'semestre' => 347,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 348,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 348,
			'semestre' => 348,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 349,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 349,
			'semestre' => 349,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 350,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 350,
			'semestre' => 350,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 351,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 351,
			'semestre' => 351,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 352,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 352,
			'semestre' => 352,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 353,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 353,
			'semestre' => 353,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 354,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 354,
			'semestre' => 354,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 355,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 355,
			'semestre' => 355,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 356,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 356,
			'semestre' => 356,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 357,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 357,
			'semestre' => 357,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 358,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 358,
			'semestre' => 358,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 359,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 359,
			'semestre' => 359,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 360,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 360,
			'semestre' => 360,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 361,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 361,
			'semestre' => 361,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 362,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 362,
			'semestre' => 362,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 363,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 363,
			'semestre' => 363,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 364,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 364,
			'semestre' => 364,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 365,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 365,
			'semestre' => 365,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 366,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 366,
			'semestre' => 366,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 367,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 367,
			'semestre' => 367,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 368,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 368,
			'semestre' => 368,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 369,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 369,
			'semestre' => 369,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 370,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 370,
			'semestre' => 370,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 371,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 371,
			'semestre' => 371,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 372,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 372,
			'semestre' => 372,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 373,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 373,
			'semestre' => 373,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 374,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 374,
			'semestre' => 374,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 375,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 375,
			'semestre' => 375,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 376,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 376,
			'semestre' => 376,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 377,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 377,
			'semestre' => 377,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 378,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 378,
			'semestre' => 378,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 379,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 379,
			'semestre' => 379,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 380,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 380,
			'semestre' => 380,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 381,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 381,
			'semestre' => 381,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 382,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 382,
			'semestre' => 382,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 383,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 383,
			'semestre' => 383,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 384,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 384,
			'semestre' => 384,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 385,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 385,
			'semestre' => 385,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 386,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 386,
			'semestre' => 386,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 387,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 387,
			'semestre' => 387,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 388,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 388,
			'semestre' => 388,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 389,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 389,
			'semestre' => 389,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 390,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 390,
			'semestre' => 390,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 391,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 391,
			'semestre' => 391,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 392,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 392,
			'semestre' => 392,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 393,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 393,
			'semestre' => 393,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 394,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 394,
			'semestre' => 394,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 395,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 395,
			'semestre' => 395,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 396,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 396,
			'semestre' => 396,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 397,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 397,
			'semestre' => 397,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 398,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 398,
			'semestre' => 398,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 399,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 399,
			'semestre' => 399,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 400,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 400,
			'semestre' => 400,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 401,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 401,
			'semestre' => 401,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 402,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 402,
			'semestre' => 402,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 403,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 403,
			'semestre' => 403,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 404,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 404,
			'semestre' => 404,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 405,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 405,
			'semestre' => 405,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 406,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 406,
			'semestre' => 406,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 407,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 407,
			'semestre' => 407,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 408,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 408,
			'semestre' => 408,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 409,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 409,
			'semestre' => 409,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 410,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 410,
			'semestre' => 410,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 411,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 411,
			'semestre' => 411,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 412,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 412,
			'semestre' => 412,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 413,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 413,
			'semestre' => 413,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 414,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 414,
			'semestre' => 414,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 415,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 415,
			'semestre' => 415,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 416,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 416,
			'semestre' => 416,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 417,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 417,
			'semestre' => 417,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 418,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 418,
			'semestre' => 418,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 419,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 419,
			'semestre' => 419,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 420,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 420,
			'semestre' => 420,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 421,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 421,
			'semestre' => 421,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 422,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 422,
			'semestre' => 422,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 423,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 423,
			'semestre' => 423,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 424,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 424,
			'semestre' => 424,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 425,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 425,
			'semestre' => 425,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 426,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 426,
			'semestre' => 426,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 427,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 427,
			'semestre' => 427,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 428,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 428,
			'semestre' => 428,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 429,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 429,
			'semestre' => 429,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 430,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 430,
			'semestre' => 430,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 431,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 431,
			'semestre' => 431,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 432,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 432,
			'semestre' => 432,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 433,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 433,
			'semestre' => 433,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 434,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 434,
			'semestre' => 434,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 435,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 435,
			'semestre' => 435,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 436,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 436,
			'semestre' => 436,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 437,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 437,
			'semestre' => 437,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 438,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 438,
			'semestre' => 438,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 439,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 439,
			'semestre' => 439,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 440,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 440,
			'semestre' => 440,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 441,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 441,
			'semestre' => 441,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 442,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 442,
			'semestre' => 442,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 443,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 443,
			'semestre' => 443,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 444,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 444,
			'semestre' => 444,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 445,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 445,
			'semestre' => 445,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 446,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 446,
			'semestre' => 446,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 447,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 447,
			'semestre' => 447,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 448,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 448,
			'semestre' => 448,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 449,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 449,
			'semestre' => 449,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 450,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 450,
			'semestre' => 450,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 451,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 451,
			'semestre' => 451,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 452,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 452,
			'semestre' => 452,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 453,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 453,
			'semestre' => 453,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 454,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 454,
			'semestre' => 454,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 455,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 455,
			'semestre' => 455,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 456,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 456,
			'semestre' => 456,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 457,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 457,
			'semestre' => 457,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 458,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 458,
			'semestre' => 458,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 459,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 459,
			'semestre' => 459,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 460,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 460,
			'semestre' => 460,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 461,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 461,
			'semestre' => 461,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 462,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 462,
			'semestre' => 462,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 463,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 463,
			'semestre' => 463,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 464,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 464,
			'semestre' => 464,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 465,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 465,
			'semestre' => 465,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 466,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 466,
			'semestre' => 466,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 467,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 467,
			'semestre' => 467,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 468,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 468,
			'semestre' => 468,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 469,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 469,
			'semestre' => 469,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 470,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 470,
			'semestre' => 470,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 471,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 471,
			'semestre' => 471,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 472,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 472,
			'semestre' => 472,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 473,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 473,
			'semestre' => 473,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 474,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 474,
			'semestre' => 474,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 475,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 475,
			'semestre' => 475,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 476,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 476,
			'semestre' => 476,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 477,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 477,
			'semestre' => 477,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 478,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 478,
			'semestre' => 478,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 479,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 479,
			'semestre' => 479,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 480,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 480,
			'semestre' => 480,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 481,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 481,
			'semestre' => 481,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 482,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 482,
			'semestre' => 482,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 483,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 483,
			'semestre' => 483,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 484,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 484,
			'semestre' => 484,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 485,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 485,
			'semestre' => 485,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 486,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 486,
			'semestre' => 486,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 487,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 487,
			'semestre' => 487,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 488,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 488,
			'semestre' => 488,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 489,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 489,
			'semestre' => 489,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 490,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 490,
			'semestre' => 490,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 491,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 491,
			'semestre' => 491,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 492,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 492,
			'semestre' => 492,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 493,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 493,
			'semestre' => 493,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 494,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 494,
			'semestre' => 494,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 495,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 495,
			'semestre' => 495,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 496,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 496,
			'semestre' => 496,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 497,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 497,
			'semestre' => 497,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 498,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 498,
			'semestre' => 498,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 499,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 499,
			'semestre' => 499,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 500,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 500,
			'semestre' => 500,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 501,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 501,
			'semestre' => 501,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 502,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 502,
			'semestre' => 502,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 503,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 503,
			'semestre' => 503,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 504,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 504,
			'semestre' => 504,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 505,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 505,
			'semestre' => 505,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 506,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 506,
			'semestre' => 506,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 507,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 507,
			'semestre' => 507,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 508,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 508,
			'semestre' => 508,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 509,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 509,
			'semestre' => 509,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 510,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 510,
			'semestre' => 510,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 511,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 511,
			'semestre' => 511,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 512,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 512,
			'semestre' => 512,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 513,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 513,
			'semestre' => 513,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 514,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 514,
			'semestre' => 514,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 515,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 515,
			'semestre' => 515,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 516,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 516,
			'semestre' => 516,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 517,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 517,
			'semestre' => 517,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 518,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 518,
			'semestre' => 518,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 519,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 519,
			'semestre' => 519,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 520,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 520,
			'semestre' => 520,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 521,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 521,
			'semestre' => 521,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 522,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 522,
			'semestre' => 522,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 523,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 523,
			'semestre' => 523,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 524,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 524,
			'semestre' => 524,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 525,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 525,
			'semestre' => 525,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 526,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 526,
			'semestre' => 526,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 527,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 527,
			'semestre' => 527,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 528,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 528,
			'semestre' => 528,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 529,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 529,
			'semestre' => 529,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 530,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 530,
			'semestre' => 530,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 531,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 531,
			'semestre' => 531,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 532,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 532,
			'semestre' => 532,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 533,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 533,
			'semestre' => 533,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 534,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 534,
			'semestre' => 534,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 535,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 535,
			'semestre' => 535,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 536,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 536,
			'semestre' => 536,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 537,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 537,
			'semestre' => 537,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 538,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 538,
			'semestre' => 538,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 539,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 539,
			'semestre' => 539,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 540,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 540,
			'semestre' => 540,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 541,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 541,
			'semestre' => 541,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 542,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 542,
			'semestre' => 542,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 543,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 543,
			'semestre' => 543,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 544,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 544,
			'semestre' => 544,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 545,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 545,
			'semestre' => 545,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 546,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 546,
			'semestre' => 546,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 547,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 547,
			'semestre' => 547,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 548,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 548,
			'semestre' => 548,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 549,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 549,
			'semestre' => 549,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 550,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 550,
			'semestre' => 550,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 551,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 551,
			'semestre' => 551,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 552,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 552,
			'semestre' => 552,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 553,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 553,
			'semestre' => 553,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 554,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 554,
			'semestre' => 554,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 555,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 555,
			'semestre' => 555,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 556,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 556,
			'semestre' => 556,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 557,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 557,
			'semestre' => 557,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 558,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 558,
			'semestre' => 558,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 559,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 559,
			'semestre' => 559,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 560,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 560,
			'semestre' => 560,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 561,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 561,
			'semestre' => 561,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 562,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 562,
			'semestre' => 562,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 563,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 563,
			'semestre' => 563,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 564,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 564,
			'semestre' => 564,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 565,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 565,
			'semestre' => 565,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 566,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 566,
			'semestre' => 566,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 567,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 567,
			'semestre' => 567,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 568,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 568,
			'semestre' => 568,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 569,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 569,
			'semestre' => 569,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 570,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 570,
			'semestre' => 570,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 571,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 571,
			'semestre' => 571,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 572,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 572,
			'semestre' => 572,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 573,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 573,
			'semestre' => 573,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 574,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 574,
			'semestre' => 574,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 575,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 575,
			'semestre' => 575,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 576,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 576,
			'semestre' => 576,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 577,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 577,
			'semestre' => 577,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 578,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 578,
			'semestre' => 578,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 579,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 579,
			'semestre' => 579,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 580,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 580,
			'semestre' => 580,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 581,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 581,
			'semestre' => 581,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 582,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 582,
			'semestre' => 582,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 583,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 583,
			'semestre' => 583,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 584,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 584,
			'semestre' => 584,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 585,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 585,
			'semestre' => 585,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 586,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 586,
			'semestre' => 586,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 587,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 587,
			'semestre' => 587,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 588,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 588,
			'semestre' => 588,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 589,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 589,
			'semestre' => 589,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 590,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 590,
			'semestre' => 590,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 591,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 591,
			'semestre' => 591,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 592,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 592,
			'semestre' => 592,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 593,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 593,
			'semestre' => 593,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 594,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 594,
			'semestre' => 594,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 595,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 595,
			'semestre' => 595,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 596,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 596,
			'semestre' => 596,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 597,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 597,
			'semestre' => 597,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 598,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 598,
			'semestre' => 598,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 599,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 599,
			'semestre' => 599,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 600,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 600,
			'semestre' => 600,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 601,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 601,
			'semestre' => 601,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 602,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 602,
			'semestre' => 602,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 603,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 603,
			'semestre' => 603,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 604,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 604,
			'semestre' => 604,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 605,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 605,
			'semestre' => 605,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 606,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 606,
			'semestre' => 606,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 607,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 607,
			'semestre' => 607,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 608,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 608,
			'semestre' => 608,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 609,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 609,
			'semestre' => 609,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 610,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 610,
			'semestre' => 610,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 611,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 611,
			'semestre' => 611,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 612,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 612,
			'semestre' => 612,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 613,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 613,
			'semestre' => 613,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 614,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 614,
			'semestre' => 614,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 615,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 615,
			'semestre' => 615,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 616,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 616,
			'semestre' => 616,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 617,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 617,
			'semestre' => 617,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 618,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 618,
			'semestre' => 618,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 619,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 619,
			'semestre' => 619,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 620,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 620,
			'semestre' => 620,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 621,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 621,
			'semestre' => 621,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 622,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 622,
			'semestre' => 622,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 623,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 623,
			'semestre' => 623,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 624,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 624,
			'semestre' => 624,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 625,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 625,
			'semestre' => 625,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 626,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 626,
			'semestre' => 626,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 627,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 627,
			'semestre' => 627,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 628,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 628,
			'semestre' => 628,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 629,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 629,
			'semestre' => 629,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 630,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 630,
			'semestre' => 630,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 631,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 631,
			'semestre' => 631,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 632,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 632,
			'semestre' => 632,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 633,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 633,
			'semestre' => 633,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 634,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 634,
			'semestre' => 634,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 635,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 635,
			'semestre' => 635,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 636,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 636,
			'semestre' => 636,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 637,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 637,
			'semestre' => 637,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 638,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 638,
			'semestre' => 638,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 639,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 639,
			'semestre' => 639,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 640,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 640,
			'semestre' => 640,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 641,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 641,
			'semestre' => 641,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 642,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 642,
			'semestre' => 642,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 643,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 643,
			'semestre' => 643,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 644,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 644,
			'semestre' => 644,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 645,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 645,
			'semestre' => 645,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 646,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 646,
			'semestre' => 646,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 647,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 647,
			'semestre' => 647,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 648,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 648,
			'semestre' => 648,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 649,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 649,
			'semestre' => 649,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 650,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 650,
			'semestre' => 650,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 651,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 651,
			'semestre' => 651,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 652,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 652,
			'semestre' => 652,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 653,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 653,
			'semestre' => 653,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 654,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 654,
			'semestre' => 654,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 655,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 655,
			'semestre' => 655,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 656,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 656,
			'semestre' => 656,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 657,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 657,
			'semestre' => 657,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 658,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 658,
			'semestre' => 658,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 659,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 659,
			'semestre' => 659,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 660,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 660,
			'semestre' => 660,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 661,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 661,
			'semestre' => 661,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 662,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 662,
			'semestre' => 662,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 663,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 663,
			'semestre' => 663,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 664,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 664,
			'semestre' => 664,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 665,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 665,
			'semestre' => 665,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 666,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 666,
			'semestre' => 666,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 667,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 667,
			'semestre' => 667,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 668,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 668,
			'semestre' => 668,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 669,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 669,
			'semestre' => 669,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 670,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 670,
			'semestre' => 670,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 671,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 671,
			'semestre' => 671,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 672,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 672,
			'semestre' => 672,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 673,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 673,
			'semestre' => 673,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 674,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 674,
			'semestre' => 674,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 675,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 675,
			'semestre' => 675,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 676,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 676,
			'semestre' => 676,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 677,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 677,
			'semestre' => 677,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 678,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 678,
			'semestre' => 678,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 679,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 679,
			'semestre' => 679,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 680,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 680,
			'semestre' => 680,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 681,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 681,
			'semestre' => 681,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 682,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 682,
			'semestre' => 682,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 683,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 683,
			'semestre' => 683,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 684,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 684,
			'semestre' => 684,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 685,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 685,
			'semestre' => 685,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 686,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 686,
			'semestre' => 686,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 687,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 687,
			'semestre' => 687,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 688,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 688,
			'semestre' => 688,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 689,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 689,
			'semestre' => 689,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 690,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 690,
			'semestre' => 690,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 691,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 691,
			'semestre' => 691,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 692,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 692,
			'semestre' => 692,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 693,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 693,
			'semestre' => 693,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 694,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 694,
			'semestre' => 694,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 695,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 695,
			'semestre' => 695,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 696,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 696,
			'semestre' => 696,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 697,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 697,
			'semestre' => 697,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 698,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 698,
			'semestre' => 698,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 699,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 699,
			'semestre' => 699,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 700,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 700,
			'semestre' => 700,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 701,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 701,
			'semestre' => 701,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 702,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 702,
			'semestre' => 702,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 703,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 703,
			'semestre' => 703,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 704,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 704,
			'semestre' => 704,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 705,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 705,
			'semestre' => 705,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 706,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 706,
			'semestre' => 706,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 707,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 707,
			'semestre' => 707,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 708,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 708,
			'semestre' => 708,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 709,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 709,
			'semestre' => 709,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 710,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 710,
			'semestre' => 710,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 711,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 711,
			'semestre' => 711,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 712,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 712,
			'semestre' => 712,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 713,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 713,
			'semestre' => 713,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 714,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 714,
			'semestre' => 714,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 715,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 715,
			'semestre' => 715,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 716,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 716,
			'semestre' => 716,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 717,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 717,
			'semestre' => 717,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 718,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 718,
			'semestre' => 718,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 719,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 719,
			'semestre' => 719,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 720,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 720,
			'semestre' => 720,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 721,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 721,
			'semestre' => 721,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 722,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 722,
			'semestre' => 722,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 723,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 723,
			'semestre' => 723,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 724,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 724,
			'semestre' => 724,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 725,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 725,
			'semestre' => 725,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 726,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 726,
			'semestre' => 726,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 727,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 727,
			'semestre' => 727,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 728,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 728,
			'semestre' => 728,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 729,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 729,
			'semestre' => 729,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 730,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 730,
			'semestre' => 730,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 731,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 731,
			'semestre' => 731,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 732,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 732,
			'semestre' => 732,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 733,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 733,
			'semestre' => 733,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 734,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 734,
			'semestre' => 734,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 735,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 735,
			'semestre' => 735,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 736,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 736,
			'semestre' => 736,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 737,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 737,
			'semestre' => 737,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 738,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 738,
			'semestre' => 738,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 739,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 739,
			'semestre' => 739,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 740,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 740,
			'semestre' => 740,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 741,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 741,
			'semestre' => 741,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 742,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 742,
			'semestre' => 742,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 743,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 743,
			'semestre' => 743,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 744,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 744,
			'semestre' => 744,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 745,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 745,
			'semestre' => 745,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 746,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 746,
			'semestre' => 746,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 747,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 747,
			'semestre' => 747,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 748,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 748,
			'semestre' => 748,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 749,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 749,
			'semestre' => 749,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 750,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 750,
			'semestre' => 750,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 751,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 751,
			'semestre' => 751,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 752,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 752,
			'semestre' => 752,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 753,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 753,
			'semestre' => 753,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 754,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 754,
			'semestre' => 754,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 755,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 755,
			'semestre' => 755,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 756,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 756,
			'semestre' => 756,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 757,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 757,
			'semestre' => 757,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 758,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 758,
			'semestre' => 758,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 759,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 759,
			'semestre' => 759,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 760,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 760,
			'semestre' => 760,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 761,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 761,
			'semestre' => 761,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 762,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 762,
			'semestre' => 762,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 763,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 763,
			'semestre' => 763,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 764,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 764,
			'semestre' => 764,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 765,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 765,
			'semestre' => 765,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 766,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 766,
			'semestre' => 766,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 767,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 767,
			'semestre' => 767,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 768,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 768,
			'semestre' => 768,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 769,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 769,
			'semestre' => 769,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 770,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 770,
			'semestre' => 770,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 771,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 771,
			'semestre' => 771,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 772,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 772,
			'semestre' => 772,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 773,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 773,
			'semestre' => 773,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 774,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 774,
			'semestre' => 774,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 775,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 775,
			'semestre' => 775,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 776,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 776,
			'semestre' => 776,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 777,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 777,
			'semestre' => 777,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 778,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 778,
			'semestre' => 778,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 779,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 779,
			'semestre' => 779,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 780,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 780,
			'semestre' => 780,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 781,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 781,
			'semestre' => 781,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 782,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 782,
			'semestre' => 782,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 783,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 783,
			'semestre' => 783,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 784,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 784,
			'semestre' => 784,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 785,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 785,
			'semestre' => 785,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 786,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 786,
			'semestre' => 786,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 787,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 787,
			'semestre' => 787,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 788,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 788,
			'semestre' => 788,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 789,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 789,
			'semestre' => 789,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 790,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 790,
			'semestre' => 790,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 791,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 791,
			'semestre' => 791,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 792,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 792,
			'semestre' => 792,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 793,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 793,
			'semestre' => 793,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 794,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 794,
			'semestre' => 794,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 795,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 795,
			'semestre' => 795,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 796,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 796,
			'semestre' => 796,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 797,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 797,
			'semestre' => 797,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 798,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 798,
			'semestre' => 798,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 799,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 799,
			'semestre' => 799,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 800,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 800,
			'semestre' => 800,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 801,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 801,
			'semestre' => 801,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 802,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 802,
			'semestre' => 802,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 803,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 803,
			'semestre' => 803,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 804,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 804,
			'semestre' => 804,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 805,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 805,
			'semestre' => 805,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 806,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 806,
			'semestre' => 806,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 807,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 807,
			'semestre' => 807,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 808,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 808,
			'semestre' => 808,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 809,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 809,
			'semestre' => 809,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 810,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 810,
			'semestre' => 810,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 811,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 811,
			'semestre' => 811,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 812,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 812,
			'semestre' => 812,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 813,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 813,
			'semestre' => 813,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 814,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 814,
			'semestre' => 814,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 815,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 815,
			'semestre' => 815,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 816,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 816,
			'semestre' => 816,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 817,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 817,
			'semestre' => 817,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 818,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 818,
			'semestre' => 818,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 819,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 819,
			'semestre' => 819,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 820,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 820,
			'semestre' => 820,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 821,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 821,
			'semestre' => 821,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 822,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 822,
			'semestre' => 822,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 823,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 823,
			'semestre' => 823,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 824,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 824,
			'semestre' => 824,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 825,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 825,
			'semestre' => 825,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 826,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 826,
			'semestre' => 826,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 827,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 827,
			'semestre' => 827,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 828,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 828,
			'semestre' => 828,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 829,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 829,
			'semestre' => 829,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 830,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 830,
			'semestre' => 830,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 831,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 831,
			'semestre' => 831,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 832,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 832,
			'semestre' => 832,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 833,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 833,
			'semestre' => 833,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 834,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 834,
			'semestre' => 834,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 835,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 835,
			'semestre' => 835,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 836,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 836,
			'semestre' => 836,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 837,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 837,
			'semestre' => 837,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 838,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 838,
			'semestre' => 838,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 839,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 839,
			'semestre' => 839,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 840,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 840,
			'semestre' => 840,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 841,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 841,
			'semestre' => 841,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 842,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 842,
			'semestre' => 842,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 843,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 843,
			'semestre' => 843,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 844,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 844,
			'semestre' => 844,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 845,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 845,
			'semestre' => 845,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 846,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 846,
			'semestre' => 846,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 847,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 847,
			'semestre' => 847,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 848,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 848,
			'semestre' => 848,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 849,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 849,
			'semestre' => 849,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 850,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 850,
			'semestre' => 850,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 851,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 851,
			'semestre' => 851,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 852,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 852,
			'semestre' => 852,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 853,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 853,
			'semestre' => 853,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 854,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 854,
			'semestre' => 854,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 855,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 855,
			'semestre' => 855,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 856,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 856,
			'semestre' => 856,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 857,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 857,
			'semestre' => 857,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 858,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 858,
			'semestre' => 858,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 859,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 859,
			'semestre' => 859,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 860,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 860,
			'semestre' => 860,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 861,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 861,
			'semestre' => 861,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 862,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 862,
			'semestre' => 862,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 863,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 863,
			'semestre' => 863,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 864,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 864,
			'semestre' => 864,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 865,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 865,
			'semestre' => 865,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 866,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 866,
			'semestre' => 866,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 867,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 867,
			'semestre' => 867,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 868,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 868,
			'semestre' => 868,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 869,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 869,
			'semestre' => 869,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 870,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 870,
			'semestre' => 870,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 871,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 871,
			'semestre' => 871,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 872,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 872,
			'semestre' => 872,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 873,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 873,
			'semestre' => 873,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 874,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 874,
			'semestre' => 874,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 875,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 875,
			'semestre' => 875,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 876,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 876,
			'semestre' => 876,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 877,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 877,
			'semestre' => 877,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 878,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 878,
			'semestre' => 878,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 879,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 879,
			'semestre' => 879,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 880,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 880,
			'semestre' => 880,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 881,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 881,
			'semestre' => 881,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 882,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 882,
			'semestre' => 882,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 883,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 883,
			'semestre' => 883,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 884,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 884,
			'semestre' => 884,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 885,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 885,
			'semestre' => 885,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 886,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 886,
			'semestre' => 886,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 887,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 887,
			'semestre' => 887,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 888,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 888,
			'semestre' => 888,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 889,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 889,
			'semestre' => 889,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 890,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 890,
			'semestre' => 890,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 891,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 891,
			'semestre' => 891,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 892,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 892,
			'semestre' => 892,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 893,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 893,
			'semestre' => 893,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 894,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 894,
			'semestre' => 894,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 895,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 895,
			'semestre' => 895,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 896,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 896,
			'semestre' => 896,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 897,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 897,
			'semestre' => 897,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 898,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 898,
			'semestre' => 898,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 899,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 899,
			'semestre' => 899,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 900,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 900,
			'semestre' => 900,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 901,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 901,
			'semestre' => 901,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 902,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 902,
			'semestre' => 902,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 903,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 903,
			'semestre' => 903,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 904,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 904,
			'semestre' => 904,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 905,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 905,
			'semestre' => 905,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 906,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 906,
			'semestre' => 906,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 907,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 907,
			'semestre' => 907,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 908,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 908,
			'semestre' => 908,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 909,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 909,
			'semestre' => 909,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 910,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 910,
			'semestre' => 910,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 911,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 911,
			'semestre' => 911,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 912,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 912,
			'semestre' => 912,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 913,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 913,
			'semestre' => 913,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 914,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 914,
			'semestre' => 914,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 915,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 915,
			'semestre' => 915,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 916,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 916,
			'semestre' => 916,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 917,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 917,
			'semestre' => 917,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 918,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 918,
			'semestre' => 918,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 919,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 919,
			'semestre' => 919,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 920,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 920,
			'semestre' => 920,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 921,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 921,
			'semestre' => 921,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 922,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 922,
			'semestre' => 922,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 923,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 923,
			'semestre' => 923,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 924,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 924,
			'semestre' => 924,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 925,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 925,
			'semestre' => 925,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 926,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 926,
			'semestre' => 926,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 927,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 927,
			'semestre' => 927,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 928,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 928,
			'semestre' => 928,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 929,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 929,
			'semestre' => 929,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 930,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 930,
			'semestre' => 930,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 931,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 931,
			'semestre' => 931,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 932,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 932,
			'semestre' => 932,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 933,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 933,
			'semestre' => 933,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 934,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 934,
			'semestre' => 934,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 935,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 935,
			'semestre' => 935,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 936,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 936,
			'semestre' => 936,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 937,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 937,
			'semestre' => 937,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 938,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 938,
			'semestre' => 938,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 939,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 939,
			'semestre' => 939,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 940,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 940,
			'semestre' => 940,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 941,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 941,
			'semestre' => 941,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 942,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 942,
			'semestre' => 942,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 943,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 943,
			'semestre' => 943,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 944,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 944,
			'semestre' => 944,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 945,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 945,
			'semestre' => 945,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 946,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 946,
			'semestre' => 946,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 947,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 947,
			'semestre' => 947,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 948,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 948,
			'semestre' => 948,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 949,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 949,
			'semestre' => 949,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 950,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 950,
			'semestre' => 950,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 951,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 951,
			'semestre' => 951,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 952,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 952,
			'semestre' => 952,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 953,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 953,
			'semestre' => 953,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 954,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 954,
			'semestre' => 954,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 955,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 955,
			'semestre' => 955,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 956,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 956,
			'semestre' => 956,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 957,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 957,
			'semestre' => 957,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 958,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 958,
			'semestre' => 958,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 959,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 959,
			'semestre' => 959,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 960,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 960,
			'semestre' => 960,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 961,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 961,
			'semestre' => 961,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 962,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 962,
			'semestre' => 962,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 963,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 963,
			'semestre' => 963,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 964,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 964,
			'semestre' => 964,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 965,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 965,
			'semestre' => 965,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 966,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 966,
			'semestre' => 966,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 967,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 967,
			'semestre' => 967,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 968,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 968,
			'semestre' => 968,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 969,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 969,
			'semestre' => 969,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 970,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 970,
			'semestre' => 970,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 971,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 971,
			'semestre' => 971,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 972,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 972,
			'semestre' => 972,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 973,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 973,
			'semestre' => 973,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 974,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 974,
			'semestre' => 974,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 975,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 975,
			'semestre' => 975,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 976,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 976,
			'semestre' => 976,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 977,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 977,
			'semestre' => 977,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 978,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 978,
			'semestre' => 978,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 979,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 979,
			'semestre' => 979,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 980,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 980,
			'semestre' => 980,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 981,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 981,
			'semestre' => 981,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 982,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 982,
			'semestre' => 982,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 983,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 983,
			'semestre' => 983,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 984,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 984,
			'semestre' => 984,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 985,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 985,
			'semestre' => 985,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 986,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 986,
			'semestre' => 986,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 987,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 987,
			'semestre' => 987,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 988,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 988,
			'semestre' => 988,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 989,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 989,
			'semestre' => 989,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 990,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 990,
			'semestre' => 990,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 991,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 991,
			'semestre' => 991,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 992,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 992,
			'semestre' => 992,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 993,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 993,
			'semestre' => 993,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 994,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 994,
			'semestre' => 994,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 995,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 995,
			'semestre' => 995,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 996,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 996,
			'semestre' => 996,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 997,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 997,
			'semestre' => 997,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 998,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 998,
			'semestre' => 998,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 999,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 999,
			'semestre' => 999,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
		array(
			'id' => 1000,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 1000,
			'semestre' => 1000,
			'data_inicio' => '2012-07-25',
			'data_fim' => '2012-07-25'
		),
	);

}
