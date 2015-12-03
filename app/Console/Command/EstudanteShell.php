<?php

    ini_set('memory_limit', "2048M");
    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('AppShell', 'Console/Command');
    App::uses('CakeEmail', 'Network/Email');
    App::uses('OpenSGAAmazonS3', 'Lib');

    class EstudanteShell extends AppShell
    {

        public $uses = ['Aluno', 'Candidatura'];

        public function actualiza_matricula_condicional()
        {
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'matricula_condicional_20150707.xlsx');

            $worksheet = $xls->getActiveSheet();

            $resultado = $this->Aluno->actualizaMatriculaCondicionalFromFile($worksheet);

            return $resultado;

        }

        public function enviar_email_alerta_renovacao()
        {
            $this->Aluno->contain(['Entidade' => ['User']]);
            $alunos = $this->Aluno->find('all', ['conditions' => []]);
            foreach ($alunos as $aluno) {
                die(debug($aluno));
            }
            $email = new CakeEmail();
            $email->config('smtp')
                ->template('test_template', 'test_layout')//I'm assuming these were created
                ->emailFormat('html')
                ->to('elisio.leonardo@gmail.com')
                //->from(array('no-reply@example.com' => 'Example'))
                ->subject('I\'m just testing something');
            //->send();
        }

        public function estudantes_fora_tempo_estudos()
        {
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }


            $linhaUem = 1;
            $linhaFaculdade = 3;
            $linhaCurso = 4;
            $linhaTitulo = 5;
            $linhaC = 7;


            $faculdades = $this->Aluno->Curso->UnidadeOrganica->find('list',
                ['conditions' => ['tipo_unidade_organica_id' => 1]]);
            foreach ($faculdades as $faculdadeId => $faculdadeNome) {
                $linhaActual = 1;
                $departamentos = $this->Aluno->Curso->UnidadeOrganica->children($faculdadeId);
                $arrayDepartamentos = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
                $arrayDepartamentos[] = $faculdadeId;
                $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Estudantes' . DS . 'novos_ingressos_curso.xlsx');
                $ws = $xls->getActiveSheet();
                $paginaActual = 1;

                if ($faculdadeId == 2 || $faculdadeId == 9) {
                    $limiteEstudos = 8;
                } elseif ($faculdadeId == 17) {
                    $limiteEstudos = 9;
                } else {
                    $limiteEstudos = 7;
                }
                debug($arrayDepartamentos);
                sleep(3);
                $cursos = $this->Aluno->Curso->find('list',
                    ['conditions' => ['unidade_organica_id' => $arrayDepartamentos]]);
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
                    $ws->setCellValue('A' . $linhaActual, 'Estudantes Fora do Tempo de Estudos');
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
                    $ws->setCellValue('K' . $linhaActual, 'Ano de Ingresso');
                    if ($paginaActual != 1) {
                        $ws->mergeCells('K' . $linhaActual . ':K' . $linhaActual);
                        $ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                        $ws->duplicateStyle($ws->getStyle('K' . $linhaC), 'K' . $linhaActual);
                        $ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    }
                    $linhaActual++;
                    $this->Aluno->contain([
                            'Curso',
                            'Entidade' => [
                                'Genero'
                            ]
                        ]
                    );
                    $alunos = $this->Aluno->find('all', [
                        'conditions' => [
                            'Aluno.ano_ingresso <' => Configure::read('OpenSGA.ano_lectivo') - $limiteEstudos,
                            'curso_id'             => $cursoID,
                            'estado_aluno_id'      => [1, 11]
                        ]
                    ]);
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

                        $ws->setCellValue('K' . $linhaActual, $aluno['Aluno']['ano_ingresso']);

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
                $objWriter->save(Inflector::slug($faculdadeNome) . '.xlsx');
                $xls->disconnectWorksheets();
            }
        }

        /**
         * @throws CakeException
         * Exporta estudantes do novo ingresso para efeitos de autenticidade
         * @todo padronizar as condicoes do find do aluno
         * @todo Verificar onde o ficheiro eh gravado. Tem que ir para o save_path
         */
        public function exporta_estudantes_autenticidades()
        {
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'autenticidades2.xlsx');

            $worksheet = $xls->getActiveSheet();
//debug($xls->getActiveSheetIndex());
            $linhaActual = 2;

            $this->Aluno->contain([
                'AlunoNivelMedio' => [
                    'EscolaNivelMedio' => [
                        'Distrito' => [
                            'Provincia'
                        ]
                    ]
                ],
                'Entidade',
                'Curso'
            ]);
            $alunos = $this->Aluno->find('all', [
                'conditions' => [
                    'or' => [
                        'ano_ingresso'       => '2013',
                        'Aluno.codigo LIKE ' => '2013%'
                    ]
                ]
            ]);

            foreach ($alunos as $aluno) {
                $xls->getActiveSheet()->setCellValue('A' . $linhaActual, $aluno['Aluno']['codigo']);
                $xls->getActiveSheet()->setCellValue('B' . $linhaActual, $aluno['AlunoNivelMedio']['ano_conclusao']);
                $xls->getActiveSheet()->setCellValue('C' . $linhaActual, $aluno['AlunoNivelMedio']['nota_final']);
                $xls->getActiveSheet()->setCellValue('D' . $linhaActual,
                    $aluno['AlunoNivelMedio']['EscolaNivelMedio']['name']);
                $xls->getActiveSheet()->setCellValue('E' . $linhaActual, $aluno['Entidade']['name']);
                $xls->getActiveSheet()->setCellValue('F' . $linhaActual, $aluno['Entidade']['telemovel']);
                $xls->getActiveSheet()->setCellValue('G' . $linhaActual, $aluno['Entidade']['data_nascimento']);
                $xls->getActiveSheet()->setCellValue('H' . $linhaActual, $aluno['Entidade']['naturalidade']);
                $xls->getActiveSheet()->setCellValue('I' . $linhaActual, $aluno['Curso']['name']);
                $xls->getActiveSheet()->setCellValue('J' . $linhaActual,
                    $aluno['AlunoNivelMedio']['EscolaNivelMedio']['Distrito']['Provincia']['name']);
                $xls->getActiveSheet()->setCellValue('K' . $linhaActual,
                    $aluno['AlunoNivelMedio']['EscolaNivelMedio']['Distrito']['name']);

                $linhaActual++;
                $this->out($linhaActual);


            }


            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
            debug(getcwd());
            $objWriter->save('ficheiro.xlsx');
// clear memory
            $xls->disconnectWorksheets();
        }

        public function exporta_estudantes_bci()
        {
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'template_bci.xlsx');

            App::import('Vendor', 'phpqrcode', ['file' => 'phpqrcode' . DS . 'qrlib.php']);

            $worksheet = $xls->getActiveSheet();
            $linhaActual = 2;

            $this->Aluno->contain([
                'Entidade' => [
                    'PaisNascimento',
                    'EstadoCivil',
                    'Genero',
                ],
                'Curso'    => [
                    'UnidadeOrganica'
                ]
            ]);

            $unidadeOrganicas = $this->Aluno->Curso->UnidadeOrganica->getWithChilds(15);
            debug($unidadeOrganicas);

            $alunos = $this->Aluno->find('all', [
                'conditions' => [
                    'Curso.unidade_organica_id' => $unidadeOrganicas,
                    // 'Aluno.ano_ingresso NOT' => array(2015,2014)
                ],
                'order'      => 'Aluno.ano_ingresso DESC'
            ]);
            debug(count($alunos));
            foreach ($alunos as $aluno) {
                $xls->getActiveSheet()->setCellValue('A' . $linhaActual, $aluno['Aluno']['codigo']);
                $xls->getActiveSheet()->setCellValue('B' . $linhaActual,
                    strtoupper($this->removeAccents($aluno['Entidade']['name'])));
                $phpdate = strtotime($aluno['Entidade']['data_nascimento']);
                $xls->getActiveSheet()->setCellValue('C' . $linhaActual, date('d-m-Y', $phpdate));
                $xls->getActiveSheet()->setCellValue('D' . $linhaActual,
                    strtoupper($aluno['Entidade']['PaisNascimento']['iso3']));
                $xls->getActiveSheet()->setCellValue('E' . $linhaActual,
                    strtoupper($aluno['Entidade']['naturalidade']));
                $xls->getActiveSheet()->setCellValue('F' . $linhaActual,
                    strtoupper($this->removeAccents($aluno['Entidade']['nome_pai'])));
                $xls->getActiveSheet()->setCellValue('G' . $linhaActual,
                    strtoupper($this->removeAccents($aluno['Entidade']['nome_mae'])));
                $xls->getActiveSheet()->setCellValue('H' . $linhaActual,
                    $aluno['Entidade']['documento_identificacao_numero']);
                $phpdate2 = strtotime($aluno['Entidade']['documento_identificacao_data_emissao']);
                $xls->getActiveSheet()->setCellValue('I' . $linhaActual, date('d-m-Y', $phpdate2));

                $xls->getActiveSheet()->setCellValue('J' . $linhaActual, $aluno['Entidade']['EstadoCivil']['name']);
                $endereco = $this->Aluno->Entidade->getMorada($aluno['Entidade']['id']);
                debug($endereco);
                $xls->getActiveSheet()->setCellValue('L' . $linhaActual, $endereco['string']);
                $xls->getActiveSheet()->setCellValue('M' . $linhaActual, $aluno['Entidade']['telemovel']);

                $genero = $aluno['Entidade']['genero_id'];
                if ($genero == 1) {
                    $xls->getActiveSheet()->setCellValue('O' . $linhaActual, 'M');
                } elseif ($genero == 2) {
                    $xls->getActiveSheet()->setCellValue('O' . $linhaActual, 'F');
                }

                $xls->getActiveSheet()->setCellValue('P' . $linhaActual, 'UEM');

                $unidade_organica = $aluno['Curso']['UnidadeOrganica'];
                $faculdade = $unidade_organica;
                if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                    $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                    $faculdade = $unidade_organica_nova['UnidadeOrganica'];
                }
                $xls->getActiveSheet()->setCellValue('Q' . $linhaActual, strtoupper($faculdade['codigo']));

                $xls->getActiveSheet()->setCellValue('R' . $linhaActual, strtoupper($aluno['Curso']['name']));
                $xls->getActiveSheet()->setCellValue('S' . $linhaActual, 'L');
                $AmazonS3 = new OpenSGAAmazonS3();

                $file = '/Fotos/Estudantes/' . $aluno['Aluno']['ano_ingresso'] . '/' . $aluno['Aluno']['codigo'] . '.jpg';
                if (!$signedUrl = $AmazonS3->getSignedUrl($file)) {

                    $this->out($file);
                } else {

                    $foto = $AmazonS3->getObject($file, 'siga.uem.mz',
                        '/home/backstageel/fotos/' . $aluno['Aluno']['codigo'] . '.jpeg');

                    $foto2 = '/home/backstageel/fotos2/' . $aluno['Aluno']['codigo'] . '.jpeg';
                    $original_info = getimagesize($foto);
                    $original_w = $original_info[0];
                    $original_h = $original_info[1];
                    $original_img = imagecreatefromjpeg($foto);
                    $thumb_w = 300;
                    $thumb_h = 300;
                    $thumb_img = imagecreatetruecolor($thumb_w, $thumb_h);
                    imagecopyresampled($thumb_img, $original_img,
                        0, 0,
                        0, 0,
                        $thumb_w, $thumb_h,
                        $original_w, $original_h);
                    imagejpeg($thumb_img, $foto2);
                    imagedestroy($thumb_img);
                    imagedestroy($original_img);

                    $info = getimagesize($foto2);


                }


                /**
                 * $type = pathinfo($file_path, PATHINFO_EXTENSION);
                 * if (file_exists($file_path)) {
                 * $file_codigo = file_get_contents($file_path);
                 * $base64 = 'data:image/' . $type . ';base64,' . base64_encode($file_codigo);
                 * debug($base64);
                 * $xls->getActiveSheet()->setCellValue('U' . $linhaActual, $base64);
                 * }
                 *
                 *
                 * $path = APP . 'Assets' . DS . 'QRCodes' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;
                 * $file_path = $path . $aluno['Aluno']['codigo'] . '.jpg';
                 * $type = pathinfo($file_path, PATHINFO_EXTENSION);
                 * if (file_exists($file_path)) {
                 * $file_codigo = file_get_contents($file_path);
                 * $base64 = 'data:image/' . $type . ';base64,' . base64_encode($file_codigo);
                 * debug($base64);
                 * $xls->getActiveSheet()->setCellValue('T' . $linhaActual, $base64);
                 * } else {
                 * $path = APP . 'Assets' . DS . 'QRCodes' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;
                 * if (!is_dir($path)) {
                 * mkdir($path, 0777, true);
                 * }
                 * $file_path = $path . $aluno['Aluno']['codigo'] . '.png';
                 * QRcode::png($aluno['Aluno']['codigo'], $file_path, 'L', 4, 2);
                 * $type = pathinfo($file_path, PATHINFO_EXTENSION);
                 * if (file_exists($file_path)) {
                 * $file_codigo = file_get_contents($file_path);
                 * $base64 = 'data:image/' . $type . ';base64,' . base64_encode($file_codigo);
                 * debug($base64);
                 * $xls->getActiveSheet()->setCellValue('T' . $linhaActual, $base64);
                 * }
                 * }

                 */
                $this->out($linhaActual);
                $linhaActual++;


            }


            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('template_bci_' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
        }

        function removeAccents($str)
        {
            $a = [
                'À',
                'Á',
                'Â',
                'Ã',
                'Ä',
                'Å',
                'Æ',
                'Ç',
                'È',
                'É',
                'Ê',
                'Ë',
                'Ì',
                'Í',
                'Î',
                'Ï',
                'Ð',
                'Ñ',
                'Ò',
                'Ó',
                'Ô',
                'Õ',
                'Ö',
                'Ø',
                'Ù',
                'Ú',
                'Û',
                'Ü',
                'Ý',
                'ß',
                'à',
                'á',
                'â',
                'ã',
                'ä',
                'å',
                'æ',
                'ç',
                'è',
                'é',
                'ê',
                'ë',
                'ì',
                'í',
                'î',
                'ï',
                'ñ',
                'ò',
                'ó',
                'ô',
                'õ',
                'ö',
                'ø',
                'ù',
                'ú',
                'û',
                'ü',
                'ý',
                'ÿ',
                'Ā',
                'ā',
                'Ă',
                'ă',
                'Ą',
                'ą',
                'Ć',
                'ć',
                'Ĉ',
                'ĉ',
                'Ċ',
                'ċ',
                'Č',
                'č',
                'Ď',
                'ď',
                'Đ',
                'đ',
                'Ē',
                'ē',
                'Ĕ',
                'ĕ',
                'Ė',
                'ė',
                'Ę',
                'ę',
                'Ě',
                'ě',
                'Ĝ',
                'ĝ',
                'Ğ',
                'ğ',
                'Ġ',
                'ġ',
                'Ģ',
                'ģ',
                'Ĥ',
                'ĥ',
                'Ħ',
                'ħ',
                'Ĩ',
                'ĩ',
                'Ī',
                'ī',
                'Ĭ',
                'ĭ',
                'Į',
                'į',
                'İ',
                'ı',
                'Ĳ',
                'ĳ',
                'Ĵ',
                'ĵ',
                'Ķ',
                'ķ',
                'Ĺ',
                'ĺ',
                'Ļ',
                'ļ',
                'Ľ',
                'ľ',
                'Ŀ',
                'ŀ',
                'Ł',
                'ł',
                'Ń',
                'ń',
                'Ņ',
                'ņ',
                'Ň',
                'ň',
                'ŉ',
                'Ō',
                'ō',
                'Ŏ',
                'ŏ',
                'Ő',
                'ő',
                'Œ',
                'œ',
                'Ŕ',
                'ŕ',
                'Ŗ',
                'ŗ',
                'Ř',
                'ř',
                'Ś',
                'ś',
                'Ŝ',
                'ŝ',
                'Ş',
                'ş',
                'Š',
                'š',
                'Ţ',
                'ţ',
                'Ť',
                'ť',
                'Ŧ',
                'ŧ',
                'Ũ',
                'ũ',
                'Ū',
                'ū',
                'Ŭ',
                'ŭ',
                'Ů',
                'ů',
                'Ű',
                'ű',
                'Ų',
                'ų',
                'Ŵ',
                'ŵ',
                'Ŷ',
                'ŷ',
                'Ÿ',
                'Ź',
                'ź',
                'Ż',
                'ż',
                'Ž',
                'ž',
                'ſ',
                'ƒ',
                'Ơ',
                'ơ',
                'Ư',
                'ư',
                'Ǎ',
                'ǎ',
                'Ǐ',
                'ǐ',
                'Ǒ',
                'ǒ',
                'Ǔ',
                'ǔ',
                'Ǖ',
                'ǖ',
                'Ǘ',
                'ǘ',
                'Ǚ',
                'ǚ',
                'Ǜ',
                'ǜ',
                'Ǻ',
                'ǻ',
                'Ǽ',
                'ǽ',
                'Ǿ',
                'ǿ',
                'Ά',
                'ά',
                'Έ',
                'έ',
                'Ό',
                'ό',
                'Ώ',
                'ώ',
                'Ί',
                'ί',
                'ϊ',
                'ΐ',
                'Ύ',
                'ύ',
                'ϋ',
                'ΰ',
                'Ή',
                'ή'
            ];
            $b = [
                'A',
                'A',
                'A',
                'A',
                'A',
                'A',
                'AE',
                'C',
                'E',
                'E',
                'E',
                'E',
                'I',
                'I',
                'I',
                'I',
                'D',
                'N',
                'O',
                'O',
                'O',
                'O',
                'O',
                'O',
                'U',
                'U',
                'U',
                'U',
                'Y',
                's',
                'a',
                'a',
                'a',
                'a',
                'a',
                'a',
                'ae',
                'c',
                'e',
                'e',
                'e',
                'e',
                'i',
                'i',
                'i',
                'i',
                'n',
                'o',
                'o',
                'o',
                'o',
                'o',
                'o',
                'u',
                'u',
                'u',
                'u',
                'y',
                'y',
                'A',
                'a',
                'A',
                'a',
                'A',
                'a',
                'C',
                'c',
                'C',
                'c',
                'C',
                'c',
                'C',
                'c',
                'D',
                'd',
                'D',
                'd',
                'E',
                'e',
                'E',
                'e',
                'E',
                'e',
                'E',
                'e',
                'E',
                'e',
                'G',
                'g',
                'G',
                'g',
                'G',
                'g',
                'G',
                'g',
                'H',
                'h',
                'H',
                'h',
                'I',
                'i',
                'I',
                'i',
                'I',
                'i',
                'I',
                'i',
                'I',
                'i',
                'IJ',
                'ij',
                'J',
                'j',
                'K',
                'k',
                'L',
                'l',
                'L',
                'l',
                'L',
                'l',
                'L',
                'l',
                'l',
                'l',
                'N',
                'n',
                'N',
                'n',
                'N',
                'n',
                'n',
                'O',
                'o',
                'O',
                'o',
                'O',
                'o',
                'OE',
                'oe',
                'R',
                'r',
                'R',
                'r',
                'R',
                'r',
                'S',
                's',
                'S',
                's',
                'S',
                's',
                'S',
                's',
                'T',
                't',
                'T',
                't',
                'T',
                't',
                'U',
                'u',
                'U',
                'u',
                'U',
                'u',
                'U',
                'u',
                'U',
                'u',
                'U',
                'u',
                'W',
                'w',
                'Y',
                'y',
                'Y',
                'Z',
                'z',
                'Z',
                'z',
                'Z',
                'z',
                's',
                'f',
                'O',
                'o',
                'U',
                'u',
                'A',
                'a',
                'I',
                'i',
                'O',
                'o',
                'U',
                'u',
                'U',
                'u',
                'U',
                'u',
                'U',
                'u',
                'U',
                'u',
                'A',
                'a',
                'AE',
                'ae',
                'O',
                'o',
                'Α',
                'α',
                'Ε',
                'ε',
                'Ο',
                'ο',
                'Ω',
                'ω',
                'Ι',
                'ι',
                'ι',
                'ι',
                'Υ',
                'υ',
                'υ',
                'υ',
                'Η',
                'η'
            ];

            return str_replace($a, $b, $str);
        }

        public function exporta_estudantes_dbsec()
        {
            \error_reporting(0);
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }
            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Faculdades' . DS . 'import_estudantes.xlsx');
            $worksheet = $xls->getActiveSheet();

            $this->Aluno->contain([
                'Entidade' => [
                    'Genero',
                    'PaisNascimento',
                    'User'
                ],
                'Curso'    => [
                    'UnidadeOrganica'
                ]
            ]);
            $alunos = $this->Aluno->find('all', [
                'conditions' => [
                    'Aluno.ano_ingresso' => 2015,
                    "NOT"                => ['Aluno.codigo' => null]
                ]
            ]);
            $totalAlunos = count($alunos);
            $linhaActual = 2;
            foreach ($alunos as $aluno) {
                $xls->getActiveSheet()->setCellValue('A' . $linhaActual, $aluno['Aluno']['codigo']);
                if (!$aluno['Entidade']['apelido']) {
                    $aluno['Entidade']['apelido'] = '..';
                }
                $xls->getActiveSheet()->setCellValue('B' . $linhaActual, $aluno['Entidade']['apelido']);
                $xls->getActiveSheet()->setCellValue('C' . $linhaActual, $aluno['Entidade']['nomes']);
                $bi = $this->Aluno->Entidade->getNumeroDocumentoIdentificacao($aluno['Entidade']['id']);
                $xls->getActiveSheet()->setCellValue('D' . $linhaActual, $bi);
                $xls->getActiveSheet()->setCellValue('E' . $linhaActual, $aluno['Entidade']['data_nascimento']);
                $xls->getActiveSheet()->setCellValue('F' . $linhaActual, $aluno['Aluno']['ano_ingresso']);
                $morada = $this->Aluno->Entidade->getMorada($aluno['Entidade']['id']);
                $morada = '0A';
                $xls->getActiveSheet()->setCellValue('G' . $linhaActual, $morada);
                $telefone = $this->Aluno->Entidade->getCellNumber($aluno['Entidade']['id']);
                if (!$telefone) {
                    $telefone = '0A';
                }
                $xls->getActiveSheet()->setCellValue('H' . $linhaActual, $telefone);
                $xls->getActiveSheet()->setCellValue('I' . $linhaActual, $telefone);
                $xls->getActiveSheet()->setCellValue('J' . $linhaActual, $aluno['Curso']['codigo']);
                if (!$aluno['Entidade']['PaisNascimento']['name']) {
                    $aluno['Entidade']['PaisNascimento']['name'] = '0A';
                }
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
                $xls->getActiveSheet()->setCellValue('R' . $linhaActual, $aluno['Curso']['name']);
                $this->out($totalAlunos-- . "---" . $aluno['Aluno']['codigo']);
                $linhaActual++;
            }

            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
            $objWriter->save('import_' . date('Y_m_d') . '.xlsx');
        }

        public function exporta_estudantes_finalistas()
        {
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }


            $linhaUem = 1;
            $linhaFaculdade = 3;
            $linhaCurso = 4;
            $linhaTitulo = 5;
            $linhaC = 7;


            $faculdades = $this->Aluno->Curso->UnidadeOrganica->find('list',
                ['conditions' => ['tipo_unidade_organica_id' => 1]]);
            foreach ($faculdades as $faculdadeId => $faculdadeNome) {
                $linhaActual = 1;
                $departamentos = $this->Aluno->Curso->UnidadeOrganica->children($faculdadeId);
                $arrayDepartamentos = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
                $arrayDepartamentos[] = $faculdadeId;
                $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Estudantes' . DS . 'novos_ingressos_curso.xlsx');
                $ws = $xls->getActiveSheet();
                $paginaActual = 1;

                if ($faculdadeId == 2 || $faculdadeId == 9) {
                    $limiteEstudos = 8;
                } elseif ($faculdadeId == 17) {
                    $limiteEstudos = 9;
                } else {
                    $limiteEstudos = 7;
                }
                debug($arrayDepartamentos);
                sleep(3);
                $cursos = $this->Aluno->Curso->find('list',
                    ['conditions' => ['unidade_organica_id' => $arrayDepartamentos]]);
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
                    $ws->setCellValue('A' . $linhaActual, 'Estudantes Fora do Tempo de Estudos');
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
                    $ws->setCellValue('K' . $linhaActual, 'Ano de Ingresso');
                    if ($paginaActual != 1) {
                        $ws->mergeCells('K' . $linhaActual . ':K' . $linhaActual);
                        $ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                        $ws->duplicateStyle($ws->getStyle('K' . $linhaC), 'K' . $linhaActual);
                        $ws->getStyle('K' . $linhaActual . ':K' . $linhaActual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    }
                    $linhaActual++;
                    $this->Aluno->contain([
                            'Curso',
                            'Entidade' => [
                                'Genero'
                            ]
                        ]
                    );
                    $alunos = $this->Aluno->find('all', [
                        'conditions' => [
                            'Aluno.ano_ingresso' => Configure::read('OpenSGA.ano_lectivo') - $limiteEstudos,
                            'curso_id'             => $cursoID,
                            'estado_aluno_id'      => [1, 11]
                        ]
                    ]);
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

                        $ws->setCellValue('K' . $linhaActual, $aluno['Aluno']['ano_ingresso']);

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
                $objWriter->save(Inflector::slug($faculdadeNome) . '.xlsx');
                $xls->disconnectWorksheets();
            }
        }



        public function exporta_fora_tempo_estudos_ano()
        {

            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'tempo_estudos.xlsx');

            $worksheet = $xls->getActiveSheet();

            $anoLectivo = 2015;
            $linhaActual = 3;


            $cursos = $this->Aluno->Curso->find('all');
            foreach ($cursos as $curso) {
                $faculdadeId = $curso['Curso']['unidade_organica_id'];
                if ($faculdadeId == 2 || $faculdadeId == 9) {
                    $limiteEstudos = 8;
                } elseif ($faculdadeId == 17) {
                    $limiteEstudos = 9;
                } else {
                    $limiteEstudos = 7;
                }
                $novosIngressos = $this->Aluno->find('count', [
                    'conditions' => [
                        'ano_ingresso' => $anoLectivo,
                        'curso_id'     => $curso['Curso']['id']
                    ]
                ]);
                $foraTempo = $this->Aluno->find('count', [
                    'conditions' => [
                        'ano_ingresso <
             '                     => $anoLectivo - $limiteEstudos,
                        'curso_id' => $curso['Curso']['id']
                    ]
                ]);

                $dentroTempo = $this->Aluno->find('count', [
                    'conditions' => [
                        'ano_ingresso >='
                                   => $anoLectivo - $limiteEstudos,
                        'curso_id' => $curso['Curso']['id']
                    ]
                ]);

                $xls->getActiveSheet()->setCellValue('A' . $linhaActual, $curso['Curso']['name']);
                $xls->getActiveSheet()->setCellValue('B' . $linhaActual, $novosIngressos);
                $xls->getActiveSheet()->setCellValue('C' . $linhaActual, $dentroTempo);
                $xls->getActiveSheet()->setCellValue('D' . $linhaActual, $foraTempo);
                $xls->getActiveSheet()->setCellValue('E' . $linhaActual, $limiteEstudos - 3);
                $linhaActual++;
                debug($curso);
                debug($novosIngressos);
                debug($foraTempo);
                debug($dentroTempo);


            }
            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('estudantes_fora_tempo_' . $anoLectivo . '.xlsx');


        }

        public function exporta_novos_ingressos_por_curso()
        {
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }


            $faculdades = $this->Aluno->Curso->UnidadeOrganica->find('list',
                ['conditions' => ['tipo_unidade_organica_id' => 1]]);
            foreach ($faculdades as $faculdadeId => $faculdadeNome) {
                $linhaUem = 1;
                $linhaFaculdade = 3;
                $linhaCurso = 4;
                $linhaTitulo = 5;
                $linhaC = 7;

                $linhaActual = 1;
                $departamentos = $this->Aluno->Curso->UnidadeOrganica->children($faculdadeId);
                $arrayDepartamentos = Hash::extract($departamentos, '{n}.UnidadeOrganica.id');
                $arrayDepartamentos[] = $faculdadeId;
                $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Estudantes' . DS . 'novos_ingressos_curso.xlsx');
                $ws = $xls->getActiveSheet();
                $paginaActual = 1;

                $cursos = $this->Aluno->Curso->find('list',
                    ['conditions' => ['unidade_organica_id' => $arrayDepartamentos]]);
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
                    $this->Aluno->contain([
                            'Curso',
                            'Entidade' => [
                                'Genero'
                            ]
                        ]
                    );
                    $alunos = $this->Aluno->find('all', [
                        'conditions' => [
                            'Aluno.ano_ingresso' => Configure::read('OpenSGA.ano_lectivo'),
                            'curso_id'           => $cursoID
                        ]
                    ]);
                    debug($this->Aluno->lastQuery());
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


                        $ws->setCellValue('L' . $linhaActual, $aluno['Entidade']['telemovel']);
                        $ws->setCellValue('M' . $linhaActual, $aluno['Entidade']['email']);

                        $ws->setCellValue('O' . $linhaActual, $aluno['Entidade']['data_nascimento']);

                        $this->Candidatura->contain('ProvinciaCandidatura');

                        $candidato = $this->Candidatura->findByNumeroEstudante($aluno['Aluno']['codigo']);
                        if ($candidato) {

                            $ws->setCellValue('N' . $linhaActual, $candidato['ProvinciaCandidatura']['name']);
                        }


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
                $objWriter->save(Configure::read('OpenSGA.save_path') . DS . 'Estudantes' . DS . Configure::read('OpenSGA.ano_lectivo') . DS . Inflector::slug($faculdadeNome) . '.xlsx');
            }
        }

        public function gera_referencia_renovacao()
        {
            $this->Aluno->contain();

            $alunos = $this->Aluno->find('all', [
                'conditions' => [
                    'OR' => [
                        'Aluno.referencia_renovacao is
            null',
                        'Aluno.referencia_renovacao' => ''
                    ]
                ]
            ]);
            $total = count($alunos);

            foreach ($alunos as $aluno) {
                if ($referencia = $this->Aluno->geraReferenciaRenovacao($aluno['Aluno']['id'])) {
                    $this->out($total-- . '----------' . $referencia);
                }
            }

        }

        public function importa_novos_ingressos()
        {
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
            $this->Aluno->contain([
                'Entidade'        => [
                    'User',
                    'EntidadeIdentificacao',
                    'EntidadeContacto'
                ],
                'AlunoNivelMedio' => [
                    'EscolaNivelMedio'
                ],
                'Matricula',
                'HistoricoCurso',
                'Curso'
            ]);
            $alunos = $this->Aluno->find('all',
                ['conditions' => ['Aluno.ano_ingresso' => Configure::read('OpenSGA.ano_lectivo')]]);
            $totalAlunos = count($alunos);
            foreach ($alunos as $aluno) {
                $arrayAluno = [
                    'User'                  => [
                        'username'             => $aluno['Entidade']['User']['username'],
                        'password'             => $aluno['Entidade']['User']['password'],
                        'codigocartao'         => $aluno['Aluno']['codigo'],
                        'name'                 => $aluno['Entidade']['name'],
                        'group_id'             => 3,
                        'verificar_permissoes' => 1,
                        'estado_email'         => 0,
                        'estado_objecto_id'    => 1,
                        'timezone'             => 'Africa/Maputo',
                        'created'              => $aluno['Entidade']['User']['created'],
                        'modified'             => $aluno['Entidade']['User']['modified'],
                        'created_by'           => $aluno['Entidade']['User']['created_by'],
                        'modified_by'          => $aluno['Entidade']['User']['modified_by'],
                    ],
                    'Aluno'                 => [
                        'numero_estudante'           => $aluno['Aluno']['codigo'],
                        'codigo'                     => $aluno['Aluno']['codigo'],
                        //'numero_estudante_antigo' => $aluno['Aluno']['numero_estudante_antigo'],
                        'certificado_nivel_anterior' => $aluno['Aluno']['certificado_nivel_anterior'],
                        'recenseamento_militar'      => $aluno['Aluno']['recenseamento_militar'],
                        'nome_emergencia'            => $aluno['Aluno']['nome_emergencia'],
                        'telemovel_emergencia'       => $aluno['Aluno']['telemovel_emergencia'],
                        'parentesco_encarregado'     => $aluno['Aluno']['parentesco_encarregado'],
                        'curso_id'                   => $aluno['Aluno']['curso_id'],
                        'unidade_organica_id'        => $aluno['Curso']['unidade_organica_id'],
                        'aluno_via_admissao_id'      => $aluno['Aluno']['aluno_via_admissao_id'],
                        'ano_ingresso'               => $aluno['Aluno']['ano_ingresso'],
                        'created'                    => $aluno['Aluno']['created'],
                        'modified'                   => $aluno['Aluno']['modified'],
                        'created_by'                 => $aluno['Aluno']['created_by'],
                        'modified_by'                => $aluno['Aluno']['modified_by'],
                    ],
                    'Entidade'              => [
                        'name'                 => $aluno['Entidade']['name'],
                        'apelido'              => $aluno['Entidade']['apelido'],
                        'nomes'                => $aluno['Entidade']['nomes'],
                        'genero_id'            => $aluno['Entidade']['genero_id'],
                        'data_nascimento'      => $aluno['Entidade']['data_nascimento'],
                        'estado_civil'         => $aluno['Entidade']['estado_civil'],
                        'nome_pai'             => $aluno['Entidade']['nome_pai'],
                        'nome_mae'             => $aluno['Entidade']['nome_mae'],
                        'naturalidade'         => $aluno['Entidade']['naturalidade'],
                        'pais_nascimento'      => $aluno['Entidade']['pais_nascimento'],
                        'provincia_nascimento' => $aluno['Entidade']['provincia_nascimento'],
                        'cidade_nascimento'    => $aluno['Entidade']['cidade_nascimento'],
                        'created'              => $aluno['Entidade']['created'],
                        'modified'             => $aluno['Entidade']['modified'],
                        'created_by'           => $aluno['Entidade']['created_by'],
                        'modified_by'          => $aluno['Entidade']['modified_by'],
                    ],
                    'AlunoNivelMedio'       => [
                        'EscolaNivelMedio'      => [
                            'pais_id'      => $aluno['AlunoNivelMedio']['EscolaNivelMedio']['pais_id'],
                            'provincia_id' => $aluno['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id'],
                            'distrito_id'  => $aluno['AlunoNivelMedio']['EscolaNivelMedio']['distrito_id']
                        ],
                        'escola_nivel_medio_id' => $aluno['AlunoNivelMedio']['escola_nivel_medio_id'],
                        'ano_conclusao'         => $aluno['AlunoNivelMedio']['ano_conclusao'],
                        'nota_final'            => $aluno['AlunoNivelMedio']['nota_final'],
                        'nova_escola_anterior'  => ''
                    ],
                    'EntidadeIdentificacao' => [
                        'documento_identificacao_id' => $aluno['Entidade']['EntidadeIdentificacao'][0]['documento_identificacao_id'],
                        'numero'                     => $aluno['Entidade']['EntidadeIdentificacao'][0]['numero'],
                        'local_emissao'              => $aluno['Entidade']['EntidadeIdentificacao'][0]['local_emissao'],
                        'data_emissao'               => $aluno['Entidade']['EntidadeIdentificacao'][0]['data_emissao'],
                        'data_validade'              => $aluno['Entidade']['EntidadeIdentificacao'][0]['data_validade']
                    ],
                    'Dados'                 => [
                        'user_id' => $aluno['Aluno']['created_by'],
                    ]
                ];

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

        public function verifica_passwords()
        {
            $this->Aluno->contain(['Entidade' => ['User' => ['conditions' => ['User.ultimo_login is null']]]]);

            $alunos = $this->Aluno->find('all', ['conditions' => ['Aluno.codigo' => 20134203]]);
            $total = count($alunos);
            debug($total);
            foreach ($alunos as $aluno) {

                $ultimo_login = $aluno['Entidade']['User']['ultimo_login'];
                debug($ultimo_login);
                if ($ultimo_login == null) {
                    $password = $aluno['Entidade']['User']['password'];
                    $codigo = $aluno['Aluno']['codigo'];
                    if (crypt($codigo, $password) == $password) {

                        $this->out($total-- . '------------------------------------Apanhamos');
                    } else {
                        $novaPassword = Security::hash($codigo, 'blowfish');
                        $this->Aluno->Entidade->User->id = $aluno['Entidade']['user_id'];
                        $this->Aluno->Entidade->User->set('password', $novaPassword);
                        $this->Aluno->Entidade->User->save();
                        $this->out($total-- . '--------------------------------------Alterando');
                    }
                }

            }

        }




        public function projeccaoGraduados(){
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS .'Estudantes'.DS. 'projeccao.xlsx');

            $worksheet = $xls->getActiveSheet();
            $linhaActual = 4;

            $anoInicio = 2016;
            $anoFim = 2020;
            $anoBase = 2015;

            $cursos = [40=>40,54=>54,130=>130,131=>131];

            foreach($cursos as $k=>$v){
                $this->Aluno->Curso->contain(['GrauAcademico']);
                $curso = $this->Aluno->Curso->findById($k);
                $xls->getActiveSheet()->setCellValue('A' . $linhaActual, 'Universidade Eduardo Mondlane');
                $xls->getActiveSheet()->setCellValue('B' . $linhaActual, 'Cidade de Maputo');
                $xls->getActiveSheet()->setCellValue('C' . $linhaActual, $curso['Curso']['name']);

                $anoCriacao = $curso['Curso']['ano_criacao'];
                if(!$anoCriacao){
                    $xls->getActiveSheet()->setCellValue('D' . $linhaActual, '');
                } else{
                    $xls->getActiveSheet()->setCellValue('D' . $linhaActual, $curso['Curso']['ano_criacao']);
                }

                $xls->getActiveSheet()->setCellValue('E' . $linhaActual, $curso['GrauAcademico']['name']);

                if(!empty($curso['Curso']['duracao'])){
                    $xls->getActiveSheet()->setCellValue('F' . $linhaActual, $curso['Curso']['duracao']*2);
                } else{
                    die($this->out($curso['Curso']['name'].'------Sem Duracao----------'.$curso['Curso']['id']));
                }

                $totalTurmas = $this->Aluno->find('count',['fields'=>'ano_ingresso','group'=>'ano_ingresso','conditions'=>['curso_id'=>$k,'estado_aluno_id'=>[1,11,14]]]);
                $xls->getActiveSheet()->setCellValue('G' . $linhaActual, $totalTurmas);
                $totalMatriculados = $this->Aluno->find('count',['conditions'=>['curso_id'=>$k,'estado_aluno_id'=>[1,11,14]]]);
                $xls->getActiveSheet()->setCellValue('H' . $linhaActual, $totalMatriculados);

                $duracao = $curso['Curso']['duracao'];

                $ingressoBase = $anoBase-$duracao;
                $totalIngressoBase = $totalMatriculados = $this->Aluno->find('count',['conditions'=>['curso_id'=>$k,'ano_ingresso'=>$ingressoBase]]);

                debug($totalIngressoBase);

                $this->Aluno->contain(['HistoricoCurso'=>['conditions'=>['ano_fim'=>$anoBase,'curso_id'=>$k]]]);
                $graduadosBase = $totalMatriculados = $this->Aluno->find('all',['conditions'=>['curso_id'=>$k,'estado_aluno_id'=>3]]);
                $totalGraduadosBase = 0;
                foreach($graduadosBase as $graduado){
                    if(!empty($graduado['HistoricoCurso'])){
                        $totalGraduadosBase++;
                    }
                }
                //$percentagem = $totalGraduadosBase/$totalIngressoBase*100;
                $this->out($curso['Curso']['name'].'---Graduados: '.$totalGraduadosBase.'---Ingressos: '.$totalIngressoBase.'---Ano: '.$anoBase.'--%: '.$percentagem);




                $letrasSeguintes = ['I','J','K','L','M'];
                $contadorLetras = 0;
                for($ano=$anoInicio;$ano<=$anoFim;$ano++){

                    $anoIngresso = $ano-$duracao;

                    $totalIngresso = $totalMatriculados = $this->Aluno->find('count',['conditions'=>['curso_id'=>$k,'ano_ingresso'=>$anoIngresso]]);

                    //Controlar Coeficiente
                    $xls->getActiveSheet()->setCellValue($letrasSeguintes[$contadorLetras] . $linhaActual, round($totalIngresso));
                    $contadorLetras++;

                }




                $linhaActual++;
            }



            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('projeccao_' . Configure::read('OpenSGA.ano_lectivo') . '.xlsx');
        }


    }
