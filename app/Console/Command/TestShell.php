<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class TestShell extends AppShell {

	public $uses = array('Message','SmsEnviada');




    public function testEnviaMessage(){
        $this->Message->sendMessage(1,42646,'Teste','detalhes');
    }
}
