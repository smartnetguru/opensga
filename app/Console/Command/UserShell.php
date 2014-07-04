<?php

App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class UserShell extends AppShell {

	public $uses = array('User', 'Upload');

	/**
	 * Envia os dados da nova senha por email e sms
	 * Parametros: UserId e SenhaNova
	 */
	public function afterChangePassword() {

	}

}
