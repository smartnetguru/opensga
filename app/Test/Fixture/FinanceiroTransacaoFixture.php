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
			'id' => 1,
			'financeiro_tipo_transacao_id' => 1,
			'valor' => 1,
			'entidade_id' => 1,
			'financeiro_conta_id' => 1,
			'created_by' => 1,
			'modified_by' => 1,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 1
		),
		array(
			'id' => 2,
			'financeiro_tipo_transacao_id' => 2,
			'valor' => 2,
			'entidade_id' => 2,
			'financeiro_conta_id' => 2,
			'created_by' => 2,
			'modified_by' => 2,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 2
		),
		array(
			'id' => 3,
			'financeiro_tipo_transacao_id' => 3,
			'valor' => 3,
			'entidade_id' => 3,
			'financeiro_conta_id' => 3,
			'created_by' => 3,
			'modified_by' => 3,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 3
		),
		array(
			'id' => 4,
			'financeiro_tipo_transacao_id' => 4,
			'valor' => 4,
			'entidade_id' => 4,
			'financeiro_conta_id' => 4,
			'created_by' => 4,
			'modified_by' => 4,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 4
		),
		array(
			'id' => 5,
			'financeiro_tipo_transacao_id' => 5,
			'valor' => 5,
			'entidade_id' => 5,
			'financeiro_conta_id' => 5,
			'created_by' => 5,
			'modified_by' => 5,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 5
		),
		array(
			'id' => 6,
			'financeiro_tipo_transacao_id' => 6,
			'valor' => 6,
			'entidade_id' => 6,
			'financeiro_conta_id' => 6,
			'created_by' => 6,
			'modified_by' => 6,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 6
		),
		array(
			'id' => 7,
			'financeiro_tipo_transacao_id' => 7,
			'valor' => 7,
			'entidade_id' => 7,
			'financeiro_conta_id' => 7,
			'created_by' => 7,
			'modified_by' => 7,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 7
		),
		array(
			'id' => 8,
			'financeiro_tipo_transacao_id' => 8,
			'valor' => 8,
			'entidade_id' => 8,
			'financeiro_conta_id' => 8,
			'created_by' => 8,
			'modified_by' => 8,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 8
		),
		array(
			'id' => 9,
			'financeiro_tipo_transacao_id' => 9,
			'valor' => 9,
			'entidade_id' => 9,
			'financeiro_conta_id' => 9,
			'created_by' => 9,
			'modified_by' => 9,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 9
		),
		array(
			'id' => 10,
			'financeiro_tipo_transacao_id' => 10,
			'valor' => 10,
			'entidade_id' => 10,
			'financeiro_conta_id' => 10,
			'created_by' => 10,
			'modified_by' => 10,
			'created' => '2012-09-25 16:37:49',
			'modified' => '2012-09-25 16:37:49',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'financeiro_estado_transacao_id' => 10
		),
	);

}
