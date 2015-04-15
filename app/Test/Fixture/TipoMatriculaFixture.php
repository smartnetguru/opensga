<?php
/**
 * TipoMatriculaFixture
 *
 */
class TipoMatriculaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'TipoMatricula');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Novo Ingresso'
		),
		array(
			'id' => '2',
			'name' => 'Renovação'
		),
		array(
			'id' => '3',
			'name' => 'Reingresso'
		),
	);

}
