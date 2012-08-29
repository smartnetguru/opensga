<?php
/**
 * EscolasTipopagamentoFixture
 *
 */
class EscolasTipopagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null),
		'month_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_limite' => array('type' => 'date', 'null' => true, 'default' => null),
		'mes_limite' => array('type' => 'integer', 'null' => true, 'default' => null),
		'dia_limite' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'escola_id' => 1,
			'tipopagamento_id' => 1,
			'valor' => 1,
			'month_id' => 1,
			'data_limite' => '2012-07-25',
			'mes_limite' => 1,
			'dia_limite' => 1
		),
		array(
			'id' => 2,
			'escola_id' => 2,
			'tipopagamento_id' => 2,
			'valor' => 2,
			'month_id' => 2,
			'data_limite' => '2012-07-25',
			'mes_limite' => 2,
			'dia_limite' => 2
		),
		array(
			'id' => 3,
			'escola_id' => 3,
			'tipopagamento_id' => 3,
			'valor' => 3,
			'month_id' => 3,
			'data_limite' => '2012-07-25',
			'mes_limite' => 3,
			'dia_limite' => 3
		),
		array(
			'id' => 4,
			'escola_id' => 4,
			'tipopagamento_id' => 4,
			'valor' => 4,
			'month_id' => 4,
			'data_limite' => '2012-07-25',
			'mes_limite' => 4,
			'dia_limite' => 4
		),
		array(
			'id' => 5,
			'escola_id' => 5,
			'tipopagamento_id' => 5,
			'valor' => 5,
			'month_id' => 5,
			'data_limite' => '2012-07-25',
			'mes_limite' => 5,
			'dia_limite' => 5
		),
		array(
			'id' => 6,
			'escola_id' => 6,
			'tipopagamento_id' => 6,
			'valor' => 6,
			'month_id' => 6,
			'data_limite' => '2012-07-25',
			'mes_limite' => 6,
			'dia_limite' => 6
		),
		array(
			'id' => 7,
			'escola_id' => 7,
			'tipopagamento_id' => 7,
			'valor' => 7,
			'month_id' => 7,
			'data_limite' => '2012-07-25',
			'mes_limite' => 7,
			'dia_limite' => 7
		),
		array(
			'id' => 8,
			'escola_id' => 8,
			'tipopagamento_id' => 8,
			'valor' => 8,
			'month_id' => 8,
			'data_limite' => '2012-07-25',
			'mes_limite' => 8,
			'dia_limite' => 8
		),
		array(
			'id' => 9,
			'escola_id' => 9,
			'tipopagamento_id' => 9,
			'valor' => 9,
			'month_id' => 9,
			'data_limite' => '2012-07-25',
			'mes_limite' => 9,
			'dia_limite' => 9
		),
		array(
			'id' => 10,
			'escola_id' => 10,
			'tipopagamento_id' => 10,
			'valor' => 10,
			'month_id' => 10,
			'data_limite' => '2012-07-25',
			'mes_limite' => 10,
			'dia_limite' => 10
		),
		array(
			'id' => 11,
			'escola_id' => 11,
			'tipopagamento_id' => 11,
			'valor' => 11,
			'month_id' => 11,
			'data_limite' => '2012-07-25',
			'mes_limite' => 11,
			'dia_limite' => 11
		),
		array(
			'id' => 12,
			'escola_id' => 12,
			'tipopagamento_id' => 12,
			'valor' => 12,
			'month_id' => 12,
			'data_limite' => '2012-07-25',
			'mes_limite' => 12,
			'dia_limite' => 12
		),
		array(
			'id' => 13,
			'escola_id' => 13,
			'tipopagamento_id' => 13,
			'valor' => 13,
			'month_id' => 13,
			'data_limite' => '2012-07-25',
			'mes_limite' => 13,
			'dia_limite' => 13
		),
		array(
			'id' => 14,
			'escola_id' => 14,
			'tipopagamento_id' => 14,
			'valor' => 14,
			'month_id' => 14,
			'data_limite' => '2012-07-25',
			'mes_limite' => 14,
			'dia_limite' => 14
		),
		array(
			'id' => 15,
			'escola_id' => 15,
			'tipopagamento_id' => 15,
			'valor' => 15,
			'month_id' => 15,
			'data_limite' => '2012-07-25',
			'mes_limite' => 15,
			'dia_limite' => 15
		),
		array(
			'id' => 16,
			'escola_id' => 16,
			'tipopagamento_id' => 16,
			'valor' => 16,
			'month_id' => 16,
			'data_limite' => '2012-07-25',
			'mes_limite' => 16,
			'dia_limite' => 16
		),
		array(
			'id' => 17,
			'escola_id' => 17,
			'tipopagamento_id' => 17,
			'valor' => 17,
			'month_id' => 17,
			'data_limite' => '2012-07-25',
			'mes_limite' => 17,
			'dia_limite' => 17
		),
		array(
			'id' => 18,
			'escola_id' => 18,
			'tipopagamento_id' => 18,
			'valor' => 18,
			'month_id' => 18,
			'data_limite' => '2012-07-25',
			'mes_limite' => 18,
			'dia_limite' => 18
		),
		array(
			'id' => 19,
			'escola_id' => 19,
			'tipopagamento_id' => 19,
			'valor' => 19,
			'month_id' => 19,
			'data_limite' => '2012-07-25',
			'mes_limite' => 19,
			'dia_limite' => 19
		),
		array(
			'id' => 20,
			'escola_id' => 20,
			'tipopagamento_id' => 20,
			'valor' => 20,
			'month_id' => 20,
			'data_limite' => '2012-07-25',
			'mes_limite' => 20,
			'dia_limite' => 20
		),
		array(
			'id' => 21,
			'escola_id' => 21,
			'tipopagamento_id' => 21,
			'valor' => 21,
			'month_id' => 21,
			'data_limite' => '2012-07-25',
			'mes_limite' => 21,
			'dia_limite' => 21
		),
		array(
			'id' => 22,
			'escola_id' => 22,
			'tipopagamento_id' => 22,
			'valor' => 22,
			'month_id' => 22,
			'data_limite' => '2012-07-25',
			'mes_limite' => 22,
			'dia_limite' => 22
		),
		array(
			'id' => 23,
			'escola_id' => 23,
			'tipopagamento_id' => 23,
			'valor' => 23,
			'month_id' => 23,
			'data_limite' => '2012-07-25',
			'mes_limite' => 23,
			'dia_limite' => 23
		),
		array(
			'id' => 24,
			'escola_id' => 24,
			'tipopagamento_id' => 24,
			'valor' => 24,
			'month_id' => 24,
			'data_limite' => '2012-07-25',
			'mes_limite' => 24,
			'dia_limite' => 24
		),
		array(
			'id' => 25,
			'escola_id' => 25,
			'tipopagamento_id' => 25,
			'valor' => 25,
			'month_id' => 25,
			'data_limite' => '2012-07-25',
			'mes_limite' => 25,
			'dia_limite' => 25
		),
		array(
			'id' => 26,
			'escola_id' => 26,
			'tipopagamento_id' => 26,
			'valor' => 26,
			'month_id' => 26,
			'data_limite' => '2012-07-25',
			'mes_limite' => 26,
			'dia_limite' => 26
		),
		array(
			'id' => 27,
			'escola_id' => 27,
			'tipopagamento_id' => 27,
			'valor' => 27,
			'month_id' => 27,
			'data_limite' => '2012-07-25',
			'mes_limite' => 27,
			'dia_limite' => 27
		),
		array(
			'id' => 28,
			'escola_id' => 28,
			'tipopagamento_id' => 28,
			'valor' => 28,
			'month_id' => 28,
			'data_limite' => '2012-07-25',
			'mes_limite' => 28,
			'dia_limite' => 28
		),
		array(
			'id' => 29,
			'escola_id' => 29,
			'tipopagamento_id' => 29,
			'valor' => 29,
			'month_id' => 29,
			'data_limite' => '2012-07-25',
			'mes_limite' => 29,
			'dia_limite' => 29
		),
		array(
			'id' => 30,
			'escola_id' => 30,
			'tipopagamento_id' => 30,
			'valor' => 30,
			'month_id' => 30,
			'data_limite' => '2012-07-25',
			'mes_limite' => 30,
			'dia_limite' => 30
		),
		array(
			'id' => 31,
			'escola_id' => 31,
			'tipopagamento_id' => 31,
			'valor' => 31,
			'month_id' => 31,
			'data_limite' => '2012-07-25',
			'mes_limite' => 31,
			'dia_limite' => 31
		),
		array(
			'id' => 32,
			'escola_id' => 32,
			'tipopagamento_id' => 32,
			'valor' => 32,
			'month_id' => 32,
			'data_limite' => '2012-07-25',
			'mes_limite' => 32,
			'dia_limite' => 32
		),
		array(
			'id' => 33,
			'escola_id' => 33,
			'tipopagamento_id' => 33,
			'valor' => 33,
			'month_id' => 33,
			'data_limite' => '2012-07-25',
			'mes_limite' => 33,
			'dia_limite' => 33
		),
		array(
			'id' => 34,
			'escola_id' => 34,
			'tipopagamento_id' => 34,
			'valor' => 34,
			'month_id' => 34,
			'data_limite' => '2012-07-25',
			'mes_limite' => 34,
			'dia_limite' => 34
		),
		array(
			'id' => 35,
			'escola_id' => 35,
			'tipopagamento_id' => 35,
			'valor' => 35,
			'month_id' => 35,
			'data_limite' => '2012-07-25',
			'mes_limite' => 35,
			'dia_limite' => 35
		),
		array(
			'id' => 36,
			'escola_id' => 36,
			'tipopagamento_id' => 36,
			'valor' => 36,
			'month_id' => 36,
			'data_limite' => '2012-07-25',
			'mes_limite' => 36,
			'dia_limite' => 36
		),
		array(
			'id' => 37,
			'escola_id' => 37,
			'tipopagamento_id' => 37,
			'valor' => 37,
			'month_id' => 37,
			'data_limite' => '2012-07-25',
			'mes_limite' => 37,
			'dia_limite' => 37
		),
		array(
			'id' => 38,
			'escola_id' => 38,
			'tipopagamento_id' => 38,
			'valor' => 38,
			'month_id' => 38,
			'data_limite' => '2012-07-25',
			'mes_limite' => 38,
			'dia_limite' => 38
		),
		array(
			'id' => 39,
			'escola_id' => 39,
			'tipopagamento_id' => 39,
			'valor' => 39,
			'month_id' => 39,
			'data_limite' => '2012-07-25',
			'mes_limite' => 39,
			'dia_limite' => 39
		),
		array(
			'id' => 40,
			'escola_id' => 40,
			'tipopagamento_id' => 40,
			'valor' => 40,
			'month_id' => 40,
			'data_limite' => '2012-07-25',
			'mes_limite' => 40,
			'dia_limite' => 40
		),
		array(
			'id' => 41,
			'escola_id' => 41,
			'tipopagamento_id' => 41,
			'valor' => 41,
			'month_id' => 41,
			'data_limite' => '2012-07-25',
			'mes_limite' => 41,
			'dia_limite' => 41
		),
		array(
			'id' => 42,
			'escola_id' => 42,
			'tipopagamento_id' => 42,
			'valor' => 42,
			'month_id' => 42,
			'data_limite' => '2012-07-25',
			'mes_limite' => 42,
			'dia_limite' => 42
		),
		array(
			'id' => 43,
			'escola_id' => 43,
			'tipopagamento_id' => 43,
			'valor' => 43,
			'month_id' => 43,
			'data_limite' => '2012-07-25',
			'mes_limite' => 43,
			'dia_limite' => 43
		),
		array(
			'id' => 44,
			'escola_id' => 44,
			'tipopagamento_id' => 44,
			'valor' => 44,
			'month_id' => 44,
			'data_limite' => '2012-07-25',
			'mes_limite' => 44,
			'dia_limite' => 44
		),
		array(
			'id' => 45,
			'escola_id' => 45,
			'tipopagamento_id' => 45,
			'valor' => 45,
			'month_id' => 45,
			'data_limite' => '2012-07-25',
			'mes_limite' => 45,
			'dia_limite' => 45
		),
		array(
			'id' => 46,
			'escola_id' => 46,
			'tipopagamento_id' => 46,
			'valor' => 46,
			'month_id' => 46,
			'data_limite' => '2012-07-25',
			'mes_limite' => 46,
			'dia_limite' => 46
		),
		array(
			'id' => 47,
			'escola_id' => 47,
			'tipopagamento_id' => 47,
			'valor' => 47,
			'month_id' => 47,
			'data_limite' => '2012-07-25',
			'mes_limite' => 47,
			'dia_limite' => 47
		),
		array(
			'id' => 48,
			'escola_id' => 48,
			'tipopagamento_id' => 48,
			'valor' => 48,
			'month_id' => 48,
			'data_limite' => '2012-07-25',
			'mes_limite' => 48,
			'dia_limite' => 48
		),
		array(
			'id' => 49,
			'escola_id' => 49,
			'tipopagamento_id' => 49,
			'valor' => 49,
			'month_id' => 49,
			'data_limite' => '2012-07-25',
			'mes_limite' => 49,
			'dia_limite' => 49
		),
		array(
			'id' => 50,
			'escola_id' => 50,
			'tipopagamento_id' => 50,
			'valor' => 50,
			'month_id' => 50,
			'data_limite' => '2012-07-25',
			'mes_limite' => 50,
			'dia_limite' => 50
		),
		array(
			'id' => 51,
			'escola_id' => 51,
			'tipopagamento_id' => 51,
			'valor' => 51,
			'month_id' => 51,
			'data_limite' => '2012-07-25',
			'mes_limite' => 51,
			'dia_limite' => 51
		),
		array(
			'id' => 52,
			'escola_id' => 52,
			'tipopagamento_id' => 52,
			'valor' => 52,
			'month_id' => 52,
			'data_limite' => '2012-07-25',
			'mes_limite' => 52,
			'dia_limite' => 52
		),
		array(
			'id' => 53,
			'escola_id' => 53,
			'tipopagamento_id' => 53,
			'valor' => 53,
			'month_id' => 53,
			'data_limite' => '2012-07-25',
			'mes_limite' => 53,
			'dia_limite' => 53
		),
		array(
			'id' => 54,
			'escola_id' => 54,
			'tipopagamento_id' => 54,
			'valor' => 54,
			'month_id' => 54,
			'data_limite' => '2012-07-25',
			'mes_limite' => 54,
			'dia_limite' => 54
		),
		array(
			'id' => 55,
			'escola_id' => 55,
			'tipopagamento_id' => 55,
			'valor' => 55,
			'month_id' => 55,
			'data_limite' => '2012-07-25',
			'mes_limite' => 55,
			'dia_limite' => 55
		),
		array(
			'id' => 56,
			'escola_id' => 56,
			'tipopagamento_id' => 56,
			'valor' => 56,
			'month_id' => 56,
			'data_limite' => '2012-07-25',
			'mes_limite' => 56,
			'dia_limite' => 56
		),
		array(
			'id' => 57,
			'escola_id' => 57,
			'tipopagamento_id' => 57,
			'valor' => 57,
			'month_id' => 57,
			'data_limite' => '2012-07-25',
			'mes_limite' => 57,
			'dia_limite' => 57
		),
		array(
			'id' => 58,
			'escola_id' => 58,
			'tipopagamento_id' => 58,
			'valor' => 58,
			'month_id' => 58,
			'data_limite' => '2012-07-25',
			'mes_limite' => 58,
			'dia_limite' => 58
		),
		array(
			'id' => 59,
			'escola_id' => 59,
			'tipopagamento_id' => 59,
			'valor' => 59,
			'month_id' => 59,
			'data_limite' => '2012-07-25',
			'mes_limite' => 59,
			'dia_limite' => 59
		),
		array(
			'id' => 60,
			'escola_id' => 60,
			'tipopagamento_id' => 60,
			'valor' => 60,
			'month_id' => 60,
			'data_limite' => '2012-07-25',
			'mes_limite' => 60,
			'dia_limite' => 60
		),
		array(
			'id' => 61,
			'escola_id' => 61,
			'tipopagamento_id' => 61,
			'valor' => 61,
			'month_id' => 61,
			'data_limite' => '2012-07-25',
			'mes_limite' => 61,
			'dia_limite' => 61
		),
		array(
			'id' => 62,
			'escola_id' => 62,
			'tipopagamento_id' => 62,
			'valor' => 62,
			'month_id' => 62,
			'data_limite' => '2012-07-25',
			'mes_limite' => 62,
			'dia_limite' => 62
		),
		array(
			'id' => 63,
			'escola_id' => 63,
			'tipopagamento_id' => 63,
			'valor' => 63,
			'month_id' => 63,
			'data_limite' => '2012-07-25',
			'mes_limite' => 63,
			'dia_limite' => 63
		),
		array(
			'id' => 64,
			'escola_id' => 64,
			'tipopagamento_id' => 64,
			'valor' => 64,
			'month_id' => 64,
			'data_limite' => '2012-07-25',
			'mes_limite' => 64,
			'dia_limite' => 64
		),
		array(
			'id' => 65,
			'escola_id' => 65,
			'tipopagamento_id' => 65,
			'valor' => 65,
			'month_id' => 65,
			'data_limite' => '2012-07-25',
			'mes_limite' => 65,
			'dia_limite' => 65
		),
		array(
			'id' => 66,
			'escola_id' => 66,
			'tipopagamento_id' => 66,
			'valor' => 66,
			'month_id' => 66,
			'data_limite' => '2012-07-25',
			'mes_limite' => 66,
			'dia_limite' => 66
		),
		array(
			'id' => 67,
			'escola_id' => 67,
			'tipopagamento_id' => 67,
			'valor' => 67,
			'month_id' => 67,
			'data_limite' => '2012-07-25',
			'mes_limite' => 67,
			'dia_limite' => 67
		),
		array(
			'id' => 68,
			'escola_id' => 68,
			'tipopagamento_id' => 68,
			'valor' => 68,
			'month_id' => 68,
			'data_limite' => '2012-07-25',
			'mes_limite' => 68,
			'dia_limite' => 68
		),
		array(
			'id' => 69,
			'escola_id' => 69,
			'tipopagamento_id' => 69,
			'valor' => 69,
			'month_id' => 69,
			'data_limite' => '2012-07-25',
			'mes_limite' => 69,
			'dia_limite' => 69
		),
		array(
			'id' => 70,
			'escola_id' => 70,
			'tipopagamento_id' => 70,
			'valor' => 70,
			'month_id' => 70,
			'data_limite' => '2012-07-25',
			'mes_limite' => 70,
			'dia_limite' => 70
		),
		array(
			'id' => 71,
			'escola_id' => 71,
			'tipopagamento_id' => 71,
			'valor' => 71,
			'month_id' => 71,
			'data_limite' => '2012-07-25',
			'mes_limite' => 71,
			'dia_limite' => 71
		),
		array(
			'id' => 72,
			'escola_id' => 72,
			'tipopagamento_id' => 72,
			'valor' => 72,
			'month_id' => 72,
			'data_limite' => '2012-07-25',
			'mes_limite' => 72,
			'dia_limite' => 72
		),
		array(
			'id' => 73,
			'escola_id' => 73,
			'tipopagamento_id' => 73,
			'valor' => 73,
			'month_id' => 73,
			'data_limite' => '2012-07-25',
			'mes_limite' => 73,
			'dia_limite' => 73
		),
		array(
			'id' => 74,
			'escola_id' => 74,
			'tipopagamento_id' => 74,
			'valor' => 74,
			'month_id' => 74,
			'data_limite' => '2012-07-25',
			'mes_limite' => 74,
			'dia_limite' => 74
		),
		array(
			'id' => 75,
			'escola_id' => 75,
			'tipopagamento_id' => 75,
			'valor' => 75,
			'month_id' => 75,
			'data_limite' => '2012-07-25',
			'mes_limite' => 75,
			'dia_limite' => 75
		),
		array(
			'id' => 76,
			'escola_id' => 76,
			'tipopagamento_id' => 76,
			'valor' => 76,
			'month_id' => 76,
			'data_limite' => '2012-07-25',
			'mes_limite' => 76,
			'dia_limite' => 76
		),
		array(
			'id' => 77,
			'escola_id' => 77,
			'tipopagamento_id' => 77,
			'valor' => 77,
			'month_id' => 77,
			'data_limite' => '2012-07-25',
			'mes_limite' => 77,
			'dia_limite' => 77
		),
		array(
			'id' => 78,
			'escola_id' => 78,
			'tipopagamento_id' => 78,
			'valor' => 78,
			'month_id' => 78,
			'data_limite' => '2012-07-25',
			'mes_limite' => 78,
			'dia_limite' => 78
		),
		array(
			'id' => 79,
			'escola_id' => 79,
			'tipopagamento_id' => 79,
			'valor' => 79,
			'month_id' => 79,
			'data_limite' => '2012-07-25',
			'mes_limite' => 79,
			'dia_limite' => 79
		),
		array(
			'id' => 80,
			'escola_id' => 80,
			'tipopagamento_id' => 80,
			'valor' => 80,
			'month_id' => 80,
			'data_limite' => '2012-07-25',
			'mes_limite' => 80,
			'dia_limite' => 80
		),
		array(
			'id' => 81,
			'escola_id' => 81,
			'tipopagamento_id' => 81,
			'valor' => 81,
			'month_id' => 81,
			'data_limite' => '2012-07-25',
			'mes_limite' => 81,
			'dia_limite' => 81
		),
		array(
			'id' => 82,
			'escola_id' => 82,
			'tipopagamento_id' => 82,
			'valor' => 82,
			'month_id' => 82,
			'data_limite' => '2012-07-25',
			'mes_limite' => 82,
			'dia_limite' => 82
		),
		array(
			'id' => 83,
			'escola_id' => 83,
			'tipopagamento_id' => 83,
			'valor' => 83,
			'month_id' => 83,
			'data_limite' => '2012-07-25',
			'mes_limite' => 83,
			'dia_limite' => 83
		),
		array(
			'id' => 84,
			'escola_id' => 84,
			'tipopagamento_id' => 84,
			'valor' => 84,
			'month_id' => 84,
			'data_limite' => '2012-07-25',
			'mes_limite' => 84,
			'dia_limite' => 84
		),
		array(
			'id' => 85,
			'escola_id' => 85,
			'tipopagamento_id' => 85,
			'valor' => 85,
			'month_id' => 85,
			'data_limite' => '2012-07-25',
			'mes_limite' => 85,
			'dia_limite' => 85
		),
		array(
			'id' => 86,
			'escola_id' => 86,
			'tipopagamento_id' => 86,
			'valor' => 86,
			'month_id' => 86,
			'data_limite' => '2012-07-25',
			'mes_limite' => 86,
			'dia_limite' => 86
		),
		array(
			'id' => 87,
			'escola_id' => 87,
			'tipopagamento_id' => 87,
			'valor' => 87,
			'month_id' => 87,
			'data_limite' => '2012-07-25',
			'mes_limite' => 87,
			'dia_limite' => 87
		),
		array(
			'id' => 88,
			'escola_id' => 88,
			'tipopagamento_id' => 88,
			'valor' => 88,
			'month_id' => 88,
			'data_limite' => '2012-07-25',
			'mes_limite' => 88,
			'dia_limite' => 88
		),
		array(
			'id' => 89,
			'escola_id' => 89,
			'tipopagamento_id' => 89,
			'valor' => 89,
			'month_id' => 89,
			'data_limite' => '2012-07-25',
			'mes_limite' => 89,
			'dia_limite' => 89
		),
		array(
			'id' => 90,
			'escola_id' => 90,
			'tipopagamento_id' => 90,
			'valor' => 90,
			'month_id' => 90,
			'data_limite' => '2012-07-25',
			'mes_limite' => 90,
			'dia_limite' => 90
		),
		array(
			'id' => 91,
			'escola_id' => 91,
			'tipopagamento_id' => 91,
			'valor' => 91,
			'month_id' => 91,
			'data_limite' => '2012-07-25',
			'mes_limite' => 91,
			'dia_limite' => 91
		),
		array(
			'id' => 92,
			'escola_id' => 92,
			'tipopagamento_id' => 92,
			'valor' => 92,
			'month_id' => 92,
			'data_limite' => '2012-07-25',
			'mes_limite' => 92,
			'dia_limite' => 92
		),
		array(
			'id' => 93,
			'escola_id' => 93,
			'tipopagamento_id' => 93,
			'valor' => 93,
			'month_id' => 93,
			'data_limite' => '2012-07-25',
			'mes_limite' => 93,
			'dia_limite' => 93
		),
		array(
			'id' => 94,
			'escola_id' => 94,
			'tipopagamento_id' => 94,
			'valor' => 94,
			'month_id' => 94,
			'data_limite' => '2012-07-25',
			'mes_limite' => 94,
			'dia_limite' => 94
		),
		array(
			'id' => 95,
			'escola_id' => 95,
			'tipopagamento_id' => 95,
			'valor' => 95,
			'month_id' => 95,
			'data_limite' => '2012-07-25',
			'mes_limite' => 95,
			'dia_limite' => 95
		),
		array(
			'id' => 96,
			'escola_id' => 96,
			'tipopagamento_id' => 96,
			'valor' => 96,
			'month_id' => 96,
			'data_limite' => '2012-07-25',
			'mes_limite' => 96,
			'dia_limite' => 96
		),
		array(
			'id' => 97,
			'escola_id' => 97,
			'tipopagamento_id' => 97,
			'valor' => 97,
			'month_id' => 97,
			'data_limite' => '2012-07-25',
			'mes_limite' => 97,
			'dia_limite' => 97
		),
		array(
			'id' => 98,
			'escola_id' => 98,
			'tipopagamento_id' => 98,
			'valor' => 98,
			'month_id' => 98,
			'data_limite' => '2012-07-25',
			'mes_limite' => 98,
			'dia_limite' => 98
		),
		array(
			'id' => 99,
			'escola_id' => 99,
			'tipopagamento_id' => 99,
			'valor' => 99,
			'month_id' => 99,
			'data_limite' => '2012-07-25',
			'mes_limite' => 99,
			'dia_limite' => 99
		),
		array(
			'id' => 100,
			'escola_id' => 100,
			'tipopagamento_id' => 100,
			'valor' => 100,
			'month_id' => 100,
			'data_limite' => '2012-07-25',
			'mes_limite' => 100,
			'dia_limite' => 100
		),
		array(
			'id' => 101,
			'escola_id' => 101,
			'tipopagamento_id' => 101,
			'valor' => 101,
			'month_id' => 101,
			'data_limite' => '2012-07-25',
			'mes_limite' => 101,
			'dia_limite' => 101
		),
		array(
			'id' => 102,
			'escola_id' => 102,
			'tipopagamento_id' => 102,
			'valor' => 102,
			'month_id' => 102,
			'data_limite' => '2012-07-25',
			'mes_limite' => 102,
			'dia_limite' => 102
		),
		array(
			'id' => 103,
			'escola_id' => 103,
			'tipopagamento_id' => 103,
			'valor' => 103,
			'month_id' => 103,
			'data_limite' => '2012-07-25',
			'mes_limite' => 103,
			'dia_limite' => 103
		),
		array(
			'id' => 104,
			'escola_id' => 104,
			'tipopagamento_id' => 104,
			'valor' => 104,
			'month_id' => 104,
			'data_limite' => '2012-07-25',
			'mes_limite' => 104,
			'dia_limite' => 104
		),
		array(
			'id' => 105,
			'escola_id' => 105,
			'tipopagamento_id' => 105,
			'valor' => 105,
			'month_id' => 105,
			'data_limite' => '2012-07-25',
			'mes_limite' => 105,
			'dia_limite' => 105
		),
		array(
			'id' => 106,
			'escola_id' => 106,
			'tipopagamento_id' => 106,
			'valor' => 106,
			'month_id' => 106,
			'data_limite' => '2012-07-25',
			'mes_limite' => 106,
			'dia_limite' => 106
		),
		array(
			'id' => 107,
			'escola_id' => 107,
			'tipopagamento_id' => 107,
			'valor' => 107,
			'month_id' => 107,
			'data_limite' => '2012-07-25',
			'mes_limite' => 107,
			'dia_limite' => 107
		),
		array(
			'id' => 108,
			'escola_id' => 108,
			'tipopagamento_id' => 108,
			'valor' => 108,
			'month_id' => 108,
			'data_limite' => '2012-07-25',
			'mes_limite' => 108,
			'dia_limite' => 108
		),
		array(
			'id' => 109,
			'escola_id' => 109,
			'tipopagamento_id' => 109,
			'valor' => 109,
			'month_id' => 109,
			'data_limite' => '2012-07-25',
			'mes_limite' => 109,
			'dia_limite' => 109
		),
		array(
			'id' => 110,
			'escola_id' => 110,
			'tipopagamento_id' => 110,
			'valor' => 110,
			'month_id' => 110,
			'data_limite' => '2012-07-25',
			'mes_limite' => 110,
			'dia_limite' => 110
		),
		array(
			'id' => 111,
			'escola_id' => 111,
			'tipopagamento_id' => 111,
			'valor' => 111,
			'month_id' => 111,
			'data_limite' => '2012-07-25',
			'mes_limite' => 111,
			'dia_limite' => 111
		),
		array(
			'id' => 112,
			'escola_id' => 112,
			'tipopagamento_id' => 112,
			'valor' => 112,
			'month_id' => 112,
			'data_limite' => '2012-07-25',
			'mes_limite' => 112,
			'dia_limite' => 112
		),
		array(
			'id' => 113,
			'escola_id' => 113,
			'tipopagamento_id' => 113,
			'valor' => 113,
			'month_id' => 113,
			'data_limite' => '2012-07-25',
			'mes_limite' => 113,
			'dia_limite' => 113
		),
		array(
			'id' => 114,
			'escola_id' => 114,
			'tipopagamento_id' => 114,
			'valor' => 114,
			'month_id' => 114,
			'data_limite' => '2012-07-25',
			'mes_limite' => 114,
			'dia_limite' => 114
		),
		array(
			'id' => 115,
			'escola_id' => 115,
			'tipopagamento_id' => 115,
			'valor' => 115,
			'month_id' => 115,
			'data_limite' => '2012-07-25',
			'mes_limite' => 115,
			'dia_limite' => 115
		),
		array(
			'id' => 116,
			'escola_id' => 116,
			'tipopagamento_id' => 116,
			'valor' => 116,
			'month_id' => 116,
			'data_limite' => '2012-07-25',
			'mes_limite' => 116,
			'dia_limite' => 116
		),
		array(
			'id' => 117,
			'escola_id' => 117,
			'tipopagamento_id' => 117,
			'valor' => 117,
			'month_id' => 117,
			'data_limite' => '2012-07-25',
			'mes_limite' => 117,
			'dia_limite' => 117
		),
		array(
			'id' => 118,
			'escola_id' => 118,
			'tipopagamento_id' => 118,
			'valor' => 118,
			'month_id' => 118,
			'data_limite' => '2012-07-25',
			'mes_limite' => 118,
			'dia_limite' => 118
		),
		array(
			'id' => 119,
			'escola_id' => 119,
			'tipopagamento_id' => 119,
			'valor' => 119,
			'month_id' => 119,
			'data_limite' => '2012-07-25',
			'mes_limite' => 119,
			'dia_limite' => 119
		),
		array(
			'id' => 120,
			'escola_id' => 120,
			'tipopagamento_id' => 120,
			'valor' => 120,
			'month_id' => 120,
			'data_limite' => '2012-07-25',
			'mes_limite' => 120,
			'dia_limite' => 120
		),
		array(
			'id' => 121,
			'escola_id' => 121,
			'tipopagamento_id' => 121,
			'valor' => 121,
			'month_id' => 121,
			'data_limite' => '2012-07-25',
			'mes_limite' => 121,
			'dia_limite' => 121
		),
		array(
			'id' => 122,
			'escola_id' => 122,
			'tipopagamento_id' => 122,
			'valor' => 122,
			'month_id' => 122,
			'data_limite' => '2012-07-25',
			'mes_limite' => 122,
			'dia_limite' => 122
		),
		array(
			'id' => 123,
			'escola_id' => 123,
			'tipopagamento_id' => 123,
			'valor' => 123,
			'month_id' => 123,
			'data_limite' => '2012-07-25',
			'mes_limite' => 123,
			'dia_limite' => 123
		),
		array(
			'id' => 124,
			'escola_id' => 124,
			'tipopagamento_id' => 124,
			'valor' => 124,
			'month_id' => 124,
			'data_limite' => '2012-07-25',
			'mes_limite' => 124,
			'dia_limite' => 124
		),
		array(
			'id' => 125,
			'escola_id' => 125,
			'tipopagamento_id' => 125,
			'valor' => 125,
			'month_id' => 125,
			'data_limite' => '2012-07-25',
			'mes_limite' => 125,
			'dia_limite' => 125
		),
		array(
			'id' => 126,
			'escola_id' => 126,
			'tipopagamento_id' => 126,
			'valor' => 126,
			'month_id' => 126,
			'data_limite' => '2012-07-25',
			'mes_limite' => 126,
			'dia_limite' => 126
		),
		array(
			'id' => 127,
			'escola_id' => 127,
			'tipopagamento_id' => 127,
			'valor' => 127,
			'month_id' => 127,
			'data_limite' => '2012-07-25',
			'mes_limite' => 127,
			'dia_limite' => 127
		),
		array(
			'id' => 128,
			'escola_id' => 128,
			'tipopagamento_id' => 128,
			'valor' => 128,
			'month_id' => 128,
			'data_limite' => '2012-07-25',
			'mes_limite' => 128,
			'dia_limite' => 128
		),
		array(
			'id' => 129,
			'escola_id' => 129,
			'tipopagamento_id' => 129,
			'valor' => 129,
			'month_id' => 129,
			'data_limite' => '2012-07-25',
			'mes_limite' => 129,
			'dia_limite' => 129
		),
		array(
			'id' => 130,
			'escola_id' => 130,
			'tipopagamento_id' => 130,
			'valor' => 130,
			'month_id' => 130,
			'data_limite' => '2012-07-25',
			'mes_limite' => 130,
			'dia_limite' => 130
		),
		array(
			'id' => 131,
			'escola_id' => 131,
			'tipopagamento_id' => 131,
			'valor' => 131,
			'month_id' => 131,
			'data_limite' => '2012-07-25',
			'mes_limite' => 131,
			'dia_limite' => 131
		),
		array(
			'id' => 132,
			'escola_id' => 132,
			'tipopagamento_id' => 132,
			'valor' => 132,
			'month_id' => 132,
			'data_limite' => '2012-07-25',
			'mes_limite' => 132,
			'dia_limite' => 132
		),
		array(
			'id' => 133,
			'escola_id' => 133,
			'tipopagamento_id' => 133,
			'valor' => 133,
			'month_id' => 133,
			'data_limite' => '2012-07-25',
			'mes_limite' => 133,
			'dia_limite' => 133
		),
		array(
			'id' => 134,
			'escola_id' => 134,
			'tipopagamento_id' => 134,
			'valor' => 134,
			'month_id' => 134,
			'data_limite' => '2012-07-25',
			'mes_limite' => 134,
			'dia_limite' => 134
		),
		array(
			'id' => 135,
			'escola_id' => 135,
			'tipopagamento_id' => 135,
			'valor' => 135,
			'month_id' => 135,
			'data_limite' => '2012-07-25',
			'mes_limite' => 135,
			'dia_limite' => 135
		),
		array(
			'id' => 136,
			'escola_id' => 136,
			'tipopagamento_id' => 136,
			'valor' => 136,
			'month_id' => 136,
			'data_limite' => '2012-07-25',
			'mes_limite' => 136,
			'dia_limite' => 136
		),
		array(
			'id' => 137,
			'escola_id' => 137,
			'tipopagamento_id' => 137,
			'valor' => 137,
			'month_id' => 137,
			'data_limite' => '2012-07-25',
			'mes_limite' => 137,
			'dia_limite' => 137
		),
		array(
			'id' => 138,
			'escola_id' => 138,
			'tipopagamento_id' => 138,
			'valor' => 138,
			'month_id' => 138,
			'data_limite' => '2012-07-25',
			'mes_limite' => 138,
			'dia_limite' => 138
		),
		array(
			'id' => 139,
			'escola_id' => 139,
			'tipopagamento_id' => 139,
			'valor' => 139,
			'month_id' => 139,
			'data_limite' => '2012-07-25',
			'mes_limite' => 139,
			'dia_limite' => 139
		),
		array(
			'id' => 140,
			'escola_id' => 140,
			'tipopagamento_id' => 140,
			'valor' => 140,
			'month_id' => 140,
			'data_limite' => '2012-07-25',
			'mes_limite' => 140,
			'dia_limite' => 140
		),
		array(
			'id' => 141,
			'escola_id' => 141,
			'tipopagamento_id' => 141,
			'valor' => 141,
			'month_id' => 141,
			'data_limite' => '2012-07-25',
			'mes_limite' => 141,
			'dia_limite' => 141
		),
		array(
			'id' => 142,
			'escola_id' => 142,
			'tipopagamento_id' => 142,
			'valor' => 142,
			'month_id' => 142,
			'data_limite' => '2012-07-25',
			'mes_limite' => 142,
			'dia_limite' => 142
		),
		array(
			'id' => 143,
			'escola_id' => 143,
			'tipopagamento_id' => 143,
			'valor' => 143,
			'month_id' => 143,
			'data_limite' => '2012-07-25',
			'mes_limite' => 143,
			'dia_limite' => 143
		),
		array(
			'id' => 144,
			'escola_id' => 144,
			'tipopagamento_id' => 144,
			'valor' => 144,
			'month_id' => 144,
			'data_limite' => '2012-07-25',
			'mes_limite' => 144,
			'dia_limite' => 144
		),
		array(
			'id' => 145,
			'escola_id' => 145,
			'tipopagamento_id' => 145,
			'valor' => 145,
			'month_id' => 145,
			'data_limite' => '2012-07-25',
			'mes_limite' => 145,
			'dia_limite' => 145
		),
		array(
			'id' => 146,
			'escola_id' => 146,
			'tipopagamento_id' => 146,
			'valor' => 146,
			'month_id' => 146,
			'data_limite' => '2012-07-25',
			'mes_limite' => 146,
			'dia_limite' => 146
		),
		array(
			'id' => 147,
			'escola_id' => 147,
			'tipopagamento_id' => 147,
			'valor' => 147,
			'month_id' => 147,
			'data_limite' => '2012-07-25',
			'mes_limite' => 147,
			'dia_limite' => 147
		),
		array(
			'id' => 148,
			'escola_id' => 148,
			'tipopagamento_id' => 148,
			'valor' => 148,
			'month_id' => 148,
			'data_limite' => '2012-07-25',
			'mes_limite' => 148,
			'dia_limite' => 148
		),
		array(
			'id' => 149,
			'escola_id' => 149,
			'tipopagamento_id' => 149,
			'valor' => 149,
			'month_id' => 149,
			'data_limite' => '2012-07-25',
			'mes_limite' => 149,
			'dia_limite' => 149
		),
		array(
			'id' => 150,
			'escola_id' => 150,
			'tipopagamento_id' => 150,
			'valor' => 150,
			'month_id' => 150,
			'data_limite' => '2012-07-25',
			'mes_limite' => 150,
			'dia_limite' => 150
		),
		array(
			'id' => 151,
			'escola_id' => 151,
			'tipopagamento_id' => 151,
			'valor' => 151,
			'month_id' => 151,
			'data_limite' => '2012-07-25',
			'mes_limite' => 151,
			'dia_limite' => 151
		),
		array(
			'id' => 152,
			'escola_id' => 152,
			'tipopagamento_id' => 152,
			'valor' => 152,
			'month_id' => 152,
			'data_limite' => '2012-07-25',
			'mes_limite' => 152,
			'dia_limite' => 152
		),
		array(
			'id' => 153,
			'escola_id' => 153,
			'tipopagamento_id' => 153,
			'valor' => 153,
			'month_id' => 153,
			'data_limite' => '2012-07-25',
			'mes_limite' => 153,
			'dia_limite' => 153
		),
		array(
			'id' => 154,
			'escola_id' => 154,
			'tipopagamento_id' => 154,
			'valor' => 154,
			'month_id' => 154,
			'data_limite' => '2012-07-25',
			'mes_limite' => 154,
			'dia_limite' => 154
		),
		array(
			'id' => 155,
			'escola_id' => 155,
			'tipopagamento_id' => 155,
			'valor' => 155,
			'month_id' => 155,
			'data_limite' => '2012-07-25',
			'mes_limite' => 155,
			'dia_limite' => 155
		),
		array(
			'id' => 156,
			'escola_id' => 156,
			'tipopagamento_id' => 156,
			'valor' => 156,
			'month_id' => 156,
			'data_limite' => '2012-07-25',
			'mes_limite' => 156,
			'dia_limite' => 156
		),
		array(
			'id' => 157,
			'escola_id' => 157,
			'tipopagamento_id' => 157,
			'valor' => 157,
			'month_id' => 157,
			'data_limite' => '2012-07-25',
			'mes_limite' => 157,
			'dia_limite' => 157
		),
		array(
			'id' => 158,
			'escola_id' => 158,
			'tipopagamento_id' => 158,
			'valor' => 158,
			'month_id' => 158,
			'data_limite' => '2012-07-25',
			'mes_limite' => 158,
			'dia_limite' => 158
		),
		array(
			'id' => 159,
			'escola_id' => 159,
			'tipopagamento_id' => 159,
			'valor' => 159,
			'month_id' => 159,
			'data_limite' => '2012-07-25',
			'mes_limite' => 159,
			'dia_limite' => 159
		),
		array(
			'id' => 160,
			'escola_id' => 160,
			'tipopagamento_id' => 160,
			'valor' => 160,
			'month_id' => 160,
			'data_limite' => '2012-07-25',
			'mes_limite' => 160,
			'dia_limite' => 160
		),
		array(
			'id' => 161,
			'escola_id' => 161,
			'tipopagamento_id' => 161,
			'valor' => 161,
			'month_id' => 161,
			'data_limite' => '2012-07-25',
			'mes_limite' => 161,
			'dia_limite' => 161
		),
		array(
			'id' => 162,
			'escola_id' => 162,
			'tipopagamento_id' => 162,
			'valor' => 162,
			'month_id' => 162,
			'data_limite' => '2012-07-25',
			'mes_limite' => 162,
			'dia_limite' => 162
		),
		array(
			'id' => 163,
			'escola_id' => 163,
			'tipopagamento_id' => 163,
			'valor' => 163,
			'month_id' => 163,
			'data_limite' => '2012-07-25',
			'mes_limite' => 163,
			'dia_limite' => 163
		),
		array(
			'id' => 164,
			'escola_id' => 164,
			'tipopagamento_id' => 164,
			'valor' => 164,
			'month_id' => 164,
			'data_limite' => '2012-07-25',
			'mes_limite' => 164,
			'dia_limite' => 164
		),
		array(
			'id' => 165,
			'escola_id' => 165,
			'tipopagamento_id' => 165,
			'valor' => 165,
			'month_id' => 165,
			'data_limite' => '2012-07-25',
			'mes_limite' => 165,
			'dia_limite' => 165
		),
		array(
			'id' => 166,
			'escola_id' => 166,
			'tipopagamento_id' => 166,
			'valor' => 166,
			'month_id' => 166,
			'data_limite' => '2012-07-25',
			'mes_limite' => 166,
			'dia_limite' => 166
		),
		array(
			'id' => 167,
			'escola_id' => 167,
			'tipopagamento_id' => 167,
			'valor' => 167,
			'month_id' => 167,
			'data_limite' => '2012-07-25',
			'mes_limite' => 167,
			'dia_limite' => 167
		),
		array(
			'id' => 168,
			'escola_id' => 168,
			'tipopagamento_id' => 168,
			'valor' => 168,
			'month_id' => 168,
			'data_limite' => '2012-07-25',
			'mes_limite' => 168,
			'dia_limite' => 168
		),
		array(
			'id' => 169,
			'escola_id' => 169,
			'tipopagamento_id' => 169,
			'valor' => 169,
			'month_id' => 169,
			'data_limite' => '2012-07-25',
			'mes_limite' => 169,
			'dia_limite' => 169
		),
		array(
			'id' => 170,
			'escola_id' => 170,
			'tipopagamento_id' => 170,
			'valor' => 170,
			'month_id' => 170,
			'data_limite' => '2012-07-25',
			'mes_limite' => 170,
			'dia_limite' => 170
		),
		array(
			'id' => 171,
			'escola_id' => 171,
			'tipopagamento_id' => 171,
			'valor' => 171,
			'month_id' => 171,
			'data_limite' => '2012-07-25',
			'mes_limite' => 171,
			'dia_limite' => 171
		),
		array(
			'id' => 172,
			'escola_id' => 172,
			'tipopagamento_id' => 172,
			'valor' => 172,
			'month_id' => 172,
			'data_limite' => '2012-07-25',
			'mes_limite' => 172,
			'dia_limite' => 172
		),
		array(
			'id' => 173,
			'escola_id' => 173,
			'tipopagamento_id' => 173,
			'valor' => 173,
			'month_id' => 173,
			'data_limite' => '2012-07-25',
			'mes_limite' => 173,
			'dia_limite' => 173
		),
		array(
			'id' => 174,
			'escola_id' => 174,
			'tipopagamento_id' => 174,
			'valor' => 174,
			'month_id' => 174,
			'data_limite' => '2012-07-25',
			'mes_limite' => 174,
			'dia_limite' => 174
		),
		array(
			'id' => 175,
			'escola_id' => 175,
			'tipopagamento_id' => 175,
			'valor' => 175,
			'month_id' => 175,
			'data_limite' => '2012-07-25',
			'mes_limite' => 175,
			'dia_limite' => 175
		),
		array(
			'id' => 176,
			'escola_id' => 176,
			'tipopagamento_id' => 176,
			'valor' => 176,
			'month_id' => 176,
			'data_limite' => '2012-07-25',
			'mes_limite' => 176,
			'dia_limite' => 176
		),
		array(
			'id' => 177,
			'escola_id' => 177,
			'tipopagamento_id' => 177,
			'valor' => 177,
			'month_id' => 177,
			'data_limite' => '2012-07-25',
			'mes_limite' => 177,
			'dia_limite' => 177
		),
		array(
			'id' => 178,
			'escola_id' => 178,
			'tipopagamento_id' => 178,
			'valor' => 178,
			'month_id' => 178,
			'data_limite' => '2012-07-25',
			'mes_limite' => 178,
			'dia_limite' => 178
		),
		array(
			'id' => 179,
			'escola_id' => 179,
			'tipopagamento_id' => 179,
			'valor' => 179,
			'month_id' => 179,
			'data_limite' => '2012-07-25',
			'mes_limite' => 179,
			'dia_limite' => 179
		),
		array(
			'id' => 180,
			'escola_id' => 180,
			'tipopagamento_id' => 180,
			'valor' => 180,
			'month_id' => 180,
			'data_limite' => '2012-07-25',
			'mes_limite' => 180,
			'dia_limite' => 180
		),
		array(
			'id' => 181,
			'escola_id' => 181,
			'tipopagamento_id' => 181,
			'valor' => 181,
			'month_id' => 181,
			'data_limite' => '2012-07-25',
			'mes_limite' => 181,
			'dia_limite' => 181
		),
		array(
			'id' => 182,
			'escola_id' => 182,
			'tipopagamento_id' => 182,
			'valor' => 182,
			'month_id' => 182,
			'data_limite' => '2012-07-25',
			'mes_limite' => 182,
			'dia_limite' => 182
		),
		array(
			'id' => 183,
			'escola_id' => 183,
			'tipopagamento_id' => 183,
			'valor' => 183,
			'month_id' => 183,
			'data_limite' => '2012-07-25',
			'mes_limite' => 183,
			'dia_limite' => 183
		),
		array(
			'id' => 184,
			'escola_id' => 184,
			'tipopagamento_id' => 184,
			'valor' => 184,
			'month_id' => 184,
			'data_limite' => '2012-07-25',
			'mes_limite' => 184,
			'dia_limite' => 184
		),
		array(
			'id' => 185,
			'escola_id' => 185,
			'tipopagamento_id' => 185,
			'valor' => 185,
			'month_id' => 185,
			'data_limite' => '2012-07-25',
			'mes_limite' => 185,
			'dia_limite' => 185
		),
		array(
			'id' => 186,
			'escola_id' => 186,
			'tipopagamento_id' => 186,
			'valor' => 186,
			'month_id' => 186,
			'data_limite' => '2012-07-25',
			'mes_limite' => 186,
			'dia_limite' => 186
		),
		array(
			'id' => 187,
			'escola_id' => 187,
			'tipopagamento_id' => 187,
			'valor' => 187,
			'month_id' => 187,
			'data_limite' => '2012-07-25',
			'mes_limite' => 187,
			'dia_limite' => 187
		),
		array(
			'id' => 188,
			'escola_id' => 188,
			'tipopagamento_id' => 188,
			'valor' => 188,
			'month_id' => 188,
			'data_limite' => '2012-07-25',
			'mes_limite' => 188,
			'dia_limite' => 188
		),
		array(
			'id' => 189,
			'escola_id' => 189,
			'tipopagamento_id' => 189,
			'valor' => 189,
			'month_id' => 189,
			'data_limite' => '2012-07-25',
			'mes_limite' => 189,
			'dia_limite' => 189
		),
		array(
			'id' => 190,
			'escola_id' => 190,
			'tipopagamento_id' => 190,
			'valor' => 190,
			'month_id' => 190,
			'data_limite' => '2012-07-25',
			'mes_limite' => 190,
			'dia_limite' => 190
		),
		array(
			'id' => 191,
			'escola_id' => 191,
			'tipopagamento_id' => 191,
			'valor' => 191,
			'month_id' => 191,
			'data_limite' => '2012-07-25',
			'mes_limite' => 191,
			'dia_limite' => 191
		),
		array(
			'id' => 192,
			'escola_id' => 192,
			'tipopagamento_id' => 192,
			'valor' => 192,
			'month_id' => 192,
			'data_limite' => '2012-07-25',
			'mes_limite' => 192,
			'dia_limite' => 192
		),
		array(
			'id' => 193,
			'escola_id' => 193,
			'tipopagamento_id' => 193,
			'valor' => 193,
			'month_id' => 193,
			'data_limite' => '2012-07-25',
			'mes_limite' => 193,
			'dia_limite' => 193
		),
		array(
			'id' => 194,
			'escola_id' => 194,
			'tipopagamento_id' => 194,
			'valor' => 194,
			'month_id' => 194,
			'data_limite' => '2012-07-25',
			'mes_limite' => 194,
			'dia_limite' => 194
		),
		array(
			'id' => 195,
			'escola_id' => 195,
			'tipopagamento_id' => 195,
			'valor' => 195,
			'month_id' => 195,
			'data_limite' => '2012-07-25',
			'mes_limite' => 195,
			'dia_limite' => 195
		),
		array(
			'id' => 196,
			'escola_id' => 196,
			'tipopagamento_id' => 196,
			'valor' => 196,
			'month_id' => 196,
			'data_limite' => '2012-07-25',
			'mes_limite' => 196,
			'dia_limite' => 196
		),
		array(
			'id' => 197,
			'escola_id' => 197,
			'tipopagamento_id' => 197,
			'valor' => 197,
			'month_id' => 197,
			'data_limite' => '2012-07-25',
			'mes_limite' => 197,
			'dia_limite' => 197
		),
		array(
			'id' => 198,
			'escola_id' => 198,
			'tipopagamento_id' => 198,
			'valor' => 198,
			'month_id' => 198,
			'data_limite' => '2012-07-25',
			'mes_limite' => 198,
			'dia_limite' => 198
		),
		array(
			'id' => 199,
			'escola_id' => 199,
			'tipopagamento_id' => 199,
			'valor' => 199,
			'month_id' => 199,
			'data_limite' => '2012-07-25',
			'mes_limite' => 199,
			'dia_limite' => 199
		),
		array(
			'id' => 200,
			'escola_id' => 200,
			'tipopagamento_id' => 200,
			'valor' => 200,
			'month_id' => 200,
			'data_limite' => '2012-07-25',
			'mes_limite' => 200,
			'dia_limite' => 200
		),
		array(
			'id' => 201,
			'escola_id' => 201,
			'tipopagamento_id' => 201,
			'valor' => 201,
			'month_id' => 201,
			'data_limite' => '2012-07-25',
			'mes_limite' => 201,
			'dia_limite' => 201
		),
		array(
			'id' => 202,
			'escola_id' => 202,
			'tipopagamento_id' => 202,
			'valor' => 202,
			'month_id' => 202,
			'data_limite' => '2012-07-25',
			'mes_limite' => 202,
			'dia_limite' => 202
		),
		array(
			'id' => 203,
			'escola_id' => 203,
			'tipopagamento_id' => 203,
			'valor' => 203,
			'month_id' => 203,
			'data_limite' => '2012-07-25',
			'mes_limite' => 203,
			'dia_limite' => 203
		),
		array(
			'id' => 204,
			'escola_id' => 204,
			'tipopagamento_id' => 204,
			'valor' => 204,
			'month_id' => 204,
			'data_limite' => '2012-07-25',
			'mes_limite' => 204,
			'dia_limite' => 204
		),
		array(
			'id' => 205,
			'escola_id' => 205,
			'tipopagamento_id' => 205,
			'valor' => 205,
			'month_id' => 205,
			'data_limite' => '2012-07-25',
			'mes_limite' => 205,
			'dia_limite' => 205
		),
		array(
			'id' => 206,
			'escola_id' => 206,
			'tipopagamento_id' => 206,
			'valor' => 206,
			'month_id' => 206,
			'data_limite' => '2012-07-25',
			'mes_limite' => 206,
			'dia_limite' => 206
		),
		array(
			'id' => 207,
			'escola_id' => 207,
			'tipopagamento_id' => 207,
			'valor' => 207,
			'month_id' => 207,
			'data_limite' => '2012-07-25',
			'mes_limite' => 207,
			'dia_limite' => 207
		),
		array(
			'id' => 208,
			'escola_id' => 208,
			'tipopagamento_id' => 208,
			'valor' => 208,
			'month_id' => 208,
			'data_limite' => '2012-07-25',
			'mes_limite' => 208,
			'dia_limite' => 208
		),
		array(
			'id' => 209,
			'escola_id' => 209,
			'tipopagamento_id' => 209,
			'valor' => 209,
			'month_id' => 209,
			'data_limite' => '2012-07-25',
			'mes_limite' => 209,
			'dia_limite' => 209
		),
		array(
			'id' => 210,
			'escola_id' => 210,
			'tipopagamento_id' => 210,
			'valor' => 210,
			'month_id' => 210,
			'data_limite' => '2012-07-25',
			'mes_limite' => 210,
			'dia_limite' => 210
		),
		array(
			'id' => 211,
			'escola_id' => 211,
			'tipopagamento_id' => 211,
			'valor' => 211,
			'month_id' => 211,
			'data_limite' => '2012-07-25',
			'mes_limite' => 211,
			'dia_limite' => 211
		),
		array(
			'id' => 212,
			'escola_id' => 212,
			'tipopagamento_id' => 212,
			'valor' => 212,
			'month_id' => 212,
			'data_limite' => '2012-07-25',
			'mes_limite' => 212,
			'dia_limite' => 212
		),
		array(
			'id' => 213,
			'escola_id' => 213,
			'tipopagamento_id' => 213,
			'valor' => 213,
			'month_id' => 213,
			'data_limite' => '2012-07-25',
			'mes_limite' => 213,
			'dia_limite' => 213
		),
		array(
			'id' => 214,
			'escola_id' => 214,
			'tipopagamento_id' => 214,
			'valor' => 214,
			'month_id' => 214,
			'data_limite' => '2012-07-25',
			'mes_limite' => 214,
			'dia_limite' => 214
		),
		array(
			'id' => 215,
			'escola_id' => 215,
			'tipopagamento_id' => 215,
			'valor' => 215,
			'month_id' => 215,
			'data_limite' => '2012-07-25',
			'mes_limite' => 215,
			'dia_limite' => 215
		),
		array(
			'id' => 216,
			'escola_id' => 216,
			'tipopagamento_id' => 216,
			'valor' => 216,
			'month_id' => 216,
			'data_limite' => '2012-07-25',
			'mes_limite' => 216,
			'dia_limite' => 216
		),
		array(
			'id' => 217,
			'escola_id' => 217,
			'tipopagamento_id' => 217,
			'valor' => 217,
			'month_id' => 217,
			'data_limite' => '2012-07-25',
			'mes_limite' => 217,
			'dia_limite' => 217
		),
		array(
			'id' => 218,
			'escola_id' => 218,
			'tipopagamento_id' => 218,
			'valor' => 218,
			'month_id' => 218,
			'data_limite' => '2012-07-25',
			'mes_limite' => 218,
			'dia_limite' => 218
		),
		array(
			'id' => 219,
			'escola_id' => 219,
			'tipopagamento_id' => 219,
			'valor' => 219,
			'month_id' => 219,
			'data_limite' => '2012-07-25',
			'mes_limite' => 219,
			'dia_limite' => 219
		),
		array(
			'id' => 220,
			'escola_id' => 220,
			'tipopagamento_id' => 220,
			'valor' => 220,
			'month_id' => 220,
			'data_limite' => '2012-07-25',
			'mes_limite' => 220,
			'dia_limite' => 220
		),
		array(
			'id' => 221,
			'escola_id' => 221,
			'tipopagamento_id' => 221,
			'valor' => 221,
			'month_id' => 221,
			'data_limite' => '2012-07-25',
			'mes_limite' => 221,
			'dia_limite' => 221
		),
		array(
			'id' => 222,
			'escola_id' => 222,
			'tipopagamento_id' => 222,
			'valor' => 222,
			'month_id' => 222,
			'data_limite' => '2012-07-25',
			'mes_limite' => 222,
			'dia_limite' => 222
		),
		array(
			'id' => 223,
			'escola_id' => 223,
			'tipopagamento_id' => 223,
			'valor' => 223,
			'month_id' => 223,
			'data_limite' => '2012-07-25',
			'mes_limite' => 223,
			'dia_limite' => 223
		),
		array(
			'id' => 224,
			'escola_id' => 224,
			'tipopagamento_id' => 224,
			'valor' => 224,
			'month_id' => 224,
			'data_limite' => '2012-07-25',
			'mes_limite' => 224,
			'dia_limite' => 224
		),
		array(
			'id' => 225,
			'escola_id' => 225,
			'tipopagamento_id' => 225,
			'valor' => 225,
			'month_id' => 225,
			'data_limite' => '2012-07-25',
			'mes_limite' => 225,
			'dia_limite' => 225
		),
		array(
			'id' => 226,
			'escola_id' => 226,
			'tipopagamento_id' => 226,
			'valor' => 226,
			'month_id' => 226,
			'data_limite' => '2012-07-25',
			'mes_limite' => 226,
			'dia_limite' => 226
		),
		array(
			'id' => 227,
			'escola_id' => 227,
			'tipopagamento_id' => 227,
			'valor' => 227,
			'month_id' => 227,
			'data_limite' => '2012-07-25',
			'mes_limite' => 227,
			'dia_limite' => 227
		),
		array(
			'id' => 228,
			'escola_id' => 228,
			'tipopagamento_id' => 228,
			'valor' => 228,
			'month_id' => 228,
			'data_limite' => '2012-07-25',
			'mes_limite' => 228,
			'dia_limite' => 228
		),
		array(
			'id' => 229,
			'escola_id' => 229,
			'tipopagamento_id' => 229,
			'valor' => 229,
			'month_id' => 229,
			'data_limite' => '2012-07-25',
			'mes_limite' => 229,
			'dia_limite' => 229
		),
		array(
			'id' => 230,
			'escola_id' => 230,
			'tipopagamento_id' => 230,
			'valor' => 230,
			'month_id' => 230,
			'data_limite' => '2012-07-25',
			'mes_limite' => 230,
			'dia_limite' => 230
		),
		array(
			'id' => 231,
			'escola_id' => 231,
			'tipopagamento_id' => 231,
			'valor' => 231,
			'month_id' => 231,
			'data_limite' => '2012-07-25',
			'mes_limite' => 231,
			'dia_limite' => 231
		),
		array(
			'id' => 232,
			'escola_id' => 232,
			'tipopagamento_id' => 232,
			'valor' => 232,
			'month_id' => 232,
			'data_limite' => '2012-07-25',
			'mes_limite' => 232,
			'dia_limite' => 232
		),
		array(
			'id' => 233,
			'escola_id' => 233,
			'tipopagamento_id' => 233,
			'valor' => 233,
			'month_id' => 233,
			'data_limite' => '2012-07-25',
			'mes_limite' => 233,
			'dia_limite' => 233
		),
		array(
			'id' => 234,
			'escola_id' => 234,
			'tipopagamento_id' => 234,
			'valor' => 234,
			'month_id' => 234,
			'data_limite' => '2012-07-25',
			'mes_limite' => 234,
			'dia_limite' => 234
		),
		array(
			'id' => 235,
			'escola_id' => 235,
			'tipopagamento_id' => 235,
			'valor' => 235,
			'month_id' => 235,
			'data_limite' => '2012-07-25',
			'mes_limite' => 235,
			'dia_limite' => 235
		),
		array(
			'id' => 236,
			'escola_id' => 236,
			'tipopagamento_id' => 236,
			'valor' => 236,
			'month_id' => 236,
			'data_limite' => '2012-07-25',
			'mes_limite' => 236,
			'dia_limite' => 236
		),
		array(
			'id' => 237,
			'escola_id' => 237,
			'tipopagamento_id' => 237,
			'valor' => 237,
			'month_id' => 237,
			'data_limite' => '2012-07-25',
			'mes_limite' => 237,
			'dia_limite' => 237
		),
		array(
			'id' => 238,
			'escola_id' => 238,
			'tipopagamento_id' => 238,
			'valor' => 238,
			'month_id' => 238,
			'data_limite' => '2012-07-25',
			'mes_limite' => 238,
			'dia_limite' => 238
		),
		array(
			'id' => 239,
			'escola_id' => 239,
			'tipopagamento_id' => 239,
			'valor' => 239,
			'month_id' => 239,
			'data_limite' => '2012-07-25',
			'mes_limite' => 239,
			'dia_limite' => 239
		),
		array(
			'id' => 240,
			'escola_id' => 240,
			'tipopagamento_id' => 240,
			'valor' => 240,
			'month_id' => 240,
			'data_limite' => '2012-07-25',
			'mes_limite' => 240,
			'dia_limite' => 240
		),
		array(
			'id' => 241,
			'escola_id' => 241,
			'tipopagamento_id' => 241,
			'valor' => 241,
			'month_id' => 241,
			'data_limite' => '2012-07-25',
			'mes_limite' => 241,
			'dia_limite' => 241
		),
		array(
			'id' => 242,
			'escola_id' => 242,
			'tipopagamento_id' => 242,
			'valor' => 242,
			'month_id' => 242,
			'data_limite' => '2012-07-25',
			'mes_limite' => 242,
			'dia_limite' => 242
		),
		array(
			'id' => 243,
			'escola_id' => 243,
			'tipopagamento_id' => 243,
			'valor' => 243,
			'month_id' => 243,
			'data_limite' => '2012-07-25',
			'mes_limite' => 243,
			'dia_limite' => 243
		),
		array(
			'id' => 244,
			'escola_id' => 244,
			'tipopagamento_id' => 244,
			'valor' => 244,
			'month_id' => 244,
			'data_limite' => '2012-07-25',
			'mes_limite' => 244,
			'dia_limite' => 244
		),
		array(
			'id' => 245,
			'escola_id' => 245,
			'tipopagamento_id' => 245,
			'valor' => 245,
			'month_id' => 245,
			'data_limite' => '2012-07-25',
			'mes_limite' => 245,
			'dia_limite' => 245
		),
		array(
			'id' => 246,
			'escola_id' => 246,
			'tipopagamento_id' => 246,
			'valor' => 246,
			'month_id' => 246,
			'data_limite' => '2012-07-25',
			'mes_limite' => 246,
			'dia_limite' => 246
		),
		array(
			'id' => 247,
			'escola_id' => 247,
			'tipopagamento_id' => 247,
			'valor' => 247,
			'month_id' => 247,
			'data_limite' => '2012-07-25',
			'mes_limite' => 247,
			'dia_limite' => 247
		),
		array(
			'id' => 248,
			'escola_id' => 248,
			'tipopagamento_id' => 248,
			'valor' => 248,
			'month_id' => 248,
			'data_limite' => '2012-07-25',
			'mes_limite' => 248,
			'dia_limite' => 248
		),
		array(
			'id' => 249,
			'escola_id' => 249,
			'tipopagamento_id' => 249,
			'valor' => 249,
			'month_id' => 249,
			'data_limite' => '2012-07-25',
			'mes_limite' => 249,
			'dia_limite' => 249
		),
		array(
			'id' => 250,
			'escola_id' => 250,
			'tipopagamento_id' => 250,
			'valor' => 250,
			'month_id' => 250,
			'data_limite' => '2012-07-25',
			'mes_limite' => 250,
			'dia_limite' => 250
		),
		array(
			'id' => 251,
			'escola_id' => 251,
			'tipopagamento_id' => 251,
			'valor' => 251,
			'month_id' => 251,
			'data_limite' => '2012-07-25',
			'mes_limite' => 251,
			'dia_limite' => 251
		),
		array(
			'id' => 252,
			'escola_id' => 252,
			'tipopagamento_id' => 252,
			'valor' => 252,
			'month_id' => 252,
			'data_limite' => '2012-07-25',
			'mes_limite' => 252,
			'dia_limite' => 252
		),
		array(
			'id' => 253,
			'escola_id' => 253,
			'tipopagamento_id' => 253,
			'valor' => 253,
			'month_id' => 253,
			'data_limite' => '2012-07-25',
			'mes_limite' => 253,
			'dia_limite' => 253
		),
		array(
			'id' => 254,
			'escola_id' => 254,
			'tipopagamento_id' => 254,
			'valor' => 254,
			'month_id' => 254,
			'data_limite' => '2012-07-25',
			'mes_limite' => 254,
			'dia_limite' => 254
		),
		array(
			'id' => 255,
			'escola_id' => 255,
			'tipopagamento_id' => 255,
			'valor' => 255,
			'month_id' => 255,
			'data_limite' => '2012-07-25',
			'mes_limite' => 255,
			'dia_limite' => 255
		),
		array(
			'id' => 256,
			'escola_id' => 256,
			'tipopagamento_id' => 256,
			'valor' => 256,
			'month_id' => 256,
			'data_limite' => '2012-07-25',
			'mes_limite' => 256,
			'dia_limite' => 256
		),
		array(
			'id' => 257,
			'escola_id' => 257,
			'tipopagamento_id' => 257,
			'valor' => 257,
			'month_id' => 257,
			'data_limite' => '2012-07-25',
			'mes_limite' => 257,
			'dia_limite' => 257
		),
		array(
			'id' => 258,
			'escola_id' => 258,
			'tipopagamento_id' => 258,
			'valor' => 258,
			'month_id' => 258,
			'data_limite' => '2012-07-25',
			'mes_limite' => 258,
			'dia_limite' => 258
		),
		array(
			'id' => 259,
			'escola_id' => 259,
			'tipopagamento_id' => 259,
			'valor' => 259,
			'month_id' => 259,
			'data_limite' => '2012-07-25',
			'mes_limite' => 259,
			'dia_limite' => 259
		),
		array(
			'id' => 260,
			'escola_id' => 260,
			'tipopagamento_id' => 260,
			'valor' => 260,
			'month_id' => 260,
			'data_limite' => '2012-07-25',
			'mes_limite' => 260,
			'dia_limite' => 260
		),
		array(
			'id' => 261,
			'escola_id' => 261,
			'tipopagamento_id' => 261,
			'valor' => 261,
			'month_id' => 261,
			'data_limite' => '2012-07-25',
			'mes_limite' => 261,
			'dia_limite' => 261
		),
		array(
			'id' => 262,
			'escola_id' => 262,
			'tipopagamento_id' => 262,
			'valor' => 262,
			'month_id' => 262,
			'data_limite' => '2012-07-25',
			'mes_limite' => 262,
			'dia_limite' => 262
		),
		array(
			'id' => 263,
			'escola_id' => 263,
			'tipopagamento_id' => 263,
			'valor' => 263,
			'month_id' => 263,
			'data_limite' => '2012-07-25',
			'mes_limite' => 263,
			'dia_limite' => 263
		),
		array(
			'id' => 264,
			'escola_id' => 264,
			'tipopagamento_id' => 264,
			'valor' => 264,
			'month_id' => 264,
			'data_limite' => '2012-07-25',
			'mes_limite' => 264,
			'dia_limite' => 264
		),
		array(
			'id' => 265,
			'escola_id' => 265,
			'tipopagamento_id' => 265,
			'valor' => 265,
			'month_id' => 265,
			'data_limite' => '2012-07-25',
			'mes_limite' => 265,
			'dia_limite' => 265
		),
		array(
			'id' => 266,
			'escola_id' => 266,
			'tipopagamento_id' => 266,
			'valor' => 266,
			'month_id' => 266,
			'data_limite' => '2012-07-25',
			'mes_limite' => 266,
			'dia_limite' => 266
		),
		array(
			'id' => 267,
			'escola_id' => 267,
			'tipopagamento_id' => 267,
			'valor' => 267,
			'month_id' => 267,
			'data_limite' => '2012-07-25',
			'mes_limite' => 267,
			'dia_limite' => 267
		),
		array(
			'id' => 268,
			'escola_id' => 268,
			'tipopagamento_id' => 268,
			'valor' => 268,
			'month_id' => 268,
			'data_limite' => '2012-07-25',
			'mes_limite' => 268,
			'dia_limite' => 268
		),
		array(
			'id' => 269,
			'escola_id' => 269,
			'tipopagamento_id' => 269,
			'valor' => 269,
			'month_id' => 269,
			'data_limite' => '2012-07-25',
			'mes_limite' => 269,
			'dia_limite' => 269
		),
		array(
			'id' => 270,
			'escola_id' => 270,
			'tipopagamento_id' => 270,
			'valor' => 270,
			'month_id' => 270,
			'data_limite' => '2012-07-25',
			'mes_limite' => 270,
			'dia_limite' => 270
		),
		array(
			'id' => 271,
			'escola_id' => 271,
			'tipopagamento_id' => 271,
			'valor' => 271,
			'month_id' => 271,
			'data_limite' => '2012-07-25',
			'mes_limite' => 271,
			'dia_limite' => 271
		),
		array(
			'id' => 272,
			'escola_id' => 272,
			'tipopagamento_id' => 272,
			'valor' => 272,
			'month_id' => 272,
			'data_limite' => '2012-07-25',
			'mes_limite' => 272,
			'dia_limite' => 272
		),
		array(
			'id' => 273,
			'escola_id' => 273,
			'tipopagamento_id' => 273,
			'valor' => 273,
			'month_id' => 273,
			'data_limite' => '2012-07-25',
			'mes_limite' => 273,
			'dia_limite' => 273
		),
		array(
			'id' => 274,
			'escola_id' => 274,
			'tipopagamento_id' => 274,
			'valor' => 274,
			'month_id' => 274,
			'data_limite' => '2012-07-25',
			'mes_limite' => 274,
			'dia_limite' => 274
		),
		array(
			'id' => 275,
			'escola_id' => 275,
			'tipopagamento_id' => 275,
			'valor' => 275,
			'month_id' => 275,
			'data_limite' => '2012-07-25',
			'mes_limite' => 275,
			'dia_limite' => 275
		),
		array(
			'id' => 276,
			'escola_id' => 276,
			'tipopagamento_id' => 276,
			'valor' => 276,
			'month_id' => 276,
			'data_limite' => '2012-07-25',
			'mes_limite' => 276,
			'dia_limite' => 276
		),
		array(
			'id' => 277,
			'escola_id' => 277,
			'tipopagamento_id' => 277,
			'valor' => 277,
			'month_id' => 277,
			'data_limite' => '2012-07-25',
			'mes_limite' => 277,
			'dia_limite' => 277
		),
		array(
			'id' => 278,
			'escola_id' => 278,
			'tipopagamento_id' => 278,
			'valor' => 278,
			'month_id' => 278,
			'data_limite' => '2012-07-25',
			'mes_limite' => 278,
			'dia_limite' => 278
		),
		array(
			'id' => 279,
			'escola_id' => 279,
			'tipopagamento_id' => 279,
			'valor' => 279,
			'month_id' => 279,
			'data_limite' => '2012-07-25',
			'mes_limite' => 279,
			'dia_limite' => 279
		),
		array(
			'id' => 280,
			'escola_id' => 280,
			'tipopagamento_id' => 280,
			'valor' => 280,
			'month_id' => 280,
			'data_limite' => '2012-07-25',
			'mes_limite' => 280,
			'dia_limite' => 280
		),
		array(
			'id' => 281,
			'escola_id' => 281,
			'tipopagamento_id' => 281,
			'valor' => 281,
			'month_id' => 281,
			'data_limite' => '2012-07-25',
			'mes_limite' => 281,
			'dia_limite' => 281
		),
		array(
			'id' => 282,
			'escola_id' => 282,
			'tipopagamento_id' => 282,
			'valor' => 282,
			'month_id' => 282,
			'data_limite' => '2012-07-25',
			'mes_limite' => 282,
			'dia_limite' => 282
		),
		array(
			'id' => 283,
			'escola_id' => 283,
			'tipopagamento_id' => 283,
			'valor' => 283,
			'month_id' => 283,
			'data_limite' => '2012-07-25',
			'mes_limite' => 283,
			'dia_limite' => 283
		),
		array(
			'id' => 284,
			'escola_id' => 284,
			'tipopagamento_id' => 284,
			'valor' => 284,
			'month_id' => 284,
			'data_limite' => '2012-07-25',
			'mes_limite' => 284,
			'dia_limite' => 284
		),
		array(
			'id' => 285,
			'escola_id' => 285,
			'tipopagamento_id' => 285,
			'valor' => 285,
			'month_id' => 285,
			'data_limite' => '2012-07-25',
			'mes_limite' => 285,
			'dia_limite' => 285
		),
		array(
			'id' => 286,
			'escola_id' => 286,
			'tipopagamento_id' => 286,
			'valor' => 286,
			'month_id' => 286,
			'data_limite' => '2012-07-25',
			'mes_limite' => 286,
			'dia_limite' => 286
		),
		array(
			'id' => 287,
			'escola_id' => 287,
			'tipopagamento_id' => 287,
			'valor' => 287,
			'month_id' => 287,
			'data_limite' => '2012-07-25',
			'mes_limite' => 287,
			'dia_limite' => 287
		),
		array(
			'id' => 288,
			'escola_id' => 288,
			'tipopagamento_id' => 288,
			'valor' => 288,
			'month_id' => 288,
			'data_limite' => '2012-07-25',
			'mes_limite' => 288,
			'dia_limite' => 288
		),
		array(
			'id' => 289,
			'escola_id' => 289,
			'tipopagamento_id' => 289,
			'valor' => 289,
			'month_id' => 289,
			'data_limite' => '2012-07-25',
			'mes_limite' => 289,
			'dia_limite' => 289
		),
		array(
			'id' => 290,
			'escola_id' => 290,
			'tipopagamento_id' => 290,
			'valor' => 290,
			'month_id' => 290,
			'data_limite' => '2012-07-25',
			'mes_limite' => 290,
			'dia_limite' => 290
		),
		array(
			'id' => 291,
			'escola_id' => 291,
			'tipopagamento_id' => 291,
			'valor' => 291,
			'month_id' => 291,
			'data_limite' => '2012-07-25',
			'mes_limite' => 291,
			'dia_limite' => 291
		),
		array(
			'id' => 292,
			'escola_id' => 292,
			'tipopagamento_id' => 292,
			'valor' => 292,
			'month_id' => 292,
			'data_limite' => '2012-07-25',
			'mes_limite' => 292,
			'dia_limite' => 292
		),
		array(
			'id' => 293,
			'escola_id' => 293,
			'tipopagamento_id' => 293,
			'valor' => 293,
			'month_id' => 293,
			'data_limite' => '2012-07-25',
			'mes_limite' => 293,
			'dia_limite' => 293
		),
		array(
			'id' => 294,
			'escola_id' => 294,
			'tipopagamento_id' => 294,
			'valor' => 294,
			'month_id' => 294,
			'data_limite' => '2012-07-25',
			'mes_limite' => 294,
			'dia_limite' => 294
		),
		array(
			'id' => 295,
			'escola_id' => 295,
			'tipopagamento_id' => 295,
			'valor' => 295,
			'month_id' => 295,
			'data_limite' => '2012-07-25',
			'mes_limite' => 295,
			'dia_limite' => 295
		),
		array(
			'id' => 296,
			'escola_id' => 296,
			'tipopagamento_id' => 296,
			'valor' => 296,
			'month_id' => 296,
			'data_limite' => '2012-07-25',
			'mes_limite' => 296,
			'dia_limite' => 296
		),
		array(
			'id' => 297,
			'escola_id' => 297,
			'tipopagamento_id' => 297,
			'valor' => 297,
			'month_id' => 297,
			'data_limite' => '2012-07-25',
			'mes_limite' => 297,
			'dia_limite' => 297
		),
		array(
			'id' => 298,
			'escola_id' => 298,
			'tipopagamento_id' => 298,
			'valor' => 298,
			'month_id' => 298,
			'data_limite' => '2012-07-25',
			'mes_limite' => 298,
			'dia_limite' => 298
		),
		array(
			'id' => 299,
			'escola_id' => 299,
			'tipopagamento_id' => 299,
			'valor' => 299,
			'month_id' => 299,
			'data_limite' => '2012-07-25',
			'mes_limite' => 299,
			'dia_limite' => 299
		),
		array(
			'id' => 300,
			'escola_id' => 300,
			'tipopagamento_id' => 300,
			'valor' => 300,
			'month_id' => 300,
			'data_limite' => '2012-07-25',
			'mes_limite' => 300,
			'dia_limite' => 300
		),
		array(
			'id' => 301,
			'escola_id' => 301,
			'tipopagamento_id' => 301,
			'valor' => 301,
			'month_id' => 301,
			'data_limite' => '2012-07-25',
			'mes_limite' => 301,
			'dia_limite' => 301
		),
		array(
			'id' => 302,
			'escola_id' => 302,
			'tipopagamento_id' => 302,
			'valor' => 302,
			'month_id' => 302,
			'data_limite' => '2012-07-25',
			'mes_limite' => 302,
			'dia_limite' => 302
		),
		array(
			'id' => 303,
			'escola_id' => 303,
			'tipopagamento_id' => 303,
			'valor' => 303,
			'month_id' => 303,
			'data_limite' => '2012-07-25',
			'mes_limite' => 303,
			'dia_limite' => 303
		),
		array(
			'id' => 304,
			'escola_id' => 304,
			'tipopagamento_id' => 304,
			'valor' => 304,
			'month_id' => 304,
			'data_limite' => '2012-07-25',
			'mes_limite' => 304,
			'dia_limite' => 304
		),
		array(
			'id' => 305,
			'escola_id' => 305,
			'tipopagamento_id' => 305,
			'valor' => 305,
			'month_id' => 305,
			'data_limite' => '2012-07-25',
			'mes_limite' => 305,
			'dia_limite' => 305
		),
		array(
			'id' => 306,
			'escola_id' => 306,
			'tipopagamento_id' => 306,
			'valor' => 306,
			'month_id' => 306,
			'data_limite' => '2012-07-25',
			'mes_limite' => 306,
			'dia_limite' => 306
		),
		array(
			'id' => 307,
			'escola_id' => 307,
			'tipopagamento_id' => 307,
			'valor' => 307,
			'month_id' => 307,
			'data_limite' => '2012-07-25',
			'mes_limite' => 307,
			'dia_limite' => 307
		),
		array(
			'id' => 308,
			'escola_id' => 308,
			'tipopagamento_id' => 308,
			'valor' => 308,
			'month_id' => 308,
			'data_limite' => '2012-07-25',
			'mes_limite' => 308,
			'dia_limite' => 308
		),
		array(
			'id' => 309,
			'escola_id' => 309,
			'tipopagamento_id' => 309,
			'valor' => 309,
			'month_id' => 309,
			'data_limite' => '2012-07-25',
			'mes_limite' => 309,
			'dia_limite' => 309
		),
		array(
			'id' => 310,
			'escola_id' => 310,
			'tipopagamento_id' => 310,
			'valor' => 310,
			'month_id' => 310,
			'data_limite' => '2012-07-25',
			'mes_limite' => 310,
			'dia_limite' => 310
		),
		array(
			'id' => 311,
			'escola_id' => 311,
			'tipopagamento_id' => 311,
			'valor' => 311,
			'month_id' => 311,
			'data_limite' => '2012-07-25',
			'mes_limite' => 311,
			'dia_limite' => 311
		),
		array(
			'id' => 312,
			'escola_id' => 312,
			'tipopagamento_id' => 312,
			'valor' => 312,
			'month_id' => 312,
			'data_limite' => '2012-07-25',
			'mes_limite' => 312,
			'dia_limite' => 312
		),
		array(
			'id' => 313,
			'escola_id' => 313,
			'tipopagamento_id' => 313,
			'valor' => 313,
			'month_id' => 313,
			'data_limite' => '2012-07-25',
			'mes_limite' => 313,
			'dia_limite' => 313
		),
		array(
			'id' => 314,
			'escola_id' => 314,
			'tipopagamento_id' => 314,
			'valor' => 314,
			'month_id' => 314,
			'data_limite' => '2012-07-25',
			'mes_limite' => 314,
			'dia_limite' => 314
		),
		array(
			'id' => 315,
			'escola_id' => 315,
			'tipopagamento_id' => 315,
			'valor' => 315,
			'month_id' => 315,
			'data_limite' => '2012-07-25',
			'mes_limite' => 315,
			'dia_limite' => 315
		),
		array(
			'id' => 316,
			'escola_id' => 316,
			'tipopagamento_id' => 316,
			'valor' => 316,
			'month_id' => 316,
			'data_limite' => '2012-07-25',
			'mes_limite' => 316,
			'dia_limite' => 316
		),
		array(
			'id' => 317,
			'escola_id' => 317,
			'tipopagamento_id' => 317,
			'valor' => 317,
			'month_id' => 317,
			'data_limite' => '2012-07-25',
			'mes_limite' => 317,
			'dia_limite' => 317
		),
		array(
			'id' => 318,
			'escola_id' => 318,
			'tipopagamento_id' => 318,
			'valor' => 318,
			'month_id' => 318,
			'data_limite' => '2012-07-25',
			'mes_limite' => 318,
			'dia_limite' => 318
		),
		array(
			'id' => 319,
			'escola_id' => 319,
			'tipopagamento_id' => 319,
			'valor' => 319,
			'month_id' => 319,
			'data_limite' => '2012-07-25',
			'mes_limite' => 319,
			'dia_limite' => 319
		),
		array(
			'id' => 320,
			'escola_id' => 320,
			'tipopagamento_id' => 320,
			'valor' => 320,
			'month_id' => 320,
			'data_limite' => '2012-07-25',
			'mes_limite' => 320,
			'dia_limite' => 320
		),
		array(
			'id' => 321,
			'escola_id' => 321,
			'tipopagamento_id' => 321,
			'valor' => 321,
			'month_id' => 321,
			'data_limite' => '2012-07-25',
			'mes_limite' => 321,
			'dia_limite' => 321
		),
		array(
			'id' => 322,
			'escola_id' => 322,
			'tipopagamento_id' => 322,
			'valor' => 322,
			'month_id' => 322,
			'data_limite' => '2012-07-25',
			'mes_limite' => 322,
			'dia_limite' => 322
		),
		array(
			'id' => 323,
			'escola_id' => 323,
			'tipopagamento_id' => 323,
			'valor' => 323,
			'month_id' => 323,
			'data_limite' => '2012-07-25',
			'mes_limite' => 323,
			'dia_limite' => 323
		),
		array(
			'id' => 324,
			'escola_id' => 324,
			'tipopagamento_id' => 324,
			'valor' => 324,
			'month_id' => 324,
			'data_limite' => '2012-07-25',
			'mes_limite' => 324,
			'dia_limite' => 324
		),
		array(
			'id' => 325,
			'escola_id' => 325,
			'tipopagamento_id' => 325,
			'valor' => 325,
			'month_id' => 325,
			'data_limite' => '2012-07-25',
			'mes_limite' => 325,
			'dia_limite' => 325
		),
		array(
			'id' => 326,
			'escola_id' => 326,
			'tipopagamento_id' => 326,
			'valor' => 326,
			'month_id' => 326,
			'data_limite' => '2012-07-25',
			'mes_limite' => 326,
			'dia_limite' => 326
		),
		array(
			'id' => 327,
			'escola_id' => 327,
			'tipopagamento_id' => 327,
			'valor' => 327,
			'month_id' => 327,
			'data_limite' => '2012-07-25',
			'mes_limite' => 327,
			'dia_limite' => 327
		),
		array(
			'id' => 328,
			'escola_id' => 328,
			'tipopagamento_id' => 328,
			'valor' => 328,
			'month_id' => 328,
			'data_limite' => '2012-07-25',
			'mes_limite' => 328,
			'dia_limite' => 328
		),
		array(
			'id' => 329,
			'escola_id' => 329,
			'tipopagamento_id' => 329,
			'valor' => 329,
			'month_id' => 329,
			'data_limite' => '2012-07-25',
			'mes_limite' => 329,
			'dia_limite' => 329
		),
		array(
			'id' => 330,
			'escola_id' => 330,
			'tipopagamento_id' => 330,
			'valor' => 330,
			'month_id' => 330,
			'data_limite' => '2012-07-25',
			'mes_limite' => 330,
			'dia_limite' => 330
		),
		array(
			'id' => 331,
			'escola_id' => 331,
			'tipopagamento_id' => 331,
			'valor' => 331,
			'month_id' => 331,
			'data_limite' => '2012-07-25',
			'mes_limite' => 331,
			'dia_limite' => 331
		),
		array(
			'id' => 332,
			'escola_id' => 332,
			'tipopagamento_id' => 332,
			'valor' => 332,
			'month_id' => 332,
			'data_limite' => '2012-07-25',
			'mes_limite' => 332,
			'dia_limite' => 332
		),
		array(
			'id' => 333,
			'escola_id' => 333,
			'tipopagamento_id' => 333,
			'valor' => 333,
			'month_id' => 333,
			'data_limite' => '2012-07-25',
			'mes_limite' => 333,
			'dia_limite' => 333
		),
		array(
			'id' => 334,
			'escola_id' => 334,
			'tipopagamento_id' => 334,
			'valor' => 334,
			'month_id' => 334,
			'data_limite' => '2012-07-25',
			'mes_limite' => 334,
			'dia_limite' => 334
		),
		array(
			'id' => 335,
			'escola_id' => 335,
			'tipopagamento_id' => 335,
			'valor' => 335,
			'month_id' => 335,
			'data_limite' => '2012-07-25',
			'mes_limite' => 335,
			'dia_limite' => 335
		),
		array(
			'id' => 336,
			'escola_id' => 336,
			'tipopagamento_id' => 336,
			'valor' => 336,
			'month_id' => 336,
			'data_limite' => '2012-07-25',
			'mes_limite' => 336,
			'dia_limite' => 336
		),
		array(
			'id' => 337,
			'escola_id' => 337,
			'tipopagamento_id' => 337,
			'valor' => 337,
			'month_id' => 337,
			'data_limite' => '2012-07-25',
			'mes_limite' => 337,
			'dia_limite' => 337
		),
		array(
			'id' => 338,
			'escola_id' => 338,
			'tipopagamento_id' => 338,
			'valor' => 338,
			'month_id' => 338,
			'data_limite' => '2012-07-25',
			'mes_limite' => 338,
			'dia_limite' => 338
		),
		array(
			'id' => 339,
			'escola_id' => 339,
			'tipopagamento_id' => 339,
			'valor' => 339,
			'month_id' => 339,
			'data_limite' => '2012-07-25',
			'mes_limite' => 339,
			'dia_limite' => 339
		),
		array(
			'id' => 340,
			'escola_id' => 340,
			'tipopagamento_id' => 340,
			'valor' => 340,
			'month_id' => 340,
			'data_limite' => '2012-07-25',
			'mes_limite' => 340,
			'dia_limite' => 340
		),
		array(
			'id' => 341,
			'escola_id' => 341,
			'tipopagamento_id' => 341,
			'valor' => 341,
			'month_id' => 341,
			'data_limite' => '2012-07-25',
			'mes_limite' => 341,
			'dia_limite' => 341
		),
		array(
			'id' => 342,
			'escola_id' => 342,
			'tipopagamento_id' => 342,
			'valor' => 342,
			'month_id' => 342,
			'data_limite' => '2012-07-25',
			'mes_limite' => 342,
			'dia_limite' => 342
		),
		array(
			'id' => 343,
			'escola_id' => 343,
			'tipopagamento_id' => 343,
			'valor' => 343,
			'month_id' => 343,
			'data_limite' => '2012-07-25',
			'mes_limite' => 343,
			'dia_limite' => 343
		),
		array(
			'id' => 344,
			'escola_id' => 344,
			'tipopagamento_id' => 344,
			'valor' => 344,
			'month_id' => 344,
			'data_limite' => '2012-07-25',
			'mes_limite' => 344,
			'dia_limite' => 344
		),
		array(
			'id' => 345,
			'escola_id' => 345,
			'tipopagamento_id' => 345,
			'valor' => 345,
			'month_id' => 345,
			'data_limite' => '2012-07-25',
			'mes_limite' => 345,
			'dia_limite' => 345
		),
		array(
			'id' => 346,
			'escola_id' => 346,
			'tipopagamento_id' => 346,
			'valor' => 346,
			'month_id' => 346,
			'data_limite' => '2012-07-25',
			'mes_limite' => 346,
			'dia_limite' => 346
		),
		array(
			'id' => 347,
			'escola_id' => 347,
			'tipopagamento_id' => 347,
			'valor' => 347,
			'month_id' => 347,
			'data_limite' => '2012-07-25',
			'mes_limite' => 347,
			'dia_limite' => 347
		),
		array(
			'id' => 348,
			'escola_id' => 348,
			'tipopagamento_id' => 348,
			'valor' => 348,
			'month_id' => 348,
			'data_limite' => '2012-07-25',
			'mes_limite' => 348,
			'dia_limite' => 348
		),
		array(
			'id' => 349,
			'escola_id' => 349,
			'tipopagamento_id' => 349,
			'valor' => 349,
			'month_id' => 349,
			'data_limite' => '2012-07-25',
			'mes_limite' => 349,
			'dia_limite' => 349
		),
		array(
			'id' => 350,
			'escola_id' => 350,
			'tipopagamento_id' => 350,
			'valor' => 350,
			'month_id' => 350,
			'data_limite' => '2012-07-25',
			'mes_limite' => 350,
			'dia_limite' => 350
		),
		array(
			'id' => 351,
			'escola_id' => 351,
			'tipopagamento_id' => 351,
			'valor' => 351,
			'month_id' => 351,
			'data_limite' => '2012-07-25',
			'mes_limite' => 351,
			'dia_limite' => 351
		),
		array(
			'id' => 352,
			'escola_id' => 352,
			'tipopagamento_id' => 352,
			'valor' => 352,
			'month_id' => 352,
			'data_limite' => '2012-07-25',
			'mes_limite' => 352,
			'dia_limite' => 352
		),
		array(
			'id' => 353,
			'escola_id' => 353,
			'tipopagamento_id' => 353,
			'valor' => 353,
			'month_id' => 353,
			'data_limite' => '2012-07-25',
			'mes_limite' => 353,
			'dia_limite' => 353
		),
		array(
			'id' => 354,
			'escola_id' => 354,
			'tipopagamento_id' => 354,
			'valor' => 354,
			'month_id' => 354,
			'data_limite' => '2012-07-25',
			'mes_limite' => 354,
			'dia_limite' => 354
		),
		array(
			'id' => 355,
			'escola_id' => 355,
			'tipopagamento_id' => 355,
			'valor' => 355,
			'month_id' => 355,
			'data_limite' => '2012-07-25',
			'mes_limite' => 355,
			'dia_limite' => 355
		),
		array(
			'id' => 356,
			'escola_id' => 356,
			'tipopagamento_id' => 356,
			'valor' => 356,
			'month_id' => 356,
			'data_limite' => '2012-07-25',
			'mes_limite' => 356,
			'dia_limite' => 356
		),
		array(
			'id' => 357,
			'escola_id' => 357,
			'tipopagamento_id' => 357,
			'valor' => 357,
			'month_id' => 357,
			'data_limite' => '2012-07-25',
			'mes_limite' => 357,
			'dia_limite' => 357
		),
		array(
			'id' => 358,
			'escola_id' => 358,
			'tipopagamento_id' => 358,
			'valor' => 358,
			'month_id' => 358,
			'data_limite' => '2012-07-25',
			'mes_limite' => 358,
			'dia_limite' => 358
		),
		array(
			'id' => 359,
			'escola_id' => 359,
			'tipopagamento_id' => 359,
			'valor' => 359,
			'month_id' => 359,
			'data_limite' => '2012-07-25',
			'mes_limite' => 359,
			'dia_limite' => 359
		),
		array(
			'id' => 360,
			'escola_id' => 360,
			'tipopagamento_id' => 360,
			'valor' => 360,
			'month_id' => 360,
			'data_limite' => '2012-07-25',
			'mes_limite' => 360,
			'dia_limite' => 360
		),
		array(
			'id' => 361,
			'escola_id' => 361,
			'tipopagamento_id' => 361,
			'valor' => 361,
			'month_id' => 361,
			'data_limite' => '2012-07-25',
			'mes_limite' => 361,
			'dia_limite' => 361
		),
		array(
			'id' => 362,
			'escola_id' => 362,
			'tipopagamento_id' => 362,
			'valor' => 362,
			'month_id' => 362,
			'data_limite' => '2012-07-25',
			'mes_limite' => 362,
			'dia_limite' => 362
		),
		array(
			'id' => 363,
			'escola_id' => 363,
			'tipopagamento_id' => 363,
			'valor' => 363,
			'month_id' => 363,
			'data_limite' => '2012-07-25',
			'mes_limite' => 363,
			'dia_limite' => 363
		),
		array(
			'id' => 364,
			'escola_id' => 364,
			'tipopagamento_id' => 364,
			'valor' => 364,
			'month_id' => 364,
			'data_limite' => '2012-07-25',
			'mes_limite' => 364,
			'dia_limite' => 364
		),
		array(
			'id' => 365,
			'escola_id' => 365,
			'tipopagamento_id' => 365,
			'valor' => 365,
			'month_id' => 365,
			'data_limite' => '2012-07-25',
			'mes_limite' => 365,
			'dia_limite' => 365
		),
		array(
			'id' => 366,
			'escola_id' => 366,
			'tipopagamento_id' => 366,
			'valor' => 366,
			'month_id' => 366,
			'data_limite' => '2012-07-25',
			'mes_limite' => 366,
			'dia_limite' => 366
		),
		array(
			'id' => 367,
			'escola_id' => 367,
			'tipopagamento_id' => 367,
			'valor' => 367,
			'month_id' => 367,
			'data_limite' => '2012-07-25',
			'mes_limite' => 367,
			'dia_limite' => 367
		),
		array(
			'id' => 368,
			'escola_id' => 368,
			'tipopagamento_id' => 368,
			'valor' => 368,
			'month_id' => 368,
			'data_limite' => '2012-07-25',
			'mes_limite' => 368,
			'dia_limite' => 368
		),
		array(
			'id' => 369,
			'escola_id' => 369,
			'tipopagamento_id' => 369,
			'valor' => 369,
			'month_id' => 369,
			'data_limite' => '2012-07-25',
			'mes_limite' => 369,
			'dia_limite' => 369
		),
		array(
			'id' => 370,
			'escola_id' => 370,
			'tipopagamento_id' => 370,
			'valor' => 370,
			'month_id' => 370,
			'data_limite' => '2012-07-25',
			'mes_limite' => 370,
			'dia_limite' => 370
		),
		array(
			'id' => 371,
			'escola_id' => 371,
			'tipopagamento_id' => 371,
			'valor' => 371,
			'month_id' => 371,
			'data_limite' => '2012-07-25',
			'mes_limite' => 371,
			'dia_limite' => 371
		),
		array(
			'id' => 372,
			'escola_id' => 372,
			'tipopagamento_id' => 372,
			'valor' => 372,
			'month_id' => 372,
			'data_limite' => '2012-07-25',
			'mes_limite' => 372,
			'dia_limite' => 372
		),
		array(
			'id' => 373,
			'escola_id' => 373,
			'tipopagamento_id' => 373,
			'valor' => 373,
			'month_id' => 373,
			'data_limite' => '2012-07-25',
			'mes_limite' => 373,
			'dia_limite' => 373
		),
		array(
			'id' => 374,
			'escola_id' => 374,
			'tipopagamento_id' => 374,
			'valor' => 374,
			'month_id' => 374,
			'data_limite' => '2012-07-25',
			'mes_limite' => 374,
			'dia_limite' => 374
		),
		array(
			'id' => 375,
			'escola_id' => 375,
			'tipopagamento_id' => 375,
			'valor' => 375,
			'month_id' => 375,
			'data_limite' => '2012-07-25',
			'mes_limite' => 375,
			'dia_limite' => 375
		),
		array(
			'id' => 376,
			'escola_id' => 376,
			'tipopagamento_id' => 376,
			'valor' => 376,
			'month_id' => 376,
			'data_limite' => '2012-07-25',
			'mes_limite' => 376,
			'dia_limite' => 376
		),
		array(
			'id' => 377,
			'escola_id' => 377,
			'tipopagamento_id' => 377,
			'valor' => 377,
			'month_id' => 377,
			'data_limite' => '2012-07-25',
			'mes_limite' => 377,
			'dia_limite' => 377
		),
		array(
			'id' => 378,
			'escola_id' => 378,
			'tipopagamento_id' => 378,
			'valor' => 378,
			'month_id' => 378,
			'data_limite' => '2012-07-25',
			'mes_limite' => 378,
			'dia_limite' => 378
		),
		array(
			'id' => 379,
			'escola_id' => 379,
			'tipopagamento_id' => 379,
			'valor' => 379,
			'month_id' => 379,
			'data_limite' => '2012-07-25',
			'mes_limite' => 379,
			'dia_limite' => 379
		),
		array(
			'id' => 380,
			'escola_id' => 380,
			'tipopagamento_id' => 380,
			'valor' => 380,
			'month_id' => 380,
			'data_limite' => '2012-07-25',
			'mes_limite' => 380,
			'dia_limite' => 380
		),
		array(
			'id' => 381,
			'escola_id' => 381,
			'tipopagamento_id' => 381,
			'valor' => 381,
			'month_id' => 381,
			'data_limite' => '2012-07-25',
			'mes_limite' => 381,
			'dia_limite' => 381
		),
		array(
			'id' => 382,
			'escola_id' => 382,
			'tipopagamento_id' => 382,
			'valor' => 382,
			'month_id' => 382,
			'data_limite' => '2012-07-25',
			'mes_limite' => 382,
			'dia_limite' => 382
		),
		array(
			'id' => 383,
			'escola_id' => 383,
			'tipopagamento_id' => 383,
			'valor' => 383,
			'month_id' => 383,
			'data_limite' => '2012-07-25',
			'mes_limite' => 383,
			'dia_limite' => 383
		),
		array(
			'id' => 384,
			'escola_id' => 384,
			'tipopagamento_id' => 384,
			'valor' => 384,
			'month_id' => 384,
			'data_limite' => '2012-07-25',
			'mes_limite' => 384,
			'dia_limite' => 384
		),
		array(
			'id' => 385,
			'escola_id' => 385,
			'tipopagamento_id' => 385,
			'valor' => 385,
			'month_id' => 385,
			'data_limite' => '2012-07-25',
			'mes_limite' => 385,
			'dia_limite' => 385
		),
		array(
			'id' => 386,
			'escola_id' => 386,
			'tipopagamento_id' => 386,
			'valor' => 386,
			'month_id' => 386,
			'data_limite' => '2012-07-25',
			'mes_limite' => 386,
			'dia_limite' => 386
		),
		array(
			'id' => 387,
			'escola_id' => 387,
			'tipopagamento_id' => 387,
			'valor' => 387,
			'month_id' => 387,
			'data_limite' => '2012-07-25',
			'mes_limite' => 387,
			'dia_limite' => 387
		),
		array(
			'id' => 388,
			'escola_id' => 388,
			'tipopagamento_id' => 388,
			'valor' => 388,
			'month_id' => 388,
			'data_limite' => '2012-07-25',
			'mes_limite' => 388,
			'dia_limite' => 388
		),
		array(
			'id' => 389,
			'escola_id' => 389,
			'tipopagamento_id' => 389,
			'valor' => 389,
			'month_id' => 389,
			'data_limite' => '2012-07-25',
			'mes_limite' => 389,
			'dia_limite' => 389
		),
		array(
			'id' => 390,
			'escola_id' => 390,
			'tipopagamento_id' => 390,
			'valor' => 390,
			'month_id' => 390,
			'data_limite' => '2012-07-25',
			'mes_limite' => 390,
			'dia_limite' => 390
		),
		array(
			'id' => 391,
			'escola_id' => 391,
			'tipopagamento_id' => 391,
			'valor' => 391,
			'month_id' => 391,
			'data_limite' => '2012-07-25',
			'mes_limite' => 391,
			'dia_limite' => 391
		),
		array(
			'id' => 392,
			'escola_id' => 392,
			'tipopagamento_id' => 392,
			'valor' => 392,
			'month_id' => 392,
			'data_limite' => '2012-07-25',
			'mes_limite' => 392,
			'dia_limite' => 392
		),
		array(
			'id' => 393,
			'escola_id' => 393,
			'tipopagamento_id' => 393,
			'valor' => 393,
			'month_id' => 393,
			'data_limite' => '2012-07-25',
			'mes_limite' => 393,
			'dia_limite' => 393
		),
		array(
			'id' => 394,
			'escola_id' => 394,
			'tipopagamento_id' => 394,
			'valor' => 394,
			'month_id' => 394,
			'data_limite' => '2012-07-25',
			'mes_limite' => 394,
			'dia_limite' => 394
		),
		array(
			'id' => 395,
			'escola_id' => 395,
			'tipopagamento_id' => 395,
			'valor' => 395,
			'month_id' => 395,
			'data_limite' => '2012-07-25',
			'mes_limite' => 395,
			'dia_limite' => 395
		),
		array(
			'id' => 396,
			'escola_id' => 396,
			'tipopagamento_id' => 396,
			'valor' => 396,
			'month_id' => 396,
			'data_limite' => '2012-07-25',
			'mes_limite' => 396,
			'dia_limite' => 396
		),
		array(
			'id' => 397,
			'escola_id' => 397,
			'tipopagamento_id' => 397,
			'valor' => 397,
			'month_id' => 397,
			'data_limite' => '2012-07-25',
			'mes_limite' => 397,
			'dia_limite' => 397
		),
		array(
			'id' => 398,
			'escola_id' => 398,
			'tipopagamento_id' => 398,
			'valor' => 398,
			'month_id' => 398,
			'data_limite' => '2012-07-25',
			'mes_limite' => 398,
			'dia_limite' => 398
		),
		array(
			'id' => 399,
			'escola_id' => 399,
			'tipopagamento_id' => 399,
			'valor' => 399,
			'month_id' => 399,
			'data_limite' => '2012-07-25',
			'mes_limite' => 399,
			'dia_limite' => 399
		),
		array(
			'id' => 400,
			'escola_id' => 400,
			'tipopagamento_id' => 400,
			'valor' => 400,
			'month_id' => 400,
			'data_limite' => '2012-07-25',
			'mes_limite' => 400,
			'dia_limite' => 400
		),
		array(
			'id' => 401,
			'escola_id' => 401,
			'tipopagamento_id' => 401,
			'valor' => 401,
			'month_id' => 401,
			'data_limite' => '2012-07-25',
			'mes_limite' => 401,
			'dia_limite' => 401
		),
		array(
			'id' => 402,
			'escola_id' => 402,
			'tipopagamento_id' => 402,
			'valor' => 402,
			'month_id' => 402,
			'data_limite' => '2012-07-25',
			'mes_limite' => 402,
			'dia_limite' => 402
		),
		array(
			'id' => 403,
			'escola_id' => 403,
			'tipopagamento_id' => 403,
			'valor' => 403,
			'month_id' => 403,
			'data_limite' => '2012-07-25',
			'mes_limite' => 403,
			'dia_limite' => 403
		),
		array(
			'id' => 404,
			'escola_id' => 404,
			'tipopagamento_id' => 404,
			'valor' => 404,
			'month_id' => 404,
			'data_limite' => '2012-07-25',
			'mes_limite' => 404,
			'dia_limite' => 404
		),
		array(
			'id' => 405,
			'escola_id' => 405,
			'tipopagamento_id' => 405,
			'valor' => 405,
			'month_id' => 405,
			'data_limite' => '2012-07-25',
			'mes_limite' => 405,
			'dia_limite' => 405
		),
		array(
			'id' => 406,
			'escola_id' => 406,
			'tipopagamento_id' => 406,
			'valor' => 406,
			'month_id' => 406,
			'data_limite' => '2012-07-25',
			'mes_limite' => 406,
			'dia_limite' => 406
		),
		array(
			'id' => 407,
			'escola_id' => 407,
			'tipopagamento_id' => 407,
			'valor' => 407,
			'month_id' => 407,
			'data_limite' => '2012-07-25',
			'mes_limite' => 407,
			'dia_limite' => 407
		),
		array(
			'id' => 408,
			'escola_id' => 408,
			'tipopagamento_id' => 408,
			'valor' => 408,
			'month_id' => 408,
			'data_limite' => '2012-07-25',
			'mes_limite' => 408,
			'dia_limite' => 408
		),
		array(
			'id' => 409,
			'escola_id' => 409,
			'tipopagamento_id' => 409,
			'valor' => 409,
			'month_id' => 409,
			'data_limite' => '2012-07-25',
			'mes_limite' => 409,
			'dia_limite' => 409
		),
		array(
			'id' => 410,
			'escola_id' => 410,
			'tipopagamento_id' => 410,
			'valor' => 410,
			'month_id' => 410,
			'data_limite' => '2012-07-25',
			'mes_limite' => 410,
			'dia_limite' => 410
		),
		array(
			'id' => 411,
			'escola_id' => 411,
			'tipopagamento_id' => 411,
			'valor' => 411,
			'month_id' => 411,
			'data_limite' => '2012-07-25',
			'mes_limite' => 411,
			'dia_limite' => 411
		),
		array(
			'id' => 412,
			'escola_id' => 412,
			'tipopagamento_id' => 412,
			'valor' => 412,
			'month_id' => 412,
			'data_limite' => '2012-07-25',
			'mes_limite' => 412,
			'dia_limite' => 412
		),
		array(
			'id' => 413,
			'escola_id' => 413,
			'tipopagamento_id' => 413,
			'valor' => 413,
			'month_id' => 413,
			'data_limite' => '2012-07-25',
			'mes_limite' => 413,
			'dia_limite' => 413
		),
		array(
			'id' => 414,
			'escola_id' => 414,
			'tipopagamento_id' => 414,
			'valor' => 414,
			'month_id' => 414,
			'data_limite' => '2012-07-25',
			'mes_limite' => 414,
			'dia_limite' => 414
		),
		array(
			'id' => 415,
			'escola_id' => 415,
			'tipopagamento_id' => 415,
			'valor' => 415,
			'month_id' => 415,
			'data_limite' => '2012-07-25',
			'mes_limite' => 415,
			'dia_limite' => 415
		),
		array(
			'id' => 416,
			'escola_id' => 416,
			'tipopagamento_id' => 416,
			'valor' => 416,
			'month_id' => 416,
			'data_limite' => '2012-07-25',
			'mes_limite' => 416,
			'dia_limite' => 416
		),
		array(
			'id' => 417,
			'escola_id' => 417,
			'tipopagamento_id' => 417,
			'valor' => 417,
			'month_id' => 417,
			'data_limite' => '2012-07-25',
			'mes_limite' => 417,
			'dia_limite' => 417
		),
		array(
			'id' => 418,
			'escola_id' => 418,
			'tipopagamento_id' => 418,
			'valor' => 418,
			'month_id' => 418,
			'data_limite' => '2012-07-25',
			'mes_limite' => 418,
			'dia_limite' => 418
		),
		array(
			'id' => 419,
			'escola_id' => 419,
			'tipopagamento_id' => 419,
			'valor' => 419,
			'month_id' => 419,
			'data_limite' => '2012-07-25',
			'mes_limite' => 419,
			'dia_limite' => 419
		),
		array(
			'id' => 420,
			'escola_id' => 420,
			'tipopagamento_id' => 420,
			'valor' => 420,
			'month_id' => 420,
			'data_limite' => '2012-07-25',
			'mes_limite' => 420,
			'dia_limite' => 420
		),
		array(
			'id' => 421,
			'escola_id' => 421,
			'tipopagamento_id' => 421,
			'valor' => 421,
			'month_id' => 421,
			'data_limite' => '2012-07-25',
			'mes_limite' => 421,
			'dia_limite' => 421
		),
		array(
			'id' => 422,
			'escola_id' => 422,
			'tipopagamento_id' => 422,
			'valor' => 422,
			'month_id' => 422,
			'data_limite' => '2012-07-25',
			'mes_limite' => 422,
			'dia_limite' => 422
		),
		array(
			'id' => 423,
			'escola_id' => 423,
			'tipopagamento_id' => 423,
			'valor' => 423,
			'month_id' => 423,
			'data_limite' => '2012-07-25',
			'mes_limite' => 423,
			'dia_limite' => 423
		),
		array(
			'id' => 424,
			'escola_id' => 424,
			'tipopagamento_id' => 424,
			'valor' => 424,
			'month_id' => 424,
			'data_limite' => '2012-07-25',
			'mes_limite' => 424,
			'dia_limite' => 424
		),
		array(
			'id' => 425,
			'escola_id' => 425,
			'tipopagamento_id' => 425,
			'valor' => 425,
			'month_id' => 425,
			'data_limite' => '2012-07-25',
			'mes_limite' => 425,
			'dia_limite' => 425
		),
		array(
			'id' => 426,
			'escola_id' => 426,
			'tipopagamento_id' => 426,
			'valor' => 426,
			'month_id' => 426,
			'data_limite' => '2012-07-25',
			'mes_limite' => 426,
			'dia_limite' => 426
		),
		array(
			'id' => 427,
			'escola_id' => 427,
			'tipopagamento_id' => 427,
			'valor' => 427,
			'month_id' => 427,
			'data_limite' => '2012-07-25',
			'mes_limite' => 427,
			'dia_limite' => 427
		),
		array(
			'id' => 428,
			'escola_id' => 428,
			'tipopagamento_id' => 428,
			'valor' => 428,
			'month_id' => 428,
			'data_limite' => '2012-07-25',
			'mes_limite' => 428,
			'dia_limite' => 428
		),
		array(
			'id' => 429,
			'escola_id' => 429,
			'tipopagamento_id' => 429,
			'valor' => 429,
			'month_id' => 429,
			'data_limite' => '2012-07-25',
			'mes_limite' => 429,
			'dia_limite' => 429
		),
		array(
			'id' => 430,
			'escola_id' => 430,
			'tipopagamento_id' => 430,
			'valor' => 430,
			'month_id' => 430,
			'data_limite' => '2012-07-25',
			'mes_limite' => 430,
			'dia_limite' => 430
		),
		array(
			'id' => 431,
			'escola_id' => 431,
			'tipopagamento_id' => 431,
			'valor' => 431,
			'month_id' => 431,
			'data_limite' => '2012-07-25',
			'mes_limite' => 431,
			'dia_limite' => 431
		),
		array(
			'id' => 432,
			'escola_id' => 432,
			'tipopagamento_id' => 432,
			'valor' => 432,
			'month_id' => 432,
			'data_limite' => '2012-07-25',
			'mes_limite' => 432,
			'dia_limite' => 432
		),
		array(
			'id' => 433,
			'escola_id' => 433,
			'tipopagamento_id' => 433,
			'valor' => 433,
			'month_id' => 433,
			'data_limite' => '2012-07-25',
			'mes_limite' => 433,
			'dia_limite' => 433
		),
		array(
			'id' => 434,
			'escola_id' => 434,
			'tipopagamento_id' => 434,
			'valor' => 434,
			'month_id' => 434,
			'data_limite' => '2012-07-25',
			'mes_limite' => 434,
			'dia_limite' => 434
		),
		array(
			'id' => 435,
			'escola_id' => 435,
			'tipopagamento_id' => 435,
			'valor' => 435,
			'month_id' => 435,
			'data_limite' => '2012-07-25',
			'mes_limite' => 435,
			'dia_limite' => 435
		),
		array(
			'id' => 436,
			'escola_id' => 436,
			'tipopagamento_id' => 436,
			'valor' => 436,
			'month_id' => 436,
			'data_limite' => '2012-07-25',
			'mes_limite' => 436,
			'dia_limite' => 436
		),
		array(
			'id' => 437,
			'escola_id' => 437,
			'tipopagamento_id' => 437,
			'valor' => 437,
			'month_id' => 437,
			'data_limite' => '2012-07-25',
			'mes_limite' => 437,
			'dia_limite' => 437
		),
		array(
			'id' => 438,
			'escola_id' => 438,
			'tipopagamento_id' => 438,
			'valor' => 438,
			'month_id' => 438,
			'data_limite' => '2012-07-25',
			'mes_limite' => 438,
			'dia_limite' => 438
		),
		array(
			'id' => 439,
			'escola_id' => 439,
			'tipopagamento_id' => 439,
			'valor' => 439,
			'month_id' => 439,
			'data_limite' => '2012-07-25',
			'mes_limite' => 439,
			'dia_limite' => 439
		),
		array(
			'id' => 440,
			'escola_id' => 440,
			'tipopagamento_id' => 440,
			'valor' => 440,
			'month_id' => 440,
			'data_limite' => '2012-07-25',
			'mes_limite' => 440,
			'dia_limite' => 440
		),
		array(
			'id' => 441,
			'escola_id' => 441,
			'tipopagamento_id' => 441,
			'valor' => 441,
			'month_id' => 441,
			'data_limite' => '2012-07-25',
			'mes_limite' => 441,
			'dia_limite' => 441
		),
		array(
			'id' => 442,
			'escola_id' => 442,
			'tipopagamento_id' => 442,
			'valor' => 442,
			'month_id' => 442,
			'data_limite' => '2012-07-25',
			'mes_limite' => 442,
			'dia_limite' => 442
		),
		array(
			'id' => 443,
			'escola_id' => 443,
			'tipopagamento_id' => 443,
			'valor' => 443,
			'month_id' => 443,
			'data_limite' => '2012-07-25',
			'mes_limite' => 443,
			'dia_limite' => 443
		),
		array(
			'id' => 444,
			'escola_id' => 444,
			'tipopagamento_id' => 444,
			'valor' => 444,
			'month_id' => 444,
			'data_limite' => '2012-07-25',
			'mes_limite' => 444,
			'dia_limite' => 444
		),
		array(
			'id' => 445,
			'escola_id' => 445,
			'tipopagamento_id' => 445,
			'valor' => 445,
			'month_id' => 445,
			'data_limite' => '2012-07-25',
			'mes_limite' => 445,
			'dia_limite' => 445
		),
		array(
			'id' => 446,
			'escola_id' => 446,
			'tipopagamento_id' => 446,
			'valor' => 446,
			'month_id' => 446,
			'data_limite' => '2012-07-25',
			'mes_limite' => 446,
			'dia_limite' => 446
		),
		array(
			'id' => 447,
			'escola_id' => 447,
			'tipopagamento_id' => 447,
			'valor' => 447,
			'month_id' => 447,
			'data_limite' => '2012-07-25',
			'mes_limite' => 447,
			'dia_limite' => 447
		),
		array(
			'id' => 448,
			'escola_id' => 448,
			'tipopagamento_id' => 448,
			'valor' => 448,
			'month_id' => 448,
			'data_limite' => '2012-07-25',
			'mes_limite' => 448,
			'dia_limite' => 448
		),
		array(
			'id' => 449,
			'escola_id' => 449,
			'tipopagamento_id' => 449,
			'valor' => 449,
			'month_id' => 449,
			'data_limite' => '2012-07-25',
			'mes_limite' => 449,
			'dia_limite' => 449
		),
		array(
			'id' => 450,
			'escola_id' => 450,
			'tipopagamento_id' => 450,
			'valor' => 450,
			'month_id' => 450,
			'data_limite' => '2012-07-25',
			'mes_limite' => 450,
			'dia_limite' => 450
		),
		array(
			'id' => 451,
			'escola_id' => 451,
			'tipopagamento_id' => 451,
			'valor' => 451,
			'month_id' => 451,
			'data_limite' => '2012-07-25',
			'mes_limite' => 451,
			'dia_limite' => 451
		),
		array(
			'id' => 452,
			'escola_id' => 452,
			'tipopagamento_id' => 452,
			'valor' => 452,
			'month_id' => 452,
			'data_limite' => '2012-07-25',
			'mes_limite' => 452,
			'dia_limite' => 452
		),
		array(
			'id' => 453,
			'escola_id' => 453,
			'tipopagamento_id' => 453,
			'valor' => 453,
			'month_id' => 453,
			'data_limite' => '2012-07-25',
			'mes_limite' => 453,
			'dia_limite' => 453
		),
		array(
			'id' => 454,
			'escola_id' => 454,
			'tipopagamento_id' => 454,
			'valor' => 454,
			'month_id' => 454,
			'data_limite' => '2012-07-25',
			'mes_limite' => 454,
			'dia_limite' => 454
		),
		array(
			'id' => 455,
			'escola_id' => 455,
			'tipopagamento_id' => 455,
			'valor' => 455,
			'month_id' => 455,
			'data_limite' => '2012-07-25',
			'mes_limite' => 455,
			'dia_limite' => 455
		),
		array(
			'id' => 456,
			'escola_id' => 456,
			'tipopagamento_id' => 456,
			'valor' => 456,
			'month_id' => 456,
			'data_limite' => '2012-07-25',
			'mes_limite' => 456,
			'dia_limite' => 456
		),
		array(
			'id' => 457,
			'escola_id' => 457,
			'tipopagamento_id' => 457,
			'valor' => 457,
			'month_id' => 457,
			'data_limite' => '2012-07-25',
			'mes_limite' => 457,
			'dia_limite' => 457
		),
		array(
			'id' => 458,
			'escola_id' => 458,
			'tipopagamento_id' => 458,
			'valor' => 458,
			'month_id' => 458,
			'data_limite' => '2012-07-25',
			'mes_limite' => 458,
			'dia_limite' => 458
		),
		array(
			'id' => 459,
			'escola_id' => 459,
			'tipopagamento_id' => 459,
			'valor' => 459,
			'month_id' => 459,
			'data_limite' => '2012-07-25',
			'mes_limite' => 459,
			'dia_limite' => 459
		),
		array(
			'id' => 460,
			'escola_id' => 460,
			'tipopagamento_id' => 460,
			'valor' => 460,
			'month_id' => 460,
			'data_limite' => '2012-07-25',
			'mes_limite' => 460,
			'dia_limite' => 460
		),
		array(
			'id' => 461,
			'escola_id' => 461,
			'tipopagamento_id' => 461,
			'valor' => 461,
			'month_id' => 461,
			'data_limite' => '2012-07-25',
			'mes_limite' => 461,
			'dia_limite' => 461
		),
		array(
			'id' => 462,
			'escola_id' => 462,
			'tipopagamento_id' => 462,
			'valor' => 462,
			'month_id' => 462,
			'data_limite' => '2012-07-25',
			'mes_limite' => 462,
			'dia_limite' => 462
		),
		array(
			'id' => 463,
			'escola_id' => 463,
			'tipopagamento_id' => 463,
			'valor' => 463,
			'month_id' => 463,
			'data_limite' => '2012-07-25',
			'mes_limite' => 463,
			'dia_limite' => 463
		),
		array(
			'id' => 464,
			'escola_id' => 464,
			'tipopagamento_id' => 464,
			'valor' => 464,
			'month_id' => 464,
			'data_limite' => '2012-07-25',
			'mes_limite' => 464,
			'dia_limite' => 464
		),
		array(
			'id' => 465,
			'escola_id' => 465,
			'tipopagamento_id' => 465,
			'valor' => 465,
			'month_id' => 465,
			'data_limite' => '2012-07-25',
			'mes_limite' => 465,
			'dia_limite' => 465
		),
		array(
			'id' => 466,
			'escola_id' => 466,
			'tipopagamento_id' => 466,
			'valor' => 466,
			'month_id' => 466,
			'data_limite' => '2012-07-25',
			'mes_limite' => 466,
			'dia_limite' => 466
		),
		array(
			'id' => 467,
			'escola_id' => 467,
			'tipopagamento_id' => 467,
			'valor' => 467,
			'month_id' => 467,
			'data_limite' => '2012-07-25',
			'mes_limite' => 467,
			'dia_limite' => 467
		),
		array(
			'id' => 468,
			'escola_id' => 468,
			'tipopagamento_id' => 468,
			'valor' => 468,
			'month_id' => 468,
			'data_limite' => '2012-07-25',
			'mes_limite' => 468,
			'dia_limite' => 468
		),
		array(
			'id' => 469,
			'escola_id' => 469,
			'tipopagamento_id' => 469,
			'valor' => 469,
			'month_id' => 469,
			'data_limite' => '2012-07-25',
			'mes_limite' => 469,
			'dia_limite' => 469
		),
		array(
			'id' => 470,
			'escola_id' => 470,
			'tipopagamento_id' => 470,
			'valor' => 470,
			'month_id' => 470,
			'data_limite' => '2012-07-25',
			'mes_limite' => 470,
			'dia_limite' => 470
		),
		array(
			'id' => 471,
			'escola_id' => 471,
			'tipopagamento_id' => 471,
			'valor' => 471,
			'month_id' => 471,
			'data_limite' => '2012-07-25',
			'mes_limite' => 471,
			'dia_limite' => 471
		),
		array(
			'id' => 472,
			'escola_id' => 472,
			'tipopagamento_id' => 472,
			'valor' => 472,
			'month_id' => 472,
			'data_limite' => '2012-07-25',
			'mes_limite' => 472,
			'dia_limite' => 472
		),
		array(
			'id' => 473,
			'escola_id' => 473,
			'tipopagamento_id' => 473,
			'valor' => 473,
			'month_id' => 473,
			'data_limite' => '2012-07-25',
			'mes_limite' => 473,
			'dia_limite' => 473
		),
		array(
			'id' => 474,
			'escola_id' => 474,
			'tipopagamento_id' => 474,
			'valor' => 474,
			'month_id' => 474,
			'data_limite' => '2012-07-25',
			'mes_limite' => 474,
			'dia_limite' => 474
		),
		array(
			'id' => 475,
			'escola_id' => 475,
			'tipopagamento_id' => 475,
			'valor' => 475,
			'month_id' => 475,
			'data_limite' => '2012-07-25',
			'mes_limite' => 475,
			'dia_limite' => 475
		),
		array(
			'id' => 476,
			'escola_id' => 476,
			'tipopagamento_id' => 476,
			'valor' => 476,
			'month_id' => 476,
			'data_limite' => '2012-07-25',
			'mes_limite' => 476,
			'dia_limite' => 476
		),
		array(
			'id' => 477,
			'escola_id' => 477,
			'tipopagamento_id' => 477,
			'valor' => 477,
			'month_id' => 477,
			'data_limite' => '2012-07-25',
			'mes_limite' => 477,
			'dia_limite' => 477
		),
		array(
			'id' => 478,
			'escola_id' => 478,
			'tipopagamento_id' => 478,
			'valor' => 478,
			'month_id' => 478,
			'data_limite' => '2012-07-25',
			'mes_limite' => 478,
			'dia_limite' => 478
		),
		array(
			'id' => 479,
			'escola_id' => 479,
			'tipopagamento_id' => 479,
			'valor' => 479,
			'month_id' => 479,
			'data_limite' => '2012-07-25',
			'mes_limite' => 479,
			'dia_limite' => 479
		),
		array(
			'id' => 480,
			'escola_id' => 480,
			'tipopagamento_id' => 480,
			'valor' => 480,
			'month_id' => 480,
			'data_limite' => '2012-07-25',
			'mes_limite' => 480,
			'dia_limite' => 480
		),
		array(
			'id' => 481,
			'escola_id' => 481,
			'tipopagamento_id' => 481,
			'valor' => 481,
			'month_id' => 481,
			'data_limite' => '2012-07-25',
			'mes_limite' => 481,
			'dia_limite' => 481
		),
		array(
			'id' => 482,
			'escola_id' => 482,
			'tipopagamento_id' => 482,
			'valor' => 482,
			'month_id' => 482,
			'data_limite' => '2012-07-25',
			'mes_limite' => 482,
			'dia_limite' => 482
		),
		array(
			'id' => 483,
			'escola_id' => 483,
			'tipopagamento_id' => 483,
			'valor' => 483,
			'month_id' => 483,
			'data_limite' => '2012-07-25',
			'mes_limite' => 483,
			'dia_limite' => 483
		),
		array(
			'id' => 484,
			'escola_id' => 484,
			'tipopagamento_id' => 484,
			'valor' => 484,
			'month_id' => 484,
			'data_limite' => '2012-07-25',
			'mes_limite' => 484,
			'dia_limite' => 484
		),
		array(
			'id' => 485,
			'escola_id' => 485,
			'tipopagamento_id' => 485,
			'valor' => 485,
			'month_id' => 485,
			'data_limite' => '2012-07-25',
			'mes_limite' => 485,
			'dia_limite' => 485
		),
		array(
			'id' => 486,
			'escola_id' => 486,
			'tipopagamento_id' => 486,
			'valor' => 486,
			'month_id' => 486,
			'data_limite' => '2012-07-25',
			'mes_limite' => 486,
			'dia_limite' => 486
		),
		array(
			'id' => 487,
			'escola_id' => 487,
			'tipopagamento_id' => 487,
			'valor' => 487,
			'month_id' => 487,
			'data_limite' => '2012-07-25',
			'mes_limite' => 487,
			'dia_limite' => 487
		),
		array(
			'id' => 488,
			'escola_id' => 488,
			'tipopagamento_id' => 488,
			'valor' => 488,
			'month_id' => 488,
			'data_limite' => '2012-07-25',
			'mes_limite' => 488,
			'dia_limite' => 488
		),
		array(
			'id' => 489,
			'escola_id' => 489,
			'tipopagamento_id' => 489,
			'valor' => 489,
			'month_id' => 489,
			'data_limite' => '2012-07-25',
			'mes_limite' => 489,
			'dia_limite' => 489
		),
		array(
			'id' => 490,
			'escola_id' => 490,
			'tipopagamento_id' => 490,
			'valor' => 490,
			'month_id' => 490,
			'data_limite' => '2012-07-25',
			'mes_limite' => 490,
			'dia_limite' => 490
		),
		array(
			'id' => 491,
			'escola_id' => 491,
			'tipopagamento_id' => 491,
			'valor' => 491,
			'month_id' => 491,
			'data_limite' => '2012-07-25',
			'mes_limite' => 491,
			'dia_limite' => 491
		),
		array(
			'id' => 492,
			'escola_id' => 492,
			'tipopagamento_id' => 492,
			'valor' => 492,
			'month_id' => 492,
			'data_limite' => '2012-07-25',
			'mes_limite' => 492,
			'dia_limite' => 492
		),
		array(
			'id' => 493,
			'escola_id' => 493,
			'tipopagamento_id' => 493,
			'valor' => 493,
			'month_id' => 493,
			'data_limite' => '2012-07-25',
			'mes_limite' => 493,
			'dia_limite' => 493
		),
		array(
			'id' => 494,
			'escola_id' => 494,
			'tipopagamento_id' => 494,
			'valor' => 494,
			'month_id' => 494,
			'data_limite' => '2012-07-25',
			'mes_limite' => 494,
			'dia_limite' => 494
		),
		array(
			'id' => 495,
			'escola_id' => 495,
			'tipopagamento_id' => 495,
			'valor' => 495,
			'month_id' => 495,
			'data_limite' => '2012-07-25',
			'mes_limite' => 495,
			'dia_limite' => 495
		),
		array(
			'id' => 496,
			'escola_id' => 496,
			'tipopagamento_id' => 496,
			'valor' => 496,
			'month_id' => 496,
			'data_limite' => '2012-07-25',
			'mes_limite' => 496,
			'dia_limite' => 496
		),
		array(
			'id' => 497,
			'escola_id' => 497,
			'tipopagamento_id' => 497,
			'valor' => 497,
			'month_id' => 497,
			'data_limite' => '2012-07-25',
			'mes_limite' => 497,
			'dia_limite' => 497
		),
		array(
			'id' => 498,
			'escola_id' => 498,
			'tipopagamento_id' => 498,
			'valor' => 498,
			'month_id' => 498,
			'data_limite' => '2012-07-25',
			'mes_limite' => 498,
			'dia_limite' => 498
		),
		array(
			'id' => 499,
			'escola_id' => 499,
			'tipopagamento_id' => 499,
			'valor' => 499,
			'month_id' => 499,
			'data_limite' => '2012-07-25',
			'mes_limite' => 499,
			'dia_limite' => 499
		),
		array(
			'id' => 500,
			'escola_id' => 500,
			'tipopagamento_id' => 500,
			'valor' => 500,
			'month_id' => 500,
			'data_limite' => '2012-07-25',
			'mes_limite' => 500,
			'dia_limite' => 500
		),
		array(
			'id' => 501,
			'escola_id' => 501,
			'tipopagamento_id' => 501,
			'valor' => 501,
			'month_id' => 501,
			'data_limite' => '2012-07-25',
			'mes_limite' => 501,
			'dia_limite' => 501
		),
		array(
			'id' => 502,
			'escola_id' => 502,
			'tipopagamento_id' => 502,
			'valor' => 502,
			'month_id' => 502,
			'data_limite' => '2012-07-25',
			'mes_limite' => 502,
			'dia_limite' => 502
		),
		array(
			'id' => 503,
			'escola_id' => 503,
			'tipopagamento_id' => 503,
			'valor' => 503,
			'month_id' => 503,
			'data_limite' => '2012-07-25',
			'mes_limite' => 503,
			'dia_limite' => 503
		),
		array(
			'id' => 504,
			'escola_id' => 504,
			'tipopagamento_id' => 504,
			'valor' => 504,
			'month_id' => 504,
			'data_limite' => '2012-07-25',
			'mes_limite' => 504,
			'dia_limite' => 504
		),
		array(
			'id' => 505,
			'escola_id' => 505,
			'tipopagamento_id' => 505,
			'valor' => 505,
			'month_id' => 505,
			'data_limite' => '2012-07-25',
			'mes_limite' => 505,
			'dia_limite' => 505
		),
		array(
			'id' => 506,
			'escola_id' => 506,
			'tipopagamento_id' => 506,
			'valor' => 506,
			'month_id' => 506,
			'data_limite' => '2012-07-25',
			'mes_limite' => 506,
			'dia_limite' => 506
		),
		array(
			'id' => 507,
			'escola_id' => 507,
			'tipopagamento_id' => 507,
			'valor' => 507,
			'month_id' => 507,
			'data_limite' => '2012-07-25',
			'mes_limite' => 507,
			'dia_limite' => 507
		),
		array(
			'id' => 508,
			'escola_id' => 508,
			'tipopagamento_id' => 508,
			'valor' => 508,
			'month_id' => 508,
			'data_limite' => '2012-07-25',
			'mes_limite' => 508,
			'dia_limite' => 508
		),
		array(
			'id' => 509,
			'escola_id' => 509,
			'tipopagamento_id' => 509,
			'valor' => 509,
			'month_id' => 509,
			'data_limite' => '2012-07-25',
			'mes_limite' => 509,
			'dia_limite' => 509
		),
		array(
			'id' => 510,
			'escola_id' => 510,
			'tipopagamento_id' => 510,
			'valor' => 510,
			'month_id' => 510,
			'data_limite' => '2012-07-25',
			'mes_limite' => 510,
			'dia_limite' => 510
		),
		array(
			'id' => 511,
			'escola_id' => 511,
			'tipopagamento_id' => 511,
			'valor' => 511,
			'month_id' => 511,
			'data_limite' => '2012-07-25',
			'mes_limite' => 511,
			'dia_limite' => 511
		),
		array(
			'id' => 512,
			'escola_id' => 512,
			'tipopagamento_id' => 512,
			'valor' => 512,
			'month_id' => 512,
			'data_limite' => '2012-07-25',
			'mes_limite' => 512,
			'dia_limite' => 512
		),
		array(
			'id' => 513,
			'escola_id' => 513,
			'tipopagamento_id' => 513,
			'valor' => 513,
			'month_id' => 513,
			'data_limite' => '2012-07-25',
			'mes_limite' => 513,
			'dia_limite' => 513
		),
		array(
			'id' => 514,
			'escola_id' => 514,
			'tipopagamento_id' => 514,
			'valor' => 514,
			'month_id' => 514,
			'data_limite' => '2012-07-25',
			'mes_limite' => 514,
			'dia_limite' => 514
		),
		array(
			'id' => 515,
			'escola_id' => 515,
			'tipopagamento_id' => 515,
			'valor' => 515,
			'month_id' => 515,
			'data_limite' => '2012-07-25',
			'mes_limite' => 515,
			'dia_limite' => 515
		),
		array(
			'id' => 516,
			'escola_id' => 516,
			'tipopagamento_id' => 516,
			'valor' => 516,
			'month_id' => 516,
			'data_limite' => '2012-07-25',
			'mes_limite' => 516,
			'dia_limite' => 516
		),
		array(
			'id' => 517,
			'escola_id' => 517,
			'tipopagamento_id' => 517,
			'valor' => 517,
			'month_id' => 517,
			'data_limite' => '2012-07-25',
			'mes_limite' => 517,
			'dia_limite' => 517
		),
		array(
			'id' => 518,
			'escola_id' => 518,
			'tipopagamento_id' => 518,
			'valor' => 518,
			'month_id' => 518,
			'data_limite' => '2012-07-25',
			'mes_limite' => 518,
			'dia_limite' => 518
		),
		array(
			'id' => 519,
			'escola_id' => 519,
			'tipopagamento_id' => 519,
			'valor' => 519,
			'month_id' => 519,
			'data_limite' => '2012-07-25',
			'mes_limite' => 519,
			'dia_limite' => 519
		),
		array(
			'id' => 520,
			'escola_id' => 520,
			'tipopagamento_id' => 520,
			'valor' => 520,
			'month_id' => 520,
			'data_limite' => '2012-07-25',
			'mes_limite' => 520,
			'dia_limite' => 520
		),
		array(
			'id' => 521,
			'escola_id' => 521,
			'tipopagamento_id' => 521,
			'valor' => 521,
			'month_id' => 521,
			'data_limite' => '2012-07-25',
			'mes_limite' => 521,
			'dia_limite' => 521
		),
		array(
			'id' => 522,
			'escola_id' => 522,
			'tipopagamento_id' => 522,
			'valor' => 522,
			'month_id' => 522,
			'data_limite' => '2012-07-25',
			'mes_limite' => 522,
			'dia_limite' => 522
		),
		array(
			'id' => 523,
			'escola_id' => 523,
			'tipopagamento_id' => 523,
			'valor' => 523,
			'month_id' => 523,
			'data_limite' => '2012-07-25',
			'mes_limite' => 523,
			'dia_limite' => 523
		),
		array(
			'id' => 524,
			'escola_id' => 524,
			'tipopagamento_id' => 524,
			'valor' => 524,
			'month_id' => 524,
			'data_limite' => '2012-07-25',
			'mes_limite' => 524,
			'dia_limite' => 524
		),
		array(
			'id' => 525,
			'escola_id' => 525,
			'tipopagamento_id' => 525,
			'valor' => 525,
			'month_id' => 525,
			'data_limite' => '2012-07-25',
			'mes_limite' => 525,
			'dia_limite' => 525
		),
		array(
			'id' => 526,
			'escola_id' => 526,
			'tipopagamento_id' => 526,
			'valor' => 526,
			'month_id' => 526,
			'data_limite' => '2012-07-25',
			'mes_limite' => 526,
			'dia_limite' => 526
		),
		array(
			'id' => 527,
			'escola_id' => 527,
			'tipopagamento_id' => 527,
			'valor' => 527,
			'month_id' => 527,
			'data_limite' => '2012-07-25',
			'mes_limite' => 527,
			'dia_limite' => 527
		),
		array(
			'id' => 528,
			'escola_id' => 528,
			'tipopagamento_id' => 528,
			'valor' => 528,
			'month_id' => 528,
			'data_limite' => '2012-07-25',
			'mes_limite' => 528,
			'dia_limite' => 528
		),
		array(
			'id' => 529,
			'escola_id' => 529,
			'tipopagamento_id' => 529,
			'valor' => 529,
			'month_id' => 529,
			'data_limite' => '2012-07-25',
			'mes_limite' => 529,
			'dia_limite' => 529
		),
		array(
			'id' => 530,
			'escola_id' => 530,
			'tipopagamento_id' => 530,
			'valor' => 530,
			'month_id' => 530,
			'data_limite' => '2012-07-25',
			'mes_limite' => 530,
			'dia_limite' => 530
		),
		array(
			'id' => 531,
			'escola_id' => 531,
			'tipopagamento_id' => 531,
			'valor' => 531,
			'month_id' => 531,
			'data_limite' => '2012-07-25',
			'mes_limite' => 531,
			'dia_limite' => 531
		),
		array(
			'id' => 532,
			'escola_id' => 532,
			'tipopagamento_id' => 532,
			'valor' => 532,
			'month_id' => 532,
			'data_limite' => '2012-07-25',
			'mes_limite' => 532,
			'dia_limite' => 532
		),
		array(
			'id' => 533,
			'escola_id' => 533,
			'tipopagamento_id' => 533,
			'valor' => 533,
			'month_id' => 533,
			'data_limite' => '2012-07-25',
			'mes_limite' => 533,
			'dia_limite' => 533
		),
		array(
			'id' => 534,
			'escola_id' => 534,
			'tipopagamento_id' => 534,
			'valor' => 534,
			'month_id' => 534,
			'data_limite' => '2012-07-25',
			'mes_limite' => 534,
			'dia_limite' => 534
		),
		array(
			'id' => 535,
			'escola_id' => 535,
			'tipopagamento_id' => 535,
			'valor' => 535,
			'month_id' => 535,
			'data_limite' => '2012-07-25',
			'mes_limite' => 535,
			'dia_limite' => 535
		),
		array(
			'id' => 536,
			'escola_id' => 536,
			'tipopagamento_id' => 536,
			'valor' => 536,
			'month_id' => 536,
			'data_limite' => '2012-07-25',
			'mes_limite' => 536,
			'dia_limite' => 536
		),
		array(
			'id' => 537,
			'escola_id' => 537,
			'tipopagamento_id' => 537,
			'valor' => 537,
			'month_id' => 537,
			'data_limite' => '2012-07-25',
			'mes_limite' => 537,
			'dia_limite' => 537
		),
		array(
			'id' => 538,
			'escola_id' => 538,
			'tipopagamento_id' => 538,
			'valor' => 538,
			'month_id' => 538,
			'data_limite' => '2012-07-25',
			'mes_limite' => 538,
			'dia_limite' => 538
		),
		array(
			'id' => 539,
			'escola_id' => 539,
			'tipopagamento_id' => 539,
			'valor' => 539,
			'month_id' => 539,
			'data_limite' => '2012-07-25',
			'mes_limite' => 539,
			'dia_limite' => 539
		),
		array(
			'id' => 540,
			'escola_id' => 540,
			'tipopagamento_id' => 540,
			'valor' => 540,
			'month_id' => 540,
			'data_limite' => '2012-07-25',
			'mes_limite' => 540,
			'dia_limite' => 540
		),
		array(
			'id' => 541,
			'escola_id' => 541,
			'tipopagamento_id' => 541,
			'valor' => 541,
			'month_id' => 541,
			'data_limite' => '2012-07-25',
			'mes_limite' => 541,
			'dia_limite' => 541
		),
		array(
			'id' => 542,
			'escola_id' => 542,
			'tipopagamento_id' => 542,
			'valor' => 542,
			'month_id' => 542,
			'data_limite' => '2012-07-25',
			'mes_limite' => 542,
			'dia_limite' => 542
		),
		array(
			'id' => 543,
			'escola_id' => 543,
			'tipopagamento_id' => 543,
			'valor' => 543,
			'month_id' => 543,
			'data_limite' => '2012-07-25',
			'mes_limite' => 543,
			'dia_limite' => 543
		),
		array(
			'id' => 544,
			'escola_id' => 544,
			'tipopagamento_id' => 544,
			'valor' => 544,
			'month_id' => 544,
			'data_limite' => '2012-07-25',
			'mes_limite' => 544,
			'dia_limite' => 544
		),
		array(
			'id' => 545,
			'escola_id' => 545,
			'tipopagamento_id' => 545,
			'valor' => 545,
			'month_id' => 545,
			'data_limite' => '2012-07-25',
			'mes_limite' => 545,
			'dia_limite' => 545
		),
		array(
			'id' => 546,
			'escola_id' => 546,
			'tipopagamento_id' => 546,
			'valor' => 546,
			'month_id' => 546,
			'data_limite' => '2012-07-25',
			'mes_limite' => 546,
			'dia_limite' => 546
		),
		array(
			'id' => 547,
			'escola_id' => 547,
			'tipopagamento_id' => 547,
			'valor' => 547,
			'month_id' => 547,
			'data_limite' => '2012-07-25',
			'mes_limite' => 547,
			'dia_limite' => 547
		),
		array(
			'id' => 548,
			'escola_id' => 548,
			'tipopagamento_id' => 548,
			'valor' => 548,
			'month_id' => 548,
			'data_limite' => '2012-07-25',
			'mes_limite' => 548,
			'dia_limite' => 548
		),
		array(
			'id' => 549,
			'escola_id' => 549,
			'tipopagamento_id' => 549,
			'valor' => 549,
			'month_id' => 549,
			'data_limite' => '2012-07-25',
			'mes_limite' => 549,
			'dia_limite' => 549
		),
		array(
			'id' => 550,
			'escola_id' => 550,
			'tipopagamento_id' => 550,
			'valor' => 550,
			'month_id' => 550,
			'data_limite' => '2012-07-25',
			'mes_limite' => 550,
			'dia_limite' => 550
		),
		array(
			'id' => 551,
			'escola_id' => 551,
			'tipopagamento_id' => 551,
			'valor' => 551,
			'month_id' => 551,
			'data_limite' => '2012-07-25',
			'mes_limite' => 551,
			'dia_limite' => 551
		),
		array(
			'id' => 552,
			'escola_id' => 552,
			'tipopagamento_id' => 552,
			'valor' => 552,
			'month_id' => 552,
			'data_limite' => '2012-07-25',
			'mes_limite' => 552,
			'dia_limite' => 552
		),
		array(
			'id' => 553,
			'escola_id' => 553,
			'tipopagamento_id' => 553,
			'valor' => 553,
			'month_id' => 553,
			'data_limite' => '2012-07-25',
			'mes_limite' => 553,
			'dia_limite' => 553
		),
		array(
			'id' => 554,
			'escola_id' => 554,
			'tipopagamento_id' => 554,
			'valor' => 554,
			'month_id' => 554,
			'data_limite' => '2012-07-25',
			'mes_limite' => 554,
			'dia_limite' => 554
		),
		array(
			'id' => 555,
			'escola_id' => 555,
			'tipopagamento_id' => 555,
			'valor' => 555,
			'month_id' => 555,
			'data_limite' => '2012-07-25',
			'mes_limite' => 555,
			'dia_limite' => 555
		),
		array(
			'id' => 556,
			'escola_id' => 556,
			'tipopagamento_id' => 556,
			'valor' => 556,
			'month_id' => 556,
			'data_limite' => '2012-07-25',
			'mes_limite' => 556,
			'dia_limite' => 556
		),
		array(
			'id' => 557,
			'escola_id' => 557,
			'tipopagamento_id' => 557,
			'valor' => 557,
			'month_id' => 557,
			'data_limite' => '2012-07-25',
			'mes_limite' => 557,
			'dia_limite' => 557
		),
		array(
			'id' => 558,
			'escola_id' => 558,
			'tipopagamento_id' => 558,
			'valor' => 558,
			'month_id' => 558,
			'data_limite' => '2012-07-25',
			'mes_limite' => 558,
			'dia_limite' => 558
		),
		array(
			'id' => 559,
			'escola_id' => 559,
			'tipopagamento_id' => 559,
			'valor' => 559,
			'month_id' => 559,
			'data_limite' => '2012-07-25',
			'mes_limite' => 559,
			'dia_limite' => 559
		),
		array(
			'id' => 560,
			'escola_id' => 560,
			'tipopagamento_id' => 560,
			'valor' => 560,
			'month_id' => 560,
			'data_limite' => '2012-07-25',
			'mes_limite' => 560,
			'dia_limite' => 560
		),
		array(
			'id' => 561,
			'escola_id' => 561,
			'tipopagamento_id' => 561,
			'valor' => 561,
			'month_id' => 561,
			'data_limite' => '2012-07-25',
			'mes_limite' => 561,
			'dia_limite' => 561
		),
		array(
			'id' => 562,
			'escola_id' => 562,
			'tipopagamento_id' => 562,
			'valor' => 562,
			'month_id' => 562,
			'data_limite' => '2012-07-25',
			'mes_limite' => 562,
			'dia_limite' => 562
		),
		array(
			'id' => 563,
			'escola_id' => 563,
			'tipopagamento_id' => 563,
			'valor' => 563,
			'month_id' => 563,
			'data_limite' => '2012-07-25',
			'mes_limite' => 563,
			'dia_limite' => 563
		),
		array(
			'id' => 564,
			'escola_id' => 564,
			'tipopagamento_id' => 564,
			'valor' => 564,
			'month_id' => 564,
			'data_limite' => '2012-07-25',
			'mes_limite' => 564,
			'dia_limite' => 564
		),
		array(
			'id' => 565,
			'escola_id' => 565,
			'tipopagamento_id' => 565,
			'valor' => 565,
			'month_id' => 565,
			'data_limite' => '2012-07-25',
			'mes_limite' => 565,
			'dia_limite' => 565
		),
		array(
			'id' => 566,
			'escola_id' => 566,
			'tipopagamento_id' => 566,
			'valor' => 566,
			'month_id' => 566,
			'data_limite' => '2012-07-25',
			'mes_limite' => 566,
			'dia_limite' => 566
		),
		array(
			'id' => 567,
			'escola_id' => 567,
			'tipopagamento_id' => 567,
			'valor' => 567,
			'month_id' => 567,
			'data_limite' => '2012-07-25',
			'mes_limite' => 567,
			'dia_limite' => 567
		),
		array(
			'id' => 568,
			'escola_id' => 568,
			'tipopagamento_id' => 568,
			'valor' => 568,
			'month_id' => 568,
			'data_limite' => '2012-07-25',
			'mes_limite' => 568,
			'dia_limite' => 568
		),
		array(
			'id' => 569,
			'escola_id' => 569,
			'tipopagamento_id' => 569,
			'valor' => 569,
			'month_id' => 569,
			'data_limite' => '2012-07-25',
			'mes_limite' => 569,
			'dia_limite' => 569
		),
		array(
			'id' => 570,
			'escola_id' => 570,
			'tipopagamento_id' => 570,
			'valor' => 570,
			'month_id' => 570,
			'data_limite' => '2012-07-25',
			'mes_limite' => 570,
			'dia_limite' => 570
		),
		array(
			'id' => 571,
			'escola_id' => 571,
			'tipopagamento_id' => 571,
			'valor' => 571,
			'month_id' => 571,
			'data_limite' => '2012-07-25',
			'mes_limite' => 571,
			'dia_limite' => 571
		),
		array(
			'id' => 572,
			'escola_id' => 572,
			'tipopagamento_id' => 572,
			'valor' => 572,
			'month_id' => 572,
			'data_limite' => '2012-07-25',
			'mes_limite' => 572,
			'dia_limite' => 572
		),
		array(
			'id' => 573,
			'escola_id' => 573,
			'tipopagamento_id' => 573,
			'valor' => 573,
			'month_id' => 573,
			'data_limite' => '2012-07-25',
			'mes_limite' => 573,
			'dia_limite' => 573
		),
		array(
			'id' => 574,
			'escola_id' => 574,
			'tipopagamento_id' => 574,
			'valor' => 574,
			'month_id' => 574,
			'data_limite' => '2012-07-25',
			'mes_limite' => 574,
			'dia_limite' => 574
		),
		array(
			'id' => 575,
			'escola_id' => 575,
			'tipopagamento_id' => 575,
			'valor' => 575,
			'month_id' => 575,
			'data_limite' => '2012-07-25',
			'mes_limite' => 575,
			'dia_limite' => 575
		),
		array(
			'id' => 576,
			'escola_id' => 576,
			'tipopagamento_id' => 576,
			'valor' => 576,
			'month_id' => 576,
			'data_limite' => '2012-07-25',
			'mes_limite' => 576,
			'dia_limite' => 576
		),
		array(
			'id' => 577,
			'escola_id' => 577,
			'tipopagamento_id' => 577,
			'valor' => 577,
			'month_id' => 577,
			'data_limite' => '2012-07-25',
			'mes_limite' => 577,
			'dia_limite' => 577
		),
		array(
			'id' => 578,
			'escola_id' => 578,
			'tipopagamento_id' => 578,
			'valor' => 578,
			'month_id' => 578,
			'data_limite' => '2012-07-25',
			'mes_limite' => 578,
			'dia_limite' => 578
		),
		array(
			'id' => 579,
			'escola_id' => 579,
			'tipopagamento_id' => 579,
			'valor' => 579,
			'month_id' => 579,
			'data_limite' => '2012-07-25',
			'mes_limite' => 579,
			'dia_limite' => 579
		),
		array(
			'id' => 580,
			'escola_id' => 580,
			'tipopagamento_id' => 580,
			'valor' => 580,
			'month_id' => 580,
			'data_limite' => '2012-07-25',
			'mes_limite' => 580,
			'dia_limite' => 580
		),
		array(
			'id' => 581,
			'escola_id' => 581,
			'tipopagamento_id' => 581,
			'valor' => 581,
			'month_id' => 581,
			'data_limite' => '2012-07-25',
			'mes_limite' => 581,
			'dia_limite' => 581
		),
		array(
			'id' => 582,
			'escola_id' => 582,
			'tipopagamento_id' => 582,
			'valor' => 582,
			'month_id' => 582,
			'data_limite' => '2012-07-25',
			'mes_limite' => 582,
			'dia_limite' => 582
		),
		array(
			'id' => 583,
			'escola_id' => 583,
			'tipopagamento_id' => 583,
			'valor' => 583,
			'month_id' => 583,
			'data_limite' => '2012-07-25',
			'mes_limite' => 583,
			'dia_limite' => 583
		),
		array(
			'id' => 584,
			'escola_id' => 584,
			'tipopagamento_id' => 584,
			'valor' => 584,
			'month_id' => 584,
			'data_limite' => '2012-07-25',
			'mes_limite' => 584,
			'dia_limite' => 584
		),
		array(
			'id' => 585,
			'escola_id' => 585,
			'tipopagamento_id' => 585,
			'valor' => 585,
			'month_id' => 585,
			'data_limite' => '2012-07-25',
			'mes_limite' => 585,
			'dia_limite' => 585
		),
		array(
			'id' => 586,
			'escola_id' => 586,
			'tipopagamento_id' => 586,
			'valor' => 586,
			'month_id' => 586,
			'data_limite' => '2012-07-25',
			'mes_limite' => 586,
			'dia_limite' => 586
		),
		array(
			'id' => 587,
			'escola_id' => 587,
			'tipopagamento_id' => 587,
			'valor' => 587,
			'month_id' => 587,
			'data_limite' => '2012-07-25',
			'mes_limite' => 587,
			'dia_limite' => 587
		),
		array(
			'id' => 588,
			'escola_id' => 588,
			'tipopagamento_id' => 588,
			'valor' => 588,
			'month_id' => 588,
			'data_limite' => '2012-07-25',
			'mes_limite' => 588,
			'dia_limite' => 588
		),
		array(
			'id' => 589,
			'escola_id' => 589,
			'tipopagamento_id' => 589,
			'valor' => 589,
			'month_id' => 589,
			'data_limite' => '2012-07-25',
			'mes_limite' => 589,
			'dia_limite' => 589
		),
		array(
			'id' => 590,
			'escola_id' => 590,
			'tipopagamento_id' => 590,
			'valor' => 590,
			'month_id' => 590,
			'data_limite' => '2012-07-25',
			'mes_limite' => 590,
			'dia_limite' => 590
		),
		array(
			'id' => 591,
			'escola_id' => 591,
			'tipopagamento_id' => 591,
			'valor' => 591,
			'month_id' => 591,
			'data_limite' => '2012-07-25',
			'mes_limite' => 591,
			'dia_limite' => 591
		),
		array(
			'id' => 592,
			'escola_id' => 592,
			'tipopagamento_id' => 592,
			'valor' => 592,
			'month_id' => 592,
			'data_limite' => '2012-07-25',
			'mes_limite' => 592,
			'dia_limite' => 592
		),
		array(
			'id' => 593,
			'escola_id' => 593,
			'tipopagamento_id' => 593,
			'valor' => 593,
			'month_id' => 593,
			'data_limite' => '2012-07-25',
			'mes_limite' => 593,
			'dia_limite' => 593
		),
		array(
			'id' => 594,
			'escola_id' => 594,
			'tipopagamento_id' => 594,
			'valor' => 594,
			'month_id' => 594,
			'data_limite' => '2012-07-25',
			'mes_limite' => 594,
			'dia_limite' => 594
		),
		array(
			'id' => 595,
			'escola_id' => 595,
			'tipopagamento_id' => 595,
			'valor' => 595,
			'month_id' => 595,
			'data_limite' => '2012-07-25',
			'mes_limite' => 595,
			'dia_limite' => 595
		),
		array(
			'id' => 596,
			'escola_id' => 596,
			'tipopagamento_id' => 596,
			'valor' => 596,
			'month_id' => 596,
			'data_limite' => '2012-07-25',
			'mes_limite' => 596,
			'dia_limite' => 596
		),
		array(
			'id' => 597,
			'escola_id' => 597,
			'tipopagamento_id' => 597,
			'valor' => 597,
			'month_id' => 597,
			'data_limite' => '2012-07-25',
			'mes_limite' => 597,
			'dia_limite' => 597
		),
		array(
			'id' => 598,
			'escola_id' => 598,
			'tipopagamento_id' => 598,
			'valor' => 598,
			'month_id' => 598,
			'data_limite' => '2012-07-25',
			'mes_limite' => 598,
			'dia_limite' => 598
		),
		array(
			'id' => 599,
			'escola_id' => 599,
			'tipopagamento_id' => 599,
			'valor' => 599,
			'month_id' => 599,
			'data_limite' => '2012-07-25',
			'mes_limite' => 599,
			'dia_limite' => 599
		),
		array(
			'id' => 600,
			'escola_id' => 600,
			'tipopagamento_id' => 600,
			'valor' => 600,
			'month_id' => 600,
			'data_limite' => '2012-07-25',
			'mes_limite' => 600,
			'dia_limite' => 600
		),
		array(
			'id' => 601,
			'escola_id' => 601,
			'tipopagamento_id' => 601,
			'valor' => 601,
			'month_id' => 601,
			'data_limite' => '2012-07-25',
			'mes_limite' => 601,
			'dia_limite' => 601
		),
		array(
			'id' => 602,
			'escola_id' => 602,
			'tipopagamento_id' => 602,
			'valor' => 602,
			'month_id' => 602,
			'data_limite' => '2012-07-25',
			'mes_limite' => 602,
			'dia_limite' => 602
		),
		array(
			'id' => 603,
			'escola_id' => 603,
			'tipopagamento_id' => 603,
			'valor' => 603,
			'month_id' => 603,
			'data_limite' => '2012-07-25',
			'mes_limite' => 603,
			'dia_limite' => 603
		),
		array(
			'id' => 604,
			'escola_id' => 604,
			'tipopagamento_id' => 604,
			'valor' => 604,
			'month_id' => 604,
			'data_limite' => '2012-07-25',
			'mes_limite' => 604,
			'dia_limite' => 604
		),
		array(
			'id' => 605,
			'escola_id' => 605,
			'tipopagamento_id' => 605,
			'valor' => 605,
			'month_id' => 605,
			'data_limite' => '2012-07-25',
			'mes_limite' => 605,
			'dia_limite' => 605
		),
		array(
			'id' => 606,
			'escola_id' => 606,
			'tipopagamento_id' => 606,
			'valor' => 606,
			'month_id' => 606,
			'data_limite' => '2012-07-25',
			'mes_limite' => 606,
			'dia_limite' => 606
		),
		array(
			'id' => 607,
			'escola_id' => 607,
			'tipopagamento_id' => 607,
			'valor' => 607,
			'month_id' => 607,
			'data_limite' => '2012-07-25',
			'mes_limite' => 607,
			'dia_limite' => 607
		),
		array(
			'id' => 608,
			'escola_id' => 608,
			'tipopagamento_id' => 608,
			'valor' => 608,
			'month_id' => 608,
			'data_limite' => '2012-07-25',
			'mes_limite' => 608,
			'dia_limite' => 608
		),
		array(
			'id' => 609,
			'escola_id' => 609,
			'tipopagamento_id' => 609,
			'valor' => 609,
			'month_id' => 609,
			'data_limite' => '2012-07-25',
			'mes_limite' => 609,
			'dia_limite' => 609
		),
		array(
			'id' => 610,
			'escola_id' => 610,
			'tipopagamento_id' => 610,
			'valor' => 610,
			'month_id' => 610,
			'data_limite' => '2012-07-25',
			'mes_limite' => 610,
			'dia_limite' => 610
		),
		array(
			'id' => 611,
			'escola_id' => 611,
			'tipopagamento_id' => 611,
			'valor' => 611,
			'month_id' => 611,
			'data_limite' => '2012-07-25',
			'mes_limite' => 611,
			'dia_limite' => 611
		),
		array(
			'id' => 612,
			'escola_id' => 612,
			'tipopagamento_id' => 612,
			'valor' => 612,
			'month_id' => 612,
			'data_limite' => '2012-07-25',
			'mes_limite' => 612,
			'dia_limite' => 612
		),
		array(
			'id' => 613,
			'escola_id' => 613,
			'tipopagamento_id' => 613,
			'valor' => 613,
			'month_id' => 613,
			'data_limite' => '2012-07-25',
			'mes_limite' => 613,
			'dia_limite' => 613
		),
		array(
			'id' => 614,
			'escola_id' => 614,
			'tipopagamento_id' => 614,
			'valor' => 614,
			'month_id' => 614,
			'data_limite' => '2012-07-25',
			'mes_limite' => 614,
			'dia_limite' => 614
		),
		array(
			'id' => 615,
			'escola_id' => 615,
			'tipopagamento_id' => 615,
			'valor' => 615,
			'month_id' => 615,
			'data_limite' => '2012-07-25',
			'mes_limite' => 615,
			'dia_limite' => 615
		),
		array(
			'id' => 616,
			'escola_id' => 616,
			'tipopagamento_id' => 616,
			'valor' => 616,
			'month_id' => 616,
			'data_limite' => '2012-07-25',
			'mes_limite' => 616,
			'dia_limite' => 616
		),
		array(
			'id' => 617,
			'escola_id' => 617,
			'tipopagamento_id' => 617,
			'valor' => 617,
			'month_id' => 617,
			'data_limite' => '2012-07-25',
			'mes_limite' => 617,
			'dia_limite' => 617
		),
		array(
			'id' => 618,
			'escola_id' => 618,
			'tipopagamento_id' => 618,
			'valor' => 618,
			'month_id' => 618,
			'data_limite' => '2012-07-25',
			'mes_limite' => 618,
			'dia_limite' => 618
		),
		array(
			'id' => 619,
			'escola_id' => 619,
			'tipopagamento_id' => 619,
			'valor' => 619,
			'month_id' => 619,
			'data_limite' => '2012-07-25',
			'mes_limite' => 619,
			'dia_limite' => 619
		),
		array(
			'id' => 620,
			'escola_id' => 620,
			'tipopagamento_id' => 620,
			'valor' => 620,
			'month_id' => 620,
			'data_limite' => '2012-07-25',
			'mes_limite' => 620,
			'dia_limite' => 620
		),
		array(
			'id' => 621,
			'escola_id' => 621,
			'tipopagamento_id' => 621,
			'valor' => 621,
			'month_id' => 621,
			'data_limite' => '2012-07-25',
			'mes_limite' => 621,
			'dia_limite' => 621
		),
		array(
			'id' => 622,
			'escola_id' => 622,
			'tipopagamento_id' => 622,
			'valor' => 622,
			'month_id' => 622,
			'data_limite' => '2012-07-25',
			'mes_limite' => 622,
			'dia_limite' => 622
		),
		array(
			'id' => 623,
			'escola_id' => 623,
			'tipopagamento_id' => 623,
			'valor' => 623,
			'month_id' => 623,
			'data_limite' => '2012-07-25',
			'mes_limite' => 623,
			'dia_limite' => 623
		),
		array(
			'id' => 624,
			'escola_id' => 624,
			'tipopagamento_id' => 624,
			'valor' => 624,
			'month_id' => 624,
			'data_limite' => '2012-07-25',
			'mes_limite' => 624,
			'dia_limite' => 624
		),
		array(
			'id' => 625,
			'escola_id' => 625,
			'tipopagamento_id' => 625,
			'valor' => 625,
			'month_id' => 625,
			'data_limite' => '2012-07-25',
			'mes_limite' => 625,
			'dia_limite' => 625
		),
		array(
			'id' => 626,
			'escola_id' => 626,
			'tipopagamento_id' => 626,
			'valor' => 626,
			'month_id' => 626,
			'data_limite' => '2012-07-25',
			'mes_limite' => 626,
			'dia_limite' => 626
		),
		array(
			'id' => 627,
			'escola_id' => 627,
			'tipopagamento_id' => 627,
			'valor' => 627,
			'month_id' => 627,
			'data_limite' => '2012-07-25',
			'mes_limite' => 627,
			'dia_limite' => 627
		),
		array(
			'id' => 628,
			'escola_id' => 628,
			'tipopagamento_id' => 628,
			'valor' => 628,
			'month_id' => 628,
			'data_limite' => '2012-07-25',
			'mes_limite' => 628,
			'dia_limite' => 628
		),
		array(
			'id' => 629,
			'escola_id' => 629,
			'tipopagamento_id' => 629,
			'valor' => 629,
			'month_id' => 629,
			'data_limite' => '2012-07-25',
			'mes_limite' => 629,
			'dia_limite' => 629
		),
		array(
			'id' => 630,
			'escola_id' => 630,
			'tipopagamento_id' => 630,
			'valor' => 630,
			'month_id' => 630,
			'data_limite' => '2012-07-25',
			'mes_limite' => 630,
			'dia_limite' => 630
		),
		array(
			'id' => 631,
			'escola_id' => 631,
			'tipopagamento_id' => 631,
			'valor' => 631,
			'month_id' => 631,
			'data_limite' => '2012-07-25',
			'mes_limite' => 631,
			'dia_limite' => 631
		),
		array(
			'id' => 632,
			'escola_id' => 632,
			'tipopagamento_id' => 632,
			'valor' => 632,
			'month_id' => 632,
			'data_limite' => '2012-07-25',
			'mes_limite' => 632,
			'dia_limite' => 632
		),
		array(
			'id' => 633,
			'escola_id' => 633,
			'tipopagamento_id' => 633,
			'valor' => 633,
			'month_id' => 633,
			'data_limite' => '2012-07-25',
			'mes_limite' => 633,
			'dia_limite' => 633
		),
		array(
			'id' => 634,
			'escola_id' => 634,
			'tipopagamento_id' => 634,
			'valor' => 634,
			'month_id' => 634,
			'data_limite' => '2012-07-25',
			'mes_limite' => 634,
			'dia_limite' => 634
		),
		array(
			'id' => 635,
			'escola_id' => 635,
			'tipopagamento_id' => 635,
			'valor' => 635,
			'month_id' => 635,
			'data_limite' => '2012-07-25',
			'mes_limite' => 635,
			'dia_limite' => 635
		),
		array(
			'id' => 636,
			'escola_id' => 636,
			'tipopagamento_id' => 636,
			'valor' => 636,
			'month_id' => 636,
			'data_limite' => '2012-07-25',
			'mes_limite' => 636,
			'dia_limite' => 636
		),
		array(
			'id' => 637,
			'escola_id' => 637,
			'tipopagamento_id' => 637,
			'valor' => 637,
			'month_id' => 637,
			'data_limite' => '2012-07-25',
			'mes_limite' => 637,
			'dia_limite' => 637
		),
		array(
			'id' => 638,
			'escola_id' => 638,
			'tipopagamento_id' => 638,
			'valor' => 638,
			'month_id' => 638,
			'data_limite' => '2012-07-25',
			'mes_limite' => 638,
			'dia_limite' => 638
		),
		array(
			'id' => 639,
			'escola_id' => 639,
			'tipopagamento_id' => 639,
			'valor' => 639,
			'month_id' => 639,
			'data_limite' => '2012-07-25',
			'mes_limite' => 639,
			'dia_limite' => 639
		),
		array(
			'id' => 640,
			'escola_id' => 640,
			'tipopagamento_id' => 640,
			'valor' => 640,
			'month_id' => 640,
			'data_limite' => '2012-07-25',
			'mes_limite' => 640,
			'dia_limite' => 640
		),
		array(
			'id' => 641,
			'escola_id' => 641,
			'tipopagamento_id' => 641,
			'valor' => 641,
			'month_id' => 641,
			'data_limite' => '2012-07-25',
			'mes_limite' => 641,
			'dia_limite' => 641
		),
		array(
			'id' => 642,
			'escola_id' => 642,
			'tipopagamento_id' => 642,
			'valor' => 642,
			'month_id' => 642,
			'data_limite' => '2012-07-25',
			'mes_limite' => 642,
			'dia_limite' => 642
		),
		array(
			'id' => 643,
			'escola_id' => 643,
			'tipopagamento_id' => 643,
			'valor' => 643,
			'month_id' => 643,
			'data_limite' => '2012-07-25',
			'mes_limite' => 643,
			'dia_limite' => 643
		),
		array(
			'id' => 644,
			'escola_id' => 644,
			'tipopagamento_id' => 644,
			'valor' => 644,
			'month_id' => 644,
			'data_limite' => '2012-07-25',
			'mes_limite' => 644,
			'dia_limite' => 644
		),
		array(
			'id' => 645,
			'escola_id' => 645,
			'tipopagamento_id' => 645,
			'valor' => 645,
			'month_id' => 645,
			'data_limite' => '2012-07-25',
			'mes_limite' => 645,
			'dia_limite' => 645
		),
		array(
			'id' => 646,
			'escola_id' => 646,
			'tipopagamento_id' => 646,
			'valor' => 646,
			'month_id' => 646,
			'data_limite' => '2012-07-25',
			'mes_limite' => 646,
			'dia_limite' => 646
		),
		array(
			'id' => 647,
			'escola_id' => 647,
			'tipopagamento_id' => 647,
			'valor' => 647,
			'month_id' => 647,
			'data_limite' => '2012-07-25',
			'mes_limite' => 647,
			'dia_limite' => 647
		),
		array(
			'id' => 648,
			'escola_id' => 648,
			'tipopagamento_id' => 648,
			'valor' => 648,
			'month_id' => 648,
			'data_limite' => '2012-07-25',
			'mes_limite' => 648,
			'dia_limite' => 648
		),
		array(
			'id' => 649,
			'escola_id' => 649,
			'tipopagamento_id' => 649,
			'valor' => 649,
			'month_id' => 649,
			'data_limite' => '2012-07-25',
			'mes_limite' => 649,
			'dia_limite' => 649
		),
		array(
			'id' => 650,
			'escola_id' => 650,
			'tipopagamento_id' => 650,
			'valor' => 650,
			'month_id' => 650,
			'data_limite' => '2012-07-25',
			'mes_limite' => 650,
			'dia_limite' => 650
		),
		array(
			'id' => 651,
			'escola_id' => 651,
			'tipopagamento_id' => 651,
			'valor' => 651,
			'month_id' => 651,
			'data_limite' => '2012-07-25',
			'mes_limite' => 651,
			'dia_limite' => 651
		),
		array(
			'id' => 652,
			'escola_id' => 652,
			'tipopagamento_id' => 652,
			'valor' => 652,
			'month_id' => 652,
			'data_limite' => '2012-07-25',
			'mes_limite' => 652,
			'dia_limite' => 652
		),
		array(
			'id' => 653,
			'escola_id' => 653,
			'tipopagamento_id' => 653,
			'valor' => 653,
			'month_id' => 653,
			'data_limite' => '2012-07-25',
			'mes_limite' => 653,
			'dia_limite' => 653
		),
		array(
			'id' => 654,
			'escola_id' => 654,
			'tipopagamento_id' => 654,
			'valor' => 654,
			'month_id' => 654,
			'data_limite' => '2012-07-25',
			'mes_limite' => 654,
			'dia_limite' => 654
		),
		array(
			'id' => 655,
			'escola_id' => 655,
			'tipopagamento_id' => 655,
			'valor' => 655,
			'month_id' => 655,
			'data_limite' => '2012-07-25',
			'mes_limite' => 655,
			'dia_limite' => 655
		),
		array(
			'id' => 656,
			'escola_id' => 656,
			'tipopagamento_id' => 656,
			'valor' => 656,
			'month_id' => 656,
			'data_limite' => '2012-07-25',
			'mes_limite' => 656,
			'dia_limite' => 656
		),
		array(
			'id' => 657,
			'escola_id' => 657,
			'tipopagamento_id' => 657,
			'valor' => 657,
			'month_id' => 657,
			'data_limite' => '2012-07-25',
			'mes_limite' => 657,
			'dia_limite' => 657
		),
		array(
			'id' => 658,
			'escola_id' => 658,
			'tipopagamento_id' => 658,
			'valor' => 658,
			'month_id' => 658,
			'data_limite' => '2012-07-25',
			'mes_limite' => 658,
			'dia_limite' => 658
		),
		array(
			'id' => 659,
			'escola_id' => 659,
			'tipopagamento_id' => 659,
			'valor' => 659,
			'month_id' => 659,
			'data_limite' => '2012-07-25',
			'mes_limite' => 659,
			'dia_limite' => 659
		),
		array(
			'id' => 660,
			'escola_id' => 660,
			'tipopagamento_id' => 660,
			'valor' => 660,
			'month_id' => 660,
			'data_limite' => '2012-07-25',
			'mes_limite' => 660,
			'dia_limite' => 660
		),
		array(
			'id' => 661,
			'escola_id' => 661,
			'tipopagamento_id' => 661,
			'valor' => 661,
			'month_id' => 661,
			'data_limite' => '2012-07-25',
			'mes_limite' => 661,
			'dia_limite' => 661
		),
		array(
			'id' => 662,
			'escola_id' => 662,
			'tipopagamento_id' => 662,
			'valor' => 662,
			'month_id' => 662,
			'data_limite' => '2012-07-25',
			'mes_limite' => 662,
			'dia_limite' => 662
		),
		array(
			'id' => 663,
			'escola_id' => 663,
			'tipopagamento_id' => 663,
			'valor' => 663,
			'month_id' => 663,
			'data_limite' => '2012-07-25',
			'mes_limite' => 663,
			'dia_limite' => 663
		),
		array(
			'id' => 664,
			'escola_id' => 664,
			'tipopagamento_id' => 664,
			'valor' => 664,
			'month_id' => 664,
			'data_limite' => '2012-07-25',
			'mes_limite' => 664,
			'dia_limite' => 664
		),
		array(
			'id' => 665,
			'escola_id' => 665,
			'tipopagamento_id' => 665,
			'valor' => 665,
			'month_id' => 665,
			'data_limite' => '2012-07-25',
			'mes_limite' => 665,
			'dia_limite' => 665
		),
		array(
			'id' => 666,
			'escola_id' => 666,
			'tipopagamento_id' => 666,
			'valor' => 666,
			'month_id' => 666,
			'data_limite' => '2012-07-25',
			'mes_limite' => 666,
			'dia_limite' => 666
		),
		array(
			'id' => 667,
			'escola_id' => 667,
			'tipopagamento_id' => 667,
			'valor' => 667,
			'month_id' => 667,
			'data_limite' => '2012-07-25',
			'mes_limite' => 667,
			'dia_limite' => 667
		),
		array(
			'id' => 668,
			'escola_id' => 668,
			'tipopagamento_id' => 668,
			'valor' => 668,
			'month_id' => 668,
			'data_limite' => '2012-07-25',
			'mes_limite' => 668,
			'dia_limite' => 668
		),
		array(
			'id' => 669,
			'escola_id' => 669,
			'tipopagamento_id' => 669,
			'valor' => 669,
			'month_id' => 669,
			'data_limite' => '2012-07-25',
			'mes_limite' => 669,
			'dia_limite' => 669
		),
		array(
			'id' => 670,
			'escola_id' => 670,
			'tipopagamento_id' => 670,
			'valor' => 670,
			'month_id' => 670,
			'data_limite' => '2012-07-25',
			'mes_limite' => 670,
			'dia_limite' => 670
		),
		array(
			'id' => 671,
			'escola_id' => 671,
			'tipopagamento_id' => 671,
			'valor' => 671,
			'month_id' => 671,
			'data_limite' => '2012-07-25',
			'mes_limite' => 671,
			'dia_limite' => 671
		),
		array(
			'id' => 672,
			'escola_id' => 672,
			'tipopagamento_id' => 672,
			'valor' => 672,
			'month_id' => 672,
			'data_limite' => '2012-07-25',
			'mes_limite' => 672,
			'dia_limite' => 672
		),
		array(
			'id' => 673,
			'escola_id' => 673,
			'tipopagamento_id' => 673,
			'valor' => 673,
			'month_id' => 673,
			'data_limite' => '2012-07-25',
			'mes_limite' => 673,
			'dia_limite' => 673
		),
		array(
			'id' => 674,
			'escola_id' => 674,
			'tipopagamento_id' => 674,
			'valor' => 674,
			'month_id' => 674,
			'data_limite' => '2012-07-25',
			'mes_limite' => 674,
			'dia_limite' => 674
		),
		array(
			'id' => 675,
			'escola_id' => 675,
			'tipopagamento_id' => 675,
			'valor' => 675,
			'month_id' => 675,
			'data_limite' => '2012-07-25',
			'mes_limite' => 675,
			'dia_limite' => 675
		),
		array(
			'id' => 676,
			'escola_id' => 676,
			'tipopagamento_id' => 676,
			'valor' => 676,
			'month_id' => 676,
			'data_limite' => '2012-07-25',
			'mes_limite' => 676,
			'dia_limite' => 676
		),
		array(
			'id' => 677,
			'escola_id' => 677,
			'tipopagamento_id' => 677,
			'valor' => 677,
			'month_id' => 677,
			'data_limite' => '2012-07-25',
			'mes_limite' => 677,
			'dia_limite' => 677
		),
		array(
			'id' => 678,
			'escola_id' => 678,
			'tipopagamento_id' => 678,
			'valor' => 678,
			'month_id' => 678,
			'data_limite' => '2012-07-25',
			'mes_limite' => 678,
			'dia_limite' => 678
		),
		array(
			'id' => 679,
			'escola_id' => 679,
			'tipopagamento_id' => 679,
			'valor' => 679,
			'month_id' => 679,
			'data_limite' => '2012-07-25',
			'mes_limite' => 679,
			'dia_limite' => 679
		),
		array(
			'id' => 680,
			'escola_id' => 680,
			'tipopagamento_id' => 680,
			'valor' => 680,
			'month_id' => 680,
			'data_limite' => '2012-07-25',
			'mes_limite' => 680,
			'dia_limite' => 680
		),
		array(
			'id' => 681,
			'escola_id' => 681,
			'tipopagamento_id' => 681,
			'valor' => 681,
			'month_id' => 681,
			'data_limite' => '2012-07-25',
			'mes_limite' => 681,
			'dia_limite' => 681
		),
		array(
			'id' => 682,
			'escola_id' => 682,
			'tipopagamento_id' => 682,
			'valor' => 682,
			'month_id' => 682,
			'data_limite' => '2012-07-25',
			'mes_limite' => 682,
			'dia_limite' => 682
		),
		array(
			'id' => 683,
			'escola_id' => 683,
			'tipopagamento_id' => 683,
			'valor' => 683,
			'month_id' => 683,
			'data_limite' => '2012-07-25',
			'mes_limite' => 683,
			'dia_limite' => 683
		),
		array(
			'id' => 684,
			'escola_id' => 684,
			'tipopagamento_id' => 684,
			'valor' => 684,
			'month_id' => 684,
			'data_limite' => '2012-07-25',
			'mes_limite' => 684,
			'dia_limite' => 684
		),
		array(
			'id' => 685,
			'escola_id' => 685,
			'tipopagamento_id' => 685,
			'valor' => 685,
			'month_id' => 685,
			'data_limite' => '2012-07-25',
			'mes_limite' => 685,
			'dia_limite' => 685
		),
		array(
			'id' => 686,
			'escola_id' => 686,
			'tipopagamento_id' => 686,
			'valor' => 686,
			'month_id' => 686,
			'data_limite' => '2012-07-25',
			'mes_limite' => 686,
			'dia_limite' => 686
		),
		array(
			'id' => 687,
			'escola_id' => 687,
			'tipopagamento_id' => 687,
			'valor' => 687,
			'month_id' => 687,
			'data_limite' => '2012-07-25',
			'mes_limite' => 687,
			'dia_limite' => 687
		),
		array(
			'id' => 688,
			'escola_id' => 688,
			'tipopagamento_id' => 688,
			'valor' => 688,
			'month_id' => 688,
			'data_limite' => '2012-07-25',
			'mes_limite' => 688,
			'dia_limite' => 688
		),
		array(
			'id' => 689,
			'escola_id' => 689,
			'tipopagamento_id' => 689,
			'valor' => 689,
			'month_id' => 689,
			'data_limite' => '2012-07-25',
			'mes_limite' => 689,
			'dia_limite' => 689
		),
		array(
			'id' => 690,
			'escola_id' => 690,
			'tipopagamento_id' => 690,
			'valor' => 690,
			'month_id' => 690,
			'data_limite' => '2012-07-25',
			'mes_limite' => 690,
			'dia_limite' => 690
		),
		array(
			'id' => 691,
			'escola_id' => 691,
			'tipopagamento_id' => 691,
			'valor' => 691,
			'month_id' => 691,
			'data_limite' => '2012-07-25',
			'mes_limite' => 691,
			'dia_limite' => 691
		),
		array(
			'id' => 692,
			'escola_id' => 692,
			'tipopagamento_id' => 692,
			'valor' => 692,
			'month_id' => 692,
			'data_limite' => '2012-07-25',
			'mes_limite' => 692,
			'dia_limite' => 692
		),
		array(
			'id' => 693,
			'escola_id' => 693,
			'tipopagamento_id' => 693,
			'valor' => 693,
			'month_id' => 693,
			'data_limite' => '2012-07-25',
			'mes_limite' => 693,
			'dia_limite' => 693
		),
		array(
			'id' => 694,
			'escola_id' => 694,
			'tipopagamento_id' => 694,
			'valor' => 694,
			'month_id' => 694,
			'data_limite' => '2012-07-25',
			'mes_limite' => 694,
			'dia_limite' => 694
		),
		array(
			'id' => 695,
			'escola_id' => 695,
			'tipopagamento_id' => 695,
			'valor' => 695,
			'month_id' => 695,
			'data_limite' => '2012-07-25',
			'mes_limite' => 695,
			'dia_limite' => 695
		),
		array(
			'id' => 696,
			'escola_id' => 696,
			'tipopagamento_id' => 696,
			'valor' => 696,
			'month_id' => 696,
			'data_limite' => '2012-07-25',
			'mes_limite' => 696,
			'dia_limite' => 696
		),
		array(
			'id' => 697,
			'escola_id' => 697,
			'tipopagamento_id' => 697,
			'valor' => 697,
			'month_id' => 697,
			'data_limite' => '2012-07-25',
			'mes_limite' => 697,
			'dia_limite' => 697
		),
		array(
			'id' => 698,
			'escola_id' => 698,
			'tipopagamento_id' => 698,
			'valor' => 698,
			'month_id' => 698,
			'data_limite' => '2012-07-25',
			'mes_limite' => 698,
			'dia_limite' => 698
		),
		array(
			'id' => 699,
			'escola_id' => 699,
			'tipopagamento_id' => 699,
			'valor' => 699,
			'month_id' => 699,
			'data_limite' => '2012-07-25',
			'mes_limite' => 699,
			'dia_limite' => 699
		),
		array(
			'id' => 700,
			'escola_id' => 700,
			'tipopagamento_id' => 700,
			'valor' => 700,
			'month_id' => 700,
			'data_limite' => '2012-07-25',
			'mes_limite' => 700,
			'dia_limite' => 700
		),
		array(
			'id' => 701,
			'escola_id' => 701,
			'tipopagamento_id' => 701,
			'valor' => 701,
			'month_id' => 701,
			'data_limite' => '2012-07-25',
			'mes_limite' => 701,
			'dia_limite' => 701
		),
		array(
			'id' => 702,
			'escola_id' => 702,
			'tipopagamento_id' => 702,
			'valor' => 702,
			'month_id' => 702,
			'data_limite' => '2012-07-25',
			'mes_limite' => 702,
			'dia_limite' => 702
		),
		array(
			'id' => 703,
			'escola_id' => 703,
			'tipopagamento_id' => 703,
			'valor' => 703,
			'month_id' => 703,
			'data_limite' => '2012-07-25',
			'mes_limite' => 703,
			'dia_limite' => 703
		),
		array(
			'id' => 704,
			'escola_id' => 704,
			'tipopagamento_id' => 704,
			'valor' => 704,
			'month_id' => 704,
			'data_limite' => '2012-07-25',
			'mes_limite' => 704,
			'dia_limite' => 704
		),
		array(
			'id' => 705,
			'escola_id' => 705,
			'tipopagamento_id' => 705,
			'valor' => 705,
			'month_id' => 705,
			'data_limite' => '2012-07-25',
			'mes_limite' => 705,
			'dia_limite' => 705
		),
		array(
			'id' => 706,
			'escola_id' => 706,
			'tipopagamento_id' => 706,
			'valor' => 706,
			'month_id' => 706,
			'data_limite' => '2012-07-25',
			'mes_limite' => 706,
			'dia_limite' => 706
		),
		array(
			'id' => 707,
			'escola_id' => 707,
			'tipopagamento_id' => 707,
			'valor' => 707,
			'month_id' => 707,
			'data_limite' => '2012-07-25',
			'mes_limite' => 707,
			'dia_limite' => 707
		),
		array(
			'id' => 708,
			'escola_id' => 708,
			'tipopagamento_id' => 708,
			'valor' => 708,
			'month_id' => 708,
			'data_limite' => '2012-07-25',
			'mes_limite' => 708,
			'dia_limite' => 708
		),
		array(
			'id' => 709,
			'escola_id' => 709,
			'tipopagamento_id' => 709,
			'valor' => 709,
			'month_id' => 709,
			'data_limite' => '2012-07-25',
			'mes_limite' => 709,
			'dia_limite' => 709
		),
		array(
			'id' => 710,
			'escola_id' => 710,
			'tipopagamento_id' => 710,
			'valor' => 710,
			'month_id' => 710,
			'data_limite' => '2012-07-25',
			'mes_limite' => 710,
			'dia_limite' => 710
		),
		array(
			'id' => 711,
			'escola_id' => 711,
			'tipopagamento_id' => 711,
			'valor' => 711,
			'month_id' => 711,
			'data_limite' => '2012-07-25',
			'mes_limite' => 711,
			'dia_limite' => 711
		),
		array(
			'id' => 712,
			'escola_id' => 712,
			'tipopagamento_id' => 712,
			'valor' => 712,
			'month_id' => 712,
			'data_limite' => '2012-07-25',
			'mes_limite' => 712,
			'dia_limite' => 712
		),
		array(
			'id' => 713,
			'escola_id' => 713,
			'tipopagamento_id' => 713,
			'valor' => 713,
			'month_id' => 713,
			'data_limite' => '2012-07-25',
			'mes_limite' => 713,
			'dia_limite' => 713
		),
		array(
			'id' => 714,
			'escola_id' => 714,
			'tipopagamento_id' => 714,
			'valor' => 714,
			'month_id' => 714,
			'data_limite' => '2012-07-25',
			'mes_limite' => 714,
			'dia_limite' => 714
		),
		array(
			'id' => 715,
			'escola_id' => 715,
			'tipopagamento_id' => 715,
			'valor' => 715,
			'month_id' => 715,
			'data_limite' => '2012-07-25',
			'mes_limite' => 715,
			'dia_limite' => 715
		),
		array(
			'id' => 716,
			'escola_id' => 716,
			'tipopagamento_id' => 716,
			'valor' => 716,
			'month_id' => 716,
			'data_limite' => '2012-07-25',
			'mes_limite' => 716,
			'dia_limite' => 716
		),
		array(
			'id' => 717,
			'escola_id' => 717,
			'tipopagamento_id' => 717,
			'valor' => 717,
			'month_id' => 717,
			'data_limite' => '2012-07-25',
			'mes_limite' => 717,
			'dia_limite' => 717
		),
		array(
			'id' => 718,
			'escola_id' => 718,
			'tipopagamento_id' => 718,
			'valor' => 718,
			'month_id' => 718,
			'data_limite' => '2012-07-25',
			'mes_limite' => 718,
			'dia_limite' => 718
		),
		array(
			'id' => 719,
			'escola_id' => 719,
			'tipopagamento_id' => 719,
			'valor' => 719,
			'month_id' => 719,
			'data_limite' => '2012-07-25',
			'mes_limite' => 719,
			'dia_limite' => 719
		),
		array(
			'id' => 720,
			'escola_id' => 720,
			'tipopagamento_id' => 720,
			'valor' => 720,
			'month_id' => 720,
			'data_limite' => '2012-07-25',
			'mes_limite' => 720,
			'dia_limite' => 720
		),
		array(
			'id' => 721,
			'escola_id' => 721,
			'tipopagamento_id' => 721,
			'valor' => 721,
			'month_id' => 721,
			'data_limite' => '2012-07-25',
			'mes_limite' => 721,
			'dia_limite' => 721
		),
		array(
			'id' => 722,
			'escola_id' => 722,
			'tipopagamento_id' => 722,
			'valor' => 722,
			'month_id' => 722,
			'data_limite' => '2012-07-25',
			'mes_limite' => 722,
			'dia_limite' => 722
		),
		array(
			'id' => 723,
			'escola_id' => 723,
			'tipopagamento_id' => 723,
			'valor' => 723,
			'month_id' => 723,
			'data_limite' => '2012-07-25',
			'mes_limite' => 723,
			'dia_limite' => 723
		),
		array(
			'id' => 724,
			'escola_id' => 724,
			'tipopagamento_id' => 724,
			'valor' => 724,
			'month_id' => 724,
			'data_limite' => '2012-07-25',
			'mes_limite' => 724,
			'dia_limite' => 724
		),
		array(
			'id' => 725,
			'escola_id' => 725,
			'tipopagamento_id' => 725,
			'valor' => 725,
			'month_id' => 725,
			'data_limite' => '2012-07-25',
			'mes_limite' => 725,
			'dia_limite' => 725
		),
		array(
			'id' => 726,
			'escola_id' => 726,
			'tipopagamento_id' => 726,
			'valor' => 726,
			'month_id' => 726,
			'data_limite' => '2012-07-25',
			'mes_limite' => 726,
			'dia_limite' => 726
		),
		array(
			'id' => 727,
			'escola_id' => 727,
			'tipopagamento_id' => 727,
			'valor' => 727,
			'month_id' => 727,
			'data_limite' => '2012-07-25',
			'mes_limite' => 727,
			'dia_limite' => 727
		),
		array(
			'id' => 728,
			'escola_id' => 728,
			'tipopagamento_id' => 728,
			'valor' => 728,
			'month_id' => 728,
			'data_limite' => '2012-07-25',
			'mes_limite' => 728,
			'dia_limite' => 728
		),
		array(
			'id' => 729,
			'escola_id' => 729,
			'tipopagamento_id' => 729,
			'valor' => 729,
			'month_id' => 729,
			'data_limite' => '2012-07-25',
			'mes_limite' => 729,
			'dia_limite' => 729
		),
		array(
			'id' => 730,
			'escola_id' => 730,
			'tipopagamento_id' => 730,
			'valor' => 730,
			'month_id' => 730,
			'data_limite' => '2012-07-25',
			'mes_limite' => 730,
			'dia_limite' => 730
		),
		array(
			'id' => 731,
			'escola_id' => 731,
			'tipopagamento_id' => 731,
			'valor' => 731,
			'month_id' => 731,
			'data_limite' => '2012-07-25',
			'mes_limite' => 731,
			'dia_limite' => 731
		),
		array(
			'id' => 732,
			'escola_id' => 732,
			'tipopagamento_id' => 732,
			'valor' => 732,
			'month_id' => 732,
			'data_limite' => '2012-07-25',
			'mes_limite' => 732,
			'dia_limite' => 732
		),
		array(
			'id' => 733,
			'escola_id' => 733,
			'tipopagamento_id' => 733,
			'valor' => 733,
			'month_id' => 733,
			'data_limite' => '2012-07-25',
			'mes_limite' => 733,
			'dia_limite' => 733
		),
		array(
			'id' => 734,
			'escola_id' => 734,
			'tipopagamento_id' => 734,
			'valor' => 734,
			'month_id' => 734,
			'data_limite' => '2012-07-25',
			'mes_limite' => 734,
			'dia_limite' => 734
		),
		array(
			'id' => 735,
			'escola_id' => 735,
			'tipopagamento_id' => 735,
			'valor' => 735,
			'month_id' => 735,
			'data_limite' => '2012-07-25',
			'mes_limite' => 735,
			'dia_limite' => 735
		),
		array(
			'id' => 736,
			'escola_id' => 736,
			'tipopagamento_id' => 736,
			'valor' => 736,
			'month_id' => 736,
			'data_limite' => '2012-07-25',
			'mes_limite' => 736,
			'dia_limite' => 736
		),
		array(
			'id' => 737,
			'escola_id' => 737,
			'tipopagamento_id' => 737,
			'valor' => 737,
			'month_id' => 737,
			'data_limite' => '2012-07-25',
			'mes_limite' => 737,
			'dia_limite' => 737
		),
		array(
			'id' => 738,
			'escola_id' => 738,
			'tipopagamento_id' => 738,
			'valor' => 738,
			'month_id' => 738,
			'data_limite' => '2012-07-25',
			'mes_limite' => 738,
			'dia_limite' => 738
		),
		array(
			'id' => 739,
			'escola_id' => 739,
			'tipopagamento_id' => 739,
			'valor' => 739,
			'month_id' => 739,
			'data_limite' => '2012-07-25',
			'mes_limite' => 739,
			'dia_limite' => 739
		),
		array(
			'id' => 740,
			'escola_id' => 740,
			'tipopagamento_id' => 740,
			'valor' => 740,
			'month_id' => 740,
			'data_limite' => '2012-07-25',
			'mes_limite' => 740,
			'dia_limite' => 740
		),
		array(
			'id' => 741,
			'escola_id' => 741,
			'tipopagamento_id' => 741,
			'valor' => 741,
			'month_id' => 741,
			'data_limite' => '2012-07-25',
			'mes_limite' => 741,
			'dia_limite' => 741
		),
		array(
			'id' => 742,
			'escola_id' => 742,
			'tipopagamento_id' => 742,
			'valor' => 742,
			'month_id' => 742,
			'data_limite' => '2012-07-25',
			'mes_limite' => 742,
			'dia_limite' => 742
		),
		array(
			'id' => 743,
			'escola_id' => 743,
			'tipopagamento_id' => 743,
			'valor' => 743,
			'month_id' => 743,
			'data_limite' => '2012-07-25',
			'mes_limite' => 743,
			'dia_limite' => 743
		),
		array(
			'id' => 744,
			'escola_id' => 744,
			'tipopagamento_id' => 744,
			'valor' => 744,
			'month_id' => 744,
			'data_limite' => '2012-07-25',
			'mes_limite' => 744,
			'dia_limite' => 744
		),
		array(
			'id' => 745,
			'escola_id' => 745,
			'tipopagamento_id' => 745,
			'valor' => 745,
			'month_id' => 745,
			'data_limite' => '2012-07-25',
			'mes_limite' => 745,
			'dia_limite' => 745
		),
		array(
			'id' => 746,
			'escola_id' => 746,
			'tipopagamento_id' => 746,
			'valor' => 746,
			'month_id' => 746,
			'data_limite' => '2012-07-25',
			'mes_limite' => 746,
			'dia_limite' => 746
		),
		array(
			'id' => 747,
			'escola_id' => 747,
			'tipopagamento_id' => 747,
			'valor' => 747,
			'month_id' => 747,
			'data_limite' => '2012-07-25',
			'mes_limite' => 747,
			'dia_limite' => 747
		),
		array(
			'id' => 748,
			'escola_id' => 748,
			'tipopagamento_id' => 748,
			'valor' => 748,
			'month_id' => 748,
			'data_limite' => '2012-07-25',
			'mes_limite' => 748,
			'dia_limite' => 748
		),
		array(
			'id' => 749,
			'escola_id' => 749,
			'tipopagamento_id' => 749,
			'valor' => 749,
			'month_id' => 749,
			'data_limite' => '2012-07-25',
			'mes_limite' => 749,
			'dia_limite' => 749
		),
		array(
			'id' => 750,
			'escola_id' => 750,
			'tipopagamento_id' => 750,
			'valor' => 750,
			'month_id' => 750,
			'data_limite' => '2012-07-25',
			'mes_limite' => 750,
			'dia_limite' => 750
		),
		array(
			'id' => 751,
			'escola_id' => 751,
			'tipopagamento_id' => 751,
			'valor' => 751,
			'month_id' => 751,
			'data_limite' => '2012-07-25',
			'mes_limite' => 751,
			'dia_limite' => 751
		),
		array(
			'id' => 752,
			'escola_id' => 752,
			'tipopagamento_id' => 752,
			'valor' => 752,
			'month_id' => 752,
			'data_limite' => '2012-07-25',
			'mes_limite' => 752,
			'dia_limite' => 752
		),
		array(
			'id' => 753,
			'escola_id' => 753,
			'tipopagamento_id' => 753,
			'valor' => 753,
			'month_id' => 753,
			'data_limite' => '2012-07-25',
			'mes_limite' => 753,
			'dia_limite' => 753
		),
		array(
			'id' => 754,
			'escola_id' => 754,
			'tipopagamento_id' => 754,
			'valor' => 754,
			'month_id' => 754,
			'data_limite' => '2012-07-25',
			'mes_limite' => 754,
			'dia_limite' => 754
		),
		array(
			'id' => 755,
			'escola_id' => 755,
			'tipopagamento_id' => 755,
			'valor' => 755,
			'month_id' => 755,
			'data_limite' => '2012-07-25',
			'mes_limite' => 755,
			'dia_limite' => 755
		),
		array(
			'id' => 756,
			'escola_id' => 756,
			'tipopagamento_id' => 756,
			'valor' => 756,
			'month_id' => 756,
			'data_limite' => '2012-07-25',
			'mes_limite' => 756,
			'dia_limite' => 756
		),
		array(
			'id' => 757,
			'escola_id' => 757,
			'tipopagamento_id' => 757,
			'valor' => 757,
			'month_id' => 757,
			'data_limite' => '2012-07-25',
			'mes_limite' => 757,
			'dia_limite' => 757
		),
		array(
			'id' => 758,
			'escola_id' => 758,
			'tipopagamento_id' => 758,
			'valor' => 758,
			'month_id' => 758,
			'data_limite' => '2012-07-25',
			'mes_limite' => 758,
			'dia_limite' => 758
		),
		array(
			'id' => 759,
			'escola_id' => 759,
			'tipopagamento_id' => 759,
			'valor' => 759,
			'month_id' => 759,
			'data_limite' => '2012-07-25',
			'mes_limite' => 759,
			'dia_limite' => 759
		),
		array(
			'id' => 760,
			'escola_id' => 760,
			'tipopagamento_id' => 760,
			'valor' => 760,
			'month_id' => 760,
			'data_limite' => '2012-07-25',
			'mes_limite' => 760,
			'dia_limite' => 760
		),
		array(
			'id' => 761,
			'escola_id' => 761,
			'tipopagamento_id' => 761,
			'valor' => 761,
			'month_id' => 761,
			'data_limite' => '2012-07-25',
			'mes_limite' => 761,
			'dia_limite' => 761
		),
		array(
			'id' => 762,
			'escola_id' => 762,
			'tipopagamento_id' => 762,
			'valor' => 762,
			'month_id' => 762,
			'data_limite' => '2012-07-25',
			'mes_limite' => 762,
			'dia_limite' => 762
		),
		array(
			'id' => 763,
			'escola_id' => 763,
			'tipopagamento_id' => 763,
			'valor' => 763,
			'month_id' => 763,
			'data_limite' => '2012-07-25',
			'mes_limite' => 763,
			'dia_limite' => 763
		),
		array(
			'id' => 764,
			'escola_id' => 764,
			'tipopagamento_id' => 764,
			'valor' => 764,
			'month_id' => 764,
			'data_limite' => '2012-07-25',
			'mes_limite' => 764,
			'dia_limite' => 764
		),
		array(
			'id' => 765,
			'escola_id' => 765,
			'tipopagamento_id' => 765,
			'valor' => 765,
			'month_id' => 765,
			'data_limite' => '2012-07-25',
			'mes_limite' => 765,
			'dia_limite' => 765
		),
		array(
			'id' => 766,
			'escola_id' => 766,
			'tipopagamento_id' => 766,
			'valor' => 766,
			'month_id' => 766,
			'data_limite' => '2012-07-25',
			'mes_limite' => 766,
			'dia_limite' => 766
		),
		array(
			'id' => 767,
			'escola_id' => 767,
			'tipopagamento_id' => 767,
			'valor' => 767,
			'month_id' => 767,
			'data_limite' => '2012-07-25',
			'mes_limite' => 767,
			'dia_limite' => 767
		),
		array(
			'id' => 768,
			'escola_id' => 768,
			'tipopagamento_id' => 768,
			'valor' => 768,
			'month_id' => 768,
			'data_limite' => '2012-07-25',
			'mes_limite' => 768,
			'dia_limite' => 768
		),
		array(
			'id' => 769,
			'escola_id' => 769,
			'tipopagamento_id' => 769,
			'valor' => 769,
			'month_id' => 769,
			'data_limite' => '2012-07-25',
			'mes_limite' => 769,
			'dia_limite' => 769
		),
		array(
			'id' => 770,
			'escola_id' => 770,
			'tipopagamento_id' => 770,
			'valor' => 770,
			'month_id' => 770,
			'data_limite' => '2012-07-25',
			'mes_limite' => 770,
			'dia_limite' => 770
		),
		array(
			'id' => 771,
			'escola_id' => 771,
			'tipopagamento_id' => 771,
			'valor' => 771,
			'month_id' => 771,
			'data_limite' => '2012-07-25',
			'mes_limite' => 771,
			'dia_limite' => 771
		),
		array(
			'id' => 772,
			'escola_id' => 772,
			'tipopagamento_id' => 772,
			'valor' => 772,
			'month_id' => 772,
			'data_limite' => '2012-07-25',
			'mes_limite' => 772,
			'dia_limite' => 772
		),
		array(
			'id' => 773,
			'escola_id' => 773,
			'tipopagamento_id' => 773,
			'valor' => 773,
			'month_id' => 773,
			'data_limite' => '2012-07-25',
			'mes_limite' => 773,
			'dia_limite' => 773
		),
		array(
			'id' => 774,
			'escola_id' => 774,
			'tipopagamento_id' => 774,
			'valor' => 774,
			'month_id' => 774,
			'data_limite' => '2012-07-25',
			'mes_limite' => 774,
			'dia_limite' => 774
		),
		array(
			'id' => 775,
			'escola_id' => 775,
			'tipopagamento_id' => 775,
			'valor' => 775,
			'month_id' => 775,
			'data_limite' => '2012-07-25',
			'mes_limite' => 775,
			'dia_limite' => 775
		),
		array(
			'id' => 776,
			'escola_id' => 776,
			'tipopagamento_id' => 776,
			'valor' => 776,
			'month_id' => 776,
			'data_limite' => '2012-07-25',
			'mes_limite' => 776,
			'dia_limite' => 776
		),
		array(
			'id' => 777,
			'escola_id' => 777,
			'tipopagamento_id' => 777,
			'valor' => 777,
			'month_id' => 777,
			'data_limite' => '2012-07-25',
			'mes_limite' => 777,
			'dia_limite' => 777
		),
		array(
			'id' => 778,
			'escola_id' => 778,
			'tipopagamento_id' => 778,
			'valor' => 778,
			'month_id' => 778,
			'data_limite' => '2012-07-25',
			'mes_limite' => 778,
			'dia_limite' => 778
		),
		array(
			'id' => 779,
			'escola_id' => 779,
			'tipopagamento_id' => 779,
			'valor' => 779,
			'month_id' => 779,
			'data_limite' => '2012-07-25',
			'mes_limite' => 779,
			'dia_limite' => 779
		),
		array(
			'id' => 780,
			'escola_id' => 780,
			'tipopagamento_id' => 780,
			'valor' => 780,
			'month_id' => 780,
			'data_limite' => '2012-07-25',
			'mes_limite' => 780,
			'dia_limite' => 780
		),
		array(
			'id' => 781,
			'escola_id' => 781,
			'tipopagamento_id' => 781,
			'valor' => 781,
			'month_id' => 781,
			'data_limite' => '2012-07-25',
			'mes_limite' => 781,
			'dia_limite' => 781
		),
		array(
			'id' => 782,
			'escola_id' => 782,
			'tipopagamento_id' => 782,
			'valor' => 782,
			'month_id' => 782,
			'data_limite' => '2012-07-25',
			'mes_limite' => 782,
			'dia_limite' => 782
		),
		array(
			'id' => 783,
			'escola_id' => 783,
			'tipopagamento_id' => 783,
			'valor' => 783,
			'month_id' => 783,
			'data_limite' => '2012-07-25',
			'mes_limite' => 783,
			'dia_limite' => 783
		),
		array(
			'id' => 784,
			'escola_id' => 784,
			'tipopagamento_id' => 784,
			'valor' => 784,
			'month_id' => 784,
			'data_limite' => '2012-07-25',
			'mes_limite' => 784,
			'dia_limite' => 784
		),
		array(
			'id' => 785,
			'escola_id' => 785,
			'tipopagamento_id' => 785,
			'valor' => 785,
			'month_id' => 785,
			'data_limite' => '2012-07-25',
			'mes_limite' => 785,
			'dia_limite' => 785
		),
		array(
			'id' => 786,
			'escola_id' => 786,
			'tipopagamento_id' => 786,
			'valor' => 786,
			'month_id' => 786,
			'data_limite' => '2012-07-25',
			'mes_limite' => 786,
			'dia_limite' => 786
		),
		array(
			'id' => 787,
			'escola_id' => 787,
			'tipopagamento_id' => 787,
			'valor' => 787,
			'month_id' => 787,
			'data_limite' => '2012-07-25',
			'mes_limite' => 787,
			'dia_limite' => 787
		),
		array(
			'id' => 788,
			'escola_id' => 788,
			'tipopagamento_id' => 788,
			'valor' => 788,
			'month_id' => 788,
			'data_limite' => '2012-07-25',
			'mes_limite' => 788,
			'dia_limite' => 788
		),
		array(
			'id' => 789,
			'escola_id' => 789,
			'tipopagamento_id' => 789,
			'valor' => 789,
			'month_id' => 789,
			'data_limite' => '2012-07-25',
			'mes_limite' => 789,
			'dia_limite' => 789
		),
		array(
			'id' => 790,
			'escola_id' => 790,
			'tipopagamento_id' => 790,
			'valor' => 790,
			'month_id' => 790,
			'data_limite' => '2012-07-25',
			'mes_limite' => 790,
			'dia_limite' => 790
		),
		array(
			'id' => 791,
			'escola_id' => 791,
			'tipopagamento_id' => 791,
			'valor' => 791,
			'month_id' => 791,
			'data_limite' => '2012-07-25',
			'mes_limite' => 791,
			'dia_limite' => 791
		),
		array(
			'id' => 792,
			'escola_id' => 792,
			'tipopagamento_id' => 792,
			'valor' => 792,
			'month_id' => 792,
			'data_limite' => '2012-07-25',
			'mes_limite' => 792,
			'dia_limite' => 792
		),
		array(
			'id' => 793,
			'escola_id' => 793,
			'tipopagamento_id' => 793,
			'valor' => 793,
			'month_id' => 793,
			'data_limite' => '2012-07-25',
			'mes_limite' => 793,
			'dia_limite' => 793
		),
		array(
			'id' => 794,
			'escola_id' => 794,
			'tipopagamento_id' => 794,
			'valor' => 794,
			'month_id' => 794,
			'data_limite' => '2012-07-25',
			'mes_limite' => 794,
			'dia_limite' => 794
		),
		array(
			'id' => 795,
			'escola_id' => 795,
			'tipopagamento_id' => 795,
			'valor' => 795,
			'month_id' => 795,
			'data_limite' => '2012-07-25',
			'mes_limite' => 795,
			'dia_limite' => 795
		),
		array(
			'id' => 796,
			'escola_id' => 796,
			'tipopagamento_id' => 796,
			'valor' => 796,
			'month_id' => 796,
			'data_limite' => '2012-07-25',
			'mes_limite' => 796,
			'dia_limite' => 796
		),
		array(
			'id' => 797,
			'escola_id' => 797,
			'tipopagamento_id' => 797,
			'valor' => 797,
			'month_id' => 797,
			'data_limite' => '2012-07-25',
			'mes_limite' => 797,
			'dia_limite' => 797
		),
		array(
			'id' => 798,
			'escola_id' => 798,
			'tipopagamento_id' => 798,
			'valor' => 798,
			'month_id' => 798,
			'data_limite' => '2012-07-25',
			'mes_limite' => 798,
			'dia_limite' => 798
		),
		array(
			'id' => 799,
			'escola_id' => 799,
			'tipopagamento_id' => 799,
			'valor' => 799,
			'month_id' => 799,
			'data_limite' => '2012-07-25',
			'mes_limite' => 799,
			'dia_limite' => 799
		),
		array(
			'id' => 800,
			'escola_id' => 800,
			'tipopagamento_id' => 800,
			'valor' => 800,
			'month_id' => 800,
			'data_limite' => '2012-07-25',
			'mes_limite' => 800,
			'dia_limite' => 800
		),
		array(
			'id' => 801,
			'escola_id' => 801,
			'tipopagamento_id' => 801,
			'valor' => 801,
			'month_id' => 801,
			'data_limite' => '2012-07-25',
			'mes_limite' => 801,
			'dia_limite' => 801
		),
		array(
			'id' => 802,
			'escola_id' => 802,
			'tipopagamento_id' => 802,
			'valor' => 802,
			'month_id' => 802,
			'data_limite' => '2012-07-25',
			'mes_limite' => 802,
			'dia_limite' => 802
		),
		array(
			'id' => 803,
			'escola_id' => 803,
			'tipopagamento_id' => 803,
			'valor' => 803,
			'month_id' => 803,
			'data_limite' => '2012-07-25',
			'mes_limite' => 803,
			'dia_limite' => 803
		),
		array(
			'id' => 804,
			'escola_id' => 804,
			'tipopagamento_id' => 804,
			'valor' => 804,
			'month_id' => 804,
			'data_limite' => '2012-07-25',
			'mes_limite' => 804,
			'dia_limite' => 804
		),
		array(
			'id' => 805,
			'escola_id' => 805,
			'tipopagamento_id' => 805,
			'valor' => 805,
			'month_id' => 805,
			'data_limite' => '2012-07-25',
			'mes_limite' => 805,
			'dia_limite' => 805
		),
		array(
			'id' => 806,
			'escola_id' => 806,
			'tipopagamento_id' => 806,
			'valor' => 806,
			'month_id' => 806,
			'data_limite' => '2012-07-25',
			'mes_limite' => 806,
			'dia_limite' => 806
		),
		array(
			'id' => 807,
			'escola_id' => 807,
			'tipopagamento_id' => 807,
			'valor' => 807,
			'month_id' => 807,
			'data_limite' => '2012-07-25',
			'mes_limite' => 807,
			'dia_limite' => 807
		),
		array(
			'id' => 808,
			'escola_id' => 808,
			'tipopagamento_id' => 808,
			'valor' => 808,
			'month_id' => 808,
			'data_limite' => '2012-07-25',
			'mes_limite' => 808,
			'dia_limite' => 808
		),
		array(
			'id' => 809,
			'escola_id' => 809,
			'tipopagamento_id' => 809,
			'valor' => 809,
			'month_id' => 809,
			'data_limite' => '2012-07-25',
			'mes_limite' => 809,
			'dia_limite' => 809
		),
		array(
			'id' => 810,
			'escola_id' => 810,
			'tipopagamento_id' => 810,
			'valor' => 810,
			'month_id' => 810,
			'data_limite' => '2012-07-25',
			'mes_limite' => 810,
			'dia_limite' => 810
		),
		array(
			'id' => 811,
			'escola_id' => 811,
			'tipopagamento_id' => 811,
			'valor' => 811,
			'month_id' => 811,
			'data_limite' => '2012-07-25',
			'mes_limite' => 811,
			'dia_limite' => 811
		),
		array(
			'id' => 812,
			'escola_id' => 812,
			'tipopagamento_id' => 812,
			'valor' => 812,
			'month_id' => 812,
			'data_limite' => '2012-07-25',
			'mes_limite' => 812,
			'dia_limite' => 812
		),
		array(
			'id' => 813,
			'escola_id' => 813,
			'tipopagamento_id' => 813,
			'valor' => 813,
			'month_id' => 813,
			'data_limite' => '2012-07-25',
			'mes_limite' => 813,
			'dia_limite' => 813
		),
		array(
			'id' => 814,
			'escola_id' => 814,
			'tipopagamento_id' => 814,
			'valor' => 814,
			'month_id' => 814,
			'data_limite' => '2012-07-25',
			'mes_limite' => 814,
			'dia_limite' => 814
		),
		array(
			'id' => 815,
			'escola_id' => 815,
			'tipopagamento_id' => 815,
			'valor' => 815,
			'month_id' => 815,
			'data_limite' => '2012-07-25',
			'mes_limite' => 815,
			'dia_limite' => 815
		),
		array(
			'id' => 816,
			'escola_id' => 816,
			'tipopagamento_id' => 816,
			'valor' => 816,
			'month_id' => 816,
			'data_limite' => '2012-07-25',
			'mes_limite' => 816,
			'dia_limite' => 816
		),
		array(
			'id' => 817,
			'escola_id' => 817,
			'tipopagamento_id' => 817,
			'valor' => 817,
			'month_id' => 817,
			'data_limite' => '2012-07-25',
			'mes_limite' => 817,
			'dia_limite' => 817
		),
		array(
			'id' => 818,
			'escola_id' => 818,
			'tipopagamento_id' => 818,
			'valor' => 818,
			'month_id' => 818,
			'data_limite' => '2012-07-25',
			'mes_limite' => 818,
			'dia_limite' => 818
		),
		array(
			'id' => 819,
			'escola_id' => 819,
			'tipopagamento_id' => 819,
			'valor' => 819,
			'month_id' => 819,
			'data_limite' => '2012-07-25',
			'mes_limite' => 819,
			'dia_limite' => 819
		),
		array(
			'id' => 820,
			'escola_id' => 820,
			'tipopagamento_id' => 820,
			'valor' => 820,
			'month_id' => 820,
			'data_limite' => '2012-07-25',
			'mes_limite' => 820,
			'dia_limite' => 820
		),
		array(
			'id' => 821,
			'escola_id' => 821,
			'tipopagamento_id' => 821,
			'valor' => 821,
			'month_id' => 821,
			'data_limite' => '2012-07-25',
			'mes_limite' => 821,
			'dia_limite' => 821
		),
		array(
			'id' => 822,
			'escola_id' => 822,
			'tipopagamento_id' => 822,
			'valor' => 822,
			'month_id' => 822,
			'data_limite' => '2012-07-25',
			'mes_limite' => 822,
			'dia_limite' => 822
		),
		array(
			'id' => 823,
			'escola_id' => 823,
			'tipopagamento_id' => 823,
			'valor' => 823,
			'month_id' => 823,
			'data_limite' => '2012-07-25',
			'mes_limite' => 823,
			'dia_limite' => 823
		),
		array(
			'id' => 824,
			'escola_id' => 824,
			'tipopagamento_id' => 824,
			'valor' => 824,
			'month_id' => 824,
			'data_limite' => '2012-07-25',
			'mes_limite' => 824,
			'dia_limite' => 824
		),
		array(
			'id' => 825,
			'escola_id' => 825,
			'tipopagamento_id' => 825,
			'valor' => 825,
			'month_id' => 825,
			'data_limite' => '2012-07-25',
			'mes_limite' => 825,
			'dia_limite' => 825
		),
		array(
			'id' => 826,
			'escola_id' => 826,
			'tipopagamento_id' => 826,
			'valor' => 826,
			'month_id' => 826,
			'data_limite' => '2012-07-25',
			'mes_limite' => 826,
			'dia_limite' => 826
		),
		array(
			'id' => 827,
			'escola_id' => 827,
			'tipopagamento_id' => 827,
			'valor' => 827,
			'month_id' => 827,
			'data_limite' => '2012-07-25',
			'mes_limite' => 827,
			'dia_limite' => 827
		),
		array(
			'id' => 828,
			'escola_id' => 828,
			'tipopagamento_id' => 828,
			'valor' => 828,
			'month_id' => 828,
			'data_limite' => '2012-07-25',
			'mes_limite' => 828,
			'dia_limite' => 828
		),
		array(
			'id' => 829,
			'escola_id' => 829,
			'tipopagamento_id' => 829,
			'valor' => 829,
			'month_id' => 829,
			'data_limite' => '2012-07-25',
			'mes_limite' => 829,
			'dia_limite' => 829
		),
		array(
			'id' => 830,
			'escola_id' => 830,
			'tipopagamento_id' => 830,
			'valor' => 830,
			'month_id' => 830,
			'data_limite' => '2012-07-25',
			'mes_limite' => 830,
			'dia_limite' => 830
		),
		array(
			'id' => 831,
			'escola_id' => 831,
			'tipopagamento_id' => 831,
			'valor' => 831,
			'month_id' => 831,
			'data_limite' => '2012-07-25',
			'mes_limite' => 831,
			'dia_limite' => 831
		),
		array(
			'id' => 832,
			'escola_id' => 832,
			'tipopagamento_id' => 832,
			'valor' => 832,
			'month_id' => 832,
			'data_limite' => '2012-07-25',
			'mes_limite' => 832,
			'dia_limite' => 832
		),
		array(
			'id' => 833,
			'escola_id' => 833,
			'tipopagamento_id' => 833,
			'valor' => 833,
			'month_id' => 833,
			'data_limite' => '2012-07-25',
			'mes_limite' => 833,
			'dia_limite' => 833
		),
		array(
			'id' => 834,
			'escola_id' => 834,
			'tipopagamento_id' => 834,
			'valor' => 834,
			'month_id' => 834,
			'data_limite' => '2012-07-25',
			'mes_limite' => 834,
			'dia_limite' => 834
		),
		array(
			'id' => 835,
			'escola_id' => 835,
			'tipopagamento_id' => 835,
			'valor' => 835,
			'month_id' => 835,
			'data_limite' => '2012-07-25',
			'mes_limite' => 835,
			'dia_limite' => 835
		),
		array(
			'id' => 836,
			'escola_id' => 836,
			'tipopagamento_id' => 836,
			'valor' => 836,
			'month_id' => 836,
			'data_limite' => '2012-07-25',
			'mes_limite' => 836,
			'dia_limite' => 836
		),
		array(
			'id' => 837,
			'escola_id' => 837,
			'tipopagamento_id' => 837,
			'valor' => 837,
			'month_id' => 837,
			'data_limite' => '2012-07-25',
			'mes_limite' => 837,
			'dia_limite' => 837
		),
		array(
			'id' => 838,
			'escola_id' => 838,
			'tipopagamento_id' => 838,
			'valor' => 838,
			'month_id' => 838,
			'data_limite' => '2012-07-25',
			'mes_limite' => 838,
			'dia_limite' => 838
		),
		array(
			'id' => 839,
			'escola_id' => 839,
			'tipopagamento_id' => 839,
			'valor' => 839,
			'month_id' => 839,
			'data_limite' => '2012-07-25',
			'mes_limite' => 839,
			'dia_limite' => 839
		),
		array(
			'id' => 840,
			'escola_id' => 840,
			'tipopagamento_id' => 840,
			'valor' => 840,
			'month_id' => 840,
			'data_limite' => '2012-07-25',
			'mes_limite' => 840,
			'dia_limite' => 840
		),
		array(
			'id' => 841,
			'escola_id' => 841,
			'tipopagamento_id' => 841,
			'valor' => 841,
			'month_id' => 841,
			'data_limite' => '2012-07-25',
			'mes_limite' => 841,
			'dia_limite' => 841
		),
		array(
			'id' => 842,
			'escola_id' => 842,
			'tipopagamento_id' => 842,
			'valor' => 842,
			'month_id' => 842,
			'data_limite' => '2012-07-25',
			'mes_limite' => 842,
			'dia_limite' => 842
		),
		array(
			'id' => 843,
			'escola_id' => 843,
			'tipopagamento_id' => 843,
			'valor' => 843,
			'month_id' => 843,
			'data_limite' => '2012-07-25',
			'mes_limite' => 843,
			'dia_limite' => 843
		),
		array(
			'id' => 844,
			'escola_id' => 844,
			'tipopagamento_id' => 844,
			'valor' => 844,
			'month_id' => 844,
			'data_limite' => '2012-07-25',
			'mes_limite' => 844,
			'dia_limite' => 844
		),
		array(
			'id' => 845,
			'escola_id' => 845,
			'tipopagamento_id' => 845,
			'valor' => 845,
			'month_id' => 845,
			'data_limite' => '2012-07-25',
			'mes_limite' => 845,
			'dia_limite' => 845
		),
		array(
			'id' => 846,
			'escola_id' => 846,
			'tipopagamento_id' => 846,
			'valor' => 846,
			'month_id' => 846,
			'data_limite' => '2012-07-25',
			'mes_limite' => 846,
			'dia_limite' => 846
		),
		array(
			'id' => 847,
			'escola_id' => 847,
			'tipopagamento_id' => 847,
			'valor' => 847,
			'month_id' => 847,
			'data_limite' => '2012-07-25',
			'mes_limite' => 847,
			'dia_limite' => 847
		),
		array(
			'id' => 848,
			'escola_id' => 848,
			'tipopagamento_id' => 848,
			'valor' => 848,
			'month_id' => 848,
			'data_limite' => '2012-07-25',
			'mes_limite' => 848,
			'dia_limite' => 848
		),
		array(
			'id' => 849,
			'escola_id' => 849,
			'tipopagamento_id' => 849,
			'valor' => 849,
			'month_id' => 849,
			'data_limite' => '2012-07-25',
			'mes_limite' => 849,
			'dia_limite' => 849
		),
		array(
			'id' => 850,
			'escola_id' => 850,
			'tipopagamento_id' => 850,
			'valor' => 850,
			'month_id' => 850,
			'data_limite' => '2012-07-25',
			'mes_limite' => 850,
			'dia_limite' => 850
		),
		array(
			'id' => 851,
			'escola_id' => 851,
			'tipopagamento_id' => 851,
			'valor' => 851,
			'month_id' => 851,
			'data_limite' => '2012-07-25',
			'mes_limite' => 851,
			'dia_limite' => 851
		),
		array(
			'id' => 852,
			'escola_id' => 852,
			'tipopagamento_id' => 852,
			'valor' => 852,
			'month_id' => 852,
			'data_limite' => '2012-07-25',
			'mes_limite' => 852,
			'dia_limite' => 852
		),
		array(
			'id' => 853,
			'escola_id' => 853,
			'tipopagamento_id' => 853,
			'valor' => 853,
			'month_id' => 853,
			'data_limite' => '2012-07-25',
			'mes_limite' => 853,
			'dia_limite' => 853
		),
		array(
			'id' => 854,
			'escola_id' => 854,
			'tipopagamento_id' => 854,
			'valor' => 854,
			'month_id' => 854,
			'data_limite' => '2012-07-25',
			'mes_limite' => 854,
			'dia_limite' => 854
		),
		array(
			'id' => 855,
			'escola_id' => 855,
			'tipopagamento_id' => 855,
			'valor' => 855,
			'month_id' => 855,
			'data_limite' => '2012-07-25',
			'mes_limite' => 855,
			'dia_limite' => 855
		),
		array(
			'id' => 856,
			'escola_id' => 856,
			'tipopagamento_id' => 856,
			'valor' => 856,
			'month_id' => 856,
			'data_limite' => '2012-07-25',
			'mes_limite' => 856,
			'dia_limite' => 856
		),
		array(
			'id' => 857,
			'escola_id' => 857,
			'tipopagamento_id' => 857,
			'valor' => 857,
			'month_id' => 857,
			'data_limite' => '2012-07-25',
			'mes_limite' => 857,
			'dia_limite' => 857
		),
		array(
			'id' => 858,
			'escola_id' => 858,
			'tipopagamento_id' => 858,
			'valor' => 858,
			'month_id' => 858,
			'data_limite' => '2012-07-25',
			'mes_limite' => 858,
			'dia_limite' => 858
		),
		array(
			'id' => 859,
			'escola_id' => 859,
			'tipopagamento_id' => 859,
			'valor' => 859,
			'month_id' => 859,
			'data_limite' => '2012-07-25',
			'mes_limite' => 859,
			'dia_limite' => 859
		),
		array(
			'id' => 860,
			'escola_id' => 860,
			'tipopagamento_id' => 860,
			'valor' => 860,
			'month_id' => 860,
			'data_limite' => '2012-07-25',
			'mes_limite' => 860,
			'dia_limite' => 860
		),
		array(
			'id' => 861,
			'escola_id' => 861,
			'tipopagamento_id' => 861,
			'valor' => 861,
			'month_id' => 861,
			'data_limite' => '2012-07-25',
			'mes_limite' => 861,
			'dia_limite' => 861
		),
		array(
			'id' => 862,
			'escola_id' => 862,
			'tipopagamento_id' => 862,
			'valor' => 862,
			'month_id' => 862,
			'data_limite' => '2012-07-25',
			'mes_limite' => 862,
			'dia_limite' => 862
		),
		array(
			'id' => 863,
			'escola_id' => 863,
			'tipopagamento_id' => 863,
			'valor' => 863,
			'month_id' => 863,
			'data_limite' => '2012-07-25',
			'mes_limite' => 863,
			'dia_limite' => 863
		),
		array(
			'id' => 864,
			'escola_id' => 864,
			'tipopagamento_id' => 864,
			'valor' => 864,
			'month_id' => 864,
			'data_limite' => '2012-07-25',
			'mes_limite' => 864,
			'dia_limite' => 864
		),
		array(
			'id' => 865,
			'escola_id' => 865,
			'tipopagamento_id' => 865,
			'valor' => 865,
			'month_id' => 865,
			'data_limite' => '2012-07-25',
			'mes_limite' => 865,
			'dia_limite' => 865
		),
		array(
			'id' => 866,
			'escola_id' => 866,
			'tipopagamento_id' => 866,
			'valor' => 866,
			'month_id' => 866,
			'data_limite' => '2012-07-25',
			'mes_limite' => 866,
			'dia_limite' => 866
		),
		array(
			'id' => 867,
			'escola_id' => 867,
			'tipopagamento_id' => 867,
			'valor' => 867,
			'month_id' => 867,
			'data_limite' => '2012-07-25',
			'mes_limite' => 867,
			'dia_limite' => 867
		),
		array(
			'id' => 868,
			'escola_id' => 868,
			'tipopagamento_id' => 868,
			'valor' => 868,
			'month_id' => 868,
			'data_limite' => '2012-07-25',
			'mes_limite' => 868,
			'dia_limite' => 868
		),
		array(
			'id' => 869,
			'escola_id' => 869,
			'tipopagamento_id' => 869,
			'valor' => 869,
			'month_id' => 869,
			'data_limite' => '2012-07-25',
			'mes_limite' => 869,
			'dia_limite' => 869
		),
		array(
			'id' => 870,
			'escola_id' => 870,
			'tipopagamento_id' => 870,
			'valor' => 870,
			'month_id' => 870,
			'data_limite' => '2012-07-25',
			'mes_limite' => 870,
			'dia_limite' => 870
		),
		array(
			'id' => 871,
			'escola_id' => 871,
			'tipopagamento_id' => 871,
			'valor' => 871,
			'month_id' => 871,
			'data_limite' => '2012-07-25',
			'mes_limite' => 871,
			'dia_limite' => 871
		),
		array(
			'id' => 872,
			'escola_id' => 872,
			'tipopagamento_id' => 872,
			'valor' => 872,
			'month_id' => 872,
			'data_limite' => '2012-07-25',
			'mes_limite' => 872,
			'dia_limite' => 872
		),
		array(
			'id' => 873,
			'escola_id' => 873,
			'tipopagamento_id' => 873,
			'valor' => 873,
			'month_id' => 873,
			'data_limite' => '2012-07-25',
			'mes_limite' => 873,
			'dia_limite' => 873
		),
		array(
			'id' => 874,
			'escola_id' => 874,
			'tipopagamento_id' => 874,
			'valor' => 874,
			'month_id' => 874,
			'data_limite' => '2012-07-25',
			'mes_limite' => 874,
			'dia_limite' => 874
		),
		array(
			'id' => 875,
			'escola_id' => 875,
			'tipopagamento_id' => 875,
			'valor' => 875,
			'month_id' => 875,
			'data_limite' => '2012-07-25',
			'mes_limite' => 875,
			'dia_limite' => 875
		),
		array(
			'id' => 876,
			'escola_id' => 876,
			'tipopagamento_id' => 876,
			'valor' => 876,
			'month_id' => 876,
			'data_limite' => '2012-07-25',
			'mes_limite' => 876,
			'dia_limite' => 876
		),
		array(
			'id' => 877,
			'escola_id' => 877,
			'tipopagamento_id' => 877,
			'valor' => 877,
			'month_id' => 877,
			'data_limite' => '2012-07-25',
			'mes_limite' => 877,
			'dia_limite' => 877
		),
		array(
			'id' => 878,
			'escola_id' => 878,
			'tipopagamento_id' => 878,
			'valor' => 878,
			'month_id' => 878,
			'data_limite' => '2012-07-25',
			'mes_limite' => 878,
			'dia_limite' => 878
		),
		array(
			'id' => 879,
			'escola_id' => 879,
			'tipopagamento_id' => 879,
			'valor' => 879,
			'month_id' => 879,
			'data_limite' => '2012-07-25',
			'mes_limite' => 879,
			'dia_limite' => 879
		),
		array(
			'id' => 880,
			'escola_id' => 880,
			'tipopagamento_id' => 880,
			'valor' => 880,
			'month_id' => 880,
			'data_limite' => '2012-07-25',
			'mes_limite' => 880,
			'dia_limite' => 880
		),
		array(
			'id' => 881,
			'escola_id' => 881,
			'tipopagamento_id' => 881,
			'valor' => 881,
			'month_id' => 881,
			'data_limite' => '2012-07-25',
			'mes_limite' => 881,
			'dia_limite' => 881
		),
		array(
			'id' => 882,
			'escola_id' => 882,
			'tipopagamento_id' => 882,
			'valor' => 882,
			'month_id' => 882,
			'data_limite' => '2012-07-25',
			'mes_limite' => 882,
			'dia_limite' => 882
		),
		array(
			'id' => 883,
			'escola_id' => 883,
			'tipopagamento_id' => 883,
			'valor' => 883,
			'month_id' => 883,
			'data_limite' => '2012-07-25',
			'mes_limite' => 883,
			'dia_limite' => 883
		),
		array(
			'id' => 884,
			'escola_id' => 884,
			'tipopagamento_id' => 884,
			'valor' => 884,
			'month_id' => 884,
			'data_limite' => '2012-07-25',
			'mes_limite' => 884,
			'dia_limite' => 884
		),
		array(
			'id' => 885,
			'escola_id' => 885,
			'tipopagamento_id' => 885,
			'valor' => 885,
			'month_id' => 885,
			'data_limite' => '2012-07-25',
			'mes_limite' => 885,
			'dia_limite' => 885
		),
		array(
			'id' => 886,
			'escola_id' => 886,
			'tipopagamento_id' => 886,
			'valor' => 886,
			'month_id' => 886,
			'data_limite' => '2012-07-25',
			'mes_limite' => 886,
			'dia_limite' => 886
		),
		array(
			'id' => 887,
			'escola_id' => 887,
			'tipopagamento_id' => 887,
			'valor' => 887,
			'month_id' => 887,
			'data_limite' => '2012-07-25',
			'mes_limite' => 887,
			'dia_limite' => 887
		),
		array(
			'id' => 888,
			'escola_id' => 888,
			'tipopagamento_id' => 888,
			'valor' => 888,
			'month_id' => 888,
			'data_limite' => '2012-07-25',
			'mes_limite' => 888,
			'dia_limite' => 888
		),
		array(
			'id' => 889,
			'escola_id' => 889,
			'tipopagamento_id' => 889,
			'valor' => 889,
			'month_id' => 889,
			'data_limite' => '2012-07-25',
			'mes_limite' => 889,
			'dia_limite' => 889
		),
		array(
			'id' => 890,
			'escola_id' => 890,
			'tipopagamento_id' => 890,
			'valor' => 890,
			'month_id' => 890,
			'data_limite' => '2012-07-25',
			'mes_limite' => 890,
			'dia_limite' => 890
		),
		array(
			'id' => 891,
			'escola_id' => 891,
			'tipopagamento_id' => 891,
			'valor' => 891,
			'month_id' => 891,
			'data_limite' => '2012-07-25',
			'mes_limite' => 891,
			'dia_limite' => 891
		),
		array(
			'id' => 892,
			'escola_id' => 892,
			'tipopagamento_id' => 892,
			'valor' => 892,
			'month_id' => 892,
			'data_limite' => '2012-07-25',
			'mes_limite' => 892,
			'dia_limite' => 892
		),
		array(
			'id' => 893,
			'escola_id' => 893,
			'tipopagamento_id' => 893,
			'valor' => 893,
			'month_id' => 893,
			'data_limite' => '2012-07-25',
			'mes_limite' => 893,
			'dia_limite' => 893
		),
		array(
			'id' => 894,
			'escola_id' => 894,
			'tipopagamento_id' => 894,
			'valor' => 894,
			'month_id' => 894,
			'data_limite' => '2012-07-25',
			'mes_limite' => 894,
			'dia_limite' => 894
		),
		array(
			'id' => 895,
			'escola_id' => 895,
			'tipopagamento_id' => 895,
			'valor' => 895,
			'month_id' => 895,
			'data_limite' => '2012-07-25',
			'mes_limite' => 895,
			'dia_limite' => 895
		),
		array(
			'id' => 896,
			'escola_id' => 896,
			'tipopagamento_id' => 896,
			'valor' => 896,
			'month_id' => 896,
			'data_limite' => '2012-07-25',
			'mes_limite' => 896,
			'dia_limite' => 896
		),
		array(
			'id' => 897,
			'escola_id' => 897,
			'tipopagamento_id' => 897,
			'valor' => 897,
			'month_id' => 897,
			'data_limite' => '2012-07-25',
			'mes_limite' => 897,
			'dia_limite' => 897
		),
		array(
			'id' => 898,
			'escola_id' => 898,
			'tipopagamento_id' => 898,
			'valor' => 898,
			'month_id' => 898,
			'data_limite' => '2012-07-25',
			'mes_limite' => 898,
			'dia_limite' => 898
		),
		array(
			'id' => 899,
			'escola_id' => 899,
			'tipopagamento_id' => 899,
			'valor' => 899,
			'month_id' => 899,
			'data_limite' => '2012-07-25',
			'mes_limite' => 899,
			'dia_limite' => 899
		),
		array(
			'id' => 900,
			'escola_id' => 900,
			'tipopagamento_id' => 900,
			'valor' => 900,
			'month_id' => 900,
			'data_limite' => '2012-07-25',
			'mes_limite' => 900,
			'dia_limite' => 900
		),
		array(
			'id' => 901,
			'escola_id' => 901,
			'tipopagamento_id' => 901,
			'valor' => 901,
			'month_id' => 901,
			'data_limite' => '2012-07-25',
			'mes_limite' => 901,
			'dia_limite' => 901
		),
		array(
			'id' => 902,
			'escola_id' => 902,
			'tipopagamento_id' => 902,
			'valor' => 902,
			'month_id' => 902,
			'data_limite' => '2012-07-25',
			'mes_limite' => 902,
			'dia_limite' => 902
		),
		array(
			'id' => 903,
			'escola_id' => 903,
			'tipopagamento_id' => 903,
			'valor' => 903,
			'month_id' => 903,
			'data_limite' => '2012-07-25',
			'mes_limite' => 903,
			'dia_limite' => 903
		),
		array(
			'id' => 904,
			'escola_id' => 904,
			'tipopagamento_id' => 904,
			'valor' => 904,
			'month_id' => 904,
			'data_limite' => '2012-07-25',
			'mes_limite' => 904,
			'dia_limite' => 904
		),
		array(
			'id' => 905,
			'escola_id' => 905,
			'tipopagamento_id' => 905,
			'valor' => 905,
			'month_id' => 905,
			'data_limite' => '2012-07-25',
			'mes_limite' => 905,
			'dia_limite' => 905
		),
		array(
			'id' => 906,
			'escola_id' => 906,
			'tipopagamento_id' => 906,
			'valor' => 906,
			'month_id' => 906,
			'data_limite' => '2012-07-25',
			'mes_limite' => 906,
			'dia_limite' => 906
		),
		array(
			'id' => 907,
			'escola_id' => 907,
			'tipopagamento_id' => 907,
			'valor' => 907,
			'month_id' => 907,
			'data_limite' => '2012-07-25',
			'mes_limite' => 907,
			'dia_limite' => 907
		),
		array(
			'id' => 908,
			'escola_id' => 908,
			'tipopagamento_id' => 908,
			'valor' => 908,
			'month_id' => 908,
			'data_limite' => '2012-07-25',
			'mes_limite' => 908,
			'dia_limite' => 908
		),
		array(
			'id' => 909,
			'escola_id' => 909,
			'tipopagamento_id' => 909,
			'valor' => 909,
			'month_id' => 909,
			'data_limite' => '2012-07-25',
			'mes_limite' => 909,
			'dia_limite' => 909
		),
		array(
			'id' => 910,
			'escola_id' => 910,
			'tipopagamento_id' => 910,
			'valor' => 910,
			'month_id' => 910,
			'data_limite' => '2012-07-25',
			'mes_limite' => 910,
			'dia_limite' => 910
		),
		array(
			'id' => 911,
			'escola_id' => 911,
			'tipopagamento_id' => 911,
			'valor' => 911,
			'month_id' => 911,
			'data_limite' => '2012-07-25',
			'mes_limite' => 911,
			'dia_limite' => 911
		),
		array(
			'id' => 912,
			'escola_id' => 912,
			'tipopagamento_id' => 912,
			'valor' => 912,
			'month_id' => 912,
			'data_limite' => '2012-07-25',
			'mes_limite' => 912,
			'dia_limite' => 912
		),
		array(
			'id' => 913,
			'escola_id' => 913,
			'tipopagamento_id' => 913,
			'valor' => 913,
			'month_id' => 913,
			'data_limite' => '2012-07-25',
			'mes_limite' => 913,
			'dia_limite' => 913
		),
		array(
			'id' => 914,
			'escola_id' => 914,
			'tipopagamento_id' => 914,
			'valor' => 914,
			'month_id' => 914,
			'data_limite' => '2012-07-25',
			'mes_limite' => 914,
			'dia_limite' => 914
		),
		array(
			'id' => 915,
			'escola_id' => 915,
			'tipopagamento_id' => 915,
			'valor' => 915,
			'month_id' => 915,
			'data_limite' => '2012-07-25',
			'mes_limite' => 915,
			'dia_limite' => 915
		),
		array(
			'id' => 916,
			'escola_id' => 916,
			'tipopagamento_id' => 916,
			'valor' => 916,
			'month_id' => 916,
			'data_limite' => '2012-07-25',
			'mes_limite' => 916,
			'dia_limite' => 916
		),
		array(
			'id' => 917,
			'escola_id' => 917,
			'tipopagamento_id' => 917,
			'valor' => 917,
			'month_id' => 917,
			'data_limite' => '2012-07-25',
			'mes_limite' => 917,
			'dia_limite' => 917
		),
		array(
			'id' => 918,
			'escola_id' => 918,
			'tipopagamento_id' => 918,
			'valor' => 918,
			'month_id' => 918,
			'data_limite' => '2012-07-25',
			'mes_limite' => 918,
			'dia_limite' => 918
		),
		array(
			'id' => 919,
			'escola_id' => 919,
			'tipopagamento_id' => 919,
			'valor' => 919,
			'month_id' => 919,
			'data_limite' => '2012-07-25',
			'mes_limite' => 919,
			'dia_limite' => 919
		),
		array(
			'id' => 920,
			'escola_id' => 920,
			'tipopagamento_id' => 920,
			'valor' => 920,
			'month_id' => 920,
			'data_limite' => '2012-07-25',
			'mes_limite' => 920,
			'dia_limite' => 920
		),
		array(
			'id' => 921,
			'escola_id' => 921,
			'tipopagamento_id' => 921,
			'valor' => 921,
			'month_id' => 921,
			'data_limite' => '2012-07-25',
			'mes_limite' => 921,
			'dia_limite' => 921
		),
		array(
			'id' => 922,
			'escola_id' => 922,
			'tipopagamento_id' => 922,
			'valor' => 922,
			'month_id' => 922,
			'data_limite' => '2012-07-25',
			'mes_limite' => 922,
			'dia_limite' => 922
		),
		array(
			'id' => 923,
			'escola_id' => 923,
			'tipopagamento_id' => 923,
			'valor' => 923,
			'month_id' => 923,
			'data_limite' => '2012-07-25',
			'mes_limite' => 923,
			'dia_limite' => 923
		),
		array(
			'id' => 924,
			'escola_id' => 924,
			'tipopagamento_id' => 924,
			'valor' => 924,
			'month_id' => 924,
			'data_limite' => '2012-07-25',
			'mes_limite' => 924,
			'dia_limite' => 924
		),
		array(
			'id' => 925,
			'escola_id' => 925,
			'tipopagamento_id' => 925,
			'valor' => 925,
			'month_id' => 925,
			'data_limite' => '2012-07-25',
			'mes_limite' => 925,
			'dia_limite' => 925
		),
		array(
			'id' => 926,
			'escola_id' => 926,
			'tipopagamento_id' => 926,
			'valor' => 926,
			'month_id' => 926,
			'data_limite' => '2012-07-25',
			'mes_limite' => 926,
			'dia_limite' => 926
		),
		array(
			'id' => 927,
			'escola_id' => 927,
			'tipopagamento_id' => 927,
			'valor' => 927,
			'month_id' => 927,
			'data_limite' => '2012-07-25',
			'mes_limite' => 927,
			'dia_limite' => 927
		),
		array(
			'id' => 928,
			'escola_id' => 928,
			'tipopagamento_id' => 928,
			'valor' => 928,
			'month_id' => 928,
			'data_limite' => '2012-07-25',
			'mes_limite' => 928,
			'dia_limite' => 928
		),
		array(
			'id' => 929,
			'escola_id' => 929,
			'tipopagamento_id' => 929,
			'valor' => 929,
			'month_id' => 929,
			'data_limite' => '2012-07-25',
			'mes_limite' => 929,
			'dia_limite' => 929
		),
		array(
			'id' => 930,
			'escola_id' => 930,
			'tipopagamento_id' => 930,
			'valor' => 930,
			'month_id' => 930,
			'data_limite' => '2012-07-25',
			'mes_limite' => 930,
			'dia_limite' => 930
		),
		array(
			'id' => 931,
			'escola_id' => 931,
			'tipopagamento_id' => 931,
			'valor' => 931,
			'month_id' => 931,
			'data_limite' => '2012-07-25',
			'mes_limite' => 931,
			'dia_limite' => 931
		),
		array(
			'id' => 932,
			'escola_id' => 932,
			'tipopagamento_id' => 932,
			'valor' => 932,
			'month_id' => 932,
			'data_limite' => '2012-07-25',
			'mes_limite' => 932,
			'dia_limite' => 932
		),
		array(
			'id' => 933,
			'escola_id' => 933,
			'tipopagamento_id' => 933,
			'valor' => 933,
			'month_id' => 933,
			'data_limite' => '2012-07-25',
			'mes_limite' => 933,
			'dia_limite' => 933
		),
		array(
			'id' => 934,
			'escola_id' => 934,
			'tipopagamento_id' => 934,
			'valor' => 934,
			'month_id' => 934,
			'data_limite' => '2012-07-25',
			'mes_limite' => 934,
			'dia_limite' => 934
		),
		array(
			'id' => 935,
			'escola_id' => 935,
			'tipopagamento_id' => 935,
			'valor' => 935,
			'month_id' => 935,
			'data_limite' => '2012-07-25',
			'mes_limite' => 935,
			'dia_limite' => 935
		),
		array(
			'id' => 936,
			'escola_id' => 936,
			'tipopagamento_id' => 936,
			'valor' => 936,
			'month_id' => 936,
			'data_limite' => '2012-07-25',
			'mes_limite' => 936,
			'dia_limite' => 936
		),
		array(
			'id' => 937,
			'escola_id' => 937,
			'tipopagamento_id' => 937,
			'valor' => 937,
			'month_id' => 937,
			'data_limite' => '2012-07-25',
			'mes_limite' => 937,
			'dia_limite' => 937
		),
		array(
			'id' => 938,
			'escola_id' => 938,
			'tipopagamento_id' => 938,
			'valor' => 938,
			'month_id' => 938,
			'data_limite' => '2012-07-25',
			'mes_limite' => 938,
			'dia_limite' => 938
		),
		array(
			'id' => 939,
			'escola_id' => 939,
			'tipopagamento_id' => 939,
			'valor' => 939,
			'month_id' => 939,
			'data_limite' => '2012-07-25',
			'mes_limite' => 939,
			'dia_limite' => 939
		),
		array(
			'id' => 940,
			'escola_id' => 940,
			'tipopagamento_id' => 940,
			'valor' => 940,
			'month_id' => 940,
			'data_limite' => '2012-07-25',
			'mes_limite' => 940,
			'dia_limite' => 940
		),
		array(
			'id' => 941,
			'escola_id' => 941,
			'tipopagamento_id' => 941,
			'valor' => 941,
			'month_id' => 941,
			'data_limite' => '2012-07-25',
			'mes_limite' => 941,
			'dia_limite' => 941
		),
		array(
			'id' => 942,
			'escola_id' => 942,
			'tipopagamento_id' => 942,
			'valor' => 942,
			'month_id' => 942,
			'data_limite' => '2012-07-25',
			'mes_limite' => 942,
			'dia_limite' => 942
		),
		array(
			'id' => 943,
			'escola_id' => 943,
			'tipopagamento_id' => 943,
			'valor' => 943,
			'month_id' => 943,
			'data_limite' => '2012-07-25',
			'mes_limite' => 943,
			'dia_limite' => 943
		),
		array(
			'id' => 944,
			'escola_id' => 944,
			'tipopagamento_id' => 944,
			'valor' => 944,
			'month_id' => 944,
			'data_limite' => '2012-07-25',
			'mes_limite' => 944,
			'dia_limite' => 944
		),
		array(
			'id' => 945,
			'escola_id' => 945,
			'tipopagamento_id' => 945,
			'valor' => 945,
			'month_id' => 945,
			'data_limite' => '2012-07-25',
			'mes_limite' => 945,
			'dia_limite' => 945
		),
		array(
			'id' => 946,
			'escola_id' => 946,
			'tipopagamento_id' => 946,
			'valor' => 946,
			'month_id' => 946,
			'data_limite' => '2012-07-25',
			'mes_limite' => 946,
			'dia_limite' => 946
		),
		array(
			'id' => 947,
			'escola_id' => 947,
			'tipopagamento_id' => 947,
			'valor' => 947,
			'month_id' => 947,
			'data_limite' => '2012-07-25',
			'mes_limite' => 947,
			'dia_limite' => 947
		),
		array(
			'id' => 948,
			'escola_id' => 948,
			'tipopagamento_id' => 948,
			'valor' => 948,
			'month_id' => 948,
			'data_limite' => '2012-07-25',
			'mes_limite' => 948,
			'dia_limite' => 948
		),
		array(
			'id' => 949,
			'escola_id' => 949,
			'tipopagamento_id' => 949,
			'valor' => 949,
			'month_id' => 949,
			'data_limite' => '2012-07-25',
			'mes_limite' => 949,
			'dia_limite' => 949
		),
		array(
			'id' => 950,
			'escola_id' => 950,
			'tipopagamento_id' => 950,
			'valor' => 950,
			'month_id' => 950,
			'data_limite' => '2012-07-25',
			'mes_limite' => 950,
			'dia_limite' => 950
		),
		array(
			'id' => 951,
			'escola_id' => 951,
			'tipopagamento_id' => 951,
			'valor' => 951,
			'month_id' => 951,
			'data_limite' => '2012-07-25',
			'mes_limite' => 951,
			'dia_limite' => 951
		),
		array(
			'id' => 952,
			'escola_id' => 952,
			'tipopagamento_id' => 952,
			'valor' => 952,
			'month_id' => 952,
			'data_limite' => '2012-07-25',
			'mes_limite' => 952,
			'dia_limite' => 952
		),
		array(
			'id' => 953,
			'escola_id' => 953,
			'tipopagamento_id' => 953,
			'valor' => 953,
			'month_id' => 953,
			'data_limite' => '2012-07-25',
			'mes_limite' => 953,
			'dia_limite' => 953
		),
		array(
			'id' => 954,
			'escola_id' => 954,
			'tipopagamento_id' => 954,
			'valor' => 954,
			'month_id' => 954,
			'data_limite' => '2012-07-25',
			'mes_limite' => 954,
			'dia_limite' => 954
		),
		array(
			'id' => 955,
			'escola_id' => 955,
			'tipopagamento_id' => 955,
			'valor' => 955,
			'month_id' => 955,
			'data_limite' => '2012-07-25',
			'mes_limite' => 955,
			'dia_limite' => 955
		),
		array(
			'id' => 956,
			'escola_id' => 956,
			'tipopagamento_id' => 956,
			'valor' => 956,
			'month_id' => 956,
			'data_limite' => '2012-07-25',
			'mes_limite' => 956,
			'dia_limite' => 956
		),
		array(
			'id' => 957,
			'escola_id' => 957,
			'tipopagamento_id' => 957,
			'valor' => 957,
			'month_id' => 957,
			'data_limite' => '2012-07-25',
			'mes_limite' => 957,
			'dia_limite' => 957
		),
		array(
			'id' => 958,
			'escola_id' => 958,
			'tipopagamento_id' => 958,
			'valor' => 958,
			'month_id' => 958,
			'data_limite' => '2012-07-25',
			'mes_limite' => 958,
			'dia_limite' => 958
		),
		array(
			'id' => 959,
			'escola_id' => 959,
			'tipopagamento_id' => 959,
			'valor' => 959,
			'month_id' => 959,
			'data_limite' => '2012-07-25',
			'mes_limite' => 959,
			'dia_limite' => 959
		),
		array(
			'id' => 960,
			'escola_id' => 960,
			'tipopagamento_id' => 960,
			'valor' => 960,
			'month_id' => 960,
			'data_limite' => '2012-07-25',
			'mes_limite' => 960,
			'dia_limite' => 960
		),
		array(
			'id' => 961,
			'escola_id' => 961,
			'tipopagamento_id' => 961,
			'valor' => 961,
			'month_id' => 961,
			'data_limite' => '2012-07-25',
			'mes_limite' => 961,
			'dia_limite' => 961
		),
		array(
			'id' => 962,
			'escola_id' => 962,
			'tipopagamento_id' => 962,
			'valor' => 962,
			'month_id' => 962,
			'data_limite' => '2012-07-25',
			'mes_limite' => 962,
			'dia_limite' => 962
		),
		array(
			'id' => 963,
			'escola_id' => 963,
			'tipopagamento_id' => 963,
			'valor' => 963,
			'month_id' => 963,
			'data_limite' => '2012-07-25',
			'mes_limite' => 963,
			'dia_limite' => 963
		),
		array(
			'id' => 964,
			'escola_id' => 964,
			'tipopagamento_id' => 964,
			'valor' => 964,
			'month_id' => 964,
			'data_limite' => '2012-07-25',
			'mes_limite' => 964,
			'dia_limite' => 964
		),
		array(
			'id' => 965,
			'escola_id' => 965,
			'tipopagamento_id' => 965,
			'valor' => 965,
			'month_id' => 965,
			'data_limite' => '2012-07-25',
			'mes_limite' => 965,
			'dia_limite' => 965
		),
		array(
			'id' => 966,
			'escola_id' => 966,
			'tipopagamento_id' => 966,
			'valor' => 966,
			'month_id' => 966,
			'data_limite' => '2012-07-25',
			'mes_limite' => 966,
			'dia_limite' => 966
		),
		array(
			'id' => 967,
			'escola_id' => 967,
			'tipopagamento_id' => 967,
			'valor' => 967,
			'month_id' => 967,
			'data_limite' => '2012-07-25',
			'mes_limite' => 967,
			'dia_limite' => 967
		),
		array(
			'id' => 968,
			'escola_id' => 968,
			'tipopagamento_id' => 968,
			'valor' => 968,
			'month_id' => 968,
			'data_limite' => '2012-07-25',
			'mes_limite' => 968,
			'dia_limite' => 968
		),
		array(
			'id' => 969,
			'escola_id' => 969,
			'tipopagamento_id' => 969,
			'valor' => 969,
			'month_id' => 969,
			'data_limite' => '2012-07-25',
			'mes_limite' => 969,
			'dia_limite' => 969
		),
		array(
			'id' => 970,
			'escola_id' => 970,
			'tipopagamento_id' => 970,
			'valor' => 970,
			'month_id' => 970,
			'data_limite' => '2012-07-25',
			'mes_limite' => 970,
			'dia_limite' => 970
		),
		array(
			'id' => 971,
			'escola_id' => 971,
			'tipopagamento_id' => 971,
			'valor' => 971,
			'month_id' => 971,
			'data_limite' => '2012-07-25',
			'mes_limite' => 971,
			'dia_limite' => 971
		),
		array(
			'id' => 972,
			'escola_id' => 972,
			'tipopagamento_id' => 972,
			'valor' => 972,
			'month_id' => 972,
			'data_limite' => '2012-07-25',
			'mes_limite' => 972,
			'dia_limite' => 972
		),
		array(
			'id' => 973,
			'escola_id' => 973,
			'tipopagamento_id' => 973,
			'valor' => 973,
			'month_id' => 973,
			'data_limite' => '2012-07-25',
			'mes_limite' => 973,
			'dia_limite' => 973
		),
		array(
			'id' => 974,
			'escola_id' => 974,
			'tipopagamento_id' => 974,
			'valor' => 974,
			'month_id' => 974,
			'data_limite' => '2012-07-25',
			'mes_limite' => 974,
			'dia_limite' => 974
		),
		array(
			'id' => 975,
			'escola_id' => 975,
			'tipopagamento_id' => 975,
			'valor' => 975,
			'month_id' => 975,
			'data_limite' => '2012-07-25',
			'mes_limite' => 975,
			'dia_limite' => 975
		),
		array(
			'id' => 976,
			'escola_id' => 976,
			'tipopagamento_id' => 976,
			'valor' => 976,
			'month_id' => 976,
			'data_limite' => '2012-07-25',
			'mes_limite' => 976,
			'dia_limite' => 976
		),
		array(
			'id' => 977,
			'escola_id' => 977,
			'tipopagamento_id' => 977,
			'valor' => 977,
			'month_id' => 977,
			'data_limite' => '2012-07-25',
			'mes_limite' => 977,
			'dia_limite' => 977
		),
		array(
			'id' => 978,
			'escola_id' => 978,
			'tipopagamento_id' => 978,
			'valor' => 978,
			'month_id' => 978,
			'data_limite' => '2012-07-25',
			'mes_limite' => 978,
			'dia_limite' => 978
		),
		array(
			'id' => 979,
			'escola_id' => 979,
			'tipopagamento_id' => 979,
			'valor' => 979,
			'month_id' => 979,
			'data_limite' => '2012-07-25',
			'mes_limite' => 979,
			'dia_limite' => 979
		),
		array(
			'id' => 980,
			'escola_id' => 980,
			'tipopagamento_id' => 980,
			'valor' => 980,
			'month_id' => 980,
			'data_limite' => '2012-07-25',
			'mes_limite' => 980,
			'dia_limite' => 980
		),
		array(
			'id' => 981,
			'escola_id' => 981,
			'tipopagamento_id' => 981,
			'valor' => 981,
			'month_id' => 981,
			'data_limite' => '2012-07-25',
			'mes_limite' => 981,
			'dia_limite' => 981
		),
		array(
			'id' => 982,
			'escola_id' => 982,
			'tipopagamento_id' => 982,
			'valor' => 982,
			'month_id' => 982,
			'data_limite' => '2012-07-25',
			'mes_limite' => 982,
			'dia_limite' => 982
		),
		array(
			'id' => 983,
			'escola_id' => 983,
			'tipopagamento_id' => 983,
			'valor' => 983,
			'month_id' => 983,
			'data_limite' => '2012-07-25',
			'mes_limite' => 983,
			'dia_limite' => 983
		),
		array(
			'id' => 984,
			'escola_id' => 984,
			'tipopagamento_id' => 984,
			'valor' => 984,
			'month_id' => 984,
			'data_limite' => '2012-07-25',
			'mes_limite' => 984,
			'dia_limite' => 984
		),
		array(
			'id' => 985,
			'escola_id' => 985,
			'tipopagamento_id' => 985,
			'valor' => 985,
			'month_id' => 985,
			'data_limite' => '2012-07-25',
			'mes_limite' => 985,
			'dia_limite' => 985
		),
		array(
			'id' => 986,
			'escola_id' => 986,
			'tipopagamento_id' => 986,
			'valor' => 986,
			'month_id' => 986,
			'data_limite' => '2012-07-25',
			'mes_limite' => 986,
			'dia_limite' => 986
		),
		array(
			'id' => 987,
			'escola_id' => 987,
			'tipopagamento_id' => 987,
			'valor' => 987,
			'month_id' => 987,
			'data_limite' => '2012-07-25',
			'mes_limite' => 987,
			'dia_limite' => 987
		),
		array(
			'id' => 988,
			'escola_id' => 988,
			'tipopagamento_id' => 988,
			'valor' => 988,
			'month_id' => 988,
			'data_limite' => '2012-07-25',
			'mes_limite' => 988,
			'dia_limite' => 988
		),
		array(
			'id' => 989,
			'escola_id' => 989,
			'tipopagamento_id' => 989,
			'valor' => 989,
			'month_id' => 989,
			'data_limite' => '2012-07-25',
			'mes_limite' => 989,
			'dia_limite' => 989
		),
		array(
			'id' => 990,
			'escola_id' => 990,
			'tipopagamento_id' => 990,
			'valor' => 990,
			'month_id' => 990,
			'data_limite' => '2012-07-25',
			'mes_limite' => 990,
			'dia_limite' => 990
		),
		array(
			'id' => 991,
			'escola_id' => 991,
			'tipopagamento_id' => 991,
			'valor' => 991,
			'month_id' => 991,
			'data_limite' => '2012-07-25',
			'mes_limite' => 991,
			'dia_limite' => 991
		),
		array(
			'id' => 992,
			'escola_id' => 992,
			'tipopagamento_id' => 992,
			'valor' => 992,
			'month_id' => 992,
			'data_limite' => '2012-07-25',
			'mes_limite' => 992,
			'dia_limite' => 992
		),
		array(
			'id' => 993,
			'escola_id' => 993,
			'tipopagamento_id' => 993,
			'valor' => 993,
			'month_id' => 993,
			'data_limite' => '2012-07-25',
			'mes_limite' => 993,
			'dia_limite' => 993
		),
		array(
			'id' => 994,
			'escola_id' => 994,
			'tipopagamento_id' => 994,
			'valor' => 994,
			'month_id' => 994,
			'data_limite' => '2012-07-25',
			'mes_limite' => 994,
			'dia_limite' => 994
		),
		array(
			'id' => 995,
			'escola_id' => 995,
			'tipopagamento_id' => 995,
			'valor' => 995,
			'month_id' => 995,
			'data_limite' => '2012-07-25',
			'mes_limite' => 995,
			'dia_limite' => 995
		),
		array(
			'id' => 996,
			'escola_id' => 996,
			'tipopagamento_id' => 996,
			'valor' => 996,
			'month_id' => 996,
			'data_limite' => '2012-07-25',
			'mes_limite' => 996,
			'dia_limite' => 996
		),
		array(
			'id' => 997,
			'escola_id' => 997,
			'tipopagamento_id' => 997,
			'valor' => 997,
			'month_id' => 997,
			'data_limite' => '2012-07-25',
			'mes_limite' => 997,
			'dia_limite' => 997
		),
		array(
			'id' => 998,
			'escola_id' => 998,
			'tipopagamento_id' => 998,
			'valor' => 998,
			'month_id' => 998,
			'data_limite' => '2012-07-25',
			'mes_limite' => 998,
			'dia_limite' => 998
		),
		array(
			'id' => 999,
			'escola_id' => 999,
			'tipopagamento_id' => 999,
			'valor' => 999,
			'month_id' => 999,
			'data_limite' => '2012-07-25',
			'mes_limite' => 999,
			'dia_limite' => 999
		),
		array(
			'id' => 1000,
			'escola_id' => 1000,
			'tipopagamento_id' => 1000,
			'valor' => 1000,
			'month_id' => 1000,
			'data_limite' => '2012-07-25',
			'mes_limite' => 1000,
			'dia_limite' => 1000
		),
	);

}
