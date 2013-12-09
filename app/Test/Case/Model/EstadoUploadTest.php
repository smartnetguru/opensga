<?php
App::uses('EstadoUpload', 'Model');

/**
 * EstadoUpload Test Case
 *
 */
class EstadoUploadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado_upload',
		'app.upload',
		'app.tipo_upload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstadoUpload = ClassRegistry::init('EstadoUpload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstadoUpload);

		parent::tearDown();
	}

}
