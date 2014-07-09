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
		'numero_candidato' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'apelido' => 'DE MELLO',
			'nomes' => 'Brainer ',
			'bolsa_tipo_bolsa_id' => '2',
			'despacho' => null,
			'doador' => 'OE',
			'alinea' => '',
			'candidatura_id' => '157',
			'numero_estudante' => '20142225',
			'created' => '2014-01-31 03:42:14',
			'modified' => '2014-01-31 03:42:14',
			'created_by' => '1',
			'modified_by' => null,
			'curso_id' => '50',
			'numero_candidato' => '15503'
		),
		array(
			'id' => '2',
			'apelido' => 'MASSAPA',
			'nomes' => 'Sergio Cornelio',
			'bolsa_tipo_bolsa_id' => '4',
			'despacho' => null,
			'doador' => 'OE',
			'alinea' => '',
			'candidatura_id' => '161',
			'numero_estudante' => '20143430',
			'created' => '2014-01-31 03:42:26',
			'modified' => '2014-01-31 03:42:26',
			'created_by' => '1',
			'modified_by' => null,
			'curso_id' => '137',
			'numero_candidato' => '16648'
		),
		array(
			'id' => '3',
			'apelido' => 'SAIDE',
			'nomes' => 'AssmÁ Rachide Assane',
			'bolsa_tipo_bolsa_id' => '5',
			'despacho' => null,
			'doador' => 'N',
			'alinea' => '',
			'candidatura_id' => '147',
			'numero_estudante' => '20144203',
			'created' => '2014-01-31 03:42:38',
			'modified' => '2014-01-31 03:42:38',
			'created_by' => '1',
			'modified_by' => null,
			'curso_id' => '16',
			'numero_candidato' => '13855'
		),
	);

}
