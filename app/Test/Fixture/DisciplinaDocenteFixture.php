<?php
/**
 * DisciplinaDocenteFixture
 *
 */
class DisciplinaDocenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'docente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'estado_objecto_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'disciplinas_docentes_disciplinas_fk_idx' => array('column' => 'disciplina_id', 'unique' => 0),
			'disciplinas_docentes_docentes_fk_idx' => array('column' => 'docente_id', 'unique' => 0),
			'disciplinas_docentes_estado_objectos_idx' => array('column' => 'estado_objecto_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
