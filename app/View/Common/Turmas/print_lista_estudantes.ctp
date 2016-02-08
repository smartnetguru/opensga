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
    while($totalPaginas>=$paginaActual) {


        $mudarpagina = false;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual, Configure::read('OpenSGA.instituicao.nome'));
        if ($paginaActual != 1) {
            $this->PhpExcel->xls->getActiveSheet()->mergeCells('A' . $linha_actual . ':E' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->duplicateStyle($this->PhpExcel->xls->getActiveSheet()->getStyle('A1'), 'A' . $linha_actual);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        }
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual,
            $inscricaos[0]['Turma']['Curso']['UnidadeOrganica']['name']);
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual, $inscricaos[0]['Turma']['Disciplina']['name']);
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual,
            "Ano Lectivo: " . $inscricaos[0]['Turma']['AnoLectivo']['ano'] . ". Semestre:" . $inscricaos[0]['Turma']['semestre_curricular']);
        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual, "LISTA DE ESTUDANTES INSCRITOS");
        $linha_actual++;
        $linha_actual++;
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual, "Docente:");
$linha_actual++;
        $linha_actual++;


        $styleArray = [
            'borders' => [
                'allborders' => [
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                ]
            ]
        ];
        foreach ($inscricaos as $inscricao) {
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('A' . $linha_actual, $i);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('B' . $linha_actual,
                $inscricao['Matricula']['Aluno']['codigo']);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('C' . $linha_actual,
                $inscricao['Matricula']['Aluno']['Entidade']['apelido']);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('D' . $linha_actual,
                $inscricao['Matricula']['Aluno']['Entidade']['nomes']);
            $this->PhpExcel->xls->getActiveSheet()->setCellValue('E' . $linha_actual,
                $inscricao['Matricula']['Aluno']['Entidade']['User']['username']);
            $this->PhpExcel->xls->getActiveSheet()->getStyle('A' . $linha_actual . ':E' . $linha_actual)->applyFromArray($styleArray);
            $linha_actual++;
            $i++;
            if($i%35==0){
                $this->PhpExcel->xls->getActiveSheet()->setBreak('A' . $linha_actual, PHPExcel_Worksheet::BREAK_ROW);
                $linha_actual++;
                break;
            }
        }


        //$this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png',
            //'A2', 10, 108, 115); //Logotipo

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
