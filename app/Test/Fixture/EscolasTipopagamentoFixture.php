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
			'data_limite' => '2012-09-25',
			'mes_limite' => 1,
			'dia_limite' => 1
		),
		array(
			'id' => 2,
			'escola_id' => 2,
			'tipopagamento_id' => 2,
			'valor' => 2,
			'month_id' => 2,
			'data_limite' => '2012-09-25',
			'mes_limite' => 2,
			'dia_limite' => 2
		),
		array(
			'id' => 3,
			'escola_id' => 3,
			'tipopagamento_id' => 3,
			'valor' => 3,
			'month_id' => 3,
			'data_limite' => '2012-09-25',
			'mes_limite' => 3,
			'dia_limite' => 3
		),
		array(
			'id' => 4,
			'escola_id' => 4,
			'tipopagamento_id' => 4,
			'valor' => 4,
			'month_id' => 4,
			'data_limite' => '2012-09-25',
			'mes_limite' => 4,
			'dia_limite' => 4
		),
		array(
			'id' => 5,
			'escola_id' => 5,
			'tipopagamento_id' => 5,
			'valor' => 5,
			'month_id' => 5,
			'data_limite' => '2012-09-25',
			'mes_limite' => 5,
			'dia_limite' => 5
		),
		array(
			'id' => 6,
			'escola_id' => 6,
			'tipopagamento_id' => 6,
			'valor' => 6,
			'month_id' => 6,
			'data_limite' => '2012-09-25',
			'mes_limite' => 6,
			'dia_limite' => 6
		),
		array(
			'id' => 7,
			'escola_id' => 7,
			'tipopagamento_id' => 7,
			'valor' => 7,
			'month_id' => 7,
			'data_limite' => '2012-09-25',
			'mes_limite' => 7,
			'dia_limite' => 7
		),
		array(
			'id' => 8,
			'escola_id' => 8,
			'tipopagamento_id' => 8,
			'valor' => 8,
			'month_id' => 8,
			'data_limite' => '2012-09-25',
			'mes_limite' => 8,
			'dia_limite' => 8
		),
		array(
			'id' => 9,
			'escola_id' => 9,
			'tipopagamento_id' => 9,
			'valor' => 9,
			'month_id' => 9,
			'data_limite' => '2012-09-25',
			'mes_limite' => 9,
			'dia_limite' => 9
		),
		array(
			'id' => 10,
			'escola_id' => 10,
			'tipopagamento_id' => 10,
			'valor' => 10,
			'month_id' => 10,
			'data_limite' => '2012-09-25',
			'mes_limite' => 10,
			'dia_limite' => 10
		),
	);

}
