<?php
/**
 * FinanceiroTipoPagamentoFixture
 *
 */
class FinanceiroTipoPagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 1,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 1,
			'data_limite' => '2012-09-25',
			'mes_limite' => 1,
			'dia_limite' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 2,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 2,
			'data_limite' => '2012-09-25',
			'mes_limite' => 2,
			'dia_limite' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 3,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 3,
			'data_limite' => '2012-09-25',
			'mes_limite' => 3,
			'dia_limite' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 4,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 4,
			'data_limite' => '2012-09-25',
			'mes_limite' => 4,
			'dia_limite' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 5,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 5,
			'data_limite' => '2012-09-25',
			'mes_limite' => 5,
			'dia_limite' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 6,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 6,
			'data_limite' => '2012-09-25',
			'mes_limite' => 6,
			'dia_limite' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 7,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 7,
			'data_limite' => '2012-09-25',
			'mes_limite' => 7,
			'dia_limite' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 8,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 8,
			'data_limite' => '2012-09-25',
			'mes_limite' => 8,
			'dia_limite' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 9,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 9,
			'data_limite' => '2012-09-25',
			'mes_limite' => 9,
			'dia_limite' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'valor' => 10,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'month_id' => 10,
			'data_limite' => '2012-09-25',
			'mes_limite' => 10,
			'dia_limite' => 10
		),
	);

}
