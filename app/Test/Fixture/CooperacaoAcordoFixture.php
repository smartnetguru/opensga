<?php
/**
 * CooperacaoAcordoFixture
 *
 */
class CooperacaoAcordoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'instituicao_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_assinatura' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_validade' => array('type' => 'date', 'null' => true, 'default' => null),
		'prazo_validade' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cooperacao_tipo_acordo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cooperacao_acordos_instituicaos_idx' => array('column' => 'instituicao_id', 'unique' => 0),
			'cooperacao_acordos_tipo_acordos_idx' => array('column' => 'cooperacao_tipo_acordo_id', 'unique' => 0)
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
