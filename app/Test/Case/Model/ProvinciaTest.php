<?php
App::uses('Provincia', 'Model');

/**
 * Provincia Test Case
 */
class ProvinciaTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.provincia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Provincia = ClassRegistry::init('Provincia');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Provincia);

        parent::tearDown();
    }

    /**
     * testGetPaisIdByProvinciaId method
     *
     * @return void
     */
    public function testGetPaisIdByProvinciaId()
    {
        $paisId = $this->Provincia->getPaisIdByProvinciaId(1);

        $this->assertEquals(152, $paisId);
    }

}
