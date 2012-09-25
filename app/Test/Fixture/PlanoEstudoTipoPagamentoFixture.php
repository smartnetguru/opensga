<?php
/**
 * PlanoEstudoTipoPagamentoFixture
 *
 */
class PlanoEstudoTipoPagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'planoestudo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipopagamento_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,3'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
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
			'planoestudo_id' => 1,
			'tipopagamento_id' => 1,
			'valor' => 1
		),
		array(
			'id' => 2,
			'planoestudo_id' => 2,
			'tipopagamento_id' => 2,
			'valor' => 2
		),
		array(
			'id' => 3,
			'planoestudo_id' => 3,
			'tipopagamento_id' => 3,
			'valor' => 3
		),
		array(
			'id' => 4,
			'planoestudo_id' => 4,
			'tipopagamento_id' => 4,
			'valor' => 4
		),
		array(
			'id' => 5,
			'planoestudo_id' => 5,
			'tipopagamento_id' => 5,
			'valor' => 5
		),
		array(
			'id' => 6,
			'planoestudo_id' => 6,
			'tipopagamento_id' => 6,
			'valor' => 6
		),
		array(
			'id' => 7,
			'planoestudo_id' => 7,
			'tipopagamento_id' => 7,
			'valor' => 7
		),
		array(
			'id' => 8,
			'planoestudo_id' => 8,
			'tipopagamento_id' => 8,
			'valor' => 8
		),
		array(
			'id' => 9,
			'planoestudo_id' => 9,
			'tipopagamento_id' => 9,
			'valor' => 9
		),
		array(
			'id' => 10,
			'planoestudo_id' => 10,
			'tipopagamento_id' => 10,
			'valor' => 10
		),
	);

}
