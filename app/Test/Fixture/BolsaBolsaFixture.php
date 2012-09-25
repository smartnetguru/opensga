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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'bolsa_candidatura_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'bolsa_resultado_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ano_lectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'banco_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nib' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'conta_bancaria' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bolsa_fonte_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'processo_bolsa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_atribuicao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'bolsa_candidatura_id' => 1,
			'bolsa_resultado_id' => 1,
			'ano_lectivo_id' => 1,
			'banco_id' => 1,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 1,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 2,
			'aluno_id' => 2,
			'bolsa_candidatura_id' => 2,
			'bolsa_resultado_id' => 2,
			'ano_lectivo_id' => 2,
			'banco_id' => 2,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 2,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 3,
			'aluno_id' => 3,
			'bolsa_candidatura_id' => 3,
			'bolsa_resultado_id' => 3,
			'ano_lectivo_id' => 3,
			'banco_id' => 3,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 3,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 4,
			'aluno_id' => 4,
			'bolsa_candidatura_id' => 4,
			'bolsa_resultado_id' => 4,
			'ano_lectivo_id' => 4,
			'banco_id' => 4,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 4,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 5,
			'aluno_id' => 5,
			'bolsa_candidatura_id' => 5,
			'bolsa_resultado_id' => 5,
			'ano_lectivo_id' => 5,
			'banco_id' => 5,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 5,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 6,
			'aluno_id' => 6,
			'bolsa_candidatura_id' => 6,
			'bolsa_resultado_id' => 6,
			'ano_lectivo_id' => 6,
			'banco_id' => 6,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 6,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 7,
			'aluno_id' => 7,
			'bolsa_candidatura_id' => 7,
			'bolsa_resultado_id' => 7,
			'ano_lectivo_id' => 7,
			'banco_id' => 7,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 7,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 8,
			'aluno_id' => 8,
			'bolsa_candidatura_id' => 8,
			'bolsa_resultado_id' => 8,
			'ano_lectivo_id' => 8,
			'banco_id' => 8,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 8,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 9,
			'aluno_id' => 9,
			'bolsa_candidatura_id' => 9,
			'bolsa_resultado_id' => 9,
			'ano_lectivo_id' => 9,
			'banco_id' => 9,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 9,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
		array(
			'id' => 10,
			'aluno_id' => 10,
			'bolsa_candidatura_id' => 10,
			'bolsa_resultado_id' => 10,
			'ano_lectivo_id' => 10,
			'banco_id' => 10,
			'nib' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bolsa_fonte_bolsa_id' => 10,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-25 16:31:52',
			'modified' => '2012-09-25 16:31:52'
		),
	);

}
