<?php
/**
 * GrauAcademicoFixture
 *
 */
class GrauAcademicoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'GrauAcademico');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Bacharelato'
		),
		array(
			'id' => '2',
			'name' => 'Licenciatura'
		),
		array(
			'id' => '3',
			'name' => 'Mestrado'
		),
		array(
			'id' => '4',
			'name' => 'Doutoramento'
		),
	);

}
