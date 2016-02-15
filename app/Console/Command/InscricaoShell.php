<?php

    ini_set('memory_limit', "2048M");
    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('AppShell', 'Console/Command');

    /**
     * Class InscricaoShell
     *
     * @property Inscricao $Inscricao
     */
    class InscricaoShell extends AppShell
    {

        public $uses = ['Inscricao'];

        /**
         * Inscreve automaticamente estudantes novos ingressos no primeiro ano
         * @todo  Verificar se o anolectivo ja foi criado antes de criar turma
         */
        public function inscricaoAutomatica()
        {
            $anoLectivo = Configure::read('OpenSGA.ano_lectivo');
            $anoLectivoId = $this->Inscricao->Turma->AnoLectivo->findByAno($anoLectivo);
            $cursos = $this->Inscricao->Aluno->Curso->find('all', ['conditions' => []]);
            foreach ($cursos as $curso) {
                $planoEstudo = $this->Inscricao->Aluno->Curso->PlanoEstudo->find('first', [
                    'conditions' => ['PlanoEstudo.curso_id' => $curso['Curso']['id']],
                    'order'      => 'PlanoEstudo.ano_criacao DESC',
                ]);

                if (!empty($planoEstudo)) {
                    $this->Inscricao->Aluno->Curso->PlanoEstudo->DisciplinaPlanoEstudo->contain([
                        'Disciplina',
                    ]);
                    $disciplinas = $this->Inscricao->Aluno->Curso->PlanoEstudo->DisciplinaPlanoEstudo->find('all', [
                        'conditions' => [
                            'DisciplinaPlanoEstudo.plano_estudo_id'     => $planoEstudo['PlanoEstudo']['id'],
                            'DisciplinaPlanoEstudo.ano_curricular'      => 1,
                            'DisciplinaPlanoEstudo.semestre_curricular' => 1,
                        ],
                    ]);
                    foreach ($disciplinas as $disciplina) {
                        $alunos = $this->Inscricao->Aluno->find('all', [
                            'conditions' => [
                                'Aluno.ano_ingresso' => $anoLectivo,
                                'Aluno.curso_id'     => $curso['Curso']['id'],
                            ],
                        ]);
                        if (!empty($alunos)) {
                            foreach ($alunos as $aluno) {

                                $turmaExiste = $this->Inscricao->Aluno->Curso->Turma->find('first', [
                                    'conditions' => [
                                        'Turma.ano_lectivo_id'      => $anoLectivoId['AnoLectivo']['id'],
                                        'Turma.curso_id'            => $curso['Curso']['id'],
                                        'Turma.plano_estudo_id'     => $planoEstudo['PlanoEstudo']['id'],
                                        'Turma.disciplina_id'       => $disciplina['Disciplina']['id'],
                                        'Turma.estado_turma_id'     => 1,
                                        'Turma.ano_curricular'      => 1,
                                        'Turma.semestre_curricular' => 1,
                                    ],
                                ]);

                                if (empty($turmaExiste)) {
                                    $turma = [];
                                    $turma['ano_lectivo_id'] = $anoLectivoId['AnoLectivo']['id'];
                                    $turma['ano_curricular'] = $disciplina['DisciplinaPlanoEstudo']['ano_curricular'];
                                    $turma['semestre_curricular'] = $disciplina['DisciplinaPlanoEstudo']['semestre_curricular'];
                                    $turma['curso_id'] = $curso['Curso']['id'];
                                    $turma['escola_id'] = 1;
                                    $turma['plano_estudo_id'] = $planoEstudo['PlanoEstudo']['id'];
                                    $turma['turno_id'] = null;
                                    $turma['disciplina_id'] = $disciplina['Disciplina']['id'];
                                    $turma['estado_turma_id'] = 1;
                                    $turma['semestre_lectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
                                    $nome = $disciplina['Disciplina']['name'] . " - " . $planoEstudo['PlanoEstudo']['name'];
                                    $turma['name'] = $nome;

                                    $turmas = ['Turma' => $turma];
                                    $this->Inscricao->Aluno->Curso->Turma->create();
                                    if(!$this->Inscricao->Aluno->Curso->Turma->save($turmas)){
                                        debug($disciplina);
                                        debug($turmas);
                                        debug($this->Inscricao->Aluno->Curso->Turma->validationErrors);
                                        die();
                                    }
                                    $turmaId = $this->Inscricao->Aluno->Curso->Turma->id;
                                } else {
                                    $turmaId = $turmaExiste['Turma']['id'];
                                }
                                $matricula = $this->Inscricao->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($aluno['Aluno']['id'],
                                    $anoLectivoId['AnoLectivo']['id']);
                                $inscricaoSave = [
                                    'Inscricao' => [
                                        'aluno_id'            => $aluno['Aluno']['id'],
                                        'turma_id'            => $turmaId,
                                        'estado_inscricao_id' => 1,
                                        'matricula_id'        => $matricula['Matricula']['id'],
                                        'data'                => $matricula['Matricula']['data'],
                                        'pagamento_id'        => null,
                                        'tipo_inscricao_id'   => 1,
                                        'turma_inscricao_id'=>$turmaId,
                                        'turma_frequencia_id'=>$turmaId
                                    ],
                                ];
                                $inscricaoExiste = $this->Inscricao->Aluno->Inscricao->find('first', [
                                    'conditions' => [
                                        'aluno_id'            => $aluno['Aluno']['id'],
                                        'turma_id'            => $turmaId,
                                        'estado_inscricao_id' => 1,
                                    ],
                                ]);
                                if (empty($inscricaoExiste)) {
                                    $this->Inscricao->create();
                                    if(!$this->Inscricao->save($inscricaoSave)){
                                        debug($this->Inscricao->validationErrors);
                                        die();
                                    }
                                    $this->out('Aluno=' . $aluno['Aluno']['codigo'] . ',   Turma=' . $disciplina['Disciplina']['name'] . ' ----- Inscrito com sucesso');
                                }
                            }
                        }
                    }
                }
            }
        }


        public function ajustaEstadoInscricao()
        {
            $unidadeOrganicaId = $this->args[0];
            $this->Inscricao->Turma->contain('Curso');
            $turmas = $this->Inscricao->Turma->find('all',
                ['conditions' => ['Curso.unidade_organica_id' => $unidadeOrganicaId]]);
            $contador = 1;
            foreach ($turmas as $turma) {
                $inscricaos = $this->Inscricao->findAllByTurmaId($turma['Turma']['id']);

                foreach ($inscricaos as $inscricao) {

                    $inscricao['Inscricao']['inscricao_id'] = $inscricao['Inscricao']['id'];
                    unset($inscricao['Inscricao']['id']);
                    unset($inscricao['Inscricao']['created']);
                    unset($inscricao['Inscricao']['modified']);
                    unset($inscricao['Inscricao']['created_by']);
                    unset($inscricao['Inscricao']['modified_by']);
                    if ($inscricao['Inscricao']['nota_frequencia'] == -1) {
                        $inscricao['Inscricao']['nota_frequencia'] = null;
                    }
                    if ($inscricao['Inscricao']['nota_final'] == -1) {
                        $inscricao['Inscricao']['nota_final'] = null;
                    }
                    if ($inscricao['Inscricao']['nota_exame_normal'] == -1) {
                        $inscricao['Inscricao']['nota_exame_normal'] = null;
                    }
                    if ($inscricao['Inscricao']['nota_exame_recorrencia'] == -1) {
                        $inscricao['Inscricao']['nota_exame_recorrencia'] = null;
                    }


                    if (!$this->Inscricao->actualizaDadosInscricao($inscricao)) {
                        debug($inscricao);
                        die();
                    } else {
                        $this->out($contador++ . '-----------------------');
                    }


                }
            }
        }

    }
