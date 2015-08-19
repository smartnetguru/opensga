<?php
/**
 * FinanceiroTipoPagamentoFixture
 *
 */
class FinanceiroTipoPagamentoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'FinanceiroTipoPagamento');

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
	);

}
