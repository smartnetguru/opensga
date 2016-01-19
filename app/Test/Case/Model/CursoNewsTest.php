<?php
App::uses('CursoNews', 'Model');

/**
 * CursoNews Test Case
 */
class CursoNewsTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curso_news',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CursoNews = ClassRegistry::init('CursoNews');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CursoNews);

		parent::tearDown();
	}

}
