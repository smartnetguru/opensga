<?php
/**
 * SadeAvaliadorFixture
 *
 */
class SadeAvaliadorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'docente_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'nivel_avaliador_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
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
			'docente_id' => 1,
			'nivel_avaliador_id' => 1
		),
	);
}
