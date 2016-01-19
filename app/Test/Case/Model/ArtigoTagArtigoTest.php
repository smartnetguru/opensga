<?php
App::uses('ArtigoTagArtigo', 'Model');

/**
 * ArtigoTagArtigo Test Case
 */
class ArtigoTagArtigoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo_tag_artigo',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoTagArtigo = ClassRegistry::init('ArtigoTagArtigo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoTagArtigo);

		parent::tearDown();
	}

}
