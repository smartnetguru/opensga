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
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 1,
			'tipo_nivel_medio_id' => 1
		),
		array(
			'id' => 2,
			'aluno_id' => 2,
			'escola_nivel_medio_id' => 2,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 2,
			'tipo_nivel_medio_id' => 2
		),
		array(
			'id' => 3,
			'aluno_id' => 3,
			'escola_nivel_medio_id' => 3,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 3,
			'tipo_nivel_medio_id' => 3
		),
		array(
			'id' => 4,
			'aluno_id' => 4,
			'escola_nivel_medio_id' => 4,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 4,
			'tipo_nivel_medio_id' => 4
		),
		array(
			'id' => 5,
			'aluno_id' => 5,
			'escola_nivel_medio_id' => 5,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 5,
			'tipo_nivel_medio_id' => 5
		),
		array(
			'id' => 6,
			'aluno_id' => 6,
			'escola_nivel_medio_id' => 6,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 6,
			'tipo_nivel_medio_id' => 6
		),
		array(
			'id' => 7,
			'aluno_id' => 7,
			'escola_nivel_medio_id' => 7,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 7,
			'tipo_nivel_medio_id' => 7
		),
		array(
			'id' => 8,
			'aluno_id' => 8,
			'escola_nivel_medio_id' => 8,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 8,
			'tipo_nivel_medio_id' => 8
		),
		array(
			'id' => 9,
			'aluno_id' => 9,
			'escola_nivel_medio_id' => 9,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 9,
			'tipo_nivel_medio_id' => 9
		),
		array(
			'id' => 10,
			'aluno_id' => 10,
			'escola_nivel_medio_id' => 10,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 10,
			'tipo_nivel_medio_id' => 10
		),
		array(
			'id' => 11,
			'aluno_id' => 11,
			'escola_nivel_medio_id' => 11,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 11,
			'tipo_nivel_medio_id' => 11
		),
		array(
			'id' => 12,
			'aluno_id' => 12,
			'escola_nivel_medio_id' => 12,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 12,
			'tipo_nivel_medio_id' => 12
		),
		array(
			'id' => 13,
			'aluno_id' => 13,
			'escola_nivel_medio_id' => 13,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 13,
			'tipo_nivel_medio_id' => 13
		),
		array(
			'id' => 14,
			'aluno_id' => 14,
			'escola_nivel_medio_id' => 14,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 14,
			'tipo_nivel_medio_id' => 14
		),
		array(
			'id' => 15,
			'aluno_id' => 15,
			'escola_nivel_medio_id' => 15,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 15,
			'tipo_nivel_medio_id' => 15
		),
		array(
			'id' => 16,
			'aluno_id' => 16,
			'escola_nivel_medio_id' => 16,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 16,
			'tipo_nivel_medio_id' => 16
		),
		array(
			'id' => 17,
			'aluno_id' => 17,
			'escola_nivel_medio_id' => 17,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 17,
			'tipo_nivel_medio_id' => 17
		),
		array(
			'id' => 18,
			'aluno_id' => 18,
			'escola_nivel_medio_id' => 18,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 18,
			'tipo_nivel_medio_id' => 18
		),
		array(
			'id' => 19,
			'aluno_id' => 19,
			'escola_nivel_medio_id' => 19,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 19,
			'tipo_nivel_medio_id' => 19
		),
		array(
			'id' => 20,
			'aluno_id' => 20,
			'escola_nivel_medio_id' => 20,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 20,
			'tipo_nivel_medio_id' => 20
		),
		array(
			'id' => 21,
			'aluno_id' => 21,
			'escola_nivel_medio_id' => 21,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 21,
			'tipo_nivel_medio_id' => 21
		),
		array(
			'id' => 22,
			'aluno_id' => 22,
			'escola_nivel_medio_id' => 22,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 22,
			'tipo_nivel_medio_id' => 22
		),
		array(
			'id' => 23,
			'aluno_id' => 23,
			'escola_nivel_medio_id' => 23,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 23,
			'tipo_nivel_medio_id' => 23
		),
		array(
			'id' => 24,
			'aluno_id' => 24,
			'escola_nivel_medio_id' => 24,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 24,
			'tipo_nivel_medio_id' => 24
		),
		array(
			'id' => 25,
			'aluno_id' => 25,
			'escola_nivel_medio_id' => 25,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 25,
			'tipo_nivel_medio_id' => 25
		),
		array(
			'id' => 26,
			'aluno_id' => 26,
			'escola_nivel_medio_id' => 26,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 26,
			'tipo_nivel_medio_id' => 26
		),
		array(
			'id' => 27,
			'aluno_id' => 27,
			'escola_nivel_medio_id' => 27,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 27,
			'tipo_nivel_medio_id' => 27
		),
		array(
			'id' => 28,
			'aluno_id' => 28,
			'escola_nivel_medio_id' => 28,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 28,
			'tipo_nivel_medio_id' => 28
		),
		array(
			'id' => 29,
			'aluno_id' => 29,
			'escola_nivel_medio_id' => 29,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 29,
			'tipo_nivel_medio_id' => 29
		),
		array(
			'id' => 30,
			'aluno_id' => 30,
			'escola_nivel_medio_id' => 30,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 30,
			'tipo_nivel_medio_id' => 30
		),
		array(
			'id' => 31,
			'aluno_id' => 31,
			'escola_nivel_medio_id' => 31,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 31,
			'tipo_nivel_medio_id' => 31
		),
		array(
			'id' => 32,
			'aluno_id' => 32,
			'escola_nivel_medio_id' => 32,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 32,
			'tipo_nivel_medio_id' => 32
		),
		array(
			'id' => 33,
			'aluno_id' => 33,
			'escola_nivel_medio_id' => 33,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 33,
			'tipo_nivel_medio_id' => 33
		),
		array(
			'id' => 34,
			'aluno_id' => 34,
			'escola_nivel_medio_id' => 34,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 34,
			'tipo_nivel_medio_id' => 34
		),
		array(
			'id' => 35,
			'aluno_id' => 35,
			'escola_nivel_medio_id' => 35,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 35,
			'tipo_nivel_medio_id' => 35
		),
		array(
			'id' => 36,
			'aluno_id' => 36,
			'escola_nivel_medio_id' => 36,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 36,
			'tipo_nivel_medio_id' => 36
		),
		array(
			'id' => 37,
			'aluno_id' => 37,
			'escola_nivel_medio_id' => 37,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 37,
			'tipo_nivel_medio_id' => 37
		),
		array(
			'id' => 38,
			'aluno_id' => 38,
			'escola_nivel_medio_id' => 38,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 38,
			'tipo_nivel_medio_id' => 38
		),
		array(
			'id' => 39,
			'aluno_id' => 39,
			'escola_nivel_medio_id' => 39,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 39,
			'tipo_nivel_medio_id' => 39
		),
		array(
			'id' => 40,
			'aluno_id' => 40,
			'escola_nivel_medio_id' => 40,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 40,
			'tipo_nivel_medio_id' => 40
		),
		array(
			'id' => 41,
			'aluno_id' => 41,
			'escola_nivel_medio_id' => 41,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 41,
			'tipo_nivel_medio_id' => 41
		),
		array(
			'id' => 42,
			'aluno_id' => 42,
			'escola_nivel_medio_id' => 42,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 42,
			'tipo_nivel_medio_id' => 42
		),
		array(
			'id' => 43,
			'aluno_id' => 43,
			'escola_nivel_medio_id' => 43,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 43,
			'tipo_nivel_medio_id' => 43
		),
		array(
			'id' => 44,
			'aluno_id' => 44,
			'escola_nivel_medio_id' => 44,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 44,
			'tipo_nivel_medio_id' => 44
		),
		array(
			'id' => 45,
			'aluno_id' => 45,
			'escola_nivel_medio_id' => 45,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 45,
			'tipo_nivel_medio_id' => 45
		),
		array(
			'id' => 46,
			'aluno_id' => 46,
			'escola_nivel_medio_id' => 46,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 46,
			'tipo_nivel_medio_id' => 46
		),
		array(
			'id' => 47,
			'aluno_id' => 47,
			'escola_nivel_medio_id' => 47,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 47,
			'tipo_nivel_medio_id' => 47
		),
		array(
			'id' => 48,
			'aluno_id' => 48,
			'escola_nivel_medio_id' => 48,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 48,
			'tipo_nivel_medio_id' => 48
		),
		array(
			'id' => 49,
			'aluno_id' => 49,
			'escola_nivel_medio_id' => 49,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 49,
			'tipo_nivel_medio_id' => 49
		),
		array(
			'id' => 50,
			'aluno_id' => 50,
			'escola_nivel_medio_id' => 50,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 50,
			'tipo_nivel_medio_id' => 50
		),
		array(
			'id' => 51,
			'aluno_id' => 51,
			'escola_nivel_medio_id' => 51,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 51,
			'tipo_nivel_medio_id' => 51
		),
		array(
			'id' => 52,
			'aluno_id' => 52,
			'escola_nivel_medio_id' => 52,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 52,
			'tipo_nivel_medio_id' => 52
		),
		array(
			'id' => 53,
			'aluno_id' => 53,
			'escola_nivel_medio_id' => 53,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 53,
			'tipo_nivel_medio_id' => 53
		),
		array(
			'id' => 54,
			'aluno_id' => 54,
			'escola_nivel_medio_id' => 54,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 54,
			'tipo_nivel_medio_id' => 54
		),
		array(
			'id' => 55,
			'aluno_id' => 55,
			'escola_nivel_medio_id' => 55,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 55,
			'tipo_nivel_medio_id' => 55
		),
		array(
			'id' => 56,
			'aluno_id' => 56,
			'escola_nivel_medio_id' => 56,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 56,
			'tipo_nivel_medio_id' => 56
		),
		array(
			'id' => 57,
			'aluno_id' => 57,
			'escola_nivel_medio_id' => 57,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 57,
			'tipo_nivel_medio_id' => 57
		),
		array(
			'id' => 58,
			'aluno_id' => 58,
			'escola_nivel_medio_id' => 58,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 58,
			'tipo_nivel_medio_id' => 58
		),
		array(
			'id' => 59,
			'aluno_id' => 59,
			'escola_nivel_medio_id' => 59,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 59,
			'tipo_nivel_medio_id' => 59
		),
		array(
			'id' => 60,
			'aluno_id' => 60,
			'escola_nivel_medio_id' => 60,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 60,
			'tipo_nivel_medio_id' => 60
		),
		array(
			'id' => 61,
			'aluno_id' => 61,
			'escola_nivel_medio_id' => 61,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 61,
			'tipo_nivel_medio_id' => 61
		),
		array(
			'id' => 62,
			'aluno_id' => 62,
			'escola_nivel_medio_id' => 62,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 62,
			'tipo_nivel_medio_id' => 62
		),
		array(
			'id' => 63,
			'aluno_id' => 63,
			'escola_nivel_medio_id' => 63,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 63,
			'tipo_nivel_medio_id' => 63
		),
		array(
			'id' => 64,
			'aluno_id' => 64,
			'escola_nivel_medio_id' => 64,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 64,
			'tipo_nivel_medio_id' => 64
		),
		array(
			'id' => 65,
			'aluno_id' => 65,
			'escola_nivel_medio_id' => 65,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 65,
			'tipo_nivel_medio_id' => 65
		),
		array(
			'id' => 66,
			'aluno_id' => 66,
			'escola_nivel_medio_id' => 66,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 66,
			'tipo_nivel_medio_id' => 66
		),
		array(
			'id' => 67,
			'aluno_id' => 67,
			'escola_nivel_medio_id' => 67,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 67,
			'tipo_nivel_medio_id' => 67
		),
		array(
			'id' => 68,
			'aluno_id' => 68,
			'escola_nivel_medio_id' => 68,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 68,
			'tipo_nivel_medio_id' => 68
		),
		array(
			'id' => 69,
			'aluno_id' => 69,
			'escola_nivel_medio_id' => 69,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 69,
			'tipo_nivel_medio_id' => 69
		),
		array(
			'id' => 70,
			'aluno_id' => 70,
			'escola_nivel_medio_id' => 70,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 70,
			'tipo_nivel_medio_id' => 70
		),
		array(
			'id' => 71,
			'aluno_id' => 71,
			'escola_nivel_medio_id' => 71,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 71,
			'tipo_nivel_medio_id' => 71
		),
		array(
			'id' => 72,
			'aluno_id' => 72,
			'escola_nivel_medio_id' => 72,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 72,
			'tipo_nivel_medio_id' => 72
		),
		array(
			'id' => 73,
			'aluno_id' => 73,
			'escola_nivel_medio_id' => 73,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 73,
			'tipo_nivel_medio_id' => 73
		),
		array(
			'id' => 74,
			'aluno_id' => 74,
			'escola_nivel_medio_id' => 74,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 74,
			'tipo_nivel_medio_id' => 74
		),
		array(
			'id' => 75,
			'aluno_id' => 75,
			'escola_nivel_medio_id' => 75,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 75,
			'tipo_nivel_medio_id' => 75
		),
		array(
			'id' => 76,
			'aluno_id' => 76,
			'escola_nivel_medio_id' => 76,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 76,
			'tipo_nivel_medio_id' => 76
		),
		array(
			'id' => 77,
			'aluno_id' => 77,
			'escola_nivel_medio_id' => 77,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 77,
			'tipo_nivel_medio_id' => 77
		),
		array(
			'id' => 78,
			'aluno_id' => 78,
			'escola_nivel_medio_id' => 78,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 78,
			'tipo_nivel_medio_id' => 78
		),
		array(
			'id' => 79,
			'aluno_id' => 79,
			'escola_nivel_medio_id' => 79,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 79,
			'tipo_nivel_medio_id' => 79
		),
		array(
			'id' => 80,
			'aluno_id' => 80,
			'escola_nivel_medio_id' => 80,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 80,
			'tipo_nivel_medio_id' => 80
		),
		array(
			'id' => 81,
			'aluno_id' => 81,
			'escola_nivel_medio_id' => 81,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 81,
			'tipo_nivel_medio_id' => 81
		),
		array(
			'id' => 82,
			'aluno_id' => 82,
			'escola_nivel_medio_id' => 82,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 82,
			'tipo_nivel_medio_id' => 82
		),
		array(
			'id' => 83,
			'aluno_id' => 83,
			'escola_nivel_medio_id' => 83,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 83,
			'tipo_nivel_medio_id' => 83
		),
		array(
			'id' => 84,
			'aluno_id' => 84,
			'escola_nivel_medio_id' => 84,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 84,
			'tipo_nivel_medio_id' => 84
		),
		array(
			'id' => 85,
			'aluno_id' => 85,
			'escola_nivel_medio_id' => 85,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 85,
			'tipo_nivel_medio_id' => 85
		),
		array(
			'id' => 86,
			'aluno_id' => 86,
			'escola_nivel_medio_id' => 86,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 86,
			'tipo_nivel_medio_id' => 86
		),
		array(
			'id' => 87,
			'aluno_id' => 87,
			'escola_nivel_medio_id' => 87,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 87,
			'tipo_nivel_medio_id' => 87
		),
		array(
			'id' => 88,
			'aluno_id' => 88,
			'escola_nivel_medio_id' => 88,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 88,
			'tipo_nivel_medio_id' => 88
		),
		array(
			'id' => 89,
			'aluno_id' => 89,
			'escola_nivel_medio_id' => 89,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 89,
			'tipo_nivel_medio_id' => 89
		),
		array(
			'id' => 90,
			'aluno_id' => 90,
			'escola_nivel_medio_id' => 90,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 90,
			'tipo_nivel_medio_id' => 90
		),
		array(
			'id' => 91,
			'aluno_id' => 91,
			'escola_nivel_medio_id' => 91,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 91,
			'tipo_nivel_medio_id' => 91
		),
		array(
			'id' => 92,
			'aluno_id' => 92,
			'escola_nivel_medio_id' => 92,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 92,
			'tipo_nivel_medio_id' => 92
		),
		array(
			'id' => 93,
			'aluno_id' => 93,
			'escola_nivel_medio_id' => 93,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 93,
			'tipo_nivel_medio_id' => 93
		),
		array(
			'id' => 94,
			'aluno_id' => 94,
			'escola_nivel_medio_id' => 94,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 94,
			'tipo_nivel_medio_id' => 94
		),
		array(
			'id' => 95,
			'aluno_id' => 95,
			'escola_nivel_medio_id' => 95,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 95,
			'tipo_nivel_medio_id' => 95
		),
		array(
			'id' => 96,
			'aluno_id' => 96,
			'escola_nivel_medio_id' => 96,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 96,
			'tipo_nivel_medio_id' => 96
		),
		array(
			'id' => 97,
			'aluno_id' => 97,
			'escola_nivel_medio_id' => 97,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 97,
			'tipo_nivel_medio_id' => 97
		),
		array(
			'id' => 98,
			'aluno_id' => 98,
			'escola_nivel_medio_id' => 98,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 98,
			'tipo_nivel_medio_id' => 98
		),
		array(
			'id' => 99,
			'aluno_id' => 99,
			'escola_nivel_medio_id' => 99,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 99,
			'tipo_nivel_medio_id' => 99
		),
		array(
			'id' => 100,
			'aluno_id' => 100,
			'escola_nivel_medio_id' => 100,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 100,
			'tipo_nivel_medio_id' => 100
		),
		array(
			'id' => 101,
			'aluno_id' => 101,
			'escola_nivel_medio_id' => 101,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 101,
			'tipo_nivel_medio_id' => 101
		),
		array(
			'id' => 102,
			'aluno_id' => 102,
			'escola_nivel_medio_id' => 102,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 102,
			'tipo_nivel_medio_id' => 102
		),
		array(
			'id' => 103,
			'aluno_id' => 103,
			'escola_nivel_medio_id' => 103,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 103,
			'tipo_nivel_medio_id' => 103
		),
		array(
			'id' => 104,
			'aluno_id' => 104,
			'escola_nivel_medio_id' => 104,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 104,
			'tipo_nivel_medio_id' => 104
		),
		array(
			'id' => 105,
			'aluno_id' => 105,
			'escola_nivel_medio_id' => 105,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 105,
			'tipo_nivel_medio_id' => 105
		),
		array(
			'id' => 106,
			'aluno_id' => 106,
			'escola_nivel_medio_id' => 106,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 106,
			'tipo_nivel_medio_id' => 106
		),
		array(
			'id' => 107,
			'aluno_id' => 107,
			'escola_nivel_medio_id' => 107,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 107,
			'tipo_nivel_medio_id' => 107
		),
		array(
			'id' => 108,
			'aluno_id' => 108,
			'escola_nivel_medio_id' => 108,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 108,
			'tipo_nivel_medio_id' => 108
		),
		array(
			'id' => 109,
			'aluno_id' => 109,
			'escola_nivel_medio_id' => 109,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 109,
			'tipo_nivel_medio_id' => 109
		),
		array(
			'id' => 110,
			'aluno_id' => 110,
			'escola_nivel_medio_id' => 110,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 110,
			'tipo_nivel_medio_id' => 110
		),
		array(
			'id' => 111,
			'aluno_id' => 111,
			'escola_nivel_medio_id' => 111,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 111,
			'tipo_nivel_medio_id' => 111
		),
		array(
			'id' => 112,
			'aluno_id' => 112,
			'escola_nivel_medio_id' => 112,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 112,
			'tipo_nivel_medio_id' => 112
		),
		array(
			'id' => 113,
			'aluno_id' => 113,
			'escola_nivel_medio_id' => 113,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 113,
			'tipo_nivel_medio_id' => 113
		),
		array(
			'id' => 114,
			'aluno_id' => 114,
			'escola_nivel_medio_id' => 114,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 114,
			'tipo_nivel_medio_id' => 114
		),
		array(
			'id' => 115,
			'aluno_id' => 115,
			'escola_nivel_medio_id' => 115,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 115,
			'tipo_nivel_medio_id' => 115
		),
		array(
			'id' => 116,
			'aluno_id' => 116,
			'escola_nivel_medio_id' => 116,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 116,
			'tipo_nivel_medio_id' => 116
		),
		array(
			'id' => 117,
			'aluno_id' => 117,
			'escola_nivel_medio_id' => 117,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 117,
			'tipo_nivel_medio_id' => 117
		),
		array(
			'id' => 118,
			'aluno_id' => 118,
			'escola_nivel_medio_id' => 118,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 118,
			'tipo_nivel_medio_id' => 118
		),
		array(
			'id' => 119,
			'aluno_id' => 119,
			'escola_nivel_medio_id' => 119,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 119,
			'tipo_nivel_medio_id' => 119
		),
		array(
			'id' => 120,
			'aluno_id' => 120,
			'escola_nivel_medio_id' => 120,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 120,
			'tipo_nivel_medio_id' => 120
		),
		array(
			'id' => 121,
			'aluno_id' => 121,
			'escola_nivel_medio_id' => 121,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 121,
			'tipo_nivel_medio_id' => 121
		),
		array(
			'id' => 122,
			'aluno_id' => 122,
			'escola_nivel_medio_id' => 122,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 122,
			'tipo_nivel_medio_id' => 122
		),
		array(
			'id' => 123,
			'aluno_id' => 123,
			'escola_nivel_medio_id' => 123,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 123,
			'tipo_nivel_medio_id' => 123
		),
		array(
			'id' => 124,
			'aluno_id' => 124,
			'escola_nivel_medio_id' => 124,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 124,
			'tipo_nivel_medio_id' => 124
		),
		array(
			'id' => 125,
			'aluno_id' => 125,
			'escola_nivel_medio_id' => 125,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 125,
			'tipo_nivel_medio_id' => 125
		),
		array(
			'id' => 126,
			'aluno_id' => 126,
			'escola_nivel_medio_id' => 126,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 126,
			'tipo_nivel_medio_id' => 126
		),
		array(
			'id' => 127,
			'aluno_id' => 127,
			'escola_nivel_medio_id' => 127,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 127,
			'tipo_nivel_medio_id' => 127
		),
		array(
			'id' => 128,
			'aluno_id' => 128,
			'escola_nivel_medio_id' => 128,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 128,
			'tipo_nivel_medio_id' => 128
		),
		array(
			'id' => 129,
			'aluno_id' => 129,
			'escola_nivel_medio_id' => 129,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 129,
			'tipo_nivel_medio_id' => 129
		),
		array(
			'id' => 130,
			'aluno_id' => 130,
			'escola_nivel_medio_id' => 130,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 130,
			'tipo_nivel_medio_id' => 130
		),
		array(
			'id' => 131,
			'aluno_id' => 131,
			'escola_nivel_medio_id' => 131,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 131,
			'tipo_nivel_medio_id' => 131
		),
		array(
			'id' => 132,
			'aluno_id' => 132,
			'escola_nivel_medio_id' => 132,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 132,
			'tipo_nivel_medio_id' => 132
		),
		array(
			'id' => 133,
			'aluno_id' => 133,
			'escola_nivel_medio_id' => 133,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 133,
			'tipo_nivel_medio_id' => 133
		),
		array(
			'id' => 134,
			'aluno_id' => 134,
			'escola_nivel_medio_id' => 134,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 134,
			'tipo_nivel_medio_id' => 134
		),
		array(
			'id' => 135,
			'aluno_id' => 135,
			'escola_nivel_medio_id' => 135,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 135,
			'tipo_nivel_medio_id' => 135
		),
		array(
			'id' => 136,
			'aluno_id' => 136,
			'escola_nivel_medio_id' => 136,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 136,
			'tipo_nivel_medio_id' => 136
		),
		array(
			'id' => 137,
			'aluno_id' => 137,
			'escola_nivel_medio_id' => 137,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 137,
			'tipo_nivel_medio_id' => 137
		),
		array(
			'id' => 138,
			'aluno_id' => 138,
			'escola_nivel_medio_id' => 138,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 138,
			'tipo_nivel_medio_id' => 138
		),
		array(
			'id' => 139,
			'aluno_id' => 139,
			'escola_nivel_medio_id' => 139,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 139,
			'tipo_nivel_medio_id' => 139
		),
		array(
			'id' => 140,
			'aluno_id' => 140,
			'escola_nivel_medio_id' => 140,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 140,
			'tipo_nivel_medio_id' => 140
		),
		array(
			'id' => 141,
			'aluno_id' => 141,
			'escola_nivel_medio_id' => 141,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 141,
			'tipo_nivel_medio_id' => 141
		),
		array(
			'id' => 142,
			'aluno_id' => 142,
			'escola_nivel_medio_id' => 142,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 142,
			'tipo_nivel_medio_id' => 142
		),
		array(
			'id' => 143,
			'aluno_id' => 143,
			'escola_nivel_medio_id' => 143,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 143,
			'tipo_nivel_medio_id' => 143
		),
		array(
			'id' => 144,
			'aluno_id' => 144,
			'escola_nivel_medio_id' => 144,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 144,
			'tipo_nivel_medio_id' => 144
		),
		array(
			'id' => 145,
			'aluno_id' => 145,
			'escola_nivel_medio_id' => 145,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 145,
			'tipo_nivel_medio_id' => 145
		),
		array(
			'id' => 146,
			'aluno_id' => 146,
			'escola_nivel_medio_id' => 146,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 146,
			'tipo_nivel_medio_id' => 146
		),
		array(
			'id' => 147,
			'aluno_id' => 147,
			'escola_nivel_medio_id' => 147,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 147,
			'tipo_nivel_medio_id' => 147
		),
		array(
			'id' => 148,
			'aluno_id' => 148,
			'escola_nivel_medio_id' => 148,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 148,
			'tipo_nivel_medio_id' => 148
		),
		array(
			'id' => 149,
			'aluno_id' => 149,
			'escola_nivel_medio_id' => 149,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 149,
			'tipo_nivel_medio_id' => 149
		),
		array(
			'id' => 150,
			'aluno_id' => 150,
			'escola_nivel_medio_id' => 150,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 150,
			'tipo_nivel_medio_id' => 150
		),
		array(
			'id' => 151,
			'aluno_id' => 151,
			'escola_nivel_medio_id' => 151,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 151,
			'tipo_nivel_medio_id' => 151
		),
		array(
			'id' => 152,
			'aluno_id' => 152,
			'escola_nivel_medio_id' => 152,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 152,
			'tipo_nivel_medio_id' => 152
		),
		array(
			'id' => 153,
			'aluno_id' => 153,
			'escola_nivel_medio_id' => 153,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 153,
			'tipo_nivel_medio_id' => 153
		),
		array(
			'id' => 154,
			'aluno_id' => 154,
			'escola_nivel_medio_id' => 154,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 154,
			'tipo_nivel_medio_id' => 154
		),
		array(
			'id' => 155,
			'aluno_id' => 155,
			'escola_nivel_medio_id' => 155,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 155,
			'tipo_nivel_medio_id' => 155
		),
		array(
			'id' => 156,
			'aluno_id' => 156,
			'escola_nivel_medio_id' => 156,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 156,
			'tipo_nivel_medio_id' => 156
		),
		array(
			'id' => 157,
			'aluno_id' => 157,
			'escola_nivel_medio_id' => 157,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 157,
			'tipo_nivel_medio_id' => 157
		),
		array(
			'id' => 158,
			'aluno_id' => 158,
			'escola_nivel_medio_id' => 158,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 158,
			'tipo_nivel_medio_id' => 158
		),
		array(
			'id' => 159,
			'aluno_id' => 159,
			'escola_nivel_medio_id' => 159,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 159,
			'tipo_nivel_medio_id' => 159
		),
		array(
			'id' => 160,
			'aluno_id' => 160,
			'escola_nivel_medio_id' => 160,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 160,
			'tipo_nivel_medio_id' => 160
		),
		array(
			'id' => 161,
			'aluno_id' => 161,
			'escola_nivel_medio_id' => 161,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 161,
			'tipo_nivel_medio_id' => 161
		),
		array(
			'id' => 162,
			'aluno_id' => 162,
			'escola_nivel_medio_id' => 162,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 162,
			'tipo_nivel_medio_id' => 162
		),
		array(
			'id' => 163,
			'aluno_id' => 163,
			'escola_nivel_medio_id' => 163,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 163,
			'tipo_nivel_medio_id' => 163
		),
		array(
			'id' => 164,
			'aluno_id' => 164,
			'escola_nivel_medio_id' => 164,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 164,
			'tipo_nivel_medio_id' => 164
		),
		array(
			'id' => 165,
			'aluno_id' => 165,
			'escola_nivel_medio_id' => 165,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 165,
			'tipo_nivel_medio_id' => 165
		),
		array(
			'id' => 166,
			'aluno_id' => 166,
			'escola_nivel_medio_id' => 166,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 166,
			'tipo_nivel_medio_id' => 166
		),
		array(
			'id' => 167,
			'aluno_id' => 167,
			'escola_nivel_medio_id' => 167,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 167,
			'tipo_nivel_medio_id' => 167
		),
		array(
			'id' => 168,
			'aluno_id' => 168,
			'escola_nivel_medio_id' => 168,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 168,
			'tipo_nivel_medio_id' => 168
		),
		array(
			'id' => 169,
			'aluno_id' => 169,
			'escola_nivel_medio_id' => 169,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 169,
			'tipo_nivel_medio_id' => 169
		),
		array(
			'id' => 170,
			'aluno_id' => 170,
			'escola_nivel_medio_id' => 170,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 170,
			'tipo_nivel_medio_id' => 170
		),
		array(
			'id' => 171,
			'aluno_id' => 171,
			'escola_nivel_medio_id' => 171,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 171,
			'tipo_nivel_medio_id' => 171
		),
		array(
			'id' => 172,
			'aluno_id' => 172,
			'escola_nivel_medio_id' => 172,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 172,
			'tipo_nivel_medio_id' => 172
		),
		array(
			'id' => 173,
			'aluno_id' => 173,
			'escola_nivel_medio_id' => 173,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 173,
			'tipo_nivel_medio_id' => 173
		),
		array(
			'id' => 174,
			'aluno_id' => 174,
			'escola_nivel_medio_id' => 174,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 174,
			'tipo_nivel_medio_id' => 174
		),
		array(
			'id' => 175,
			'aluno_id' => 175,
			'escola_nivel_medio_id' => 175,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 175,
			'tipo_nivel_medio_id' => 175
		),
		array(
			'id' => 176,
			'aluno_id' => 176,
			'escola_nivel_medio_id' => 176,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 176,
			'tipo_nivel_medio_id' => 176
		),
		array(
			'id' => 177,
			'aluno_id' => 177,
			'escola_nivel_medio_id' => 177,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 177,
			'tipo_nivel_medio_id' => 177
		),
		array(
			'id' => 178,
			'aluno_id' => 178,
			'escola_nivel_medio_id' => 178,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 178,
			'tipo_nivel_medio_id' => 178
		),
		array(
			'id' => 179,
			'aluno_id' => 179,
			'escola_nivel_medio_id' => 179,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 179,
			'tipo_nivel_medio_id' => 179
		),
		array(
			'id' => 180,
			'aluno_id' => 180,
			'escola_nivel_medio_id' => 180,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 180,
			'tipo_nivel_medio_id' => 180
		),
		array(
			'id' => 181,
			'aluno_id' => 181,
			'escola_nivel_medio_id' => 181,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 181,
			'tipo_nivel_medio_id' => 181
		),
		array(
			'id' => 182,
			'aluno_id' => 182,
			'escola_nivel_medio_id' => 182,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 182,
			'tipo_nivel_medio_id' => 182
		),
		array(
			'id' => 183,
			'aluno_id' => 183,
			'escola_nivel_medio_id' => 183,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 183,
			'tipo_nivel_medio_id' => 183
		),
		array(
			'id' => 184,
			'aluno_id' => 184,
			'escola_nivel_medio_id' => 184,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 184,
			'tipo_nivel_medio_id' => 184
		),
		array(
			'id' => 185,
			'aluno_id' => 185,
			'escola_nivel_medio_id' => 185,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 185,
			'tipo_nivel_medio_id' => 185
		),
		array(
			'id' => 186,
			'aluno_id' => 186,
			'escola_nivel_medio_id' => 186,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 186,
			'tipo_nivel_medio_id' => 186
		),
		array(
			'id' => 187,
			'aluno_id' => 187,
			'escola_nivel_medio_id' => 187,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 187,
			'tipo_nivel_medio_id' => 187
		),
		array(
			'id' => 188,
			'aluno_id' => 188,
			'escola_nivel_medio_id' => 188,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 188,
			'tipo_nivel_medio_id' => 188
		),
		array(
			'id' => 189,
			'aluno_id' => 189,
			'escola_nivel_medio_id' => 189,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 189,
			'tipo_nivel_medio_id' => 189
		),
		array(
			'id' => 190,
			'aluno_id' => 190,
			'escola_nivel_medio_id' => 190,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 190,
			'tipo_nivel_medio_id' => 190
		),
		array(
			'id' => 191,
			'aluno_id' => 191,
			'escola_nivel_medio_id' => 191,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 191,
			'tipo_nivel_medio_id' => 191
		),
		array(
			'id' => 192,
			'aluno_id' => 192,
			'escola_nivel_medio_id' => 192,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 192,
			'tipo_nivel_medio_id' => 192
		),
		array(
			'id' => 193,
			'aluno_id' => 193,
			'escola_nivel_medio_id' => 193,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 193,
			'tipo_nivel_medio_id' => 193
		),
		array(
			'id' => 194,
			'aluno_id' => 194,
			'escola_nivel_medio_id' => 194,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 194,
			'tipo_nivel_medio_id' => 194
		),
		array(
			'id' => 195,
			'aluno_id' => 195,
			'escola_nivel_medio_id' => 195,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 195,
			'tipo_nivel_medio_id' => 195
		),
		array(
			'id' => 196,
			'aluno_id' => 196,
			'escola_nivel_medio_id' => 196,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 196,
			'tipo_nivel_medio_id' => 196
		),
		array(
			'id' => 197,
			'aluno_id' => 197,
			'escola_nivel_medio_id' => 197,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 197,
			'tipo_nivel_medio_id' => 197
		),
		array(
			'id' => 198,
			'aluno_id' => 198,
			'escola_nivel_medio_id' => 198,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 198,
			'tipo_nivel_medio_id' => 198
		),
		array(
			'id' => 199,
			'aluno_id' => 199,
			'escola_nivel_medio_id' => 199,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 199,
			'tipo_nivel_medio_id' => 199
		),
		array(
			'id' => 200,
			'aluno_id' => 200,
			'escola_nivel_medio_id' => 200,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 200,
			'tipo_nivel_medio_id' => 200
		),
		array(
			'id' => 201,
			'aluno_id' => 201,
			'escola_nivel_medio_id' => 201,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 201,
			'tipo_nivel_medio_id' => 201
		),
		array(
			'id' => 202,
			'aluno_id' => 202,
			'escola_nivel_medio_id' => 202,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 202,
			'tipo_nivel_medio_id' => 202
		),
		array(
			'id' => 203,
			'aluno_id' => 203,
			'escola_nivel_medio_id' => 203,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 203,
			'tipo_nivel_medio_id' => 203
		),
		array(
			'id' => 204,
			'aluno_id' => 204,
			'escola_nivel_medio_id' => 204,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 204,
			'tipo_nivel_medio_id' => 204
		),
		array(
			'id' => 205,
			'aluno_id' => 205,
			'escola_nivel_medio_id' => 205,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 205,
			'tipo_nivel_medio_id' => 205
		),
		array(
			'id' => 206,
			'aluno_id' => 206,
			'escola_nivel_medio_id' => 206,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 206,
			'tipo_nivel_medio_id' => 206
		),
		array(
			'id' => 207,
			'aluno_id' => 207,
			'escola_nivel_medio_id' => 207,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 207,
			'tipo_nivel_medio_id' => 207
		),
		array(
			'id' => 208,
			'aluno_id' => 208,
			'escola_nivel_medio_id' => 208,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 208,
			'tipo_nivel_medio_id' => 208
		),
		array(
			'id' => 209,
			'aluno_id' => 209,
			'escola_nivel_medio_id' => 209,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 209,
			'tipo_nivel_medio_id' => 209
		),
		array(
			'id' => 210,
			'aluno_id' => 210,
			'escola_nivel_medio_id' => 210,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 210,
			'tipo_nivel_medio_id' => 210
		),
		array(
			'id' => 211,
			'aluno_id' => 211,
			'escola_nivel_medio_id' => 211,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 211,
			'tipo_nivel_medio_id' => 211
		),
		array(
			'id' => 212,
			'aluno_id' => 212,
			'escola_nivel_medio_id' => 212,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 212,
			'tipo_nivel_medio_id' => 212
		),
		array(
			'id' => 213,
			'aluno_id' => 213,
			'escola_nivel_medio_id' => 213,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 213,
			'tipo_nivel_medio_id' => 213
		),
		array(
			'id' => 214,
			'aluno_id' => 214,
			'escola_nivel_medio_id' => 214,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 214,
			'tipo_nivel_medio_id' => 214
		),
		array(
			'id' => 215,
			'aluno_id' => 215,
			'escola_nivel_medio_id' => 215,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 215,
			'tipo_nivel_medio_id' => 215
		),
		array(
			'id' => 216,
			'aluno_id' => 216,
			'escola_nivel_medio_id' => 216,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 216,
			'tipo_nivel_medio_id' => 216
		),
		array(
			'id' => 217,
			'aluno_id' => 217,
			'escola_nivel_medio_id' => 217,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 217,
			'tipo_nivel_medio_id' => 217
		),
		array(
			'id' => 218,
			'aluno_id' => 218,
			'escola_nivel_medio_id' => 218,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 218,
			'tipo_nivel_medio_id' => 218
		),
		array(
			'id' => 219,
			'aluno_id' => 219,
			'escola_nivel_medio_id' => 219,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 219,
			'tipo_nivel_medio_id' => 219
		),
		array(
			'id' => 220,
			'aluno_id' => 220,
			'escola_nivel_medio_id' => 220,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 220,
			'tipo_nivel_medio_id' => 220
		),
		array(
			'id' => 221,
			'aluno_id' => 221,
			'escola_nivel_medio_id' => 221,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 221,
			'tipo_nivel_medio_id' => 221
		),
		array(
			'id' => 222,
			'aluno_id' => 222,
			'escola_nivel_medio_id' => 222,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 222,
			'tipo_nivel_medio_id' => 222
		),
		array(
			'id' => 223,
			'aluno_id' => 223,
			'escola_nivel_medio_id' => 223,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 223,
			'tipo_nivel_medio_id' => 223
		),
		array(
			'id' => 224,
			'aluno_id' => 224,
			'escola_nivel_medio_id' => 224,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 224,
			'tipo_nivel_medio_id' => 224
		),
		array(
			'id' => 225,
			'aluno_id' => 225,
			'escola_nivel_medio_id' => 225,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 225,
			'tipo_nivel_medio_id' => 225
		),
		array(
			'id' => 226,
			'aluno_id' => 226,
			'escola_nivel_medio_id' => 226,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 226,
			'tipo_nivel_medio_id' => 226
		),
		array(
			'id' => 227,
			'aluno_id' => 227,
			'escola_nivel_medio_id' => 227,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 227,
			'tipo_nivel_medio_id' => 227
		),
		array(
			'id' => 228,
			'aluno_id' => 228,
			'escola_nivel_medio_id' => 228,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 228,
			'tipo_nivel_medio_id' => 228
		),
		array(
			'id' => 229,
			'aluno_id' => 229,
			'escola_nivel_medio_id' => 229,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 229,
			'tipo_nivel_medio_id' => 229
		),
		array(
			'id' => 230,
			'aluno_id' => 230,
			'escola_nivel_medio_id' => 230,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 230,
			'tipo_nivel_medio_id' => 230
		),
		array(
			'id' => 231,
			'aluno_id' => 231,
			'escola_nivel_medio_id' => 231,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 231,
			'tipo_nivel_medio_id' => 231
		),
		array(
			'id' => 232,
			'aluno_id' => 232,
			'escola_nivel_medio_id' => 232,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 232,
			'tipo_nivel_medio_id' => 232
		),
		array(
			'id' => 233,
			'aluno_id' => 233,
			'escola_nivel_medio_id' => 233,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 233,
			'tipo_nivel_medio_id' => 233
		),
		array(
			'id' => 234,
			'aluno_id' => 234,
			'escola_nivel_medio_id' => 234,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 234,
			'tipo_nivel_medio_id' => 234
		),
		array(
			'id' => 235,
			'aluno_id' => 235,
			'escola_nivel_medio_id' => 235,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 235,
			'tipo_nivel_medio_id' => 235
		),
		array(
			'id' => 236,
			'aluno_id' => 236,
			'escola_nivel_medio_id' => 236,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 236,
			'tipo_nivel_medio_id' => 236
		),
		array(
			'id' => 237,
			'aluno_id' => 237,
			'escola_nivel_medio_id' => 237,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 237,
			'tipo_nivel_medio_id' => 237
		),
		array(
			'id' => 238,
			'aluno_id' => 238,
			'escola_nivel_medio_id' => 238,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 238,
			'tipo_nivel_medio_id' => 238
		),
		array(
			'id' => 239,
			'aluno_id' => 239,
			'escola_nivel_medio_id' => 239,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 239,
			'tipo_nivel_medio_id' => 239
		),
		array(
			'id' => 240,
			'aluno_id' => 240,
			'escola_nivel_medio_id' => 240,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 240,
			'tipo_nivel_medio_id' => 240
		),
		array(
			'id' => 241,
			'aluno_id' => 241,
			'escola_nivel_medio_id' => 241,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 241,
			'tipo_nivel_medio_id' => 241
		),
		array(
			'id' => 242,
			'aluno_id' => 242,
			'escola_nivel_medio_id' => 242,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 242,
			'tipo_nivel_medio_id' => 242
		),
		array(
			'id' => 243,
			'aluno_id' => 243,
			'escola_nivel_medio_id' => 243,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 243,
			'tipo_nivel_medio_id' => 243
		),
		array(
			'id' => 244,
			'aluno_id' => 244,
			'escola_nivel_medio_id' => 244,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 244,
			'tipo_nivel_medio_id' => 244
		),
		array(
			'id' => 245,
			'aluno_id' => 245,
			'escola_nivel_medio_id' => 245,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 245,
			'tipo_nivel_medio_id' => 245
		),
		array(
			'id' => 246,
			'aluno_id' => 246,
			'escola_nivel_medio_id' => 246,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 246,
			'tipo_nivel_medio_id' => 246
		),
		array(
			'id' => 247,
			'aluno_id' => 247,
			'escola_nivel_medio_id' => 247,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 247,
			'tipo_nivel_medio_id' => 247
		),
		array(
			'id' => 248,
			'aluno_id' => 248,
			'escola_nivel_medio_id' => 248,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 248,
			'tipo_nivel_medio_id' => 248
		),
		array(
			'id' => 249,
			'aluno_id' => 249,
			'escola_nivel_medio_id' => 249,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 249,
			'tipo_nivel_medio_id' => 249
		),
		array(
			'id' => 250,
			'aluno_id' => 250,
			'escola_nivel_medio_id' => 250,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 250,
			'tipo_nivel_medio_id' => 250
		),
		array(
			'id' => 251,
			'aluno_id' => 251,
			'escola_nivel_medio_id' => 251,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 251,
			'tipo_nivel_medio_id' => 251
		),
		array(
			'id' => 252,
			'aluno_id' => 252,
			'escola_nivel_medio_id' => 252,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 252,
			'tipo_nivel_medio_id' => 252
		),
		array(
			'id' => 253,
			'aluno_id' => 253,
			'escola_nivel_medio_id' => 253,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 253,
			'tipo_nivel_medio_id' => 253
		),
		array(
			'id' => 254,
			'aluno_id' => 254,
			'escola_nivel_medio_id' => 254,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 254,
			'tipo_nivel_medio_id' => 254
		),
		array(
			'id' => 255,
			'aluno_id' => 255,
			'escola_nivel_medio_id' => 255,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 255,
			'tipo_nivel_medio_id' => 255
		),
		array(
			'id' => 256,
			'aluno_id' => 256,
			'escola_nivel_medio_id' => 256,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 256,
			'tipo_nivel_medio_id' => 256
		),
		array(
			'id' => 257,
			'aluno_id' => 257,
			'escola_nivel_medio_id' => 257,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 257,
			'tipo_nivel_medio_id' => 257
		),
		array(
			'id' => 258,
			'aluno_id' => 258,
			'escola_nivel_medio_id' => 258,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 258,
			'tipo_nivel_medio_id' => 258
		),
		array(
			'id' => 259,
			'aluno_id' => 259,
			'escola_nivel_medio_id' => 259,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 259,
			'tipo_nivel_medio_id' => 259
		),
		array(
			'id' => 260,
			'aluno_id' => 260,
			'escola_nivel_medio_id' => 260,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 260,
			'tipo_nivel_medio_id' => 260
		),
		array(
			'id' => 261,
			'aluno_id' => 261,
			'escola_nivel_medio_id' => 261,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 261,
			'tipo_nivel_medio_id' => 261
		),
		array(
			'id' => 262,
			'aluno_id' => 262,
			'escola_nivel_medio_id' => 262,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 262,
			'tipo_nivel_medio_id' => 262
		),
		array(
			'id' => 263,
			'aluno_id' => 263,
			'escola_nivel_medio_id' => 263,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 263,
			'tipo_nivel_medio_id' => 263
		),
		array(
			'id' => 264,
			'aluno_id' => 264,
			'escola_nivel_medio_id' => 264,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 264,
			'tipo_nivel_medio_id' => 264
		),
		array(
			'id' => 265,
			'aluno_id' => 265,
			'escola_nivel_medio_id' => 265,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 265,
			'tipo_nivel_medio_id' => 265
		),
		array(
			'id' => 266,
			'aluno_id' => 266,
			'escola_nivel_medio_id' => 266,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 266,
			'tipo_nivel_medio_id' => 266
		),
		array(
			'id' => 267,
			'aluno_id' => 267,
			'escola_nivel_medio_id' => 267,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 267,
			'tipo_nivel_medio_id' => 267
		),
		array(
			'id' => 268,
			'aluno_id' => 268,
			'escola_nivel_medio_id' => 268,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 268,
			'tipo_nivel_medio_id' => 268
		),
		array(
			'id' => 269,
			'aluno_id' => 269,
			'escola_nivel_medio_id' => 269,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 269,
			'tipo_nivel_medio_id' => 269
		),
		array(
			'id' => 270,
			'aluno_id' => 270,
			'escola_nivel_medio_id' => 270,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 270,
			'tipo_nivel_medio_id' => 270
		),
		array(
			'id' => 271,
			'aluno_id' => 271,
			'escola_nivel_medio_id' => 271,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 271,
			'tipo_nivel_medio_id' => 271
		),
		array(
			'id' => 272,
			'aluno_id' => 272,
			'escola_nivel_medio_id' => 272,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 272,
			'tipo_nivel_medio_id' => 272
		),
		array(
			'id' => 273,
			'aluno_id' => 273,
			'escola_nivel_medio_id' => 273,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 273,
			'tipo_nivel_medio_id' => 273
		),
		array(
			'id' => 274,
			'aluno_id' => 274,
			'escola_nivel_medio_id' => 274,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 274,
			'tipo_nivel_medio_id' => 274
		),
		array(
			'id' => 275,
			'aluno_id' => 275,
			'escola_nivel_medio_id' => 275,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 275,
			'tipo_nivel_medio_id' => 275
		),
		array(
			'id' => 276,
			'aluno_id' => 276,
			'escola_nivel_medio_id' => 276,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 276,
			'tipo_nivel_medio_id' => 276
		),
		array(
			'id' => 277,
			'aluno_id' => 277,
			'escola_nivel_medio_id' => 277,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 277,
			'tipo_nivel_medio_id' => 277
		),
		array(
			'id' => 278,
			'aluno_id' => 278,
			'escola_nivel_medio_id' => 278,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 278,
			'tipo_nivel_medio_id' => 278
		),
		array(
			'id' => 279,
			'aluno_id' => 279,
			'escola_nivel_medio_id' => 279,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 279,
			'tipo_nivel_medio_id' => 279
		),
		array(
			'id' => 280,
			'aluno_id' => 280,
			'escola_nivel_medio_id' => 280,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 280,
			'tipo_nivel_medio_id' => 280
		),
		array(
			'id' => 281,
			'aluno_id' => 281,
			'escola_nivel_medio_id' => 281,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 281,
			'tipo_nivel_medio_id' => 281
		),
		array(
			'id' => 282,
			'aluno_id' => 282,
			'escola_nivel_medio_id' => 282,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 282,
			'tipo_nivel_medio_id' => 282
		),
		array(
			'id' => 283,
			'aluno_id' => 283,
			'escola_nivel_medio_id' => 283,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 283,
			'tipo_nivel_medio_id' => 283
		),
		array(
			'id' => 284,
			'aluno_id' => 284,
			'escola_nivel_medio_id' => 284,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 284,
			'tipo_nivel_medio_id' => 284
		),
		array(
			'id' => 285,
			'aluno_id' => 285,
			'escola_nivel_medio_id' => 285,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 285,
			'tipo_nivel_medio_id' => 285
		),
		array(
			'id' => 286,
			'aluno_id' => 286,
			'escola_nivel_medio_id' => 286,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 286,
			'tipo_nivel_medio_id' => 286
		),
		array(
			'id' => 287,
			'aluno_id' => 287,
			'escola_nivel_medio_id' => 287,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 287,
			'tipo_nivel_medio_id' => 287
		),
		array(
			'id' => 288,
			'aluno_id' => 288,
			'escola_nivel_medio_id' => 288,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 288,
			'tipo_nivel_medio_id' => 288
		),
		array(
			'id' => 289,
			'aluno_id' => 289,
			'escola_nivel_medio_id' => 289,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 289,
			'tipo_nivel_medio_id' => 289
		),
		array(
			'id' => 290,
			'aluno_id' => 290,
			'escola_nivel_medio_id' => 290,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 290,
			'tipo_nivel_medio_id' => 290
		),
		array(
			'id' => 291,
			'aluno_id' => 291,
			'escola_nivel_medio_id' => 291,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 291,
			'tipo_nivel_medio_id' => 291
		),
		array(
			'id' => 292,
			'aluno_id' => 292,
			'escola_nivel_medio_id' => 292,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 292,
			'tipo_nivel_medio_id' => 292
		),
		array(
			'id' => 293,
			'aluno_id' => 293,
			'escola_nivel_medio_id' => 293,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 293,
			'tipo_nivel_medio_id' => 293
		),
		array(
			'id' => 294,
			'aluno_id' => 294,
			'escola_nivel_medio_id' => 294,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 294,
			'tipo_nivel_medio_id' => 294
		),
		array(
			'id' => 295,
			'aluno_id' => 295,
			'escola_nivel_medio_id' => 295,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 295,
			'tipo_nivel_medio_id' => 295
		),
		array(
			'id' => 296,
			'aluno_id' => 296,
			'escola_nivel_medio_id' => 296,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 296,
			'tipo_nivel_medio_id' => 296
		),
		array(
			'id' => 297,
			'aluno_id' => 297,
			'escola_nivel_medio_id' => 297,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 297,
			'tipo_nivel_medio_id' => 297
		),
		array(
			'id' => 298,
			'aluno_id' => 298,
			'escola_nivel_medio_id' => 298,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 298,
			'tipo_nivel_medio_id' => 298
		),
		array(
			'id' => 299,
			'aluno_id' => 299,
			'escola_nivel_medio_id' => 299,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 299,
			'tipo_nivel_medio_id' => 299
		),
		array(
			'id' => 300,
			'aluno_id' => 300,
			'escola_nivel_medio_id' => 300,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 300,
			'tipo_nivel_medio_id' => 300
		),
		array(
			'id' => 301,
			'aluno_id' => 301,
			'escola_nivel_medio_id' => 301,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 301,
			'tipo_nivel_medio_id' => 301
		),
		array(
			'id' => 302,
			'aluno_id' => 302,
			'escola_nivel_medio_id' => 302,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 302,
			'tipo_nivel_medio_id' => 302
		),
		array(
			'id' => 303,
			'aluno_id' => 303,
			'escola_nivel_medio_id' => 303,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 303,
			'tipo_nivel_medio_id' => 303
		),
		array(
			'id' => 304,
			'aluno_id' => 304,
			'escola_nivel_medio_id' => 304,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 304,
			'tipo_nivel_medio_id' => 304
		),
		array(
			'id' => 305,
			'aluno_id' => 305,
			'escola_nivel_medio_id' => 305,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 305,
			'tipo_nivel_medio_id' => 305
		),
		array(
			'id' => 306,
			'aluno_id' => 306,
			'escola_nivel_medio_id' => 306,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 306,
			'tipo_nivel_medio_id' => 306
		),
		array(
			'id' => 307,
			'aluno_id' => 307,
			'escola_nivel_medio_id' => 307,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 307,
			'tipo_nivel_medio_id' => 307
		),
		array(
			'id' => 308,
			'aluno_id' => 308,
			'escola_nivel_medio_id' => 308,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 308,
			'tipo_nivel_medio_id' => 308
		),
		array(
			'id' => 309,
			'aluno_id' => 309,
			'escola_nivel_medio_id' => 309,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 309,
			'tipo_nivel_medio_id' => 309
		),
		array(
			'id' => 310,
			'aluno_id' => 310,
			'escola_nivel_medio_id' => 310,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 310,
			'tipo_nivel_medio_id' => 310
		),
		array(
			'id' => 311,
			'aluno_id' => 311,
			'escola_nivel_medio_id' => 311,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 311,
			'tipo_nivel_medio_id' => 311
		),
		array(
			'id' => 312,
			'aluno_id' => 312,
			'escola_nivel_medio_id' => 312,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 312,
			'tipo_nivel_medio_id' => 312
		),
		array(
			'id' => 313,
			'aluno_id' => 313,
			'escola_nivel_medio_id' => 313,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 313,
			'tipo_nivel_medio_id' => 313
		),
		array(
			'id' => 314,
			'aluno_id' => 314,
			'escola_nivel_medio_id' => 314,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 314,
			'tipo_nivel_medio_id' => 314
		),
		array(
			'id' => 315,
			'aluno_id' => 315,
			'escola_nivel_medio_id' => 315,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 315,
			'tipo_nivel_medio_id' => 315
		),
		array(
			'id' => 316,
			'aluno_id' => 316,
			'escola_nivel_medio_id' => 316,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 316,
			'tipo_nivel_medio_id' => 316
		),
		array(
			'id' => 317,
			'aluno_id' => 317,
			'escola_nivel_medio_id' => 317,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 317,
			'tipo_nivel_medio_id' => 317
		),
		array(
			'id' => 318,
			'aluno_id' => 318,
			'escola_nivel_medio_id' => 318,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 318,
			'tipo_nivel_medio_id' => 318
		),
		array(
			'id' => 319,
			'aluno_id' => 319,
			'escola_nivel_medio_id' => 319,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 319,
			'tipo_nivel_medio_id' => 319
		),
		array(
			'id' => 320,
			'aluno_id' => 320,
			'escola_nivel_medio_id' => 320,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 320,
			'tipo_nivel_medio_id' => 320
		),
		array(
			'id' => 321,
			'aluno_id' => 321,
			'escola_nivel_medio_id' => 321,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 321,
			'tipo_nivel_medio_id' => 321
		),
		array(
			'id' => 322,
			'aluno_id' => 322,
			'escola_nivel_medio_id' => 322,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 322,
			'tipo_nivel_medio_id' => 322
		),
		array(
			'id' => 323,
			'aluno_id' => 323,
			'escola_nivel_medio_id' => 323,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 323,
			'tipo_nivel_medio_id' => 323
		),
		array(
			'id' => 324,
			'aluno_id' => 324,
			'escola_nivel_medio_id' => 324,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 324,
			'tipo_nivel_medio_id' => 324
		),
		array(
			'id' => 325,
			'aluno_id' => 325,
			'escola_nivel_medio_id' => 325,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 325,
			'tipo_nivel_medio_id' => 325
		),
		array(
			'id' => 326,
			'aluno_id' => 326,
			'escola_nivel_medio_id' => 326,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 326,
			'tipo_nivel_medio_id' => 326
		),
		array(
			'id' => 327,
			'aluno_id' => 327,
			'escola_nivel_medio_id' => 327,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 327,
			'tipo_nivel_medio_id' => 327
		),
		array(
			'id' => 328,
			'aluno_id' => 328,
			'escola_nivel_medio_id' => 328,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 328,
			'tipo_nivel_medio_id' => 328
		),
		array(
			'id' => 329,
			'aluno_id' => 329,
			'escola_nivel_medio_id' => 329,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 329,
			'tipo_nivel_medio_id' => 329
		),
		array(
			'id' => 330,
			'aluno_id' => 330,
			'escola_nivel_medio_id' => 330,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 330,
			'tipo_nivel_medio_id' => 330
		),
		array(
			'id' => 331,
			'aluno_id' => 331,
			'escola_nivel_medio_id' => 331,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 331,
			'tipo_nivel_medio_id' => 331
		),
		array(
			'id' => 332,
			'aluno_id' => 332,
			'escola_nivel_medio_id' => 332,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 332,
			'tipo_nivel_medio_id' => 332
		),
		array(
			'id' => 333,
			'aluno_id' => 333,
			'escola_nivel_medio_id' => 333,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 333,
			'tipo_nivel_medio_id' => 333
		),
		array(
			'id' => 334,
			'aluno_id' => 334,
			'escola_nivel_medio_id' => 334,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 334,
			'tipo_nivel_medio_id' => 334
		),
		array(
			'id' => 335,
			'aluno_id' => 335,
			'escola_nivel_medio_id' => 335,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 335,
			'tipo_nivel_medio_id' => 335
		),
		array(
			'id' => 336,
			'aluno_id' => 336,
			'escola_nivel_medio_id' => 336,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 336,
			'tipo_nivel_medio_id' => 336
		),
		array(
			'id' => 337,
			'aluno_id' => 337,
			'escola_nivel_medio_id' => 337,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 337,
			'tipo_nivel_medio_id' => 337
		),
		array(
			'id' => 338,
			'aluno_id' => 338,
			'escola_nivel_medio_id' => 338,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 338,
			'tipo_nivel_medio_id' => 338
		),
		array(
			'id' => 339,
			'aluno_id' => 339,
			'escola_nivel_medio_id' => 339,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 339,
			'tipo_nivel_medio_id' => 339
		),
		array(
			'id' => 340,
			'aluno_id' => 340,
			'escola_nivel_medio_id' => 340,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 340,
			'tipo_nivel_medio_id' => 340
		),
		array(
			'id' => 341,
			'aluno_id' => 341,
			'escola_nivel_medio_id' => 341,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 341,
			'tipo_nivel_medio_id' => 341
		),
		array(
			'id' => 342,
			'aluno_id' => 342,
			'escola_nivel_medio_id' => 342,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 342,
			'tipo_nivel_medio_id' => 342
		),
		array(
			'id' => 343,
			'aluno_id' => 343,
			'escola_nivel_medio_id' => 343,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 343,
			'tipo_nivel_medio_id' => 343
		),
		array(
			'id' => 344,
			'aluno_id' => 344,
			'escola_nivel_medio_id' => 344,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 344,
			'tipo_nivel_medio_id' => 344
		),
		array(
			'id' => 345,
			'aluno_id' => 345,
			'escola_nivel_medio_id' => 345,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 345,
			'tipo_nivel_medio_id' => 345
		),
		array(
			'id' => 346,
			'aluno_id' => 346,
			'escola_nivel_medio_id' => 346,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 346,
			'tipo_nivel_medio_id' => 346
		),
		array(
			'id' => 347,
			'aluno_id' => 347,
			'escola_nivel_medio_id' => 347,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 347,
			'tipo_nivel_medio_id' => 347
		),
		array(
			'id' => 348,
			'aluno_id' => 348,
			'escola_nivel_medio_id' => 348,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 348,
			'tipo_nivel_medio_id' => 348
		),
		array(
			'id' => 349,
			'aluno_id' => 349,
			'escola_nivel_medio_id' => 349,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 349,
			'tipo_nivel_medio_id' => 349
		),
		array(
			'id' => 350,
			'aluno_id' => 350,
			'escola_nivel_medio_id' => 350,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 350,
			'tipo_nivel_medio_id' => 350
		),
		array(
			'id' => 351,
			'aluno_id' => 351,
			'escola_nivel_medio_id' => 351,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 351,
			'tipo_nivel_medio_id' => 351
		),
		array(
			'id' => 352,
			'aluno_id' => 352,
			'escola_nivel_medio_id' => 352,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 352,
			'tipo_nivel_medio_id' => 352
		),
		array(
			'id' => 353,
			'aluno_id' => 353,
			'escola_nivel_medio_id' => 353,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 353,
			'tipo_nivel_medio_id' => 353
		),
		array(
			'id' => 354,
			'aluno_id' => 354,
			'escola_nivel_medio_id' => 354,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 354,
			'tipo_nivel_medio_id' => 354
		),
		array(
			'id' => 355,
			'aluno_id' => 355,
			'escola_nivel_medio_id' => 355,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 355,
			'tipo_nivel_medio_id' => 355
		),
		array(
			'id' => 356,
			'aluno_id' => 356,
			'escola_nivel_medio_id' => 356,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 356,
			'tipo_nivel_medio_id' => 356
		),
		array(
			'id' => 357,
			'aluno_id' => 357,
			'escola_nivel_medio_id' => 357,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 357,
			'tipo_nivel_medio_id' => 357
		),
		array(
			'id' => 358,
			'aluno_id' => 358,
			'escola_nivel_medio_id' => 358,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 358,
			'tipo_nivel_medio_id' => 358
		),
		array(
			'id' => 359,
			'aluno_id' => 359,
			'escola_nivel_medio_id' => 359,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 359,
			'tipo_nivel_medio_id' => 359
		),
		array(
			'id' => 360,
			'aluno_id' => 360,
			'escola_nivel_medio_id' => 360,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 360,
			'tipo_nivel_medio_id' => 360
		),
		array(
			'id' => 361,
			'aluno_id' => 361,
			'escola_nivel_medio_id' => 361,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 361,
			'tipo_nivel_medio_id' => 361
		),
		array(
			'id' => 362,
			'aluno_id' => 362,
			'escola_nivel_medio_id' => 362,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 362,
			'tipo_nivel_medio_id' => 362
		),
		array(
			'id' => 363,
			'aluno_id' => 363,
			'escola_nivel_medio_id' => 363,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 363,
			'tipo_nivel_medio_id' => 363
		),
		array(
			'id' => 364,
			'aluno_id' => 364,
			'escola_nivel_medio_id' => 364,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 364,
			'tipo_nivel_medio_id' => 364
		),
		array(
			'id' => 365,
			'aluno_id' => 365,
			'escola_nivel_medio_id' => 365,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 365,
			'tipo_nivel_medio_id' => 365
		),
		array(
			'id' => 366,
			'aluno_id' => 366,
			'escola_nivel_medio_id' => 366,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 366,
			'tipo_nivel_medio_id' => 366
		),
		array(
			'id' => 367,
			'aluno_id' => 367,
			'escola_nivel_medio_id' => 367,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 367,
			'tipo_nivel_medio_id' => 367
		),
		array(
			'id' => 368,
			'aluno_id' => 368,
			'escola_nivel_medio_id' => 368,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 368,
			'tipo_nivel_medio_id' => 368
		),
		array(
			'id' => 369,
			'aluno_id' => 369,
			'escola_nivel_medio_id' => 369,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 369,
			'tipo_nivel_medio_id' => 369
		),
		array(
			'id' => 370,
			'aluno_id' => 370,
			'escola_nivel_medio_id' => 370,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 370,
			'tipo_nivel_medio_id' => 370
		),
		array(
			'id' => 371,
			'aluno_id' => 371,
			'escola_nivel_medio_id' => 371,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 371,
			'tipo_nivel_medio_id' => 371
		),
		array(
			'id' => 372,
			'aluno_id' => 372,
			'escola_nivel_medio_id' => 372,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 372,
			'tipo_nivel_medio_id' => 372
		),
		array(
			'id' => 373,
			'aluno_id' => 373,
			'escola_nivel_medio_id' => 373,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 373,
			'tipo_nivel_medio_id' => 373
		),
		array(
			'id' => 374,
			'aluno_id' => 374,
			'escola_nivel_medio_id' => 374,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 374,
			'tipo_nivel_medio_id' => 374
		),
		array(
			'id' => 375,
			'aluno_id' => 375,
			'escola_nivel_medio_id' => 375,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 375,
			'tipo_nivel_medio_id' => 375
		),
		array(
			'id' => 376,
			'aluno_id' => 376,
			'escola_nivel_medio_id' => 376,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 376,
			'tipo_nivel_medio_id' => 376
		),
		array(
			'id' => 377,
			'aluno_id' => 377,
			'escola_nivel_medio_id' => 377,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 377,
			'tipo_nivel_medio_id' => 377
		),
		array(
			'id' => 378,
			'aluno_id' => 378,
			'escola_nivel_medio_id' => 378,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 378,
			'tipo_nivel_medio_id' => 378
		),
		array(
			'id' => 379,
			'aluno_id' => 379,
			'escola_nivel_medio_id' => 379,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 379,
			'tipo_nivel_medio_id' => 379
		),
		array(
			'id' => 380,
			'aluno_id' => 380,
			'escola_nivel_medio_id' => 380,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 380,
			'tipo_nivel_medio_id' => 380
		),
		array(
			'id' => 381,
			'aluno_id' => 381,
			'escola_nivel_medio_id' => 381,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 381,
			'tipo_nivel_medio_id' => 381
		),
		array(
			'id' => 382,
			'aluno_id' => 382,
			'escola_nivel_medio_id' => 382,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 382,
			'tipo_nivel_medio_id' => 382
		),
		array(
			'id' => 383,
			'aluno_id' => 383,
			'escola_nivel_medio_id' => 383,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 383,
			'tipo_nivel_medio_id' => 383
		),
		array(
			'id' => 384,
			'aluno_id' => 384,
			'escola_nivel_medio_id' => 384,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 384,
			'tipo_nivel_medio_id' => 384
		),
		array(
			'id' => 385,
			'aluno_id' => 385,
			'escola_nivel_medio_id' => 385,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 385,
			'tipo_nivel_medio_id' => 385
		),
		array(
			'id' => 386,
			'aluno_id' => 386,
			'escola_nivel_medio_id' => 386,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 386,
			'tipo_nivel_medio_id' => 386
		),
		array(
			'id' => 387,
			'aluno_id' => 387,
			'escola_nivel_medio_id' => 387,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 387,
			'tipo_nivel_medio_id' => 387
		),
		array(
			'id' => 388,
			'aluno_id' => 388,
			'escola_nivel_medio_id' => 388,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 388,
			'tipo_nivel_medio_id' => 388
		),
		array(
			'id' => 389,
			'aluno_id' => 389,
			'escola_nivel_medio_id' => 389,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 389,
			'tipo_nivel_medio_id' => 389
		),
		array(
			'id' => 390,
			'aluno_id' => 390,
			'escola_nivel_medio_id' => 390,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 390,
			'tipo_nivel_medio_id' => 390
		),
		array(
			'id' => 391,
			'aluno_id' => 391,
			'escola_nivel_medio_id' => 391,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 391,
			'tipo_nivel_medio_id' => 391
		),
		array(
			'id' => 392,
			'aluno_id' => 392,
			'escola_nivel_medio_id' => 392,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 392,
			'tipo_nivel_medio_id' => 392
		),
		array(
			'id' => 393,
			'aluno_id' => 393,
			'escola_nivel_medio_id' => 393,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 393,
			'tipo_nivel_medio_id' => 393
		),
		array(
			'id' => 394,
			'aluno_id' => 394,
			'escola_nivel_medio_id' => 394,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 394,
			'tipo_nivel_medio_id' => 394
		),
		array(
			'id' => 395,
			'aluno_id' => 395,
			'escola_nivel_medio_id' => 395,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 395,
			'tipo_nivel_medio_id' => 395
		),
		array(
			'id' => 396,
			'aluno_id' => 396,
			'escola_nivel_medio_id' => 396,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 396,
			'tipo_nivel_medio_id' => 396
		),
		array(
			'id' => 397,
			'aluno_id' => 397,
			'escola_nivel_medio_id' => 397,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 397,
			'tipo_nivel_medio_id' => 397
		),
		array(
			'id' => 398,
			'aluno_id' => 398,
			'escola_nivel_medio_id' => 398,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 398,
			'tipo_nivel_medio_id' => 398
		),
		array(
			'id' => 399,
			'aluno_id' => 399,
			'escola_nivel_medio_id' => 399,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 399,
			'tipo_nivel_medio_id' => 399
		),
		array(
			'id' => 400,
			'aluno_id' => 400,
			'escola_nivel_medio_id' => 400,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 400,
			'tipo_nivel_medio_id' => 400
		),
		array(
			'id' => 401,
			'aluno_id' => 401,
			'escola_nivel_medio_id' => 401,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 401,
			'tipo_nivel_medio_id' => 401
		),
		array(
			'id' => 402,
			'aluno_id' => 402,
			'escola_nivel_medio_id' => 402,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 402,
			'tipo_nivel_medio_id' => 402
		),
		array(
			'id' => 403,
			'aluno_id' => 403,
			'escola_nivel_medio_id' => 403,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 403,
			'tipo_nivel_medio_id' => 403
		),
		array(
			'id' => 404,
			'aluno_id' => 404,
			'escola_nivel_medio_id' => 404,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 404,
			'tipo_nivel_medio_id' => 404
		),
		array(
			'id' => 405,
			'aluno_id' => 405,
			'escola_nivel_medio_id' => 405,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 405,
			'tipo_nivel_medio_id' => 405
		),
		array(
			'id' => 406,
			'aluno_id' => 406,
			'escola_nivel_medio_id' => 406,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 406,
			'tipo_nivel_medio_id' => 406
		),
		array(
			'id' => 407,
			'aluno_id' => 407,
			'escola_nivel_medio_id' => 407,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 407,
			'tipo_nivel_medio_id' => 407
		),
		array(
			'id' => 408,
			'aluno_id' => 408,
			'escola_nivel_medio_id' => 408,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 408,
			'tipo_nivel_medio_id' => 408
		),
		array(
			'id' => 409,
			'aluno_id' => 409,
			'escola_nivel_medio_id' => 409,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 409,
			'tipo_nivel_medio_id' => 409
		),
		array(
			'id' => 410,
			'aluno_id' => 410,
			'escola_nivel_medio_id' => 410,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 410,
			'tipo_nivel_medio_id' => 410
		),
		array(
			'id' => 411,
			'aluno_id' => 411,
			'escola_nivel_medio_id' => 411,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 411,
			'tipo_nivel_medio_id' => 411
		),
		array(
			'id' => 412,
			'aluno_id' => 412,
			'escola_nivel_medio_id' => 412,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 412,
			'tipo_nivel_medio_id' => 412
		),
		array(
			'id' => 413,
			'aluno_id' => 413,
			'escola_nivel_medio_id' => 413,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 413,
			'tipo_nivel_medio_id' => 413
		),
		array(
			'id' => 414,
			'aluno_id' => 414,
			'escola_nivel_medio_id' => 414,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 414,
			'tipo_nivel_medio_id' => 414
		),
		array(
			'id' => 415,
			'aluno_id' => 415,
			'escola_nivel_medio_id' => 415,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 415,
			'tipo_nivel_medio_id' => 415
		),
		array(
			'id' => 416,
			'aluno_id' => 416,
			'escola_nivel_medio_id' => 416,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 416,
			'tipo_nivel_medio_id' => 416
		),
		array(
			'id' => 417,
			'aluno_id' => 417,
			'escola_nivel_medio_id' => 417,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 417,
			'tipo_nivel_medio_id' => 417
		),
		array(
			'id' => 418,
			'aluno_id' => 418,
			'escola_nivel_medio_id' => 418,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 418,
			'tipo_nivel_medio_id' => 418
		),
		array(
			'id' => 419,
			'aluno_id' => 419,
			'escola_nivel_medio_id' => 419,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 419,
			'tipo_nivel_medio_id' => 419
		),
		array(
			'id' => 420,
			'aluno_id' => 420,
			'escola_nivel_medio_id' => 420,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 420,
			'tipo_nivel_medio_id' => 420
		),
		array(
			'id' => 421,
			'aluno_id' => 421,
			'escola_nivel_medio_id' => 421,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 421,
			'tipo_nivel_medio_id' => 421
		),
		array(
			'id' => 422,
			'aluno_id' => 422,
			'escola_nivel_medio_id' => 422,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 422,
			'tipo_nivel_medio_id' => 422
		),
		array(
			'id' => 423,
			'aluno_id' => 423,
			'escola_nivel_medio_id' => 423,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 423,
			'tipo_nivel_medio_id' => 423
		),
		array(
			'id' => 424,
			'aluno_id' => 424,
			'escola_nivel_medio_id' => 424,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 424,
			'tipo_nivel_medio_id' => 424
		),
		array(
			'id' => 425,
			'aluno_id' => 425,
			'escola_nivel_medio_id' => 425,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 425,
			'tipo_nivel_medio_id' => 425
		),
		array(
			'id' => 426,
			'aluno_id' => 426,
			'escola_nivel_medio_id' => 426,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 426,
			'tipo_nivel_medio_id' => 426
		),
		array(
			'id' => 427,
			'aluno_id' => 427,
			'escola_nivel_medio_id' => 427,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 427,
			'tipo_nivel_medio_id' => 427
		),
		array(
			'id' => 428,
			'aluno_id' => 428,
			'escola_nivel_medio_id' => 428,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 428,
			'tipo_nivel_medio_id' => 428
		),
		array(
			'id' => 429,
			'aluno_id' => 429,
			'escola_nivel_medio_id' => 429,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 429,
			'tipo_nivel_medio_id' => 429
		),
		array(
			'id' => 430,
			'aluno_id' => 430,
			'escola_nivel_medio_id' => 430,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 430,
			'tipo_nivel_medio_id' => 430
		),
		array(
			'id' => 431,
			'aluno_id' => 431,
			'escola_nivel_medio_id' => 431,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 431,
			'tipo_nivel_medio_id' => 431
		),
		array(
			'id' => 432,
			'aluno_id' => 432,
			'escola_nivel_medio_id' => 432,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 432,
			'tipo_nivel_medio_id' => 432
		),
		array(
			'id' => 433,
			'aluno_id' => 433,
			'escola_nivel_medio_id' => 433,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 433,
			'tipo_nivel_medio_id' => 433
		),
		array(
			'id' => 434,
			'aluno_id' => 434,
			'escola_nivel_medio_id' => 434,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 434,
			'tipo_nivel_medio_id' => 434
		),
		array(
			'id' => 435,
			'aluno_id' => 435,
			'escola_nivel_medio_id' => 435,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 435,
			'tipo_nivel_medio_id' => 435
		),
		array(
			'id' => 436,
			'aluno_id' => 436,
			'escola_nivel_medio_id' => 436,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 436,
			'tipo_nivel_medio_id' => 436
		),
		array(
			'id' => 437,
			'aluno_id' => 437,
			'escola_nivel_medio_id' => 437,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 437,
			'tipo_nivel_medio_id' => 437
		),
		array(
			'id' => 438,
			'aluno_id' => 438,
			'escola_nivel_medio_id' => 438,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 438,
			'tipo_nivel_medio_id' => 438
		),
		array(
			'id' => 439,
			'aluno_id' => 439,
			'escola_nivel_medio_id' => 439,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 439,
			'tipo_nivel_medio_id' => 439
		),
		array(
			'id' => 440,
			'aluno_id' => 440,
			'escola_nivel_medio_id' => 440,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 440,
			'tipo_nivel_medio_id' => 440
		),
		array(
			'id' => 441,
			'aluno_id' => 441,
			'escola_nivel_medio_id' => 441,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 441,
			'tipo_nivel_medio_id' => 441
		),
		array(
			'id' => 442,
			'aluno_id' => 442,
			'escola_nivel_medio_id' => 442,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 442,
			'tipo_nivel_medio_id' => 442
		),
		array(
			'id' => 443,
			'aluno_id' => 443,
			'escola_nivel_medio_id' => 443,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 443,
			'tipo_nivel_medio_id' => 443
		),
		array(
			'id' => 444,
			'aluno_id' => 444,
			'escola_nivel_medio_id' => 444,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 444,
			'tipo_nivel_medio_id' => 444
		),
		array(
			'id' => 445,
			'aluno_id' => 445,
			'escola_nivel_medio_id' => 445,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 445,
			'tipo_nivel_medio_id' => 445
		),
		array(
			'id' => 446,
			'aluno_id' => 446,
			'escola_nivel_medio_id' => 446,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 446,
			'tipo_nivel_medio_id' => 446
		),
		array(
			'id' => 447,
			'aluno_id' => 447,
			'escola_nivel_medio_id' => 447,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 447,
			'tipo_nivel_medio_id' => 447
		),
		array(
			'id' => 448,
			'aluno_id' => 448,
			'escola_nivel_medio_id' => 448,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 448,
			'tipo_nivel_medio_id' => 448
		),
		array(
			'id' => 449,
			'aluno_id' => 449,
			'escola_nivel_medio_id' => 449,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 449,
			'tipo_nivel_medio_id' => 449
		),
		array(
			'id' => 450,
			'aluno_id' => 450,
			'escola_nivel_medio_id' => 450,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 450,
			'tipo_nivel_medio_id' => 450
		),
		array(
			'id' => 451,
			'aluno_id' => 451,
			'escola_nivel_medio_id' => 451,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 451,
			'tipo_nivel_medio_id' => 451
		),
		array(
			'id' => 452,
			'aluno_id' => 452,
			'escola_nivel_medio_id' => 452,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 452,
			'tipo_nivel_medio_id' => 452
		),
		array(
			'id' => 453,
			'aluno_id' => 453,
			'escola_nivel_medio_id' => 453,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 453,
			'tipo_nivel_medio_id' => 453
		),
		array(
			'id' => 454,
			'aluno_id' => 454,
			'escola_nivel_medio_id' => 454,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 454,
			'tipo_nivel_medio_id' => 454
		),
		array(
			'id' => 455,
			'aluno_id' => 455,
			'escola_nivel_medio_id' => 455,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 455,
			'tipo_nivel_medio_id' => 455
		),
		array(
			'id' => 456,
			'aluno_id' => 456,
			'escola_nivel_medio_id' => 456,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 456,
			'tipo_nivel_medio_id' => 456
		),
		array(
			'id' => 457,
			'aluno_id' => 457,
			'escola_nivel_medio_id' => 457,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 457,
			'tipo_nivel_medio_id' => 457
		),
		array(
			'id' => 458,
			'aluno_id' => 458,
			'escola_nivel_medio_id' => 458,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 458,
			'tipo_nivel_medio_id' => 458
		),
		array(
			'id' => 459,
			'aluno_id' => 459,
			'escola_nivel_medio_id' => 459,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 459,
			'tipo_nivel_medio_id' => 459
		),
		array(
			'id' => 460,
			'aluno_id' => 460,
			'escola_nivel_medio_id' => 460,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 460,
			'tipo_nivel_medio_id' => 460
		),
		array(
			'id' => 461,
			'aluno_id' => 461,
			'escola_nivel_medio_id' => 461,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 461,
			'tipo_nivel_medio_id' => 461
		),
		array(
			'id' => 462,
			'aluno_id' => 462,
			'escola_nivel_medio_id' => 462,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 462,
			'tipo_nivel_medio_id' => 462
		),
		array(
			'id' => 463,
			'aluno_id' => 463,
			'escola_nivel_medio_id' => 463,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 463,
			'tipo_nivel_medio_id' => 463
		),
		array(
			'id' => 464,
			'aluno_id' => 464,
			'escola_nivel_medio_id' => 464,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 464,
			'tipo_nivel_medio_id' => 464
		),
		array(
			'id' => 465,
			'aluno_id' => 465,
			'escola_nivel_medio_id' => 465,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 465,
			'tipo_nivel_medio_id' => 465
		),
		array(
			'id' => 466,
			'aluno_id' => 466,
			'escola_nivel_medio_id' => 466,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 466,
			'tipo_nivel_medio_id' => 466
		),
		array(
			'id' => 467,
			'aluno_id' => 467,
			'escola_nivel_medio_id' => 467,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 467,
			'tipo_nivel_medio_id' => 467
		),
		array(
			'id' => 468,
			'aluno_id' => 468,
			'escola_nivel_medio_id' => 468,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 468,
			'tipo_nivel_medio_id' => 468
		),
		array(
			'id' => 469,
			'aluno_id' => 469,
			'escola_nivel_medio_id' => 469,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 469,
			'tipo_nivel_medio_id' => 469
		),
		array(
			'id' => 470,
			'aluno_id' => 470,
			'escola_nivel_medio_id' => 470,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 470,
			'tipo_nivel_medio_id' => 470
		),
		array(
			'id' => 471,
			'aluno_id' => 471,
			'escola_nivel_medio_id' => 471,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 471,
			'tipo_nivel_medio_id' => 471
		),
		array(
			'id' => 472,
			'aluno_id' => 472,
			'escola_nivel_medio_id' => 472,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 472,
			'tipo_nivel_medio_id' => 472
		),
		array(
			'id' => 473,
			'aluno_id' => 473,
			'escola_nivel_medio_id' => 473,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 473,
			'tipo_nivel_medio_id' => 473
		),
		array(
			'id' => 474,
			'aluno_id' => 474,
			'escola_nivel_medio_id' => 474,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 474,
			'tipo_nivel_medio_id' => 474
		),
		array(
			'id' => 475,
			'aluno_id' => 475,
			'escola_nivel_medio_id' => 475,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 475,
			'tipo_nivel_medio_id' => 475
		),
		array(
			'id' => 476,
			'aluno_id' => 476,
			'escola_nivel_medio_id' => 476,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 476,
			'tipo_nivel_medio_id' => 476
		),
		array(
			'id' => 477,
			'aluno_id' => 477,
			'escola_nivel_medio_id' => 477,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 477,
			'tipo_nivel_medio_id' => 477
		),
		array(
			'id' => 478,
			'aluno_id' => 478,
			'escola_nivel_medio_id' => 478,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 478,
			'tipo_nivel_medio_id' => 478
		),
		array(
			'id' => 479,
			'aluno_id' => 479,
			'escola_nivel_medio_id' => 479,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 479,
			'tipo_nivel_medio_id' => 479
		),
		array(
			'id' => 480,
			'aluno_id' => 480,
			'escola_nivel_medio_id' => 480,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 480,
			'tipo_nivel_medio_id' => 480
		),
		array(
			'id' => 481,
			'aluno_id' => 481,
			'escola_nivel_medio_id' => 481,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 481,
			'tipo_nivel_medio_id' => 481
		),
		array(
			'id' => 482,
			'aluno_id' => 482,
			'escola_nivel_medio_id' => 482,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 482,
			'tipo_nivel_medio_id' => 482
		),
		array(
			'id' => 483,
			'aluno_id' => 483,
			'escola_nivel_medio_id' => 483,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 483,
			'tipo_nivel_medio_id' => 483
		),
		array(
			'id' => 484,
			'aluno_id' => 484,
			'escola_nivel_medio_id' => 484,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 484,
			'tipo_nivel_medio_id' => 484
		),
		array(
			'id' => 485,
			'aluno_id' => 485,
			'escola_nivel_medio_id' => 485,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 485,
			'tipo_nivel_medio_id' => 485
		),
		array(
			'id' => 486,
			'aluno_id' => 486,
			'escola_nivel_medio_id' => 486,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 486,
			'tipo_nivel_medio_id' => 486
		),
		array(
			'id' => 487,
			'aluno_id' => 487,
			'escola_nivel_medio_id' => 487,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 487,
			'tipo_nivel_medio_id' => 487
		),
		array(
			'id' => 488,
			'aluno_id' => 488,
			'escola_nivel_medio_id' => 488,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 488,
			'tipo_nivel_medio_id' => 488
		),
		array(
			'id' => 489,
			'aluno_id' => 489,
			'escola_nivel_medio_id' => 489,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 489,
			'tipo_nivel_medio_id' => 489
		),
		array(
			'id' => 490,
			'aluno_id' => 490,
			'escola_nivel_medio_id' => 490,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 490,
			'tipo_nivel_medio_id' => 490
		),
		array(
			'id' => 491,
			'aluno_id' => 491,
			'escola_nivel_medio_id' => 491,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 491,
			'tipo_nivel_medio_id' => 491
		),
		array(
			'id' => 492,
			'aluno_id' => 492,
			'escola_nivel_medio_id' => 492,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 492,
			'tipo_nivel_medio_id' => 492
		),
		array(
			'id' => 493,
			'aluno_id' => 493,
			'escola_nivel_medio_id' => 493,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 493,
			'tipo_nivel_medio_id' => 493
		),
		array(
			'id' => 494,
			'aluno_id' => 494,
			'escola_nivel_medio_id' => 494,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 494,
			'tipo_nivel_medio_id' => 494
		),
		array(
			'id' => 495,
			'aluno_id' => 495,
			'escola_nivel_medio_id' => 495,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 495,
			'tipo_nivel_medio_id' => 495
		),
		array(
			'id' => 496,
			'aluno_id' => 496,
			'escola_nivel_medio_id' => 496,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 496,
			'tipo_nivel_medio_id' => 496
		),
		array(
			'id' => 497,
			'aluno_id' => 497,
			'escola_nivel_medio_id' => 497,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 497,
			'tipo_nivel_medio_id' => 497
		),
		array(
			'id' => 498,
			'aluno_id' => 498,
			'escola_nivel_medio_id' => 498,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 498,
			'tipo_nivel_medio_id' => 498
		),
		array(
			'id' => 499,
			'aluno_id' => 499,
			'escola_nivel_medio_id' => 499,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 499,
			'tipo_nivel_medio_id' => 499
		),
		array(
			'id' => 500,
			'aluno_id' => 500,
			'escola_nivel_medio_id' => 500,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 500,
			'tipo_nivel_medio_id' => 500
		),
		array(
			'id' => 501,
			'aluno_id' => 501,
			'escola_nivel_medio_id' => 501,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 501,
			'tipo_nivel_medio_id' => 501
		),
		array(
			'id' => 502,
			'aluno_id' => 502,
			'escola_nivel_medio_id' => 502,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 502,
			'tipo_nivel_medio_id' => 502
		),
		array(
			'id' => 503,
			'aluno_id' => 503,
			'escola_nivel_medio_id' => 503,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 503,
			'tipo_nivel_medio_id' => 503
		),
		array(
			'id' => 504,
			'aluno_id' => 504,
			'escola_nivel_medio_id' => 504,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 504,
			'tipo_nivel_medio_id' => 504
		),
		array(
			'id' => 505,
			'aluno_id' => 505,
			'escola_nivel_medio_id' => 505,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 505,
			'tipo_nivel_medio_id' => 505
		),
		array(
			'id' => 506,
			'aluno_id' => 506,
			'escola_nivel_medio_id' => 506,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 506,
			'tipo_nivel_medio_id' => 506
		),
		array(
			'id' => 507,
			'aluno_id' => 507,
			'escola_nivel_medio_id' => 507,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 507,
			'tipo_nivel_medio_id' => 507
		),
		array(
			'id' => 508,
			'aluno_id' => 508,
			'escola_nivel_medio_id' => 508,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 508,
			'tipo_nivel_medio_id' => 508
		),
		array(
			'id' => 509,
			'aluno_id' => 509,
			'escola_nivel_medio_id' => 509,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 509,
			'tipo_nivel_medio_id' => 509
		),
		array(
			'id' => 510,
			'aluno_id' => 510,
			'escola_nivel_medio_id' => 510,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 510,
			'tipo_nivel_medio_id' => 510
		),
		array(
			'id' => 511,
			'aluno_id' => 511,
			'escola_nivel_medio_id' => 511,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 511,
			'tipo_nivel_medio_id' => 511
		),
		array(
			'id' => 512,
			'aluno_id' => 512,
			'escola_nivel_medio_id' => 512,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 512,
			'tipo_nivel_medio_id' => 512
		),
		array(
			'id' => 513,
			'aluno_id' => 513,
			'escola_nivel_medio_id' => 513,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 513,
			'tipo_nivel_medio_id' => 513
		),
		array(
			'id' => 514,
			'aluno_id' => 514,
			'escola_nivel_medio_id' => 514,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 514,
			'tipo_nivel_medio_id' => 514
		),
		array(
			'id' => 515,
			'aluno_id' => 515,
			'escola_nivel_medio_id' => 515,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 515,
			'tipo_nivel_medio_id' => 515
		),
		array(
			'id' => 516,
			'aluno_id' => 516,
			'escola_nivel_medio_id' => 516,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 516,
			'tipo_nivel_medio_id' => 516
		),
		array(
			'id' => 517,
			'aluno_id' => 517,
			'escola_nivel_medio_id' => 517,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 517,
			'tipo_nivel_medio_id' => 517
		),
		array(
			'id' => 518,
			'aluno_id' => 518,
			'escola_nivel_medio_id' => 518,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 518,
			'tipo_nivel_medio_id' => 518
		),
		array(
			'id' => 519,
			'aluno_id' => 519,
			'escola_nivel_medio_id' => 519,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 519,
			'tipo_nivel_medio_id' => 519
		),
		array(
			'id' => 520,
			'aluno_id' => 520,
			'escola_nivel_medio_id' => 520,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 520,
			'tipo_nivel_medio_id' => 520
		),
		array(
			'id' => 521,
			'aluno_id' => 521,
			'escola_nivel_medio_id' => 521,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 521,
			'tipo_nivel_medio_id' => 521
		),
		array(
			'id' => 522,
			'aluno_id' => 522,
			'escola_nivel_medio_id' => 522,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 522,
			'tipo_nivel_medio_id' => 522
		),
		array(
			'id' => 523,
			'aluno_id' => 523,
			'escola_nivel_medio_id' => 523,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 523,
			'tipo_nivel_medio_id' => 523
		),
		array(
			'id' => 524,
			'aluno_id' => 524,
			'escola_nivel_medio_id' => 524,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 524,
			'tipo_nivel_medio_id' => 524
		),
		array(
			'id' => 525,
			'aluno_id' => 525,
			'escola_nivel_medio_id' => 525,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 525,
			'tipo_nivel_medio_id' => 525
		),
		array(
			'id' => 526,
			'aluno_id' => 526,
			'escola_nivel_medio_id' => 526,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 526,
			'tipo_nivel_medio_id' => 526
		),
		array(
			'id' => 527,
			'aluno_id' => 527,
			'escola_nivel_medio_id' => 527,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 527,
			'tipo_nivel_medio_id' => 527
		),
		array(
			'id' => 528,
			'aluno_id' => 528,
			'escola_nivel_medio_id' => 528,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 528,
			'tipo_nivel_medio_id' => 528
		),
		array(
			'id' => 529,
			'aluno_id' => 529,
			'escola_nivel_medio_id' => 529,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 529,
			'tipo_nivel_medio_id' => 529
		),
		array(
			'id' => 530,
			'aluno_id' => 530,
			'escola_nivel_medio_id' => 530,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 530,
			'tipo_nivel_medio_id' => 530
		),
		array(
			'id' => 531,
			'aluno_id' => 531,
			'escola_nivel_medio_id' => 531,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 531,
			'tipo_nivel_medio_id' => 531
		),
		array(
			'id' => 532,
			'aluno_id' => 532,
			'escola_nivel_medio_id' => 532,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 532,
			'tipo_nivel_medio_id' => 532
		),
		array(
			'id' => 533,
			'aluno_id' => 533,
			'escola_nivel_medio_id' => 533,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 533,
			'tipo_nivel_medio_id' => 533
		),
		array(
			'id' => 534,
			'aluno_id' => 534,
			'escola_nivel_medio_id' => 534,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 534,
			'tipo_nivel_medio_id' => 534
		),
		array(
			'id' => 535,
			'aluno_id' => 535,
			'escola_nivel_medio_id' => 535,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 535,
			'tipo_nivel_medio_id' => 535
		),
		array(
			'id' => 536,
			'aluno_id' => 536,
			'escola_nivel_medio_id' => 536,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 536,
			'tipo_nivel_medio_id' => 536
		),
		array(
			'id' => 537,
			'aluno_id' => 537,
			'escola_nivel_medio_id' => 537,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 537,
			'tipo_nivel_medio_id' => 537
		),
		array(
			'id' => 538,
			'aluno_id' => 538,
			'escola_nivel_medio_id' => 538,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 538,
			'tipo_nivel_medio_id' => 538
		),
		array(
			'id' => 539,
			'aluno_id' => 539,
			'escola_nivel_medio_id' => 539,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 539,
			'tipo_nivel_medio_id' => 539
		),
		array(
			'id' => 540,
			'aluno_id' => 540,
			'escola_nivel_medio_id' => 540,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 540,
			'tipo_nivel_medio_id' => 540
		),
		array(
			'id' => 541,
			'aluno_id' => 541,
			'escola_nivel_medio_id' => 541,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 541,
			'tipo_nivel_medio_id' => 541
		),
		array(
			'id' => 542,
			'aluno_id' => 542,
			'escola_nivel_medio_id' => 542,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 542,
			'tipo_nivel_medio_id' => 542
		),
		array(
			'id' => 543,
			'aluno_id' => 543,
			'escola_nivel_medio_id' => 543,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 543,
			'tipo_nivel_medio_id' => 543
		),
		array(
			'id' => 544,
			'aluno_id' => 544,
			'escola_nivel_medio_id' => 544,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 544,
			'tipo_nivel_medio_id' => 544
		),
		array(
			'id' => 545,
			'aluno_id' => 545,
			'escola_nivel_medio_id' => 545,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 545,
			'tipo_nivel_medio_id' => 545
		),
		array(
			'id' => 546,
			'aluno_id' => 546,
			'escola_nivel_medio_id' => 546,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 546,
			'tipo_nivel_medio_id' => 546
		),
		array(
			'id' => 547,
			'aluno_id' => 547,
			'escola_nivel_medio_id' => 547,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 547,
			'tipo_nivel_medio_id' => 547
		),
		array(
			'id' => 548,
			'aluno_id' => 548,
			'escola_nivel_medio_id' => 548,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 548,
			'tipo_nivel_medio_id' => 548
		),
		array(
			'id' => 549,
			'aluno_id' => 549,
			'escola_nivel_medio_id' => 549,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 549,
			'tipo_nivel_medio_id' => 549
		),
		array(
			'id' => 550,
			'aluno_id' => 550,
			'escola_nivel_medio_id' => 550,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 550,
			'tipo_nivel_medio_id' => 550
		),
		array(
			'id' => 551,
			'aluno_id' => 551,
			'escola_nivel_medio_id' => 551,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 551,
			'tipo_nivel_medio_id' => 551
		),
		array(
			'id' => 552,
			'aluno_id' => 552,
			'escola_nivel_medio_id' => 552,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 552,
			'tipo_nivel_medio_id' => 552
		),
		array(
			'id' => 553,
			'aluno_id' => 553,
			'escola_nivel_medio_id' => 553,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 553,
			'tipo_nivel_medio_id' => 553
		),
		array(
			'id' => 554,
			'aluno_id' => 554,
			'escola_nivel_medio_id' => 554,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 554,
			'tipo_nivel_medio_id' => 554
		),
		array(
			'id' => 555,
			'aluno_id' => 555,
			'escola_nivel_medio_id' => 555,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 555,
			'tipo_nivel_medio_id' => 555
		),
		array(
			'id' => 556,
			'aluno_id' => 556,
			'escola_nivel_medio_id' => 556,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 556,
			'tipo_nivel_medio_id' => 556
		),
		array(
			'id' => 557,
			'aluno_id' => 557,
			'escola_nivel_medio_id' => 557,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 557,
			'tipo_nivel_medio_id' => 557
		),
		array(
			'id' => 558,
			'aluno_id' => 558,
			'escola_nivel_medio_id' => 558,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 558,
			'tipo_nivel_medio_id' => 558
		),
		array(
			'id' => 559,
			'aluno_id' => 559,
			'escola_nivel_medio_id' => 559,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 559,
			'tipo_nivel_medio_id' => 559
		),
		array(
			'id' => 560,
			'aluno_id' => 560,
			'escola_nivel_medio_id' => 560,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 560,
			'tipo_nivel_medio_id' => 560
		),
		array(
			'id' => 561,
			'aluno_id' => 561,
			'escola_nivel_medio_id' => 561,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 561,
			'tipo_nivel_medio_id' => 561
		),
		array(
			'id' => 562,
			'aluno_id' => 562,
			'escola_nivel_medio_id' => 562,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 562,
			'tipo_nivel_medio_id' => 562
		),
		array(
			'id' => 563,
			'aluno_id' => 563,
			'escola_nivel_medio_id' => 563,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 563,
			'tipo_nivel_medio_id' => 563
		),
		array(
			'id' => 564,
			'aluno_id' => 564,
			'escola_nivel_medio_id' => 564,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 564,
			'tipo_nivel_medio_id' => 564
		),
		array(
			'id' => 565,
			'aluno_id' => 565,
			'escola_nivel_medio_id' => 565,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 565,
			'tipo_nivel_medio_id' => 565
		),
		array(
			'id' => 566,
			'aluno_id' => 566,
			'escola_nivel_medio_id' => 566,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 566,
			'tipo_nivel_medio_id' => 566
		),
		array(
			'id' => 567,
			'aluno_id' => 567,
			'escola_nivel_medio_id' => 567,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 567,
			'tipo_nivel_medio_id' => 567
		),
		array(
			'id' => 568,
			'aluno_id' => 568,
			'escola_nivel_medio_id' => 568,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 568,
			'tipo_nivel_medio_id' => 568
		),
		array(
			'id' => 569,
			'aluno_id' => 569,
			'escola_nivel_medio_id' => 569,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 569,
			'tipo_nivel_medio_id' => 569
		),
		array(
			'id' => 570,
			'aluno_id' => 570,
			'escola_nivel_medio_id' => 570,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 570,
			'tipo_nivel_medio_id' => 570
		),
		array(
			'id' => 571,
			'aluno_id' => 571,
			'escola_nivel_medio_id' => 571,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 571,
			'tipo_nivel_medio_id' => 571
		),
		array(
			'id' => 572,
			'aluno_id' => 572,
			'escola_nivel_medio_id' => 572,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 572,
			'tipo_nivel_medio_id' => 572
		),
		array(
			'id' => 573,
			'aluno_id' => 573,
			'escola_nivel_medio_id' => 573,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 573,
			'tipo_nivel_medio_id' => 573
		),
		array(
			'id' => 574,
			'aluno_id' => 574,
			'escola_nivel_medio_id' => 574,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 574,
			'tipo_nivel_medio_id' => 574
		),
		array(
			'id' => 575,
			'aluno_id' => 575,
			'escola_nivel_medio_id' => 575,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 575,
			'tipo_nivel_medio_id' => 575
		),
		array(
			'id' => 576,
			'aluno_id' => 576,
			'escola_nivel_medio_id' => 576,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 576,
			'tipo_nivel_medio_id' => 576
		),
		array(
			'id' => 577,
			'aluno_id' => 577,
			'escola_nivel_medio_id' => 577,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 577,
			'tipo_nivel_medio_id' => 577
		),
		array(
			'id' => 578,
			'aluno_id' => 578,
			'escola_nivel_medio_id' => 578,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 578,
			'tipo_nivel_medio_id' => 578
		),
		array(
			'id' => 579,
			'aluno_id' => 579,
			'escola_nivel_medio_id' => 579,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 579,
			'tipo_nivel_medio_id' => 579
		),
		array(
			'id' => 580,
			'aluno_id' => 580,
			'escola_nivel_medio_id' => 580,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 580,
			'tipo_nivel_medio_id' => 580
		),
		array(
			'id' => 581,
			'aluno_id' => 581,
			'escola_nivel_medio_id' => 581,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 581,
			'tipo_nivel_medio_id' => 581
		),
		array(
			'id' => 582,
			'aluno_id' => 582,
			'escola_nivel_medio_id' => 582,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 582,
			'tipo_nivel_medio_id' => 582
		),
		array(
			'id' => 583,
			'aluno_id' => 583,
			'escola_nivel_medio_id' => 583,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 583,
			'tipo_nivel_medio_id' => 583
		),
		array(
			'id' => 584,
			'aluno_id' => 584,
			'escola_nivel_medio_id' => 584,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 584,
			'tipo_nivel_medio_id' => 584
		),
		array(
			'id' => 585,
			'aluno_id' => 585,
			'escola_nivel_medio_id' => 585,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 585,
			'tipo_nivel_medio_id' => 585
		),
		array(
			'id' => 586,
			'aluno_id' => 586,
			'escola_nivel_medio_id' => 586,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 586,
			'tipo_nivel_medio_id' => 586
		),
		array(
			'id' => 587,
			'aluno_id' => 587,
			'escola_nivel_medio_id' => 587,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 587,
			'tipo_nivel_medio_id' => 587
		),
		array(
			'id' => 588,
			'aluno_id' => 588,
			'escola_nivel_medio_id' => 588,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 588,
			'tipo_nivel_medio_id' => 588
		),
		array(
			'id' => 589,
			'aluno_id' => 589,
			'escola_nivel_medio_id' => 589,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 589,
			'tipo_nivel_medio_id' => 589
		),
		array(
			'id' => 590,
			'aluno_id' => 590,
			'escola_nivel_medio_id' => 590,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 590,
			'tipo_nivel_medio_id' => 590
		),
		array(
			'id' => 591,
			'aluno_id' => 591,
			'escola_nivel_medio_id' => 591,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 591,
			'tipo_nivel_medio_id' => 591
		),
		array(
			'id' => 592,
			'aluno_id' => 592,
			'escola_nivel_medio_id' => 592,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 592,
			'tipo_nivel_medio_id' => 592
		),
		array(
			'id' => 593,
			'aluno_id' => 593,
			'escola_nivel_medio_id' => 593,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 593,
			'tipo_nivel_medio_id' => 593
		),
		array(
			'id' => 594,
			'aluno_id' => 594,
			'escola_nivel_medio_id' => 594,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 594,
			'tipo_nivel_medio_id' => 594
		),
		array(
			'id' => 595,
			'aluno_id' => 595,
			'escola_nivel_medio_id' => 595,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 595,
			'tipo_nivel_medio_id' => 595
		),
		array(
			'id' => 596,
			'aluno_id' => 596,
			'escola_nivel_medio_id' => 596,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 596,
			'tipo_nivel_medio_id' => 596
		),
		array(
			'id' => 597,
			'aluno_id' => 597,
			'escola_nivel_medio_id' => 597,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 597,
			'tipo_nivel_medio_id' => 597
		),
		array(
			'id' => 598,
			'aluno_id' => 598,
			'escola_nivel_medio_id' => 598,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 598,
			'tipo_nivel_medio_id' => 598
		),
		array(
			'id' => 599,
			'aluno_id' => 599,
			'escola_nivel_medio_id' => 599,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 599,
			'tipo_nivel_medio_id' => 599
		),
		array(
			'id' => 600,
			'aluno_id' => 600,
			'escola_nivel_medio_id' => 600,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 600,
			'tipo_nivel_medio_id' => 600
		),
		array(
			'id' => 601,
			'aluno_id' => 601,
			'escola_nivel_medio_id' => 601,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 601,
			'tipo_nivel_medio_id' => 601
		),
		array(
			'id' => 602,
			'aluno_id' => 602,
			'escola_nivel_medio_id' => 602,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 602,
			'tipo_nivel_medio_id' => 602
		),
		array(
			'id' => 603,
			'aluno_id' => 603,
			'escola_nivel_medio_id' => 603,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 603,
			'tipo_nivel_medio_id' => 603
		),
		array(
			'id' => 604,
			'aluno_id' => 604,
			'escola_nivel_medio_id' => 604,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 604,
			'tipo_nivel_medio_id' => 604
		),
		array(
			'id' => 605,
			'aluno_id' => 605,
			'escola_nivel_medio_id' => 605,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 605,
			'tipo_nivel_medio_id' => 605
		),
		array(
			'id' => 606,
			'aluno_id' => 606,
			'escola_nivel_medio_id' => 606,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 606,
			'tipo_nivel_medio_id' => 606
		),
		array(
			'id' => 607,
			'aluno_id' => 607,
			'escola_nivel_medio_id' => 607,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 607,
			'tipo_nivel_medio_id' => 607
		),
		array(
			'id' => 608,
			'aluno_id' => 608,
			'escola_nivel_medio_id' => 608,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 608,
			'tipo_nivel_medio_id' => 608
		),
		array(
			'id' => 609,
			'aluno_id' => 609,
			'escola_nivel_medio_id' => 609,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 609,
			'tipo_nivel_medio_id' => 609
		),
		array(
			'id' => 610,
			'aluno_id' => 610,
			'escola_nivel_medio_id' => 610,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 610,
			'tipo_nivel_medio_id' => 610
		),
		array(
			'id' => 611,
			'aluno_id' => 611,
			'escola_nivel_medio_id' => 611,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 611,
			'tipo_nivel_medio_id' => 611
		),
		array(
			'id' => 612,
			'aluno_id' => 612,
			'escola_nivel_medio_id' => 612,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 612,
			'tipo_nivel_medio_id' => 612
		),
		array(
			'id' => 613,
			'aluno_id' => 613,
			'escola_nivel_medio_id' => 613,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 613,
			'tipo_nivel_medio_id' => 613
		),
		array(
			'id' => 614,
			'aluno_id' => 614,
			'escola_nivel_medio_id' => 614,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 614,
			'tipo_nivel_medio_id' => 614
		),
		array(
			'id' => 615,
			'aluno_id' => 615,
			'escola_nivel_medio_id' => 615,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 615,
			'tipo_nivel_medio_id' => 615
		),
		array(
			'id' => 616,
			'aluno_id' => 616,
			'escola_nivel_medio_id' => 616,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 616,
			'tipo_nivel_medio_id' => 616
		),
		array(
			'id' => 617,
			'aluno_id' => 617,
			'escola_nivel_medio_id' => 617,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 617,
			'tipo_nivel_medio_id' => 617
		),
		array(
			'id' => 618,
			'aluno_id' => 618,
			'escola_nivel_medio_id' => 618,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 618,
			'tipo_nivel_medio_id' => 618
		),
		array(
			'id' => 619,
			'aluno_id' => 619,
			'escola_nivel_medio_id' => 619,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 619,
			'tipo_nivel_medio_id' => 619
		),
		array(
			'id' => 620,
			'aluno_id' => 620,
			'escola_nivel_medio_id' => 620,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 620,
			'tipo_nivel_medio_id' => 620
		),
		array(
			'id' => 621,
			'aluno_id' => 621,
			'escola_nivel_medio_id' => 621,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 621,
			'tipo_nivel_medio_id' => 621
		),
		array(
			'id' => 622,
			'aluno_id' => 622,
			'escola_nivel_medio_id' => 622,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 622,
			'tipo_nivel_medio_id' => 622
		),
		array(
			'id' => 623,
			'aluno_id' => 623,
			'escola_nivel_medio_id' => 623,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 623,
			'tipo_nivel_medio_id' => 623
		),
		array(
			'id' => 624,
			'aluno_id' => 624,
			'escola_nivel_medio_id' => 624,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 624,
			'tipo_nivel_medio_id' => 624
		),
		array(
			'id' => 625,
			'aluno_id' => 625,
			'escola_nivel_medio_id' => 625,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 625,
			'tipo_nivel_medio_id' => 625
		),
		array(
			'id' => 626,
			'aluno_id' => 626,
			'escola_nivel_medio_id' => 626,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 626,
			'tipo_nivel_medio_id' => 626
		),
		array(
			'id' => 627,
			'aluno_id' => 627,
			'escola_nivel_medio_id' => 627,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 627,
			'tipo_nivel_medio_id' => 627
		),
		array(
			'id' => 628,
			'aluno_id' => 628,
			'escola_nivel_medio_id' => 628,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 628,
			'tipo_nivel_medio_id' => 628
		),
		array(
			'id' => 629,
			'aluno_id' => 629,
			'escola_nivel_medio_id' => 629,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 629,
			'tipo_nivel_medio_id' => 629
		),
		array(
			'id' => 630,
			'aluno_id' => 630,
			'escola_nivel_medio_id' => 630,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 630,
			'tipo_nivel_medio_id' => 630
		),
		array(
			'id' => 631,
			'aluno_id' => 631,
			'escola_nivel_medio_id' => 631,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 631,
			'tipo_nivel_medio_id' => 631
		),
		array(
			'id' => 632,
			'aluno_id' => 632,
			'escola_nivel_medio_id' => 632,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 632,
			'tipo_nivel_medio_id' => 632
		),
		array(
			'id' => 633,
			'aluno_id' => 633,
			'escola_nivel_medio_id' => 633,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 633,
			'tipo_nivel_medio_id' => 633
		),
		array(
			'id' => 634,
			'aluno_id' => 634,
			'escola_nivel_medio_id' => 634,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 634,
			'tipo_nivel_medio_id' => 634
		),
		array(
			'id' => 635,
			'aluno_id' => 635,
			'escola_nivel_medio_id' => 635,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 635,
			'tipo_nivel_medio_id' => 635
		),
		array(
			'id' => 636,
			'aluno_id' => 636,
			'escola_nivel_medio_id' => 636,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 636,
			'tipo_nivel_medio_id' => 636
		),
		array(
			'id' => 637,
			'aluno_id' => 637,
			'escola_nivel_medio_id' => 637,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 637,
			'tipo_nivel_medio_id' => 637
		),
		array(
			'id' => 638,
			'aluno_id' => 638,
			'escola_nivel_medio_id' => 638,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 638,
			'tipo_nivel_medio_id' => 638
		),
		array(
			'id' => 639,
			'aluno_id' => 639,
			'escola_nivel_medio_id' => 639,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 639,
			'tipo_nivel_medio_id' => 639
		),
		array(
			'id' => 640,
			'aluno_id' => 640,
			'escola_nivel_medio_id' => 640,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 640,
			'tipo_nivel_medio_id' => 640
		),
		array(
			'id' => 641,
			'aluno_id' => 641,
			'escola_nivel_medio_id' => 641,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 641,
			'tipo_nivel_medio_id' => 641
		),
		array(
			'id' => 642,
			'aluno_id' => 642,
			'escola_nivel_medio_id' => 642,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 642,
			'tipo_nivel_medio_id' => 642
		),
		array(
			'id' => 643,
			'aluno_id' => 643,
			'escola_nivel_medio_id' => 643,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 643,
			'tipo_nivel_medio_id' => 643
		),
		array(
			'id' => 644,
			'aluno_id' => 644,
			'escola_nivel_medio_id' => 644,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 644,
			'tipo_nivel_medio_id' => 644
		),
		array(
			'id' => 645,
			'aluno_id' => 645,
			'escola_nivel_medio_id' => 645,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 645,
			'tipo_nivel_medio_id' => 645
		),
		array(
			'id' => 646,
			'aluno_id' => 646,
			'escola_nivel_medio_id' => 646,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 646,
			'tipo_nivel_medio_id' => 646
		),
		array(
			'id' => 647,
			'aluno_id' => 647,
			'escola_nivel_medio_id' => 647,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 647,
			'tipo_nivel_medio_id' => 647
		),
		array(
			'id' => 648,
			'aluno_id' => 648,
			'escola_nivel_medio_id' => 648,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 648,
			'tipo_nivel_medio_id' => 648
		),
		array(
			'id' => 649,
			'aluno_id' => 649,
			'escola_nivel_medio_id' => 649,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 649,
			'tipo_nivel_medio_id' => 649
		),
		array(
			'id' => 650,
			'aluno_id' => 650,
			'escola_nivel_medio_id' => 650,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 650,
			'tipo_nivel_medio_id' => 650
		),
		array(
			'id' => 651,
			'aluno_id' => 651,
			'escola_nivel_medio_id' => 651,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 651,
			'tipo_nivel_medio_id' => 651
		),
		array(
			'id' => 652,
			'aluno_id' => 652,
			'escola_nivel_medio_id' => 652,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 652,
			'tipo_nivel_medio_id' => 652
		),
		array(
			'id' => 653,
			'aluno_id' => 653,
			'escola_nivel_medio_id' => 653,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 653,
			'tipo_nivel_medio_id' => 653
		),
		array(
			'id' => 654,
			'aluno_id' => 654,
			'escola_nivel_medio_id' => 654,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 654,
			'tipo_nivel_medio_id' => 654
		),
		array(
			'id' => 655,
			'aluno_id' => 655,
			'escola_nivel_medio_id' => 655,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 655,
			'tipo_nivel_medio_id' => 655
		),
		array(
			'id' => 656,
			'aluno_id' => 656,
			'escola_nivel_medio_id' => 656,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 656,
			'tipo_nivel_medio_id' => 656
		),
		array(
			'id' => 657,
			'aluno_id' => 657,
			'escola_nivel_medio_id' => 657,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 657,
			'tipo_nivel_medio_id' => 657
		),
		array(
			'id' => 658,
			'aluno_id' => 658,
			'escola_nivel_medio_id' => 658,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 658,
			'tipo_nivel_medio_id' => 658
		),
		array(
			'id' => 659,
			'aluno_id' => 659,
			'escola_nivel_medio_id' => 659,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 659,
			'tipo_nivel_medio_id' => 659
		),
		array(
			'id' => 660,
			'aluno_id' => 660,
			'escola_nivel_medio_id' => 660,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 660,
			'tipo_nivel_medio_id' => 660
		),
		array(
			'id' => 661,
			'aluno_id' => 661,
			'escola_nivel_medio_id' => 661,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 661,
			'tipo_nivel_medio_id' => 661
		),
		array(
			'id' => 662,
			'aluno_id' => 662,
			'escola_nivel_medio_id' => 662,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 662,
			'tipo_nivel_medio_id' => 662
		),
		array(
			'id' => 663,
			'aluno_id' => 663,
			'escola_nivel_medio_id' => 663,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 663,
			'tipo_nivel_medio_id' => 663
		),
		array(
			'id' => 664,
			'aluno_id' => 664,
			'escola_nivel_medio_id' => 664,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 664,
			'tipo_nivel_medio_id' => 664
		),
		array(
			'id' => 665,
			'aluno_id' => 665,
			'escola_nivel_medio_id' => 665,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 665,
			'tipo_nivel_medio_id' => 665
		),
		array(
			'id' => 666,
			'aluno_id' => 666,
			'escola_nivel_medio_id' => 666,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 666,
			'tipo_nivel_medio_id' => 666
		),
		array(
			'id' => 667,
			'aluno_id' => 667,
			'escola_nivel_medio_id' => 667,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 667,
			'tipo_nivel_medio_id' => 667
		),
		array(
			'id' => 668,
			'aluno_id' => 668,
			'escola_nivel_medio_id' => 668,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 668,
			'tipo_nivel_medio_id' => 668
		),
		array(
			'id' => 669,
			'aluno_id' => 669,
			'escola_nivel_medio_id' => 669,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 669,
			'tipo_nivel_medio_id' => 669
		),
		array(
			'id' => 670,
			'aluno_id' => 670,
			'escola_nivel_medio_id' => 670,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 670,
			'tipo_nivel_medio_id' => 670
		),
		array(
			'id' => 671,
			'aluno_id' => 671,
			'escola_nivel_medio_id' => 671,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 671,
			'tipo_nivel_medio_id' => 671
		),
		array(
			'id' => 672,
			'aluno_id' => 672,
			'escola_nivel_medio_id' => 672,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 672,
			'tipo_nivel_medio_id' => 672
		),
		array(
			'id' => 673,
			'aluno_id' => 673,
			'escola_nivel_medio_id' => 673,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 673,
			'tipo_nivel_medio_id' => 673
		),
		array(
			'id' => 674,
			'aluno_id' => 674,
			'escola_nivel_medio_id' => 674,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 674,
			'tipo_nivel_medio_id' => 674
		),
		array(
			'id' => 675,
			'aluno_id' => 675,
			'escola_nivel_medio_id' => 675,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 675,
			'tipo_nivel_medio_id' => 675
		),
		array(
			'id' => 676,
			'aluno_id' => 676,
			'escola_nivel_medio_id' => 676,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 676,
			'tipo_nivel_medio_id' => 676
		),
		array(
			'id' => 677,
			'aluno_id' => 677,
			'escola_nivel_medio_id' => 677,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 677,
			'tipo_nivel_medio_id' => 677
		),
		array(
			'id' => 678,
			'aluno_id' => 678,
			'escola_nivel_medio_id' => 678,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 678,
			'tipo_nivel_medio_id' => 678
		),
		array(
			'id' => 679,
			'aluno_id' => 679,
			'escola_nivel_medio_id' => 679,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 679,
			'tipo_nivel_medio_id' => 679
		),
		array(
			'id' => 680,
			'aluno_id' => 680,
			'escola_nivel_medio_id' => 680,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 680,
			'tipo_nivel_medio_id' => 680
		),
		array(
			'id' => 681,
			'aluno_id' => 681,
			'escola_nivel_medio_id' => 681,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 681,
			'tipo_nivel_medio_id' => 681
		),
		array(
			'id' => 682,
			'aluno_id' => 682,
			'escola_nivel_medio_id' => 682,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 682,
			'tipo_nivel_medio_id' => 682
		),
		array(
			'id' => 683,
			'aluno_id' => 683,
			'escola_nivel_medio_id' => 683,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 683,
			'tipo_nivel_medio_id' => 683
		),
		array(
			'id' => 684,
			'aluno_id' => 684,
			'escola_nivel_medio_id' => 684,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 684,
			'tipo_nivel_medio_id' => 684
		),
		array(
			'id' => 685,
			'aluno_id' => 685,
			'escola_nivel_medio_id' => 685,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 685,
			'tipo_nivel_medio_id' => 685
		),
		array(
			'id' => 686,
			'aluno_id' => 686,
			'escola_nivel_medio_id' => 686,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 686,
			'tipo_nivel_medio_id' => 686
		),
		array(
			'id' => 687,
			'aluno_id' => 687,
			'escola_nivel_medio_id' => 687,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 687,
			'tipo_nivel_medio_id' => 687
		),
		array(
			'id' => 688,
			'aluno_id' => 688,
			'escola_nivel_medio_id' => 688,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 688,
			'tipo_nivel_medio_id' => 688
		),
		array(
			'id' => 689,
			'aluno_id' => 689,
			'escola_nivel_medio_id' => 689,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 689,
			'tipo_nivel_medio_id' => 689
		),
		array(
			'id' => 690,
			'aluno_id' => 690,
			'escola_nivel_medio_id' => 690,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 690,
			'tipo_nivel_medio_id' => 690
		),
		array(
			'id' => 691,
			'aluno_id' => 691,
			'escola_nivel_medio_id' => 691,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 691,
			'tipo_nivel_medio_id' => 691
		),
		array(
			'id' => 692,
			'aluno_id' => 692,
			'escola_nivel_medio_id' => 692,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 692,
			'tipo_nivel_medio_id' => 692
		),
		array(
			'id' => 693,
			'aluno_id' => 693,
			'escola_nivel_medio_id' => 693,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 693,
			'tipo_nivel_medio_id' => 693
		),
		array(
			'id' => 694,
			'aluno_id' => 694,
			'escola_nivel_medio_id' => 694,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 694,
			'tipo_nivel_medio_id' => 694
		),
		array(
			'id' => 695,
			'aluno_id' => 695,
			'escola_nivel_medio_id' => 695,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 695,
			'tipo_nivel_medio_id' => 695
		),
		array(
			'id' => 696,
			'aluno_id' => 696,
			'escola_nivel_medio_id' => 696,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 696,
			'tipo_nivel_medio_id' => 696
		),
		array(
			'id' => 697,
			'aluno_id' => 697,
			'escola_nivel_medio_id' => 697,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 697,
			'tipo_nivel_medio_id' => 697
		),
		array(
			'id' => 698,
			'aluno_id' => 698,
			'escola_nivel_medio_id' => 698,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 698,
			'tipo_nivel_medio_id' => 698
		),
		array(
			'id' => 699,
			'aluno_id' => 699,
			'escola_nivel_medio_id' => 699,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 699,
			'tipo_nivel_medio_id' => 699
		),
		array(
			'id' => 700,
			'aluno_id' => 700,
			'escola_nivel_medio_id' => 700,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 700,
			'tipo_nivel_medio_id' => 700
		),
		array(
			'id' => 701,
			'aluno_id' => 701,
			'escola_nivel_medio_id' => 701,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 701,
			'tipo_nivel_medio_id' => 701
		),
		array(
			'id' => 702,
			'aluno_id' => 702,
			'escola_nivel_medio_id' => 702,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 702,
			'tipo_nivel_medio_id' => 702
		),
		array(
			'id' => 703,
			'aluno_id' => 703,
			'escola_nivel_medio_id' => 703,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 703,
			'tipo_nivel_medio_id' => 703
		),
		array(
			'id' => 704,
			'aluno_id' => 704,
			'escola_nivel_medio_id' => 704,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 704,
			'tipo_nivel_medio_id' => 704
		),
		array(
			'id' => 705,
			'aluno_id' => 705,
			'escola_nivel_medio_id' => 705,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 705,
			'tipo_nivel_medio_id' => 705
		),
		array(
			'id' => 706,
			'aluno_id' => 706,
			'escola_nivel_medio_id' => 706,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 706,
			'tipo_nivel_medio_id' => 706
		),
		array(
			'id' => 707,
			'aluno_id' => 707,
			'escola_nivel_medio_id' => 707,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 707,
			'tipo_nivel_medio_id' => 707
		),
		array(
			'id' => 708,
			'aluno_id' => 708,
			'escola_nivel_medio_id' => 708,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 708,
			'tipo_nivel_medio_id' => 708
		),
		array(
			'id' => 709,
			'aluno_id' => 709,
			'escola_nivel_medio_id' => 709,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 709,
			'tipo_nivel_medio_id' => 709
		),
		array(
			'id' => 710,
			'aluno_id' => 710,
			'escola_nivel_medio_id' => 710,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 710,
			'tipo_nivel_medio_id' => 710
		),
		array(
			'id' => 711,
			'aluno_id' => 711,
			'escola_nivel_medio_id' => 711,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 711,
			'tipo_nivel_medio_id' => 711
		),
		array(
			'id' => 712,
			'aluno_id' => 712,
			'escola_nivel_medio_id' => 712,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 712,
			'tipo_nivel_medio_id' => 712
		),
		array(
			'id' => 713,
			'aluno_id' => 713,
			'escola_nivel_medio_id' => 713,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 713,
			'tipo_nivel_medio_id' => 713
		),
		array(
			'id' => 714,
			'aluno_id' => 714,
			'escola_nivel_medio_id' => 714,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 714,
			'tipo_nivel_medio_id' => 714
		),
		array(
			'id' => 715,
			'aluno_id' => 715,
			'escola_nivel_medio_id' => 715,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 715,
			'tipo_nivel_medio_id' => 715
		),
		array(
			'id' => 716,
			'aluno_id' => 716,
			'escola_nivel_medio_id' => 716,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 716,
			'tipo_nivel_medio_id' => 716
		),
		array(
			'id' => 717,
			'aluno_id' => 717,
			'escola_nivel_medio_id' => 717,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 717,
			'tipo_nivel_medio_id' => 717
		),
		array(
			'id' => 718,
			'aluno_id' => 718,
			'escola_nivel_medio_id' => 718,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 718,
			'tipo_nivel_medio_id' => 718
		),
		array(
			'id' => 719,
			'aluno_id' => 719,
			'escola_nivel_medio_id' => 719,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 719,
			'tipo_nivel_medio_id' => 719
		),
		array(
			'id' => 720,
			'aluno_id' => 720,
			'escola_nivel_medio_id' => 720,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 720,
			'tipo_nivel_medio_id' => 720
		),
		array(
			'id' => 721,
			'aluno_id' => 721,
			'escola_nivel_medio_id' => 721,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 721,
			'tipo_nivel_medio_id' => 721
		),
		array(
			'id' => 722,
			'aluno_id' => 722,
			'escola_nivel_medio_id' => 722,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 722,
			'tipo_nivel_medio_id' => 722
		),
		array(
			'id' => 723,
			'aluno_id' => 723,
			'escola_nivel_medio_id' => 723,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 723,
			'tipo_nivel_medio_id' => 723
		),
		array(
			'id' => 724,
			'aluno_id' => 724,
			'escola_nivel_medio_id' => 724,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 724,
			'tipo_nivel_medio_id' => 724
		),
		array(
			'id' => 725,
			'aluno_id' => 725,
			'escola_nivel_medio_id' => 725,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 725,
			'tipo_nivel_medio_id' => 725
		),
		array(
			'id' => 726,
			'aluno_id' => 726,
			'escola_nivel_medio_id' => 726,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 726,
			'tipo_nivel_medio_id' => 726
		),
		array(
			'id' => 727,
			'aluno_id' => 727,
			'escola_nivel_medio_id' => 727,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 727,
			'tipo_nivel_medio_id' => 727
		),
		array(
			'id' => 728,
			'aluno_id' => 728,
			'escola_nivel_medio_id' => 728,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 728,
			'tipo_nivel_medio_id' => 728
		),
		array(
			'id' => 729,
			'aluno_id' => 729,
			'escola_nivel_medio_id' => 729,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 729,
			'tipo_nivel_medio_id' => 729
		),
		array(
			'id' => 730,
			'aluno_id' => 730,
			'escola_nivel_medio_id' => 730,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 730,
			'tipo_nivel_medio_id' => 730
		),
		array(
			'id' => 731,
			'aluno_id' => 731,
			'escola_nivel_medio_id' => 731,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 731,
			'tipo_nivel_medio_id' => 731
		),
		array(
			'id' => 732,
			'aluno_id' => 732,
			'escola_nivel_medio_id' => 732,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 732,
			'tipo_nivel_medio_id' => 732
		),
		array(
			'id' => 733,
			'aluno_id' => 733,
			'escola_nivel_medio_id' => 733,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 733,
			'tipo_nivel_medio_id' => 733
		),
		array(
			'id' => 734,
			'aluno_id' => 734,
			'escola_nivel_medio_id' => 734,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 734,
			'tipo_nivel_medio_id' => 734
		),
		array(
			'id' => 735,
			'aluno_id' => 735,
			'escola_nivel_medio_id' => 735,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 735,
			'tipo_nivel_medio_id' => 735
		),
		array(
			'id' => 736,
			'aluno_id' => 736,
			'escola_nivel_medio_id' => 736,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 736,
			'tipo_nivel_medio_id' => 736
		),
		array(
			'id' => 737,
			'aluno_id' => 737,
			'escola_nivel_medio_id' => 737,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 737,
			'tipo_nivel_medio_id' => 737
		),
		array(
			'id' => 738,
			'aluno_id' => 738,
			'escola_nivel_medio_id' => 738,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 738,
			'tipo_nivel_medio_id' => 738
		),
		array(
			'id' => 739,
			'aluno_id' => 739,
			'escola_nivel_medio_id' => 739,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 739,
			'tipo_nivel_medio_id' => 739
		),
		array(
			'id' => 740,
			'aluno_id' => 740,
			'escola_nivel_medio_id' => 740,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 740,
			'tipo_nivel_medio_id' => 740
		),
		array(
			'id' => 741,
			'aluno_id' => 741,
			'escola_nivel_medio_id' => 741,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 741,
			'tipo_nivel_medio_id' => 741
		),
		array(
			'id' => 742,
			'aluno_id' => 742,
			'escola_nivel_medio_id' => 742,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 742,
			'tipo_nivel_medio_id' => 742
		),
		array(
			'id' => 743,
			'aluno_id' => 743,
			'escola_nivel_medio_id' => 743,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 743,
			'tipo_nivel_medio_id' => 743
		),
		array(
			'id' => 744,
			'aluno_id' => 744,
			'escola_nivel_medio_id' => 744,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 744,
			'tipo_nivel_medio_id' => 744
		),
		array(
			'id' => 745,
			'aluno_id' => 745,
			'escola_nivel_medio_id' => 745,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 745,
			'tipo_nivel_medio_id' => 745
		),
		array(
			'id' => 746,
			'aluno_id' => 746,
			'escola_nivel_medio_id' => 746,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 746,
			'tipo_nivel_medio_id' => 746
		),
		array(
			'id' => 747,
			'aluno_id' => 747,
			'escola_nivel_medio_id' => 747,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 747,
			'tipo_nivel_medio_id' => 747
		),
		array(
			'id' => 748,
			'aluno_id' => 748,
			'escola_nivel_medio_id' => 748,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 748,
			'tipo_nivel_medio_id' => 748
		),
		array(
			'id' => 749,
			'aluno_id' => 749,
			'escola_nivel_medio_id' => 749,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 749,
			'tipo_nivel_medio_id' => 749
		),
		array(
			'id' => 750,
			'aluno_id' => 750,
			'escola_nivel_medio_id' => 750,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 750,
			'tipo_nivel_medio_id' => 750
		),
		array(
			'id' => 751,
			'aluno_id' => 751,
			'escola_nivel_medio_id' => 751,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 751,
			'tipo_nivel_medio_id' => 751
		),
		array(
			'id' => 752,
			'aluno_id' => 752,
			'escola_nivel_medio_id' => 752,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 752,
			'tipo_nivel_medio_id' => 752
		),
		array(
			'id' => 753,
			'aluno_id' => 753,
			'escola_nivel_medio_id' => 753,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 753,
			'tipo_nivel_medio_id' => 753
		),
		array(
			'id' => 754,
			'aluno_id' => 754,
			'escola_nivel_medio_id' => 754,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 754,
			'tipo_nivel_medio_id' => 754
		),
		array(
			'id' => 755,
			'aluno_id' => 755,
			'escola_nivel_medio_id' => 755,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 755,
			'tipo_nivel_medio_id' => 755
		),
		array(
			'id' => 756,
			'aluno_id' => 756,
			'escola_nivel_medio_id' => 756,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 756,
			'tipo_nivel_medio_id' => 756
		),
		array(
			'id' => 757,
			'aluno_id' => 757,
			'escola_nivel_medio_id' => 757,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 757,
			'tipo_nivel_medio_id' => 757
		),
		array(
			'id' => 758,
			'aluno_id' => 758,
			'escola_nivel_medio_id' => 758,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 758,
			'tipo_nivel_medio_id' => 758
		),
		array(
			'id' => 759,
			'aluno_id' => 759,
			'escola_nivel_medio_id' => 759,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 759,
			'tipo_nivel_medio_id' => 759
		),
		array(
			'id' => 760,
			'aluno_id' => 760,
			'escola_nivel_medio_id' => 760,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 760,
			'tipo_nivel_medio_id' => 760
		),
		array(
			'id' => 761,
			'aluno_id' => 761,
			'escola_nivel_medio_id' => 761,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 761,
			'tipo_nivel_medio_id' => 761
		),
		array(
			'id' => 762,
			'aluno_id' => 762,
			'escola_nivel_medio_id' => 762,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 762,
			'tipo_nivel_medio_id' => 762
		),
		array(
			'id' => 763,
			'aluno_id' => 763,
			'escola_nivel_medio_id' => 763,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 763,
			'tipo_nivel_medio_id' => 763
		),
		array(
			'id' => 764,
			'aluno_id' => 764,
			'escola_nivel_medio_id' => 764,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 764,
			'tipo_nivel_medio_id' => 764
		),
		array(
			'id' => 765,
			'aluno_id' => 765,
			'escola_nivel_medio_id' => 765,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 765,
			'tipo_nivel_medio_id' => 765
		),
		array(
			'id' => 766,
			'aluno_id' => 766,
			'escola_nivel_medio_id' => 766,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 766,
			'tipo_nivel_medio_id' => 766
		),
		array(
			'id' => 767,
			'aluno_id' => 767,
			'escola_nivel_medio_id' => 767,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 767,
			'tipo_nivel_medio_id' => 767
		),
		array(
			'id' => 768,
			'aluno_id' => 768,
			'escola_nivel_medio_id' => 768,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 768,
			'tipo_nivel_medio_id' => 768
		),
		array(
			'id' => 769,
			'aluno_id' => 769,
			'escola_nivel_medio_id' => 769,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 769,
			'tipo_nivel_medio_id' => 769
		),
		array(
			'id' => 770,
			'aluno_id' => 770,
			'escola_nivel_medio_id' => 770,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 770,
			'tipo_nivel_medio_id' => 770
		),
		array(
			'id' => 771,
			'aluno_id' => 771,
			'escola_nivel_medio_id' => 771,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 771,
			'tipo_nivel_medio_id' => 771
		),
		array(
			'id' => 772,
			'aluno_id' => 772,
			'escola_nivel_medio_id' => 772,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 772,
			'tipo_nivel_medio_id' => 772
		),
		array(
			'id' => 773,
			'aluno_id' => 773,
			'escola_nivel_medio_id' => 773,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 773,
			'tipo_nivel_medio_id' => 773
		),
		array(
			'id' => 774,
			'aluno_id' => 774,
			'escola_nivel_medio_id' => 774,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 774,
			'tipo_nivel_medio_id' => 774
		),
		array(
			'id' => 775,
			'aluno_id' => 775,
			'escola_nivel_medio_id' => 775,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 775,
			'tipo_nivel_medio_id' => 775
		),
		array(
			'id' => 776,
			'aluno_id' => 776,
			'escola_nivel_medio_id' => 776,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 776,
			'tipo_nivel_medio_id' => 776
		),
		array(
			'id' => 777,
			'aluno_id' => 777,
			'escola_nivel_medio_id' => 777,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 777,
			'tipo_nivel_medio_id' => 777
		),
		array(
			'id' => 778,
			'aluno_id' => 778,
			'escola_nivel_medio_id' => 778,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 778,
			'tipo_nivel_medio_id' => 778
		),
		array(
			'id' => 779,
			'aluno_id' => 779,
			'escola_nivel_medio_id' => 779,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 779,
			'tipo_nivel_medio_id' => 779
		),
		array(
			'id' => 780,
			'aluno_id' => 780,
			'escola_nivel_medio_id' => 780,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 780,
			'tipo_nivel_medio_id' => 780
		),
		array(
			'id' => 781,
			'aluno_id' => 781,
			'escola_nivel_medio_id' => 781,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 781,
			'tipo_nivel_medio_id' => 781
		),
		array(
			'id' => 782,
			'aluno_id' => 782,
			'escola_nivel_medio_id' => 782,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 782,
			'tipo_nivel_medio_id' => 782
		),
		array(
			'id' => 783,
			'aluno_id' => 783,
			'escola_nivel_medio_id' => 783,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 783,
			'tipo_nivel_medio_id' => 783
		),
		array(
			'id' => 784,
			'aluno_id' => 784,
			'escola_nivel_medio_id' => 784,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 784,
			'tipo_nivel_medio_id' => 784
		),
		array(
			'id' => 785,
			'aluno_id' => 785,
			'escola_nivel_medio_id' => 785,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 785,
			'tipo_nivel_medio_id' => 785
		),
		array(
			'id' => 786,
			'aluno_id' => 786,
			'escola_nivel_medio_id' => 786,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 786,
			'tipo_nivel_medio_id' => 786
		),
		array(
			'id' => 787,
			'aluno_id' => 787,
			'escola_nivel_medio_id' => 787,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 787,
			'tipo_nivel_medio_id' => 787
		),
		array(
			'id' => 788,
			'aluno_id' => 788,
			'escola_nivel_medio_id' => 788,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 788,
			'tipo_nivel_medio_id' => 788
		),
		array(
			'id' => 789,
			'aluno_id' => 789,
			'escola_nivel_medio_id' => 789,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 789,
			'tipo_nivel_medio_id' => 789
		),
		array(
			'id' => 790,
			'aluno_id' => 790,
			'escola_nivel_medio_id' => 790,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 790,
			'tipo_nivel_medio_id' => 790
		),
		array(
			'id' => 791,
			'aluno_id' => 791,
			'escola_nivel_medio_id' => 791,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 791,
			'tipo_nivel_medio_id' => 791
		),
		array(
			'id' => 792,
			'aluno_id' => 792,
			'escola_nivel_medio_id' => 792,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 792,
			'tipo_nivel_medio_id' => 792
		),
		array(
			'id' => 793,
			'aluno_id' => 793,
			'escola_nivel_medio_id' => 793,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 793,
			'tipo_nivel_medio_id' => 793
		),
		array(
			'id' => 794,
			'aluno_id' => 794,
			'escola_nivel_medio_id' => 794,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 794,
			'tipo_nivel_medio_id' => 794
		),
		array(
			'id' => 795,
			'aluno_id' => 795,
			'escola_nivel_medio_id' => 795,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 795,
			'tipo_nivel_medio_id' => 795
		),
		array(
			'id' => 796,
			'aluno_id' => 796,
			'escola_nivel_medio_id' => 796,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 796,
			'tipo_nivel_medio_id' => 796
		),
		array(
			'id' => 797,
			'aluno_id' => 797,
			'escola_nivel_medio_id' => 797,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 797,
			'tipo_nivel_medio_id' => 797
		),
		array(
			'id' => 798,
			'aluno_id' => 798,
			'escola_nivel_medio_id' => 798,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 798,
			'tipo_nivel_medio_id' => 798
		),
		array(
			'id' => 799,
			'aluno_id' => 799,
			'escola_nivel_medio_id' => 799,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 799,
			'tipo_nivel_medio_id' => 799
		),
		array(
			'id' => 800,
			'aluno_id' => 800,
			'escola_nivel_medio_id' => 800,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 800,
			'tipo_nivel_medio_id' => 800
		),
		array(
			'id' => 801,
			'aluno_id' => 801,
			'escola_nivel_medio_id' => 801,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 801,
			'tipo_nivel_medio_id' => 801
		),
		array(
			'id' => 802,
			'aluno_id' => 802,
			'escola_nivel_medio_id' => 802,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 802,
			'tipo_nivel_medio_id' => 802
		),
		array(
			'id' => 803,
			'aluno_id' => 803,
			'escola_nivel_medio_id' => 803,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 803,
			'tipo_nivel_medio_id' => 803
		),
		array(
			'id' => 804,
			'aluno_id' => 804,
			'escola_nivel_medio_id' => 804,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 804,
			'tipo_nivel_medio_id' => 804
		),
		array(
			'id' => 805,
			'aluno_id' => 805,
			'escola_nivel_medio_id' => 805,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 805,
			'tipo_nivel_medio_id' => 805
		),
		array(
			'id' => 806,
			'aluno_id' => 806,
			'escola_nivel_medio_id' => 806,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 806,
			'tipo_nivel_medio_id' => 806
		),
		array(
			'id' => 807,
			'aluno_id' => 807,
			'escola_nivel_medio_id' => 807,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 807,
			'tipo_nivel_medio_id' => 807
		),
		array(
			'id' => 808,
			'aluno_id' => 808,
			'escola_nivel_medio_id' => 808,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 808,
			'tipo_nivel_medio_id' => 808
		),
		array(
			'id' => 809,
			'aluno_id' => 809,
			'escola_nivel_medio_id' => 809,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 809,
			'tipo_nivel_medio_id' => 809
		),
		array(
			'id' => 810,
			'aluno_id' => 810,
			'escola_nivel_medio_id' => 810,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 810,
			'tipo_nivel_medio_id' => 810
		),
		array(
			'id' => 811,
			'aluno_id' => 811,
			'escola_nivel_medio_id' => 811,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 811,
			'tipo_nivel_medio_id' => 811
		),
		array(
			'id' => 812,
			'aluno_id' => 812,
			'escola_nivel_medio_id' => 812,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 812,
			'tipo_nivel_medio_id' => 812
		),
		array(
			'id' => 813,
			'aluno_id' => 813,
			'escola_nivel_medio_id' => 813,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 813,
			'tipo_nivel_medio_id' => 813
		),
		array(
			'id' => 814,
			'aluno_id' => 814,
			'escola_nivel_medio_id' => 814,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 814,
			'tipo_nivel_medio_id' => 814
		),
		array(
			'id' => 815,
			'aluno_id' => 815,
			'escola_nivel_medio_id' => 815,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 815,
			'tipo_nivel_medio_id' => 815
		),
		array(
			'id' => 816,
			'aluno_id' => 816,
			'escola_nivel_medio_id' => 816,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 816,
			'tipo_nivel_medio_id' => 816
		),
		array(
			'id' => 817,
			'aluno_id' => 817,
			'escola_nivel_medio_id' => 817,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 817,
			'tipo_nivel_medio_id' => 817
		),
		array(
			'id' => 818,
			'aluno_id' => 818,
			'escola_nivel_medio_id' => 818,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 818,
			'tipo_nivel_medio_id' => 818
		),
		array(
			'id' => 819,
			'aluno_id' => 819,
			'escola_nivel_medio_id' => 819,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 819,
			'tipo_nivel_medio_id' => 819
		),
		array(
			'id' => 820,
			'aluno_id' => 820,
			'escola_nivel_medio_id' => 820,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 820,
			'tipo_nivel_medio_id' => 820
		),
		array(
			'id' => 821,
			'aluno_id' => 821,
			'escola_nivel_medio_id' => 821,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 821,
			'tipo_nivel_medio_id' => 821
		),
		array(
			'id' => 822,
			'aluno_id' => 822,
			'escola_nivel_medio_id' => 822,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 822,
			'tipo_nivel_medio_id' => 822
		),
		array(
			'id' => 823,
			'aluno_id' => 823,
			'escola_nivel_medio_id' => 823,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 823,
			'tipo_nivel_medio_id' => 823
		),
		array(
			'id' => 824,
			'aluno_id' => 824,
			'escola_nivel_medio_id' => 824,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 824,
			'tipo_nivel_medio_id' => 824
		),
		array(
			'id' => 825,
			'aluno_id' => 825,
			'escola_nivel_medio_id' => 825,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 825,
			'tipo_nivel_medio_id' => 825
		),
		array(
			'id' => 826,
			'aluno_id' => 826,
			'escola_nivel_medio_id' => 826,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 826,
			'tipo_nivel_medio_id' => 826
		),
		array(
			'id' => 827,
			'aluno_id' => 827,
			'escola_nivel_medio_id' => 827,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 827,
			'tipo_nivel_medio_id' => 827
		),
		array(
			'id' => 828,
			'aluno_id' => 828,
			'escola_nivel_medio_id' => 828,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 828,
			'tipo_nivel_medio_id' => 828
		),
		array(
			'id' => 829,
			'aluno_id' => 829,
			'escola_nivel_medio_id' => 829,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 829,
			'tipo_nivel_medio_id' => 829
		),
		array(
			'id' => 830,
			'aluno_id' => 830,
			'escola_nivel_medio_id' => 830,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 830,
			'tipo_nivel_medio_id' => 830
		),
		array(
			'id' => 831,
			'aluno_id' => 831,
			'escola_nivel_medio_id' => 831,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 831,
			'tipo_nivel_medio_id' => 831
		),
		array(
			'id' => 832,
			'aluno_id' => 832,
			'escola_nivel_medio_id' => 832,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 832,
			'tipo_nivel_medio_id' => 832
		),
		array(
			'id' => 833,
			'aluno_id' => 833,
			'escola_nivel_medio_id' => 833,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 833,
			'tipo_nivel_medio_id' => 833
		),
		array(
			'id' => 834,
			'aluno_id' => 834,
			'escola_nivel_medio_id' => 834,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 834,
			'tipo_nivel_medio_id' => 834
		),
		array(
			'id' => 835,
			'aluno_id' => 835,
			'escola_nivel_medio_id' => 835,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 835,
			'tipo_nivel_medio_id' => 835
		),
		array(
			'id' => 836,
			'aluno_id' => 836,
			'escola_nivel_medio_id' => 836,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 836,
			'tipo_nivel_medio_id' => 836
		),
		array(
			'id' => 837,
			'aluno_id' => 837,
			'escola_nivel_medio_id' => 837,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 837,
			'tipo_nivel_medio_id' => 837
		),
		array(
			'id' => 838,
			'aluno_id' => 838,
			'escola_nivel_medio_id' => 838,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 838,
			'tipo_nivel_medio_id' => 838
		),
		array(
			'id' => 839,
			'aluno_id' => 839,
			'escola_nivel_medio_id' => 839,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 839,
			'tipo_nivel_medio_id' => 839
		),
		array(
			'id' => 840,
			'aluno_id' => 840,
			'escola_nivel_medio_id' => 840,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 840,
			'tipo_nivel_medio_id' => 840
		),
		array(
			'id' => 841,
			'aluno_id' => 841,
			'escola_nivel_medio_id' => 841,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 841,
			'tipo_nivel_medio_id' => 841
		),
		array(
			'id' => 842,
			'aluno_id' => 842,
			'escola_nivel_medio_id' => 842,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 842,
			'tipo_nivel_medio_id' => 842
		),
		array(
			'id' => 843,
			'aluno_id' => 843,
			'escola_nivel_medio_id' => 843,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 843,
			'tipo_nivel_medio_id' => 843
		),
		array(
			'id' => 844,
			'aluno_id' => 844,
			'escola_nivel_medio_id' => 844,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 844,
			'tipo_nivel_medio_id' => 844
		),
		array(
			'id' => 845,
			'aluno_id' => 845,
			'escola_nivel_medio_id' => 845,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 845,
			'tipo_nivel_medio_id' => 845
		),
		array(
			'id' => 846,
			'aluno_id' => 846,
			'escola_nivel_medio_id' => 846,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 846,
			'tipo_nivel_medio_id' => 846
		),
		array(
			'id' => 847,
			'aluno_id' => 847,
			'escola_nivel_medio_id' => 847,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 847,
			'tipo_nivel_medio_id' => 847
		),
		array(
			'id' => 848,
			'aluno_id' => 848,
			'escola_nivel_medio_id' => 848,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 848,
			'tipo_nivel_medio_id' => 848
		),
		array(
			'id' => 849,
			'aluno_id' => 849,
			'escola_nivel_medio_id' => 849,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 849,
			'tipo_nivel_medio_id' => 849
		),
		array(
			'id' => 850,
			'aluno_id' => 850,
			'escola_nivel_medio_id' => 850,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 850,
			'tipo_nivel_medio_id' => 850
		),
		array(
			'id' => 851,
			'aluno_id' => 851,
			'escola_nivel_medio_id' => 851,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 851,
			'tipo_nivel_medio_id' => 851
		),
		array(
			'id' => 852,
			'aluno_id' => 852,
			'escola_nivel_medio_id' => 852,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 852,
			'tipo_nivel_medio_id' => 852
		),
		array(
			'id' => 853,
			'aluno_id' => 853,
			'escola_nivel_medio_id' => 853,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 853,
			'tipo_nivel_medio_id' => 853
		),
		array(
			'id' => 854,
			'aluno_id' => 854,
			'escola_nivel_medio_id' => 854,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 854,
			'tipo_nivel_medio_id' => 854
		),
		array(
			'id' => 855,
			'aluno_id' => 855,
			'escola_nivel_medio_id' => 855,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 855,
			'tipo_nivel_medio_id' => 855
		),
		array(
			'id' => 856,
			'aluno_id' => 856,
			'escola_nivel_medio_id' => 856,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 856,
			'tipo_nivel_medio_id' => 856
		),
		array(
			'id' => 857,
			'aluno_id' => 857,
			'escola_nivel_medio_id' => 857,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 857,
			'tipo_nivel_medio_id' => 857
		),
		array(
			'id' => 858,
			'aluno_id' => 858,
			'escola_nivel_medio_id' => 858,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 858,
			'tipo_nivel_medio_id' => 858
		),
		array(
			'id' => 859,
			'aluno_id' => 859,
			'escola_nivel_medio_id' => 859,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 859,
			'tipo_nivel_medio_id' => 859
		),
		array(
			'id' => 860,
			'aluno_id' => 860,
			'escola_nivel_medio_id' => 860,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 860,
			'tipo_nivel_medio_id' => 860
		),
		array(
			'id' => 861,
			'aluno_id' => 861,
			'escola_nivel_medio_id' => 861,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 861,
			'tipo_nivel_medio_id' => 861
		),
		array(
			'id' => 862,
			'aluno_id' => 862,
			'escola_nivel_medio_id' => 862,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 862,
			'tipo_nivel_medio_id' => 862
		),
		array(
			'id' => 863,
			'aluno_id' => 863,
			'escola_nivel_medio_id' => 863,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 863,
			'tipo_nivel_medio_id' => 863
		),
		array(
			'id' => 864,
			'aluno_id' => 864,
			'escola_nivel_medio_id' => 864,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 864,
			'tipo_nivel_medio_id' => 864
		),
		array(
			'id' => 865,
			'aluno_id' => 865,
			'escola_nivel_medio_id' => 865,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 865,
			'tipo_nivel_medio_id' => 865
		),
		array(
			'id' => 866,
			'aluno_id' => 866,
			'escola_nivel_medio_id' => 866,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 866,
			'tipo_nivel_medio_id' => 866
		),
		array(
			'id' => 867,
			'aluno_id' => 867,
			'escola_nivel_medio_id' => 867,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 867,
			'tipo_nivel_medio_id' => 867
		),
		array(
			'id' => 868,
			'aluno_id' => 868,
			'escola_nivel_medio_id' => 868,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 868,
			'tipo_nivel_medio_id' => 868
		),
		array(
			'id' => 869,
			'aluno_id' => 869,
			'escola_nivel_medio_id' => 869,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 869,
			'tipo_nivel_medio_id' => 869
		),
		array(
			'id' => 870,
			'aluno_id' => 870,
			'escola_nivel_medio_id' => 870,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 870,
			'tipo_nivel_medio_id' => 870
		),
		array(
			'id' => 871,
			'aluno_id' => 871,
			'escola_nivel_medio_id' => 871,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 871,
			'tipo_nivel_medio_id' => 871
		),
		array(
			'id' => 872,
			'aluno_id' => 872,
			'escola_nivel_medio_id' => 872,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 872,
			'tipo_nivel_medio_id' => 872
		),
		array(
			'id' => 873,
			'aluno_id' => 873,
			'escola_nivel_medio_id' => 873,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 873,
			'tipo_nivel_medio_id' => 873
		),
		array(
			'id' => 874,
			'aluno_id' => 874,
			'escola_nivel_medio_id' => 874,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 874,
			'tipo_nivel_medio_id' => 874
		),
		array(
			'id' => 875,
			'aluno_id' => 875,
			'escola_nivel_medio_id' => 875,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 875,
			'tipo_nivel_medio_id' => 875
		),
		array(
			'id' => 876,
			'aluno_id' => 876,
			'escola_nivel_medio_id' => 876,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 876,
			'tipo_nivel_medio_id' => 876
		),
		array(
			'id' => 877,
			'aluno_id' => 877,
			'escola_nivel_medio_id' => 877,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 877,
			'tipo_nivel_medio_id' => 877
		),
		array(
			'id' => 878,
			'aluno_id' => 878,
			'escola_nivel_medio_id' => 878,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 878,
			'tipo_nivel_medio_id' => 878
		),
		array(
			'id' => 879,
			'aluno_id' => 879,
			'escola_nivel_medio_id' => 879,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 879,
			'tipo_nivel_medio_id' => 879
		),
		array(
			'id' => 880,
			'aluno_id' => 880,
			'escola_nivel_medio_id' => 880,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 880,
			'tipo_nivel_medio_id' => 880
		),
		array(
			'id' => 881,
			'aluno_id' => 881,
			'escola_nivel_medio_id' => 881,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 881,
			'tipo_nivel_medio_id' => 881
		),
		array(
			'id' => 882,
			'aluno_id' => 882,
			'escola_nivel_medio_id' => 882,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 882,
			'tipo_nivel_medio_id' => 882
		),
		array(
			'id' => 883,
			'aluno_id' => 883,
			'escola_nivel_medio_id' => 883,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 883,
			'tipo_nivel_medio_id' => 883
		),
		array(
			'id' => 884,
			'aluno_id' => 884,
			'escola_nivel_medio_id' => 884,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 884,
			'tipo_nivel_medio_id' => 884
		),
		array(
			'id' => 885,
			'aluno_id' => 885,
			'escola_nivel_medio_id' => 885,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 885,
			'tipo_nivel_medio_id' => 885
		),
		array(
			'id' => 886,
			'aluno_id' => 886,
			'escola_nivel_medio_id' => 886,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 886,
			'tipo_nivel_medio_id' => 886
		),
		array(
			'id' => 887,
			'aluno_id' => 887,
			'escola_nivel_medio_id' => 887,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 887,
			'tipo_nivel_medio_id' => 887
		),
		array(
			'id' => 888,
			'aluno_id' => 888,
			'escola_nivel_medio_id' => 888,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 888,
			'tipo_nivel_medio_id' => 888
		),
		array(
			'id' => 889,
			'aluno_id' => 889,
			'escola_nivel_medio_id' => 889,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 889,
			'tipo_nivel_medio_id' => 889
		),
		array(
			'id' => 890,
			'aluno_id' => 890,
			'escola_nivel_medio_id' => 890,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 890,
			'tipo_nivel_medio_id' => 890
		),
		array(
			'id' => 891,
			'aluno_id' => 891,
			'escola_nivel_medio_id' => 891,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 891,
			'tipo_nivel_medio_id' => 891
		),
		array(
			'id' => 892,
			'aluno_id' => 892,
			'escola_nivel_medio_id' => 892,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 892,
			'tipo_nivel_medio_id' => 892
		),
		array(
			'id' => 893,
			'aluno_id' => 893,
			'escola_nivel_medio_id' => 893,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 893,
			'tipo_nivel_medio_id' => 893
		),
		array(
			'id' => 894,
			'aluno_id' => 894,
			'escola_nivel_medio_id' => 894,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 894,
			'tipo_nivel_medio_id' => 894
		),
		array(
			'id' => 895,
			'aluno_id' => 895,
			'escola_nivel_medio_id' => 895,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 895,
			'tipo_nivel_medio_id' => 895
		),
		array(
			'id' => 896,
			'aluno_id' => 896,
			'escola_nivel_medio_id' => 896,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 896,
			'tipo_nivel_medio_id' => 896
		),
		array(
			'id' => 897,
			'aluno_id' => 897,
			'escola_nivel_medio_id' => 897,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 897,
			'tipo_nivel_medio_id' => 897
		),
		array(
			'id' => 898,
			'aluno_id' => 898,
			'escola_nivel_medio_id' => 898,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 898,
			'tipo_nivel_medio_id' => 898
		),
		array(
			'id' => 899,
			'aluno_id' => 899,
			'escola_nivel_medio_id' => 899,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 899,
			'tipo_nivel_medio_id' => 899
		),
		array(
			'id' => 900,
			'aluno_id' => 900,
			'escola_nivel_medio_id' => 900,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 900,
			'tipo_nivel_medio_id' => 900
		),
		array(
			'id' => 901,
			'aluno_id' => 901,
			'escola_nivel_medio_id' => 901,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 901,
			'tipo_nivel_medio_id' => 901
		),
		array(
			'id' => 902,
			'aluno_id' => 902,
			'escola_nivel_medio_id' => 902,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 902,
			'tipo_nivel_medio_id' => 902
		),
		array(
			'id' => 903,
			'aluno_id' => 903,
			'escola_nivel_medio_id' => 903,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 903,
			'tipo_nivel_medio_id' => 903
		),
		array(
			'id' => 904,
			'aluno_id' => 904,
			'escola_nivel_medio_id' => 904,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 904,
			'tipo_nivel_medio_id' => 904
		),
		array(
			'id' => 905,
			'aluno_id' => 905,
			'escola_nivel_medio_id' => 905,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 905,
			'tipo_nivel_medio_id' => 905
		),
		array(
			'id' => 906,
			'aluno_id' => 906,
			'escola_nivel_medio_id' => 906,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 906,
			'tipo_nivel_medio_id' => 906
		),
		array(
			'id' => 907,
			'aluno_id' => 907,
			'escola_nivel_medio_id' => 907,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 907,
			'tipo_nivel_medio_id' => 907
		),
		array(
			'id' => 908,
			'aluno_id' => 908,
			'escola_nivel_medio_id' => 908,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 908,
			'tipo_nivel_medio_id' => 908
		),
		array(
			'id' => 909,
			'aluno_id' => 909,
			'escola_nivel_medio_id' => 909,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 909,
			'tipo_nivel_medio_id' => 909
		),
		array(
			'id' => 910,
			'aluno_id' => 910,
			'escola_nivel_medio_id' => 910,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 910,
			'tipo_nivel_medio_id' => 910
		),
		array(
			'id' => 911,
			'aluno_id' => 911,
			'escola_nivel_medio_id' => 911,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 911,
			'tipo_nivel_medio_id' => 911
		),
		array(
			'id' => 912,
			'aluno_id' => 912,
			'escola_nivel_medio_id' => 912,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 912,
			'tipo_nivel_medio_id' => 912
		),
		array(
			'id' => 913,
			'aluno_id' => 913,
			'escola_nivel_medio_id' => 913,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 913,
			'tipo_nivel_medio_id' => 913
		),
		array(
			'id' => 914,
			'aluno_id' => 914,
			'escola_nivel_medio_id' => 914,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 914,
			'tipo_nivel_medio_id' => 914
		),
		array(
			'id' => 915,
			'aluno_id' => 915,
			'escola_nivel_medio_id' => 915,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 915,
			'tipo_nivel_medio_id' => 915
		),
		array(
			'id' => 916,
			'aluno_id' => 916,
			'escola_nivel_medio_id' => 916,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 916,
			'tipo_nivel_medio_id' => 916
		),
		array(
			'id' => 917,
			'aluno_id' => 917,
			'escola_nivel_medio_id' => 917,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 917,
			'tipo_nivel_medio_id' => 917
		),
		array(
			'id' => 918,
			'aluno_id' => 918,
			'escola_nivel_medio_id' => 918,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 918,
			'tipo_nivel_medio_id' => 918
		),
		array(
			'id' => 919,
			'aluno_id' => 919,
			'escola_nivel_medio_id' => 919,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 919,
			'tipo_nivel_medio_id' => 919
		),
		array(
			'id' => 920,
			'aluno_id' => 920,
			'escola_nivel_medio_id' => 920,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 920,
			'tipo_nivel_medio_id' => 920
		),
		array(
			'id' => 921,
			'aluno_id' => 921,
			'escola_nivel_medio_id' => 921,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 921,
			'tipo_nivel_medio_id' => 921
		),
		array(
			'id' => 922,
			'aluno_id' => 922,
			'escola_nivel_medio_id' => 922,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 922,
			'tipo_nivel_medio_id' => 922
		),
		array(
			'id' => 923,
			'aluno_id' => 923,
			'escola_nivel_medio_id' => 923,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 923,
			'tipo_nivel_medio_id' => 923
		),
		array(
			'id' => 924,
			'aluno_id' => 924,
			'escola_nivel_medio_id' => 924,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 924,
			'tipo_nivel_medio_id' => 924
		),
		array(
			'id' => 925,
			'aluno_id' => 925,
			'escola_nivel_medio_id' => 925,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 925,
			'tipo_nivel_medio_id' => 925
		),
		array(
			'id' => 926,
			'aluno_id' => 926,
			'escola_nivel_medio_id' => 926,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 926,
			'tipo_nivel_medio_id' => 926
		),
		array(
			'id' => 927,
			'aluno_id' => 927,
			'escola_nivel_medio_id' => 927,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 927,
			'tipo_nivel_medio_id' => 927
		),
		array(
			'id' => 928,
			'aluno_id' => 928,
			'escola_nivel_medio_id' => 928,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 928,
			'tipo_nivel_medio_id' => 928
		),
		array(
			'id' => 929,
			'aluno_id' => 929,
			'escola_nivel_medio_id' => 929,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 929,
			'tipo_nivel_medio_id' => 929
		),
		array(
			'id' => 930,
			'aluno_id' => 930,
			'escola_nivel_medio_id' => 930,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 930,
			'tipo_nivel_medio_id' => 930
		),
		array(
			'id' => 931,
			'aluno_id' => 931,
			'escola_nivel_medio_id' => 931,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 931,
			'tipo_nivel_medio_id' => 931
		),
		array(
			'id' => 932,
			'aluno_id' => 932,
			'escola_nivel_medio_id' => 932,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 932,
			'tipo_nivel_medio_id' => 932
		),
		array(
			'id' => 933,
			'aluno_id' => 933,
			'escola_nivel_medio_id' => 933,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 933,
			'tipo_nivel_medio_id' => 933
		),
		array(
			'id' => 934,
			'aluno_id' => 934,
			'escola_nivel_medio_id' => 934,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 934,
			'tipo_nivel_medio_id' => 934
		),
		array(
			'id' => 935,
			'aluno_id' => 935,
			'escola_nivel_medio_id' => 935,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 935,
			'tipo_nivel_medio_id' => 935
		),
		array(
			'id' => 936,
			'aluno_id' => 936,
			'escola_nivel_medio_id' => 936,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 936,
			'tipo_nivel_medio_id' => 936
		),
		array(
			'id' => 937,
			'aluno_id' => 937,
			'escola_nivel_medio_id' => 937,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 937,
			'tipo_nivel_medio_id' => 937
		),
		array(
			'id' => 938,
			'aluno_id' => 938,
			'escola_nivel_medio_id' => 938,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 938,
			'tipo_nivel_medio_id' => 938
		),
		array(
			'id' => 939,
			'aluno_id' => 939,
			'escola_nivel_medio_id' => 939,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 939,
			'tipo_nivel_medio_id' => 939
		),
		array(
			'id' => 940,
			'aluno_id' => 940,
			'escola_nivel_medio_id' => 940,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 940,
			'tipo_nivel_medio_id' => 940
		),
		array(
			'id' => 941,
			'aluno_id' => 941,
			'escola_nivel_medio_id' => 941,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 941,
			'tipo_nivel_medio_id' => 941
		),
		array(
			'id' => 942,
			'aluno_id' => 942,
			'escola_nivel_medio_id' => 942,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 942,
			'tipo_nivel_medio_id' => 942
		),
		array(
			'id' => 943,
			'aluno_id' => 943,
			'escola_nivel_medio_id' => 943,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 943,
			'tipo_nivel_medio_id' => 943
		),
		array(
			'id' => 944,
			'aluno_id' => 944,
			'escola_nivel_medio_id' => 944,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 944,
			'tipo_nivel_medio_id' => 944
		),
		array(
			'id' => 945,
			'aluno_id' => 945,
			'escola_nivel_medio_id' => 945,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 945,
			'tipo_nivel_medio_id' => 945
		),
		array(
			'id' => 946,
			'aluno_id' => 946,
			'escola_nivel_medio_id' => 946,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 946,
			'tipo_nivel_medio_id' => 946
		),
		array(
			'id' => 947,
			'aluno_id' => 947,
			'escola_nivel_medio_id' => 947,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 947,
			'tipo_nivel_medio_id' => 947
		),
		array(
			'id' => 948,
			'aluno_id' => 948,
			'escola_nivel_medio_id' => 948,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 948,
			'tipo_nivel_medio_id' => 948
		),
		array(
			'id' => 949,
			'aluno_id' => 949,
			'escola_nivel_medio_id' => 949,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 949,
			'tipo_nivel_medio_id' => 949
		),
		array(
			'id' => 950,
			'aluno_id' => 950,
			'escola_nivel_medio_id' => 950,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 950,
			'tipo_nivel_medio_id' => 950
		),
		array(
			'id' => 951,
			'aluno_id' => 951,
			'escola_nivel_medio_id' => 951,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 951,
			'tipo_nivel_medio_id' => 951
		),
		array(
			'id' => 952,
			'aluno_id' => 952,
			'escola_nivel_medio_id' => 952,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 952,
			'tipo_nivel_medio_id' => 952
		),
		array(
			'id' => 953,
			'aluno_id' => 953,
			'escola_nivel_medio_id' => 953,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 953,
			'tipo_nivel_medio_id' => 953
		),
		array(
			'id' => 954,
			'aluno_id' => 954,
			'escola_nivel_medio_id' => 954,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 954,
			'tipo_nivel_medio_id' => 954
		),
		array(
			'id' => 955,
			'aluno_id' => 955,
			'escola_nivel_medio_id' => 955,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 955,
			'tipo_nivel_medio_id' => 955
		),
		array(
			'id' => 956,
			'aluno_id' => 956,
			'escola_nivel_medio_id' => 956,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 956,
			'tipo_nivel_medio_id' => 956
		),
		array(
			'id' => 957,
			'aluno_id' => 957,
			'escola_nivel_medio_id' => 957,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 957,
			'tipo_nivel_medio_id' => 957
		),
		array(
			'id' => 958,
			'aluno_id' => 958,
			'escola_nivel_medio_id' => 958,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 958,
			'tipo_nivel_medio_id' => 958
		),
		array(
			'id' => 959,
			'aluno_id' => 959,
			'escola_nivel_medio_id' => 959,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 959,
			'tipo_nivel_medio_id' => 959
		),
		array(
			'id' => 960,
			'aluno_id' => 960,
			'escola_nivel_medio_id' => 960,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 960,
			'tipo_nivel_medio_id' => 960
		),
		array(
			'id' => 961,
			'aluno_id' => 961,
			'escola_nivel_medio_id' => 961,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 961,
			'tipo_nivel_medio_id' => 961
		),
		array(
			'id' => 962,
			'aluno_id' => 962,
			'escola_nivel_medio_id' => 962,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 962,
			'tipo_nivel_medio_id' => 962
		),
		array(
			'id' => 963,
			'aluno_id' => 963,
			'escola_nivel_medio_id' => 963,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 963,
			'tipo_nivel_medio_id' => 963
		),
		array(
			'id' => 964,
			'aluno_id' => 964,
			'escola_nivel_medio_id' => 964,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 964,
			'tipo_nivel_medio_id' => 964
		),
		array(
			'id' => 965,
			'aluno_id' => 965,
			'escola_nivel_medio_id' => 965,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 965,
			'tipo_nivel_medio_id' => 965
		),
		array(
			'id' => 966,
			'aluno_id' => 966,
			'escola_nivel_medio_id' => 966,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 966,
			'tipo_nivel_medio_id' => 966
		),
		array(
			'id' => 967,
			'aluno_id' => 967,
			'escola_nivel_medio_id' => 967,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 967,
			'tipo_nivel_medio_id' => 967
		),
		array(
			'id' => 968,
			'aluno_id' => 968,
			'escola_nivel_medio_id' => 968,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 968,
			'tipo_nivel_medio_id' => 968
		),
		array(
			'id' => 969,
			'aluno_id' => 969,
			'escola_nivel_medio_id' => 969,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 969,
			'tipo_nivel_medio_id' => 969
		),
		array(
			'id' => 970,
			'aluno_id' => 970,
			'escola_nivel_medio_id' => 970,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 970,
			'tipo_nivel_medio_id' => 970
		),
		array(
			'id' => 971,
			'aluno_id' => 971,
			'escola_nivel_medio_id' => 971,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 971,
			'tipo_nivel_medio_id' => 971
		),
		array(
			'id' => 972,
			'aluno_id' => 972,
			'escola_nivel_medio_id' => 972,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 972,
			'tipo_nivel_medio_id' => 972
		),
		array(
			'id' => 973,
			'aluno_id' => 973,
			'escola_nivel_medio_id' => 973,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 973,
			'tipo_nivel_medio_id' => 973
		),
		array(
			'id' => 974,
			'aluno_id' => 974,
			'escola_nivel_medio_id' => 974,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 974,
			'tipo_nivel_medio_id' => 974
		),
		array(
			'id' => 975,
			'aluno_id' => 975,
			'escola_nivel_medio_id' => 975,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 975,
			'tipo_nivel_medio_id' => 975
		),
		array(
			'id' => 976,
			'aluno_id' => 976,
			'escola_nivel_medio_id' => 976,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 976,
			'tipo_nivel_medio_id' => 976
		),
		array(
			'id' => 977,
			'aluno_id' => 977,
			'escola_nivel_medio_id' => 977,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 977,
			'tipo_nivel_medio_id' => 977
		),
		array(
			'id' => 978,
			'aluno_id' => 978,
			'escola_nivel_medio_id' => 978,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 978,
			'tipo_nivel_medio_id' => 978
		),
		array(
			'id' => 979,
			'aluno_id' => 979,
			'escola_nivel_medio_id' => 979,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 979,
			'tipo_nivel_medio_id' => 979
		),
		array(
			'id' => 980,
			'aluno_id' => 980,
			'escola_nivel_medio_id' => 980,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 980,
			'tipo_nivel_medio_id' => 980
		),
		array(
			'id' => 981,
			'aluno_id' => 981,
			'escola_nivel_medio_id' => 981,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 981,
			'tipo_nivel_medio_id' => 981
		),
		array(
			'id' => 982,
			'aluno_id' => 982,
			'escola_nivel_medio_id' => 982,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 982,
			'tipo_nivel_medio_id' => 982
		),
		array(
			'id' => 983,
			'aluno_id' => 983,
			'escola_nivel_medio_id' => 983,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 983,
			'tipo_nivel_medio_id' => 983
		),
		array(
			'id' => 984,
			'aluno_id' => 984,
			'escola_nivel_medio_id' => 984,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 984,
			'tipo_nivel_medio_id' => 984
		),
		array(
			'id' => 985,
			'aluno_id' => 985,
			'escola_nivel_medio_id' => 985,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 985,
			'tipo_nivel_medio_id' => 985
		),
		array(
			'id' => 986,
			'aluno_id' => 986,
			'escola_nivel_medio_id' => 986,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 986,
			'tipo_nivel_medio_id' => 986
		),
		array(
			'id' => 987,
			'aluno_id' => 987,
			'escola_nivel_medio_id' => 987,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 987,
			'tipo_nivel_medio_id' => 987
		),
		array(
			'id' => 988,
			'aluno_id' => 988,
			'escola_nivel_medio_id' => 988,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 988,
			'tipo_nivel_medio_id' => 988
		),
		array(
			'id' => 989,
			'aluno_id' => 989,
			'escola_nivel_medio_id' => 989,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 989,
			'tipo_nivel_medio_id' => 989
		),
		array(
			'id' => 990,
			'aluno_id' => 990,
			'escola_nivel_medio_id' => 990,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 990,
			'tipo_nivel_medio_id' => 990
		),
		array(
			'id' => 991,
			'aluno_id' => 991,
			'escola_nivel_medio_id' => 991,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 991,
			'tipo_nivel_medio_id' => 991
		),
		array(
			'id' => 992,
			'aluno_id' => 992,
			'escola_nivel_medio_id' => 992,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 992,
			'tipo_nivel_medio_id' => 992
		),
		array(
			'id' => 993,
			'aluno_id' => 993,
			'escola_nivel_medio_id' => 993,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 993,
			'tipo_nivel_medio_id' => 993
		),
		array(
			'id' => 994,
			'aluno_id' => 994,
			'escola_nivel_medio_id' => 994,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 994,
			'tipo_nivel_medio_id' => 994
		),
		array(
			'id' => 995,
			'aluno_id' => 995,
			'escola_nivel_medio_id' => 995,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 995,
			'tipo_nivel_medio_id' => 995
		),
		array(
			'id' => 996,
			'aluno_id' => 996,
			'escola_nivel_medio_id' => 996,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 996,
			'tipo_nivel_medio_id' => 996
		),
		array(
			'id' => 997,
			'aluno_id' => 997,
			'escola_nivel_medio_id' => 997,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 997,
			'tipo_nivel_medio_id' => 997
		),
		array(
			'id' => 998,
			'aluno_id' => 998,
			'escola_nivel_medio_id' => 998,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 998,
			'tipo_nivel_medio_id' => 998
		),
		array(
			'id' => 999,
			'aluno_id' => 999,
			'escola_nivel_medio_id' => 999,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 999,
			'tipo_nivel_medio_id' => 999
		),
		array(
			'id' => 1000,
			'aluno_id' => 1000,
			'escola_nivel_medio_id' => 1000,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-07-25 04:21:25',
			'modified' => '2012-07-25 04:21:25',
			'provincia_id' => 1000,
			'tipo_nivel_medio_id' => 1000
		),
	);

}
