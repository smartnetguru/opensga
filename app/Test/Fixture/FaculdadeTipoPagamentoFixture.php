<?php
/**
 * FaculdadeTipoPagamentoFixture
 *
 */
class FaculdadeTipoPagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
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
			'faculdade_id' => 1,
			'tipopagamento_id' => 1,
			'valor' => 1
		),
		array(
			'id' => 2,
			'faculdade_id' => 2,
			'tipopagamento_id' => 2,
			'valor' => 2
		),
		array(
			'id' => 3,
			'faculdade_id' => 3,
			'tipopagamento_id' => 3,
			'valor' => 3
		),
		array(
			'id' => 4,
			'faculdade_id' => 4,
			'tipopagamento_id' => 4,
			'valor' => 4
		),
		array(
			'id' => 5,
			'faculdade_id' => 5,
			'tipopagamento_id' => 5,
			'valor' => 5
		),
		array(
			'id' => 6,
			'faculdade_id' => 6,
			'tipopagamento_id' => 6,
			'valor' => 6
		),
		array(
			'id' => 7,
			'faculdade_id' => 7,
			'tipopagamento_id' => 7,
			'valor' => 7
		),
		array(
			'id' => 8,
			'faculdade_id' => 8,
			'tipopagamento_id' => 8,
			'valor' => 8
		),
		array(
			'id' => 9,
			'faculdade_id' => 9,
			'tipopagamento_id' => 9,
			'valor' => 9
		),
		array(
			'id' => 10,
			'faculdade_id' => 10,
			'tipopagamento_id' => 10,
			'valor' => 10
		),
		array(
			'id' => 11,
			'faculdade_id' => 11,
			'tipopagamento_id' => 11,
			'valor' => 11
		),
		array(
			'id' => 12,
			'faculdade_id' => 12,
			'tipopagamento_id' => 12,
			'valor' => 12
		),
		array(
			'id' => 13,
			'faculdade_id' => 13,
			'tipopagamento_id' => 13,
			'valor' => 13
		),
		array(
			'id' => 14,
			'faculdade_id' => 14,
			'tipopagamento_id' => 14,
			'valor' => 14
		),
		array(
			'id' => 15,
			'faculdade_id' => 15,
			'tipopagamento_id' => 15,
			'valor' => 15
		),
		array(
			'id' => 16,
			'faculdade_id' => 16,
			'tipopagamento_id' => 16,
			'valor' => 16
		),
		array(
			'id' => 17,
			'faculdade_id' => 17,
			'tipopagamento_id' => 17,
			'valor' => 17
		),
		array(
			'id' => 18,
			'faculdade_id' => 18,
			'tipopagamento_id' => 18,
			'valor' => 18
		),
		array(
			'id' => 19,
			'faculdade_id' => 19,
			'tipopagamento_id' => 19,
			'valor' => 19
		),
		array(
			'id' => 20,
			'faculdade_id' => 20,
			'tipopagamento_id' => 20,
			'valor' => 20
		),
		array(
			'id' => 21,
			'faculdade_id' => 21,
			'tipopagamento_id' => 21,
			'valor' => 21
		),
		array(
			'id' => 22,
			'faculdade_id' => 22,
			'tipopagamento_id' => 22,
			'valor' => 22
		),
		array(
			'id' => 23,
			'faculdade_id' => 23,
			'tipopagamento_id' => 23,
			'valor' => 23
		),
		array(
			'id' => 24,
			'faculdade_id' => 24,
			'tipopagamento_id' => 24,
			'valor' => 24
		),
		array(
			'id' => 25,
			'faculdade_id' => 25,
			'tipopagamento_id' => 25,
			'valor' => 25
		),
		array(
			'id' => 26,
			'faculdade_id' => 26,
			'tipopagamento_id' => 26,
			'valor' => 26
		),
		array(
			'id' => 27,
			'faculdade_id' => 27,
			'tipopagamento_id' => 27,
			'valor' => 27
		),
		array(
			'id' => 28,
			'faculdade_id' => 28,
			'tipopagamento_id' => 28,
			'valor' => 28
		),
		array(
			'id' => 29,
			'faculdade_id' => 29,
			'tipopagamento_id' => 29,
			'valor' => 29
		),
		array(
			'id' => 30,
			'faculdade_id' => 30,
			'tipopagamento_id' => 30,
			'valor' => 30
		),
		array(
			'id' => 31,
			'faculdade_id' => 31,
			'tipopagamento_id' => 31,
			'valor' => 31
		),
		array(
			'id' => 32,
			'faculdade_id' => 32,
			'tipopagamento_id' => 32,
			'valor' => 32
		),
		array(
			'id' => 33,
			'faculdade_id' => 33,
			'tipopagamento_id' => 33,
			'valor' => 33
		),
		array(
			'id' => 34,
			'faculdade_id' => 34,
			'tipopagamento_id' => 34,
			'valor' => 34
		),
		array(
			'id' => 35,
			'faculdade_id' => 35,
			'tipopagamento_id' => 35,
			'valor' => 35
		),
		array(
			'id' => 36,
			'faculdade_id' => 36,
			'tipopagamento_id' => 36,
			'valor' => 36
		),
		array(
			'id' => 37,
			'faculdade_id' => 37,
			'tipopagamento_id' => 37,
			'valor' => 37
		),
		array(
			'id' => 38,
			'faculdade_id' => 38,
			'tipopagamento_id' => 38,
			'valor' => 38
		),
		array(
			'id' => 39,
			'faculdade_id' => 39,
			'tipopagamento_id' => 39,
			'valor' => 39
		),
		array(
			'id' => 40,
			'faculdade_id' => 40,
			'tipopagamento_id' => 40,
			'valor' => 40
		),
		array(
			'id' => 41,
			'faculdade_id' => 41,
			'tipopagamento_id' => 41,
			'valor' => 41
		),
		array(
			'id' => 42,
			'faculdade_id' => 42,
			'tipopagamento_id' => 42,
			'valor' => 42
		),
		array(
			'id' => 43,
			'faculdade_id' => 43,
			'tipopagamento_id' => 43,
			'valor' => 43
		),
		array(
			'id' => 44,
			'faculdade_id' => 44,
			'tipopagamento_id' => 44,
			'valor' => 44
		),
		array(
			'id' => 45,
			'faculdade_id' => 45,
			'tipopagamento_id' => 45,
			'valor' => 45
		),
		array(
			'id' => 46,
			'faculdade_id' => 46,
			'tipopagamento_id' => 46,
			'valor' => 46
		),
		array(
			'id' => 47,
			'faculdade_id' => 47,
			'tipopagamento_id' => 47,
			'valor' => 47
		),
		array(
			'id' => 48,
			'faculdade_id' => 48,
			'tipopagamento_id' => 48,
			'valor' => 48
		),
		array(
			'id' => 49,
			'faculdade_id' => 49,
			'tipopagamento_id' => 49,
			'valor' => 49
		),
		array(
			'id' => 50,
			'faculdade_id' => 50,
			'tipopagamento_id' => 50,
			'valor' => 50
		),
		array(
			'id' => 51,
			'faculdade_id' => 51,
			'tipopagamento_id' => 51,
			'valor' => 51
		),
		array(
			'id' => 52,
			'faculdade_id' => 52,
			'tipopagamento_id' => 52,
			'valor' => 52
		),
		array(
			'id' => 53,
			'faculdade_id' => 53,
			'tipopagamento_id' => 53,
			'valor' => 53
		),
		array(
			'id' => 54,
			'faculdade_id' => 54,
			'tipopagamento_id' => 54,
			'valor' => 54
		),
		array(
			'id' => 55,
			'faculdade_id' => 55,
			'tipopagamento_id' => 55,
			'valor' => 55
		),
		array(
			'id' => 56,
			'faculdade_id' => 56,
			'tipopagamento_id' => 56,
			'valor' => 56
		),
		array(
			'id' => 57,
			'faculdade_id' => 57,
			'tipopagamento_id' => 57,
			'valor' => 57
		),
		array(
			'id' => 58,
			'faculdade_id' => 58,
			'tipopagamento_id' => 58,
			'valor' => 58
		),
		array(
			'id' => 59,
			'faculdade_id' => 59,
			'tipopagamento_id' => 59,
			'valor' => 59
		),
		array(
			'id' => 60,
			'faculdade_id' => 60,
			'tipopagamento_id' => 60,
			'valor' => 60
		),
		array(
			'id' => 61,
			'faculdade_id' => 61,
			'tipopagamento_id' => 61,
			'valor' => 61
		),
		array(
			'id' => 62,
			'faculdade_id' => 62,
			'tipopagamento_id' => 62,
			'valor' => 62
		),
		array(
			'id' => 63,
			'faculdade_id' => 63,
			'tipopagamento_id' => 63,
			'valor' => 63
		),
		array(
			'id' => 64,
			'faculdade_id' => 64,
			'tipopagamento_id' => 64,
			'valor' => 64
		),
		array(
			'id' => 65,
			'faculdade_id' => 65,
			'tipopagamento_id' => 65,
			'valor' => 65
		),
		array(
			'id' => 66,
			'faculdade_id' => 66,
			'tipopagamento_id' => 66,
			'valor' => 66
		),
		array(
			'id' => 67,
			'faculdade_id' => 67,
			'tipopagamento_id' => 67,
			'valor' => 67
		),
		array(
			'id' => 68,
			'faculdade_id' => 68,
			'tipopagamento_id' => 68,
			'valor' => 68
		),
		array(
			'id' => 69,
			'faculdade_id' => 69,
			'tipopagamento_id' => 69,
			'valor' => 69
		),
		array(
			'id' => 70,
			'faculdade_id' => 70,
			'tipopagamento_id' => 70,
			'valor' => 70
		),
		array(
			'id' => 71,
			'faculdade_id' => 71,
			'tipopagamento_id' => 71,
			'valor' => 71
		),
		array(
			'id' => 72,
			'faculdade_id' => 72,
			'tipopagamento_id' => 72,
			'valor' => 72
		),
		array(
			'id' => 73,
			'faculdade_id' => 73,
			'tipopagamento_id' => 73,
			'valor' => 73
		),
		array(
			'id' => 74,
			'faculdade_id' => 74,
			'tipopagamento_id' => 74,
			'valor' => 74
		),
		array(
			'id' => 75,
			'faculdade_id' => 75,
			'tipopagamento_id' => 75,
			'valor' => 75
		),
		array(
			'id' => 76,
			'faculdade_id' => 76,
			'tipopagamento_id' => 76,
			'valor' => 76
		),
		array(
			'id' => 77,
			'faculdade_id' => 77,
			'tipopagamento_id' => 77,
			'valor' => 77
		),
		array(
			'id' => 78,
			'faculdade_id' => 78,
			'tipopagamento_id' => 78,
			'valor' => 78
		),
		array(
			'id' => 79,
			'faculdade_id' => 79,
			'tipopagamento_id' => 79,
			'valor' => 79
		),
		array(
			'id' => 80,
			'faculdade_id' => 80,
			'tipopagamento_id' => 80,
			'valor' => 80
		),
		array(
			'id' => 81,
			'faculdade_id' => 81,
			'tipopagamento_id' => 81,
			'valor' => 81
		),
		array(
			'id' => 82,
			'faculdade_id' => 82,
			'tipopagamento_id' => 82,
			'valor' => 82
		),
		array(
			'id' => 83,
			'faculdade_id' => 83,
			'tipopagamento_id' => 83,
			'valor' => 83
		),
		array(
			'id' => 84,
			'faculdade_id' => 84,
			'tipopagamento_id' => 84,
			'valor' => 84
		),
		array(
			'id' => 85,
			'faculdade_id' => 85,
			'tipopagamento_id' => 85,
			'valor' => 85
		),
		array(
			'id' => 86,
			'faculdade_id' => 86,
			'tipopagamento_id' => 86,
			'valor' => 86
		),
		array(
			'id' => 87,
			'faculdade_id' => 87,
			'tipopagamento_id' => 87,
			'valor' => 87
		),
		array(
			'id' => 88,
			'faculdade_id' => 88,
			'tipopagamento_id' => 88,
			'valor' => 88
		),
		array(
			'id' => 89,
			'faculdade_id' => 89,
			'tipopagamento_id' => 89,
			'valor' => 89
		),
		array(
			'id' => 90,
			'faculdade_id' => 90,
			'tipopagamento_id' => 90,
			'valor' => 90
		),
		array(
			'id' => 91,
			'faculdade_id' => 91,
			'tipopagamento_id' => 91,
			'valor' => 91
		),
		array(
			'id' => 92,
			'faculdade_id' => 92,
			'tipopagamento_id' => 92,
			'valor' => 92
		),
		array(
			'id' => 93,
			'faculdade_id' => 93,
			'tipopagamento_id' => 93,
			'valor' => 93
		),
		array(
			'id' => 94,
			'faculdade_id' => 94,
			'tipopagamento_id' => 94,
			'valor' => 94
		),
		array(
			'id' => 95,
			'faculdade_id' => 95,
			'tipopagamento_id' => 95,
			'valor' => 95
		),
		array(
			'id' => 96,
			'faculdade_id' => 96,
			'tipopagamento_id' => 96,
			'valor' => 96
		),
		array(
			'id' => 97,
			'faculdade_id' => 97,
			'tipopagamento_id' => 97,
			'valor' => 97
		),
		array(
			'id' => 98,
			'faculdade_id' => 98,
			'tipopagamento_id' => 98,
			'valor' => 98
		),
		array(
			'id' => 99,
			'faculdade_id' => 99,
			'tipopagamento_id' => 99,
			'valor' => 99
		),
		array(
			'id' => 100,
			'faculdade_id' => 100,
			'tipopagamento_id' => 100,
			'valor' => 100
		),
		array(
			'id' => 101,
			'faculdade_id' => 101,
			'tipopagamento_id' => 101,
			'valor' => 101
		),
		array(
			'id' => 102,
			'faculdade_id' => 102,
			'tipopagamento_id' => 102,
			'valor' => 102
		),
		array(
			'id' => 103,
			'faculdade_id' => 103,
			'tipopagamento_id' => 103,
			'valor' => 103
		),
		array(
			'id' => 104,
			'faculdade_id' => 104,
			'tipopagamento_id' => 104,
			'valor' => 104
		),
		array(
			'id' => 105,
			'faculdade_id' => 105,
			'tipopagamento_id' => 105,
			'valor' => 105
		),
		array(
			'id' => 106,
			'faculdade_id' => 106,
			'tipopagamento_id' => 106,
			'valor' => 106
		),
		array(
			'id' => 107,
			'faculdade_id' => 107,
			'tipopagamento_id' => 107,
			'valor' => 107
		),
		array(
			'id' => 108,
			'faculdade_id' => 108,
			'tipopagamento_id' => 108,
			'valor' => 108
		),
		array(
			'id' => 109,
			'faculdade_id' => 109,
			'tipopagamento_id' => 109,
			'valor' => 109
		),
		array(
			'id' => 110,
			'faculdade_id' => 110,
			'tipopagamento_id' => 110,
			'valor' => 110
		),
		array(
			'id' => 111,
			'faculdade_id' => 111,
			'tipopagamento_id' => 111,
			'valor' => 111
		),
		array(
			'id' => 112,
			'faculdade_id' => 112,
			'tipopagamento_id' => 112,
			'valor' => 112
		),
		array(
			'id' => 113,
			'faculdade_id' => 113,
			'tipopagamento_id' => 113,
			'valor' => 113
		),
		array(
			'id' => 114,
			'faculdade_id' => 114,
			'tipopagamento_id' => 114,
			'valor' => 114
		),
		array(
			'id' => 115,
			'faculdade_id' => 115,
			'tipopagamento_id' => 115,
			'valor' => 115
		),
		array(
			'id' => 116,
			'faculdade_id' => 116,
			'tipopagamento_id' => 116,
			'valor' => 116
		),
		array(
			'id' => 117,
			'faculdade_id' => 117,
			'tipopagamento_id' => 117,
			'valor' => 117
		),
		array(
			'id' => 118,
			'faculdade_id' => 118,
			'tipopagamento_id' => 118,
			'valor' => 118
		),
		array(
			'id' => 119,
			'faculdade_id' => 119,
			'tipopagamento_id' => 119,
			'valor' => 119
		),
		array(
			'id' => 120,
			'faculdade_id' => 120,
			'tipopagamento_id' => 120,
			'valor' => 120
		),
		array(
			'id' => 121,
			'faculdade_id' => 121,
			'tipopagamento_id' => 121,
			'valor' => 121
		),
		array(
			'id' => 122,
			'faculdade_id' => 122,
			'tipopagamento_id' => 122,
			'valor' => 122
		),
		array(
			'id' => 123,
			'faculdade_id' => 123,
			'tipopagamento_id' => 123,
			'valor' => 123
		),
		array(
			'id' => 124,
			'faculdade_id' => 124,
			'tipopagamento_id' => 124,
			'valor' => 124
		),
		array(
			'id' => 125,
			'faculdade_id' => 125,
			'tipopagamento_id' => 125,
			'valor' => 125
		),
		array(
			'id' => 126,
			'faculdade_id' => 126,
			'tipopagamento_id' => 126,
			'valor' => 126
		),
		array(
			'id' => 127,
			'faculdade_id' => 127,
			'tipopagamento_id' => 127,
			'valor' => 127
		),
		array(
			'id' => 128,
			'faculdade_id' => 128,
			'tipopagamento_id' => 128,
			'valor' => 128
		),
		array(
			'id' => 129,
			'faculdade_id' => 129,
			'tipopagamento_id' => 129,
			'valor' => 129
		),
		array(
			'id' => 130,
			'faculdade_id' => 130,
			'tipopagamento_id' => 130,
			'valor' => 130
		),
		array(
			'id' => 131,
			'faculdade_id' => 131,
			'tipopagamento_id' => 131,
			'valor' => 131
		),
		array(
			'id' => 132,
			'faculdade_id' => 132,
			'tipopagamento_id' => 132,
			'valor' => 132
		),
		array(
			'id' => 133,
			'faculdade_id' => 133,
			'tipopagamento_id' => 133,
			'valor' => 133
		),
		array(
			'id' => 134,
			'faculdade_id' => 134,
			'tipopagamento_id' => 134,
			'valor' => 134
		),
		array(
			'id' => 135,
			'faculdade_id' => 135,
			'tipopagamento_id' => 135,
			'valor' => 135
		),
		array(
			'id' => 136,
			'faculdade_id' => 136,
			'tipopagamento_id' => 136,
			'valor' => 136
		),
		array(
			'id' => 137,
			'faculdade_id' => 137,
			'tipopagamento_id' => 137,
			'valor' => 137
		),
		array(
			'id' => 138,
			'faculdade_id' => 138,
			'tipopagamento_id' => 138,
			'valor' => 138
		),
		array(
			'id' => 139,
			'faculdade_id' => 139,
			'tipopagamento_id' => 139,
			'valor' => 139
		),
		array(
			'id' => 140,
			'faculdade_id' => 140,
			'tipopagamento_id' => 140,
			'valor' => 140
		),
		array(
			'id' => 141,
			'faculdade_id' => 141,
			'tipopagamento_id' => 141,
			'valor' => 141
		),
		array(
			'id' => 142,
			'faculdade_id' => 142,
			'tipopagamento_id' => 142,
			'valor' => 142
		),
		array(
			'id' => 143,
			'faculdade_id' => 143,
			'tipopagamento_id' => 143,
			'valor' => 143
		),
		array(
			'id' => 144,
			'faculdade_id' => 144,
			'tipopagamento_id' => 144,
			'valor' => 144
		),
		array(
			'id' => 145,
			'faculdade_id' => 145,
			'tipopagamento_id' => 145,
			'valor' => 145
		),
		array(
			'id' => 146,
			'faculdade_id' => 146,
			'tipopagamento_id' => 146,
			'valor' => 146
		),
		array(
			'id' => 147,
			'faculdade_id' => 147,
			'tipopagamento_id' => 147,
			'valor' => 147
		),
		array(
			'id' => 148,
			'faculdade_id' => 148,
			'tipopagamento_id' => 148,
			'valor' => 148
		),
		array(
			'id' => 149,
			'faculdade_id' => 149,
			'tipopagamento_id' => 149,
			'valor' => 149
		),
		array(
			'id' => 150,
			'faculdade_id' => 150,
			'tipopagamento_id' => 150,
			'valor' => 150
		),
		array(
			'id' => 151,
			'faculdade_id' => 151,
			'tipopagamento_id' => 151,
			'valor' => 151
		),
		array(
			'id' => 152,
			'faculdade_id' => 152,
			'tipopagamento_id' => 152,
			'valor' => 152
		),
		array(
			'id' => 153,
			'faculdade_id' => 153,
			'tipopagamento_id' => 153,
			'valor' => 153
		),
		array(
			'id' => 154,
			'faculdade_id' => 154,
			'tipopagamento_id' => 154,
			'valor' => 154
		),
		array(
			'id' => 155,
			'faculdade_id' => 155,
			'tipopagamento_id' => 155,
			'valor' => 155
		),
		array(
			'id' => 156,
			'faculdade_id' => 156,
			'tipopagamento_id' => 156,
			'valor' => 156
		),
		array(
			'id' => 157,
			'faculdade_id' => 157,
			'tipopagamento_id' => 157,
			'valor' => 157
		),
		array(
			'id' => 158,
			'faculdade_id' => 158,
			'tipopagamento_id' => 158,
			'valor' => 158
		),
		array(
			'id' => 159,
			'faculdade_id' => 159,
			'tipopagamento_id' => 159,
			'valor' => 159
		),
		array(
			'id' => 160,
			'faculdade_id' => 160,
			'tipopagamento_id' => 160,
			'valor' => 160
		),
		array(
			'id' => 161,
			'faculdade_id' => 161,
			'tipopagamento_id' => 161,
			'valor' => 161
		),
		array(
			'id' => 162,
			'faculdade_id' => 162,
			'tipopagamento_id' => 162,
			'valor' => 162
		),
		array(
			'id' => 163,
			'faculdade_id' => 163,
			'tipopagamento_id' => 163,
			'valor' => 163
		),
		array(
			'id' => 164,
			'faculdade_id' => 164,
			'tipopagamento_id' => 164,
			'valor' => 164
		),
		array(
			'id' => 165,
			'faculdade_id' => 165,
			'tipopagamento_id' => 165,
			'valor' => 165
		),
		array(
			'id' => 166,
			'faculdade_id' => 166,
			'tipopagamento_id' => 166,
			'valor' => 166
		),
		array(
			'id' => 167,
			'faculdade_id' => 167,
			'tipopagamento_id' => 167,
			'valor' => 167
		),
		array(
			'id' => 168,
			'faculdade_id' => 168,
			'tipopagamento_id' => 168,
			'valor' => 168
		),
		array(
			'id' => 169,
			'faculdade_id' => 169,
			'tipopagamento_id' => 169,
			'valor' => 169
		),
		array(
			'id' => 170,
			'faculdade_id' => 170,
			'tipopagamento_id' => 170,
			'valor' => 170
		),
		array(
			'id' => 171,
			'faculdade_id' => 171,
			'tipopagamento_id' => 171,
			'valor' => 171
		),
		array(
			'id' => 172,
			'faculdade_id' => 172,
			'tipopagamento_id' => 172,
			'valor' => 172
		),
		array(
			'id' => 173,
			'faculdade_id' => 173,
			'tipopagamento_id' => 173,
			'valor' => 173
		),
		array(
			'id' => 174,
			'faculdade_id' => 174,
			'tipopagamento_id' => 174,
			'valor' => 174
		),
		array(
			'id' => 175,
			'faculdade_id' => 175,
			'tipopagamento_id' => 175,
			'valor' => 175
		),
		array(
			'id' => 176,
			'faculdade_id' => 176,
			'tipopagamento_id' => 176,
			'valor' => 176
		),
		array(
			'id' => 177,
			'faculdade_id' => 177,
			'tipopagamento_id' => 177,
			'valor' => 177
		),
		array(
			'id' => 178,
			'faculdade_id' => 178,
			'tipopagamento_id' => 178,
			'valor' => 178
		),
		array(
			'id' => 179,
			'faculdade_id' => 179,
			'tipopagamento_id' => 179,
			'valor' => 179
		),
		array(
			'id' => 180,
			'faculdade_id' => 180,
			'tipopagamento_id' => 180,
			'valor' => 180
		),
		array(
			'id' => 181,
			'faculdade_id' => 181,
			'tipopagamento_id' => 181,
			'valor' => 181
		),
		array(
			'id' => 182,
			'faculdade_id' => 182,
			'tipopagamento_id' => 182,
			'valor' => 182
		),
		array(
			'id' => 183,
			'faculdade_id' => 183,
			'tipopagamento_id' => 183,
			'valor' => 183
		),
		array(
			'id' => 184,
			'faculdade_id' => 184,
			'tipopagamento_id' => 184,
			'valor' => 184
		),
		array(
			'id' => 185,
			'faculdade_id' => 185,
			'tipopagamento_id' => 185,
			'valor' => 185
		),
		array(
			'id' => 186,
			'faculdade_id' => 186,
			'tipopagamento_id' => 186,
			'valor' => 186
		),
		array(
			'id' => 187,
			'faculdade_id' => 187,
			'tipopagamento_id' => 187,
			'valor' => 187
		),
		array(
			'id' => 188,
			'faculdade_id' => 188,
			'tipopagamento_id' => 188,
			'valor' => 188
		),
		array(
			'id' => 189,
			'faculdade_id' => 189,
			'tipopagamento_id' => 189,
			'valor' => 189
		),
		array(
			'id' => 190,
			'faculdade_id' => 190,
			'tipopagamento_id' => 190,
			'valor' => 190
		),
		array(
			'id' => 191,
			'faculdade_id' => 191,
			'tipopagamento_id' => 191,
			'valor' => 191
		),
		array(
			'id' => 192,
			'faculdade_id' => 192,
			'tipopagamento_id' => 192,
			'valor' => 192
		),
		array(
			'id' => 193,
			'faculdade_id' => 193,
			'tipopagamento_id' => 193,
			'valor' => 193
		),
		array(
			'id' => 194,
			'faculdade_id' => 194,
			'tipopagamento_id' => 194,
			'valor' => 194
		),
		array(
			'id' => 195,
			'faculdade_id' => 195,
			'tipopagamento_id' => 195,
			'valor' => 195
		),
		array(
			'id' => 196,
			'faculdade_id' => 196,
			'tipopagamento_id' => 196,
			'valor' => 196
		),
		array(
			'id' => 197,
			'faculdade_id' => 197,
			'tipopagamento_id' => 197,
			'valor' => 197
		),
		array(
			'id' => 198,
			'faculdade_id' => 198,
			'tipopagamento_id' => 198,
			'valor' => 198
		),
		array(
			'id' => 199,
			'faculdade_id' => 199,
			'tipopagamento_id' => 199,
			'valor' => 199
		),
		array(
			'id' => 200,
			'faculdade_id' => 200,
			'tipopagamento_id' => 200,
			'valor' => 200
		),
		array(
			'id' => 201,
			'faculdade_id' => 201,
			'tipopagamento_id' => 201,
			'valor' => 201
		),
		array(
			'id' => 202,
			'faculdade_id' => 202,
			'tipopagamento_id' => 202,
			'valor' => 202
		),
		array(
			'id' => 203,
			'faculdade_id' => 203,
			'tipopagamento_id' => 203,
			'valor' => 203
		),
		array(
			'id' => 204,
			'faculdade_id' => 204,
			'tipopagamento_id' => 204,
			'valor' => 204
		),
		array(
			'id' => 205,
			'faculdade_id' => 205,
			'tipopagamento_id' => 205,
			'valor' => 205
		),
		array(
			'id' => 206,
			'faculdade_id' => 206,
			'tipopagamento_id' => 206,
			'valor' => 206
		),
		array(
			'id' => 207,
			'faculdade_id' => 207,
			'tipopagamento_id' => 207,
			'valor' => 207
		),
		array(
			'id' => 208,
			'faculdade_id' => 208,
			'tipopagamento_id' => 208,
			'valor' => 208
		),
		array(
			'id' => 209,
			'faculdade_id' => 209,
			'tipopagamento_id' => 209,
			'valor' => 209
		),
		array(
			'id' => 210,
			'faculdade_id' => 210,
			'tipopagamento_id' => 210,
			'valor' => 210
		),
		array(
			'id' => 211,
			'faculdade_id' => 211,
			'tipopagamento_id' => 211,
			'valor' => 211
		),
		array(
			'id' => 212,
			'faculdade_id' => 212,
			'tipopagamento_id' => 212,
			'valor' => 212
		),
		array(
			'id' => 213,
			'faculdade_id' => 213,
			'tipopagamento_id' => 213,
			'valor' => 213
		),
		array(
			'id' => 214,
			'faculdade_id' => 214,
			'tipopagamento_id' => 214,
			'valor' => 214
		),
		array(
			'id' => 215,
			'faculdade_id' => 215,
			'tipopagamento_id' => 215,
			'valor' => 215
		),
		array(
			'id' => 216,
			'faculdade_id' => 216,
			'tipopagamento_id' => 216,
			'valor' => 216
		),
		array(
			'id' => 217,
			'faculdade_id' => 217,
			'tipopagamento_id' => 217,
			'valor' => 217
		),
		array(
			'id' => 218,
			'faculdade_id' => 218,
			'tipopagamento_id' => 218,
			'valor' => 218
		),
		array(
			'id' => 219,
			'faculdade_id' => 219,
			'tipopagamento_id' => 219,
			'valor' => 219
		),
		array(
			'id' => 220,
			'faculdade_id' => 220,
			'tipopagamento_id' => 220,
			'valor' => 220
		),
		array(
			'id' => 221,
			'faculdade_id' => 221,
			'tipopagamento_id' => 221,
			'valor' => 221
		),
		array(
			'id' => 222,
			'faculdade_id' => 222,
			'tipopagamento_id' => 222,
			'valor' => 222
		),
		array(
			'id' => 223,
			'faculdade_id' => 223,
			'tipopagamento_id' => 223,
			'valor' => 223
		),
		array(
			'id' => 224,
			'faculdade_id' => 224,
			'tipopagamento_id' => 224,
			'valor' => 224
		),
		array(
			'id' => 225,
			'faculdade_id' => 225,
			'tipopagamento_id' => 225,
			'valor' => 225
		),
		array(
			'id' => 226,
			'faculdade_id' => 226,
			'tipopagamento_id' => 226,
			'valor' => 226
		),
		array(
			'id' => 227,
			'faculdade_id' => 227,
			'tipopagamento_id' => 227,
			'valor' => 227
		),
		array(
			'id' => 228,
			'faculdade_id' => 228,
			'tipopagamento_id' => 228,
			'valor' => 228
		),
		array(
			'id' => 229,
			'faculdade_id' => 229,
			'tipopagamento_id' => 229,
			'valor' => 229
		),
		array(
			'id' => 230,
			'faculdade_id' => 230,
			'tipopagamento_id' => 230,
			'valor' => 230
		),
		array(
			'id' => 231,
			'faculdade_id' => 231,
			'tipopagamento_id' => 231,
			'valor' => 231
		),
		array(
			'id' => 232,
			'faculdade_id' => 232,
			'tipopagamento_id' => 232,
			'valor' => 232
		),
		array(
			'id' => 233,
			'faculdade_id' => 233,
			'tipopagamento_id' => 233,
			'valor' => 233
		),
		array(
			'id' => 234,
			'faculdade_id' => 234,
			'tipopagamento_id' => 234,
			'valor' => 234
		),
		array(
			'id' => 235,
			'faculdade_id' => 235,
			'tipopagamento_id' => 235,
			'valor' => 235
		),
		array(
			'id' => 236,
			'faculdade_id' => 236,
			'tipopagamento_id' => 236,
			'valor' => 236
		),
		array(
			'id' => 237,
			'faculdade_id' => 237,
			'tipopagamento_id' => 237,
			'valor' => 237
		),
		array(
			'id' => 238,
			'faculdade_id' => 238,
			'tipopagamento_id' => 238,
			'valor' => 238
		),
		array(
			'id' => 239,
			'faculdade_id' => 239,
			'tipopagamento_id' => 239,
			'valor' => 239
		),
		array(
			'id' => 240,
			'faculdade_id' => 240,
			'tipopagamento_id' => 240,
			'valor' => 240
		),
		array(
			'id' => 241,
			'faculdade_id' => 241,
			'tipopagamento_id' => 241,
			'valor' => 241
		),
		array(
			'id' => 242,
			'faculdade_id' => 242,
			'tipopagamento_id' => 242,
			'valor' => 242
		),
		array(
			'id' => 243,
			'faculdade_id' => 243,
			'tipopagamento_id' => 243,
			'valor' => 243
		),
		array(
			'id' => 244,
			'faculdade_id' => 244,
			'tipopagamento_id' => 244,
			'valor' => 244
		),
		array(
			'id' => 245,
			'faculdade_id' => 245,
			'tipopagamento_id' => 245,
			'valor' => 245
		),
		array(
			'id' => 246,
			'faculdade_id' => 246,
			'tipopagamento_id' => 246,
			'valor' => 246
		),
		array(
			'id' => 247,
			'faculdade_id' => 247,
			'tipopagamento_id' => 247,
			'valor' => 247
		),
		array(
			'id' => 248,
			'faculdade_id' => 248,
			'tipopagamento_id' => 248,
			'valor' => 248
		),
		array(
			'id' => 249,
			'faculdade_id' => 249,
			'tipopagamento_id' => 249,
			'valor' => 249
		),
		array(
			'id' => 250,
			'faculdade_id' => 250,
			'tipopagamento_id' => 250,
			'valor' => 250
		),
		array(
			'id' => 251,
			'faculdade_id' => 251,
			'tipopagamento_id' => 251,
			'valor' => 251
		),
		array(
			'id' => 252,
			'faculdade_id' => 252,
			'tipopagamento_id' => 252,
			'valor' => 252
		),
		array(
			'id' => 253,
			'faculdade_id' => 253,
			'tipopagamento_id' => 253,
			'valor' => 253
		),
		array(
			'id' => 254,
			'faculdade_id' => 254,
			'tipopagamento_id' => 254,
			'valor' => 254
		),
		array(
			'id' => 255,
			'faculdade_id' => 255,
			'tipopagamento_id' => 255,
			'valor' => 255
		),
		array(
			'id' => 256,
			'faculdade_id' => 256,
			'tipopagamento_id' => 256,
			'valor' => 256
		),
		array(
			'id' => 257,
			'faculdade_id' => 257,
			'tipopagamento_id' => 257,
			'valor' => 257
		),
		array(
			'id' => 258,
			'faculdade_id' => 258,
			'tipopagamento_id' => 258,
			'valor' => 258
		),
		array(
			'id' => 259,
			'faculdade_id' => 259,
			'tipopagamento_id' => 259,
			'valor' => 259
		),
		array(
			'id' => 260,
			'faculdade_id' => 260,
			'tipopagamento_id' => 260,
			'valor' => 260
		),
		array(
			'id' => 261,
			'faculdade_id' => 261,
			'tipopagamento_id' => 261,
			'valor' => 261
		),
		array(
			'id' => 262,
			'faculdade_id' => 262,
			'tipopagamento_id' => 262,
			'valor' => 262
		),
		array(
			'id' => 263,
			'faculdade_id' => 263,
			'tipopagamento_id' => 263,
			'valor' => 263
		),
		array(
			'id' => 264,
			'faculdade_id' => 264,
			'tipopagamento_id' => 264,
			'valor' => 264
		),
		array(
			'id' => 265,
			'faculdade_id' => 265,
			'tipopagamento_id' => 265,
			'valor' => 265
		),
		array(
			'id' => 266,
			'faculdade_id' => 266,
			'tipopagamento_id' => 266,
			'valor' => 266
		),
		array(
			'id' => 267,
			'faculdade_id' => 267,
			'tipopagamento_id' => 267,
			'valor' => 267
		),
		array(
			'id' => 268,
			'faculdade_id' => 268,
			'tipopagamento_id' => 268,
			'valor' => 268
		),
		array(
			'id' => 269,
			'faculdade_id' => 269,
			'tipopagamento_id' => 269,
			'valor' => 269
		),
		array(
			'id' => 270,
			'faculdade_id' => 270,
			'tipopagamento_id' => 270,
			'valor' => 270
		),
		array(
			'id' => 271,
			'faculdade_id' => 271,
			'tipopagamento_id' => 271,
			'valor' => 271
		),
		array(
			'id' => 272,
			'faculdade_id' => 272,
			'tipopagamento_id' => 272,
			'valor' => 272
		),
		array(
			'id' => 273,
			'faculdade_id' => 273,
			'tipopagamento_id' => 273,
			'valor' => 273
		),
		array(
			'id' => 274,
			'faculdade_id' => 274,
			'tipopagamento_id' => 274,
			'valor' => 274
		),
		array(
			'id' => 275,
			'faculdade_id' => 275,
			'tipopagamento_id' => 275,
			'valor' => 275
		),
		array(
			'id' => 276,
			'faculdade_id' => 276,
			'tipopagamento_id' => 276,
			'valor' => 276
		),
		array(
			'id' => 277,
			'faculdade_id' => 277,
			'tipopagamento_id' => 277,
			'valor' => 277
		),
		array(
			'id' => 278,
			'faculdade_id' => 278,
			'tipopagamento_id' => 278,
			'valor' => 278
		),
		array(
			'id' => 279,
			'faculdade_id' => 279,
			'tipopagamento_id' => 279,
			'valor' => 279
		),
		array(
			'id' => 280,
			'faculdade_id' => 280,
			'tipopagamento_id' => 280,
			'valor' => 280
		),
		array(
			'id' => 281,
			'faculdade_id' => 281,
			'tipopagamento_id' => 281,
			'valor' => 281
		),
		array(
			'id' => 282,
			'faculdade_id' => 282,
			'tipopagamento_id' => 282,
			'valor' => 282
		),
		array(
			'id' => 283,
			'faculdade_id' => 283,
			'tipopagamento_id' => 283,
			'valor' => 283
		),
		array(
			'id' => 284,
			'faculdade_id' => 284,
			'tipopagamento_id' => 284,
			'valor' => 284
		),
		array(
			'id' => 285,
			'faculdade_id' => 285,
			'tipopagamento_id' => 285,
			'valor' => 285
		),
		array(
			'id' => 286,
			'faculdade_id' => 286,
			'tipopagamento_id' => 286,
			'valor' => 286
		),
		array(
			'id' => 287,
			'faculdade_id' => 287,
			'tipopagamento_id' => 287,
			'valor' => 287
		),
		array(
			'id' => 288,
			'faculdade_id' => 288,
			'tipopagamento_id' => 288,
			'valor' => 288
		),
		array(
			'id' => 289,
			'faculdade_id' => 289,
			'tipopagamento_id' => 289,
			'valor' => 289
		),
		array(
			'id' => 290,
			'faculdade_id' => 290,
			'tipopagamento_id' => 290,
			'valor' => 290
		),
		array(
			'id' => 291,
			'faculdade_id' => 291,
			'tipopagamento_id' => 291,
			'valor' => 291
		),
		array(
			'id' => 292,
			'faculdade_id' => 292,
			'tipopagamento_id' => 292,
			'valor' => 292
		),
		array(
			'id' => 293,
			'faculdade_id' => 293,
			'tipopagamento_id' => 293,
			'valor' => 293
		),
		array(
			'id' => 294,
			'faculdade_id' => 294,
			'tipopagamento_id' => 294,
			'valor' => 294
		),
		array(
			'id' => 295,
			'faculdade_id' => 295,
			'tipopagamento_id' => 295,
			'valor' => 295
		),
		array(
			'id' => 296,
			'faculdade_id' => 296,
			'tipopagamento_id' => 296,
			'valor' => 296
		),
		array(
			'id' => 297,
			'faculdade_id' => 297,
			'tipopagamento_id' => 297,
			'valor' => 297
		),
		array(
			'id' => 298,
			'faculdade_id' => 298,
			'tipopagamento_id' => 298,
			'valor' => 298
		),
		array(
			'id' => 299,
			'faculdade_id' => 299,
			'tipopagamento_id' => 299,
			'valor' => 299
		),
		array(
			'id' => 300,
			'faculdade_id' => 300,
			'tipopagamento_id' => 300,
			'valor' => 300
		),
		array(
			'id' => 301,
			'faculdade_id' => 301,
			'tipopagamento_id' => 301,
			'valor' => 301
		),
		array(
			'id' => 302,
			'faculdade_id' => 302,
			'tipopagamento_id' => 302,
			'valor' => 302
		),
		array(
			'id' => 303,
			'faculdade_id' => 303,
			'tipopagamento_id' => 303,
			'valor' => 303
		),
		array(
			'id' => 304,
			'faculdade_id' => 304,
			'tipopagamento_id' => 304,
			'valor' => 304
		),
		array(
			'id' => 305,
			'faculdade_id' => 305,
			'tipopagamento_id' => 305,
			'valor' => 305
		),
		array(
			'id' => 306,
			'faculdade_id' => 306,
			'tipopagamento_id' => 306,
			'valor' => 306
		),
		array(
			'id' => 307,
			'faculdade_id' => 307,
			'tipopagamento_id' => 307,
			'valor' => 307
		),
		array(
			'id' => 308,
			'faculdade_id' => 308,
			'tipopagamento_id' => 308,
			'valor' => 308
		),
		array(
			'id' => 309,
			'faculdade_id' => 309,
			'tipopagamento_id' => 309,
			'valor' => 309
		),
		array(
			'id' => 310,
			'faculdade_id' => 310,
			'tipopagamento_id' => 310,
			'valor' => 310
		),
		array(
			'id' => 311,
			'faculdade_id' => 311,
			'tipopagamento_id' => 311,
			'valor' => 311
		),
		array(
			'id' => 312,
			'faculdade_id' => 312,
			'tipopagamento_id' => 312,
			'valor' => 312
		),
		array(
			'id' => 313,
			'faculdade_id' => 313,
			'tipopagamento_id' => 313,
			'valor' => 313
		),
		array(
			'id' => 314,
			'faculdade_id' => 314,
			'tipopagamento_id' => 314,
			'valor' => 314
		),
		array(
			'id' => 315,
			'faculdade_id' => 315,
			'tipopagamento_id' => 315,
			'valor' => 315
		),
		array(
			'id' => 316,
			'faculdade_id' => 316,
			'tipopagamento_id' => 316,
			'valor' => 316
		),
		array(
			'id' => 317,
			'faculdade_id' => 317,
			'tipopagamento_id' => 317,
			'valor' => 317
		),
		array(
			'id' => 318,
			'faculdade_id' => 318,
			'tipopagamento_id' => 318,
			'valor' => 318
		),
		array(
			'id' => 319,
			'faculdade_id' => 319,
			'tipopagamento_id' => 319,
			'valor' => 319
		),
		array(
			'id' => 320,
			'faculdade_id' => 320,
			'tipopagamento_id' => 320,
			'valor' => 320
		),
		array(
			'id' => 321,
			'faculdade_id' => 321,
			'tipopagamento_id' => 321,
			'valor' => 321
		),
		array(
			'id' => 322,
			'faculdade_id' => 322,
			'tipopagamento_id' => 322,
			'valor' => 322
		),
		array(
			'id' => 323,
			'faculdade_id' => 323,
			'tipopagamento_id' => 323,
			'valor' => 323
		),
		array(
			'id' => 324,
			'faculdade_id' => 324,
			'tipopagamento_id' => 324,
			'valor' => 324
		),
		array(
			'id' => 325,
			'faculdade_id' => 325,
			'tipopagamento_id' => 325,
			'valor' => 325
		),
		array(
			'id' => 326,
			'faculdade_id' => 326,
			'tipopagamento_id' => 326,
			'valor' => 326
		),
		array(
			'id' => 327,
			'faculdade_id' => 327,
			'tipopagamento_id' => 327,
			'valor' => 327
		),
		array(
			'id' => 328,
			'faculdade_id' => 328,
			'tipopagamento_id' => 328,
			'valor' => 328
		),
		array(
			'id' => 329,
			'faculdade_id' => 329,
			'tipopagamento_id' => 329,
			'valor' => 329
		),
		array(
			'id' => 330,
			'faculdade_id' => 330,
			'tipopagamento_id' => 330,
			'valor' => 330
		),
		array(
			'id' => 331,
			'faculdade_id' => 331,
			'tipopagamento_id' => 331,
			'valor' => 331
		),
		array(
			'id' => 332,
			'faculdade_id' => 332,
			'tipopagamento_id' => 332,
			'valor' => 332
		),
		array(
			'id' => 333,
			'faculdade_id' => 333,
			'tipopagamento_id' => 333,
			'valor' => 333
		),
		array(
			'id' => 334,
			'faculdade_id' => 334,
			'tipopagamento_id' => 334,
			'valor' => 334
		),
		array(
			'id' => 335,
			'faculdade_id' => 335,
			'tipopagamento_id' => 335,
			'valor' => 335
		),
		array(
			'id' => 336,
			'faculdade_id' => 336,
			'tipopagamento_id' => 336,
			'valor' => 336
		),
		array(
			'id' => 337,
			'faculdade_id' => 337,
			'tipopagamento_id' => 337,
			'valor' => 337
		),
		array(
			'id' => 338,
			'faculdade_id' => 338,
			'tipopagamento_id' => 338,
			'valor' => 338
		),
		array(
			'id' => 339,
			'faculdade_id' => 339,
			'tipopagamento_id' => 339,
			'valor' => 339
		),
		array(
			'id' => 340,
			'faculdade_id' => 340,
			'tipopagamento_id' => 340,
			'valor' => 340
		),
		array(
			'id' => 341,
			'faculdade_id' => 341,
			'tipopagamento_id' => 341,
			'valor' => 341
		),
		array(
			'id' => 342,
			'faculdade_id' => 342,
			'tipopagamento_id' => 342,
			'valor' => 342
		),
		array(
			'id' => 343,
			'faculdade_id' => 343,
			'tipopagamento_id' => 343,
			'valor' => 343
		),
		array(
			'id' => 344,
			'faculdade_id' => 344,
			'tipopagamento_id' => 344,
			'valor' => 344
		),
		array(
			'id' => 345,
			'faculdade_id' => 345,
			'tipopagamento_id' => 345,
			'valor' => 345
		),
		array(
			'id' => 346,
			'faculdade_id' => 346,
			'tipopagamento_id' => 346,
			'valor' => 346
		),
		array(
			'id' => 347,
			'faculdade_id' => 347,
			'tipopagamento_id' => 347,
			'valor' => 347
		),
		array(
			'id' => 348,
			'faculdade_id' => 348,
			'tipopagamento_id' => 348,
			'valor' => 348
		),
		array(
			'id' => 349,
			'faculdade_id' => 349,
			'tipopagamento_id' => 349,
			'valor' => 349
		),
		array(
			'id' => 350,
			'faculdade_id' => 350,
			'tipopagamento_id' => 350,
			'valor' => 350
		),
		array(
			'id' => 351,
			'faculdade_id' => 351,
			'tipopagamento_id' => 351,
			'valor' => 351
		),
		array(
			'id' => 352,
			'faculdade_id' => 352,
			'tipopagamento_id' => 352,
			'valor' => 352
		),
		array(
			'id' => 353,
			'faculdade_id' => 353,
			'tipopagamento_id' => 353,
			'valor' => 353
		),
		array(
			'id' => 354,
			'faculdade_id' => 354,
			'tipopagamento_id' => 354,
			'valor' => 354
		),
		array(
			'id' => 355,
			'faculdade_id' => 355,
			'tipopagamento_id' => 355,
			'valor' => 355
		),
		array(
			'id' => 356,
			'faculdade_id' => 356,
			'tipopagamento_id' => 356,
			'valor' => 356
		),
		array(
			'id' => 357,
			'faculdade_id' => 357,
			'tipopagamento_id' => 357,
			'valor' => 357
		),
		array(
			'id' => 358,
			'faculdade_id' => 358,
			'tipopagamento_id' => 358,
			'valor' => 358
		),
		array(
			'id' => 359,
			'faculdade_id' => 359,
			'tipopagamento_id' => 359,
			'valor' => 359
		),
		array(
			'id' => 360,
			'faculdade_id' => 360,
			'tipopagamento_id' => 360,
			'valor' => 360
		),
		array(
			'id' => 361,
			'faculdade_id' => 361,
			'tipopagamento_id' => 361,
			'valor' => 361
		),
		array(
			'id' => 362,
			'faculdade_id' => 362,
			'tipopagamento_id' => 362,
			'valor' => 362
		),
		array(
			'id' => 363,
			'faculdade_id' => 363,
			'tipopagamento_id' => 363,
			'valor' => 363
		),
		array(
			'id' => 364,
			'faculdade_id' => 364,
			'tipopagamento_id' => 364,
			'valor' => 364
		),
		array(
			'id' => 365,
			'faculdade_id' => 365,
			'tipopagamento_id' => 365,
			'valor' => 365
		),
		array(
			'id' => 366,
			'faculdade_id' => 366,
			'tipopagamento_id' => 366,
			'valor' => 366
		),
		array(
			'id' => 367,
			'faculdade_id' => 367,
			'tipopagamento_id' => 367,
			'valor' => 367
		),
		array(
			'id' => 368,
			'faculdade_id' => 368,
			'tipopagamento_id' => 368,
			'valor' => 368
		),
		array(
			'id' => 369,
			'faculdade_id' => 369,
			'tipopagamento_id' => 369,
			'valor' => 369
		),
		array(
			'id' => 370,
			'faculdade_id' => 370,
			'tipopagamento_id' => 370,
			'valor' => 370
		),
		array(
			'id' => 371,
			'faculdade_id' => 371,
			'tipopagamento_id' => 371,
			'valor' => 371
		),
		array(
			'id' => 372,
			'faculdade_id' => 372,
			'tipopagamento_id' => 372,
			'valor' => 372
		),
		array(
			'id' => 373,
			'faculdade_id' => 373,
			'tipopagamento_id' => 373,
			'valor' => 373
		),
		array(
			'id' => 374,
			'faculdade_id' => 374,
			'tipopagamento_id' => 374,
			'valor' => 374
		),
		array(
			'id' => 375,
			'faculdade_id' => 375,
			'tipopagamento_id' => 375,
			'valor' => 375
		),
		array(
			'id' => 376,
			'faculdade_id' => 376,
			'tipopagamento_id' => 376,
			'valor' => 376
		),
		array(
			'id' => 377,
			'faculdade_id' => 377,
			'tipopagamento_id' => 377,
			'valor' => 377
		),
		array(
			'id' => 378,
			'faculdade_id' => 378,
			'tipopagamento_id' => 378,
			'valor' => 378
		),
		array(
			'id' => 379,
			'faculdade_id' => 379,
			'tipopagamento_id' => 379,
			'valor' => 379
		),
		array(
			'id' => 380,
			'faculdade_id' => 380,
			'tipopagamento_id' => 380,
			'valor' => 380
		),
		array(
			'id' => 381,
			'faculdade_id' => 381,
			'tipopagamento_id' => 381,
			'valor' => 381
		),
		array(
			'id' => 382,
			'faculdade_id' => 382,
			'tipopagamento_id' => 382,
			'valor' => 382
		),
		array(
			'id' => 383,
			'faculdade_id' => 383,
			'tipopagamento_id' => 383,
			'valor' => 383
		),
		array(
			'id' => 384,
			'faculdade_id' => 384,
			'tipopagamento_id' => 384,
			'valor' => 384
		),
		array(
			'id' => 385,
			'faculdade_id' => 385,
			'tipopagamento_id' => 385,
			'valor' => 385
		),
		array(
			'id' => 386,
			'faculdade_id' => 386,
			'tipopagamento_id' => 386,
			'valor' => 386
		),
		array(
			'id' => 387,
			'faculdade_id' => 387,
			'tipopagamento_id' => 387,
			'valor' => 387
		),
		array(
			'id' => 388,
			'faculdade_id' => 388,
			'tipopagamento_id' => 388,
			'valor' => 388
		),
		array(
			'id' => 389,
			'faculdade_id' => 389,
			'tipopagamento_id' => 389,
			'valor' => 389
		),
		array(
			'id' => 390,
			'faculdade_id' => 390,
			'tipopagamento_id' => 390,
			'valor' => 390
		),
		array(
			'id' => 391,
			'faculdade_id' => 391,
			'tipopagamento_id' => 391,
			'valor' => 391
		),
		array(
			'id' => 392,
			'faculdade_id' => 392,
			'tipopagamento_id' => 392,
			'valor' => 392
		),
		array(
			'id' => 393,
			'faculdade_id' => 393,
			'tipopagamento_id' => 393,
			'valor' => 393
		),
		array(
			'id' => 394,
			'faculdade_id' => 394,
			'tipopagamento_id' => 394,
			'valor' => 394
		),
		array(
			'id' => 395,
			'faculdade_id' => 395,
			'tipopagamento_id' => 395,
			'valor' => 395
		),
		array(
			'id' => 396,
			'faculdade_id' => 396,
			'tipopagamento_id' => 396,
			'valor' => 396
		),
		array(
			'id' => 397,
			'faculdade_id' => 397,
			'tipopagamento_id' => 397,
			'valor' => 397
		),
		array(
			'id' => 398,
			'faculdade_id' => 398,
			'tipopagamento_id' => 398,
			'valor' => 398
		),
		array(
			'id' => 399,
			'faculdade_id' => 399,
			'tipopagamento_id' => 399,
			'valor' => 399
		),
		array(
			'id' => 400,
			'faculdade_id' => 400,
			'tipopagamento_id' => 400,
			'valor' => 400
		),
		array(
			'id' => 401,
			'faculdade_id' => 401,
			'tipopagamento_id' => 401,
			'valor' => 401
		),
		array(
			'id' => 402,
			'faculdade_id' => 402,
			'tipopagamento_id' => 402,
			'valor' => 402
		),
		array(
			'id' => 403,
			'faculdade_id' => 403,
			'tipopagamento_id' => 403,
			'valor' => 403
		),
		array(
			'id' => 404,
			'faculdade_id' => 404,
			'tipopagamento_id' => 404,
			'valor' => 404
		),
		array(
			'id' => 405,
			'faculdade_id' => 405,
			'tipopagamento_id' => 405,
			'valor' => 405
		),
		array(
			'id' => 406,
			'faculdade_id' => 406,
			'tipopagamento_id' => 406,
			'valor' => 406
		),
		array(
			'id' => 407,
			'faculdade_id' => 407,
			'tipopagamento_id' => 407,
			'valor' => 407
		),
		array(
			'id' => 408,
			'faculdade_id' => 408,
			'tipopagamento_id' => 408,
			'valor' => 408
		),
		array(
			'id' => 409,
			'faculdade_id' => 409,
			'tipopagamento_id' => 409,
			'valor' => 409
		),
		array(
			'id' => 410,
			'faculdade_id' => 410,
			'tipopagamento_id' => 410,
			'valor' => 410
		),
		array(
			'id' => 411,
			'faculdade_id' => 411,
			'tipopagamento_id' => 411,
			'valor' => 411
		),
		array(
			'id' => 412,
			'faculdade_id' => 412,
			'tipopagamento_id' => 412,
			'valor' => 412
		),
		array(
			'id' => 413,
			'faculdade_id' => 413,
			'tipopagamento_id' => 413,
			'valor' => 413
		),
		array(
			'id' => 414,
			'faculdade_id' => 414,
			'tipopagamento_id' => 414,
			'valor' => 414
		),
		array(
			'id' => 415,
			'faculdade_id' => 415,
			'tipopagamento_id' => 415,
			'valor' => 415
		),
		array(
			'id' => 416,
			'faculdade_id' => 416,
			'tipopagamento_id' => 416,
			'valor' => 416
		),
		array(
			'id' => 417,
			'faculdade_id' => 417,
			'tipopagamento_id' => 417,
			'valor' => 417
		),
		array(
			'id' => 418,
			'faculdade_id' => 418,
			'tipopagamento_id' => 418,
			'valor' => 418
		),
		array(
			'id' => 419,
			'faculdade_id' => 419,
			'tipopagamento_id' => 419,
			'valor' => 419
		),
		array(
			'id' => 420,
			'faculdade_id' => 420,
			'tipopagamento_id' => 420,
			'valor' => 420
		),
		array(
			'id' => 421,
			'faculdade_id' => 421,
			'tipopagamento_id' => 421,
			'valor' => 421
		),
		array(
			'id' => 422,
			'faculdade_id' => 422,
			'tipopagamento_id' => 422,
			'valor' => 422
		),
		array(
			'id' => 423,
			'faculdade_id' => 423,
			'tipopagamento_id' => 423,
			'valor' => 423
		),
		array(
			'id' => 424,
			'faculdade_id' => 424,
			'tipopagamento_id' => 424,
			'valor' => 424
		),
		array(
			'id' => 425,
			'faculdade_id' => 425,
			'tipopagamento_id' => 425,
			'valor' => 425
		),
		array(
			'id' => 426,
			'faculdade_id' => 426,
			'tipopagamento_id' => 426,
			'valor' => 426
		),
		array(
			'id' => 427,
			'faculdade_id' => 427,
			'tipopagamento_id' => 427,
			'valor' => 427
		),
		array(
			'id' => 428,
			'faculdade_id' => 428,
			'tipopagamento_id' => 428,
			'valor' => 428
		),
		array(
			'id' => 429,
			'faculdade_id' => 429,
			'tipopagamento_id' => 429,
			'valor' => 429
		),
		array(
			'id' => 430,
			'faculdade_id' => 430,
			'tipopagamento_id' => 430,
			'valor' => 430
		),
		array(
			'id' => 431,
			'faculdade_id' => 431,
			'tipopagamento_id' => 431,
			'valor' => 431
		),
		array(
			'id' => 432,
			'faculdade_id' => 432,
			'tipopagamento_id' => 432,
			'valor' => 432
		),
		array(
			'id' => 433,
			'faculdade_id' => 433,
			'tipopagamento_id' => 433,
			'valor' => 433
		),
		array(
			'id' => 434,
			'faculdade_id' => 434,
			'tipopagamento_id' => 434,
			'valor' => 434
		),
		array(
			'id' => 435,
			'faculdade_id' => 435,
			'tipopagamento_id' => 435,
			'valor' => 435
		),
		array(
			'id' => 436,
			'faculdade_id' => 436,
			'tipopagamento_id' => 436,
			'valor' => 436
		),
		array(
			'id' => 437,
			'faculdade_id' => 437,
			'tipopagamento_id' => 437,
			'valor' => 437
		),
		array(
			'id' => 438,
			'faculdade_id' => 438,
			'tipopagamento_id' => 438,
			'valor' => 438
		),
		array(
			'id' => 439,
			'faculdade_id' => 439,
			'tipopagamento_id' => 439,
			'valor' => 439
		),
		array(
			'id' => 440,
			'faculdade_id' => 440,
			'tipopagamento_id' => 440,
			'valor' => 440
		),
		array(
			'id' => 441,
			'faculdade_id' => 441,
			'tipopagamento_id' => 441,
			'valor' => 441
		),
		array(
			'id' => 442,
			'faculdade_id' => 442,
			'tipopagamento_id' => 442,
			'valor' => 442
		),
		array(
			'id' => 443,
			'faculdade_id' => 443,
			'tipopagamento_id' => 443,
			'valor' => 443
		),
		array(
			'id' => 444,
			'faculdade_id' => 444,
			'tipopagamento_id' => 444,
			'valor' => 444
		),
		array(
			'id' => 445,
			'faculdade_id' => 445,
			'tipopagamento_id' => 445,
			'valor' => 445
		),
		array(
			'id' => 446,
			'faculdade_id' => 446,
			'tipopagamento_id' => 446,
			'valor' => 446
		),
		array(
			'id' => 447,
			'faculdade_id' => 447,
			'tipopagamento_id' => 447,
			'valor' => 447
		),
		array(
			'id' => 448,
			'faculdade_id' => 448,
			'tipopagamento_id' => 448,
			'valor' => 448
		),
		array(
			'id' => 449,
			'faculdade_id' => 449,
			'tipopagamento_id' => 449,
			'valor' => 449
		),
		array(
			'id' => 450,
			'faculdade_id' => 450,
			'tipopagamento_id' => 450,
			'valor' => 450
		),
		array(
			'id' => 451,
			'faculdade_id' => 451,
			'tipopagamento_id' => 451,
			'valor' => 451
		),
		array(
			'id' => 452,
			'faculdade_id' => 452,
			'tipopagamento_id' => 452,
			'valor' => 452
		),
		array(
			'id' => 453,
			'faculdade_id' => 453,
			'tipopagamento_id' => 453,
			'valor' => 453
		),
		array(
			'id' => 454,
			'faculdade_id' => 454,
			'tipopagamento_id' => 454,
			'valor' => 454
		),
		array(
			'id' => 455,
			'faculdade_id' => 455,
			'tipopagamento_id' => 455,
			'valor' => 455
		),
		array(
			'id' => 456,
			'faculdade_id' => 456,
			'tipopagamento_id' => 456,
			'valor' => 456
		),
		array(
			'id' => 457,
			'faculdade_id' => 457,
			'tipopagamento_id' => 457,
			'valor' => 457
		),
		array(
			'id' => 458,
			'faculdade_id' => 458,
			'tipopagamento_id' => 458,
			'valor' => 458
		),
		array(
			'id' => 459,
			'faculdade_id' => 459,
			'tipopagamento_id' => 459,
			'valor' => 459
		),
		array(
			'id' => 460,
			'faculdade_id' => 460,
			'tipopagamento_id' => 460,
			'valor' => 460
		),
		array(
			'id' => 461,
			'faculdade_id' => 461,
			'tipopagamento_id' => 461,
			'valor' => 461
		),
		array(
			'id' => 462,
			'faculdade_id' => 462,
			'tipopagamento_id' => 462,
			'valor' => 462
		),
		array(
			'id' => 463,
			'faculdade_id' => 463,
			'tipopagamento_id' => 463,
			'valor' => 463
		),
		array(
			'id' => 464,
			'faculdade_id' => 464,
			'tipopagamento_id' => 464,
			'valor' => 464
		),
		array(
			'id' => 465,
			'faculdade_id' => 465,
			'tipopagamento_id' => 465,
			'valor' => 465
		),
		array(
			'id' => 466,
			'faculdade_id' => 466,
			'tipopagamento_id' => 466,
			'valor' => 466
		),
		array(
			'id' => 467,
			'faculdade_id' => 467,
			'tipopagamento_id' => 467,
			'valor' => 467
		),
		array(
			'id' => 468,
			'faculdade_id' => 468,
			'tipopagamento_id' => 468,
			'valor' => 468
		),
		array(
			'id' => 469,
			'faculdade_id' => 469,
			'tipopagamento_id' => 469,
			'valor' => 469
		),
		array(
			'id' => 470,
			'faculdade_id' => 470,
			'tipopagamento_id' => 470,
			'valor' => 470
		),
		array(
			'id' => 471,
			'faculdade_id' => 471,
			'tipopagamento_id' => 471,
			'valor' => 471
		),
		array(
			'id' => 472,
			'faculdade_id' => 472,
			'tipopagamento_id' => 472,
			'valor' => 472
		),
		array(
			'id' => 473,
			'faculdade_id' => 473,
			'tipopagamento_id' => 473,
			'valor' => 473
		),
		array(
			'id' => 474,
			'faculdade_id' => 474,
			'tipopagamento_id' => 474,
			'valor' => 474
		),
		array(
			'id' => 475,
			'faculdade_id' => 475,
			'tipopagamento_id' => 475,
			'valor' => 475
		),
		array(
			'id' => 476,
			'faculdade_id' => 476,
			'tipopagamento_id' => 476,
			'valor' => 476
		),
		array(
			'id' => 477,
			'faculdade_id' => 477,
			'tipopagamento_id' => 477,
			'valor' => 477
		),
		array(
			'id' => 478,
			'faculdade_id' => 478,
			'tipopagamento_id' => 478,
			'valor' => 478
		),
		array(
			'id' => 479,
			'faculdade_id' => 479,
			'tipopagamento_id' => 479,
			'valor' => 479
		),
		array(
			'id' => 480,
			'faculdade_id' => 480,
			'tipopagamento_id' => 480,
			'valor' => 480
		),
		array(
			'id' => 481,
			'faculdade_id' => 481,
			'tipopagamento_id' => 481,
			'valor' => 481
		),
		array(
			'id' => 482,
			'faculdade_id' => 482,
			'tipopagamento_id' => 482,
			'valor' => 482
		),
		array(
			'id' => 483,
			'faculdade_id' => 483,
			'tipopagamento_id' => 483,
			'valor' => 483
		),
		array(
			'id' => 484,
			'faculdade_id' => 484,
			'tipopagamento_id' => 484,
			'valor' => 484
		),
		array(
			'id' => 485,
			'faculdade_id' => 485,
			'tipopagamento_id' => 485,
			'valor' => 485
		),
		array(
			'id' => 486,
			'faculdade_id' => 486,
			'tipopagamento_id' => 486,
			'valor' => 486
		),
		array(
			'id' => 487,
			'faculdade_id' => 487,
			'tipopagamento_id' => 487,
			'valor' => 487
		),
		array(
			'id' => 488,
			'faculdade_id' => 488,
			'tipopagamento_id' => 488,
			'valor' => 488
		),
		array(
			'id' => 489,
			'faculdade_id' => 489,
			'tipopagamento_id' => 489,
			'valor' => 489
		),
		array(
			'id' => 490,
			'faculdade_id' => 490,
			'tipopagamento_id' => 490,
			'valor' => 490
		),
		array(
			'id' => 491,
			'faculdade_id' => 491,
			'tipopagamento_id' => 491,
			'valor' => 491
		),
		array(
			'id' => 492,
			'faculdade_id' => 492,
			'tipopagamento_id' => 492,
			'valor' => 492
		),
		array(
			'id' => 493,
			'faculdade_id' => 493,
			'tipopagamento_id' => 493,
			'valor' => 493
		),
		array(
			'id' => 494,
			'faculdade_id' => 494,
			'tipopagamento_id' => 494,
			'valor' => 494
		),
		array(
			'id' => 495,
			'faculdade_id' => 495,
			'tipopagamento_id' => 495,
			'valor' => 495
		),
		array(
			'id' => 496,
			'faculdade_id' => 496,
			'tipopagamento_id' => 496,
			'valor' => 496
		),
		array(
			'id' => 497,
			'faculdade_id' => 497,
			'tipopagamento_id' => 497,
			'valor' => 497
		),
		array(
			'id' => 498,
			'faculdade_id' => 498,
			'tipopagamento_id' => 498,
			'valor' => 498
		),
		array(
			'id' => 499,
			'faculdade_id' => 499,
			'tipopagamento_id' => 499,
			'valor' => 499
		),
		array(
			'id' => 500,
			'faculdade_id' => 500,
			'tipopagamento_id' => 500,
			'valor' => 500
		),
		array(
			'id' => 501,
			'faculdade_id' => 501,
			'tipopagamento_id' => 501,
			'valor' => 501
		),
		array(
			'id' => 502,
			'faculdade_id' => 502,
			'tipopagamento_id' => 502,
			'valor' => 502
		),
		array(
			'id' => 503,
			'faculdade_id' => 503,
			'tipopagamento_id' => 503,
			'valor' => 503
		),
		array(
			'id' => 504,
			'faculdade_id' => 504,
			'tipopagamento_id' => 504,
			'valor' => 504
		),
		array(
			'id' => 505,
			'faculdade_id' => 505,
			'tipopagamento_id' => 505,
			'valor' => 505
		),
		array(
			'id' => 506,
			'faculdade_id' => 506,
			'tipopagamento_id' => 506,
			'valor' => 506
		),
		array(
			'id' => 507,
			'faculdade_id' => 507,
			'tipopagamento_id' => 507,
			'valor' => 507
		),
		array(
			'id' => 508,
			'faculdade_id' => 508,
			'tipopagamento_id' => 508,
			'valor' => 508
		),
		array(
			'id' => 509,
			'faculdade_id' => 509,
			'tipopagamento_id' => 509,
			'valor' => 509
		),
		array(
			'id' => 510,
			'faculdade_id' => 510,
			'tipopagamento_id' => 510,
			'valor' => 510
		),
		array(
			'id' => 511,
			'faculdade_id' => 511,
			'tipopagamento_id' => 511,
			'valor' => 511
		),
		array(
			'id' => 512,
			'faculdade_id' => 512,
			'tipopagamento_id' => 512,
			'valor' => 512
		),
		array(
			'id' => 513,
			'faculdade_id' => 513,
			'tipopagamento_id' => 513,
			'valor' => 513
		),
		array(
			'id' => 514,
			'faculdade_id' => 514,
			'tipopagamento_id' => 514,
			'valor' => 514
		),
		array(
			'id' => 515,
			'faculdade_id' => 515,
			'tipopagamento_id' => 515,
			'valor' => 515
		),
		array(
			'id' => 516,
			'faculdade_id' => 516,
			'tipopagamento_id' => 516,
			'valor' => 516
		),
		array(
			'id' => 517,
			'faculdade_id' => 517,
			'tipopagamento_id' => 517,
			'valor' => 517
		),
		array(
			'id' => 518,
			'faculdade_id' => 518,
			'tipopagamento_id' => 518,
			'valor' => 518
		),
		array(
			'id' => 519,
			'faculdade_id' => 519,
			'tipopagamento_id' => 519,
			'valor' => 519
		),
		array(
			'id' => 520,
			'faculdade_id' => 520,
			'tipopagamento_id' => 520,
			'valor' => 520
		),
		array(
			'id' => 521,
			'faculdade_id' => 521,
			'tipopagamento_id' => 521,
			'valor' => 521
		),
		array(
			'id' => 522,
			'faculdade_id' => 522,
			'tipopagamento_id' => 522,
			'valor' => 522
		),
		array(
			'id' => 523,
			'faculdade_id' => 523,
			'tipopagamento_id' => 523,
			'valor' => 523
		),
		array(
			'id' => 524,
			'faculdade_id' => 524,
			'tipopagamento_id' => 524,
			'valor' => 524
		),
		array(
			'id' => 525,
			'faculdade_id' => 525,
			'tipopagamento_id' => 525,
			'valor' => 525
		),
		array(
			'id' => 526,
			'faculdade_id' => 526,
			'tipopagamento_id' => 526,
			'valor' => 526
		),
		array(
			'id' => 527,
			'faculdade_id' => 527,
			'tipopagamento_id' => 527,
			'valor' => 527
		),
		array(
			'id' => 528,
			'faculdade_id' => 528,
			'tipopagamento_id' => 528,
			'valor' => 528
		),
		array(
			'id' => 529,
			'faculdade_id' => 529,
			'tipopagamento_id' => 529,
			'valor' => 529
		),
		array(
			'id' => 530,
			'faculdade_id' => 530,
			'tipopagamento_id' => 530,
			'valor' => 530
		),
		array(
			'id' => 531,
			'faculdade_id' => 531,
			'tipopagamento_id' => 531,
			'valor' => 531
		),
		array(
			'id' => 532,
			'faculdade_id' => 532,
			'tipopagamento_id' => 532,
			'valor' => 532
		),
		array(
			'id' => 533,
			'faculdade_id' => 533,
			'tipopagamento_id' => 533,
			'valor' => 533
		),
		array(
			'id' => 534,
			'faculdade_id' => 534,
			'tipopagamento_id' => 534,
			'valor' => 534
		),
		array(
			'id' => 535,
			'faculdade_id' => 535,
			'tipopagamento_id' => 535,
			'valor' => 535
		),
		array(
			'id' => 536,
			'faculdade_id' => 536,
			'tipopagamento_id' => 536,
			'valor' => 536
		),
		array(
			'id' => 537,
			'faculdade_id' => 537,
			'tipopagamento_id' => 537,
			'valor' => 537
		),
		array(
			'id' => 538,
			'faculdade_id' => 538,
			'tipopagamento_id' => 538,
			'valor' => 538
		),
		array(
			'id' => 539,
			'faculdade_id' => 539,
			'tipopagamento_id' => 539,
			'valor' => 539
		),
		array(
			'id' => 540,
			'faculdade_id' => 540,
			'tipopagamento_id' => 540,
			'valor' => 540
		),
		array(
			'id' => 541,
			'faculdade_id' => 541,
			'tipopagamento_id' => 541,
			'valor' => 541
		),
		array(
			'id' => 542,
			'faculdade_id' => 542,
			'tipopagamento_id' => 542,
			'valor' => 542
		),
		array(
			'id' => 543,
			'faculdade_id' => 543,
			'tipopagamento_id' => 543,
			'valor' => 543
		),
		array(
			'id' => 544,
			'faculdade_id' => 544,
			'tipopagamento_id' => 544,
			'valor' => 544
		),
		array(
			'id' => 545,
			'faculdade_id' => 545,
			'tipopagamento_id' => 545,
			'valor' => 545
		),
		array(
			'id' => 546,
			'faculdade_id' => 546,
			'tipopagamento_id' => 546,
			'valor' => 546
		),
		array(
			'id' => 547,
			'faculdade_id' => 547,
			'tipopagamento_id' => 547,
			'valor' => 547
		),
		array(
			'id' => 548,
			'faculdade_id' => 548,
			'tipopagamento_id' => 548,
			'valor' => 548
		),
		array(
			'id' => 549,
			'faculdade_id' => 549,
			'tipopagamento_id' => 549,
			'valor' => 549
		),
		array(
			'id' => 550,
			'faculdade_id' => 550,
			'tipopagamento_id' => 550,
			'valor' => 550
		),
		array(
			'id' => 551,
			'faculdade_id' => 551,
			'tipopagamento_id' => 551,
			'valor' => 551
		),
		array(
			'id' => 552,
			'faculdade_id' => 552,
			'tipopagamento_id' => 552,
			'valor' => 552
		),
		array(
			'id' => 553,
			'faculdade_id' => 553,
			'tipopagamento_id' => 553,
			'valor' => 553
		),
		array(
			'id' => 554,
			'faculdade_id' => 554,
			'tipopagamento_id' => 554,
			'valor' => 554
		),
		array(
			'id' => 555,
			'faculdade_id' => 555,
			'tipopagamento_id' => 555,
			'valor' => 555
		),
		array(
			'id' => 556,
			'faculdade_id' => 556,
			'tipopagamento_id' => 556,
			'valor' => 556
		),
		array(
			'id' => 557,
			'faculdade_id' => 557,
			'tipopagamento_id' => 557,
			'valor' => 557
		),
		array(
			'id' => 558,
			'faculdade_id' => 558,
			'tipopagamento_id' => 558,
			'valor' => 558
		),
		array(
			'id' => 559,
			'faculdade_id' => 559,
			'tipopagamento_id' => 559,
			'valor' => 559
		),
		array(
			'id' => 560,
			'faculdade_id' => 560,
			'tipopagamento_id' => 560,
			'valor' => 560
		),
		array(
			'id' => 561,
			'faculdade_id' => 561,
			'tipopagamento_id' => 561,
			'valor' => 561
		),
		array(
			'id' => 562,
			'faculdade_id' => 562,
			'tipopagamento_id' => 562,
			'valor' => 562
		),
		array(
			'id' => 563,
			'faculdade_id' => 563,
			'tipopagamento_id' => 563,
			'valor' => 563
		),
		array(
			'id' => 564,
			'faculdade_id' => 564,
			'tipopagamento_id' => 564,
			'valor' => 564
		),
		array(
			'id' => 565,
			'faculdade_id' => 565,
			'tipopagamento_id' => 565,
			'valor' => 565
		),
		array(
			'id' => 566,
			'faculdade_id' => 566,
			'tipopagamento_id' => 566,
			'valor' => 566
		),
		array(
			'id' => 567,
			'faculdade_id' => 567,
			'tipopagamento_id' => 567,
			'valor' => 567
		),
		array(
			'id' => 568,
			'faculdade_id' => 568,
			'tipopagamento_id' => 568,
			'valor' => 568
		),
		array(
			'id' => 569,
			'faculdade_id' => 569,
			'tipopagamento_id' => 569,
			'valor' => 569
		),
		array(
			'id' => 570,
			'faculdade_id' => 570,
			'tipopagamento_id' => 570,
			'valor' => 570
		),
		array(
			'id' => 571,
			'faculdade_id' => 571,
			'tipopagamento_id' => 571,
			'valor' => 571
		),
		array(
			'id' => 572,
			'faculdade_id' => 572,
			'tipopagamento_id' => 572,
			'valor' => 572
		),
		array(
			'id' => 573,
			'faculdade_id' => 573,
			'tipopagamento_id' => 573,
			'valor' => 573
		),
		array(
			'id' => 574,
			'faculdade_id' => 574,
			'tipopagamento_id' => 574,
			'valor' => 574
		),
		array(
			'id' => 575,
			'faculdade_id' => 575,
			'tipopagamento_id' => 575,
			'valor' => 575
		),
		array(
			'id' => 576,
			'faculdade_id' => 576,
			'tipopagamento_id' => 576,
			'valor' => 576
		),
		array(
			'id' => 577,
			'faculdade_id' => 577,
			'tipopagamento_id' => 577,
			'valor' => 577
		),
		array(
			'id' => 578,
			'faculdade_id' => 578,
			'tipopagamento_id' => 578,
			'valor' => 578
		),
		array(
			'id' => 579,
			'faculdade_id' => 579,
			'tipopagamento_id' => 579,
			'valor' => 579
		),
		array(
			'id' => 580,
			'faculdade_id' => 580,
			'tipopagamento_id' => 580,
			'valor' => 580
		),
		array(
			'id' => 581,
			'faculdade_id' => 581,
			'tipopagamento_id' => 581,
			'valor' => 581
		),
		array(
			'id' => 582,
			'faculdade_id' => 582,
			'tipopagamento_id' => 582,
			'valor' => 582
		),
		array(
			'id' => 583,
			'faculdade_id' => 583,
			'tipopagamento_id' => 583,
			'valor' => 583
		),
		array(
			'id' => 584,
			'faculdade_id' => 584,
			'tipopagamento_id' => 584,
			'valor' => 584
		),
		array(
			'id' => 585,
			'faculdade_id' => 585,
			'tipopagamento_id' => 585,
			'valor' => 585
		),
		array(
			'id' => 586,
			'faculdade_id' => 586,
			'tipopagamento_id' => 586,
			'valor' => 586
		),
		array(
			'id' => 587,
			'faculdade_id' => 587,
			'tipopagamento_id' => 587,
			'valor' => 587
		),
		array(
			'id' => 588,
			'faculdade_id' => 588,
			'tipopagamento_id' => 588,
			'valor' => 588
		),
		array(
			'id' => 589,
			'faculdade_id' => 589,
			'tipopagamento_id' => 589,
			'valor' => 589
		),
		array(
			'id' => 590,
			'faculdade_id' => 590,
			'tipopagamento_id' => 590,
			'valor' => 590
		),
		array(
			'id' => 591,
			'faculdade_id' => 591,
			'tipopagamento_id' => 591,
			'valor' => 591
		),
		array(
			'id' => 592,
			'faculdade_id' => 592,
			'tipopagamento_id' => 592,
			'valor' => 592
		),
		array(
			'id' => 593,
			'faculdade_id' => 593,
			'tipopagamento_id' => 593,
			'valor' => 593
		),
		array(
			'id' => 594,
			'faculdade_id' => 594,
			'tipopagamento_id' => 594,
			'valor' => 594
		),
		array(
			'id' => 595,
			'faculdade_id' => 595,
			'tipopagamento_id' => 595,
			'valor' => 595
		),
		array(
			'id' => 596,
			'faculdade_id' => 596,
			'tipopagamento_id' => 596,
			'valor' => 596
		),
		array(
			'id' => 597,
			'faculdade_id' => 597,
			'tipopagamento_id' => 597,
			'valor' => 597
		),
		array(
			'id' => 598,
			'faculdade_id' => 598,
			'tipopagamento_id' => 598,
			'valor' => 598
		),
		array(
			'id' => 599,
			'faculdade_id' => 599,
			'tipopagamento_id' => 599,
			'valor' => 599
		),
		array(
			'id' => 600,
			'faculdade_id' => 600,
			'tipopagamento_id' => 600,
			'valor' => 600
		),
		array(
			'id' => 601,
			'faculdade_id' => 601,
			'tipopagamento_id' => 601,
			'valor' => 601
		),
		array(
			'id' => 602,
			'faculdade_id' => 602,
			'tipopagamento_id' => 602,
			'valor' => 602
		),
		array(
			'id' => 603,
			'faculdade_id' => 603,
			'tipopagamento_id' => 603,
			'valor' => 603
		),
		array(
			'id' => 604,
			'faculdade_id' => 604,
			'tipopagamento_id' => 604,
			'valor' => 604
		),
		array(
			'id' => 605,
			'faculdade_id' => 605,
			'tipopagamento_id' => 605,
			'valor' => 605
		),
		array(
			'id' => 606,
			'faculdade_id' => 606,
			'tipopagamento_id' => 606,
			'valor' => 606
		),
		array(
			'id' => 607,
			'faculdade_id' => 607,
			'tipopagamento_id' => 607,
			'valor' => 607
		),
		array(
			'id' => 608,
			'faculdade_id' => 608,
			'tipopagamento_id' => 608,
			'valor' => 608
		),
		array(
			'id' => 609,
			'faculdade_id' => 609,
			'tipopagamento_id' => 609,
			'valor' => 609
		),
		array(
			'id' => 610,
			'faculdade_id' => 610,
			'tipopagamento_id' => 610,
			'valor' => 610
		),
		array(
			'id' => 611,
			'faculdade_id' => 611,
			'tipopagamento_id' => 611,
			'valor' => 611
		),
		array(
			'id' => 612,
			'faculdade_id' => 612,
			'tipopagamento_id' => 612,
			'valor' => 612
		),
		array(
			'id' => 613,
			'faculdade_id' => 613,
			'tipopagamento_id' => 613,
			'valor' => 613
		),
		array(
			'id' => 614,
			'faculdade_id' => 614,
			'tipopagamento_id' => 614,
			'valor' => 614
		),
		array(
			'id' => 615,
			'faculdade_id' => 615,
			'tipopagamento_id' => 615,
			'valor' => 615
		),
		array(
			'id' => 616,
			'faculdade_id' => 616,
			'tipopagamento_id' => 616,
			'valor' => 616
		),
		array(
			'id' => 617,
			'faculdade_id' => 617,
			'tipopagamento_id' => 617,
			'valor' => 617
		),
		array(
			'id' => 618,
			'faculdade_id' => 618,
			'tipopagamento_id' => 618,
			'valor' => 618
		),
		array(
			'id' => 619,
			'faculdade_id' => 619,
			'tipopagamento_id' => 619,
			'valor' => 619
		),
		array(
			'id' => 620,
			'faculdade_id' => 620,
			'tipopagamento_id' => 620,
			'valor' => 620
		),
		array(
			'id' => 621,
			'faculdade_id' => 621,
			'tipopagamento_id' => 621,
			'valor' => 621
		),
		array(
			'id' => 622,
			'faculdade_id' => 622,
			'tipopagamento_id' => 622,
			'valor' => 622
		),
		array(
			'id' => 623,
			'faculdade_id' => 623,
			'tipopagamento_id' => 623,
			'valor' => 623
		),
		array(
			'id' => 624,
			'faculdade_id' => 624,
			'tipopagamento_id' => 624,
			'valor' => 624
		),
		array(
			'id' => 625,
			'faculdade_id' => 625,
			'tipopagamento_id' => 625,
			'valor' => 625
		),
		array(
			'id' => 626,
			'faculdade_id' => 626,
			'tipopagamento_id' => 626,
			'valor' => 626
		),
		array(
			'id' => 627,
			'faculdade_id' => 627,
			'tipopagamento_id' => 627,
			'valor' => 627
		),
		array(
			'id' => 628,
			'faculdade_id' => 628,
			'tipopagamento_id' => 628,
			'valor' => 628
		),
		array(
			'id' => 629,
			'faculdade_id' => 629,
			'tipopagamento_id' => 629,
			'valor' => 629
		),
		array(
			'id' => 630,
			'faculdade_id' => 630,
			'tipopagamento_id' => 630,
			'valor' => 630
		),
		array(
			'id' => 631,
			'faculdade_id' => 631,
			'tipopagamento_id' => 631,
			'valor' => 631
		),
		array(
			'id' => 632,
			'faculdade_id' => 632,
			'tipopagamento_id' => 632,
			'valor' => 632
		),
		array(
			'id' => 633,
			'faculdade_id' => 633,
			'tipopagamento_id' => 633,
			'valor' => 633
		),
		array(
			'id' => 634,
			'faculdade_id' => 634,
			'tipopagamento_id' => 634,
			'valor' => 634
		),
		array(
			'id' => 635,
			'faculdade_id' => 635,
			'tipopagamento_id' => 635,
			'valor' => 635
		),
		array(
			'id' => 636,
			'faculdade_id' => 636,
			'tipopagamento_id' => 636,
			'valor' => 636
		),
		array(
			'id' => 637,
			'faculdade_id' => 637,
			'tipopagamento_id' => 637,
			'valor' => 637
		),
		array(
			'id' => 638,
			'faculdade_id' => 638,
			'tipopagamento_id' => 638,
			'valor' => 638
		),
		array(
			'id' => 639,
			'faculdade_id' => 639,
			'tipopagamento_id' => 639,
			'valor' => 639
		),
		array(
			'id' => 640,
			'faculdade_id' => 640,
			'tipopagamento_id' => 640,
			'valor' => 640
		),
		array(
			'id' => 641,
			'faculdade_id' => 641,
			'tipopagamento_id' => 641,
			'valor' => 641
		),
		array(
			'id' => 642,
			'faculdade_id' => 642,
			'tipopagamento_id' => 642,
			'valor' => 642
		),
		array(
			'id' => 643,
			'faculdade_id' => 643,
			'tipopagamento_id' => 643,
			'valor' => 643
		),
		array(
			'id' => 644,
			'faculdade_id' => 644,
			'tipopagamento_id' => 644,
			'valor' => 644
		),
		array(
			'id' => 645,
			'faculdade_id' => 645,
			'tipopagamento_id' => 645,
			'valor' => 645
		),
		array(
			'id' => 646,
			'faculdade_id' => 646,
			'tipopagamento_id' => 646,
			'valor' => 646
		),
		array(
			'id' => 647,
			'faculdade_id' => 647,
			'tipopagamento_id' => 647,
			'valor' => 647
		),
		array(
			'id' => 648,
			'faculdade_id' => 648,
			'tipopagamento_id' => 648,
			'valor' => 648
		),
		array(
			'id' => 649,
			'faculdade_id' => 649,
			'tipopagamento_id' => 649,
			'valor' => 649
		),
		array(
			'id' => 650,
			'faculdade_id' => 650,
			'tipopagamento_id' => 650,
			'valor' => 650
		),
		array(
			'id' => 651,
			'faculdade_id' => 651,
			'tipopagamento_id' => 651,
			'valor' => 651
		),
		array(
			'id' => 652,
			'faculdade_id' => 652,
			'tipopagamento_id' => 652,
			'valor' => 652
		),
		array(
			'id' => 653,
			'faculdade_id' => 653,
			'tipopagamento_id' => 653,
			'valor' => 653
		),
		array(
			'id' => 654,
			'faculdade_id' => 654,
			'tipopagamento_id' => 654,
			'valor' => 654
		),
		array(
			'id' => 655,
			'faculdade_id' => 655,
			'tipopagamento_id' => 655,
			'valor' => 655
		),
		array(
			'id' => 656,
			'faculdade_id' => 656,
			'tipopagamento_id' => 656,
			'valor' => 656
		),
		array(
			'id' => 657,
			'faculdade_id' => 657,
			'tipopagamento_id' => 657,
			'valor' => 657
		),
		array(
			'id' => 658,
			'faculdade_id' => 658,
			'tipopagamento_id' => 658,
			'valor' => 658
		),
		array(
			'id' => 659,
			'faculdade_id' => 659,
			'tipopagamento_id' => 659,
			'valor' => 659
		),
		array(
			'id' => 660,
			'faculdade_id' => 660,
			'tipopagamento_id' => 660,
			'valor' => 660
		),
		array(
			'id' => 661,
			'faculdade_id' => 661,
			'tipopagamento_id' => 661,
			'valor' => 661
		),
		array(
			'id' => 662,
			'faculdade_id' => 662,
			'tipopagamento_id' => 662,
			'valor' => 662
		),
		array(
			'id' => 663,
			'faculdade_id' => 663,
			'tipopagamento_id' => 663,
			'valor' => 663
		),
		array(
			'id' => 664,
			'faculdade_id' => 664,
			'tipopagamento_id' => 664,
			'valor' => 664
		),
		array(
			'id' => 665,
			'faculdade_id' => 665,
			'tipopagamento_id' => 665,
			'valor' => 665
		),
		array(
			'id' => 666,
			'faculdade_id' => 666,
			'tipopagamento_id' => 666,
			'valor' => 666
		),
		array(
			'id' => 667,
			'faculdade_id' => 667,
			'tipopagamento_id' => 667,
			'valor' => 667
		),
		array(
			'id' => 668,
			'faculdade_id' => 668,
			'tipopagamento_id' => 668,
			'valor' => 668
		),
		array(
			'id' => 669,
			'faculdade_id' => 669,
			'tipopagamento_id' => 669,
			'valor' => 669
		),
		array(
			'id' => 670,
			'faculdade_id' => 670,
			'tipopagamento_id' => 670,
			'valor' => 670
		),
		array(
			'id' => 671,
			'faculdade_id' => 671,
			'tipopagamento_id' => 671,
			'valor' => 671
		),
		array(
			'id' => 672,
			'faculdade_id' => 672,
			'tipopagamento_id' => 672,
			'valor' => 672
		),
		array(
			'id' => 673,
			'faculdade_id' => 673,
			'tipopagamento_id' => 673,
			'valor' => 673
		),
		array(
			'id' => 674,
			'faculdade_id' => 674,
			'tipopagamento_id' => 674,
			'valor' => 674
		),
		array(
			'id' => 675,
			'faculdade_id' => 675,
			'tipopagamento_id' => 675,
			'valor' => 675
		),
		array(
			'id' => 676,
			'faculdade_id' => 676,
			'tipopagamento_id' => 676,
			'valor' => 676
		),
		array(
			'id' => 677,
			'faculdade_id' => 677,
			'tipopagamento_id' => 677,
			'valor' => 677
		),
		array(
			'id' => 678,
			'faculdade_id' => 678,
			'tipopagamento_id' => 678,
			'valor' => 678
		),
		array(
			'id' => 679,
			'faculdade_id' => 679,
			'tipopagamento_id' => 679,
			'valor' => 679
		),
		array(
			'id' => 680,
			'faculdade_id' => 680,
			'tipopagamento_id' => 680,
			'valor' => 680
		),
		array(
			'id' => 681,
			'faculdade_id' => 681,
			'tipopagamento_id' => 681,
			'valor' => 681
		),
		array(
			'id' => 682,
			'faculdade_id' => 682,
			'tipopagamento_id' => 682,
			'valor' => 682
		),
		array(
			'id' => 683,
			'faculdade_id' => 683,
			'tipopagamento_id' => 683,
			'valor' => 683
		),
		array(
			'id' => 684,
			'faculdade_id' => 684,
			'tipopagamento_id' => 684,
			'valor' => 684
		),
		array(
			'id' => 685,
			'faculdade_id' => 685,
			'tipopagamento_id' => 685,
			'valor' => 685
		),
		array(
			'id' => 686,
			'faculdade_id' => 686,
			'tipopagamento_id' => 686,
			'valor' => 686
		),
		array(
			'id' => 687,
			'faculdade_id' => 687,
			'tipopagamento_id' => 687,
			'valor' => 687
		),
		array(
			'id' => 688,
			'faculdade_id' => 688,
			'tipopagamento_id' => 688,
			'valor' => 688
		),
		array(
			'id' => 689,
			'faculdade_id' => 689,
			'tipopagamento_id' => 689,
			'valor' => 689
		),
		array(
			'id' => 690,
			'faculdade_id' => 690,
			'tipopagamento_id' => 690,
			'valor' => 690
		),
		array(
			'id' => 691,
			'faculdade_id' => 691,
			'tipopagamento_id' => 691,
			'valor' => 691
		),
		array(
			'id' => 692,
			'faculdade_id' => 692,
			'tipopagamento_id' => 692,
			'valor' => 692
		),
		array(
			'id' => 693,
			'faculdade_id' => 693,
			'tipopagamento_id' => 693,
			'valor' => 693
		),
		array(
			'id' => 694,
			'faculdade_id' => 694,
			'tipopagamento_id' => 694,
			'valor' => 694
		),
		array(
			'id' => 695,
			'faculdade_id' => 695,
			'tipopagamento_id' => 695,
			'valor' => 695
		),
		array(
			'id' => 696,
			'faculdade_id' => 696,
			'tipopagamento_id' => 696,
			'valor' => 696
		),
		array(
			'id' => 697,
			'faculdade_id' => 697,
			'tipopagamento_id' => 697,
			'valor' => 697
		),
		array(
			'id' => 698,
			'faculdade_id' => 698,
			'tipopagamento_id' => 698,
			'valor' => 698
		),
		array(
			'id' => 699,
			'faculdade_id' => 699,
			'tipopagamento_id' => 699,
			'valor' => 699
		),
		array(
			'id' => 700,
			'faculdade_id' => 700,
			'tipopagamento_id' => 700,
			'valor' => 700
		),
		array(
			'id' => 701,
			'faculdade_id' => 701,
			'tipopagamento_id' => 701,
			'valor' => 701
		),
		array(
			'id' => 702,
			'faculdade_id' => 702,
			'tipopagamento_id' => 702,
			'valor' => 702
		),
		array(
			'id' => 703,
			'faculdade_id' => 703,
			'tipopagamento_id' => 703,
			'valor' => 703
		),
		array(
			'id' => 704,
			'faculdade_id' => 704,
			'tipopagamento_id' => 704,
			'valor' => 704
		),
		array(
			'id' => 705,
			'faculdade_id' => 705,
			'tipopagamento_id' => 705,
			'valor' => 705
		),
		array(
			'id' => 706,
			'faculdade_id' => 706,
			'tipopagamento_id' => 706,
			'valor' => 706
		),
		array(
			'id' => 707,
			'faculdade_id' => 707,
			'tipopagamento_id' => 707,
			'valor' => 707
		),
		array(
			'id' => 708,
			'faculdade_id' => 708,
			'tipopagamento_id' => 708,
			'valor' => 708
		),
		array(
			'id' => 709,
			'faculdade_id' => 709,
			'tipopagamento_id' => 709,
			'valor' => 709
		),
		array(
			'id' => 710,
			'faculdade_id' => 710,
			'tipopagamento_id' => 710,
			'valor' => 710
		),
		array(
			'id' => 711,
			'faculdade_id' => 711,
			'tipopagamento_id' => 711,
			'valor' => 711
		),
		array(
			'id' => 712,
			'faculdade_id' => 712,
			'tipopagamento_id' => 712,
			'valor' => 712
		),
		array(
			'id' => 713,
			'faculdade_id' => 713,
			'tipopagamento_id' => 713,
			'valor' => 713
		),
		array(
			'id' => 714,
			'faculdade_id' => 714,
			'tipopagamento_id' => 714,
			'valor' => 714
		),
		array(
			'id' => 715,
			'faculdade_id' => 715,
			'tipopagamento_id' => 715,
			'valor' => 715
		),
		array(
			'id' => 716,
			'faculdade_id' => 716,
			'tipopagamento_id' => 716,
			'valor' => 716
		),
		array(
			'id' => 717,
			'faculdade_id' => 717,
			'tipopagamento_id' => 717,
			'valor' => 717
		),
		array(
			'id' => 718,
			'faculdade_id' => 718,
			'tipopagamento_id' => 718,
			'valor' => 718
		),
		array(
			'id' => 719,
			'faculdade_id' => 719,
			'tipopagamento_id' => 719,
			'valor' => 719
		),
		array(
			'id' => 720,
			'faculdade_id' => 720,
			'tipopagamento_id' => 720,
			'valor' => 720
		),
		array(
			'id' => 721,
			'faculdade_id' => 721,
			'tipopagamento_id' => 721,
			'valor' => 721
		),
		array(
			'id' => 722,
			'faculdade_id' => 722,
			'tipopagamento_id' => 722,
			'valor' => 722
		),
		array(
			'id' => 723,
			'faculdade_id' => 723,
			'tipopagamento_id' => 723,
			'valor' => 723
		),
		array(
			'id' => 724,
			'faculdade_id' => 724,
			'tipopagamento_id' => 724,
			'valor' => 724
		),
		array(
			'id' => 725,
			'faculdade_id' => 725,
			'tipopagamento_id' => 725,
			'valor' => 725
		),
		array(
			'id' => 726,
			'faculdade_id' => 726,
			'tipopagamento_id' => 726,
			'valor' => 726
		),
		array(
			'id' => 727,
			'faculdade_id' => 727,
			'tipopagamento_id' => 727,
			'valor' => 727
		),
		array(
			'id' => 728,
			'faculdade_id' => 728,
			'tipopagamento_id' => 728,
			'valor' => 728
		),
		array(
			'id' => 729,
			'faculdade_id' => 729,
			'tipopagamento_id' => 729,
			'valor' => 729
		),
		array(
			'id' => 730,
			'faculdade_id' => 730,
			'tipopagamento_id' => 730,
			'valor' => 730
		),
		array(
			'id' => 731,
			'faculdade_id' => 731,
			'tipopagamento_id' => 731,
			'valor' => 731
		),
		array(
			'id' => 732,
			'faculdade_id' => 732,
			'tipopagamento_id' => 732,
			'valor' => 732
		),
		array(
			'id' => 733,
			'faculdade_id' => 733,
			'tipopagamento_id' => 733,
			'valor' => 733
		),
		array(
			'id' => 734,
			'faculdade_id' => 734,
			'tipopagamento_id' => 734,
			'valor' => 734
		),
		array(
			'id' => 735,
			'faculdade_id' => 735,
			'tipopagamento_id' => 735,
			'valor' => 735
		),
		array(
			'id' => 736,
			'faculdade_id' => 736,
			'tipopagamento_id' => 736,
			'valor' => 736
		),
		array(
			'id' => 737,
			'faculdade_id' => 737,
			'tipopagamento_id' => 737,
			'valor' => 737
		),
		array(
			'id' => 738,
			'faculdade_id' => 738,
			'tipopagamento_id' => 738,
			'valor' => 738
		),
		array(
			'id' => 739,
			'faculdade_id' => 739,
			'tipopagamento_id' => 739,
			'valor' => 739
		),
		array(
			'id' => 740,
			'faculdade_id' => 740,
			'tipopagamento_id' => 740,
			'valor' => 740
		),
		array(
			'id' => 741,
			'faculdade_id' => 741,
			'tipopagamento_id' => 741,
			'valor' => 741
		),
		array(
			'id' => 742,
			'faculdade_id' => 742,
			'tipopagamento_id' => 742,
			'valor' => 742
		),
		array(
			'id' => 743,
			'faculdade_id' => 743,
			'tipopagamento_id' => 743,
			'valor' => 743
		),
		array(
			'id' => 744,
			'faculdade_id' => 744,
			'tipopagamento_id' => 744,
			'valor' => 744
		),
		array(
			'id' => 745,
			'faculdade_id' => 745,
			'tipopagamento_id' => 745,
			'valor' => 745
		),
		array(
			'id' => 746,
			'faculdade_id' => 746,
			'tipopagamento_id' => 746,
			'valor' => 746
		),
		array(
			'id' => 747,
			'faculdade_id' => 747,
			'tipopagamento_id' => 747,
			'valor' => 747
		),
		array(
			'id' => 748,
			'faculdade_id' => 748,
			'tipopagamento_id' => 748,
			'valor' => 748
		),
		array(
			'id' => 749,
			'faculdade_id' => 749,
			'tipopagamento_id' => 749,
			'valor' => 749
		),
		array(
			'id' => 750,
			'faculdade_id' => 750,
			'tipopagamento_id' => 750,
			'valor' => 750
		),
		array(
			'id' => 751,
			'faculdade_id' => 751,
			'tipopagamento_id' => 751,
			'valor' => 751
		),
		array(
			'id' => 752,
			'faculdade_id' => 752,
			'tipopagamento_id' => 752,
			'valor' => 752
		),
		array(
			'id' => 753,
			'faculdade_id' => 753,
			'tipopagamento_id' => 753,
			'valor' => 753
		),
		array(
			'id' => 754,
			'faculdade_id' => 754,
			'tipopagamento_id' => 754,
			'valor' => 754
		),
		array(
			'id' => 755,
			'faculdade_id' => 755,
			'tipopagamento_id' => 755,
			'valor' => 755
		),
		array(
			'id' => 756,
			'faculdade_id' => 756,
			'tipopagamento_id' => 756,
			'valor' => 756
		),
		array(
			'id' => 757,
			'faculdade_id' => 757,
			'tipopagamento_id' => 757,
			'valor' => 757
		),
		array(
			'id' => 758,
			'faculdade_id' => 758,
			'tipopagamento_id' => 758,
			'valor' => 758
		),
		array(
			'id' => 759,
			'faculdade_id' => 759,
			'tipopagamento_id' => 759,
			'valor' => 759
		),
		array(
			'id' => 760,
			'faculdade_id' => 760,
			'tipopagamento_id' => 760,
			'valor' => 760
		),
		array(
			'id' => 761,
			'faculdade_id' => 761,
			'tipopagamento_id' => 761,
			'valor' => 761
		),
		array(
			'id' => 762,
			'faculdade_id' => 762,
			'tipopagamento_id' => 762,
			'valor' => 762
		),
		array(
			'id' => 763,
			'faculdade_id' => 763,
			'tipopagamento_id' => 763,
			'valor' => 763
		),
		array(
			'id' => 764,
			'faculdade_id' => 764,
			'tipopagamento_id' => 764,
			'valor' => 764
		),
		array(
			'id' => 765,
			'faculdade_id' => 765,
			'tipopagamento_id' => 765,
			'valor' => 765
		),
		array(
			'id' => 766,
			'faculdade_id' => 766,
			'tipopagamento_id' => 766,
			'valor' => 766
		),
		array(
			'id' => 767,
			'faculdade_id' => 767,
			'tipopagamento_id' => 767,
			'valor' => 767
		),
		array(
			'id' => 768,
			'faculdade_id' => 768,
			'tipopagamento_id' => 768,
			'valor' => 768
		),
		array(
			'id' => 769,
			'faculdade_id' => 769,
			'tipopagamento_id' => 769,
			'valor' => 769
		),
		array(
			'id' => 770,
			'faculdade_id' => 770,
			'tipopagamento_id' => 770,
			'valor' => 770
		),
		array(
			'id' => 771,
			'faculdade_id' => 771,
			'tipopagamento_id' => 771,
			'valor' => 771
		),
		array(
			'id' => 772,
			'faculdade_id' => 772,
			'tipopagamento_id' => 772,
			'valor' => 772
		),
		array(
			'id' => 773,
			'faculdade_id' => 773,
			'tipopagamento_id' => 773,
			'valor' => 773
		),
		array(
			'id' => 774,
			'faculdade_id' => 774,
			'tipopagamento_id' => 774,
			'valor' => 774
		),
		array(
			'id' => 775,
			'faculdade_id' => 775,
			'tipopagamento_id' => 775,
			'valor' => 775
		),
		array(
			'id' => 776,
			'faculdade_id' => 776,
			'tipopagamento_id' => 776,
			'valor' => 776
		),
		array(
			'id' => 777,
			'faculdade_id' => 777,
			'tipopagamento_id' => 777,
			'valor' => 777
		),
		array(
			'id' => 778,
			'faculdade_id' => 778,
			'tipopagamento_id' => 778,
			'valor' => 778
		),
		array(
			'id' => 779,
			'faculdade_id' => 779,
			'tipopagamento_id' => 779,
			'valor' => 779
		),
		array(
			'id' => 780,
			'faculdade_id' => 780,
			'tipopagamento_id' => 780,
			'valor' => 780
		),
		array(
			'id' => 781,
			'faculdade_id' => 781,
			'tipopagamento_id' => 781,
			'valor' => 781
		),
		array(
			'id' => 782,
			'faculdade_id' => 782,
			'tipopagamento_id' => 782,
			'valor' => 782
		),
		array(
			'id' => 783,
			'faculdade_id' => 783,
			'tipopagamento_id' => 783,
			'valor' => 783
		),
		array(
			'id' => 784,
			'faculdade_id' => 784,
			'tipopagamento_id' => 784,
			'valor' => 784
		),
		array(
			'id' => 785,
			'faculdade_id' => 785,
			'tipopagamento_id' => 785,
			'valor' => 785
		),
		array(
			'id' => 786,
			'faculdade_id' => 786,
			'tipopagamento_id' => 786,
			'valor' => 786
		),
		array(
			'id' => 787,
			'faculdade_id' => 787,
			'tipopagamento_id' => 787,
			'valor' => 787
		),
		array(
			'id' => 788,
			'faculdade_id' => 788,
			'tipopagamento_id' => 788,
			'valor' => 788
		),
		array(
			'id' => 789,
			'faculdade_id' => 789,
			'tipopagamento_id' => 789,
			'valor' => 789
		),
		array(
			'id' => 790,
			'faculdade_id' => 790,
			'tipopagamento_id' => 790,
			'valor' => 790
		),
		array(
			'id' => 791,
			'faculdade_id' => 791,
			'tipopagamento_id' => 791,
			'valor' => 791
		),
		array(
			'id' => 792,
			'faculdade_id' => 792,
			'tipopagamento_id' => 792,
			'valor' => 792
		),
		array(
			'id' => 793,
			'faculdade_id' => 793,
			'tipopagamento_id' => 793,
			'valor' => 793
		),
		array(
			'id' => 794,
			'faculdade_id' => 794,
			'tipopagamento_id' => 794,
			'valor' => 794
		),
		array(
			'id' => 795,
			'faculdade_id' => 795,
			'tipopagamento_id' => 795,
			'valor' => 795
		),
		array(
			'id' => 796,
			'faculdade_id' => 796,
			'tipopagamento_id' => 796,
			'valor' => 796
		),
		array(
			'id' => 797,
			'faculdade_id' => 797,
			'tipopagamento_id' => 797,
			'valor' => 797
		),
		array(
			'id' => 798,
			'faculdade_id' => 798,
			'tipopagamento_id' => 798,
			'valor' => 798
		),
		array(
			'id' => 799,
			'faculdade_id' => 799,
			'tipopagamento_id' => 799,
			'valor' => 799
		),
		array(
			'id' => 800,
			'faculdade_id' => 800,
			'tipopagamento_id' => 800,
			'valor' => 800
		),
		array(
			'id' => 801,
			'faculdade_id' => 801,
			'tipopagamento_id' => 801,
			'valor' => 801
		),
		array(
			'id' => 802,
			'faculdade_id' => 802,
			'tipopagamento_id' => 802,
			'valor' => 802
		),
		array(
			'id' => 803,
			'faculdade_id' => 803,
			'tipopagamento_id' => 803,
			'valor' => 803
		),
		array(
			'id' => 804,
			'faculdade_id' => 804,
			'tipopagamento_id' => 804,
			'valor' => 804
		),
		array(
			'id' => 805,
			'faculdade_id' => 805,
			'tipopagamento_id' => 805,
			'valor' => 805
		),
		array(
			'id' => 806,
			'faculdade_id' => 806,
			'tipopagamento_id' => 806,
			'valor' => 806
		),
		array(
			'id' => 807,
			'faculdade_id' => 807,
			'tipopagamento_id' => 807,
			'valor' => 807
		),
		array(
			'id' => 808,
			'faculdade_id' => 808,
			'tipopagamento_id' => 808,
			'valor' => 808
		),
		array(
			'id' => 809,
			'faculdade_id' => 809,
			'tipopagamento_id' => 809,
			'valor' => 809
		),
		array(
			'id' => 810,
			'faculdade_id' => 810,
			'tipopagamento_id' => 810,
			'valor' => 810
		),
		array(
			'id' => 811,
			'faculdade_id' => 811,
			'tipopagamento_id' => 811,
			'valor' => 811
		),
		array(
			'id' => 812,
			'faculdade_id' => 812,
			'tipopagamento_id' => 812,
			'valor' => 812
		),
		array(
			'id' => 813,
			'faculdade_id' => 813,
			'tipopagamento_id' => 813,
			'valor' => 813
		),
		array(
			'id' => 814,
			'faculdade_id' => 814,
			'tipopagamento_id' => 814,
			'valor' => 814
		),
		array(
			'id' => 815,
			'faculdade_id' => 815,
			'tipopagamento_id' => 815,
			'valor' => 815
		),
		array(
			'id' => 816,
			'faculdade_id' => 816,
			'tipopagamento_id' => 816,
			'valor' => 816
		),
		array(
			'id' => 817,
			'faculdade_id' => 817,
			'tipopagamento_id' => 817,
			'valor' => 817
		),
		array(
			'id' => 818,
			'faculdade_id' => 818,
			'tipopagamento_id' => 818,
			'valor' => 818
		),
		array(
			'id' => 819,
			'faculdade_id' => 819,
			'tipopagamento_id' => 819,
			'valor' => 819
		),
		array(
			'id' => 820,
			'faculdade_id' => 820,
			'tipopagamento_id' => 820,
			'valor' => 820
		),
		array(
			'id' => 821,
			'faculdade_id' => 821,
			'tipopagamento_id' => 821,
			'valor' => 821
		),
		array(
			'id' => 822,
			'faculdade_id' => 822,
			'tipopagamento_id' => 822,
			'valor' => 822
		),
		array(
			'id' => 823,
			'faculdade_id' => 823,
			'tipopagamento_id' => 823,
			'valor' => 823
		),
		array(
			'id' => 824,
			'faculdade_id' => 824,
			'tipopagamento_id' => 824,
			'valor' => 824
		),
		array(
			'id' => 825,
			'faculdade_id' => 825,
			'tipopagamento_id' => 825,
			'valor' => 825
		),
		array(
			'id' => 826,
			'faculdade_id' => 826,
			'tipopagamento_id' => 826,
			'valor' => 826
		),
		array(
			'id' => 827,
			'faculdade_id' => 827,
			'tipopagamento_id' => 827,
			'valor' => 827
		),
		array(
			'id' => 828,
			'faculdade_id' => 828,
			'tipopagamento_id' => 828,
			'valor' => 828
		),
		array(
			'id' => 829,
			'faculdade_id' => 829,
			'tipopagamento_id' => 829,
			'valor' => 829
		),
		array(
			'id' => 830,
			'faculdade_id' => 830,
			'tipopagamento_id' => 830,
			'valor' => 830
		),
		array(
			'id' => 831,
			'faculdade_id' => 831,
			'tipopagamento_id' => 831,
			'valor' => 831
		),
		array(
			'id' => 832,
			'faculdade_id' => 832,
			'tipopagamento_id' => 832,
			'valor' => 832
		),
		array(
			'id' => 833,
			'faculdade_id' => 833,
			'tipopagamento_id' => 833,
			'valor' => 833
		),
		array(
			'id' => 834,
			'faculdade_id' => 834,
			'tipopagamento_id' => 834,
			'valor' => 834
		),
		array(
			'id' => 835,
			'faculdade_id' => 835,
			'tipopagamento_id' => 835,
			'valor' => 835
		),
		array(
			'id' => 836,
			'faculdade_id' => 836,
			'tipopagamento_id' => 836,
			'valor' => 836
		),
		array(
			'id' => 837,
			'faculdade_id' => 837,
			'tipopagamento_id' => 837,
			'valor' => 837
		),
		array(
			'id' => 838,
			'faculdade_id' => 838,
			'tipopagamento_id' => 838,
			'valor' => 838
		),
		array(
			'id' => 839,
			'faculdade_id' => 839,
			'tipopagamento_id' => 839,
			'valor' => 839
		),
		array(
			'id' => 840,
			'faculdade_id' => 840,
			'tipopagamento_id' => 840,
			'valor' => 840
		),
		array(
			'id' => 841,
			'faculdade_id' => 841,
			'tipopagamento_id' => 841,
			'valor' => 841
		),
		array(
			'id' => 842,
			'faculdade_id' => 842,
			'tipopagamento_id' => 842,
			'valor' => 842
		),
		array(
			'id' => 843,
			'faculdade_id' => 843,
			'tipopagamento_id' => 843,
			'valor' => 843
		),
		array(
			'id' => 844,
			'faculdade_id' => 844,
			'tipopagamento_id' => 844,
			'valor' => 844
		),
		array(
			'id' => 845,
			'faculdade_id' => 845,
			'tipopagamento_id' => 845,
			'valor' => 845
		),
		array(
			'id' => 846,
			'faculdade_id' => 846,
			'tipopagamento_id' => 846,
			'valor' => 846
		),
		array(
			'id' => 847,
			'faculdade_id' => 847,
			'tipopagamento_id' => 847,
			'valor' => 847
		),
		array(
			'id' => 848,
			'faculdade_id' => 848,
			'tipopagamento_id' => 848,
			'valor' => 848
		),
		array(
			'id' => 849,
			'faculdade_id' => 849,
			'tipopagamento_id' => 849,
			'valor' => 849
		),
		array(
			'id' => 850,
			'faculdade_id' => 850,
			'tipopagamento_id' => 850,
			'valor' => 850
		),
		array(
			'id' => 851,
			'faculdade_id' => 851,
			'tipopagamento_id' => 851,
			'valor' => 851
		),
		array(
			'id' => 852,
			'faculdade_id' => 852,
			'tipopagamento_id' => 852,
			'valor' => 852
		),
		array(
			'id' => 853,
			'faculdade_id' => 853,
			'tipopagamento_id' => 853,
			'valor' => 853
		),
		array(
			'id' => 854,
			'faculdade_id' => 854,
			'tipopagamento_id' => 854,
			'valor' => 854
		),
		array(
			'id' => 855,
			'faculdade_id' => 855,
			'tipopagamento_id' => 855,
			'valor' => 855
		),
		array(
			'id' => 856,
			'faculdade_id' => 856,
			'tipopagamento_id' => 856,
			'valor' => 856
		),
		array(
			'id' => 857,
			'faculdade_id' => 857,
			'tipopagamento_id' => 857,
			'valor' => 857
		),
		array(
			'id' => 858,
			'faculdade_id' => 858,
			'tipopagamento_id' => 858,
			'valor' => 858
		),
		array(
			'id' => 859,
			'faculdade_id' => 859,
			'tipopagamento_id' => 859,
			'valor' => 859
		),
		array(
			'id' => 860,
			'faculdade_id' => 860,
			'tipopagamento_id' => 860,
			'valor' => 860
		),
		array(
			'id' => 861,
			'faculdade_id' => 861,
			'tipopagamento_id' => 861,
			'valor' => 861
		),
		array(
			'id' => 862,
			'faculdade_id' => 862,
			'tipopagamento_id' => 862,
			'valor' => 862
		),
		array(
			'id' => 863,
			'faculdade_id' => 863,
			'tipopagamento_id' => 863,
			'valor' => 863
		),
		array(
			'id' => 864,
			'faculdade_id' => 864,
			'tipopagamento_id' => 864,
			'valor' => 864
		),
		array(
			'id' => 865,
			'faculdade_id' => 865,
			'tipopagamento_id' => 865,
			'valor' => 865
		),
		array(
			'id' => 866,
			'faculdade_id' => 866,
			'tipopagamento_id' => 866,
			'valor' => 866
		),
		array(
			'id' => 867,
			'faculdade_id' => 867,
			'tipopagamento_id' => 867,
			'valor' => 867
		),
		array(
			'id' => 868,
			'faculdade_id' => 868,
			'tipopagamento_id' => 868,
			'valor' => 868
		),
		array(
			'id' => 869,
			'faculdade_id' => 869,
			'tipopagamento_id' => 869,
			'valor' => 869
		),
		array(
			'id' => 870,
			'faculdade_id' => 870,
			'tipopagamento_id' => 870,
			'valor' => 870
		),
		array(
			'id' => 871,
			'faculdade_id' => 871,
			'tipopagamento_id' => 871,
			'valor' => 871
		),
		array(
			'id' => 872,
			'faculdade_id' => 872,
			'tipopagamento_id' => 872,
			'valor' => 872
		),
		array(
			'id' => 873,
			'faculdade_id' => 873,
			'tipopagamento_id' => 873,
			'valor' => 873
		),
		array(
			'id' => 874,
			'faculdade_id' => 874,
			'tipopagamento_id' => 874,
			'valor' => 874
		),
		array(
			'id' => 875,
			'faculdade_id' => 875,
			'tipopagamento_id' => 875,
			'valor' => 875
		),
		array(
			'id' => 876,
			'faculdade_id' => 876,
			'tipopagamento_id' => 876,
			'valor' => 876
		),
		array(
			'id' => 877,
			'faculdade_id' => 877,
			'tipopagamento_id' => 877,
			'valor' => 877
		),
		array(
			'id' => 878,
			'faculdade_id' => 878,
			'tipopagamento_id' => 878,
			'valor' => 878
		),
		array(
			'id' => 879,
			'faculdade_id' => 879,
			'tipopagamento_id' => 879,
			'valor' => 879
		),
		array(
			'id' => 880,
			'faculdade_id' => 880,
			'tipopagamento_id' => 880,
			'valor' => 880
		),
		array(
			'id' => 881,
			'faculdade_id' => 881,
			'tipopagamento_id' => 881,
			'valor' => 881
		),
		array(
			'id' => 882,
			'faculdade_id' => 882,
			'tipopagamento_id' => 882,
			'valor' => 882
		),
		array(
			'id' => 883,
			'faculdade_id' => 883,
			'tipopagamento_id' => 883,
			'valor' => 883
		),
		array(
			'id' => 884,
			'faculdade_id' => 884,
			'tipopagamento_id' => 884,
			'valor' => 884
		),
		array(
			'id' => 885,
			'faculdade_id' => 885,
			'tipopagamento_id' => 885,
			'valor' => 885
		),
		array(
			'id' => 886,
			'faculdade_id' => 886,
			'tipopagamento_id' => 886,
			'valor' => 886
		),
		array(
			'id' => 887,
			'faculdade_id' => 887,
			'tipopagamento_id' => 887,
			'valor' => 887
		),
		array(
			'id' => 888,
			'faculdade_id' => 888,
			'tipopagamento_id' => 888,
			'valor' => 888
		),
		array(
			'id' => 889,
			'faculdade_id' => 889,
			'tipopagamento_id' => 889,
			'valor' => 889
		),
		array(
			'id' => 890,
			'faculdade_id' => 890,
			'tipopagamento_id' => 890,
			'valor' => 890
		),
		array(
			'id' => 891,
			'faculdade_id' => 891,
			'tipopagamento_id' => 891,
			'valor' => 891
		),
		array(
			'id' => 892,
			'faculdade_id' => 892,
			'tipopagamento_id' => 892,
			'valor' => 892
		),
		array(
			'id' => 893,
			'faculdade_id' => 893,
			'tipopagamento_id' => 893,
			'valor' => 893
		),
		array(
			'id' => 894,
			'faculdade_id' => 894,
			'tipopagamento_id' => 894,
			'valor' => 894
		),
		array(
			'id' => 895,
			'faculdade_id' => 895,
			'tipopagamento_id' => 895,
			'valor' => 895
		),
		array(
			'id' => 896,
			'faculdade_id' => 896,
			'tipopagamento_id' => 896,
			'valor' => 896
		),
		array(
			'id' => 897,
			'faculdade_id' => 897,
			'tipopagamento_id' => 897,
			'valor' => 897
		),
		array(
			'id' => 898,
			'faculdade_id' => 898,
			'tipopagamento_id' => 898,
			'valor' => 898
		),
		array(
			'id' => 899,
			'faculdade_id' => 899,
			'tipopagamento_id' => 899,
			'valor' => 899
		),
		array(
			'id' => 900,
			'faculdade_id' => 900,
			'tipopagamento_id' => 900,
			'valor' => 900
		),
		array(
			'id' => 901,
			'faculdade_id' => 901,
			'tipopagamento_id' => 901,
			'valor' => 901
		),
		array(
			'id' => 902,
			'faculdade_id' => 902,
			'tipopagamento_id' => 902,
			'valor' => 902
		),
		array(
			'id' => 903,
			'faculdade_id' => 903,
			'tipopagamento_id' => 903,
			'valor' => 903
		),
		array(
			'id' => 904,
			'faculdade_id' => 904,
			'tipopagamento_id' => 904,
			'valor' => 904
		),
		array(
			'id' => 905,
			'faculdade_id' => 905,
			'tipopagamento_id' => 905,
			'valor' => 905
		),
		array(
			'id' => 906,
			'faculdade_id' => 906,
			'tipopagamento_id' => 906,
			'valor' => 906
		),
		array(
			'id' => 907,
			'faculdade_id' => 907,
			'tipopagamento_id' => 907,
			'valor' => 907
		),
		array(
			'id' => 908,
			'faculdade_id' => 908,
			'tipopagamento_id' => 908,
			'valor' => 908
		),
		array(
			'id' => 909,
			'faculdade_id' => 909,
			'tipopagamento_id' => 909,
			'valor' => 909
		),
		array(
			'id' => 910,
			'faculdade_id' => 910,
			'tipopagamento_id' => 910,
			'valor' => 910
		),
		array(
			'id' => 911,
			'faculdade_id' => 911,
			'tipopagamento_id' => 911,
			'valor' => 911
		),
		array(
			'id' => 912,
			'faculdade_id' => 912,
			'tipopagamento_id' => 912,
			'valor' => 912
		),
		array(
			'id' => 913,
			'faculdade_id' => 913,
			'tipopagamento_id' => 913,
			'valor' => 913
		),
		array(
			'id' => 914,
			'faculdade_id' => 914,
			'tipopagamento_id' => 914,
			'valor' => 914
		),
		array(
			'id' => 915,
			'faculdade_id' => 915,
			'tipopagamento_id' => 915,
			'valor' => 915
		),
		array(
			'id' => 916,
			'faculdade_id' => 916,
			'tipopagamento_id' => 916,
			'valor' => 916
		),
		array(
			'id' => 917,
			'faculdade_id' => 917,
			'tipopagamento_id' => 917,
			'valor' => 917
		),
		array(
			'id' => 918,
			'faculdade_id' => 918,
			'tipopagamento_id' => 918,
			'valor' => 918
		),
		array(
			'id' => 919,
			'faculdade_id' => 919,
			'tipopagamento_id' => 919,
			'valor' => 919
		),
		array(
			'id' => 920,
			'faculdade_id' => 920,
			'tipopagamento_id' => 920,
			'valor' => 920
		),
		array(
			'id' => 921,
			'faculdade_id' => 921,
			'tipopagamento_id' => 921,
			'valor' => 921
		),
		array(
			'id' => 922,
			'faculdade_id' => 922,
			'tipopagamento_id' => 922,
			'valor' => 922
		),
		array(
			'id' => 923,
			'faculdade_id' => 923,
			'tipopagamento_id' => 923,
			'valor' => 923
		),
		array(
			'id' => 924,
			'faculdade_id' => 924,
			'tipopagamento_id' => 924,
			'valor' => 924
		),
		array(
			'id' => 925,
			'faculdade_id' => 925,
			'tipopagamento_id' => 925,
			'valor' => 925
		),
		array(
			'id' => 926,
			'faculdade_id' => 926,
			'tipopagamento_id' => 926,
			'valor' => 926
		),
		array(
			'id' => 927,
			'faculdade_id' => 927,
			'tipopagamento_id' => 927,
			'valor' => 927
		),
		array(
			'id' => 928,
			'faculdade_id' => 928,
			'tipopagamento_id' => 928,
			'valor' => 928
		),
		array(
			'id' => 929,
			'faculdade_id' => 929,
			'tipopagamento_id' => 929,
			'valor' => 929
		),
		array(
			'id' => 930,
			'faculdade_id' => 930,
			'tipopagamento_id' => 930,
			'valor' => 930
		),
		array(
			'id' => 931,
			'faculdade_id' => 931,
			'tipopagamento_id' => 931,
			'valor' => 931
		),
		array(
			'id' => 932,
			'faculdade_id' => 932,
			'tipopagamento_id' => 932,
			'valor' => 932
		),
		array(
			'id' => 933,
			'faculdade_id' => 933,
			'tipopagamento_id' => 933,
			'valor' => 933
		),
		array(
			'id' => 934,
			'faculdade_id' => 934,
			'tipopagamento_id' => 934,
			'valor' => 934
		),
		array(
			'id' => 935,
			'faculdade_id' => 935,
			'tipopagamento_id' => 935,
			'valor' => 935
		),
		array(
			'id' => 936,
			'faculdade_id' => 936,
			'tipopagamento_id' => 936,
			'valor' => 936
		),
		array(
			'id' => 937,
			'faculdade_id' => 937,
			'tipopagamento_id' => 937,
			'valor' => 937
		),
		array(
			'id' => 938,
			'faculdade_id' => 938,
			'tipopagamento_id' => 938,
			'valor' => 938
		),
		array(
			'id' => 939,
			'faculdade_id' => 939,
			'tipopagamento_id' => 939,
			'valor' => 939
		),
		array(
			'id' => 940,
			'faculdade_id' => 940,
			'tipopagamento_id' => 940,
			'valor' => 940
		),
		array(
			'id' => 941,
			'faculdade_id' => 941,
			'tipopagamento_id' => 941,
			'valor' => 941
		),
		array(
			'id' => 942,
			'faculdade_id' => 942,
			'tipopagamento_id' => 942,
			'valor' => 942
		),
		array(
			'id' => 943,
			'faculdade_id' => 943,
			'tipopagamento_id' => 943,
			'valor' => 943
		),
		array(
			'id' => 944,
			'faculdade_id' => 944,
			'tipopagamento_id' => 944,
			'valor' => 944
		),
		array(
			'id' => 945,
			'faculdade_id' => 945,
			'tipopagamento_id' => 945,
			'valor' => 945
		),
		array(
			'id' => 946,
			'faculdade_id' => 946,
			'tipopagamento_id' => 946,
			'valor' => 946
		),
		array(
			'id' => 947,
			'faculdade_id' => 947,
			'tipopagamento_id' => 947,
			'valor' => 947
		),
		array(
			'id' => 948,
			'faculdade_id' => 948,
			'tipopagamento_id' => 948,
			'valor' => 948
		),
		array(
			'id' => 949,
			'faculdade_id' => 949,
			'tipopagamento_id' => 949,
			'valor' => 949
		),
		array(
			'id' => 950,
			'faculdade_id' => 950,
			'tipopagamento_id' => 950,
			'valor' => 950
		),
		array(
			'id' => 951,
			'faculdade_id' => 951,
			'tipopagamento_id' => 951,
			'valor' => 951
		),
		array(
			'id' => 952,
			'faculdade_id' => 952,
			'tipopagamento_id' => 952,
			'valor' => 952
		),
		array(
			'id' => 953,
			'faculdade_id' => 953,
			'tipopagamento_id' => 953,
			'valor' => 953
		),
		array(
			'id' => 954,
			'faculdade_id' => 954,
			'tipopagamento_id' => 954,
			'valor' => 954
		),
		array(
			'id' => 955,
			'faculdade_id' => 955,
			'tipopagamento_id' => 955,
			'valor' => 955
		),
		array(
			'id' => 956,
			'faculdade_id' => 956,
			'tipopagamento_id' => 956,
			'valor' => 956
		),
		array(
			'id' => 957,
			'faculdade_id' => 957,
			'tipopagamento_id' => 957,
			'valor' => 957
		),
		array(
			'id' => 958,
			'faculdade_id' => 958,
			'tipopagamento_id' => 958,
			'valor' => 958
		),
		array(
			'id' => 959,
			'faculdade_id' => 959,
			'tipopagamento_id' => 959,
			'valor' => 959
		),
		array(
			'id' => 960,
			'faculdade_id' => 960,
			'tipopagamento_id' => 960,
			'valor' => 960
		),
		array(
			'id' => 961,
			'faculdade_id' => 961,
			'tipopagamento_id' => 961,
			'valor' => 961
		),
		array(
			'id' => 962,
			'faculdade_id' => 962,
			'tipopagamento_id' => 962,
			'valor' => 962
		),
		array(
			'id' => 963,
			'faculdade_id' => 963,
			'tipopagamento_id' => 963,
			'valor' => 963
		),
		array(
			'id' => 964,
			'faculdade_id' => 964,
			'tipopagamento_id' => 964,
			'valor' => 964
		),
		array(
			'id' => 965,
			'faculdade_id' => 965,
			'tipopagamento_id' => 965,
			'valor' => 965
		),
		array(
			'id' => 966,
			'faculdade_id' => 966,
			'tipopagamento_id' => 966,
			'valor' => 966
		),
		array(
			'id' => 967,
			'faculdade_id' => 967,
			'tipopagamento_id' => 967,
			'valor' => 967
		),
		array(
			'id' => 968,
			'faculdade_id' => 968,
			'tipopagamento_id' => 968,
			'valor' => 968
		),
		array(
			'id' => 969,
			'faculdade_id' => 969,
			'tipopagamento_id' => 969,
			'valor' => 969
		),
		array(
			'id' => 970,
			'faculdade_id' => 970,
			'tipopagamento_id' => 970,
			'valor' => 970
		),
		array(
			'id' => 971,
			'faculdade_id' => 971,
			'tipopagamento_id' => 971,
			'valor' => 971
		),
		array(
			'id' => 972,
			'faculdade_id' => 972,
			'tipopagamento_id' => 972,
			'valor' => 972
		),
		array(
			'id' => 973,
			'faculdade_id' => 973,
			'tipopagamento_id' => 973,
			'valor' => 973
		),
		array(
			'id' => 974,
			'faculdade_id' => 974,
			'tipopagamento_id' => 974,
			'valor' => 974
		),
		array(
			'id' => 975,
			'faculdade_id' => 975,
			'tipopagamento_id' => 975,
			'valor' => 975
		),
		array(
			'id' => 976,
			'faculdade_id' => 976,
			'tipopagamento_id' => 976,
			'valor' => 976
		),
		array(
			'id' => 977,
			'faculdade_id' => 977,
			'tipopagamento_id' => 977,
			'valor' => 977
		),
		array(
			'id' => 978,
			'faculdade_id' => 978,
			'tipopagamento_id' => 978,
			'valor' => 978
		),
		array(
			'id' => 979,
			'faculdade_id' => 979,
			'tipopagamento_id' => 979,
			'valor' => 979
		),
		array(
			'id' => 980,
			'faculdade_id' => 980,
			'tipopagamento_id' => 980,
			'valor' => 980
		),
		array(
			'id' => 981,
			'faculdade_id' => 981,
			'tipopagamento_id' => 981,
			'valor' => 981
		),
		array(
			'id' => 982,
			'faculdade_id' => 982,
			'tipopagamento_id' => 982,
			'valor' => 982
		),
		array(
			'id' => 983,
			'faculdade_id' => 983,
			'tipopagamento_id' => 983,
			'valor' => 983
		),
		array(
			'id' => 984,
			'faculdade_id' => 984,
			'tipopagamento_id' => 984,
			'valor' => 984
		),
		array(
			'id' => 985,
			'faculdade_id' => 985,
			'tipopagamento_id' => 985,
			'valor' => 985
		),
		array(
			'id' => 986,
			'faculdade_id' => 986,
			'tipopagamento_id' => 986,
			'valor' => 986
		),
		array(
			'id' => 987,
			'faculdade_id' => 987,
			'tipopagamento_id' => 987,
			'valor' => 987
		),
		array(
			'id' => 988,
			'faculdade_id' => 988,
			'tipopagamento_id' => 988,
			'valor' => 988
		),
		array(
			'id' => 989,
			'faculdade_id' => 989,
			'tipopagamento_id' => 989,
			'valor' => 989
		),
		array(
			'id' => 990,
			'faculdade_id' => 990,
			'tipopagamento_id' => 990,
			'valor' => 990
		),
		array(
			'id' => 991,
			'faculdade_id' => 991,
			'tipopagamento_id' => 991,
			'valor' => 991
		),
		array(
			'id' => 992,
			'faculdade_id' => 992,
			'tipopagamento_id' => 992,
			'valor' => 992
		),
		array(
			'id' => 993,
			'faculdade_id' => 993,
			'tipopagamento_id' => 993,
			'valor' => 993
		),
		array(
			'id' => 994,
			'faculdade_id' => 994,
			'tipopagamento_id' => 994,
			'valor' => 994
		),
		array(
			'id' => 995,
			'faculdade_id' => 995,
			'tipopagamento_id' => 995,
			'valor' => 995
		),
		array(
			'id' => 996,
			'faculdade_id' => 996,
			'tipopagamento_id' => 996,
			'valor' => 996
		),
		array(
			'id' => 997,
			'faculdade_id' => 997,
			'tipopagamento_id' => 997,
			'valor' => 997
		),
		array(
			'id' => 998,
			'faculdade_id' => 998,
			'tipopagamento_id' => 998,
			'valor' => 998
		),
		array(
			'id' => 999,
			'faculdade_id' => 999,
			'tipopagamento_id' => 999,
			'valor' => 999
		),
		array(
			'id' => 1000,
			'faculdade_id' => 1000,
			'tipopagamento_id' => 1000,
			'valor' => 1000
		),
	);

}
