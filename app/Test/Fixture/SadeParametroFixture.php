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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'integer', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sade_indicador_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'quantidade_padrao' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_padrao' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_bonificados' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
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
	);

}
