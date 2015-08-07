<?php
/**
 * TipoAvaliacao Fixture
 */
class TipoAvaliacaoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'TipoAvaliacao');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Teste Escrito',
			'codigo' => '',
			'epocaavaliacao_id' => '1',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '2',
			'name' => 'Teste Oral',
			'codigo' => '',
			'epocaavaliacao_id' => '1',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '3',
			'name' => 'Relatório',
			'codigo' => '',
			'epocaavaliacao_id' => '1',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '4',
			'name' => 'Exame Normal',
			'codigo' => '',
			'epocaavaliacao_id' => '2',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
		array(
			'id' => '5',
			'name' => 'Exame de Recorrência',
			'codigo' => '',
			'epocaavaliacao_id' => '3',
			'created' => '2013-06-01 16:37:28',
			'modified' => '2013-06-01 16:37:28'
		),
	);

}
