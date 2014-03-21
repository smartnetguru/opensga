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

	public function exporta_estudantes_dbsec() {
		\error_reporting(0);
		App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
		if (!class_exists('PHPExcel')) {
			throw new CakeException('Vendor class PHPExcel not found!');
		}
		$xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'import_estudantes.xlsx');
		$worksheet = $xls->getActiveSheet();

		$this->Aluno->contain(array(
			'Entidade' => array(
				'Genero', 'PaisNascimento', 'User'
			), 'Curso' => array(
				'UnidadeOrganica'
			)
		));
		$alunos = $this->Aluno->find('all');
		$totalAlunos = count($alunos);
		$linhaActual = 2;
		foreach ($alunos as $aluno) {
			$xls->getActiveSheet()->setCellValue('A' . $linhaActual, $aluno['Aluno']['codigo']);
			$xls->getActiveSheet()->setCellValue('B' . $linhaActual, $aluno['Entidade']['apelido']);
			$xls->getActiveSheet()->setCellValue('C' . $linhaActual, $aluno['Entidade']['nomes']);
			$bi = $this->Aluno->Entidade->getNumeroDocumentoIdentificacao($aluno['Entidade']['id']);
			$xls->getActiveSheet()->setCellValue('D' . $linhaActual, $bi);
			$xls->getActiveSheet()->setCellValue('E' . $linhaActual, $aluno['Entidade']['data_nascimento']);
			$xls->getActiveSheet()->setCellValue('F' . $linhaActual, $aluno['Aluno']['ano_ingresso']);
			$morada = $this->Aluno->Entidade->getMorada($aluno['Entidade']['id']);
			$xls->getActiveSheet()->setCellValue('G' . $linhaActual, $morada);
			$telefone = $this->Aluno->Entidade->getCellNumber($aluno['Entidade']['id']);
			$xls->getActiveSheet()->setCellValue('H' . $linhaActual, $telefone);
			$xls->getActiveSheet()->setCellValue('I' . $linhaActual, $telefone);
			$xls->getActiveSheet()->setCellValue('J' . $linhaActual, $aluno['Curso']['codigo']);
			$xls->getActiveSheet()->setCellValue('K' . $linhaActual, $aluno['Entidade']['PaisNascimento']['name']);
			$xls->getActiveSheet()->setCellValue('L' . $linhaActual, $aluno['Entidade']['User']['username']);
			$unidadeOrganica = $aluno['Curso']['UnidadeOrganica'];
			$faculdade = $unidadeOrganica;
			if ($unidadeOrganica['tipo_unidade_organica_id'] == 2) {
				$unidadeOrganicaNova = $this->Aluno->Curso->UnidadeOrganica->findById($unidadeOrganica['parent_id']);
				$faculdade = $unidadeOrganicaNova['UnidadeOrganica'];
			}
			$xls->getActiveSheet()->setCellValue('M' . $linhaActual, $faculdade['codigo']);
			$xls->getActiveSheet()->setCellValue('N' . $linhaActual, $aluno['Curso']['UnidadeOrganica']['codigo']);
			$xls->getActiveSheet()->setCellValue('O' . $linhaActual, $aluno['Entidade']['Genero']['name']);
			$xls->getActiveSheet()->setCellValue('P' . $linhaActual, $aluno['Aluno']['estado_aluno_id']);
			$xls->getActiveSheet()->setCellValue('Q' . $linhaActual, $aluno['Aluno']['codigo']);
			$this->out($totalAlunos-- . "---" . $aluno['Aluno']['codigo']);
			$linhaActual++;
		}

		$objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
		$objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'Estudantes' . DS . 'import_' . date('Y_m_d') . '.xlsx');
	}

	public function exporta_novos_ingressos_por_curso() {
		App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
		if (!class_exists('PHPExcel')) {
			throw new CakeException('Vendor class PHPExcel not found!');
		}


		$linhaUem = 1;
		$linhaFaculdade = 3;
		$linhaCurso = 4;
		$linhaTitulo = 5;
		$linhaC = 7;

		$linhaActual = 1;

		$faculdades = $this->Aluno->Curso->UnidadeOrganica->find('list', array('conditions' => array('tipo_unidade_organica_id' => 1)));
		foreach ($faculdades as $faculdadeId => $faculdadeNome) {
			$departamentos = $this->Aluno->Curso->UnidadeOrganica->children($faculdadeId);
			$arrayDepartamentos = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
			$arrayDepartamentos[] = $faculdadeId;
			$xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Estudantes' . DS . 'novos_ingressos_curso.xlsx');
			$ws = $xls->getActiveSheet();
			$paginaActual = 1;

			$cursos = $this->Aluno->Curso->find('list', array('conditions' => array('unidade_organica_id' => $arrayDepartamentos)));
			foreach ($cursos as $cursoID => $cursoNome) {
				$ws->setCellValue('A' . $linhaActual, 'UNIVERSIDADE EDUARDO MONDLANE');
				if ($paginaActual != 1) {
					$ws->mergeCells('A' . $linhaActual . ':K' . $linhaActual);
					$ws->duplicateStyle($ws->getStyle('A' . $linhaUem), 'A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$linhaActual++;
				$ws->setCellValue('A' . $linhaActual, $faculdadeNome);
				if ($paginaActual != 1) {
					$ws->mergeCells('A' . $linhaActual . ':K' . $linhaActual);
					$ws->duplicateStyle($ws->getStyle('A' . $linhaFaculdade), 'A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$linhaActual++;
				$linhaActual++;
				$ws->setCellValue('A' . $linhaActual, $cursoNome);
				if ($paginaActual != 1) {
					$ws->mergeCells('A' . $linhaActual . ':K' . $linhaActual);
					$ws->duplicateStyle($ws->getStyle('A' . $linhaCurso), 'A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$linhaActual++;
				$ws->setCellValue('A' . $linhaActual, 'Novos Ingressos  - 2014');
				if ($paginaActual != 1) {
					$ws->mergeCells('A' . $linhaActual . ':K' . $linhaActual);
					$ws->duplicateStyle($ws->getStyle('A' . $linhaTitulo), 'A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					$ws->getStyle('A' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$linhaActual++;
				$linhaActual++;
				$ws->setCellValue('A' . $linhaActual, '#');
				if ($paginaActual != 1) {
					$ws->mergeCells('A' . $linhaActual . ':A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':A' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->duplicateStyle($ws->getStyle('A' . $linhaC), 'A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':A' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$ws->setCellValue('B' . $linhaActual, 'Codigo');
				if ($paginaActual != 1) {
					$ws->mergeCells('B' . $linhaActual . ':B' . $linhaActual);
					$ws->getStyle('B' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->duplicateStyle($ws->getStyle('B' . $linhaC), 'B' . $linhaActual);
					$ws->getStyle('B' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$ws->setCellValue('C' . $linhaActual, 'Apelido');
				if ($paginaActual != 1) {
					$ws->mergeCells('C' . $linhaActual . ':E' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':E' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->duplicateStyle($ws->getStyle('C' . $linhaC), 'C' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':E' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$ws->setCellValue('F' . $linhaActual, 'Outros Nomes');
				if ($paginaActual != 1) {
					$ws->mergeCells('F' . $linhaActual . ':J' . $linhaActual);
					$ws->getStyle('F' . $linhaActual . ':J' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->duplicateStyle($ws->getStyle('F' . $linhaC), 'F' . $linhaActual);
					$ws->getStyle('F' . $linhaActual . ':J' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$ws->setCellValue('K' . $linhaActual, 'Sexo');
				if ($paginaActual != 1) {
					$ws->mergeCells('K' . $linhaActual . ':K' . $linhaActual);
					$ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->duplicateStyle($ws->getStyle('K' . $linhaC), 'K' . $linhaActual);
					$ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				}
				$linhaActual++;
				$this->Aluno->contain(array(
					'Curso', 'Entidade' => array(
						'Genero'
					)
						)
				);
				$alunos = $this->Aluno->find('all', array('conditions' => array('Aluno.ano_ingresso' => Configure::read('OpenSGA.ano_lectivo'), 'curso_id' => $cursoID)));
				$i = 1;
				$homens = 0;
				$mulheres = 0;
				$idades = 0;
				foreach ($alunos as $aluno) {
					if ($aluno['Entidade']['genero_id'] == 1) {
						$homens++;
					} elseif ($aluno['Entidade']['genero_id'] == 2) {
						$mulheres++;
					}
					$from = new DateTime($aluno['Entidade']['data_nascimento']);
					$to = new DateTime('today');
					$idades += $from->diff($to)->y;
					$ws->setCellValue('A' . $linhaActual, $i);
					$i++;
					$ws->mergeCells('A' . $linhaActual . ':A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':A' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					//$ws->duplicateStyle($ws->getStyle('A' . $linhaC), 'A' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':A' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

					$ws->setCellValue('B' . $linhaActual, $aluno['Aluno']['codigo']);

					$ws->mergeCells('B' . $linhaActual . ':B' . $linhaActual);
					$ws->getStyle('B' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					//$ws->duplicateStyle($ws->getStyle('B' . $linhaC), 'B' . $linhaActual);
					$ws->getStyle('B' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

					$ws->setCellValue('C' . $linhaActual, $aluno['Entidade']['apelido']);

					$ws->mergeCells('C' . $linhaActual . ':E' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':E' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					//$ws->duplicateStyle($ws->getStyle('C' . $linhaC), 'C' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':E' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

					$ws->setCellValue('F' . $linhaActual, $aluno['Entidade']['nomes']);

					$ws->mergeCells('F' . $linhaActual . ':J' . $linhaActual);
					$ws->getStyle('F' . $linhaActual . ':J' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					//$ws->duplicateStyle($ws->getStyle('F' . $linhaC), 'F' . $linhaActual);
					$ws->getStyle('F' . $linhaActual . ':J' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

					$ws->setCellValue('K' . $linhaActual, $aluno['Entidade']['Genero']['name']);

					$ws->mergeCells('K' . $linhaActual . ':K' . $linhaActual);
					$ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					//$ws->duplicateStyle($ws->getStyle('K' . $linhaC), 'K' . $linhaActual);
					$ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

					$linhaActual++;
					$this->out('Aluno-----' . $i . '-------' . $aluno['Entidade']['name']);
				}
				$this->out('Curso-----------' . $cursoNome);
				$paginaActual++;
				$linhaActual++;
				$linhaActual++;
				$linhaActual++;
				if ($i > 1) {
					$ws->setCellValue('A' . $linhaActual, 'Total de Estudantes');
					$ws->mergeCells('A' . $linhaActual . ':B' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$ws->setCellValue('C' . $linhaActual, $i - 1);
					$ws->mergeCells('C' . $linhaActual . ':C' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$linhaActual++;
					$ws->setCellValue('A' . $linhaActual, 'Total Homens');
					$ws->mergeCells('A' . $linhaActual . ':B' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$ws->setCellValue('C' . $linhaActual, $homens);
					$ws->mergeCells('C' . $linhaActual . ':C' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$linhaActual++;
					$ws->setCellValue('A' . $linhaActual, 'Total de Mulheres');
					$ws->mergeCells('A' . $linhaActual . ':B' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$ws->setCellValue('C' . $linhaActual, $mulheres);
					$ws->mergeCells('C' . $linhaActual . ':C' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$linhaActual++;
					$linhaActual++;
					$ws->setCellValue('A' . $linhaActual, 'Media de Idades');
					$ws->mergeCells('A' . $linhaActual . ':B' . $linhaActual);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
					$ws->getStyle('A' . $linhaActual . ':B' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$ws->setCellValue('C' . $linhaActual, intval($idades / ($i - 1)));
					$ws->mergeCells('C' . $linhaActual . ':C' . $linhaActual);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
					$ws->getStyle('C' . $linhaActual . ':C' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
					$linhaActual++;
				}
				$ws->setBreak('A' . $linhaActual, PHPExcel_Worksheet::BREAK_ROW);
				$linhaActual++;
			}
			$this->out('Faculdade------------------------------' . $faculdadeNome);
			$ws->getHeaderFooter()->setOddFooter('&L&D  &RPagina &P de &N');
			$objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
			$objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'Estudantes' . DS . Inflector::slug($faculdadeNome) . '_' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
		}
	}

}
