<?php

    App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
    if (!class_exists('PHPExcel')) {
        throw new CakeException('Vendor class PHPExcel not found!');
    }

//die(debug($aluno));
    $this->PhpExcel->loadWorksheet(APP . 'Reports' . DS . 'Turmas' . DS . 'print_lista_estudantes.xlsx');


    $worksheet = $this->PhpExcel->xls->getActiveSheet();

    $linha_actual = 1;
    $i = 1;
    $paginaActual = 1;
    $linhaImagem = 0;
    $linhaBreak = 0;
    $linhaAlunos = 0;
    while ($totalPaginas >= $paginaActual) {


        $mudarpagina = false;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
            Configure::read('OpenSGA.instituicao.nome'));
        if ($paginaActual != 1) {
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('A' . $linha_actual . ':E' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A1'),
                'A' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
            $inscricaos[0]['UnidadeOrganica']['name']);
        if ($paginaActual != 1) {
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('A' . $linha_actual . ':E' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A2'),
                'A' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
            $inscricaos[0]['Disciplina']['name']);
        if ($paginaActual != 1) {
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('A' . $linha_actual . ':E' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A3'),
                'A' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual,
            "Ano Lectivo: " . $inscricaos[0]['AnoLectivo']['ano'] . ". Semestre:" . $inscricaos[0]['Turma']['semestre_curricular']);
        if ($paginaActual != 1) {
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('A' . $linha_actual . ':E' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A4'),
                'A' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, "LISTA DE ESTUDANTES INSCRITOS");
        if ($paginaActual != 1) {
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('A' . $linha_actual . ':E' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A6'),
                'A' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, "Docente:");
        if ($paginaActual != 1) {
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('A' . $linha_actual . ':B' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('C' . $linha_actual . ':E' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A8'),
                'A' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;


        $styleArrayTitulo = [
            'borders' => [
                'allborders' => [
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ],
            ],
        ];
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, 'No');
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linha_actual, 'Código');
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual, 'Apelido');
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual, 'Nomes');
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linha_actual, 'Email Institucional');
        $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->applyFromArray($styleArrayTitulo);
        $linha_actual++;
        $styleArray = [
            'borders' => [
                'allborders' => [
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ],
            ],
        ];

        while($linhaAlunos<count($inscricaos)){
            $inscricao = $inscricaos[$linhaAlunos];
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, $i);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linha_actual,
                $inscricao['Aluno']['codigo']);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual,
                $inscricao['Entidade']['apelido']);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual,
                $inscricao['Entidade']['nomes']);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linha_actual,
                $inscricao['User']['username']);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->applyFromArray($styleArray);
            $linha_actual++;
            $i++;
            $linhaAlunos++;
            if (($i - 1) % 35 == 0) {
                $linhaImagem = $linhaBreak + 2;
                $linhaBreak = $linhaBreak + 53;

                $this->PhpExcel->xls->getActiveSheet()->setBreak('A' . $linhaBreak, PHPExcel_Worksheet::BREAK_ROW);
                $linha_actual = $linhaBreak + 1;


                break;
            }
        }


        $this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png',
            'A' . $linhaImagem, 10, 108, 115); //Logotipo
        $linhaImagem = $linhaImagem + 44;

        $paginaActual++;

    }

    $this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Lista de Estudantes');
    $this->PhpExcel->xls->getActiveSheet()->setShowGridlines(false);


    $this->PhpExcel->xls->getSecurity()->setLockWindows(true);
    $this->PhpExcel->xls->getSecurity()->setLockStructure(true);
    $this->PhpExcel->xls->getSecurity()->setWorkbookPassword("PHPExcel");


    $this->PhpExcel->xls->getActiveSheet()->getProtection()->setPassword('PHPExcel');
    $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
    $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSort(true);
    $this->PhpExcel->xls->getActiveSheet()->getProtection()->setObjects(true);
    $this->PhpExcel->xls->getActiveSheet()->getProtection()->setInsertRows(true);
    $this->PhpExcel->xls->getActiveSheet()->getProtection()->setFormatCells(true);

    $this->PhpExcel->output('lista_estudantes_' . $inscricaos[0]['Turma']['name'] . '.xlsx');
