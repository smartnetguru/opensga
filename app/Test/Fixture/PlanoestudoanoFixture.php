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
		'planoestudo_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ano' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cargahorariateoricas' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'cargahorariapraticas' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'creditos' => array('type' => 'integer', 'null' => true, 'default' => null),
		'disciplina_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ramo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre_sequencial' => array('type' => 'integer', 'null' => true, 'default' => null),
		'horas_docente' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'horas_individual' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'carga_total' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'planoestudo_id' => 1,
			'ano' => 1,
			'semestre' => 1,
			'cargahorariateoricas' => 1,
			'cargahorariapraticas' => 1,
			'creditos' => 1,
			'disciplina_id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 1,
			'semestre_sequencial' => 1,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'planoestudo_id' => 2,
			'ano' => 2,
			'semestre' => 2,
			'cargahorariateoricas' => 2,
			'cargahorariapraticas' => 2,
			'creditos' => 2,
			'disciplina_id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 2,
			'semestre_sequencial' => 2,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'planoestudo_id' => 3,
			'ano' => 3,
			'semestre' => 3,
			'cargahorariateoricas' => 3,
			'cargahorariapraticas' => 3,
			'creditos' => 3,
			'disciplina_id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 3,
			'semestre_sequencial' => 3,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'planoestudo_id' => 4,
			'ano' => 4,
			'semestre' => 4,
			'cargahorariateoricas' => 4,
			'cargahorariapraticas' => 4,
			'creditos' => 4,
			'disciplina_id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 4,
			'semestre_sequencial' => 4,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'planoestudo_id' => 5,
			'ano' => 5,
			'semestre' => 5,
			'cargahorariateoricas' => 5,
			'cargahorariapraticas' => 5,
			'creditos' => 5,
			'disciplina_id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 5,
			'semestre_sequencial' => 5,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'planoestudo_id' => 6,
			'ano' => 6,
			'semestre' => 6,
			'cargahorariateoricas' => 6,
			'cargahorariapraticas' => 6,
			'creditos' => 6,
			'disciplina_id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 6,
			'semestre_sequencial' => 6,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'planoestudo_id' => 7,
			'ano' => 7,
			'semestre' => 7,
			'cargahorariateoricas' => 7,
			'cargahorariapraticas' => 7,
			'creditos' => 7,
			'disciplina_id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 7,
			'semestre_sequencial' => 7,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'planoestudo_id' => 8,
			'ano' => 8,
			'semestre' => 8,
			'cargahorariateoricas' => 8,
			'cargahorariapraticas' => 8,
			'creditos' => 8,
			'disciplina_id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 8,
			'semestre_sequencial' => 8,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'planoestudo_id' => 9,
			'ano' => 9,
			'semestre' => 9,
			'cargahorariateoricas' => 9,
			'cargahorariapraticas' => 9,
			'creditos' => 9,
			'disciplina_id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 9,
			'semestre_sequencial' => 9,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'planoestudo_id' => 10,
			'ano' => 10,
			'semestre' => 10,
			'cargahorariateoricas' => 10,
			'cargahorariapraticas' => 10,
			'creditos' => 10,
			'disciplina_id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'ramo_id' => 10,
			'semestre_sequencial' => 10,
			'horas_docente' => 'Lorem ipsum dolor sit amet',
			'horas_individual' => 'Lorem ipsum dolor sit amet',
			'carga_total' => 'Lorem ipsum dolor sit amet'
		),
	);

}
