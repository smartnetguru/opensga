<?php
/**
 * NivelFixture
 *
 */
class NivelFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'nivels');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Bacharelato',
			'nivel' => null
		),
		array(
			'id' => '2',
			'name' => 'Licenciatura',
			'nivel' => null
		),
		array(
			'id' => '3',
			'name' => 'Mestrado',
			'nivel' => null
		),
		array(
			'id' => '4',
			'name' => 'Doutoramento',
			'nivel' => null
		),
	);

}
