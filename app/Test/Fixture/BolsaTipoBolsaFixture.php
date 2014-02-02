<?php
/**
 * BolsaTipoBolsaFixture
 *
 */
class BolsaTipoBolsaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valor_bolsa' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
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
			'name' => 'Mérito',
			'valor_bolsa' => null
		),
		array(
			'id' => '2',
			'name' => 'Completa',
			'valor_bolsa' => null
		),
		array(
			'id' => '3',
			'name' => 'Reduzida',
			'valor_bolsa' => null
		),
		array(
			'id' => '4',
			'name' => 'Isenção',
			'valor_bolsa' => null
		),
		array(
			'id' => '5',
			'name' => 'Indeferido',
			'valor_bolsa' => null
		),
		array(
			'id' => '6',
			'name' => 'Redução 50%',
			'valor_bolsa' => null
		),
		array(
			'id' => '7',
			'name' => 'Alojamento',
			'valor_bolsa' => null
		),
		array(
			'id' => '8',
			'name' => 'Alojamento + Insenção',
			'valor_bolsa' => null
		),
	);

}
