<?php
/**
 * TipoavaliacaoFixture
 *
 */
class TipoavaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'epocaavaliacao_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 1,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 2,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 3,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 4,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 5,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 6,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 7,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 8,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 9,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'epocaavaliacao_id' => 10,
			'created' => '2012-09-25 16:44:00',
			'modified' => '2012-09-25 16:44:00'
		),
	);

}
