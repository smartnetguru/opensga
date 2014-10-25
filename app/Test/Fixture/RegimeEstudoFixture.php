<?php
/**
 * RegimeEstudoFixture
 *
 */
class RegimeEstudoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'RegimeEstudo');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Estudante em tempo Inteiro'
		),
		array(
			'id' => '2',
			'name' => 'Estudante Trabalhador'
		),
	);

}
