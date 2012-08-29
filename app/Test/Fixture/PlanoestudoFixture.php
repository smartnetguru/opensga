<?php
/**
 * PlanoestudoFixture
 *
 */
class PlanoestudoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'duracao' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestresano' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero_ciclos' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'curso_id' => 1,
			'duracao' => 1,
			'semestresano' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 2,
			'duracao' => 2,
			'semestresano' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 3,
			'duracao' => 3,
			'semestresano' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 4,
			'duracao' => 4,
			'semestresano' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 5,
			'duracao' => 5,
			'semestresano' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 6,
			'duracao' => 6,
			'semestresano' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 7,
			'duracao' => 7,
			'semestresano' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 8,
			'duracao' => 8,
			'semestresano' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 9,
			'duracao' => 9,
			'semestresano' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 10,
			'duracao' => 10,
			'semestresano' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 10
		),
		array(
			'id' => 11,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 11,
			'duracao' => 11,
			'semestresano' => 11,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 11
		),
		array(
			'id' => 12,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 12,
			'duracao' => 12,
			'semestresano' => 12,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 12
		),
		array(
			'id' => 13,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 13,
			'duracao' => 13,
			'semestresano' => 13,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 13
		),
		array(
			'id' => 14,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 14,
			'duracao' => 14,
			'semestresano' => 14,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 14
		),
		array(
			'id' => 15,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 15,
			'duracao' => 15,
			'semestresano' => 15,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 15
		),
		array(
			'id' => 16,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 16,
			'duracao' => 16,
			'semestresano' => 16,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 16
		),
		array(
			'id' => 17,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 17,
			'duracao' => 17,
			'semestresano' => 17,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 17
		),
		array(
			'id' => 18,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 18,
			'duracao' => 18,
			'semestresano' => 18,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 18
		),
		array(
			'id' => 19,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 19,
			'duracao' => 19,
			'semestresano' => 19,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 19
		),
		array(
			'id' => 20,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 20,
			'duracao' => 20,
			'semestresano' => 20,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 20
		),
		array(
			'id' => 21,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 21,
			'duracao' => 21,
			'semestresano' => 21,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 21
		),
		array(
			'id' => 22,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 22,
			'duracao' => 22,
			'semestresano' => 22,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 22
		),
		array(
			'id' => 23,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 23,
			'duracao' => 23,
			'semestresano' => 23,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 23
		),
		array(
			'id' => 24,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 24,
			'duracao' => 24,
			'semestresano' => 24,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 24
		),
		array(
			'id' => 25,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 25,
			'duracao' => 25,
			'semestresano' => 25,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 25
		),
		array(
			'id' => 26,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 26,
			'duracao' => 26,
			'semestresano' => 26,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 26
		),
		array(
			'id' => 27,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 27,
			'duracao' => 27,
			'semestresano' => 27,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 27
		),
		array(
			'id' => 28,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 28,
			'duracao' => 28,
			'semestresano' => 28,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 28
		),
		array(
			'id' => 29,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 29,
			'duracao' => 29,
			'semestresano' => 29,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 29
		),
		array(
			'id' => 30,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 30,
			'duracao' => 30,
			'semestresano' => 30,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 30
		),
		array(
			'id' => 31,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 31,
			'duracao' => 31,
			'semestresano' => 31,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 31
		),
		array(
			'id' => 32,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 32,
			'duracao' => 32,
			'semestresano' => 32,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 32
		),
		array(
			'id' => 33,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 33,
			'duracao' => 33,
			'semestresano' => 33,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 33
		),
		array(
			'id' => 34,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 34,
			'duracao' => 34,
			'semestresano' => 34,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 34
		),
		array(
			'id' => 35,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 35,
			'duracao' => 35,
			'semestresano' => 35,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 35
		),
		array(
			'id' => 36,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 36,
			'duracao' => 36,
			'semestresano' => 36,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 36
		),
		array(
			'id' => 37,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 37,
			'duracao' => 37,
			'semestresano' => 37,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 37
		),
		array(
			'id' => 38,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 38,
			'duracao' => 38,
			'semestresano' => 38,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 38
		),
		array(
			'id' => 39,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 39,
			'duracao' => 39,
			'semestresano' => 39,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 39
		),
		array(
			'id' => 40,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 40,
			'duracao' => 40,
			'semestresano' => 40,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 40
		),
		array(
			'id' => 41,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 41,
			'duracao' => 41,
			'semestresano' => 41,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 41
		),
		array(
			'id' => 42,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 42,
			'duracao' => 42,
			'semestresano' => 42,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 42
		),
		array(
			'id' => 43,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 43,
			'duracao' => 43,
			'semestresano' => 43,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 43
		),
		array(
			'id' => 44,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 44,
			'duracao' => 44,
			'semestresano' => 44,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 44
		),
		array(
			'id' => 45,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 45,
			'duracao' => 45,
			'semestresano' => 45,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 45
		),
		array(
			'id' => 46,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 46,
			'duracao' => 46,
			'semestresano' => 46,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 46
		),
		array(
			'id' => 47,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 47,
			'duracao' => 47,
			'semestresano' => 47,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 47
		),
		array(
			'id' => 48,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 48,
			'duracao' => 48,
			'semestresano' => 48,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 48
		),
		array(
			'id' => 49,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 49,
			'duracao' => 49,
			'semestresano' => 49,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 49
		),
		array(
			'id' => 50,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 50,
			'duracao' => 50,
			'semestresano' => 50,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 50
		),
		array(
			'id' => 51,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 51,
			'duracao' => 51,
			'semestresano' => 51,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 51
		),
		array(
			'id' => 52,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 52,
			'duracao' => 52,
			'semestresano' => 52,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 52
		),
		array(
			'id' => 53,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 53,
			'duracao' => 53,
			'semestresano' => 53,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 53
		),
		array(
			'id' => 54,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 54,
			'duracao' => 54,
			'semestresano' => 54,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 54
		),
		array(
			'id' => 55,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 55,
			'duracao' => 55,
			'semestresano' => 55,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 55
		),
		array(
			'id' => 56,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 56,
			'duracao' => 56,
			'semestresano' => 56,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 56
		),
		array(
			'id' => 57,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 57,
			'duracao' => 57,
			'semestresano' => 57,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 57
		),
		array(
			'id' => 58,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 58,
			'duracao' => 58,
			'semestresano' => 58,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 58
		),
		array(
			'id' => 59,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 59,
			'duracao' => 59,
			'semestresano' => 59,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 59
		),
		array(
			'id' => 60,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 60,
			'duracao' => 60,
			'semestresano' => 60,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 60
		),
		array(
			'id' => 61,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 61,
			'duracao' => 61,
			'semestresano' => 61,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 61
		),
		array(
			'id' => 62,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 62,
			'duracao' => 62,
			'semestresano' => 62,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 62
		),
		array(
			'id' => 63,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 63,
			'duracao' => 63,
			'semestresano' => 63,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 63
		),
		array(
			'id' => 64,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 64,
			'duracao' => 64,
			'semestresano' => 64,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 64
		),
		array(
			'id' => 65,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 65,
			'duracao' => 65,
			'semestresano' => 65,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 65
		),
		array(
			'id' => 66,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 66,
			'duracao' => 66,
			'semestresano' => 66,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 66
		),
		array(
			'id' => 67,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 67,
			'duracao' => 67,
			'semestresano' => 67,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 67
		),
		array(
			'id' => 68,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 68,
			'duracao' => 68,
			'semestresano' => 68,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 68
		),
		array(
			'id' => 69,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 69,
			'duracao' => 69,
			'semestresano' => 69,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 69
		),
		array(
			'id' => 70,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 70,
			'duracao' => 70,
			'semestresano' => 70,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 70
		),
		array(
			'id' => 71,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 71,
			'duracao' => 71,
			'semestresano' => 71,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 71
		),
		array(
			'id' => 72,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 72,
			'duracao' => 72,
			'semestresano' => 72,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 72
		),
		array(
			'id' => 73,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 73,
			'duracao' => 73,
			'semestresano' => 73,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 73
		),
		array(
			'id' => 74,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 74,
			'duracao' => 74,
			'semestresano' => 74,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 74
		),
		array(
			'id' => 75,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 75,
			'duracao' => 75,
			'semestresano' => 75,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 75
		),
		array(
			'id' => 76,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 76,
			'duracao' => 76,
			'semestresano' => 76,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 76
		),
		array(
			'id' => 77,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 77,
			'duracao' => 77,
			'semestresano' => 77,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 77
		),
		array(
			'id' => 78,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 78,
			'duracao' => 78,
			'semestresano' => 78,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 78
		),
		array(
			'id' => 79,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 79,
			'duracao' => 79,
			'semestresano' => 79,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 79
		),
		array(
			'id' => 80,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 80,
			'duracao' => 80,
			'semestresano' => 80,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 80
		),
		array(
			'id' => 81,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 81,
			'duracao' => 81,
			'semestresano' => 81,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 81
		),
		array(
			'id' => 82,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 82,
			'duracao' => 82,
			'semestresano' => 82,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 82
		),
		array(
			'id' => 83,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 83,
			'duracao' => 83,
			'semestresano' => 83,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 83
		),
		array(
			'id' => 84,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 84,
			'duracao' => 84,
			'semestresano' => 84,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 84
		),
		array(
			'id' => 85,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 85,
			'duracao' => 85,
			'semestresano' => 85,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 85
		),
		array(
			'id' => 86,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 86,
			'duracao' => 86,
			'semestresano' => 86,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 86
		),
		array(
			'id' => 87,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 87,
			'duracao' => 87,
			'semestresano' => 87,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 87
		),
		array(
			'id' => 88,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 88,
			'duracao' => 88,
			'semestresano' => 88,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 88
		),
		array(
			'id' => 89,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 89,
			'duracao' => 89,
			'semestresano' => 89,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 89
		),
		array(
			'id' => 90,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 90,
			'duracao' => 90,
			'semestresano' => 90,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 90
		),
		array(
			'id' => 91,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 91,
			'duracao' => 91,
			'semestresano' => 91,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 91
		),
		array(
			'id' => 92,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 92,
			'duracao' => 92,
			'semestresano' => 92,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 92
		),
		array(
			'id' => 93,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 93,
			'duracao' => 93,
			'semestresano' => 93,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 93
		),
		array(
			'id' => 94,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 94,
			'duracao' => 94,
			'semestresano' => 94,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 94
		),
		array(
			'id' => 95,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 95,
			'duracao' => 95,
			'semestresano' => 95,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 95
		),
		array(
			'id' => 96,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 96,
			'duracao' => 96,
			'semestresano' => 96,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 96
		),
		array(
			'id' => 97,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 97,
			'duracao' => 97,
			'semestresano' => 97,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 97
		),
		array(
			'id' => 98,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 98,
			'duracao' => 98,
			'semestresano' => 98,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 98
		),
		array(
			'id' => 99,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 99,
			'duracao' => 99,
			'semestresano' => 99,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 99
		),
		array(
			'id' => 100,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 100,
			'duracao' => 100,
			'semestresano' => 100,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 100
		),
		array(
			'id' => 101,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 101,
			'duracao' => 101,
			'semestresano' => 101,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 101
		),
		array(
			'id' => 102,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 102,
			'duracao' => 102,
			'semestresano' => 102,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 102
		),
		array(
			'id' => 103,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 103,
			'duracao' => 103,
			'semestresano' => 103,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 103
		),
		array(
			'id' => 104,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 104,
			'duracao' => 104,
			'semestresano' => 104,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 104
		),
		array(
			'id' => 105,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 105,
			'duracao' => 105,
			'semestresano' => 105,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 105
		),
		array(
			'id' => 106,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 106,
			'duracao' => 106,
			'semestresano' => 106,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 106
		),
		array(
			'id' => 107,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 107,
			'duracao' => 107,
			'semestresano' => 107,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 107
		),
		array(
			'id' => 108,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 108,
			'duracao' => 108,
			'semestresano' => 108,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 108
		),
		array(
			'id' => 109,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 109,
			'duracao' => 109,
			'semestresano' => 109,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 109
		),
		array(
			'id' => 110,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 110,
			'duracao' => 110,
			'semestresano' => 110,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 110
		),
		array(
			'id' => 111,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 111,
			'duracao' => 111,
			'semestresano' => 111,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 111
		),
		array(
			'id' => 112,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 112,
			'duracao' => 112,
			'semestresano' => 112,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 112
		),
		array(
			'id' => 113,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 113,
			'duracao' => 113,
			'semestresano' => 113,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 113
		),
		array(
			'id' => 114,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 114,
			'duracao' => 114,
			'semestresano' => 114,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 114
		),
		array(
			'id' => 115,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 115,
			'duracao' => 115,
			'semestresano' => 115,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 115
		),
		array(
			'id' => 116,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 116,
			'duracao' => 116,
			'semestresano' => 116,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 116
		),
		array(
			'id' => 117,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 117,
			'duracao' => 117,
			'semestresano' => 117,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 117
		),
		array(
			'id' => 118,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 118,
			'duracao' => 118,
			'semestresano' => 118,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 118
		),
		array(
			'id' => 119,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 119,
			'duracao' => 119,
			'semestresano' => 119,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 119
		),
		array(
			'id' => 120,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 120,
			'duracao' => 120,
			'semestresano' => 120,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 120
		),
		array(
			'id' => 121,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 121,
			'duracao' => 121,
			'semestresano' => 121,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 121
		),
		array(
			'id' => 122,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 122,
			'duracao' => 122,
			'semestresano' => 122,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 122
		),
		array(
			'id' => 123,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 123,
			'duracao' => 123,
			'semestresano' => 123,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 123
		),
		array(
			'id' => 124,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 124,
			'duracao' => 124,
			'semestresano' => 124,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 124
		),
		array(
			'id' => 125,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 125,
			'duracao' => 125,
			'semestresano' => 125,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 125
		),
		array(
			'id' => 126,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 126,
			'duracao' => 126,
			'semestresano' => 126,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 126
		),
		array(
			'id' => 127,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 127,
			'duracao' => 127,
			'semestresano' => 127,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 127
		),
		array(
			'id' => 128,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 128,
			'duracao' => 128,
			'semestresano' => 128,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 128
		),
		array(
			'id' => 129,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 129,
			'duracao' => 129,
			'semestresano' => 129,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 129
		),
		array(
			'id' => 130,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 130,
			'duracao' => 130,
			'semestresano' => 130,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 130
		),
		array(
			'id' => 131,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 131,
			'duracao' => 131,
			'semestresano' => 131,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 131
		),
		array(
			'id' => 132,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 132,
			'duracao' => 132,
			'semestresano' => 132,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 132
		),
		array(
			'id' => 133,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 133,
			'duracao' => 133,
			'semestresano' => 133,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 133
		),
		array(
			'id' => 134,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 134,
			'duracao' => 134,
			'semestresano' => 134,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 134
		),
		array(
			'id' => 135,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 135,
			'duracao' => 135,
			'semestresano' => 135,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 135
		),
		array(
			'id' => 136,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 136,
			'duracao' => 136,
			'semestresano' => 136,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 136
		),
		array(
			'id' => 137,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 137,
			'duracao' => 137,
			'semestresano' => 137,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 137
		),
		array(
			'id' => 138,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 138,
			'duracao' => 138,
			'semestresano' => 138,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 138
		),
		array(
			'id' => 139,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 139,
			'duracao' => 139,
			'semestresano' => 139,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 139
		),
		array(
			'id' => 140,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 140,
			'duracao' => 140,
			'semestresano' => 140,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 140
		),
		array(
			'id' => 141,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 141,
			'duracao' => 141,
			'semestresano' => 141,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 141
		),
		array(
			'id' => 142,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 142,
			'duracao' => 142,
			'semestresano' => 142,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 142
		),
		array(
			'id' => 143,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 143,
			'duracao' => 143,
			'semestresano' => 143,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 143
		),
		array(
			'id' => 144,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 144,
			'duracao' => 144,
			'semestresano' => 144,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 144
		),
		array(
			'id' => 145,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 145,
			'duracao' => 145,
			'semestresano' => 145,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 145
		),
		array(
			'id' => 146,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 146,
			'duracao' => 146,
			'semestresano' => 146,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 146
		),
		array(
			'id' => 147,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 147,
			'duracao' => 147,
			'semestresano' => 147,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 147
		),
		array(
			'id' => 148,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 148,
			'duracao' => 148,
			'semestresano' => 148,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 148
		),
		array(
			'id' => 149,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 149,
			'duracao' => 149,
			'semestresano' => 149,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 149
		),
		array(
			'id' => 150,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 150,
			'duracao' => 150,
			'semestresano' => 150,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 150
		),
		array(
			'id' => 151,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 151,
			'duracao' => 151,
			'semestresano' => 151,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 151
		),
		array(
			'id' => 152,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 152,
			'duracao' => 152,
			'semestresano' => 152,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 152
		),
		array(
			'id' => 153,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 153,
			'duracao' => 153,
			'semestresano' => 153,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 153
		),
		array(
			'id' => 154,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 154,
			'duracao' => 154,
			'semestresano' => 154,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 154
		),
		array(
			'id' => 155,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 155,
			'duracao' => 155,
			'semestresano' => 155,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 155
		),
		array(
			'id' => 156,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 156,
			'duracao' => 156,
			'semestresano' => 156,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 156
		),
		array(
			'id' => 157,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 157,
			'duracao' => 157,
			'semestresano' => 157,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 157
		),
		array(
			'id' => 158,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 158,
			'duracao' => 158,
			'semestresano' => 158,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 158
		),
		array(
			'id' => 159,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 159,
			'duracao' => 159,
			'semestresano' => 159,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 159
		),
		array(
			'id' => 160,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 160,
			'duracao' => 160,
			'semestresano' => 160,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 160
		),
		array(
			'id' => 161,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 161,
			'duracao' => 161,
			'semestresano' => 161,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 161
		),
		array(
			'id' => 162,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 162,
			'duracao' => 162,
			'semestresano' => 162,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 162
		),
		array(
			'id' => 163,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 163,
			'duracao' => 163,
			'semestresano' => 163,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 163
		),
		array(
			'id' => 164,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 164,
			'duracao' => 164,
			'semestresano' => 164,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 164
		),
		array(
			'id' => 165,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 165,
			'duracao' => 165,
			'semestresano' => 165,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 165
		),
		array(
			'id' => 166,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 166,
			'duracao' => 166,
			'semestresano' => 166,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 166
		),
		array(
			'id' => 167,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 167,
			'duracao' => 167,
			'semestresano' => 167,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 167
		),
		array(
			'id' => 168,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 168,
			'duracao' => 168,
			'semestresano' => 168,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 168
		),
		array(
			'id' => 169,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 169,
			'duracao' => 169,
			'semestresano' => 169,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 169
		),
		array(
			'id' => 170,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 170,
			'duracao' => 170,
			'semestresano' => 170,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 170
		),
		array(
			'id' => 171,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 171,
			'duracao' => 171,
			'semestresano' => 171,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 171
		),
		array(
			'id' => 172,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 172,
			'duracao' => 172,
			'semestresano' => 172,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 172
		),
		array(
			'id' => 173,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 173,
			'duracao' => 173,
			'semestresano' => 173,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 173
		),
		array(
			'id' => 174,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 174,
			'duracao' => 174,
			'semestresano' => 174,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 174
		),
		array(
			'id' => 175,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 175,
			'duracao' => 175,
			'semestresano' => 175,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 175
		),
		array(
			'id' => 176,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 176,
			'duracao' => 176,
			'semestresano' => 176,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 176
		),
		array(
			'id' => 177,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 177,
			'duracao' => 177,
			'semestresano' => 177,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 177
		),
		array(
			'id' => 178,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 178,
			'duracao' => 178,
			'semestresano' => 178,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 178
		),
		array(
			'id' => 179,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 179,
			'duracao' => 179,
			'semestresano' => 179,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 179
		),
		array(
			'id' => 180,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 180,
			'duracao' => 180,
			'semestresano' => 180,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 180
		),
		array(
			'id' => 181,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 181,
			'duracao' => 181,
			'semestresano' => 181,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 181
		),
		array(
			'id' => 182,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 182,
			'duracao' => 182,
			'semestresano' => 182,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 182
		),
		array(
			'id' => 183,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 183,
			'duracao' => 183,
			'semestresano' => 183,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 183
		),
		array(
			'id' => 184,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 184,
			'duracao' => 184,
			'semestresano' => 184,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 184
		),
		array(
			'id' => 185,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 185,
			'duracao' => 185,
			'semestresano' => 185,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 185
		),
		array(
			'id' => 186,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 186,
			'duracao' => 186,
			'semestresano' => 186,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 186
		),
		array(
			'id' => 187,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 187,
			'duracao' => 187,
			'semestresano' => 187,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 187
		),
		array(
			'id' => 188,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 188,
			'duracao' => 188,
			'semestresano' => 188,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 188
		),
		array(
			'id' => 189,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 189,
			'duracao' => 189,
			'semestresano' => 189,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 189
		),
		array(
			'id' => 190,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 190,
			'duracao' => 190,
			'semestresano' => 190,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 190
		),
		array(
			'id' => 191,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 191,
			'duracao' => 191,
			'semestresano' => 191,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 191
		),
		array(
			'id' => 192,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 192,
			'duracao' => 192,
			'semestresano' => 192,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 192
		),
		array(
			'id' => 193,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 193,
			'duracao' => 193,
			'semestresano' => 193,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 193
		),
		array(
			'id' => 194,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 194,
			'duracao' => 194,
			'semestresano' => 194,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 194
		),
		array(
			'id' => 195,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 195,
			'duracao' => 195,
			'semestresano' => 195,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 195
		),
		array(
			'id' => 196,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 196,
			'duracao' => 196,
			'semestresano' => 196,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 196
		),
		array(
			'id' => 197,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 197,
			'duracao' => 197,
			'semestresano' => 197,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 197
		),
		array(
			'id' => 198,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 198,
			'duracao' => 198,
			'semestresano' => 198,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 198
		),
		array(
			'id' => 199,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 199,
			'duracao' => 199,
			'semestresano' => 199,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 199
		),
		array(
			'id' => 200,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 200,
			'duracao' => 200,
			'semestresano' => 200,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 200
		),
		array(
			'id' => 201,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 201,
			'duracao' => 201,
			'semestresano' => 201,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 201
		),
		array(
			'id' => 202,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 202,
			'duracao' => 202,
			'semestresano' => 202,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 202
		),
		array(
			'id' => 203,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 203,
			'duracao' => 203,
			'semestresano' => 203,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 203
		),
		array(
			'id' => 204,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 204,
			'duracao' => 204,
			'semestresano' => 204,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 204
		),
		array(
			'id' => 205,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 205,
			'duracao' => 205,
			'semestresano' => 205,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 205
		),
		array(
			'id' => 206,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 206,
			'duracao' => 206,
			'semestresano' => 206,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 206
		),
		array(
			'id' => 207,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 207,
			'duracao' => 207,
			'semestresano' => 207,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 207
		),
		array(
			'id' => 208,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 208,
			'duracao' => 208,
			'semestresano' => 208,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 208
		),
		array(
			'id' => 209,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 209,
			'duracao' => 209,
			'semestresano' => 209,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 209
		),
		array(
			'id' => 210,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 210,
			'duracao' => 210,
			'semestresano' => 210,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 210
		),
		array(
			'id' => 211,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 211,
			'duracao' => 211,
			'semestresano' => 211,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 211
		),
		array(
			'id' => 212,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 212,
			'duracao' => 212,
			'semestresano' => 212,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 212
		),
		array(
			'id' => 213,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 213,
			'duracao' => 213,
			'semestresano' => 213,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 213
		),
		array(
			'id' => 214,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 214,
			'duracao' => 214,
			'semestresano' => 214,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 214
		),
		array(
			'id' => 215,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 215,
			'duracao' => 215,
			'semestresano' => 215,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 215
		),
		array(
			'id' => 216,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 216,
			'duracao' => 216,
			'semestresano' => 216,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 216
		),
		array(
			'id' => 217,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 217,
			'duracao' => 217,
			'semestresano' => 217,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 217
		),
		array(
			'id' => 218,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 218,
			'duracao' => 218,
			'semestresano' => 218,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 218
		),
		array(
			'id' => 219,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 219,
			'duracao' => 219,
			'semestresano' => 219,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 219
		),
		array(
			'id' => 220,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 220,
			'duracao' => 220,
			'semestresano' => 220,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 220
		),
		array(
			'id' => 221,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 221,
			'duracao' => 221,
			'semestresano' => 221,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 221
		),
		array(
			'id' => 222,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 222,
			'duracao' => 222,
			'semestresano' => 222,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 222
		),
		array(
			'id' => 223,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 223,
			'duracao' => 223,
			'semestresano' => 223,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 223
		),
		array(
			'id' => 224,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 224,
			'duracao' => 224,
			'semestresano' => 224,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 224
		),
		array(
			'id' => 225,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 225,
			'duracao' => 225,
			'semestresano' => 225,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 225
		),
		array(
			'id' => 226,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 226,
			'duracao' => 226,
			'semestresano' => 226,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 226
		),
		array(
			'id' => 227,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 227,
			'duracao' => 227,
			'semestresano' => 227,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 227
		),
		array(
			'id' => 228,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 228,
			'duracao' => 228,
			'semestresano' => 228,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 228
		),
		array(
			'id' => 229,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 229,
			'duracao' => 229,
			'semestresano' => 229,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 229
		),
		array(
			'id' => 230,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 230,
			'duracao' => 230,
			'semestresano' => 230,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 230
		),
		array(
			'id' => 231,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 231,
			'duracao' => 231,
			'semestresano' => 231,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 231
		),
		array(
			'id' => 232,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 232,
			'duracao' => 232,
			'semestresano' => 232,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 232
		),
		array(
			'id' => 233,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 233,
			'duracao' => 233,
			'semestresano' => 233,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 233
		),
		array(
			'id' => 234,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 234,
			'duracao' => 234,
			'semestresano' => 234,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 234
		),
		array(
			'id' => 235,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 235,
			'duracao' => 235,
			'semestresano' => 235,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 235
		),
		array(
			'id' => 236,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 236,
			'duracao' => 236,
			'semestresano' => 236,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 236
		),
		array(
			'id' => 237,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 237,
			'duracao' => 237,
			'semestresano' => 237,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 237
		),
		array(
			'id' => 238,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 238,
			'duracao' => 238,
			'semestresano' => 238,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 238
		),
		array(
			'id' => 239,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 239,
			'duracao' => 239,
			'semestresano' => 239,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 239
		),
		array(
			'id' => 240,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 240,
			'duracao' => 240,
			'semestresano' => 240,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 240
		),
		array(
			'id' => 241,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 241,
			'duracao' => 241,
			'semestresano' => 241,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 241
		),
		array(
			'id' => 242,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 242,
			'duracao' => 242,
			'semestresano' => 242,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 242
		),
		array(
			'id' => 243,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 243,
			'duracao' => 243,
			'semestresano' => 243,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 243
		),
		array(
			'id' => 244,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 244,
			'duracao' => 244,
			'semestresano' => 244,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 244
		),
		array(
			'id' => 245,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 245,
			'duracao' => 245,
			'semestresano' => 245,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 245
		),
		array(
			'id' => 246,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 246,
			'duracao' => 246,
			'semestresano' => 246,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 246
		),
		array(
			'id' => 247,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 247,
			'duracao' => 247,
			'semestresano' => 247,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 247
		),
		array(
			'id' => 248,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 248,
			'duracao' => 248,
			'semestresano' => 248,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 248
		),
		array(
			'id' => 249,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 249,
			'duracao' => 249,
			'semestresano' => 249,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 249
		),
		array(
			'id' => 250,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 250,
			'duracao' => 250,
			'semestresano' => 250,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 250
		),
		array(
			'id' => 251,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 251,
			'duracao' => 251,
			'semestresano' => 251,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 251
		),
		array(
			'id' => 252,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 252,
			'duracao' => 252,
			'semestresano' => 252,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 252
		),
		array(
			'id' => 253,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 253,
			'duracao' => 253,
			'semestresano' => 253,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 253
		),
		array(
			'id' => 254,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 254,
			'duracao' => 254,
			'semestresano' => 254,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 254
		),
		array(
			'id' => 255,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 255,
			'duracao' => 255,
			'semestresano' => 255,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 255
		),
		array(
			'id' => 256,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 256,
			'duracao' => 256,
			'semestresano' => 256,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 256
		),
		array(
			'id' => 257,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 257,
			'duracao' => 257,
			'semestresano' => 257,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 257
		),
		array(
			'id' => 258,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 258,
			'duracao' => 258,
			'semestresano' => 258,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 258
		),
		array(
			'id' => 259,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 259,
			'duracao' => 259,
			'semestresano' => 259,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 259
		),
		array(
			'id' => 260,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 260,
			'duracao' => 260,
			'semestresano' => 260,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 260
		),
		array(
			'id' => 261,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 261,
			'duracao' => 261,
			'semestresano' => 261,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 261
		),
		array(
			'id' => 262,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 262,
			'duracao' => 262,
			'semestresano' => 262,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 262
		),
		array(
			'id' => 263,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 263,
			'duracao' => 263,
			'semestresano' => 263,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 263
		),
		array(
			'id' => 264,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 264,
			'duracao' => 264,
			'semestresano' => 264,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 264
		),
		array(
			'id' => 265,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 265,
			'duracao' => 265,
			'semestresano' => 265,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 265
		),
		array(
			'id' => 266,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 266,
			'duracao' => 266,
			'semestresano' => 266,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 266
		),
		array(
			'id' => 267,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 267,
			'duracao' => 267,
			'semestresano' => 267,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 267
		),
		array(
			'id' => 268,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 268,
			'duracao' => 268,
			'semestresano' => 268,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 268
		),
		array(
			'id' => 269,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 269,
			'duracao' => 269,
			'semestresano' => 269,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 269
		),
		array(
			'id' => 270,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 270,
			'duracao' => 270,
			'semestresano' => 270,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 270
		),
		array(
			'id' => 271,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 271,
			'duracao' => 271,
			'semestresano' => 271,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 271
		),
		array(
			'id' => 272,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 272,
			'duracao' => 272,
			'semestresano' => 272,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 272
		),
		array(
			'id' => 273,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 273,
			'duracao' => 273,
			'semestresano' => 273,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 273
		),
		array(
			'id' => 274,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 274,
			'duracao' => 274,
			'semestresano' => 274,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 274
		),
		array(
			'id' => 275,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 275,
			'duracao' => 275,
			'semestresano' => 275,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 275
		),
		array(
			'id' => 276,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 276,
			'duracao' => 276,
			'semestresano' => 276,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 276
		),
		array(
			'id' => 277,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 277,
			'duracao' => 277,
			'semestresano' => 277,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 277
		),
		array(
			'id' => 278,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 278,
			'duracao' => 278,
			'semestresano' => 278,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 278
		),
		array(
			'id' => 279,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 279,
			'duracao' => 279,
			'semestresano' => 279,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 279
		),
		array(
			'id' => 280,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 280,
			'duracao' => 280,
			'semestresano' => 280,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 280
		),
		array(
			'id' => 281,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 281,
			'duracao' => 281,
			'semestresano' => 281,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 281
		),
		array(
			'id' => 282,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 282,
			'duracao' => 282,
			'semestresano' => 282,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 282
		),
		array(
			'id' => 283,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 283,
			'duracao' => 283,
			'semestresano' => 283,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 283
		),
		array(
			'id' => 284,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 284,
			'duracao' => 284,
			'semestresano' => 284,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 284
		),
		array(
			'id' => 285,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 285,
			'duracao' => 285,
			'semestresano' => 285,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 285
		),
		array(
			'id' => 286,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 286,
			'duracao' => 286,
			'semestresano' => 286,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 286
		),
		array(
			'id' => 287,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 287,
			'duracao' => 287,
			'semestresano' => 287,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 287
		),
		array(
			'id' => 288,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 288,
			'duracao' => 288,
			'semestresano' => 288,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 288
		),
		array(
			'id' => 289,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 289,
			'duracao' => 289,
			'semestresano' => 289,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 289
		),
		array(
			'id' => 290,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 290,
			'duracao' => 290,
			'semestresano' => 290,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 290
		),
		array(
			'id' => 291,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 291,
			'duracao' => 291,
			'semestresano' => 291,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 291
		),
		array(
			'id' => 292,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 292,
			'duracao' => 292,
			'semestresano' => 292,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 292
		),
		array(
			'id' => 293,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 293,
			'duracao' => 293,
			'semestresano' => 293,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 293
		),
		array(
			'id' => 294,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 294,
			'duracao' => 294,
			'semestresano' => 294,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 294
		),
		array(
			'id' => 295,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 295,
			'duracao' => 295,
			'semestresano' => 295,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 295
		),
		array(
			'id' => 296,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 296,
			'duracao' => 296,
			'semestresano' => 296,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 296
		),
		array(
			'id' => 297,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 297,
			'duracao' => 297,
			'semestresano' => 297,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 297
		),
		array(
			'id' => 298,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 298,
			'duracao' => 298,
			'semestresano' => 298,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 298
		),
		array(
			'id' => 299,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 299,
			'duracao' => 299,
			'semestresano' => 299,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 299
		),
		array(
			'id' => 300,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 300,
			'duracao' => 300,
			'semestresano' => 300,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 300
		),
		array(
			'id' => 301,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 301,
			'duracao' => 301,
			'semestresano' => 301,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 301
		),
		array(
			'id' => 302,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 302,
			'duracao' => 302,
			'semestresano' => 302,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 302
		),
		array(
			'id' => 303,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 303,
			'duracao' => 303,
			'semestresano' => 303,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 303
		),
		array(
			'id' => 304,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 304,
			'duracao' => 304,
			'semestresano' => 304,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 304
		),
		array(
			'id' => 305,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 305,
			'duracao' => 305,
			'semestresano' => 305,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 305
		),
		array(
			'id' => 306,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 306,
			'duracao' => 306,
			'semestresano' => 306,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 306
		),
		array(
			'id' => 307,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 307,
			'duracao' => 307,
			'semestresano' => 307,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 307
		),
		array(
			'id' => 308,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 308,
			'duracao' => 308,
			'semestresano' => 308,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 308
		),
		array(
			'id' => 309,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 309,
			'duracao' => 309,
			'semestresano' => 309,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 309
		),
		array(
			'id' => 310,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 310,
			'duracao' => 310,
			'semestresano' => 310,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 310
		),
		array(
			'id' => 311,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 311,
			'duracao' => 311,
			'semestresano' => 311,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 311
		),
		array(
			'id' => 312,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 312,
			'duracao' => 312,
			'semestresano' => 312,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 312
		),
		array(
			'id' => 313,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 313,
			'duracao' => 313,
			'semestresano' => 313,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 313
		),
		array(
			'id' => 314,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 314,
			'duracao' => 314,
			'semestresano' => 314,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 314
		),
		array(
			'id' => 315,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 315,
			'duracao' => 315,
			'semestresano' => 315,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 315
		),
		array(
			'id' => 316,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 316,
			'duracao' => 316,
			'semestresano' => 316,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 316
		),
		array(
			'id' => 317,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 317,
			'duracao' => 317,
			'semestresano' => 317,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 317
		),
		array(
			'id' => 318,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 318,
			'duracao' => 318,
			'semestresano' => 318,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 318
		),
		array(
			'id' => 319,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 319,
			'duracao' => 319,
			'semestresano' => 319,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 319
		),
		array(
			'id' => 320,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 320,
			'duracao' => 320,
			'semestresano' => 320,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 320
		),
		array(
			'id' => 321,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 321,
			'duracao' => 321,
			'semestresano' => 321,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 321
		),
		array(
			'id' => 322,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 322,
			'duracao' => 322,
			'semestresano' => 322,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 322
		),
		array(
			'id' => 323,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 323,
			'duracao' => 323,
			'semestresano' => 323,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 323
		),
		array(
			'id' => 324,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 324,
			'duracao' => 324,
			'semestresano' => 324,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 324
		),
		array(
			'id' => 325,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 325,
			'duracao' => 325,
			'semestresano' => 325,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 325
		),
		array(
			'id' => 326,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 326,
			'duracao' => 326,
			'semestresano' => 326,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 326
		),
		array(
			'id' => 327,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 327,
			'duracao' => 327,
			'semestresano' => 327,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 327
		),
		array(
			'id' => 328,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 328,
			'duracao' => 328,
			'semestresano' => 328,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 328
		),
		array(
			'id' => 329,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 329,
			'duracao' => 329,
			'semestresano' => 329,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 329
		),
		array(
			'id' => 330,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 330,
			'duracao' => 330,
			'semestresano' => 330,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 330
		),
		array(
			'id' => 331,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 331,
			'duracao' => 331,
			'semestresano' => 331,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 331
		),
		array(
			'id' => 332,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 332,
			'duracao' => 332,
			'semestresano' => 332,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 332
		),
		array(
			'id' => 333,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 333,
			'duracao' => 333,
			'semestresano' => 333,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 333
		),
		array(
			'id' => 334,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 334,
			'duracao' => 334,
			'semestresano' => 334,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 334
		),
		array(
			'id' => 335,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 335,
			'duracao' => 335,
			'semestresano' => 335,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 335
		),
		array(
			'id' => 336,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 336,
			'duracao' => 336,
			'semestresano' => 336,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 336
		),
		array(
			'id' => 337,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 337,
			'duracao' => 337,
			'semestresano' => 337,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 337
		),
		array(
			'id' => 338,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 338,
			'duracao' => 338,
			'semestresano' => 338,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 338
		),
		array(
			'id' => 339,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 339,
			'duracao' => 339,
			'semestresano' => 339,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 339
		),
		array(
			'id' => 340,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 340,
			'duracao' => 340,
			'semestresano' => 340,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 340
		),
		array(
			'id' => 341,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 341,
			'duracao' => 341,
			'semestresano' => 341,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 341
		),
		array(
			'id' => 342,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 342,
			'duracao' => 342,
			'semestresano' => 342,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 342
		),
		array(
			'id' => 343,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 343,
			'duracao' => 343,
			'semestresano' => 343,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 343
		),
		array(
			'id' => 344,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 344,
			'duracao' => 344,
			'semestresano' => 344,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 344
		),
		array(
			'id' => 345,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 345,
			'duracao' => 345,
			'semestresano' => 345,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 345
		),
		array(
			'id' => 346,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 346,
			'duracao' => 346,
			'semestresano' => 346,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 346
		),
		array(
			'id' => 347,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 347,
			'duracao' => 347,
			'semestresano' => 347,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 347
		),
		array(
			'id' => 348,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 348,
			'duracao' => 348,
			'semestresano' => 348,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 348
		),
		array(
			'id' => 349,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 349,
			'duracao' => 349,
			'semestresano' => 349,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 349
		),
		array(
			'id' => 350,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 350,
			'duracao' => 350,
			'semestresano' => 350,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 350
		),
		array(
			'id' => 351,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 351,
			'duracao' => 351,
			'semestresano' => 351,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 351
		),
		array(
			'id' => 352,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 352,
			'duracao' => 352,
			'semestresano' => 352,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 352
		),
		array(
			'id' => 353,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 353,
			'duracao' => 353,
			'semestresano' => 353,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 353
		),
		array(
			'id' => 354,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 354,
			'duracao' => 354,
			'semestresano' => 354,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 354
		),
		array(
			'id' => 355,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 355,
			'duracao' => 355,
			'semestresano' => 355,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 355
		),
		array(
			'id' => 356,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 356,
			'duracao' => 356,
			'semestresano' => 356,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 356
		),
		array(
			'id' => 357,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 357,
			'duracao' => 357,
			'semestresano' => 357,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 357
		),
		array(
			'id' => 358,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 358,
			'duracao' => 358,
			'semestresano' => 358,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 358
		),
		array(
			'id' => 359,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 359,
			'duracao' => 359,
			'semestresano' => 359,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 359
		),
		array(
			'id' => 360,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 360,
			'duracao' => 360,
			'semestresano' => 360,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 360
		),
		array(
			'id' => 361,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 361,
			'duracao' => 361,
			'semestresano' => 361,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 361
		),
		array(
			'id' => 362,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 362,
			'duracao' => 362,
			'semestresano' => 362,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 362
		),
		array(
			'id' => 363,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 363,
			'duracao' => 363,
			'semestresano' => 363,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 363
		),
		array(
			'id' => 364,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 364,
			'duracao' => 364,
			'semestresano' => 364,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 364
		),
		array(
			'id' => 365,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 365,
			'duracao' => 365,
			'semestresano' => 365,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 365
		),
		array(
			'id' => 366,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 366,
			'duracao' => 366,
			'semestresano' => 366,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 366
		),
		array(
			'id' => 367,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 367,
			'duracao' => 367,
			'semestresano' => 367,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 367
		),
		array(
			'id' => 368,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 368,
			'duracao' => 368,
			'semestresano' => 368,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 368
		),
		array(
			'id' => 369,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 369,
			'duracao' => 369,
			'semestresano' => 369,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 369
		),
		array(
			'id' => 370,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 370,
			'duracao' => 370,
			'semestresano' => 370,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 370
		),
		array(
			'id' => 371,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 371,
			'duracao' => 371,
			'semestresano' => 371,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 371
		),
		array(
			'id' => 372,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 372,
			'duracao' => 372,
			'semestresano' => 372,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 372
		),
		array(
			'id' => 373,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 373,
			'duracao' => 373,
			'semestresano' => 373,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 373
		),
		array(
			'id' => 374,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 374,
			'duracao' => 374,
			'semestresano' => 374,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 374
		),
		array(
			'id' => 375,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 375,
			'duracao' => 375,
			'semestresano' => 375,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 375
		),
		array(
			'id' => 376,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 376,
			'duracao' => 376,
			'semestresano' => 376,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 376
		),
		array(
			'id' => 377,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 377,
			'duracao' => 377,
			'semestresano' => 377,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 377
		),
		array(
			'id' => 378,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 378,
			'duracao' => 378,
			'semestresano' => 378,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 378
		),
		array(
			'id' => 379,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 379,
			'duracao' => 379,
			'semestresano' => 379,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 379
		),
		array(
			'id' => 380,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 380,
			'duracao' => 380,
			'semestresano' => 380,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 380
		),
		array(
			'id' => 381,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 381,
			'duracao' => 381,
			'semestresano' => 381,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 381
		),
		array(
			'id' => 382,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 382,
			'duracao' => 382,
			'semestresano' => 382,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 382
		),
		array(
			'id' => 383,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 383,
			'duracao' => 383,
			'semestresano' => 383,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 383
		),
		array(
			'id' => 384,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 384,
			'duracao' => 384,
			'semestresano' => 384,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 384
		),
		array(
			'id' => 385,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 385,
			'duracao' => 385,
			'semestresano' => 385,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 385
		),
		array(
			'id' => 386,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 386,
			'duracao' => 386,
			'semestresano' => 386,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 386
		),
		array(
			'id' => 387,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 387,
			'duracao' => 387,
			'semestresano' => 387,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 387
		),
		array(
			'id' => 388,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 388,
			'duracao' => 388,
			'semestresano' => 388,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 388
		),
		array(
			'id' => 389,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 389,
			'duracao' => 389,
			'semestresano' => 389,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 389
		),
		array(
			'id' => 390,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 390,
			'duracao' => 390,
			'semestresano' => 390,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 390
		),
		array(
			'id' => 391,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 391,
			'duracao' => 391,
			'semestresano' => 391,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 391
		),
		array(
			'id' => 392,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 392,
			'duracao' => 392,
			'semestresano' => 392,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 392
		),
		array(
			'id' => 393,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 393,
			'duracao' => 393,
			'semestresano' => 393,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 393
		),
		array(
			'id' => 394,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 394,
			'duracao' => 394,
			'semestresano' => 394,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 394
		),
		array(
			'id' => 395,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 395,
			'duracao' => 395,
			'semestresano' => 395,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 395
		),
		array(
			'id' => 396,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 396,
			'duracao' => 396,
			'semestresano' => 396,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 396
		),
		array(
			'id' => 397,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 397,
			'duracao' => 397,
			'semestresano' => 397,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 397
		),
		array(
			'id' => 398,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 398,
			'duracao' => 398,
			'semestresano' => 398,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 398
		),
		array(
			'id' => 399,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 399,
			'duracao' => 399,
			'semestresano' => 399,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 399
		),
		array(
			'id' => 400,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 400,
			'duracao' => 400,
			'semestresano' => 400,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 400
		),
		array(
			'id' => 401,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 401,
			'duracao' => 401,
			'semestresano' => 401,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 401
		),
		array(
			'id' => 402,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 402,
			'duracao' => 402,
			'semestresano' => 402,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 402
		),
		array(
			'id' => 403,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 403,
			'duracao' => 403,
			'semestresano' => 403,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 403
		),
		array(
			'id' => 404,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 404,
			'duracao' => 404,
			'semestresano' => 404,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 404
		),
		array(
			'id' => 405,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 405,
			'duracao' => 405,
			'semestresano' => 405,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 405
		),
		array(
			'id' => 406,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 406,
			'duracao' => 406,
			'semestresano' => 406,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 406
		),
		array(
			'id' => 407,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 407,
			'duracao' => 407,
			'semestresano' => 407,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 407
		),
		array(
			'id' => 408,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 408,
			'duracao' => 408,
			'semestresano' => 408,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 408
		),
		array(
			'id' => 409,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 409,
			'duracao' => 409,
			'semestresano' => 409,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 409
		),
		array(
			'id' => 410,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 410,
			'duracao' => 410,
			'semestresano' => 410,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 410
		),
		array(
			'id' => 411,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 411,
			'duracao' => 411,
			'semestresano' => 411,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 411
		),
		array(
			'id' => 412,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 412,
			'duracao' => 412,
			'semestresano' => 412,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 412
		),
		array(
			'id' => 413,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 413,
			'duracao' => 413,
			'semestresano' => 413,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 413
		),
		array(
			'id' => 414,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 414,
			'duracao' => 414,
			'semestresano' => 414,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 414
		),
		array(
			'id' => 415,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 415,
			'duracao' => 415,
			'semestresano' => 415,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 415
		),
		array(
			'id' => 416,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 416,
			'duracao' => 416,
			'semestresano' => 416,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 416
		),
		array(
			'id' => 417,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 417,
			'duracao' => 417,
			'semestresano' => 417,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 417
		),
		array(
			'id' => 418,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 418,
			'duracao' => 418,
			'semestresano' => 418,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 418
		),
		array(
			'id' => 419,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 419,
			'duracao' => 419,
			'semestresano' => 419,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 419
		),
		array(
			'id' => 420,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 420,
			'duracao' => 420,
			'semestresano' => 420,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 420
		),
		array(
			'id' => 421,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 421,
			'duracao' => 421,
			'semestresano' => 421,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 421
		),
		array(
			'id' => 422,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 422,
			'duracao' => 422,
			'semestresano' => 422,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 422
		),
		array(
			'id' => 423,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 423,
			'duracao' => 423,
			'semestresano' => 423,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 423
		),
		array(
			'id' => 424,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 424,
			'duracao' => 424,
			'semestresano' => 424,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 424
		),
		array(
			'id' => 425,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 425,
			'duracao' => 425,
			'semestresano' => 425,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 425
		),
		array(
			'id' => 426,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 426,
			'duracao' => 426,
			'semestresano' => 426,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 426
		),
		array(
			'id' => 427,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 427,
			'duracao' => 427,
			'semestresano' => 427,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 427
		),
		array(
			'id' => 428,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 428,
			'duracao' => 428,
			'semestresano' => 428,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 428
		),
		array(
			'id' => 429,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 429,
			'duracao' => 429,
			'semestresano' => 429,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 429
		),
		array(
			'id' => 430,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 430,
			'duracao' => 430,
			'semestresano' => 430,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 430
		),
		array(
			'id' => 431,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 431,
			'duracao' => 431,
			'semestresano' => 431,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 431
		),
		array(
			'id' => 432,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 432,
			'duracao' => 432,
			'semestresano' => 432,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 432
		),
		array(
			'id' => 433,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 433,
			'duracao' => 433,
			'semestresano' => 433,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 433
		),
		array(
			'id' => 434,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 434,
			'duracao' => 434,
			'semestresano' => 434,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 434
		),
		array(
			'id' => 435,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 435,
			'duracao' => 435,
			'semestresano' => 435,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 435
		),
		array(
			'id' => 436,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 436,
			'duracao' => 436,
			'semestresano' => 436,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 436
		),
		array(
			'id' => 437,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 437,
			'duracao' => 437,
			'semestresano' => 437,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 437
		),
		array(
			'id' => 438,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 438,
			'duracao' => 438,
			'semestresano' => 438,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 438
		),
		array(
			'id' => 439,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 439,
			'duracao' => 439,
			'semestresano' => 439,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 439
		),
		array(
			'id' => 440,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 440,
			'duracao' => 440,
			'semestresano' => 440,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 440
		),
		array(
			'id' => 441,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 441,
			'duracao' => 441,
			'semestresano' => 441,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 441
		),
		array(
			'id' => 442,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 442,
			'duracao' => 442,
			'semestresano' => 442,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 442
		),
		array(
			'id' => 443,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 443,
			'duracao' => 443,
			'semestresano' => 443,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 443
		),
		array(
			'id' => 444,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 444,
			'duracao' => 444,
			'semestresano' => 444,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 444
		),
		array(
			'id' => 445,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 445,
			'duracao' => 445,
			'semestresano' => 445,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 445
		),
		array(
			'id' => 446,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 446,
			'duracao' => 446,
			'semestresano' => 446,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 446
		),
		array(
			'id' => 447,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 447,
			'duracao' => 447,
			'semestresano' => 447,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 447
		),
		array(
			'id' => 448,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 448,
			'duracao' => 448,
			'semestresano' => 448,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 448
		),
		array(
			'id' => 449,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 449,
			'duracao' => 449,
			'semestresano' => 449,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 449
		),
		array(
			'id' => 450,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 450,
			'duracao' => 450,
			'semestresano' => 450,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 450
		),
		array(
			'id' => 451,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 451,
			'duracao' => 451,
			'semestresano' => 451,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 451
		),
		array(
			'id' => 452,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 452,
			'duracao' => 452,
			'semestresano' => 452,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 452
		),
		array(
			'id' => 453,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 453,
			'duracao' => 453,
			'semestresano' => 453,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 453
		),
		array(
			'id' => 454,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 454,
			'duracao' => 454,
			'semestresano' => 454,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 454
		),
		array(
			'id' => 455,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 455,
			'duracao' => 455,
			'semestresano' => 455,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 455
		),
		array(
			'id' => 456,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 456,
			'duracao' => 456,
			'semestresano' => 456,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 456
		),
		array(
			'id' => 457,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 457,
			'duracao' => 457,
			'semestresano' => 457,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 457
		),
		array(
			'id' => 458,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 458,
			'duracao' => 458,
			'semestresano' => 458,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 458
		),
		array(
			'id' => 459,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 459,
			'duracao' => 459,
			'semestresano' => 459,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 459
		),
		array(
			'id' => 460,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 460,
			'duracao' => 460,
			'semestresano' => 460,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 460
		),
		array(
			'id' => 461,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 461,
			'duracao' => 461,
			'semestresano' => 461,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 461
		),
		array(
			'id' => 462,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 462,
			'duracao' => 462,
			'semestresano' => 462,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 462
		),
		array(
			'id' => 463,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 463,
			'duracao' => 463,
			'semestresano' => 463,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 463
		),
		array(
			'id' => 464,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 464,
			'duracao' => 464,
			'semestresano' => 464,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 464
		),
		array(
			'id' => 465,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 465,
			'duracao' => 465,
			'semestresano' => 465,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 465
		),
		array(
			'id' => 466,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 466,
			'duracao' => 466,
			'semestresano' => 466,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 466
		),
		array(
			'id' => 467,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 467,
			'duracao' => 467,
			'semestresano' => 467,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 467
		),
		array(
			'id' => 468,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 468,
			'duracao' => 468,
			'semestresano' => 468,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 468
		),
		array(
			'id' => 469,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 469,
			'duracao' => 469,
			'semestresano' => 469,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 469
		),
		array(
			'id' => 470,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 470,
			'duracao' => 470,
			'semestresano' => 470,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 470
		),
		array(
			'id' => 471,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 471,
			'duracao' => 471,
			'semestresano' => 471,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 471
		),
		array(
			'id' => 472,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 472,
			'duracao' => 472,
			'semestresano' => 472,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 472
		),
		array(
			'id' => 473,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 473,
			'duracao' => 473,
			'semestresano' => 473,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 473
		),
		array(
			'id' => 474,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 474,
			'duracao' => 474,
			'semestresano' => 474,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 474
		),
		array(
			'id' => 475,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 475,
			'duracao' => 475,
			'semestresano' => 475,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 475
		),
		array(
			'id' => 476,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 476,
			'duracao' => 476,
			'semestresano' => 476,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 476
		),
		array(
			'id' => 477,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 477,
			'duracao' => 477,
			'semestresano' => 477,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 477
		),
		array(
			'id' => 478,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 478,
			'duracao' => 478,
			'semestresano' => 478,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 478
		),
		array(
			'id' => 479,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 479,
			'duracao' => 479,
			'semestresano' => 479,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 479
		),
		array(
			'id' => 480,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 480,
			'duracao' => 480,
			'semestresano' => 480,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 480
		),
		array(
			'id' => 481,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 481,
			'duracao' => 481,
			'semestresano' => 481,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 481
		),
		array(
			'id' => 482,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 482,
			'duracao' => 482,
			'semestresano' => 482,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 482
		),
		array(
			'id' => 483,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 483,
			'duracao' => 483,
			'semestresano' => 483,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 483
		),
		array(
			'id' => 484,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 484,
			'duracao' => 484,
			'semestresano' => 484,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 484
		),
		array(
			'id' => 485,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 485,
			'duracao' => 485,
			'semestresano' => 485,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 485
		),
		array(
			'id' => 486,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 486,
			'duracao' => 486,
			'semestresano' => 486,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 486
		),
		array(
			'id' => 487,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 487,
			'duracao' => 487,
			'semestresano' => 487,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 487
		),
		array(
			'id' => 488,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 488,
			'duracao' => 488,
			'semestresano' => 488,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 488
		),
		array(
			'id' => 489,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 489,
			'duracao' => 489,
			'semestresano' => 489,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 489
		),
		array(
			'id' => 490,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 490,
			'duracao' => 490,
			'semestresano' => 490,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 490
		),
		array(
			'id' => 491,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 491,
			'duracao' => 491,
			'semestresano' => 491,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 491
		),
		array(
			'id' => 492,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 492,
			'duracao' => 492,
			'semestresano' => 492,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 492
		),
		array(
			'id' => 493,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 493,
			'duracao' => 493,
			'semestresano' => 493,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 493
		),
		array(
			'id' => 494,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 494,
			'duracao' => 494,
			'semestresano' => 494,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 494
		),
		array(
			'id' => 495,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 495,
			'duracao' => 495,
			'semestresano' => 495,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 495
		),
		array(
			'id' => 496,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 496,
			'duracao' => 496,
			'semestresano' => 496,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 496
		),
		array(
			'id' => 497,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 497,
			'duracao' => 497,
			'semestresano' => 497,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 497
		),
		array(
			'id' => 498,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 498,
			'duracao' => 498,
			'semestresano' => 498,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 498
		),
		array(
			'id' => 499,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 499,
			'duracao' => 499,
			'semestresano' => 499,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 499
		),
		array(
			'id' => 500,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 500,
			'duracao' => 500,
			'semestresano' => 500,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 500
		),
		array(
			'id' => 501,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 501,
			'duracao' => 501,
			'semestresano' => 501,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 501
		),
		array(
			'id' => 502,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 502,
			'duracao' => 502,
			'semestresano' => 502,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 502
		),
		array(
			'id' => 503,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 503,
			'duracao' => 503,
			'semestresano' => 503,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 503
		),
		array(
			'id' => 504,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 504,
			'duracao' => 504,
			'semestresano' => 504,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 504
		),
		array(
			'id' => 505,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 505,
			'duracao' => 505,
			'semestresano' => 505,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 505
		),
		array(
			'id' => 506,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 506,
			'duracao' => 506,
			'semestresano' => 506,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 506
		),
		array(
			'id' => 507,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 507,
			'duracao' => 507,
			'semestresano' => 507,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 507
		),
		array(
			'id' => 508,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 508,
			'duracao' => 508,
			'semestresano' => 508,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 508
		),
		array(
			'id' => 509,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 509,
			'duracao' => 509,
			'semestresano' => 509,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 509
		),
		array(
			'id' => 510,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 510,
			'duracao' => 510,
			'semestresano' => 510,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 510
		),
		array(
			'id' => 511,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 511,
			'duracao' => 511,
			'semestresano' => 511,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 511
		),
		array(
			'id' => 512,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 512,
			'duracao' => 512,
			'semestresano' => 512,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 512
		),
		array(
			'id' => 513,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 513,
			'duracao' => 513,
			'semestresano' => 513,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 513
		),
		array(
			'id' => 514,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 514,
			'duracao' => 514,
			'semestresano' => 514,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 514
		),
		array(
			'id' => 515,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 515,
			'duracao' => 515,
			'semestresano' => 515,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 515
		),
		array(
			'id' => 516,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 516,
			'duracao' => 516,
			'semestresano' => 516,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 516
		),
		array(
			'id' => 517,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 517,
			'duracao' => 517,
			'semestresano' => 517,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 517
		),
		array(
			'id' => 518,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 518,
			'duracao' => 518,
			'semestresano' => 518,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 518
		),
		array(
			'id' => 519,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 519,
			'duracao' => 519,
			'semestresano' => 519,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 519
		),
		array(
			'id' => 520,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 520,
			'duracao' => 520,
			'semestresano' => 520,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 520
		),
		array(
			'id' => 521,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 521,
			'duracao' => 521,
			'semestresano' => 521,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 521
		),
		array(
			'id' => 522,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 522,
			'duracao' => 522,
			'semestresano' => 522,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 522
		),
		array(
			'id' => 523,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 523,
			'duracao' => 523,
			'semestresano' => 523,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 523
		),
		array(
			'id' => 524,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 524,
			'duracao' => 524,
			'semestresano' => 524,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 524
		),
		array(
			'id' => 525,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 525,
			'duracao' => 525,
			'semestresano' => 525,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 525
		),
		array(
			'id' => 526,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 526,
			'duracao' => 526,
			'semestresano' => 526,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 526
		),
		array(
			'id' => 527,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 527,
			'duracao' => 527,
			'semestresano' => 527,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 527
		),
		array(
			'id' => 528,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 528,
			'duracao' => 528,
			'semestresano' => 528,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 528
		),
		array(
			'id' => 529,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 529,
			'duracao' => 529,
			'semestresano' => 529,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 529
		),
		array(
			'id' => 530,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 530,
			'duracao' => 530,
			'semestresano' => 530,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 530
		),
		array(
			'id' => 531,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 531,
			'duracao' => 531,
			'semestresano' => 531,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 531
		),
		array(
			'id' => 532,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 532,
			'duracao' => 532,
			'semestresano' => 532,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 532
		),
		array(
			'id' => 533,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 533,
			'duracao' => 533,
			'semestresano' => 533,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 533
		),
		array(
			'id' => 534,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 534,
			'duracao' => 534,
			'semestresano' => 534,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 534
		),
		array(
			'id' => 535,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 535,
			'duracao' => 535,
			'semestresano' => 535,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 535
		),
		array(
			'id' => 536,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 536,
			'duracao' => 536,
			'semestresano' => 536,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 536
		),
		array(
			'id' => 537,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 537,
			'duracao' => 537,
			'semestresano' => 537,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 537
		),
		array(
			'id' => 538,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 538,
			'duracao' => 538,
			'semestresano' => 538,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 538
		),
		array(
			'id' => 539,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 539,
			'duracao' => 539,
			'semestresano' => 539,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 539
		),
		array(
			'id' => 540,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 540,
			'duracao' => 540,
			'semestresano' => 540,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 540
		),
		array(
			'id' => 541,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 541,
			'duracao' => 541,
			'semestresano' => 541,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 541
		),
		array(
			'id' => 542,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 542,
			'duracao' => 542,
			'semestresano' => 542,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 542
		),
		array(
			'id' => 543,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 543,
			'duracao' => 543,
			'semestresano' => 543,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 543
		),
		array(
			'id' => 544,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 544,
			'duracao' => 544,
			'semestresano' => 544,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 544
		),
		array(
			'id' => 545,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 545,
			'duracao' => 545,
			'semestresano' => 545,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 545
		),
		array(
			'id' => 546,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 546,
			'duracao' => 546,
			'semestresano' => 546,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 546
		),
		array(
			'id' => 547,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 547,
			'duracao' => 547,
			'semestresano' => 547,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 547
		),
		array(
			'id' => 548,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 548,
			'duracao' => 548,
			'semestresano' => 548,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 548
		),
		array(
			'id' => 549,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 549,
			'duracao' => 549,
			'semestresano' => 549,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 549
		),
		array(
			'id' => 550,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 550,
			'duracao' => 550,
			'semestresano' => 550,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 550
		),
		array(
			'id' => 551,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 551,
			'duracao' => 551,
			'semestresano' => 551,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 551
		),
		array(
			'id' => 552,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 552,
			'duracao' => 552,
			'semestresano' => 552,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 552
		),
		array(
			'id' => 553,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 553,
			'duracao' => 553,
			'semestresano' => 553,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 553
		),
		array(
			'id' => 554,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 554,
			'duracao' => 554,
			'semestresano' => 554,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 554
		),
		array(
			'id' => 555,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 555,
			'duracao' => 555,
			'semestresano' => 555,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 555
		),
		array(
			'id' => 556,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 556,
			'duracao' => 556,
			'semestresano' => 556,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 556
		),
		array(
			'id' => 557,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 557,
			'duracao' => 557,
			'semestresano' => 557,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 557
		),
		array(
			'id' => 558,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 558,
			'duracao' => 558,
			'semestresano' => 558,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 558
		),
		array(
			'id' => 559,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 559,
			'duracao' => 559,
			'semestresano' => 559,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 559
		),
		array(
			'id' => 560,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 560,
			'duracao' => 560,
			'semestresano' => 560,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 560
		),
		array(
			'id' => 561,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 561,
			'duracao' => 561,
			'semestresano' => 561,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 561
		),
		array(
			'id' => 562,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 562,
			'duracao' => 562,
			'semestresano' => 562,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 562
		),
		array(
			'id' => 563,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 563,
			'duracao' => 563,
			'semestresano' => 563,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 563
		),
		array(
			'id' => 564,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 564,
			'duracao' => 564,
			'semestresano' => 564,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 564
		),
		array(
			'id' => 565,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 565,
			'duracao' => 565,
			'semestresano' => 565,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 565
		),
		array(
			'id' => 566,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 566,
			'duracao' => 566,
			'semestresano' => 566,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 566
		),
		array(
			'id' => 567,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 567,
			'duracao' => 567,
			'semestresano' => 567,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 567
		),
		array(
			'id' => 568,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 568,
			'duracao' => 568,
			'semestresano' => 568,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 568
		),
		array(
			'id' => 569,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 569,
			'duracao' => 569,
			'semestresano' => 569,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 569
		),
		array(
			'id' => 570,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 570,
			'duracao' => 570,
			'semestresano' => 570,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 570
		),
		array(
			'id' => 571,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 571,
			'duracao' => 571,
			'semestresano' => 571,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 571
		),
		array(
			'id' => 572,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 572,
			'duracao' => 572,
			'semestresano' => 572,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 572
		),
		array(
			'id' => 573,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 573,
			'duracao' => 573,
			'semestresano' => 573,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 573
		),
		array(
			'id' => 574,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 574,
			'duracao' => 574,
			'semestresano' => 574,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 574
		),
		array(
			'id' => 575,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 575,
			'duracao' => 575,
			'semestresano' => 575,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 575
		),
		array(
			'id' => 576,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 576,
			'duracao' => 576,
			'semestresano' => 576,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 576
		),
		array(
			'id' => 577,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 577,
			'duracao' => 577,
			'semestresano' => 577,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 577
		),
		array(
			'id' => 578,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 578,
			'duracao' => 578,
			'semestresano' => 578,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 578
		),
		array(
			'id' => 579,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 579,
			'duracao' => 579,
			'semestresano' => 579,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 579
		),
		array(
			'id' => 580,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 580,
			'duracao' => 580,
			'semestresano' => 580,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 580
		),
		array(
			'id' => 581,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 581,
			'duracao' => 581,
			'semestresano' => 581,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 581
		),
		array(
			'id' => 582,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 582,
			'duracao' => 582,
			'semestresano' => 582,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 582
		),
		array(
			'id' => 583,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 583,
			'duracao' => 583,
			'semestresano' => 583,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 583
		),
		array(
			'id' => 584,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 584,
			'duracao' => 584,
			'semestresano' => 584,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 584
		),
		array(
			'id' => 585,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 585,
			'duracao' => 585,
			'semestresano' => 585,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 585
		),
		array(
			'id' => 586,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 586,
			'duracao' => 586,
			'semestresano' => 586,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 586
		),
		array(
			'id' => 587,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 587,
			'duracao' => 587,
			'semestresano' => 587,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 587
		),
		array(
			'id' => 588,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 588,
			'duracao' => 588,
			'semestresano' => 588,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 588
		),
		array(
			'id' => 589,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 589,
			'duracao' => 589,
			'semestresano' => 589,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 589
		),
		array(
			'id' => 590,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 590,
			'duracao' => 590,
			'semestresano' => 590,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 590
		),
		array(
			'id' => 591,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 591,
			'duracao' => 591,
			'semestresano' => 591,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 591
		),
		array(
			'id' => 592,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 592,
			'duracao' => 592,
			'semestresano' => 592,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 592
		),
		array(
			'id' => 593,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 593,
			'duracao' => 593,
			'semestresano' => 593,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 593
		),
		array(
			'id' => 594,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 594,
			'duracao' => 594,
			'semestresano' => 594,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 594
		),
		array(
			'id' => 595,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 595,
			'duracao' => 595,
			'semestresano' => 595,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 595
		),
		array(
			'id' => 596,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 596,
			'duracao' => 596,
			'semestresano' => 596,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 596
		),
		array(
			'id' => 597,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 597,
			'duracao' => 597,
			'semestresano' => 597,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 597
		),
		array(
			'id' => 598,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 598,
			'duracao' => 598,
			'semestresano' => 598,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 598
		),
		array(
			'id' => 599,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 599,
			'duracao' => 599,
			'semestresano' => 599,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 599
		),
		array(
			'id' => 600,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 600,
			'duracao' => 600,
			'semestresano' => 600,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 600
		),
		array(
			'id' => 601,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 601,
			'duracao' => 601,
			'semestresano' => 601,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 601
		),
		array(
			'id' => 602,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 602,
			'duracao' => 602,
			'semestresano' => 602,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 602
		),
		array(
			'id' => 603,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 603,
			'duracao' => 603,
			'semestresano' => 603,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 603
		),
		array(
			'id' => 604,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 604,
			'duracao' => 604,
			'semestresano' => 604,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 604
		),
		array(
			'id' => 605,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 605,
			'duracao' => 605,
			'semestresano' => 605,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 605
		),
		array(
			'id' => 606,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 606,
			'duracao' => 606,
			'semestresano' => 606,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 606
		),
		array(
			'id' => 607,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 607,
			'duracao' => 607,
			'semestresano' => 607,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 607
		),
		array(
			'id' => 608,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 608,
			'duracao' => 608,
			'semestresano' => 608,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 608
		),
		array(
			'id' => 609,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 609,
			'duracao' => 609,
			'semestresano' => 609,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 609
		),
		array(
			'id' => 610,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 610,
			'duracao' => 610,
			'semestresano' => 610,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 610
		),
		array(
			'id' => 611,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 611,
			'duracao' => 611,
			'semestresano' => 611,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 611
		),
		array(
			'id' => 612,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 612,
			'duracao' => 612,
			'semestresano' => 612,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 612
		),
		array(
			'id' => 613,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 613,
			'duracao' => 613,
			'semestresano' => 613,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 613
		),
		array(
			'id' => 614,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 614,
			'duracao' => 614,
			'semestresano' => 614,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 614
		),
		array(
			'id' => 615,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 615,
			'duracao' => 615,
			'semestresano' => 615,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 615
		),
		array(
			'id' => 616,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 616,
			'duracao' => 616,
			'semestresano' => 616,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 616
		),
		array(
			'id' => 617,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 617,
			'duracao' => 617,
			'semestresano' => 617,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 617
		),
		array(
			'id' => 618,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 618,
			'duracao' => 618,
			'semestresano' => 618,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 618
		),
		array(
			'id' => 619,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 619,
			'duracao' => 619,
			'semestresano' => 619,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 619
		),
		array(
			'id' => 620,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 620,
			'duracao' => 620,
			'semestresano' => 620,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 620
		),
		array(
			'id' => 621,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 621,
			'duracao' => 621,
			'semestresano' => 621,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 621
		),
		array(
			'id' => 622,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 622,
			'duracao' => 622,
			'semestresano' => 622,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 622
		),
		array(
			'id' => 623,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 623,
			'duracao' => 623,
			'semestresano' => 623,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 623
		),
		array(
			'id' => 624,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 624,
			'duracao' => 624,
			'semestresano' => 624,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 624
		),
		array(
			'id' => 625,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 625,
			'duracao' => 625,
			'semestresano' => 625,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 625
		),
		array(
			'id' => 626,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 626,
			'duracao' => 626,
			'semestresano' => 626,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 626
		),
		array(
			'id' => 627,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 627,
			'duracao' => 627,
			'semestresano' => 627,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 627
		),
		array(
			'id' => 628,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 628,
			'duracao' => 628,
			'semestresano' => 628,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 628
		),
		array(
			'id' => 629,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 629,
			'duracao' => 629,
			'semestresano' => 629,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 629
		),
		array(
			'id' => 630,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 630,
			'duracao' => 630,
			'semestresano' => 630,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 630
		),
		array(
			'id' => 631,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 631,
			'duracao' => 631,
			'semestresano' => 631,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 631
		),
		array(
			'id' => 632,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 632,
			'duracao' => 632,
			'semestresano' => 632,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 632
		),
		array(
			'id' => 633,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 633,
			'duracao' => 633,
			'semestresano' => 633,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 633
		),
		array(
			'id' => 634,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 634,
			'duracao' => 634,
			'semestresano' => 634,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 634
		),
		array(
			'id' => 635,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 635,
			'duracao' => 635,
			'semestresano' => 635,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 635
		),
		array(
			'id' => 636,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 636,
			'duracao' => 636,
			'semestresano' => 636,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 636
		),
		array(
			'id' => 637,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 637,
			'duracao' => 637,
			'semestresano' => 637,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 637
		),
		array(
			'id' => 638,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 638,
			'duracao' => 638,
			'semestresano' => 638,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 638
		),
		array(
			'id' => 639,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 639,
			'duracao' => 639,
			'semestresano' => 639,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 639
		),
		array(
			'id' => 640,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 640,
			'duracao' => 640,
			'semestresano' => 640,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 640
		),
		array(
			'id' => 641,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 641,
			'duracao' => 641,
			'semestresano' => 641,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 641
		),
		array(
			'id' => 642,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 642,
			'duracao' => 642,
			'semestresano' => 642,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 642
		),
		array(
			'id' => 643,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 643,
			'duracao' => 643,
			'semestresano' => 643,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 643
		),
		array(
			'id' => 644,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 644,
			'duracao' => 644,
			'semestresano' => 644,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 644
		),
		array(
			'id' => 645,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 645,
			'duracao' => 645,
			'semestresano' => 645,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 645
		),
		array(
			'id' => 646,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 646,
			'duracao' => 646,
			'semestresano' => 646,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 646
		),
		array(
			'id' => 647,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 647,
			'duracao' => 647,
			'semestresano' => 647,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 647
		),
		array(
			'id' => 648,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 648,
			'duracao' => 648,
			'semestresano' => 648,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 648
		),
		array(
			'id' => 649,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 649,
			'duracao' => 649,
			'semestresano' => 649,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 649
		),
		array(
			'id' => 650,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 650,
			'duracao' => 650,
			'semestresano' => 650,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 650
		),
		array(
			'id' => 651,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 651,
			'duracao' => 651,
			'semestresano' => 651,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 651
		),
		array(
			'id' => 652,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 652,
			'duracao' => 652,
			'semestresano' => 652,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 652
		),
		array(
			'id' => 653,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 653,
			'duracao' => 653,
			'semestresano' => 653,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 653
		),
		array(
			'id' => 654,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 654,
			'duracao' => 654,
			'semestresano' => 654,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 654
		),
		array(
			'id' => 655,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 655,
			'duracao' => 655,
			'semestresano' => 655,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 655
		),
		array(
			'id' => 656,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 656,
			'duracao' => 656,
			'semestresano' => 656,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 656
		),
		array(
			'id' => 657,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 657,
			'duracao' => 657,
			'semestresano' => 657,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 657
		),
		array(
			'id' => 658,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 658,
			'duracao' => 658,
			'semestresano' => 658,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 658
		),
		array(
			'id' => 659,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 659,
			'duracao' => 659,
			'semestresano' => 659,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 659
		),
		array(
			'id' => 660,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 660,
			'duracao' => 660,
			'semestresano' => 660,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 660
		),
		array(
			'id' => 661,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 661,
			'duracao' => 661,
			'semestresano' => 661,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 661
		),
		array(
			'id' => 662,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 662,
			'duracao' => 662,
			'semestresano' => 662,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 662
		),
		array(
			'id' => 663,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 663,
			'duracao' => 663,
			'semestresano' => 663,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 663
		),
		array(
			'id' => 664,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 664,
			'duracao' => 664,
			'semestresano' => 664,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 664
		),
		array(
			'id' => 665,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 665,
			'duracao' => 665,
			'semestresano' => 665,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 665
		),
		array(
			'id' => 666,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 666,
			'duracao' => 666,
			'semestresano' => 666,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 666
		),
		array(
			'id' => 667,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 667,
			'duracao' => 667,
			'semestresano' => 667,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 667
		),
		array(
			'id' => 668,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 668,
			'duracao' => 668,
			'semestresano' => 668,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 668
		),
		array(
			'id' => 669,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 669,
			'duracao' => 669,
			'semestresano' => 669,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 669
		),
		array(
			'id' => 670,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 670,
			'duracao' => 670,
			'semestresano' => 670,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 670
		),
		array(
			'id' => 671,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 671,
			'duracao' => 671,
			'semestresano' => 671,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 671
		),
		array(
			'id' => 672,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 672,
			'duracao' => 672,
			'semestresano' => 672,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 672
		),
		array(
			'id' => 673,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 673,
			'duracao' => 673,
			'semestresano' => 673,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 673
		),
		array(
			'id' => 674,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 674,
			'duracao' => 674,
			'semestresano' => 674,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 674
		),
		array(
			'id' => 675,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 675,
			'duracao' => 675,
			'semestresano' => 675,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 675
		),
		array(
			'id' => 676,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 676,
			'duracao' => 676,
			'semestresano' => 676,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 676
		),
		array(
			'id' => 677,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 677,
			'duracao' => 677,
			'semestresano' => 677,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 677
		),
		array(
			'id' => 678,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 678,
			'duracao' => 678,
			'semestresano' => 678,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 678
		),
		array(
			'id' => 679,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 679,
			'duracao' => 679,
			'semestresano' => 679,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 679
		),
		array(
			'id' => 680,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 680,
			'duracao' => 680,
			'semestresano' => 680,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 680
		),
		array(
			'id' => 681,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 681,
			'duracao' => 681,
			'semestresano' => 681,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 681
		),
		array(
			'id' => 682,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 682,
			'duracao' => 682,
			'semestresano' => 682,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 682
		),
		array(
			'id' => 683,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 683,
			'duracao' => 683,
			'semestresano' => 683,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 683
		),
		array(
			'id' => 684,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 684,
			'duracao' => 684,
			'semestresano' => 684,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 684
		),
		array(
			'id' => 685,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 685,
			'duracao' => 685,
			'semestresano' => 685,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 685
		),
		array(
			'id' => 686,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 686,
			'duracao' => 686,
			'semestresano' => 686,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 686
		),
		array(
			'id' => 687,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 687,
			'duracao' => 687,
			'semestresano' => 687,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 687
		),
		array(
			'id' => 688,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 688,
			'duracao' => 688,
			'semestresano' => 688,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 688
		),
		array(
			'id' => 689,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 689,
			'duracao' => 689,
			'semestresano' => 689,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 689
		),
		array(
			'id' => 690,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 690,
			'duracao' => 690,
			'semestresano' => 690,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 690
		),
		array(
			'id' => 691,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 691,
			'duracao' => 691,
			'semestresano' => 691,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 691
		),
		array(
			'id' => 692,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 692,
			'duracao' => 692,
			'semestresano' => 692,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 692
		),
		array(
			'id' => 693,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 693,
			'duracao' => 693,
			'semestresano' => 693,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 693
		),
		array(
			'id' => 694,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 694,
			'duracao' => 694,
			'semestresano' => 694,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 694
		),
		array(
			'id' => 695,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 695,
			'duracao' => 695,
			'semestresano' => 695,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 695
		),
		array(
			'id' => 696,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 696,
			'duracao' => 696,
			'semestresano' => 696,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 696
		),
		array(
			'id' => 697,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 697,
			'duracao' => 697,
			'semestresano' => 697,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 697
		),
		array(
			'id' => 698,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 698,
			'duracao' => 698,
			'semestresano' => 698,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 698
		),
		array(
			'id' => 699,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 699,
			'duracao' => 699,
			'semestresano' => 699,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 699
		),
		array(
			'id' => 700,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 700,
			'duracao' => 700,
			'semestresano' => 700,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 700
		),
		array(
			'id' => 701,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 701,
			'duracao' => 701,
			'semestresano' => 701,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 701
		),
		array(
			'id' => 702,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 702,
			'duracao' => 702,
			'semestresano' => 702,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 702
		),
		array(
			'id' => 703,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 703,
			'duracao' => 703,
			'semestresano' => 703,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 703
		),
		array(
			'id' => 704,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 704,
			'duracao' => 704,
			'semestresano' => 704,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 704
		),
		array(
			'id' => 705,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 705,
			'duracao' => 705,
			'semestresano' => 705,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 705
		),
		array(
			'id' => 706,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 706,
			'duracao' => 706,
			'semestresano' => 706,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 706
		),
		array(
			'id' => 707,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 707,
			'duracao' => 707,
			'semestresano' => 707,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 707
		),
		array(
			'id' => 708,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 708,
			'duracao' => 708,
			'semestresano' => 708,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 708
		),
		array(
			'id' => 709,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 709,
			'duracao' => 709,
			'semestresano' => 709,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 709
		),
		array(
			'id' => 710,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 710,
			'duracao' => 710,
			'semestresano' => 710,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 710
		),
		array(
			'id' => 711,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 711,
			'duracao' => 711,
			'semestresano' => 711,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 711
		),
		array(
			'id' => 712,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 712,
			'duracao' => 712,
			'semestresano' => 712,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 712
		),
		array(
			'id' => 713,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 713,
			'duracao' => 713,
			'semestresano' => 713,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 713
		),
		array(
			'id' => 714,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 714,
			'duracao' => 714,
			'semestresano' => 714,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 714
		),
		array(
			'id' => 715,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 715,
			'duracao' => 715,
			'semestresano' => 715,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 715
		),
		array(
			'id' => 716,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 716,
			'duracao' => 716,
			'semestresano' => 716,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 716
		),
		array(
			'id' => 717,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 717,
			'duracao' => 717,
			'semestresano' => 717,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 717
		),
		array(
			'id' => 718,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 718,
			'duracao' => 718,
			'semestresano' => 718,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 718
		),
		array(
			'id' => 719,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 719,
			'duracao' => 719,
			'semestresano' => 719,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 719
		),
		array(
			'id' => 720,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 720,
			'duracao' => 720,
			'semestresano' => 720,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 720
		),
		array(
			'id' => 721,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 721,
			'duracao' => 721,
			'semestresano' => 721,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 721
		),
		array(
			'id' => 722,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 722,
			'duracao' => 722,
			'semestresano' => 722,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 722
		),
		array(
			'id' => 723,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 723,
			'duracao' => 723,
			'semestresano' => 723,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 723
		),
		array(
			'id' => 724,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 724,
			'duracao' => 724,
			'semestresano' => 724,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 724
		),
		array(
			'id' => 725,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 725,
			'duracao' => 725,
			'semestresano' => 725,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 725
		),
		array(
			'id' => 726,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 726,
			'duracao' => 726,
			'semestresano' => 726,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 726
		),
		array(
			'id' => 727,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 727,
			'duracao' => 727,
			'semestresano' => 727,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 727
		),
		array(
			'id' => 728,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 728,
			'duracao' => 728,
			'semestresano' => 728,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 728
		),
		array(
			'id' => 729,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 729,
			'duracao' => 729,
			'semestresano' => 729,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 729
		),
		array(
			'id' => 730,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 730,
			'duracao' => 730,
			'semestresano' => 730,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 730
		),
		array(
			'id' => 731,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 731,
			'duracao' => 731,
			'semestresano' => 731,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 731
		),
		array(
			'id' => 732,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 732,
			'duracao' => 732,
			'semestresano' => 732,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 732
		),
		array(
			'id' => 733,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 733,
			'duracao' => 733,
			'semestresano' => 733,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 733
		),
		array(
			'id' => 734,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 734,
			'duracao' => 734,
			'semestresano' => 734,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 734
		),
		array(
			'id' => 735,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 735,
			'duracao' => 735,
			'semestresano' => 735,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 735
		),
		array(
			'id' => 736,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 736,
			'duracao' => 736,
			'semestresano' => 736,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 736
		),
		array(
			'id' => 737,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 737,
			'duracao' => 737,
			'semestresano' => 737,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 737
		),
		array(
			'id' => 738,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 738,
			'duracao' => 738,
			'semestresano' => 738,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 738
		),
		array(
			'id' => 739,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 739,
			'duracao' => 739,
			'semestresano' => 739,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 739
		),
		array(
			'id' => 740,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 740,
			'duracao' => 740,
			'semestresano' => 740,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 740
		),
		array(
			'id' => 741,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 741,
			'duracao' => 741,
			'semestresano' => 741,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 741
		),
		array(
			'id' => 742,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 742,
			'duracao' => 742,
			'semestresano' => 742,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 742
		),
		array(
			'id' => 743,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 743,
			'duracao' => 743,
			'semestresano' => 743,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 743
		),
		array(
			'id' => 744,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 744,
			'duracao' => 744,
			'semestresano' => 744,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 744
		),
		array(
			'id' => 745,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 745,
			'duracao' => 745,
			'semestresano' => 745,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 745
		),
		array(
			'id' => 746,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 746,
			'duracao' => 746,
			'semestresano' => 746,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 746
		),
		array(
			'id' => 747,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 747,
			'duracao' => 747,
			'semestresano' => 747,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 747
		),
		array(
			'id' => 748,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 748,
			'duracao' => 748,
			'semestresano' => 748,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 748
		),
		array(
			'id' => 749,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 749,
			'duracao' => 749,
			'semestresano' => 749,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 749
		),
		array(
			'id' => 750,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 750,
			'duracao' => 750,
			'semestresano' => 750,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 750
		),
		array(
			'id' => 751,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 751,
			'duracao' => 751,
			'semestresano' => 751,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 751
		),
		array(
			'id' => 752,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 752,
			'duracao' => 752,
			'semestresano' => 752,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 752
		),
		array(
			'id' => 753,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 753,
			'duracao' => 753,
			'semestresano' => 753,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 753
		),
		array(
			'id' => 754,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 754,
			'duracao' => 754,
			'semestresano' => 754,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 754
		),
		array(
			'id' => 755,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 755,
			'duracao' => 755,
			'semestresano' => 755,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 755
		),
		array(
			'id' => 756,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 756,
			'duracao' => 756,
			'semestresano' => 756,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 756
		),
		array(
			'id' => 757,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 757,
			'duracao' => 757,
			'semestresano' => 757,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 757
		),
		array(
			'id' => 758,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 758,
			'duracao' => 758,
			'semestresano' => 758,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 758
		),
		array(
			'id' => 759,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 759,
			'duracao' => 759,
			'semestresano' => 759,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 759
		),
		array(
			'id' => 760,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 760,
			'duracao' => 760,
			'semestresano' => 760,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 760
		),
		array(
			'id' => 761,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 761,
			'duracao' => 761,
			'semestresano' => 761,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 761
		),
		array(
			'id' => 762,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 762,
			'duracao' => 762,
			'semestresano' => 762,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 762
		),
		array(
			'id' => 763,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 763,
			'duracao' => 763,
			'semestresano' => 763,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 763
		),
		array(
			'id' => 764,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 764,
			'duracao' => 764,
			'semestresano' => 764,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 764
		),
		array(
			'id' => 765,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 765,
			'duracao' => 765,
			'semestresano' => 765,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 765
		),
		array(
			'id' => 766,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 766,
			'duracao' => 766,
			'semestresano' => 766,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 766
		),
		array(
			'id' => 767,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 767,
			'duracao' => 767,
			'semestresano' => 767,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 767
		),
		array(
			'id' => 768,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 768,
			'duracao' => 768,
			'semestresano' => 768,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 768
		),
		array(
			'id' => 769,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 769,
			'duracao' => 769,
			'semestresano' => 769,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 769
		),
		array(
			'id' => 770,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 770,
			'duracao' => 770,
			'semestresano' => 770,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 770
		),
		array(
			'id' => 771,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 771,
			'duracao' => 771,
			'semestresano' => 771,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 771
		),
		array(
			'id' => 772,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 772,
			'duracao' => 772,
			'semestresano' => 772,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 772
		),
		array(
			'id' => 773,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 773,
			'duracao' => 773,
			'semestresano' => 773,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 773
		),
		array(
			'id' => 774,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 774,
			'duracao' => 774,
			'semestresano' => 774,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 774
		),
		array(
			'id' => 775,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 775,
			'duracao' => 775,
			'semestresano' => 775,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 775
		),
		array(
			'id' => 776,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 776,
			'duracao' => 776,
			'semestresano' => 776,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 776
		),
		array(
			'id' => 777,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 777,
			'duracao' => 777,
			'semestresano' => 777,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 777
		),
		array(
			'id' => 778,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 778,
			'duracao' => 778,
			'semestresano' => 778,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 778
		),
		array(
			'id' => 779,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 779,
			'duracao' => 779,
			'semestresano' => 779,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 779
		),
		array(
			'id' => 780,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 780,
			'duracao' => 780,
			'semestresano' => 780,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 780
		),
		array(
			'id' => 781,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 781,
			'duracao' => 781,
			'semestresano' => 781,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 781
		),
		array(
			'id' => 782,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 782,
			'duracao' => 782,
			'semestresano' => 782,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 782
		),
		array(
			'id' => 783,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 783,
			'duracao' => 783,
			'semestresano' => 783,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 783
		),
		array(
			'id' => 784,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 784,
			'duracao' => 784,
			'semestresano' => 784,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 784
		),
		array(
			'id' => 785,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 785,
			'duracao' => 785,
			'semestresano' => 785,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 785
		),
		array(
			'id' => 786,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 786,
			'duracao' => 786,
			'semestresano' => 786,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 786
		),
		array(
			'id' => 787,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 787,
			'duracao' => 787,
			'semestresano' => 787,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 787
		),
		array(
			'id' => 788,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 788,
			'duracao' => 788,
			'semestresano' => 788,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 788
		),
		array(
			'id' => 789,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 789,
			'duracao' => 789,
			'semestresano' => 789,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 789
		),
		array(
			'id' => 790,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 790,
			'duracao' => 790,
			'semestresano' => 790,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 790
		),
		array(
			'id' => 791,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 791,
			'duracao' => 791,
			'semestresano' => 791,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 791
		),
		array(
			'id' => 792,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 792,
			'duracao' => 792,
			'semestresano' => 792,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 792
		),
		array(
			'id' => 793,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 793,
			'duracao' => 793,
			'semestresano' => 793,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 793
		),
		array(
			'id' => 794,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 794,
			'duracao' => 794,
			'semestresano' => 794,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 794
		),
		array(
			'id' => 795,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 795,
			'duracao' => 795,
			'semestresano' => 795,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 795
		),
		array(
			'id' => 796,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 796,
			'duracao' => 796,
			'semestresano' => 796,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 796
		),
		array(
			'id' => 797,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 797,
			'duracao' => 797,
			'semestresano' => 797,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 797
		),
		array(
			'id' => 798,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 798,
			'duracao' => 798,
			'semestresano' => 798,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 798
		),
		array(
			'id' => 799,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 799,
			'duracao' => 799,
			'semestresano' => 799,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 799
		),
		array(
			'id' => 800,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 800,
			'duracao' => 800,
			'semestresano' => 800,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 800
		),
		array(
			'id' => 801,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 801,
			'duracao' => 801,
			'semestresano' => 801,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 801
		),
		array(
			'id' => 802,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 802,
			'duracao' => 802,
			'semestresano' => 802,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 802
		),
		array(
			'id' => 803,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 803,
			'duracao' => 803,
			'semestresano' => 803,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 803
		),
		array(
			'id' => 804,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 804,
			'duracao' => 804,
			'semestresano' => 804,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 804
		),
		array(
			'id' => 805,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 805,
			'duracao' => 805,
			'semestresano' => 805,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 805
		),
		array(
			'id' => 806,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 806,
			'duracao' => 806,
			'semestresano' => 806,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 806
		),
		array(
			'id' => 807,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 807,
			'duracao' => 807,
			'semestresano' => 807,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 807
		),
		array(
			'id' => 808,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 808,
			'duracao' => 808,
			'semestresano' => 808,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 808
		),
		array(
			'id' => 809,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 809,
			'duracao' => 809,
			'semestresano' => 809,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 809
		),
		array(
			'id' => 810,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 810,
			'duracao' => 810,
			'semestresano' => 810,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 810
		),
		array(
			'id' => 811,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 811,
			'duracao' => 811,
			'semestresano' => 811,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 811
		),
		array(
			'id' => 812,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 812,
			'duracao' => 812,
			'semestresano' => 812,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 812
		),
		array(
			'id' => 813,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 813,
			'duracao' => 813,
			'semestresano' => 813,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 813
		),
		array(
			'id' => 814,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 814,
			'duracao' => 814,
			'semestresano' => 814,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 814
		),
		array(
			'id' => 815,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 815,
			'duracao' => 815,
			'semestresano' => 815,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 815
		),
		array(
			'id' => 816,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 816,
			'duracao' => 816,
			'semestresano' => 816,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 816
		),
		array(
			'id' => 817,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 817,
			'duracao' => 817,
			'semestresano' => 817,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 817
		),
		array(
			'id' => 818,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 818,
			'duracao' => 818,
			'semestresano' => 818,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 818
		),
		array(
			'id' => 819,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 819,
			'duracao' => 819,
			'semestresano' => 819,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 819
		),
		array(
			'id' => 820,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 820,
			'duracao' => 820,
			'semestresano' => 820,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 820
		),
		array(
			'id' => 821,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 821,
			'duracao' => 821,
			'semestresano' => 821,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 821
		),
		array(
			'id' => 822,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 822,
			'duracao' => 822,
			'semestresano' => 822,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 822
		),
		array(
			'id' => 823,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 823,
			'duracao' => 823,
			'semestresano' => 823,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 823
		),
		array(
			'id' => 824,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 824,
			'duracao' => 824,
			'semestresano' => 824,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 824
		),
		array(
			'id' => 825,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 825,
			'duracao' => 825,
			'semestresano' => 825,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 825
		),
		array(
			'id' => 826,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 826,
			'duracao' => 826,
			'semestresano' => 826,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 826
		),
		array(
			'id' => 827,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 827,
			'duracao' => 827,
			'semestresano' => 827,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 827
		),
		array(
			'id' => 828,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 828,
			'duracao' => 828,
			'semestresano' => 828,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 828
		),
		array(
			'id' => 829,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 829,
			'duracao' => 829,
			'semestresano' => 829,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 829
		),
		array(
			'id' => 830,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 830,
			'duracao' => 830,
			'semestresano' => 830,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 830
		),
		array(
			'id' => 831,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 831,
			'duracao' => 831,
			'semestresano' => 831,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 831
		),
		array(
			'id' => 832,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 832,
			'duracao' => 832,
			'semestresano' => 832,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 832
		),
		array(
			'id' => 833,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 833,
			'duracao' => 833,
			'semestresano' => 833,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 833
		),
		array(
			'id' => 834,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 834,
			'duracao' => 834,
			'semestresano' => 834,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 834
		),
		array(
			'id' => 835,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 835,
			'duracao' => 835,
			'semestresano' => 835,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 835
		),
		array(
			'id' => 836,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 836,
			'duracao' => 836,
			'semestresano' => 836,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 836
		),
		array(
			'id' => 837,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 837,
			'duracao' => 837,
			'semestresano' => 837,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 837
		),
		array(
			'id' => 838,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 838,
			'duracao' => 838,
			'semestresano' => 838,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 838
		),
		array(
			'id' => 839,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 839,
			'duracao' => 839,
			'semestresano' => 839,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 839
		),
		array(
			'id' => 840,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 840,
			'duracao' => 840,
			'semestresano' => 840,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 840
		),
		array(
			'id' => 841,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 841,
			'duracao' => 841,
			'semestresano' => 841,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 841
		),
		array(
			'id' => 842,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 842,
			'duracao' => 842,
			'semestresano' => 842,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 842
		),
		array(
			'id' => 843,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 843,
			'duracao' => 843,
			'semestresano' => 843,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 843
		),
		array(
			'id' => 844,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 844,
			'duracao' => 844,
			'semestresano' => 844,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 844
		),
		array(
			'id' => 845,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 845,
			'duracao' => 845,
			'semestresano' => 845,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 845
		),
		array(
			'id' => 846,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 846,
			'duracao' => 846,
			'semestresano' => 846,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 846
		),
		array(
			'id' => 847,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 847,
			'duracao' => 847,
			'semestresano' => 847,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 847
		),
		array(
			'id' => 848,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 848,
			'duracao' => 848,
			'semestresano' => 848,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 848
		),
		array(
			'id' => 849,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 849,
			'duracao' => 849,
			'semestresano' => 849,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 849
		),
		array(
			'id' => 850,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 850,
			'duracao' => 850,
			'semestresano' => 850,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 850
		),
		array(
			'id' => 851,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 851,
			'duracao' => 851,
			'semestresano' => 851,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 851
		),
		array(
			'id' => 852,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 852,
			'duracao' => 852,
			'semestresano' => 852,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 852
		),
		array(
			'id' => 853,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 853,
			'duracao' => 853,
			'semestresano' => 853,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 853
		),
		array(
			'id' => 854,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 854,
			'duracao' => 854,
			'semestresano' => 854,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 854
		),
		array(
			'id' => 855,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 855,
			'duracao' => 855,
			'semestresano' => 855,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 855
		),
		array(
			'id' => 856,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 856,
			'duracao' => 856,
			'semestresano' => 856,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 856
		),
		array(
			'id' => 857,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 857,
			'duracao' => 857,
			'semestresano' => 857,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 857
		),
		array(
			'id' => 858,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 858,
			'duracao' => 858,
			'semestresano' => 858,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 858
		),
		array(
			'id' => 859,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 859,
			'duracao' => 859,
			'semestresano' => 859,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 859
		),
		array(
			'id' => 860,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 860,
			'duracao' => 860,
			'semestresano' => 860,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 860
		),
		array(
			'id' => 861,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 861,
			'duracao' => 861,
			'semestresano' => 861,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 861
		),
		array(
			'id' => 862,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 862,
			'duracao' => 862,
			'semestresano' => 862,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 862
		),
		array(
			'id' => 863,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 863,
			'duracao' => 863,
			'semestresano' => 863,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 863
		),
		array(
			'id' => 864,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 864,
			'duracao' => 864,
			'semestresano' => 864,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 864
		),
		array(
			'id' => 865,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 865,
			'duracao' => 865,
			'semestresano' => 865,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 865
		),
		array(
			'id' => 866,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 866,
			'duracao' => 866,
			'semestresano' => 866,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 866
		),
		array(
			'id' => 867,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 867,
			'duracao' => 867,
			'semestresano' => 867,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 867
		),
		array(
			'id' => 868,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 868,
			'duracao' => 868,
			'semestresano' => 868,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 868
		),
		array(
			'id' => 869,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 869,
			'duracao' => 869,
			'semestresano' => 869,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 869
		),
		array(
			'id' => 870,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 870,
			'duracao' => 870,
			'semestresano' => 870,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 870
		),
		array(
			'id' => 871,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 871,
			'duracao' => 871,
			'semestresano' => 871,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 871
		),
		array(
			'id' => 872,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 872,
			'duracao' => 872,
			'semestresano' => 872,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 872
		),
		array(
			'id' => 873,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 873,
			'duracao' => 873,
			'semestresano' => 873,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 873
		),
		array(
			'id' => 874,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 874,
			'duracao' => 874,
			'semestresano' => 874,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 874
		),
		array(
			'id' => 875,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 875,
			'duracao' => 875,
			'semestresano' => 875,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 875
		),
		array(
			'id' => 876,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 876,
			'duracao' => 876,
			'semestresano' => 876,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 876
		),
		array(
			'id' => 877,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 877,
			'duracao' => 877,
			'semestresano' => 877,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 877
		),
		array(
			'id' => 878,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 878,
			'duracao' => 878,
			'semestresano' => 878,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 878
		),
		array(
			'id' => 879,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 879,
			'duracao' => 879,
			'semestresano' => 879,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 879
		),
		array(
			'id' => 880,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 880,
			'duracao' => 880,
			'semestresano' => 880,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 880
		),
		array(
			'id' => 881,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 881,
			'duracao' => 881,
			'semestresano' => 881,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 881
		),
		array(
			'id' => 882,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 882,
			'duracao' => 882,
			'semestresano' => 882,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 882
		),
		array(
			'id' => 883,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 883,
			'duracao' => 883,
			'semestresano' => 883,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 883
		),
		array(
			'id' => 884,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 884,
			'duracao' => 884,
			'semestresano' => 884,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 884
		),
		array(
			'id' => 885,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 885,
			'duracao' => 885,
			'semestresano' => 885,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 885
		),
		array(
			'id' => 886,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 886,
			'duracao' => 886,
			'semestresano' => 886,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 886
		),
		array(
			'id' => 887,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 887,
			'duracao' => 887,
			'semestresano' => 887,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 887
		),
		array(
			'id' => 888,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 888,
			'duracao' => 888,
			'semestresano' => 888,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 888
		),
		array(
			'id' => 889,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 889,
			'duracao' => 889,
			'semestresano' => 889,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 889
		),
		array(
			'id' => 890,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 890,
			'duracao' => 890,
			'semestresano' => 890,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 890
		),
		array(
			'id' => 891,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 891,
			'duracao' => 891,
			'semestresano' => 891,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 891
		),
		array(
			'id' => 892,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 892,
			'duracao' => 892,
			'semestresano' => 892,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 892
		),
		array(
			'id' => 893,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 893,
			'duracao' => 893,
			'semestresano' => 893,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 893
		),
		array(
			'id' => 894,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 894,
			'duracao' => 894,
			'semestresano' => 894,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 894
		),
		array(
			'id' => 895,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 895,
			'duracao' => 895,
			'semestresano' => 895,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 895
		),
		array(
			'id' => 896,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 896,
			'duracao' => 896,
			'semestresano' => 896,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 896
		),
		array(
			'id' => 897,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 897,
			'duracao' => 897,
			'semestresano' => 897,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 897
		),
		array(
			'id' => 898,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 898,
			'duracao' => 898,
			'semestresano' => 898,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 898
		),
		array(
			'id' => 899,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 899,
			'duracao' => 899,
			'semestresano' => 899,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 899
		),
		array(
			'id' => 900,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 900,
			'duracao' => 900,
			'semestresano' => 900,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 900
		),
		array(
			'id' => 901,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 901,
			'duracao' => 901,
			'semestresano' => 901,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 901
		),
		array(
			'id' => 902,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 902,
			'duracao' => 902,
			'semestresano' => 902,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 902
		),
		array(
			'id' => 903,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 903,
			'duracao' => 903,
			'semestresano' => 903,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 903
		),
		array(
			'id' => 904,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 904,
			'duracao' => 904,
			'semestresano' => 904,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 904
		),
		array(
			'id' => 905,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 905,
			'duracao' => 905,
			'semestresano' => 905,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 905
		),
		array(
			'id' => 906,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 906,
			'duracao' => 906,
			'semestresano' => 906,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 906
		),
		array(
			'id' => 907,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 907,
			'duracao' => 907,
			'semestresano' => 907,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 907
		),
		array(
			'id' => 908,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 908,
			'duracao' => 908,
			'semestresano' => 908,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 908
		),
		array(
			'id' => 909,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 909,
			'duracao' => 909,
			'semestresano' => 909,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 909
		),
		array(
			'id' => 910,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 910,
			'duracao' => 910,
			'semestresano' => 910,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 910
		),
		array(
			'id' => 911,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 911,
			'duracao' => 911,
			'semestresano' => 911,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 911
		),
		array(
			'id' => 912,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 912,
			'duracao' => 912,
			'semestresano' => 912,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 912
		),
		array(
			'id' => 913,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 913,
			'duracao' => 913,
			'semestresano' => 913,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 913
		),
		array(
			'id' => 914,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 914,
			'duracao' => 914,
			'semestresano' => 914,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 914
		),
		array(
			'id' => 915,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 915,
			'duracao' => 915,
			'semestresano' => 915,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 915
		),
		array(
			'id' => 916,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 916,
			'duracao' => 916,
			'semestresano' => 916,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 916
		),
		array(
			'id' => 917,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 917,
			'duracao' => 917,
			'semestresano' => 917,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 917
		),
		array(
			'id' => 918,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 918,
			'duracao' => 918,
			'semestresano' => 918,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 918
		),
		array(
			'id' => 919,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 919,
			'duracao' => 919,
			'semestresano' => 919,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 919
		),
		array(
			'id' => 920,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 920,
			'duracao' => 920,
			'semestresano' => 920,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 920
		),
		array(
			'id' => 921,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 921,
			'duracao' => 921,
			'semestresano' => 921,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 921
		),
		array(
			'id' => 922,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 922,
			'duracao' => 922,
			'semestresano' => 922,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 922
		),
		array(
			'id' => 923,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 923,
			'duracao' => 923,
			'semestresano' => 923,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 923
		),
		array(
			'id' => 924,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 924,
			'duracao' => 924,
			'semestresano' => 924,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 924
		),
		array(
			'id' => 925,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 925,
			'duracao' => 925,
			'semestresano' => 925,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 925
		),
		array(
			'id' => 926,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 926,
			'duracao' => 926,
			'semestresano' => 926,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 926
		),
		array(
			'id' => 927,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 927,
			'duracao' => 927,
			'semestresano' => 927,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 927
		),
		array(
			'id' => 928,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 928,
			'duracao' => 928,
			'semestresano' => 928,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 928
		),
		array(
			'id' => 929,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 929,
			'duracao' => 929,
			'semestresano' => 929,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 929
		),
		array(
			'id' => 930,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 930,
			'duracao' => 930,
			'semestresano' => 930,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 930
		),
		array(
			'id' => 931,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 931,
			'duracao' => 931,
			'semestresano' => 931,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 931
		),
		array(
			'id' => 932,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 932,
			'duracao' => 932,
			'semestresano' => 932,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 932
		),
		array(
			'id' => 933,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 933,
			'duracao' => 933,
			'semestresano' => 933,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 933
		),
		array(
			'id' => 934,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 934,
			'duracao' => 934,
			'semestresano' => 934,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 934
		),
		array(
			'id' => 935,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 935,
			'duracao' => 935,
			'semestresano' => 935,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 935
		),
		array(
			'id' => 936,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 936,
			'duracao' => 936,
			'semestresano' => 936,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 936
		),
		array(
			'id' => 937,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 937,
			'duracao' => 937,
			'semestresano' => 937,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 937
		),
		array(
			'id' => 938,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 938,
			'duracao' => 938,
			'semestresano' => 938,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 938
		),
		array(
			'id' => 939,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 939,
			'duracao' => 939,
			'semestresano' => 939,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 939
		),
		array(
			'id' => 940,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 940,
			'duracao' => 940,
			'semestresano' => 940,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 940
		),
		array(
			'id' => 941,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 941,
			'duracao' => 941,
			'semestresano' => 941,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 941
		),
		array(
			'id' => 942,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 942,
			'duracao' => 942,
			'semestresano' => 942,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 942
		),
		array(
			'id' => 943,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 943,
			'duracao' => 943,
			'semestresano' => 943,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 943
		),
		array(
			'id' => 944,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 944,
			'duracao' => 944,
			'semestresano' => 944,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 944
		),
		array(
			'id' => 945,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 945,
			'duracao' => 945,
			'semestresano' => 945,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 945
		),
		array(
			'id' => 946,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 946,
			'duracao' => 946,
			'semestresano' => 946,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 946
		),
		array(
			'id' => 947,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 947,
			'duracao' => 947,
			'semestresano' => 947,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 947
		),
		array(
			'id' => 948,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 948,
			'duracao' => 948,
			'semestresano' => 948,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 948
		),
		array(
			'id' => 949,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 949,
			'duracao' => 949,
			'semestresano' => 949,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 949
		),
		array(
			'id' => 950,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 950,
			'duracao' => 950,
			'semestresano' => 950,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 950
		),
		array(
			'id' => 951,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 951,
			'duracao' => 951,
			'semestresano' => 951,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 951
		),
		array(
			'id' => 952,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 952,
			'duracao' => 952,
			'semestresano' => 952,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 952
		),
		array(
			'id' => 953,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 953,
			'duracao' => 953,
			'semestresano' => 953,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 953
		),
		array(
			'id' => 954,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 954,
			'duracao' => 954,
			'semestresano' => 954,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 954
		),
		array(
			'id' => 955,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 955,
			'duracao' => 955,
			'semestresano' => 955,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 955
		),
		array(
			'id' => 956,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 956,
			'duracao' => 956,
			'semestresano' => 956,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 956
		),
		array(
			'id' => 957,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 957,
			'duracao' => 957,
			'semestresano' => 957,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 957
		),
		array(
			'id' => 958,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 958,
			'duracao' => 958,
			'semestresano' => 958,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 958
		),
		array(
			'id' => 959,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 959,
			'duracao' => 959,
			'semestresano' => 959,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 959
		),
		array(
			'id' => 960,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 960,
			'duracao' => 960,
			'semestresano' => 960,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 960
		),
		array(
			'id' => 961,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 961,
			'duracao' => 961,
			'semestresano' => 961,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 961
		),
		array(
			'id' => 962,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 962,
			'duracao' => 962,
			'semestresano' => 962,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 962
		),
		array(
			'id' => 963,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 963,
			'duracao' => 963,
			'semestresano' => 963,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 963
		),
		array(
			'id' => 964,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 964,
			'duracao' => 964,
			'semestresano' => 964,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 964
		),
		array(
			'id' => 965,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 965,
			'duracao' => 965,
			'semestresano' => 965,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 965
		),
		array(
			'id' => 966,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 966,
			'duracao' => 966,
			'semestresano' => 966,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 966
		),
		array(
			'id' => 967,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 967,
			'duracao' => 967,
			'semestresano' => 967,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 967
		),
		array(
			'id' => 968,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 968,
			'duracao' => 968,
			'semestresano' => 968,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 968
		),
		array(
			'id' => 969,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 969,
			'duracao' => 969,
			'semestresano' => 969,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 969
		),
		array(
			'id' => 970,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 970,
			'duracao' => 970,
			'semestresano' => 970,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 970
		),
		array(
			'id' => 971,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 971,
			'duracao' => 971,
			'semestresano' => 971,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 971
		),
		array(
			'id' => 972,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 972,
			'duracao' => 972,
			'semestresano' => 972,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 972
		),
		array(
			'id' => 973,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 973,
			'duracao' => 973,
			'semestresano' => 973,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 973
		),
		array(
			'id' => 974,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 974,
			'duracao' => 974,
			'semestresano' => 974,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 974
		),
		array(
			'id' => 975,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 975,
			'duracao' => 975,
			'semestresano' => 975,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 975
		),
		array(
			'id' => 976,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 976,
			'duracao' => 976,
			'semestresano' => 976,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 976
		),
		array(
			'id' => 977,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 977,
			'duracao' => 977,
			'semestresano' => 977,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 977
		),
		array(
			'id' => 978,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 978,
			'duracao' => 978,
			'semestresano' => 978,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 978
		),
		array(
			'id' => 979,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 979,
			'duracao' => 979,
			'semestresano' => 979,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 979
		),
		array(
			'id' => 980,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 980,
			'duracao' => 980,
			'semestresano' => 980,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 980
		),
		array(
			'id' => 981,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 981,
			'duracao' => 981,
			'semestresano' => 981,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 981
		),
		array(
			'id' => 982,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 982,
			'duracao' => 982,
			'semestresano' => 982,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 982
		),
		array(
			'id' => 983,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 983,
			'duracao' => 983,
			'semestresano' => 983,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 983
		),
		array(
			'id' => 984,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 984,
			'duracao' => 984,
			'semestresano' => 984,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 984
		),
		array(
			'id' => 985,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 985,
			'duracao' => 985,
			'semestresano' => 985,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 985
		),
		array(
			'id' => 986,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 986,
			'duracao' => 986,
			'semestresano' => 986,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 986
		),
		array(
			'id' => 987,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 987,
			'duracao' => 987,
			'semestresano' => 987,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 987
		),
		array(
			'id' => 988,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 988,
			'duracao' => 988,
			'semestresano' => 988,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 988
		),
		array(
			'id' => 989,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 989,
			'duracao' => 989,
			'semestresano' => 989,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 989
		),
		array(
			'id' => 990,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 990,
			'duracao' => 990,
			'semestresano' => 990,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 990
		),
		array(
			'id' => 991,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 991,
			'duracao' => 991,
			'semestresano' => 991,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 991
		),
		array(
			'id' => 992,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 992,
			'duracao' => 992,
			'semestresano' => 992,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 992
		),
		array(
			'id' => 993,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 993,
			'duracao' => 993,
			'semestresano' => 993,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 993
		),
		array(
			'id' => 994,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 994,
			'duracao' => 994,
			'semestresano' => 994,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 994
		),
		array(
			'id' => 995,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 995,
			'duracao' => 995,
			'semestresano' => 995,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 995
		),
		array(
			'id' => 996,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 996,
			'duracao' => 996,
			'semestresano' => 996,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 996
		),
		array(
			'id' => 997,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 997,
			'duracao' => 997,
			'semestresano' => 997,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 997
		),
		array(
			'id' => 998,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 998,
			'duracao' => 998,
			'semestresano' => 998,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 998
		),
		array(
			'id' => 999,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 999,
			'duracao' => 999,
			'semestresano' => 999,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 999
		),
		array(
			'id' => 1000,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 1000,
			'duracao' => 1000,
			'semestresano' => 1000,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 1000
		),
	);

}
