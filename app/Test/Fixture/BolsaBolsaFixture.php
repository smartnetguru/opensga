<?php
/**
 * BolsaBolsaFixture
 *
 */
class BolsaBolsaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_candidatura_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'anolectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'banco_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'nib' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'conta_bancaria' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bolsa_fonte_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'processo_bolsa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data_atribuicao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'bolsa_criador_conta_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_estado_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bolsa_resultado_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'bolsas_alunos' => array('column' => 'aluno_id', 'unique' => 0),
			'bolsa_bolsas_candidaturas' => array('column' => 'bolsa_candidatura_id', 'unique' => 0),
			'bolsa_bolsas_anolectivos' => array('column' => 'anolectivo_id', 'unique' => 0),
			'bolsa_bolsas_bancos' => array('column' => 'banco_id', 'unique' => 0),
			'bolsa_bolsas_estado_bolsas' => array('column' => 'bolsa_estado_bolsa_id', 'unique' => 0),
			'bolsa_bolsas_fonte_bolsas' => array('column' => 'bolsa_fonte_bolsa_id', 'unique' => 0),
			'bolsa_bolsas_criador_contas' => array('column' => 'bolsa_criador_conta_id', 'unique' => 0),
			'bolsa_bolsas_resultados' => array('column' => 'bolsa_resultado_id', 'unique' => 0)
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
			'aluno_id' => 1,
			'bolsa_candidatura_id' => 1,
			'anolectivo_id' => 1,
			'banco_id' => 1,
			'nib' => 'Lorem ipsum dolor sit amet',
			'conta_bancaria' => 'Lorem ipsum dolor sit amet',
			'bolsa_fonte_bolsa_id' => 1,
			'processo_bolsa' => 'Lorem ipsum dolor sit amet',
			'data_atribuicao' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-06 05:48:41',
			'modified' => '2012-10-06 05:48:41',
			'bolsa_criador_conta_id' => 1,
			'bolsa_estado_bolsa_id' => 1,
			'created_by' => 1,
			'modified_by' => 1,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'bolsa_resultado_id' => 1
		),
	);

}
