<?php
/**
 * SadeAutoAvaliacaoFixture
 *
 */
class SadeAutoAvaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'sade_parametro_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'resposta' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_obtidos' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_bonificados' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'detalhes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestrelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sade_avaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
