<?php
/**
 * TurnoFixture
 *
 */
class TurnoFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Turno');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Diúrno',
			'pagamento_mensalidade' => null
		),
		array(
			'id' => '2',
			'name' => 'Pós-Laboral',
			'pagamento_mensalidade' => null
		),
		array(
			'id' => '3',
			'name' => 'Ensino á Distância',
			'pagamento_mensalidade' => null
		),
	);

}
