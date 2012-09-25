<?php
/**
 * CursoFixture
 *
 */
class CursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'grauacademico_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipocurso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pagamento_exclusivo' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
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
			'escola_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 1,
			'tipocurso_id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 1,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 2,
			'escola_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 2,
			'tipocurso_id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 2,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 3,
			'escola_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 3,
			'tipocurso_id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 3,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 4,
			'escola_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 4,
			'tipocurso_id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 4,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 5,
			'escola_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 5,
			'tipocurso_id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 5,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 6,
			'escola_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 6,
			'tipocurso_id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 6,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 7,
			'escola_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 7,
			'tipocurso_id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 7,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 8,
			'escola_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 8,
			'tipocurso_id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 8,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 9,
			'escola_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 9,
			'tipocurso_id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 9,
			'pagamento_exclusivo' => 1
		),
		array(
			'id' => 10,
			'escola_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'grauacademico_id' => 10,
			'tipocurso_id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'created' => '2012-09-25 16:33:20',
			'modified' => '2012-09-25 16:33:20',
			'faculdade_id' => 10,
			'pagamento_exclusivo' => 1
		),
	);

}
