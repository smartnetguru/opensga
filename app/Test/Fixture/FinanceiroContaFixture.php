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
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => '1',
			'entidade_id' => '2',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '2',
			'entidade_id' => '3',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '3',
			'entidade_id' => '4',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '4',
			'entidade_id' => '5',
			'saldo_actual' => '99929.00',
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '5',
			'entidade_id' => '6',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '6',
			'entidade_id' => '7',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '7',
			'entidade_id' => '8',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '8',
			'entidade_id' => '9',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '9',
			'entidade_id' => '10',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '10',
			'entidade_id' => '11',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '11',
			'entidade_id' => '12',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '12',
			'entidade_id' => '13',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '13',
			'entidade_id' => '14',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '14',
			'entidade_id' => '15',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '15',
			'entidade_id' => '16',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '16',
			'entidade_id' => '17',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '17',
			'entidade_id' => '18',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '18',
			'entidade_id' => '19',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '19',
			'entidade_id' => '20',
			'saldo_actual' => null,
			'unidade_organica_id' => '29'
		),
		array(
			'id' => '20',
			'entidade_id' => '21',
			'saldo_actual' => '-597.00',
			'unidade_organica_id' => '29'
		),
	);

}
