<?php
/**
 * EnderecoEntidadeFixture
 *
 */
class EnderecoEntidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pais' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'telefone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'celular' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bairro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rua' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quarteirao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'numero_casa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipo_endereco_entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'cidade_id' => 1,
			'provincia_id' => 1,
			'pais' => 1,
			'estado_objecto_id' => 1,
			'telefone' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'celular' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'bairro' => 'Lorem ipsum dolor sit amet',
			'rua' => 'Lorem ipsum dolor sit amet',
			'quarteirao' => 'Lorem ipsum dolor sit amet',
			'numero_casa' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 14:07:42',
			'modified' => '2012-10-05 14:07:42',
			'created_by' => 1,
			'modified_by' => 1,
			'tipo_endereco_entidade_id' => 1
		),
	);

}
