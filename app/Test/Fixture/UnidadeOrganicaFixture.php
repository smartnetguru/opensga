<?php
/**
 * UnidadeOrganicaFixture
 *
 */
class UnidadeOrganicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nivel_unidade' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipo_unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'area_academica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'area_unidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'director' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'unidade_organicas_tipo_unidades' => array('column' => 'tipo_unidade_organica_id', 'unique' => 0),
			'unidade_organicas_area_academicas' => array('column' => 'area_academica_id', 'unique' => 0),
			'unidade_organicas_area_unidades' => array('column' => 'area_unidade_id', 'unique' => 0),
			'unidade_organicas_estado_objectos' => array('column' => 'estado_objecto_id', 'unique' => 0)
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
			'name' => 'Faculdade de Agronomia e Engenharia Florestal',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '2',
			'rght' => '5',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:46',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'AGR'
		),
		array(
			'id' => '2',
			'name' => 'Faculdade de Arquitectura',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '6',
			'rght' => '9',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:46',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'AR'
		),
		array(
			'id' => '3',
			'name' => 'Faculdade de Ciências',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '10',
			'rght' => '23',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:46',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'CN'
		),
		array(
			'id' => '4',
			'name' => 'Faculdade de Direito - Beira',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '24',
			'rght' => '27',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:47',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'DIRB'
		),
		array(
			'id' => '5',
			'name' => 'Faculdade de Direito ',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '28',
			'rght' => '31',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:47',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'DIRM'
		),
		array(
			'id' => '6',
			'name' => 'Faculdade de Economia',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '32',
			'rght' => '35',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:47',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'EC'
		),
		array(
			'id' => '7',
			'name' => 'Escola de Comunicação e Artes',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '36',
			'rght' => '39',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:47',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'ECA'
		),
		array(
			'id' => '8',
			'name' => 'Faculdade de Educação',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '40',
			'rght' => '43',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:47',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'ED'
		),
		array(
			'id' => '9',
			'name' => 'Faculdade de Engenharia',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '44',
			'rght' => '55',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:47',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'ENG'
		),
		array(
			'id' => '10',
			'name' => 'Escola Superior de Ciências do Desporto ',
			'nivel_unidade' => '1',
			'tipo_unidade_organica_id' => '1',
			'area_academica_id' => null,
			'area_unidade_id' => null,
			'parent_id' => '18',
			'lft' => '56',
			'rght' => '59',
			'estado_objecto_id' => null,
			'director' => null,
			'created' => '2013-05-31 09:17:06',
			'modified' => '2013-08-07 06:46:47',
			'created_by' => null,
			'modified_by' => null,
			'codigo' => 'ESCD'
		),
	);

}
