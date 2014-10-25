<?php
/**
 * MotivoTerminoCursoFixture
 *
 */
class MotivoTerminoCursoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'motivo_termino_cursos');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Concluiu'
		),
		array(
			'id' => '2',
			'name' => 'Mudou de Curso'
		),
		array(
			'id' => '3',
			'name' => 'Cancelou Matricula'
		),
		array(
			'id' => '4',
			'name' => 'Desistiu'
		),
		array(
			'id' => '5',
			'name' => 'Expulso'
		),
		array(
			'id' => '6',
			'name' => 'Fora do Tempo de Estudos'
		),
	);

}
