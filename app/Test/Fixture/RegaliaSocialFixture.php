<?php
/**
 * RegaliaSocialFixture
 *
 */
class RegaliaSocialFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'RegaliaSocial');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Nenhuma'
		),
		array(
			'id' => '2',
			'name' => 'Bolsa Completa'
		),
		array(
			'id' => '3',
			'name' => 'Isenção'
		),
		array(
			'id' => '4',
			'name' => 'Redução'
		),
	);

}
