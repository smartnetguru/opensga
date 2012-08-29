<?php
/**
 * AnolectivoepocaFixture
 *
 */
class AnolectivoepocaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'unique'),
		'epocaavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'unique'),
		'limite' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'AnoLectivo' => array('column' => 'anolectivo_id', 'unique' => 1),
			'EpocaAvaliacao' => array('column' => 'epocaavaliacao_id', 'unique' => 1)
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
			'anolectivo_id' => 1,
			'epocaavaliacao_id' => 1,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 2,
			'anolectivo_id' => 2,
			'epocaavaliacao_id' => 2,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 3,
			'anolectivo_id' => 3,
			'epocaavaliacao_id' => 3,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 4,
			'anolectivo_id' => 4,
			'epocaavaliacao_id' => 4,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 5,
			'anolectivo_id' => 5,
			'epocaavaliacao_id' => 5,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 6,
			'anolectivo_id' => 6,
			'epocaavaliacao_id' => 6,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 7,
			'anolectivo_id' => 7,
			'epocaavaliacao_id' => 7,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 8,
			'anolectivo_id' => 8,
			'epocaavaliacao_id' => 8,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 9,
			'anolectivo_id' => 9,
			'epocaavaliacao_id' => 9,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 10,
			'anolectivo_id' => 10,
			'epocaavaliacao_id' => 10,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 11,
			'anolectivo_id' => 11,
			'epocaavaliacao_id' => 11,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 12,
			'anolectivo_id' => 12,
			'epocaavaliacao_id' => 12,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 13,
			'anolectivo_id' => 13,
			'epocaavaliacao_id' => 13,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 14,
			'anolectivo_id' => 14,
			'epocaavaliacao_id' => 14,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 15,
			'anolectivo_id' => 15,
			'epocaavaliacao_id' => 15,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 16,
			'anolectivo_id' => 16,
			'epocaavaliacao_id' => 16,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 17,
			'anolectivo_id' => 17,
			'epocaavaliacao_id' => 17,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 18,
			'anolectivo_id' => 18,
			'epocaavaliacao_id' => 18,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 19,
			'anolectivo_id' => 19,
			'epocaavaliacao_id' => 19,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 20,
			'anolectivo_id' => 20,
			'epocaavaliacao_id' => 20,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 21,
			'anolectivo_id' => 21,
			'epocaavaliacao_id' => 21,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 22,
			'anolectivo_id' => 22,
			'epocaavaliacao_id' => 22,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 23,
			'anolectivo_id' => 23,
			'epocaavaliacao_id' => 23,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 24,
			'anolectivo_id' => 24,
			'epocaavaliacao_id' => 24,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 25,
			'anolectivo_id' => 25,
			'epocaavaliacao_id' => 25,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 26,
			'anolectivo_id' => 26,
			'epocaavaliacao_id' => 26,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 27,
			'anolectivo_id' => 27,
			'epocaavaliacao_id' => 27,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 28,
			'anolectivo_id' => 28,
			'epocaavaliacao_id' => 28,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 29,
			'anolectivo_id' => 29,
			'epocaavaliacao_id' => 29,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 30,
			'anolectivo_id' => 30,
			'epocaavaliacao_id' => 30,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 31,
			'anolectivo_id' => 31,
			'epocaavaliacao_id' => 31,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 32,
			'anolectivo_id' => 32,
			'epocaavaliacao_id' => 32,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 33,
			'anolectivo_id' => 33,
			'epocaavaliacao_id' => 33,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 34,
			'anolectivo_id' => 34,
			'epocaavaliacao_id' => 34,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 35,
			'anolectivo_id' => 35,
			'epocaavaliacao_id' => 35,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 36,
			'anolectivo_id' => 36,
			'epocaavaliacao_id' => 36,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 37,
			'anolectivo_id' => 37,
			'epocaavaliacao_id' => 37,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 38,
			'anolectivo_id' => 38,
			'epocaavaliacao_id' => 38,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 39,
			'anolectivo_id' => 39,
			'epocaavaliacao_id' => 39,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 40,
			'anolectivo_id' => 40,
			'epocaavaliacao_id' => 40,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 41,
			'anolectivo_id' => 41,
			'epocaavaliacao_id' => 41,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 42,
			'anolectivo_id' => 42,
			'epocaavaliacao_id' => 42,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 43,
			'anolectivo_id' => 43,
			'epocaavaliacao_id' => 43,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 44,
			'anolectivo_id' => 44,
			'epocaavaliacao_id' => 44,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 45,
			'anolectivo_id' => 45,
			'epocaavaliacao_id' => 45,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 46,
			'anolectivo_id' => 46,
			'epocaavaliacao_id' => 46,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 47,
			'anolectivo_id' => 47,
			'epocaavaliacao_id' => 47,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 48,
			'anolectivo_id' => 48,
			'epocaavaliacao_id' => 48,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 49,
			'anolectivo_id' => 49,
			'epocaavaliacao_id' => 49,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 50,
			'anolectivo_id' => 50,
			'epocaavaliacao_id' => 50,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 51,
			'anolectivo_id' => 51,
			'epocaavaliacao_id' => 51,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 52,
			'anolectivo_id' => 52,
			'epocaavaliacao_id' => 52,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 53,
			'anolectivo_id' => 53,
			'epocaavaliacao_id' => 53,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 54,
			'anolectivo_id' => 54,
			'epocaavaliacao_id' => 54,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 55,
			'anolectivo_id' => 55,
			'epocaavaliacao_id' => 55,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 56,
			'anolectivo_id' => 56,
			'epocaavaliacao_id' => 56,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 57,
			'anolectivo_id' => 57,
			'epocaavaliacao_id' => 57,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 58,
			'anolectivo_id' => 58,
			'epocaavaliacao_id' => 58,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 59,
			'anolectivo_id' => 59,
			'epocaavaliacao_id' => 59,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 60,
			'anolectivo_id' => 60,
			'epocaavaliacao_id' => 60,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 61,
			'anolectivo_id' => 61,
			'epocaavaliacao_id' => 61,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 62,
			'anolectivo_id' => 62,
			'epocaavaliacao_id' => 62,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 63,
			'anolectivo_id' => 63,
			'epocaavaliacao_id' => 63,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 64,
			'anolectivo_id' => 64,
			'epocaavaliacao_id' => 64,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 65,
			'anolectivo_id' => 65,
			'epocaavaliacao_id' => 65,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 66,
			'anolectivo_id' => 66,
			'epocaavaliacao_id' => 66,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 67,
			'anolectivo_id' => 67,
			'epocaavaliacao_id' => 67,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 68,
			'anolectivo_id' => 68,
			'epocaavaliacao_id' => 68,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 69,
			'anolectivo_id' => 69,
			'epocaavaliacao_id' => 69,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 70,
			'anolectivo_id' => 70,
			'epocaavaliacao_id' => 70,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 71,
			'anolectivo_id' => 71,
			'epocaavaliacao_id' => 71,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 72,
			'anolectivo_id' => 72,
			'epocaavaliacao_id' => 72,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 73,
			'anolectivo_id' => 73,
			'epocaavaliacao_id' => 73,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 74,
			'anolectivo_id' => 74,
			'epocaavaliacao_id' => 74,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 75,
			'anolectivo_id' => 75,
			'epocaavaliacao_id' => 75,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 76,
			'anolectivo_id' => 76,
			'epocaavaliacao_id' => 76,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 77,
			'anolectivo_id' => 77,
			'epocaavaliacao_id' => 77,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 78,
			'anolectivo_id' => 78,
			'epocaavaliacao_id' => 78,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 79,
			'anolectivo_id' => 79,
			'epocaavaliacao_id' => 79,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 80,
			'anolectivo_id' => 80,
			'epocaavaliacao_id' => 80,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 81,
			'anolectivo_id' => 81,
			'epocaavaliacao_id' => 81,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 82,
			'anolectivo_id' => 82,
			'epocaavaliacao_id' => 82,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 83,
			'anolectivo_id' => 83,
			'epocaavaliacao_id' => 83,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 84,
			'anolectivo_id' => 84,
			'epocaavaliacao_id' => 84,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 85,
			'anolectivo_id' => 85,
			'epocaavaliacao_id' => 85,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 86,
			'anolectivo_id' => 86,
			'epocaavaliacao_id' => 86,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 87,
			'anolectivo_id' => 87,
			'epocaavaliacao_id' => 87,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 88,
			'anolectivo_id' => 88,
			'epocaavaliacao_id' => 88,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 89,
			'anolectivo_id' => 89,
			'epocaavaliacao_id' => 89,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 90,
			'anolectivo_id' => 90,
			'epocaavaliacao_id' => 90,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 91,
			'anolectivo_id' => 91,
			'epocaavaliacao_id' => 91,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 92,
			'anolectivo_id' => 92,
			'epocaavaliacao_id' => 92,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 93,
			'anolectivo_id' => 93,
			'epocaavaliacao_id' => 93,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 94,
			'anolectivo_id' => 94,
			'epocaavaliacao_id' => 94,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 95,
			'anolectivo_id' => 95,
			'epocaavaliacao_id' => 95,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 96,
			'anolectivo_id' => 96,
			'epocaavaliacao_id' => 96,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 97,
			'anolectivo_id' => 97,
			'epocaavaliacao_id' => 97,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 98,
			'anolectivo_id' => 98,
			'epocaavaliacao_id' => 98,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 99,
			'anolectivo_id' => 99,
			'epocaavaliacao_id' => 99,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 100,
			'anolectivo_id' => 100,
			'epocaavaliacao_id' => 100,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 101,
			'anolectivo_id' => 101,
			'epocaavaliacao_id' => 101,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 102,
			'anolectivo_id' => 102,
			'epocaavaliacao_id' => 102,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 103,
			'anolectivo_id' => 103,
			'epocaavaliacao_id' => 103,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 104,
			'anolectivo_id' => 104,
			'epocaavaliacao_id' => 104,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 105,
			'anolectivo_id' => 105,
			'epocaavaliacao_id' => 105,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 106,
			'anolectivo_id' => 106,
			'epocaavaliacao_id' => 106,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 107,
			'anolectivo_id' => 107,
			'epocaavaliacao_id' => 107,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 108,
			'anolectivo_id' => 108,
			'epocaavaliacao_id' => 108,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 109,
			'anolectivo_id' => 109,
			'epocaavaliacao_id' => 109,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 110,
			'anolectivo_id' => 110,
			'epocaavaliacao_id' => 110,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 111,
			'anolectivo_id' => 111,
			'epocaavaliacao_id' => 111,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 112,
			'anolectivo_id' => 112,
			'epocaavaliacao_id' => 112,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 113,
			'anolectivo_id' => 113,
			'epocaavaliacao_id' => 113,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 114,
			'anolectivo_id' => 114,
			'epocaavaliacao_id' => 114,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 115,
			'anolectivo_id' => 115,
			'epocaavaliacao_id' => 115,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 116,
			'anolectivo_id' => 116,
			'epocaavaliacao_id' => 116,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 117,
			'anolectivo_id' => 117,
			'epocaavaliacao_id' => 117,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 118,
			'anolectivo_id' => 118,
			'epocaavaliacao_id' => 118,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 119,
			'anolectivo_id' => 119,
			'epocaavaliacao_id' => 119,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 120,
			'anolectivo_id' => 120,
			'epocaavaliacao_id' => 120,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 121,
			'anolectivo_id' => 121,
			'epocaavaliacao_id' => 121,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 122,
			'anolectivo_id' => 122,
			'epocaavaliacao_id' => 122,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 123,
			'anolectivo_id' => 123,
			'epocaavaliacao_id' => 123,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 124,
			'anolectivo_id' => 124,
			'epocaavaliacao_id' => 124,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 125,
			'anolectivo_id' => 125,
			'epocaavaliacao_id' => 125,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 126,
			'anolectivo_id' => 126,
			'epocaavaliacao_id' => 126,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 127,
			'anolectivo_id' => 127,
			'epocaavaliacao_id' => 127,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 128,
			'anolectivo_id' => 128,
			'epocaavaliacao_id' => 128,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 129,
			'anolectivo_id' => 129,
			'epocaavaliacao_id' => 129,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 130,
			'anolectivo_id' => 130,
			'epocaavaliacao_id' => 130,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 131,
			'anolectivo_id' => 131,
			'epocaavaliacao_id' => 131,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 132,
			'anolectivo_id' => 132,
			'epocaavaliacao_id' => 132,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 133,
			'anolectivo_id' => 133,
			'epocaavaliacao_id' => 133,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 134,
			'anolectivo_id' => 134,
			'epocaavaliacao_id' => 134,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 135,
			'anolectivo_id' => 135,
			'epocaavaliacao_id' => 135,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 136,
			'anolectivo_id' => 136,
			'epocaavaliacao_id' => 136,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 137,
			'anolectivo_id' => 137,
			'epocaavaliacao_id' => 137,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 138,
			'anolectivo_id' => 138,
			'epocaavaliacao_id' => 138,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 139,
			'anolectivo_id' => 139,
			'epocaavaliacao_id' => 139,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 140,
			'anolectivo_id' => 140,
			'epocaavaliacao_id' => 140,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 141,
			'anolectivo_id' => 141,
			'epocaavaliacao_id' => 141,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 142,
			'anolectivo_id' => 142,
			'epocaavaliacao_id' => 142,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 143,
			'anolectivo_id' => 143,
			'epocaavaliacao_id' => 143,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 144,
			'anolectivo_id' => 144,
			'epocaavaliacao_id' => 144,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 145,
			'anolectivo_id' => 145,
			'epocaavaliacao_id' => 145,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 146,
			'anolectivo_id' => 146,
			'epocaavaliacao_id' => 146,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 147,
			'anolectivo_id' => 147,
			'epocaavaliacao_id' => 147,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 148,
			'anolectivo_id' => 148,
			'epocaavaliacao_id' => 148,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 149,
			'anolectivo_id' => 149,
			'epocaavaliacao_id' => 149,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 150,
			'anolectivo_id' => 150,
			'epocaavaliacao_id' => 150,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 151,
			'anolectivo_id' => 151,
			'epocaavaliacao_id' => 151,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 152,
			'anolectivo_id' => 152,
			'epocaavaliacao_id' => 152,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 153,
			'anolectivo_id' => 153,
			'epocaavaliacao_id' => 153,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 154,
			'anolectivo_id' => 154,
			'epocaavaliacao_id' => 154,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 155,
			'anolectivo_id' => 155,
			'epocaavaliacao_id' => 155,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 156,
			'anolectivo_id' => 156,
			'epocaavaliacao_id' => 156,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 157,
			'anolectivo_id' => 157,
			'epocaavaliacao_id' => 157,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 158,
			'anolectivo_id' => 158,
			'epocaavaliacao_id' => 158,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 159,
			'anolectivo_id' => 159,
			'epocaavaliacao_id' => 159,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 160,
			'anolectivo_id' => 160,
			'epocaavaliacao_id' => 160,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 161,
			'anolectivo_id' => 161,
			'epocaavaliacao_id' => 161,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 162,
			'anolectivo_id' => 162,
			'epocaavaliacao_id' => 162,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 163,
			'anolectivo_id' => 163,
			'epocaavaliacao_id' => 163,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 164,
			'anolectivo_id' => 164,
			'epocaavaliacao_id' => 164,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 165,
			'anolectivo_id' => 165,
			'epocaavaliacao_id' => 165,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 166,
			'anolectivo_id' => 166,
			'epocaavaliacao_id' => 166,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 167,
			'anolectivo_id' => 167,
			'epocaavaliacao_id' => 167,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 168,
			'anolectivo_id' => 168,
			'epocaavaliacao_id' => 168,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 169,
			'anolectivo_id' => 169,
			'epocaavaliacao_id' => 169,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 170,
			'anolectivo_id' => 170,
			'epocaavaliacao_id' => 170,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 171,
			'anolectivo_id' => 171,
			'epocaavaliacao_id' => 171,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 172,
			'anolectivo_id' => 172,
			'epocaavaliacao_id' => 172,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 173,
			'anolectivo_id' => 173,
			'epocaavaliacao_id' => 173,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 174,
			'anolectivo_id' => 174,
			'epocaavaliacao_id' => 174,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 175,
			'anolectivo_id' => 175,
			'epocaavaliacao_id' => 175,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 176,
			'anolectivo_id' => 176,
			'epocaavaliacao_id' => 176,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 177,
			'anolectivo_id' => 177,
			'epocaavaliacao_id' => 177,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 178,
			'anolectivo_id' => 178,
			'epocaavaliacao_id' => 178,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 179,
			'anolectivo_id' => 179,
			'epocaavaliacao_id' => 179,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 180,
			'anolectivo_id' => 180,
			'epocaavaliacao_id' => 180,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 181,
			'anolectivo_id' => 181,
			'epocaavaliacao_id' => 181,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 182,
			'anolectivo_id' => 182,
			'epocaavaliacao_id' => 182,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 183,
			'anolectivo_id' => 183,
			'epocaavaliacao_id' => 183,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 184,
			'anolectivo_id' => 184,
			'epocaavaliacao_id' => 184,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 185,
			'anolectivo_id' => 185,
			'epocaavaliacao_id' => 185,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 186,
			'anolectivo_id' => 186,
			'epocaavaliacao_id' => 186,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 187,
			'anolectivo_id' => 187,
			'epocaavaliacao_id' => 187,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 188,
			'anolectivo_id' => 188,
			'epocaavaliacao_id' => 188,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 189,
			'anolectivo_id' => 189,
			'epocaavaliacao_id' => 189,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 190,
			'anolectivo_id' => 190,
			'epocaavaliacao_id' => 190,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 191,
			'anolectivo_id' => 191,
			'epocaavaliacao_id' => 191,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 192,
			'anolectivo_id' => 192,
			'epocaavaliacao_id' => 192,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 193,
			'anolectivo_id' => 193,
			'epocaavaliacao_id' => 193,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 194,
			'anolectivo_id' => 194,
			'epocaavaliacao_id' => 194,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 195,
			'anolectivo_id' => 195,
			'epocaavaliacao_id' => 195,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 196,
			'anolectivo_id' => 196,
			'epocaavaliacao_id' => 196,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 197,
			'anolectivo_id' => 197,
			'epocaavaliacao_id' => 197,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 198,
			'anolectivo_id' => 198,
			'epocaavaliacao_id' => 198,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 199,
			'anolectivo_id' => 199,
			'epocaavaliacao_id' => 199,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 200,
			'anolectivo_id' => 200,
			'epocaavaliacao_id' => 200,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 201,
			'anolectivo_id' => 201,
			'epocaavaliacao_id' => 201,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 202,
			'anolectivo_id' => 202,
			'epocaavaliacao_id' => 202,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 203,
			'anolectivo_id' => 203,
			'epocaavaliacao_id' => 203,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 204,
			'anolectivo_id' => 204,
			'epocaavaliacao_id' => 204,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 205,
			'anolectivo_id' => 205,
			'epocaavaliacao_id' => 205,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 206,
			'anolectivo_id' => 206,
			'epocaavaliacao_id' => 206,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 207,
			'anolectivo_id' => 207,
			'epocaavaliacao_id' => 207,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 208,
			'anolectivo_id' => 208,
			'epocaavaliacao_id' => 208,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 209,
			'anolectivo_id' => 209,
			'epocaavaliacao_id' => 209,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 210,
			'anolectivo_id' => 210,
			'epocaavaliacao_id' => 210,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 211,
			'anolectivo_id' => 211,
			'epocaavaliacao_id' => 211,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 212,
			'anolectivo_id' => 212,
			'epocaavaliacao_id' => 212,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 213,
			'anolectivo_id' => 213,
			'epocaavaliacao_id' => 213,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 214,
			'anolectivo_id' => 214,
			'epocaavaliacao_id' => 214,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 215,
			'anolectivo_id' => 215,
			'epocaavaliacao_id' => 215,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 216,
			'anolectivo_id' => 216,
			'epocaavaliacao_id' => 216,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 217,
			'anolectivo_id' => 217,
			'epocaavaliacao_id' => 217,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 218,
			'anolectivo_id' => 218,
			'epocaavaliacao_id' => 218,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 219,
			'anolectivo_id' => 219,
			'epocaavaliacao_id' => 219,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 220,
			'anolectivo_id' => 220,
			'epocaavaliacao_id' => 220,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 221,
			'anolectivo_id' => 221,
			'epocaavaliacao_id' => 221,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 222,
			'anolectivo_id' => 222,
			'epocaavaliacao_id' => 222,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 223,
			'anolectivo_id' => 223,
			'epocaavaliacao_id' => 223,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 224,
			'anolectivo_id' => 224,
			'epocaavaliacao_id' => 224,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 225,
			'anolectivo_id' => 225,
			'epocaavaliacao_id' => 225,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 226,
			'anolectivo_id' => 226,
			'epocaavaliacao_id' => 226,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 227,
			'anolectivo_id' => 227,
			'epocaavaliacao_id' => 227,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 228,
			'anolectivo_id' => 228,
			'epocaavaliacao_id' => 228,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 229,
			'anolectivo_id' => 229,
			'epocaavaliacao_id' => 229,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 230,
			'anolectivo_id' => 230,
			'epocaavaliacao_id' => 230,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 231,
			'anolectivo_id' => 231,
			'epocaavaliacao_id' => 231,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 232,
			'anolectivo_id' => 232,
			'epocaavaliacao_id' => 232,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 233,
			'anolectivo_id' => 233,
			'epocaavaliacao_id' => 233,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 234,
			'anolectivo_id' => 234,
			'epocaavaliacao_id' => 234,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 235,
			'anolectivo_id' => 235,
			'epocaavaliacao_id' => 235,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 236,
			'anolectivo_id' => 236,
			'epocaavaliacao_id' => 236,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 237,
			'anolectivo_id' => 237,
			'epocaavaliacao_id' => 237,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 238,
			'anolectivo_id' => 238,
			'epocaavaliacao_id' => 238,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 239,
			'anolectivo_id' => 239,
			'epocaavaliacao_id' => 239,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 240,
			'anolectivo_id' => 240,
			'epocaavaliacao_id' => 240,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 241,
			'anolectivo_id' => 241,
			'epocaavaliacao_id' => 241,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 242,
			'anolectivo_id' => 242,
			'epocaavaliacao_id' => 242,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 243,
			'anolectivo_id' => 243,
			'epocaavaliacao_id' => 243,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 244,
			'anolectivo_id' => 244,
			'epocaavaliacao_id' => 244,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 245,
			'anolectivo_id' => 245,
			'epocaavaliacao_id' => 245,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 246,
			'anolectivo_id' => 246,
			'epocaavaliacao_id' => 246,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 247,
			'anolectivo_id' => 247,
			'epocaavaliacao_id' => 247,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 248,
			'anolectivo_id' => 248,
			'epocaavaliacao_id' => 248,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 249,
			'anolectivo_id' => 249,
			'epocaavaliacao_id' => 249,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 250,
			'anolectivo_id' => 250,
			'epocaavaliacao_id' => 250,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 251,
			'anolectivo_id' => 251,
			'epocaavaliacao_id' => 251,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 252,
			'anolectivo_id' => 252,
			'epocaavaliacao_id' => 252,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 253,
			'anolectivo_id' => 253,
			'epocaavaliacao_id' => 253,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 254,
			'anolectivo_id' => 254,
			'epocaavaliacao_id' => 254,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 255,
			'anolectivo_id' => 255,
			'epocaavaliacao_id' => 255,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 256,
			'anolectivo_id' => 256,
			'epocaavaliacao_id' => 256,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 257,
			'anolectivo_id' => 257,
			'epocaavaliacao_id' => 257,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 258,
			'anolectivo_id' => 258,
			'epocaavaliacao_id' => 258,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 259,
			'anolectivo_id' => 259,
			'epocaavaliacao_id' => 259,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 260,
			'anolectivo_id' => 260,
			'epocaavaliacao_id' => 260,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 261,
			'anolectivo_id' => 261,
			'epocaavaliacao_id' => 261,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 262,
			'anolectivo_id' => 262,
			'epocaavaliacao_id' => 262,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 263,
			'anolectivo_id' => 263,
			'epocaavaliacao_id' => 263,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 264,
			'anolectivo_id' => 264,
			'epocaavaliacao_id' => 264,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 265,
			'anolectivo_id' => 265,
			'epocaavaliacao_id' => 265,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 266,
			'anolectivo_id' => 266,
			'epocaavaliacao_id' => 266,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 267,
			'anolectivo_id' => 267,
			'epocaavaliacao_id' => 267,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 268,
			'anolectivo_id' => 268,
			'epocaavaliacao_id' => 268,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 269,
			'anolectivo_id' => 269,
			'epocaavaliacao_id' => 269,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 270,
			'anolectivo_id' => 270,
			'epocaavaliacao_id' => 270,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 271,
			'anolectivo_id' => 271,
			'epocaavaliacao_id' => 271,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 272,
			'anolectivo_id' => 272,
			'epocaavaliacao_id' => 272,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 273,
			'anolectivo_id' => 273,
			'epocaavaliacao_id' => 273,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 274,
			'anolectivo_id' => 274,
			'epocaavaliacao_id' => 274,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 275,
			'anolectivo_id' => 275,
			'epocaavaliacao_id' => 275,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 276,
			'anolectivo_id' => 276,
			'epocaavaliacao_id' => 276,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 277,
			'anolectivo_id' => 277,
			'epocaavaliacao_id' => 277,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 278,
			'anolectivo_id' => 278,
			'epocaavaliacao_id' => 278,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 279,
			'anolectivo_id' => 279,
			'epocaavaliacao_id' => 279,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 280,
			'anolectivo_id' => 280,
			'epocaavaliacao_id' => 280,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 281,
			'anolectivo_id' => 281,
			'epocaavaliacao_id' => 281,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 282,
			'anolectivo_id' => 282,
			'epocaavaliacao_id' => 282,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 283,
			'anolectivo_id' => 283,
			'epocaavaliacao_id' => 283,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 284,
			'anolectivo_id' => 284,
			'epocaavaliacao_id' => 284,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 285,
			'anolectivo_id' => 285,
			'epocaavaliacao_id' => 285,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 286,
			'anolectivo_id' => 286,
			'epocaavaliacao_id' => 286,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 287,
			'anolectivo_id' => 287,
			'epocaavaliacao_id' => 287,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 288,
			'anolectivo_id' => 288,
			'epocaavaliacao_id' => 288,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 289,
			'anolectivo_id' => 289,
			'epocaavaliacao_id' => 289,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 290,
			'anolectivo_id' => 290,
			'epocaavaliacao_id' => 290,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 291,
			'anolectivo_id' => 291,
			'epocaavaliacao_id' => 291,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 292,
			'anolectivo_id' => 292,
			'epocaavaliacao_id' => 292,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 293,
			'anolectivo_id' => 293,
			'epocaavaliacao_id' => 293,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 294,
			'anolectivo_id' => 294,
			'epocaavaliacao_id' => 294,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 295,
			'anolectivo_id' => 295,
			'epocaavaliacao_id' => 295,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 296,
			'anolectivo_id' => 296,
			'epocaavaliacao_id' => 296,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 297,
			'anolectivo_id' => 297,
			'epocaavaliacao_id' => 297,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 298,
			'anolectivo_id' => 298,
			'epocaavaliacao_id' => 298,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 299,
			'anolectivo_id' => 299,
			'epocaavaliacao_id' => 299,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 300,
			'anolectivo_id' => 300,
			'epocaavaliacao_id' => 300,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 301,
			'anolectivo_id' => 301,
			'epocaavaliacao_id' => 301,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 302,
			'anolectivo_id' => 302,
			'epocaavaliacao_id' => 302,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 303,
			'anolectivo_id' => 303,
			'epocaavaliacao_id' => 303,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 304,
			'anolectivo_id' => 304,
			'epocaavaliacao_id' => 304,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 305,
			'anolectivo_id' => 305,
			'epocaavaliacao_id' => 305,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 306,
			'anolectivo_id' => 306,
			'epocaavaliacao_id' => 306,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 307,
			'anolectivo_id' => 307,
			'epocaavaliacao_id' => 307,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 308,
			'anolectivo_id' => 308,
			'epocaavaliacao_id' => 308,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 309,
			'anolectivo_id' => 309,
			'epocaavaliacao_id' => 309,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 310,
			'anolectivo_id' => 310,
			'epocaavaliacao_id' => 310,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 311,
			'anolectivo_id' => 311,
			'epocaavaliacao_id' => 311,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 312,
			'anolectivo_id' => 312,
			'epocaavaliacao_id' => 312,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 313,
			'anolectivo_id' => 313,
			'epocaavaliacao_id' => 313,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 314,
			'anolectivo_id' => 314,
			'epocaavaliacao_id' => 314,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 315,
			'anolectivo_id' => 315,
			'epocaavaliacao_id' => 315,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 316,
			'anolectivo_id' => 316,
			'epocaavaliacao_id' => 316,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 317,
			'anolectivo_id' => 317,
			'epocaavaliacao_id' => 317,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 318,
			'anolectivo_id' => 318,
			'epocaavaliacao_id' => 318,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 319,
			'anolectivo_id' => 319,
			'epocaavaliacao_id' => 319,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 320,
			'anolectivo_id' => 320,
			'epocaavaliacao_id' => 320,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 321,
			'anolectivo_id' => 321,
			'epocaavaliacao_id' => 321,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 322,
			'anolectivo_id' => 322,
			'epocaavaliacao_id' => 322,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 323,
			'anolectivo_id' => 323,
			'epocaavaliacao_id' => 323,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 324,
			'anolectivo_id' => 324,
			'epocaavaliacao_id' => 324,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 325,
			'anolectivo_id' => 325,
			'epocaavaliacao_id' => 325,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 326,
			'anolectivo_id' => 326,
			'epocaavaliacao_id' => 326,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 327,
			'anolectivo_id' => 327,
			'epocaavaliacao_id' => 327,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 328,
			'anolectivo_id' => 328,
			'epocaavaliacao_id' => 328,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 329,
			'anolectivo_id' => 329,
			'epocaavaliacao_id' => 329,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 330,
			'anolectivo_id' => 330,
			'epocaavaliacao_id' => 330,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 331,
			'anolectivo_id' => 331,
			'epocaavaliacao_id' => 331,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 332,
			'anolectivo_id' => 332,
			'epocaavaliacao_id' => 332,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 333,
			'anolectivo_id' => 333,
			'epocaavaliacao_id' => 333,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 334,
			'anolectivo_id' => 334,
			'epocaavaliacao_id' => 334,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 335,
			'anolectivo_id' => 335,
			'epocaavaliacao_id' => 335,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 336,
			'anolectivo_id' => 336,
			'epocaavaliacao_id' => 336,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 337,
			'anolectivo_id' => 337,
			'epocaavaliacao_id' => 337,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 338,
			'anolectivo_id' => 338,
			'epocaavaliacao_id' => 338,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 339,
			'anolectivo_id' => 339,
			'epocaavaliacao_id' => 339,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 340,
			'anolectivo_id' => 340,
			'epocaavaliacao_id' => 340,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 341,
			'anolectivo_id' => 341,
			'epocaavaliacao_id' => 341,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 342,
			'anolectivo_id' => 342,
			'epocaavaliacao_id' => 342,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 343,
			'anolectivo_id' => 343,
			'epocaavaliacao_id' => 343,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 344,
			'anolectivo_id' => 344,
			'epocaavaliacao_id' => 344,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 345,
			'anolectivo_id' => 345,
			'epocaavaliacao_id' => 345,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 346,
			'anolectivo_id' => 346,
			'epocaavaliacao_id' => 346,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 347,
			'anolectivo_id' => 347,
			'epocaavaliacao_id' => 347,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 348,
			'anolectivo_id' => 348,
			'epocaavaliacao_id' => 348,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 349,
			'anolectivo_id' => 349,
			'epocaavaliacao_id' => 349,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 350,
			'anolectivo_id' => 350,
			'epocaavaliacao_id' => 350,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 351,
			'anolectivo_id' => 351,
			'epocaavaliacao_id' => 351,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 352,
			'anolectivo_id' => 352,
			'epocaavaliacao_id' => 352,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 353,
			'anolectivo_id' => 353,
			'epocaavaliacao_id' => 353,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 354,
			'anolectivo_id' => 354,
			'epocaavaliacao_id' => 354,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 355,
			'anolectivo_id' => 355,
			'epocaavaliacao_id' => 355,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 356,
			'anolectivo_id' => 356,
			'epocaavaliacao_id' => 356,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 357,
			'anolectivo_id' => 357,
			'epocaavaliacao_id' => 357,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 358,
			'anolectivo_id' => 358,
			'epocaavaliacao_id' => 358,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 359,
			'anolectivo_id' => 359,
			'epocaavaliacao_id' => 359,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 360,
			'anolectivo_id' => 360,
			'epocaavaliacao_id' => 360,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 361,
			'anolectivo_id' => 361,
			'epocaavaliacao_id' => 361,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 362,
			'anolectivo_id' => 362,
			'epocaavaliacao_id' => 362,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 363,
			'anolectivo_id' => 363,
			'epocaavaliacao_id' => 363,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 364,
			'anolectivo_id' => 364,
			'epocaavaliacao_id' => 364,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 365,
			'anolectivo_id' => 365,
			'epocaavaliacao_id' => 365,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 366,
			'anolectivo_id' => 366,
			'epocaavaliacao_id' => 366,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 367,
			'anolectivo_id' => 367,
			'epocaavaliacao_id' => 367,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 368,
			'anolectivo_id' => 368,
			'epocaavaliacao_id' => 368,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 369,
			'anolectivo_id' => 369,
			'epocaavaliacao_id' => 369,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 370,
			'anolectivo_id' => 370,
			'epocaavaliacao_id' => 370,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 371,
			'anolectivo_id' => 371,
			'epocaavaliacao_id' => 371,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 372,
			'anolectivo_id' => 372,
			'epocaavaliacao_id' => 372,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 373,
			'anolectivo_id' => 373,
			'epocaavaliacao_id' => 373,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 374,
			'anolectivo_id' => 374,
			'epocaavaliacao_id' => 374,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 375,
			'anolectivo_id' => 375,
			'epocaavaliacao_id' => 375,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 376,
			'anolectivo_id' => 376,
			'epocaavaliacao_id' => 376,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 377,
			'anolectivo_id' => 377,
			'epocaavaliacao_id' => 377,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 378,
			'anolectivo_id' => 378,
			'epocaavaliacao_id' => 378,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 379,
			'anolectivo_id' => 379,
			'epocaavaliacao_id' => 379,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 380,
			'anolectivo_id' => 380,
			'epocaavaliacao_id' => 380,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 381,
			'anolectivo_id' => 381,
			'epocaavaliacao_id' => 381,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 382,
			'anolectivo_id' => 382,
			'epocaavaliacao_id' => 382,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 383,
			'anolectivo_id' => 383,
			'epocaavaliacao_id' => 383,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 384,
			'anolectivo_id' => 384,
			'epocaavaliacao_id' => 384,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 385,
			'anolectivo_id' => 385,
			'epocaavaliacao_id' => 385,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 386,
			'anolectivo_id' => 386,
			'epocaavaliacao_id' => 386,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 387,
			'anolectivo_id' => 387,
			'epocaavaliacao_id' => 387,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 388,
			'anolectivo_id' => 388,
			'epocaavaliacao_id' => 388,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 389,
			'anolectivo_id' => 389,
			'epocaavaliacao_id' => 389,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 390,
			'anolectivo_id' => 390,
			'epocaavaliacao_id' => 390,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 391,
			'anolectivo_id' => 391,
			'epocaavaliacao_id' => 391,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 392,
			'anolectivo_id' => 392,
			'epocaavaliacao_id' => 392,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 393,
			'anolectivo_id' => 393,
			'epocaavaliacao_id' => 393,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 394,
			'anolectivo_id' => 394,
			'epocaavaliacao_id' => 394,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 395,
			'anolectivo_id' => 395,
			'epocaavaliacao_id' => 395,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 396,
			'anolectivo_id' => 396,
			'epocaavaliacao_id' => 396,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 397,
			'anolectivo_id' => 397,
			'epocaavaliacao_id' => 397,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 398,
			'anolectivo_id' => 398,
			'epocaavaliacao_id' => 398,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 399,
			'anolectivo_id' => 399,
			'epocaavaliacao_id' => 399,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 400,
			'anolectivo_id' => 400,
			'epocaavaliacao_id' => 400,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 401,
			'anolectivo_id' => 401,
			'epocaavaliacao_id' => 401,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 402,
			'anolectivo_id' => 402,
			'epocaavaliacao_id' => 402,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 403,
			'anolectivo_id' => 403,
			'epocaavaliacao_id' => 403,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 404,
			'anolectivo_id' => 404,
			'epocaavaliacao_id' => 404,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 405,
			'anolectivo_id' => 405,
			'epocaavaliacao_id' => 405,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 406,
			'anolectivo_id' => 406,
			'epocaavaliacao_id' => 406,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 407,
			'anolectivo_id' => 407,
			'epocaavaliacao_id' => 407,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 408,
			'anolectivo_id' => 408,
			'epocaavaliacao_id' => 408,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 409,
			'anolectivo_id' => 409,
			'epocaavaliacao_id' => 409,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 410,
			'anolectivo_id' => 410,
			'epocaavaliacao_id' => 410,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 411,
			'anolectivo_id' => 411,
			'epocaavaliacao_id' => 411,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 412,
			'anolectivo_id' => 412,
			'epocaavaliacao_id' => 412,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 413,
			'anolectivo_id' => 413,
			'epocaavaliacao_id' => 413,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 414,
			'anolectivo_id' => 414,
			'epocaavaliacao_id' => 414,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 415,
			'anolectivo_id' => 415,
			'epocaavaliacao_id' => 415,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 416,
			'anolectivo_id' => 416,
			'epocaavaliacao_id' => 416,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 417,
			'anolectivo_id' => 417,
			'epocaavaliacao_id' => 417,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 418,
			'anolectivo_id' => 418,
			'epocaavaliacao_id' => 418,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 419,
			'anolectivo_id' => 419,
			'epocaavaliacao_id' => 419,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 420,
			'anolectivo_id' => 420,
			'epocaavaliacao_id' => 420,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 421,
			'anolectivo_id' => 421,
			'epocaavaliacao_id' => 421,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 422,
			'anolectivo_id' => 422,
			'epocaavaliacao_id' => 422,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 423,
			'anolectivo_id' => 423,
			'epocaavaliacao_id' => 423,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 424,
			'anolectivo_id' => 424,
			'epocaavaliacao_id' => 424,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 425,
			'anolectivo_id' => 425,
			'epocaavaliacao_id' => 425,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 426,
			'anolectivo_id' => 426,
			'epocaavaliacao_id' => 426,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 427,
			'anolectivo_id' => 427,
			'epocaavaliacao_id' => 427,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 428,
			'anolectivo_id' => 428,
			'epocaavaliacao_id' => 428,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 429,
			'anolectivo_id' => 429,
			'epocaavaliacao_id' => 429,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 430,
			'anolectivo_id' => 430,
			'epocaavaliacao_id' => 430,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 431,
			'anolectivo_id' => 431,
			'epocaavaliacao_id' => 431,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 432,
			'anolectivo_id' => 432,
			'epocaavaliacao_id' => 432,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 433,
			'anolectivo_id' => 433,
			'epocaavaliacao_id' => 433,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 434,
			'anolectivo_id' => 434,
			'epocaavaliacao_id' => 434,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 435,
			'anolectivo_id' => 435,
			'epocaavaliacao_id' => 435,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 436,
			'anolectivo_id' => 436,
			'epocaavaliacao_id' => 436,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 437,
			'anolectivo_id' => 437,
			'epocaavaliacao_id' => 437,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 438,
			'anolectivo_id' => 438,
			'epocaavaliacao_id' => 438,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 439,
			'anolectivo_id' => 439,
			'epocaavaliacao_id' => 439,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 440,
			'anolectivo_id' => 440,
			'epocaavaliacao_id' => 440,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 441,
			'anolectivo_id' => 441,
			'epocaavaliacao_id' => 441,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 442,
			'anolectivo_id' => 442,
			'epocaavaliacao_id' => 442,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 443,
			'anolectivo_id' => 443,
			'epocaavaliacao_id' => 443,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 444,
			'anolectivo_id' => 444,
			'epocaavaliacao_id' => 444,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 445,
			'anolectivo_id' => 445,
			'epocaavaliacao_id' => 445,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 446,
			'anolectivo_id' => 446,
			'epocaavaliacao_id' => 446,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 447,
			'anolectivo_id' => 447,
			'epocaavaliacao_id' => 447,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 448,
			'anolectivo_id' => 448,
			'epocaavaliacao_id' => 448,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 449,
			'anolectivo_id' => 449,
			'epocaavaliacao_id' => 449,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 450,
			'anolectivo_id' => 450,
			'epocaavaliacao_id' => 450,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 451,
			'anolectivo_id' => 451,
			'epocaavaliacao_id' => 451,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 452,
			'anolectivo_id' => 452,
			'epocaavaliacao_id' => 452,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 453,
			'anolectivo_id' => 453,
			'epocaavaliacao_id' => 453,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 454,
			'anolectivo_id' => 454,
			'epocaavaliacao_id' => 454,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 455,
			'anolectivo_id' => 455,
			'epocaavaliacao_id' => 455,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 456,
			'anolectivo_id' => 456,
			'epocaavaliacao_id' => 456,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 457,
			'anolectivo_id' => 457,
			'epocaavaliacao_id' => 457,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 458,
			'anolectivo_id' => 458,
			'epocaavaliacao_id' => 458,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 459,
			'anolectivo_id' => 459,
			'epocaavaliacao_id' => 459,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 460,
			'anolectivo_id' => 460,
			'epocaavaliacao_id' => 460,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 461,
			'anolectivo_id' => 461,
			'epocaavaliacao_id' => 461,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 462,
			'anolectivo_id' => 462,
			'epocaavaliacao_id' => 462,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 463,
			'anolectivo_id' => 463,
			'epocaavaliacao_id' => 463,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 464,
			'anolectivo_id' => 464,
			'epocaavaliacao_id' => 464,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 465,
			'anolectivo_id' => 465,
			'epocaavaliacao_id' => 465,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 466,
			'anolectivo_id' => 466,
			'epocaavaliacao_id' => 466,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 467,
			'anolectivo_id' => 467,
			'epocaavaliacao_id' => 467,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 468,
			'anolectivo_id' => 468,
			'epocaavaliacao_id' => 468,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 469,
			'anolectivo_id' => 469,
			'epocaavaliacao_id' => 469,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 470,
			'anolectivo_id' => 470,
			'epocaavaliacao_id' => 470,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 471,
			'anolectivo_id' => 471,
			'epocaavaliacao_id' => 471,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 472,
			'anolectivo_id' => 472,
			'epocaavaliacao_id' => 472,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 473,
			'anolectivo_id' => 473,
			'epocaavaliacao_id' => 473,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 474,
			'anolectivo_id' => 474,
			'epocaavaliacao_id' => 474,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 475,
			'anolectivo_id' => 475,
			'epocaavaliacao_id' => 475,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 476,
			'anolectivo_id' => 476,
			'epocaavaliacao_id' => 476,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 477,
			'anolectivo_id' => 477,
			'epocaavaliacao_id' => 477,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 478,
			'anolectivo_id' => 478,
			'epocaavaliacao_id' => 478,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 479,
			'anolectivo_id' => 479,
			'epocaavaliacao_id' => 479,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 480,
			'anolectivo_id' => 480,
			'epocaavaliacao_id' => 480,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 481,
			'anolectivo_id' => 481,
			'epocaavaliacao_id' => 481,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 482,
			'anolectivo_id' => 482,
			'epocaavaliacao_id' => 482,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 483,
			'anolectivo_id' => 483,
			'epocaavaliacao_id' => 483,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 484,
			'anolectivo_id' => 484,
			'epocaavaliacao_id' => 484,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 485,
			'anolectivo_id' => 485,
			'epocaavaliacao_id' => 485,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 486,
			'anolectivo_id' => 486,
			'epocaavaliacao_id' => 486,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 487,
			'anolectivo_id' => 487,
			'epocaavaliacao_id' => 487,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 488,
			'anolectivo_id' => 488,
			'epocaavaliacao_id' => 488,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 489,
			'anolectivo_id' => 489,
			'epocaavaliacao_id' => 489,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 490,
			'anolectivo_id' => 490,
			'epocaavaliacao_id' => 490,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 491,
			'anolectivo_id' => 491,
			'epocaavaliacao_id' => 491,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 492,
			'anolectivo_id' => 492,
			'epocaavaliacao_id' => 492,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 493,
			'anolectivo_id' => 493,
			'epocaavaliacao_id' => 493,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 494,
			'anolectivo_id' => 494,
			'epocaavaliacao_id' => 494,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 495,
			'anolectivo_id' => 495,
			'epocaavaliacao_id' => 495,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 496,
			'anolectivo_id' => 496,
			'epocaavaliacao_id' => 496,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 497,
			'anolectivo_id' => 497,
			'epocaavaliacao_id' => 497,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 498,
			'anolectivo_id' => 498,
			'epocaavaliacao_id' => 498,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 499,
			'anolectivo_id' => 499,
			'epocaavaliacao_id' => 499,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 500,
			'anolectivo_id' => 500,
			'epocaavaliacao_id' => 500,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 501,
			'anolectivo_id' => 501,
			'epocaavaliacao_id' => 501,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 502,
			'anolectivo_id' => 502,
			'epocaavaliacao_id' => 502,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 503,
			'anolectivo_id' => 503,
			'epocaavaliacao_id' => 503,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 504,
			'anolectivo_id' => 504,
			'epocaavaliacao_id' => 504,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 505,
			'anolectivo_id' => 505,
			'epocaavaliacao_id' => 505,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 506,
			'anolectivo_id' => 506,
			'epocaavaliacao_id' => 506,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 507,
			'anolectivo_id' => 507,
			'epocaavaliacao_id' => 507,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 508,
			'anolectivo_id' => 508,
			'epocaavaliacao_id' => 508,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 509,
			'anolectivo_id' => 509,
			'epocaavaliacao_id' => 509,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 510,
			'anolectivo_id' => 510,
			'epocaavaliacao_id' => 510,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 511,
			'anolectivo_id' => 511,
			'epocaavaliacao_id' => 511,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 512,
			'anolectivo_id' => 512,
			'epocaavaliacao_id' => 512,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 513,
			'anolectivo_id' => 513,
			'epocaavaliacao_id' => 513,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 514,
			'anolectivo_id' => 514,
			'epocaavaliacao_id' => 514,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 515,
			'anolectivo_id' => 515,
			'epocaavaliacao_id' => 515,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 516,
			'anolectivo_id' => 516,
			'epocaavaliacao_id' => 516,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 517,
			'anolectivo_id' => 517,
			'epocaavaliacao_id' => 517,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 518,
			'anolectivo_id' => 518,
			'epocaavaliacao_id' => 518,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 519,
			'anolectivo_id' => 519,
			'epocaavaliacao_id' => 519,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 520,
			'anolectivo_id' => 520,
			'epocaavaliacao_id' => 520,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 521,
			'anolectivo_id' => 521,
			'epocaavaliacao_id' => 521,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 522,
			'anolectivo_id' => 522,
			'epocaavaliacao_id' => 522,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 523,
			'anolectivo_id' => 523,
			'epocaavaliacao_id' => 523,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 524,
			'anolectivo_id' => 524,
			'epocaavaliacao_id' => 524,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 525,
			'anolectivo_id' => 525,
			'epocaavaliacao_id' => 525,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 526,
			'anolectivo_id' => 526,
			'epocaavaliacao_id' => 526,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 527,
			'anolectivo_id' => 527,
			'epocaavaliacao_id' => 527,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 528,
			'anolectivo_id' => 528,
			'epocaavaliacao_id' => 528,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 529,
			'anolectivo_id' => 529,
			'epocaavaliacao_id' => 529,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 530,
			'anolectivo_id' => 530,
			'epocaavaliacao_id' => 530,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 531,
			'anolectivo_id' => 531,
			'epocaavaliacao_id' => 531,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 532,
			'anolectivo_id' => 532,
			'epocaavaliacao_id' => 532,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 533,
			'anolectivo_id' => 533,
			'epocaavaliacao_id' => 533,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 534,
			'anolectivo_id' => 534,
			'epocaavaliacao_id' => 534,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 535,
			'anolectivo_id' => 535,
			'epocaavaliacao_id' => 535,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 536,
			'anolectivo_id' => 536,
			'epocaavaliacao_id' => 536,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 537,
			'anolectivo_id' => 537,
			'epocaavaliacao_id' => 537,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 538,
			'anolectivo_id' => 538,
			'epocaavaliacao_id' => 538,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 539,
			'anolectivo_id' => 539,
			'epocaavaliacao_id' => 539,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 540,
			'anolectivo_id' => 540,
			'epocaavaliacao_id' => 540,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 541,
			'anolectivo_id' => 541,
			'epocaavaliacao_id' => 541,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 542,
			'anolectivo_id' => 542,
			'epocaavaliacao_id' => 542,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 543,
			'anolectivo_id' => 543,
			'epocaavaliacao_id' => 543,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 544,
			'anolectivo_id' => 544,
			'epocaavaliacao_id' => 544,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 545,
			'anolectivo_id' => 545,
			'epocaavaliacao_id' => 545,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 546,
			'anolectivo_id' => 546,
			'epocaavaliacao_id' => 546,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 547,
			'anolectivo_id' => 547,
			'epocaavaliacao_id' => 547,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 548,
			'anolectivo_id' => 548,
			'epocaavaliacao_id' => 548,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 549,
			'anolectivo_id' => 549,
			'epocaavaliacao_id' => 549,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 550,
			'anolectivo_id' => 550,
			'epocaavaliacao_id' => 550,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 551,
			'anolectivo_id' => 551,
			'epocaavaliacao_id' => 551,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 552,
			'anolectivo_id' => 552,
			'epocaavaliacao_id' => 552,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 553,
			'anolectivo_id' => 553,
			'epocaavaliacao_id' => 553,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 554,
			'anolectivo_id' => 554,
			'epocaavaliacao_id' => 554,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 555,
			'anolectivo_id' => 555,
			'epocaavaliacao_id' => 555,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 556,
			'anolectivo_id' => 556,
			'epocaavaliacao_id' => 556,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 557,
			'anolectivo_id' => 557,
			'epocaavaliacao_id' => 557,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 558,
			'anolectivo_id' => 558,
			'epocaavaliacao_id' => 558,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 559,
			'anolectivo_id' => 559,
			'epocaavaliacao_id' => 559,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 560,
			'anolectivo_id' => 560,
			'epocaavaliacao_id' => 560,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 561,
			'anolectivo_id' => 561,
			'epocaavaliacao_id' => 561,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 562,
			'anolectivo_id' => 562,
			'epocaavaliacao_id' => 562,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 563,
			'anolectivo_id' => 563,
			'epocaavaliacao_id' => 563,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 564,
			'anolectivo_id' => 564,
			'epocaavaliacao_id' => 564,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 565,
			'anolectivo_id' => 565,
			'epocaavaliacao_id' => 565,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 566,
			'anolectivo_id' => 566,
			'epocaavaliacao_id' => 566,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 567,
			'anolectivo_id' => 567,
			'epocaavaliacao_id' => 567,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 568,
			'anolectivo_id' => 568,
			'epocaavaliacao_id' => 568,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 569,
			'anolectivo_id' => 569,
			'epocaavaliacao_id' => 569,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 570,
			'anolectivo_id' => 570,
			'epocaavaliacao_id' => 570,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 571,
			'anolectivo_id' => 571,
			'epocaavaliacao_id' => 571,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 572,
			'anolectivo_id' => 572,
			'epocaavaliacao_id' => 572,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 573,
			'anolectivo_id' => 573,
			'epocaavaliacao_id' => 573,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 574,
			'anolectivo_id' => 574,
			'epocaavaliacao_id' => 574,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 575,
			'anolectivo_id' => 575,
			'epocaavaliacao_id' => 575,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 576,
			'anolectivo_id' => 576,
			'epocaavaliacao_id' => 576,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 577,
			'anolectivo_id' => 577,
			'epocaavaliacao_id' => 577,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 578,
			'anolectivo_id' => 578,
			'epocaavaliacao_id' => 578,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 579,
			'anolectivo_id' => 579,
			'epocaavaliacao_id' => 579,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 580,
			'anolectivo_id' => 580,
			'epocaavaliacao_id' => 580,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 581,
			'anolectivo_id' => 581,
			'epocaavaliacao_id' => 581,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 582,
			'anolectivo_id' => 582,
			'epocaavaliacao_id' => 582,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 583,
			'anolectivo_id' => 583,
			'epocaavaliacao_id' => 583,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 584,
			'anolectivo_id' => 584,
			'epocaavaliacao_id' => 584,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 585,
			'anolectivo_id' => 585,
			'epocaavaliacao_id' => 585,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 586,
			'anolectivo_id' => 586,
			'epocaavaliacao_id' => 586,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 587,
			'anolectivo_id' => 587,
			'epocaavaliacao_id' => 587,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 588,
			'anolectivo_id' => 588,
			'epocaavaliacao_id' => 588,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 589,
			'anolectivo_id' => 589,
			'epocaavaliacao_id' => 589,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 590,
			'anolectivo_id' => 590,
			'epocaavaliacao_id' => 590,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 591,
			'anolectivo_id' => 591,
			'epocaavaliacao_id' => 591,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 592,
			'anolectivo_id' => 592,
			'epocaavaliacao_id' => 592,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 593,
			'anolectivo_id' => 593,
			'epocaavaliacao_id' => 593,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 594,
			'anolectivo_id' => 594,
			'epocaavaliacao_id' => 594,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 595,
			'anolectivo_id' => 595,
			'epocaavaliacao_id' => 595,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 596,
			'anolectivo_id' => 596,
			'epocaavaliacao_id' => 596,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 597,
			'anolectivo_id' => 597,
			'epocaavaliacao_id' => 597,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 598,
			'anolectivo_id' => 598,
			'epocaavaliacao_id' => 598,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 599,
			'anolectivo_id' => 599,
			'epocaavaliacao_id' => 599,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 600,
			'anolectivo_id' => 600,
			'epocaavaliacao_id' => 600,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 601,
			'anolectivo_id' => 601,
			'epocaavaliacao_id' => 601,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 602,
			'anolectivo_id' => 602,
			'epocaavaliacao_id' => 602,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 603,
			'anolectivo_id' => 603,
			'epocaavaliacao_id' => 603,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 604,
			'anolectivo_id' => 604,
			'epocaavaliacao_id' => 604,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 605,
			'anolectivo_id' => 605,
			'epocaavaliacao_id' => 605,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 606,
			'anolectivo_id' => 606,
			'epocaavaliacao_id' => 606,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 607,
			'anolectivo_id' => 607,
			'epocaavaliacao_id' => 607,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 608,
			'anolectivo_id' => 608,
			'epocaavaliacao_id' => 608,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 609,
			'anolectivo_id' => 609,
			'epocaavaliacao_id' => 609,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 610,
			'anolectivo_id' => 610,
			'epocaavaliacao_id' => 610,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 611,
			'anolectivo_id' => 611,
			'epocaavaliacao_id' => 611,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 612,
			'anolectivo_id' => 612,
			'epocaavaliacao_id' => 612,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 613,
			'anolectivo_id' => 613,
			'epocaavaliacao_id' => 613,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 614,
			'anolectivo_id' => 614,
			'epocaavaliacao_id' => 614,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 615,
			'anolectivo_id' => 615,
			'epocaavaliacao_id' => 615,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 616,
			'anolectivo_id' => 616,
			'epocaavaliacao_id' => 616,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 617,
			'anolectivo_id' => 617,
			'epocaavaliacao_id' => 617,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 618,
			'anolectivo_id' => 618,
			'epocaavaliacao_id' => 618,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 619,
			'anolectivo_id' => 619,
			'epocaavaliacao_id' => 619,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 620,
			'anolectivo_id' => 620,
			'epocaavaliacao_id' => 620,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 621,
			'anolectivo_id' => 621,
			'epocaavaliacao_id' => 621,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 622,
			'anolectivo_id' => 622,
			'epocaavaliacao_id' => 622,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 623,
			'anolectivo_id' => 623,
			'epocaavaliacao_id' => 623,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 624,
			'anolectivo_id' => 624,
			'epocaavaliacao_id' => 624,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 625,
			'anolectivo_id' => 625,
			'epocaavaliacao_id' => 625,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 626,
			'anolectivo_id' => 626,
			'epocaavaliacao_id' => 626,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 627,
			'anolectivo_id' => 627,
			'epocaavaliacao_id' => 627,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 628,
			'anolectivo_id' => 628,
			'epocaavaliacao_id' => 628,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 629,
			'anolectivo_id' => 629,
			'epocaavaliacao_id' => 629,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 630,
			'anolectivo_id' => 630,
			'epocaavaliacao_id' => 630,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 631,
			'anolectivo_id' => 631,
			'epocaavaliacao_id' => 631,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 632,
			'anolectivo_id' => 632,
			'epocaavaliacao_id' => 632,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 633,
			'anolectivo_id' => 633,
			'epocaavaliacao_id' => 633,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 634,
			'anolectivo_id' => 634,
			'epocaavaliacao_id' => 634,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 635,
			'anolectivo_id' => 635,
			'epocaavaliacao_id' => 635,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 636,
			'anolectivo_id' => 636,
			'epocaavaliacao_id' => 636,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 637,
			'anolectivo_id' => 637,
			'epocaavaliacao_id' => 637,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 638,
			'anolectivo_id' => 638,
			'epocaavaliacao_id' => 638,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 639,
			'anolectivo_id' => 639,
			'epocaavaliacao_id' => 639,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 640,
			'anolectivo_id' => 640,
			'epocaavaliacao_id' => 640,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 641,
			'anolectivo_id' => 641,
			'epocaavaliacao_id' => 641,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 642,
			'anolectivo_id' => 642,
			'epocaavaliacao_id' => 642,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 643,
			'anolectivo_id' => 643,
			'epocaavaliacao_id' => 643,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 644,
			'anolectivo_id' => 644,
			'epocaavaliacao_id' => 644,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 645,
			'anolectivo_id' => 645,
			'epocaavaliacao_id' => 645,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 646,
			'anolectivo_id' => 646,
			'epocaavaliacao_id' => 646,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 647,
			'anolectivo_id' => 647,
			'epocaavaliacao_id' => 647,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 648,
			'anolectivo_id' => 648,
			'epocaavaliacao_id' => 648,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 649,
			'anolectivo_id' => 649,
			'epocaavaliacao_id' => 649,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 650,
			'anolectivo_id' => 650,
			'epocaavaliacao_id' => 650,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 651,
			'anolectivo_id' => 651,
			'epocaavaliacao_id' => 651,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 652,
			'anolectivo_id' => 652,
			'epocaavaliacao_id' => 652,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 653,
			'anolectivo_id' => 653,
			'epocaavaliacao_id' => 653,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 654,
			'anolectivo_id' => 654,
			'epocaavaliacao_id' => 654,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 655,
			'anolectivo_id' => 655,
			'epocaavaliacao_id' => 655,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 656,
			'anolectivo_id' => 656,
			'epocaavaliacao_id' => 656,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 657,
			'anolectivo_id' => 657,
			'epocaavaliacao_id' => 657,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 658,
			'anolectivo_id' => 658,
			'epocaavaliacao_id' => 658,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 659,
			'anolectivo_id' => 659,
			'epocaavaliacao_id' => 659,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 660,
			'anolectivo_id' => 660,
			'epocaavaliacao_id' => 660,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 661,
			'anolectivo_id' => 661,
			'epocaavaliacao_id' => 661,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 662,
			'anolectivo_id' => 662,
			'epocaavaliacao_id' => 662,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 663,
			'anolectivo_id' => 663,
			'epocaavaliacao_id' => 663,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 664,
			'anolectivo_id' => 664,
			'epocaavaliacao_id' => 664,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 665,
			'anolectivo_id' => 665,
			'epocaavaliacao_id' => 665,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 666,
			'anolectivo_id' => 666,
			'epocaavaliacao_id' => 666,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 667,
			'anolectivo_id' => 667,
			'epocaavaliacao_id' => 667,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 668,
			'anolectivo_id' => 668,
			'epocaavaliacao_id' => 668,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 669,
			'anolectivo_id' => 669,
			'epocaavaliacao_id' => 669,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 670,
			'anolectivo_id' => 670,
			'epocaavaliacao_id' => 670,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 671,
			'anolectivo_id' => 671,
			'epocaavaliacao_id' => 671,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 672,
			'anolectivo_id' => 672,
			'epocaavaliacao_id' => 672,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 673,
			'anolectivo_id' => 673,
			'epocaavaliacao_id' => 673,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 674,
			'anolectivo_id' => 674,
			'epocaavaliacao_id' => 674,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 675,
			'anolectivo_id' => 675,
			'epocaavaliacao_id' => 675,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 676,
			'anolectivo_id' => 676,
			'epocaavaliacao_id' => 676,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 677,
			'anolectivo_id' => 677,
			'epocaavaliacao_id' => 677,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 678,
			'anolectivo_id' => 678,
			'epocaavaliacao_id' => 678,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 679,
			'anolectivo_id' => 679,
			'epocaavaliacao_id' => 679,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 680,
			'anolectivo_id' => 680,
			'epocaavaliacao_id' => 680,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 681,
			'anolectivo_id' => 681,
			'epocaavaliacao_id' => 681,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 682,
			'anolectivo_id' => 682,
			'epocaavaliacao_id' => 682,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 683,
			'anolectivo_id' => 683,
			'epocaavaliacao_id' => 683,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 684,
			'anolectivo_id' => 684,
			'epocaavaliacao_id' => 684,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 685,
			'anolectivo_id' => 685,
			'epocaavaliacao_id' => 685,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 686,
			'anolectivo_id' => 686,
			'epocaavaliacao_id' => 686,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 687,
			'anolectivo_id' => 687,
			'epocaavaliacao_id' => 687,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 688,
			'anolectivo_id' => 688,
			'epocaavaliacao_id' => 688,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 689,
			'anolectivo_id' => 689,
			'epocaavaliacao_id' => 689,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 690,
			'anolectivo_id' => 690,
			'epocaavaliacao_id' => 690,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 691,
			'anolectivo_id' => 691,
			'epocaavaliacao_id' => 691,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 692,
			'anolectivo_id' => 692,
			'epocaavaliacao_id' => 692,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 693,
			'anolectivo_id' => 693,
			'epocaavaliacao_id' => 693,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 694,
			'anolectivo_id' => 694,
			'epocaavaliacao_id' => 694,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 695,
			'anolectivo_id' => 695,
			'epocaavaliacao_id' => 695,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 696,
			'anolectivo_id' => 696,
			'epocaavaliacao_id' => 696,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 697,
			'anolectivo_id' => 697,
			'epocaavaliacao_id' => 697,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 698,
			'anolectivo_id' => 698,
			'epocaavaliacao_id' => 698,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 699,
			'anolectivo_id' => 699,
			'epocaavaliacao_id' => 699,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 700,
			'anolectivo_id' => 700,
			'epocaavaliacao_id' => 700,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 701,
			'anolectivo_id' => 701,
			'epocaavaliacao_id' => 701,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 702,
			'anolectivo_id' => 702,
			'epocaavaliacao_id' => 702,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 703,
			'anolectivo_id' => 703,
			'epocaavaliacao_id' => 703,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 704,
			'anolectivo_id' => 704,
			'epocaavaliacao_id' => 704,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 705,
			'anolectivo_id' => 705,
			'epocaavaliacao_id' => 705,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 706,
			'anolectivo_id' => 706,
			'epocaavaliacao_id' => 706,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 707,
			'anolectivo_id' => 707,
			'epocaavaliacao_id' => 707,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 708,
			'anolectivo_id' => 708,
			'epocaavaliacao_id' => 708,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 709,
			'anolectivo_id' => 709,
			'epocaavaliacao_id' => 709,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 710,
			'anolectivo_id' => 710,
			'epocaavaliacao_id' => 710,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 711,
			'anolectivo_id' => 711,
			'epocaavaliacao_id' => 711,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 712,
			'anolectivo_id' => 712,
			'epocaavaliacao_id' => 712,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 713,
			'anolectivo_id' => 713,
			'epocaavaliacao_id' => 713,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 714,
			'anolectivo_id' => 714,
			'epocaavaliacao_id' => 714,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 715,
			'anolectivo_id' => 715,
			'epocaavaliacao_id' => 715,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 716,
			'anolectivo_id' => 716,
			'epocaavaliacao_id' => 716,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 717,
			'anolectivo_id' => 717,
			'epocaavaliacao_id' => 717,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 718,
			'anolectivo_id' => 718,
			'epocaavaliacao_id' => 718,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 719,
			'anolectivo_id' => 719,
			'epocaavaliacao_id' => 719,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 720,
			'anolectivo_id' => 720,
			'epocaavaliacao_id' => 720,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 721,
			'anolectivo_id' => 721,
			'epocaavaliacao_id' => 721,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 722,
			'anolectivo_id' => 722,
			'epocaavaliacao_id' => 722,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 723,
			'anolectivo_id' => 723,
			'epocaavaliacao_id' => 723,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 724,
			'anolectivo_id' => 724,
			'epocaavaliacao_id' => 724,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 725,
			'anolectivo_id' => 725,
			'epocaavaliacao_id' => 725,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 726,
			'anolectivo_id' => 726,
			'epocaavaliacao_id' => 726,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 727,
			'anolectivo_id' => 727,
			'epocaavaliacao_id' => 727,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 728,
			'anolectivo_id' => 728,
			'epocaavaliacao_id' => 728,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 729,
			'anolectivo_id' => 729,
			'epocaavaliacao_id' => 729,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 730,
			'anolectivo_id' => 730,
			'epocaavaliacao_id' => 730,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 731,
			'anolectivo_id' => 731,
			'epocaavaliacao_id' => 731,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 732,
			'anolectivo_id' => 732,
			'epocaavaliacao_id' => 732,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 733,
			'anolectivo_id' => 733,
			'epocaavaliacao_id' => 733,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 734,
			'anolectivo_id' => 734,
			'epocaavaliacao_id' => 734,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 735,
			'anolectivo_id' => 735,
			'epocaavaliacao_id' => 735,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 736,
			'anolectivo_id' => 736,
			'epocaavaliacao_id' => 736,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 737,
			'anolectivo_id' => 737,
			'epocaavaliacao_id' => 737,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 738,
			'anolectivo_id' => 738,
			'epocaavaliacao_id' => 738,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 739,
			'anolectivo_id' => 739,
			'epocaavaliacao_id' => 739,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 740,
			'anolectivo_id' => 740,
			'epocaavaliacao_id' => 740,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 741,
			'anolectivo_id' => 741,
			'epocaavaliacao_id' => 741,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 742,
			'anolectivo_id' => 742,
			'epocaavaliacao_id' => 742,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 743,
			'anolectivo_id' => 743,
			'epocaavaliacao_id' => 743,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 744,
			'anolectivo_id' => 744,
			'epocaavaliacao_id' => 744,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 745,
			'anolectivo_id' => 745,
			'epocaavaliacao_id' => 745,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 746,
			'anolectivo_id' => 746,
			'epocaavaliacao_id' => 746,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 747,
			'anolectivo_id' => 747,
			'epocaavaliacao_id' => 747,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 748,
			'anolectivo_id' => 748,
			'epocaavaliacao_id' => 748,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 749,
			'anolectivo_id' => 749,
			'epocaavaliacao_id' => 749,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 750,
			'anolectivo_id' => 750,
			'epocaavaliacao_id' => 750,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 751,
			'anolectivo_id' => 751,
			'epocaavaliacao_id' => 751,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 752,
			'anolectivo_id' => 752,
			'epocaavaliacao_id' => 752,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 753,
			'anolectivo_id' => 753,
			'epocaavaliacao_id' => 753,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 754,
			'anolectivo_id' => 754,
			'epocaavaliacao_id' => 754,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 755,
			'anolectivo_id' => 755,
			'epocaavaliacao_id' => 755,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 756,
			'anolectivo_id' => 756,
			'epocaavaliacao_id' => 756,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 757,
			'anolectivo_id' => 757,
			'epocaavaliacao_id' => 757,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 758,
			'anolectivo_id' => 758,
			'epocaavaliacao_id' => 758,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 759,
			'anolectivo_id' => 759,
			'epocaavaliacao_id' => 759,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 760,
			'anolectivo_id' => 760,
			'epocaavaliacao_id' => 760,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 761,
			'anolectivo_id' => 761,
			'epocaavaliacao_id' => 761,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 762,
			'anolectivo_id' => 762,
			'epocaavaliacao_id' => 762,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 763,
			'anolectivo_id' => 763,
			'epocaavaliacao_id' => 763,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 764,
			'anolectivo_id' => 764,
			'epocaavaliacao_id' => 764,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 765,
			'anolectivo_id' => 765,
			'epocaavaliacao_id' => 765,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 766,
			'anolectivo_id' => 766,
			'epocaavaliacao_id' => 766,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 767,
			'anolectivo_id' => 767,
			'epocaavaliacao_id' => 767,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 768,
			'anolectivo_id' => 768,
			'epocaavaliacao_id' => 768,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 769,
			'anolectivo_id' => 769,
			'epocaavaliacao_id' => 769,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 770,
			'anolectivo_id' => 770,
			'epocaavaliacao_id' => 770,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 771,
			'anolectivo_id' => 771,
			'epocaavaliacao_id' => 771,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 772,
			'anolectivo_id' => 772,
			'epocaavaliacao_id' => 772,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 773,
			'anolectivo_id' => 773,
			'epocaavaliacao_id' => 773,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 774,
			'anolectivo_id' => 774,
			'epocaavaliacao_id' => 774,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 775,
			'anolectivo_id' => 775,
			'epocaavaliacao_id' => 775,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 776,
			'anolectivo_id' => 776,
			'epocaavaliacao_id' => 776,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 777,
			'anolectivo_id' => 777,
			'epocaavaliacao_id' => 777,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 778,
			'anolectivo_id' => 778,
			'epocaavaliacao_id' => 778,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 779,
			'anolectivo_id' => 779,
			'epocaavaliacao_id' => 779,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 780,
			'anolectivo_id' => 780,
			'epocaavaliacao_id' => 780,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 781,
			'anolectivo_id' => 781,
			'epocaavaliacao_id' => 781,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 782,
			'anolectivo_id' => 782,
			'epocaavaliacao_id' => 782,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 783,
			'anolectivo_id' => 783,
			'epocaavaliacao_id' => 783,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 784,
			'anolectivo_id' => 784,
			'epocaavaliacao_id' => 784,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 785,
			'anolectivo_id' => 785,
			'epocaavaliacao_id' => 785,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 786,
			'anolectivo_id' => 786,
			'epocaavaliacao_id' => 786,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 787,
			'anolectivo_id' => 787,
			'epocaavaliacao_id' => 787,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 788,
			'anolectivo_id' => 788,
			'epocaavaliacao_id' => 788,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 789,
			'anolectivo_id' => 789,
			'epocaavaliacao_id' => 789,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 790,
			'anolectivo_id' => 790,
			'epocaavaliacao_id' => 790,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 791,
			'anolectivo_id' => 791,
			'epocaavaliacao_id' => 791,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 792,
			'anolectivo_id' => 792,
			'epocaavaliacao_id' => 792,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 793,
			'anolectivo_id' => 793,
			'epocaavaliacao_id' => 793,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 794,
			'anolectivo_id' => 794,
			'epocaavaliacao_id' => 794,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 795,
			'anolectivo_id' => 795,
			'epocaavaliacao_id' => 795,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 796,
			'anolectivo_id' => 796,
			'epocaavaliacao_id' => 796,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 797,
			'anolectivo_id' => 797,
			'epocaavaliacao_id' => 797,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 798,
			'anolectivo_id' => 798,
			'epocaavaliacao_id' => 798,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 799,
			'anolectivo_id' => 799,
			'epocaavaliacao_id' => 799,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 800,
			'anolectivo_id' => 800,
			'epocaavaliacao_id' => 800,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 801,
			'anolectivo_id' => 801,
			'epocaavaliacao_id' => 801,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 802,
			'anolectivo_id' => 802,
			'epocaavaliacao_id' => 802,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 803,
			'anolectivo_id' => 803,
			'epocaavaliacao_id' => 803,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 804,
			'anolectivo_id' => 804,
			'epocaavaliacao_id' => 804,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 805,
			'anolectivo_id' => 805,
			'epocaavaliacao_id' => 805,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 806,
			'anolectivo_id' => 806,
			'epocaavaliacao_id' => 806,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 807,
			'anolectivo_id' => 807,
			'epocaavaliacao_id' => 807,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 808,
			'anolectivo_id' => 808,
			'epocaavaliacao_id' => 808,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 809,
			'anolectivo_id' => 809,
			'epocaavaliacao_id' => 809,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 810,
			'anolectivo_id' => 810,
			'epocaavaliacao_id' => 810,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 811,
			'anolectivo_id' => 811,
			'epocaavaliacao_id' => 811,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 812,
			'anolectivo_id' => 812,
			'epocaavaliacao_id' => 812,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 813,
			'anolectivo_id' => 813,
			'epocaavaliacao_id' => 813,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 814,
			'anolectivo_id' => 814,
			'epocaavaliacao_id' => 814,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 815,
			'anolectivo_id' => 815,
			'epocaavaliacao_id' => 815,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 816,
			'anolectivo_id' => 816,
			'epocaavaliacao_id' => 816,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 817,
			'anolectivo_id' => 817,
			'epocaavaliacao_id' => 817,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 818,
			'anolectivo_id' => 818,
			'epocaavaliacao_id' => 818,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 819,
			'anolectivo_id' => 819,
			'epocaavaliacao_id' => 819,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 820,
			'anolectivo_id' => 820,
			'epocaavaliacao_id' => 820,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 821,
			'anolectivo_id' => 821,
			'epocaavaliacao_id' => 821,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 822,
			'anolectivo_id' => 822,
			'epocaavaliacao_id' => 822,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 823,
			'anolectivo_id' => 823,
			'epocaavaliacao_id' => 823,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 824,
			'anolectivo_id' => 824,
			'epocaavaliacao_id' => 824,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 825,
			'anolectivo_id' => 825,
			'epocaavaliacao_id' => 825,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 826,
			'anolectivo_id' => 826,
			'epocaavaliacao_id' => 826,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 827,
			'anolectivo_id' => 827,
			'epocaavaliacao_id' => 827,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 828,
			'anolectivo_id' => 828,
			'epocaavaliacao_id' => 828,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 829,
			'anolectivo_id' => 829,
			'epocaavaliacao_id' => 829,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 830,
			'anolectivo_id' => 830,
			'epocaavaliacao_id' => 830,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 831,
			'anolectivo_id' => 831,
			'epocaavaliacao_id' => 831,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 832,
			'anolectivo_id' => 832,
			'epocaavaliacao_id' => 832,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 833,
			'anolectivo_id' => 833,
			'epocaavaliacao_id' => 833,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 834,
			'anolectivo_id' => 834,
			'epocaavaliacao_id' => 834,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 835,
			'anolectivo_id' => 835,
			'epocaavaliacao_id' => 835,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 836,
			'anolectivo_id' => 836,
			'epocaavaliacao_id' => 836,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 837,
			'anolectivo_id' => 837,
			'epocaavaliacao_id' => 837,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 838,
			'anolectivo_id' => 838,
			'epocaavaliacao_id' => 838,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 839,
			'anolectivo_id' => 839,
			'epocaavaliacao_id' => 839,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 840,
			'anolectivo_id' => 840,
			'epocaavaliacao_id' => 840,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 841,
			'anolectivo_id' => 841,
			'epocaavaliacao_id' => 841,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 842,
			'anolectivo_id' => 842,
			'epocaavaliacao_id' => 842,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 843,
			'anolectivo_id' => 843,
			'epocaavaliacao_id' => 843,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 844,
			'anolectivo_id' => 844,
			'epocaavaliacao_id' => 844,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 845,
			'anolectivo_id' => 845,
			'epocaavaliacao_id' => 845,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 846,
			'anolectivo_id' => 846,
			'epocaavaliacao_id' => 846,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 847,
			'anolectivo_id' => 847,
			'epocaavaliacao_id' => 847,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 848,
			'anolectivo_id' => 848,
			'epocaavaliacao_id' => 848,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 849,
			'anolectivo_id' => 849,
			'epocaavaliacao_id' => 849,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 850,
			'anolectivo_id' => 850,
			'epocaavaliacao_id' => 850,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 851,
			'anolectivo_id' => 851,
			'epocaavaliacao_id' => 851,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 852,
			'anolectivo_id' => 852,
			'epocaavaliacao_id' => 852,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 853,
			'anolectivo_id' => 853,
			'epocaavaliacao_id' => 853,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 854,
			'anolectivo_id' => 854,
			'epocaavaliacao_id' => 854,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 855,
			'anolectivo_id' => 855,
			'epocaavaliacao_id' => 855,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 856,
			'anolectivo_id' => 856,
			'epocaavaliacao_id' => 856,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 857,
			'anolectivo_id' => 857,
			'epocaavaliacao_id' => 857,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 858,
			'anolectivo_id' => 858,
			'epocaavaliacao_id' => 858,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 859,
			'anolectivo_id' => 859,
			'epocaavaliacao_id' => 859,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 860,
			'anolectivo_id' => 860,
			'epocaavaliacao_id' => 860,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 861,
			'anolectivo_id' => 861,
			'epocaavaliacao_id' => 861,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 862,
			'anolectivo_id' => 862,
			'epocaavaliacao_id' => 862,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 863,
			'anolectivo_id' => 863,
			'epocaavaliacao_id' => 863,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 864,
			'anolectivo_id' => 864,
			'epocaavaliacao_id' => 864,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 865,
			'anolectivo_id' => 865,
			'epocaavaliacao_id' => 865,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 866,
			'anolectivo_id' => 866,
			'epocaavaliacao_id' => 866,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 867,
			'anolectivo_id' => 867,
			'epocaavaliacao_id' => 867,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 868,
			'anolectivo_id' => 868,
			'epocaavaliacao_id' => 868,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 869,
			'anolectivo_id' => 869,
			'epocaavaliacao_id' => 869,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 870,
			'anolectivo_id' => 870,
			'epocaavaliacao_id' => 870,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 871,
			'anolectivo_id' => 871,
			'epocaavaliacao_id' => 871,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 872,
			'anolectivo_id' => 872,
			'epocaavaliacao_id' => 872,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 873,
			'anolectivo_id' => 873,
			'epocaavaliacao_id' => 873,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 874,
			'anolectivo_id' => 874,
			'epocaavaliacao_id' => 874,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 875,
			'anolectivo_id' => 875,
			'epocaavaliacao_id' => 875,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 876,
			'anolectivo_id' => 876,
			'epocaavaliacao_id' => 876,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 877,
			'anolectivo_id' => 877,
			'epocaavaliacao_id' => 877,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 878,
			'anolectivo_id' => 878,
			'epocaavaliacao_id' => 878,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 879,
			'anolectivo_id' => 879,
			'epocaavaliacao_id' => 879,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 880,
			'anolectivo_id' => 880,
			'epocaavaliacao_id' => 880,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 881,
			'anolectivo_id' => 881,
			'epocaavaliacao_id' => 881,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 882,
			'anolectivo_id' => 882,
			'epocaavaliacao_id' => 882,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 883,
			'anolectivo_id' => 883,
			'epocaavaliacao_id' => 883,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 884,
			'anolectivo_id' => 884,
			'epocaavaliacao_id' => 884,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 885,
			'anolectivo_id' => 885,
			'epocaavaliacao_id' => 885,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 886,
			'anolectivo_id' => 886,
			'epocaavaliacao_id' => 886,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 887,
			'anolectivo_id' => 887,
			'epocaavaliacao_id' => 887,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 888,
			'anolectivo_id' => 888,
			'epocaavaliacao_id' => 888,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 889,
			'anolectivo_id' => 889,
			'epocaavaliacao_id' => 889,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 890,
			'anolectivo_id' => 890,
			'epocaavaliacao_id' => 890,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 891,
			'anolectivo_id' => 891,
			'epocaavaliacao_id' => 891,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 892,
			'anolectivo_id' => 892,
			'epocaavaliacao_id' => 892,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 893,
			'anolectivo_id' => 893,
			'epocaavaliacao_id' => 893,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 894,
			'anolectivo_id' => 894,
			'epocaavaliacao_id' => 894,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 895,
			'anolectivo_id' => 895,
			'epocaavaliacao_id' => 895,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 896,
			'anolectivo_id' => 896,
			'epocaavaliacao_id' => 896,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 897,
			'anolectivo_id' => 897,
			'epocaavaliacao_id' => 897,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 898,
			'anolectivo_id' => 898,
			'epocaavaliacao_id' => 898,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 899,
			'anolectivo_id' => 899,
			'epocaavaliacao_id' => 899,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 900,
			'anolectivo_id' => 900,
			'epocaavaliacao_id' => 900,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 901,
			'anolectivo_id' => 901,
			'epocaavaliacao_id' => 901,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 902,
			'anolectivo_id' => 902,
			'epocaavaliacao_id' => 902,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 903,
			'anolectivo_id' => 903,
			'epocaavaliacao_id' => 903,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 904,
			'anolectivo_id' => 904,
			'epocaavaliacao_id' => 904,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 905,
			'anolectivo_id' => 905,
			'epocaavaliacao_id' => 905,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 906,
			'anolectivo_id' => 906,
			'epocaavaliacao_id' => 906,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 907,
			'anolectivo_id' => 907,
			'epocaavaliacao_id' => 907,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 908,
			'anolectivo_id' => 908,
			'epocaavaliacao_id' => 908,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 909,
			'anolectivo_id' => 909,
			'epocaavaliacao_id' => 909,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 910,
			'anolectivo_id' => 910,
			'epocaavaliacao_id' => 910,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 911,
			'anolectivo_id' => 911,
			'epocaavaliacao_id' => 911,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 912,
			'anolectivo_id' => 912,
			'epocaavaliacao_id' => 912,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 913,
			'anolectivo_id' => 913,
			'epocaavaliacao_id' => 913,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 914,
			'anolectivo_id' => 914,
			'epocaavaliacao_id' => 914,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 915,
			'anolectivo_id' => 915,
			'epocaavaliacao_id' => 915,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 916,
			'anolectivo_id' => 916,
			'epocaavaliacao_id' => 916,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 917,
			'anolectivo_id' => 917,
			'epocaavaliacao_id' => 917,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 918,
			'anolectivo_id' => 918,
			'epocaavaliacao_id' => 918,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 919,
			'anolectivo_id' => 919,
			'epocaavaliacao_id' => 919,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 920,
			'anolectivo_id' => 920,
			'epocaavaliacao_id' => 920,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 921,
			'anolectivo_id' => 921,
			'epocaavaliacao_id' => 921,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 922,
			'anolectivo_id' => 922,
			'epocaavaliacao_id' => 922,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 923,
			'anolectivo_id' => 923,
			'epocaavaliacao_id' => 923,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 924,
			'anolectivo_id' => 924,
			'epocaavaliacao_id' => 924,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 925,
			'anolectivo_id' => 925,
			'epocaavaliacao_id' => 925,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 926,
			'anolectivo_id' => 926,
			'epocaavaliacao_id' => 926,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 927,
			'anolectivo_id' => 927,
			'epocaavaliacao_id' => 927,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 928,
			'anolectivo_id' => 928,
			'epocaavaliacao_id' => 928,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 929,
			'anolectivo_id' => 929,
			'epocaavaliacao_id' => 929,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 930,
			'anolectivo_id' => 930,
			'epocaavaliacao_id' => 930,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 931,
			'anolectivo_id' => 931,
			'epocaavaliacao_id' => 931,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 932,
			'anolectivo_id' => 932,
			'epocaavaliacao_id' => 932,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 933,
			'anolectivo_id' => 933,
			'epocaavaliacao_id' => 933,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 934,
			'anolectivo_id' => 934,
			'epocaavaliacao_id' => 934,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 935,
			'anolectivo_id' => 935,
			'epocaavaliacao_id' => 935,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 936,
			'anolectivo_id' => 936,
			'epocaavaliacao_id' => 936,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 937,
			'anolectivo_id' => 937,
			'epocaavaliacao_id' => 937,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 938,
			'anolectivo_id' => 938,
			'epocaavaliacao_id' => 938,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 939,
			'anolectivo_id' => 939,
			'epocaavaliacao_id' => 939,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 940,
			'anolectivo_id' => 940,
			'epocaavaliacao_id' => 940,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 941,
			'anolectivo_id' => 941,
			'epocaavaliacao_id' => 941,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 942,
			'anolectivo_id' => 942,
			'epocaavaliacao_id' => 942,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 943,
			'anolectivo_id' => 943,
			'epocaavaliacao_id' => 943,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 944,
			'anolectivo_id' => 944,
			'epocaavaliacao_id' => 944,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 945,
			'anolectivo_id' => 945,
			'epocaavaliacao_id' => 945,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 946,
			'anolectivo_id' => 946,
			'epocaavaliacao_id' => 946,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 947,
			'anolectivo_id' => 947,
			'epocaavaliacao_id' => 947,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 948,
			'anolectivo_id' => 948,
			'epocaavaliacao_id' => 948,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 949,
			'anolectivo_id' => 949,
			'epocaavaliacao_id' => 949,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 950,
			'anolectivo_id' => 950,
			'epocaavaliacao_id' => 950,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 951,
			'anolectivo_id' => 951,
			'epocaavaliacao_id' => 951,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 952,
			'anolectivo_id' => 952,
			'epocaavaliacao_id' => 952,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 953,
			'anolectivo_id' => 953,
			'epocaavaliacao_id' => 953,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 954,
			'anolectivo_id' => 954,
			'epocaavaliacao_id' => 954,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 955,
			'anolectivo_id' => 955,
			'epocaavaliacao_id' => 955,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 956,
			'anolectivo_id' => 956,
			'epocaavaliacao_id' => 956,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 957,
			'anolectivo_id' => 957,
			'epocaavaliacao_id' => 957,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 958,
			'anolectivo_id' => 958,
			'epocaavaliacao_id' => 958,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 959,
			'anolectivo_id' => 959,
			'epocaavaliacao_id' => 959,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 960,
			'anolectivo_id' => 960,
			'epocaavaliacao_id' => 960,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 961,
			'anolectivo_id' => 961,
			'epocaavaliacao_id' => 961,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 962,
			'anolectivo_id' => 962,
			'epocaavaliacao_id' => 962,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 963,
			'anolectivo_id' => 963,
			'epocaavaliacao_id' => 963,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 964,
			'anolectivo_id' => 964,
			'epocaavaliacao_id' => 964,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 965,
			'anolectivo_id' => 965,
			'epocaavaliacao_id' => 965,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 966,
			'anolectivo_id' => 966,
			'epocaavaliacao_id' => 966,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 967,
			'anolectivo_id' => 967,
			'epocaavaliacao_id' => 967,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 968,
			'anolectivo_id' => 968,
			'epocaavaliacao_id' => 968,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 969,
			'anolectivo_id' => 969,
			'epocaavaliacao_id' => 969,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 970,
			'anolectivo_id' => 970,
			'epocaavaliacao_id' => 970,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 971,
			'anolectivo_id' => 971,
			'epocaavaliacao_id' => 971,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 972,
			'anolectivo_id' => 972,
			'epocaavaliacao_id' => 972,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 973,
			'anolectivo_id' => 973,
			'epocaavaliacao_id' => 973,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 974,
			'anolectivo_id' => 974,
			'epocaavaliacao_id' => 974,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 975,
			'anolectivo_id' => 975,
			'epocaavaliacao_id' => 975,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 976,
			'anolectivo_id' => 976,
			'epocaavaliacao_id' => 976,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 977,
			'anolectivo_id' => 977,
			'epocaavaliacao_id' => 977,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 978,
			'anolectivo_id' => 978,
			'epocaavaliacao_id' => 978,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 979,
			'anolectivo_id' => 979,
			'epocaavaliacao_id' => 979,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 980,
			'anolectivo_id' => 980,
			'epocaavaliacao_id' => 980,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 981,
			'anolectivo_id' => 981,
			'epocaavaliacao_id' => 981,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 982,
			'anolectivo_id' => 982,
			'epocaavaliacao_id' => 982,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 983,
			'anolectivo_id' => 983,
			'epocaavaliacao_id' => 983,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 984,
			'anolectivo_id' => 984,
			'epocaavaliacao_id' => 984,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 985,
			'anolectivo_id' => 985,
			'epocaavaliacao_id' => 985,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 986,
			'anolectivo_id' => 986,
			'epocaavaliacao_id' => 986,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 987,
			'anolectivo_id' => 987,
			'epocaavaliacao_id' => 987,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 988,
			'anolectivo_id' => 988,
			'epocaavaliacao_id' => 988,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 989,
			'anolectivo_id' => 989,
			'epocaavaliacao_id' => 989,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 990,
			'anolectivo_id' => 990,
			'epocaavaliacao_id' => 990,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 991,
			'anolectivo_id' => 991,
			'epocaavaliacao_id' => 991,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 992,
			'anolectivo_id' => 992,
			'epocaavaliacao_id' => 992,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 993,
			'anolectivo_id' => 993,
			'epocaavaliacao_id' => 993,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 994,
			'anolectivo_id' => 994,
			'epocaavaliacao_id' => 994,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 995,
			'anolectivo_id' => 995,
			'epocaavaliacao_id' => 995,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 996,
			'anolectivo_id' => 996,
			'epocaavaliacao_id' => 996,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 997,
			'anolectivo_id' => 997,
			'epocaavaliacao_id' => 997,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 998,
			'anolectivo_id' => 998,
			'epocaavaliacao_id' => 998,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 999,
			'anolectivo_id' => 999,
			'epocaavaliacao_id' => 999,
			'limite' => '2012-07-25'
		),
		array(
			'id' => 1000,
			'anolectivo_id' => 1000,
			'epocaavaliacao_id' => 1000,
			'limite' => '2012-07-25'
		),
	);

}
