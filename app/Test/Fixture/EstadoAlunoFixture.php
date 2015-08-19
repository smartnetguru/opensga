<?php
/**
 * EstadoAlunoFixture
 *
 */
class EstadoAlunoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'estado_alunos');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Activo'
		),
		array(
			'id' => '2',
			'name' => 'Interrompeu'
		),
		array(
			'id' => '3',
			'name' => 'Concluiu nivel'
		),
		array(
			'id' => '4',
			'name' => 'Falecido'
		),
		array(
			'id' => '5',
			'name' => 'Inter. Sem direito a reingresso VIP'
		),
		array(
			'id' => '6',
			'name' => 'Sem direito a frequencia, expulso de outra IE'
		),
		array(
			'id' => '7',
			'name' => 'Eliminado - duplicacao'
		),
		array(
			'id' => '8',
			'name' => 'Matricula pendente, deve resolver um problema'
		),
		array(
			'id' => '9',
			'name' => 'Matricula Suspensa'
		),
		array(
			'id' => '10',
			'name' => 'Mudou de curso a maneira antiga - novo numero'
		),
	);

}
