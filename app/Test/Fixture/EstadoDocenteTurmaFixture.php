<?php
/**
 * EstadoDocenteTurmaFixture
 *
 */
class EstadoDocenteTurmaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'EstadoDocenteTurma');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Activo'
		),
		array(
			'id' => '2',
			'name' => 'Transferido'
		),
		array(
			'id' => '3',
			'name' => 'Demitido'
		),
		array(
			'id' => '4',
			'name' => 'Substituido'
		),
	);

}
