<?php
App::uses('CooperacaoAcordoArea', 'Cooperacao.Model');

/**
 * CooperacaoAcordoArea Test Case
 *
 */
class CooperacaoAcordoAreaTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'plugin.cooperacao.cooperacao_acordo_area',
        'plugin.cooperacao.cooperacao_acordo',
        'plugin.cooperacao.cooperacao_area'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->CooperacaoAcordoArea = ClassRegistry::init('Cooperacao.CooperacaoAcordoArea');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CooperacaoAcordoArea);

        parent::tearDown();
    }

}
