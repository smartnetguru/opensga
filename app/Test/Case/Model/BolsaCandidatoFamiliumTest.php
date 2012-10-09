<?php
App::uses('BolsaCandidatoFamilium', 'Model');

/**
 * BolsaCandidatoFamilium Test Case
 *
 */
class BolsaCandidatoFamiliumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BolsaCandidatoFamilium = ClassRegistry::init('BolsaCandidatoFamilium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BolsaCandidatoFamilium);

		parent::tearDown();
	}

}
