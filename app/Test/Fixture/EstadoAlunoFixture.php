<?php
/**
 * EstadoAlunoFixture
 *
 */
class EstadoAlunoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
		array(
			'id' => '11',
			'name' => 'Matricula Condicional'
		),
		array(
			'id' => '12',
			'name' => 'nao esta registado na bd'
		),
		array(
			'id' => '13',
			'name' => 'Matricula Anulada'
		),
	);

}
