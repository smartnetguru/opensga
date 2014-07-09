<?php
/**
 * DocumentoIdentificacaoFixture
 *
 */
class DocumentoIdentificacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'BI'
		),
		array(
			'id' => '2',
			'name' => 'Passaporte'
		),
		array(
			'id' => '3',
			'name' => 'DIRE'
		),
		array(
			'id' => '4',
			'name' => 'Talao de Bilhete de Identificacao'
		),
		array(
			'id' => '5',
			'name' => 'Cartao de Eleitor'
		),
		array(
			'id' => '6',
			'name' => 'Carta de Conducao'
		),
		array(
			'id' => '7',
			'name' => 'Talao de Carta de Conducao'
		),
	);

}
