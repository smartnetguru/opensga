<?php
/**
 * FinanceiroDepositoFixture
 *
 */
class FinanceiroDepositoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'financeiro_conta_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_deposito' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'data_reconciliacao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'financeiro_estado_deposito_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'numero_comprovativo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'financeiro_forma_deposito_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'financeiro_banco_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'financeiro_bancos_fk' => array('column' => 'financeiro_banco_id', 'unique' => 0)
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
			'entidade_id' => 1,
			'financeiro_conta_id' => 1,
			'data_deposito' => '2012-09-04 22:41:39',
			'data_reconciliacao' => '2012-09-04 22:41:39',
			'financeiro_estado_deposito_id' => 1,
			'created' => '2012-09-04 22:41:39',
			'modified' => '2012-09-04 22:41:39',
			'created_by' => 1,
			'modified_by' => 1,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 1,
			'financeiro_banco_id' => 1
		),
	);

}
