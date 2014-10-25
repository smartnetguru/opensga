<?php
/**
 * TipoPrecedenciaFixture
 *
 */
class TipoPrecedenciaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'tipo_precedencias');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Obrigatoria'
		),
		array(
			'id' => '2',
			'name' => 'Aconselhada'
		),
	);

}
