<?php

App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class NotificationShell extends AppShell {

	public $uses = array('TipoMovimento');

	public function test() {
		$myFile = "/home/backstageel/Desktop/testFile.txt";
		$fh = fopen($myFile, 'w') or die("can't open file");
		$stringData = "Bobby Bopper\n";
		fwrite($fh, $stringData);
		$stringData = "Tracy Tanner\n";
		fwrite($fh, $stringData);
		fclose($fh);

		$this->out('Teste');
		$this->TipoMovimento->create();
		$this->TipoMovimento->save(array('TipoMovimento' => array(
				'name' => 'teste'
		)));
	}

}
