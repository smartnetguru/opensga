<?php
/**
 * PlanoestudoanoFixture
 *
 */
class PlanoestudoanoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'plano_estudo_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ano' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cargahorariateoricas' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'cargahorariapraticas' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'creditos' => array('type' => 'integer', 'null' => true, 'default' => null),
		'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ramo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre_sequencial' => array('type' => 'integer', 'null' => true, 'default' => null),
		'horas_docente' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horas_individual' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'carga_total' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ciclo_plano_estudo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ciclo_numero' => array('type' => 'integer', 'null' => true, 'default' => null),
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
		array(
			'id' => '1',
			'plano_estudo_id' => '1',
			'ano' => '2',
			'semestre' => '2',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '4',
			'disciplina_id' => '1',
			'codigo' => 'A-2005-2004',
			'ramo_id' => '-1',
			'semestre_sequencial' => '4',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '2',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '2',
			'plano_estudo_id' => '2',
			'ano' => '2',
			'semestre' => '2',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '4',
			'disciplina_id' => '1',
			'codigo' => 'A-2005-2010',
			'ramo_id' => '-1',
			'semestre_sequencial' => '4',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '2',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '3',
			'plano_estudo_id' => '3',
			'ano' => '2',
			'semestre' => '2',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '4',
			'disciplina_id' => '1',
			'codigo' => 'A-2015-2004',
			'ramo_id' => '-1',
			'semestre_sequencial' => '4',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '2',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '4',
			'plano_estudo_id' => '4',
			'ano' => '2',
			'semestre' => '2',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '4',
			'disciplina_id' => '1',
			'codigo' => 'A-2015-2010',
			'ramo_id' => '-1',
			'semestre_sequencial' => '4',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '2',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '5',
			'plano_estudo_id' => '5',
			'ano' => '1',
			'semestre' => '1',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '6',
			'disciplina_id' => '3',
			'codigo' => 'AC-2004-2010',
			'ramo_id' => '-1',
			'semestre_sequencial' => '1',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '12',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '6',
			'plano_estudo_id' => '6',
			'ano' => '2',
			'semestre' => '1',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '6',
			'disciplina_id' => '3',
			'codigo' => 'AC-2004-2012',
			'ramo_id' => '-1',
			'semestre_sequencial' => '3',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '6',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '7',
			'plano_estudo_id' => '7',
			'ano' => '1',
			'semestre' => '1',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '6',
			'disciplina_id' => '3',
			'codigo' => 'AC-2014-2010',
			'ramo_id' => '-1',
			'semestre_sequencial' => '1',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '4',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '8',
			'plano_estudo_id' => '8',
			'ano' => '2',
			'semestre' => '1',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '6',
			'disciplina_id' => '3',
			'codigo' => 'AC-2014-2012',
			'ramo_id' => '-1',
			'semestre_sequencial' => '3',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '6',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '9',
			'plano_estudo_id' => '9',
			'ano' => '2',
			'semestre' => '2',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '4',
			'disciplina_id' => '4',
			'codigo' => 'AC I-2004-2004',
			'ramo_id' => '-1',
			'semestre_sequencial' => '4',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '2',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
		array(
			'id' => '10',
			'plano_estudo_id' => '5',
			'ano' => '2',
			'semestre' => '2',
			'cargahorariateoricas' => '0',
			'cargahorariapraticas' => '0',
			'creditos' => '4',
			'disciplina_id' => '4',
			'codigo' => 'AC I-2004-2010',
			'ramo_id' => '-1',
			'semestre_sequencial' => '4',
			'horas_docente' => null,
			'horas_individual' => null,
			'carga_total' => '2',
			'ciclo_plano_estudo_id' => null,
			'ciclo_numero' => null
		),
	);

}
