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
	);

}
