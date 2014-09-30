<?php
/**
 * EstadoTurmaFixture
 *
 */
class EstadoTurmaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'EstadoTurma');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Activa'
		),
		array(
			'id' => '2',
			'name' => 'Fechada'
		),
		array(
			'id' => '3',
			'name' => 'Cancelada'
		),
	);

}
