<?php
/**
 * HistoricoCursoFixture
 *
 */
class HistoricoCursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ano_ingresso' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'ano_fim' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'ano_lectivo_ingresso' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ano_lectivo_fim' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'data_conclusao' => array('type' => 'date', 'null' => true, 'default' => null),
		'nota_final' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'anexo_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'conclusao_confirmada' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'funcionario_confirmador' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'plano_estudo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'aluno_id' => 1,
			'curso_id' => 1,
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ano_fim' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ano_lectivo_ingresso' => 1,
			'ano_lectivo_fim' => 1,
			'data_conclusao' => '2014-06-18',
			'nota_final' => '',
			'created' => '2014-06-18 01:51:10',
			'modified' => '2014-06-18 01:51:10',
			'created_by' => 1,
			'modified_by' => 1,
			'anexo_url' => 'Lorem ipsum dolor sit amet',
			'conclusao_confirmada' => 1,
			'funcionario_confirmador' => 1,
			'plano_estudo_id' => 1
		),
	);

}
