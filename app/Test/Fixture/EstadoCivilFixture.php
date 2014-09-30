<?php
/**
 * EstadoCivilFixture
 *
 */
class EstadoCivilFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'EstadoCivil');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Solteiro'
		),
		array(
			'id' => '2',
			'name' => 'Casado'
		),
		array(
			'id' => '3',
			'name' => 'União Marital'
		),
		array(
			'id' => '4',
			'name' => 'Divorciado'
		),
		array(
			'id' => '5',
			'name' => 'Separado'
		),
		array(
			'id' => '6',
			'name' => 'Viúvo'
		),
	);

}
