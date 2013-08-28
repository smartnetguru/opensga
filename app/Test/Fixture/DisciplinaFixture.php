<?php
/**
 * DisciplinaFixture
 *
 */
class DisciplinaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo_antigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Amostragem',
			'codigo' => 'A',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'A'
		),
		array(
			'id' => '2',
			'name' => 'ab1',
			'codigo' => 'AB1',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AB1'
		),
		array(
			'id' => '3',
			'name' => 'Arquitectura de Computadores',
			'codigo' => 'AC',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AC'
		),
		array(
			'id' => '4',
			'name' => 'Arquitectura de Computadores I',
			'codigo' => 'AC I',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AC I'
		),
		array(
			'id' => '5',
			'name' => 'Arquitectura de Computadores II',
			'codigo' => 'AC II',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AC II'
		),
		array(
			'id' => '6',
			'name' => 'Analise de Dados',
			'codigo' => 'AD',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AD'
		),
		array(
			'id' => '7',
			'name' => 'Análise Didáctica',
			'codigo' => 'ADD',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'ADD'
		),
		array(
			'id' => '8',
			'name' => 'Análise e Desenho de Sistemas I',
			'codigo' => 'ADS I',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'ADS I'
		),
		array(
			'id' => '9',
			'name' => 'Análise e Desenho de Sistemas II',
			'codigo' => 'ADS II',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'ADS II'
		),
		array(
			'id' => '10',
			'name' => 'Análise de Experimentos',
			'codigo' => 'AE',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AE'
		),
	);

}
