<?php
/**
 * EstadoObjectoFixture
 *
 */
class EstadoObjectoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'EstadoObjecto');

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
			'name' => 'Inactivo'
		),
		array(
			'id' => '3',
			'name' => 'Removido'
		),
	);

}
