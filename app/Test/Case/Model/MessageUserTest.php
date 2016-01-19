<?php
App::uses('MessageUser', 'Model');

/**
 * MessageUser Test Case
 */
class MessageUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.message_user',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MessageUser = ClassRegistry::init('MessageUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MessageUser);

		parent::tearDown();
	}

}
