<?php
/**
 * DisciplinaUnidadeOrganicaFixture
 *
 */
class DisciplinaUnidadeOrganicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'estado_objecto_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'unsigned' => true, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'disciplinas_unidade_disciplinas_fk_idx' => array('column' => 'disciplina_id', 'unique' => 0),
			'disciplinas_unidade_unidade_fk_idx' => array('column' => 'unidade_organica_id', 'unique' => 0),
			'disciplinas_unidade_estado_objectos_fk_idx' => array('column' => 'estado_objecto_id', 'unique' => 0)
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
			'disciplina_id' => 1,
			'unidade_organica_id' => 1,
			'estado_objecto_id' => 1,
			'created' => '2015-07-08 01:40:08',
			'modified' => '2015-07-08 01:40:08',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
