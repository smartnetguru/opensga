<?php
/**
 * FuncionarioUnidadeOrganica Fixture
 */
class FuncionarioUnidadeOrganicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'funcionario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'unidade_organica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'data_inicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_fim' => array('type' => 'date', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
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
			'id' => '1',
			'funcionario_id' => '475',
			'unidade_organica_id' => '19',
			'data_inicio' => '2015-09-09',
			'data_fim' => null,
			'estado_objecto_id' => '1',
			'created' => '2015-09-09 21:00:57',
			'modified' => '2015-09-09 21:00:57',
			'created_by' => '42646',
			'modified_by' => null
		),
		array(
			'id' => '2',
			'funcionario_id' => '475',
			'unidade_organica_id' => '19',
			'data_inicio' => '2015-09-09',
			'data_fim' => null,
			'estado_objecto_id' => '1',
			'created' => '2015-09-09 21:02:27',
			'modified' => '2015-09-09 21:02:27',
			'created_by' => '42646',
			'modified_by' => null
		),
	);

}
