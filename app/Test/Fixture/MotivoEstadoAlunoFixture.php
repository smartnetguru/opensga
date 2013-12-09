<?php
/**
 * MotivoEstadoAlunoFixture
 *
 */
class MotivoEstadoAlunoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Falta Certificado de Habilitacoes'
		),
		array(
			'id' => '2',
			'name' => 'Falta BI'
		),
		array(
			'id' => '3',
			'name' => 'Falta certificado de equivalência'
		),
		array(
			'id' => '4',
			'name' => 'Reingresso, usar o numero anterior'
		),
		array(
			'id' => '5',
			'name' => 'Mudança de curso, usar o número anterior'
		),
		array(
			'id' => '6',
			'name' => 'Certificado do nivel anterior com irregularidades'
		),
		array(
			'id' => '7',
			'name' => 'Expulso de outra instituicao de ensino superior '
		),
		array(
			'id' => '8',
			'name' => 'Processo fisico original nao achado'
		),
		array(
			'id' => '9',
			'name' => 'Mudou de curso a maneira antiga'
		),
		array(
			'id' => '10',
			'name' => 'Ingresso Fraudulento'
		),
	);

}
