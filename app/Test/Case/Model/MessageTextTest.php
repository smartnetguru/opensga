<?php
App::uses('MessageText', 'Model');

/**
 * MessageText Test Case
 */
class MessageTextTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.message_text',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MessageText = ClassRegistry::init('MessageText');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MessageText);

		parent::tearDown();
	}

}
