<?php
/**
 * AvaliacaoFixture
 *
 */
class AvaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'inscricao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'pontos' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2'),
		'data_avaliacao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'turma_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'turmatipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
