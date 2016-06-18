<?php

ini_set('memory_limit', "2048M");
ini_set('xdebug.max_nesting_level', 20000);
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('CakeEmail', 'Network/Email');

/**
 * Class RelatorioShell
 * @property Relatorio $Relatorio
 */
class RelatorioShell extends AppShell
{

    public $uses = [
        'Relatorio',

    ];


    public function resumoDiario()
    {
        $Email = new CakeEmail();
        $Email->config('smtp')
            ->template('resumo_diario', 'default')
            ->viewVars(['data' => $this->Relatorio->getResumoDiario()])
            ->emailFormat('html')
            ->domain('siga.uem.mz')
            ->to([
                'elisio.leonardo@gmail.com',
                'sergiobata@gmail.com',
                'jose.nhampossa@gmail.com',
                'g.nhatsave@gmail.com',
                'linas.mucabel@gmail.com',
                'daslanga@gmail.com',
                'rafaelmachava@gmail.com',
            ])
            ->subject('SIGA- Resumo Diario ->' . date('Y-m-d'))
            ->send();


    }


}
