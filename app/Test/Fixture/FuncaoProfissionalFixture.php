<?php
/**
 * FuncaoProfissionalFixture
 *
 */
class FuncaoProfissionalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Recepcionista',
			'codigo' => null
		),
		array(
			'id' => '2',
			'name' => 'Reitor',
			'codigo' => null
		),
		array(
			'id' => '3',
			'name' => 'Vice Reitor Académico',
			'codigo' => null
		),
		array(
			'id' => '4',
			'name' => 'Vice Reitor Administrativo',
			'codigo' => null
		),
		array(
			'id' => '5',
			'name' => 'Director de Registo Académico',
			'codigo' => null
		),
		array(
			'id' => '6',
			'name' => 'Director de Faculdade',
			'codigo' => null
		),
		array(
			'id' => '7',
			'name' => 'Chefe de Departamento',
			'codigo' => null
		),
		array(
			'id' => '8',
			'name' => 'Director de Curso',
			'codigo' => null
		),
		array(
			'id' => '9',
			'name' => 'Docente',
			'codigo' => null
		),
		array(
			'id' => '10',
			'name' => 'Estudante',
			'codigo' => null
		),
	);

}
