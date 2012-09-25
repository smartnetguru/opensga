<?php
/**
 * CicloPlanoEstudoFixture
 *
 */
class CicloPlanoEstudoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero_ciclo' => array('type' => 'integer', 'null' => true, 'default' => null),
		'duracao' => array('type' => 'integer', 'null' => true, 'default' => null),
		'numero_semestres' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'numero_ciclo' => 1,
			'duracao' => 1,
			'numero_semestres' => 1,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 1,
			'modified_by' => 1,
			'planoestudo_id' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 2,
			'duracao' => 2,
			'numero_semestres' => 2,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 2,
			'modified_by' => 2,
			'planoestudo_id' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 3,
			'duracao' => 3,
			'numero_semestres' => 3,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 3,
			'modified_by' => 3,
			'planoestudo_id' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 4,
			'duracao' => 4,
			'numero_semestres' => 4,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 4,
			'modified_by' => 4,
			'planoestudo_id' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 5,
			'duracao' => 5,
			'numero_semestres' => 5,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 5,
			'modified_by' => 5,
			'planoestudo_id' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 6,
			'duracao' => 6,
			'numero_semestres' => 6,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 6,
			'modified_by' => 6,
			'planoestudo_id' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 7,
			'duracao' => 7,
			'numero_semestres' => 7,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 7,
			'modified_by' => 7,
			'planoestudo_id' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 8,
			'duracao' => 8,
			'numero_semestres' => 8,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 8,
			'modified_by' => 8,
			'planoestudo_id' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 9,
			'duracao' => 9,
			'numero_semestres' => 9,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 9,
			'modified_by' => 9,
			'planoestudo_id' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'numero_ciclo' => 10,
			'duracao' => 10,
			'numero_semestres' => 10,
			'created' => '2012-09-25 16:32:38',
			'modified' => '2012-09-25 16:32:38',
			'created_by' => 10,
			'modified_by' => 10,
			'planoestudo_id' => 10
		),
	);

}
