<?php

    ini_set('memory_limit', "2048M");
    ini_set('xdebug.max_nesting_level', 20000);
    App::uses('AuditableConfig', 'Auditable.Lib');

    class ManutencaoShell extends AppShell
    {

        public $uses = [
            'Inscricao',
            'Turma',
            'Matricula',
            'Curso',
            'UnidadeOrganica',
            'Candidatura',
            'Aluno',
            'EstadoAluno',
            'PlanoEstudo',
            'Disciplina',
            'DisciplinaPlanoEstudo',
            'HistoricoCurso',
            'AnoLectivo',
            'AlumniCandidatoAlumni',
            'Requisicoes.RequisicoesPedido',
            'Entidade',
            'User',
            'SmsNotification'
        ];


        public function actualizaReferenciaPagamento(){
            $candidatos = $this->Aluno->CandidatoGraduacao->find('all',['conditions'=>['cerimonia_graduacao_id'=>5]]);
            foreach($candidatos as $candidato){
                debug($candidato);
                
                $this->Aluno->CandidatoGraduacao->id = $candidato['CandidatoGraduacao']['id'];
                $referenciaPagamento = $this->Aluno->FinanceiroPagamento->geraReferenciaPagamentoGraduacao($candidato['CandidatoGraduacao']['aluno_id']);
                debug($referenciaPagamento);
                die();
                $this->Aluno->CandidatoGraduacao->set('referencia_pagamento',$referenciaPagamento);
                $this->Aluno->CandidatoGraduacao->save();
            }
        }

    }
