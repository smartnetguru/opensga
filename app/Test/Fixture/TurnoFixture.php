<?php
/**
 * TurnoFixture
 *
 */
class TurnoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pagamento_mensalidade' => array('type' => 'integer', 'null' => true, 'default' => null),
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
		array(
			'id' => '1',
			'name' => 'Diúrno',
			'pagamento_mensalidade' => null
		),
		array(
			'id' => '2',
			'name' => 'Pós-Laboral',
			'pagamento_mensalidade' => null
		),
		array(
			'id' => '3',
			'name' => 'Ensino á Distância',
			'pagamento_mensalidade' => null
		),
	);

}
