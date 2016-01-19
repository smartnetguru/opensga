<?php
/**
 * FinanceiroTipoPagamento Fixture
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
		array(
			'id' => '21',
			'name' => 'Inscrição para Cadeira em Atraso',
			'valor' => '1000.00',
			'codigo' => '30',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '22',
			'name' => 'Exame Especial para Alunos do 4o ano',
			'valor' => '2800.00',
			'codigo' => '31',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '23',
			'name' => 'Exame Extraordinário',
			'valor' => '3000.00',
			'codigo' => '32',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '24',
			'name' => 'Certificado com Notas',
			'valor' => '2800.00',
			'codigo' => '33',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '25',
			'name' => 'Plano Temático para Cadeira',
			'valor' => '500.00',
			'codigo' => '34',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '26',
			'name' => 'Equivalência para Cadeira',
			'valor' => '950.00',
			'codigo' => '35',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '27',
			'name' => 'Inscrição para Defesas  Extraordinário',
			'valor' => '4500.00',
			'codigo' => '36',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '28',
			'name' => 'Teste Extraordinário',
			'valor' => '1500.00',
			'codigo' => '37',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '29',
			'name' => 'Cartão de Estudante 2a via',
			'valor' => '170.00',
			'codigo' => '38',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '30',
			'name' => 'Revisão de Exame',
			'valor' => '2000.00',
			'codigo' => '39',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '31',
			'name' => 'Trabalho de Fim de Curso',
			'valor' => '4000.00',
			'codigo' => '40',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '32',
			'name' => 'Multa da Mensalidade do dia 11-20',
			'valor' => null,
			'codigo' => '41',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '33',
			'name' => 'Multa da Mensalidade do dia 21-30',
			'valor' => null,
			'codigo' => '42',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '34',
			'name' => 'Pagamento no mês Seguinte',
			'valor' => null,
			'codigo' => '43',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '35',
			'name' => 'Inscrição Por Cadeira Normal',
			'valor' => '200.00',
			'codigo' => '44',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '36',
			'name' => 'Inscrição por Cadeira em Atraso',
			'valor' => '900.00',
			'codigo' => '45',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '37',
			'name' => 'Renovação de Matrícula - Diurno',
			'valor' => '80.00',
			'codigo' => '46',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '38',
			'name' => 'Renovação de Matrícula - Pós-Laboral,Mestrado',
			'valor' => '160.00',
			'codigo' => '47',
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
		array(
			'id' => '39',
			'name' => 'Inscrição para Cerimonia de Graduação',
			'valor' => '3500.00',
			'codigo' => null,
			'month_id' => null,
			'data_limite' => null,
			'mes_limite' => null,
			'dia_limite' => null
		),
	);

}
