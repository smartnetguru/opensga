<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => '1',
			'name' => 'Administrador',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '2',
			'name' => 'Funcionário',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '3',
			'name' => 'Estudante',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '4',
			'name' => 'Docente',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '5',
			'name' => 'Reitoria',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '6',
			'name' => 'Tesouraria',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '7',
			'name' => 'Registro Académico',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '8',
			'name' => 'Recursos Humanos',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
	);

}
