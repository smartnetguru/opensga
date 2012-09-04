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
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_emissao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'alunos_fk' => array('column' => 'aluno_id', 'unique' => 0),
			'financeiro_contas_fk' => array('column' => 'financeiro_conta_id', 'unique' => 0),
			'financeiro_tipo_pagamentos_fk' => array('column' => 'financeiro_tipo_pagamento_id', 'unique' => 0),
			'financeiro_estado_pagamentos_fk' => array('column' => 'financeiro_estado_pagamento_id', 'unique' => 0),
			'ano_lectivos_fk' => array('column' => 'anolectivo_id', 'unique' => 0)
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
			'aluno_id' => 1,
			'financeiro_conta_id' => 1,
			'valor' => 1,
			'data_pagamento' => '2012-09-04',
			'created' => '2012-09-04 22:48:07',
			'modified' => '2012-09-04 22:48:07',
			'financeiro_tipo_pagamento_id' => 1,
			'data_limite' => '2012-09-04',
			'anolectivo_id' => 1,
			'financeiro_estado_pagamento_id' => 1,
			'codigo' => 'Lorem ipsu',
			'created_by' => 1,
			'modified_by' => 1,
			'data_emissao' => '2012-09-04 22:48:07'
		),
	);

}
