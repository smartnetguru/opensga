<?php
ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class PagamentoShell extends AppShell
{

    public $uses = ['FinanceiroPagamento', 'FinanceiroTransacao'];

    /**
     * Job para importar Pautas no Background
     * Parametros: TurmaId,UploadId,PautaURL
     */
    public function gera_pagamentos_renovacao()
    {
        $this->FinanceiroPagamento->geraPagamentoRenovacaoMatriculas();
    }

    /**
     * Job Para Gerar Pauta e Guardar no Ficheiro
     * Parametros TurmaId
     */
    public function geraPauta()
    {
        $turmaId = $this->args[0];
        $pautaXls = $this->Turma->geraPautaExcel($turmaId);

        $objWriter = PHPExcel_IOFactory::createWriter($pautaXls, 'Excel2007');
        $objWriter->save(Configure::read('OpenSGA.save_path') . DS . $turmaId . '.xlsx');
        $this->Turma->id = $turmaId;
        $this->Turma->set('pauta_path', Configure::read('OpenSGA.save_path') . DS . $turmaId . '.xlsx');
        $this->Turma->save();

    }

    public function testaCheckDigit()
    {
        $digit = $this->FinanceiroTransacao->geraCheckDigito('77001', '223456789', '100');

        debug($digit);
    }


}



