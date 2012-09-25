<?php
/**
 * SadeIndicadorFixture
 *
 */
class SadeIndicadorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'integer', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'anexo' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'codigo' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 1
		),
		array(
			'id' => 2,
			'codigo' => 2,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 2
		),
		array(
			'id' => 3,
			'codigo' => 3,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 3
		),
		array(
			'id' => 4,
			'codigo' => 4,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 4
		),
		array(
			'id' => 5,
			'codigo' => 5,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 5
		),
		array(
			'id' => 6,
			'codigo' => 6,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 6
		),
		array(
			'id' => 7,
			'codigo' => 7,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 7
		),
		array(
			'id' => 8,
			'codigo' => 8,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 8
		),
		array(
			'id' => 9,
			'codigo' => 9,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 9
		),
		array(
			'id' => 10,
			'codigo' => 10,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'anexo' => 10
		),
	);

}
