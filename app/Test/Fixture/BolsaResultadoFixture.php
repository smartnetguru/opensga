<?php
/**
 * BolsaResultadoFixture
 *
 */
class BolsaResultadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'bolsa_candidatura_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_tipo_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_motivo_indeferimento_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'data_resultado' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observacoes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'bolsa_resultados_candidaturas' => array('column' => 'bolsa_candidatura_id', 'unique' => 0),
			'bolsa_resultados_tipo_bolsas' => array('column' => 'bolsa_tipo_bolsa_id', 'unique' => 0),
			'bolsa_resultados_motivo_indeferimentos' => array('column' => 'bolsa_motivo_indeferimento_id', 'unique' => 0)
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
			'bolsa_candidatura_id' => 1,
			'bolsa_tipo_bolsa_id' => 1,
			'bolsa_motivo_indeferimento_id' => 1,
			'data_resultado' => '2012-10-06',
			'created' => '2012-10-06 05:54:35',
			'modified' => '2012-10-06 05:54:35',
			'created_by' => 1,
			'modified_by' => 1,
			'observacoes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
