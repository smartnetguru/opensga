<?php
/**
 * SadeParametroFixture
 *
 */
class SadeParametroFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'codigo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sade_indicador_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'quantidade_padrao' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'pontos_padrao' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'pontos_bonificados' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'codigo' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 1,
			'quantidade_padrao' => 1,
			'pontos_padrao' => 1,
			'pontos_bonificados' => 1
		),
	);
}
