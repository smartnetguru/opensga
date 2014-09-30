<?php
/**
 * CerimoniaGraduacaoFixture
 *
 */
class CerimoniaGraduacaoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'CerimoniaGraduacao');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'data' => '2013-11-01 00:00:00',
			'local' => 'Campus Universitário',
			'name' => 'Novembro/2013'
		),
		array(
			'id' => '2',
			'data' => '0000-00-00 00:00:00',
			'local' => 'Campus Universitário',
			'name' => 'Maio/2014'
		),
	);

}
