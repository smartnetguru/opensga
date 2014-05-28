<?php

App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class TurmaShell extends AppShell {

	public $uses = array('Turma', 'Upload');

	/**
	 * Job para importar Pautas no Background
	 * Parametros: TurmaId,UploadId,PautaURL
	 */
	public function processaPauta() {
		$turmaId = $this->args[0];
		$uploadId = $this->args[1];
		$pautaURL = $this->args[2];

		if ($this->Turma->processaPauta($pautaURL, $turmaId)) {

			$pautaFile = new File($pautaURL);
			if ($pautaFile->exists()) {
				$dir = new Folder('folder_inside_webroot', true);
				$pautaFile->copy($dir->path . DS . $pautaFile->name);
			}
			$this->Upload->id = $uploadId;
			$this->Upload->set('estado_upload_id', 3);
			$this->Upload->save();
		}
	}

}
