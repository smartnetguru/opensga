<?php

    ini_set('memory_limit', "2048M");
    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('AppShell', 'Console/Command');

    class CursoShell extends AppShell
    {

        public $uses = ['Curso', 'CursoNews'];

        public function organizaCursosTurnos()
        {

            $cursos = $this->Curso->find('all', ['conditions' => ['estado_update' => 1]]);
            $regimes = $this->Curso->CursoRegime->Regime->find('list');
            $grauAcademicos = $this->Curso->GrauAcademico->find('list');
            foreach ($cursos as $curso) {

                $this->out('Escolha um Turno');
                foreach ($regimes as $k => $v) {
                    $this->out($k . '. ' . $v);
                }
                $optionRegimes = array_keys($regimes);
                $inputRegime = $this->in($curso['Curso']['id'] . '-' . $curso['Curso']['name'] . ':', $optionRegimes);
                foreach ($grauAcademicos as $k => $v) {
                    $this->out($k . '. ' . $v);
                }
                $optionGraus = array_keys($grauAcademicos);
                $inputGraus = $this->in($curso['Curso']['name'] . '->Grau:', $optionGraus);

                $cursoOlds = $this->Curso->find('list');

                foreach ($cursoOlds as $k => $v) {
                    $this->out($k . '. ' . $v);
                }

                $inputCurso = $this->in($curso['Curso']['id'] . '-' .$curso['Curso']['name'] . '->CursoEquivalente:');

                $dataSource = $this->Curso->getDataSource();
                $dataSource->begin();


                $novoCurso = $this->Curso->findById($inputCurso);
                debug($novoCurso);
                $cursoNews = $this->CursoNews->findByName($novoCurso['Curso']['name']);
                $cursoAntigoId = $curso['Curso']['id'];
                if (empty($cursoNews)) {
                    $this->out('Criando novo Curso----' . $novoCurso['Curso']['name']);
                    $arrayNovoCurso = $novoCurso;
                    unset($arrayNovoCurso['Curso']['id']);
                    unset($arrayNovoCurso['Curso']['created']);
                    unset($arrayNovoCurso['Curso']['modified']);
                    unset($arrayNovoCurso['Curso']['created_by']);
                    unset($arrayNovoCurso['Curso']['modified_by']);
                    $arrayNovoCurso['Curso']['grau_academico_id'] = $inputGraus;
                    $arrayNovoCurso['CursoNews'] = $arrayNovoCurso['Curso'];
                    unset($arrayNovoCurso['Curso']);
                    $this->CursoNews->create();
                    $this->CursoNews->save($arrayNovoCurso);
                    $novoCursoId = $this->CursoNews->id;
                } else {
                    $novoCursoId = $cursoNews['CursoNews']['id'];
                }

                //Alumni Candidato Alumnis
                $this->Curso->AlumniCandidatoAlumni->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['curso_id' => $cursoAntigoId]);
                $this->Curso->Aluno->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['Aluno.curso_id' => $cursoAntigoId]);
                $this->Curso->BolsaTemporaria->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['BolsaTemporaria.curso_id' => $cursoAntigoId]);
                $this->Curso->Candidatura->query('Update candidaturas set novo_curso='.$novoCursoId.',regime_id='.$inputRegime.' where curso_id='.$cursoAntigoId);
                /*$this->Curso->Candidatura->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['Candidatura.curso_id' => $cursoAntigoId]);*/
                $this->Curso->CursoResponsavel->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['CursoResponsavel.curso_id' => $cursoAntigoId]);
                $this->Curso->CursoEscola->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['CursoEscola.curso_id' => $cursoAntigoId]);
                $this->Curso->HistoricoCurso->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['HistoricoCurso.curso_id' => $cursoAntigoId]);
                $this->Curso->Matricula->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['Matricula.curso_id' => $cursoAntigoId]);
                $this->Curso->MudancaCurso->updateAll([
                    'novo_curso_antigo' => $novoCursoId,
                    'regime_antigo'     => $inputRegime
                ], ['MudancaCurso.curso_antigo' => $cursoAntigoId]);
                $this->Curso->MudancaCurso->updateAll([
                    'novo_curso_novo' => $novoCursoId,
                    'regime_novo'     => $inputRegime
                ], ['MudancaCurso.curso_novo' => $cursoAntigoId]);
                $this->Curso->PlanoEstudo->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['PlanoEstudo.curso_id' => $cursoAntigoId]);
                $this->Curso->Turma->updateAll([
                    'novo_curso' => $novoCursoId,
                    'regime_id'  => $inputRegime
                ], ['Turma.curso_id' => $cursoAntigoId]);

                $cursoRegimeExiste = $this->Curso->CursoRegime->findByCursoIdAndRegimeId($novoCursoId, $inputRegime);
                if (empty($cursoRegimeExiste)) {
                    $arrayCursoRegime = ['CursoRegime' => ['curso_id' => $novoCursoId, 'regime_id' => $inputRegime,'codigo'=>$curso['Curso']['codigo']]];
                    $this->Curso->CursoRegime->create();
                    $this->Curso->CursoRegime->save($arrayCursoRegime);
                }

                $this->Curso->id = $cursoAntigoId;
                $this->Curso->set('estado_update', 2);
                $this->Curso->save();
                $dataSource->commit();




                /*
                 * alumni_candidato_aluumnis
alunos
bolsa_temporarias
candidaturas
curso_responsavels
curso_tipo_pagamentos
curso_escolas
cursos_turnos
historico_curso
matriculas
mudanca_curso
plano_estudos
turmas
                 */
            }


        }

        public function organiza_cursos_faculdade()
        {
            $cursos = $this->Curso->find('all');
            foreach ($cursos as $curso) {
                $unidadeOrganicaId = $curso['Curso']['unidade_organica_id'];
                $unidadeOrganica = $this->Curso->UnidadeOrganica->findById($unidadeOrganicaId);
                if ($unidadeOrganica['UnidadeOrganica']['tipo_unidade_organica_id'] == 2) {
                    $novaUnidade = $this->Curso->UnidadeOrganica->findById($unidadeOrganica['UnidadeOrganica']['parent_id']);
                    if ($novaUnidade) {
                        $this->out('alterando unidade' . $unidadeOrganica['UnidadeOrganica']['name']);
                        $this->Curso->id = $curso['Curso']['id'];
                        $this->Curso->set('unidade_organica_id', $novaUnidade['UnidadeOrganica']['id']);
                        $this->Curso->save();
                    }
                } elseif ($unidadeOrganica['UnidadeOrganica']['tipo_unidade_organica_id'] != 1) {
                    debug($curso);
                }
            }
        }


        public function cursos_sem_plano_estudos(){
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'renovacao.xlsx');

            $worksheet = $xls->getActiveSheet();
            $linha_actual = 2;
            $this->Curso->contain('UnidadeOrganica');
            $cursos = $this->Curso->find('all');
            foreach($cursos as $curso){
                $planoEstudoExiste = $this->Curso->PlanoEstudo->findByCursoId($curso['Curso']['id']);
                if(empty($planoEstudoExiste)){

                    $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $curso['UnidadeOrganica']['name']);
                    $xls->getActiveSheet()->setCellValue('B' . $linha_actual, $curso['Curso']['codigo']);
                    $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $curso['Curso']['name']);

                    $linha_actual++;
                }

            }

            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('cursos_sem_plano_estudo.xlsx');
        }

        public function cursos_com_plano_estudos(){
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'renovacao.xlsx');
            $linha_actual = 2;
            $this->Curso->contain('UnidadeOrganica');
            $cursos = $this->Curso->find('all');
            foreach($cursos as $curso){
                $todosPlanosDeEstudo = $this->Curso->PlanoEstudo->findAllByCursoId($curso['Curso']['id']);
                if(!empty($todosPlanosDeEstudo)){

                    foreach($todosPlanosDeEstudo as $planoEstudo){
                        $totalCreditos = $this->Curso->PlanoEstudo->getTotalCreditos($planoEstudo['PlanoEstudo']['id']);
                        $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $curso['UnidadeOrganica']['name']);
                        $xls->getActiveSheet()->setCellValue('B' . $linha_actual, $curso['Curso']['codigo']);
                        $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $curso['Curso']['name']);
                        $xls->getActiveSheet()->setCellValue('D' . $linha_actual, $planoEstudo['PlanoEstudo']['ano_criacao']);
                        $xls->getActiveSheet()->setCellValue('E' . $linha_actual, $totalCreditos);

                        $linha_actual++;

                    }





                }

            }

            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('cursos_com_plano_estudo.xlsx');
        }


    }
