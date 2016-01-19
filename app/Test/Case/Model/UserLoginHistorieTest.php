<?php
	App::uses('UserLoginHistorie', 'Model');

	/**
	 * UserLoginHistorie Test Case
	 */
	class UserLoginHistorieTest extends CakeTestCase
	{

		/**
		 * Fixtures
		 *
		 * @var array
		 */
		public $fixtures = [

		];

		/**
		 * setUp method
		 *
		 * @return void
		 */
		public function setUp()
		{
			parent::setUp();
			$this->UserLoginHistorie = ClassRegistry::init('UserLoginHistorie');
		}

		/**
		 * tearDown method
		 *
		 * @return void
		 */
		public function tearDown()
		{
			unset($this->UserLoginHistorie);

			parent::tearDown();
		}

	}
