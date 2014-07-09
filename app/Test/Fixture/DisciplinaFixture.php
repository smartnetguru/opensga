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
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo_antigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'codigo_antigo' => 'A',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '2',
			'name' => 'ab1',
			'codigo' => 'AB1',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AB1',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '3',
			'name' => 'Arquitectura de Computadores',
			'codigo' => 'AC',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AC',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '4',
			'name' => 'Arquitectura de Computadores I',
			'codigo' => 'AC I',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AC I',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '5',
			'name' => 'Arquitectura de Computadores II',
			'codigo' => 'AC II',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AC II',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '6',
			'name' => 'Analise de Dados',
			'codigo' => 'AD',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AD',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '7',
			'name' => 'Análise Didáctica',
			'codigo' => 'ADD',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'ADD',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '8',
			'name' => 'Análise e Desenho de Sistemas I',
			'codigo' => 'ADS I',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'ADS I',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '9',
			'name' => 'Análise e Desenho de Sistemas II',
			'codigo' => 'ADS II',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'ADS II',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '10',
			'name' => 'Análise de Experimentos',
			'codigo' => 'AE',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AE',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '11',
			'name' => 'Análise Funcional',
			'codigo' => 'AF',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AF',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '12',
			'name' => 'Analise Funcional I',
			'codigo' => 'AF I',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AF I',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '13',
			'name' => 'Analise Funcional II',
			'codigo' => 'AF II',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AF II',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '14',
			'name' => 'Algebra Geral ',
			'codigo' => 'AG ',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AG ',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '15',
			'name' => 'Astronomia Geodésica',
			'codigo' => 'AGD',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AGD',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '16',
			'name' => 'Álgebra Linear',
			'codigo' => 'AL',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AL',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '17',
			'name' => 'Álgebra Linear I',
			'codigo' => 'AL I',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AL I',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '18',
			'name' => 'Álgebra Linear II',
			'codigo' => 'AL II',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AL II',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '19',
			'name' => 'Álgebra Linear e Geometria Analítica',
			'codigo' => 'ALGA',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'ALGA',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '20',
			'name' => 'Análise Matemática I',
			'codigo' => 'AM I',
			'unidade_organica_id' => null,
			'codigo_antigo' => 'AM I',
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
	);

}
