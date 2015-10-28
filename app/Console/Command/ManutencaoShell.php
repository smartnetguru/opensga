<?php

    ini_set('memory_limit', "2048M");
    ini_set('xdebug.max_nesting_level', 20000);
    App::uses('AuditableConfig', 'Auditable.Lib');

    /**
     * Class ManutencaoShell
     *
     * @property Aluno $Aluno
     */

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
            'SmsNotification',
            'Docente'
        ];


        public function actualiza(){
            $this->Aluno->CandidatoGraduacao->contain(['Aluno'=>'Entidade']);
            $candidatos = $this->Aluno->CandidatoGraduacao->find('all');
            foreach($candidatos as $candidato){
                if(!$candidato['CandidatoGraduacao']['referencia_pagamento']){
                    continue;
                }

                $pagamento = $this->Aluno->FinanceiroPagamento->findByReferenciaPagamento($candidato['CandidatoGraduacao']['referencia_pagamento']);
                if(empty($pagamento)){

                    if($candidato['CandidatoGraduacao']['aluno_id']==0){
                        continue;
                    }
                    debug($candidato);
                    $valor = $this->Aluno->FinanceiroPagamento->geraReferenciaPagamentoGraduacaoValor($candidato['Aluno']['id']);


                    $pagamento = $this->Aluno->FinanceiroPagamento->criaPagamento($candidato['Aluno']['entidade_id'],$valor,$candidato['CandidatoGraduacao']['created'],39,$candidato['CandidatoGraduacao']['referencia_pagamento']);

                    debug($pagamento);
                }


            }

        }




    }
