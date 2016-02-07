<?php
    App::uses('AnoLectivo', 'Model');

    /**
     * AnoLectivo Test Case
     */
    class AnoLectivoTest extends CakeTestCase
    {

        /**
         * Fixtures
         *
         * @var array
         */
        public $fixtures = [
            'app.ano_lectivo',
            'app.regime_lectivo',
            'app.semestre_lectivo',
        ];

        /**
         * setUp method
         *
         * @return void
         */
        public function setUp()
        {
            parent::setUp();
            $this->AnoLectivo = ClassRegistry::init('AnoLectivo');
        }

        /**
         * tearDown method
         *
         * @return void
         */
        public function tearDown()
        {
            unset($this->AnoLectivo);

            parent::tearDown();
        }

        /**
         * testGetAnoLectivoIdByAno method
         *
         * @return void
         */
        public function testGetAnoLectivoIdByAno()
        {
            $this->markTestIncomplete('testGetAnoLectivoIdByAno not implemented.');
        }

        /**
         * testCriaAnoLectivo method
         *
         * @return void
         */
        public function testCriaAnoLectivo()
        {
            $data = [
                'AnoLectivo' => [
                    'ano' => 2030,
                ],
            ];

            $resultado = $this->AnoLectivo->criaAnoLectivo($data);

            $this->assertEquals(12, $resultado);


        }

    }
