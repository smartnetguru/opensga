<?php
/**
 * SadeAvaliacaoAlunoFixture
 *
 */
class SadeAvaliacaoAlunoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'sade_parametro_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'resposta' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'pontos_obtidos' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,3'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
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
			'aluno_id' => 1,
			'entidade_id' => 1,
			'sade_parametro_id' => 1,
			'resposta' => 1,
			'pontos_obtidos' => 1,
			'anolectivo_id' => 1,
			'created' => '2012-05-07 20:57:59',
			'modified' => '2012-05-07 20:57:59'
		),
	);
}
