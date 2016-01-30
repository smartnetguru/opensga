<?php
    App::uses('CakeEventListener', 'Event');

    class AlunoListener implements CakeEventListener {

        public function implementedEvents() {
            return array(
                'Model.Aluno.beforeMatricula' => 'cadastraEntidadeForMatricula'
            );
        }

        public function cadastraEntidadeForMatricula($event){
            debug($event->subject->request);
            print_r($event->subject);
            die();

        }
    }

