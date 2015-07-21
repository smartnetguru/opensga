<?php

    ini_set('memory_limit', "2048M");
    ini_set('xdebug.max_nesting_level', 20000);
    App::uses('AuditableConfig', 'Auditable.Lib');

    class ManutencaoShell extends AppShell {

        public $uses = array('Inscricao', 'Turma', 'Matricula', 'Curso', 'UnidadeOrganica', 'Candidatura', 'Aluno', 'EstadoAluno', 'PlanoEstudo', 'Disciplina', 'DisciplinaPlanoEstudo', 'HistoricoCurso', 'AnoLectivo', 'AlumniCandidatoAlumni', 'Requisicoes.RequisicoesPedido', 'Entidade', 'User', 'SmsNotification');

        public function actualiza_turnos_cursos(){
            $cursos  = $this->Curso->find('all');
            foreach($cursos as $curso){
                debug($curso);
            }
        }

        public function evita_matriculas_duplicadas(){
            $matriculas = $this->Matricula->find('all');
            foreach($matriculas as $matricula){
                $duplicadas = $this->Matricula->find('all',[
                    'conditions'=>[
                        'aluno_id'=>$matricula['Matricula']['aluno_id'],
                        'ano_lectivo_id'=>$matricula['Matricula']['ano_lectivo_id'],
                    ]

                ]);
                $totalDuplicadas = count($duplicadas);
                if($totalDuplicadas>1){
                    $count = 1;
                    foreach($duplicadas as $duplicada){
                        if($count==1){
                            $count++;
                            continue;
                        }
                        $this->Matricula->delete($duplicada['Matricula']['id'],false);
                        $this->out('<error>Matricula Apagada</error>-------------------'.$matricula['Matricula']['id']);
                    }



                } else{
                    $this->out('Matricula Clean -----------------'.$matricula['Matricula']['id']);
                }
            }
        }

    }
