<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class CandidatoShell extends AppShell {

	public $uses = array('User', 'Candidatura');

    public function afterImportCandidatos(){

    }


}
