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
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'financeiro_conta_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_deposito' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'data_reconciliacao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'financeiro_estado_deposito_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'numero_comprovativo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'financeiro_forma_deposito_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'financeiro_banco_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'financeiro_transacao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'semestrelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'financeiro_bancos_fk' => array('column' => 'financeiro_banco_id', 'unique' => 0),
			'financeiro_transacaos_fk' => array('column' => 'financeiro_transacao_id', 'unique' => 0),
			'financeiro_depositos_entidades_fk' => array('column' => 'entidade_id', 'unique' => 0),
			'financeiro_depositos_contas_fk' => array('column' => 'financeiro_conta_id', 'unique' => 0),
			'financeiro_depositos_estado_depositos_fk' => array('column' => 'financeiro_estado_deposito_id', 'unique' => 0),
			'financeiro_depositos_forma_depositos' => array('column' => 'financeiro_forma_deposito_id', 'unique' => 0),
			'financeiro_depositos_semestrelectivos_fk' => array('column' => 'semestrelectivo_id', 'unique' => 0)
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
			'financeiro_conta_id' => 1,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 1,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 1,
			'modified_by' => 1,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 1,
			'financeiro_banco_id' => 1,
			'financeiro_transacao_id' => 1,
			'valor' => 1,
			'semestrelectivo_id' => 1
		),
		array(
			'id' => 2,
			'entidade_id' => 2,
			'financeiro_conta_id' => 2,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 2,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 2,
			'modified_by' => 2,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 2,
			'financeiro_banco_id' => 2,
			'financeiro_transacao_id' => 2,
			'valor' => 2,
			'semestrelectivo_id' => 2
		),
		array(
			'id' => 3,
			'entidade_id' => 3,
			'financeiro_conta_id' => 3,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 3,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 3,
			'modified_by' => 3,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 3,
			'financeiro_banco_id' => 3,
			'financeiro_transacao_id' => 3,
			'valor' => 3,
			'semestrelectivo_id' => 3
		),
		array(
			'id' => 4,
			'entidade_id' => 4,
			'financeiro_conta_id' => 4,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 4,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 4,
			'modified_by' => 4,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 4,
			'financeiro_banco_id' => 4,
			'financeiro_transacao_id' => 4,
			'valor' => 4,
			'semestrelectivo_id' => 4
		),
		array(
			'id' => 5,
			'entidade_id' => 5,
			'financeiro_conta_id' => 5,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 5,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 5,
			'modified_by' => 5,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 5,
			'financeiro_banco_id' => 5,
			'financeiro_transacao_id' => 5,
			'valor' => 5,
			'semestrelectivo_id' => 5
		),
		array(
			'id' => 6,
			'entidade_id' => 6,
			'financeiro_conta_id' => 6,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 6,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 6,
			'modified_by' => 6,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 6,
			'financeiro_banco_id' => 6,
			'financeiro_transacao_id' => 6,
			'valor' => 6,
			'semestrelectivo_id' => 6
		),
		array(
			'id' => 7,
			'entidade_id' => 7,
			'financeiro_conta_id' => 7,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 7,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 7,
			'modified_by' => 7,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 7,
			'financeiro_banco_id' => 7,
			'financeiro_transacao_id' => 7,
			'valor' => 7,
			'semestrelectivo_id' => 7
		),
		array(
			'id' => 8,
			'entidade_id' => 8,
			'financeiro_conta_id' => 8,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 8,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 8,
			'modified_by' => 8,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 8,
			'financeiro_banco_id' => 8,
			'financeiro_transacao_id' => 8,
			'valor' => 8,
			'semestrelectivo_id' => 8
		),
		array(
			'id' => 9,
			'entidade_id' => 9,
			'financeiro_conta_id' => 9,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 9,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 9,
			'modified_by' => 9,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 9,
			'financeiro_banco_id' => 9,
			'financeiro_transacao_id' => 9,
			'valor' => 9,
			'semestrelectivo_id' => 9
		),
		array(
			'id' => 10,
			'entidade_id' => 10,
			'financeiro_conta_id' => 10,
			'data_deposito' => '2012-09-25 16:36:44',
			'data_reconciliacao' => '2012-09-25 16:36:44',
			'financeiro_estado_deposito_id' => 10,
			'created' => '2012-09-25 16:36:44',
			'modified' => '2012-09-25 16:36:44',
			'created_by' => 10,
			'modified_by' => 10,
			'numero_comprovativo' => 'Lorem ipsum dolor sit amet',
			'financeiro_forma_deposito_id' => 10,
			'financeiro_banco_id' => 10,
			'financeiro_transacao_id' => 10,
			'valor' => 10,
			'semestrelectivo_id' => 10
		),
	);

}
