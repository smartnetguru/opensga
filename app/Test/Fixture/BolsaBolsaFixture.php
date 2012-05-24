<?php
/**
 * BolsaBolsaFixture
 *
 */
class BolsaBolsaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bolsa_candidatura_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bolsa_resultado_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'ano_lectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'banco_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'nib' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'conta_bancaria' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bolsa_fonte_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'processo_bolsa' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_atribuicao' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
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
			'bolsa_candidatura_id' => 1,
			'bolsa_resultado_id' => 1,
			'ano_lectivo_id' => 1,
			'banco_id' => 1,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 1,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-05-23 05:07:05',
			'modified' => '2012-05-23 05:07:05'
		),
	);
}
