<?php
/**
 * RequisicoesTipoPedidoFixture
 *
 */
class RequisicoesTipoPedidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Certificado'
		),
		array(
			'id' => '2',
			'name' => 'Declaração'
		),
		array(
			'id' => '3',
			'name' => 'Audiência'
		),
		array(
			'id' => '4',
			'name' => 'Cartão de Estudante 2a via'
		),
		array(
			'id' => '5',
			'name' => 'Bolsa de Estudos'
		),
		array(
			'id' => '6',
			'name' => 'Cartão de Estudante(Novo Ingresso)'
		),
	);

}
