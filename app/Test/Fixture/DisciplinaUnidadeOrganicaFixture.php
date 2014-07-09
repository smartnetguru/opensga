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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'estado_objecto_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => '1',
			'disciplina_id' => '211',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:00',
			'modified' => '2014-01-24 23:23:00',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '2',
			'disciplina_id' => '212',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:57',
			'modified' => '2014-01-24 23:23:57',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '3',
			'disciplina_id' => '6',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:57',
			'modified' => '2014-01-24 23:23:57',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '4',
			'disciplina_id' => '213',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:57',
			'modified' => '2014-01-24 23:23:57',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '5',
			'disciplina_id' => '214',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:58',
			'modified' => '2014-01-24 23:23:58',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '6',
			'disciplina_id' => '215',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:58',
			'modified' => '2014-01-24 23:23:58',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '7',
			'disciplina_id' => '216',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:58',
			'modified' => '2014-01-24 23:23:58',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '8',
			'disciplina_id' => '20',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:58',
			'modified' => '2014-01-24 23:23:58',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '9',
			'disciplina_id' => '21',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:58',
			'modified' => '2014-01-24 23:23:58',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '10',
			'disciplina_id' => '217',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:59',
			'modified' => '2014-01-24 23:23:59',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '11',
			'disciplina_id' => '218',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:59',
			'modified' => '2014-01-24 23:23:59',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '12',
			'disciplina_id' => '219',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:59',
			'modified' => '2014-01-24 23:23:59',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '13',
			'disciplina_id' => '220',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:23:59',
			'modified' => '2014-01-24 23:23:59',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '14',
			'disciplina_id' => '221',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:24:00',
			'modified' => '2014-01-24 23:24:00',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '15',
			'disciplina_id' => '222',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:24:00',
			'modified' => '2014-01-24 23:24:00',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '16',
			'disciplina_id' => '223',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:24:00',
			'modified' => '2014-01-24 23:24:00',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '17',
			'disciplina_id' => '224',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:24:01',
			'modified' => '2014-01-24 23:24:01',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '18',
			'disciplina_id' => '225',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:24:01',
			'modified' => '2014-01-24 23:24:01',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '19',
			'disciplina_id' => '226',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:24:01',
			'modified' => '2014-01-24 23:24:01',
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '20',
			'disciplina_id' => '227',
			'unidade_organica_id' => '1',
			'estado_objecto_id' => '1',
			'created' => '2014-01-24 23:24:01',
			'modified' => '2014-01-24 23:24:01',
			'created_by' => null,
			'modified_by' => null
		),
	);

}
