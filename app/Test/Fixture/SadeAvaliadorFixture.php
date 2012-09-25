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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'docente_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nivel_avaliador_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'docente_id' => 1,
			'nivel_avaliador_id' => 1
		),
		array(
			'id' => 2,
			'entidade_id' => 2,
			'docente_id' => 2,
			'nivel_avaliador_id' => 2
		),
		array(
			'id' => 3,
			'entidade_id' => 3,
			'docente_id' => 3,
			'nivel_avaliador_id' => 3
		),
		array(
			'id' => 4,
			'entidade_id' => 4,
			'docente_id' => 4,
			'nivel_avaliador_id' => 4
		),
		array(
			'id' => 5,
			'entidade_id' => 5,
			'docente_id' => 5,
			'nivel_avaliador_id' => 5
		),
		array(
			'id' => 6,
			'entidade_id' => 6,
			'docente_id' => 6,
			'nivel_avaliador_id' => 6
		),
		array(
			'id' => 7,
			'entidade_id' => 7,
			'docente_id' => 7,
			'nivel_avaliador_id' => 7
		),
		array(
			'id' => 8,
			'entidade_id' => 8,
			'docente_id' => 8,
			'nivel_avaliador_id' => 8
		),
		array(
			'id' => 9,
			'entidade_id' => 9,
			'docente_id' => 9,
			'nivel_avaliador_id' => 9
		),
		array(
			'id' => 10,
			'entidade_id' => 10,
			'docente_id' => 10,
			'nivel_avaliador_id' => 10
		),
	);

}
