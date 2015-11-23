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

        public function actualiza_turnos_cursos(){
            $cursos  = $this->Curso->find('all');
            foreach($cursos as $curso){
                debug($curso);
            }
        }

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


        //Exportar dados actualizados para tabela alunos e ou entidades

        public function graduacao()
        {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .  'graduacao.xlsx');

            $worksheet = $xls->getActiveSheet();
            $linha_actual = 2;


            foreach ($worksheet->getRowIterator() as $row) {


                $codigo = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                if($codigo==''){
                    break;
                }


                $nome = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $nomes = $this->Aluno->Entidade->User->splitName($nome);


                $aluno = $this->Aluno->findByCodigo($codigo);
                if(empty($aluno)){
                    continue;
                }
                $candidatoGraduacao = $this->Aluno->CandidatoGraduacao->findByAlunoIdAndCerimoniaGraduacaoId($aluno['Aluno']['id'],5);
                if(!empty($candidatoGraduacao)){
                    $arrayDados = [
                        'CandidatoGraduacao'=>[
                            'candidato_graduacao_id'=>$candidatoGraduacao['CandidatoGraduacao']['id'],
                            'apelido'=>$nomes['surname'],
                            'nomes'=>'firstname',
                            'telemovel'=>$candidatoGraduacao['CandidatoGraduacao']['telemovel'],
                            'data_defesa'=>$candidatoGraduacao['CandidatoGraduacao']['data_defesa'],
                            'media_defesa'=>$candidatoGraduacao['CandidatoGraduacao']['media_defesa']
                        ]
                    ];

                    if(!$this->Aluno->CandidatoGraduacao->confirmaDados($arrayDados)){
                        debug($arrayDados);
                        debug('falha');
                        die();
                    } else{
                        $this->out('Aluno Actualizado Graduacao---------------'.$codigo);
                    }
                } else{
                    $dataConclusaoNivel = [
                        'HistoricoCurso' => [
                            'data_conclusao' => date('Y-m-d'),
                            'nota_final'     => 10,
                            'funcionario_id' => 1
                        ],
                        'Aluno'          => [
                            'observacao' => '',
                            'aluno_id'   => $aluno['Aluno']['id'],
                            'curso_id'   => $aluno['Aluno']['curso_id'],
                            'anexo_url'  => [
                                'name'     => '',
                                'type'     => '',
                                'tmp_name' => '',
                                'error'    => 4,
                                'size'     => 0,
                            ]
                        ]
                    ];
                    if(!$this->Aluno->concluirNivel($dataConclusaoNivel)){
                        debug($dataConclusaoNivel);
                        debug('falha 21');
                        die();
                    }
                }




                $linha_actual++;
            }
        }


        public function apaga_docentes_duplicados(){

            $docentes = $this->Docente->find('all');
            $i=1;
            foreach($docentes as $docente){
                $i++;
                $entidadeId = $docente['Docente']['entidade_id'];
                $outrosDocentes = $this->Docente->find('all',['conditions'=>['Docente.id NOT'=>$docente['Docente']['id'],'entidade_id'=>$entidadeId]]);
                if(empty($outrosDocentes)){
                    $this->out($i.'------------------Clean');

                    continue;

                }
                foreach($outrosDocentes as $outro){
                    $this->Docente->delete($outro['Docente']['id']);
                    $this->out($i.'------------------------');
                }

            }
        }

        public function actualiza_turmas_estudantes(){

            $this->Turma->contain('Curso');
            $turmas = $this->Turma->find('all',['conditions'=>[]]);
            foreach($turmas as $turma){
                $inscricaos = $this->Inscricao->find('count',['conditions'=>['Inscricao.turma_id'=>$turma['Turma']['id']]]);
                $this->Turma->id = $turma['Turma']['id'];
                $this->Turma->set('total_alunos',$inscricaos);
                $this->Turma->save();
                $this->out($turma['Turma']['name'].'--------------------'.$inscricaos);

            }
        }

        public function ajusta_cursos_turnos(){

            $cursos = $this->Curso->find('all');
            $turnos = $this->Curso->CursosTurno->Turno->find('list');
            foreach($cursos as $curso){
                $cursosTurnos = $this->Curso->CursosTurno->findByCursoId($curso['Curso']['id']);
                if(empty($cursosTurnos)){
                    debug($turnos);
                    $turno = $this->in($curso['Curso']['name']);
                    $arrayCursoTurno = ['CursosTurno'=>['curso_id'=>$curso['Curso']['id'],'turno_id'=>$turno]];
                    $this->Curso->CursosTurno->create();
                    $this->Curso->CursosTurno->save($arrayCursoTurno);
                }
            }
        }




    }
