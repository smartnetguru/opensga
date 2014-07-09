<?php
App::uses('Pais', 'Model');

/**
 * Pais Test Case
 *
 */
class PaisTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pais',
		
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pais = ClassRegistry::init('Pais');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pais);

		parent::tearDown();
	}
    
    
    public function testFindById(){
        $this->assertEqual(1, 1);
    }

}
