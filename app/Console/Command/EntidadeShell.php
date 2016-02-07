<?php

    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('AppShell', 'Console/Command');

    /**
     * Class EntidadeShell
     *
     * @property Entidade $Entidade
     */
    class EntidadeShell extends AppShell
    {

        public $uses = ['Entidade'];


        /**
         * Envia mensagem para todos aniversariantes do dia, numa hora determinada pelo CronJob
         *
         * @todo Por enquanto so envia para estudantes activos e que ja concluiram curso.
         */
        public function sendSMSAniversariantes()
        {
            $this->loadModel('SmsEnviada');
            $this->Entidade->Aluno->contain(['Entidade' => []]);
            $alunos = $this->Entidade->Aluno->find('all', [
                    'conditions' => [
                        'DAY(Entidade.data_nascimento)'   => date("d"),
                        'MONTH(Entidade.data_nascimento)' => date("m"),
                        'Aluno.estado_aluno_id'           => ('1,3,11,14'),
                    ],
                    'fields'     => ['Aluno.codigo', 'Entidade.telemovel', 'Entidade.nomes', 'Aluno.id'],
                ]
            );

            foreach ($alunos as $aluno) {
                $mensagem = "Caro {$aluno['Entidade']['nomes']}, a DRA-UEM vem por meio desta SMS desejar-lhe feliz aniversario. Saiba mais em www.siga.uem.mz";

                if ($aluno['Entidade']['telemovel'] != '') {
                    $telemovel = $aluno['Entidade']['telemovel'];
                    $this->SmsEnviada->sendSMS($telemovel, $mensagem, $aluno['Entidade']['id']);
                }
                $this->SmsEnviada->sendSMS('826489374', $mensagem);

            }
        }

    }
