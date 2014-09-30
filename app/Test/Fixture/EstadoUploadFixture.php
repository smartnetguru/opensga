<?php
/**
 * EstadoUploadFixture
 *
 */
class EstadoUploadFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'EstadoUpload');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Carregado'
		),
		array(
			'id' => '2',
			'name' => 'Em Processamento'
		),
		array(
			'id' => '3',
			'name' => 'Processado'
		),
	);

}
