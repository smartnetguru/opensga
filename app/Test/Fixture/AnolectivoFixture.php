<?php
/**
 * AnolectivoFixture
 *
 */
class AnolectivoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ano' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'num_semestre' => array('type' => 'integer', 'null' => false, 'default' => null),
		'datainicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'datafim' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'regimelectivo_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 1,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 1
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 2,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 2
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 3,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 3
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 4,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 4
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 5,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 5
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 6,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 6
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 7,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 7
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 8,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 8
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 9,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 9
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'ano' => 'Lorem ipsum dolor sit amet',
			'num_semestre' => 10,
			'datainicio' => '2012-09-25',
			'datafim' => '2012-09-25',
			'created' => '2012-09-25 16:30:53',
			'modified' => '2012-09-25 16:30:53',
			'regimelectivo_id' => 10
		),
	);

}
