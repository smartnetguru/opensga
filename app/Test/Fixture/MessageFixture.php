<?php
/**
 * MessageFixture
 *
 */
class MessageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'recipient_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'assunto' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mensagem' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datainicio' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'datafim' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'user_id' => 1,
			'recipient_id' => 1,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 1
		),
		array(
			'id' => 2,
			'user_id' => 2,
			'recipient_id' => 2,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 2
		),
		array(
			'id' => 3,
			'user_id' => 3,
			'recipient_id' => 3,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 3
		),
		array(
			'id' => 4,
			'user_id' => 4,
			'recipient_id' => 4,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 4
		),
		array(
			'id' => 5,
			'user_id' => 5,
			'recipient_id' => 5,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 5
		),
		array(
			'id' => 6,
			'user_id' => 6,
			'recipient_id' => 6,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 6
		),
		array(
			'id' => 7,
			'user_id' => 7,
			'recipient_id' => 7,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 7
		),
		array(
			'id' => 8,
			'user_id' => 8,
			'recipient_id' => 8,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 8
		),
		array(
			'id' => 9,
			'user_id' => 9,
			'recipient_id' => 9,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 9
		),
		array(
			'id' => 10,
			'user_id' => 10,
			'recipient_id' => 10,
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'datainicio' => '2012-09-25 16:40:08',
			'datafim' => '2012-09-25 16:40:08',
			'estado' => 10
		),
	);

}
