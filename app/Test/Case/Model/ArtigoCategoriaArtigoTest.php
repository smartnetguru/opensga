<?php
App::uses('ArtigoCategoriaArtigo', 'Model');

/**
 * ArtigoCategoriaArtigo Test Case
 */
class ArtigoCategoriaArtigoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo_categoria_artigo',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoCategoriaArtigo = ClassRegistry::init('ArtigoCategoriaArtigo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoCategoriaArtigo);

		parent::tearDown();
	}

}
