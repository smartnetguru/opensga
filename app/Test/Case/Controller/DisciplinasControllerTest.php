<?php
    App::uses('DisciplinasController', 'Controller');

    /**
     * DisciplinasController Test Case
     */
    class DisciplinasControllerTest extends ControllerTestCase
    {

        /**
         * Fixtures
         *
         * @var array
         */
        public $fixtures = [
            'app.disciplina',
            'app.unidade_organica',
            'app.disciplina_unidade_organica',
            'app.opensga_session',
            'app.user',
            'app.funcionario',
            'app.log',
            'app.log_detail',
            'app.message',
        ];

        /**
         * testIndex method
         *
         * @return void
         */
        public function testIndex()
        {
            $this->markTestIncomplete('testIndex not implemented.');
        }

        /**
         * testFaculdadeIndex method
         *
         * @return void
         */
        public function testFaculdadeIndex()
        {
            $this->markTestIncomplete('testFaculdadeIndex not implemented.');
        }

        /**
         * testFaculdadeVerDisciplina method
         *
         * @return void
         */
        public function testFaculdadeVerDisciplina()
        {
            $this->markTestIncomplete('testFaculdadeVerDisciplina not implemented.');
        }

        /**
         * testFaculdadeAdicionarDisciplina method
         *
         * @return void
         */
        public function testFaculdadeAdicionarDisciplina()
        {

            $this->testAction('/faculdade/disciplinas/adicionar_disciplina', [
                'data'   => [
                    'Disciplina' => ['name' => 'Nova Disciplina Teste'],
                ],
                'method' => 'POST',
                'return' => 'vars',
            ]);
            $this->assertRegExp('/\/faculdade\/disciplinas/', $this->headers['Location']);
        }

        /**
         * testVerDisciplina method
         *
         * @return void
         */
        public function testVerDisciplina()
        {
            $this->markTestIncomplete('testVerDisciplina not implemented.');
        }

        public function setUp()
        {
            parent::setUp();

            $this->Disciplinas = $this->generate('Disciplinas', [
                'components' => [
                    'Session',
                    'Security' => ['_validatePost', '_validateCsrf'],
                ],
            ]);

            $this->Disciplinas->Session->expects($this->once())->method('setFlash');
            $this->Disciplinas->Security->expects($this->any())
                ->method('_validatePost')
                ->will($this->returnValue(true));
            $this->Disciplinas->Security->expects($this->any())
                ->method('_validateCsrf')
                ->will($this->returnValue(true));
            $this->controller->Session->expects(
                $this->any())
                ->method('read')
                ->with($this->logicalOr(
                    'Auth.User.unidade_organica_id',
                    'Config.language',
                    'Auth.User.group_id',
                    'Auth.User.id',
                    null
                ))
                ->will($this->returnCallback(
                    function ($param) {
                        if ($param == 'Auth.User.unidade_organica_id') {
                            return 1;
                        } elseif ($param == 'Config.language') {
                            return 'por';
                        } elseif ($param == 'Auth.User.group_id') {
                            return 2;
                        } elseif ($param == 'Auth.User.id') {
                            return 1;
                        } else {
                            return null;
                        }
                    }
                ));


        }

    }
