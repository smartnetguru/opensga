<?php
/**
 * TipoCursoFixture
 *
 */
class TipoCursoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'TipoCurso');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Médio'
		),
		array(
			'id' => '2',
			'name' => 'Superior'
		),
		array(
			'id' => '3',
			'name' => 'Pós-Graduação'
		),
		array(
			'id' => '4',
			'name' => 'Técnico'
		),
	);

}
