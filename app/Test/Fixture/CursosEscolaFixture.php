<?php
/**
 * CursosEscolaFixture
 *
 */
class CursosEscolaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_adicao' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Curso' => array('column' => 'curso_id', 'unique' => 0),
			'Escola' => array('column' => 'escola_id', 'unique' => 0)
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
			'escola_id' => 1,
			'curso_id' => 1,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 2,
			'escola_id' => 2,
			'curso_id' => 2,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 3,
			'escola_id' => 3,
			'curso_id' => 3,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 4,
			'escola_id' => 4,
			'curso_id' => 4,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 5,
			'escola_id' => 5,
			'curso_id' => 5,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 6,
			'escola_id' => 6,
			'curso_id' => 6,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 7,
			'escola_id' => 7,
			'curso_id' => 7,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 8,
			'escola_id' => 8,
			'curso_id' => 8,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 9,
			'escola_id' => 9,
			'curso_id' => 9,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 10,
			'escola_id' => 10,
			'curso_id' => 10,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 11,
			'escola_id' => 11,
			'curso_id' => 11,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 12,
			'escola_id' => 12,
			'curso_id' => 12,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 13,
			'escola_id' => 13,
			'curso_id' => 13,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 14,
			'escola_id' => 14,
			'curso_id' => 14,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 15,
			'escola_id' => 15,
			'curso_id' => 15,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 16,
			'escola_id' => 16,
			'curso_id' => 16,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 17,
			'escola_id' => 17,
			'curso_id' => 17,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 18,
			'escola_id' => 18,
			'curso_id' => 18,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 19,
			'escola_id' => 19,
			'curso_id' => 19,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 20,
			'escola_id' => 20,
			'curso_id' => 20,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 21,
			'escola_id' => 21,
			'curso_id' => 21,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 22,
			'escola_id' => 22,
			'curso_id' => 22,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 23,
			'escola_id' => 23,
			'curso_id' => 23,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 24,
			'escola_id' => 24,
			'curso_id' => 24,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 25,
			'escola_id' => 25,
			'curso_id' => 25,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 26,
			'escola_id' => 26,
			'curso_id' => 26,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 27,
			'escola_id' => 27,
			'curso_id' => 27,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 28,
			'escola_id' => 28,
			'curso_id' => 28,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 29,
			'escola_id' => 29,
			'curso_id' => 29,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 30,
			'escola_id' => 30,
			'curso_id' => 30,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 31,
			'escola_id' => 31,
			'curso_id' => 31,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 32,
			'escola_id' => 32,
			'curso_id' => 32,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 33,
			'escola_id' => 33,
			'curso_id' => 33,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 34,
			'escola_id' => 34,
			'curso_id' => 34,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 35,
			'escola_id' => 35,
			'curso_id' => 35,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 36,
			'escola_id' => 36,
			'curso_id' => 36,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 37,
			'escola_id' => 37,
			'curso_id' => 37,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 38,
			'escola_id' => 38,
			'curso_id' => 38,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 39,
			'escola_id' => 39,
			'curso_id' => 39,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 40,
			'escola_id' => 40,
			'curso_id' => 40,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 41,
			'escola_id' => 41,
			'curso_id' => 41,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 42,
			'escola_id' => 42,
			'curso_id' => 42,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 43,
			'escola_id' => 43,
			'curso_id' => 43,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 44,
			'escola_id' => 44,
			'curso_id' => 44,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 45,
			'escola_id' => 45,
			'curso_id' => 45,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 46,
			'escola_id' => 46,
			'curso_id' => 46,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 47,
			'escola_id' => 47,
			'curso_id' => 47,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 48,
			'escola_id' => 48,
			'curso_id' => 48,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 49,
			'escola_id' => 49,
			'curso_id' => 49,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 50,
			'escola_id' => 50,
			'curso_id' => 50,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 51,
			'escola_id' => 51,
			'curso_id' => 51,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 52,
			'escola_id' => 52,
			'curso_id' => 52,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 53,
			'escola_id' => 53,
			'curso_id' => 53,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 54,
			'escola_id' => 54,
			'curso_id' => 54,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 55,
			'escola_id' => 55,
			'curso_id' => 55,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 56,
			'escola_id' => 56,
			'curso_id' => 56,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 57,
			'escola_id' => 57,
			'curso_id' => 57,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 58,
			'escola_id' => 58,
			'curso_id' => 58,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 59,
			'escola_id' => 59,
			'curso_id' => 59,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 60,
			'escola_id' => 60,
			'curso_id' => 60,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 61,
			'escola_id' => 61,
			'curso_id' => 61,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 62,
			'escola_id' => 62,
			'curso_id' => 62,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 63,
			'escola_id' => 63,
			'curso_id' => 63,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 64,
			'escola_id' => 64,
			'curso_id' => 64,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 65,
			'escola_id' => 65,
			'curso_id' => 65,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 66,
			'escola_id' => 66,
			'curso_id' => 66,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 67,
			'escola_id' => 67,
			'curso_id' => 67,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 68,
			'escola_id' => 68,
			'curso_id' => 68,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 69,
			'escola_id' => 69,
			'curso_id' => 69,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 70,
			'escola_id' => 70,
			'curso_id' => 70,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 71,
			'escola_id' => 71,
			'curso_id' => 71,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 72,
			'escola_id' => 72,
			'curso_id' => 72,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 73,
			'escola_id' => 73,
			'curso_id' => 73,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 74,
			'escola_id' => 74,
			'curso_id' => 74,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 75,
			'escola_id' => 75,
			'curso_id' => 75,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 76,
			'escola_id' => 76,
			'curso_id' => 76,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 77,
			'escola_id' => 77,
			'curso_id' => 77,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 78,
			'escola_id' => 78,
			'curso_id' => 78,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 79,
			'escola_id' => 79,
			'curso_id' => 79,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 80,
			'escola_id' => 80,
			'curso_id' => 80,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 81,
			'escola_id' => 81,
			'curso_id' => 81,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 82,
			'escola_id' => 82,
			'curso_id' => 82,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 83,
			'escola_id' => 83,
			'curso_id' => 83,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 84,
			'escola_id' => 84,
			'curso_id' => 84,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 85,
			'escola_id' => 85,
			'curso_id' => 85,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 86,
			'escola_id' => 86,
			'curso_id' => 86,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 87,
			'escola_id' => 87,
			'curso_id' => 87,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 88,
			'escola_id' => 88,
			'curso_id' => 88,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 89,
			'escola_id' => 89,
			'curso_id' => 89,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 90,
			'escola_id' => 90,
			'curso_id' => 90,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 91,
			'escola_id' => 91,
			'curso_id' => 91,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 92,
			'escola_id' => 92,
			'curso_id' => 92,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 93,
			'escola_id' => 93,
			'curso_id' => 93,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 94,
			'escola_id' => 94,
			'curso_id' => 94,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 95,
			'escola_id' => 95,
			'curso_id' => 95,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 96,
			'escola_id' => 96,
			'curso_id' => 96,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 97,
			'escola_id' => 97,
			'curso_id' => 97,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 98,
			'escola_id' => 98,
			'curso_id' => 98,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 99,
			'escola_id' => 99,
			'curso_id' => 99,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 100,
			'escola_id' => 100,
			'curso_id' => 100,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 101,
			'escola_id' => 101,
			'curso_id' => 101,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 102,
			'escola_id' => 102,
			'curso_id' => 102,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 103,
			'escola_id' => 103,
			'curso_id' => 103,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 104,
			'escola_id' => 104,
			'curso_id' => 104,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 105,
			'escola_id' => 105,
			'curso_id' => 105,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 106,
			'escola_id' => 106,
			'curso_id' => 106,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 107,
			'escola_id' => 107,
			'curso_id' => 107,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 108,
			'escola_id' => 108,
			'curso_id' => 108,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 109,
			'escola_id' => 109,
			'curso_id' => 109,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 110,
			'escola_id' => 110,
			'curso_id' => 110,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 111,
			'escola_id' => 111,
			'curso_id' => 111,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 112,
			'escola_id' => 112,
			'curso_id' => 112,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 113,
			'escola_id' => 113,
			'curso_id' => 113,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 114,
			'escola_id' => 114,
			'curso_id' => 114,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 115,
			'escola_id' => 115,
			'curso_id' => 115,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 116,
			'escola_id' => 116,
			'curso_id' => 116,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 117,
			'escola_id' => 117,
			'curso_id' => 117,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 118,
			'escola_id' => 118,
			'curso_id' => 118,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 119,
			'escola_id' => 119,
			'curso_id' => 119,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 120,
			'escola_id' => 120,
			'curso_id' => 120,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 121,
			'escola_id' => 121,
			'curso_id' => 121,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 122,
			'escola_id' => 122,
			'curso_id' => 122,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 123,
			'escola_id' => 123,
			'curso_id' => 123,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 124,
			'escola_id' => 124,
			'curso_id' => 124,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 125,
			'escola_id' => 125,
			'curso_id' => 125,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 126,
			'escola_id' => 126,
			'curso_id' => 126,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 127,
			'escola_id' => 127,
			'curso_id' => 127,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 128,
			'escola_id' => 128,
			'curso_id' => 128,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 129,
			'escola_id' => 129,
			'curso_id' => 129,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 130,
			'escola_id' => 130,
			'curso_id' => 130,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 131,
			'escola_id' => 131,
			'curso_id' => 131,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 132,
			'escola_id' => 132,
			'curso_id' => 132,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 133,
			'escola_id' => 133,
			'curso_id' => 133,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 134,
			'escola_id' => 134,
			'curso_id' => 134,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 135,
			'escola_id' => 135,
			'curso_id' => 135,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 136,
			'escola_id' => 136,
			'curso_id' => 136,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 137,
			'escola_id' => 137,
			'curso_id' => 137,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 138,
			'escola_id' => 138,
			'curso_id' => 138,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 139,
			'escola_id' => 139,
			'curso_id' => 139,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 140,
			'escola_id' => 140,
			'curso_id' => 140,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 141,
			'escola_id' => 141,
			'curso_id' => 141,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 142,
			'escola_id' => 142,
			'curso_id' => 142,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 143,
			'escola_id' => 143,
			'curso_id' => 143,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 144,
			'escola_id' => 144,
			'curso_id' => 144,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 145,
			'escola_id' => 145,
			'curso_id' => 145,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 146,
			'escola_id' => 146,
			'curso_id' => 146,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 147,
			'escola_id' => 147,
			'curso_id' => 147,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 148,
			'escola_id' => 148,
			'curso_id' => 148,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 149,
			'escola_id' => 149,
			'curso_id' => 149,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 150,
			'escola_id' => 150,
			'curso_id' => 150,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 151,
			'escola_id' => 151,
			'curso_id' => 151,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 152,
			'escola_id' => 152,
			'curso_id' => 152,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 153,
			'escola_id' => 153,
			'curso_id' => 153,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 154,
			'escola_id' => 154,
			'curso_id' => 154,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 155,
			'escola_id' => 155,
			'curso_id' => 155,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 156,
			'escola_id' => 156,
			'curso_id' => 156,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 157,
			'escola_id' => 157,
			'curso_id' => 157,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 158,
			'escola_id' => 158,
			'curso_id' => 158,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 159,
			'escola_id' => 159,
			'curso_id' => 159,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 160,
			'escola_id' => 160,
			'curso_id' => 160,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 161,
			'escola_id' => 161,
			'curso_id' => 161,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 162,
			'escola_id' => 162,
			'curso_id' => 162,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 163,
			'escola_id' => 163,
			'curso_id' => 163,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 164,
			'escola_id' => 164,
			'curso_id' => 164,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 165,
			'escola_id' => 165,
			'curso_id' => 165,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 166,
			'escola_id' => 166,
			'curso_id' => 166,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 167,
			'escola_id' => 167,
			'curso_id' => 167,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 168,
			'escola_id' => 168,
			'curso_id' => 168,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 169,
			'escola_id' => 169,
			'curso_id' => 169,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 170,
			'escola_id' => 170,
			'curso_id' => 170,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 171,
			'escola_id' => 171,
			'curso_id' => 171,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 172,
			'escola_id' => 172,
			'curso_id' => 172,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 173,
			'escola_id' => 173,
			'curso_id' => 173,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 174,
			'escola_id' => 174,
			'curso_id' => 174,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 175,
			'escola_id' => 175,
			'curso_id' => 175,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 176,
			'escola_id' => 176,
			'curso_id' => 176,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 177,
			'escola_id' => 177,
			'curso_id' => 177,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 178,
			'escola_id' => 178,
			'curso_id' => 178,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 179,
			'escola_id' => 179,
			'curso_id' => 179,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 180,
			'escola_id' => 180,
			'curso_id' => 180,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 181,
			'escola_id' => 181,
			'curso_id' => 181,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 182,
			'escola_id' => 182,
			'curso_id' => 182,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 183,
			'escola_id' => 183,
			'curso_id' => 183,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 184,
			'escola_id' => 184,
			'curso_id' => 184,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 185,
			'escola_id' => 185,
			'curso_id' => 185,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 186,
			'escola_id' => 186,
			'curso_id' => 186,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 187,
			'escola_id' => 187,
			'curso_id' => 187,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 188,
			'escola_id' => 188,
			'curso_id' => 188,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 189,
			'escola_id' => 189,
			'curso_id' => 189,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 190,
			'escola_id' => 190,
			'curso_id' => 190,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 191,
			'escola_id' => 191,
			'curso_id' => 191,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 192,
			'escola_id' => 192,
			'curso_id' => 192,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 193,
			'escola_id' => 193,
			'curso_id' => 193,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 194,
			'escola_id' => 194,
			'curso_id' => 194,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 195,
			'escola_id' => 195,
			'curso_id' => 195,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 196,
			'escola_id' => 196,
			'curso_id' => 196,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 197,
			'escola_id' => 197,
			'curso_id' => 197,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 198,
			'escola_id' => 198,
			'curso_id' => 198,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 199,
			'escola_id' => 199,
			'curso_id' => 199,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 200,
			'escola_id' => 200,
			'curso_id' => 200,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 201,
			'escola_id' => 201,
			'curso_id' => 201,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 202,
			'escola_id' => 202,
			'curso_id' => 202,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 203,
			'escola_id' => 203,
			'curso_id' => 203,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 204,
			'escola_id' => 204,
			'curso_id' => 204,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 205,
			'escola_id' => 205,
			'curso_id' => 205,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 206,
			'escola_id' => 206,
			'curso_id' => 206,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 207,
			'escola_id' => 207,
			'curso_id' => 207,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 208,
			'escola_id' => 208,
			'curso_id' => 208,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 209,
			'escola_id' => 209,
			'curso_id' => 209,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 210,
			'escola_id' => 210,
			'curso_id' => 210,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 211,
			'escola_id' => 211,
			'curso_id' => 211,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 212,
			'escola_id' => 212,
			'curso_id' => 212,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 213,
			'escola_id' => 213,
			'curso_id' => 213,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 214,
			'escola_id' => 214,
			'curso_id' => 214,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 215,
			'escola_id' => 215,
			'curso_id' => 215,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 216,
			'escola_id' => 216,
			'curso_id' => 216,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 217,
			'escola_id' => 217,
			'curso_id' => 217,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 218,
			'escola_id' => 218,
			'curso_id' => 218,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 219,
			'escola_id' => 219,
			'curso_id' => 219,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 220,
			'escola_id' => 220,
			'curso_id' => 220,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 221,
			'escola_id' => 221,
			'curso_id' => 221,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 222,
			'escola_id' => 222,
			'curso_id' => 222,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 223,
			'escola_id' => 223,
			'curso_id' => 223,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 224,
			'escola_id' => 224,
			'curso_id' => 224,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 225,
			'escola_id' => 225,
			'curso_id' => 225,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 226,
			'escola_id' => 226,
			'curso_id' => 226,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 227,
			'escola_id' => 227,
			'curso_id' => 227,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 228,
			'escola_id' => 228,
			'curso_id' => 228,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 229,
			'escola_id' => 229,
			'curso_id' => 229,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 230,
			'escola_id' => 230,
			'curso_id' => 230,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 231,
			'escola_id' => 231,
			'curso_id' => 231,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 232,
			'escola_id' => 232,
			'curso_id' => 232,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 233,
			'escola_id' => 233,
			'curso_id' => 233,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 234,
			'escola_id' => 234,
			'curso_id' => 234,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 235,
			'escola_id' => 235,
			'curso_id' => 235,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 236,
			'escola_id' => 236,
			'curso_id' => 236,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 237,
			'escola_id' => 237,
			'curso_id' => 237,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 238,
			'escola_id' => 238,
			'curso_id' => 238,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 239,
			'escola_id' => 239,
			'curso_id' => 239,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 240,
			'escola_id' => 240,
			'curso_id' => 240,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 241,
			'escola_id' => 241,
			'curso_id' => 241,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 242,
			'escola_id' => 242,
			'curso_id' => 242,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 243,
			'escola_id' => 243,
			'curso_id' => 243,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 244,
			'escola_id' => 244,
			'curso_id' => 244,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 245,
			'escola_id' => 245,
			'curso_id' => 245,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 246,
			'escola_id' => 246,
			'curso_id' => 246,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 247,
			'escola_id' => 247,
			'curso_id' => 247,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 248,
			'escola_id' => 248,
			'curso_id' => 248,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 249,
			'escola_id' => 249,
			'curso_id' => 249,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 250,
			'escola_id' => 250,
			'curso_id' => 250,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 251,
			'escola_id' => 251,
			'curso_id' => 251,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 252,
			'escola_id' => 252,
			'curso_id' => 252,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 253,
			'escola_id' => 253,
			'curso_id' => 253,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 254,
			'escola_id' => 254,
			'curso_id' => 254,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 255,
			'escola_id' => 255,
			'curso_id' => 255,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 256,
			'escola_id' => 256,
			'curso_id' => 256,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 257,
			'escola_id' => 257,
			'curso_id' => 257,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 258,
			'escola_id' => 258,
			'curso_id' => 258,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 259,
			'escola_id' => 259,
			'curso_id' => 259,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 260,
			'escola_id' => 260,
			'curso_id' => 260,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 261,
			'escola_id' => 261,
			'curso_id' => 261,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 262,
			'escola_id' => 262,
			'curso_id' => 262,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 263,
			'escola_id' => 263,
			'curso_id' => 263,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 264,
			'escola_id' => 264,
			'curso_id' => 264,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 265,
			'escola_id' => 265,
			'curso_id' => 265,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 266,
			'escola_id' => 266,
			'curso_id' => 266,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 267,
			'escola_id' => 267,
			'curso_id' => 267,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 268,
			'escola_id' => 268,
			'curso_id' => 268,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 269,
			'escola_id' => 269,
			'curso_id' => 269,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 270,
			'escola_id' => 270,
			'curso_id' => 270,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 271,
			'escola_id' => 271,
			'curso_id' => 271,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 272,
			'escola_id' => 272,
			'curso_id' => 272,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 273,
			'escola_id' => 273,
			'curso_id' => 273,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 274,
			'escola_id' => 274,
			'curso_id' => 274,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 275,
			'escola_id' => 275,
			'curso_id' => 275,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 276,
			'escola_id' => 276,
			'curso_id' => 276,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 277,
			'escola_id' => 277,
			'curso_id' => 277,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 278,
			'escola_id' => 278,
			'curso_id' => 278,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 279,
			'escola_id' => 279,
			'curso_id' => 279,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 280,
			'escola_id' => 280,
			'curso_id' => 280,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 281,
			'escola_id' => 281,
			'curso_id' => 281,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 282,
			'escola_id' => 282,
			'curso_id' => 282,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 283,
			'escola_id' => 283,
			'curso_id' => 283,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 284,
			'escola_id' => 284,
			'curso_id' => 284,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 285,
			'escola_id' => 285,
			'curso_id' => 285,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 286,
			'escola_id' => 286,
			'curso_id' => 286,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 287,
			'escola_id' => 287,
			'curso_id' => 287,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 288,
			'escola_id' => 288,
			'curso_id' => 288,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 289,
			'escola_id' => 289,
			'curso_id' => 289,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 290,
			'escola_id' => 290,
			'curso_id' => 290,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 291,
			'escola_id' => 291,
			'curso_id' => 291,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 292,
			'escola_id' => 292,
			'curso_id' => 292,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 293,
			'escola_id' => 293,
			'curso_id' => 293,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 294,
			'escola_id' => 294,
			'curso_id' => 294,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 295,
			'escola_id' => 295,
			'curso_id' => 295,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 296,
			'escola_id' => 296,
			'curso_id' => 296,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 297,
			'escola_id' => 297,
			'curso_id' => 297,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 298,
			'escola_id' => 298,
			'curso_id' => 298,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 299,
			'escola_id' => 299,
			'curso_id' => 299,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 300,
			'escola_id' => 300,
			'curso_id' => 300,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 301,
			'escola_id' => 301,
			'curso_id' => 301,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 302,
			'escola_id' => 302,
			'curso_id' => 302,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 303,
			'escola_id' => 303,
			'curso_id' => 303,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 304,
			'escola_id' => 304,
			'curso_id' => 304,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 305,
			'escola_id' => 305,
			'curso_id' => 305,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 306,
			'escola_id' => 306,
			'curso_id' => 306,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 307,
			'escola_id' => 307,
			'curso_id' => 307,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 308,
			'escola_id' => 308,
			'curso_id' => 308,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 309,
			'escola_id' => 309,
			'curso_id' => 309,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 310,
			'escola_id' => 310,
			'curso_id' => 310,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 311,
			'escola_id' => 311,
			'curso_id' => 311,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 312,
			'escola_id' => 312,
			'curso_id' => 312,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 313,
			'escola_id' => 313,
			'curso_id' => 313,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 314,
			'escola_id' => 314,
			'curso_id' => 314,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 315,
			'escola_id' => 315,
			'curso_id' => 315,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 316,
			'escola_id' => 316,
			'curso_id' => 316,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 317,
			'escola_id' => 317,
			'curso_id' => 317,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 318,
			'escola_id' => 318,
			'curso_id' => 318,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 319,
			'escola_id' => 319,
			'curso_id' => 319,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 320,
			'escola_id' => 320,
			'curso_id' => 320,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 321,
			'escola_id' => 321,
			'curso_id' => 321,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 322,
			'escola_id' => 322,
			'curso_id' => 322,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 323,
			'escola_id' => 323,
			'curso_id' => 323,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 324,
			'escola_id' => 324,
			'curso_id' => 324,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 325,
			'escola_id' => 325,
			'curso_id' => 325,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 326,
			'escola_id' => 326,
			'curso_id' => 326,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 327,
			'escola_id' => 327,
			'curso_id' => 327,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 328,
			'escola_id' => 328,
			'curso_id' => 328,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 329,
			'escola_id' => 329,
			'curso_id' => 329,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 330,
			'escola_id' => 330,
			'curso_id' => 330,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 331,
			'escola_id' => 331,
			'curso_id' => 331,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 332,
			'escola_id' => 332,
			'curso_id' => 332,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 333,
			'escola_id' => 333,
			'curso_id' => 333,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 334,
			'escola_id' => 334,
			'curso_id' => 334,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 335,
			'escola_id' => 335,
			'curso_id' => 335,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 336,
			'escola_id' => 336,
			'curso_id' => 336,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 337,
			'escola_id' => 337,
			'curso_id' => 337,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 338,
			'escola_id' => 338,
			'curso_id' => 338,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 339,
			'escola_id' => 339,
			'curso_id' => 339,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 340,
			'escola_id' => 340,
			'curso_id' => 340,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 341,
			'escola_id' => 341,
			'curso_id' => 341,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 342,
			'escola_id' => 342,
			'curso_id' => 342,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 343,
			'escola_id' => 343,
			'curso_id' => 343,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 344,
			'escola_id' => 344,
			'curso_id' => 344,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 345,
			'escola_id' => 345,
			'curso_id' => 345,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 346,
			'escola_id' => 346,
			'curso_id' => 346,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 347,
			'escola_id' => 347,
			'curso_id' => 347,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 348,
			'escola_id' => 348,
			'curso_id' => 348,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 349,
			'escola_id' => 349,
			'curso_id' => 349,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 350,
			'escola_id' => 350,
			'curso_id' => 350,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 351,
			'escola_id' => 351,
			'curso_id' => 351,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 352,
			'escola_id' => 352,
			'curso_id' => 352,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 353,
			'escola_id' => 353,
			'curso_id' => 353,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 354,
			'escola_id' => 354,
			'curso_id' => 354,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 355,
			'escola_id' => 355,
			'curso_id' => 355,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 356,
			'escola_id' => 356,
			'curso_id' => 356,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 357,
			'escola_id' => 357,
			'curso_id' => 357,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 358,
			'escola_id' => 358,
			'curso_id' => 358,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 359,
			'escola_id' => 359,
			'curso_id' => 359,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 360,
			'escola_id' => 360,
			'curso_id' => 360,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 361,
			'escola_id' => 361,
			'curso_id' => 361,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 362,
			'escola_id' => 362,
			'curso_id' => 362,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 363,
			'escola_id' => 363,
			'curso_id' => 363,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 364,
			'escola_id' => 364,
			'curso_id' => 364,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 365,
			'escola_id' => 365,
			'curso_id' => 365,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 366,
			'escola_id' => 366,
			'curso_id' => 366,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 367,
			'escola_id' => 367,
			'curso_id' => 367,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 368,
			'escola_id' => 368,
			'curso_id' => 368,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 369,
			'escola_id' => 369,
			'curso_id' => 369,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 370,
			'escola_id' => 370,
			'curso_id' => 370,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 371,
			'escola_id' => 371,
			'curso_id' => 371,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 372,
			'escola_id' => 372,
			'curso_id' => 372,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 373,
			'escola_id' => 373,
			'curso_id' => 373,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 374,
			'escola_id' => 374,
			'curso_id' => 374,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 375,
			'escola_id' => 375,
			'curso_id' => 375,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 376,
			'escola_id' => 376,
			'curso_id' => 376,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 377,
			'escola_id' => 377,
			'curso_id' => 377,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 378,
			'escola_id' => 378,
			'curso_id' => 378,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 379,
			'escola_id' => 379,
			'curso_id' => 379,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 380,
			'escola_id' => 380,
			'curso_id' => 380,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 381,
			'escola_id' => 381,
			'curso_id' => 381,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 382,
			'escola_id' => 382,
			'curso_id' => 382,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 383,
			'escola_id' => 383,
			'curso_id' => 383,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 384,
			'escola_id' => 384,
			'curso_id' => 384,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 385,
			'escola_id' => 385,
			'curso_id' => 385,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 386,
			'escola_id' => 386,
			'curso_id' => 386,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 387,
			'escola_id' => 387,
			'curso_id' => 387,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 388,
			'escola_id' => 388,
			'curso_id' => 388,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 389,
			'escola_id' => 389,
			'curso_id' => 389,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 390,
			'escola_id' => 390,
			'curso_id' => 390,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 391,
			'escola_id' => 391,
			'curso_id' => 391,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 392,
			'escola_id' => 392,
			'curso_id' => 392,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 393,
			'escola_id' => 393,
			'curso_id' => 393,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 394,
			'escola_id' => 394,
			'curso_id' => 394,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 395,
			'escola_id' => 395,
			'curso_id' => 395,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 396,
			'escola_id' => 396,
			'curso_id' => 396,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 397,
			'escola_id' => 397,
			'curso_id' => 397,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 398,
			'escola_id' => 398,
			'curso_id' => 398,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 399,
			'escola_id' => 399,
			'curso_id' => 399,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 400,
			'escola_id' => 400,
			'curso_id' => 400,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 401,
			'escola_id' => 401,
			'curso_id' => 401,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 402,
			'escola_id' => 402,
			'curso_id' => 402,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 403,
			'escola_id' => 403,
			'curso_id' => 403,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 404,
			'escola_id' => 404,
			'curso_id' => 404,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 405,
			'escola_id' => 405,
			'curso_id' => 405,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 406,
			'escola_id' => 406,
			'curso_id' => 406,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 407,
			'escola_id' => 407,
			'curso_id' => 407,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 408,
			'escola_id' => 408,
			'curso_id' => 408,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 409,
			'escola_id' => 409,
			'curso_id' => 409,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 410,
			'escola_id' => 410,
			'curso_id' => 410,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 411,
			'escola_id' => 411,
			'curso_id' => 411,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 412,
			'escola_id' => 412,
			'curso_id' => 412,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 413,
			'escola_id' => 413,
			'curso_id' => 413,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 414,
			'escola_id' => 414,
			'curso_id' => 414,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 415,
			'escola_id' => 415,
			'curso_id' => 415,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 416,
			'escola_id' => 416,
			'curso_id' => 416,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 417,
			'escola_id' => 417,
			'curso_id' => 417,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 418,
			'escola_id' => 418,
			'curso_id' => 418,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 419,
			'escola_id' => 419,
			'curso_id' => 419,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 420,
			'escola_id' => 420,
			'curso_id' => 420,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 421,
			'escola_id' => 421,
			'curso_id' => 421,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 422,
			'escola_id' => 422,
			'curso_id' => 422,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 423,
			'escola_id' => 423,
			'curso_id' => 423,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 424,
			'escola_id' => 424,
			'curso_id' => 424,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 425,
			'escola_id' => 425,
			'curso_id' => 425,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 426,
			'escola_id' => 426,
			'curso_id' => 426,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 427,
			'escola_id' => 427,
			'curso_id' => 427,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 428,
			'escola_id' => 428,
			'curso_id' => 428,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 429,
			'escola_id' => 429,
			'curso_id' => 429,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 430,
			'escola_id' => 430,
			'curso_id' => 430,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 431,
			'escola_id' => 431,
			'curso_id' => 431,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 432,
			'escola_id' => 432,
			'curso_id' => 432,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 433,
			'escola_id' => 433,
			'curso_id' => 433,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 434,
			'escola_id' => 434,
			'curso_id' => 434,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 435,
			'escola_id' => 435,
			'curso_id' => 435,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 436,
			'escola_id' => 436,
			'curso_id' => 436,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 437,
			'escola_id' => 437,
			'curso_id' => 437,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 438,
			'escola_id' => 438,
			'curso_id' => 438,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 439,
			'escola_id' => 439,
			'curso_id' => 439,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 440,
			'escola_id' => 440,
			'curso_id' => 440,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 441,
			'escola_id' => 441,
			'curso_id' => 441,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 442,
			'escola_id' => 442,
			'curso_id' => 442,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 443,
			'escola_id' => 443,
			'curso_id' => 443,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 444,
			'escola_id' => 444,
			'curso_id' => 444,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 445,
			'escola_id' => 445,
			'curso_id' => 445,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 446,
			'escola_id' => 446,
			'curso_id' => 446,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 447,
			'escola_id' => 447,
			'curso_id' => 447,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 448,
			'escola_id' => 448,
			'curso_id' => 448,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 449,
			'escola_id' => 449,
			'curso_id' => 449,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 450,
			'escola_id' => 450,
			'curso_id' => 450,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 451,
			'escola_id' => 451,
			'curso_id' => 451,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 452,
			'escola_id' => 452,
			'curso_id' => 452,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 453,
			'escola_id' => 453,
			'curso_id' => 453,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 454,
			'escola_id' => 454,
			'curso_id' => 454,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 455,
			'escola_id' => 455,
			'curso_id' => 455,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 456,
			'escola_id' => 456,
			'curso_id' => 456,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 457,
			'escola_id' => 457,
			'curso_id' => 457,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 458,
			'escola_id' => 458,
			'curso_id' => 458,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 459,
			'escola_id' => 459,
			'curso_id' => 459,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 460,
			'escola_id' => 460,
			'curso_id' => 460,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 461,
			'escola_id' => 461,
			'curso_id' => 461,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 462,
			'escola_id' => 462,
			'curso_id' => 462,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 463,
			'escola_id' => 463,
			'curso_id' => 463,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 464,
			'escola_id' => 464,
			'curso_id' => 464,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 465,
			'escola_id' => 465,
			'curso_id' => 465,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 466,
			'escola_id' => 466,
			'curso_id' => 466,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 467,
			'escola_id' => 467,
			'curso_id' => 467,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 468,
			'escola_id' => 468,
			'curso_id' => 468,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 469,
			'escola_id' => 469,
			'curso_id' => 469,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 470,
			'escola_id' => 470,
			'curso_id' => 470,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 471,
			'escola_id' => 471,
			'curso_id' => 471,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 472,
			'escola_id' => 472,
			'curso_id' => 472,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 473,
			'escola_id' => 473,
			'curso_id' => 473,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 474,
			'escola_id' => 474,
			'curso_id' => 474,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 475,
			'escola_id' => 475,
			'curso_id' => 475,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 476,
			'escola_id' => 476,
			'curso_id' => 476,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 477,
			'escola_id' => 477,
			'curso_id' => 477,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 478,
			'escola_id' => 478,
			'curso_id' => 478,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 479,
			'escola_id' => 479,
			'curso_id' => 479,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 480,
			'escola_id' => 480,
			'curso_id' => 480,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 481,
			'escola_id' => 481,
			'curso_id' => 481,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 482,
			'escola_id' => 482,
			'curso_id' => 482,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 483,
			'escola_id' => 483,
			'curso_id' => 483,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 484,
			'escola_id' => 484,
			'curso_id' => 484,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 485,
			'escola_id' => 485,
			'curso_id' => 485,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 486,
			'escola_id' => 486,
			'curso_id' => 486,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 487,
			'escola_id' => 487,
			'curso_id' => 487,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 488,
			'escola_id' => 488,
			'curso_id' => 488,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 489,
			'escola_id' => 489,
			'curso_id' => 489,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 490,
			'escola_id' => 490,
			'curso_id' => 490,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 491,
			'escola_id' => 491,
			'curso_id' => 491,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 492,
			'escola_id' => 492,
			'curso_id' => 492,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 493,
			'escola_id' => 493,
			'curso_id' => 493,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 494,
			'escola_id' => 494,
			'curso_id' => 494,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 495,
			'escola_id' => 495,
			'curso_id' => 495,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 496,
			'escola_id' => 496,
			'curso_id' => 496,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 497,
			'escola_id' => 497,
			'curso_id' => 497,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 498,
			'escola_id' => 498,
			'curso_id' => 498,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 499,
			'escola_id' => 499,
			'curso_id' => 499,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 500,
			'escola_id' => 500,
			'curso_id' => 500,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 501,
			'escola_id' => 501,
			'curso_id' => 501,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 502,
			'escola_id' => 502,
			'curso_id' => 502,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 503,
			'escola_id' => 503,
			'curso_id' => 503,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 504,
			'escola_id' => 504,
			'curso_id' => 504,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 505,
			'escola_id' => 505,
			'curso_id' => 505,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 506,
			'escola_id' => 506,
			'curso_id' => 506,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 507,
			'escola_id' => 507,
			'curso_id' => 507,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 508,
			'escola_id' => 508,
			'curso_id' => 508,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 509,
			'escola_id' => 509,
			'curso_id' => 509,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 510,
			'escola_id' => 510,
			'curso_id' => 510,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 511,
			'escola_id' => 511,
			'curso_id' => 511,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 512,
			'escola_id' => 512,
			'curso_id' => 512,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 513,
			'escola_id' => 513,
			'curso_id' => 513,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 514,
			'escola_id' => 514,
			'curso_id' => 514,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 515,
			'escola_id' => 515,
			'curso_id' => 515,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 516,
			'escola_id' => 516,
			'curso_id' => 516,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 517,
			'escola_id' => 517,
			'curso_id' => 517,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 518,
			'escola_id' => 518,
			'curso_id' => 518,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 519,
			'escola_id' => 519,
			'curso_id' => 519,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 520,
			'escola_id' => 520,
			'curso_id' => 520,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 521,
			'escola_id' => 521,
			'curso_id' => 521,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 522,
			'escola_id' => 522,
			'curso_id' => 522,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 523,
			'escola_id' => 523,
			'curso_id' => 523,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 524,
			'escola_id' => 524,
			'curso_id' => 524,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 525,
			'escola_id' => 525,
			'curso_id' => 525,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 526,
			'escola_id' => 526,
			'curso_id' => 526,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 527,
			'escola_id' => 527,
			'curso_id' => 527,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 528,
			'escola_id' => 528,
			'curso_id' => 528,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 529,
			'escola_id' => 529,
			'curso_id' => 529,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 530,
			'escola_id' => 530,
			'curso_id' => 530,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 531,
			'escola_id' => 531,
			'curso_id' => 531,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 532,
			'escola_id' => 532,
			'curso_id' => 532,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 533,
			'escola_id' => 533,
			'curso_id' => 533,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 534,
			'escola_id' => 534,
			'curso_id' => 534,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 535,
			'escola_id' => 535,
			'curso_id' => 535,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 536,
			'escola_id' => 536,
			'curso_id' => 536,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 537,
			'escola_id' => 537,
			'curso_id' => 537,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 538,
			'escola_id' => 538,
			'curso_id' => 538,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 539,
			'escola_id' => 539,
			'curso_id' => 539,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 540,
			'escola_id' => 540,
			'curso_id' => 540,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 541,
			'escola_id' => 541,
			'curso_id' => 541,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 542,
			'escola_id' => 542,
			'curso_id' => 542,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 543,
			'escola_id' => 543,
			'curso_id' => 543,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 544,
			'escola_id' => 544,
			'curso_id' => 544,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 545,
			'escola_id' => 545,
			'curso_id' => 545,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 546,
			'escola_id' => 546,
			'curso_id' => 546,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 547,
			'escola_id' => 547,
			'curso_id' => 547,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 548,
			'escola_id' => 548,
			'curso_id' => 548,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 549,
			'escola_id' => 549,
			'curso_id' => 549,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 550,
			'escola_id' => 550,
			'curso_id' => 550,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 551,
			'escola_id' => 551,
			'curso_id' => 551,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 552,
			'escola_id' => 552,
			'curso_id' => 552,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 553,
			'escola_id' => 553,
			'curso_id' => 553,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 554,
			'escola_id' => 554,
			'curso_id' => 554,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 555,
			'escola_id' => 555,
			'curso_id' => 555,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 556,
			'escola_id' => 556,
			'curso_id' => 556,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 557,
			'escola_id' => 557,
			'curso_id' => 557,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 558,
			'escola_id' => 558,
			'curso_id' => 558,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 559,
			'escola_id' => 559,
			'curso_id' => 559,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 560,
			'escola_id' => 560,
			'curso_id' => 560,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 561,
			'escola_id' => 561,
			'curso_id' => 561,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 562,
			'escola_id' => 562,
			'curso_id' => 562,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 563,
			'escola_id' => 563,
			'curso_id' => 563,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 564,
			'escola_id' => 564,
			'curso_id' => 564,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 565,
			'escola_id' => 565,
			'curso_id' => 565,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 566,
			'escola_id' => 566,
			'curso_id' => 566,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 567,
			'escola_id' => 567,
			'curso_id' => 567,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 568,
			'escola_id' => 568,
			'curso_id' => 568,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 569,
			'escola_id' => 569,
			'curso_id' => 569,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 570,
			'escola_id' => 570,
			'curso_id' => 570,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 571,
			'escola_id' => 571,
			'curso_id' => 571,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 572,
			'escola_id' => 572,
			'curso_id' => 572,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 573,
			'escola_id' => 573,
			'curso_id' => 573,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 574,
			'escola_id' => 574,
			'curso_id' => 574,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 575,
			'escola_id' => 575,
			'curso_id' => 575,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 576,
			'escola_id' => 576,
			'curso_id' => 576,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 577,
			'escola_id' => 577,
			'curso_id' => 577,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 578,
			'escola_id' => 578,
			'curso_id' => 578,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 579,
			'escola_id' => 579,
			'curso_id' => 579,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 580,
			'escola_id' => 580,
			'curso_id' => 580,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 581,
			'escola_id' => 581,
			'curso_id' => 581,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 582,
			'escola_id' => 582,
			'curso_id' => 582,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 583,
			'escola_id' => 583,
			'curso_id' => 583,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 584,
			'escola_id' => 584,
			'curso_id' => 584,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 585,
			'escola_id' => 585,
			'curso_id' => 585,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 586,
			'escola_id' => 586,
			'curso_id' => 586,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 587,
			'escola_id' => 587,
			'curso_id' => 587,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 588,
			'escola_id' => 588,
			'curso_id' => 588,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 589,
			'escola_id' => 589,
			'curso_id' => 589,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 590,
			'escola_id' => 590,
			'curso_id' => 590,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 591,
			'escola_id' => 591,
			'curso_id' => 591,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 592,
			'escola_id' => 592,
			'curso_id' => 592,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 593,
			'escola_id' => 593,
			'curso_id' => 593,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 594,
			'escola_id' => 594,
			'curso_id' => 594,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 595,
			'escola_id' => 595,
			'curso_id' => 595,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 596,
			'escola_id' => 596,
			'curso_id' => 596,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 597,
			'escola_id' => 597,
			'curso_id' => 597,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 598,
			'escola_id' => 598,
			'curso_id' => 598,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 599,
			'escola_id' => 599,
			'curso_id' => 599,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 600,
			'escola_id' => 600,
			'curso_id' => 600,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 601,
			'escola_id' => 601,
			'curso_id' => 601,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 602,
			'escola_id' => 602,
			'curso_id' => 602,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 603,
			'escola_id' => 603,
			'curso_id' => 603,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 604,
			'escola_id' => 604,
			'curso_id' => 604,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 605,
			'escola_id' => 605,
			'curso_id' => 605,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 606,
			'escola_id' => 606,
			'curso_id' => 606,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 607,
			'escola_id' => 607,
			'curso_id' => 607,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 608,
			'escola_id' => 608,
			'curso_id' => 608,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 609,
			'escola_id' => 609,
			'curso_id' => 609,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 610,
			'escola_id' => 610,
			'curso_id' => 610,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 611,
			'escola_id' => 611,
			'curso_id' => 611,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 612,
			'escola_id' => 612,
			'curso_id' => 612,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 613,
			'escola_id' => 613,
			'curso_id' => 613,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 614,
			'escola_id' => 614,
			'curso_id' => 614,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 615,
			'escola_id' => 615,
			'curso_id' => 615,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 616,
			'escola_id' => 616,
			'curso_id' => 616,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 617,
			'escola_id' => 617,
			'curso_id' => 617,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 618,
			'escola_id' => 618,
			'curso_id' => 618,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 619,
			'escola_id' => 619,
			'curso_id' => 619,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 620,
			'escola_id' => 620,
			'curso_id' => 620,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 621,
			'escola_id' => 621,
			'curso_id' => 621,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 622,
			'escola_id' => 622,
			'curso_id' => 622,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 623,
			'escola_id' => 623,
			'curso_id' => 623,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 624,
			'escola_id' => 624,
			'curso_id' => 624,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 625,
			'escola_id' => 625,
			'curso_id' => 625,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 626,
			'escola_id' => 626,
			'curso_id' => 626,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 627,
			'escola_id' => 627,
			'curso_id' => 627,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 628,
			'escola_id' => 628,
			'curso_id' => 628,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 629,
			'escola_id' => 629,
			'curso_id' => 629,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 630,
			'escola_id' => 630,
			'curso_id' => 630,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 631,
			'escola_id' => 631,
			'curso_id' => 631,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 632,
			'escola_id' => 632,
			'curso_id' => 632,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 633,
			'escola_id' => 633,
			'curso_id' => 633,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 634,
			'escola_id' => 634,
			'curso_id' => 634,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 635,
			'escola_id' => 635,
			'curso_id' => 635,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 636,
			'escola_id' => 636,
			'curso_id' => 636,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 637,
			'escola_id' => 637,
			'curso_id' => 637,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 638,
			'escola_id' => 638,
			'curso_id' => 638,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 639,
			'escola_id' => 639,
			'curso_id' => 639,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 640,
			'escola_id' => 640,
			'curso_id' => 640,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 641,
			'escola_id' => 641,
			'curso_id' => 641,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 642,
			'escola_id' => 642,
			'curso_id' => 642,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 643,
			'escola_id' => 643,
			'curso_id' => 643,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 644,
			'escola_id' => 644,
			'curso_id' => 644,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 645,
			'escola_id' => 645,
			'curso_id' => 645,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 646,
			'escola_id' => 646,
			'curso_id' => 646,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 647,
			'escola_id' => 647,
			'curso_id' => 647,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 648,
			'escola_id' => 648,
			'curso_id' => 648,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 649,
			'escola_id' => 649,
			'curso_id' => 649,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 650,
			'escola_id' => 650,
			'curso_id' => 650,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 651,
			'escola_id' => 651,
			'curso_id' => 651,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 652,
			'escola_id' => 652,
			'curso_id' => 652,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 653,
			'escola_id' => 653,
			'curso_id' => 653,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 654,
			'escola_id' => 654,
			'curso_id' => 654,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 655,
			'escola_id' => 655,
			'curso_id' => 655,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 656,
			'escola_id' => 656,
			'curso_id' => 656,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 657,
			'escola_id' => 657,
			'curso_id' => 657,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 658,
			'escola_id' => 658,
			'curso_id' => 658,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 659,
			'escola_id' => 659,
			'curso_id' => 659,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 660,
			'escola_id' => 660,
			'curso_id' => 660,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 661,
			'escola_id' => 661,
			'curso_id' => 661,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 662,
			'escola_id' => 662,
			'curso_id' => 662,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 663,
			'escola_id' => 663,
			'curso_id' => 663,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 664,
			'escola_id' => 664,
			'curso_id' => 664,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 665,
			'escola_id' => 665,
			'curso_id' => 665,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 666,
			'escola_id' => 666,
			'curso_id' => 666,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 667,
			'escola_id' => 667,
			'curso_id' => 667,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 668,
			'escola_id' => 668,
			'curso_id' => 668,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 669,
			'escola_id' => 669,
			'curso_id' => 669,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 670,
			'escola_id' => 670,
			'curso_id' => 670,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 671,
			'escola_id' => 671,
			'curso_id' => 671,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 672,
			'escola_id' => 672,
			'curso_id' => 672,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 673,
			'escola_id' => 673,
			'curso_id' => 673,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 674,
			'escola_id' => 674,
			'curso_id' => 674,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 675,
			'escola_id' => 675,
			'curso_id' => 675,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 676,
			'escola_id' => 676,
			'curso_id' => 676,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 677,
			'escola_id' => 677,
			'curso_id' => 677,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 678,
			'escola_id' => 678,
			'curso_id' => 678,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 679,
			'escola_id' => 679,
			'curso_id' => 679,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 680,
			'escola_id' => 680,
			'curso_id' => 680,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 681,
			'escola_id' => 681,
			'curso_id' => 681,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 682,
			'escola_id' => 682,
			'curso_id' => 682,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 683,
			'escola_id' => 683,
			'curso_id' => 683,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 684,
			'escola_id' => 684,
			'curso_id' => 684,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 685,
			'escola_id' => 685,
			'curso_id' => 685,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 686,
			'escola_id' => 686,
			'curso_id' => 686,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 687,
			'escola_id' => 687,
			'curso_id' => 687,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 688,
			'escola_id' => 688,
			'curso_id' => 688,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 689,
			'escola_id' => 689,
			'curso_id' => 689,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 690,
			'escola_id' => 690,
			'curso_id' => 690,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 691,
			'escola_id' => 691,
			'curso_id' => 691,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 692,
			'escola_id' => 692,
			'curso_id' => 692,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 693,
			'escola_id' => 693,
			'curso_id' => 693,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 694,
			'escola_id' => 694,
			'curso_id' => 694,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 695,
			'escola_id' => 695,
			'curso_id' => 695,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 696,
			'escola_id' => 696,
			'curso_id' => 696,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 697,
			'escola_id' => 697,
			'curso_id' => 697,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 698,
			'escola_id' => 698,
			'curso_id' => 698,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 699,
			'escola_id' => 699,
			'curso_id' => 699,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 700,
			'escola_id' => 700,
			'curso_id' => 700,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 701,
			'escola_id' => 701,
			'curso_id' => 701,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 702,
			'escola_id' => 702,
			'curso_id' => 702,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 703,
			'escola_id' => 703,
			'curso_id' => 703,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 704,
			'escola_id' => 704,
			'curso_id' => 704,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 705,
			'escola_id' => 705,
			'curso_id' => 705,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 706,
			'escola_id' => 706,
			'curso_id' => 706,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 707,
			'escola_id' => 707,
			'curso_id' => 707,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 708,
			'escola_id' => 708,
			'curso_id' => 708,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 709,
			'escola_id' => 709,
			'curso_id' => 709,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 710,
			'escola_id' => 710,
			'curso_id' => 710,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 711,
			'escola_id' => 711,
			'curso_id' => 711,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 712,
			'escola_id' => 712,
			'curso_id' => 712,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 713,
			'escola_id' => 713,
			'curso_id' => 713,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 714,
			'escola_id' => 714,
			'curso_id' => 714,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 715,
			'escola_id' => 715,
			'curso_id' => 715,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 716,
			'escola_id' => 716,
			'curso_id' => 716,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 717,
			'escola_id' => 717,
			'curso_id' => 717,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 718,
			'escola_id' => 718,
			'curso_id' => 718,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 719,
			'escola_id' => 719,
			'curso_id' => 719,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 720,
			'escola_id' => 720,
			'curso_id' => 720,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 721,
			'escola_id' => 721,
			'curso_id' => 721,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 722,
			'escola_id' => 722,
			'curso_id' => 722,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 723,
			'escola_id' => 723,
			'curso_id' => 723,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 724,
			'escola_id' => 724,
			'curso_id' => 724,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 725,
			'escola_id' => 725,
			'curso_id' => 725,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 726,
			'escola_id' => 726,
			'curso_id' => 726,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 727,
			'escola_id' => 727,
			'curso_id' => 727,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 728,
			'escola_id' => 728,
			'curso_id' => 728,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 729,
			'escola_id' => 729,
			'curso_id' => 729,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 730,
			'escola_id' => 730,
			'curso_id' => 730,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 731,
			'escola_id' => 731,
			'curso_id' => 731,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 732,
			'escola_id' => 732,
			'curso_id' => 732,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 733,
			'escola_id' => 733,
			'curso_id' => 733,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 734,
			'escola_id' => 734,
			'curso_id' => 734,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 735,
			'escola_id' => 735,
			'curso_id' => 735,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 736,
			'escola_id' => 736,
			'curso_id' => 736,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 737,
			'escola_id' => 737,
			'curso_id' => 737,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 738,
			'escola_id' => 738,
			'curso_id' => 738,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 739,
			'escola_id' => 739,
			'curso_id' => 739,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 740,
			'escola_id' => 740,
			'curso_id' => 740,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 741,
			'escola_id' => 741,
			'curso_id' => 741,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 742,
			'escola_id' => 742,
			'curso_id' => 742,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 743,
			'escola_id' => 743,
			'curso_id' => 743,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 744,
			'escola_id' => 744,
			'curso_id' => 744,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 745,
			'escola_id' => 745,
			'curso_id' => 745,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 746,
			'escola_id' => 746,
			'curso_id' => 746,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 747,
			'escola_id' => 747,
			'curso_id' => 747,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 748,
			'escola_id' => 748,
			'curso_id' => 748,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 749,
			'escola_id' => 749,
			'curso_id' => 749,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 750,
			'escola_id' => 750,
			'curso_id' => 750,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 751,
			'escola_id' => 751,
			'curso_id' => 751,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 752,
			'escola_id' => 752,
			'curso_id' => 752,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 753,
			'escola_id' => 753,
			'curso_id' => 753,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 754,
			'escola_id' => 754,
			'curso_id' => 754,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 755,
			'escola_id' => 755,
			'curso_id' => 755,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 756,
			'escola_id' => 756,
			'curso_id' => 756,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 757,
			'escola_id' => 757,
			'curso_id' => 757,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 758,
			'escola_id' => 758,
			'curso_id' => 758,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 759,
			'escola_id' => 759,
			'curso_id' => 759,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 760,
			'escola_id' => 760,
			'curso_id' => 760,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 761,
			'escola_id' => 761,
			'curso_id' => 761,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 762,
			'escola_id' => 762,
			'curso_id' => 762,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 763,
			'escola_id' => 763,
			'curso_id' => 763,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 764,
			'escola_id' => 764,
			'curso_id' => 764,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 765,
			'escola_id' => 765,
			'curso_id' => 765,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 766,
			'escola_id' => 766,
			'curso_id' => 766,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 767,
			'escola_id' => 767,
			'curso_id' => 767,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 768,
			'escola_id' => 768,
			'curso_id' => 768,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 769,
			'escola_id' => 769,
			'curso_id' => 769,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 770,
			'escola_id' => 770,
			'curso_id' => 770,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 771,
			'escola_id' => 771,
			'curso_id' => 771,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 772,
			'escola_id' => 772,
			'curso_id' => 772,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 773,
			'escola_id' => 773,
			'curso_id' => 773,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 774,
			'escola_id' => 774,
			'curso_id' => 774,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 775,
			'escola_id' => 775,
			'curso_id' => 775,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 776,
			'escola_id' => 776,
			'curso_id' => 776,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 777,
			'escola_id' => 777,
			'curso_id' => 777,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 778,
			'escola_id' => 778,
			'curso_id' => 778,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 779,
			'escola_id' => 779,
			'curso_id' => 779,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 780,
			'escola_id' => 780,
			'curso_id' => 780,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 781,
			'escola_id' => 781,
			'curso_id' => 781,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 782,
			'escola_id' => 782,
			'curso_id' => 782,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 783,
			'escola_id' => 783,
			'curso_id' => 783,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 784,
			'escola_id' => 784,
			'curso_id' => 784,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 785,
			'escola_id' => 785,
			'curso_id' => 785,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 786,
			'escola_id' => 786,
			'curso_id' => 786,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 787,
			'escola_id' => 787,
			'curso_id' => 787,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 788,
			'escola_id' => 788,
			'curso_id' => 788,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 789,
			'escola_id' => 789,
			'curso_id' => 789,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 790,
			'escola_id' => 790,
			'curso_id' => 790,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 791,
			'escola_id' => 791,
			'curso_id' => 791,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 792,
			'escola_id' => 792,
			'curso_id' => 792,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 793,
			'escola_id' => 793,
			'curso_id' => 793,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 794,
			'escola_id' => 794,
			'curso_id' => 794,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 795,
			'escola_id' => 795,
			'curso_id' => 795,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 796,
			'escola_id' => 796,
			'curso_id' => 796,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 797,
			'escola_id' => 797,
			'curso_id' => 797,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 798,
			'escola_id' => 798,
			'curso_id' => 798,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 799,
			'escola_id' => 799,
			'curso_id' => 799,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 800,
			'escola_id' => 800,
			'curso_id' => 800,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 801,
			'escola_id' => 801,
			'curso_id' => 801,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 802,
			'escola_id' => 802,
			'curso_id' => 802,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 803,
			'escola_id' => 803,
			'curso_id' => 803,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 804,
			'escola_id' => 804,
			'curso_id' => 804,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 805,
			'escola_id' => 805,
			'curso_id' => 805,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 806,
			'escola_id' => 806,
			'curso_id' => 806,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 807,
			'escola_id' => 807,
			'curso_id' => 807,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 808,
			'escola_id' => 808,
			'curso_id' => 808,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 809,
			'escola_id' => 809,
			'curso_id' => 809,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 810,
			'escola_id' => 810,
			'curso_id' => 810,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 811,
			'escola_id' => 811,
			'curso_id' => 811,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 812,
			'escola_id' => 812,
			'curso_id' => 812,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 813,
			'escola_id' => 813,
			'curso_id' => 813,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 814,
			'escola_id' => 814,
			'curso_id' => 814,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 815,
			'escola_id' => 815,
			'curso_id' => 815,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 816,
			'escola_id' => 816,
			'curso_id' => 816,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 817,
			'escola_id' => 817,
			'curso_id' => 817,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 818,
			'escola_id' => 818,
			'curso_id' => 818,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 819,
			'escola_id' => 819,
			'curso_id' => 819,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 820,
			'escola_id' => 820,
			'curso_id' => 820,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 821,
			'escola_id' => 821,
			'curso_id' => 821,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 822,
			'escola_id' => 822,
			'curso_id' => 822,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 823,
			'escola_id' => 823,
			'curso_id' => 823,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 824,
			'escola_id' => 824,
			'curso_id' => 824,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 825,
			'escola_id' => 825,
			'curso_id' => 825,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 826,
			'escola_id' => 826,
			'curso_id' => 826,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 827,
			'escola_id' => 827,
			'curso_id' => 827,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 828,
			'escola_id' => 828,
			'curso_id' => 828,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 829,
			'escola_id' => 829,
			'curso_id' => 829,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 830,
			'escola_id' => 830,
			'curso_id' => 830,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 831,
			'escola_id' => 831,
			'curso_id' => 831,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 832,
			'escola_id' => 832,
			'curso_id' => 832,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 833,
			'escola_id' => 833,
			'curso_id' => 833,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 834,
			'escola_id' => 834,
			'curso_id' => 834,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 835,
			'escola_id' => 835,
			'curso_id' => 835,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 836,
			'escola_id' => 836,
			'curso_id' => 836,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 837,
			'escola_id' => 837,
			'curso_id' => 837,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 838,
			'escola_id' => 838,
			'curso_id' => 838,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 839,
			'escola_id' => 839,
			'curso_id' => 839,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 840,
			'escola_id' => 840,
			'curso_id' => 840,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 841,
			'escola_id' => 841,
			'curso_id' => 841,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 842,
			'escola_id' => 842,
			'curso_id' => 842,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 843,
			'escola_id' => 843,
			'curso_id' => 843,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 844,
			'escola_id' => 844,
			'curso_id' => 844,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 845,
			'escola_id' => 845,
			'curso_id' => 845,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 846,
			'escola_id' => 846,
			'curso_id' => 846,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 847,
			'escola_id' => 847,
			'curso_id' => 847,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 848,
			'escola_id' => 848,
			'curso_id' => 848,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 849,
			'escola_id' => 849,
			'curso_id' => 849,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 850,
			'escola_id' => 850,
			'curso_id' => 850,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 851,
			'escola_id' => 851,
			'curso_id' => 851,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 852,
			'escola_id' => 852,
			'curso_id' => 852,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 853,
			'escola_id' => 853,
			'curso_id' => 853,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 854,
			'escola_id' => 854,
			'curso_id' => 854,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 855,
			'escola_id' => 855,
			'curso_id' => 855,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 856,
			'escola_id' => 856,
			'curso_id' => 856,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 857,
			'escola_id' => 857,
			'curso_id' => 857,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 858,
			'escola_id' => 858,
			'curso_id' => 858,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 859,
			'escola_id' => 859,
			'curso_id' => 859,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 860,
			'escola_id' => 860,
			'curso_id' => 860,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 861,
			'escola_id' => 861,
			'curso_id' => 861,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 862,
			'escola_id' => 862,
			'curso_id' => 862,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 863,
			'escola_id' => 863,
			'curso_id' => 863,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 864,
			'escola_id' => 864,
			'curso_id' => 864,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 865,
			'escola_id' => 865,
			'curso_id' => 865,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 866,
			'escola_id' => 866,
			'curso_id' => 866,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 867,
			'escola_id' => 867,
			'curso_id' => 867,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 868,
			'escola_id' => 868,
			'curso_id' => 868,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 869,
			'escola_id' => 869,
			'curso_id' => 869,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 870,
			'escola_id' => 870,
			'curso_id' => 870,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 871,
			'escola_id' => 871,
			'curso_id' => 871,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 872,
			'escola_id' => 872,
			'curso_id' => 872,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 873,
			'escola_id' => 873,
			'curso_id' => 873,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 874,
			'escola_id' => 874,
			'curso_id' => 874,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 875,
			'escola_id' => 875,
			'curso_id' => 875,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 876,
			'escola_id' => 876,
			'curso_id' => 876,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 877,
			'escola_id' => 877,
			'curso_id' => 877,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 878,
			'escola_id' => 878,
			'curso_id' => 878,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 879,
			'escola_id' => 879,
			'curso_id' => 879,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 880,
			'escola_id' => 880,
			'curso_id' => 880,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 881,
			'escola_id' => 881,
			'curso_id' => 881,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 882,
			'escola_id' => 882,
			'curso_id' => 882,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 883,
			'escola_id' => 883,
			'curso_id' => 883,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 884,
			'escola_id' => 884,
			'curso_id' => 884,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 885,
			'escola_id' => 885,
			'curso_id' => 885,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 886,
			'escola_id' => 886,
			'curso_id' => 886,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 887,
			'escola_id' => 887,
			'curso_id' => 887,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 888,
			'escola_id' => 888,
			'curso_id' => 888,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 889,
			'escola_id' => 889,
			'curso_id' => 889,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 890,
			'escola_id' => 890,
			'curso_id' => 890,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 891,
			'escola_id' => 891,
			'curso_id' => 891,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 892,
			'escola_id' => 892,
			'curso_id' => 892,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 893,
			'escola_id' => 893,
			'curso_id' => 893,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 894,
			'escola_id' => 894,
			'curso_id' => 894,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 895,
			'escola_id' => 895,
			'curso_id' => 895,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 896,
			'escola_id' => 896,
			'curso_id' => 896,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 897,
			'escola_id' => 897,
			'curso_id' => 897,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 898,
			'escola_id' => 898,
			'curso_id' => 898,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 899,
			'escola_id' => 899,
			'curso_id' => 899,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 900,
			'escola_id' => 900,
			'curso_id' => 900,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 901,
			'escola_id' => 901,
			'curso_id' => 901,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 902,
			'escola_id' => 902,
			'curso_id' => 902,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 903,
			'escola_id' => 903,
			'curso_id' => 903,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 904,
			'escola_id' => 904,
			'curso_id' => 904,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 905,
			'escola_id' => 905,
			'curso_id' => 905,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 906,
			'escola_id' => 906,
			'curso_id' => 906,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 907,
			'escola_id' => 907,
			'curso_id' => 907,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 908,
			'escola_id' => 908,
			'curso_id' => 908,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 909,
			'escola_id' => 909,
			'curso_id' => 909,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 910,
			'escola_id' => 910,
			'curso_id' => 910,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 911,
			'escola_id' => 911,
			'curso_id' => 911,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 912,
			'escola_id' => 912,
			'curso_id' => 912,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 913,
			'escola_id' => 913,
			'curso_id' => 913,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 914,
			'escola_id' => 914,
			'curso_id' => 914,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 915,
			'escola_id' => 915,
			'curso_id' => 915,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 916,
			'escola_id' => 916,
			'curso_id' => 916,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 917,
			'escola_id' => 917,
			'curso_id' => 917,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 918,
			'escola_id' => 918,
			'curso_id' => 918,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 919,
			'escola_id' => 919,
			'curso_id' => 919,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 920,
			'escola_id' => 920,
			'curso_id' => 920,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 921,
			'escola_id' => 921,
			'curso_id' => 921,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 922,
			'escola_id' => 922,
			'curso_id' => 922,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 923,
			'escola_id' => 923,
			'curso_id' => 923,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 924,
			'escola_id' => 924,
			'curso_id' => 924,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 925,
			'escola_id' => 925,
			'curso_id' => 925,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 926,
			'escola_id' => 926,
			'curso_id' => 926,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 927,
			'escola_id' => 927,
			'curso_id' => 927,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 928,
			'escola_id' => 928,
			'curso_id' => 928,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 929,
			'escola_id' => 929,
			'curso_id' => 929,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 930,
			'escola_id' => 930,
			'curso_id' => 930,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 931,
			'escola_id' => 931,
			'curso_id' => 931,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 932,
			'escola_id' => 932,
			'curso_id' => 932,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 933,
			'escola_id' => 933,
			'curso_id' => 933,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 934,
			'escola_id' => 934,
			'curso_id' => 934,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 935,
			'escola_id' => 935,
			'curso_id' => 935,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 936,
			'escola_id' => 936,
			'curso_id' => 936,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 937,
			'escola_id' => 937,
			'curso_id' => 937,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 938,
			'escola_id' => 938,
			'curso_id' => 938,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 939,
			'escola_id' => 939,
			'curso_id' => 939,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 940,
			'escola_id' => 940,
			'curso_id' => 940,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 941,
			'escola_id' => 941,
			'curso_id' => 941,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 942,
			'escola_id' => 942,
			'curso_id' => 942,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 943,
			'escola_id' => 943,
			'curso_id' => 943,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 944,
			'escola_id' => 944,
			'curso_id' => 944,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 945,
			'escola_id' => 945,
			'curso_id' => 945,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 946,
			'escola_id' => 946,
			'curso_id' => 946,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 947,
			'escola_id' => 947,
			'curso_id' => 947,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 948,
			'escola_id' => 948,
			'curso_id' => 948,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 949,
			'escola_id' => 949,
			'curso_id' => 949,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 950,
			'escola_id' => 950,
			'curso_id' => 950,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 951,
			'escola_id' => 951,
			'curso_id' => 951,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 952,
			'escola_id' => 952,
			'curso_id' => 952,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 953,
			'escola_id' => 953,
			'curso_id' => 953,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 954,
			'escola_id' => 954,
			'curso_id' => 954,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 955,
			'escola_id' => 955,
			'curso_id' => 955,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 956,
			'escola_id' => 956,
			'curso_id' => 956,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 957,
			'escola_id' => 957,
			'curso_id' => 957,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 958,
			'escola_id' => 958,
			'curso_id' => 958,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 959,
			'escola_id' => 959,
			'curso_id' => 959,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 960,
			'escola_id' => 960,
			'curso_id' => 960,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 961,
			'escola_id' => 961,
			'curso_id' => 961,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 962,
			'escola_id' => 962,
			'curso_id' => 962,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 963,
			'escola_id' => 963,
			'curso_id' => 963,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 964,
			'escola_id' => 964,
			'curso_id' => 964,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 965,
			'escola_id' => 965,
			'curso_id' => 965,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 966,
			'escola_id' => 966,
			'curso_id' => 966,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 967,
			'escola_id' => 967,
			'curso_id' => 967,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 968,
			'escola_id' => 968,
			'curso_id' => 968,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 969,
			'escola_id' => 969,
			'curso_id' => 969,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 970,
			'escola_id' => 970,
			'curso_id' => 970,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 971,
			'escola_id' => 971,
			'curso_id' => 971,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 972,
			'escola_id' => 972,
			'curso_id' => 972,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 973,
			'escola_id' => 973,
			'curso_id' => 973,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 974,
			'escola_id' => 974,
			'curso_id' => 974,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 975,
			'escola_id' => 975,
			'curso_id' => 975,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 976,
			'escola_id' => 976,
			'curso_id' => 976,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 977,
			'escola_id' => 977,
			'curso_id' => 977,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 978,
			'escola_id' => 978,
			'curso_id' => 978,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 979,
			'escola_id' => 979,
			'curso_id' => 979,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 980,
			'escola_id' => 980,
			'curso_id' => 980,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 981,
			'escola_id' => 981,
			'curso_id' => 981,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 982,
			'escola_id' => 982,
			'curso_id' => 982,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 983,
			'escola_id' => 983,
			'curso_id' => 983,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 984,
			'escola_id' => 984,
			'curso_id' => 984,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 985,
			'escola_id' => 985,
			'curso_id' => 985,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 986,
			'escola_id' => 986,
			'curso_id' => 986,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 987,
			'escola_id' => 987,
			'curso_id' => 987,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 988,
			'escola_id' => 988,
			'curso_id' => 988,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 989,
			'escola_id' => 989,
			'curso_id' => 989,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 990,
			'escola_id' => 990,
			'curso_id' => 990,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 991,
			'escola_id' => 991,
			'curso_id' => 991,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 992,
			'escola_id' => 992,
			'curso_id' => 992,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 993,
			'escola_id' => 993,
			'curso_id' => 993,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 994,
			'escola_id' => 994,
			'curso_id' => 994,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 995,
			'escola_id' => 995,
			'curso_id' => 995,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 996,
			'escola_id' => 996,
			'curso_id' => 996,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 997,
			'escola_id' => 997,
			'curso_id' => 997,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 998,
			'escola_id' => 998,
			'curso_id' => 998,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 999,
			'escola_id' => 999,
			'curso_id' => 999,
			'data_adicao' => '2012-07-25'
		),
		array(
			'id' => 1000,
			'escola_id' => 1000,
			'curso_id' => 1000,
			'data_adicao' => '2012-07-25'
		),
	);

}
