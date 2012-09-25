<?php
/**
 * GrupodisciplinaFixture
 *
 */
class GrupodisciplinaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'planoestudo_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tipoprecedencia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'grupodisciplinasprec' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 1,
			'tipoprecedencia_id' => 1,
			'disciplina_id' => 1,
			'grupodisciplinasprec' => 1
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 2,
			'tipoprecedencia_id' => 2,
			'disciplina_id' => 2,
			'grupodisciplinasprec' => 2
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 3,
			'tipoprecedencia_id' => 3,
			'disciplina_id' => 3,
			'grupodisciplinasprec' => 3
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 4,
			'tipoprecedencia_id' => 4,
			'disciplina_id' => 4,
			'grupodisciplinasprec' => 4
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 5,
			'tipoprecedencia_id' => 5,
			'disciplina_id' => 5,
			'grupodisciplinasprec' => 5
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 6,
			'tipoprecedencia_id' => 6,
			'disciplina_id' => 6,
			'grupodisciplinasprec' => 6
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 7,
			'tipoprecedencia_id' => 7,
			'disciplina_id' => 7,
			'grupodisciplinasprec' => 7
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 8,
			'tipoprecedencia_id' => 8,
			'disciplina_id' => 8,
			'grupodisciplinasprec' => 8
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 9,
			'tipoprecedencia_id' => 9,
			'disciplina_id' => 9,
			'grupodisciplinasprec' => 9
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'planoestudo_id' => 10,
			'tipoprecedencia_id' => 10,
			'disciplina_id' => 10,
			'grupodisciplinasprec' => 10
		),
	);

}
