<?php

    ini_set('memory_limit', "2048M");
    ini_set('xdebug.max_nesting_level', 20000);
    App::uses('AuditableConfig', 'Auditable.Lib');

    class OpenSGAShell extends AppShell {

        public $uses = array('Inscricao', 'Turma', 'Matricula', 'Curso', 'UnidadeOrganica', 'Candidatura', 'Aluno', 'EstadoAluno', 'PlanoEstudo', 'Disciplina', 'DisciplinaPlanoEstudo', 'HistoricoCurso', 'AnoLectivo', 'CandidatoAlumni', 'Requisicoes.RequisicoesPedido', 'Entidade', 'User', 'SmsNotification');

        public function actualiza_fotos_uem() {
            App::uses('Folder', 'Utility');
            App::uses('File', 'Utility');

            $i = 0;
            $this->Aluno->contain('Entidade');
            $alunos = $this->Aluno->find('all', array('conditions' => array('Entidade.foto' => '0')));
            die(debug(count($alunos)));
            foreach ($alunos as $aluno) {
                $foto_file = new File('C:' . DS . 'fotos_uem' . DS . $aluno['Aluno']['codigo'] . '.jpg');
                $path      = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'];
                if ($foto_file->exists()) {
                    $path        = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'];
                    $folder_novo = new Folder($path, true);
                    $foto_file->copy($path . DS . $aluno['Aluno']['codigo'] . '.jpg');
                    $foto_file->delete();
                    $this->Aluno->Entidade->id = $aluno['Entidade']['id'];
                    $this->Aluno->Entidade->set('foto', $aluno['Aluno']['codigo'] . '.jpg');
                    $this->Aluno->Entidade->save();
                    $this->out($i++);
                } else {
                    $foto_existe = new File($path . DS . $aluno['Aluno']['codigo'] . '.jpg');
                    if ($foto_existe->exists()) {
                        $this->Aluno->Entidade->id = $aluno['Entidade']['id'];
                        $this->Aluno->Entidade->set('foto', $aluno['Aluno']['codigo'] . '.jpg');
                        $this->Aluno->Entidade->save();
                    } else {
                        $this->Aluno->Entidade->id = $aluno['Entidade']['id'];
                        $this->Aluno->Entidade->set('foto', 0);
                        $this->Aluno->Entidade->save();
                    }
                    $this->out($i++);
                }
            }
        }

        public function actualiza_historico_curso() {
            $historicos = $this->Aluno->HistoricoCurso->find('all', array('conditions' => array('motivo_termino_curso_id' => null)));
            foreach ($historicos as $historico) {
                if ($historico['HistoricoCurso']['ano_fim'] != null) {
                    if ($historico['HistoricoCurso']['nota_final'] != null) {
                        $this->Aluno->HistoricoCurso->id = $historico['HistoricoCurso']['id'];
                        $this->Aluno->HistoricoCurso->set('motivo_termino_curso_id', 1);
                        $this->Aluno->HistoricoCurso->save();
                    } else {
                        $mudancaCurso = $this->Aluno->MudancaCurso->findByAlunoIdAndCursoAntigo($historico['HistoricoCurso']['aluno_id'], $historico['HistoricoCurso']['curso_id']);
                        if ($mudancaCurso) {
                            $this->Aluno->HistoricoCurso->id = $historico['HistoricoCurso']['id'];
                            $this->Aluno->HistoricoCurso->set('motivo_termino_curso_id', 2);
                            $this->Aluno->HistoricoCurso->save();
                        }
                    }
                }
            }
        }


        public function ama(){
            $this->Aluno->contain('Curso');
            $alunos = $this->Aluno->find('all',array('conditions'=>array('Curso.unidade_organica_id'=>1)));
            foreach($alunos as $aluno){
                $data = array(
                    'aluno_id'=>$aluno['Aluno']['id'],
                    'curso_id'=>$aluno['Aluno']['curso_id'],
                    'plano_estudo_id'=>$aluno['Aluno']['plano_estudo_id'],
                    'data'=>date('Y-m-d H:i:s'),
                    'estado_matricula_id'=>1,
                    'user_id'=>1,
                    'turno_id'=>1,
                    'tipo_matricula_id'=>2,
                    'ano_lectivo_id'=>31

                );
                $matricular = false;
                if($aluno['Aluno']['ano_ingresso']==2014){
                    $matricular=true;
                } else{
                    $matricula2014= $this->Aluno->Matricula->find('first',
                        array('conditions'=>array('aluno_id'=>$aluno['Aluno']['id'],'ano_lectivo_id'=>30)));
                    if(!empty($matricula2014)){
                        $matricular=true;
                    }
                }

                if($matricular){
                    $arrayMatricula=array('Matricula'=>$data);
                    $this->Aluno->Matricula->create();
                    $this->Aluno->Matricula->save($arrayMatricula);
                }
            }
        }
        public function actualiza_matriculas() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');

            $matriculasCount = $this->Matricula->find('count', array('conditions' => array('Matricula.tipo_matricula_id' => array(0, null))));
            while ($matriculasCount > 0) {
                $this->Matricula->contain(array(
                    'AnoLectivo', 'Aluno', 'TipoMatricula'
                ));
                $matriculas = $this->Matricula->find('all', array('conditions' => array('Matricula.tipo_matricula_id' => array(0, null)), 'limit' => 10000));
                foreach ($matriculas as $matricula) {
                    $anoLectivo          = $matricula['AnoLectivo']['ano'];
                    $anoIngresso         = $matricula['Aluno']['ano_ingresso'];
                    $this->Matricula->id = $matricula['Matricula']['id'];

                    if ($anoLectivo == $anoIngresso) {
                        $this->Matricula->set('tipo_matricula_id', 1);
                    } else {
                        $this->Matricula->set('tipo_matricula_id', 2);
                    }
                    $this->Matricula->save();
                    $matriculasCount = $this->Matricula->find('count', array('conditions' => array('Matricula.tipo_matricula_id' => array(0, null))));
                    $this->out($matriculasCount);
                }
            }
        }

        public function actualiza_password_2014() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            $this->Aluno->contain('User');
            $alunos = $this->Aluno->find('all');
            $total  = count($alunos);
            foreach ($alunos as $aluno) {
                $this->Aluno->User->id = $aluno['User']['id'];
                $passwordAntiga        = 'dra02062013';
                $storedHash            = $aluno['User']['password'];
                $newHash               = Security::hash($passwordAntiga, 'blowfish', $storedHash);
                $correct               = $storedHash == $newHash;
                $this->out($storedHash . '-----------------' . $newHash);
                if ($correct) {
                    $this->out('Mudando a senha de -----' . $aluno['Aluno']['codigo']);
                    $this->Aluno->User->set('password', Security::hash($aluno['Aluno']['codigo'], 'blowfish'));
                    $this->Aluno->User->save();
                }
                $this->out($total--);
            }
        }

        public function ajusta_estado_inscricao() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            $inscricaos              = $this->Inscricao->find('all', array('conditions' => array('estado_inscricao_id' => array(null, 0, 1))));
            foreach ($inscricaos as $inscricao) {
                $this->Inscricao->id = $inscricao['Inscricao']['id'];
                $nota_frequencia     = $inscricao['Inscricao']['nota_frequencia'];
                $estado_inscricao    = $inscricao['Inscricao']['estado_inscricao'];
                $nota_final          = $inscricao['Inscricao']['nota_final'];
                $nota_recorrencia    = $inscricao['Inscricao']['nota_exame_recorrencia'];
                $nota_normal         = $inscricao['Inscricao']['nota_exame_normal'];

                if ($nota_final == -1) {
                    if ($estado_inscricao == 3) {
                        $this->Inscricao->set('estado_inscricao_id', 8);
                    }
                } elseif ($nota_final < 10) {
                    if ($nota_recorrencia != -1) {
                        $this->Inscricao->set('estado_inscricao_id', 12);
                    } elseif ($nota_normal != -1) {
                        $this->Inscricao->set('estado_inscricao_id', 10);
                    } else {
                        $this->Inscricao->set('estado_inscricao_id', 7);
                    }
                } else {
                    if ($nota_recorrencia != -1) {
                        $this->Inscricao->set('estado_inscricao_id', 6);
                    } elseif ($nota_normal != -1 && $nota_normal >= 9.5) {
                        $this->Inscricao->set('estado_inscricao_id', 5);
                    } else {
                        if ($nota_frequencia >= 13.5)
                            $this->Inscricao->set('estado_inscricao_id', 4);
                        else
                            $this->Inscricao->set('estado_inscricao_id', 13);
                    }
                }

                $this->out($this->Inscricao->id . '------' . $nota_final . '---------' . $nota_recorrencia . '------------' . $nota_normal . '--------' . $nota_frequencia . '---------' . $this->Inscricao->data['Inscricao']['estado_inscricao_id']);
                $this->Inscricao->save();
            }
        }

        public function ajusta_inscricao_agronomia() {
            $this->Inscricao->contain('Turma');
            $inscricaos     = $this->Inscricao->find('all', array('conditions' => array('Turma.ano_lectivo_id' => 30)));
            $ajustados      = 0;
            $naoEncontrados = 0;
            foreach ($inscricaos as $inscricao) {
                if ($inscricao['Turma']['plano_estudo_id'] == 30) {
                    $turmaNova = $this->Turma->find('first', array('conditions' => array('Turma.ano_lectivo_id' => 30, 'Turma.curso_id' => $inscricao['Turma']['curso_id'], 'Turma.disciplina_id' => $inscricao['Turma']['disciplina_id'], 'Turma.plano_estudo_id' => 31)));
                    if (!empty($turmaNova)) {
                        $this->Inscricao->id = $inscricao['Inscricao']['id'];
                        $this->Inscricao->set('turma_id', $turmaNova['Turma']['id']);
                        $this->Inscricao->set('turma_inscricao_id', $turmaNova['Turma']['id']);
                        $this->Inscricao->set('turma_frequencia_id', $turmaNova['Turma']['id']);
                        $this->Inscricao->save();
                        $this->out('Turma Ajustada -----' . $ajustados++);
                    } else {
                        $turma                        = array();
                        $turma['ano_lectivo_id']      = 30;
                        $turma['ano_curricular']      = $inscricao['Turma']['ano_curricular'];
                        $turma['semestre_curricular'] = $inscricao['Turma']['semestre_curricular'];
                        $turma['curso_id']            = $inscricao['Turma']['curso_id'];
                        $turma['escola_id']           = $inscricao['Turma']['escola_id'];
                        $turma['plano_estudo_id']     = 31;
                        $turma['turno_id']            = $inscricao['Turma']['turno_id'];
                        $turma['disciplina_id']       = $inscricao['Turma']['disciplina_id'];
                        $turma['estado_turma_id']     = 1;
                        $turma['semestre_lectivo_id'] = $inscricao['Turma']['semestre_lectivo_id'];
                        $turma['name']                = $inscricao['Turma']['name'];

                        $turmas = array('Turma' => $turma);
                        $this->Turma->create();
                        $this->Turma->save($turmas);
                        $naoEncontrados++;
                    }
                }
                if ($inscricao['Turma']['plano_estudo_id'] == 32) {
                    $turmaNova = $this->Turma->find('first', array('conditions' => array('Turma.ano_lectivo_id' => 30, 'Turma.curso_id' => $inscricao['Turma']['curso_id'], 'Turma.disciplina_id' => $inscricao['Turma']['disciplina_id'], 'Turma.plano_estudo_id' => 29)));
                    if (!empty($turmaNova)) {
                        $this->Inscricao->id = $inscricao['Inscricao']['id'];
                        $this->Inscricao->set('turma_id', $turmaNova['Turma']['id']);
                        $this->Inscricao->set('turma_inscricao_id', $turmaNova['Turma']['id']);
                        $this->Inscricao->set('turma_frequencia_id', $turmaNova['Turma']['id']);
                        $this->Inscricao->save();
                        $this->out('Turma Ajustada -----' . $ajustados++);
                    } else {
                        $turma                        = array();
                        $turma['ano_lectivo_id']      = 30;
                        $turma['ano_curricular']      = $inscricao['Turma']['ano_curricular'];
                        $turma['semestre_curricular'] = $inscricao['Turma']['semestre_curricular'];
                        $turma['curso_id']            = $inscricao['Turma']['curso_id'];
                        $turma['escola_id']           = $inscricao['Turma']['escola_id'];
                        $turma['plano_estudo_id']     = 29;
                        $turma['turno_id']            = $inscricao['Turma']['turno_id'];
                        $turma['disciplina_id']       = $inscricao['Turma']['disciplina_id'];
                        $turma['estado_turma_id']     = 1;
                        $turma['semestre_lectivo_id'] = $inscricao['Turma']['semestre_lectivo_id'];
                        $turma['name']                = $inscricao['Turma']['name'];

                        $turmas = array('Turma' => $turma);
                        $this->Turma->create();
                        $this->Turma->save($turmas);
                        $naoEncontrados++;
                    }
                }
            }
            $this->out('Nao encontrados----' . $naoEncontrados);
        }


        public function actualiza_inscricao_matricula(){
            $inscricaos = $this->Aluno->Inscricao->find("all",array('conditions'=>array('Inscricao
            .matricula_id is NULL')));

            $dbo = $this->Aluno->Inscricao->getDatasource();
            $logs = $dbo->getLog();
            $lastLog = end($logs['log']);
           // debug($lastLog['query']);

            foreach($inscricaos as $inscricao){
                $alunoId = $inscricao['Inscricao']['aluno_id'];
                $matricula = $this->Aluno->Matricula->find('first',array('conditions'=>array('Matricula
                .ano_lectivo_id'=>30,'Matricula.aluno_id'=>$alunoId)));
                 if($matricula){
                     $this->Aluno->Inscricao->id = $inscricao['Inscricao']['id'];
                     $this->Aluno->Inscricao->set('matricula_id',$matricula['Matricula']['id']);
                     $this->Aluno->Inscricao->save();
                 }
                debug($matricula);

            }
        }

        public function ajusta_inscricao_curriculum() {
            $this->Aluno->Inscricao->contain(array(
                'Turma'
            ));
            $inscricaos = $this->Aluno->Inscricao->find('all', array('conditions' => array('Turma.plano_estudo_id' => array(30, 32), 'Turma.ano_lectivo_id' => 30)));
            debug(count($inscricaos));
            die();
            foreach ($inscricaos as $inscricao) {
                if ($inscricao['Turma']['plano_estudo_id'] == 30) {
                    $novoPlanoEstudo = 31;
                } else {
                    $novoPlanoEstudo = 29;
                }

                $turmaNovoCurriculum = $this->Aluno->Inscricao->Turma->find('first', array('conditions' => array(
                    'Turma.ano_lectivo_id'      => $inscricao['Turma']['ano_lectivo_id'],
                    'Turma.curso_id'            => $inscricao['Turma']['curso_id'],
                    'Turma.plano_estudo_id'     => $novoPlanoEstudo,
                    'Turma.disciplina_id'       => $inscricao['Turma']['disciplina_id'],
                    'Turma.ano_curricular'      => $inscricao['Turma']['ano_curricular'],
                    'Turma.semestre_curricular' => $inscricao['Turma']['semestre_curricular'],
                )));

                if ($turmaNovoCurriculum) {
                    $this->Aluno->Inscricao->id = $inscricao['Inscricao']['id'];
                    $this->Aluno->Inscricao->set('turma_inscricao_id', $inscricao['Inscricao']['turma_id']);
                    $this->Aluno->Inscricao->set('turma_id', $turmaNovoCurriculum['Turma']['id']);
                    $this->Aluno->Inscricao->set('turma_frequencia_id', $turmaNovoCurriculum['Turma']['id']);
                }
            }
        }

        public function ajusta_plano_estudo_matriculas() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            $this->Matricula->contain(array(
                'Curso','Aluno'
            ));
            $matriculas = $this->Matricula->find('all', array('conditions' => array('Aluno.id'=>26747)));
            debug(count($matriculas));
            foreach ($matriculas as $matricula) {
                if($matricula['Aluno']['plano_estudo_id']!=null){
                    $planoEstudoId = $matricula['Aluno']['plano_estudo_id'];
                    $planoEstudo = $this->PlanoEstudo->findById($planoEstudoId);
                } else{
                    $planoEstudo = $this->PlanoEstudo->find('first', array(
                        'conditions' => array(
                            'PlanoEstudo.curso_id' => $matricula['Matricula']['curso_id'],
                            'ano_criacao <=' =>$matricula['Aluno']['ano_ingresso']
                        ),
                        'order' => 'ano_criacao desc'
                    ));
                    debug($planoEstudo);
                    if(empty($planoEstudo)){
                        $planoEstudo  = $this->PlanoEstudo->find('first', array(
                            'conditions' => array(
                                'PlanoEstudo.curso_id' => $matricula['Matricula']['curso_id'],
                                'ano_criacao >=' =>$matricula['Aluno']['ano_ingresso']
                            ),
                            'order' => 'ano_criacao ASC'
                        ));
                    }
                }
                if(!empty($planoEstudo)){
                    $this->Matricula->id = $matricula['Matricula']['id'];
                    $this->Matricula->set('plano_estudo_id',$planoEstudo['PlanoEstudo']['id']);
                    $this->Matricula->save();
                    $this->out($planoEstudo['PlanoEstudo']['name']);
                } else{
                    die(debug($matricula));
                }



            }
        }

        public function ajusta_turno_matricula() {

            $matriculas = $this->Matricula->find('all', array('conditions' => array('turno_id' => null)));
            $i          = 0;
            foreach ($matriculas as $matricula) {
                $curso_turno         = $this->Matricula->Curso->CursosTurno->findByCursoId($matricula['Matricula']['curso_id']);
                $this->Matricula->id = $matricula['Matricula']['id'];
                $this->Matricula->set('turno_id', $curso_turno['CursosTurno']['turno_id']);
                $this->Matricula->save();
                $this->out($i++);
            }
        }

        public function altera_cursos_agronomia(){
            $alunos = $this->Aluno->find('all',array('conditions'=>array('curso_id'=>array(7,8),
                'estado_aluno_id'=>1)));
            foreach($alunos as $aluno){
                $data = [
                        'data_mudanca'=>date('Y-m-d'),
                        'observacao'=>"Mudanca de Curso para novo Curso. Inscricoes",
                        'curso_antigo'=>$aluno['Aluno']['curso_id'],
                        'aluno_id'=>$aluno['Aluno']['id'],
                    'numero_estudante_atribuido'=>''

                    ];
                if($aluno['Aluno']['curso_id']==7){
                    $data['curso_id']=5;
                } else{
                    $data['curso_id']=15;
                }

                $dados = ['Aluno'=>$data];
                $this->Aluno->mudaCurso($dados);
                $this->out($aluno['Aluno']['codigo']);

    }
        }

        public function aproveitamento() {


            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'aproveitamento2.xlsx');

            $worksheet = $xls->getActiveSheet();

            $cursos = $this->Curso->find('all', array('conditions' => array('unidade_organica_id' => 28)));
            foreach ($cursos as $curso) {
                $myWorkSheet = new PHPExcel_Worksheet($xls, substr($curso['Curso']['name'], 0, 30));
                $worksheet   = $xls->addSheet($myWorkSheet);

                $this->PlanoEstudo->contain();
                $planoestudo = $this->PlanoEstudo->find('first', array('conditions' => array('curso_id' => $curso['Curso']['id'], 'ano_criacao <' => 2009), 'order' => array('ano_criacao DESC')));

                $planoestudoano = $this->PlanoEstudo->DisciplinaPlanoEstudo->find('all', array('conditions' => array('plano_estudo_id' => $planoestudo['PlanoEstudo']['id']), 'order' => array('ano', 'semestre')));

                $linha           = 1;
                $coluna          = 1;
                $ano_actual      = $coluna;
                $semestre_actual = $coluna;
                $total_colunas   = 0;
                foreach ($planoestudoano as $pa) {
                    $worksheet->setCellValueByColumnAndRow($coluna, 3, $pa['Disciplina']['name']);
                    $worksheet->setCellValueByColumnAndRow($coluna, 4, $pa['Disciplina']['codigo']);
                    $worksheet->getStyleByColumnAndRow($coluna, 3)->getAlignment()->setTextRotation(90);
                    $worksheet->getStyleByColumnAndRow($coluna, 4)->getAlignment()->setTextRotation(90);


                    $total_colunas++;
                    $coluna++;
                }
//debug($planoestudo);
//die();

                $alunos = $this->Aluno->find('all', array('conditions' => array('Aluno.ano_ingresso' => 2009, 'Aluno.curso_id' => $curso['Curso']['id'])));
                $linha  = 5;
                $i      = 0;
                foreach ($alunos as $aluno) {
                    $worksheet->setCellValueByColumnAndRow(0, $linha, '' . $aluno['Aluno']['codigo']);
                    $coluna = 1;
                    while ($coluna <= $total_colunas) {
                        $codigo_disciplina = $worksheet->getCellByColumnAndRow($coluna, 4)->getValue();
                        $disciplina        = $this->Disciplina->findByCodigo($codigo_disciplina);
                        $this->Aluno->Inscricao->contain(array(
                            'Turma'
                        ));
                        $inscricao = $this->Aluno->Inscricao->find('first', array('conditions' => array('Inscricao.aluno_id' => $aluno['Aluno']['id'], 'Turma.disciplina_id' => $disciplina['Disciplina']['id']), 'order' => 'data DESC'));
                        if ($inscricao)
                            $worksheet->setCellValueByColumnAndRow($coluna, $linha, $inscricao['Inscricao']['nota_final']);

                        $coluna++;
                        $i++;
                        $this->out($i);
                    }


                    $linha++;
                }
            }
//Comecamos por preencher as disciplinas


            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
            debug(getcwd());
            $objWriter->save('aproveitamento2.xlsx');
        }

        public function autenticidades() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'autenticidades.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 1;
            $numeros      = array();
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {

                } else {
                    $numeros[] = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('H' . $linha_actual)->getCalculatedValue();
                    $numeros[] = $worksheet->getCell('I' . $linha_actual)->getCalculatedValue();
                }
                if ($linha_actual == 1600) {
                    break;
                }
//$this->out($linha_actual);
                $linha_actual++;
            }


            debug(count($numeros));

            $numeros_limpo = array_filter($numeros);
            sort($numeros_limpo);

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'novo.xlsx');

            $worksheet = $xls->getActiveSheet();

            $colunas      = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I');
            $linha_actual = 2;
            $array_i      = 2;


            while ($array_i <= count($numeros_limpo)) {

                foreach ($colunas as $c) {

                    if (isset($numeros_limpo[$array_i - 1]) && $numeros_limpo[$array_i - 1] != null) {
                        $xls->getActiveSheet()->setCellValue($c . $linha_actual, $numeros_limpo[$array_i - 1]);
                        $this->out($array_i . "---" . $numeros_limpo[$array_i - 1]);
                    }

                    $array_i++;
                }
                $linha_actual++;
            }


            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
            debug(getcwd());
            $objWriter->save('fixeiro.xlsx');

//debug($resultado);
            debug(count($numeros_limpo));
// clear memory
            $xls->disconnectWorksheets();
        }

        public function bolsa_importa_alineas() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . bolsas . DS . 'bolsas_alinea.xlsx');

            $worksheet    = $xls->getActiveSheet();
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                $controlador = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                if ($controlador == '') {
                    break;
                }

                $caa                         = array();
                $caa['apelido']              = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
                $caa['nomes']                = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
                $caa['nome_pai']             = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
                $caa['nome_mae']             = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
                $caa['data_nascimento']      = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                $caa['estado_civil_id']      = $worksheet->getCell('I' . $linha_actual)->getCalculatedValue();
                $caa['genero_id']            = $worksheet->getCell('H' . $linha_actual)->getCalculatedValue();
                $caa['pais_nascimento']      = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                $caa['provincia_nascimento'] = $worksheet->getCell('K' . $linha_actual)->getCalculatedValue();
                $caa['cidade_nascimento']    = $worksheet->getCell('L' . $linha_actual)->getCalculatedValue();
                $caa['pais_morada']          = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                $caa['provincia_morada']     = $worksheet->getCell('X' . $linha_actual)->getCalculatedValue();
                $caa['cidade_morada']        = $worksheet->getCell('Y' . $linha_actual)->getCalculatedValue();
                $caa['numero_estudante']     = $worksheet->getCell('Q' . $linha_actual)->getCalculatedValue();
                $caa['email']                = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $caa['telemovel']            = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $caa['ano_conclusao']        = $worksheet->getCell('P' . $linha_actual)->getCalculatedValue();
                $caa['grau_academico_id']    = $worksheet->getCell('O' . $linha_actual)->getCalculatedValue();


                $faculdade_nome = $worksheet->getCell('U' . $linha_actual)->getCalculatedValue();

                $unidade_organica           = $this->UnidadeOrganica->findByName($faculdade_nome);
                $caa['unidade_organica_id'] = $unidade_organica['UnidadeOrganica']['id'];

                $curso_nome = $worksheet->getCell('S' . $linha_actual)->getCalculatedValue();

                $curso_real      = $this->Curso->findByName($curso_nome);
                $caa['curso_id'] = $curso_real['Curso']['id'];
                $this->CandidatoAlumni->create();
                $this->CandidatoAlumni->save($caa);
                $this->out($this->CandidatoAlumni->id);
                $linha_actual++;
            }
        }

        public function cancela_turmas_sem_inscricao() {
            $turmas         = $this->Aluno->Inscricao->Turma->find('all', array('conditions' => array('Turma.estado_turma_id' => 1)));
            $total_apagadas = 0;
            foreach ($turmas as $turma) {
                $inscricaos = $this->Aluno->Inscricao->find('count', array('conditions' => array('Inscricao.turma_id' => $turma['Turma']['id'])));
                if ($inscricaos == 0) {
                    $inscricaos = $this->Aluno->Inscricao->find('count', array('conditions' => array('Inscricao.turma_frequencia_id' => $turma['Turma']['id'])));
                    if ($inscricaos == 0) {
                        $this->Aluno->Inscricao->Turma->id = $turma['Turma']['id'];
                        $this->Aluno->Inscricao->Turma->set('estado_turma_id', 3);
                        $this->Aluno->Inscricao->Turma->save();
                        $total_apagadas++;
                    }
                }
            }
            $this->out('Total Apagadas--' . $total_apagadas);
        }

        public function cria_pedido_cartao() {

            $this->Aluno->contain('Curso');
            $alunos = $this->Aluno->find('all', array('conditions' => array('ano_ingresso' => 2013)));
            foreach ($alunos as $aluno) {
//Verifica se este aluno nao tem nenhum pedido de novo cartao ja emitido
                $pedido_existe = $this->RequisicoesPedido->find('first', array('conditions' => array('aluno_id' => $aluno['Aluno']['id'], 'requisicoes_tipo_pedido_id' => 6)));

                if (empty($pedido_existe)) {
                    $novo_pedido = array(
                        'aluno_id'                     => $aluno['Aluno']['id'],
                        'requisicoes_tipo_pedido_id'   => 6,
                        'data_pedido'                  => date('Y-m-d H:i:s'),
                        'curso_id'                     => $aluno['Aluno']['curso_id'],
                        'requisicoes_estado_pedido_id' => 1,
                        'funcionario_id'               => 1,
                    );
                    $this->RequisicoesPedido->create();
                    $this->RequisicoesPedido->save(array('RequisicoesPedido' => $novo_pedido));
                    $this->out($this->RequisicoesPedido->id);
                }
            }
        }

        public function envia_sms_estrangeiros() {
            $this->Aluno->contain('Entidade');
            $alunos = $this->Aluno->find('all', array('conditions' => array('Entidade.pais_nascimento NOT' => 152, 'Aluno.estado_aluno_id' => 1)));
            debug(count($alunos));
            foreach ($alunos as $aluno) {
                if ($aluno['Entidade']['telemovel']) {
                    debug('a');
                }
            }
        }

        public function exporta_bolsas_novo_ingresso() {

            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'renovacao.xlsx');

            $worksheet    = $xls->getActiveSheet();
            $linha_actual = 2;
            $this->Aluno->Matricula->contain(array(
                'Aluno'                  => array(
                    'Entidade'
                ), 'AnoLectivo', 'Curso' => array(
                    'UnidadeOrganica'
                )
            ));
            $matriculas = $this->Aluno->Matricula->find('all', array('conditions' => array('Matricula.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id')), 'limit' => 10));
            foreach ($matriculas as $matricula) {
                $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $matricula['Aluno']['codigo']);
                $xls->getActiveSheet()->setCellValue('B' . $linha_actual, $matricula['Aluno']['Entidade']['apelido']);
                $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $matricula['Aluno']['Entidade']['nomes']);
                $xls->getActiveSheet()->setCellValue('D' . $linha_actual, $matricula['AnoLectivo']['ano']);
                $xls->getActiveSheet()->setCellValue('E' . $linha_actual, $matricula['Matricula']['data']);
                $xls->getActiveSheet()->setCellValue('F' . $linha_actual, $matricula['Curso']['name']);
                $unidade_organica = $matricula['Curso']['UnidadeOrganica'];
                $faculdade        = $unidade_organica;
                if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                    $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                    $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                }
                $xls->getActiveSheet()->setCellValue('G' . $linha_actual, $faculdade['name']);
                $this->out($linha_actual . "---" . $matricula['Aluno']['codigo']);
                $linha_actual++;
                $xls->getActiveSheet()->setBreak('G' . $linha_actual, 2);
            }
            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'renovacao' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
        }

        public function exporta_candidatos_boletins() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'estudantes_admitidos.xlsx');

            $worksheet    = $xls->getActiveSheet();
            $linha_actual = 2;
            $this->Candidatura->contain(array(
                'Curso' => array(
                    'UnidadeOrganica'
                ), 'Genero'
            ));
            $candidatos = $this->Candidatura->find('all', array('conditions' => array('estado_candidatura_id' => 2, 'ano_lectivo_admissao' => 2014)));

            foreach ($candidatos as $candidato) {
                $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $candidato['Candidatura']['numero_candidato']);
                $xls->getActiveSheet()->setCellValue('B' . $linha_actual, $candidato['Candidatura']['numero_estudante']);
                $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $candidato['Candidatura']['apelido']);
                $xls->getActiveSheet()->setCellValue('D' . $linha_actual, $candidato['Candidatura']['nomes']);
                $xls->getActiveSheet()->setCellValue('E' . $linha_actual, $candidato['Curso']['name']);
                $xls->getActiveSheet()->setCellValue('G' . $linha_actual, $candidato['Genero']['name']);
                $xls->getActiveSheet()->setCellValue('H' . $linha_actual, $candidato['Candidatura']['data_nascimento']);
                $unidade_organica = $candidato['Curso']['UnidadeOrganica'];
                $faculdade        = $unidade_organica;
                if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                    $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                    $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                }
                $xls->getActiveSheet()->setCellValue('F' . $linha_actual, $faculdade['name']);
                $this->out($linha_actual . "---" . $candidato['Candidatura']['numero_estudante']);
                $linha_actual++;
            }
            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'estudantes_admitidos_' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
        }

        public function exporta_renovacao_matriculas() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'renovacao.xlsx');

            $worksheet    = $xls->getActiveSheet();
            $linha_actual = 2;
            $this->Aluno->Matricula->contain(array(
                'Aluno'                  => array(
                    'Entidade'
                ), 'AnoLectivo', 'Curso' => array(
                    'UnidadeOrganica'
                )
            ));
            $matriculas = $this->Aluno->Matricula->find('all', array('conditions' => array('Matricula.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'))));
            foreach ($matriculas as $matricula) {
                $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $matricula['Aluno']['codigo']);
                $xls->getActiveSheet()->setCellValue('B' . $linha_actual, $matricula['Aluno']['Entidade']['apelido']);
                $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $matricula['Aluno']['Entidade']['nomes']);
                $xls->getActiveSheet()->setCellValue('D' . $linha_actual, $matricula['AnoLectivo']['ano']);
                $xls->getActiveSheet()->setCellValue('E' . $linha_actual, $matricula['Matricula']['data']);
                $xls->getActiveSheet()->setCellValue('F' . $linha_actual, $matricula['Curso']['name']);
                $unidade_organica = $matricula['Curso']['UnidadeOrganica'];
                $faculdade        = $unidade_organica;
                if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                    $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                    $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                }
                $xls->getActiveSheet()->setCellValue('G' . $linha_actual, $faculdade['name']);
                $this->out($linha_actual . "---" . $matricula['Aluno']['codigo']);
                $linha_actual++;
            }
            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'renovacao' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
        }

        public function gera_pagamentos_renovacao_2014() {
            $this->Aluno->contain();
            $alunos = $this->Aluno->find('all');
            foreach ($alunos as $aluno) {
                $ano_ingresso = $aluno['Aluno']['ano_ingresso'];
                if ($ano_ingresso >= 2000 && $ano_ingresso <= 2007) {
                    $referencia = substr($aluno['Aluno']['codigo'], 2);
                } elseif ($ano_ingresso > 2007) {
                    $referencia = "0" . $aluno['Aluno']['codigo'];
                } else {
                    $referencia = $aluno['Aluno']['codigo'];
                }

                $datasource = $this->Aluno->getDatasource();
                $datasource->begin();
                $transacao = array();
                $pagamento = array();

                $curso_turno = $this->Aluno->Curso->CursosTurno->find('first', array('conditions' => array('curso_id' => $aluno['Aluno']['curso_id'])));
                if ($curso_turno['CursosTurno']['turno_id'] == 1) {
                    $transacao['financeiro_tipo_transacao_id'] = 2;
                    $pagamento['tipo_pagamento_id']            = 37;
                    $transacao['valor']                        = 80;
                    $referencia                                = $referencia . "02";
                } else {
                    $transacao['financeiro_tipo_transacao_id'] = 2;
                    $pagamento['tipo_pagamento_id']            = 38;
                    $transacao['valor']                        = 160;
                    $referencia                                = $referencia . "03";
                }
                $transacao['entidade_id'] = $aluno['Aluno']['entidade_id'];

                $conta_existe = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->find('first', array('conditions' => array('entidade_id' => $aluno['Aluno']['entidade_id'], 'unidade_organica_id' => 29)));
                if (empty($conta_existe)) {
                    $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->create();
                    $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->save(array('FinanceiroConta' => array('entidade_id' => $aluno['Aluno']['entidade_id'], 'unidade_organica_id' => 29)));
                    $conta_existe = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->find('first', array('conditions' => array('entidade_id' => $aluno['Aluno']['entidade_id'], 'unidade_organica_id' => 29)));
                }
                $transacao['financeiro_conta_id']            = $conta_existe['FinanceiroConta']['id'];
                $transacao['financeiro_estado_transacao_id'] = 1;
                $this->Aluno->Entidade->FinanceiroTransacao->create();
                $this->Aluno->Entidade->FinanceiroTransacao->save(array('FinanceiroTransacao' => $transacao));

                $pagamento['aluno_id']                       = $aluno['Aluno']['id'];
                $pagamento['financeiro_conta_id']            = $conta_existe['FinanceiroConta']['id'];
                $pagamento['valor']                          = $transacao['valor'];
                $pagamento['data_limite']                    = '2013-12-31';
                $pagamento['data_emissao']                   = '2013-09-30';
                $anolectivo                                  = $this->Aluno->Matricula->AnoLectivo->findByAno('2014');
                $pagamento['ano_lectivo_id']                 = $anolectivo['AnoLectivo']['id'];
                $pagamento['financeiro_estado_pagamento_id'] = 1;
                $pagamento['codigo']                         = $referencia;
                $pagamento['financeiro_transacao_id']        = $this->Aluno->Entidade->FinanceiroTransacao->id;
                $pagamento['referencia_pagamento']           = $referencia;
                $pagamento['entidade_id']                    = $aluno['Aluno']['entidade_id'];

                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->create();
                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->save(array('FinanceiroPagamento' => $pagamento));

                $datasource->commit();
                debug($aluno);
            }
        }


        public function mestres(){
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP  . 'mestres.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 2;
            $numeros      = array();
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('B' . $linha_actual)->getValue() == '') {

                } else {
                    $numero = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                    $this->Aluno->contain('Entidade');
                    $aluno = $this->Aluno->findByCodigo($numero);
                    if($aluno){
                        if($aluno['Entidade']['email']!=''){
                            $worksheet->setCellValue('F' . $linha_actual, $aluno['Entidade']['email']);
                        } else{
                            $worksheet->setCellValue('F' . $linha_actual, 'NULL');
                        }
                        if($aluno['Entidade']['telemovel']!=''){
                            $worksheet->setCellValue('G' . $linha_actual, $aluno['Entidade']['telemovel']);
                        } else{
                            $worksheet->setCellValue('G' . $linha_actual, 'NULL');
                        }

                        $this->out($linha_actual);
                    }


                }

                $linha_actual++;
                if($linha_actual==275){
                    break;
                }
            }

            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('mestres2.xlsx');
    }

        public function gerar_turmas() {
            $plano_estudos = $this->Turma->PlanoEstudo->find('list', array('conditions' => array('PlanoEstudo.id' => 35)));
            debug($plano_estudos);
            $ano_lectivo_id = Configure::read('OpenSGA.ano_lectivo_id');
            $semestre_id    = Configure::read('OpenSGA.semestre_lectivo_id');
            $semestre_id    = 67;

            foreach ($plano_estudos as $plano_estudo_id => $plano_estudo) {
                $turnos      = $this->Turma->Turno->find('list');
                $disciplinas = $this->Turma->PlanoEstudo->getAllDisciplinas($plano_estudo_id);
                debug(count($disciplinas));
                foreach ($disciplinas as $disciplina) {
                    $curso_id = $disciplina['PlanoEstudo']['curso_id'];
                    $turnos   = $this->Turma->Curso->CursosTurno->findAllByCursoId($curso_id);
                    if (empty($turnos)) {
                        $turno_id                     = null;
                        $turma                        = array();
                        $turma['ano_lectivo_id']      = $ano_lectivo_id;
                        $turma['ano_curricular']      = $disciplina['DisciplinaPlanoEstudo']['ano_curricular'];
                        $turma['semestre_curricular'] = $disciplina['DisciplinaPlanoEstudo']['semestre_curricular'];
                        $turma['curso_id']            = $disciplina['PlanoEstudo']['curso_id'];
                        $turma['escola_id']           = 1;
                        $turma['plano_estudo_id']     = $plano_estudo_id;
                        $turma['turno_id']            = $turno_id;
                        $turma['disciplina_id']       = $disciplina['Disciplina']['id'];
                        $turma['estado_turma_id']     = 1;
                        $turma['semestre_lectivo_id'] = $semestre_id;
                        $nome                         = $disciplina['Disciplina']['name'] . " - " . $disciplina['PlanoEstudo']['name'];
                        $turma['name']                = $nome;

                        $turmas = array('Turma' => $turma);

//Primeiro precisamos ver se a turma nao esta criada ainda
                        $turma_existe = $this->Turma->find('first', array('recursive'  => -1,
                                                                          'conditions' => array('ano_lectivo_id'      => $ano_lectivo_id,
                                                                                                'plano_estudo_id'     => $plano_estudo_id,
                                                                                                'disciplina_id'       => $disciplina['Disciplina']['id'],
                                                                                                'ano_curricular'      => $turma['ano_curricular'],
                                                                                                'semestre_curricular' => $turma['semestre_curricular'],
                                                                                                'turno_id'            => $turma['turno_id'],
                                                                                                'semestre_lectivo_id' => $semestre_id)
                            )
                        );

                        if (!$turma_existe) {
                            $this->Turma->create();
                            $this->Turma->save($turmas);
                            $this->out('Turma Criada: ' . $nome);
                        } else {
                            $this->out('<error>Turma Existente: ' . $nome . '</error>');
                        }
                    } else {
                        foreach ($turnos as $turno) {
                            $turno_id                     = $turno['CursosTurno']['turno_id'];
                            $turma                        = array();
                            $turma['ano_lectivo_id']      = $ano_lectivo_id;
                            $turma['ano_curricular']      = $disciplina['DisciplinaPlanoEstudo']['ano_curricular'];
                            $turma['semestre_curricular'] = $disciplina['DisciplinaPlanoEstudo']['semestre_curricular'];
                            $turma['curso_id']            = $disciplina['PlanoEstudo']['curso_id'];
                            $turma['escola_id']           = 1;
                            $turma['plano_estudo_id']     = $plano_estudo_id;
                            $turma['turno_id']            = $turno_id;
                            $turma['disciplina_id']       = $disciplina['Disciplina']['id'];
                            $turma['estado_turma_id']     = 1;
                            $turma['semestre_lectivo_id'] = $semestre_id;
                            $nome                         = $disciplina['Disciplina']['name'] . " - " . $disciplina['PlanoEstudo']['name'];
                            $turma['name']                = $nome;

                            $turmas = array('Turma' => $turma);

//Primeiro precisamos ver se a turma nao esta criada ainda
                            $turma_existe = $this->Turma->find('first', array('recursive'  => -1,
                                                                              'conditions' => array('ano_lectivo_id'      => $ano_lectivo_id,
                                                                                                    'plano_estudo_id'     => $plano_estudo_id,
                                                                                                    'disciplina_id'       => $disciplina['Disciplina']['id'],
                                                                                                    'ano_curricular'      => $turma['ano_curricular'],
                                                                                                    'semestre_curricular' => $turma['semestre_curricular'],
                                                                                                    'turno_id'            => $turma['turno_id'],
                                                                                                    'semestre_lectivo_id' => $semestre_id)
                                )
                            );

                            if (!$turma_existe) {
                                $this->Turma->create();
                                $this->Turma->save($turmas);
                                $this->out('Turma Criada: ' . $nome);
                            } else {
                                $this->out('<error>Turma Existente: ' . $nome . '</error>');
                            }
                        }
                    }

                }
            }
        }

        public function importa_admitidos_base() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'Admitidos'.DS.'2015'.DS. 'admitidos.xlsx');


            $worksheet = $xls->getActiveSheet();
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $nao_encontrados  = array();
                $numero_candidato = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();

                $candidato        = $this->Candidatura->findByNumeroCandidato($numero_candidato);
                $codigo_curso_admissao = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();

                if(in_array($codigo_curso_admissao,array(1150,1151,1155,1148,1149,1152,1154))){
                    $codigo_curso_admissao=1153;
                }

                if(in_array($codigo_curso_admissao,array(1142))){
                    $codigo_curso_admissao=1141;
                }
                if(in_array($codigo_curso_admissao,array(1133))){
                    $codigo_curso_admissao=1042;
                }

                if(in_array($codigo_curso_admissao,array(1098,1099))){
                    $codigo_curso_admissao=1097;
                }
                if(in_array($codigo_curso_admissao,array(1046))){
                    $codigo_curso_admissao=1156;
                }
                if(in_array($codigo_curso_admissao,array(1136))){
                    $codigo_curso_admissao=1054;
                }

                if(in_array($codigo_curso_admissao,array(1104))){
                    $codigo_curso_admissao=1103;
                }
                if(in_array($codigo_curso_admissao,array(1115))){
                    $codigo_curso_admissao=1114;
                }
                if(in_array($codigo_curso_admissao,array(1121))){
                    $codigo_curso_admissao=1120;
                }
                if(in_array($codigo_curso_admissao,array(1119))){
                    $codigo_curso_admissao=1118;
                }
                if(in_array($codigo_curso_admissao,array(1126,1146))){
                    $codigo_curso_admissao=1125;
                }
                if(in_array($codigo_curso_admissao,array(1017,1139))){
                    $codigo_curso_admissao=1015;
                }
                if(in_array($codigo_curso_admissao,array(1018,1147))){
                    $codigo_curso_admissao=1016;
                }
                if(in_array($codigo_curso_admissao,array(1093))){
                    $codigo_curso_admissao=1091;
                }
                if(in_array($codigo_curso_admissao,array(1068,1069))){
                    $codigo_curso_admissao=1067;
                }
                if(in_array($codigo_curso_admissao,array(1134))){
                    $codigo_curso_admissao=1045;
                }
                if(in_array($codigo_curso_admissao,array(1135))){
                    $codigo_curso_admissao=1048;
                }

                $curso = $this->Curso->findByCodigoAdmissao($codigo_curso_admissao);
                if(empty($curso)){
                    debug('empty');
                    debug($codigo_curso_admissao);
                    $curso_zero[] =$codigo_curso_admissao;
                    die();
                }

                $faculdade = $this->Curso->UnidadeOrganica->getFaculdadeByCursoId($curso['Curso']['id']);
                $nome = $worksheet->getCell('D' . $linha_actual)->getFormattedValue();
                $nome = trim($nome);
                $nomes = explode(' ', $nome);
                $apelido = array_pop($nomes);

                $first_names = implode(' ',$nomes);

                debug($apelido);
                debug($first_names);
                debug($nome);


                if ($candidato) {
                    $this->Candidatura->id = $candidato['Candidatura']['id'];
                    $this->Candidatura->set('numero_estudante', $worksheet->getCell('A' . $linha_actual)
                        ->getCalculatedValue());
                    $this->Candidatura->set('codigo_curso_admitido_admissao',
                        $worksheet->getCell('E' . $linha_actual)->getCalculatedValue());
                    $this->Candidatura->set('name', $worksheet->getCell('D' . $linha_actual)
                        ->getFormattedValue());
                    $this->Candidatura->set('aluno_via_admissao_id', 1);
                    $this->Candidatura->set('tipo_ingresso_id', 1);
                    $this->Candidatura->set('estado_candidatura_id', 2);
                    $this->Candidatura->set('ano_lectivo_admissao', 2015);
                    $this->Candidatura->set('curso_id', $curso['Curso']['id']);
                    $this->Candidatura->set('ano_candidatura', 2014);
                    $this->Candidatura->set('nome_faculdade',$faculdade['UnidadeOrganica']['name']);
                    $this->Candidatura->set('nome_curso',$curso['Curso']['name']);
                    $this->Candidatura->set('estado_matricula_id',5);
                    $this->Candidatura->set('nomes',$first_names);
                    $this->Candidatura->set('apelido',$apelido);


                    $this->Candidatura->save();
                    $this->out($linha_actual . '--------------------------------' . $this->Candidatura->id);
                } else {
                    $this->Candidatura->create();
                    $arrayCandidatura = [
                        'Candidatura'=>[
                            'numero_estudante'=>$worksheet->getCell('A' . $linha_actual)->getCalculatedValue(),
                            'numero_candidato'=>$worksheet->getCell('C' . $linha_actual)->getCalculatedValue(),
                            'codigo_curso_admitido_admissao'=>$worksheet->getCell('E' . $linha_actual)->getCalculatedValue(),
                            'aluno_via_admissao_id'=>1,
                            'tipo_ingresso_id'=>1,
                            'estado_candidatura_id'=>2,
                            'name'=>$worksheet->getCell('O' . $linha_actual)->getFormattedValue(),
                            'ano_lectivo_admissao'=>2015,
                            'curso_id'=>$curso['Curso']['id'],
                            'ano_candidatura'=>2014,
                            'nome_faculdade'=>$faculdade['UnidadeOrganica']['name'],
                            'nome_curso'=>$curso['Curso']['name'],
                            'estado_matricula_id'=>5,
                            'nomes'=>$first_names,
                            'apelido'=>$apelido

                        ]
                    ];
                    $this->Candidatura->save($arrayCandidatura);
                    $this->out($linha_actual . '-----------------NOVO---------------' . $this->Candidatura->id);
                    $nao_encontrados[] = $numero_candidato;
                }

                $linha_actual++;
            }
            $this->out($nao_encontrados);
        }

        public function importa_admitidos_server() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'Admitidos'.DS.'2015'.DS. 'admitidos_20150222.xlsx');

            $worksheet = $xls->getActiveSheet();
            //debug($xls->getActiveSheetIndex());
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $nao_encontrados                                         = array();
                $numero_candidato                                        = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $array_candidato                                         = array(
                    'Candidatura' => array(
                        'numero_estudante' => $numero_candidato,
                    )
                );
                $nome_completo2                                          = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $nome_completo                                           = trim($nome_completo2);
                $nomes                                                   = $this->User->splitName($nome_completo);
                $array_candidato['Candidatura']['apelido']               = trim($nomes['surname']);
                $array_candidato['Candidatura']['nomes']                 = trim($nomes['firstname']);
                $array_candidato['Candidatura']['estado_matricula_id']   = 5;
                $array_candidato['Candidatura']['ano_lectivo_admissao']  = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
                $array_candidato['Candidatura']['tipo_ingresso_id']      = 2;
                $array_candidato['Candidatura']['estado_candidatura_id'] = 2;
                $curso_nome                                              = trim($worksheet->getCell('D' .
                    $linha_actual)->getCalculatedValue());
                $curso                                                   = $this->Curso->findByName($curso_nome);
                if ($curso) {
                    $array_candidato['Candidatura']['curso_id']   = $curso['Curso']['id'];
                    $array_candidato['Candidatura']['nome_curso'] = $curso['Curso']['name'];
                } else {

                    debug($curso_nome);
                    die(debug('Falha no Import'));
                }

                $this->Candidatura->create();
                $this->Candidatura->save($array_candidato);
                $this->out($this->Candidatura->id);


                $linha_actual++;
            }
            $this->out($nao_encontrados);
        }


        public function importa_admitidos_via_admissao() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'admitidos_server.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $nao_encontrados = array();
                $numeroEstudante = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $viaAdmissao     = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                if ($viaAdmissao != '') {
                    $viaAdmissaoExiste = $this->Aluno->AlunoViaAdmissao->findByName($viaAdmissao);
                    if (empty($viaAdmissaoExiste)) {
                        $arrayViaAdmissao = array(
                            'AlunoViaAdmissao' => array(
                                'name' => $viaAdmissao
                            )
                        );
                        $this->Aluno->AlunoViaAdmissao->create();
                        $this->Aluno->AlunoViaAdmissao->save($arrayViaAdmissao);
                        $viaAdmissaoId = $this->Aluno->AlunoViaAdmissao->id;
                    } else {
                        $viaAdmissaoId = $viaAdmissaoExiste['AlunoViaAdmissao']['id'];
                    }
                    $candidato = $this->Candidatura->findByNumeroEstudante($numeroEstudante);
                    if (!empty($candidato)) {
                        $this->Candidatura->id = $candidato['Candidatura']['id'];
                        $this->Candidatura->set('aluno_via_admissao_id', $viaAdmissaoId);
                        $this->Candidatura->save();
                    }
                    $aluno = $this->Aluno->findByCodigo($numeroEstudante);
                    if (!empty($aluno)) {
                        $this->Aluno->id = $aluno['Aluno']['id'];
                        $this->Aluno->set('aluno_via_admissao_id', $viaAdmissaoId);
                        $this->Aluno->save();
                    }
                    $this->out($numeroEstudante . '------------' . $viaAdmissaoId);
                }
                $linha_actual++;
            }
            $this->out($nao_encontrados);
        }

        public function importa_alumnis() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'alumnis.xlsx');

            $worksheet    = $xls->getActiveSheet();
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                $controlador = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                if ($controlador == '') {
                    break;
                }

                $caa                         = array();
                $caa['apelido']              = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
                $caa['nomes']                = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
                $caa['nome_pai']             = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
                $caa['nome_mae']             = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
                $caa['data_nascimento']      = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                $caa['estado_civil_id']      = $worksheet->getCell('I' . $linha_actual)->getCalculatedValue();
                $caa['genero_id']            = $worksheet->getCell('H' . $linha_actual)->getCalculatedValue();
                $caa['pais_nascimento']      = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                $caa['provincia_nascimento'] = $worksheet->getCell('K' . $linha_actual)->getCalculatedValue();
                $caa['cidade_nascimento']    = $worksheet->getCell('L' . $linha_actual)->getCalculatedValue();
                $caa['pais_morada']          = $worksheet->getCell('J' . $linha_actual)->getCalculatedValue();
                $caa['provincia_morada']     = $worksheet->getCell('X' . $linha_actual)->getCalculatedValue();
                $caa['cidade_morada']        = $worksheet->getCell('Y' . $linha_actual)->getCalculatedValue();
                $caa['numero_estudante']     = $worksheet->getCell('Q' . $linha_actual)->getCalculatedValue();
                $caa['email']                = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $caa['telemovel']            = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $caa['ano_conclusao']        = $worksheet->getCell('P' . $linha_actual)->getCalculatedValue();
                $caa['grau_academico_id']    = $worksheet->getCell('O' . $linha_actual)->getCalculatedValue();


                $faculdade_nome = $worksheet->getCell('U' . $linha_actual)->getCalculatedValue();

                $unidade_organica           = $this->UnidadeOrganica->findByName($faculdade_nome);
                $caa['unidade_organica_id'] = $unidade_organica['UnidadeOrganica']['id'];

                $curso_nome = $worksheet->getCell('S' . $linha_actual)->getCalculatedValue();

                $curso_real      = $this->Curso->findByName($curso_nome);
                $caa['curso_id'] = $curso_real['Curso']['id'];
                $this->CandidatoAlumni->create();
                $this->CandidatoAlumni->save($caa);
                $this->out($this->CandidatoAlumni->id);
                $linha_actual++;
            }
        }

        public function importa_apelidos_2014() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'candidato_apelidos.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $nao_encontrados  = array();
                $numero_candidato = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $candidato        = $this->Candidatura->findByNumeroCandidato($numero_candidato);
                if ($candidato) {
                    $this->Candidatura->id = $candidato['Candidatura']['id'];

                    $this->Candidatura->set('apelido', ucwords(strtolower($worksheet->getCell('B' . $linha_actual)->getCalculatedValue())));

                    $this->Candidatura->save();
                    $this->out($linha_actual . '--------------------------------' . $this->Candidatura->id);

// debug($this->Candidatura->data);
                } else {
                    $nao_encontrados[] = $numero_candidato;
                }

                $linha_actual++;
            }
            $this->out($nao_encontrados);
        }

        /**
         * Importa candidatos do excel
         * @todo Verificar esta funcao. Nao eh consistente
         * @throws CakeException
         */
        public function importa_candidatos_excel() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'Admitidos'.DS.'2015'.DS. 'candidatos.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 2;

            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('B' . $linha_actual)->getValue() == '') {
                    break;
                }

                $numero_candidato = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $apelido = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
                $apelido = ucwords(strtolower($apelido));
                $nomes = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
                $nomes = ucwords(strtolower($nomes));
                $tipoDocumento = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                $numeroDocumento = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
                $dataNascimento = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
                $sexo = $worksheet->getCell('H' . $linha_actual)->getCalculatedValue();
                if($sexo =='M'){
                    $genero = 1;
                } elseif($sexo=='F'){
                    $genero = 2;
                }
                $estadoCivil = $worksheet->getCell('I' . $linha_actual)->getCalculatedValue();
                if($estadoCivil=='C'){
                    $estadoCivilId = 2;
                } elseif($estadoCivil=='D'){
                    $estadoCivilId = 4;
                } elseif($estadoCivil=='S'){
                    $estadoCivilId = 1;
                } elseif($estadoCivil=='V'){
                    $estadoCivilId = 6;
                }

                $provinciaNascimento = $worksheet->getCell('K' . $linha_actual)->getCalculatedValue();
                $provincia = $this->Aluno->Entidade->ProvinciaNascimento->findByCodigoAdmissao($provinciaNascimento);
                if($provincia){
                    $provinciaNascimentoId = $provincia['ProvinciaNascimento']['id'];
                }
                $provinciaResidencia = $worksheet->getCell('L' . $linha_actual)->getCalculatedValue();
                $provincia = $this->Aluno->Entidade->ProvinciaNascimento->findByCodigoAdmissao($provinciaResidencia);
                if($provincia){
                    $provinciaResidenciaId = $provincia['ProvinciaNascimento']['id'];
                }
                $provinciaCandidatura = $worksheet->getCell('M' . $linha_actual)->getCalculatedValue();
                $provincia = $this->Aluno->Entidade->ProvinciaNascimento->findByCodigoAdmissao($provinciaCandidatura);
                if($provincia){
                    $provinciaCandidaturaId = $provincia['ProvinciaNascimento']['id'];
                }
                $escolaNivelMedio = $worksheet->getCell('N' . $linha_actual)->getCalculatedValue();
                $anoConclusao = $worksheet->getCell('P' . $linha_actual)->getCalculatedValue();
                $escolaN = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->findByCodigoAdmissao($escolaNivelMedio);
                if($escolaN){
                    $escolaNivelMedioId = $escolaN['EscolaNivelMedio']['id'];
                }
                $email = $worksheet->getCell('V' . $linha_actual)->getCalculatedValue();
                $telemovel = $worksheet->getCell('X' . $linha_actual)->getCalculatedValue().$worksheet->getCell('W' .$linha_actual)->getCalculatedValue();;
                $nacionalidade = 152;


                $candidatoExiste = $this->Candidatura->findByNumeroCandidato($numero_candidato);
                if($candidatoExiste){
                    $this->out('Existente');
                    $this->Candidatura->id = $candidatoExiste['Candidatura']['id'];
                } else{
                    $this->Candidatura->create();
                    $this->Candidatura->set('numero_candidato', $numero_candidato);
                }
                $this->Candidatura->set('apelido', $apelido);
                $this->Candidatura->set('nomes', $nomes);
                $this->Candidatura->set('name', $nomes.' '.$apelido);
                $this->Candidatura->set('documento_identificacao_id',$tipoDocumento);
                $this->Candidatura->set('documento_identificacao_numero', $numeroDocumento);
                $this->Candidatura->set('data_nascimento',$dataNascimento);
                $this->Candidatura->set('estado_civil_id', $estadoCivilId);
                $this->Candidatura->set('genero_id', $genero);
                $this->Candidatura->set('provincia_nascimento', $provinciaNascimentoId);
                $this->Candidatura->set('provincia_candidatura', $provinciaCandidaturaId);
                $this->Candidatura->set('provincia_residencia', $provinciaResidenciaId);
                $this->Candidatura->set('escola_nivel_medio_id', $escolaNivelMedioId);
                $this->Candidatura->set('ano_conclusao', $anoConclusao);
                $this->Candidatura->set('email', $email);
                $this->Candidatura->set('telemovel', $telemovel);
                $this->Candidatura->set('nacionalidade', $nacionalidade);
                $this->Candidatura->set('pais_nascimento', $nacionalidade);
                $this->Candidatura->save();
                $this->out($linha_actual. '----------------Candidato Criado---------------'.$this->Candidatura->id);
                $linha_actual++;
            }
        }

        /**
         * Importa candidatos do excel
         * @todo Verificar esta funcao. Nao eh consistente
         * @throws CakeException
         */
        public function importa_candidatos_preregisto() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'candidatos.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $array_candidato = array(
                    'Candidatura' => array(
                        'numero_candidato' => $worksheet->getCell('A' . $linha_actual)->getCalculatedValue(),
                        'nomes'            => ucwords(strtolower($worksheet->getCell('B' . $linha_actual)->getValue())),
                        //   'apelido' => $worksheet->getCell('C' . $linha_actual)->getValue(),
//   'nome_curso' => $worksheet->getCell('D' . $linha_actual)->getValue()
                    )
                );

                $sexo = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
                if ($sexo == 'M') {
                    $array_candidato['Candidatura']['genero_id'] = 1;
                } elseif ($sexo == 'F') {
                    $array_candidato['Candidatura']['genero_id'] = 2;
                }

                $estado_civil = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                if ($estado_civil == 'S') {
                    $array_candidato['Candidatura']['estado_civil'] = 1;
                } elseif ($estado_civil == 'C') {
                    $array_candidato['Candidatura']['estado_civil'] = 2;
                } elseif ($estado_civil == 'D') {
                    $array_candidato['Candidatura']['estado_civil'] = 4;
                } elseif ($estado_civil == 'V') {
                    $array_candidato['Candidatura']['estado_civil'] = 6;
                }

                $pais_nome = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();

                $paisNascimento = $this->Aluno->Entidade->PaisNascimento->findByName($pais_nome);
                if ($paisNascimento) {

                    $array_candidato['Candidatura']['pais_nascimento'] = $paisNascimento['PaisNascimento']['id'];
                    $this->Aluno->Entidade->PaisNascimento->id         = $paisNascimento['PaisNascimento']['id'];
                    $this->Aluno->Entidade->PaisNascimento->set('codigo_admissao', $worksheet->getCell('F' . $linha_actual)->getCalculatedValue());
                } else {
                    debug('pais');
                    die(debug($pais_nome));
                }

                $provincia_nome = $worksheet->getCell('I' . $linha_actual)->getCalculatedValue();

                $provinciaNascimento = $this->Aluno->Entidade->ProvinciaNascimento->findByName($provincia_nome);
                if ($provinciaNascimento) {
                    $array_candidato['Candidatura']['provincia_nascimento'] = $provinciaNascimento['ProvinciaNascimento']['id'];
                    $this->Aluno->Entidade->ProvinciaNascimento->id         = $provinciaNascimento['ProvinciaNascimento']['id'];
                    $this->Aluno->Entidade->ProvinciaNascimento->set('codigo_admissao', $worksheet->getCell('H' . $linha_actual)->getCalculatedValue());
                } else {
                    debug('provincia');
                    die(debug($provincia_nome));
                }

                $array_candidato['Candidatura']['curso_opcao1']                   = $worksheet->getCell('L' . $linha_actual)->getCalculatedValue();
                $array_candidato['Candidatura']['curso_opcao2']                   = $worksheet->getCell('M' . $linha_actual)->getCalculatedValue();
                $array_candidato['Candidatura']['codigo_escola_admissao']         = $worksheet->getCell('N' . $linha_actual)->getCalculatedValue();
                $array_candidato['Candidatura']['ano_conclusao']                  = $worksheet->getCell('O' . $linha_actual)->getCalculatedValue();
                $array_candidato['Candidatura']['documento_identificacao_numero'] = $worksheet->getCell('P' . $linha_actual)->getCalculatedValue();
                $array_candidato['Candidatura']['estado_candidatura_id']          = 1;

                $documento_nome                                               = $worksheet->getCell('Q' . $linha_actual)->getCalculatedValue();
                $documentoIdentificao                                         = $this->Aluno->Entidade->DocumentoIdentificacao->findByName($documento_nome);
                $array_candidato['Candidatura']['documento_identificacao_id'] = $documentoIdentificao['DocumentoIdentificacao']['id'];


                $existentes       = array();
                $candidato_existe = $this->Candidatura->findByNumeroCandidato($array_candidato['Candidatura']['numero_candidato']);

                if (!empty($candidato_existe)) {
                    $existentes[] = $array_candidato['Candidatura']['numero_candidato'];
                    $this->out($array_candidato);
                } else {
                    $this->Candidatura->create();
                    $this->Candidatura->save($array_candidato);
                    $this->out($linha_actual . '-----------------------------------------------------------' . $this->Candidatura->id);
                }
//$this->Candidatura->create();
//$this->Candidatura->save($array_candidato);
//debug($this->Candidatura->id);

                $linha_actual++;
            }
            $this->out($existentes);
        }

        public function importa_dados_unizambeze() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'uz_contabilidade.xlsx');

            $worksheet = $xls->getActiveSheet();
        }

        public function importa_parentes() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'Admitidos'.DS.'2015'.DS. 'Agregado_familiar.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }
                $numero_candidato = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
                $candidato        = $this->Candidatura->findByNumeroCandidato($numero_candidato);

                if ($candidato) {
                    $this->Candidatura->id = $candidato['Candidatura']['id'];

                    $this->Candidatura->set('nome_pai', ucwords(strtolower($worksheet->getCell('F' . $linha_actual)
                        ->getCalculatedValue())));
                    $this->Candidatura->set('nome_mae', ucwords(strtolower($worksheet->getCell('G' . $linha_actual)
                        ->getCalculatedValue())));
                    $cidadeNascimento = $worksheet->getCell('K' . $linha_actual)->getCalculatedValue();
                    $cidade = $this->Aluno->Entidade->CidadeNascimento->findByCodigoAdmissao($cidadeNascimento);
                    if($cidade){
                        $cidadeNascimentoId  = $cidade['CidadeNascimento']['id'];
                    }
                    $this->Candidatura->set('cidade_nascimento',$cidadeNascimentoId );

                    $cidadeMorada = $worksheet->getCell('M' . $linha_actual)->getCalculatedValue();
                    $cidade = $this->Aluno->Entidade->CidadeNascimento->findByCodigoAdmissao($cidadeMorada);
                    if($cidade){
                        $cidadeMoradaId  = $cidade['CidadeNascimento']['id'];
                    }
                    $this->Candidatura->set('cidade_morada',$cidadeMoradaId );

                    $this->Candidatura->save();
                    $this->out($linha_actual . '--------------------------------' . $this->Candidatura->id);
                }

                $linha_actual++;
            }
        }

        public function importa_nuit() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'Admitidos'.DS.'2015'.DS. 'nuit.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 1;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('B' . $linha_actual)->getValue() == '') {
                    break;
                }

                $numero_candidato = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                $candidato        = $this->Candidatura->findByNumeroCandidato($numero_candidato);

                if ($candidato) {
                    $this->Candidatura->id = $candidato['Candidatura']['id'];

                    $nuit = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                    $this->Candidatura->set('cidade_nascimento',$nuit );

                    $this->Candidatura->save();
                    $this->out($linha_actual . '--------------------------------' . $this->Candidatura->id);
                } else {

                }

                $linha_actual++;
            }
        }


        public function importa_plano_estudo_excel() {
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'plano_estudos_unizambeze.xlsx');

            $worksheet = $xls->getActiveSheet();

            $worksheets = $xls->getAllSheets();
            foreach ($worksheets as $ws) {
//Cria o Plano de estudos
                $curso_nome          = $ws->getTitle();
                $array_plano_estudos = array(
                    'name'         => $curso_nome,
                    'duracao'      => 5,
                    'semestresano' => 2
                );
                $this->Curso->create();
                $this->Curso->save($array_plano_estudos);
                $array_plano_estudos['curso_id'] = $this->Curso->id;
                $this->PlanoEstudo->create();
                $this->PlanoEstudo->save($array_plano_estudos);

                $ultima_linha = false;
                $linha_actual = 2;
                $ciclo        = 1;
                while (!$ultima_linha) {
                    $verificador = $ws->getCellByColumnAndRow(2, $linha_actual)->getCalculatedValue();

                    if (is_numeric($verificador)) {
                        $array_disciplina  = array(
                            'codigo' => $ws->getCellByColumnAndRow(0, $linha_actual)->getCalculatedValue(),
                            'name'   => $ws->getCellByColumnAndRow(1, $linha_actual)->getCalculatedValue()
                        );
                        $disciplina_existe = $this->Disciplina->findByCodigo($array_disciplina['codigo']);
                        if (empty($disciplina_existe)) {
                            $disciplina_existe = $this->Disciplina->findByName($array_disciplina['name']);
                            if (empty($disciplina_existe)) {
                                $this->Disciplina->create();
                                $this->Disciplina->save(array('Disciplina' => $array_disciplina));
                                $disciplina_existe = $this->Disciplina->findByCodigo($array_disciplina['codigo']);
                            }
                        }
                        $array_plano_estudo_anos = array(
                            'DisciplinaPlanoEstudo' => array(
                                'plano_estudo_id'      => $this->PlanoEstudo->id,
                                'disciplina_id'        => $disciplina_existe['Disciplina']['id'],
                                'semestre_sequencial'  => $ws->getCellByColumnAndRow(2, $linha_actual)->getCalculatedValue(),
                                'carga_total'          => $ws->getCellByColumnAndRow(3, $linha_actual)->getCalculatedValue(),
                                'cargahorariateoricas' => $ws->getCellByColumnAndRow(4, $linha_actual)->getCalculatedValue(),
                                'cargahorariapraticas' => $ws->getCellByColumnAndRow(5, $linha_actual)->getCalculatedValue(),
                                'creditos'             => $ws->getCellByColumnAndRow(6, $linha_actual)->getCalculatedValue(),
                            )
                        );
                        if ($array_plano_estudo_anos['DisciplinaPlanoEstudo']['semestre_sequencial'] % 2 == 0) {
                            $array_plano_estudo_anos['DisciplinaPlanoEstudo']['ano']      = $array_plano_estudo_anos['DisciplinaPlanoEstudo']['semestre_sequencial'] / 2;
                            $array_plano_estudo_anos['DisciplinaPlanoEstudo']['semestre'] = 2;
                        } else {
                            $array_plano_estudo_anos['DisciplinaPlanoEstudo']['ano']      = ($array_plano_estudo_anos['DisciplinaPlanoEstudo']['semestre_sequencial'] + 1) / 2;
                            $array_plano_estudo_anos['DisciplinaPlanoEstudo']['semestre'] = 1;
                        }

                        $this->DisciplinaPlanoEstudo->create();
                        $this->DisciplinaPlanoEstudo->save($array_plano_estudo_anos);

                        $codigo_precedencia = $ws->getCellByColumnAndRow(7, $linha_actual)->getCalculatedValue();
                        if ($codigo_precedencia != null) {
                            $disciplina_precendencia = $this->Disciplina->findByCodigo($codigo_precedencia);
                            $array_precedencia       = array(
                                'Precedencia' => array(
                                    'planoestudoano_id'  => $this->DisciplinaPlanoEstudo->id,
                                    'precedencia'        => $disciplina_precendencia['Disciplina']['id'],
                                    'tipoprecedencia_id' => 1
                                )
                            );
                            $this->Precedencia->create();
                            $this->Precedencia->save($array_precedencia);
                        }
                        $linha_actual++;
                    } else {
                        if ($verificador == 'Semestre' || $verificador == null) {

                        } else {
                            debug($verificador);
                        }

                        $linha_actual++;
                    }

                    if ($linha_actual == 100) {
                        $ultima_linha = true;
                    }
                }
            }
        }

        public function main() {
            $this->out('Hello world.');
        }

        public function organiza_curso_candidato() {
            $candidatos = $this->Candidatura->find('all', array('conditions' => array('estado_candidatura_id' => 2, 'curso_id' => null)));
            foreach ($candidatos as $candidato) {

                $nao_mudados    = array();
                $curso_admissao = $candidato['Candidatura']['codigo_curso_admitido_admissao'];
                $this->Curso->contain('UnidadeOrganica');
                $curso = $this->Curso->findByCodigoAdmissao($curso_admissao);
                if (!empty($curso)) {
                    $this->Candidatura->id = $candidato['Candidatura']['id'];
                    $this->Candidatura->set('curso_id', $curso['Curso']['id']);
                    $this->Candidatura->set('nome_curso', $curso['Curso']['name']);

                    $unidade_organica = $curso['UnidadeOrganica'];
                    $faculdade        = $unidade_organica;
                    if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                        $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                        $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                    }

                    $this->Candidatura->set('nome_faculdade', $faculdade['name']);
                    $this->Candidatura->save();
                    $this->out($this->Candidatura->id);
                } else {
                    switch ($curso_admissao) {
                        case 1015:
                            $curso_id = 3601;
                            break;
                        case 1017:
                            $curso_id = 3601;
                            break;
                        case 1016:
                            $curso_id = 3612;
                            break;
                        case 1018:
                            $curso_id = 3612;
                            break;
                        case 1042:
                            $curso_id = 5022;
                            break;
                        case 1133:
                            $curso_id = 5022;
                            break;
                        case 1045:
                            $curso_id = 5024;
                            break;
                        case 1134:
                            $curso_id = 5024;
                            break;
                        case 1114:
                            $curso_id = 4014;
                            break;
                        case 1115:
                            $curso_id = 4014;
                            break;
                        case 1123:
                            $curso_id = 4014;
                            break;
                        case 1120:
                            $curso_id = 4017;
                            break;
                        case 1121:
                            $curso_id = 4017;
                            break;
                        case 1122:
                            $curso_id = 4017;
                            break;
                        case 1097:
                            $curso_id = 2008;
                            break;
                        case 1098:
                            $curso_id = 2008;
                            break;
                        case 1099:
                            $curso_id = 2008;
                            break;
                        case 1067:
                            $curso_id = 1067;
                            break;
                        case 1068:
                            $curso_id = 1067;
                            break;
                        case 1069:
                            $curso_id = 1067;
                            break;
                        case 1091:
                            $curso_id = 1114;
                            break;
                        case 1093:
                            $curso_id = 1114;
                            break;
                        case 1103:
                            $curso_id = 5343;
                            break;
                        case 1104:
                            $curso_id = 5343;
                            break;
                        case 1118:
                            $curso_id = 6615;
                            break;
                        case 1119:
                            $curso_id = 6615;
                            break;
                        case 1125:
                            $curso_id = 6616;
                            break;
                        case 1126:
                            $curso_id = 6616;
                            break;
                        case 1046:
                            $curso_id = 6004;
                            break;
                        case 1047:
                            $curso_id = 6004;
                            break;
                    }
                    $this->Curso->contain('UnidadeOrganica');
                    $curso = $this->Curso->findByCodigo($curso_id);
                    if (!empty($curso)) {
                        $this->Candidatura->id = $candidato['Candidatura']['id'];
                        $this->Candidatura->set('curso_id', $curso['Curso']['id']);
                        $this->Candidatura->set('nome_curso', $curso['Curso']['name']);

                        $unidade_organica = $curso['UnidadeOrganica'];
                        $faculdade        = $unidade_organica;
                        if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                            $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                            $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                        }

                        $this->Candidatura->set('nome_faculdade', $faculdade['name']);
                        $this->Candidatura->save();
                        $this->out($this->Candidatura->id);
                    } else {

                        $nao_mudados[] = $curso_admissao;
                    }
                }
            }
            $this->out($nao_mudados);
        }

        public function organiza_curso_codigo() {
            $candidatos = $this->Candidatura->find('all', array('conditions' => array('estado_candidatura_id' => 2, 'codigo_curso_admitido_admissao' => array(1040, 1096, 1027, 1028, 1029, 1030, 1052, 1041, 1056))));
            debug(count($candidatos));

            foreach ($candidatos as $candidato) {
                $curso_admissao = $candidato['Candidatura']['codigo_curso_admitido_admissao'];
                $this->Curso->contain('UnidadeOrganica');
                $curso = $this->Curso->findByCodigoAdmissao($curso_admissao);
                if (!empty($curso)) {
                    $this->Candidatura->id = $candidato['Candidatura']['id'];
                    $this->Candidatura->set('curso_id', $curso['Curso']['id']);
                    $this->Candidatura->set('nome_curso', $curso['Curso']['name']);

                    $unidade_organica = $curso['UnidadeOrganica'];
                    $faculdade        = $unidade_organica;
                    if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                        $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                        $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                    }

                    $this->Candidatura->set('nome_faculdade', $faculdade['name']);
                    $this->Candidatura->save();
                    $this->out($this->Candidatura->id);
                }
            }
        }

        public function print_lista_estudantes_email() {


            $this->Curso->contain('UnidadeOrganica');
            $cursos = $this->Curso->find('all');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));

            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');


            $i = 0;
            foreach ($cursos as $curso) {

                $xls       = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'print_lista_estudantes_curso_email.xlsx');
                $worksheet = $xls->getActiveSheet();

                $xls->getActiveSheet()->setCellValue('A1', Configure::read('OpenSGA.instituicao.nome'));
                $xls->getActiveSheet()->setCellValue('A2', $curso['UnidadeOrganica']['name']);
                $xls->getActiveSheet()->setCellValue('A3', $curso['Curso']['name']);
                $xls->getActiveSheet()->setCellValue('A4', 'Ano Lectivo de 2013');
                $xls->getActiveSheet()->setCellValue('A6', "EMAIL INSTITUCIONAL");

                $this->Aluno->contain(array('Entidade' => array('User')));
                $alunos       = $this->Aluno->find('all', array('conditions' => array('Aluno.curso_id' => $curso['Curso']['id']), 'order' => array('Entidade.apelido', 'Entidade.nomes')));
                $linha_actual = 10;
                $ii           = 1;
                foreach ($alunos as $aluno) {
                    $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $ii++);
                    $xls->getActiveSheet()->setCellValue('B' . $linha_actual, $aluno['Aluno']['codigo']);
                    $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $aluno['Entidade']['apelido']);
                    $xls->getActiveSheet()->setCellValue('D' . $linha_actual, $aluno['Entidade']['nomes']);
                    $xls->getActiveSheet()->setCellValue('E' . $linha_actual, $aluno['Entidade']['User']['username']);
                    $this->out('Aluno Adicionado------------------' . $i++);
                    $linha_actual++;
                }


                $objDrawing = new PHPExcel_Worksheet_Drawing();
                $objDrawing->setName("OpenSGA");
                $objDrawing->setDescription("");
                $objDrawing->setPath(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png');
                $objDrawing->setCoordinates('A2');
                $objDrawing->setResizeProportional(true);
                $objDrawing->setWidthAndHeight(108, 115);
                $objDrawing->setOffsetX(10);
                $objDrawing->setRotation(0);
                $objDrawing->getShadow()->setVisible(true);
                $objDrawing->getShadow()->setDirection(45);

                $objDrawing->setWorksheet($xls->getActiveSheet());

//$phpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Lista de Estudantes');
                $xls->getProperties()->setCreator("SIGA");
                $xls->getProperties()->setLastModifiedBy("SIGA");
                $xls->getProperties()->setTitle("Lista de Emails Institucionais");
                $xls->getProperties()->setSubject("");
                $xls->getProperties()->setDescription("Lista de Emails Institucionais");
                $xls->getProperties()->setKeywords("OpenSGA,SIGA");
                $xls->getProperties()->setCategory("Relatorio");
                $xls->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&D &T &C' . $xls->getProperties()->getTitle() . ' - Page &P of &N &R' . " [Gerado por siga.uem.mz]");
                $xls->getActiveSheet()->setShowGridlines(false);


                $xls->getSecurity()->setLockWindows(true);
                $xls->getSecurity()->setLockStructure(true);
                $xls->getSecurity()->setWorkbookPassword("PHPExcel");


                $xls->getActiveSheet()->getProtection()->setPassword('PHPExcel');
                $xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
                $xls->getActiveSheet()->getProtection()->setSort(true);
                $xls->getActiveSheet()->getProtection()->setObjects(true);
                $xls->getActiveSheet()->getProtection()->setInsertRows(true);
                $xls->getActiveSheet()->getProtection()->setFormatCells(true);
                $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
                $filename  = $this->User->normalize_str($curso['Curso']['name']);
                $filename  = Inflector::slug($filename);

                $objWriter->save(APP . 'exports' . DS . $filename . '.xlsx');


// clear memory
                $xls->disconnectWorksheets();
            }
        }

        public function reorganiza_unidade_organicas() {
            $this->UnidadeOrganica->recover();
        }

        public function teste() {
            $this->out('Teste');
            App::uses();
            $this->log('Teste de Shell Efectuado com Sucesso');
        }

        function teste_email() {
            App::uses('CakeEmail', 'Network/Email');
            $email = new CakeEmail();
            $email->config('smtp')
                ->template('test_template', 'test_layout') //I'm assuming these were created
                ->emailFormat('html')
                ->to('elisio.leonardo@gmail.com')
                ->from(array('naoresponder@uem.ac.mz'))
                ->subject('just testing something')
                ->send();
        }

        public function verifica_admitidos_2014() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'admitidos.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linha_actual = 2;
            $total        = 0;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $nao_encontrados = array();

                $numero_candidato = $worksheet->getCell('A' . $linha_actual)->getValue();

                $candidato = $this->Candidatura->findByNumeroCandidato($numero_candidato);
                if ($candidato) {

                } else {
                    $array_candidato                                                  = array(
                        'Candidatura' => array(
                            'numero_candidato' => $numero_candidato,
                        )
                    );
                    $array_candidato['Candidatura']['numero_estudante']               = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
                    $nome_completo                                                    = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
                    $nome_explode                                                     = explode(" ", $nome_completo);
                    $array_candidato['Candidatura']['apelido']                        = ucwords(strtolower(end($nome_explode)));
                    $array_candidato['Candidatura']['nomes']                          = ucwords(strtolower($nome_completo));
                    $curso_admissao_admitido                                          = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
                    $array_candidato['Candidatura']['codigo_curso_admitido_admissao'] = $curso_admissao_admitido;
                    $this->Aluno->Curso->contain('UnidadeOrganica');
                    $curso = $this->Aluno->Curso->findByCodigoAdmissao($curso_admissao_admitido);

                    if ($curso) {

                        $array_candidato['Candidatura']['curso_id']              = $curso['Curso']['id'];
                        $array_candidato['Candidatura']['nome_curso']            = $curso['Curso']['name'];
                        $array_candidato['Candidatura']['estado_candidatura_id'] = 2;
                        $unidade_organica                                        = $curso['UnidadeOrganica'];
                        $faculdade                                               = $unidade_organica;
                        if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                            $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                            $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                        }
                        $array_candidato['Candidatura']['nome_faculdade']       = $faculdade['name'];
                        $array_candidato['Candidatura']['ano_lectivo_admissao'] = 2014;
                        $this->Candidatura->create();
                        $this->Candidatura->save($array_candidato);
                        $this->out($total++ . '--------------' . $linha_actual . '---------------------' . $numero_candidato);
                    } else {
                        switch ($curso_admissao_admitido) {
                            case 1015:
                                $curso_id = 3601;
                                break;
                            case 1017:
                                $curso_id = 3601;
                                break;
                            case 1016:
                                $curso_id = 3612;
                                break;
                            case 1018:
                                $curso_id = 3612;
                                break;
                            case 1042:
                                $curso_id = 5022;
                                break;
                            case 1133:
                                $curso_id = 5022;
                                break;
                            case 1045:
                                $curso_id = 5024;
                                break;
                            case 1134:
                                $curso_id = 5024;
                                break;
                            case 1114:
                                $curso_id = 4014;
                                break;
                            case 1115:
                                $curso_id = 4014;
                                break;
                            case 1123:
                                $curso_id = 4014;
                                break;
                            case 1120:
                                $curso_id = 4017;
                                break;
                            case 1121:
                                $curso_id = 4017;
                                break;
                            case 1122:
                                $curso_id = 4017;
                                break;
                            case 1097:
                                $curso_id = 2008;
                                break;
                            case 1098:
                                $curso_id = 2008;
                                break;
                            case 1099:
                                $curso_id = 2008;
                                break;
                            case 1067:
                                $curso_id = 1067;
                                break;
                            case 1068:
                                $curso_id = 1067;
                                break;
                            case 1069:
                                $curso_id = 1067;
                                break;
                            case 1091:
                                $curso_id = 1114;
                                break;
                            case 1093:
                                $curso_id = 1114;
                                break;
                            case 1103:
                                $curso_id = 5343;
                                break;
                            case 1104:
                                $curso_id = 5343;
                                break;
                            case 1118:
                                $curso_id = 6615;
                                break;
                            case 1119:
                                $curso_id = 6615;
                                break;
                            case 1125:
                                $curso_id = 6616;
                                break;
                            case 1126:
                                $curso_id = 6616;
                                break;
                            case 1046:
                                $curso_id = 6004;
                                break;
                            case 1047:
                                $curso_id = 6004;
                                break;
                        }
                        $this->Aluno->Curso->contain('UnidadeOrganica');
                        $curso = $this->Aluno->Curso->findByCodigo($curso_id);

                        if ($curso) {

                            $array_candidato['Candidatura']['curso_id']              = $curso['Curso']['id'];
                            $array_candidato['Candidatura']['nome_curso']            = $curso['Curso']['name'];
                            $array_candidato['Candidatura']['estado_candidatura_id'] = 2;
                            $unidade_organica                                        = $curso['UnidadeOrganica'];
                            $faculdade                                               = $unidade_organica;
                            if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                                $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                                $faculdade             = $unidade_organica_nova['UnidadeOrganica'];
                            }
                            $array_candidato['Candidatura']['nome_faculdade']       = $faculdade['name'];
                            $array_candidato['Candidatura']['ano_lectivo_admissao'] = 2014;
                            $this->Candidatura->create();
                            $this->Candidatura->save($array_candidato);
                            $this->out($total++ . '--------------' . $linha_actual . '---------------------' . $numero_candidato);
                            //debug($array_candidato);
                        }
                    }
                }
                $linha_actual++;
                //$this->out($nao_encontrados);
            }
        }

        public function verifica_ano_ingresso() {

        }

        public function verifica_historico_curso() {
            $this->Aluno->contain();
            $alunos = $this->Aluno->find('all');
            $zeros  = 0;
            foreach ($alunos as $aluno) {
                $this->HistoricoCurso->contain();
                $historicos = $this->HistoricoCurso->find('first', array('conditions' => array('aluno_id' => $aluno['Aluno']['id'])));
                $this->out($aluno['Aluno']['id']);

                if (empty($historicos)) {
                    $ano_lectivo     = $this->AnoLectivo->findByAno($aluno['Aluno']['ano_ingresso']);
                    $historico_array = array(
                        'aluno_id'             => $aluno['Aluno']['id'],
                        'curso_id'             => $aluno['Aluno']['curso_id'],
                        'ano_ingresso'         => $aluno['Aluno']['ano_ingresso'],
                        'ano_lectivo_ingresso' => $ano_lectivo['AnoLectivo']['id']
                    );
                    $this->HistoricoCurso->create();
                    $this->HistoricoCurso->save(array('HistoricoCurso' => $historico_array));
                }
            }
            $this->out("fim");
            $this->out($zeros);
        }


        public function ajusta_pagamento_matricula(){
            $pagamentos = $this->Aluno->FinanceiroPagamento->find('all');
            $encontrados = 0;
            foreach($pagamentos as $pagamento){
               $matricula  = $this->Aluno->Matricula->find('first',
                    array('Matricula.aluno_id'=>$pagamento['FinanceiroPagamento']['aluno_id'],
                          'Matricula.data'=>$pagamento['FinanceiroPagamento']['created'],
                        'Matricula.financeiro_pagamento_id is null'));
                if(!empty($matricula)){
                    $this->Aluno->Matricula->id = $matricula['Matricula']['id'];
                    $this->Matricula->set('financeiro_pagamento_id',$pagamento['FinanceiroPagamento']['id']);
                        $this->Matricula->save();
                }
            }
            debug($encontrados);
        }


        public function separa_apelido_candidatos(){
            $candidatos  = $this->Candidatura->find('all',array('conditions'=>array('ano_lectivo_admissao'=>2015)));
            $numero = count($candidatos);
            foreach($candidatos as $candidato){
                $nome = $candidato['Candidatura']['name'];
                $nome = trim($nome);
                $nomes = explode(' ', $nome);

                $this->Candidatura->id = $candidato['Candidatura']['id'];
                $this->Candidatura->set('nomes',$nomes[0]);
                $this->Candidatura->set('apelido',strtolower(end($nomes)));
                debug($nome);
                debug($nomes);
                $this->Candidatura->save();

                $this->out($numero--);



            }
        }


        public function importa_escola_nivel_medios() {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'Admitidos'.DS.'2015'.DS.
                'escola_nivel_medios.xlsx');

            $worksheet = $xls->getActiveSheet();

            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $arrayNovaEscola = [
                    'EscolaNivelMedio'=>[
                        'codigo_admissao'=>$worksheet->getCell('A' . $linha_actual)->getCalculatedValue(),
                        'name'=>$worksheet->getCell('B' . $linha_actual)->getCalculatedValue()
                    ]
                ];
                $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->create();
                $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->save($arrayNovaEscola);
                $this->out($arrayNovaEscola['EscolaNivelMedio']['name']);
                $linha_actual++;
            }
        }




        public function print_boletim_matriculas() {
            $this->Candidatura->contain('Curso');
            $cursos = $this->Candidatura->find('list', array('conditions' => array('estado_candidatura_id' => 2, 'ano_lectivo_admissao' => Configure::read('OpenSGA.ano_lectivo')), 'fields' => array('curso_id', 'Curso.name'), 'group' => 'curso_id', 'order' => 'Curso.name'));

            App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
            if (!class_exists('PHPExcel'))
                throw new CakeException('Vendor class PHPExcel not found!');
            $this->out('Comecando..................');


            $count_c = count($cursos);
            foreach ($cursos as $k => $v) {
                $candidatos = array();



                $this->out('Lendo o excel..............'.$v);
                $xls = PHPExcel_IOFactory::load(APP.'Reports'.DS.'print_boletim_matricula.xlsx');
                $this->Candidatura->contain(array(
                    'Genero','CidadeNascimento','ProvinciaNascimento','PaisNascimento','EscolaNivelMedio',
                    'EstadoCivil','DocumentoIdentificacao'
                ));
                $candidatos = $this->Candidatura->find('all',
                    array('conditions' => array(
                        'estado_candidatura_id' => 2,
                        'ano_lectivo_admissao' =>Configure::read('OpenSGA.ano_lectivo'),
                        'curso_id' => $k
                    ),
                          'order' => array('Candidatura.apelido', 'Candidatura.nomes')
                    ,
                    )
                );


                foreach($candidatos as $candidato){
                    $this->out('Candidato................ '.$candidato['Candidatura']['numero_estudante']);
                    $worksheet = clone $xls->getSheetByName("Sheet1");
                    $worksheet->setTitle($candidato['Candidatura']['numero_estudante']);
                    $newSheetIndex = 1;
                    $xls->addSheet($worksheet,$newSheetIndex);

                    //$xls->addImage(WWW_ROOT.'img'.DS.'logo_login_'.Configure::read('OpenSGA.instituicao.sigla').'
                    //.png','A1',10,210,135); //Logotipo
                    $worksheet->setCellValue('A1', Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao


                    //Faculdade
                    $worksheet->setCellValue('A3', $candidato['Candidatura']['nome_faculdade']); //Nome da Instituicao
                    //Curso
                    $worksheet->setCellValue('A4', $candidato['Candidatura']['nome_curso']); //Nome da Instituicao
                    //Ano Lectivo
                    $worksheet->setCellValue('B7', $candidato['Candidatura']['ano_lectivo_admissao']);
                    //Numero de estudante
                    $worksheet->setCellValue('F7', $candidato['Candidatura']['numero_estudante']);
                    //Apelido
                    $worksheet->setCellValue('C10', $candidato['Candidatura']['apelido']);
                    //Nomes
                    $worksheet->setCellValue('C11', $candidato['Candidatura']['nomes']);
                    //Data de Nascimento
                    $worksheet->setCellValue('C12', $candidato['Candidatura']['data_nascimento']);
                    //Pai
                    $worksheet->setCellValue('C13', $candidato['Candidatura']['nome_pai']);
                    //Mae
                    $worksheet->setCellValue('C14', $candidato['Candidatura']['nome_mae']);
                    //Natural de
                    $worksheet->setCellValue('C15', $candidato['CidadeNascimento']['name']);
                    //Nacionalidade
                    $worksheet->setCellValue('C16', $candidato['PaisNascimento']['name']);
                    //Documento Identificacao
                    $worksheet->setCellValue('D17', $candidato['DocumentoIdentificacao']['name']);
                    //Emitido Por
                    //$worksheet->setCellValue('C18', $aluno['Entidade']['EntidadeIdentificacao'][0]['local_emissao']);
                    //Numero Identificacao
                    $worksheet->setCellValue('H17', $candidato['Candidatura']['documento_identificacao_numero']);
                    //Data Emissao
                    //$worksheet->setCellValue('H18', $aluno['Entidade']['EntidadeIdentificacao'][0]['data_emissao']);
                    //Sexo
                    $worksheet->setCellValue('H15', $candidato['Genero']['name']);
                    //Estado Civil
                    $worksheet->setCellValue('H16', $candidato['EstadoCivil']['name']);
                    //Distrito
                    //$worksheet->setCellValue('C21', $contactos['distrito']);
                    //Rua
                    //$worksheet->setCellValue('C22', $contactos['rua']);
                    //Numero
                    //$worksheet->setCellValue('C23', $contactos['numero']);
                    //Quarteirao
                    //$worksheet->setCellValue('C24', $contactos['quarteirao']);
                    //Bairro
                    //$worksheet->setCellValue('H21', $contactos['bairro']);
                    //Celular
                    //$worksheet->setCellValue('H22', $contactos['telemovel']);
                    //Telefone Fixo
                    //$worksheet->setCellValue('H23', $contactos['telefone']);
                    //Telefone de Emergencia
                    $worksheet->setCellValue('H24', '+'.$candidato['Candidatura']['telemovel']);
                    $worksheet->getStyle('H24')
                        ->getNumberFormat()
                        ->setFormatCode(
                            PHPExcel_Style_NumberFormat::FORMAT_TEXT
                        );
                    //ANO DE Conclusao
                    $worksheet->setCellValue('E27', $candidato['Candidatura']['ano_conclusao']);
                    //Escola de Conclusao
                    $worksheet->setCellValue('C28', $candidato['EscolaNivelMedio']['name']);
                    //Provincia de Conclusao
                    //$worksheet->setCellValue('B29', $aluno['AlunoNivelMedio']['EscolaNivelMedio']['Provincia']['name']);
                    //Nota
                    $worksheet->setCellValue('I27', $candidato['Candidatura']['nota_conclusao']);
                    //Data Assinatura
                    $worksheet->setCellValue('A33', '');

                    //$xls->addWorksheetMeta($this->Session->read('Auth.User.name'),'Boletim de Matrícula');
                    $worksheet->setShowGridlines(false);


                    $xls->getSecurity()->setLockWindows(true);
                    $xls->getSecurity()->setLockStructure(true);
                    $xls->getSecurity()->setWorkbookPassword("PHPExcel");


                    $worksheet->getProtection()->setPassword('PHPExcel');
                    $worksheet->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
                    $worksheet->getProtection()->setSort(true);
                    $worksheet->getProtection()->setObjects(true);
                    $worksheet->getProtection()->setInsertRows(true);
                    $worksheet->getProtection()->setFormatCells(true);

                }
                $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

                $objWriter->save( Inflector::slug($v).'.xlsx');

                $xls->disconnectWorksheets();
                unset($xls);

            }





        }


    }
