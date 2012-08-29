<?php
/**
 * GrupodisciplinaFixture
 *
 */
class GrupodisciplinaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'planoestudo_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tipoprecedencia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'grupodisciplinasprec' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'planoestudo_id' => 1,
			'tipoprecedencia_id' => 1,
			'disciplina_id' => 1,
			'grupodisciplinasprec' => 1
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 2,
			'tipoprecedencia_id' => 2,
			'disciplina_id' => 2,
			'grupodisciplinasprec' => 2
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 3,
			'tipoprecedencia_id' => 3,
			'disciplina_id' => 3,
			'grupodisciplinasprec' => 3
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 4,
			'tipoprecedencia_id' => 4,
			'disciplina_id' => 4,
			'grupodisciplinasprec' => 4
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 5,
			'tipoprecedencia_id' => 5,
			'disciplina_id' => 5,
			'grupodisciplinasprec' => 5
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 6,
			'tipoprecedencia_id' => 6,
			'disciplina_id' => 6,
			'grupodisciplinasprec' => 6
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 7,
			'tipoprecedencia_id' => 7,
			'disciplina_id' => 7,
			'grupodisciplinasprec' => 7
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 8,
			'tipoprecedencia_id' => 8,
			'disciplina_id' => 8,
			'grupodisciplinasprec' => 8
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 9,
			'tipoprecedencia_id' => 9,
			'disciplina_id' => 9,
			'grupodisciplinasprec' => 9
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 10,
			'tipoprecedencia_id' => 10,
			'disciplina_id' => 10,
			'grupodisciplinasprec' => 10
		),
		array(
			'id' => 11,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 11,
			'tipoprecedencia_id' => 11,
			'disciplina_id' => 11,
			'grupodisciplinasprec' => 11
		),
		array(
			'id' => 12,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 12,
			'tipoprecedencia_id' => 12,
			'disciplina_id' => 12,
			'grupodisciplinasprec' => 12
		),
		array(
			'id' => 13,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 13,
			'tipoprecedencia_id' => 13,
			'disciplina_id' => 13,
			'grupodisciplinasprec' => 13
		),
		array(
			'id' => 14,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 14,
			'tipoprecedencia_id' => 14,
			'disciplina_id' => 14,
			'grupodisciplinasprec' => 14
		),
		array(
			'id' => 15,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 15,
			'tipoprecedencia_id' => 15,
			'disciplina_id' => 15,
			'grupodisciplinasprec' => 15
		),
		array(
			'id' => 16,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 16,
			'tipoprecedencia_id' => 16,
			'disciplina_id' => 16,
			'grupodisciplinasprec' => 16
		),
		array(
			'id' => 17,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 17,
			'tipoprecedencia_id' => 17,
			'disciplina_id' => 17,
			'grupodisciplinasprec' => 17
		),
		array(
			'id' => 18,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 18,
			'tipoprecedencia_id' => 18,
			'disciplina_id' => 18,
			'grupodisciplinasprec' => 18
		),
		array(
			'id' => 19,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 19,
			'tipoprecedencia_id' => 19,
			'disciplina_id' => 19,
			'grupodisciplinasprec' => 19
		),
		array(
			'id' => 20,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 20,
			'tipoprecedencia_id' => 20,
			'disciplina_id' => 20,
			'grupodisciplinasprec' => 20
		),
		array(
			'id' => 21,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 21,
			'tipoprecedencia_id' => 21,
			'disciplina_id' => 21,
			'grupodisciplinasprec' => 21
		),
		array(
			'id' => 22,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 22,
			'tipoprecedencia_id' => 22,
			'disciplina_id' => 22,
			'grupodisciplinasprec' => 22
		),
		array(
			'id' => 23,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 23,
			'tipoprecedencia_id' => 23,
			'disciplina_id' => 23,
			'grupodisciplinasprec' => 23
		),
		array(
			'id' => 24,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 24,
			'tipoprecedencia_id' => 24,
			'disciplina_id' => 24,
			'grupodisciplinasprec' => 24
		),
		array(
			'id' => 25,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 25,
			'tipoprecedencia_id' => 25,
			'disciplina_id' => 25,
			'grupodisciplinasprec' => 25
		),
		array(
			'id' => 26,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 26,
			'tipoprecedencia_id' => 26,
			'disciplina_id' => 26,
			'grupodisciplinasprec' => 26
		),
		array(
			'id' => 27,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 27,
			'tipoprecedencia_id' => 27,
			'disciplina_id' => 27,
			'grupodisciplinasprec' => 27
		),
		array(
			'id' => 28,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 28,
			'tipoprecedencia_id' => 28,
			'disciplina_id' => 28,
			'grupodisciplinasprec' => 28
		),
		array(
			'id' => 29,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 29,
			'tipoprecedencia_id' => 29,
			'disciplina_id' => 29,
			'grupodisciplinasprec' => 29
		),
		array(
			'id' => 30,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 30,
			'tipoprecedencia_id' => 30,
			'disciplina_id' => 30,
			'grupodisciplinasprec' => 30
		),
		array(
			'id' => 31,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 31,
			'tipoprecedencia_id' => 31,
			'disciplina_id' => 31,
			'grupodisciplinasprec' => 31
		),
		array(
			'id' => 32,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 32,
			'tipoprecedencia_id' => 32,
			'disciplina_id' => 32,
			'grupodisciplinasprec' => 32
		),
		array(
			'id' => 33,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 33,
			'tipoprecedencia_id' => 33,
			'disciplina_id' => 33,
			'grupodisciplinasprec' => 33
		),
		array(
			'id' => 34,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 34,
			'tipoprecedencia_id' => 34,
			'disciplina_id' => 34,
			'grupodisciplinasprec' => 34
		),
		array(
			'id' => 35,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 35,
			'tipoprecedencia_id' => 35,
			'disciplina_id' => 35,
			'grupodisciplinasprec' => 35
		),
		array(
			'id' => 36,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 36,
			'tipoprecedencia_id' => 36,
			'disciplina_id' => 36,
			'grupodisciplinasprec' => 36
		),
		array(
			'id' => 37,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 37,
			'tipoprecedencia_id' => 37,
			'disciplina_id' => 37,
			'grupodisciplinasprec' => 37
		),
		array(
			'id' => 38,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 38,
			'tipoprecedencia_id' => 38,
			'disciplina_id' => 38,
			'grupodisciplinasprec' => 38
		),
		array(
			'id' => 39,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 39,
			'tipoprecedencia_id' => 39,
			'disciplina_id' => 39,
			'grupodisciplinasprec' => 39
		),
		array(
			'id' => 40,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 40,
			'tipoprecedencia_id' => 40,
			'disciplina_id' => 40,
			'grupodisciplinasprec' => 40
		),
		array(
			'id' => 41,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 41,
			'tipoprecedencia_id' => 41,
			'disciplina_id' => 41,
			'grupodisciplinasprec' => 41
		),
		array(
			'id' => 42,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 42,
			'tipoprecedencia_id' => 42,
			'disciplina_id' => 42,
			'grupodisciplinasprec' => 42
		),
		array(
			'id' => 43,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 43,
			'tipoprecedencia_id' => 43,
			'disciplina_id' => 43,
			'grupodisciplinasprec' => 43
		),
		array(
			'id' => 44,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 44,
			'tipoprecedencia_id' => 44,
			'disciplina_id' => 44,
			'grupodisciplinasprec' => 44
		),
		array(
			'id' => 45,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 45,
			'tipoprecedencia_id' => 45,
			'disciplina_id' => 45,
			'grupodisciplinasprec' => 45
		),
		array(
			'id' => 46,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 46,
			'tipoprecedencia_id' => 46,
			'disciplina_id' => 46,
			'grupodisciplinasprec' => 46
		),
		array(
			'id' => 47,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 47,
			'tipoprecedencia_id' => 47,
			'disciplina_id' => 47,
			'grupodisciplinasprec' => 47
		),
		array(
			'id' => 48,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 48,
			'tipoprecedencia_id' => 48,
			'disciplina_id' => 48,
			'grupodisciplinasprec' => 48
		),
		array(
			'id' => 49,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 49,
			'tipoprecedencia_id' => 49,
			'disciplina_id' => 49,
			'grupodisciplinasprec' => 49
		),
		array(
			'id' => 50,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 50,
			'tipoprecedencia_id' => 50,
			'disciplina_id' => 50,
			'grupodisciplinasprec' => 50
		),
		array(
			'id' => 51,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 51,
			'tipoprecedencia_id' => 51,
			'disciplina_id' => 51,
			'grupodisciplinasprec' => 51
		),
		array(
			'id' => 52,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 52,
			'tipoprecedencia_id' => 52,
			'disciplina_id' => 52,
			'grupodisciplinasprec' => 52
		),
		array(
			'id' => 53,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 53,
			'tipoprecedencia_id' => 53,
			'disciplina_id' => 53,
			'grupodisciplinasprec' => 53
		),
		array(
			'id' => 54,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 54,
			'tipoprecedencia_id' => 54,
			'disciplina_id' => 54,
			'grupodisciplinasprec' => 54
		),
		array(
			'id' => 55,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 55,
			'tipoprecedencia_id' => 55,
			'disciplina_id' => 55,
			'grupodisciplinasprec' => 55
		),
		array(
			'id' => 56,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 56,
			'tipoprecedencia_id' => 56,
			'disciplina_id' => 56,
			'grupodisciplinasprec' => 56
		),
		array(
			'id' => 57,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 57,
			'tipoprecedencia_id' => 57,
			'disciplina_id' => 57,
			'grupodisciplinasprec' => 57
		),
		array(
			'id' => 58,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 58,
			'tipoprecedencia_id' => 58,
			'disciplina_id' => 58,
			'grupodisciplinasprec' => 58
		),
		array(
			'id' => 59,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 59,
			'tipoprecedencia_id' => 59,
			'disciplina_id' => 59,
			'grupodisciplinasprec' => 59
		),
		array(
			'id' => 60,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 60,
			'tipoprecedencia_id' => 60,
			'disciplina_id' => 60,
			'grupodisciplinasprec' => 60
		),
		array(
			'id' => 61,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 61,
			'tipoprecedencia_id' => 61,
			'disciplina_id' => 61,
			'grupodisciplinasprec' => 61
		),
		array(
			'id' => 62,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 62,
			'tipoprecedencia_id' => 62,
			'disciplina_id' => 62,
			'grupodisciplinasprec' => 62
		),
		array(
			'id' => 63,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 63,
			'tipoprecedencia_id' => 63,
			'disciplina_id' => 63,
			'grupodisciplinasprec' => 63
		),
		array(
			'id' => 64,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 64,
			'tipoprecedencia_id' => 64,
			'disciplina_id' => 64,
			'grupodisciplinasprec' => 64
		),
		array(
			'id' => 65,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 65,
			'tipoprecedencia_id' => 65,
			'disciplina_id' => 65,
			'grupodisciplinasprec' => 65
		),
		array(
			'id' => 66,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 66,
			'tipoprecedencia_id' => 66,
			'disciplina_id' => 66,
			'grupodisciplinasprec' => 66
		),
		array(
			'id' => 67,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 67,
			'tipoprecedencia_id' => 67,
			'disciplina_id' => 67,
			'grupodisciplinasprec' => 67
		),
		array(
			'id' => 68,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 68,
			'tipoprecedencia_id' => 68,
			'disciplina_id' => 68,
			'grupodisciplinasprec' => 68
		),
		array(
			'id' => 69,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 69,
			'tipoprecedencia_id' => 69,
			'disciplina_id' => 69,
			'grupodisciplinasprec' => 69
		),
		array(
			'id' => 70,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 70,
			'tipoprecedencia_id' => 70,
			'disciplina_id' => 70,
			'grupodisciplinasprec' => 70
		),
		array(
			'id' => 71,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 71,
			'tipoprecedencia_id' => 71,
			'disciplina_id' => 71,
			'grupodisciplinasprec' => 71
		),
		array(
			'id' => 72,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 72,
			'tipoprecedencia_id' => 72,
			'disciplina_id' => 72,
			'grupodisciplinasprec' => 72
		),
		array(
			'id' => 73,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 73,
			'tipoprecedencia_id' => 73,
			'disciplina_id' => 73,
			'grupodisciplinasprec' => 73
		),
		array(
			'id' => 74,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 74,
			'tipoprecedencia_id' => 74,
			'disciplina_id' => 74,
			'grupodisciplinasprec' => 74
		),
		array(
			'id' => 75,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 75,
			'tipoprecedencia_id' => 75,
			'disciplina_id' => 75,
			'grupodisciplinasprec' => 75
		),
		array(
			'id' => 76,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 76,
			'tipoprecedencia_id' => 76,
			'disciplina_id' => 76,
			'grupodisciplinasprec' => 76
		),
		array(
			'id' => 77,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 77,
			'tipoprecedencia_id' => 77,
			'disciplina_id' => 77,
			'grupodisciplinasprec' => 77
		),
		array(
			'id' => 78,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 78,
			'tipoprecedencia_id' => 78,
			'disciplina_id' => 78,
			'grupodisciplinasprec' => 78
		),
		array(
			'id' => 79,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 79,
			'tipoprecedencia_id' => 79,
			'disciplina_id' => 79,
			'grupodisciplinasprec' => 79
		),
		array(
			'id' => 80,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 80,
			'tipoprecedencia_id' => 80,
			'disciplina_id' => 80,
			'grupodisciplinasprec' => 80
		),
		array(
			'id' => 81,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 81,
			'tipoprecedencia_id' => 81,
			'disciplina_id' => 81,
			'grupodisciplinasprec' => 81
		),
		array(
			'id' => 82,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 82,
			'tipoprecedencia_id' => 82,
			'disciplina_id' => 82,
			'grupodisciplinasprec' => 82
		),
		array(
			'id' => 83,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 83,
			'tipoprecedencia_id' => 83,
			'disciplina_id' => 83,
			'grupodisciplinasprec' => 83
		),
		array(
			'id' => 84,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 84,
			'tipoprecedencia_id' => 84,
			'disciplina_id' => 84,
			'grupodisciplinasprec' => 84
		),
		array(
			'id' => 85,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 85,
			'tipoprecedencia_id' => 85,
			'disciplina_id' => 85,
			'grupodisciplinasprec' => 85
		),
		array(
			'id' => 86,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 86,
			'tipoprecedencia_id' => 86,
			'disciplina_id' => 86,
			'grupodisciplinasprec' => 86
		),
		array(
			'id' => 87,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 87,
			'tipoprecedencia_id' => 87,
			'disciplina_id' => 87,
			'grupodisciplinasprec' => 87
		),
		array(
			'id' => 88,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 88,
			'tipoprecedencia_id' => 88,
			'disciplina_id' => 88,
			'grupodisciplinasprec' => 88
		),
		array(
			'id' => 89,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 89,
			'tipoprecedencia_id' => 89,
			'disciplina_id' => 89,
			'grupodisciplinasprec' => 89
		),
		array(
			'id' => 90,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 90,
			'tipoprecedencia_id' => 90,
			'disciplina_id' => 90,
			'grupodisciplinasprec' => 90
		),
		array(
			'id' => 91,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 91,
			'tipoprecedencia_id' => 91,
			'disciplina_id' => 91,
			'grupodisciplinasprec' => 91
		),
		array(
			'id' => 92,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 92,
			'tipoprecedencia_id' => 92,
			'disciplina_id' => 92,
			'grupodisciplinasprec' => 92
		),
		array(
			'id' => 93,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 93,
			'tipoprecedencia_id' => 93,
			'disciplina_id' => 93,
			'grupodisciplinasprec' => 93
		),
		array(
			'id' => 94,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 94,
			'tipoprecedencia_id' => 94,
			'disciplina_id' => 94,
			'grupodisciplinasprec' => 94
		),
		array(
			'id' => 95,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 95,
			'tipoprecedencia_id' => 95,
			'disciplina_id' => 95,
			'grupodisciplinasprec' => 95
		),
		array(
			'id' => 96,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 96,
			'tipoprecedencia_id' => 96,
			'disciplina_id' => 96,
			'grupodisciplinasprec' => 96
		),
		array(
			'id' => 97,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 97,
			'tipoprecedencia_id' => 97,
			'disciplina_id' => 97,
			'grupodisciplinasprec' => 97
		),
		array(
			'id' => 98,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 98,
			'tipoprecedencia_id' => 98,
			'disciplina_id' => 98,
			'grupodisciplinasprec' => 98
		),
		array(
			'id' => 99,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 99,
			'tipoprecedencia_id' => 99,
			'disciplina_id' => 99,
			'grupodisciplinasprec' => 99
		),
		array(
			'id' => 100,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 100,
			'tipoprecedencia_id' => 100,
			'disciplina_id' => 100,
			'grupodisciplinasprec' => 100
		),
		array(
			'id' => 101,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 101,
			'tipoprecedencia_id' => 101,
			'disciplina_id' => 101,
			'grupodisciplinasprec' => 101
		),
		array(
			'id' => 102,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 102,
			'tipoprecedencia_id' => 102,
			'disciplina_id' => 102,
			'grupodisciplinasprec' => 102
		),
		array(
			'id' => 103,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 103,
			'tipoprecedencia_id' => 103,
			'disciplina_id' => 103,
			'grupodisciplinasprec' => 103
		),
		array(
			'id' => 104,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 104,
			'tipoprecedencia_id' => 104,
			'disciplina_id' => 104,
			'grupodisciplinasprec' => 104
		),
		array(
			'id' => 105,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 105,
			'tipoprecedencia_id' => 105,
			'disciplina_id' => 105,
			'grupodisciplinasprec' => 105
		),
		array(
			'id' => 106,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 106,
			'tipoprecedencia_id' => 106,
			'disciplina_id' => 106,
			'grupodisciplinasprec' => 106
		),
		array(
			'id' => 107,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 107,
			'tipoprecedencia_id' => 107,
			'disciplina_id' => 107,
			'grupodisciplinasprec' => 107
		),
		array(
			'id' => 108,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 108,
			'tipoprecedencia_id' => 108,
			'disciplina_id' => 108,
			'grupodisciplinasprec' => 108
		),
		array(
			'id' => 109,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 109,
			'tipoprecedencia_id' => 109,
			'disciplina_id' => 109,
			'grupodisciplinasprec' => 109
		),
		array(
			'id' => 110,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 110,
			'tipoprecedencia_id' => 110,
			'disciplina_id' => 110,
			'grupodisciplinasprec' => 110
		),
		array(
			'id' => 111,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 111,
			'tipoprecedencia_id' => 111,
			'disciplina_id' => 111,
			'grupodisciplinasprec' => 111
		),
		array(
			'id' => 112,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 112,
			'tipoprecedencia_id' => 112,
			'disciplina_id' => 112,
			'grupodisciplinasprec' => 112
		),
		array(
			'id' => 113,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 113,
			'tipoprecedencia_id' => 113,
			'disciplina_id' => 113,
			'grupodisciplinasprec' => 113
		),
		array(
			'id' => 114,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 114,
			'tipoprecedencia_id' => 114,
			'disciplina_id' => 114,
			'grupodisciplinasprec' => 114
		),
		array(
			'id' => 115,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 115,
			'tipoprecedencia_id' => 115,
			'disciplina_id' => 115,
			'grupodisciplinasprec' => 115
		),
		array(
			'id' => 116,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 116,
			'tipoprecedencia_id' => 116,
			'disciplina_id' => 116,
			'grupodisciplinasprec' => 116
		),
		array(
			'id' => 117,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 117,
			'tipoprecedencia_id' => 117,
			'disciplina_id' => 117,
			'grupodisciplinasprec' => 117
		),
		array(
			'id' => 118,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 118,
			'tipoprecedencia_id' => 118,
			'disciplina_id' => 118,
			'grupodisciplinasprec' => 118
		),
		array(
			'id' => 119,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 119,
			'tipoprecedencia_id' => 119,
			'disciplina_id' => 119,
			'grupodisciplinasprec' => 119
		),
		array(
			'id' => 120,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 120,
			'tipoprecedencia_id' => 120,
			'disciplina_id' => 120,
			'grupodisciplinasprec' => 120
		),
		array(
			'id' => 121,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 121,
			'tipoprecedencia_id' => 121,
			'disciplina_id' => 121,
			'grupodisciplinasprec' => 121
		),
		array(
			'id' => 122,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 122,
			'tipoprecedencia_id' => 122,
			'disciplina_id' => 122,
			'grupodisciplinasprec' => 122
		),
		array(
			'id' => 123,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 123,
			'tipoprecedencia_id' => 123,
			'disciplina_id' => 123,
			'grupodisciplinasprec' => 123
		),
		array(
			'id' => 124,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 124,
			'tipoprecedencia_id' => 124,
			'disciplina_id' => 124,
			'grupodisciplinasprec' => 124
		),
		array(
			'id' => 125,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 125,
			'tipoprecedencia_id' => 125,
			'disciplina_id' => 125,
			'grupodisciplinasprec' => 125
		),
		array(
			'id' => 126,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 126,
			'tipoprecedencia_id' => 126,
			'disciplina_id' => 126,
			'grupodisciplinasprec' => 126
		),
		array(
			'id' => 127,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 127,
			'tipoprecedencia_id' => 127,
			'disciplina_id' => 127,
			'grupodisciplinasprec' => 127
		),
		array(
			'id' => 128,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 128,
			'tipoprecedencia_id' => 128,
			'disciplina_id' => 128,
			'grupodisciplinasprec' => 128
		),
		array(
			'id' => 129,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 129,
			'tipoprecedencia_id' => 129,
			'disciplina_id' => 129,
			'grupodisciplinasprec' => 129
		),
		array(
			'id' => 130,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 130,
			'tipoprecedencia_id' => 130,
			'disciplina_id' => 130,
			'grupodisciplinasprec' => 130
		),
		array(
			'id' => 131,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 131,
			'tipoprecedencia_id' => 131,
			'disciplina_id' => 131,
			'grupodisciplinasprec' => 131
		),
		array(
			'id' => 132,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 132,
			'tipoprecedencia_id' => 132,
			'disciplina_id' => 132,
			'grupodisciplinasprec' => 132
		),
		array(
			'id' => 133,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 133,
			'tipoprecedencia_id' => 133,
			'disciplina_id' => 133,
			'grupodisciplinasprec' => 133
		),
		array(
			'id' => 134,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 134,
			'tipoprecedencia_id' => 134,
			'disciplina_id' => 134,
			'grupodisciplinasprec' => 134
		),
		array(
			'id' => 135,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 135,
			'tipoprecedencia_id' => 135,
			'disciplina_id' => 135,
			'grupodisciplinasprec' => 135
		),
		array(
			'id' => 136,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 136,
			'tipoprecedencia_id' => 136,
			'disciplina_id' => 136,
			'grupodisciplinasprec' => 136
		),
		array(
			'id' => 137,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 137,
			'tipoprecedencia_id' => 137,
			'disciplina_id' => 137,
			'grupodisciplinasprec' => 137
		),
		array(
			'id' => 138,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 138,
			'tipoprecedencia_id' => 138,
			'disciplina_id' => 138,
			'grupodisciplinasprec' => 138
		),
		array(
			'id' => 139,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 139,
			'tipoprecedencia_id' => 139,
			'disciplina_id' => 139,
			'grupodisciplinasprec' => 139
		),
		array(
			'id' => 140,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 140,
			'tipoprecedencia_id' => 140,
			'disciplina_id' => 140,
			'grupodisciplinasprec' => 140
		),
		array(
			'id' => 141,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 141,
			'tipoprecedencia_id' => 141,
			'disciplina_id' => 141,
			'grupodisciplinasprec' => 141
		),
		array(
			'id' => 142,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 142,
			'tipoprecedencia_id' => 142,
			'disciplina_id' => 142,
			'grupodisciplinasprec' => 142
		),
		array(
			'id' => 143,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 143,
			'tipoprecedencia_id' => 143,
			'disciplina_id' => 143,
			'grupodisciplinasprec' => 143
		),
		array(
			'id' => 144,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 144,
			'tipoprecedencia_id' => 144,
			'disciplina_id' => 144,
			'grupodisciplinasprec' => 144
		),
		array(
			'id' => 145,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 145,
			'tipoprecedencia_id' => 145,
			'disciplina_id' => 145,
			'grupodisciplinasprec' => 145
		),
		array(
			'id' => 146,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 146,
			'tipoprecedencia_id' => 146,
			'disciplina_id' => 146,
			'grupodisciplinasprec' => 146
		),
		array(
			'id' => 147,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 147,
			'tipoprecedencia_id' => 147,
			'disciplina_id' => 147,
			'grupodisciplinasprec' => 147
		),
		array(
			'id' => 148,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 148,
			'tipoprecedencia_id' => 148,
			'disciplina_id' => 148,
			'grupodisciplinasprec' => 148
		),
		array(
			'id' => 149,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 149,
			'tipoprecedencia_id' => 149,
			'disciplina_id' => 149,
			'grupodisciplinasprec' => 149
		),
		array(
			'id' => 150,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 150,
			'tipoprecedencia_id' => 150,
			'disciplina_id' => 150,
			'grupodisciplinasprec' => 150
		),
		array(
			'id' => 151,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 151,
			'tipoprecedencia_id' => 151,
			'disciplina_id' => 151,
			'grupodisciplinasprec' => 151
		),
		array(
			'id' => 152,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 152,
			'tipoprecedencia_id' => 152,
			'disciplina_id' => 152,
			'grupodisciplinasprec' => 152
		),
		array(
			'id' => 153,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 153,
			'tipoprecedencia_id' => 153,
			'disciplina_id' => 153,
			'grupodisciplinasprec' => 153
		),
		array(
			'id' => 154,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 154,
			'tipoprecedencia_id' => 154,
			'disciplina_id' => 154,
			'grupodisciplinasprec' => 154
		),
		array(
			'id' => 155,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 155,
			'tipoprecedencia_id' => 155,
			'disciplina_id' => 155,
			'grupodisciplinasprec' => 155
		),
		array(
			'id' => 156,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 156,
			'tipoprecedencia_id' => 156,
			'disciplina_id' => 156,
			'grupodisciplinasprec' => 156
		),
		array(
			'id' => 157,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 157,
			'tipoprecedencia_id' => 157,
			'disciplina_id' => 157,
			'grupodisciplinasprec' => 157
		),
		array(
			'id' => 158,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 158,
			'tipoprecedencia_id' => 158,
			'disciplina_id' => 158,
			'grupodisciplinasprec' => 158
		),
		array(
			'id' => 159,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 159,
			'tipoprecedencia_id' => 159,
			'disciplina_id' => 159,
			'grupodisciplinasprec' => 159
		),
		array(
			'id' => 160,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 160,
			'tipoprecedencia_id' => 160,
			'disciplina_id' => 160,
			'grupodisciplinasprec' => 160
		),
		array(
			'id' => 161,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 161,
			'tipoprecedencia_id' => 161,
			'disciplina_id' => 161,
			'grupodisciplinasprec' => 161
		),
		array(
			'id' => 162,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 162,
			'tipoprecedencia_id' => 162,
			'disciplina_id' => 162,
			'grupodisciplinasprec' => 162
		),
		array(
			'id' => 163,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 163,
			'tipoprecedencia_id' => 163,
			'disciplina_id' => 163,
			'grupodisciplinasprec' => 163
		),
		array(
			'id' => 164,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 164,
			'tipoprecedencia_id' => 164,
			'disciplina_id' => 164,
			'grupodisciplinasprec' => 164
		),
		array(
			'id' => 165,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 165,
			'tipoprecedencia_id' => 165,
			'disciplina_id' => 165,
			'grupodisciplinasprec' => 165
		),
		array(
			'id' => 166,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 166,
			'tipoprecedencia_id' => 166,
			'disciplina_id' => 166,
			'grupodisciplinasprec' => 166
		),
		array(
			'id' => 167,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 167,
			'tipoprecedencia_id' => 167,
			'disciplina_id' => 167,
			'grupodisciplinasprec' => 167
		),
		array(
			'id' => 168,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 168,
			'tipoprecedencia_id' => 168,
			'disciplina_id' => 168,
			'grupodisciplinasprec' => 168
		),
		array(
			'id' => 169,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 169,
			'tipoprecedencia_id' => 169,
			'disciplina_id' => 169,
			'grupodisciplinasprec' => 169
		),
		array(
			'id' => 170,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 170,
			'tipoprecedencia_id' => 170,
			'disciplina_id' => 170,
			'grupodisciplinasprec' => 170
		),
		array(
			'id' => 171,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 171,
			'tipoprecedencia_id' => 171,
			'disciplina_id' => 171,
			'grupodisciplinasprec' => 171
		),
		array(
			'id' => 172,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 172,
			'tipoprecedencia_id' => 172,
			'disciplina_id' => 172,
			'grupodisciplinasprec' => 172
		),
		array(
			'id' => 173,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 173,
			'tipoprecedencia_id' => 173,
			'disciplina_id' => 173,
			'grupodisciplinasprec' => 173
		),
		array(
			'id' => 174,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 174,
			'tipoprecedencia_id' => 174,
			'disciplina_id' => 174,
			'grupodisciplinasprec' => 174
		),
		array(
			'id' => 175,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 175,
			'tipoprecedencia_id' => 175,
			'disciplina_id' => 175,
			'grupodisciplinasprec' => 175
		),
		array(
			'id' => 176,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 176,
			'tipoprecedencia_id' => 176,
			'disciplina_id' => 176,
			'grupodisciplinasprec' => 176
		),
		array(
			'id' => 177,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 177,
			'tipoprecedencia_id' => 177,
			'disciplina_id' => 177,
			'grupodisciplinasprec' => 177
		),
		array(
			'id' => 178,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 178,
			'tipoprecedencia_id' => 178,
			'disciplina_id' => 178,
			'grupodisciplinasprec' => 178
		),
		array(
			'id' => 179,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 179,
			'tipoprecedencia_id' => 179,
			'disciplina_id' => 179,
			'grupodisciplinasprec' => 179
		),
		array(
			'id' => 180,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 180,
			'tipoprecedencia_id' => 180,
			'disciplina_id' => 180,
			'grupodisciplinasprec' => 180
		),
		array(
			'id' => 181,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 181,
			'tipoprecedencia_id' => 181,
			'disciplina_id' => 181,
			'grupodisciplinasprec' => 181
		),
		array(
			'id' => 182,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 182,
			'tipoprecedencia_id' => 182,
			'disciplina_id' => 182,
			'grupodisciplinasprec' => 182
		),
		array(
			'id' => 183,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 183,
			'tipoprecedencia_id' => 183,
			'disciplina_id' => 183,
			'grupodisciplinasprec' => 183
		),
		array(
			'id' => 184,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 184,
			'tipoprecedencia_id' => 184,
			'disciplina_id' => 184,
			'grupodisciplinasprec' => 184
		),
		array(
			'id' => 185,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 185,
			'tipoprecedencia_id' => 185,
			'disciplina_id' => 185,
			'grupodisciplinasprec' => 185
		),
		array(
			'id' => 186,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 186,
			'tipoprecedencia_id' => 186,
			'disciplina_id' => 186,
			'grupodisciplinasprec' => 186
		),
		array(
			'id' => 187,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 187,
			'tipoprecedencia_id' => 187,
			'disciplina_id' => 187,
			'grupodisciplinasprec' => 187
		),
		array(
			'id' => 188,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 188,
			'tipoprecedencia_id' => 188,
			'disciplina_id' => 188,
			'grupodisciplinasprec' => 188
		),
		array(
			'id' => 189,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 189,
			'tipoprecedencia_id' => 189,
			'disciplina_id' => 189,
			'grupodisciplinasprec' => 189
		),
		array(
			'id' => 190,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 190,
			'tipoprecedencia_id' => 190,
			'disciplina_id' => 190,
			'grupodisciplinasprec' => 190
		),
		array(
			'id' => 191,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 191,
			'tipoprecedencia_id' => 191,
			'disciplina_id' => 191,
			'grupodisciplinasprec' => 191
		),
		array(
			'id' => 192,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 192,
			'tipoprecedencia_id' => 192,
			'disciplina_id' => 192,
			'grupodisciplinasprec' => 192
		),
		array(
			'id' => 193,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 193,
			'tipoprecedencia_id' => 193,
			'disciplina_id' => 193,
			'grupodisciplinasprec' => 193
		),
		array(
			'id' => 194,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 194,
			'tipoprecedencia_id' => 194,
			'disciplina_id' => 194,
			'grupodisciplinasprec' => 194
		),
		array(
			'id' => 195,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 195,
			'tipoprecedencia_id' => 195,
			'disciplina_id' => 195,
			'grupodisciplinasprec' => 195
		),
		array(
			'id' => 196,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 196,
			'tipoprecedencia_id' => 196,
			'disciplina_id' => 196,
			'grupodisciplinasprec' => 196
		),
		array(
			'id' => 197,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 197,
			'tipoprecedencia_id' => 197,
			'disciplina_id' => 197,
			'grupodisciplinasprec' => 197
		),
		array(
			'id' => 198,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 198,
			'tipoprecedencia_id' => 198,
			'disciplina_id' => 198,
			'grupodisciplinasprec' => 198
		),
		array(
			'id' => 199,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 199,
			'tipoprecedencia_id' => 199,
			'disciplina_id' => 199,
			'grupodisciplinasprec' => 199
		),
		array(
			'id' => 200,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 200,
			'tipoprecedencia_id' => 200,
			'disciplina_id' => 200,
			'grupodisciplinasprec' => 200
		),
		array(
			'id' => 201,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 201,
			'tipoprecedencia_id' => 201,
			'disciplina_id' => 201,
			'grupodisciplinasprec' => 201
		),
		array(
			'id' => 202,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 202,
			'tipoprecedencia_id' => 202,
			'disciplina_id' => 202,
			'grupodisciplinasprec' => 202
		),
		array(
			'id' => 203,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 203,
			'tipoprecedencia_id' => 203,
			'disciplina_id' => 203,
			'grupodisciplinasprec' => 203
		),
		array(
			'id' => 204,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 204,
			'tipoprecedencia_id' => 204,
			'disciplina_id' => 204,
			'grupodisciplinasprec' => 204
		),
		array(
			'id' => 205,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 205,
			'tipoprecedencia_id' => 205,
			'disciplina_id' => 205,
			'grupodisciplinasprec' => 205
		),
		array(
			'id' => 206,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 206,
			'tipoprecedencia_id' => 206,
			'disciplina_id' => 206,
			'grupodisciplinasprec' => 206
		),
		array(
			'id' => 207,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 207,
			'tipoprecedencia_id' => 207,
			'disciplina_id' => 207,
			'grupodisciplinasprec' => 207
		),
		array(
			'id' => 208,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 208,
			'tipoprecedencia_id' => 208,
			'disciplina_id' => 208,
			'grupodisciplinasprec' => 208
		),
		array(
			'id' => 209,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 209,
			'tipoprecedencia_id' => 209,
			'disciplina_id' => 209,
			'grupodisciplinasprec' => 209
		),
		array(
			'id' => 210,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 210,
			'tipoprecedencia_id' => 210,
			'disciplina_id' => 210,
			'grupodisciplinasprec' => 210
		),
		array(
			'id' => 211,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 211,
			'tipoprecedencia_id' => 211,
			'disciplina_id' => 211,
			'grupodisciplinasprec' => 211
		),
		array(
			'id' => 212,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 212,
			'tipoprecedencia_id' => 212,
			'disciplina_id' => 212,
			'grupodisciplinasprec' => 212
		),
		array(
			'id' => 213,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 213,
			'tipoprecedencia_id' => 213,
			'disciplina_id' => 213,
			'grupodisciplinasprec' => 213
		),
		array(
			'id' => 214,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 214,
			'tipoprecedencia_id' => 214,
			'disciplina_id' => 214,
			'grupodisciplinasprec' => 214
		),
		array(
			'id' => 215,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 215,
			'tipoprecedencia_id' => 215,
			'disciplina_id' => 215,
			'grupodisciplinasprec' => 215
		),
		array(
			'id' => 216,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 216,
			'tipoprecedencia_id' => 216,
			'disciplina_id' => 216,
			'grupodisciplinasprec' => 216
		),
		array(
			'id' => 217,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 217,
			'tipoprecedencia_id' => 217,
			'disciplina_id' => 217,
			'grupodisciplinasprec' => 217
		),
		array(
			'id' => 218,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 218,
			'tipoprecedencia_id' => 218,
			'disciplina_id' => 218,
			'grupodisciplinasprec' => 218
		),
		array(
			'id' => 219,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 219,
			'tipoprecedencia_id' => 219,
			'disciplina_id' => 219,
			'grupodisciplinasprec' => 219
		),
		array(
			'id' => 220,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 220,
			'tipoprecedencia_id' => 220,
			'disciplina_id' => 220,
			'grupodisciplinasprec' => 220
		),
		array(
			'id' => 221,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 221,
			'tipoprecedencia_id' => 221,
			'disciplina_id' => 221,
			'grupodisciplinasprec' => 221
		),
		array(
			'id' => 222,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 222,
			'tipoprecedencia_id' => 222,
			'disciplina_id' => 222,
			'grupodisciplinasprec' => 222
		),
		array(
			'id' => 223,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 223,
			'tipoprecedencia_id' => 223,
			'disciplina_id' => 223,
			'grupodisciplinasprec' => 223
		),
		array(
			'id' => 224,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 224,
			'tipoprecedencia_id' => 224,
			'disciplina_id' => 224,
			'grupodisciplinasprec' => 224
		),
		array(
			'id' => 225,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 225,
			'tipoprecedencia_id' => 225,
			'disciplina_id' => 225,
			'grupodisciplinasprec' => 225
		),
		array(
			'id' => 226,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 226,
			'tipoprecedencia_id' => 226,
			'disciplina_id' => 226,
			'grupodisciplinasprec' => 226
		),
		array(
			'id' => 227,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 227,
			'tipoprecedencia_id' => 227,
			'disciplina_id' => 227,
			'grupodisciplinasprec' => 227
		),
		array(
			'id' => 228,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 228,
			'tipoprecedencia_id' => 228,
			'disciplina_id' => 228,
			'grupodisciplinasprec' => 228
		),
		array(
			'id' => 229,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 229,
			'tipoprecedencia_id' => 229,
			'disciplina_id' => 229,
			'grupodisciplinasprec' => 229
		),
		array(
			'id' => 230,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 230,
			'tipoprecedencia_id' => 230,
			'disciplina_id' => 230,
			'grupodisciplinasprec' => 230
		),
		array(
			'id' => 231,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 231,
			'tipoprecedencia_id' => 231,
			'disciplina_id' => 231,
			'grupodisciplinasprec' => 231
		),
		array(
			'id' => 232,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 232,
			'tipoprecedencia_id' => 232,
			'disciplina_id' => 232,
			'grupodisciplinasprec' => 232
		),
		array(
			'id' => 233,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 233,
			'tipoprecedencia_id' => 233,
			'disciplina_id' => 233,
			'grupodisciplinasprec' => 233
		),
		array(
			'id' => 234,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 234,
			'tipoprecedencia_id' => 234,
			'disciplina_id' => 234,
			'grupodisciplinasprec' => 234
		),
		array(
			'id' => 235,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 235,
			'tipoprecedencia_id' => 235,
			'disciplina_id' => 235,
			'grupodisciplinasprec' => 235
		),
		array(
			'id' => 236,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 236,
			'tipoprecedencia_id' => 236,
			'disciplina_id' => 236,
			'grupodisciplinasprec' => 236
		),
		array(
			'id' => 237,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 237,
			'tipoprecedencia_id' => 237,
			'disciplina_id' => 237,
			'grupodisciplinasprec' => 237
		),
		array(
			'id' => 238,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 238,
			'tipoprecedencia_id' => 238,
			'disciplina_id' => 238,
			'grupodisciplinasprec' => 238
		),
		array(
			'id' => 239,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 239,
			'tipoprecedencia_id' => 239,
			'disciplina_id' => 239,
			'grupodisciplinasprec' => 239
		),
		array(
			'id' => 240,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 240,
			'tipoprecedencia_id' => 240,
			'disciplina_id' => 240,
			'grupodisciplinasprec' => 240
		),
		array(
			'id' => 241,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 241,
			'tipoprecedencia_id' => 241,
			'disciplina_id' => 241,
			'grupodisciplinasprec' => 241
		),
		array(
			'id' => 242,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 242,
			'tipoprecedencia_id' => 242,
			'disciplina_id' => 242,
			'grupodisciplinasprec' => 242
		),
		array(
			'id' => 243,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 243,
			'tipoprecedencia_id' => 243,
			'disciplina_id' => 243,
			'grupodisciplinasprec' => 243
		),
		array(
			'id' => 244,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 244,
			'tipoprecedencia_id' => 244,
			'disciplina_id' => 244,
			'grupodisciplinasprec' => 244
		),
		array(
			'id' => 245,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 245,
			'tipoprecedencia_id' => 245,
			'disciplina_id' => 245,
			'grupodisciplinasprec' => 245
		),
		array(
			'id' => 246,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 246,
			'tipoprecedencia_id' => 246,
			'disciplina_id' => 246,
			'grupodisciplinasprec' => 246
		),
		array(
			'id' => 247,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 247,
			'tipoprecedencia_id' => 247,
			'disciplina_id' => 247,
			'grupodisciplinasprec' => 247
		),
		array(
			'id' => 248,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 248,
			'tipoprecedencia_id' => 248,
			'disciplina_id' => 248,
			'grupodisciplinasprec' => 248
		),
		array(
			'id' => 249,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 249,
			'tipoprecedencia_id' => 249,
			'disciplina_id' => 249,
			'grupodisciplinasprec' => 249
		),
		array(
			'id' => 250,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 250,
			'tipoprecedencia_id' => 250,
			'disciplina_id' => 250,
			'grupodisciplinasprec' => 250
		),
		array(
			'id' => 251,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 251,
			'tipoprecedencia_id' => 251,
			'disciplina_id' => 251,
			'grupodisciplinasprec' => 251
		),
		array(
			'id' => 252,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 252,
			'tipoprecedencia_id' => 252,
			'disciplina_id' => 252,
			'grupodisciplinasprec' => 252
		),
		array(
			'id' => 253,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 253,
			'tipoprecedencia_id' => 253,
			'disciplina_id' => 253,
			'grupodisciplinasprec' => 253
		),
		array(
			'id' => 254,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 254,
			'tipoprecedencia_id' => 254,
			'disciplina_id' => 254,
			'grupodisciplinasprec' => 254
		),
		array(
			'id' => 255,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 255,
			'tipoprecedencia_id' => 255,
			'disciplina_id' => 255,
			'grupodisciplinasprec' => 255
		),
		array(
			'id' => 256,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 256,
			'tipoprecedencia_id' => 256,
			'disciplina_id' => 256,
			'grupodisciplinasprec' => 256
		),
		array(
			'id' => 257,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 257,
			'tipoprecedencia_id' => 257,
			'disciplina_id' => 257,
			'grupodisciplinasprec' => 257
		),
		array(
			'id' => 258,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 258,
			'tipoprecedencia_id' => 258,
			'disciplina_id' => 258,
			'grupodisciplinasprec' => 258
		),
		array(
			'id' => 259,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 259,
			'tipoprecedencia_id' => 259,
			'disciplina_id' => 259,
			'grupodisciplinasprec' => 259
		),
		array(
			'id' => 260,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 260,
			'tipoprecedencia_id' => 260,
			'disciplina_id' => 260,
			'grupodisciplinasprec' => 260
		),
		array(
			'id' => 261,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 261,
			'tipoprecedencia_id' => 261,
			'disciplina_id' => 261,
			'grupodisciplinasprec' => 261
		),
		array(
			'id' => 262,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 262,
			'tipoprecedencia_id' => 262,
			'disciplina_id' => 262,
			'grupodisciplinasprec' => 262
		),
		array(
			'id' => 263,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 263,
			'tipoprecedencia_id' => 263,
			'disciplina_id' => 263,
			'grupodisciplinasprec' => 263
		),
		array(
			'id' => 264,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 264,
			'tipoprecedencia_id' => 264,
			'disciplina_id' => 264,
			'grupodisciplinasprec' => 264
		),
		array(
			'id' => 265,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 265,
			'tipoprecedencia_id' => 265,
			'disciplina_id' => 265,
			'grupodisciplinasprec' => 265
		),
		array(
			'id' => 266,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 266,
			'tipoprecedencia_id' => 266,
			'disciplina_id' => 266,
			'grupodisciplinasprec' => 266
		),
		array(
			'id' => 267,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 267,
			'tipoprecedencia_id' => 267,
			'disciplina_id' => 267,
			'grupodisciplinasprec' => 267
		),
		array(
			'id' => 268,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 268,
			'tipoprecedencia_id' => 268,
			'disciplina_id' => 268,
			'grupodisciplinasprec' => 268
		),
		array(
			'id' => 269,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 269,
			'tipoprecedencia_id' => 269,
			'disciplina_id' => 269,
			'grupodisciplinasprec' => 269
		),
		array(
			'id' => 270,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 270,
			'tipoprecedencia_id' => 270,
			'disciplina_id' => 270,
			'grupodisciplinasprec' => 270
		),
		array(
			'id' => 271,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 271,
			'tipoprecedencia_id' => 271,
			'disciplina_id' => 271,
			'grupodisciplinasprec' => 271
		),
		array(
			'id' => 272,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 272,
			'tipoprecedencia_id' => 272,
			'disciplina_id' => 272,
			'grupodisciplinasprec' => 272
		),
		array(
			'id' => 273,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 273,
			'tipoprecedencia_id' => 273,
			'disciplina_id' => 273,
			'grupodisciplinasprec' => 273
		),
		array(
			'id' => 274,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 274,
			'tipoprecedencia_id' => 274,
			'disciplina_id' => 274,
			'grupodisciplinasprec' => 274
		),
		array(
			'id' => 275,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 275,
			'tipoprecedencia_id' => 275,
			'disciplina_id' => 275,
			'grupodisciplinasprec' => 275
		),
		array(
			'id' => 276,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 276,
			'tipoprecedencia_id' => 276,
			'disciplina_id' => 276,
			'grupodisciplinasprec' => 276
		),
		array(
			'id' => 277,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 277,
			'tipoprecedencia_id' => 277,
			'disciplina_id' => 277,
			'grupodisciplinasprec' => 277
		),
		array(
			'id' => 278,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 278,
			'tipoprecedencia_id' => 278,
			'disciplina_id' => 278,
			'grupodisciplinasprec' => 278
		),
		array(
			'id' => 279,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 279,
			'tipoprecedencia_id' => 279,
			'disciplina_id' => 279,
			'grupodisciplinasprec' => 279
		),
		array(
			'id' => 280,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 280,
			'tipoprecedencia_id' => 280,
			'disciplina_id' => 280,
			'grupodisciplinasprec' => 280
		),
		array(
			'id' => 281,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 281,
			'tipoprecedencia_id' => 281,
			'disciplina_id' => 281,
			'grupodisciplinasprec' => 281
		),
		array(
			'id' => 282,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 282,
			'tipoprecedencia_id' => 282,
			'disciplina_id' => 282,
			'grupodisciplinasprec' => 282
		),
		array(
			'id' => 283,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 283,
			'tipoprecedencia_id' => 283,
			'disciplina_id' => 283,
			'grupodisciplinasprec' => 283
		),
		array(
			'id' => 284,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 284,
			'tipoprecedencia_id' => 284,
			'disciplina_id' => 284,
			'grupodisciplinasprec' => 284
		),
		array(
			'id' => 285,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 285,
			'tipoprecedencia_id' => 285,
			'disciplina_id' => 285,
			'grupodisciplinasprec' => 285
		),
		array(
			'id' => 286,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 286,
			'tipoprecedencia_id' => 286,
			'disciplina_id' => 286,
			'grupodisciplinasprec' => 286
		),
		array(
			'id' => 287,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 287,
			'tipoprecedencia_id' => 287,
			'disciplina_id' => 287,
			'grupodisciplinasprec' => 287
		),
		array(
			'id' => 288,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 288,
			'tipoprecedencia_id' => 288,
			'disciplina_id' => 288,
			'grupodisciplinasprec' => 288
		),
		array(
			'id' => 289,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 289,
			'tipoprecedencia_id' => 289,
			'disciplina_id' => 289,
			'grupodisciplinasprec' => 289
		),
		array(
			'id' => 290,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 290,
			'tipoprecedencia_id' => 290,
			'disciplina_id' => 290,
			'grupodisciplinasprec' => 290
		),
		array(
			'id' => 291,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 291,
			'tipoprecedencia_id' => 291,
			'disciplina_id' => 291,
			'grupodisciplinasprec' => 291
		),
		array(
			'id' => 292,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 292,
			'tipoprecedencia_id' => 292,
			'disciplina_id' => 292,
			'grupodisciplinasprec' => 292
		),
		array(
			'id' => 293,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 293,
			'tipoprecedencia_id' => 293,
			'disciplina_id' => 293,
			'grupodisciplinasprec' => 293
		),
		array(
			'id' => 294,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 294,
			'tipoprecedencia_id' => 294,
			'disciplina_id' => 294,
			'grupodisciplinasprec' => 294
		),
		array(
			'id' => 295,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 295,
			'tipoprecedencia_id' => 295,
			'disciplina_id' => 295,
			'grupodisciplinasprec' => 295
		),
		array(
			'id' => 296,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 296,
			'tipoprecedencia_id' => 296,
			'disciplina_id' => 296,
			'grupodisciplinasprec' => 296
		),
		array(
			'id' => 297,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 297,
			'tipoprecedencia_id' => 297,
			'disciplina_id' => 297,
			'grupodisciplinasprec' => 297
		),
		array(
			'id' => 298,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 298,
			'tipoprecedencia_id' => 298,
			'disciplina_id' => 298,
			'grupodisciplinasprec' => 298
		),
		array(
			'id' => 299,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 299,
			'tipoprecedencia_id' => 299,
			'disciplina_id' => 299,
			'grupodisciplinasprec' => 299
		),
		array(
			'id' => 300,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 300,
			'tipoprecedencia_id' => 300,
			'disciplina_id' => 300,
			'grupodisciplinasprec' => 300
		),
		array(
			'id' => 301,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 301,
			'tipoprecedencia_id' => 301,
			'disciplina_id' => 301,
			'grupodisciplinasprec' => 301
		),
		array(
			'id' => 302,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 302,
			'tipoprecedencia_id' => 302,
			'disciplina_id' => 302,
			'grupodisciplinasprec' => 302
		),
		array(
			'id' => 303,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 303,
			'tipoprecedencia_id' => 303,
			'disciplina_id' => 303,
			'grupodisciplinasprec' => 303
		),
		array(
			'id' => 304,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 304,
			'tipoprecedencia_id' => 304,
			'disciplina_id' => 304,
			'grupodisciplinasprec' => 304
		),
		array(
			'id' => 305,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 305,
			'tipoprecedencia_id' => 305,
			'disciplina_id' => 305,
			'grupodisciplinasprec' => 305
		),
		array(
			'id' => 306,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 306,
			'tipoprecedencia_id' => 306,
			'disciplina_id' => 306,
			'grupodisciplinasprec' => 306
		),
		array(
			'id' => 307,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 307,
			'tipoprecedencia_id' => 307,
			'disciplina_id' => 307,
			'grupodisciplinasprec' => 307
		),
		array(
			'id' => 308,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 308,
			'tipoprecedencia_id' => 308,
			'disciplina_id' => 308,
			'grupodisciplinasprec' => 308
		),
		array(
			'id' => 309,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 309,
			'tipoprecedencia_id' => 309,
			'disciplina_id' => 309,
			'grupodisciplinasprec' => 309
		),
		array(
			'id' => 310,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 310,
			'tipoprecedencia_id' => 310,
			'disciplina_id' => 310,
			'grupodisciplinasprec' => 310
		),
		array(
			'id' => 311,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 311,
			'tipoprecedencia_id' => 311,
			'disciplina_id' => 311,
			'grupodisciplinasprec' => 311
		),
		array(
			'id' => 312,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 312,
			'tipoprecedencia_id' => 312,
			'disciplina_id' => 312,
			'grupodisciplinasprec' => 312
		),
		array(
			'id' => 313,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 313,
			'tipoprecedencia_id' => 313,
			'disciplina_id' => 313,
			'grupodisciplinasprec' => 313
		),
		array(
			'id' => 314,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 314,
			'tipoprecedencia_id' => 314,
			'disciplina_id' => 314,
			'grupodisciplinasprec' => 314
		),
		array(
			'id' => 315,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 315,
			'tipoprecedencia_id' => 315,
			'disciplina_id' => 315,
			'grupodisciplinasprec' => 315
		),
		array(
			'id' => 316,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 316,
			'tipoprecedencia_id' => 316,
			'disciplina_id' => 316,
			'grupodisciplinasprec' => 316
		),
		array(
			'id' => 317,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 317,
			'tipoprecedencia_id' => 317,
			'disciplina_id' => 317,
			'grupodisciplinasprec' => 317
		),
		array(
			'id' => 318,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 318,
			'tipoprecedencia_id' => 318,
			'disciplina_id' => 318,
			'grupodisciplinasprec' => 318
		),
		array(
			'id' => 319,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 319,
			'tipoprecedencia_id' => 319,
			'disciplina_id' => 319,
			'grupodisciplinasprec' => 319
		),
		array(
			'id' => 320,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 320,
			'tipoprecedencia_id' => 320,
			'disciplina_id' => 320,
			'grupodisciplinasprec' => 320
		),
		array(
			'id' => 321,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 321,
			'tipoprecedencia_id' => 321,
			'disciplina_id' => 321,
			'grupodisciplinasprec' => 321
		),
		array(
			'id' => 322,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 322,
			'tipoprecedencia_id' => 322,
			'disciplina_id' => 322,
			'grupodisciplinasprec' => 322
		),
		array(
			'id' => 323,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 323,
			'tipoprecedencia_id' => 323,
			'disciplina_id' => 323,
			'grupodisciplinasprec' => 323
		),
		array(
			'id' => 324,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 324,
			'tipoprecedencia_id' => 324,
			'disciplina_id' => 324,
			'grupodisciplinasprec' => 324
		),
		array(
			'id' => 325,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 325,
			'tipoprecedencia_id' => 325,
			'disciplina_id' => 325,
			'grupodisciplinasprec' => 325
		),
		array(
			'id' => 326,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 326,
			'tipoprecedencia_id' => 326,
			'disciplina_id' => 326,
			'grupodisciplinasprec' => 326
		),
		array(
			'id' => 327,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 327,
			'tipoprecedencia_id' => 327,
			'disciplina_id' => 327,
			'grupodisciplinasprec' => 327
		),
		array(
			'id' => 328,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 328,
			'tipoprecedencia_id' => 328,
			'disciplina_id' => 328,
			'grupodisciplinasprec' => 328
		),
		array(
			'id' => 329,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 329,
			'tipoprecedencia_id' => 329,
			'disciplina_id' => 329,
			'grupodisciplinasprec' => 329
		),
		array(
			'id' => 330,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 330,
			'tipoprecedencia_id' => 330,
			'disciplina_id' => 330,
			'grupodisciplinasprec' => 330
		),
		array(
			'id' => 331,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 331,
			'tipoprecedencia_id' => 331,
			'disciplina_id' => 331,
			'grupodisciplinasprec' => 331
		),
		array(
			'id' => 332,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 332,
			'tipoprecedencia_id' => 332,
			'disciplina_id' => 332,
			'grupodisciplinasprec' => 332
		),
		array(
			'id' => 333,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 333,
			'tipoprecedencia_id' => 333,
			'disciplina_id' => 333,
			'grupodisciplinasprec' => 333
		),
		array(
			'id' => 334,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 334,
			'tipoprecedencia_id' => 334,
			'disciplina_id' => 334,
			'grupodisciplinasprec' => 334
		),
		array(
			'id' => 335,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 335,
			'tipoprecedencia_id' => 335,
			'disciplina_id' => 335,
			'grupodisciplinasprec' => 335
		),
		array(
			'id' => 336,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 336,
			'tipoprecedencia_id' => 336,
			'disciplina_id' => 336,
			'grupodisciplinasprec' => 336
		),
		array(
			'id' => 337,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 337,
			'tipoprecedencia_id' => 337,
			'disciplina_id' => 337,
			'grupodisciplinasprec' => 337
		),
		array(
			'id' => 338,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 338,
			'tipoprecedencia_id' => 338,
			'disciplina_id' => 338,
			'grupodisciplinasprec' => 338
		),
		array(
			'id' => 339,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 339,
			'tipoprecedencia_id' => 339,
			'disciplina_id' => 339,
			'grupodisciplinasprec' => 339
		),
		array(
			'id' => 340,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 340,
			'tipoprecedencia_id' => 340,
			'disciplina_id' => 340,
			'grupodisciplinasprec' => 340
		),
		array(
			'id' => 341,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 341,
			'tipoprecedencia_id' => 341,
			'disciplina_id' => 341,
			'grupodisciplinasprec' => 341
		),
		array(
			'id' => 342,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 342,
			'tipoprecedencia_id' => 342,
			'disciplina_id' => 342,
			'grupodisciplinasprec' => 342
		),
		array(
			'id' => 343,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 343,
			'tipoprecedencia_id' => 343,
			'disciplina_id' => 343,
			'grupodisciplinasprec' => 343
		),
		array(
			'id' => 344,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 344,
			'tipoprecedencia_id' => 344,
			'disciplina_id' => 344,
			'grupodisciplinasprec' => 344
		),
		array(
			'id' => 345,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 345,
			'tipoprecedencia_id' => 345,
			'disciplina_id' => 345,
			'grupodisciplinasprec' => 345
		),
		array(
			'id' => 346,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 346,
			'tipoprecedencia_id' => 346,
			'disciplina_id' => 346,
			'grupodisciplinasprec' => 346
		),
		array(
			'id' => 347,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 347,
			'tipoprecedencia_id' => 347,
			'disciplina_id' => 347,
			'grupodisciplinasprec' => 347
		),
		array(
			'id' => 348,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 348,
			'tipoprecedencia_id' => 348,
			'disciplina_id' => 348,
			'grupodisciplinasprec' => 348
		),
		array(
			'id' => 349,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 349,
			'tipoprecedencia_id' => 349,
			'disciplina_id' => 349,
			'grupodisciplinasprec' => 349
		),
		array(
			'id' => 350,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 350,
			'tipoprecedencia_id' => 350,
			'disciplina_id' => 350,
			'grupodisciplinasprec' => 350
		),
		array(
			'id' => 351,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 351,
			'tipoprecedencia_id' => 351,
			'disciplina_id' => 351,
			'grupodisciplinasprec' => 351
		),
		array(
			'id' => 352,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 352,
			'tipoprecedencia_id' => 352,
			'disciplina_id' => 352,
			'grupodisciplinasprec' => 352
		),
		array(
			'id' => 353,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 353,
			'tipoprecedencia_id' => 353,
			'disciplina_id' => 353,
			'grupodisciplinasprec' => 353
		),
		array(
			'id' => 354,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 354,
			'tipoprecedencia_id' => 354,
			'disciplina_id' => 354,
			'grupodisciplinasprec' => 354
		),
		array(
			'id' => 355,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 355,
			'tipoprecedencia_id' => 355,
			'disciplina_id' => 355,
			'grupodisciplinasprec' => 355
		),
		array(
			'id' => 356,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 356,
			'tipoprecedencia_id' => 356,
			'disciplina_id' => 356,
			'grupodisciplinasprec' => 356
		),
		array(
			'id' => 357,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 357,
			'tipoprecedencia_id' => 357,
			'disciplina_id' => 357,
			'grupodisciplinasprec' => 357
		),
		array(
			'id' => 358,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 358,
			'tipoprecedencia_id' => 358,
			'disciplina_id' => 358,
			'grupodisciplinasprec' => 358
		),
		array(
			'id' => 359,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 359,
			'tipoprecedencia_id' => 359,
			'disciplina_id' => 359,
			'grupodisciplinasprec' => 359
		),
		array(
			'id' => 360,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 360,
			'tipoprecedencia_id' => 360,
			'disciplina_id' => 360,
			'grupodisciplinasprec' => 360
		),
		array(
			'id' => 361,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 361,
			'tipoprecedencia_id' => 361,
			'disciplina_id' => 361,
			'grupodisciplinasprec' => 361
		),
		array(
			'id' => 362,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 362,
			'tipoprecedencia_id' => 362,
			'disciplina_id' => 362,
			'grupodisciplinasprec' => 362
		),
		array(
			'id' => 363,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 363,
			'tipoprecedencia_id' => 363,
			'disciplina_id' => 363,
			'grupodisciplinasprec' => 363
		),
		array(
			'id' => 364,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 364,
			'tipoprecedencia_id' => 364,
			'disciplina_id' => 364,
			'grupodisciplinasprec' => 364
		),
		array(
			'id' => 365,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 365,
			'tipoprecedencia_id' => 365,
			'disciplina_id' => 365,
			'grupodisciplinasprec' => 365
		),
		array(
			'id' => 366,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 366,
			'tipoprecedencia_id' => 366,
			'disciplina_id' => 366,
			'grupodisciplinasprec' => 366
		),
		array(
			'id' => 367,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 367,
			'tipoprecedencia_id' => 367,
			'disciplina_id' => 367,
			'grupodisciplinasprec' => 367
		),
		array(
			'id' => 368,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 368,
			'tipoprecedencia_id' => 368,
			'disciplina_id' => 368,
			'grupodisciplinasprec' => 368
		),
		array(
			'id' => 369,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 369,
			'tipoprecedencia_id' => 369,
			'disciplina_id' => 369,
			'grupodisciplinasprec' => 369
		),
		array(
			'id' => 370,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 370,
			'tipoprecedencia_id' => 370,
			'disciplina_id' => 370,
			'grupodisciplinasprec' => 370
		),
		array(
			'id' => 371,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 371,
			'tipoprecedencia_id' => 371,
			'disciplina_id' => 371,
			'grupodisciplinasprec' => 371
		),
		array(
			'id' => 372,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 372,
			'tipoprecedencia_id' => 372,
			'disciplina_id' => 372,
			'grupodisciplinasprec' => 372
		),
		array(
			'id' => 373,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 373,
			'tipoprecedencia_id' => 373,
			'disciplina_id' => 373,
			'grupodisciplinasprec' => 373
		),
		array(
			'id' => 374,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 374,
			'tipoprecedencia_id' => 374,
			'disciplina_id' => 374,
			'grupodisciplinasprec' => 374
		),
		array(
			'id' => 375,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 375,
			'tipoprecedencia_id' => 375,
			'disciplina_id' => 375,
			'grupodisciplinasprec' => 375
		),
		array(
			'id' => 376,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 376,
			'tipoprecedencia_id' => 376,
			'disciplina_id' => 376,
			'grupodisciplinasprec' => 376
		),
		array(
			'id' => 377,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 377,
			'tipoprecedencia_id' => 377,
			'disciplina_id' => 377,
			'grupodisciplinasprec' => 377
		),
		array(
			'id' => 378,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 378,
			'tipoprecedencia_id' => 378,
			'disciplina_id' => 378,
			'grupodisciplinasprec' => 378
		),
		array(
			'id' => 379,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 379,
			'tipoprecedencia_id' => 379,
			'disciplina_id' => 379,
			'grupodisciplinasprec' => 379
		),
		array(
			'id' => 380,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 380,
			'tipoprecedencia_id' => 380,
			'disciplina_id' => 380,
			'grupodisciplinasprec' => 380
		),
		array(
			'id' => 381,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 381,
			'tipoprecedencia_id' => 381,
			'disciplina_id' => 381,
			'grupodisciplinasprec' => 381
		),
		array(
			'id' => 382,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 382,
			'tipoprecedencia_id' => 382,
			'disciplina_id' => 382,
			'grupodisciplinasprec' => 382
		),
		array(
			'id' => 383,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 383,
			'tipoprecedencia_id' => 383,
			'disciplina_id' => 383,
			'grupodisciplinasprec' => 383
		),
		array(
			'id' => 384,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 384,
			'tipoprecedencia_id' => 384,
			'disciplina_id' => 384,
			'grupodisciplinasprec' => 384
		),
		array(
			'id' => 385,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 385,
			'tipoprecedencia_id' => 385,
			'disciplina_id' => 385,
			'grupodisciplinasprec' => 385
		),
		array(
			'id' => 386,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 386,
			'tipoprecedencia_id' => 386,
			'disciplina_id' => 386,
			'grupodisciplinasprec' => 386
		),
		array(
			'id' => 387,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 387,
			'tipoprecedencia_id' => 387,
			'disciplina_id' => 387,
			'grupodisciplinasprec' => 387
		),
		array(
			'id' => 388,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 388,
			'tipoprecedencia_id' => 388,
			'disciplina_id' => 388,
			'grupodisciplinasprec' => 388
		),
		array(
			'id' => 389,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 389,
			'tipoprecedencia_id' => 389,
			'disciplina_id' => 389,
			'grupodisciplinasprec' => 389
		),
		array(
			'id' => 390,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 390,
			'tipoprecedencia_id' => 390,
			'disciplina_id' => 390,
			'grupodisciplinasprec' => 390
		),
		array(
			'id' => 391,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 391,
			'tipoprecedencia_id' => 391,
			'disciplina_id' => 391,
			'grupodisciplinasprec' => 391
		),
		array(
			'id' => 392,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 392,
			'tipoprecedencia_id' => 392,
			'disciplina_id' => 392,
			'grupodisciplinasprec' => 392
		),
		array(
			'id' => 393,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 393,
			'tipoprecedencia_id' => 393,
			'disciplina_id' => 393,
			'grupodisciplinasprec' => 393
		),
		array(
			'id' => 394,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 394,
			'tipoprecedencia_id' => 394,
			'disciplina_id' => 394,
			'grupodisciplinasprec' => 394
		),
		array(
			'id' => 395,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 395,
			'tipoprecedencia_id' => 395,
			'disciplina_id' => 395,
			'grupodisciplinasprec' => 395
		),
		array(
			'id' => 396,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 396,
			'tipoprecedencia_id' => 396,
			'disciplina_id' => 396,
			'grupodisciplinasprec' => 396
		),
		array(
			'id' => 397,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 397,
			'tipoprecedencia_id' => 397,
			'disciplina_id' => 397,
			'grupodisciplinasprec' => 397
		),
		array(
			'id' => 398,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 398,
			'tipoprecedencia_id' => 398,
			'disciplina_id' => 398,
			'grupodisciplinasprec' => 398
		),
		array(
			'id' => 399,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 399,
			'tipoprecedencia_id' => 399,
			'disciplina_id' => 399,
			'grupodisciplinasprec' => 399
		),
		array(
			'id' => 400,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 400,
			'tipoprecedencia_id' => 400,
			'disciplina_id' => 400,
			'grupodisciplinasprec' => 400
		),
		array(
			'id' => 401,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 401,
			'tipoprecedencia_id' => 401,
			'disciplina_id' => 401,
			'grupodisciplinasprec' => 401
		),
		array(
			'id' => 402,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 402,
			'tipoprecedencia_id' => 402,
			'disciplina_id' => 402,
			'grupodisciplinasprec' => 402
		),
		array(
			'id' => 403,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 403,
			'tipoprecedencia_id' => 403,
			'disciplina_id' => 403,
			'grupodisciplinasprec' => 403
		),
		array(
			'id' => 404,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 404,
			'tipoprecedencia_id' => 404,
			'disciplina_id' => 404,
			'grupodisciplinasprec' => 404
		),
		array(
			'id' => 405,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 405,
			'tipoprecedencia_id' => 405,
			'disciplina_id' => 405,
			'grupodisciplinasprec' => 405
		),
		array(
			'id' => 406,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 406,
			'tipoprecedencia_id' => 406,
			'disciplina_id' => 406,
			'grupodisciplinasprec' => 406
		),
		array(
			'id' => 407,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 407,
			'tipoprecedencia_id' => 407,
			'disciplina_id' => 407,
			'grupodisciplinasprec' => 407
		),
		array(
			'id' => 408,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 408,
			'tipoprecedencia_id' => 408,
			'disciplina_id' => 408,
			'grupodisciplinasprec' => 408
		),
		array(
			'id' => 409,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 409,
			'tipoprecedencia_id' => 409,
			'disciplina_id' => 409,
			'grupodisciplinasprec' => 409
		),
		array(
			'id' => 410,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 410,
			'tipoprecedencia_id' => 410,
			'disciplina_id' => 410,
			'grupodisciplinasprec' => 410
		),
		array(
			'id' => 411,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 411,
			'tipoprecedencia_id' => 411,
			'disciplina_id' => 411,
			'grupodisciplinasprec' => 411
		),
		array(
			'id' => 412,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 412,
			'tipoprecedencia_id' => 412,
			'disciplina_id' => 412,
			'grupodisciplinasprec' => 412
		),
		array(
			'id' => 413,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 413,
			'tipoprecedencia_id' => 413,
			'disciplina_id' => 413,
			'grupodisciplinasprec' => 413
		),
		array(
			'id' => 414,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 414,
			'tipoprecedencia_id' => 414,
			'disciplina_id' => 414,
			'grupodisciplinasprec' => 414
		),
		array(
			'id' => 415,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 415,
			'tipoprecedencia_id' => 415,
			'disciplina_id' => 415,
			'grupodisciplinasprec' => 415
		),
		array(
			'id' => 416,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 416,
			'tipoprecedencia_id' => 416,
			'disciplina_id' => 416,
			'grupodisciplinasprec' => 416
		),
		array(
			'id' => 417,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 417,
			'tipoprecedencia_id' => 417,
			'disciplina_id' => 417,
			'grupodisciplinasprec' => 417
		),
		array(
			'id' => 418,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 418,
			'tipoprecedencia_id' => 418,
			'disciplina_id' => 418,
			'grupodisciplinasprec' => 418
		),
		array(
			'id' => 419,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 419,
			'tipoprecedencia_id' => 419,
			'disciplina_id' => 419,
			'grupodisciplinasprec' => 419
		),
		array(
			'id' => 420,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 420,
			'tipoprecedencia_id' => 420,
			'disciplina_id' => 420,
			'grupodisciplinasprec' => 420
		),
		array(
			'id' => 421,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 421,
			'tipoprecedencia_id' => 421,
			'disciplina_id' => 421,
			'grupodisciplinasprec' => 421
		),
		array(
			'id' => 422,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 422,
			'tipoprecedencia_id' => 422,
			'disciplina_id' => 422,
			'grupodisciplinasprec' => 422
		),
		array(
			'id' => 423,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 423,
			'tipoprecedencia_id' => 423,
			'disciplina_id' => 423,
			'grupodisciplinasprec' => 423
		),
		array(
			'id' => 424,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 424,
			'tipoprecedencia_id' => 424,
			'disciplina_id' => 424,
			'grupodisciplinasprec' => 424
		),
		array(
			'id' => 425,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 425,
			'tipoprecedencia_id' => 425,
			'disciplina_id' => 425,
			'grupodisciplinasprec' => 425
		),
		array(
			'id' => 426,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 426,
			'tipoprecedencia_id' => 426,
			'disciplina_id' => 426,
			'grupodisciplinasprec' => 426
		),
		array(
			'id' => 427,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 427,
			'tipoprecedencia_id' => 427,
			'disciplina_id' => 427,
			'grupodisciplinasprec' => 427
		),
		array(
			'id' => 428,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 428,
			'tipoprecedencia_id' => 428,
			'disciplina_id' => 428,
			'grupodisciplinasprec' => 428
		),
		array(
			'id' => 429,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 429,
			'tipoprecedencia_id' => 429,
			'disciplina_id' => 429,
			'grupodisciplinasprec' => 429
		),
		array(
			'id' => 430,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 430,
			'tipoprecedencia_id' => 430,
			'disciplina_id' => 430,
			'grupodisciplinasprec' => 430
		),
		array(
			'id' => 431,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 431,
			'tipoprecedencia_id' => 431,
			'disciplina_id' => 431,
			'grupodisciplinasprec' => 431
		),
		array(
			'id' => 432,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 432,
			'tipoprecedencia_id' => 432,
			'disciplina_id' => 432,
			'grupodisciplinasprec' => 432
		),
		array(
			'id' => 433,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 433,
			'tipoprecedencia_id' => 433,
			'disciplina_id' => 433,
			'grupodisciplinasprec' => 433
		),
		array(
			'id' => 434,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 434,
			'tipoprecedencia_id' => 434,
			'disciplina_id' => 434,
			'grupodisciplinasprec' => 434
		),
		array(
			'id' => 435,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 435,
			'tipoprecedencia_id' => 435,
			'disciplina_id' => 435,
			'grupodisciplinasprec' => 435
		),
		array(
			'id' => 436,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 436,
			'tipoprecedencia_id' => 436,
			'disciplina_id' => 436,
			'grupodisciplinasprec' => 436
		),
		array(
			'id' => 437,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 437,
			'tipoprecedencia_id' => 437,
			'disciplina_id' => 437,
			'grupodisciplinasprec' => 437
		),
		array(
			'id' => 438,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 438,
			'tipoprecedencia_id' => 438,
			'disciplina_id' => 438,
			'grupodisciplinasprec' => 438
		),
		array(
			'id' => 439,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 439,
			'tipoprecedencia_id' => 439,
			'disciplina_id' => 439,
			'grupodisciplinasprec' => 439
		),
		array(
			'id' => 440,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 440,
			'tipoprecedencia_id' => 440,
			'disciplina_id' => 440,
			'grupodisciplinasprec' => 440
		),
		array(
			'id' => 441,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 441,
			'tipoprecedencia_id' => 441,
			'disciplina_id' => 441,
			'grupodisciplinasprec' => 441
		),
		array(
			'id' => 442,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 442,
			'tipoprecedencia_id' => 442,
			'disciplina_id' => 442,
			'grupodisciplinasprec' => 442
		),
		array(
			'id' => 443,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 443,
			'tipoprecedencia_id' => 443,
			'disciplina_id' => 443,
			'grupodisciplinasprec' => 443
		),
		array(
			'id' => 444,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 444,
			'tipoprecedencia_id' => 444,
			'disciplina_id' => 444,
			'grupodisciplinasprec' => 444
		),
		array(
			'id' => 445,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 445,
			'tipoprecedencia_id' => 445,
			'disciplina_id' => 445,
			'grupodisciplinasprec' => 445
		),
		array(
			'id' => 446,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 446,
			'tipoprecedencia_id' => 446,
			'disciplina_id' => 446,
			'grupodisciplinasprec' => 446
		),
		array(
			'id' => 447,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 447,
			'tipoprecedencia_id' => 447,
			'disciplina_id' => 447,
			'grupodisciplinasprec' => 447
		),
		array(
			'id' => 448,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 448,
			'tipoprecedencia_id' => 448,
			'disciplina_id' => 448,
			'grupodisciplinasprec' => 448
		),
		array(
			'id' => 449,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 449,
			'tipoprecedencia_id' => 449,
			'disciplina_id' => 449,
			'grupodisciplinasprec' => 449
		),
		array(
			'id' => 450,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 450,
			'tipoprecedencia_id' => 450,
			'disciplina_id' => 450,
			'grupodisciplinasprec' => 450
		),
		array(
			'id' => 451,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 451,
			'tipoprecedencia_id' => 451,
			'disciplina_id' => 451,
			'grupodisciplinasprec' => 451
		),
		array(
			'id' => 452,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 452,
			'tipoprecedencia_id' => 452,
			'disciplina_id' => 452,
			'grupodisciplinasprec' => 452
		),
		array(
			'id' => 453,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 453,
			'tipoprecedencia_id' => 453,
			'disciplina_id' => 453,
			'grupodisciplinasprec' => 453
		),
		array(
			'id' => 454,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 454,
			'tipoprecedencia_id' => 454,
			'disciplina_id' => 454,
			'grupodisciplinasprec' => 454
		),
		array(
			'id' => 455,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 455,
			'tipoprecedencia_id' => 455,
			'disciplina_id' => 455,
			'grupodisciplinasprec' => 455
		),
		array(
			'id' => 456,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 456,
			'tipoprecedencia_id' => 456,
			'disciplina_id' => 456,
			'grupodisciplinasprec' => 456
		),
		array(
			'id' => 457,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 457,
			'tipoprecedencia_id' => 457,
			'disciplina_id' => 457,
			'grupodisciplinasprec' => 457
		),
		array(
			'id' => 458,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 458,
			'tipoprecedencia_id' => 458,
			'disciplina_id' => 458,
			'grupodisciplinasprec' => 458
		),
		array(
			'id' => 459,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 459,
			'tipoprecedencia_id' => 459,
			'disciplina_id' => 459,
			'grupodisciplinasprec' => 459
		),
		array(
			'id' => 460,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 460,
			'tipoprecedencia_id' => 460,
			'disciplina_id' => 460,
			'grupodisciplinasprec' => 460
		),
		array(
			'id' => 461,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 461,
			'tipoprecedencia_id' => 461,
			'disciplina_id' => 461,
			'grupodisciplinasprec' => 461
		),
		array(
			'id' => 462,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 462,
			'tipoprecedencia_id' => 462,
			'disciplina_id' => 462,
			'grupodisciplinasprec' => 462
		),
		array(
			'id' => 463,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 463,
			'tipoprecedencia_id' => 463,
			'disciplina_id' => 463,
			'grupodisciplinasprec' => 463
		),
		array(
			'id' => 464,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 464,
			'tipoprecedencia_id' => 464,
			'disciplina_id' => 464,
			'grupodisciplinasprec' => 464
		),
		array(
			'id' => 465,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 465,
			'tipoprecedencia_id' => 465,
			'disciplina_id' => 465,
			'grupodisciplinasprec' => 465
		),
		array(
			'id' => 466,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 466,
			'tipoprecedencia_id' => 466,
			'disciplina_id' => 466,
			'grupodisciplinasprec' => 466
		),
		array(
			'id' => 467,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 467,
			'tipoprecedencia_id' => 467,
			'disciplina_id' => 467,
			'grupodisciplinasprec' => 467
		),
		array(
			'id' => 468,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 468,
			'tipoprecedencia_id' => 468,
			'disciplina_id' => 468,
			'grupodisciplinasprec' => 468
		),
		array(
			'id' => 469,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 469,
			'tipoprecedencia_id' => 469,
			'disciplina_id' => 469,
			'grupodisciplinasprec' => 469
		),
		array(
			'id' => 470,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 470,
			'tipoprecedencia_id' => 470,
			'disciplina_id' => 470,
			'grupodisciplinasprec' => 470
		),
		array(
			'id' => 471,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 471,
			'tipoprecedencia_id' => 471,
			'disciplina_id' => 471,
			'grupodisciplinasprec' => 471
		),
		array(
			'id' => 472,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 472,
			'tipoprecedencia_id' => 472,
			'disciplina_id' => 472,
			'grupodisciplinasprec' => 472
		),
		array(
			'id' => 473,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 473,
			'tipoprecedencia_id' => 473,
			'disciplina_id' => 473,
			'grupodisciplinasprec' => 473
		),
		array(
			'id' => 474,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 474,
			'tipoprecedencia_id' => 474,
			'disciplina_id' => 474,
			'grupodisciplinasprec' => 474
		),
		array(
			'id' => 475,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 475,
			'tipoprecedencia_id' => 475,
			'disciplina_id' => 475,
			'grupodisciplinasprec' => 475
		),
		array(
			'id' => 476,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 476,
			'tipoprecedencia_id' => 476,
			'disciplina_id' => 476,
			'grupodisciplinasprec' => 476
		),
		array(
			'id' => 477,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 477,
			'tipoprecedencia_id' => 477,
			'disciplina_id' => 477,
			'grupodisciplinasprec' => 477
		),
		array(
			'id' => 478,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 478,
			'tipoprecedencia_id' => 478,
			'disciplina_id' => 478,
			'grupodisciplinasprec' => 478
		),
		array(
			'id' => 479,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 479,
			'tipoprecedencia_id' => 479,
			'disciplina_id' => 479,
			'grupodisciplinasprec' => 479
		),
		array(
			'id' => 480,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 480,
			'tipoprecedencia_id' => 480,
			'disciplina_id' => 480,
			'grupodisciplinasprec' => 480
		),
		array(
			'id' => 481,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 481,
			'tipoprecedencia_id' => 481,
			'disciplina_id' => 481,
			'grupodisciplinasprec' => 481
		),
		array(
			'id' => 482,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 482,
			'tipoprecedencia_id' => 482,
			'disciplina_id' => 482,
			'grupodisciplinasprec' => 482
		),
		array(
			'id' => 483,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 483,
			'tipoprecedencia_id' => 483,
			'disciplina_id' => 483,
			'grupodisciplinasprec' => 483
		),
		array(
			'id' => 484,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 484,
			'tipoprecedencia_id' => 484,
			'disciplina_id' => 484,
			'grupodisciplinasprec' => 484
		),
		array(
			'id' => 485,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 485,
			'tipoprecedencia_id' => 485,
			'disciplina_id' => 485,
			'grupodisciplinasprec' => 485
		),
		array(
			'id' => 486,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 486,
			'tipoprecedencia_id' => 486,
			'disciplina_id' => 486,
			'grupodisciplinasprec' => 486
		),
		array(
			'id' => 487,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 487,
			'tipoprecedencia_id' => 487,
			'disciplina_id' => 487,
			'grupodisciplinasprec' => 487
		),
		array(
			'id' => 488,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 488,
			'tipoprecedencia_id' => 488,
			'disciplina_id' => 488,
			'grupodisciplinasprec' => 488
		),
		array(
			'id' => 489,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 489,
			'tipoprecedencia_id' => 489,
			'disciplina_id' => 489,
			'grupodisciplinasprec' => 489
		),
		array(
			'id' => 490,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 490,
			'tipoprecedencia_id' => 490,
			'disciplina_id' => 490,
			'grupodisciplinasprec' => 490
		),
		array(
			'id' => 491,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 491,
			'tipoprecedencia_id' => 491,
			'disciplina_id' => 491,
			'grupodisciplinasprec' => 491
		),
		array(
			'id' => 492,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 492,
			'tipoprecedencia_id' => 492,
			'disciplina_id' => 492,
			'grupodisciplinasprec' => 492
		),
		array(
			'id' => 493,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 493,
			'tipoprecedencia_id' => 493,
			'disciplina_id' => 493,
			'grupodisciplinasprec' => 493
		),
		array(
			'id' => 494,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 494,
			'tipoprecedencia_id' => 494,
			'disciplina_id' => 494,
			'grupodisciplinasprec' => 494
		),
		array(
			'id' => 495,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 495,
			'tipoprecedencia_id' => 495,
			'disciplina_id' => 495,
			'grupodisciplinasprec' => 495
		),
		array(
			'id' => 496,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 496,
			'tipoprecedencia_id' => 496,
			'disciplina_id' => 496,
			'grupodisciplinasprec' => 496
		),
		array(
			'id' => 497,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 497,
			'tipoprecedencia_id' => 497,
			'disciplina_id' => 497,
			'grupodisciplinasprec' => 497
		),
		array(
			'id' => 498,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 498,
			'tipoprecedencia_id' => 498,
			'disciplina_id' => 498,
			'grupodisciplinasprec' => 498
		),
		array(
			'id' => 499,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 499,
			'tipoprecedencia_id' => 499,
			'disciplina_id' => 499,
			'grupodisciplinasprec' => 499
		),
		array(
			'id' => 500,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 500,
			'tipoprecedencia_id' => 500,
			'disciplina_id' => 500,
			'grupodisciplinasprec' => 500
		),
		array(
			'id' => 501,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 501,
			'tipoprecedencia_id' => 501,
			'disciplina_id' => 501,
			'grupodisciplinasprec' => 501
		),
		array(
			'id' => 502,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 502,
			'tipoprecedencia_id' => 502,
			'disciplina_id' => 502,
			'grupodisciplinasprec' => 502
		),
		array(
			'id' => 503,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 503,
			'tipoprecedencia_id' => 503,
			'disciplina_id' => 503,
			'grupodisciplinasprec' => 503
		),
		array(
			'id' => 504,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 504,
			'tipoprecedencia_id' => 504,
			'disciplina_id' => 504,
			'grupodisciplinasprec' => 504
		),
		array(
			'id' => 505,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 505,
			'tipoprecedencia_id' => 505,
			'disciplina_id' => 505,
			'grupodisciplinasprec' => 505
		),
		array(
			'id' => 506,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 506,
			'tipoprecedencia_id' => 506,
			'disciplina_id' => 506,
			'grupodisciplinasprec' => 506
		),
		array(
			'id' => 507,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 507,
			'tipoprecedencia_id' => 507,
			'disciplina_id' => 507,
			'grupodisciplinasprec' => 507
		),
		array(
			'id' => 508,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 508,
			'tipoprecedencia_id' => 508,
			'disciplina_id' => 508,
			'grupodisciplinasprec' => 508
		),
		array(
			'id' => 509,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 509,
			'tipoprecedencia_id' => 509,
			'disciplina_id' => 509,
			'grupodisciplinasprec' => 509
		),
		array(
			'id' => 510,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 510,
			'tipoprecedencia_id' => 510,
			'disciplina_id' => 510,
			'grupodisciplinasprec' => 510
		),
		array(
			'id' => 511,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 511,
			'tipoprecedencia_id' => 511,
			'disciplina_id' => 511,
			'grupodisciplinasprec' => 511
		),
		array(
			'id' => 512,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 512,
			'tipoprecedencia_id' => 512,
			'disciplina_id' => 512,
			'grupodisciplinasprec' => 512
		),
		array(
			'id' => 513,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 513,
			'tipoprecedencia_id' => 513,
			'disciplina_id' => 513,
			'grupodisciplinasprec' => 513
		),
		array(
			'id' => 514,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 514,
			'tipoprecedencia_id' => 514,
			'disciplina_id' => 514,
			'grupodisciplinasprec' => 514
		),
		array(
			'id' => 515,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 515,
			'tipoprecedencia_id' => 515,
			'disciplina_id' => 515,
			'grupodisciplinasprec' => 515
		),
		array(
			'id' => 516,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 516,
			'tipoprecedencia_id' => 516,
			'disciplina_id' => 516,
			'grupodisciplinasprec' => 516
		),
		array(
			'id' => 517,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 517,
			'tipoprecedencia_id' => 517,
			'disciplina_id' => 517,
			'grupodisciplinasprec' => 517
		),
		array(
			'id' => 518,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 518,
			'tipoprecedencia_id' => 518,
			'disciplina_id' => 518,
			'grupodisciplinasprec' => 518
		),
		array(
			'id' => 519,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 519,
			'tipoprecedencia_id' => 519,
			'disciplina_id' => 519,
			'grupodisciplinasprec' => 519
		),
		array(
			'id' => 520,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 520,
			'tipoprecedencia_id' => 520,
			'disciplina_id' => 520,
			'grupodisciplinasprec' => 520
		),
		array(
			'id' => 521,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 521,
			'tipoprecedencia_id' => 521,
			'disciplina_id' => 521,
			'grupodisciplinasprec' => 521
		),
		array(
			'id' => 522,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 522,
			'tipoprecedencia_id' => 522,
			'disciplina_id' => 522,
			'grupodisciplinasprec' => 522
		),
		array(
			'id' => 523,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 523,
			'tipoprecedencia_id' => 523,
			'disciplina_id' => 523,
			'grupodisciplinasprec' => 523
		),
		array(
			'id' => 524,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 524,
			'tipoprecedencia_id' => 524,
			'disciplina_id' => 524,
			'grupodisciplinasprec' => 524
		),
		array(
			'id' => 525,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 525,
			'tipoprecedencia_id' => 525,
			'disciplina_id' => 525,
			'grupodisciplinasprec' => 525
		),
		array(
			'id' => 526,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 526,
			'tipoprecedencia_id' => 526,
			'disciplina_id' => 526,
			'grupodisciplinasprec' => 526
		),
		array(
			'id' => 527,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 527,
			'tipoprecedencia_id' => 527,
			'disciplina_id' => 527,
			'grupodisciplinasprec' => 527
		),
		array(
			'id' => 528,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 528,
			'tipoprecedencia_id' => 528,
			'disciplina_id' => 528,
			'grupodisciplinasprec' => 528
		),
		array(
			'id' => 529,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 529,
			'tipoprecedencia_id' => 529,
			'disciplina_id' => 529,
			'grupodisciplinasprec' => 529
		),
		array(
			'id' => 530,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 530,
			'tipoprecedencia_id' => 530,
			'disciplina_id' => 530,
			'grupodisciplinasprec' => 530
		),
		array(
			'id' => 531,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 531,
			'tipoprecedencia_id' => 531,
			'disciplina_id' => 531,
			'grupodisciplinasprec' => 531
		),
		array(
			'id' => 532,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 532,
			'tipoprecedencia_id' => 532,
			'disciplina_id' => 532,
			'grupodisciplinasprec' => 532
		),
		array(
			'id' => 533,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 533,
			'tipoprecedencia_id' => 533,
			'disciplina_id' => 533,
			'grupodisciplinasprec' => 533
		),
		array(
			'id' => 534,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 534,
			'tipoprecedencia_id' => 534,
			'disciplina_id' => 534,
			'grupodisciplinasprec' => 534
		),
		array(
			'id' => 535,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 535,
			'tipoprecedencia_id' => 535,
			'disciplina_id' => 535,
			'grupodisciplinasprec' => 535
		),
		array(
			'id' => 536,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 536,
			'tipoprecedencia_id' => 536,
			'disciplina_id' => 536,
			'grupodisciplinasprec' => 536
		),
		array(
			'id' => 537,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 537,
			'tipoprecedencia_id' => 537,
			'disciplina_id' => 537,
			'grupodisciplinasprec' => 537
		),
		array(
			'id' => 538,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 538,
			'tipoprecedencia_id' => 538,
			'disciplina_id' => 538,
			'grupodisciplinasprec' => 538
		),
		array(
			'id' => 539,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 539,
			'tipoprecedencia_id' => 539,
			'disciplina_id' => 539,
			'grupodisciplinasprec' => 539
		),
		array(
			'id' => 540,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 540,
			'tipoprecedencia_id' => 540,
			'disciplina_id' => 540,
			'grupodisciplinasprec' => 540
		),
		array(
			'id' => 541,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 541,
			'tipoprecedencia_id' => 541,
			'disciplina_id' => 541,
			'grupodisciplinasprec' => 541
		),
		array(
			'id' => 542,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 542,
			'tipoprecedencia_id' => 542,
			'disciplina_id' => 542,
			'grupodisciplinasprec' => 542
		),
		array(
			'id' => 543,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 543,
			'tipoprecedencia_id' => 543,
			'disciplina_id' => 543,
			'grupodisciplinasprec' => 543
		),
		array(
			'id' => 544,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 544,
			'tipoprecedencia_id' => 544,
			'disciplina_id' => 544,
			'grupodisciplinasprec' => 544
		),
		array(
			'id' => 545,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 545,
			'tipoprecedencia_id' => 545,
			'disciplina_id' => 545,
			'grupodisciplinasprec' => 545
		),
		array(
			'id' => 546,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 546,
			'tipoprecedencia_id' => 546,
			'disciplina_id' => 546,
			'grupodisciplinasprec' => 546
		),
		array(
			'id' => 547,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 547,
			'tipoprecedencia_id' => 547,
			'disciplina_id' => 547,
			'grupodisciplinasprec' => 547
		),
		array(
			'id' => 548,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 548,
			'tipoprecedencia_id' => 548,
			'disciplina_id' => 548,
			'grupodisciplinasprec' => 548
		),
		array(
			'id' => 549,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 549,
			'tipoprecedencia_id' => 549,
			'disciplina_id' => 549,
			'grupodisciplinasprec' => 549
		),
		array(
			'id' => 550,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 550,
			'tipoprecedencia_id' => 550,
			'disciplina_id' => 550,
			'grupodisciplinasprec' => 550
		),
		array(
			'id' => 551,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 551,
			'tipoprecedencia_id' => 551,
			'disciplina_id' => 551,
			'grupodisciplinasprec' => 551
		),
		array(
			'id' => 552,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 552,
			'tipoprecedencia_id' => 552,
			'disciplina_id' => 552,
			'grupodisciplinasprec' => 552
		),
		array(
			'id' => 553,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 553,
			'tipoprecedencia_id' => 553,
			'disciplina_id' => 553,
			'grupodisciplinasprec' => 553
		),
		array(
			'id' => 554,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 554,
			'tipoprecedencia_id' => 554,
			'disciplina_id' => 554,
			'grupodisciplinasprec' => 554
		),
		array(
			'id' => 555,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 555,
			'tipoprecedencia_id' => 555,
			'disciplina_id' => 555,
			'grupodisciplinasprec' => 555
		),
		array(
			'id' => 556,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 556,
			'tipoprecedencia_id' => 556,
			'disciplina_id' => 556,
			'grupodisciplinasprec' => 556
		),
		array(
			'id' => 557,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 557,
			'tipoprecedencia_id' => 557,
			'disciplina_id' => 557,
			'grupodisciplinasprec' => 557
		),
		array(
			'id' => 558,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 558,
			'tipoprecedencia_id' => 558,
			'disciplina_id' => 558,
			'grupodisciplinasprec' => 558
		),
		array(
			'id' => 559,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 559,
			'tipoprecedencia_id' => 559,
			'disciplina_id' => 559,
			'grupodisciplinasprec' => 559
		),
		array(
			'id' => 560,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 560,
			'tipoprecedencia_id' => 560,
			'disciplina_id' => 560,
			'grupodisciplinasprec' => 560
		),
		array(
			'id' => 561,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 561,
			'tipoprecedencia_id' => 561,
			'disciplina_id' => 561,
			'grupodisciplinasprec' => 561
		),
		array(
			'id' => 562,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 562,
			'tipoprecedencia_id' => 562,
			'disciplina_id' => 562,
			'grupodisciplinasprec' => 562
		),
		array(
			'id' => 563,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 563,
			'tipoprecedencia_id' => 563,
			'disciplina_id' => 563,
			'grupodisciplinasprec' => 563
		),
		array(
			'id' => 564,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 564,
			'tipoprecedencia_id' => 564,
			'disciplina_id' => 564,
			'grupodisciplinasprec' => 564
		),
		array(
			'id' => 565,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 565,
			'tipoprecedencia_id' => 565,
			'disciplina_id' => 565,
			'grupodisciplinasprec' => 565
		),
		array(
			'id' => 566,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 566,
			'tipoprecedencia_id' => 566,
			'disciplina_id' => 566,
			'grupodisciplinasprec' => 566
		),
		array(
			'id' => 567,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 567,
			'tipoprecedencia_id' => 567,
			'disciplina_id' => 567,
			'grupodisciplinasprec' => 567
		),
		array(
			'id' => 568,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 568,
			'tipoprecedencia_id' => 568,
			'disciplina_id' => 568,
			'grupodisciplinasprec' => 568
		),
		array(
			'id' => 569,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 569,
			'tipoprecedencia_id' => 569,
			'disciplina_id' => 569,
			'grupodisciplinasprec' => 569
		),
		array(
			'id' => 570,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 570,
			'tipoprecedencia_id' => 570,
			'disciplina_id' => 570,
			'grupodisciplinasprec' => 570
		),
		array(
			'id' => 571,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 571,
			'tipoprecedencia_id' => 571,
			'disciplina_id' => 571,
			'grupodisciplinasprec' => 571
		),
		array(
			'id' => 572,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 572,
			'tipoprecedencia_id' => 572,
			'disciplina_id' => 572,
			'grupodisciplinasprec' => 572
		),
		array(
			'id' => 573,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 573,
			'tipoprecedencia_id' => 573,
			'disciplina_id' => 573,
			'grupodisciplinasprec' => 573
		),
		array(
			'id' => 574,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 574,
			'tipoprecedencia_id' => 574,
			'disciplina_id' => 574,
			'grupodisciplinasprec' => 574
		),
		array(
			'id' => 575,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 575,
			'tipoprecedencia_id' => 575,
			'disciplina_id' => 575,
			'grupodisciplinasprec' => 575
		),
		array(
			'id' => 576,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 576,
			'tipoprecedencia_id' => 576,
			'disciplina_id' => 576,
			'grupodisciplinasprec' => 576
		),
		array(
			'id' => 577,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 577,
			'tipoprecedencia_id' => 577,
			'disciplina_id' => 577,
			'grupodisciplinasprec' => 577
		),
		array(
			'id' => 578,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 578,
			'tipoprecedencia_id' => 578,
			'disciplina_id' => 578,
			'grupodisciplinasprec' => 578
		),
		array(
			'id' => 579,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 579,
			'tipoprecedencia_id' => 579,
			'disciplina_id' => 579,
			'grupodisciplinasprec' => 579
		),
		array(
			'id' => 580,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 580,
			'tipoprecedencia_id' => 580,
			'disciplina_id' => 580,
			'grupodisciplinasprec' => 580
		),
		array(
			'id' => 581,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 581,
			'tipoprecedencia_id' => 581,
			'disciplina_id' => 581,
			'grupodisciplinasprec' => 581
		),
		array(
			'id' => 582,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 582,
			'tipoprecedencia_id' => 582,
			'disciplina_id' => 582,
			'grupodisciplinasprec' => 582
		),
		array(
			'id' => 583,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 583,
			'tipoprecedencia_id' => 583,
			'disciplina_id' => 583,
			'grupodisciplinasprec' => 583
		),
		array(
			'id' => 584,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 584,
			'tipoprecedencia_id' => 584,
			'disciplina_id' => 584,
			'grupodisciplinasprec' => 584
		),
		array(
			'id' => 585,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 585,
			'tipoprecedencia_id' => 585,
			'disciplina_id' => 585,
			'grupodisciplinasprec' => 585
		),
		array(
			'id' => 586,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 586,
			'tipoprecedencia_id' => 586,
			'disciplina_id' => 586,
			'grupodisciplinasprec' => 586
		),
		array(
			'id' => 587,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 587,
			'tipoprecedencia_id' => 587,
			'disciplina_id' => 587,
			'grupodisciplinasprec' => 587
		),
		array(
			'id' => 588,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 588,
			'tipoprecedencia_id' => 588,
			'disciplina_id' => 588,
			'grupodisciplinasprec' => 588
		),
		array(
			'id' => 589,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 589,
			'tipoprecedencia_id' => 589,
			'disciplina_id' => 589,
			'grupodisciplinasprec' => 589
		),
		array(
			'id' => 590,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 590,
			'tipoprecedencia_id' => 590,
			'disciplina_id' => 590,
			'grupodisciplinasprec' => 590
		),
		array(
			'id' => 591,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 591,
			'tipoprecedencia_id' => 591,
			'disciplina_id' => 591,
			'grupodisciplinasprec' => 591
		),
		array(
			'id' => 592,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 592,
			'tipoprecedencia_id' => 592,
			'disciplina_id' => 592,
			'grupodisciplinasprec' => 592
		),
		array(
			'id' => 593,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 593,
			'tipoprecedencia_id' => 593,
			'disciplina_id' => 593,
			'grupodisciplinasprec' => 593
		),
		array(
			'id' => 594,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 594,
			'tipoprecedencia_id' => 594,
			'disciplina_id' => 594,
			'grupodisciplinasprec' => 594
		),
		array(
			'id' => 595,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 595,
			'tipoprecedencia_id' => 595,
			'disciplina_id' => 595,
			'grupodisciplinasprec' => 595
		),
		array(
			'id' => 596,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 596,
			'tipoprecedencia_id' => 596,
			'disciplina_id' => 596,
			'grupodisciplinasprec' => 596
		),
		array(
			'id' => 597,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 597,
			'tipoprecedencia_id' => 597,
			'disciplina_id' => 597,
			'grupodisciplinasprec' => 597
		),
		array(
			'id' => 598,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 598,
			'tipoprecedencia_id' => 598,
			'disciplina_id' => 598,
			'grupodisciplinasprec' => 598
		),
		array(
			'id' => 599,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 599,
			'tipoprecedencia_id' => 599,
			'disciplina_id' => 599,
			'grupodisciplinasprec' => 599
		),
		array(
			'id' => 600,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 600,
			'tipoprecedencia_id' => 600,
			'disciplina_id' => 600,
			'grupodisciplinasprec' => 600
		),
		array(
			'id' => 601,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 601,
			'tipoprecedencia_id' => 601,
			'disciplina_id' => 601,
			'grupodisciplinasprec' => 601
		),
		array(
			'id' => 602,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 602,
			'tipoprecedencia_id' => 602,
			'disciplina_id' => 602,
			'grupodisciplinasprec' => 602
		),
		array(
			'id' => 603,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 603,
			'tipoprecedencia_id' => 603,
			'disciplina_id' => 603,
			'grupodisciplinasprec' => 603
		),
		array(
			'id' => 604,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 604,
			'tipoprecedencia_id' => 604,
			'disciplina_id' => 604,
			'grupodisciplinasprec' => 604
		),
		array(
			'id' => 605,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 605,
			'tipoprecedencia_id' => 605,
			'disciplina_id' => 605,
			'grupodisciplinasprec' => 605
		),
		array(
			'id' => 606,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 606,
			'tipoprecedencia_id' => 606,
			'disciplina_id' => 606,
			'grupodisciplinasprec' => 606
		),
		array(
			'id' => 607,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 607,
			'tipoprecedencia_id' => 607,
			'disciplina_id' => 607,
			'grupodisciplinasprec' => 607
		),
		array(
			'id' => 608,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 608,
			'tipoprecedencia_id' => 608,
			'disciplina_id' => 608,
			'grupodisciplinasprec' => 608
		),
		array(
			'id' => 609,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 609,
			'tipoprecedencia_id' => 609,
			'disciplina_id' => 609,
			'grupodisciplinasprec' => 609
		),
		array(
			'id' => 610,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 610,
			'tipoprecedencia_id' => 610,
			'disciplina_id' => 610,
			'grupodisciplinasprec' => 610
		),
		array(
			'id' => 611,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 611,
			'tipoprecedencia_id' => 611,
			'disciplina_id' => 611,
			'grupodisciplinasprec' => 611
		),
		array(
			'id' => 612,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 612,
			'tipoprecedencia_id' => 612,
			'disciplina_id' => 612,
			'grupodisciplinasprec' => 612
		),
		array(
			'id' => 613,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 613,
			'tipoprecedencia_id' => 613,
			'disciplina_id' => 613,
			'grupodisciplinasprec' => 613
		),
		array(
			'id' => 614,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 614,
			'tipoprecedencia_id' => 614,
			'disciplina_id' => 614,
			'grupodisciplinasprec' => 614
		),
		array(
			'id' => 615,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 615,
			'tipoprecedencia_id' => 615,
			'disciplina_id' => 615,
			'grupodisciplinasprec' => 615
		),
		array(
			'id' => 616,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 616,
			'tipoprecedencia_id' => 616,
			'disciplina_id' => 616,
			'grupodisciplinasprec' => 616
		),
		array(
			'id' => 617,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 617,
			'tipoprecedencia_id' => 617,
			'disciplina_id' => 617,
			'grupodisciplinasprec' => 617
		),
		array(
			'id' => 618,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 618,
			'tipoprecedencia_id' => 618,
			'disciplina_id' => 618,
			'grupodisciplinasprec' => 618
		),
		array(
			'id' => 619,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 619,
			'tipoprecedencia_id' => 619,
			'disciplina_id' => 619,
			'grupodisciplinasprec' => 619
		),
		array(
			'id' => 620,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 620,
			'tipoprecedencia_id' => 620,
			'disciplina_id' => 620,
			'grupodisciplinasprec' => 620
		),
		array(
			'id' => 621,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 621,
			'tipoprecedencia_id' => 621,
			'disciplina_id' => 621,
			'grupodisciplinasprec' => 621
		),
		array(
			'id' => 622,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 622,
			'tipoprecedencia_id' => 622,
			'disciplina_id' => 622,
			'grupodisciplinasprec' => 622
		),
		array(
			'id' => 623,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 623,
			'tipoprecedencia_id' => 623,
			'disciplina_id' => 623,
			'grupodisciplinasprec' => 623
		),
		array(
			'id' => 624,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 624,
			'tipoprecedencia_id' => 624,
			'disciplina_id' => 624,
			'grupodisciplinasprec' => 624
		),
		array(
			'id' => 625,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 625,
			'tipoprecedencia_id' => 625,
			'disciplina_id' => 625,
			'grupodisciplinasprec' => 625
		),
		array(
			'id' => 626,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 626,
			'tipoprecedencia_id' => 626,
			'disciplina_id' => 626,
			'grupodisciplinasprec' => 626
		),
		array(
			'id' => 627,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 627,
			'tipoprecedencia_id' => 627,
			'disciplina_id' => 627,
			'grupodisciplinasprec' => 627
		),
		array(
			'id' => 628,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 628,
			'tipoprecedencia_id' => 628,
			'disciplina_id' => 628,
			'grupodisciplinasprec' => 628
		),
		array(
			'id' => 629,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 629,
			'tipoprecedencia_id' => 629,
			'disciplina_id' => 629,
			'grupodisciplinasprec' => 629
		),
		array(
			'id' => 630,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 630,
			'tipoprecedencia_id' => 630,
			'disciplina_id' => 630,
			'grupodisciplinasprec' => 630
		),
		array(
			'id' => 631,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 631,
			'tipoprecedencia_id' => 631,
			'disciplina_id' => 631,
			'grupodisciplinasprec' => 631
		),
		array(
			'id' => 632,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 632,
			'tipoprecedencia_id' => 632,
			'disciplina_id' => 632,
			'grupodisciplinasprec' => 632
		),
		array(
			'id' => 633,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 633,
			'tipoprecedencia_id' => 633,
			'disciplina_id' => 633,
			'grupodisciplinasprec' => 633
		),
		array(
			'id' => 634,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 634,
			'tipoprecedencia_id' => 634,
			'disciplina_id' => 634,
			'grupodisciplinasprec' => 634
		),
		array(
			'id' => 635,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 635,
			'tipoprecedencia_id' => 635,
			'disciplina_id' => 635,
			'grupodisciplinasprec' => 635
		),
		array(
			'id' => 636,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 636,
			'tipoprecedencia_id' => 636,
			'disciplina_id' => 636,
			'grupodisciplinasprec' => 636
		),
		array(
			'id' => 637,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 637,
			'tipoprecedencia_id' => 637,
			'disciplina_id' => 637,
			'grupodisciplinasprec' => 637
		),
		array(
			'id' => 638,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 638,
			'tipoprecedencia_id' => 638,
			'disciplina_id' => 638,
			'grupodisciplinasprec' => 638
		),
		array(
			'id' => 639,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 639,
			'tipoprecedencia_id' => 639,
			'disciplina_id' => 639,
			'grupodisciplinasprec' => 639
		),
		array(
			'id' => 640,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 640,
			'tipoprecedencia_id' => 640,
			'disciplina_id' => 640,
			'grupodisciplinasprec' => 640
		),
		array(
			'id' => 641,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 641,
			'tipoprecedencia_id' => 641,
			'disciplina_id' => 641,
			'grupodisciplinasprec' => 641
		),
		array(
			'id' => 642,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 642,
			'tipoprecedencia_id' => 642,
			'disciplina_id' => 642,
			'grupodisciplinasprec' => 642
		),
		array(
			'id' => 643,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 643,
			'tipoprecedencia_id' => 643,
			'disciplina_id' => 643,
			'grupodisciplinasprec' => 643
		),
		array(
			'id' => 644,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 644,
			'tipoprecedencia_id' => 644,
			'disciplina_id' => 644,
			'grupodisciplinasprec' => 644
		),
		array(
			'id' => 645,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 645,
			'tipoprecedencia_id' => 645,
			'disciplina_id' => 645,
			'grupodisciplinasprec' => 645
		),
		array(
			'id' => 646,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 646,
			'tipoprecedencia_id' => 646,
			'disciplina_id' => 646,
			'grupodisciplinasprec' => 646
		),
		array(
			'id' => 647,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 647,
			'tipoprecedencia_id' => 647,
			'disciplina_id' => 647,
			'grupodisciplinasprec' => 647
		),
		array(
			'id' => 648,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 648,
			'tipoprecedencia_id' => 648,
			'disciplina_id' => 648,
			'grupodisciplinasprec' => 648
		),
		array(
			'id' => 649,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 649,
			'tipoprecedencia_id' => 649,
			'disciplina_id' => 649,
			'grupodisciplinasprec' => 649
		),
		array(
			'id' => 650,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 650,
			'tipoprecedencia_id' => 650,
			'disciplina_id' => 650,
			'grupodisciplinasprec' => 650
		),
		array(
			'id' => 651,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 651,
			'tipoprecedencia_id' => 651,
			'disciplina_id' => 651,
			'grupodisciplinasprec' => 651
		),
		array(
			'id' => 652,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 652,
			'tipoprecedencia_id' => 652,
			'disciplina_id' => 652,
			'grupodisciplinasprec' => 652
		),
		array(
			'id' => 653,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 653,
			'tipoprecedencia_id' => 653,
			'disciplina_id' => 653,
			'grupodisciplinasprec' => 653
		),
		array(
			'id' => 654,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 654,
			'tipoprecedencia_id' => 654,
			'disciplina_id' => 654,
			'grupodisciplinasprec' => 654
		),
		array(
			'id' => 655,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 655,
			'tipoprecedencia_id' => 655,
			'disciplina_id' => 655,
			'grupodisciplinasprec' => 655
		),
		array(
			'id' => 656,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 656,
			'tipoprecedencia_id' => 656,
			'disciplina_id' => 656,
			'grupodisciplinasprec' => 656
		),
		array(
			'id' => 657,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 657,
			'tipoprecedencia_id' => 657,
			'disciplina_id' => 657,
			'grupodisciplinasprec' => 657
		),
		array(
			'id' => 658,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 658,
			'tipoprecedencia_id' => 658,
			'disciplina_id' => 658,
			'grupodisciplinasprec' => 658
		),
		array(
			'id' => 659,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 659,
			'tipoprecedencia_id' => 659,
			'disciplina_id' => 659,
			'grupodisciplinasprec' => 659
		),
		array(
			'id' => 660,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 660,
			'tipoprecedencia_id' => 660,
			'disciplina_id' => 660,
			'grupodisciplinasprec' => 660
		),
		array(
			'id' => 661,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 661,
			'tipoprecedencia_id' => 661,
			'disciplina_id' => 661,
			'grupodisciplinasprec' => 661
		),
		array(
			'id' => 662,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 662,
			'tipoprecedencia_id' => 662,
			'disciplina_id' => 662,
			'grupodisciplinasprec' => 662
		),
		array(
			'id' => 663,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 663,
			'tipoprecedencia_id' => 663,
			'disciplina_id' => 663,
			'grupodisciplinasprec' => 663
		),
		array(
			'id' => 664,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 664,
			'tipoprecedencia_id' => 664,
			'disciplina_id' => 664,
			'grupodisciplinasprec' => 664
		),
		array(
			'id' => 665,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 665,
			'tipoprecedencia_id' => 665,
			'disciplina_id' => 665,
			'grupodisciplinasprec' => 665
		),
		array(
			'id' => 666,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 666,
			'tipoprecedencia_id' => 666,
			'disciplina_id' => 666,
			'grupodisciplinasprec' => 666
		),
		array(
			'id' => 667,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 667,
			'tipoprecedencia_id' => 667,
			'disciplina_id' => 667,
			'grupodisciplinasprec' => 667
		),
		array(
			'id' => 668,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 668,
			'tipoprecedencia_id' => 668,
			'disciplina_id' => 668,
			'grupodisciplinasprec' => 668
		),
		array(
			'id' => 669,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 669,
			'tipoprecedencia_id' => 669,
			'disciplina_id' => 669,
			'grupodisciplinasprec' => 669
		),
		array(
			'id' => 670,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 670,
			'tipoprecedencia_id' => 670,
			'disciplina_id' => 670,
			'grupodisciplinasprec' => 670
		),
		array(
			'id' => 671,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 671,
			'tipoprecedencia_id' => 671,
			'disciplina_id' => 671,
			'grupodisciplinasprec' => 671
		),
		array(
			'id' => 672,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 672,
			'tipoprecedencia_id' => 672,
			'disciplina_id' => 672,
			'grupodisciplinasprec' => 672
		),
		array(
			'id' => 673,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 673,
			'tipoprecedencia_id' => 673,
			'disciplina_id' => 673,
			'grupodisciplinasprec' => 673
		),
		array(
			'id' => 674,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 674,
			'tipoprecedencia_id' => 674,
			'disciplina_id' => 674,
			'grupodisciplinasprec' => 674
		),
		array(
			'id' => 675,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 675,
			'tipoprecedencia_id' => 675,
			'disciplina_id' => 675,
			'grupodisciplinasprec' => 675
		),
		array(
			'id' => 676,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 676,
			'tipoprecedencia_id' => 676,
			'disciplina_id' => 676,
			'grupodisciplinasprec' => 676
		),
		array(
			'id' => 677,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 677,
			'tipoprecedencia_id' => 677,
			'disciplina_id' => 677,
			'grupodisciplinasprec' => 677
		),
		array(
			'id' => 678,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 678,
			'tipoprecedencia_id' => 678,
			'disciplina_id' => 678,
			'grupodisciplinasprec' => 678
		),
		array(
			'id' => 679,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 679,
			'tipoprecedencia_id' => 679,
			'disciplina_id' => 679,
			'grupodisciplinasprec' => 679
		),
		array(
			'id' => 680,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 680,
			'tipoprecedencia_id' => 680,
			'disciplina_id' => 680,
			'grupodisciplinasprec' => 680
		),
		array(
			'id' => 681,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 681,
			'tipoprecedencia_id' => 681,
			'disciplina_id' => 681,
			'grupodisciplinasprec' => 681
		),
		array(
			'id' => 682,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 682,
			'tipoprecedencia_id' => 682,
			'disciplina_id' => 682,
			'grupodisciplinasprec' => 682
		),
		array(
			'id' => 683,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 683,
			'tipoprecedencia_id' => 683,
			'disciplina_id' => 683,
			'grupodisciplinasprec' => 683
		),
		array(
			'id' => 684,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 684,
			'tipoprecedencia_id' => 684,
			'disciplina_id' => 684,
			'grupodisciplinasprec' => 684
		),
		array(
			'id' => 685,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 685,
			'tipoprecedencia_id' => 685,
			'disciplina_id' => 685,
			'grupodisciplinasprec' => 685
		),
		array(
			'id' => 686,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 686,
			'tipoprecedencia_id' => 686,
			'disciplina_id' => 686,
			'grupodisciplinasprec' => 686
		),
		array(
			'id' => 687,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 687,
			'tipoprecedencia_id' => 687,
			'disciplina_id' => 687,
			'grupodisciplinasprec' => 687
		),
		array(
			'id' => 688,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 688,
			'tipoprecedencia_id' => 688,
			'disciplina_id' => 688,
			'grupodisciplinasprec' => 688
		),
		array(
			'id' => 689,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 689,
			'tipoprecedencia_id' => 689,
			'disciplina_id' => 689,
			'grupodisciplinasprec' => 689
		),
		array(
			'id' => 690,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 690,
			'tipoprecedencia_id' => 690,
			'disciplina_id' => 690,
			'grupodisciplinasprec' => 690
		),
		array(
			'id' => 691,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 691,
			'tipoprecedencia_id' => 691,
			'disciplina_id' => 691,
			'grupodisciplinasprec' => 691
		),
		array(
			'id' => 692,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 692,
			'tipoprecedencia_id' => 692,
			'disciplina_id' => 692,
			'grupodisciplinasprec' => 692
		),
		array(
			'id' => 693,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 693,
			'tipoprecedencia_id' => 693,
			'disciplina_id' => 693,
			'grupodisciplinasprec' => 693
		),
		array(
			'id' => 694,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 694,
			'tipoprecedencia_id' => 694,
			'disciplina_id' => 694,
			'grupodisciplinasprec' => 694
		),
		array(
			'id' => 695,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 695,
			'tipoprecedencia_id' => 695,
			'disciplina_id' => 695,
			'grupodisciplinasprec' => 695
		),
		array(
			'id' => 696,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 696,
			'tipoprecedencia_id' => 696,
			'disciplina_id' => 696,
			'grupodisciplinasprec' => 696
		),
		array(
			'id' => 697,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 697,
			'tipoprecedencia_id' => 697,
			'disciplina_id' => 697,
			'grupodisciplinasprec' => 697
		),
		array(
			'id' => 698,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 698,
			'tipoprecedencia_id' => 698,
			'disciplina_id' => 698,
			'grupodisciplinasprec' => 698
		),
		array(
			'id' => 699,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 699,
			'tipoprecedencia_id' => 699,
			'disciplina_id' => 699,
			'grupodisciplinasprec' => 699
		),
		array(
			'id' => 700,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 700,
			'tipoprecedencia_id' => 700,
			'disciplina_id' => 700,
			'grupodisciplinasprec' => 700
		),
		array(
			'id' => 701,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 701,
			'tipoprecedencia_id' => 701,
			'disciplina_id' => 701,
			'grupodisciplinasprec' => 701
		),
		array(
			'id' => 702,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 702,
			'tipoprecedencia_id' => 702,
			'disciplina_id' => 702,
			'grupodisciplinasprec' => 702
		),
		array(
			'id' => 703,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 703,
			'tipoprecedencia_id' => 703,
			'disciplina_id' => 703,
			'grupodisciplinasprec' => 703
		),
		array(
			'id' => 704,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 704,
			'tipoprecedencia_id' => 704,
			'disciplina_id' => 704,
			'grupodisciplinasprec' => 704
		),
		array(
			'id' => 705,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 705,
			'tipoprecedencia_id' => 705,
			'disciplina_id' => 705,
			'grupodisciplinasprec' => 705
		),
		array(
			'id' => 706,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 706,
			'tipoprecedencia_id' => 706,
			'disciplina_id' => 706,
			'grupodisciplinasprec' => 706
		),
		array(
			'id' => 707,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 707,
			'tipoprecedencia_id' => 707,
			'disciplina_id' => 707,
			'grupodisciplinasprec' => 707
		),
		array(
			'id' => 708,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 708,
			'tipoprecedencia_id' => 708,
			'disciplina_id' => 708,
			'grupodisciplinasprec' => 708
		),
		array(
			'id' => 709,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 709,
			'tipoprecedencia_id' => 709,
			'disciplina_id' => 709,
			'grupodisciplinasprec' => 709
		),
		array(
			'id' => 710,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 710,
			'tipoprecedencia_id' => 710,
			'disciplina_id' => 710,
			'grupodisciplinasprec' => 710
		),
		array(
			'id' => 711,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 711,
			'tipoprecedencia_id' => 711,
			'disciplina_id' => 711,
			'grupodisciplinasprec' => 711
		),
		array(
			'id' => 712,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 712,
			'tipoprecedencia_id' => 712,
			'disciplina_id' => 712,
			'grupodisciplinasprec' => 712
		),
		array(
			'id' => 713,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 713,
			'tipoprecedencia_id' => 713,
			'disciplina_id' => 713,
			'grupodisciplinasprec' => 713
		),
		array(
			'id' => 714,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 714,
			'tipoprecedencia_id' => 714,
			'disciplina_id' => 714,
			'grupodisciplinasprec' => 714
		),
		array(
			'id' => 715,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 715,
			'tipoprecedencia_id' => 715,
			'disciplina_id' => 715,
			'grupodisciplinasprec' => 715
		),
		array(
			'id' => 716,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 716,
			'tipoprecedencia_id' => 716,
			'disciplina_id' => 716,
			'grupodisciplinasprec' => 716
		),
		array(
			'id' => 717,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 717,
			'tipoprecedencia_id' => 717,
			'disciplina_id' => 717,
			'grupodisciplinasprec' => 717
		),
		array(
			'id' => 718,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 718,
			'tipoprecedencia_id' => 718,
			'disciplina_id' => 718,
			'grupodisciplinasprec' => 718
		),
		array(
			'id' => 719,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 719,
			'tipoprecedencia_id' => 719,
			'disciplina_id' => 719,
			'grupodisciplinasprec' => 719
		),
		array(
			'id' => 720,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 720,
			'tipoprecedencia_id' => 720,
			'disciplina_id' => 720,
			'grupodisciplinasprec' => 720
		),
		array(
			'id' => 721,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 721,
			'tipoprecedencia_id' => 721,
			'disciplina_id' => 721,
			'grupodisciplinasprec' => 721
		),
		array(
			'id' => 722,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 722,
			'tipoprecedencia_id' => 722,
			'disciplina_id' => 722,
			'grupodisciplinasprec' => 722
		),
		array(
			'id' => 723,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 723,
			'tipoprecedencia_id' => 723,
			'disciplina_id' => 723,
			'grupodisciplinasprec' => 723
		),
		array(
			'id' => 724,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 724,
			'tipoprecedencia_id' => 724,
			'disciplina_id' => 724,
			'grupodisciplinasprec' => 724
		),
		array(
			'id' => 725,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 725,
			'tipoprecedencia_id' => 725,
			'disciplina_id' => 725,
			'grupodisciplinasprec' => 725
		),
		array(
			'id' => 726,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 726,
			'tipoprecedencia_id' => 726,
			'disciplina_id' => 726,
			'grupodisciplinasprec' => 726
		),
		array(
			'id' => 727,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 727,
			'tipoprecedencia_id' => 727,
			'disciplina_id' => 727,
			'grupodisciplinasprec' => 727
		),
		array(
			'id' => 728,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 728,
			'tipoprecedencia_id' => 728,
			'disciplina_id' => 728,
			'grupodisciplinasprec' => 728
		),
		array(
			'id' => 729,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 729,
			'tipoprecedencia_id' => 729,
			'disciplina_id' => 729,
			'grupodisciplinasprec' => 729
		),
		array(
			'id' => 730,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 730,
			'tipoprecedencia_id' => 730,
			'disciplina_id' => 730,
			'grupodisciplinasprec' => 730
		),
		array(
			'id' => 731,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 731,
			'tipoprecedencia_id' => 731,
			'disciplina_id' => 731,
			'grupodisciplinasprec' => 731
		),
		array(
			'id' => 732,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 732,
			'tipoprecedencia_id' => 732,
			'disciplina_id' => 732,
			'grupodisciplinasprec' => 732
		),
		array(
			'id' => 733,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 733,
			'tipoprecedencia_id' => 733,
			'disciplina_id' => 733,
			'grupodisciplinasprec' => 733
		),
		array(
			'id' => 734,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 734,
			'tipoprecedencia_id' => 734,
			'disciplina_id' => 734,
			'grupodisciplinasprec' => 734
		),
		array(
			'id' => 735,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 735,
			'tipoprecedencia_id' => 735,
			'disciplina_id' => 735,
			'grupodisciplinasprec' => 735
		),
		array(
			'id' => 736,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 736,
			'tipoprecedencia_id' => 736,
			'disciplina_id' => 736,
			'grupodisciplinasprec' => 736
		),
		array(
			'id' => 737,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 737,
			'tipoprecedencia_id' => 737,
			'disciplina_id' => 737,
			'grupodisciplinasprec' => 737
		),
		array(
			'id' => 738,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 738,
			'tipoprecedencia_id' => 738,
			'disciplina_id' => 738,
			'grupodisciplinasprec' => 738
		),
		array(
			'id' => 739,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 739,
			'tipoprecedencia_id' => 739,
			'disciplina_id' => 739,
			'grupodisciplinasprec' => 739
		),
		array(
			'id' => 740,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 740,
			'tipoprecedencia_id' => 740,
			'disciplina_id' => 740,
			'grupodisciplinasprec' => 740
		),
		array(
			'id' => 741,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 741,
			'tipoprecedencia_id' => 741,
			'disciplina_id' => 741,
			'grupodisciplinasprec' => 741
		),
		array(
			'id' => 742,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 742,
			'tipoprecedencia_id' => 742,
			'disciplina_id' => 742,
			'grupodisciplinasprec' => 742
		),
		array(
			'id' => 743,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 743,
			'tipoprecedencia_id' => 743,
			'disciplina_id' => 743,
			'grupodisciplinasprec' => 743
		),
		array(
			'id' => 744,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 744,
			'tipoprecedencia_id' => 744,
			'disciplina_id' => 744,
			'grupodisciplinasprec' => 744
		),
		array(
			'id' => 745,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 745,
			'tipoprecedencia_id' => 745,
			'disciplina_id' => 745,
			'grupodisciplinasprec' => 745
		),
		array(
			'id' => 746,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 746,
			'tipoprecedencia_id' => 746,
			'disciplina_id' => 746,
			'grupodisciplinasprec' => 746
		),
		array(
			'id' => 747,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 747,
			'tipoprecedencia_id' => 747,
			'disciplina_id' => 747,
			'grupodisciplinasprec' => 747
		),
		array(
			'id' => 748,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 748,
			'tipoprecedencia_id' => 748,
			'disciplina_id' => 748,
			'grupodisciplinasprec' => 748
		),
		array(
			'id' => 749,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 749,
			'tipoprecedencia_id' => 749,
			'disciplina_id' => 749,
			'grupodisciplinasprec' => 749
		),
		array(
			'id' => 750,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 750,
			'tipoprecedencia_id' => 750,
			'disciplina_id' => 750,
			'grupodisciplinasprec' => 750
		),
		array(
			'id' => 751,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 751,
			'tipoprecedencia_id' => 751,
			'disciplina_id' => 751,
			'grupodisciplinasprec' => 751
		),
		array(
			'id' => 752,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 752,
			'tipoprecedencia_id' => 752,
			'disciplina_id' => 752,
			'grupodisciplinasprec' => 752
		),
		array(
			'id' => 753,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 753,
			'tipoprecedencia_id' => 753,
			'disciplina_id' => 753,
			'grupodisciplinasprec' => 753
		),
		array(
			'id' => 754,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 754,
			'tipoprecedencia_id' => 754,
			'disciplina_id' => 754,
			'grupodisciplinasprec' => 754
		),
		array(
			'id' => 755,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 755,
			'tipoprecedencia_id' => 755,
			'disciplina_id' => 755,
			'grupodisciplinasprec' => 755
		),
		array(
			'id' => 756,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 756,
			'tipoprecedencia_id' => 756,
			'disciplina_id' => 756,
			'grupodisciplinasprec' => 756
		),
		array(
			'id' => 757,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 757,
			'tipoprecedencia_id' => 757,
			'disciplina_id' => 757,
			'grupodisciplinasprec' => 757
		),
		array(
			'id' => 758,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 758,
			'tipoprecedencia_id' => 758,
			'disciplina_id' => 758,
			'grupodisciplinasprec' => 758
		),
		array(
			'id' => 759,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 759,
			'tipoprecedencia_id' => 759,
			'disciplina_id' => 759,
			'grupodisciplinasprec' => 759
		),
		array(
			'id' => 760,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 760,
			'tipoprecedencia_id' => 760,
			'disciplina_id' => 760,
			'grupodisciplinasprec' => 760
		),
		array(
			'id' => 761,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 761,
			'tipoprecedencia_id' => 761,
			'disciplina_id' => 761,
			'grupodisciplinasprec' => 761
		),
		array(
			'id' => 762,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 762,
			'tipoprecedencia_id' => 762,
			'disciplina_id' => 762,
			'grupodisciplinasprec' => 762
		),
		array(
			'id' => 763,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 763,
			'tipoprecedencia_id' => 763,
			'disciplina_id' => 763,
			'grupodisciplinasprec' => 763
		),
		array(
			'id' => 764,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 764,
			'tipoprecedencia_id' => 764,
			'disciplina_id' => 764,
			'grupodisciplinasprec' => 764
		),
		array(
			'id' => 765,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 765,
			'tipoprecedencia_id' => 765,
			'disciplina_id' => 765,
			'grupodisciplinasprec' => 765
		),
		array(
			'id' => 766,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 766,
			'tipoprecedencia_id' => 766,
			'disciplina_id' => 766,
			'grupodisciplinasprec' => 766
		),
		array(
			'id' => 767,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 767,
			'tipoprecedencia_id' => 767,
			'disciplina_id' => 767,
			'grupodisciplinasprec' => 767
		),
		array(
			'id' => 768,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 768,
			'tipoprecedencia_id' => 768,
			'disciplina_id' => 768,
			'grupodisciplinasprec' => 768
		),
		array(
			'id' => 769,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 769,
			'tipoprecedencia_id' => 769,
			'disciplina_id' => 769,
			'grupodisciplinasprec' => 769
		),
		array(
			'id' => 770,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 770,
			'tipoprecedencia_id' => 770,
			'disciplina_id' => 770,
			'grupodisciplinasprec' => 770
		),
		array(
			'id' => 771,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 771,
			'tipoprecedencia_id' => 771,
			'disciplina_id' => 771,
			'grupodisciplinasprec' => 771
		),
		array(
			'id' => 772,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 772,
			'tipoprecedencia_id' => 772,
			'disciplina_id' => 772,
			'grupodisciplinasprec' => 772
		),
		array(
			'id' => 773,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 773,
			'tipoprecedencia_id' => 773,
			'disciplina_id' => 773,
			'grupodisciplinasprec' => 773
		),
		array(
			'id' => 774,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 774,
			'tipoprecedencia_id' => 774,
			'disciplina_id' => 774,
			'grupodisciplinasprec' => 774
		),
		array(
			'id' => 775,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 775,
			'tipoprecedencia_id' => 775,
			'disciplina_id' => 775,
			'grupodisciplinasprec' => 775
		),
		array(
			'id' => 776,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 776,
			'tipoprecedencia_id' => 776,
			'disciplina_id' => 776,
			'grupodisciplinasprec' => 776
		),
		array(
			'id' => 777,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 777,
			'tipoprecedencia_id' => 777,
			'disciplina_id' => 777,
			'grupodisciplinasprec' => 777
		),
		array(
			'id' => 778,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 778,
			'tipoprecedencia_id' => 778,
			'disciplina_id' => 778,
			'grupodisciplinasprec' => 778
		),
		array(
			'id' => 779,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 779,
			'tipoprecedencia_id' => 779,
			'disciplina_id' => 779,
			'grupodisciplinasprec' => 779
		),
		array(
			'id' => 780,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 780,
			'tipoprecedencia_id' => 780,
			'disciplina_id' => 780,
			'grupodisciplinasprec' => 780
		),
		array(
			'id' => 781,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 781,
			'tipoprecedencia_id' => 781,
			'disciplina_id' => 781,
			'grupodisciplinasprec' => 781
		),
		array(
			'id' => 782,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 782,
			'tipoprecedencia_id' => 782,
			'disciplina_id' => 782,
			'grupodisciplinasprec' => 782
		),
		array(
			'id' => 783,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 783,
			'tipoprecedencia_id' => 783,
			'disciplina_id' => 783,
			'grupodisciplinasprec' => 783
		),
		array(
			'id' => 784,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 784,
			'tipoprecedencia_id' => 784,
			'disciplina_id' => 784,
			'grupodisciplinasprec' => 784
		),
		array(
			'id' => 785,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 785,
			'tipoprecedencia_id' => 785,
			'disciplina_id' => 785,
			'grupodisciplinasprec' => 785
		),
		array(
			'id' => 786,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 786,
			'tipoprecedencia_id' => 786,
			'disciplina_id' => 786,
			'grupodisciplinasprec' => 786
		),
		array(
			'id' => 787,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 787,
			'tipoprecedencia_id' => 787,
			'disciplina_id' => 787,
			'grupodisciplinasprec' => 787
		),
		array(
			'id' => 788,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 788,
			'tipoprecedencia_id' => 788,
			'disciplina_id' => 788,
			'grupodisciplinasprec' => 788
		),
		array(
			'id' => 789,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 789,
			'tipoprecedencia_id' => 789,
			'disciplina_id' => 789,
			'grupodisciplinasprec' => 789
		),
		array(
			'id' => 790,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 790,
			'tipoprecedencia_id' => 790,
			'disciplina_id' => 790,
			'grupodisciplinasprec' => 790
		),
		array(
			'id' => 791,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 791,
			'tipoprecedencia_id' => 791,
			'disciplina_id' => 791,
			'grupodisciplinasprec' => 791
		),
		array(
			'id' => 792,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 792,
			'tipoprecedencia_id' => 792,
			'disciplina_id' => 792,
			'grupodisciplinasprec' => 792
		),
		array(
			'id' => 793,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 793,
			'tipoprecedencia_id' => 793,
			'disciplina_id' => 793,
			'grupodisciplinasprec' => 793
		),
		array(
			'id' => 794,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 794,
			'tipoprecedencia_id' => 794,
			'disciplina_id' => 794,
			'grupodisciplinasprec' => 794
		),
		array(
			'id' => 795,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 795,
			'tipoprecedencia_id' => 795,
			'disciplina_id' => 795,
			'grupodisciplinasprec' => 795
		),
		array(
			'id' => 796,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 796,
			'tipoprecedencia_id' => 796,
			'disciplina_id' => 796,
			'grupodisciplinasprec' => 796
		),
		array(
			'id' => 797,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 797,
			'tipoprecedencia_id' => 797,
			'disciplina_id' => 797,
			'grupodisciplinasprec' => 797
		),
		array(
			'id' => 798,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 798,
			'tipoprecedencia_id' => 798,
			'disciplina_id' => 798,
			'grupodisciplinasprec' => 798
		),
		array(
			'id' => 799,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 799,
			'tipoprecedencia_id' => 799,
			'disciplina_id' => 799,
			'grupodisciplinasprec' => 799
		),
		array(
			'id' => 800,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 800,
			'tipoprecedencia_id' => 800,
			'disciplina_id' => 800,
			'grupodisciplinasprec' => 800
		),
		array(
			'id' => 801,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 801,
			'tipoprecedencia_id' => 801,
			'disciplina_id' => 801,
			'grupodisciplinasprec' => 801
		),
		array(
			'id' => 802,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 802,
			'tipoprecedencia_id' => 802,
			'disciplina_id' => 802,
			'grupodisciplinasprec' => 802
		),
		array(
			'id' => 803,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 803,
			'tipoprecedencia_id' => 803,
			'disciplina_id' => 803,
			'grupodisciplinasprec' => 803
		),
		array(
			'id' => 804,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 804,
			'tipoprecedencia_id' => 804,
			'disciplina_id' => 804,
			'grupodisciplinasprec' => 804
		),
		array(
			'id' => 805,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 805,
			'tipoprecedencia_id' => 805,
			'disciplina_id' => 805,
			'grupodisciplinasprec' => 805
		),
		array(
			'id' => 806,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 806,
			'tipoprecedencia_id' => 806,
			'disciplina_id' => 806,
			'grupodisciplinasprec' => 806
		),
		array(
			'id' => 807,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 807,
			'tipoprecedencia_id' => 807,
			'disciplina_id' => 807,
			'grupodisciplinasprec' => 807
		),
		array(
			'id' => 808,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 808,
			'tipoprecedencia_id' => 808,
			'disciplina_id' => 808,
			'grupodisciplinasprec' => 808
		),
		array(
			'id' => 809,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 809,
			'tipoprecedencia_id' => 809,
			'disciplina_id' => 809,
			'grupodisciplinasprec' => 809
		),
		array(
			'id' => 810,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 810,
			'tipoprecedencia_id' => 810,
			'disciplina_id' => 810,
			'grupodisciplinasprec' => 810
		),
		array(
			'id' => 811,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 811,
			'tipoprecedencia_id' => 811,
			'disciplina_id' => 811,
			'grupodisciplinasprec' => 811
		),
		array(
			'id' => 812,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 812,
			'tipoprecedencia_id' => 812,
			'disciplina_id' => 812,
			'grupodisciplinasprec' => 812
		),
		array(
			'id' => 813,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 813,
			'tipoprecedencia_id' => 813,
			'disciplina_id' => 813,
			'grupodisciplinasprec' => 813
		),
		array(
			'id' => 814,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 814,
			'tipoprecedencia_id' => 814,
			'disciplina_id' => 814,
			'grupodisciplinasprec' => 814
		),
		array(
			'id' => 815,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 815,
			'tipoprecedencia_id' => 815,
			'disciplina_id' => 815,
			'grupodisciplinasprec' => 815
		),
		array(
			'id' => 816,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 816,
			'tipoprecedencia_id' => 816,
			'disciplina_id' => 816,
			'grupodisciplinasprec' => 816
		),
		array(
			'id' => 817,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 817,
			'tipoprecedencia_id' => 817,
			'disciplina_id' => 817,
			'grupodisciplinasprec' => 817
		),
		array(
			'id' => 818,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 818,
			'tipoprecedencia_id' => 818,
			'disciplina_id' => 818,
			'grupodisciplinasprec' => 818
		),
		array(
			'id' => 819,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 819,
			'tipoprecedencia_id' => 819,
			'disciplina_id' => 819,
			'grupodisciplinasprec' => 819
		),
		array(
			'id' => 820,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 820,
			'tipoprecedencia_id' => 820,
			'disciplina_id' => 820,
			'grupodisciplinasprec' => 820
		),
		array(
			'id' => 821,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 821,
			'tipoprecedencia_id' => 821,
			'disciplina_id' => 821,
			'grupodisciplinasprec' => 821
		),
		array(
			'id' => 822,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 822,
			'tipoprecedencia_id' => 822,
			'disciplina_id' => 822,
			'grupodisciplinasprec' => 822
		),
		array(
			'id' => 823,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 823,
			'tipoprecedencia_id' => 823,
			'disciplina_id' => 823,
			'grupodisciplinasprec' => 823
		),
		array(
			'id' => 824,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 824,
			'tipoprecedencia_id' => 824,
			'disciplina_id' => 824,
			'grupodisciplinasprec' => 824
		),
		array(
			'id' => 825,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 825,
			'tipoprecedencia_id' => 825,
			'disciplina_id' => 825,
			'grupodisciplinasprec' => 825
		),
		array(
			'id' => 826,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 826,
			'tipoprecedencia_id' => 826,
			'disciplina_id' => 826,
			'grupodisciplinasprec' => 826
		),
		array(
			'id' => 827,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 827,
			'tipoprecedencia_id' => 827,
			'disciplina_id' => 827,
			'grupodisciplinasprec' => 827
		),
		array(
			'id' => 828,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 828,
			'tipoprecedencia_id' => 828,
			'disciplina_id' => 828,
			'grupodisciplinasprec' => 828
		),
		array(
			'id' => 829,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 829,
			'tipoprecedencia_id' => 829,
			'disciplina_id' => 829,
			'grupodisciplinasprec' => 829
		),
		array(
			'id' => 830,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 830,
			'tipoprecedencia_id' => 830,
			'disciplina_id' => 830,
			'grupodisciplinasprec' => 830
		),
		array(
			'id' => 831,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 831,
			'tipoprecedencia_id' => 831,
			'disciplina_id' => 831,
			'grupodisciplinasprec' => 831
		),
		array(
			'id' => 832,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 832,
			'tipoprecedencia_id' => 832,
			'disciplina_id' => 832,
			'grupodisciplinasprec' => 832
		),
		array(
			'id' => 833,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 833,
			'tipoprecedencia_id' => 833,
			'disciplina_id' => 833,
			'grupodisciplinasprec' => 833
		),
		array(
			'id' => 834,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 834,
			'tipoprecedencia_id' => 834,
			'disciplina_id' => 834,
			'grupodisciplinasprec' => 834
		),
		array(
			'id' => 835,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 835,
			'tipoprecedencia_id' => 835,
			'disciplina_id' => 835,
			'grupodisciplinasprec' => 835
		),
		array(
			'id' => 836,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 836,
			'tipoprecedencia_id' => 836,
			'disciplina_id' => 836,
			'grupodisciplinasprec' => 836
		),
		array(
			'id' => 837,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 837,
			'tipoprecedencia_id' => 837,
			'disciplina_id' => 837,
			'grupodisciplinasprec' => 837
		),
		array(
			'id' => 838,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 838,
			'tipoprecedencia_id' => 838,
			'disciplina_id' => 838,
			'grupodisciplinasprec' => 838
		),
		array(
			'id' => 839,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 839,
			'tipoprecedencia_id' => 839,
			'disciplina_id' => 839,
			'grupodisciplinasprec' => 839
		),
		array(
			'id' => 840,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 840,
			'tipoprecedencia_id' => 840,
			'disciplina_id' => 840,
			'grupodisciplinasprec' => 840
		),
		array(
			'id' => 841,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 841,
			'tipoprecedencia_id' => 841,
			'disciplina_id' => 841,
			'grupodisciplinasprec' => 841
		),
		array(
			'id' => 842,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 842,
			'tipoprecedencia_id' => 842,
			'disciplina_id' => 842,
			'grupodisciplinasprec' => 842
		),
		array(
			'id' => 843,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 843,
			'tipoprecedencia_id' => 843,
			'disciplina_id' => 843,
			'grupodisciplinasprec' => 843
		),
		array(
			'id' => 844,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 844,
			'tipoprecedencia_id' => 844,
			'disciplina_id' => 844,
			'grupodisciplinasprec' => 844
		),
		array(
			'id' => 845,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 845,
			'tipoprecedencia_id' => 845,
			'disciplina_id' => 845,
			'grupodisciplinasprec' => 845
		),
		array(
			'id' => 846,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 846,
			'tipoprecedencia_id' => 846,
			'disciplina_id' => 846,
			'grupodisciplinasprec' => 846
		),
		array(
			'id' => 847,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 847,
			'tipoprecedencia_id' => 847,
			'disciplina_id' => 847,
			'grupodisciplinasprec' => 847
		),
		array(
			'id' => 848,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 848,
			'tipoprecedencia_id' => 848,
			'disciplina_id' => 848,
			'grupodisciplinasprec' => 848
		),
		array(
			'id' => 849,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 849,
			'tipoprecedencia_id' => 849,
			'disciplina_id' => 849,
			'grupodisciplinasprec' => 849
		),
		array(
			'id' => 850,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 850,
			'tipoprecedencia_id' => 850,
			'disciplina_id' => 850,
			'grupodisciplinasprec' => 850
		),
		array(
			'id' => 851,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 851,
			'tipoprecedencia_id' => 851,
			'disciplina_id' => 851,
			'grupodisciplinasprec' => 851
		),
		array(
			'id' => 852,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 852,
			'tipoprecedencia_id' => 852,
			'disciplina_id' => 852,
			'grupodisciplinasprec' => 852
		),
		array(
			'id' => 853,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 853,
			'tipoprecedencia_id' => 853,
			'disciplina_id' => 853,
			'grupodisciplinasprec' => 853
		),
		array(
			'id' => 854,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 854,
			'tipoprecedencia_id' => 854,
			'disciplina_id' => 854,
			'grupodisciplinasprec' => 854
		),
		array(
			'id' => 855,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 855,
			'tipoprecedencia_id' => 855,
			'disciplina_id' => 855,
			'grupodisciplinasprec' => 855
		),
		array(
			'id' => 856,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 856,
			'tipoprecedencia_id' => 856,
			'disciplina_id' => 856,
			'grupodisciplinasprec' => 856
		),
		array(
			'id' => 857,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 857,
			'tipoprecedencia_id' => 857,
			'disciplina_id' => 857,
			'grupodisciplinasprec' => 857
		),
		array(
			'id' => 858,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 858,
			'tipoprecedencia_id' => 858,
			'disciplina_id' => 858,
			'grupodisciplinasprec' => 858
		),
		array(
			'id' => 859,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 859,
			'tipoprecedencia_id' => 859,
			'disciplina_id' => 859,
			'grupodisciplinasprec' => 859
		),
		array(
			'id' => 860,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 860,
			'tipoprecedencia_id' => 860,
			'disciplina_id' => 860,
			'grupodisciplinasprec' => 860
		),
		array(
			'id' => 861,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 861,
			'tipoprecedencia_id' => 861,
			'disciplina_id' => 861,
			'grupodisciplinasprec' => 861
		),
		array(
			'id' => 862,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 862,
			'tipoprecedencia_id' => 862,
			'disciplina_id' => 862,
			'grupodisciplinasprec' => 862
		),
		array(
			'id' => 863,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 863,
			'tipoprecedencia_id' => 863,
			'disciplina_id' => 863,
			'grupodisciplinasprec' => 863
		),
		array(
			'id' => 864,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 864,
			'tipoprecedencia_id' => 864,
			'disciplina_id' => 864,
			'grupodisciplinasprec' => 864
		),
		array(
			'id' => 865,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 865,
			'tipoprecedencia_id' => 865,
			'disciplina_id' => 865,
			'grupodisciplinasprec' => 865
		),
		array(
			'id' => 866,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 866,
			'tipoprecedencia_id' => 866,
			'disciplina_id' => 866,
			'grupodisciplinasprec' => 866
		),
		array(
			'id' => 867,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 867,
			'tipoprecedencia_id' => 867,
			'disciplina_id' => 867,
			'grupodisciplinasprec' => 867
		),
		array(
			'id' => 868,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 868,
			'tipoprecedencia_id' => 868,
			'disciplina_id' => 868,
			'grupodisciplinasprec' => 868
		),
		array(
			'id' => 869,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 869,
			'tipoprecedencia_id' => 869,
			'disciplina_id' => 869,
			'grupodisciplinasprec' => 869
		),
		array(
			'id' => 870,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 870,
			'tipoprecedencia_id' => 870,
			'disciplina_id' => 870,
			'grupodisciplinasprec' => 870
		),
		array(
			'id' => 871,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 871,
			'tipoprecedencia_id' => 871,
			'disciplina_id' => 871,
			'grupodisciplinasprec' => 871
		),
		array(
			'id' => 872,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 872,
			'tipoprecedencia_id' => 872,
			'disciplina_id' => 872,
			'grupodisciplinasprec' => 872
		),
		array(
			'id' => 873,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 873,
			'tipoprecedencia_id' => 873,
			'disciplina_id' => 873,
			'grupodisciplinasprec' => 873
		),
		array(
			'id' => 874,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 874,
			'tipoprecedencia_id' => 874,
			'disciplina_id' => 874,
			'grupodisciplinasprec' => 874
		),
		array(
			'id' => 875,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 875,
			'tipoprecedencia_id' => 875,
			'disciplina_id' => 875,
			'grupodisciplinasprec' => 875
		),
		array(
			'id' => 876,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 876,
			'tipoprecedencia_id' => 876,
			'disciplina_id' => 876,
			'grupodisciplinasprec' => 876
		),
		array(
			'id' => 877,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 877,
			'tipoprecedencia_id' => 877,
			'disciplina_id' => 877,
			'grupodisciplinasprec' => 877
		),
		array(
			'id' => 878,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 878,
			'tipoprecedencia_id' => 878,
			'disciplina_id' => 878,
			'grupodisciplinasprec' => 878
		),
		array(
			'id' => 879,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 879,
			'tipoprecedencia_id' => 879,
			'disciplina_id' => 879,
			'grupodisciplinasprec' => 879
		),
		array(
			'id' => 880,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 880,
			'tipoprecedencia_id' => 880,
			'disciplina_id' => 880,
			'grupodisciplinasprec' => 880
		),
		array(
			'id' => 881,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 881,
			'tipoprecedencia_id' => 881,
			'disciplina_id' => 881,
			'grupodisciplinasprec' => 881
		),
		array(
			'id' => 882,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 882,
			'tipoprecedencia_id' => 882,
			'disciplina_id' => 882,
			'grupodisciplinasprec' => 882
		),
		array(
			'id' => 883,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 883,
			'tipoprecedencia_id' => 883,
			'disciplina_id' => 883,
			'grupodisciplinasprec' => 883
		),
		array(
			'id' => 884,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 884,
			'tipoprecedencia_id' => 884,
			'disciplina_id' => 884,
			'grupodisciplinasprec' => 884
		),
		array(
			'id' => 885,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 885,
			'tipoprecedencia_id' => 885,
			'disciplina_id' => 885,
			'grupodisciplinasprec' => 885
		),
		array(
			'id' => 886,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 886,
			'tipoprecedencia_id' => 886,
			'disciplina_id' => 886,
			'grupodisciplinasprec' => 886
		),
		array(
			'id' => 887,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 887,
			'tipoprecedencia_id' => 887,
			'disciplina_id' => 887,
			'grupodisciplinasprec' => 887
		),
		array(
			'id' => 888,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 888,
			'tipoprecedencia_id' => 888,
			'disciplina_id' => 888,
			'grupodisciplinasprec' => 888
		),
		array(
			'id' => 889,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 889,
			'tipoprecedencia_id' => 889,
			'disciplina_id' => 889,
			'grupodisciplinasprec' => 889
		),
		array(
			'id' => 890,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 890,
			'tipoprecedencia_id' => 890,
			'disciplina_id' => 890,
			'grupodisciplinasprec' => 890
		),
		array(
			'id' => 891,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 891,
			'tipoprecedencia_id' => 891,
			'disciplina_id' => 891,
			'grupodisciplinasprec' => 891
		),
		array(
			'id' => 892,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 892,
			'tipoprecedencia_id' => 892,
			'disciplina_id' => 892,
			'grupodisciplinasprec' => 892
		),
		array(
			'id' => 893,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 893,
			'tipoprecedencia_id' => 893,
			'disciplina_id' => 893,
			'grupodisciplinasprec' => 893
		),
		array(
			'id' => 894,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 894,
			'tipoprecedencia_id' => 894,
			'disciplina_id' => 894,
			'grupodisciplinasprec' => 894
		),
		array(
			'id' => 895,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 895,
			'tipoprecedencia_id' => 895,
			'disciplina_id' => 895,
			'grupodisciplinasprec' => 895
		),
		array(
			'id' => 896,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 896,
			'tipoprecedencia_id' => 896,
			'disciplina_id' => 896,
			'grupodisciplinasprec' => 896
		),
		array(
			'id' => 897,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 897,
			'tipoprecedencia_id' => 897,
			'disciplina_id' => 897,
			'grupodisciplinasprec' => 897
		),
		array(
			'id' => 898,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 898,
			'tipoprecedencia_id' => 898,
			'disciplina_id' => 898,
			'grupodisciplinasprec' => 898
		),
		array(
			'id' => 899,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 899,
			'tipoprecedencia_id' => 899,
			'disciplina_id' => 899,
			'grupodisciplinasprec' => 899
		),
		array(
			'id' => 900,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 900,
			'tipoprecedencia_id' => 900,
			'disciplina_id' => 900,
			'grupodisciplinasprec' => 900
		),
		array(
			'id' => 901,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 901,
			'tipoprecedencia_id' => 901,
			'disciplina_id' => 901,
			'grupodisciplinasprec' => 901
		),
		array(
			'id' => 902,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 902,
			'tipoprecedencia_id' => 902,
			'disciplina_id' => 902,
			'grupodisciplinasprec' => 902
		),
		array(
			'id' => 903,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 903,
			'tipoprecedencia_id' => 903,
			'disciplina_id' => 903,
			'grupodisciplinasprec' => 903
		),
		array(
			'id' => 904,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 904,
			'tipoprecedencia_id' => 904,
			'disciplina_id' => 904,
			'grupodisciplinasprec' => 904
		),
		array(
			'id' => 905,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 905,
			'tipoprecedencia_id' => 905,
			'disciplina_id' => 905,
			'grupodisciplinasprec' => 905
		),
		array(
			'id' => 906,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 906,
			'tipoprecedencia_id' => 906,
			'disciplina_id' => 906,
			'grupodisciplinasprec' => 906
		),
		array(
			'id' => 907,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 907,
			'tipoprecedencia_id' => 907,
			'disciplina_id' => 907,
			'grupodisciplinasprec' => 907
		),
		array(
			'id' => 908,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 908,
			'tipoprecedencia_id' => 908,
			'disciplina_id' => 908,
			'grupodisciplinasprec' => 908
		),
		array(
			'id' => 909,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 909,
			'tipoprecedencia_id' => 909,
			'disciplina_id' => 909,
			'grupodisciplinasprec' => 909
		),
		array(
			'id' => 910,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 910,
			'tipoprecedencia_id' => 910,
			'disciplina_id' => 910,
			'grupodisciplinasprec' => 910
		),
		array(
			'id' => 911,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 911,
			'tipoprecedencia_id' => 911,
			'disciplina_id' => 911,
			'grupodisciplinasprec' => 911
		),
		array(
			'id' => 912,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 912,
			'tipoprecedencia_id' => 912,
			'disciplina_id' => 912,
			'grupodisciplinasprec' => 912
		),
		array(
			'id' => 913,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 913,
			'tipoprecedencia_id' => 913,
			'disciplina_id' => 913,
			'grupodisciplinasprec' => 913
		),
		array(
			'id' => 914,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 914,
			'tipoprecedencia_id' => 914,
			'disciplina_id' => 914,
			'grupodisciplinasprec' => 914
		),
		array(
			'id' => 915,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 915,
			'tipoprecedencia_id' => 915,
			'disciplina_id' => 915,
			'grupodisciplinasprec' => 915
		),
		array(
			'id' => 916,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 916,
			'tipoprecedencia_id' => 916,
			'disciplina_id' => 916,
			'grupodisciplinasprec' => 916
		),
		array(
			'id' => 917,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 917,
			'tipoprecedencia_id' => 917,
			'disciplina_id' => 917,
			'grupodisciplinasprec' => 917
		),
		array(
			'id' => 918,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 918,
			'tipoprecedencia_id' => 918,
			'disciplina_id' => 918,
			'grupodisciplinasprec' => 918
		),
		array(
			'id' => 919,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 919,
			'tipoprecedencia_id' => 919,
			'disciplina_id' => 919,
			'grupodisciplinasprec' => 919
		),
		array(
			'id' => 920,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 920,
			'tipoprecedencia_id' => 920,
			'disciplina_id' => 920,
			'grupodisciplinasprec' => 920
		),
		array(
			'id' => 921,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 921,
			'tipoprecedencia_id' => 921,
			'disciplina_id' => 921,
			'grupodisciplinasprec' => 921
		),
		array(
			'id' => 922,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 922,
			'tipoprecedencia_id' => 922,
			'disciplina_id' => 922,
			'grupodisciplinasprec' => 922
		),
		array(
			'id' => 923,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 923,
			'tipoprecedencia_id' => 923,
			'disciplina_id' => 923,
			'grupodisciplinasprec' => 923
		),
		array(
			'id' => 924,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 924,
			'tipoprecedencia_id' => 924,
			'disciplina_id' => 924,
			'grupodisciplinasprec' => 924
		),
		array(
			'id' => 925,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 925,
			'tipoprecedencia_id' => 925,
			'disciplina_id' => 925,
			'grupodisciplinasprec' => 925
		),
		array(
			'id' => 926,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 926,
			'tipoprecedencia_id' => 926,
			'disciplina_id' => 926,
			'grupodisciplinasprec' => 926
		),
		array(
			'id' => 927,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 927,
			'tipoprecedencia_id' => 927,
			'disciplina_id' => 927,
			'grupodisciplinasprec' => 927
		),
		array(
			'id' => 928,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 928,
			'tipoprecedencia_id' => 928,
			'disciplina_id' => 928,
			'grupodisciplinasprec' => 928
		),
		array(
			'id' => 929,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 929,
			'tipoprecedencia_id' => 929,
			'disciplina_id' => 929,
			'grupodisciplinasprec' => 929
		),
		array(
			'id' => 930,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 930,
			'tipoprecedencia_id' => 930,
			'disciplina_id' => 930,
			'grupodisciplinasprec' => 930
		),
		array(
			'id' => 931,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 931,
			'tipoprecedencia_id' => 931,
			'disciplina_id' => 931,
			'grupodisciplinasprec' => 931
		),
		array(
			'id' => 932,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 932,
			'tipoprecedencia_id' => 932,
			'disciplina_id' => 932,
			'grupodisciplinasprec' => 932
		),
		array(
			'id' => 933,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 933,
			'tipoprecedencia_id' => 933,
			'disciplina_id' => 933,
			'grupodisciplinasprec' => 933
		),
		array(
			'id' => 934,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 934,
			'tipoprecedencia_id' => 934,
			'disciplina_id' => 934,
			'grupodisciplinasprec' => 934
		),
		array(
			'id' => 935,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 935,
			'tipoprecedencia_id' => 935,
			'disciplina_id' => 935,
			'grupodisciplinasprec' => 935
		),
		array(
			'id' => 936,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 936,
			'tipoprecedencia_id' => 936,
			'disciplina_id' => 936,
			'grupodisciplinasprec' => 936
		),
		array(
			'id' => 937,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 937,
			'tipoprecedencia_id' => 937,
			'disciplina_id' => 937,
			'grupodisciplinasprec' => 937
		),
		array(
			'id' => 938,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 938,
			'tipoprecedencia_id' => 938,
			'disciplina_id' => 938,
			'grupodisciplinasprec' => 938
		),
		array(
			'id' => 939,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 939,
			'tipoprecedencia_id' => 939,
			'disciplina_id' => 939,
			'grupodisciplinasprec' => 939
		),
		array(
			'id' => 940,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 940,
			'tipoprecedencia_id' => 940,
			'disciplina_id' => 940,
			'grupodisciplinasprec' => 940
		),
		array(
			'id' => 941,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 941,
			'tipoprecedencia_id' => 941,
			'disciplina_id' => 941,
			'grupodisciplinasprec' => 941
		),
		array(
			'id' => 942,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 942,
			'tipoprecedencia_id' => 942,
			'disciplina_id' => 942,
			'grupodisciplinasprec' => 942
		),
		array(
			'id' => 943,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 943,
			'tipoprecedencia_id' => 943,
			'disciplina_id' => 943,
			'grupodisciplinasprec' => 943
		),
		array(
			'id' => 944,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 944,
			'tipoprecedencia_id' => 944,
			'disciplina_id' => 944,
			'grupodisciplinasprec' => 944
		),
		array(
			'id' => 945,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 945,
			'tipoprecedencia_id' => 945,
			'disciplina_id' => 945,
			'grupodisciplinasprec' => 945
		),
		array(
			'id' => 946,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 946,
			'tipoprecedencia_id' => 946,
			'disciplina_id' => 946,
			'grupodisciplinasprec' => 946
		),
		array(
			'id' => 947,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 947,
			'tipoprecedencia_id' => 947,
			'disciplina_id' => 947,
			'grupodisciplinasprec' => 947
		),
		array(
			'id' => 948,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 948,
			'tipoprecedencia_id' => 948,
			'disciplina_id' => 948,
			'grupodisciplinasprec' => 948
		),
		array(
			'id' => 949,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 949,
			'tipoprecedencia_id' => 949,
			'disciplina_id' => 949,
			'grupodisciplinasprec' => 949
		),
		array(
			'id' => 950,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 950,
			'tipoprecedencia_id' => 950,
			'disciplina_id' => 950,
			'grupodisciplinasprec' => 950
		),
		array(
			'id' => 951,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 951,
			'tipoprecedencia_id' => 951,
			'disciplina_id' => 951,
			'grupodisciplinasprec' => 951
		),
		array(
			'id' => 952,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 952,
			'tipoprecedencia_id' => 952,
			'disciplina_id' => 952,
			'grupodisciplinasprec' => 952
		),
		array(
			'id' => 953,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 953,
			'tipoprecedencia_id' => 953,
			'disciplina_id' => 953,
			'grupodisciplinasprec' => 953
		),
		array(
			'id' => 954,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 954,
			'tipoprecedencia_id' => 954,
			'disciplina_id' => 954,
			'grupodisciplinasprec' => 954
		),
		array(
			'id' => 955,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 955,
			'tipoprecedencia_id' => 955,
			'disciplina_id' => 955,
			'grupodisciplinasprec' => 955
		),
		array(
			'id' => 956,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 956,
			'tipoprecedencia_id' => 956,
			'disciplina_id' => 956,
			'grupodisciplinasprec' => 956
		),
		array(
			'id' => 957,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 957,
			'tipoprecedencia_id' => 957,
			'disciplina_id' => 957,
			'grupodisciplinasprec' => 957
		),
		array(
			'id' => 958,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 958,
			'tipoprecedencia_id' => 958,
			'disciplina_id' => 958,
			'grupodisciplinasprec' => 958
		),
		array(
			'id' => 959,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 959,
			'tipoprecedencia_id' => 959,
			'disciplina_id' => 959,
			'grupodisciplinasprec' => 959
		),
		array(
			'id' => 960,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 960,
			'tipoprecedencia_id' => 960,
			'disciplina_id' => 960,
			'grupodisciplinasprec' => 960
		),
		array(
			'id' => 961,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 961,
			'tipoprecedencia_id' => 961,
			'disciplina_id' => 961,
			'grupodisciplinasprec' => 961
		),
		array(
			'id' => 962,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 962,
			'tipoprecedencia_id' => 962,
			'disciplina_id' => 962,
			'grupodisciplinasprec' => 962
		),
		array(
			'id' => 963,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 963,
			'tipoprecedencia_id' => 963,
			'disciplina_id' => 963,
			'grupodisciplinasprec' => 963
		),
		array(
			'id' => 964,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 964,
			'tipoprecedencia_id' => 964,
			'disciplina_id' => 964,
			'grupodisciplinasprec' => 964
		),
		array(
			'id' => 965,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 965,
			'tipoprecedencia_id' => 965,
			'disciplina_id' => 965,
			'grupodisciplinasprec' => 965
		),
		array(
			'id' => 966,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 966,
			'tipoprecedencia_id' => 966,
			'disciplina_id' => 966,
			'grupodisciplinasprec' => 966
		),
		array(
			'id' => 967,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 967,
			'tipoprecedencia_id' => 967,
			'disciplina_id' => 967,
			'grupodisciplinasprec' => 967
		),
		array(
			'id' => 968,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 968,
			'tipoprecedencia_id' => 968,
			'disciplina_id' => 968,
			'grupodisciplinasprec' => 968
		),
		array(
			'id' => 969,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 969,
			'tipoprecedencia_id' => 969,
			'disciplina_id' => 969,
			'grupodisciplinasprec' => 969
		),
		array(
			'id' => 970,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 970,
			'tipoprecedencia_id' => 970,
			'disciplina_id' => 970,
			'grupodisciplinasprec' => 970
		),
		array(
			'id' => 971,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 971,
			'tipoprecedencia_id' => 971,
			'disciplina_id' => 971,
			'grupodisciplinasprec' => 971
		),
		array(
			'id' => 972,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 972,
			'tipoprecedencia_id' => 972,
			'disciplina_id' => 972,
			'grupodisciplinasprec' => 972
		),
		array(
			'id' => 973,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 973,
			'tipoprecedencia_id' => 973,
			'disciplina_id' => 973,
			'grupodisciplinasprec' => 973
		),
		array(
			'id' => 974,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 974,
			'tipoprecedencia_id' => 974,
			'disciplina_id' => 974,
			'grupodisciplinasprec' => 974
		),
		array(
			'id' => 975,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 975,
			'tipoprecedencia_id' => 975,
			'disciplina_id' => 975,
			'grupodisciplinasprec' => 975
		),
		array(
			'id' => 976,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 976,
			'tipoprecedencia_id' => 976,
			'disciplina_id' => 976,
			'grupodisciplinasprec' => 976
		),
		array(
			'id' => 977,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 977,
			'tipoprecedencia_id' => 977,
			'disciplina_id' => 977,
			'grupodisciplinasprec' => 977
		),
		array(
			'id' => 978,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 978,
			'tipoprecedencia_id' => 978,
			'disciplina_id' => 978,
			'grupodisciplinasprec' => 978
		),
		array(
			'id' => 979,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 979,
			'tipoprecedencia_id' => 979,
			'disciplina_id' => 979,
			'grupodisciplinasprec' => 979
		),
		array(
			'id' => 980,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 980,
			'tipoprecedencia_id' => 980,
			'disciplina_id' => 980,
			'grupodisciplinasprec' => 980
		),
		array(
			'id' => 981,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 981,
			'tipoprecedencia_id' => 981,
			'disciplina_id' => 981,
			'grupodisciplinasprec' => 981
		),
		array(
			'id' => 982,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 982,
			'tipoprecedencia_id' => 982,
			'disciplina_id' => 982,
			'grupodisciplinasprec' => 982
		),
		array(
			'id' => 983,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 983,
			'tipoprecedencia_id' => 983,
			'disciplina_id' => 983,
			'grupodisciplinasprec' => 983
		),
		array(
			'id' => 984,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 984,
			'tipoprecedencia_id' => 984,
			'disciplina_id' => 984,
			'grupodisciplinasprec' => 984
		),
		array(
			'id' => 985,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 985,
			'tipoprecedencia_id' => 985,
			'disciplina_id' => 985,
			'grupodisciplinasprec' => 985
		),
		array(
			'id' => 986,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 986,
			'tipoprecedencia_id' => 986,
			'disciplina_id' => 986,
			'grupodisciplinasprec' => 986
		),
		array(
			'id' => 987,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 987,
			'tipoprecedencia_id' => 987,
			'disciplina_id' => 987,
			'grupodisciplinasprec' => 987
		),
		array(
			'id' => 988,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 988,
			'tipoprecedencia_id' => 988,
			'disciplina_id' => 988,
			'grupodisciplinasprec' => 988
		),
		array(
			'id' => 989,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 989,
			'tipoprecedencia_id' => 989,
			'disciplina_id' => 989,
			'grupodisciplinasprec' => 989
		),
		array(
			'id' => 990,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 990,
			'tipoprecedencia_id' => 990,
			'disciplina_id' => 990,
			'grupodisciplinasprec' => 990
		),
		array(
			'id' => 991,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 991,
			'tipoprecedencia_id' => 991,
			'disciplina_id' => 991,
			'grupodisciplinasprec' => 991
		),
		array(
			'id' => 992,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 992,
			'tipoprecedencia_id' => 992,
			'disciplina_id' => 992,
			'grupodisciplinasprec' => 992
		),
		array(
			'id' => 993,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 993,
			'tipoprecedencia_id' => 993,
			'disciplina_id' => 993,
			'grupodisciplinasprec' => 993
		),
		array(
			'id' => 994,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 994,
			'tipoprecedencia_id' => 994,
			'disciplina_id' => 994,
			'grupodisciplinasprec' => 994
		),
		array(
			'id' => 995,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 995,
			'tipoprecedencia_id' => 995,
			'disciplina_id' => 995,
			'grupodisciplinasprec' => 995
		),
		array(
			'id' => 996,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 996,
			'tipoprecedencia_id' => 996,
			'disciplina_id' => 996,
			'grupodisciplinasprec' => 996
		),
		array(
			'id' => 997,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 997,
			'tipoprecedencia_id' => 997,
			'disciplina_id' => 997,
			'grupodisciplinasprec' => 997
		),
		array(
			'id' => 998,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 998,
			'tipoprecedencia_id' => 998,
			'disciplina_id' => 998,
			'grupodisciplinasprec' => 998
		),
		array(
			'id' => 999,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 999,
			'tipoprecedencia_id' => 999,
			'disciplina_id' => 999,
			'grupodisciplinasprec' => 999
		),
		array(
			'id' => 1000,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 1000,
			'tipoprecedencia_id' => 1000,
			'disciplina_id' => 1000,
			'grupodisciplinasprec' => 1000
		),
	);

}
