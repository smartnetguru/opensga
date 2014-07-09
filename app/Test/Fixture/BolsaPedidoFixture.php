<?php
/**
 * BolsaPedidoFixture
 *
 */
class BolsaPedidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'ano_lectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_tipo_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'data_pedido' => array('type' => 'date', 'null' => true, 'default' => null),
		'nivel_estudante' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'tipo_bolsa_actual' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observacoes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'agregado_familiar' => array('type' => 'integer', 'null' => true, 'default' => null),
		'irmaos_estudantes' => array('type' => 'integer', 'null' => true, 'default' => null),
		'irmaos_trabalhadores' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'bolsa_candidaturas_alunos' => array('column' => 'aluno_id', 'unique' => 0),
			'bolsa_candidaturas_ano_lectivos' => array('column' => 'ano_lectivo_id', 'unique' => 0),
			'bolsa_candidaturas_bolsas' => array('column' => 'bolsa_bolsa_id', 'unique' => 0),
			'bolsa_candidatura_estado_objectos' => array('column' => 'estado_objecto_id', 'unique' => 0),
			'bolsa_candidaturas_tipo_bolsas' => array('column' => 'bolsa_tipo_bolsa_id', 'unique' => 0)
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
