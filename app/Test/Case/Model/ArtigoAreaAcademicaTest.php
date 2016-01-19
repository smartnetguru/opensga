<?php
App::uses('ArtigoAreaAcademica', 'Model');

/**
 * ArtigoAreaAcademica Test Case
 */
class ArtigoAreaAcademicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo_area_academica',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoAreaAcademica = ClassRegistry::init('ArtigoAreaAcademica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoAreaAcademica);

		parent::tearDown();
	}

}
