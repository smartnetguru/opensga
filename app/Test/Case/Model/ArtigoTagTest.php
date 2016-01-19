<?php
App::uses('ArtigoTag', 'Model');

/**
 * ArtigoTag Test Case
 */
class ArtigoTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artigo_tag',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArtigoTag = ClassRegistry::init('ArtigoTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArtigoTag);

		parent::tearDown();
	}

}
