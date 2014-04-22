<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class DocenteShell extends AppShell {

	public $uses = array('Docente');

	public function enviaEmailCadastro() {


		$this->log('Email Enviado' . date('h:i:s'));
		/*		 * $email = new CakeEmail();
		  $email->template('welcome', 'fancy')
		  ->viewVars($user)
		  ->emailFormat('html')
		  ->to($user['User']['email'])
		  ->from('app@domain.com')
		  ->send(); */
	}

}
