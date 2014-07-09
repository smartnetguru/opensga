<?php
/**
 * CidadeFixture
 *
 */
class CidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pais_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo_admissao' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'codigo' => null,
			'name' => 'Cidade de Pemba',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '2',
			'codigo' => null,
			'name' => 'Distrito de Ancuabe',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '3',
			'codigo' => null,
			'name' => 'Distrito de Balama',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '4',
			'codigo' => null,
			'name' => 'Distrito de Chiure',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '5',
			'codigo' => null,
			'name' => 'Distrito de Ibo',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '6',
			'codigo' => null,
			'name' => 'Distrito de Macomia',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '7',
			'codigo' => null,
			'name' => 'Distrito de Mecufi',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '8',
			'codigo' => null,
			'name' => 'Distrito de Meluco',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '9',
			'codigo' => null,
			'name' => 'Distrito de Mocimboa da Praia',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '10',
			'codigo' => null,
			'name' => 'Distrito de Montepuez',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '11',
			'codigo' => null,
			'name' => 'Distrito de Mueda',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '12',
			'codigo' => null,
			'name' => 'Distrito de Muidumbe',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '13',
			'codigo' => null,
			'name' => 'Distrito de Namuno',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '14',
			'codigo' => null,
			'name' => 'Distrito de Nangade',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '15',
			'codigo' => null,
			'name' => 'Distrito de Palma',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '16',
			'codigo' => null,
			'name' => 'Distrito de Pemba-Metuge',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '17',
			'codigo' => null,
			'name' => 'Distrito de Quissanga',
			'provincia_id' => '1',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '18',
			'codigo' => null,
			'name' => 'Cidade de Xai-Xai',
			'provincia_id' => '2',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '19',
			'codigo' => null,
			'name' => 'Distrito de Bilene',
			'provincia_id' => '2',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
		array(
			'id' => '20',
			'codigo' => null,
			'name' => 'Distrito de Chibuto',
			'provincia_id' => '2',
			'pais_id' => '152',
			'codigo_admissao' => null
		),
	);

}
