<?php
App::uses('CooperacaoObjectivoAcordo', 'Cooperacao.Model');

/**
 * CooperacaoObjectivoAcordo Test Case
 *
 */
class CooperacaoObjectivoAcordoTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'plugin.cooperacao.cooperacao_objectivo_acordo',
        'plugin.cooperacao.cooperacao_acordo'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->CooperacaoObjectivoAcordo = ClassRegistry::init('Cooperacao.CooperacaoObjectivoAcordo');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CooperacaoObjectivoAcordo);

        parent::tearDown();
    }

}
