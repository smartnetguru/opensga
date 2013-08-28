<?php
/**
 * PrecedenciaFixture
 *
 */
class PrecedenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'planoestudoano_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'precedencia' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipoprecedencia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
