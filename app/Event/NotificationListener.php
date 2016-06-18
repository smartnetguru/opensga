<?php
App::uses('CakeEventListener', 'Event');

class NotificationListener implements CakeEventListener
{

    public function implementedEvents()
    {
        return [
            // 'Model.Matricula.afterRenovacao' => 'afterRenovacaoMatricula'
        ];
    }

    public function afterRenovacaoMatricula($event)
    {

    }
}

