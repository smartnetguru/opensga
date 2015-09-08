<?php
/**
 * CursoNews Fixture
 */
class CursoNewsFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grau_academico_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'tipo_curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'pagamento_exclusivo' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'codigo_admissao' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'ano_criacao' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'duracao' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_responsavel_curso' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'curso_responsavel_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cursos_grau_academicos_fk_idx' => array('column' => 'grau_academico_id', 'unique' => 0),
			'cursos_tipo_cursos_fk_idx' => array('column' => 'tipo_curso_id', 'unique' => 0),
			'cursos_unidade_organicas_fk_idx' => array('column' => 'unidade_organica_id', 'unique' => 0),
			'cursos_unidade_organicas' => array('column' => 'unidade_organica_id', 'unique' => 0),
			'cursos_user_responsavel_curso' => array('column' => 'user_responsavel_curso', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'grau_academico_id' => 1,
			'tipo_curso_id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2015-09-06 09:21:30',
			'modified' => '2015-09-06 09:21:30',
			'pagamento_exclusivo' => 1,
			'unidade_organica_id' => 1,
			'created_by' => 1,
			'modified_by' => 1,
			'codigo_admissao' => 1,
			'estado_objecto_id' => 1,
			'ano_criacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'duracao' => 1,
			'user_responsavel_curso' => 1,
			'curso_responsavel_id' => 1
		),
	);

}
