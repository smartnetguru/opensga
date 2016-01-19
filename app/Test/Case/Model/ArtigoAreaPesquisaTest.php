<?php
App::uses('ArtigoAreaPesquisa', 'Model');

/**
 * ArtigoAreaPesquisa Test Case
 */
class ArtigoAreaPesquisaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo_area_pesquisa',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoAreaPesquisa = ClassRegistry::init('ArtigoAreaPesquisa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoAreaPesquisa);

		parent::tearDown();
	}

}
