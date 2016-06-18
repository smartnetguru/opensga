<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

/**
 * Class DocenteShell
 *
 * @property Docente $Docente
 */
class DocenteShell extends AppShell
{

    public $uses = ['Docente'];

    public function enviaEmailCadastro()
    {


        $this->log('Email Enviado' . date('h:i:s'));
        /*		 * $email = new CakeEmail();
          $email->template('welcome', 'fancy')
          ->viewVars($user)
          ->emailFormat('html')
          ->to($user['User']['email'])
          ->from('app@domain.com')
          ->send(); */
    }

    public function ajustaDocenteUnidade()
    {
        $docentes = $this->Docente->find('all');
        foreach ($docentes as $docente) {
            $arrayDocenteUnidade = [
                'DocenteUnidadeOrganica' => [
                    'docente_id' => $docente['Docente']['id'],
                    'unidade_organica_id' => $docente['Docente']['unidade_organica_id'],
                    'data_inicio' => $docente['Docente']['created'],
                    'estado_objecto_id' => 1,
                ],
            ];

            $docenteUnidadeExiste = $this->Docente->DocenteUnidadeOrganica->find('first', [
                'conditions' => [
                    'docente_id' => $docente['Docente']['id'],
                    'unidade_organica_id' => $docente['Docente']['unidade_organica_id'],
                    'estado_objecto_id' => 1,
                ],
            ]);

            if (empty($docenteUnidadeExiste)) {
                $this->Docente->DocenteUnidadeOrganica->create();
                $this->Docente->DocenteUnidadeOrganica->save($arrayDocenteUnidade);
                $this->out('Unidade Organica Salva');
            }
        }
    }

}
