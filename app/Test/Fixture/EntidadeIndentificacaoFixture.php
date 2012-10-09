<?php
/**
 * EntidadeIndentificacaoFixture
 *
 */
class EntidadeIndentificacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'documento_identificacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_emissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_validade' => array('type' => 'date', 'null' => true, 'default' => null),
		'numero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'local_emissao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'entidade_id' => 1,
			'documento_identificacao_id' => 1,
			'data_emissao' => '2012-10-05',
			'data_validade' => '2012-10-05',
			'numero' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:26:15',
			'modified' => '2012-10-05 13:26:15',
			'created_by' => 1,
			'modified_by' => 1,
			'estado_objecto_id' => 1,
			'local_emissao' => 'Lorem ipsum dolor sit amet'
		),
	);

}
