<?php
/**
 * AnolectivoepocaFixture
 *
 */
class AnolectivoepocaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'epocaavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'limite' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'anolectivo_fk' => array('column' => 'anolectivo_id', 'unique' => 0),
			'epocaavaliacao_fk' => array('column' => 'epocaavaliacao_id', 'unique' => 0)
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
			'anolectivo_id' => 1,
			'epocaavaliacao_id' => 1,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 2,
			'anolectivo_id' => 2,
			'epocaavaliacao_id' => 2,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 3,
			'anolectivo_id' => 3,
			'epocaavaliacao_id' => 3,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 4,
			'anolectivo_id' => 4,
			'epocaavaliacao_id' => 4,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 5,
			'anolectivo_id' => 5,
			'epocaavaliacao_id' => 5,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 6,
			'anolectivo_id' => 6,
			'epocaavaliacao_id' => 6,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 7,
			'anolectivo_id' => 7,
			'epocaavaliacao_id' => 7,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 8,
			'anolectivo_id' => 8,
			'epocaavaliacao_id' => 8,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 9,
			'anolectivo_id' => 9,
			'epocaavaliacao_id' => 9,
			'limite' => '2012-09-25'
		),
		array(
			'id' => 10,
			'anolectivo_id' => 10,
			'epocaavaliacao_id' => 10,
			'limite' => '2012-09-25'
		),
	);

}
