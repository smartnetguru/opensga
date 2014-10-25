<?php
/**
 * TipoInscricaoFixture
 *
 */
class TipoInscricaoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'TipoInscricao');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Frequencia'
		),
		array(
			'id' => '2',
			'name' => 'Avaliacoes'
		),
		array(
			'id' => '3',
			'name' => 'Exame Final'
		),
	);

}
