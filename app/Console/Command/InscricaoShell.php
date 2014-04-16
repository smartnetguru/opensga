<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class InscricaoShell extends AppShell {

	public $uses = array('Aluno', 'Candidatura');

	/**
	 * Inscreve automaticamente estudantes novos ingressos no primeiro ano
	 * @todo  Verificar se o anolectivo ja foi criado antes de criar turma
	 */
	public function inscricao_automatica() {
		$anoLectivo = Configure::read('OpenSGA.ano_lectivo');
		$anoLectivoId = $this->Aluno->Inscricao->Turma->AnoLectivo->findByAno($anoLectivo);
		$cursos = $this->Aluno->Curso->find('all', array('conditions' => array('Curso.unidade_organica_id' => 1)));
		foreach ($cursos as $curso) {
			$planoEstudo = $this->Aluno->Curso->PlanoEstudo->find('first', array('conditions' => array('PlanoEstudo.curso_id' => $curso['Curso']['id']), 'order' => 'PlanoEstudo.ano_criacao DESC'));
			if (!empty($planoEstudo)) {
				$this->Aluno->Curso->PlanoEstudo->DisciplinaPlanoEstudo->contain(array(
					'Disciplina'
				));
				$disciplinas = $this->Aluno->Curso->PlanoEstudo->DisciplinaPlanoEstudo->find('all', array('conditions' => array('DisciplinaPlanoEstudo.plano_estudo_id' => $planoEstudo['PlanoEstudo']['id'], 'DisciplinaPlanoEstudo.ano_curricular' => 1, 'DisciplinaPlanoEstudo.semestre_curricular' => 1)));
				foreach ($disciplinas as $disciplina) {
					$alunos = $this->Aluno->find('all', array('conditions' => array('Aluno.ano_ingresso' => $anoLectivo, 'Aluno.curso_id' => $curso['Curso']['id'])));
					if (!empty($alunos)) {
						foreach ($alunos as $aluno) {

							$turmaExiste = $this->Aluno->Curso->Turma->find('first', array(
								'conditions' => array(
									'Turma.ano_lectivo_id' => $anoLectivoId['AnoLectivo']['id'],
									'Turma.curso_id' => $curso['Curso']['id'],
									'Turma.plano_estudo_id' => $planoEstudo['PlanoEstudo']['id'],
									'Turma.disciplina_id' => $disciplina['Disciplina']['id'],
									'Turma.estado_turma_id' => 1,
									'Turma.ano_curricular' => 1,
									'Turma.semestre_curricular' => 1
								)
							));
							if (empty($turmaExiste)) {
								$turma = array();
								$turma['ano_lectivo_id'] = $anoLectivoId['AnoLectivo']['id'];
								$turma['anocurricular'] = $disciplina['DisciplinaPlanoEstudo']['ano'];
								$turma['semestrecurricular'] = $disciplina['DisciplinaPlanoEstudo']['semestre'];
								$turma['curso_id'] = $curso['Curso']['id'];
								$turma['escola_id'] = 1;
								$turma['plano_estudo_id'] = $planoEstudo['PlanoEstudo']['id'];
								$turma['turno_id'] = null;
								$turma['disciplina_id'] = $disciplina['Disciplina']['id'];
								$turma['estado_turma_id'] = 1;
								$turma['semestrelectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
								$nome = $disciplina['Disciplina']['name'] . " - " . $planoEstudo['PlanoEstudo']['name'];
								$turma['name'] = $nome;

								$turmas = array('Turma' => $turma);
								$this->Aluno->Curso->Turma->create();
								$this->Aluno->Curso->Turma->save($turmas);
								$turmaId = $this->Aluno->Curso->Turma->id;
							} else {
								$turmaId = $turmaExiste['Turma']['id'];
							}
							$matricula = $this->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($aluno['Aluno']['id'], $anoLectivoId['AnoLectivo']['id']);
							$inscricaoSave = array(
								'Inscricao' => array(
									'aluno_id' => $aluno['Aluno']['id'],
									'turma_id' => $turmaId,
									'estado_inscricao_id' => 1,
									'matricula_id' => $matricula['Matricula']['id'],
									'data' => $matricula['Matricula']['data'],
									'pagamento_id' => null,
									'tipo_inscricao_id' => null
								)
							);
							$inscricaoExiste = $this->Aluno->Inscricao->find('first', array(
								'conditions' => array(
									'aluno_id' => $aluno['Aluno']['id'],
									'turma_id' => $turmaId,
									'estado_inscricao_id' => 1
								)
							));
							if (empty($inscricaoExiste)) {
								$this->Aluno->Inscricao->create();
								$this->Aluno->Inscricao->save($inscricaoSave);
								$this->out('Aluno=' . $aluno['Aluno']['codigo'] . ',   Turma=' . $disciplina['Disciplina']['name'] . ' ----- Inscrito com sucesso');
							}
						}
					}
				}
			}
		}
	}

}
