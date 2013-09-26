<?php

ini_set('memory_limit', "3096M");
App::uses('AuditableConfig', 'Auditable.Lib');

class DbsecShell extends AppShell {

    public $uses = array('Tipoavaliacao', 'Curso', 'UnidadeOrganica', 'Disciplina', 'Planoestudo', 'Planoestudoano',  'Aluno', 'Turma', 'Anolectivo', 'Semestrelectivo', 'Turma', 'CursosTurno', 'Matricula', 'Inscricao', 'User', 'Entidade',);

    /**
     * @todo  Implementar se for necessario
     */
    public function importa_avaliacao_tipo() {

        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'avaliacao_tipo.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $ow) {
            $tipo_avaliacao = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
            if ($tipo_avaliacao instanceof PHPExcel_RichText) {
                $tipo_avaliacao = $tipo_avaliacao->getPlainText();
            }

            if ($tipo_avaliacao == '') {
                break;
            }
            //verificar se este tipo de avaliacao existe
            $tipo_avaliacao_existe = $this->Tipoavaliacao->findByName($tipo_avaliacao);
            if (empty($tipo_avaliacao_existe)) {
                $array_tipo_avaliacao = array('Tipoavaliacao' => array('name' => $tipo_avaliacao));
                $this->Tipoavaliacao->create();
                $this->Tipoavaliacao->save($array_tipo_avaliacao);
                $this->out('Tipo de Avalicao criada -->' . $tipo_avaliacao);
            } else {
                $this->out('Tipo de Avaliacao Existente--->' . $tipo_avaliacao);
            }

            $linha_actual++;
        }
    }

    public function verifica_cursos() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'curso.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $ow) {
            $curso_id = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            if ($curso_id instanceof PHPExcel_RichText) {
                $curso_id = $curso_id->getPlainText();
            }

            if ($curso_id == '') {
                break;
            }
            $curso_existe = $this->Curso->findByCodigo($curso_id);
            if (!empty($curso_existe)) {
                $this->out("Curso Existe-->" . $curso_id);
            } else {
                $fac_id = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();

                $faculdade = $this->UnidadeOrganica->find('first', array('conditions' => array('UnidadeOrganica.codigo' => $fac_id)));

                $curso_array = array(
                    'Curso' => array(
                        'name' => $worksheet->getCell('B' . $linha_actual)->getCalculatedValue(),
                        'grauacademico_id' => $worksheet->getCell('F' . $linha_actual)->getCalculatedValue(),
                        'tipocurso_id' => $worksheet->getCell('F' . $linha_actual)->getCalculatedValue(),
                        'unidade_organica_id' => $faculdade['UnidadeOrganica']['id'],
                        'codigo' => $curso_id
                    )
                );



                $this->Curso->create();
                $this->Curso->save($curso_array);
                $this->out('Curso Inserido--' . $this->Curso->id . '---' . $curso_array['Curso']['name']);
            }
            $linha_actual++;
        }
    }

    public function importa_disciplinas() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'dmi'.DS. 'disciplina.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $ow) {
            $codigo_disciplina = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            $nome_disciplina = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();

            if ($codigo_disciplina == '') {
                break;
            }
            $nome_existe = $this->Disciplina->findByName($nome_disciplina);
            {
                if (!empty($nome_existe)) {

                    $this->out("Ja existe Disciplina com Este nome");
                } else {
                    $codigo_existe = $this->Disciplina->findByCodigoAntigo($codigo_disciplina);
                    if (empty($codigo_existe)) {
                        $array_disciplina = array(
                            'Disciplina' => array(
                                'codigo' => $codigo_disciplina,
                                'name' => $nome_disciplina,
                                'codigo_antigo' => $codigo_disciplina
                            )
                        );
                        $this->Disciplina->create();
                        $this->Disciplina->save($array_disciplina);
                    } else {
                        $array_disciplina = array(
                            'Disciplina' => array(
                                'name' => $nome_disciplina,
                                'codigo_antigo' => $codigo_disciplina
                            )
                        );
                        $this->Disciplina->create();
                        $this->Disciplina->save($array_disciplina);
                        $this->Disciplina->set('codigo', $this->Disciplina->id);
                        $this->Disciplina->save();
                    }



                    $this->out("Disciplina Criada--" . $nome_disciplina);
                }
            }
            $this->out("------------------------------------------------------------------------".$linha_actual);
            $linha_actual++;
        }
    }

    public function importa_plano_estudo() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'dmi'.DS. 'disciplina_curso.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $ow) {
            $curso_codigo = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
            $curso = $this->Curso->findByCodigo($curso_codigo);
            if ($curso_codigo == '') {
                break;
            }
            $plano_estudo_existe = $this->Planoestudo->find('first', array('conditions' => array('curso_id' => $curso['Curso']['id'], 'ano_criacao' => $worksheet->getCell('J' . $linha_actual)->getCalculatedValue())));
            if (empty($plano_estudo_existe)) {
                $this->Planoestudo->create();
                $array_plano_estudo = array(
                    'Planoestudo' => array(
                        'name' => $curso['Curso']['name'] . " - " . $worksheet->getCell('J' . $linha_actual)->getCalculatedValue(),
                        'curso_id' => $curso['Curso']['id'],
                        'ano_criacao' => $worksheet->getCell('J' . $linha_actual)->getCalculatedValue(),
                        'codigo' => $curso['Curso']['codigo'] . "-" . $worksheet->getCell('J' . $linha_actual)->getCalculatedValue()
                    )
                );
                $this->Planoestudo->save($array_plano_estudo);
                $plano_estudo_id = $this->Planoestudo->id;
            } else {
                $plano_estudo_id = $plano_estudo_existe['Planoestudo']['id'];
            }

            $codigo_disciplina = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            $xls2 = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'dmi'.DS. 'disciplina.xlsx');
            $worksheet2 = $xls2->getActiveSheet();
            $linha_actual2 = 2;
            while (true) {
                $codigo2 = $worksheet2->getCell('A' . $linha_actual2)->getCalculatedValue();
                $this->out($codigo2);
                if ($codigo2 == $codigo_disciplina) {
                    $nome_disciplina = $worksheet2->getCell('B' . $linha_actual2)->getCalculatedValue();
                    break;
                }
                if ($codigo2 == '') {
                    break;
                }
                $linha_actual2++;
            }

            $disciplina = $this->Disciplina->findByName($nome_disciplina);

            if (empty($disciplina)) {
                die($nome_disciplina);
            }


            if ($worksheet->getCell('G' . $linha_actual)->getCalculatedValue() == 1) {
                $semestre_sequencial = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue() * ($worksheet->getCell('G' . $linha_actual)->getCalculatedValue() + 1) - 1;
            }
            if ($worksheet->getCell('G' . $linha_actual)->getCalculatedValue() == 2) {
                $semestre_sequencial = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue() * $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
            }
            $array_plano_ano = array(
                'Planoestudoano' => array(
                    'planoestudo_id' => $plano_estudo_id,
                    'ano' => $worksheet->getCell('D' . $linha_actual)->getCalculatedValue(),
                    'semestre' => $worksheet->getCell('G' . $linha_actual)->getCalculatedValue(),
                    'carga_total' => $worksheet->getCell('E' . $linha_actual)->getCalculatedValue(),
                    'creditos' => $worksheet->getCell('F' . $linha_actual)->getCalculatedValue(),
                    'disciplina_id' => $disciplina['Disciplina']['id'],
                    'codigo' => $disciplina['Disciplina']['codigo'] . "-" . $curso['Curso']['codigo'] . "-" . $worksheet->getCell('J' . $linha_actual)->getCalculatedValue(),
                    'ramo_id' => $worksheet->getCell('L' . $linha_actual)->getCalculatedValue(),
                    'semestre_sequencial' => $semestre_sequencial
                )
            );
            $plano_ano_existe = $this->Planoestudoano->find('first', array('conditions' => array('planoestudo_id' => $plano_estudo_id, 'disciplina_id' => $disciplina['Disciplina']['id'], 'ramo_id' => $worksheet->getCell('L' . $linha_actual)->getCalculatedValue(), 'ano' => $worksheet->getCell('D' . $linha_actual)->getCalculatedValue(), 'semestre' => $worksheet->getCell('G' . $linha_actual)->getCalculatedValue(),)));
            if (empty($plano_ano_existe)) {
                $this->Planoestudoano->create();
                $this->Planoestudoano->save($array_plano_ano);
                $this->out('Plano Ano Criado');
            } else {
                $this->out("Plano existia-------------------------------------");
                debug($plano_ano_existe);
                //die(debug($array_plano_ano));
            }
            $linha_actual++;
        }
    }

    public function verifica_estudantes() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'estudante.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        $existem = 0;
        $nao_existem = 0;
        foreach ($worksheet->getRowIterator() as $ow) {
            $this->Aluno->recursive = -1;
            $codigo = trim($worksheet->getCell('A' . $linha_actual)->getCalculatedValue());
            if ($codigo == '') {
                break;
            }

            $estudante_sga = $this->Aluno->findByCodigo($codigo);

            //debug($estudante_sga);
            if (empty($estudante_sga)) {
                $nao_existem++;
                $this->out($codigo);
            } else {
                $curriculum = trim($worksheet->getCell('R' . $linha_actual)->getCalculatedValue());
                $this->Planoestudo->contain();
                $plano_estudo = $this->Planoestudo->find('first', array('conditions' => array('curso_id' => $estudante_sga['Aluno']['curso_id'], 'ano_criacao' => $curriculum)));
                $this->Aluno->id = $estudante_sga['Aluno']['id'];
                $this->Aluno->set('planoestudo_id', $plano_estudo['Planoestudo']['id']);
                $this->Aluno->save();

                $matriculas = $this->Matricula->find('all', array('conditions' => array('aluno_id' => $estudante_sga['Aluno']['id'])));
                foreach ($matriculas as $matricula) {
                    $this->Matricula->id = $matricula['Matricula']['id'];
                    if ($matricula['Matricula']['planoestudo_id'] == '') {
                        $this->Matricula->set('planoestudo_id', $plano_estudo['Planoestudo']['id']);
                        $this->Matricula->save();
                        $this->out('Matricula Actualizada---' . $matricula['Matricula']['id']);
                    }
                }

                $existem++;
            }
            $linha_actual++;
            $this->out($linha_actual);
        }
        $this->out("Existem" . $existem);
        $this->out("Nao existem" . $nao_existem);
    }

    public function importa_leccionamento() {
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'dmi'.DS. 'leccionamento.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        $xls2 = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'dmi'.DS. 'disciplina.xlsx');
        $worksheet2 = $xls2->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $row) {
            $this->Planoestudo->recursive = -1;
            $this->Curso->recursive = -1;
            $disciplina_db = trim($worksheet->getCell('A' . $linha_actual)->getCalculatedValue());
            $curso_db = trim($worksheet->getCell('F' . $linha_actual)->getCalculatedValue());
            if ($curso_db == '') {
                break;
            }

            $curso = $this->Curso->findByCodigo($curso_db);
            $plano_estudo = $this->Planoestudo->find('first', array('conditions' => array('curso_id' => $curso['Curso']['id'], 'ano_criacao' => trim($worksheet->getCell('G' . $linha_actual)->getCalculatedValue()))));
            $this->Anolectivo->recursive = -1;
            $anolectivo = $this->Anolectivo->findByAno(trim($worksheet->getCell('B' . $linha_actual)->getCalculatedValue()));
            $this->Disciplina->recursive = -1;
           


            $codigo_disciplina = $disciplina_db;
            
            $linha_actual2 = 2;
            while (true) {
                $codigo2 = $worksheet2->getCell('A' . $linha_actual2)->getCalculatedValue();
                
                if ($codigo2 == $codigo_disciplina) {
                    $nome_disciplina = $worksheet2->getCell('B' . $linha_actual2)->getCalculatedValue();
                    break;
                }
                if ($codigo2 == '') {
                    break;
                }
                $linha_actual2++;
            }

            $disciplina = $this->Disciplina->findByName($nome_disciplina);

            if (empty($disciplina)) {
                die($nome_disciplina);
            }
            if (!empty($disciplina)) {
                $semestre_lectivo = $this->Semestrelectivo->find('first', array('conditions' => array('anolectivo_id' => $anolectivo['Anolectivo']['id'], 'semestre' => trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue()))));
                if (empty($semestre_lectivo)) {
                    $array_semestre = array(
                        'Semestrelectivo' => array(
                            'codigo' => $anolectivo['Anolectivo']['ano'] . "-" . trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue()),
                            'anolectivo_id' => $anolectivo['Anolectivo']['id'],
                            'semestre' => trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue()),
                            'semestre_id' => trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue()),
                        )
                    );
                    $this->Semestrelectivo->create();
                    $this->Semestrelectivo->save($array_semestre);
                    $semestre_lectivo = $this->Semestrelectivo->find('first', array('conditions' => array('anolectivo_id' => $anolectivo['Anolectivo']['id'], 'semestre' => trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue()))));
                }

                $array_turma = array(
                    'Turma' => array(
                        'anolectivo_id' => $anolectivo['Anolectivo']['id'],
                        'planoestudo_id' => $plano_estudo['Planoestudo']['id'],
                        'disciplina_id' => $disciplina['Disciplina']['id'],
                        'curso_id' => $plano_estudo['Planoestudo']['curso_id'],
                        'estadoturma_id' => 1,
                        'codigo' => trim($worksheet->getCell('M' . $linha_actual)->getCalculatedValue()),
                        'anocurricular' => trim($worksheet->getCell('N' . $linha_actual)->getCalculatedValue()),
                        'semestrecurricular' => trim($worksheet->getCell('C' . $linha_actual)->getCalculatedValue()),
                        'name' => $disciplina['Disciplina']['name'] . " - " . trim($worksheet->getCell('B' . $linha_actual)->getCalculatedValue()) . " - " . $plano_estudo['Planoestudo']['name'],
                        'semestrelectivo_id' => $semestre_lectivo['Semestrelectivo']['id'],
                        'unidade_organica_id' => $curso['Curso']['unidade_organica_id']
                    )
                );
                
                //Verificar se turma existe antes de criar
                $this->Turma->recursive =-1;
                $turma_existe = $this->Turma->find('first',array('conditions'=>$array_turma['Turma']));
                
                if(empty($turma_existe)){
                    $this->Turma->create();
                $this->Turma->save($array_turma);
                $this->out("Turma Criada--" . $array_turma['Turma']['name'] . " ------ -----  " . $this->Turma->id);
                } else{
                    $this->out("Turma existia");
                }
                

                
            }
            $this->out("------------------------------------------------------------------------".$linha_actual);
            $linha_actual++;
        }
    }

    public function actualiza_semestres() {
        $anolectivos = $this->Anolectivo->find('all');
        foreach ($anolectivos as $anolectivo) {
            $semestre_lectivo = $this->Semestrelectivo->find('first', array('conditions' => array('anolectivo_id' => $anolectivo['Anolectivo']['id'])));
            if (empty($semestre_lectivo)) {
                $array_semestre = array(
                    array(
                        'Semestrelectivo' => array(
                            'codigo' => $anolectivo['Anolectivo']['ano'] . "-1",
                            'anolectivo_id' => $anolectivo['Anolectivo']['id'],
                            'semestre' => 1,
                            'semestre_id' => 1,
                        )
                    ),
                    array(
                        'Semestrelectivo' => array(
                            'codigo' => $anolectivo['Anolectivo']['ano'] . "-1",
                            'anolectivo_id' => $anolectivo['Anolectivo']['id'],
                            'semestre' => 2,
                            'semestre_id' => 2,
                        )
                    )
                );
                $this->Semestrelectivo->create();
                $this->Semestrelectivo->saveAll($array_semestre);
                $this->out($anolectivo['Anolectivo']['id']);
            }
        }
    }

    Public function actualiza_turnos() {
        $cursos = $this->DraCurso->find('all');
        foreach ($cursos as $curso) {
            $curso_sga = $this->Curso->findByCodigo($curso['DraCurso']['curso_id']);
            $array_curso_turno = array(
                'CursosTurno' => array(
                    'curso_id' => $curso_sga['Curso']['id'],
                    'turno_id' => $curso['DraCurso']['regime']
                )
            );
            $this->CursosTurno->create();
            $this->CursosTurno->save($array_curso_turno);
        }
    }

    public function actualiza_turnos_dbsec() {
        $cursos = $this->DbsecCurso->find('all');
        foreach ($cursos as $curso) {
            $curso_sga = $this->Curso->findByCodigo($curso['DbsecCurso']['curso_id']);
            $curso_turno_existe = $this->CursosTurno->findByCursoId($curso_sga['Curso']['id']);
            if (empty($curso_turno_existe)) {
                $array_curso_turno = array(
                    'CursosTurno' => array(
                        'curso_id' => $curso_sga['Curso']['id'],
                        'turno_id' => $curso['DbsecCurso']['regime']
                    )
                );
                $this->CursosTurno->create();
                $this->CursosTurno->save($array_curso_turno);
            }
        }
    }

    public function actualiza_matricula_plano() {
        $this->Matricula->recursive = -1;
        $matriculas = $this->Matricula->find('all', array('conditions' => array('planoestudo_id' => null)));
        $i = 0;
        foreach ($matriculas as $matricula) {
            $this->Aluno->recursive = -1;
            $aluno = $this->Aluno->findById($matricula['Matricula']['aluno_id']);
            if ($aluno['Aluno']['codigo'] == '') {
                
            } else {
                $aluno_dbsec = $this->DbsecEstudante->findByEstNum($aluno['Aluno']['codigo']);
                if (!empty($aluno_dbsec)) {
                    $this->Planoestudo->recursive = -1;
                    $planoestudo = $this->Planoestudo->find('first', array('conditions' => array('curso_id' => $matricula['Matricula']['curso_id'], 'ano_criacao' => $aluno_dbsec['DbsecEstudante']['curriculum'])));
                    $this->Aluno->id = $aluno['Aluno']['id'];
                    $this->Aluno->set('planoestudo_id', $planoestudo['Planoestudo']['id']);
                    $this->Aluno->save();
                    $this->Matricula->id = $matricula['Matricula']['id'];
                    $this->Matricula->set('planoestudo_id', $planoestudo['Planoestudo']['id']);
                    $this->Matricula->save();
                }
            }

            $i++;
            debug($i);
        }
    }

    public function importa_inscricao() {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel'))
            throw new CakeException('Vendor class PHPExcel not found!');
        debug("teste0");

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'dmi'.DS. 'inscricao.xlsx');

        $linha_actual = 2;
        $worksheet = $xls->getActiveSheet();
        $xls2 = PHPExcel_IOFactory::load(APP . 'Imports' . DS .'dmi'.DS. 'disciplina.xlsx');
            $worksheet2 = $xls2->getActiveSheet();

        foreach ($worksheet->getRowIterator() as $row) {
            $this->Aluno->recursive = -1;

            $aluno = $this->Aluno->findByCodigo(trim($worksheet->getCell('A' . $linha_actual)->getCalculatedValue()));

            $codigo_disciplina = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
            
            $linha_actual2 = 2;
            while (true) {
                $codigo2 = $worksheet2->getCell('A' . $linha_actual2)->getCalculatedValue();
                
                if ($codigo2 == $codigo_disciplina) {
                    $nome_disciplina = $worksheet2->getCell('B' . $linha_actual2)->getCalculatedValue();
                    break;
                }
                if ($codigo2 == '') {
                    break;
                }
                $linha_actual2++;
            }

            $disciplina = $this->Disciplina->findByName($nome_disciplina);
           
            if (empty($disciplina)) {
                die($nome_disciplina);
            }
            $this->Turma->recursive = -1;
            $turma_db = trim($worksheet->getCell('V' . $linha_actual)->getCalculatedValue());
            
            $turma = $this->Turma->findByCodigo(trim($worksheet->getCell('V' . $linha_actual)->getCalculatedValue()));

            $this->Anolectivo->recursive = -1;
            $anolectivo = $this->Anolectivo->findByAno(trim($worksheet->getCell('E' . $linha_actual)->getCalculatedValue()));
            $this->Matricula->recursive = -1;
            $matricula = $this->Matricula->find('first', array('conditions' => array('aluno_id' => $aluno['Aluno']['id'], 'anolectivo_id' => $anolectivo['Anolectivo']['id'])));
            if (empty($matricula)) {
                $nova_matricula = array(
                    'Matricula' => array(
                        'aluno_id' => $aluno['Aluno']['id'],
                        'curso_id' => $aluno['Aluno']['curso_id'],
                        'planoestudo_id' => $aluno['Aluno']['planoestudo_id'],
                        'data' => trim($worksheet->getCell('L' . $linha_actual)->getCalculatedValue()),
                        'estadomatricula_id' => 0,
                        'user_id' => 1,
                        'anolectivo_id' => $anolectivo['Anolectivo']['id'],
                        'tipo_matricula_id' => 0
                    )
                );

                $this->Matricula->create();
                $this->Matricula->save($nova_matricula);
                $matricula = $this->Matricula->find('first', array('conditions' => array('aluno_id' => $aluno['Aluno']['id'], 'anolectivo_id' => $anolectivo['Anolectivo']['id'])));
            }
            $this->Curso->recursive = -1;
            $curso_frequencia = $this->Curso->findByCodigo(trim($worksheet->getCell('U' . $linha_actual)->getCalculatedValue()));
            $turma_frequencia = $this->Turma->find('first', array('conditions' => array('curso_id' => $curso_frequencia['Curso']['id'], 'disciplina_id' => $disciplina['Disciplina']['id'], 'anolectivo_id' => $anolectivo['Anolectivo']['id'])));
            $curso = $this->Curso->findByCodigo(trim($worksheet->getCell('N' . $linha_actual)->getCalculatedValue()));
            if (empty($turma)) {
                $turma = $this->Turma->find('first', array('conditions' => array('curso_id' => $curso['Curso']['id'], 'disciplina_id' => $disciplina['Disciplina']['id'], 'anolectivo_id' => $anolectivo['Anolectivo']['id'])));
            }

            $array_inscricao = array(
                'Inscricao' => array(
                    'aluno_id' => $aluno['Aluno']['id'],
                    'turma_id' => $turma['Turma']['id'],
                    'estadoinscricao_id' => 1,
                    'nota_frequencia' => trim($worksheet->getCell('F' . $linha_actual)->getCalculatedValue()),
                    'nota_final' => trim($worksheet->getCell('I' . $linha_actual)->getCalculatedValue()),
                    'data' => trim($worksheet->getCell('L' . $linha_actual)->getFormattedValue()),
                    'matricula_id' => $matricula['Matricula']['id'],
                    'tipo_inscricao_id' => trim($worksheet->getCell('X' . $linha_actual)->getCalculatedValue()),
                    'nota_exame_normal' => trim($worksheet->getCell('G' . $linha_actual)->getCalculatedValue()),
                    'nota_exame_recorrencia' => trim($worksheet->getCell('H' . $linha_actual)->getCalculatedValue()),
                    'estado_inscricao' => trim($worksheet->getCell('J' . $linha_actual)->getCalculatedValue()),
                    'turma_frequencia_id' => $turma_frequencia['Turma']['id']
                )
            );

            $this->Inscricao->contain();
            $inscricao_existe = $this->Inscricao->find('first', array('conditions' => array('aluno_id' => $array_inscricao['Inscricao']['aluno_id'], 'turma_id' => $array_inscricao['Inscricao']['turma_id'])));
            if (empty($inscricao_existe)) {
              //  debug($array_inscricao);
                $this->Inscricao->create();
                $this->Inscricao->save($array_inscricao);
                $this->out("Inscricao Criada----- " . $this->Inscricao->id);
            }


            $linha_actual++;
            $this->out("----------------------------------------------------------------".$linha_actual);
            
        }
    }

    public function normalize_str($str) {
        $invalid = array('Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z', 'ž' => 'z',
            'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A',
            'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E',
            'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
            'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y',
            'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a',
            'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i',
            'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
            'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
            'ÿ' => 'y', 'Ŕ' => 'R', 'ŕ' => 'r', "`" => "'", "´" => "'", "„" => ",", "`" => "'",
            "´" => "'", "“" => "\"", "”" => "\"", "´" => "'", "&acirc;€™" => "'", "{" => "",
            "~" => "", "–" => "-", "’" => "'");

        $str = str_replace(array_keys($invalid), array_values($invalid), $str);

        return $str;
    }

    public function geraEmailUem($apelido, $nome) {

        $nome = $this->normalize_str($nome);
        $nome = trim(strtolower($nome));

        $apelido = strtolower(trim($this->normalize_str($apelido)));

        $nome = utf8_encode($nome);
        $apelido = utf8_encode($apelido);
        $nome = preg_replace('/[^a-zA-Z0-9\s]/s', '', $nome);

        $nome = preg_replace('/\s+/', ' ', $nome);
        $nomes = explode(' ', $nome);
        $email = $nomes[0] . '.' . $apelido . '@uem.ac.mz';

        //Verificar se existe algum email assim
        $email_existe = $this->User->findByUsername($email);
        if ($email_existe) {
            if (count($nomes) > 1) {
                $segundo_nome = trim($nomes[1]);
                $email = $nomes[0] . '.' . $segundo_nome[0] . '.' . $apelido . '@uem.ac.mz';
                $email_existe1 = $this->User->findByUsername($email);

                if ($email_existe1) {
                    $email = $nomes[0] . '.' . $segundo_nome . '.' . $apelido . '@uem.ac.mz';
                    $email_existe3 = $this->User->findByUsername($email);
                    if ($email_existe3) {
                        $email = $apelido . '.' . $nomes[0] . '@uem.ac.mz';
                        $email_existe2 = $this->User->findByUsername($email);
                        if ($email_existe2) {
                            $email = $apelido . '.' . $nomes[0] . '.' . $email_existe2['User']['id'] . '@uem.ac.mz';
                        }
                    }
                }
            } else {
                $email = $apelido . '.' . $nomes[0] . '@uem.ac.mz';
                $email_existe2 = $this->User->findByUsername($email);
                if ($email_existe2) {
                    $email = $apelido . '.' . $nomes[0] . '.' . $email_existe2['User']['id'] . '@uem.ac.mz';
                }
            }
        }
        return strtolower($email);
    }

    public function importa_pessoa_dbsec() {
        App::import('Component', 'Auth');
        App::import('Controller', 'ComponentCollection');
        $collection = new ComponentCollection();
        $this->Auth = new AuthComponent($collection);

        $estudantes = $this->DbsecEstudante->find('all');
        $iii = 0;
        foreach ($estudantes as $estudante) {
            $this->out($iii++);
            $aluno = $this->Aluno->findByCodigo(trim($estudante['DbsecEstudante']['est_num']));
            if (empty($aluno)) {
                $dataSource = $this->User->getDataSource();

                $dataSource->begin();
                $email_pessoa = $this->geraEmailUem($estudante['DbsecEstudante']['apelido'], $estudante['DbsecEstudante']['nomes']);

                //Primeiro criar um user
                $user_array = array(
                    'User' => array(
                        'username' => $email_pessoa,
                        'password' => Security::hash('dra02062013', 'blowfish'),
                        'codigocartao' => $estudante['DbsecEstudante']['est_num'],
                        'group_id' => 3,
                        'estado_objecto_id' => $estudante['DbsecEstudante']['status_id']
                    )
                );

                $this->User->create();
                if ($this->User->save($user_array)) {
                    $pessoa_array = array(
                        'Entidade' => array(
                            'apelido' => $estudante['DbsecEstudante']['apelido'],
                            'nomes' => $estudante['DbsecEstudante']['nomes'],
                            'name' => $estudante['DbsecEstudante']['nomes'] . ' ' . $estudante['DbsecEstudante']['apelido'],
                            'created' => $estudante['DbsecEstudante']['data_registo'],
                            'data_nascimento' => $estudante['DbsecEstudante']['data_nascimento'],
                            'user_id' => $this->User->id,
                        )
                    );
                    $this->Entidade->create();
                    if ($this->Entidade->save($pessoa_array)) {
                        $curso = $this->Curso->findByCodigo($estudante['DbsecEstudante']['id_curso']);
                        $planoestudo = $this->Planoestudo->find('first', array('conditions' => array('curso_id' => $curso['Curso']['id'], 'ano_criacao' => $estudante['DbsecEstudante']['ano_ingresso'])));
                        $aluno_array = array(
                            'Aluno' => array(
                                'entidade_id' => $this->Entidade->id,
                                'codigo' => $estudante['DbsecEstudante']['est_num'],
                                'user_id' => $this->User->id,
                                'curso_id' => $curso['Curso']['id'],
                                'estadoentidade_id' => $estudante['DbsecEstudante']['status_id'],
                                'numero_estudante' => $estudante['DbsecEstudante']['est_num'],
                                'planoestudo_id' => $planoestudo['Planoestudo']['id'],
                                'ano_ingresso' => $estudante['DbsecEstudante']['ano_ingresso'],
                                'created' => $estudante['DbsecEstudante']['data_registo'],
                                'estado_aluno_id' => $estudante['DbsecEstudante']['status_id']
                            )
                        );

                        $id_curso = $pessoa['DraEstudante']['id_curso'];
                        if ($id_curso == null)
                            $id_curso = 0;
                        $curso_dra = $this->DraCurso->find('first', array('conditions' => array('curso_id' => $id_curso)));
                        $curso_sga = $this->Curso->find('first', array('conditions' => array('Curso.codigo' => $id_curso)));
                        $aluno_array['Aluno']['curso_id'] = $curso_sga['Curso']['id'];
                        $aluno_array['Aluno']['curso_ingresso_id'] = $curso_sga['Curso']['id'];
                        $aluno_array['Aluno']['regime_ingresso_id'] = $curso_dra['DraCurso']['regime'];
                        $aluno_array['Aluno']['turno_ingresso'] = $curso_dra['DraCurso']['regime'];
                        $this->Aluno->create();
                        if ($this->Aluno->save($aluno_array)) {


                            $dataSource->commit();
                        } else {
                            var_dump($user_array);
                            var_dump($pessoa_array);
                            var_dump($aluno_array);
                            $dataSource->showLog();
                            $dataSource->rollback();
                            $dataSource->showLog();
                            App::uses('View', 'View');
                            $null = null;
                            $View = new View($null, false);
                            $dump = $View->element('sql_dump');
                            CakeLog::error($dump);

                            die();
                        }
                    }
                }
            }
        }
    }

    public function importa_conclusao() {
        $conclusaos = $this->DraConclusao->find('all', array('conditions' => array('ano_fim NOT' => NULL)));
        $datasource = $this->Aluno->getDataSource();
        $datasource->begin();
        $i = 0;
        foreach ($conclusaos as $conclusao) {
            $this->Aluno->recursive = -1;
            $aluno = $this->Aluno->findByCodigo(trim($conclusao['DraConclusao']['est_num']));
            if (!empty($aluno)) {
                $curso = $this->Curso->findByCodigo($conclusao['DraConclusao']['curso_id']);
                $this->Aluno->id = $aluno['Aluno']['id'];
                $this->Aluno->set('estado_aluno_id', 3);
                $this->Aluno->set('curso_id', $curso['Curso']['id']);
                $this->Aluno->set('data_conclusao', $conclusao['DraConclusao']['data_conclusao']);
                $this->Aluno->set('nota_conclusao', $conclusao['DraConclusao']['nota_final']);
                $this->Aluno->save();
            } else {
                
            }
            $this->out($i++);
        }
        $datasource->commit();
    }

}

?>