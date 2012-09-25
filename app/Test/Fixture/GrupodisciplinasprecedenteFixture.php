<?php
/**
 * GrupodisciplinasprecedenteFixture
 *
 */
class GrupodisciplinasprecedenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'grupodisciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'grupodisciplinaprecedente_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tipoprecedencia_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'grupodisciplina_id' => 1,
			'grupodisciplinaprecedente_id' => 1,
			'tipoprecedencia_id' => 1,
			'curso_id' => 1
		),
		array(
			'id' => 2,
			'grupodisciplina_id' => 2,
			'grupodisciplinaprecedente_id' => 2,
			'tipoprecedencia_id' => 2,
			'curso_id' => 2
		),
		array(
			'id' => 3,
			'grupodisciplina_id' => 3,
			'grupodisciplinaprecedente_id' => 3,
			'tipoprecedencia_id' => 3,
			'curso_id' => 3
		),
		array(
			'id' => 4,
			'grupodisciplina_id' => 4,
			'grupodisciplinaprecedente_id' => 4,
			'tipoprecedencia_id' => 4,
			'curso_id' => 4
		),
		array(
			'id' => 5,
			'grupodisciplina_id' => 5,
			'grupodisciplinaprecedente_id' => 5,
			'tipoprecedencia_id' => 5,
			'curso_id' => 5
		),
		array(
			'id' => 6,
			'grupodisciplina_id' => 6,
			'grupodisciplinaprecedente_id' => 6,
			'tipoprecedencia_id' => 6,
			'curso_id' => 6
		),
		array(
			'id' => 7,
			'grupodisciplina_id' => 7,
			'grupodisciplinaprecedente_id' => 7,
			'tipoprecedencia_id' => 7,
			'curso_id' => 7
		),
		array(
			'id' => 8,
			'grupodisciplina_id' => 8,
			'grupodisciplinaprecedente_id' => 8,
			'tipoprecedencia_id' => 8,
			'curso_id' => 8
		),
		array(
			'id' => 9,
			'grupodisciplina_id' => 9,
			'grupodisciplinaprecedente_id' => 9,
			'tipoprecedencia_id' => 9,
			'curso_id' => 9
		),
		array(
			'id' => 10,
			'grupodisciplina_id' => 10,
			'grupodisciplinaprecedente_id' => 10,
			'tipoprecedencia_id' => 10,
			'curso_id' => 10
		),
	);

}
