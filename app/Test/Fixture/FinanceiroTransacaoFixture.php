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
		'financeiro_tipo_transacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'financeiro_conta_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'valor_relatorio' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'financeiro_tipo_transacao_id' => 1,
			'valor' => 1,
			'entidade_id' => 1,
			'financeiro_conta_id' => 1,
			'created_by' => 1,
			'modified_by' => 1,
			'created' => '2012-09-06 22:48:48',
			'modified' => '2012-09-06 22:48:48',
			'valor_relatorio' => 1
		),
	);

}
