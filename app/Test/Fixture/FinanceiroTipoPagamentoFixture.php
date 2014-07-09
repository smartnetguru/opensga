<?php
/**
 * FinanceiroTipoPagamentoFixture
 *
 */
class FinanceiroTipoPagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'month_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_limite' => array('type' => 'date', 'null' => true, 'default' => null),
		'mes_limite' => array('type' => 'integer', 'null' => true, 'default' => null),
		'dia_limite' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name' => 'Matrícula',
			'valor' => '2950.00',
			'codigo' => '10',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '2',
			'name' => 'Inscrição',
			'valor' => '1350.00',
			'codigo' => '11',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '3',
			'name' => 'Propina de Fevereiro',
			'valor' => '5000.00',
			'codigo' => '12',
			'month_id' => '2',
			'data_limite' => null,
			'mes_limite' => '2',
			'dia_limite' => '5'
		),
		array(
			'id' => '4',
			'name' => 'Propina de Março',
			'valor' => '5000.00',
			'codigo' => '13',
			'month_id' => '3',
			'data_limite' => null,
			'mes_limite' => '3',
			'dia_limite' => '5'
		),
		array(
			'id' => '5',
			'name' => 'Propina de Abril',
			'valor' => '5000.00',
			'codigo' => '14',
			'month_id' => '4',
			'data_limite' => null,
			'mes_limite' => '4',
			'dia_limite' => '5'
		),
		array(
			'id' => '6',
			'name' => 'Propina de Maio',
			'valor' => '5000.00',
			'codigo' => '15',
			'month_id' => '5',
			'data_limite' => null,
			'mes_limite' => '5',
			'dia_limite' => '5'
		),
		array(
			'id' => '7',
			'name' => 'Propina de Junho',
			'valor' => '5000.00',
			'codigo' => '16',
			'month_id' => '6',
			'data_limite' => null,
			'mes_limite' => '6',
			'dia_limite' => '5'
		),
		array(
			'id' => '8',
			'name' => 'Propina de Agosto',
			'valor' => '5000.00',
			'codigo' => '17',
			'month_id' => '8',
			'data_limite' => null,
			'mes_limite' => '8',
			'dia_limite' => '5'
		),
		array(
			'id' => '9',
			'name' => 'Propina de Setembro',
			'valor' => '5000.00',
			'codigo' => '18',
			'month_id' => '9',
			'data_limite' => null,
			'mes_limite' => '9',
			'dia_limite' => '5'
		),
		array(
			'id' => '10',
			'name' => 'Propina de Outubro',
			'valor' => '5000.00',
			'codigo' => '19',
			'month_id' => '10',
			'data_limite' => null,
			'mes_limite' => '10',
			'dia_limite' => '5'
		),
		array(
			'id' => '11',
			'name' => 'Propina de Novembro',
			'valor' => '5000.00',
			'codigo' => '20',
			'month_id' => '11',
			'data_limite' => null,
			'mes_limite' => '11',
			'dia_limite' => '5'
		),
		array(
			'id' => '12',
			'name' => 'Propina de Dezembro',
			'valor' => '5000.00',
			'codigo' => '21',
			'month_id' => '12',
			'data_limite' => null,
			'mes_limite' => '12',
			'dia_limite' => '5'
		),
		array(
			'id' => '13',
			'name' => 'Taxa de Exame Normal',
			'valor' => '0.00',
			'codigo' => '22',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '14',
			'name' => 'Taxa de Exame de Recorrência',
			'valor' => '1200.00',
			'codigo' => '23',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '15',
			'name' => 'Taxa de Certificado',
			'valor' => '2800.00',
			'codigo' => '24',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '16',
			'name' => 'Taxa de Declaração',
			'valor' => '750.00',
			'codigo' => '25',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '17',
			'name' => 'Taxa de Diploma',
			'valor' => '0.00',
			'codigo' => '26',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '18',
			'name' => 'Multa',
			'valor' => '0.00',
			'codigo' => '27',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '19',
			'name' => 'Declaração Simples',
			'valor' => '750.00',
			'codigo' => '28',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '20',
			'name' => 'Declaração com Notas Por Ano',
			'valor' => '1000.00',
			'codigo' => '29',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
	);

}
