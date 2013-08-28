<?php
/**
 * TurmatipoavaliacaoFixture
 *
 */
class TurmatipoavaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'turma_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'scanpauta' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado_turma_avaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'peso' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ordem' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_marcada' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'data_realizada' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
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
