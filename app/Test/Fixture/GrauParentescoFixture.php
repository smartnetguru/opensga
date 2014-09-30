<?php
/**
 * GrauParentescoFixture
 *
 */
class GrauParentescoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'grau_parentescos');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Pai'
		),
		array(
			'id' => '2',
			'name' => 'Mae'
		),
		array(
			'id' => '3',
			'name' => 'Irmao'
		),
		array(
			'id' => '4',
			'name' => 'Familiar'
		),
		array(
			'id' => '5',
			'name' => 'Amigo'
		),
		array(
			'id' => '6',
			'name' => 'Outro'
		),
	);

}
