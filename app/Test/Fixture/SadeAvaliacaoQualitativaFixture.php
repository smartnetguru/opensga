<?php
/**
 * SadeAvaliacaoQualitativaFixture
 *
 */
class SadeAvaliacaoQualitativaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'sade_avaliador_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'sade_parametro_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'resposta' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_obtidos' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
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
			'sade_avaliador_id' => 1,
			'entidade_id' => 1,
			'sade_parametro_id' => 1,
			'resposta' => 1,
			'pontos_obtidos' => 1,
			'anolectivo_id' => 1,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 2,
			'sade_avaliador_id' => 2,
			'entidade_id' => 2,
			'sade_parametro_id' => 2,
			'resposta' => 2,
			'pontos_obtidos' => 2,
			'anolectivo_id' => 2,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 3,
			'sade_avaliador_id' => 3,
			'entidade_id' => 3,
			'sade_parametro_id' => 3,
			'resposta' => 3,
			'pontos_obtidos' => 3,
			'anolectivo_id' => 3,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 4,
			'sade_avaliador_id' => 4,
			'entidade_id' => 4,
			'sade_parametro_id' => 4,
			'resposta' => 4,
			'pontos_obtidos' => 4,
			'anolectivo_id' => 4,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 5,
			'sade_avaliador_id' => 5,
			'entidade_id' => 5,
			'sade_parametro_id' => 5,
			'resposta' => 5,
			'pontos_obtidos' => 5,
			'anolectivo_id' => 5,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 6,
			'sade_avaliador_id' => 6,
			'entidade_id' => 6,
			'sade_parametro_id' => 6,
			'resposta' => 6,
			'pontos_obtidos' => 6,
			'anolectivo_id' => 6,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 7,
			'sade_avaliador_id' => 7,
			'entidade_id' => 7,
			'sade_parametro_id' => 7,
			'resposta' => 7,
			'pontos_obtidos' => 7,
			'anolectivo_id' => 7,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 8,
			'sade_avaliador_id' => 8,
			'entidade_id' => 8,
			'sade_parametro_id' => 8,
			'resposta' => 8,
			'pontos_obtidos' => 8,
			'anolectivo_id' => 8,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 9,
			'sade_avaliador_id' => 9,
			'entidade_id' => 9,
			'sade_parametro_id' => 9,
			'resposta' => 9,
			'pontos_obtidos' => 9,
			'anolectivo_id' => 9,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
		array(
			'id' => 10,
			'sade_avaliador_id' => 10,
			'entidade_id' => 10,
			'sade_parametro_id' => 10,
			'resposta' => 10,
			'pontos_obtidos' => 10,
			'anolectivo_id' => 10,
			'data' => '2012-09-25 16:41:52',
			'created' => '2012-09-25 16:41:52',
			'modified' => '2012-09-25 16:41:52'
		),
	);

}
