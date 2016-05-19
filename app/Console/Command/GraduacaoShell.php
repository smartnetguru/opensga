<?php

    ini_set('memory_limit', "2048M");
    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('AppShell', 'Console/Command');

    class GraduacaoShell extends AppShell
    {

        public $uses = ['CandidatoGraduacao', 'CerimoniaGraduacao'];

        public function terminaNivelGRaduados(){

            $candidatoGraduacaos = $this->CandidatoGraduacao->find('all',[
                'conditions'=>[
                    'cerimonia_graduacao_id'=>6
                ]
            ]);

            foreach($candidatoGraduacaos as $candidato){



                $funcionario = $this->CandidatoGraduacao->Funcionario->findByUserId($candidato['CandidatoGraduacao']['created']);
                if(empty($funcionario)){
                    $funcionario['Funcionario']['id']=1;
                }
                $aluno = $this->CandidatoGraduacao->Aluno->findById($candidato['CandidatoGraduacao']['aluno_id']);
                if($aluno['Aluno']['estado_aluno_id']!=1){
                    continue;
                }
               $dataGraduado =  array(
                    'HistoricoCurso' => array(
                        'data_conclusao' => $candidato['CandidatoGraduacao']['data_defesa'],
                        'nota_final' => $candidato['CandidatoGraduacao']['media_defesa'],
                        'funcionario_id' => $funcionario['Funcionario']['id']
                    ),
                    'Aluno' => array(
                        'observacao' => 'Candidato Para Cerimonia de Graduacao',
                        'aluno_id' => $candidato['CandidatoGraduacao']['aluno_id'],
                        'curso_id' => $aluno['Aluno']['curso_id'],
                        'anexo_url'=>[]
                    )
                );

                if($this->CandidatoGraduacao->Aluno->concluirNivel($dataGraduado)){
                    $this->out('Nivel Conluido----'.$candidato['CandidatoGraduacao']['id']);
                }
                
            }
        }
    }
