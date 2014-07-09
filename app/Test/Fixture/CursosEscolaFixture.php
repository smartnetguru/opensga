<?php
/**
 * CursosEscolaFixture
 *
 */
class CursosEscolaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_adicao' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Curso' => array('column' => 'curso_id', 'unique' => 0),
			'Escola' => array('column' => 'escola_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
