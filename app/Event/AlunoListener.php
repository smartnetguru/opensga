<?php
    App::uses('CakeEventListener', 'Event');

    class UserListener implements CakeEventListener {

        public function implementedEvents() {
            return array(
                'Model.Aluno.beforeMatricula' => 'cadastraUserForMatricula'
            );
        }

        public function cadastraUserForMatricula($event){
            debug($event->subject->request);
            print_r($event->subject);
            die();

        }
    }

