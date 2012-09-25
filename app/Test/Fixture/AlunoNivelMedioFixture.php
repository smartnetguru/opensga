<?php
/**
 * AlunoNivelMedioFixture
 *
 */
class AlunoNivelMedioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'escola_nivel_medio_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ano_conclusao' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipo_nivel_medio_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'escola_nivel_medio_id' => 1,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 1,
			'tipo_nivel_medio_id' => 1
		),
		array(
			'id' => 2,
			'aluno_id' => 2,
			'escola_nivel_medio_id' => 2,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 2,
			'tipo_nivel_medio_id' => 2
		),
		array(
			'id' => 3,
			'aluno_id' => 3,
			'escola_nivel_medio_id' => 3,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 3,
			'tipo_nivel_medio_id' => 3
		),
		array(
			'id' => 4,
			'aluno_id' => 4,
			'escola_nivel_medio_id' => 4,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 4,
			'tipo_nivel_medio_id' => 4
		),
		array(
			'id' => 5,
			'aluno_id' => 5,
			'escola_nivel_medio_id' => 5,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 5,
			'tipo_nivel_medio_id' => 5
		),
		array(
			'id' => 6,
			'aluno_id' => 6,
			'escola_nivel_medio_id' => 6,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 6,
			'tipo_nivel_medio_id' => 6
		),
		array(
			'id' => 7,
			'aluno_id' => 7,
			'escola_nivel_medio_id' => 7,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 7,
			'tipo_nivel_medio_id' => 7
		),
		array(
			'id' => 8,
			'aluno_id' => 8,
			'escola_nivel_medio_id' => 8,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 8,
			'tipo_nivel_medio_id' => 8
		),
		array(
			'id' => 9,
			'aluno_id' => 9,
			'escola_nivel_medio_id' => 9,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 9,
			'tipo_nivel_medio_id' => 9
		),
		array(
			'id' => 10,
			'aluno_id' => 10,
			'escola_nivel_medio_id' => 10,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-25 16:30:22',
			'modified' => '2012-09-25 16:30:22',
			'provincia_id' => 10,
			'tipo_nivel_medio_id' => 10
		),
	);

}
