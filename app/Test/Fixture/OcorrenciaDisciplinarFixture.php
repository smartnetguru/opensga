<?php
/**
 * OcorrenciaDisciplinarFixture
 *
 */
class OcorrenciaDisciplinarFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipo_ocorrencia_disciplinar_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'detalhes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_atribuicao' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 1,
			'tipo_ocorrencia_disciplinar_id' => 1,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 1,
			'modified_by' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 2,
			'tipo_ocorrencia_disciplinar_id' => 2,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 2,
			'modified_by' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 3,
			'tipo_ocorrencia_disciplinar_id' => 3,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 3,
			'modified_by' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 4,
			'tipo_ocorrencia_disciplinar_id' => 4,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 4,
			'modified_by' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 5,
			'tipo_ocorrencia_disciplinar_id' => 5,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 5,
			'modified_by' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 6,
			'tipo_ocorrencia_disciplinar_id' => 6,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 6,
			'modified_by' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 7,
			'tipo_ocorrencia_disciplinar_id' => 7,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 7,
			'modified_by' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 8,
			'tipo_ocorrencia_disciplinar_id' => 8,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 8,
			'modified_by' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 9,
			'tipo_ocorrencia_disciplinar_id' => 9,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 9,
			'modified_by' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'aluno_id' => 10,
			'tipo_ocorrencia_disciplinar_id' => 10,
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_atribuicao' => '2012-09-25',
			'created' => '2012-09-25 16:40:28',
			'modified' => '2012-09-25 16:40:28',
			'created_by' => 10,
			'modified_by' => 10
		),
	);

}
