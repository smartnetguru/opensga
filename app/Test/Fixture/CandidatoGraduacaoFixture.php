<?php
/**
 * CandidatoGraduacaoFixture
 *
 */
class CandidatoGraduacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cerimonia_graduacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pedido_certificado' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_candidatura_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ano_conclusao' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'data_defesa' => array('type' => 'date', 'null' => true, 'default' => null),
		'media_defesa' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'media_final' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'apelido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nomes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_nascimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'naturalidade' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'localidade' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'distrito_nascimento' => array('type' => 'integer', 'null' => true, 'default' => null),
		'provincia_nascimento' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pais_nascimento' => array('type' => 'integer', 'null' => true, 'default' => null),
		'genero_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nacionalidade' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_civil_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'regime_estudo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'regalia_social_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_candidatura' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'telemovel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'cerimonia_graduacao_id' => 1,
			'pedido_certificado' => 1,
			'estado_objecto_id' => 1,
			'estado_candidatura_id' => 1,
			'created' => '2013-09-15 23:49:35',
			'modified' => '2013-09-15 23:49:35',
			'created_by' => 1,
			'modified_by' => 1,
			'ano_conclusao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_defesa' => '2013-09-15',
			'media_defesa' => 1,
			'media_final' => 1,
			'apelido' => 'Lorem ipsum dolor sit amet',
			'nomes' => 'Lorem ipsum dolor sit amet',
			'data_nascimento' => '2013-09-15',
			'naturalidade' => 'Lorem ipsum dolor sit amet',
			'localidade' => 'Lorem ipsum dolor sit amet',
			'distrito_nascimento' => 1,
			'provincia_nascimento' => 1,
			'pais_nascimento' => 1,
			'genero_id' => 1,
			'nacionalidade' => 1,
			'estado_civil_id' => 1,
			'regime_estudo_id' => 1,
			'regalia_social_id' => 1,
			'data_candidatura' => '2013-09-15 23:49:35',
			'telemovel' => 'Lorem ipsum dolor sit amet'
		),
	);

}
