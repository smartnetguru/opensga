<?php
/**
 * FinanceiroTransacaoFixture
 *
 */
class FinanceiroTransacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'financeiro_tipo_transacao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'financeiro_conta_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'detalhes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'financeiro_estado_transacao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'financeiro_transacaos_financeiro_tipos' => array('column' => 'financeiro_tipo_transacao_id', 'unique' => 0),
			'financeiro_transacaos_financeiro_estados' => array('column' => 'financeiro_estado_transacao_id', 'unique' => 0),
			'financeiro_transacaos_financeiro_contas' => array('column' => 'financeiro_conta_id', 'unique' => 0),
			'financeiro_transacaos_entidades' => array('column' => 'entidade_id', 'unique' => 0)
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
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '2',
			'financeiro_conta_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '2',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '3',
			'financeiro_conta_id' => '2',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '3',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '160.00',
			'entidade_id' => '4',
			'financeiro_conta_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '4',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '5',
			'financeiro_conta_id' => '4',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '5',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '6',
			'financeiro_conta_id' => '5',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '6',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '7',
			'financeiro_conta_id' => '6',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '7',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '8',
			'financeiro_conta_id' => '7',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '8',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '9',
			'financeiro_conta_id' => '8',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:40',
			'modified' => '2013-10-08 09:07:40',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '9',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '160.00',
			'entidade_id' => '10',
			'financeiro_conta_id' => '9',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '10',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '11',
			'financeiro_conta_id' => '10',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '11',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '160.00',
			'entidade_id' => '12',
			'financeiro_conta_id' => '11',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '12',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '160.00',
			'entidade_id' => '13',
			'financeiro_conta_id' => '12',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '13',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '14',
			'financeiro_conta_id' => '13',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '14',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '15',
			'financeiro_conta_id' => '14',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '15',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '160.00',
			'entidade_id' => '16',
			'financeiro_conta_id' => '15',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '16',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '160.00',
			'entidade_id' => '17',
			'financeiro_conta_id' => '16',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '17',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '160.00',
			'entidade_id' => '18',
			'financeiro_conta_id' => '17',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '18',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '19',
			'financeiro_conta_id' => '18',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '19',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '20',
			'financeiro_conta_id' => '19',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
		array(
			'id' => '20',
			'financeiro_tipo_transacao_id' => '2',
			'valor' => '80.00',
			'entidade_id' => '21',
			'financeiro_conta_id' => '20',
			'created_by' => null,
			'modified_by' => null,
			'created' => '2013-10-08 09:07:41',
			'modified' => '2013-10-08 09:07:41',
			'detalhes' => null,
			'financeiro_estado_transacao_id' => '1'
		),
	);

}
