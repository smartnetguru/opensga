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
		'ano_lectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'banco_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'nib' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'conta_bancaria' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bolsa_fonte_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'processo_bolsa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_atribuicao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'bolsa_criador_conta_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_estado_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bolsa_resultado_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'bolsas_alunos' => array('column' => 'aluno_id', 'unique' => 0),
			'bolsa_bolsas_candidaturas' => array('column' => 'bolsa_candidatura_id', 'unique' => 0),
			'bolsa_bolsas_anolectivos' => array('column' => 'ano_lectivo_id', 'unique' => 0),
			'bolsa_bolsas_bancos' => array('column' => 'banco_id', 'unique' => 0),
			'bolsa_bolsas_estado_bolsas' => array('column' => 'bolsa_estado_bolsa_id', 'unique' => 0),
			'bolsa_bolsas_fonte_bolsas' => array('column' => 'bolsa_fonte_bolsa_id', 'unique' => 0),
			'bolsa_bolsas_criador_contas' => array('column' => 'bolsa_criador_conta_id', 'unique' => 0),
			'bolsa_bolsas_resultados' => array('column' => 'bolsa_resultado_id', 'unique' => 0)
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
