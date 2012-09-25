<?php
/**
 * MensalidadeFixture
 *
 */
class MensalidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'data_pagamento' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'month_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'valor_multa' => array('type' => 'float', 'null' => true, 'default' => null),
		'ano' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
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
			'valor' => 1,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 1,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 1,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 2,
			'aluno_id' => 2,
			'valor' => 2,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 2,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 2,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 3,
			'aluno_id' => 3,
			'valor' => 3,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 3,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 3,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 4,
			'aluno_id' => 4,
			'valor' => 4,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 4,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 4,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 5,
			'aluno_id' => 5,
			'valor' => 5,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 5,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 5,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 6,
			'aluno_id' => 6,
			'valor' => 6,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 6,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 6,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 7,
			'aluno_id' => 7,
			'valor' => 7,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 7,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 7,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 8,
			'aluno_id' => 8,
			'valor' => 8,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 8,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 8,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 9,
			'aluno_id' => 9,
			'valor' => 9,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 9,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 9,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
		array(
			'id' => 10,
			'aluno_id' => 10,
			'valor' => 10,
			'created' => '2012-09-25 16:39:59',
			'data_pagamento' => '2012-09-25 16:39:59',
			'month_id' => 10,
			'modified' => '2012-09-25 16:39:59',
			'valor_multa' => 10,
			'ano' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
