<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class EstudantesShell extends AppShell {

	public $uses = array('Aluno', 'Candidatura');

	public function importa_novos_ingressos() {
		AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
		$this->Aluno->setDataSource('novos_ingressos');
		$this->Aluno->Entidade->setDataSource('novos_ingressos');
		$this->Aluno->Entidade->User->setDataSource('novos_ingressos');
		$this->Aluno->Entidade->EntidadeIdentificacao->setDataSource('novos_ingressos');
		$this->Aluno->Entidade->EntidadeContacto->setDataSource('novos_ingressos');
		$this->Aluno->AlunoNivelMedio->setDataSource('novos_ingressos');
		$this->Aluno->AlunoNivelMedio->EscolaNivelMedio->setDataSource('novos_ingressos');
		$this->Aluno->Matricula->setDataSource('novos_ingressos');
		$this->Aluno->HistoricoCurso->setDataSource('novos_ingressos');
		$this->Aluno->Curso->setDataSource('novos_ingressos');
		$this->Candidatura->setDataSource('novos_ingressos');
		$this->Aluno->contain(array(
			'Entidade' => array(
				'User', 'EntidadeIdentificacao', 'EntidadeContacto'
			), 'AlunoNivelMedio' => array(
				'EscolaNivelMedio'
			), 'Matricula', 'HistoricoCurso', 'Curso'
		));
		$alunos = $this->Aluno->find('all', array('conditions' => array('Aluno.ano_ingresso' => Configure::read('OpenSGA.ano_lectivo'))));
		$totalAlunos = count($alunos);
		foreach ($alunos as $aluno) {
			$arrayAluno = array(
				'User' => array(
					'username' => $aluno['Entidade']['User']['username'],
					'password' => $aluno['Entidade']['User']['password'],
					'codigocartao' => $aluno['Aluno']['codigo'],
					'name' => $aluno['Entidade']['name'],
					'group_id' => 3,
					'verificar_permissoes' => 1,
					'estado_email' => 0,
					'estado_objecto_id' => 1,
					'timezone' => 'Africa/Maputo',
					'created' => $aluno['Entidade']['User']['created'],
					'modified' => $aluno['Entidade']['User']['modified'],
					'created_by' => $aluno['Entidade']['User']['created_by'],
					'modified_by' => $aluno['Entidade']['User']['modified_by'],
				),
				'Aluno' => array(
					'numero_estudante' => $aluno['Aluno']['codigo'],
					'codigo' => $aluno['Aluno']['codigo'],
					//'numero_estudante_antigo' => $aluno['Aluno']['numero_estudante_antigo'],
					'certificado_nivel_anterior' => $aluno['Aluno']['certificado_nivel_anterior'],
					'recenseamento_militar' => $aluno['Aluno']['recenseamento_militar'],
					'nome_emergencia' => $aluno['Aluno']['nome_emergencia'],
					'telemovel_emergencia' => $aluno['Aluno']['telemovel_emergencia'],
					'parentesco_encarregado' => $aluno['Aluno']['parentesco_encarregado'],
					'curso_id' => $aluno['Aluno']['curso_id'],
					'unidade_organica_id' => $aluno['Curso']['unidade_organica_id'],
					'aluno_via_admissao_id' => $aluno['Aluno']['aluno_via_admissao_id'],
					'ano_ingresso' => $aluno['Aluno']['ano_ingresso'],
					'created' => $aluno['Aluno']['created'],
					'modified' => $aluno['Aluno']['modified'],
					'created_by' => $aluno['Aluno']['created_by'],
					'modified_by' => $aluno['Aluno']['modified_by'],
				),
				'Entidade' => array(
					'name' => $aluno['Entidade']['name'],
					'apelido' => $aluno['Entidade']['apelido'],
					'nomes' => $aluno['Entidade']['nomes'],
					'genero_id' => $aluno['Entidade']['genero_id'],
					'data_nascimento' => $aluno['Entidade']['data_nascimento'],
					'estado_civil' => $aluno['Entidade']['estado_civil'],
					'nome_pai' => $aluno['Entidade']['nome_pai'],
					'nome_mae' => $aluno['Entidade']['nome_mae'],
					'naturalidade' => $aluno['Entidade']['naturalidade'],
					'pais_nascimento' => $aluno['Entidade']['pais_nascimento'],
					'provincia_nascimento' => $aluno['Entidade']['provincia_nascimento'],
					'cidade_nascimento' => $aluno['Entidade']['cidade_nascimento'],
					'created' => $aluno['Entidade']['created'],
					'modified' => $aluno['Entidade']['modified'],
					'created_by' => $aluno['Entidade']['created_by'],
					'modified_by' => $aluno['Entidade']['modified_by'],
				),
				'AlunoNivelMedio' => array(
					'EscolaNivelMedio' => array(
						'pais_id' => $aluno['AlunoNivelMedio']['EscolaNivelMedio']['pais_id'],
						'provincia_id' => $aluno['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id'],
						'distrito_id' => $aluno['AlunoNivelMedio']['EscolaNivelMedio']['distrito_id']
					),
					'escola_nivel_medio_id' => $aluno['AlunoNivelMedio']['escola_nivel_medio_id'],
					'ano_conclusao' => $aluno['AlunoNivelMedio']['ano_conclusao'],
					'nota_final' => $aluno['AlunoNivelMedio']['nota_final'],
					'nova_escola_anterior' => ''
				),
				'EntidadeIdentificacao' => array(
					'documento_identificacao_id' => $aluno['Entidade']['EntidadeIdentificacao'][0]['documento_identificacao_id'],
					'numero' => $aluno['Entidade']['EntidadeIdentificacao'][0]['numero'],
					'local_emissao' => $aluno['Entidade']['EntidadeIdentificacao'][0]['local_emissao'],
					'data_emissao' => $aluno['Entidade']['EntidadeIdentificacao'][0]['data_emissao'],
					'data_validade' => $aluno['Entidade']['EntidadeIdentificacao'][0]['data_validade']
				),
				'Dados' => array(
					'user_id' => $aluno['Aluno']['created_by'],
				)
			);

			foreach ($aluno['Entidade']['EntidadeContacto'] as $contacto) {
				$arrayAluno['EntidadeContacto'][$contacto['tipo_contacto_id']] = $contacto['valor'];
			}
			$candidato = $this->Candidatura->findByNumeroEstudante($aluno['Aluno']['codigo']);
			$arrayAluno['Dados']['numero_candidato'] = $candidato['Candidatura']['numero_candidato'];
			$this->Aluno->setDataSource('default');
			$this->Aluno->Entidade->setDataSource('default');
			$this->Aluno->Entidade->User->setDataSource('default');
			$this->Aluno->Entidade->EntidadeIdentificacao->setDataSource('default');
			$this->Aluno->Entidade->EntidadeContacto->setDataSource('default');
			$this->Aluno->AlunoNivelMedio->setDataSource('default');
			$this->Aluno->AlunoNivelMedio->EscolaNivelMedio->setDataSource('default');
			$this->Aluno->Matricula->setDataSource('default');
			$this->Aluno->HistoricoCurso->setDataSource('default');
			$this->Aluno->Curso->setDataSource('default');
			$this->Candidatura->setDataSource('default');

			$alunoExiste = $this->Aluno->findByCodigo($aluno['Aluno']['codigo']);
			if (empty($alunoExiste)) {
				$this->Aluno->matriculaNovoIngresso($arrayAluno);
				$this->out('Aluno Importado----------------------' . $totalAlunos--);
			} else {
				$this->out($totalAlunos--);
			}
		}
	}

	public function exporta_novos_ingressos_por_curso() {
		App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
		if (!class_exists('PHPExcel')) {
			throw new CakeException('Vendor class PHPExcel not found!');
		}
		$xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'renovacao.xlsx');
		$worksheet = $xls->getActiveSheet();
		$linhaActual = 2;

		$faculdades = $this->Aluno->Curso->UnidadeOrganica->find('list', array('conditions' => array('tipo_unidade_organica_id' => 1)));
		foreach ($faculdades as $faculdadeId => $faculdadeNome) {
			$departamentos = $this->Aluno->Curso->UnidadeOrganica->children($faculdadeId);
			$arrayDepartamentos = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
			$arrayDepartamentos[] = $faculdadeId;

			$cursos = $this->Aluno->Curso->find('list', array('conditions' => array('unidade_organica_id' => $arrayDepartamentos)));
			foreach ($cursos as $cursoID => $cursoNome) {
				$this->Aluno->contain(array(
					'Curso', 'Entidade' => array(
						'Genero'
					)
						)
				);
				$alunos = $this->Aluno->find('all', array('conditions' => array('Aluno.ano_ingresso' => Configure::read('OpenSGA.ano_lectivo'), 'curso_id' => $cursoID)));
				foreach ($alunos as $aluno) {
					$this->out($aluno['Entidade']['name']);
				}
			}
		}
		die();


		foreach ($alunos as $aluno) {
			$worksheet->setCellValue('A' . $linha_actual, $matricula['Aluno']['codigo']);
			$worksheet->setCellValue('B' . $linha_actual, $matricula['Aluno']['Entidade']['apelido']);
			$worksheet->setCellValue('C' . $linha_actual, $matricula['Aluno']['Entidade']['nomes']);
			$worksheet->setCellValue('D' . $linha_actual, $matricula['AnoLectivo']['ano']);
			$worksheet->setCellValue('E' . $linha_actual, $matricula['Matricula']['data']);
			$worksheet->setCellValue('F' . $linha_actual, $matricula['Curso']['name']);
			$unidade_organica = $matricula['Curso']['UnidadeOrganica'];
			$faculdade = $unidade_organica;
			if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
				$unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
				$faculdade = $unidade_organica_nova['UnidadeOrganica'];
			}
			$xls->getActiveSheet()->setCellValue('G' . $linha_actual, $faculdade['name']);
			$this->out($linha_actual . "---" . $matricula['Aluno']['codigo']);
			$linha_actual++;
			$xls->getActiveSheet()->setBreak('G' . $linha_actual, 2);
		}
		$objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

		$objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'renovacao' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
	}

}
