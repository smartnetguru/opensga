<?php
/**
 * FuncionariosFuncaoProfissionalFixture
 *
 */
class FuncionariosFuncaoProfissionalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'funcao_profissional_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'funcionarios_funcaos_idx' => array('column' => 'funcionario_id', 'unique' => 0),
			'funcaos_funcionarios_idx' => array('column' => 'funcao_profissional_id', 'unique' => 0),
			'funcionarios_funcaos_unidades_idx' => array('column' => 'unidade_organica_id', 'unique' => 0)
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
