<?php
App::uses('MessageFolder', 'Model');

/**
 * MessageFolder Test Case
 */
class MessageFolderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.message_folder',
		'app.message_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MessageFolder = ClassRegistry::init('MessageFolder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MessageFolder);

		parent::tearDown();
	}

}
