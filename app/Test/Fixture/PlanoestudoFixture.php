<?php
/**
 * PlanoestudoFixture
 *
 */
class PlanoestudoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'duracao' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestresano' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero_ciclos' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'curso_id' => 1,
			'duracao' => 1,
			'semestresano' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 2,
			'duracao' => 2,
			'semestresano' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 3,
			'duracao' => 3,
			'semestresano' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 4,
			'duracao' => 4,
			'semestresano' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 5,
			'duracao' => 5,
			'semestresano' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 6,
			'duracao' => 6,
			'semestresano' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 7,
			'duracao' => 7,
			'semestresano' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 8,
			'duracao' => 8,
			'semestresano' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 9,
			'duracao' => 9,
			'semestresano' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 10,
			'duracao' => 10,
			'semestresano' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'numero_ciclos' => 10
		),
	);

}
