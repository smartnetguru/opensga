<?php
    App::uses('CakeEventListener', 'Event');

    class NotificationListener implements CakeEventListener {

        public function implementedEvents() {
            return array(
               // 'Model.Matricula.afterRenovacao' => 'afterRenovacaoMatricula'
            );
        }

        public function afterRenovacaoMatricula($event){

        }
    }

