<?php
/**
 * DocenteFixture
 *
 */
class DocenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'seccao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'docente_categoria_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'docente_funcao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'regime_trabalho_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'entidade_id' => 1,
			'seccao_id' => 1,
			'docente_categoria_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 1,
			'unidade_organica_id' => 1,
			'regime_trabalho_id' => 1,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 2,
			'entidade_id' => 2,
			'seccao_id' => 2,
			'docente_categoria_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 2,
			'unidade_organica_id' => 2,
			'regime_trabalho_id' => 2,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 3,
			'entidade_id' => 3,
			'seccao_id' => 3,
			'docente_categoria_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 3,
			'unidade_organica_id' => 3,
			'regime_trabalho_id' => 3,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 4,
			'entidade_id' => 4,
			'seccao_id' => 4,
			'docente_categoria_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 4,
			'unidade_organica_id' => 4,
			'regime_trabalho_id' => 4,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 5,
			'entidade_id' => 5,
			'seccao_id' => 5,
			'docente_categoria_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 5,
			'unidade_organica_id' => 5,
			'regime_trabalho_id' => 5,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 6,
			'entidade_id' => 6,
			'seccao_id' => 6,
			'docente_categoria_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 6,
			'unidade_organica_id' => 6,
			'regime_trabalho_id' => 6,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 7,
			'entidade_id' => 7,
			'seccao_id' => 7,
			'docente_categoria_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 7,
			'unidade_organica_id' => 7,
			'regime_trabalho_id' => 7,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 8,
			'entidade_id' => 8,
			'seccao_id' => 8,
			'docente_categoria_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 8,
			'unidade_organica_id' => 8,
			'regime_trabalho_id' => 8,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 9,
			'entidade_id' => 9,
			'seccao_id' => 9,
			'docente_categoria_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 9,
			'unidade_organica_id' => 9,
			'regime_trabalho_id' => 9,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
		array(
			'id' => 10,
			'entidade_id' => 10,
			'seccao_id' => 10,
			'docente_categoria_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'docente_funcao_id' => 10,
			'unidade_organica_id' => 10,
			'regime_trabalho_id' => 10,
			'created' => '2012-09-25 16:34:04',
			'modified' => '2012-09-25 16:34:04'
		),
	);

}
