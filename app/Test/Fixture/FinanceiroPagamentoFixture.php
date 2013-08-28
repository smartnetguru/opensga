<?php
/**
 * FinanceiroPagamentoFixture
 *
 */
class FinanceiroPagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'financeiro_conta_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'data_pagamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'financeiro_tipo_pagamento_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_limite' => array('type' => 'date', 'null' => true, 'default' => null),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'financeiro_estado_pagamento_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_emissao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'financeiro_transacao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'semestrelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'financeiro_estado_pagamentos_fk' => array('column' => 'financeiro_estado_pagamento_id', 'unique' => 0),
			'financeiro_transacaos_pagamentos_fk' => array('column' => 'financeiro_transacao_id', 'unique' => 0),
			'alunos_financeiro_pagamentos_fk' => array('column' => 'aluno_id', 'unique' => 0),
			'financeiro_contas_financeiro_pagamentosfk' => array('column' => 'financeiro_conta_id', 'unique' => 0),
			'financeiro_tipo_pagamentos_pagamentos_fk' => array('column' => 'financeiro_tipo_pagamento_id', 'unique' => 0),
			'ano_lectivos_financeiro_pagamentos_fk' => array('column' => 'anolectivo_id', 'unique' => 0)
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
