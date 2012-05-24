<?php
/**
 * BolsaCandidaturaFixture
 *
 */
class BolsaCandidaturaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'ano_lectivo_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bolsa_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bolsa_resultado_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'bolsa_tipo_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'data_candidatura' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
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
			'aluno_id' => 1,
			'ano_lectivo_id' => 1,
			'bolsa_bolsa_id' => 1,
			'bolsa_resultado_id' => 1,
			'bolsa_tipo_bolsa_id' => 1,
			'created' => '2012-05-23 05:10:26',
			'modified' => '2012-05-23 05:10:26',
			'data_candidatura' => '2012-05-23 05:10:26'
		),
	);
}
