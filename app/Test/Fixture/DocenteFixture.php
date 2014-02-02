<?php
/**
 * DocenteFixture
 *
 */
class DocenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'docente_categoria_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'docente_funcao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'regime_trabalho_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'entidade_id' => '42509',
			'docente_categoria_id' => null,
			'docente_funcao_id' => null,
			'unidade_organica_id' => '1',
			'regime_trabalho_id' => null,
			'created' => '2014-01-28 15:59:36',
			'modified' => '2014-01-28 15:59:36',
			'created_by' => '1',
			'modified_by' => null
		),
	);

}
