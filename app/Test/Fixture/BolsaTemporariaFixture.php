<?php
/**
 * BolsaTemporariaFixture
 *
 */
class BolsaTemporariaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'apelido' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nomes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bolsa_tipo_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'despacho' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'doador' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'alinea' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'candidatura_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'numero_estudante' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => 1,
			'apelido' => 'Lorem ipsum dolor sit amet',
			'nomes' => 'Lorem ipsum dolor sit amet',
			'bolsa_tipo_bolsa_id' => 1,
			'despacho' => 'Lorem ipsum dolor sit amet',
			'doador' => 'Lorem ipsum dolor sit amet',
			'alinea' => 'Lorem ipsum dolor sit amet',
			'candidatura_id' => 1,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-01-30 13:30:41',
			'modified' => '2014-01-30 13:30:41',
			'created_by' => 1,
			'modified_by' => 1,
			'curso_id' => 1
		),
	);

}
