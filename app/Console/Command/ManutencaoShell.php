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

       public function ajusta_alunos_matriculas(){
           $alunos = $this->Aluno->find('all');
           $total = count($alunos);
           foreach($alunos as $aluno){
               $this->Aluno->Matricula->contain('AnoLectivo');
               $ultimaMatricula = $this->Aluno->Matricula->find('first',['conditions'=>['Matricula.aluno_id'=>$aluno['Aluno']['id']],'order'=>'AnoLectivo.ano DESC']);
              $anoFim = $ultimaMatricula['AnoLectivo']['ano'];
               $anoInicio = $aluno['Aluno']['ano_ingresso'];

               $anoLectivos = $this->Aluno->Matricula->AnoLectivo->find('list',['conditions'=>['AnoLectivo.ano >'=>$anoInicio,'AnoLectivo.ano <'=>$anoFim]]);
               foreach($anoLectivos as $k=>$v){
                   $matriculaExiste = $this->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($aluno['Aluno']['id'],$k);
                   if(empty($matriculaExiste)){
                       $arrayMatricula = [
                           'Matricula'=>[
                               'aluno_id' => $aluno['Aluno']['id'],
                               'curso_id' => $aluno['Aluno']['curso_id'],
                               'plano_estudo_id' => $aluno['Aluno']['plano_estudo_id'],
                               'data' => $v.'-01-01',
                               'estado_matricula_id' => 1,
                               'user_id' => 1,
                               'ano_lectivo_id' => $k,
                               'tipo_matricula_id' => 2,

                           ]
                       ];

                       $this->Aluno->Matricula->create();
                       if(!$this->Aluno->Matricula->save($arrayMatricula)){
                           die(debug($this->Aluno->Matricula->validationErrors));
                       }
                   }
               }
               $total--;
               $this->out($total.'------------------------');
           }
       }




    }
