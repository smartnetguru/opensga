<?php
/**
 * CooperacaoAcordoUnidadeOrganicaFixture
 *
 */
class CooperacaoAcordoUnidadeOrganicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'cooperacao_acordo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cooperacao_acordo_unidade_acordo_idx' => array('column' => 'cooperacao_acordo_id', 'unique' => 0),
			'cooperacao_acordo_unidade_unidade_idx' => array('column' => 'unidade_organica_id', 'unique' => 0)
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
			'unidade_organica_id' => 1,
			'cooperacao_acordo_id' => 1,
			'created' => '2013-11-18 09:15:06',
			'modified' => '2013-11-18 09:15:06',
			'created_by' => 1,
			'modified_by' => 1
		),
	);

}
