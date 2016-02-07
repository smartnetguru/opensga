<?php
    App::uses('CakeEventListener', 'Event');

    class AlunoEstadoListener implements CakeEventListener
    {

        public function implementedEvents()
        {
            return [
                //'Model.Aluno.afterMatriculaNovoIngresso' => 'configuraEstadoNovoAluno'
            ];
        }

        public function configuraEstadoNovoAluno($event)
        {
            debug($event->data);
            die();
        }
    }

