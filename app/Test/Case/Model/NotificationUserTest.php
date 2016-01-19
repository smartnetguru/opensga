<?php
App::uses('NotificationUser', 'Model');

/**
 * NotificationUser Test Case
 */
class NotificationUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.notification_user',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NotificationUser = ClassRegistry::init('NotificationUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NotificationUser);

		parent::tearDown();
	}

}
