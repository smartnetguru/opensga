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
		'estado_objecto_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'groups_estado_objectos_fk_idx' => array('column' => 'estado_objecto_id', 'unique' => 0)
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
			'modified_by' => null,
			'estado_objecto_id' => '1'
		),
		array(
			'id' => '2',
			'name' => 'Funcionário',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null,
			'estado_objecto_id' => '1'
		),
		array(
			'id' => '3',
			'name' => 'Estudante',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null,
			'estado_objecto_id' => '1'
		),
		array(
			'id' => '4',
			'name' => 'Docente',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null,
			'estado_objecto_id' => '1'
		),
		array(
			'id' => '5',
			'name' => 'Reitoria',
			'descricao' => null,
			'created' => null,
			'modified' => '2014-01-22 22:59:15',
			'created_by' => null,
			'modified_by' => '1',
			'estado_objecto_id' => '2'
		),
		array(
			'id' => '6',
			'name' => 'Tesouraria',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null,
			'estado_objecto_id' => '1'
		),
		array(
			'id' => '7',
			'name' => 'Registro Académico',
			'descricao' => null,
			'created' => null,
			'modified' => '2014-01-22 22:57:43',
			'created_by' => null,
			'modified_by' => '1',
			'estado_objecto_id' => '1'
		),
		array(
			'id' => '8',
			'name' => 'Recursos Humanos',
			'descricao' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null,
			'estado_objecto_id' => '1'
		),
		array(
			'id' => '9',
			'name' => 'Cooperacao',
			'descricao' => 'Grupo de Utilizadores do Gabinete de Cooperacao',
			'created' => '2014-01-22 21:37:17',
			'modified' => '2014-01-22 21:37:17',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1'
		),
	);

}
