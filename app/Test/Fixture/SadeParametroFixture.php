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
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sade_indicador_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'quantidade_padrao' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_padrao' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'pontos_bonificados' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
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
			'codigo' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 1,
			'quantidade_padrao' => 1,
			'pontos_padrao' => 1,
			'pontos_bonificados' => 1
		),
		array(
			'id' => 2,
			'codigo' => 2,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 2,
			'quantidade_padrao' => 2,
			'pontos_padrao' => 2,
			'pontos_bonificados' => 2
		),
		array(
			'id' => 3,
			'codigo' => 3,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 3,
			'quantidade_padrao' => 3,
			'pontos_padrao' => 3,
			'pontos_bonificados' => 3
		),
		array(
			'id' => 4,
			'codigo' => 4,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 4,
			'quantidade_padrao' => 4,
			'pontos_padrao' => 4,
			'pontos_bonificados' => 4
		),
		array(
			'id' => 5,
			'codigo' => 5,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 5,
			'quantidade_padrao' => 5,
			'pontos_padrao' => 5,
			'pontos_bonificados' => 5
		),
		array(
			'id' => 6,
			'codigo' => 6,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 6,
			'quantidade_padrao' => 6,
			'pontos_padrao' => 6,
			'pontos_bonificados' => 6
		),
		array(
			'id' => 7,
			'codigo' => 7,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 7,
			'quantidade_padrao' => 7,
			'pontos_padrao' => 7,
			'pontos_bonificados' => 7
		),
		array(
			'id' => 8,
			'codigo' => 8,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 8,
			'quantidade_padrao' => 8,
			'pontos_padrao' => 8,
			'pontos_bonificados' => 8
		),
		array(
			'id' => 9,
			'codigo' => 9,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 9,
			'quantidade_padrao' => 9,
			'pontos_padrao' => 9,
			'pontos_bonificados' => 9
		),
		array(
			'id' => 10,
			'codigo' => 10,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sade_indicador_id' => 10,
			'quantidade_padrao' => 10,
			'pontos_padrao' => 10,
			'pontos_bonificados' => 10
		),
	);

}
