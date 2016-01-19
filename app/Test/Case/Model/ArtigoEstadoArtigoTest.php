<?php
App::uses('ArtigoEstadoArtigo', 'Model');

/**
 * ArtigoEstadoArtigo Test Case
 */
class ArtigoEstadoArtigoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo_estado_artigo',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoEstadoArtigo = ClassRegistry::init('ArtigoEstadoArtigo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoEstadoArtigo);

		parent::tearDown();
	}

}
