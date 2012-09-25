<?php
/**
 * FinanceiroContaFixture
 *
 */
class FinanceiroContaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'saldo_actual' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'entidades_fk' => array('column' => 'entidade_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'entidade_id' => 1,
			'saldo_actual' => 1
		),
		array(
			'id' => 2,
			'entidade_id' => 2,
			'saldo_actual' => 2
		),
		array(
			'id' => 3,
			'entidade_id' => 3,
			'saldo_actual' => 3
		),
		array(
			'id' => 4,
			'entidade_id' => 4,
			'saldo_actual' => 4
		),
		array(
			'id' => 5,
			'entidade_id' => 5,
			'saldo_actual' => 5
		),
		array(
			'id' => 6,
			'entidade_id' => 6,
			'saldo_actual' => 6
		),
		array(
			'id' => 7,
			'entidade_id' => 7,
			'saldo_actual' => 7
		),
		array(
			'id' => 8,
			'entidade_id' => 8,
			'saldo_actual' => 8
		),
		array(
			'id' => 9,
			'entidade_id' => 9,
			'saldo_actual' => 9
		),
		array(
			'id' => 10,
			'entidade_id' => 10,
			'saldo_actual' => 10
		),
	);

}
