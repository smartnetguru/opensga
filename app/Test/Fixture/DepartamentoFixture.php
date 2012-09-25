<?php
/**
 * DepartamentoFixture
 *
 */
class DepartamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pagamento_exclusivo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'escola_id' => 1,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 2,
			'escola_id' => 2,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 3,
			'escola_id' => 3,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 4,
			'escola_id' => 4,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 5,
			'escola_id' => 5,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 6,
			'escola_id' => 6,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 7,
			'escola_id' => 7,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 8,
			'escola_id' => 8,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 9,
			'escola_id' => 9,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'faculdade_id' => 10,
			'escola_id' => 10,
			'pagamento_exclusivo' => 1,
			'codigo' => 'Lorem ipsum dolor sit a'
		),
	);

}
