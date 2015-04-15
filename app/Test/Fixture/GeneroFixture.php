<?php
/**
 * GeneroFixture
 *
 */
class GeneroFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Genero');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Masculino'
		),
		array(
			'id' => '2',
			'name' => 'Feminino'
		),
	);

}
