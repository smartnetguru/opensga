<?php
/**
 * CursoFixture
 *
 */
class CursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grauacademico_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipocurso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'pagamento_exclusivo' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => '1',
			'name' => 'Curso desconhecido',
			'grauacademico_id' => '3',
			'tipocurso_id' => '3',
			'codigo' => '0',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '29',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '2',
			'name' => 'Mestrado em Terapia Familiar e Comunitária',
			'grauacademico_id' => '3',
			'tipocurso_id' => '3',
			'codigo' => '1000',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '33',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '3',
			'name' => 'Mestrado em Biotecnologia',
			'grauacademico_id' => '3',
			'tipocurso_id' => '3',
			'codigo' => '1009',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '24',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '4',
			'name' => 'Mestrado em DA  - Economia Agrária',
			'grauacademico_id' => '3',
			'tipocurso_id' => '3',
			'codigo' => '1010',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '5',
			'name' => 'Licenciatura em Engenharia Agronomica',
			'grauacademico_id' => '2',
			'tipocurso_id' => '2',
			'codigo' => '1011',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '6',
			'name' => 'Mestrado em DA-Ramo de Desenvolvimento Rural',
			'grauacademico_id' => '3',
			'tipocurso_id' => '3',
			'codigo' => '1012',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '7',
			'name' => 'Licenciatura em Agronomia',
			'grauacademico_id' => '2',
			'tipocurso_id' => '2',
			'codigo' => '1013',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '8',
			'name' => 'Licenciatura em Ciências Florestais',
			'grauacademico_id' => '2',
			'tipocurso_id' => '2',
			'codigo' => '1014',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '9',
			'name' => 'Licenciatura em Arqueologia',
			'grauacademico_id' => '2',
			'tipocurso_id' => '2',
			'codigo' => '1015',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '51',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '10',
			'name' => 'Licenciatura em Física - Pós-Laboral',
			'grauacademico_id' => '2',
			'tipocurso_id' => '2',
			'codigo' => '1016',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '46',
			'created_by' => null,
			'modified_by' => null
		),
	);

}
