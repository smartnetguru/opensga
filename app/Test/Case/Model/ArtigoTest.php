<?php
App::uses('Artigo', 'Model');

/**
 * Artigo Test Case
 */
class ArtigoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Artigo = ClassRegistry::init('Artigo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artigo);

		parent::tearDown();
	}

}
