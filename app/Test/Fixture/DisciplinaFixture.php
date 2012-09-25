<?php
/**
 * DisciplinaFixture
 *
 */
class DisciplinaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'seccao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 1,
			'seccao_id' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 2,
			'seccao_id' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 3,
			'seccao_id' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 4,
			'seccao_id' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 5,
			'seccao_id' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 6,
			'seccao_id' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 7,
			'seccao_id' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 8,
			'seccao_id' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 9,
			'seccao_id' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'departamento_id' => 10,
			'seccao_id' => 10
		),
	);

}
