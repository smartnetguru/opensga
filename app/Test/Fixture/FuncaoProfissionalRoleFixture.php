<?php
/**
 * FuncaoProfissionalRoleFixture
 *
 */
class FuncaoProfissionalRoleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'funcao_profissional_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'role_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'funcao_profissional_id' => 1,
			'role_id' => 1,
			'created' => '2014-02-19 23:19:41',
			'modified' => '2014-02-19 23:19:41',
			'created_by' => 1,
			'modified_by' => 1,
			'estado_objecto_id' => 1
		),
	);

}
