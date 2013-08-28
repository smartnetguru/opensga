<?php
/**
 * CandidatoAlumniFixture
 *
 */
class CandidatoAlumniFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'apelido' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nomes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_nascimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'nome_pai' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nome_mae' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'genero_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'estado_civil_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'pais_nascimento' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'provincia_nascimento' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'cidade_nascimento' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'pais_morada' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'provincia_morada' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'cidade_morada' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'numero_estudante' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telemovel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unidade_organica_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'ano_conclusao' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'grau_academico_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observacoes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'documento_identificacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'documento_identificacao_numero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'documento_identificacao_data_emissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'documento_identificacao_local_emissao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grau_academico_actual' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ano_ingresso_uem' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'local_trabalho_actual' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'c_alumnis_generos_idx' => array('column' => 'genero_id', 'unique' => 0),
			'c_alumnis_estado_civils_idx' => array('column' => 'estado_civil_id', 'unique' => 0),
			'c_alumnis_pais_nascimentos_idx' => array('column' => 'pais_nascimento', 'unique' => 0),
			'c_alumnis_pais_morada_idx' => array('column' => 'pais_morada', 'unique' => 0),
			'c_alumnis_provincia_nascimentos_idx' => array('column' => 'provincia_nascimento', 'unique' => 0),
			'c_alumnis_provincia_moradas_idx' => array('column' => 'provincia_morada', 'unique' => 0),
			'c_alumnis_cidade_nascimentos_idx' => array('column' => 'cidade_nascimento', 'unique' => 0),
			'c_alumnis_cidades_moradas_idx' => array('column' => 'cidade_morada', 'unique' => 0),
			'c_alumnis_unidades_organicas_idx' => array('column' => 'unidade_organica_id', 'unique' => 0),
			'c_alumnis_cursos_idx' => array('column' => 'curso_id', 'unique' => 0),
			'c_alumnis_graus_academicos_idx' => array('column' => 'grau_academico_id', 'unique' => 0)
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
			'apelido' => 'Leonardo',
			'nomes' => 'Elisio',
			'data_nascimento' => '1991-07-09',
			'nome_pai' => 'Leonardo',
			'nome_mae' => 'Ester',
			'genero_id' => '1',
			'estado_civil_id' => '1',
			'pais_nascimento' => '152',
			'provincia_nascimento' => '1',
			'cidade_nascimento' => '1',
			'pais_morada' => '152',
			'provincia_morada' => '1',
			'cidade_morada' => '1',
			'numero_estudante' => '2010',
			'email' => 'Elisio.leonardo@gmail.com',
			'telemovel' => 'Leonardo',
			'unidade_organica_id' => '1',
			'ano_conclusao' => '2012',
			'curso_id' => '1',
			'grau_academico_id' => '1',
			'created' => '2013-07-24 09:26:34',
			'modified' => '2013-07-24 09:26:34',
			'created_by' => null,
			'modified_by' => null,
			'observacoes' => null,
			'documento_identificacao_id' => null,
			'documento_identificacao_numero' => null,
			'documento_identificacao_data_emissao' => null,
			'documento_identificacao_local_emissao' => null,
			'grau_academico_actual' => null,
			'ano_ingresso_uem' => null,
			'local_trabalho_actual' => null
		),
	);

}
