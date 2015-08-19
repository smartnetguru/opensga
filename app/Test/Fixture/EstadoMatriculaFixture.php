<?php
/**
 * EstadoMatriculaFixture
 *
 */
class EstadoMatriculaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'EstadoMatricula');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Normal'
		),
		array(
			'id' => '2',
			'name' => 'Suspensa'
		),
		array(
			'id' => '3',
			'name' => 'Anulada'
		),
		array(
			'id' => '4',
			'name' => 'Concluida'
		),
	);

}
