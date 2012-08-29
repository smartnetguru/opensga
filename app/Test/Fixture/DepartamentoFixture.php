<?php
/**
 * DepartamentoFixture
 *
 */
class DepartamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pagamento_exclusivo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 1,
			'escola_id' => 1,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 2,
			'escola_id' => 2,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 3,
			'escola_id' => 3,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 4,
			'escola_id' => 4,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 5,
			'escola_id' => 5,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 6,
			'escola_id' => 6,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 7,
			'escola_id' => 7,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 8,
			'escola_id' => 8,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 9,
			'escola_id' => 9,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 10,
			'escola_id' => 10,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 11,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 11,
			'escola_id' => 11,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 12,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 12,
			'escola_id' => 12,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 13,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 13,
			'escola_id' => 13,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 14,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 14,
			'escola_id' => 14,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 15,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 15,
			'escola_id' => 15,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 16,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 16,
			'escola_id' => 16,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 17,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 17,
			'escola_id' => 17,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 18,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 18,
			'escola_id' => 18,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 19,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 19,
			'escola_id' => 19,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 20,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 20,
			'escola_id' => 20,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 21,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 21,
			'escola_id' => 21,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 22,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 22,
			'escola_id' => 22,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 23,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 23,
			'escola_id' => 23,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 24,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 24,
			'escola_id' => 24,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 25,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 25,
			'escola_id' => 25,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 26,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 26,
			'escola_id' => 26,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 27,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 27,
			'escola_id' => 27,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 28,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 28,
			'escola_id' => 28,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 29,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 29,
			'escola_id' => 29,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 30,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 30,
			'escola_id' => 30,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 31,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 31,
			'escola_id' => 31,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 32,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 32,
			'escola_id' => 32,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 33,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 33,
			'escola_id' => 33,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 34,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 34,
			'escola_id' => 34,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 35,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 35,
			'escola_id' => 35,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 36,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 36,
			'escola_id' => 36,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 37,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 37,
			'escola_id' => 37,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 38,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 38,
			'escola_id' => 38,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 39,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 39,
			'escola_id' => 39,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 40,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 40,
			'escola_id' => 40,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 41,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 41,
			'escola_id' => 41,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 42,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 42,
			'escola_id' => 42,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 43,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 43,
			'escola_id' => 43,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 44,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 44,
			'escola_id' => 44,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 45,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 45,
			'escola_id' => 45,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 46,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 46,
			'escola_id' => 46,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 47,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 47,
			'escola_id' => 47,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 48,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 48,
			'escola_id' => 48,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 49,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 49,
			'escola_id' => 49,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 50,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 50,
			'escola_id' => 50,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 51,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 51,
			'escola_id' => 51,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 52,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 52,
			'escola_id' => 52,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 53,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 53,
			'escola_id' => 53,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 54,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 54,
			'escola_id' => 54,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 55,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 55,
			'escola_id' => 55,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 56,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 56,
			'escola_id' => 56,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 57,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 57,
			'escola_id' => 57,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 58,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 58,
			'escola_id' => 58,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 59,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 59,
			'escola_id' => 59,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 60,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 60,
			'escola_id' => 60,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 61,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 61,
			'escola_id' => 61,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 62,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 62,
			'escola_id' => 62,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 63,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 63,
			'escola_id' => 63,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 64,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 64,
			'escola_id' => 64,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 65,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 65,
			'escola_id' => 65,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 66,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 66,
			'escola_id' => 66,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 67,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 67,
			'escola_id' => 67,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 68,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 68,
			'escola_id' => 68,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 69,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 69,
			'escola_id' => 69,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 70,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 70,
			'escola_id' => 70,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 71,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 71,
			'escola_id' => 71,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 72,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 72,
			'escola_id' => 72,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 73,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 73,
			'escola_id' => 73,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 74,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 74,
			'escola_id' => 74,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 75,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 75,
			'escola_id' => 75,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 76,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 76,
			'escola_id' => 76,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 77,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 77,
			'escola_id' => 77,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 78,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 78,
			'escola_id' => 78,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 79,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 79,
			'escola_id' => 79,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 80,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 80,
			'escola_id' => 80,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 81,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 81,
			'escola_id' => 81,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 82,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 82,
			'escola_id' => 82,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 83,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 83,
			'escola_id' => 83,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 84,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 84,
			'escola_id' => 84,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 85,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 85,
			'escola_id' => 85,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 86,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 86,
			'escola_id' => 86,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 87,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 87,
			'escola_id' => 87,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 88,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 88,
			'escola_id' => 88,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 89,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 89,
			'escola_id' => 89,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 90,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 90,
			'escola_id' => 90,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 91,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 91,
			'escola_id' => 91,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 92,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 92,
			'escola_id' => 92,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 93,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 93,
			'escola_id' => 93,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 94,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 94,
			'escola_id' => 94,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 95,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 95,
			'escola_id' => 95,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 96,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 96,
			'escola_id' => 96,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 97,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 97,
			'escola_id' => 97,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 98,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 98,
			'escola_id' => 98,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 99,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 99,
			'escola_id' => 99,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 100,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 100,
			'escola_id' => 100,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 101,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 101,
			'escola_id' => 101,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 102,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 102,
			'escola_id' => 102,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 103,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 103,
			'escola_id' => 103,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 104,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 104,
			'escola_id' => 104,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 105,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 105,
			'escola_id' => 105,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 106,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 106,
			'escola_id' => 106,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 107,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 107,
			'escola_id' => 107,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 108,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 108,
			'escola_id' => 108,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 109,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 109,
			'escola_id' => 109,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 110,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 110,
			'escola_id' => 110,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 111,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 111,
			'escola_id' => 111,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 112,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 112,
			'escola_id' => 112,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 113,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 113,
			'escola_id' => 113,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 114,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 114,
			'escola_id' => 114,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 115,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 115,
			'escola_id' => 115,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 116,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 116,
			'escola_id' => 116,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 117,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 117,
			'escola_id' => 117,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 118,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 118,
			'escola_id' => 118,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 119,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 119,
			'escola_id' => 119,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 120,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 120,
			'escola_id' => 120,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 121,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 121,
			'escola_id' => 121,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 122,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 122,
			'escola_id' => 122,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 123,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 123,
			'escola_id' => 123,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 124,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 124,
			'escola_id' => 124,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 125,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 125,
			'escola_id' => 125,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 126,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 126,
			'escola_id' => 126,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 127,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 127,
			'escola_id' => 127,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 128,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 128,
			'escola_id' => 128,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 129,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 129,
			'escola_id' => 129,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 130,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 130,
			'escola_id' => 130,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 131,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 131,
			'escola_id' => 131,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 132,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 132,
			'escola_id' => 132,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 133,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 133,
			'escola_id' => 133,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 134,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 134,
			'escola_id' => 134,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 135,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 135,
			'escola_id' => 135,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 136,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 136,
			'escola_id' => 136,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 137,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 137,
			'escola_id' => 137,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 138,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 138,
			'escola_id' => 138,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 139,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 139,
			'escola_id' => 139,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 140,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 140,
			'escola_id' => 140,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 141,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 141,
			'escola_id' => 141,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 142,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 142,
			'escola_id' => 142,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 143,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 143,
			'escola_id' => 143,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 144,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 144,
			'escola_id' => 144,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 145,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 145,
			'escola_id' => 145,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 146,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 146,
			'escola_id' => 146,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 147,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 147,
			'escola_id' => 147,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 148,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 148,
			'escola_id' => 148,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 149,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 149,
			'escola_id' => 149,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 150,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 150,
			'escola_id' => 150,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 151,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 151,
			'escola_id' => 151,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 152,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 152,
			'escola_id' => 152,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 153,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 153,
			'escola_id' => 153,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 154,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 154,
			'escola_id' => 154,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 155,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 155,
			'escola_id' => 155,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 156,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 156,
			'escola_id' => 156,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 157,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 157,
			'escola_id' => 157,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 158,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 158,
			'escola_id' => 158,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 159,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 159,
			'escola_id' => 159,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 160,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 160,
			'escola_id' => 160,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 161,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 161,
			'escola_id' => 161,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 162,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 162,
			'escola_id' => 162,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 163,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 163,
			'escola_id' => 163,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 164,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 164,
			'escola_id' => 164,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 165,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 165,
			'escola_id' => 165,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 166,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 166,
			'escola_id' => 166,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 167,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 167,
			'escola_id' => 167,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 168,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 168,
			'escola_id' => 168,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 169,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 169,
			'escola_id' => 169,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 170,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 170,
			'escola_id' => 170,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 171,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 171,
			'escola_id' => 171,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 172,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 172,
			'escola_id' => 172,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 173,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 173,
			'escola_id' => 173,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 174,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 174,
			'escola_id' => 174,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 175,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 175,
			'escola_id' => 175,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 176,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 176,
			'escola_id' => 176,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 177,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 177,
			'escola_id' => 177,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 178,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 178,
			'escola_id' => 178,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 179,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 179,
			'escola_id' => 179,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 180,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 180,
			'escola_id' => 180,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 181,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 181,
			'escola_id' => 181,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 182,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 182,
			'escola_id' => 182,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 183,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 183,
			'escola_id' => 183,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 184,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 184,
			'escola_id' => 184,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 185,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 185,
			'escola_id' => 185,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 186,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 186,
			'escola_id' => 186,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 187,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 187,
			'escola_id' => 187,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 188,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 188,
			'escola_id' => 188,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 189,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 189,
			'escola_id' => 189,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 190,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 190,
			'escola_id' => 190,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 191,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 191,
			'escola_id' => 191,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 192,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 192,
			'escola_id' => 192,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 193,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 193,
			'escola_id' => 193,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 194,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 194,
			'escola_id' => 194,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 195,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 195,
			'escola_id' => 195,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 196,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 196,
			'escola_id' => 196,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 197,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 197,
			'escola_id' => 197,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 198,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 198,
			'escola_id' => 198,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 199,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 199,
			'escola_id' => 199,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 200,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 200,
			'escola_id' => 200,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 201,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 201,
			'escola_id' => 201,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 202,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 202,
			'escola_id' => 202,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 203,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 203,
			'escola_id' => 203,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 204,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 204,
			'escola_id' => 204,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 205,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 205,
			'escola_id' => 205,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 206,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 206,
			'escola_id' => 206,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 207,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 207,
			'escola_id' => 207,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 208,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 208,
			'escola_id' => 208,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 209,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 209,
			'escola_id' => 209,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 210,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 210,
			'escola_id' => 210,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 211,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 211,
			'escola_id' => 211,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 212,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 212,
			'escola_id' => 212,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 213,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 213,
			'escola_id' => 213,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 214,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 214,
			'escola_id' => 214,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 215,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 215,
			'escola_id' => 215,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 216,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 216,
			'escola_id' => 216,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 217,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 217,
			'escola_id' => 217,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 218,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 218,
			'escola_id' => 218,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 219,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 219,
			'escola_id' => 219,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 220,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 220,
			'escola_id' => 220,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 221,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 221,
			'escola_id' => 221,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 222,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 222,
			'escola_id' => 222,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 223,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 223,
			'escola_id' => 223,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 224,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 224,
			'escola_id' => 224,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 225,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 225,
			'escola_id' => 225,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 226,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 226,
			'escola_id' => 226,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 227,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 227,
			'escola_id' => 227,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 228,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 228,
			'escola_id' => 228,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 229,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 229,
			'escola_id' => 229,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 230,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 230,
			'escola_id' => 230,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 231,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 231,
			'escola_id' => 231,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 232,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 232,
			'escola_id' => 232,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 233,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 233,
			'escola_id' => 233,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 234,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 234,
			'escola_id' => 234,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 235,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 235,
			'escola_id' => 235,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 236,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 236,
			'escola_id' => 236,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 237,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 237,
			'escola_id' => 237,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 238,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 238,
			'escola_id' => 238,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 239,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 239,
			'escola_id' => 239,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 240,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 240,
			'escola_id' => 240,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 241,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 241,
			'escola_id' => 241,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 242,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 242,
			'escola_id' => 242,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 243,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 243,
			'escola_id' => 243,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 244,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 244,
			'escola_id' => 244,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 245,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 245,
			'escola_id' => 245,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 246,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 246,
			'escola_id' => 246,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 247,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 247,
			'escola_id' => 247,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 248,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 248,
			'escola_id' => 248,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 249,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 249,
			'escola_id' => 249,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 250,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 250,
			'escola_id' => 250,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 251,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 251,
			'escola_id' => 251,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 252,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 252,
			'escola_id' => 252,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 253,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 253,
			'escola_id' => 253,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 254,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 254,
			'escola_id' => 254,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 255,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 255,
			'escola_id' => 255,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 256,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 256,
			'escola_id' => 256,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 257,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 257,
			'escola_id' => 257,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 258,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 258,
			'escola_id' => 258,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 259,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 259,
			'escola_id' => 259,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 260,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 260,
			'escola_id' => 260,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 261,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 261,
			'escola_id' => 261,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 262,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 262,
			'escola_id' => 262,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 263,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 263,
			'escola_id' => 263,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 264,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 264,
			'escola_id' => 264,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 265,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 265,
			'escola_id' => 265,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 266,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 266,
			'escola_id' => 266,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 267,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 267,
			'escola_id' => 267,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 268,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 268,
			'escola_id' => 268,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 269,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 269,
			'escola_id' => 269,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 270,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 270,
			'escola_id' => 270,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 271,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 271,
			'escola_id' => 271,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 272,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 272,
			'escola_id' => 272,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 273,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 273,
			'escola_id' => 273,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 274,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 274,
			'escola_id' => 274,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 275,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 275,
			'escola_id' => 275,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 276,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 276,
			'escola_id' => 276,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 277,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 277,
			'escola_id' => 277,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 278,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 278,
			'escola_id' => 278,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 279,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 279,
			'escola_id' => 279,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 280,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 280,
			'escola_id' => 280,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 281,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 281,
			'escola_id' => 281,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 282,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 282,
			'escola_id' => 282,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 283,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 283,
			'escola_id' => 283,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 284,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 284,
			'escola_id' => 284,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 285,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 285,
			'escola_id' => 285,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 286,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 286,
			'escola_id' => 286,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 287,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 287,
			'escola_id' => 287,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 288,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 288,
			'escola_id' => 288,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 289,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 289,
			'escola_id' => 289,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 290,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 290,
			'escola_id' => 290,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 291,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 291,
			'escola_id' => 291,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 292,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 292,
			'escola_id' => 292,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 293,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 293,
			'escola_id' => 293,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 294,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 294,
			'escola_id' => 294,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 295,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 295,
			'escola_id' => 295,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 296,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 296,
			'escola_id' => 296,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 297,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 297,
			'escola_id' => 297,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 298,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 298,
			'escola_id' => 298,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 299,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 299,
			'escola_id' => 299,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 300,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 300,
			'escola_id' => 300,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 301,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 301,
			'escola_id' => 301,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 302,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 302,
			'escola_id' => 302,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 303,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 303,
			'escola_id' => 303,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 304,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 304,
			'escola_id' => 304,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 305,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 305,
			'escola_id' => 305,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 306,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 306,
			'escola_id' => 306,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 307,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 307,
			'escola_id' => 307,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 308,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 308,
			'escola_id' => 308,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 309,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 309,
			'escola_id' => 309,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 310,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 310,
			'escola_id' => 310,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 311,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 311,
			'escola_id' => 311,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 312,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 312,
			'escola_id' => 312,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 313,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 313,
			'escola_id' => 313,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 314,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 314,
			'escola_id' => 314,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 315,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 315,
			'escola_id' => 315,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 316,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 316,
			'escola_id' => 316,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 317,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 317,
			'escola_id' => 317,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 318,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 318,
			'escola_id' => 318,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 319,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 319,
			'escola_id' => 319,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 320,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 320,
			'escola_id' => 320,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 321,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 321,
			'escola_id' => 321,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 322,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 322,
			'escola_id' => 322,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 323,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 323,
			'escola_id' => 323,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 324,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 324,
			'escola_id' => 324,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 325,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 325,
			'escola_id' => 325,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 326,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 326,
			'escola_id' => 326,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 327,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 327,
			'escola_id' => 327,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 328,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 328,
			'escola_id' => 328,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 329,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 329,
			'escola_id' => 329,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 330,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 330,
			'escola_id' => 330,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 331,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 331,
			'escola_id' => 331,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 332,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 332,
			'escola_id' => 332,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 333,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 333,
			'escola_id' => 333,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 334,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 334,
			'escola_id' => 334,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 335,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 335,
			'escola_id' => 335,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 336,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 336,
			'escola_id' => 336,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 337,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 337,
			'escola_id' => 337,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 338,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 338,
			'escola_id' => 338,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 339,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 339,
			'escola_id' => 339,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 340,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 340,
			'escola_id' => 340,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 341,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 341,
			'escola_id' => 341,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 342,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 342,
			'escola_id' => 342,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 343,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 343,
			'escola_id' => 343,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 344,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 344,
			'escola_id' => 344,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 345,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 345,
			'escola_id' => 345,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 346,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 346,
			'escola_id' => 346,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 347,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 347,
			'escola_id' => 347,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 348,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 348,
			'escola_id' => 348,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 349,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 349,
			'escola_id' => 349,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 350,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 350,
			'escola_id' => 350,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 351,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 351,
			'escola_id' => 351,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 352,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 352,
			'escola_id' => 352,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 353,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 353,
			'escola_id' => 353,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 354,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 354,
			'escola_id' => 354,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 355,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 355,
			'escola_id' => 355,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 356,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 356,
			'escola_id' => 356,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 357,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 357,
			'escola_id' => 357,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 358,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 358,
			'escola_id' => 358,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 359,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 359,
			'escola_id' => 359,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 360,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 360,
			'escola_id' => 360,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 361,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 361,
			'escola_id' => 361,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 362,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 362,
			'escola_id' => 362,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 363,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 363,
			'escola_id' => 363,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 364,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 364,
			'escola_id' => 364,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 365,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 365,
			'escola_id' => 365,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 366,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 366,
			'escola_id' => 366,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 367,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 367,
			'escola_id' => 367,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 368,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 368,
			'escola_id' => 368,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 369,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 369,
			'escola_id' => 369,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 370,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 370,
			'escola_id' => 370,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 371,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 371,
			'escola_id' => 371,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 372,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 372,
			'escola_id' => 372,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 373,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 373,
			'escola_id' => 373,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 374,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 374,
			'escola_id' => 374,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 375,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 375,
			'escola_id' => 375,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 376,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 376,
			'escola_id' => 376,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 377,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 377,
			'escola_id' => 377,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 378,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 378,
			'escola_id' => 378,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 379,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 379,
			'escola_id' => 379,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 380,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 380,
			'escola_id' => 380,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 381,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 381,
			'escola_id' => 381,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 382,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 382,
			'escola_id' => 382,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 383,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 383,
			'escola_id' => 383,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 384,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 384,
			'escola_id' => 384,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 385,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 385,
			'escola_id' => 385,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 386,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 386,
			'escola_id' => 386,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 387,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 387,
			'escola_id' => 387,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 388,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 388,
			'escola_id' => 388,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 389,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 389,
			'escola_id' => 389,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 390,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 390,
			'escola_id' => 390,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 391,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 391,
			'escola_id' => 391,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 392,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 392,
			'escola_id' => 392,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 393,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 393,
			'escola_id' => 393,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 394,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 394,
			'escola_id' => 394,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 395,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 395,
			'escola_id' => 395,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 396,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 396,
			'escola_id' => 396,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 397,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 397,
			'escola_id' => 397,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 398,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 398,
			'escola_id' => 398,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 399,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 399,
			'escola_id' => 399,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 400,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 400,
			'escola_id' => 400,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 401,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 401,
			'escola_id' => 401,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 402,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 402,
			'escola_id' => 402,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 403,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 403,
			'escola_id' => 403,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 404,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 404,
			'escola_id' => 404,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 405,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 405,
			'escola_id' => 405,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 406,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 406,
			'escola_id' => 406,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 407,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 407,
			'escola_id' => 407,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 408,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 408,
			'escola_id' => 408,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 409,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 409,
			'escola_id' => 409,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 410,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 410,
			'escola_id' => 410,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 411,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 411,
			'escola_id' => 411,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 412,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 412,
			'escola_id' => 412,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 413,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 413,
			'escola_id' => 413,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 414,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 414,
			'escola_id' => 414,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 415,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 415,
			'escola_id' => 415,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 416,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 416,
			'escola_id' => 416,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 417,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 417,
			'escola_id' => 417,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 418,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 418,
			'escola_id' => 418,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 419,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 419,
			'escola_id' => 419,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 420,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 420,
			'escola_id' => 420,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 421,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 421,
			'escola_id' => 421,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 422,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 422,
			'escola_id' => 422,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 423,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 423,
			'escola_id' => 423,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 424,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 424,
			'escola_id' => 424,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 425,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 425,
			'escola_id' => 425,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 426,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 426,
			'escola_id' => 426,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 427,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 427,
			'escola_id' => 427,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 428,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 428,
			'escola_id' => 428,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 429,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 429,
			'escola_id' => 429,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 430,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 430,
			'escola_id' => 430,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 431,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 431,
			'escola_id' => 431,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 432,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 432,
			'escola_id' => 432,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 433,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 433,
			'escola_id' => 433,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 434,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 434,
			'escola_id' => 434,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 435,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 435,
			'escola_id' => 435,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 436,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 436,
			'escola_id' => 436,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 437,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 437,
			'escola_id' => 437,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 438,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 438,
			'escola_id' => 438,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 439,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 439,
			'escola_id' => 439,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 440,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 440,
			'escola_id' => 440,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 441,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 441,
			'escola_id' => 441,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 442,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 442,
			'escola_id' => 442,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 443,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 443,
			'escola_id' => 443,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 444,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 444,
			'escola_id' => 444,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 445,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 445,
			'escola_id' => 445,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 446,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 446,
			'escola_id' => 446,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 447,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 447,
			'escola_id' => 447,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 448,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 448,
			'escola_id' => 448,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 449,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 449,
			'escola_id' => 449,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 450,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 450,
			'escola_id' => 450,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 451,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 451,
			'escola_id' => 451,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 452,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 452,
			'escola_id' => 452,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 453,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 453,
			'escola_id' => 453,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 454,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 454,
			'escola_id' => 454,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 455,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 455,
			'escola_id' => 455,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 456,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 456,
			'escola_id' => 456,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 457,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 457,
			'escola_id' => 457,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 458,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 458,
			'escola_id' => 458,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 459,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 459,
			'escola_id' => 459,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 460,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 460,
			'escola_id' => 460,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 461,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 461,
			'escola_id' => 461,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 462,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 462,
			'escola_id' => 462,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 463,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 463,
			'escola_id' => 463,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 464,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 464,
			'escola_id' => 464,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 465,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 465,
			'escola_id' => 465,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 466,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 466,
			'escola_id' => 466,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 467,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 467,
			'escola_id' => 467,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 468,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 468,
			'escola_id' => 468,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 469,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 469,
			'escola_id' => 469,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 470,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 470,
			'escola_id' => 470,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 471,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 471,
			'escola_id' => 471,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 472,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 472,
			'escola_id' => 472,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 473,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 473,
			'escola_id' => 473,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 474,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 474,
			'escola_id' => 474,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 475,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 475,
			'escola_id' => 475,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 476,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 476,
			'escola_id' => 476,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 477,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 477,
			'escola_id' => 477,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 478,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 478,
			'escola_id' => 478,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 479,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 479,
			'escola_id' => 479,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 480,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 480,
			'escola_id' => 480,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 481,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 481,
			'escola_id' => 481,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 482,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 482,
			'escola_id' => 482,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 483,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 483,
			'escola_id' => 483,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 484,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 484,
			'escola_id' => 484,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 485,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 485,
			'escola_id' => 485,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 486,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 486,
			'escola_id' => 486,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 487,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 487,
			'escola_id' => 487,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 488,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 488,
			'escola_id' => 488,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 489,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 489,
			'escola_id' => 489,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 490,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 490,
			'escola_id' => 490,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 491,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 491,
			'escola_id' => 491,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 492,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 492,
			'escola_id' => 492,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 493,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 493,
			'escola_id' => 493,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 494,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 494,
			'escola_id' => 494,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 495,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 495,
			'escola_id' => 495,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 496,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 496,
			'escola_id' => 496,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 497,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 497,
			'escola_id' => 497,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 498,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 498,
			'escola_id' => 498,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 499,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 499,
			'escola_id' => 499,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 500,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 500,
			'escola_id' => 500,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 501,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 501,
			'escola_id' => 501,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 502,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 502,
			'escola_id' => 502,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 503,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 503,
			'escola_id' => 503,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 504,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 504,
			'escola_id' => 504,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 505,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 505,
			'escola_id' => 505,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 506,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 506,
			'escola_id' => 506,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 507,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 507,
			'escola_id' => 507,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 508,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 508,
			'escola_id' => 508,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 509,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 509,
			'escola_id' => 509,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 510,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 510,
			'escola_id' => 510,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 511,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 511,
			'escola_id' => 511,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 512,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 512,
			'escola_id' => 512,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 513,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 513,
			'escola_id' => 513,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 514,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 514,
			'escola_id' => 514,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 515,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 515,
			'escola_id' => 515,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 516,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 516,
			'escola_id' => 516,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 517,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 517,
			'escola_id' => 517,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 518,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 518,
			'escola_id' => 518,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 519,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 519,
			'escola_id' => 519,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 520,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 520,
			'escola_id' => 520,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 521,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 521,
			'escola_id' => 521,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 522,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 522,
			'escola_id' => 522,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 523,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 523,
			'escola_id' => 523,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 524,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 524,
			'escola_id' => 524,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 525,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 525,
			'escola_id' => 525,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 526,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 526,
			'escola_id' => 526,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 527,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 527,
			'escola_id' => 527,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 528,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 528,
			'escola_id' => 528,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 529,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 529,
			'escola_id' => 529,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 530,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 530,
			'escola_id' => 530,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 531,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 531,
			'escola_id' => 531,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 532,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 532,
			'escola_id' => 532,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 533,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 533,
			'escola_id' => 533,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 534,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 534,
			'escola_id' => 534,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 535,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 535,
			'escola_id' => 535,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 536,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 536,
			'escola_id' => 536,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 537,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 537,
			'escola_id' => 537,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 538,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 538,
			'escola_id' => 538,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 539,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 539,
			'escola_id' => 539,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 540,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 540,
			'escola_id' => 540,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 541,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 541,
			'escola_id' => 541,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 542,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 542,
			'escola_id' => 542,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 543,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 543,
			'escola_id' => 543,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 544,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 544,
			'escola_id' => 544,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 545,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 545,
			'escola_id' => 545,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 546,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 546,
			'escola_id' => 546,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 547,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 547,
			'escola_id' => 547,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 548,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 548,
			'escola_id' => 548,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 549,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 549,
			'escola_id' => 549,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 550,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 550,
			'escola_id' => 550,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 551,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 551,
			'escola_id' => 551,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 552,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 552,
			'escola_id' => 552,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 553,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 553,
			'escola_id' => 553,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 554,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 554,
			'escola_id' => 554,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 555,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 555,
			'escola_id' => 555,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 556,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 556,
			'escola_id' => 556,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 557,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 557,
			'escola_id' => 557,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 558,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 558,
			'escola_id' => 558,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 559,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 559,
			'escola_id' => 559,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 560,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 560,
			'escola_id' => 560,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 561,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 561,
			'escola_id' => 561,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 562,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 562,
			'escola_id' => 562,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 563,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 563,
			'escola_id' => 563,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 564,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 564,
			'escola_id' => 564,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 565,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 565,
			'escola_id' => 565,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 566,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 566,
			'escola_id' => 566,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 567,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 567,
			'escola_id' => 567,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 568,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 568,
			'escola_id' => 568,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 569,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 569,
			'escola_id' => 569,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 570,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 570,
			'escola_id' => 570,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 571,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 571,
			'escola_id' => 571,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 572,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 572,
			'escola_id' => 572,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 573,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 573,
			'escola_id' => 573,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 574,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 574,
			'escola_id' => 574,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 575,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 575,
			'escola_id' => 575,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 576,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 576,
			'escola_id' => 576,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 577,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 577,
			'escola_id' => 577,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 578,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 578,
			'escola_id' => 578,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 579,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 579,
			'escola_id' => 579,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 580,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 580,
			'escola_id' => 580,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 581,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 581,
			'escola_id' => 581,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 582,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 582,
			'escola_id' => 582,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 583,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 583,
			'escola_id' => 583,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 584,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 584,
			'escola_id' => 584,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 585,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 585,
			'escola_id' => 585,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 586,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 586,
			'escola_id' => 586,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 587,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 587,
			'escola_id' => 587,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 588,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 588,
			'escola_id' => 588,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 589,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 589,
			'escola_id' => 589,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 590,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 590,
			'escola_id' => 590,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 591,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 591,
			'escola_id' => 591,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 592,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 592,
			'escola_id' => 592,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 593,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 593,
			'escola_id' => 593,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 594,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 594,
			'escola_id' => 594,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 595,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 595,
			'escola_id' => 595,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 596,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 596,
			'escola_id' => 596,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 597,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 597,
			'escola_id' => 597,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 598,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 598,
			'escola_id' => 598,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 599,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 599,
			'escola_id' => 599,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 600,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 600,
			'escola_id' => 600,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 601,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 601,
			'escola_id' => 601,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 602,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 602,
			'escola_id' => 602,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 603,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 603,
			'escola_id' => 603,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 604,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 604,
			'escola_id' => 604,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 605,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 605,
			'escola_id' => 605,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 606,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 606,
			'escola_id' => 606,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 607,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 607,
			'escola_id' => 607,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 608,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 608,
			'escola_id' => 608,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 609,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 609,
			'escola_id' => 609,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 610,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 610,
			'escola_id' => 610,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 611,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 611,
			'escola_id' => 611,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 612,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 612,
			'escola_id' => 612,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 613,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 613,
			'escola_id' => 613,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 614,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 614,
			'escola_id' => 614,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 615,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 615,
			'escola_id' => 615,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 616,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 616,
			'escola_id' => 616,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 617,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 617,
			'escola_id' => 617,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 618,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 618,
			'escola_id' => 618,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 619,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 619,
			'escola_id' => 619,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 620,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 620,
			'escola_id' => 620,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 621,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 621,
			'escola_id' => 621,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 622,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 622,
			'escola_id' => 622,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 623,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 623,
			'escola_id' => 623,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 624,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 624,
			'escola_id' => 624,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 625,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 625,
			'escola_id' => 625,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 626,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 626,
			'escola_id' => 626,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 627,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 627,
			'escola_id' => 627,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 628,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 628,
			'escola_id' => 628,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 629,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 629,
			'escola_id' => 629,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 630,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 630,
			'escola_id' => 630,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 631,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 631,
			'escola_id' => 631,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 632,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 632,
			'escola_id' => 632,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 633,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 633,
			'escola_id' => 633,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 634,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 634,
			'escola_id' => 634,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 635,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 635,
			'escola_id' => 635,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 636,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 636,
			'escola_id' => 636,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 637,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 637,
			'escola_id' => 637,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 638,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 638,
			'escola_id' => 638,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 639,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 639,
			'escola_id' => 639,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 640,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 640,
			'escola_id' => 640,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 641,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 641,
			'escola_id' => 641,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 642,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 642,
			'escola_id' => 642,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 643,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 643,
			'escola_id' => 643,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 644,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 644,
			'escola_id' => 644,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 645,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 645,
			'escola_id' => 645,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 646,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 646,
			'escola_id' => 646,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 647,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 647,
			'escola_id' => 647,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 648,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 648,
			'escola_id' => 648,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 649,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 649,
			'escola_id' => 649,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 650,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 650,
			'escola_id' => 650,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 651,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 651,
			'escola_id' => 651,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 652,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 652,
			'escola_id' => 652,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 653,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 653,
			'escola_id' => 653,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 654,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 654,
			'escola_id' => 654,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 655,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 655,
			'escola_id' => 655,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 656,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 656,
			'escola_id' => 656,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 657,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 657,
			'escola_id' => 657,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 658,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 658,
			'escola_id' => 658,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 659,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 659,
			'escola_id' => 659,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 660,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 660,
			'escola_id' => 660,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 661,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 661,
			'escola_id' => 661,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 662,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 662,
			'escola_id' => 662,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 663,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 663,
			'escola_id' => 663,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 664,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 664,
			'escola_id' => 664,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 665,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 665,
			'escola_id' => 665,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 666,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 666,
			'escola_id' => 666,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 667,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 667,
			'escola_id' => 667,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 668,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 668,
			'escola_id' => 668,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 669,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 669,
			'escola_id' => 669,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 670,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 670,
			'escola_id' => 670,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 671,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 671,
			'escola_id' => 671,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 672,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 672,
			'escola_id' => 672,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 673,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 673,
			'escola_id' => 673,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 674,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 674,
			'escola_id' => 674,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 675,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 675,
			'escola_id' => 675,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 676,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 676,
			'escola_id' => 676,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 677,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 677,
			'escola_id' => 677,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 678,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 678,
			'escola_id' => 678,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 679,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 679,
			'escola_id' => 679,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 680,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 680,
			'escola_id' => 680,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 681,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 681,
			'escola_id' => 681,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 682,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 682,
			'escola_id' => 682,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 683,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 683,
			'escola_id' => 683,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 684,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 684,
			'escola_id' => 684,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 685,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 685,
			'escola_id' => 685,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 686,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 686,
			'escola_id' => 686,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 687,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 687,
			'escola_id' => 687,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 688,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 688,
			'escola_id' => 688,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 689,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 689,
			'escola_id' => 689,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 690,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 690,
			'escola_id' => 690,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 691,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 691,
			'escola_id' => 691,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 692,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 692,
			'escola_id' => 692,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 693,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 693,
			'escola_id' => 693,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 694,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 694,
			'escola_id' => 694,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 695,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 695,
			'escola_id' => 695,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 696,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 696,
			'escola_id' => 696,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 697,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 697,
			'escola_id' => 697,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 698,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 698,
			'escola_id' => 698,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 699,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 699,
			'escola_id' => 699,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 700,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 700,
			'escola_id' => 700,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 701,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 701,
			'escola_id' => 701,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 702,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 702,
			'escola_id' => 702,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 703,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 703,
			'escola_id' => 703,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 704,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 704,
			'escola_id' => 704,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 705,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 705,
			'escola_id' => 705,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 706,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 706,
			'escola_id' => 706,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 707,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 707,
			'escola_id' => 707,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 708,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 708,
			'escola_id' => 708,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 709,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 709,
			'escola_id' => 709,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 710,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 710,
			'escola_id' => 710,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 711,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 711,
			'escola_id' => 711,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 712,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 712,
			'escola_id' => 712,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 713,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 713,
			'escola_id' => 713,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 714,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 714,
			'escola_id' => 714,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 715,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 715,
			'escola_id' => 715,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 716,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 716,
			'escola_id' => 716,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 717,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 717,
			'escola_id' => 717,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 718,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 718,
			'escola_id' => 718,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 719,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 719,
			'escola_id' => 719,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 720,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 720,
			'escola_id' => 720,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 721,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 721,
			'escola_id' => 721,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 722,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 722,
			'escola_id' => 722,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 723,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 723,
			'escola_id' => 723,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 724,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 724,
			'escola_id' => 724,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 725,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 725,
			'escola_id' => 725,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 726,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 726,
			'escola_id' => 726,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 727,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 727,
			'escola_id' => 727,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 728,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 728,
			'escola_id' => 728,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 729,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 729,
			'escola_id' => 729,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 730,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 730,
			'escola_id' => 730,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 731,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 731,
			'escola_id' => 731,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 732,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 732,
			'escola_id' => 732,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 733,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 733,
			'escola_id' => 733,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 734,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 734,
			'escola_id' => 734,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 735,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 735,
			'escola_id' => 735,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 736,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 736,
			'escola_id' => 736,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 737,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 737,
			'escola_id' => 737,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 738,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 738,
			'escola_id' => 738,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 739,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 739,
			'escola_id' => 739,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 740,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 740,
			'escola_id' => 740,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 741,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 741,
			'escola_id' => 741,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 742,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 742,
			'escola_id' => 742,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 743,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 743,
			'escola_id' => 743,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 744,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 744,
			'escola_id' => 744,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 745,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 745,
			'escola_id' => 745,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 746,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 746,
			'escola_id' => 746,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 747,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 747,
			'escola_id' => 747,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 748,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 748,
			'escola_id' => 748,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 749,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 749,
			'escola_id' => 749,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 750,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 750,
			'escola_id' => 750,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 751,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 751,
			'escola_id' => 751,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 752,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 752,
			'escola_id' => 752,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 753,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 753,
			'escola_id' => 753,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 754,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 754,
			'escola_id' => 754,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 755,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 755,
			'escola_id' => 755,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 756,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 756,
			'escola_id' => 756,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 757,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 757,
			'escola_id' => 757,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 758,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 758,
			'escola_id' => 758,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 759,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 759,
			'escola_id' => 759,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 760,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 760,
			'escola_id' => 760,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 761,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 761,
			'escola_id' => 761,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 762,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 762,
			'escola_id' => 762,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 763,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 763,
			'escola_id' => 763,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 764,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 764,
			'escola_id' => 764,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 765,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 765,
			'escola_id' => 765,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 766,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 766,
			'escola_id' => 766,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 767,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 767,
			'escola_id' => 767,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 768,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 768,
			'escola_id' => 768,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 769,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 769,
			'escola_id' => 769,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 770,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 770,
			'escola_id' => 770,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 771,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 771,
			'escola_id' => 771,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 772,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 772,
			'escola_id' => 772,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 773,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 773,
			'escola_id' => 773,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 774,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 774,
			'escola_id' => 774,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 775,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 775,
			'escola_id' => 775,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 776,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 776,
			'escola_id' => 776,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 777,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 777,
			'escola_id' => 777,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 778,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 778,
			'escola_id' => 778,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 779,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 779,
			'escola_id' => 779,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 780,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 780,
			'escola_id' => 780,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 781,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 781,
			'escola_id' => 781,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 782,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 782,
			'escola_id' => 782,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 783,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 783,
			'escola_id' => 783,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 784,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 784,
			'escola_id' => 784,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 785,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 785,
			'escola_id' => 785,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 786,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 786,
			'escola_id' => 786,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 787,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 787,
			'escola_id' => 787,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 788,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 788,
			'escola_id' => 788,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 789,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 789,
			'escola_id' => 789,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 790,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 790,
			'escola_id' => 790,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 791,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 791,
			'escola_id' => 791,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 792,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 792,
			'escola_id' => 792,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 793,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 793,
			'escola_id' => 793,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 794,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 794,
			'escola_id' => 794,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 795,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 795,
			'escola_id' => 795,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 796,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 796,
			'escola_id' => 796,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 797,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 797,
			'escola_id' => 797,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 798,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 798,
			'escola_id' => 798,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 799,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 799,
			'escola_id' => 799,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 800,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 800,
			'escola_id' => 800,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 801,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 801,
			'escola_id' => 801,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 802,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 802,
			'escola_id' => 802,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 803,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 803,
			'escola_id' => 803,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 804,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 804,
			'escola_id' => 804,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 805,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 805,
			'escola_id' => 805,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 806,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 806,
			'escola_id' => 806,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 807,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 807,
			'escola_id' => 807,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 808,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 808,
			'escola_id' => 808,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 809,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 809,
			'escola_id' => 809,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 810,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 810,
			'escola_id' => 810,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 811,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 811,
			'escola_id' => 811,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 812,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 812,
			'escola_id' => 812,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 813,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 813,
			'escola_id' => 813,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 814,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 814,
			'escola_id' => 814,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 815,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 815,
			'escola_id' => 815,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 816,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 816,
			'escola_id' => 816,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 817,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 817,
			'escola_id' => 817,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 818,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 818,
			'escola_id' => 818,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 819,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 819,
			'escola_id' => 819,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 820,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 820,
			'escola_id' => 820,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 821,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 821,
			'escola_id' => 821,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 822,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 822,
			'escola_id' => 822,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 823,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 823,
			'escola_id' => 823,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 824,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 824,
			'escola_id' => 824,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 825,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 825,
			'escola_id' => 825,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 826,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 826,
			'escola_id' => 826,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 827,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 827,
			'escola_id' => 827,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 828,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 828,
			'escola_id' => 828,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 829,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 829,
			'escola_id' => 829,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 830,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 830,
			'escola_id' => 830,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 831,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 831,
			'escola_id' => 831,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 832,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 832,
			'escola_id' => 832,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 833,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 833,
			'escola_id' => 833,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 834,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 834,
			'escola_id' => 834,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 835,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 835,
			'escola_id' => 835,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 836,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 836,
			'escola_id' => 836,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 837,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 837,
			'escola_id' => 837,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 838,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 838,
			'escola_id' => 838,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 839,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 839,
			'escola_id' => 839,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 840,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 840,
			'escola_id' => 840,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 841,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 841,
			'escola_id' => 841,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 842,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 842,
			'escola_id' => 842,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 843,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 843,
			'escola_id' => 843,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 844,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 844,
			'escola_id' => 844,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 845,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 845,
			'escola_id' => 845,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 846,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 846,
			'escola_id' => 846,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 847,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 847,
			'escola_id' => 847,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 848,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 848,
			'escola_id' => 848,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 849,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 849,
			'escola_id' => 849,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 850,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 850,
			'escola_id' => 850,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 851,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 851,
			'escola_id' => 851,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 852,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 852,
			'escola_id' => 852,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 853,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 853,
			'escola_id' => 853,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 854,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 854,
			'escola_id' => 854,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 855,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 855,
			'escola_id' => 855,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 856,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 856,
			'escola_id' => 856,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 857,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 857,
			'escola_id' => 857,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 858,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 858,
			'escola_id' => 858,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 859,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 859,
			'escola_id' => 859,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 860,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 860,
			'escola_id' => 860,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 861,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 861,
			'escola_id' => 861,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 862,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 862,
			'escola_id' => 862,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 863,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 863,
			'escola_id' => 863,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 864,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 864,
			'escola_id' => 864,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 865,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 865,
			'escola_id' => 865,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 866,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 866,
			'escola_id' => 866,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 867,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 867,
			'escola_id' => 867,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 868,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 868,
			'escola_id' => 868,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 869,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 869,
			'escola_id' => 869,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 870,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 870,
			'escola_id' => 870,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 871,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 871,
			'escola_id' => 871,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 872,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 872,
			'escola_id' => 872,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 873,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 873,
			'escola_id' => 873,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 874,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 874,
			'escola_id' => 874,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 875,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 875,
			'escola_id' => 875,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 876,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 876,
			'escola_id' => 876,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 877,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 877,
			'escola_id' => 877,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 878,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 878,
			'escola_id' => 878,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 879,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 879,
			'escola_id' => 879,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 880,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 880,
			'escola_id' => 880,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 881,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 881,
			'escola_id' => 881,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 882,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 882,
			'escola_id' => 882,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 883,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 883,
			'escola_id' => 883,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 884,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 884,
			'escola_id' => 884,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 885,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 885,
			'escola_id' => 885,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 886,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 886,
			'escola_id' => 886,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 887,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 887,
			'escola_id' => 887,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 888,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 888,
			'escola_id' => 888,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 889,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 889,
			'escola_id' => 889,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 890,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 890,
			'escola_id' => 890,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 891,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 891,
			'escola_id' => 891,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 892,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 892,
			'escola_id' => 892,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 893,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 893,
			'escola_id' => 893,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 894,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 894,
			'escola_id' => 894,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 895,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 895,
			'escola_id' => 895,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 896,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 896,
			'escola_id' => 896,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 897,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 897,
			'escola_id' => 897,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 898,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 898,
			'escola_id' => 898,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 899,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 899,
			'escola_id' => 899,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 900,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 900,
			'escola_id' => 900,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 901,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 901,
			'escola_id' => 901,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 902,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 902,
			'escola_id' => 902,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 903,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 903,
			'escola_id' => 903,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 904,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 904,
			'escola_id' => 904,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 905,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 905,
			'escola_id' => 905,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 906,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 906,
			'escola_id' => 906,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 907,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 907,
			'escola_id' => 907,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 908,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 908,
			'escola_id' => 908,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 909,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 909,
			'escola_id' => 909,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 910,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 910,
			'escola_id' => 910,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 911,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 911,
			'escola_id' => 911,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 912,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 912,
			'escola_id' => 912,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 913,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 913,
			'escola_id' => 913,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 914,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 914,
			'escola_id' => 914,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 915,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 915,
			'escola_id' => 915,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 916,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 916,
			'escola_id' => 916,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 917,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 917,
			'escola_id' => 917,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 918,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 918,
			'escola_id' => 918,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 919,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 919,
			'escola_id' => 919,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 920,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 920,
			'escola_id' => 920,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 921,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 921,
			'escola_id' => 921,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 922,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 922,
			'escola_id' => 922,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 923,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 923,
			'escola_id' => 923,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 924,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 924,
			'escola_id' => 924,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 925,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 925,
			'escola_id' => 925,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 926,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 926,
			'escola_id' => 926,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 927,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 927,
			'escola_id' => 927,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 928,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 928,
			'escola_id' => 928,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 929,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 929,
			'escola_id' => 929,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 930,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 930,
			'escola_id' => 930,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 931,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 931,
			'escola_id' => 931,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 932,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 932,
			'escola_id' => 932,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 933,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 933,
			'escola_id' => 933,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 934,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 934,
			'escola_id' => 934,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 935,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 935,
			'escola_id' => 935,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 936,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 936,
			'escola_id' => 936,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 937,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 937,
			'escola_id' => 937,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 938,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 938,
			'escola_id' => 938,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 939,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 939,
			'escola_id' => 939,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 940,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 940,
			'escola_id' => 940,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 941,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 941,
			'escola_id' => 941,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 942,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 942,
			'escola_id' => 942,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 943,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 943,
			'escola_id' => 943,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 944,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 944,
			'escola_id' => 944,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 945,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 945,
			'escola_id' => 945,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 946,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 946,
			'escola_id' => 946,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 947,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 947,
			'escola_id' => 947,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 948,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 948,
			'escola_id' => 948,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 949,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 949,
			'escola_id' => 949,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 950,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 950,
			'escola_id' => 950,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 951,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 951,
			'escola_id' => 951,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 952,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 952,
			'escola_id' => 952,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 953,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 953,
			'escola_id' => 953,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 954,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 954,
			'escola_id' => 954,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 955,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 955,
			'escola_id' => 955,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 956,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 956,
			'escola_id' => 956,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 957,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 957,
			'escola_id' => 957,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 958,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 958,
			'escola_id' => 958,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 959,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 959,
			'escola_id' => 959,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 960,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 960,
			'escola_id' => 960,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 961,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 961,
			'escola_id' => 961,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 962,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 962,
			'escola_id' => 962,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 963,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 963,
			'escola_id' => 963,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 964,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 964,
			'escola_id' => 964,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 965,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 965,
			'escola_id' => 965,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 966,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 966,
			'escola_id' => 966,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 967,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 967,
			'escola_id' => 967,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 968,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 968,
			'escola_id' => 968,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 969,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 969,
			'escola_id' => 969,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 970,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 970,
			'escola_id' => 970,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 971,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 971,
			'escola_id' => 971,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 972,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 972,
			'escola_id' => 972,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 973,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 973,
			'escola_id' => 973,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 974,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 974,
			'escola_id' => 974,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 975,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 975,
			'escola_id' => 975,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 976,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 976,
			'escola_id' => 976,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 977,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 977,
			'escola_id' => 977,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 978,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 978,
			'escola_id' => 978,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 979,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 979,
			'escola_id' => 979,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 980,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 980,
			'escola_id' => 980,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 981,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 981,
			'escola_id' => 981,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 982,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 982,
			'escola_id' => 982,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 983,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 983,
			'escola_id' => 983,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 984,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 984,
			'escola_id' => 984,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 985,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 985,
			'escola_id' => 985,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 986,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 986,
			'escola_id' => 986,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 987,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 987,
			'escola_id' => 987,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 988,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 988,
			'escola_id' => 988,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 989,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 989,
			'escola_id' => 989,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 990,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 990,
			'escola_id' => 990,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 991,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 991,
			'escola_id' => 991,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 992,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 992,
			'escola_id' => 992,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 993,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 993,
			'escola_id' => 993,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 994,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 994,
			'escola_id' => 994,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 995,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 995,
			'escola_id' => 995,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 996,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 996,
			'escola_id' => 996,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 997,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 997,
			'escola_id' => 997,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 998,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 998,
			'escola_id' => 998,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 999,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 999,
			'escola_id' => 999,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 1000,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 1000,
			'escola_id' => 1000,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
	);

}
