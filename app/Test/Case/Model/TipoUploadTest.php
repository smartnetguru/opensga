<?php
App::uses('TipoUpload', 'Model');

/**
 * TipoUpload Test Case
 *
 */
class TipoUploadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_upload',
		'app.upload',
		'app.estado_upload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoUpload = ClassRegistry::init('TipoUpload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoUpload);

		parent::tearDown();
	}

}
