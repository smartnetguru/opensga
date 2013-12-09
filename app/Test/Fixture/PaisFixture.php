<?php
/**
 * PaiseFixture
 *
 */
class PaisFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'iso' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'iso3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nacionalidade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'iso' => 'AF',
			'iso3' => 'AFG',
			'name' => 'Afeganistão',
			'codigo' => '004',
			'nacionalidade' => null
		),
		array(
			'id' => '2',
			'iso' => 'ZA',
			'iso3' => 'ZAF',
			'name' => 'África do Sul',
			'codigo' => '710',
			'nacionalidade' => null
		),
		array(
			'id' => '3',
			'iso' => 'AX',
			'iso3' => 'ALA',
			'name' => 'Åland, Ilhas',
			'codigo' => '248',
			'nacionalidade' => null
		),
		array(
			'id' => '4',
			'iso' => 'AL',
			'iso3' => 'ALB',
			'name' => 'Albânia',
			'codigo' => '008',
			'nacionalidade' => null
		),
		array(
			'id' => '5',
			'iso' => 'DE',
			'iso3' => 'DEU',
			'name' => 'Alemanha',
			'codigo' => '276',
			'nacionalidade' => null
		),
		array(
			'id' => '6',
			'iso' => 'AD',
			'iso3' => 'AND',
			'name' => 'Andorra',
			'codigo' => '020',
			'nacionalidade' => null
		),
		array(
			'id' => '7',
			'iso' => 'AO',
			'iso3' => 'AGO',
			'name' => 'Angola',
			'codigo' => '024',
			'nacionalidade' => null
		),
		array(
			'id' => '8',
			'iso' => 'AI',
			'iso3' => 'AIA',
			'name' => 'Anguilla',
			'codigo' => '660',
			'nacionalidade' => null
		),
		array(
			'id' => '9',
			'iso' => 'AQ',
			'iso3' => 'ATA',
			'name' => 'Antárctida',
			'codigo' => '010',
			'nacionalidade' => null
		),
		array(
			'id' => '10',
			'iso' => 'AG',
			'iso3' => 'ATG',
			'name' => 'Antigua e Barbuda',
			'codigo' => '028',
			'nacionalidade' => null
		),
	);

}
