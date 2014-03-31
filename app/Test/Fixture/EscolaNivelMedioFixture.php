<?php
/**
 * EscolaNivelMedioFixture
 *
 */
class EscolaNivelMedioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'distrito_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pais_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name' => 'Escola Secundária do ISTEG',
			'distrito_id' => '502',
			'provincia_id' => '6',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '2',
			'name' => 'EScola Privada Malimusse',
			'distrito_id' => '618',
			'provincia_id' => '7',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '3',
			'name' => 'Escola Secundária de Nacarôa',
			'distrito_id' => '611',
			'provincia_id' => '7',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '4',
			'name' => 'Escola Secundária de Napipine',
			'distrito_id' => '618',
			'provincia_id' => '7',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '5',
			'name' => 'Escola Secundária Geral Mãe África',
			'distrito_id' => '1016',
			'provincia_id' => '11',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '6',
			'name' => 'Escola Secundária 25 de Novembro - Quissico',
			'distrito_id' => '312',
			'provincia_id' => '3',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '7',
			'name' => 'Instituto Superior Politecnico de Manica',
			'distrito_id' => '403',
			'provincia_id' => '4',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '8',
			'name' => 'Universidade Eduardo Mondlane',
			'distrito_id' => '312',
			'provincia_id' => '3',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '9',
			'name' => 'Escola Secundária de Mariri',
			'distrito_id' => '101',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '10',
			'name' => 'Escola Secundária de Macomia',
			'distrito_id' => '104',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '11',
			'name' => 'Centro Piloto de Muaguide',
			'distrito_id' => '106',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '12',
			'name' => 'Escola Secundária de Montepuez',
			'distrito_id' => '108',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '13',
			'name' => 'Escola de Artes e Ofícios de Montepuez',
			'distrito_id' => '108',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '14',
			'name' => 'Escola Industrial de Montepuez',
			'distrito_id' => '108',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '15',
			'name' => 'Escola Agrária de Bilibiza',
			'distrito_id' => '113',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '16',
			'name' => 'Escola Comunitária S. Carlos Luanga',
			'distrito_id' => '114',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '17',
			'name' => 'Escola Comunitária da ADEMO Pemba',
			'distrito_id' => '114',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '18',
			'name' => 'Escola Secundária de Pemba',
			'distrito_id' => '114',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '19',
			'name' => 'Colégio Liceal Dom José Garcia',
			'distrito_id' => '114',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '20',
			'name' => 'Seminário de S. José',
			'distrito_id' => '114',
			'provincia_id' => '1',
			'pais_id' => '152',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
	);

}
