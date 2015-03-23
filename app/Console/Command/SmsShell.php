<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class SMSShell extends AppShell {

	public $uses = array('Aluno','SmsEnviada');


    public function envia_sms_estrangeiros()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        $this->Aluno->contain(array(
            'Entidade' => array(
                'EntidadeContacto' => array(
                    'conditions' => array('tipo_contacto_id' => 2)
                )
            )
        ));
        $alunos = $this->Aluno->find('all', array('conditions' => array('Entidade.pais_nascimento NOT' => array(152))));
        $this->out('Enviando SMS para um total de ' . count($alunos) . ' Estudantes');

        $mensagem = "A DRA da UEM, Convida todos estudantes estrangeiros para uma reuniao de orientacao a ter lugar dia 27/03/2015 as 14h no complexo Pedagogico da UEM-Campus.";
        $this->SmsEnviada->sendSMS('826489374', $mensagem);
        $this->SmsEnviada->sendSMS('844683674', $mensagem);
        $this->SmsEnviada->sendSMS('828332469', $mensagem);
        $this->SmsEnviada->sendSMS('844213948', $mensagem);

        foreach ($alunos as $aluno) {
            if ($aluno['Entidade']['telemovel'] != '') {
                $numero = $aluno['Entidade']['telemovel'];
                if (is_numeric($numero)) {
                    debug($numero);


                     $this->SmsEnviada->sendSMS($numero, $mensagem);
                    $this->out('SMS Enviada para---' . $numero);
                }


            }
        }
    }


}
