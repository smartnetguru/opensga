<?php
/**
 * TipoDocenteTurmaFixture
 *
 */
class TipoDocenteTurmaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'tipo_docente_turmas');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Regente'
		),
		array(
			'id' => '2',
			'name' => 'Assistente'
		),
		array(
			'id' => '3',
			'name' => 'Monitor'
		),
	);

}
