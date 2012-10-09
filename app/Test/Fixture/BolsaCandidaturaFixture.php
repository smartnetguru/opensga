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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'ano_lectivo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_tipo_bolsa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'data_candidatura' => array('type' => 'date', 'null' => true, 'default' => null),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'bolsa_tipo_candidatura_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'nivel_estudante' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'tipo_bolsa_actual' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observacoes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'bolsa_candidaturas_alunos' => array('column' => 'aluno_id', 'unique' => 0),
			'bolsa_candidaturas_ano_lectivos' => array('column' => 'ano_lectivo_id', 'unique' => 0),
			'bolsa_candidaturas_bolsas' => array('column' => 'bolsa_bolsa_id', 'unique' => 0),
			'bolsa_candidatura_estado_objectos' => array('column' => 'estado_objecto_id', 'unique' => 0),
			'bolsa_candidaturas_tipo_bolsas' => array('column' => 'bolsa_tipo_bolsa_id', 'unique' => 0),
			'bolsa_candidaturas_entidades' => array('column' => 'entidade_id', 'unique' => 0),
			'bolsa_candidaturas_tipo_candidaturas' => array('column' => 'bolsa_tipo_candidatura_id', 'unique' => 0)
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
			'ano_lectivo_id' => 1,
			'bolsa_bolsa_id' => 1,
			'estado_objecto_id' => 1,
			'bolsa_tipo_bolsa_id' => 1,
			'created' => '2012-10-06 05:50:12',
			'modified' => '2012-10-06 05:50:12',
			'data_candidatura' => '2012-10-06',
			'entidade_id' => 1,
			'bolsa_tipo_candidatura_id' => 1,
			'nivel_estudante' => 1,
			'tipo_bolsa_actual' => 1,
			'observacoes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
