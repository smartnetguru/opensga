<?php
/**
 * FaculdadeTipoPagamentoFixture
 *
 */
class FaculdadeTipoPagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'faculdade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'valor' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'faculdade_id' => 1,
			'tipopagamento_id' => 1,
			'valor' => 1
		),
	);
}
