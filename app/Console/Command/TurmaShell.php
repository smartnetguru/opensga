<?php
    ini_set('memory_limit', "2048M");
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

			$pautaFile = new File(Configure::read('OpenSGA.save_path') . DS . $pautaURL);
			if ($pautaFile->exists()) {

				$pautaPath = Configure::read('OpenSGA.save_path') . DS . 'Pautas' . DS . date('Y');
				rename(Configure::read('OpenSGA.save_path') . DS . $pautaURL, $pautaPath . DS . $pautaFile->name);
				if ($pautaFile->copy($pautaPath . DS . $pautaFile->name)) {
					$pautaFile->delete();
				}
			}
			$this->Upload->id = $uploadId;
			$this->Upload->set('estado_upload_id', 3);
			$this->Upload->save();
		}
	}

    /**
     * Job Para Gerar Pauta e Guardar no Ficheiro
     * Parametros TurmaId
     */
    public function geraPauta(){
        $turmaId = $this->args[0];
        $pautaXls = $this->Turma->geraPautaExcel($turmaId);

        $objWriter = PHPExcel_IOFactory::createWriter($pautaXls, 'Excel2007');
        $objWriter->save(Configure::read('OpenSGA.save_path').DS.$turmaId.'.xlsx');
        $this->Turma->id = $turmaId;
        $this->Turma->set('pauta_path',Configure::read('OpenSGA.save_path').DS.$turmaId.'.xlsx');
        $this->Turma->save();

    }
}
