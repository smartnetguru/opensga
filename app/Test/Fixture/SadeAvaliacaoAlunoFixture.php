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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'sade_parametro_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'resposta' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_obtidos' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
