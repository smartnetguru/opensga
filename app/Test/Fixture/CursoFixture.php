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
		'grau_academico_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'tipo_curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'pagamento_exclusivo' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo_admissao' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cursos_unidade_organicas_fk_idx' => array('column' => 'unidade_organica_id', 'unique' => 0),
			'cursos_grau_academicos_fk_idx' => array('column' => 'grau_academico_id', 'unique' => 0),
			'cursos_tipo_cursos_fk_idx' => array('column' => 'tipo_curso_id', 'unique' => 0)
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
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '0',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '29',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '2',
			'name' => 'Mestrado em Terapia Familiar e Comunitária',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1000',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '33',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '3',
			'name' => 'Mestrado em Biotecnologia',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1009',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '24',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '4',
			'name' => 'Mestrado em DA  - Economia Agrária',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1010',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '5',
			'name' => 'Licenciatura em Engenharia Agronomica',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1011',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1055'
		),
		array(
			'id' => '6',
			'name' => 'Mestrado em DA-Ramo de Desenvolvimento Rural',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1012',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '7',
			'name' => 'Licenciatura em Agronomia',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1013',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '8',
			'name' => 'Licenciatura em Ciências Florestais',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1014',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '9',
			'name' => 'Licenciatura em Arqueologia',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1015',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '51',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1040'
		),
		array(
			'id' => '10',
			'name' => 'Licenciatura em Física - Pós-Laboral',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1016',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '46',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1116'
		),
		array(
			'id' => '11',
			'name' => 'Licenciatura em Metereologia - Pós-Laboral',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1017',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '46',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '12',
			'name' => 'Licenciatura Em Ciência de Engenharia do Ambiênte',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1018',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '34',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1075'
		),
		array(
			'id' => '13',
			'name' => 'Licenciatura Em Ciência de Engenharia do Ambiênte - Pós-Laboral',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1019',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '34',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1076'
		),
		array(
			'id' => '14',
			'name' => 'Licenciatura em Engenharia e Gestão Industrial - Pós-Laboral',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1020',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '34',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1086'
		),
		array(
			'id' => '15',
			'name' => 'Licenciatura em Engenharia Florestal',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1021',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1088'
		),
		array(
			'id' => '16',
			'name' => 'Licenciatura em Administração Pública - Distancia',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1022',
			'created' => '2013-05-31 09:44:47',
			'modified' => '2013-05-31 09:44:47',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '51',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1096'
		),
		array(
			'id' => '17',
			'name' => 'Mestrado em DA - Gestão de Recursos Florestais e Faunisticos',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1023',
			'created' => '2013-05-31 09:44:48',
			'modified' => '2013-05-31 09:44:48',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '18',
			'name' => 'Licenciatura em Ciências do Desporto',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1100',
			'created' => '2013-05-31 09:44:48',
			'modified' => '2013-05-31 09:44:48',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '39',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => '1127'
		),
		array(
			'id' => '19',
			'name' => 'Licenciatura em Serviço Social',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1101',
			'created' => '2013-05-31 09:44:48',
			'modified' => '2013-05-31 09:44:48',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '51',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
		array(
			'id' => '20',
			'name' => 'Mestado em Educação e Ciências Naturais e Matemática',
			'grau_academico_id' => null,
			'tipo_curso_id' => null,
			'codigo' => '1111',
			'created' => '2013-05-31 09:44:48',
			'modified' => '2013-05-31 09:44:48',
			'pagamento_exclusivo' => 0,
			'unidade_organica_id' => '33',
			'created_by' => null,
			'modified_by' => null,
			'codigo_admissao' => null
		),
	);

}
