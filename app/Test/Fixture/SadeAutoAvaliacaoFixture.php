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
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sade_parametro_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'resposta' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'pontos_obtidos' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'pontos_bonificados' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'detalhes' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'semestrelectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'sade_avaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
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
			'entidade_id' => 1,
			'sade_parametro_id' => 1,
			'resposta' => 1,
			'pontos_obtidos' => 1,
			'pontos_bonificados' => 1,
			'detalhes' => 'Lorem ipsum dolor sit amet',
			'anolectivo_id' => 1,
			'semestrelectivo_id' => 1,
			'data' => '2012-05-07 20:56:55',
			'sade_avaliacao_id' => 1
		),
	);
}
