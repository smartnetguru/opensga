<?php
/**
 * EstadoInscricaoFixture
 *
 */
class EstadoInscricaoFixture extends CakeTestFixture {

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
			'name' => 'Activa'
		),
		array(
			'id' => '2',
			'name' => 'Admitido ao Exame'
		),
		array(
			'id' => '3',
			'name' => 'Admitido a Recorrencia'
		),
		array(
			'id' => '4',
			'name' => 'Dispensado'
		),
		array(
			'id' => '5',
			'name' => 'Aprovado no Exame'
		),
		array(
			'id' => '6',
			'name' => 'Aprovado na Recorrencia'
		),
		array(
			'id' => '7',
			'name' => 'Excluido'
		),
		array(
			'id' => '8',
			'name' => 'Desistido'
		),
		array(
			'id' => '9',
			'name' => 'Anulado'
		),
		array(
			'id' => '10',
			'name' => 'Reprovado'
		),
		array(
			'id' => '11',
			'name' => 'Reprovado por Faltas'
		),
		array(
			'id' => '12',
			'name' => 'Reprovado na Recorrencia'
		),
		array(
			'id' => '13',
			'name' => 'Aprovado Sem Exames'
		),
	);

}
